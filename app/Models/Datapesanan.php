<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Datapesanan extends Model
{
    use HasFactory;
    protected $table = 'Pesanan';
 
    protected $fillable = [
        'id_pesanan,id_tanaman, nama_tanaman, harga_tanaman,jumlah_stok,total,tgl_pemesanan'
    ];
}