<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ModelTahun;

use Illuminate\Support\Facades\DB;

class TAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun_ajaran = ModelTahun::all();

        return view('admin.tahunajaran.form', ['tahun_ajaran' => $tahun_ajaran]);
    }

    public function tahun()
    {
        $tahun_ajaran = ModelTahun::all();
        return view('admin.tahunajaran.tahunajaran', ['tahun_ajaran' => $tahun_ajaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tahunajaran.form.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tahunajaran')->insert([
            'tahun_ajaran'    => $request->tahun_ajaran
        ]);
        return redirect('admin/tahunajaran/tahunajaran')->with('Sukses, Berhasil menambahkan Data');
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
        $tahun_ajaran = DB::table('tahunajaran')->where('id_tahun', $id)->get();

        return view('admin.tahunajaran.edit.edittahun', ['tahun_ajaran' => $tahun_ajaran]);
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
        $tahun_ajaran = DB::table('tahunajaran')->where('id_tahun', $request->id)->update([
            'tahun_ajaran' => $request->tahun_ajaran
        ]);
        $tahun_ajaran = ModelTahun::where('id_tahun', $id);
        $tahun_ajaran->update($request->except(['_token']));

        return redirect('admin/tahunajaran/tahunajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tahunajaran')->where('id_tahun', $id)->delete();

        return redirect('admin/tahunajaran/tahunajaran');
    }
}
