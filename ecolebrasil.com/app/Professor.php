<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Professor extends Model
{
    protected $fillable = [	'nome',
							'sobrenome',
							'nascimento',
							'avatar',
							'descricao_html',
							'apresentacao_video'
							];

	public function getIdadeAttribute()
	{
	    
		$birth = Carbon::parse($this->nascimento);
	    return Carbon::now()->diffInYears( $birth );
	}	

	public function getFnascimentoAttribute()						
	{
		return Carbon::parse($this->nascimento)->format('d/m/Y');
	}
}
