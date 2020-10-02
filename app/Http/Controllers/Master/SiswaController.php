<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ModelSiswa;
use App\ModelKelas;
use App\ModelSPP;

use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa        = ModelSiswa::all();
        $kelas        = ModelKelas::all();
        $spp          = ModelSPP::all();
        return view('admin.siswa.form', ['siswa' => $siswa, 'kelas' => $kelas, 'spp' => $spp]);
    }

    public function siswa()
    {
        $siswa        = ModelSiswa::all();
        $kelas        = ModelKelas::all();
        $spp          = ModelSPP::all();
        return view('admin.siswa.siswa', ['siswa' => $siswa, 'kelas' => $kelas, 'spp' => $spp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.form.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'nisn'              => $request->nisn,
            'nis'               => $request->nis,
            'nama'              => $request->nama,
            'id_kelas'          => $request->id_kelas,
            'alamat'            => $request->alamat,
            'no_tlp'            => $request->no_tlp,
            'id_spp'            => $request->id_spp
        ]);
        return redirect('admin/siswa/siswa')->with('Sukses, Berhasil menambahkan Data');
    }

    public function cari(Request $request)
    {
        $cari = $request->nama;
        $kelas        = ModelKelas::all();
        $spp          = ModelSPP::all();
        $siswa        = ModelSiswa::where('nama', $cari)->get();

        return view('admin/siswa/siswa', ['kelas' => $kelas, 'spp' => $spp, 'siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas        = ModelKelas::all();
        $spp          = ModelSPP::all();
        $siswa        = DB::table('siswa')->where('id_siswa', $id)->get();

        return view('admin.siswa.edit.editsiswa', ['siswa' => $siswa, 'kelas' => $kelas, 'spp' => $spp]);
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

        $kelas        = ModelKelas::all();
        $spp          = ModelSPP::all();
        $siswa        = DB::table('siswa')->where('id_siswa', $request->id)->update([
            'nisn'              => $request->nisn,
            'nis'               => $request->nis,
            'nama'              => $request->nama,
            'id_kelas'          => $request->id_kelas,
            'alamat'            => $request->alamat,
            'no_tlp'            => $request->no_tlp,
            'id_spp'            => $request->id_spp
        ]);
        $siswa = ModelSiswa::where('id_siswa', $id);
        $siswa->update($request->except(['_token']));

        return redirect('admin/siswa/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('siswa')->where('id_siswa', $id)->delete();

        return redirect('admin/siswa/siswa')->with('Data sukses di Delete');
    }
}
