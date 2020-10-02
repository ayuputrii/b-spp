<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ModelKelas;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = ModelKelas::all();
        return view('admin.kelas.form', ['kelas' => $kelas]);
    }

    public function kelas()
    {
        $kelas = ModelKelas::all();
        return view('admin.kelas.kelas', ['kelas' => $kelas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.form.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('kelas')->insert([
            'nama_kelas'           => $request->nama_kelas,
            'kompetensi_keahlian'  => $request->kompetensi_keahlian
        ]);
        return redirect('admin/kelas/kelas')->with('Sukses, Berhasil menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas        = DB::table('kelas')->where('id_kelas', $id)->get();

        return view('admin.kelas.edit.editkelas', ['kelas' => $kelas]);
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
        $kelas = DB::table('kelas')->where('id_kelas', $request->id)->update([
            'nama_kelas'           => $request->nama_kelas,
            'kompetensi_keahlian'  => $request->kompetensi_keahlian
        ]);
        $kelas = ModelKelas::where('id_kelas', $id);
        $kelas->update($request->except(['_token']));

        return redirect('admin/kelas/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kelas')->where('id_kelas', $id)->delete();

        return redirect('admin/kelas/kelas')->with('Data sukses di Delete');
    }
}
