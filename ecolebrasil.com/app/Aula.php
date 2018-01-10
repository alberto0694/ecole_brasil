<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
	protected $fillable = [	'titulo',
							'modulo_id',
							'url_video',
							'descricao_html'];
							
	public function modulo()
	{
		return $this->belongsTo('App\Modulo');
	}	

	public function comentarios()
	{
		return $this->hasMany('App\AulaComentario', 'aula_id')->orderBy('created_at', 'asc');
	}
}
