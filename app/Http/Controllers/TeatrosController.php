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
        //
        return view('catalogoTeatros');
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
     * @param  \App\Teatro  $teatros
     * @return \Illuminate\Http\Response
     */
    public function show(Teatro $teatros)
    {
        //$teatro = teatros::findorfail($id);
        return view('teatros.teatro')/*->with($teatro)*/;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teatro  $teatros
     * @return \Illuminate\Http\Response
     */
    public function edit(Teatro $teatros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teatro  $teatros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teatro $teatros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teatro  $teatros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teatro $teatros)
    {
        //
    }
}
