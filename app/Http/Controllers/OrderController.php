<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order_item;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('orders.list', compact('orders'));
    }

    public function postCheckout(Request $request) {
        // dd($request->all());
        $validated = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_address' => 'required',
            'payment_method' => 'required'
        ]);

        //insert data to orders table
        $order_data = array();
        $order_data['code'] = 'DH'.sprintf("%06d", mt_rand(1, 999999));
        $order_data['customer_id'] = $request->input('customer_id');
        $order_data['customer_name'] = $request->input('customer_name');
        $order_data['customer_phone'] = $request->input('customer_phone');
        $order_data['customer_email'] = $request->input('customer_email');
        $order_data['customer_address'] = $request->input('customer_address');
        $order_data['payment_method'] = $request->input('payment_method');
        $order_data['total_money'] = $request->input('totalPrice');
        $order_data['total_product'] = $request->input('total_product');
        $order_data['status'] = 0;
        $order_id = \DB::table('orders')->insertGetId($order_data);
        
        //insert data to order_items table
        $all_products_order = \Session::get('cart');
        foreach($all_products_order as $product) {
            $order_items = Order_item::create([
                'order_id' => $order_id,
                'product_id' => $product['id'],
                'product_name' => $product['name'],
                'product_image' => $product['img'],
                'product_price' => $product['price'],
                'product_quantity' => $product['quantity'],
            ]);
            $order_items->save();
        }

        return redirect()->route('cart.checkoutSuccess');
    }

    public function checkoutSuccess() {
        $products = Product::orderBy('id', 'DESC')->paginate(8);
        $Categories = Category::orderBy('id', 'DESC')->get();
        $cart = session('cart');
        $totalquantity = session('totalquantity');
        $totalPrice = session('totalPrice');
        //xoá sạch session
        session()->forget('totalPrice');
        session()->forget('totalquantity');
        session()->forget('cart');
        return view('pages.checkout_success', compact('products', 'Categories', 'cart', 'totalquantity', 'totalPrice'));
    }

    public function order_detail($id) {
        $order = Order::find($id);
        // $product = Order_item::query();
        // $product->where('order_id', 'Like', '%' . request('term') . '%');
        // $products = $product->orderBy('id', 'DESC')->get();
        return view('orders.order_detail', compact('order'));
    }

    public function order_cancel($id) {
        $order = Order::where('id', $id)
                ->update([
                    'status' => 2,
                ]);
        return Redirect::back();
    }

    public function order_accept($id) {
        $orderItems = Order_item::where('order_id', $id)->get();
        // Convert the collection to an array
        $orderItemsArray = $orderItems->toArray();
        foreach ($orderItemsArray as $orderItem) {
            $product_id = $orderItem['product_id'];
            $product_quantity = $orderItem['product_quantity'];
        
            // Check if the product exists
            $product = Product::find($product_id);
        
            if ($product->quantity >= $product_quantity) {
                // Subtract quantity from the product
                $product->quantity -= $product_quantity;
                if ($product->quantity >= 0) {
                    $product->save();
                    $order = Order::find($id);
                    $order->status = 4;
                    $order->save();
                } else {
                    return redirect()->back()->with('alert','Hết hàng khoặc không đủ số lượng hàng!');
                }
            } else {
                return redirect()->back()->with('alert','Hết hàng khoặc không đủ số lượng hàng!');
            }
        }
        return redirect()->back()->with('success', 'Đơn hàng được chấp nhận!');
    }

    public function delivery_success($id) {
        $order = Order::find($id);
        $order->status = 3;
        $order->save();

        return Redirect::back();
    }

    public function orderHistory($id) {
        $orders = Order::where('customer_id', $id)->orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'DESC')->paginate(8);
        $Categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.order_history', compact('products', 'Categories', 'orders'));
    }

    public function order_delivery($id) {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();

        return Redirect::back();
    }

    public function detailOrderHistory($id) {
        $order = Order::find($id);
        $Categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.detail_order_history', compact('Categories', 'order'));
    }
}
