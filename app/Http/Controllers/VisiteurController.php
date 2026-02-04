<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    public function registerform()
    {
      return view('visiteur.register');
    }

    public function register(Request $request)
    {
       $validated = $request->validate([
        'name'=> 'required|string|max:50',
        'email'=> 'required|email',
        'password'=> 'required|string|min:5|confirmed',
      ]);
      $user = User::create($validated);
      Auth::login($user);
     return redirect()->route('home');
    }

}
