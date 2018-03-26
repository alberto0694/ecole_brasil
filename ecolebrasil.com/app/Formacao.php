<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;

class Formacao extends Model
{
    protected $fillable = ['nome', 'descricao_html'];

    public function cursos()
    {
    	return $this->hasMany('App\Curso', 'formacao_id', 'id')->where('visible', '=', '1');
    }

    public function addCurso(Curso $curso)
    {
    	$this->cursos()->add( $curso );
    	return;
    }

    public function getQtdCursosAttribute()
    {
        return $this->cursos()->count();
    }

    public function getNomeCapitalizedAttribute()
    {
        return ucfirst(strtolower($this->nome));
    }
}
