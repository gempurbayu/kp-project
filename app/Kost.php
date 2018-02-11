<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'nama_pemilik', 'nohp', 'alamat', 'harga','tipe', 'fasilitas', 'jangka_waktu', 'panjang', 'lebar', 'sisa_kamar', 'jumlah_kamar', 'deskripsi',
    ];
}
