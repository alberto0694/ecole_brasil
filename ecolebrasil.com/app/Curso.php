<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aluno;
use Carbon\Carbon;

class Curso extends Model
{

	protected $fillable = [	'nome', 
							'formacao_id',
							'link_video',
							'background_img',
							'card',
							'ementa',
							'ministrantes',
							'conteudo',
							'apresentacao',
							'objetivos',
							'informacoes',
							'pagina_inicial',
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

	public function agendas()
	{
		return $this->hasMany('App\Agenda', 'curso_id', 'id');
	}
}
