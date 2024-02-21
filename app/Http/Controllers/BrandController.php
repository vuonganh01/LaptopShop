<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use \DB;
use \Str;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $brand = $request->only('name', 'description', 'img');
        $slug = Str::slug($request->name);
        $brand['slug'] = $slug;
        $brand['created_at'] = now();
        $validated = $request->validate([
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required'
        ]);

        $fileName = $request->name . rand(1, 1000) . time() . '.' . $request->file('img')->extension();

        $request->file('img')->storeAs('public/brand', $fileName);

        $imgPath = 'storage/brand/' . $fileName;
        $brand['img'] = $imgPath;
        if (Brand::create($brand)) {
            return redirect()->route('brand.index')->with('success', 'Tạo mới thành công');
        }
        return redirect()->route('brand.index')->with('error', 'Tạo mới không thành công');
    }

    public function edit(Request $request, Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            // 'img' => 'sometimes|image|mimes:jpeg, png, jpg, gif, svg',
            'img' => 'sometimes|image|mimes:jpeg,png,jpg,gif'
        ]);
        $data = $request->only('name', 'description');
        $data['slug'] = Str::slug($data['name']);
        $data['updated_at'] = now();

        if ($request->img) {
            $fileName = $request->name . rand(1, 1000) . time() . '.' . $request->file('img')->extension();

            $request->file('img')->storeAs('public/brand', $fileName);

            $imgPath = 'storage/brand/' . $fileName;
            $data['img'] = $imgPath;
            // $data['img'] = $request->img;
        }
        if ($brand->update($data)) {
            return redirect()->route('brand.index')->with('success', "Cập nhật thành công");
        }
        return redirect()->back();
    }

    public function destroy(Brand $brand)
    {
        $imagePath = public_path($brand->img); // Đường dẫn đầy đủ tới ảnh

        if (file_exists($imagePath)) {
            // Xoá ảnh từ thư mục
            unlink($imagePath);
        }
        if ($brand->delete()) {
            return redirect()->back()->with('success', 'Xoá thành công');
        }

        return redirect()->back()->with('success', 'Xoá thất bại');
    }
}
