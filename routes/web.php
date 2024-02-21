<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'] )->name('pages.index');
Route::get('/category_/{slug}', [HomeController::class, 'index_category'] )->name('pages.index_category');
Route::get('/all_products', [HomeController::class, 'index_allproducts'] )->name('pages.index_allproducts');
Route::get('item/{slug}', [HomeController::class, 'item'] )->name('pages.item');
Route::get('search', [HomeController::class, 'search'] )->name('pages.search');


Route::group([
    'middleware' => 'auth',
], function() {
    Route::group([
        'prefix'=>'admin'
    ], function() {
        Route::get('', [ProductController::class, 'index'])->name('admin.welcome');
    });
    // Route::get('admin', function () {
    //     return view('master');
    // })->name('welcome.master');
    
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('brand', [BrandController::class, 'index'])->name('brand.index');
    Route::get('brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('brand/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('brand/{brand}', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('brand/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
    
    Route::get('product', [productController::class, 'index'])->name('product.index');
    Route::get('product/create', [productController::class, 'create'])->name('product.create');
    Route::post('product/store', [productController::class, 'store'])->name('product.store');
    Route::get('product/{product}/edit', [productController::class, 'edit'])->name('product.edit');
    Route::put('product/{product}', [productController::class, 'update'])->name('product.update');
    Route::delete('product/{product}', [productController::class, 'destroy'])->name('product.destroy');

    Route::get('admin/order', [OrderController::class, 'index'])->name('admin.order');
    Route::get('admin/order/detail/{id}', [OrderController::class, 'order_detail'])->name('admin.order_detail');
    Route::post('admin/order/cancel/{id}', [OrderController::class, 'order_cancel'])->name('admin.order_cancel');
    Route::post('admin/order/accept/{id}', [OrderController::class, 'order_accept'])->name('admin.order_accept');
    Route::post('admin/order/delivery_success/{id}', [OrderController::class, 'delivery_success'])->name('admin.delivery_success');
    Route::post('admin/order/delivery/{id}', [OrderController::class, 'order_delivery'])->name('admin.order_delivery');
});



Route::get('register', [LoginRegisterController::class, 'register'])->name('register');
Route::get('login', [LoginRegisterController::class, 'login'])->name('login');
Route::post('post_register', [LoginRegisterController::class, 'postregister'])->name('post.register');
Route::post('post_login', [LoginRegisterController::class, 'postlogin'])->name('post.login');

//customer-loginregister
Route::get('customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::get('customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('customer/post_register', [CustomerController::class, 'postregister'])->name('customer.post.register');
Route::post('customer/post_login', [CustomerController::class, 'postlogin'])->name('customer.post.login');
Route::post('customer/logout', [CustomerController::class, 'logout'])->name('customer.post.logout');

// Cart
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index']);
    Route::get('add/{id}', [CartController::class, 'create']);
    Route::get('/delete-cart-product/{id}', [CartController::class, 'delete'])->name('delete.cart.product');
    Route::get('update/{id}', [CartController::class, 'update']);
    Route::get('clear', [CartController::class, 'clear']);
});

//customer
Route::group([
    'middleware' => 'customer',
], function() {
    //Checkout
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('cart.checkout');
    Route::post('/checkout/postCheckout', [OrderController::class, 'postCheckout'])->name('cart.postCheckout');
    Route::get('/checkout/success', [OrderController::class, 'checkoutSuccess'])->name('cart.checkoutSuccess');

    Route::get('/order_history/{id}', [OrderController::class, 'orderHistory'])->name('customer.order_history');
    Route::get('/detail_order_history/{id}', [OrderController::class, 'detailOrderHistory'])->name('customer.detail_order_history');
});


