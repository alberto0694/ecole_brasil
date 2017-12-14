<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;
use Carbon\Carbon;

class Aluno extends Model
{
    public function cursos()
    {
    	return $this->belongsToMany('App\Curso');
    }

    protected $fillable = [	'nome',
							'sobrenome',
							'nascimento',
							'avatar',
							'descricao_html',
							'profissao'
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
