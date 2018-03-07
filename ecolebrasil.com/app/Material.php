<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaterialComentario;
use Carbon\Carbon;

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
    	return Carbon::now();
    }

    public function getPaintDownloadAttribute()
    {
    	$path_parts = pathinfo(asset($this->arquivo));
    	if(array_key_exists("extension", $path_parts)){
    		return '<a style="color:white" href="'.asset($this->arquivo).'" target="_blank"><button class="btn btn-pink">Download Conteúdo</button></a>';
    	}
    	return '';
    }
}
