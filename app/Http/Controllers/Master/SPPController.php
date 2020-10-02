<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\ModelSPP;
use Illuminate\Http\Request;

use App\ModelTahun;

use Illuminate\Support\Facades\DB;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun_ajaran = ModelTahun::all();
        $spp = ModelSPP::all();
        return view('admin.spp.form', ['spp' => $spp, 'tahun_ajaran' => $tahun_ajaran]);
    }

    public function spp()
    {
        $tahun_ajaran = ModelTahun::all();
        $spp = ModelSPP::all();
        return view('admin.spp.spp', ['spp' => $spp, 'tahun_ajaran' => $tahun_ajaran]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.spp.form.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('spp')->insert([
            'id_tahun'    => $request->id_tahun,
            'nominal'  => $request->nominal
        ]);
        return redirect('admin/spp/spp')->with('Sukses, Berhasil menambahkan Data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahun_ajaran = ModelTahun::all();
        $spp          = DB::table('spp')->where('id_spp', $id)->get();

        return view('admin.spp.edit.editspp', ['spp' => $spp, 'tahun_ajaran' => $tahun_ajaran]);
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
        $spp = DB::table('spp')->where('id_spp', $request->id)->update([
            'id_tahun'    => $request->id_tahun,
            'nominal'  => $request->nominal
        ]);
        $spp = ModelSPP::where('id_spp', $id);
        $spp->update($request->except(['_token']));

        return redirect('admin/spp/spp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('spp')->where('id_spp', $id)->delete();

        return redirect('admin/spp/spp')->with('Data Sukses Di Delete');
    }
}
