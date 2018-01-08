<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
