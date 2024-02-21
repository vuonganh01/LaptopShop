<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use \DB;
use \Str;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('categories.index', compact('categories'));
    }

    public function create() {
        return view('categories.create');
    }

    public function store(Request $request) {
        $category = $request->only('name', 'description');
        $slug = Str::slug($request->name);
        $category['slug'] = $slug;
        $category['created_at'] = now();
        $validated = $request->validate([
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg, png, jpg, gif, svg',
            'description' => 'required'
        ]);

        $fileName = $request->name. rand(1,1000). time(). '.' .$request->file('img')->extension();

        $request->file('img')->storeAs('public/category', $fileName);

        $imgPath = 'storage/category/'.$fileName;
        $category['img'] = $imgPath;
        if(Category::create($category)) {
            return redirect()->route('category.index')->with('success', 'Tạo mới thành công');
        }
        return redirect()->route('category.index')->with('error', 'Tạo mới không thành công');   
    }

    public function edit(Request $request, Category $category) {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            // 'img' => 'sometimes|image|mimes:jpeg, png, jpg, gif, svg',
            'img' => 'sometimes|image|mimes:jpeg,png,jpg,gif'
        ]);
        $data = $request->only('name', 'description');
        $data['slug'] = Str::slug($data['name']);
        $data['updated_at'] = now();
        
        if($request->img) {
            $fileName = $request->name. rand(1,1000). time(). '.' .$request->file('img')->extension();

            $request->file('img')->storeAs('public/category', $fileName);

            $imgPath = 'storage/category/'.$fileName;
            $data['img'] = $imgPath;
            // $data['img'] = $request->img;
        }
        if($category->update($data)) {
            return redirect()->route('category.index')->with('success', "Cập nhật thành công");
        }
        return redirect()->back();
    }

    public function destroy(Category $category) {
        if($category->delete()) {
            return redirect()->back()->with('success', 'Xoá thành công');
        }

        return redirect()->back()->with('success', 'Xoá thất bại'); 
    }
}
