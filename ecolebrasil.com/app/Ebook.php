<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $fillable = ['titulo', 'valor', 'max_parcelas', 'file'];
}
