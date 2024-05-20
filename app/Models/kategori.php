<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    
    protected $table = 'kategoris';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'id',
    ];
    public function getNamaKategoriAttribute()
    {
        return $this->attributes['kategori'];
    }
    protected $hidden = [
        'id',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->withZone('Asia/Jakarta');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->withZone('Asia/Jakarta');
    }
}
