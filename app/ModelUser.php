<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    //
	protected $table = 'users';
	protected $fillable = ['username','email','password','name','user_type'];
	public function users_usertypes(){
    	return $this->belongsTo('App\ModelUsertype','user_type','id_usertype');
    }
}
