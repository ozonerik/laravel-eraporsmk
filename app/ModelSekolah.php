<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSekolah extends Model
{
    //
	protected $table = 'sekolahs';
	protected $fillable = ['npsn','nss','password','nama_sekolah','alamat','kelurahan','kecamatan','provinsi','negara','kodepos','telp','email','website'];
}
