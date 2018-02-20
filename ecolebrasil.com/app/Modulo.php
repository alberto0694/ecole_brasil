<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;
use App\Material;
use App\Exercicio;
use App\Agenda;
use App\Professor;
use Carbon\Carbon;

class Modulo extends Model
{
    protected $fillable = ['titulo', 'data_inicio', 'agenda_id', 'titulo', 'descricao_html', 'card'];

	public function agenda()
	{
		return $this->belongsTo('App\Agenda', 'agenda_id', 'id');
	}

	public function aulas()
	{
		return $this->hasMany('App\Aula', 'modulo_id', 'id');
	}

	public function videos()
	{
		return $this->hasMany('App\Video', 'modulo_id', 'id');
	}

	public function materiais()
	{
		return $this->hasMany('App\Material', 'modulo_id', 'id');
	}

	public function exercicios()
	{
		return $this->hasMany('App\Exercicio', 'modulo_id', 'id');
	}

	public function getCursoAttribute()
	{
		return $this->agenda->curso;
	}

	// public function getIsAllowAttribute()
	// {
	// 	$days = Carbon::parse($this->data_inicio);
 //  	  	return Carbon::now()->diffInYears( $days ) > 0;
	// }

	public function getFormatedDateAttribute()
	{
		return Carbon::parse($this->data_inicio)->format('d/m/Y');
	}

	public function getOpennedAttribute()
	{
	    $date = Carbon::parse($this->data_inicio);
	    return $date <= Carbon::now();
	}
}
