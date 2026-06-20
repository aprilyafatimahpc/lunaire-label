<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $products = Produk::all();

        return view('home', compact('products'));
    }
}