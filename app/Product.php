<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = "product";
   protected $primaryKey = 'id_pro';
   public function image()
    {
        return $this->hasMany('App\ImageProduct','id_pro');
    }
}
