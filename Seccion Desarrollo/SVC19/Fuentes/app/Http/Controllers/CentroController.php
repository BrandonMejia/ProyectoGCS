<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function __contruct(){
        $this->Middleware('auth');
    }
        
    public function seleccionar(){
        /*$departamentos=Departamento::all(); // Capturar todos los departamentos de la bd */
        /*return view('lugar.seleccionar');*/
        return "Seleccionar lugar";
    }

    public function actualizar(/*User $user,*/Request $request){
        /*
        $users=User::all();
        user->lugar_id=$request->id;
        */
        /*return redirect()->route('user'); // Redirecciona a user pero no sabe a que user T.T */
    }

    public function mostrar(){
        /*return view('lugar.mostrar');*/
        return "Mostrar lugar";
    }

    public function confirmar(){
        /*return view('lugar.confirmar')*/
        return "Confirmar lugar";    
    }
}
