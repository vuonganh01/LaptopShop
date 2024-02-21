<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function delete(Request $request) {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                $new_quantity = $cart[$request->id]['quantity']-1;
                $cart[$request->id] = [
                    "id" => $cart[$request->id]['id'],
                    "name" => $cart[$request->id]['name'],
                    "quantity" => $new_quantity,
                    "price" => $cart[$request->id]['price'],
                    "img" => $cart[$request->id]['img']
                ];
                if($cart[$request->id]['quantity'] == 0) {
                    unset($cart[$request->id]);
                }
                session()->put('cart', $cart);
            }
            $cart = session()->get('cart');
            $totalPrice = 0;
            $totalQuantity = 0;
            foreach($cart as $item) {
                $totalQuantity += $item['quantity'];
            }
            foreach($cart as $item) {
                $totalPrice += $item['price']*$item['quantity'];
            }
            session()->put('totalquantity', $totalQuantity);
            session()->put('totalPrice', $totalPrice);
            return redirect()->back()->with('success', 'Đã xoá sản phẩm khỏi giỏ hàng');
        }
    }

    public function create($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "img" => $product->img
            ];
        }
        $totalPrice = 0;
        $totalQuantity = 0;
        foreach($cart as $item) {
            $totalQuantity += $item['quantity'];
        }
        foreach($cart as $item) {
            $totalPrice += $item['price']*$item['quantity'];
        }
        session()->put('cart', $cart);
        session()->put('totalquantity', $totalQuantity);
        session()->put('totalPrice', $totalPrice);
        // session()->forget('totalquantity');
        // session()->forget('cart');
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }
}
