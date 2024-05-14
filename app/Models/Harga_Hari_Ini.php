<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'id_hotel',
        'harga',
        'available_room',
        'tanggal',
        'id_kamar'
    ];

    
    
}
