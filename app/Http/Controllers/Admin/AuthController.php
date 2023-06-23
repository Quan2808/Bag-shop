<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['is_admin'] = 1;

        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công');
        } else {
            $credentials['is_admin'] = 0;

            if (auth()->attempt($credentials)) {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->back()->with('error', 'Email hoặc mật khẩu bạn nhập không chính xác.');
            }
        }
    }

    public function getRegister()
    {
        return view('admin.auth.register');
    }
}
