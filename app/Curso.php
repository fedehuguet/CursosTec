<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sNombre','iCupo','dPrecio','sDescripcion','fFecha','idUser'
    ];

    public function inscripciones(){
        return $this->hasMany('App\Inscripcion', 'idCurso', 'id');
    }

    public function getUser(){
        return $this->hasOne('App\User', 'id', 'idUser');
    }
}
