<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
    protected $fillable = ['descricao_html',
							'avatar',
							'autor'	
							];
            
}
