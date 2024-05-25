<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;

    
    protected $table = 'shipment';
    protected $fillable = [
        'id',
        'invoice_id',
        'gdg_id',
        'staff_id',
    ];

    protected $dates = ['created_at', 'updated_at'];


    protected $hidden = [
        'id',
        'remember_token',
    ];
}
