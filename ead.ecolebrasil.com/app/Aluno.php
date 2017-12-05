<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;

class Aluno extends Model
{
    public function cursos()
    {
    	return $this->belongsToMany('App\Curso');
    }
}
