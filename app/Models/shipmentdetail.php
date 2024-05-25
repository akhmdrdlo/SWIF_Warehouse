<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipmentdetail extends Model
{
    use HasFactory;

    protected $tables = 'shipmentdetails';
    protected $fillable = [
        'id',
        'shipor_id',
        'brg_id',
        'penerima',
        'notelp_penerima',
        'alamat_kirim',
        'jumlah',
        'status',
    ];

    protected $dates = ['created_at', 'updated_at'];


    protected $hidden = [
        'id',
        'remember_token',
    ];
}
