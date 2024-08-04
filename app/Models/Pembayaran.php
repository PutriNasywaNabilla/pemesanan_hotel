<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'id_payment',
        'customer_id',
        'tanggal',
        'metode_bayar',
        'id_invoice'
    ];
    
    protected $primaryKey = 'id_payment';
}
