<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\VideoComentario;
use App\User;
use App\Aluno;
use App\Exercicio;
use App\Professor;
use Carbon\Carbon;
use App\Administrador;


class VideoComentario extends Model
{
    protected $fillable = ['user_id', 'video_id','comentario'];

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

        if($this->user->permission == 'PF'){
        	$professor = Professor::where('user_id', '=', $this->user_id)->get()->first();
            return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$professor->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'

				</div></div></div></div>';
        }else if($this->user->permission == 'AL'){
           	$aluno = Aluno::where('user_id', '=', $this->user_id)->get()->first();
           	return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$aluno->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'
				</div></div></div></div>';
        }else{
            $administrador = Administrador::where('user_id', '=', $this->user_id)->get()->first();
            return '<div class="timeline-item clearfix"><div class="timeline-info"><img alt="" src="'.asset($this->avatar).'"></div><div class="widget-box transparent"><div class="widget-header widget-header-small"><h5 class="widget-title smaller"><a href="#" class="blue">'.$administrador->nome.'</a><span class="grey"> comentou em '.$this->when.'</span></h5></div><div class="widget-body"><div class="widget-main">'.$this->comentario.'
                </div></div></div></div>';  
        }
    }

    public function video()
    {
    	return $this->belongsTo('App\Video');
    }
}
