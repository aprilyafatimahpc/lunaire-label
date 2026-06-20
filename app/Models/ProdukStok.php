<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukStok extends Model
{
    protected $table = 'produk_stok';

    protected $primaryKey = 'id_stok';

    protected $fillable = [
        'id_produk',
        'ukuran',
        'jumlah_stok'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}