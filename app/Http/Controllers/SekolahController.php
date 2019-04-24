<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSekolah;

class SekolahController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$sekolah = ModelSekolah::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('sekolah', ['sekolah' => $sekolah]);
    }
}
