<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSiswa extends Model
{
    protected $table = "siswa";

    protected $fillable = [
        'id_siswa', 'nisn', 'nis', 'nama', 'id_kelas', 'alamat', 'no_tlp', 'id_spp'
    ];

    public $timestamps = false;
    protected $dates = ['deleted_at'];

    public function ModelKelas()
    {
        return $this->belongsTo('App\ModelKelas', 'id_kelas', 'id_kelas');
    }

    public function ModelSPP()
    {
        return $this->belongsTo('App\ModelSPP', 'id_spp', 'id_spp');
    }
}
