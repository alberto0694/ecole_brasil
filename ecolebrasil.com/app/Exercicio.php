<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ExercicioComentario;
use Carbon\Carbon;

class Exercicio extends Model
{
	protected $fillable = [	'titulo',
							'modulo_id',
							'link',
							'arquivo',
							'descricao_html'];

	// public function getUrlExistsAttribute() {

	//     $ch = curl_init( asset($this->arquivo) );
	//     curl_setopt($ch, CURLOPT_NOBODY, true);
	//     curl_exec($ch);
	//     $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	//     curl_close($ch);
	//     return ($code == 200); // verifica se recebe "status OK"
	// }

	public function modulo()
	{
		return $this->belongsTo('App\Modulo');
	}

	public function comentarios()
	{
		return $this->hasMany('App\ExercicioComentario', 'exercicio_id')->orderBy('created_at', 'asc');
	}

    public function getPaintDownloadAttribute()
    {
    	$path_parts = pathinfo(asset($this->arquivo));
    	if(array_key_exists("extension", $path_parts) && (asset($this->arquivo) != 'http://ecolebrasil.com/')){
    		return '<a style="color:white" href="'.asset($this->arquivo).'" target="_blank"><button class="btn btn-pink">Download Exercício</button></a>';
    	}
    	return '';
    }

    public function getLastTimeAttribute()
    {
    	$exercicio_comentario = ExercicioComentario::where('exercicio_id', '=', $this->id)->orderBy('created_at', 'asc')->get()->last();
    	if($exercicio_comentario != null){
    		return $exercicio_comentario->created_at;
    	}
    	return Carbon::now();
    }
}
