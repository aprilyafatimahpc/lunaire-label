<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\PesananDetail;

class PesananDetailController extends Controller
{
    public function index()
    {
        return response()->json(
            PesananDetail::with(['produk', 'pesanan'])->get()
        );
    }

    public function store(Request $request)
    {
        $detail = PesananDetail::create([
            'id_pesanan' => $request->id_pesanan,
            'id_produk' => $request->id_produk,
            'ukuran' => $request->ukuran,
            'jumlah' => $request->jumlah,
            'subtotal' => $request->subtotal
        ]);

        return response()->json($detail);
    }
}