<?php

namespace App\Http\Controllers;
use \Hash;
use App\Models\User;
use \Auth;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function register() {
        return view('register');
    }

    public function postregister(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        $user = $request->only('name', 'email', 'password');
        $user['password'] = Hash::make($request->password);
        User::create($user);

        return redirect()->route('login');
    }

    public function login() {
        return view('login');
    }

    public function postlogin(Request $request) {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = $request->only('email', 'password');
        if(Auth::attempt($user)) {
            return redirect()->route('admin.welcome');
        }
        return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng');
    }
}
