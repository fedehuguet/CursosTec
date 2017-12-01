<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sNombre','sEmail'
    ];

    public function inscripciones(){
        return $this->hasMany('App\Inscripcion', 'idCliente', 'id');
    }
}
