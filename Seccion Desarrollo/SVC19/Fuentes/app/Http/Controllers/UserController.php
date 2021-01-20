<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __contruct(){
        $this->Middleware('auth');
    }
    
    public function index(){
        return view('user.index');
    }

    public function categoria(){
        return view('user.categoria');
    }

    public function perfil(){
        return view('user.perfil');
    }

}
