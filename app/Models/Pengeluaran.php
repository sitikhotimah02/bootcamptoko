<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'Pengeluaran';
 
    protected $fillable = [
        'id_pengeluaran,tgl_pengeluaran,nama_pengeluaran, total_pengeluaran'
    ];
}
