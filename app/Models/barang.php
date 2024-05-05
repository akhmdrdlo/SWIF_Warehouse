<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    
    protected $table = 'barang';
    protected $fillable = [
        'id',
        'kat_id',
        'merek',
        'jenis_barang',
        'stok',
        'lokasi',
    ];

    
    protected $dates = ['created_at', 'updated_at'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timezone('Asia/Jakarta');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timezone('Asia/Jakarta');
    }

    protected $hidden = [
        'id',
        'remember_token',
    ];
}
