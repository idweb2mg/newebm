<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FRCANAUX extends Model
{
  public function FRMATRICE()
   {
       return $this->hasOne('App\FRMATRICE');
   }
}
