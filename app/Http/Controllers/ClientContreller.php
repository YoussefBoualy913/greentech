<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class ClientContreller extends Controller
{
    public function index()
    {
        $favorites = auth::user()->favorites()->with('category')->get();

     return view('client.favorites',compact('favorites'));

    }

    public function store(Product $product)
    {
        Auth::user()->favorites()->toggle($product->id);
        return redirect()->route('home');

    }
}
