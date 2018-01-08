<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
