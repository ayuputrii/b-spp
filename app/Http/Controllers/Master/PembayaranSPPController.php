<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ModelPembayaran;
use App\ModelPetugas;
use App\ModelSPP;
use App\ModelSiswa;

use Illuminate\Support\Facades\DB;

class PembayaranSPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = ModelPembayaran::all();
        $petugas = ModelPetugas::all();
        $siswa = ModelSiswa::all();
        $spp = ModelSPP::all();
        return view('admin.pembayaran.form', ['pembayaran' => $pembayaran, 'siswa' => $siswa, 'petugas' => $petugas, 'spp' => $spp]);
    }


    public function pembayaran()
    {
        $pembayaran = ModelPembayaran::all();
        $petugas = ModelPetugas::all();
        $siswa = ModelSiswa::all();
        $spp = ModelSPP::all();
        return view('admin.pembayaran.pembayaran', ['pembayaran' => $pembayaran, 'siswa' => $siswa, 'petugas' => $petugas, 'spp' => $spp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembayaran.pembayaran.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas        = ModelPetugas::all();
        $spp            = ModelSPP::all();
        $siswa          = ModelSiswa::all();
        $pembayaran     = DB::table('pembayaran')->insert([
            'id_petugas'        => $request->id_petugas,
            'id_siswa'          => $request->id_siswa,
            'waktu_bayar'       => $request->waktu_bayar,
            'id_spp'            => $request->id_spp,
            'jumlah_bayar'      => $request->jumlah_bayar
        ]);
        return redirect('admin/pembayaran/pembayaran')->with('Anda, Berhasil Menambahkan Data');
    }

    public function cari(Request $request){
        $cari = $request->nama;
        $petugas        = ModelPetugas::all();
        $spp            = ModelSPP::all();
        $siswa          = ModelSiswa::all();
        $pembayaran     = ModelSiswa::where('nama', $cari)->get();

        return view('admin/pembayaran/pembayaran', ['petugas' => $petugas, 'spp' => $spp, 'siswa' => $siswa, 'pembayaran' => $pembayaran]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id)
    {
        $petugas        = ModelPetugas::all();
        $spp            = ModelSPP::all();
        $siswa          = ModelSiswa::all();
        $pembayaran     = DB::table('pembayaran')->where('id_pembayaran', $id)->get();

        return view('admin.pembayaran.edit.editpembayaran', ['petugas' => $petugas, 'spp' => $spp, 'siswa' => $siswa, 'pembayaran' => $pembayaran]);
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
        $petugas        = ModelPetugas::all();
        $spp            = ModelSPP::all();
        $siswa          = ModelSiswa::all();
        $pembayaran     = DB::table('pembayaran')->insert([
            'id_petugas'        => $request->id_petugas,
            'id_siswa'          => $request->id_siswa,
            'waktu_bayar'       => $request->waktu_bayar,
            'id_spp'            => $request->id_spp,
            'jumlah_bayar'      => $request->jumlah_bayar
        ]);
        $pembayaran = ModelPembayaran::where('id_pembayaran', $id);
        $pembayaran->update($request->except(['_token']));

        return redirect('admin/pembayaran/pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pembayaran')->where('id_pembayaran', $id)->delete();

        return redirect('admin/pembayaran/pembayaran')->with('Data sukses di Delete');
    }
}
