<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FRACTIVITESCLES extends Model
{
  public function FRMATRICE()
   {
       return $this->hasOne('App\FRMATRICE');
   }
}
