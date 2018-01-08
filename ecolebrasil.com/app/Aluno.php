<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agenda;
use Carbon\Carbon;

class Aluno extends Model
{
  protected $fillable = [	'nome',
						'sobrenome',
						'nascimento',
						'avatar',
						'user_id',
						'descricao_html',
						'profissao'
						];

  public function agendas()
  {
  	return $this->belongsToMany('App\Agenda', 'aluno_agendas');
  }

  public function removeAllAgendas()
  {
  	$this->agendas()->detach();
  	return $this->agendas();
  }

  public function addAgenda(Agenda $agenda)
  {
  	$this->agendas()->save( $agenda );
  	return $this->agendas();
  }

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

    // public function getAvatarBase64Attribute()
    // {
    // 	return file_get_contents(public_path().'/'.$this->avatar);
    // }
}
