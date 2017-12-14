<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aluno;
use Carbon\Carbon;

class Curso extends Model
{

	protected $fillable = [	'nome', 
							'formacao_id',
							'carga_horaria', 
							'link_video',
							'data_inicio',
							'background_img',
							'card',
							'investimento',
							'modelo',
							'ministrantes',
							'conteudo',
							'apresentacao',
							'objetivos',
							'material'];


    public function alunos()
    {
    	return $this->belongsToMany('App\Aluno');
    }

    public function formacao()
    {
    	return $this->belongsTo('App\Formacao', 'formacao_id', 'id');
    }

	public function getOpennedAttribute()
	{
	    $date = Carbon::parse($this->data_inicio);
	    return $date <= Carbon::now();
	}

	public function getFormatedDateAttribute()
	{
		return Carbon::parse($this->data_inicio)->format('d/m/Y');
	}
}
