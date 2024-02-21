<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Hash;
use App\Models\Customer;
use \Auth;

class CustomerController extends Controller
{
    public function register() {
        return view('customers.register');
    }

    public function login() {
        return view('customers.login');
    }

    public function postlogin(Request $request) {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = $request->only('email', 'password');
        if(\Auth::guard('customer')->attempt($user)) {
            return redirect()->route('pages.index');
        }
        return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng');
    }

    public function postregister(Request $request) {
        $validated = $request->validate([
            'username' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'email' => 'required|unique:customers',
            'password' => 'required'
        ]);
        $user = $request->only('name', 'email', 'password', 'username', 'phone');
        $user['password'] = Hash::make($request->password);
        Customer::create($user);

        return redirect()->route('customer.login');
    }

    public function logout() {
        \Auth::guard('customer')->logout();

        return redirect()->route('pages.index');
    }
}
