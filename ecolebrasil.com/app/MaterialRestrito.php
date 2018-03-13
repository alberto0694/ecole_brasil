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

    public function getPaintDownloadAttribute()
    {
      $path_parts = pathinfo(asset($this->file));
      if(array_key_exists("extension", $path_parts)){
        return '<a style="color:white" target="_blank" href="'.asset($this->file).'">
                  <button id="" class="btn btn-pink">
                      Download Material
                  </button>
                </a>';
      }
      return '';
    }
}
