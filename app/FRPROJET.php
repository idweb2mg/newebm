<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FRPROJET extends Model
{
  public function FRMATRICE()
   {
       return $this->hasMany('App\FRMATRICE');
   }

}