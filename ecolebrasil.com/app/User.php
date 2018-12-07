<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Aluno;
use App\Professor;
use App\Administrador;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'permission'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function professores()
    {
        return $this->hasMany('App\Professor');
    }

    public function alunos()
    {
        return $this->hasMany('App\Aluno');
    }

    public function administradores()
    {
        return $this->hasMany('App\Administrador');
    }

    public function getAvatarAttribute()
    {
        if($this->permission == 'PF'){
            return Professor::where('user_id', '=', $this->id)->get()->first()->avatar;
        }else if($this->permission == 'AL' || $this->permission == 'AR'){
            return Aluno::where('user_id', '=', $this->id)->get()->first()->avatar;
        }else{
            return Administrador::where('user_id', '=', $this->id)->get()->first()->avatar;
        }
    }


}
