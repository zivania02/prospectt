<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listsales extends Model
{
    use HasFactory;
    protected $table = 'listsales';
    protected $fillable = [
        'no_faktur',
        'nama',
        'alamat',
        'no_telpon',
        'quantity',
        'unit_price'
    ];
}
