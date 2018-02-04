<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $fillable = ['card', 'titulo', 'valor', 'max_parcelas', 'file', 'transacao'];
}
