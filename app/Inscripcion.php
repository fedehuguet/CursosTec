<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripcions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'idCurso','idCliente'
    ];
    
    public function curso(){
        return $this->hasOne('App\Curso', 'id', 'idCurso');
    }
    public function cliente(){
        return $this->hasOne('App\Cliente', 'id', 'idCliente');
    }
}
