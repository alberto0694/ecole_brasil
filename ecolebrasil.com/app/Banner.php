<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [ 'titulo',
				            'imagem',
				            'link_video',
				            'link_url',
				            'ativo',
				            'midia'];

	public function getStatusAttribute()
	{
	   if($this->ativo == 1){
	   		return '<span class="label label-sm label-success">Ativo</span>';
	   }else{
			return '<span class="label label-sm label-warning">Desativado</span>';
	   }
	}


}
