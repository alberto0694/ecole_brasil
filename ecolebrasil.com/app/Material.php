<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaterialComentario;

class Material extends Model
{
	protected $fillable = [	'titulo',
							'modulo_id',
							'link',
							'arquivo',
							'descricao_html'];


	public function modulo()
	{
		return $this->belongsTo('App\Modulo');
	}

	public function comentarios()
	{
		return $this->hasMany('App\MaterialComentario', 'material_id')->orderBy('created_at', 'asc');
	}


    public function getLastTimeAttribute()
    {
    	$material_comentario = MaterialComentario::where('material_id', '=', $this->id)->orderBy('created_at', 'asc')->get()->last();
    	if($material_comentario != null){
    		return $material_comentario->created_at;
    	}
    	return null;
    }
}
