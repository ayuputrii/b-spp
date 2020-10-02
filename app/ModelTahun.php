<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTahun extends Model
{
    protected $table = "tahunajaran";

    protected $fillable = [
        'id_tahun', 'tahun_ajaran'
    ];

    public $timestamps = false;

    protected $dates = ['deleted_at'];
}
