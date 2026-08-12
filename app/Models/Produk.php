<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'user_id',
        'foto',
        'nama',
        'jenis_produk_id',
        'distributor_id',
        'harga_beli',
        'harga_jual',
        'stok',
    ];


    public function jenisProduk()
    {
        return $this->belongsTo(
            JenisProduk::class,
            'jenis_produk_id'
        );
    }


    public function distributor()
    {
        return $this->belongsTo(
            Distributor::class,
            'distributor_id'
        );
    }


    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }
}