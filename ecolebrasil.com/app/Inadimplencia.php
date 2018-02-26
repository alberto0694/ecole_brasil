<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Inadimplencia extends Model
{
     protected $fillable = ['nome', 'email', 'valor', 'vencimento', 'razao_pagamento', 'transacao', 'pago', 'pagar_data', 'max_parcelas'];

	public function getFvencimentoAttribute()
	{
    // dd($this->vencimento);
	if(($this->vencimento != '0000-00-00 00:00:00') && ($this->vencimento != null)){
    	return Carbon::parse($this->vencimento)->format('d/m/Y');
    }
    return '';
	}

	public function getCanPayAttribute()
	{
	    $date = Carbon::parse($this->vencimento);
	    $payInDate = ($this->pagar_data == 'S');
	    $isLate = ($date < Carbon::now()) && $payInDate;
	    $isPaied = $this->pago == 'S';
	    // dd(!$isPaied);
	    return (!$isLate || !$payInDate) && !$isPaied;
	}
}
