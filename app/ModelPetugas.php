<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPetugas extends Model
{
    protected $table = "petugas";
    protected $fillable = [
       'id_petugas', 'nama_petugas', 'email', 'username', 'password', 'status', 'level'
    ];

    public $timestamps = false;
    protected $dates = ['deleted_at'];
}
