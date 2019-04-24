<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUsertype extends Model
{
    //
	protected $table = 'usertype';
	protected $fillable = ['kodeuser','jenis_user'];
	public function users(){
    	return $this->hasMany('App\ModelUser');
    }
}
