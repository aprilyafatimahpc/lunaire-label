<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
{
    $produk = Produk::with(['kategori', 'stok'])->get();

    return response()->json([
        'success' => true,
        'message' => 'Data produk berhasil diambil',
        'data' => $produk
    ]);
}

    public function store(Request $request)
    {
        $produk = Produk::create([
            'id_kategori' => $request->id_kategori,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ]);

        return response()->json($produk);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $produk->update([
            'id_kategori' => $request->id_kategori,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ]);

        return response()->json($produk);
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus'
        ]);
    }
}