<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $table = 'Pemasukan';
 
    protected $fillable = [
        'id_pemasukan,id_pesanan, harga_tanaman,jumlah_pemesanan,total,tgl'
    ];
}
