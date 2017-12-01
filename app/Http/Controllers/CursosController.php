<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = \App\Curso::get();
        return view('cursos')->with('cursos', $cursos);
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
    {   if(Auth::check()){
            $userId = Auth::user()->id;
            $data = $request->all();
            unset($data["_token"]);
            $curso = new \App\Curso;
            $curso->fill([
                'sNombre' => $data['sNombre'],
                'iCupo' => $data['iCupo'],
                'dPrecio' => $data['dPrecio'],
                'sDescripcion' => $data['sDescripcion'],
                'fFecha' => $data['fFecha'],
                'idUser' => $userId
            ]);
            $curso->save();
            $cursos = \App\Curso::get();
        }
        return view('cursos')->with('cursos', $cursos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = \App\Curso::find($id);
        $inscripciones = \App\Inscripcion::where('idCurso',$curso->id)->get();
        return view('detallecurso')->with('curso', $curso)->with('inscripciones',$inscripciones);
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
        $data = $request->all();
        unset($data["_token"]);
        $curso = \App\Curso::find($id);
        $curso->fill([
            'sNombre' => $data['sNombre'],
            'iCupo' => $data['iCupo'],
            'dPrecio' => $data['dPrecio'],
            'sDescripcion' => $data['sDescripcion'],
            'fFecha' => $data['fFecha']
        ]);
        $curso->save();
        $cursos = \App\Curso::get();
        return view('cursos')->with('cursos', $cursos);
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
