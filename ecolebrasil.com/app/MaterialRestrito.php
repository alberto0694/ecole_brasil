<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;

class MaterialRestrito extends Model
{
    protected $fillable = ['titulo', 'link', 'file'];

    public function getBase64Attribute()
    {
    	return file_get_contents(public_path().'/'.$this->file);
    }
}
