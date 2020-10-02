<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKelas extends Model
{
    protected $table = "kelas";

    protected $fillable = [
        'id_kelas', 'nama_kelas', 'kompetensi_keahlian'
    ];

    public $timestamps = false;

    protected $dates = ['deleted_at'];

}
