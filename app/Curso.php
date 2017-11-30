<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sNombre','iCupo','dPrecio','sDescripcion','fFecha'
    ];

    public function inscripciones(){
        return $this->hasMany('App\Inscripcion', 'idCurso', 'id');
    }
}
