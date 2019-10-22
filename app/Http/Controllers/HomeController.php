<?php

namespace App\Http\Controllers;

use App\Teatro;
use App\Presentacion;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teatros = Teatro::take(5)->where('activo',true)->get();

        $presentaciones = Presentacion::take(5)->get();
        $presentaciones = $presentaciones->filter(function($presentacion)
            {
                return $presentacion->teatro->activo == 1;
            });

        return view('welcome',compact('presentaciones', 'teatros'));
    }

    public function register(){
        return view('auth.register');
    }

    public function restaurarClave(){
        return view('auth.passwords.email');
    }

}
