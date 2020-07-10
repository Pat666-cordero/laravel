<?php

namespace App\Http\Controllers;

use App\Seccionperiodo;
use Illuminate\Http\Request;

class SeccionperiodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Seccionperiodo::all();
        
        return response()->json(array("status" => true, "objects" => $data));
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
     * @param  \App\Seccionperiodo  $seccionperiodo
     * @return \Illuminate\Http\Response
     */
    public function show(Seccionperiodo $seccionperiodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seccionperiodo  $seccionperiodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccionperiodo $seccionperiodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccionperiodo  $seccionperiodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seccionperiodo $seccionperiodo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seccionperiodo  $seccionperiodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccionperiodo $seccionperiodo)
    {
        //
    }
}
