<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Aluno;
use App\Professor;
use App\Administrador;

class AulaComentario extends Model
{
    protected $fillable = ['user_id', 'aula_id','comentario'];

    public function GetAvatarAttribute()
    {
    	$user = User::find( $this->user_id );
    	return $user->avatar;
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getItemAttribute()
    {

        if($this->user->permission == 'PF'){
        	$professor = Professor::where('user_id', '=', $this->user_id)->get()->first();
            return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$professor->nome.'</a><span class="grey"> comentou...</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'</div></div></div></div>';
        }else if($this->user->permission == 'AL'){
           	$aluno = Aluno::where('user_id', '=', $this->user_id)->get()->first();
           	return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$aluno->nome.'</a><span class="grey"> comentou...</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'</div></div></div></div>';
        }
    }

    public function aula()
    {
    	return $this->belongsTo('App\Aula');
    }    
}
