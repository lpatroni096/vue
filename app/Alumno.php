<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    public function cursos()
    {
        return $this->belongsToMany('App\Curso', 'alumno_cursos','curso_id','alumno_id');
    }
}
