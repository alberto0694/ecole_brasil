<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultora extends Model
{
    protected $fillable = ['nome', 'cidade', 'avatar','site'];
}
