<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        DB::table('petugas')->insert([
            'nama_petugas'   => $request->nama_petugas,
            'email'          => $request->email,
            'username'       => $request->username,
            'password'       => Hash::make($request->password),
            'level'          => $request->level
        ]);
        return redirect('/login');
    }
}
