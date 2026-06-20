<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\ProdukStok;

class ProdukStokController extends Controller
{
    public function index()
{
    return response()->json([
        'success' => true,
        'data' => ProdukStok::with('produk')->get()
    ]);
}

    public function store(Request $request)
    {
        $stok = ProdukStok::create([
            'id_produk' => $request->id_produk,
            'ukuran' => $request->ukuran,
            'jumlah_stok' => $request->jumlah_stok
        ]);

        return response()->json($stok);
    }

    public function update(Request $request, $id)
    {
        $stok = ProdukStok::findOrFail($id);

        $stok->update([
            'id_produk' => $request->id_produk,
            'ukuran' => $request->ukuran,
            'jumlah_stok' => $request->jumlah_stok
        ]);

        return response()->json($stok);
    }

    public function destroy($id)
    {
        $stok = ProdukStok::findOrFail($id);

        $stok->delete();

        return response()->json([
            'message' => 'Stok berhasil dihapus'
        ]);
    }
}