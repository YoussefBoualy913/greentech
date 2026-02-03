<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

   
    public function showLoginForm(Request $request)
    {
      
     
       return view('visiteur.login');
      
    }
    
   public function login(Request $request)
   { 
      $valid = $request->validate([
        'email' => 'email',
        'password' =>'password'
      ]);
     if(Auth::attempt($valid)){

        $request->session()->regenerate();
        return redirect()->route('home');
     }
     return back()->withErrors([
        'email' => 'Identifiants incorrects',
    ]);
   }

   
    public function logout(Request $request)
    {
      
          Auth::logout();
          $request->session()->invalidate();     
          $request->session()->regenerateToken();
          return view('visiteur.index');
      
    }
}
