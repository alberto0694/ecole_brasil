<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
    protected $fillable = ['descricao_html',
							'avatar',
							'autor',
							'video',
                            'apenas_video'
							];

    public function getAvatarBase64Attribute()
    {
    	return file_get_contents(public_path().'/'.$this->avatar);
    }
    
}
