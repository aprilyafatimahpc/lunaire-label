<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'id_kategori',
        'nama_barang',
        'harga',
        'deskripsi',
        'foto'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
    
    public function stok()
{
    return $this->hasMany(ProdukStok::class, 'id_produk', 'id_produk');
}
}