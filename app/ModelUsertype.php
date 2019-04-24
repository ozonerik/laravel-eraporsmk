<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUsertype extends Model
{
    //
	protected $table = 'usertypes';
	protected $fillable = ['id_usertype','jenis_user'];
	public function usertypes_users(){
    	return $this->hasMany('App\ModelUser','id_usertype','user_type');
    }
}
