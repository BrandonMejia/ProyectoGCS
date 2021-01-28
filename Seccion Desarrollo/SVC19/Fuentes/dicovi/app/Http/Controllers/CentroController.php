<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function mostrar(){
        $user = auth()->user();
        $centro = $user->centro;
        return view('centros.mostrar', compact('centro'));
    }

    public function elegir(){
        return view('centros.elegir');
    }
}
