<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->all();
        unset($data["_token"]);
        $cliente = new \App\Cliente;
        $cliente->fill([
            'sNombre' => $data['sNombre'],
            'sEmail' => $data['sEmail']
        ]);
        $cliente->save();
        $inscripcion = new \App\Inscripcion;
        $curso = \App\Curso::find($data['idCurso']);
        $curso->iCupo = $curso->iCupo - 1;
        $curso->save();
        $inscripcion->fill([
            'idCurso' => $curso->id,
            'idCliente' => $cliente->id,
        ]);
        $inscripcion->save();
        $inscripciones = \App\Inscripcion::where('idCurso',$curso->id)->get();
        return view('detallecurso')->with('curso', $curso)->with('inscripciones',$inscripciones);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
