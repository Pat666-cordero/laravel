<?php

namespace App\Http\Controllers;

use App\Olimpiada;
use Illuminate\Http\Request;

class OlimpiadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Olimpiada::all();

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
        $nombre = $request->input("nombre");
        $descripcion = $request->input("descripcion");
        $fecha_inicio = $request->input("fecha_inicio");
        $fecha_fin_inscripcion = $request->input("fecha_fin_inscripcion");
        $fecha_fin = $request->input("fecha_fin");
   
        $olimpiada_object = new Olimpiada;
        $olimpiada_object->nombre = $nombre;
        $olimpiada_object->descripcion = $descripcion;
        $olimpiada_object->fecha_inicio = $fecha_inicio;
        $olimpiada_object->fecha_fin_inscripcion = $fecha_fin_inscripcion;
        $olimpiada_object->fecha_fin = $fecha_fin;
        $olimpiada_object->save();
 
        return response()->json([
            "status" => true,
            "object" => $olimpiada_object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Olimpiada  $olimpiada
     * @return \Illuminate\Http\Response
     */
    public function show(Olimpiada $olimpiada)
    {
        $data = Olimpiada::find($olimpiada);
        
        return response()->json([
            "status" => true, 
            "object" => $data[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Olimpiada  $olimpiada
     * @return \Illuminate\Http\Response
     */
    public function edit(Olimpiada $olimpiada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Olimpiada  $olimpiada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $olympiad = Olimpiada::findOrFail($id);
        $olympiad->nombre = $request->nombre;
        $olympiad->descripcion = $request->descripcion;
        $olympiad->fecha_inicio = $request->fecha_inicio;
        $olympiad->fecha_fin_inscripcion = $request->fecha_fin_inscripcion;
        $olympiad->fecha_fin = $request->fecha_fin;
        $olympiad->update();
        return $olympiad;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Olimpiada  $olimpiada
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $olympiad = Olimpiada::findOrFail($id);
        $olympiad->delete();
    }
}
