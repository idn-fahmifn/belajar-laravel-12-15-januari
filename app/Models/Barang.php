<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    use HasFactory; //mengaktifkan / menghubungkan pada class Factory.

    //jika nama table berbentuk tunggal (ex. barang), wajib mendefinisikan.
    protected $table = 'barang'; 

    // di dalam tabel barang ada apa saja? (columnnya)
    protected $fillable = [
        'nama_barang', 'brand', 'stok', 'is_ready', 'deskripsi'
    ];
}
