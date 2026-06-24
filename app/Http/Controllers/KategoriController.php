<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
{
    return response()->json([
        'success' => true,
        'data' => Kategori::all()
    ]);
}

    public function store(Request $request)
    {
        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return response()->json($kategori);
    }
}