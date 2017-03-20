<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FRMATRICE extends Model
{
	public function FRCANAUX()
	{
	   return $this->belongsTo('App\FRCANAUX');
	}

	public function FRRELATIONCLIENT()
	{
	    return $this->belongsTo('App\FRRELATIONCLIENT');
	}

	public function FRPROPOSITIONDEVALEUR()
	{
	   return $this->belongsTo('App\FRPROPOSITIONDEVALEUR');
	}

	public function FRSOURCESDEREVENUS()
	{
	  return $this->belongsTo('App\FRSOURCESDEREVENUS');
	}

	public function FRRESSOURCESCLES()
	{
	   return $this->belongsTo('App\FRRESSOURCESCLES');
	}

	public function FRPARTENARIAT()
	{
	    return $this->belongsTo('App\FRPARTENARIAT');
	}

	public function FRACTIVITESCLES()
	 {
	     return $this->belongsTo('App\FRACTIVITESCLES');
	 }

	 public function FRSTRUCTUREDECOUTS()
	  {
	      return $this->belongsTo('App\FRSTRUCTUREDECOUTS');
	  }



} // class FRMATRICE extends Model