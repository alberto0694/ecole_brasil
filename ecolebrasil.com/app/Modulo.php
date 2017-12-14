<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;
use App\Material;
use App\Exercicio;
use App\Professor;
use Carbon\Carbon;

class Modulo extends Model
{
    protected $fillable = ['titulo', 'data_inicio', 'curso_id', 'titulo', 'descricao_html', 'card'];

	public function curso()
	{
		return $this->belongsTo('App\Curso', 'curso_id', 'id');
	}  

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
