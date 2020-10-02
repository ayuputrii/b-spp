<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (Auth::user()->level == "admin" and Auth::user()->status == "enable") {
                return view('admin.index');
            } elseif (Auth::user()->level == "user" and Auth::user()->status == "enable") {
                return redirect('admin/usermanagement/user');
            } else {

                echo "Akun Anda Belum Aktif";
            }
        } else {
            echo "Username / Password Salah";
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
