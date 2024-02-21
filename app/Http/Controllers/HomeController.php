<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use \DB;
use App\Models\Customer;
use \Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(8);
        // $products = DB::table('products')->paginate(8);
        $Categories = Category::orderBy('id', 'DESC')->get();
        //  session()->forget('totalquantity');
        // session()->forget('cart');
        // session()->forget('totalPrice');
        return view('pages.index', compact('products', 'Categories'));
    }

    public function index_category($slug)
    {
        $category = Category::where('slug', '=', $slug)->limit(1)->first();
        $products = $category->products()->paginate(9);
        $Categories = Category::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('pages.index_category', compact('products', 'Categories', 'category', 'brands'));
    }

    public function index_allproducts() {
        $products = Product::orderBy('id', 'DESC')->paginate(9);
        // $products = DB::table('products')->paginate(8);
        $Categories = Category::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('pages.index_allproducts', compact('products', 'Categories', 'brands'));
    }

    public function item($slug)
    {
        $item = Product::where('slug', '=', $slug)->limit(1)->first();
        $category = $item->category;
        $items = $category->products()->paginate(4);
        $Categories = Category::orderBy('id', 'DESC')->get();
        // dd($item);
        return view('pages.item', compact('item', 'Categories', 'items', 'category'));
    }

    public function search(Request $request)
    {
        $product = Product::query();
        $term = request('term');
        if (request('term')) {
            $product->where('name', 'Like', '%' . request('term') . '%');
        }
        if (request('price-min')) {
            $product->where('price', '>', request('price-min'));
        }

        if (request('price-max')) {
            $product->where('price', '<', request('price-max'));
        }
        // dd($request->all());


        $products = $product->orderBy('id', 'DESC')->paginate(9);
        $Categories = Category::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('pages.index_allproducts', compact('products', 'Categories', 'term', 'brands'));
    }

    public function checkout() {
        $products = Product::orderBy('id', 'DESC')->paginate(8);
        // $products = DB::table('products')->paginate(8);
        $Categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.checkout', compact('products', 'Categories'));
    }
}
