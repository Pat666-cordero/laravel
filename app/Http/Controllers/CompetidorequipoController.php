<?php

namespace App\Http\Controllers;

use App\Competidorequipo;
use App\Persona;
use App\Equipo;
use Illuminate\Http\Request;

class CompetidorequipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Competidorequipo::all();
        
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
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$equipo_id = Equipo::find($id);
        $data = Competidorequipo::all();

        return response()->json(array("status" => true, "objects" => $data));
    }

    /*public function show(Competidorequipo $competidorequipo)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Competidorequipo $competidorequipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competidorequipo $competidorequipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competidorequipo $competidorequipo)
    {
        //
    }
}
