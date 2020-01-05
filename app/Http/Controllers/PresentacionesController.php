<?php

namespace App\Http\Controllers;

use App\Presentacion;
use Illuminate\Http\Request;

class PresentacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentaciones = Presentacion::get();
        $presentaciones = $presentaciones->filter(function($presentacion)
            {
                return $presentacion->teatro->activo == 1;
            });
        return view('catalogoPresentaciones', compact('presentaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Presentacion $presentacion
     * @return \Illuminate\Http\Response
     */
    public function show(Presentacion $presentacion)
    {
        abort_unless($presentacion->teatro->activo,404);
        $resenas = $presentacion->resenas;
        $funciones = $presentacion->funciones;
        return view('presentaciones.presentacion', compact('presentacion', 'resenas', 'funciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Presentacion $presentacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentacion $presentacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Presentacion $presentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentacion $presentacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Presentacion $presentacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentacion $presentacion)
    {
        //
    }

}
