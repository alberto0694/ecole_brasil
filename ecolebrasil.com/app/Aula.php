<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AulaComentario;

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


    public function getLastTimeAttribute()
    {
    	$aula_comentario = AulaComentario::where('aula_id', '=', $this->id)->orderBy('created_at', 'asc')->get()->last();
    	if($aula_comentario != null){
    		return $aula_comentario->created_at;
    	}
    	return null;    	
    }	
}
