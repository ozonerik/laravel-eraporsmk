<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\ModelSekolah;


class SekolahController extends Controller
{
    public function index()
    {
    	if(!Auth::check()){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
			//hak akses halaman
			$hu = Auth::user()->user_type;
			if ($hu!=='1'&&$hu!=='2'){
				return redirect('home');
			} else {
				// mengambil data pegawai
				$sekolah = ModelSekolah::where('status','aktif')->first();
				// mengirim data pegawai ke view pegawai
				return view('pages.sekolah', ['dtsek' => $sekolah]);
			}
		}
    }
}
