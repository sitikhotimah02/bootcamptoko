<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Datatanaman extends Model
{
    use HasFactory;
    protected $table = 'data_tanaman';
 
    protected $fillable = [
        'id_tanaman, nama_tanaman, harga_tanaman,jumlah_stok,'
    ];
}