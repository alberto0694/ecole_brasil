<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aluno;

class Curso extends Model
{
    public function alunos()
    {
    	return $this->belongsToMany('App\Aluno');
    }
}
