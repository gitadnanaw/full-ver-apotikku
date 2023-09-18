<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pembeli',
        'no_telp',
        'id_layanan',
    ];

    public function obat(){
        return $this->belongsTo(obat::class,'id_layanan','id');
    }
}
