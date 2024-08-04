<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga_Hari_Ini extends Model
{
    use HasFactory;

    protected $table = 'harga_hari_ini';

    protected $fillable = [
        'harga',
        'available_room',
        'tanggal',
        'id_kamar'
    ];

    protected $primaryKey = 'id_hotel';

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
    
}
