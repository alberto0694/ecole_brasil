<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Aluno;
use App\Aula;
use App\Professor;
use Carbon\Carbon;
use App\Administrador;
use App\AulaComentario;

class AulaComentario extends Model
{
    protected $fillable = ['user_id', 'aula_id','comentario'];

    public function GetAvatarAttribute()
    {
    	$user = User::find( $this->user_id );
    	return $user->avatar;
    }

	public function getWhenAttribute()
	{
		$data = Carbon::parse($this->created_at)->format('d/m/Y');
		$hora = Carbon::parse($this->created_at)->format('h:i');
		return $data.' às '.$hora;
	}

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getItemAttribute()
    {
        // dd($this->user->name);
        if($this->user->permission == 'PF'){
        	$professor = Professor::where('user_id', '=', $this->user_id)->get()->first();
            return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$professor->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'

				</div></div></div></div>';
        }else if($this->user->permission == 'AL' || $this->user->permission == 'AR'){
           	$aluno = Aluno::where('user_id', '=', $this->user_id)->get()->first();
           	return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$aluno->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'
				</div></div></div></div>';
        }else{
            $administrador = Administrador::where('user_id', '=', $this->user_id)->get()->first();
            return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$administrador->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'
                </div></div></div></div>';
        }
    }

    // public function getItemAttribute()
    // {
    // 	if($this->user_id == Auth::user()->id){
    // 		return $this->itemSelf;
    // 	}else{
    // 		return $this->
    // 	}
    // }

    // public function getItemSelfAttribute()
    // {

    //     if($this->user->permission == 'PF'){
    //     	$professor = Professor::where('user_id', '=', $this->user_id)->get()->first();
    //         return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$professor->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'
				// </div></div></div></div>';
    //     }else if($this->user->permission == 'AL'){
    //        	$aluno = Aluno::where('user_id', '=', $this->user_id)->get()->first();
    //        	return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$aluno->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'
				// </div></div></div></div>';
    //     }
    // }

    public function aula()
    {
    	return $this->belongsTo('App\Aula');
    }
}
