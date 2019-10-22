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
        $teatros = Teatro::take(5)->get();
        $presentaciones = Presentacion::take(5)->get();

        return view('welcome',compact('presentaciones', 'teatros'));
    }

    public function register(){
        return view('auth.register');
    }
   
}
