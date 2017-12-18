<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
      protected $fillable = ["contato",
                    "telefone",
                    "cidade",
                    "cidade_curso",
                    "ecole",
                    "mensagem",
                    "email"];
}
