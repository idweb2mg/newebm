<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{

		/**
	 * One to One relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasOne
	 */
	    public function projet() 
	{
	  return $this->hasOne('App\FRPROJET');
	}
 
	 /**
	 * Check admin role
	 *
	 * @return bool
	 */
	public function isAdmin()
	{
	    return $this->role->slug == 'admin';
	}
	 
	/**
	 * Check not user role
	 *
	 * @return bool
	 */
	public function isNotUser()
	{
	    return $this->role->slug != 'user';
	}

}
