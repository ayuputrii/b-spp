<?php

namespace App\Http\Controllers\Master;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\ModelPetugas;

use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = ModelPetugas::all();
        return view('admin/usermanagement/form', ['petugas' => $petugas]);
    }

    public function user()
    {
        $userActive = Auth::user();

        $petugas = ModelPetugas::all();
        return view('admin/usermanagement/user', compact('petugas', 'userActive'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('admin.usermanagement.form.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas             = DB::table('petugas')->insert([
            'nama_petugas'   => $request->nama_petugas,
            'email'          => $request->email,
            'username'       => $request->username,
            'password'       => Hash::make($request->password),
            'level'          => $request->level
        ]);
        return redirect('admin/usermanagement/user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas    = DB::table('petugas')->where('id_petugas', $id)->get();

        return view('admin.usermanagement.edit.edituser', ['petugas' => $petugas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('petugas')->where('id_petugas', $request->id)->update([
            'nama_petugas'   => $request->nama_petugas,
            'email'          => $request->email,
            'username'       => $request->username,
            'password'       => Hash::make($request->password),
            'level'          => $request->level
        ]);
        $petugas = ModelPetugas::where('id_petugas', $id);
        $petugas->update($request->except(['_token']));

        return redirect('admin/usermanagement/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('petugas')->where('id_petugas', $id)->delete();

        return redirect('admin/usermanagement/user')->with('Data sukses di Delete');
    }
}
