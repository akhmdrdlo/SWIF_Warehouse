<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    
    protected $table = 'barangs';
    protected $fillable = [
        'id',
        'kat_id',
        'merek',
        'stok',
        'lokasi',
    ];

    
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = [
        'id',
        'remember_token',
    ];

}
