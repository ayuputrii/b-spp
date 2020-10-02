<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSPP extends Model
{
    protected $table = "spp";
    protected $Fillable = [
        'id_spp', 'id_tahun', 'nominal'
    ];

    public $imestamps = false;
    protected $dates = ['deleted_at'];

    public function ModelTahun()
    {
        return $this->belongsTo('App\ModelTahun', 'id_tahun', 'id_tahun');
    }

    public function ModelSiswa()
    {
        return $this->hasOne('App\ModelSiswa', 'id_siswa', 'id_siswa');
    }
}
