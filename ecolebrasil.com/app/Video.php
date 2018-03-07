<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Video extends Model
{
	protected $fillable = [	'titulo',
							'modulo_id',
							'link_video',
							'descricao_html'];

	public function modulo()
	{
		return $this->belongsTo('App\Modulo');
	}

	public function comentarios()
	{
		return $this->hasMany('App\VideoComentario', 'video_id')->orderBy('created_at', 'asc');
	}


    public function getLastTimeAttribute()
    {
    	$video_comentario = VideoComentario::where('video_id', '=', $this->id)->orderBy('created_at', 'asc')->get()->last();
    	if($video_comentario != null){
    		return $video_comentario->created_at;
    	}
    	return Carbon::now();
    }
}
