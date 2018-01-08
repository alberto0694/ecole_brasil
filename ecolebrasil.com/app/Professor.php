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
							'user_id',
							'descricao_html',
							'apresentacao_video'
							];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function getIdadeAttribute()
	{
	    
		$birth = Carbon::parse($this->nascimento);
	    return Carbon::now()->diffInYears( $birth );
	}	

	public function getFnascimentoAttribute()						
	{
		return Carbon::parse($this->nascimento)->format('d/m/Y');
	}

    public function getAvatarBase64Attribute()
    {
    	return file_get_contents(public_path().'/'.$this->avatar);
    }

}
