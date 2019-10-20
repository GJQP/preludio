<?php

namespace App\Http\Controllers;

use App\Presentaciones;
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
        //
        return view('catalogoPresentaciones');
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
     * @param  \App\Presentaciones  $presentaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Presentaciones $presentaciones)
    {
        //
        return view('presentaciones.presentacion');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presentaciones  $presentaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentaciones $presentaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presentaciones  $presentaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentaciones $presentaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presentaciones  $presentaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentaciones $presentaciones)
    {
        //
    }

}
