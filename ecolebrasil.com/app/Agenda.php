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
    						'avatar'];

    public function curso()
    {
        return $this->belongsTo('App\Curso', 'curso_id', 'id');
    }

    public function getLabelComboAttribute()
    {
        return $this->curso->nome.' - '.$this->cidade.' - '.$this->datas.' / '.$this->monthRes;
    }

    public function modulos()
    {
     return $this->hasMany('App\Modulo')->orderBy('data_inicio', 'asc');
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

    public function getIndexMonthAttribute()
    {
         return Carbon::parse($this->data_inicio)->month;
    }

    public function getLogoAttribute()
    {
        return \Config::get('constants.meses_logo')[$this->indexMonth - 1];
    }

    public function getMonthResAttribute()
    {
        return \Config::get('constants.meses_res')[$this->indexMonth - 1];
    }
}
