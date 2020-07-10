<?php

namespace App\Http\Controllers;

use App\Desafio;
use App\Equipo;
use Illuminate\Http\Request;

class DesafioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = array();
        $data = Desafio::all();
        foreach ($data as $d) {
            $retador = Equipo::find($d->retador_id);
            $invitado = Equipo::find($d->invitado_id);
            array_push($result, array(
                "retador" => $retador,
                "invitado" => $invitado, 
                "desafio" => $d->fecha                 
            ));
        } 
        return response()->json(array("status" => true, "objects" => $result));
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
        $disciplina_id = $request->input("disciplina_id");
        $invitado_id = $request->input("invitado_id");
        $retador_id = $request->input("retador_id");
        $invitado_puntaje = $request->input("invitado_puntaje");
        $retador_puntaje = $request->input("retador_puntaje");
        $ganador = $request->input("ganador");
        $parent_id = $request->input("parent_id");
        $fecha = $request->input("fecha");
        $grupo = $request->input("grupo");

        $desafio_object = new Desafio;
        $desafio_object->disciplina_id = $disciplina_id;
        $desafio_object->invitado_id = $invitado_id;
        $desafio_object->retador_id = $retador_id;
        $desafio_object->invitado_puntaje = $invitado_puntaje;
        $desafio_object->retador_puntaje = $retador_puntaje;
        $desafio_object->ganador = $ganador;
        $desafio_object->parent_id = $parent_id;
        $desafio_object->fecha = $fecha;
        $desafio_object->grupo = $grupo;

        return response()->json([
            "status" => true,
            "object" => $desafio_object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function show(Desafio $desafio)
    {
        $data = Desafio::select('desafios.invitado_id' ,'desafios.retador_id', 
        'equipos.nombre', 'equipos.image', 'desafios.fecha')
        ->from('desafios')
        ->join('equipos', 'equipos.id', '=', 'desafios.invitado_id')
        ->get();

        $invitadoId = $desafio->invitado_id;
        $retadorId = $desafio->retador_id;

        $retador =  Equipo::find($retadorId);
        $invitado =  Equipo::find($invitadoId);
        return response()->json(array(
            "status" => true,
            "object" => array(
              "retador" => $retador,
              "invitado" => $invitado,
              "desafio" => $desafio->fecha      
            )
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function edit(Desafio $desafio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desafio $desafio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desafio $desafio)
    {
        //
    }
}
