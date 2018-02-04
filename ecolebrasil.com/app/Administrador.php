<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = ['user_id', 'avatar', 'nome', 'sobrenome', 'nascimento'];

	public function getFnascimentoAttribute()						
	{
		return Carbon::parse($this->nascimento)->format('d/m/Y');
	}    

	public function user()
	{
		return $this->belongsTo('App\User');
	}	
}
