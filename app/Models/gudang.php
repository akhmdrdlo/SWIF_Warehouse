<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gudang extends Model
{
    use HasFactory;

    protected $table = 'gudang';
    protected $fillable = [
        'id',
        'nama_gudang',
        'tipe',
        'alamat',
        'nama_pemilik',
        'luas',
    ];

    
    protected $dates = ['created_at', 'updated_at'];

}
