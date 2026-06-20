<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
{
    return response()->json([
        'success' => true,
        'data' => Pesanan::all()
    ]);
}

    public function store(Request $request)
    {
        $pesanan = Pesanan::create([
            'id_user' => $request->id_user,
            'nama_customer' => $request->nama_customer,
            'email_customer' => $request->email_customer,
            'hp_customer' => $request->hp_customer,
            'alamat' => $request->alamat,
            'total_bayar' => $request->total_bayar,
            'status_pesanan' => 'Menunggu Pembayaran'
        ]);

        return response()->json($pesanan);
    }
}