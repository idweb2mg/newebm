<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    return $this->belongsTo('App\User');
}