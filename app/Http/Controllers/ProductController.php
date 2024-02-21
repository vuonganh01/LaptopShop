<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use \DB;
use \Str;

class ProductController extends Controller
{
    public function index() {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('products.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        $brands = Brand::all();
        return view('products.create', compact('categories', 'brands'));
    }

    public function store(Request $request) {
        $product = $request->only('name', 'description', 'category_id', 'brand_id', 'content', 'price', 'code', 'img', 'quantity');
        // dd($request);
        $slug = Str::slug($request->name);
        $product['slug'] = $slug;
        $product['created_at'] = now();
        $validated = $request->validate([
            'price' => 'required|integer',
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'code' => 'required',
            'quantity' => 'required'
        ]);

        $fileName = $request->name. rand(1,1000). time(). '.' .$request->file('img')->extension();

        $request->file('img')->storeAs('public/product', $fileName);

        $imgPath = 'storage/product/'.$fileName;
        $product['img'] = $imgPath;
        if(Product::create($product)) {
            return redirect()->route('product.index')->with('success', 'Tạo mới thành công');
        }
        return redirect()->route('product.index')->with('error', 'Tạo mới không thành công');   
    }

    public function edit(Request $request, Product $product) {
        $categories = Category::all();
        $brands = Brand::all();
        return view('products.edit', compact('product', 'categories', 'brands'));
    }

    public function update(Request $request, Product $product) {
        $validated = $request->validate([
            'price' => 'required|integer',
            'name' => 'required|max:255',
            'img' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
            'code' => 'required'
        ]);
        $data = $request->only('name', 'description', 'category_id', 'brand_id', 'content', 'price', 'code','quantity');
        $data['slug'] = Str::slug($data['name']);
        $data['updated_at'] = now();
        
        if($request->img) {
            $fileName = $request->name. rand(1,1000). time(). '.' .$request->file('img')->extension();

            $request->file('img')->storeAs('public/product', $fileName);

            $imgPath = 'storage/product/'.$fileName;
            $data['img'] = $imgPath;
            // $data['img'] = $request->img;
        }
        if($product->update($data)) {
            return redirect()->route('product.index')->with('success', "Cập nhật thành công");
        }
        return redirect()->back();
    }

    public function destroy(Product $product) {
        if($product->delete()) {
            return redirect()->back()->with('success', 'Xoá thành công');
        }

        return redirect()->back()->with('success', 'Xoá thất bại'); 
    }
}
