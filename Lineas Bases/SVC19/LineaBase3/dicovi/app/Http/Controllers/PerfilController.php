<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function perfil(){
        $perfil = auth()->user();
        
        return view('perfil', compact('perfil'));
    }
}
