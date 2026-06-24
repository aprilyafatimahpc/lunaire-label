<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_user',
        'nama_customer',
        'email_customer',
        'hp_customer',
        'alamat',
        'total_bayar',
        'status_pesanan',
        'ekspedisi',
        'no_resi',
        'bukti_pembayaran'
    ];
}