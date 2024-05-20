<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;
    protected $table = 'records';

    protected $fillable = [
        'brg_id',
        'kat_id', 
        'uname',
        'supplier', 
        'stok',
        'proses',
    ];
}
