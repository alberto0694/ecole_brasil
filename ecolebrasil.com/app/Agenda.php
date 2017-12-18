<?php

namespace App;
use App\Curso;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [	'descricao', 
    						'datas', 
    						'cidade', 
                            'ministrantes',
                            'carga_horaria',
                            'data_inicio',
                            'modelo',
    						'curso_id',
    						'avatar'];

    public function curso()
    {
    	// return $this->belongsTo('App\Curso','curso_id', 'id');
        return $this->belongsTo('App\Curso', 'curso_id', 'id');
    }

    public function getFormatedDateAttribute()
    {
        return Carbon::parse($this->data_inicio)->format('d/m/Y');
    }  

    public function getIndexMonthAttribute()
    {
         return Carbon::parse($this->data_inicio)->month;
    }  

    public function getLogoAttribute()
    {
        return \Config::get('constants.meses_logo')[$this->indexMonth - 1];
    }
}
