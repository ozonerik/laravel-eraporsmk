<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelUser extends Authenticatable
{
    //
	protected $table = 'users';
	protected $fillable = ['username','email','password','name','user_type'];
	public function users_usertypes(){
    	return $this->belongsTo('App\ModelUsertype','user_type','id_usertype');
    }
}
