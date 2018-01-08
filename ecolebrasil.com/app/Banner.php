<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [ 'titulo',
								            'link_url',
								            'ativo',
								            'midia'];

    public function getBase64Attribute()
    {
    	return file_get_contents(public_path().'/'.$this->midia);
    }

	public function getStatusAttribute()
	{
	   if($this->ativo == 1){
	   		return '<span class="label label-sm label-success">Ativo</span>';
	   }else{
			return '<span class="label label-sm label-warning">Desativado</span>';
	   }
	}

	public function getItemAttribute()
	{
		if( (strpos($this->midia, 'png') != false) ||
			(strpos($this->midia, 'jpg') != false) ||
			(strpos($this->midia, 'jpeg')!= false) ||
			(strpos($this->midia, 'bmp') != false)  ){

			return '<a target="_blank" href="'.$this->link_url.'"><img src="'.asset($this->midia).'" alt="" style="width: 100%; display: block;"></a>';
		}else{
			return
			'<video class="video-index" style="background-color:rgba(239, 64, 96, 1); display:block; margin: 0 auto;" width="720" height="404" autoplay>
				<source src="'.asset($this->midia).'">
			</video>';
		}

	}


}
