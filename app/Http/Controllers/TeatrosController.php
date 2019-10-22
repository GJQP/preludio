<?php

namespace App\Http\Controllers;

use App\Teatro;
use Illuminate\Http\Request;

class TeatrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teatros = Teatro::all();
        return view('catalogoTeatros', compact('teatros'));
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
     * @param \App\Teatro $teatro
     * @return \Illuminate\Http\Response
     */
    public function show(Teatro $teatro)
    {
        return view('teatros.teatro', compact('teatro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Teatro $teatro
     * @return \Illuminate\Http\Response
     */
    public function edit(Teatro $teatro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Teatro $teatro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teatro $teatro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Teatro $teatro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teatro $teatro)
    {
        //
    }

    public function verPresentaciones(Teatro $teatro)
    {
        $presentaciones = $teatro->presentaciones;
        $nombreTeatro = $teatro->nombre;
        return view('catalogoPresentaciones', compact('presentaciones', 'nombreTeatro'));
    }
}
