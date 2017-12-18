<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imprensa extends Model
{
    protected $fillable = ['titulo', 'descricao', 'descricao_html'];
}
