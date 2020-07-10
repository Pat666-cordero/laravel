<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Disciplina::all();
        
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
        Log::channel('stderr')->info('test 1');

        //Aqui se capturan datos
        $nombre = $request->input("nombre");
        $participantes = $request->input("participantes");
        $olimpiada_id = $request->input("olimpiada_id");
        //Se crea el objeto para la base de datos
        Log::channel('stderr')->info('test 2');

        $disciplina_object = new Disciplina;
        $disciplina_object->nombre = $nombre;
        $disciplina_object->participantes = $participantes;
        $disciplina_object->olimpiada_id = $olimpiada_id;
        //Se guarda en la base de datos
        $disciplina_object->save();
        Log::channel('stderr')->info('test 3');

        //Se responde
        return response()->json([
            "status" => true,
            "object" => $disciplina_object
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        $data = Disciplina::select('equipos.nombre' ,'personas.nombre' ,'personas.apellido', 'personas.foto')
        ->from('personas')
        ->join('matriculas', 'personas.id', '=', 'matriculas.persona_id')
        ->join('competidorequipos', 'matriculas.id', '=', 'competidorequipos.matricula_id')
        ->join('equipos', 'equipos.id', '=', 'competidorequipos.equipo_id')
        ->where('disciplina_id', $disciplina->id)
        ->get();    
        
        return response()->json([
            "status" => true, 
            "object" => array($data)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
