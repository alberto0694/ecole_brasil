<?php

namespace App;
use App\Curso;
use App\Modulo;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [	'descricao',
    						'datas',
    						'cidade',
                            'valor',
                            'max_parcelas',
                            'ministrantes',
                            'carga_horaria',
                            'data_inicio',
                            'transacao',
                            'modelo',
    						'curso_id',
                            'valorComDesconto',
    						'avatar',
                            'videoconferencia'];

    protected $appends = array('valorComDesconto');

    public function curso()
    {
        return $this->belongsTo('App\Curso', 'curso_id', 'id');
    }


    public function getValorComDescontoAttribute()
    {
        return (String)(floor($this->valor * .90)).".00";
    }

    public function getLabelComboAttribute()
    {
        return $this->curso->nome.' - '.$this->cidade.' - '.$this->datas.' / '.$this->monthRes;
    }

    public function modulos()
    {
     return $this->hasMany('App\Modulo')->where('visible', '=', '1')->orderBy('data_inicio', 'asc');
    }

    public function getModeloLabelAttribute()
    {
        if($this->modelo == 'D'){
            return 'À Distância';
        }else{
            return 'Presencial';
        }
    }

    public function getFormatedDateAttribute()
    {
        return Carbon::parse($this->data_inicio)->format('d/m/Y');
    }

    public function getYearAttribute()
    {
        return Carbon::parse($this->data_inicio)->format('y');
    }

    public function getIndexMonthAttribute()
    {
         return Carbon::parse($this->data_inicio)->month;
    }

    public function getDayMonthAttribute()
    {
         return Carbon::parse($this->data_inicio)->day . '/' . Carbon::parse($this->data_inicio)->month;
    }

    public function getLogoAttribute()
    {
        return \Config::get('constants.meses_logo')[$this->indexMonth - 1];
    }

    public function getMonthResAttribute()
    {
        return \Config::get('constants.meses_res')[$this->indexMonth - 1].'/'.$this->year;
    }
}
