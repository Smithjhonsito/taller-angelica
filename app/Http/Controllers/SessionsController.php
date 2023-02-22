<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class SessionsController extends Controller
{


    public function respuesta(){

        return view('layouts.respuestas');
    
    }
    public function create(){

        return view('auth.login');
    
    }


    public function store(){


        
        
    


        if(auth()->attempt(request(['email','password']))==false){

            return back()->withErrors([
                'message' => 'El correo o la contraseña son incorrectos, por favor  vuelva a introducirlos'

            ]);


        }
        
  return redirect()->to('/');

    }


    public function destoy(){


        auth()->logout();

        return redirect()->to('/');

    }




}

