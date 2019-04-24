<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\ModelSekolah;
use App\ModelUser;


class SekolahController extends Controller
{
    public function index()
    {
    	if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
			// mengambil data pegawai
			$sekolah = ModelSekolah::where('status','aktif')->first();
			// mengirim data pegawai ke view pegawai
			return view('pages.sekolah', ['dtsek' => $sekolah]);
		}
    }
}
