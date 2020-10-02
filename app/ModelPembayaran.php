<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPembayaran extends Model
{
    protected $table = "pembayaran";

    protected $fillable = [
        'id_pembayaran', 'id_petugas', 'id_siswa', 'bulan_dibayar', 'id_spp', 'jumlah_bayar'
    ];

    public $timestamps = false;

    protected $dates = ['deleted_at'];

    public function ModelPetugas()
    {
        return $this->belongsTo('App\ModelPetugas', 'id_petugas', 'id_petugas');
    }

    public function ModelSPP()
    {
        return $this->belongsTo('App\ModelSPP', 'id_spp', 'id_spp');
    }

    public function ModelSiswa()
    {
        return $this->belongsTo('App\ModelSiswa', 'id_siswa', 'id_siswa');
    }
}
