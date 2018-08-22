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
  		return $this->belongsToMany('App\Agenda', 'aluno_agendas');//->where('visible', '=', '1');
  }

  public function getHasRestritoAttribute()
  {
  		$agendas = $this->agendas;
  		foreach ($agendas as $agenda) {
  			if($agenda->curso->id == 3){
  				return true;
  			}
  		}
  		return false;
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
		if(($this->nascimento != '0000-00-00 00:00:00')  && ($this->nascimento)){
      $birth = Carbon::parse($this->nascimento);
  	  return Carbon::now()->diffInYears( $birth );
    }else{
      return '-';
    }
	}

	public function getFnascimentoAttribute()
	{
    // dd($this->nascimento);
		if(($this->nascimento != '0000-00-00 00:00:00') && ($this->nascimento)){
      return Carbon::parse($this->nascimento)->format('d/m/Y');
    }
    return '';
	}

    // public function getAvatarBase64Attribute()
    // {
    // 	return file_get_contents(public_path().'/'.$this->avatar);
    // }
}
