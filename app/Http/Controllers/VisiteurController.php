<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index(Request $request)
    {
      
      if (!$request->filled('search')) {
         $products = Product::with('category')->get();
         return view('visiteur.index',compact('products'));
         }
         if($request->filled('search')){
           
           $products = Product::with('category')->where('name', 'LIKE', '%' . $request->search . '%')->get();
           return view('visiteur.index',compact('products'));
      }
    }
}
