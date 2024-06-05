<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwals';
    protected $fillable = [
        'nama',
        'jenis_olahraga',
        'harga_latihan',
        'tanggal_mulai',
        'tanggal_selesai',
    ];
}
