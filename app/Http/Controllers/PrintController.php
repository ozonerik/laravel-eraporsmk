<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ModelSekolah;
use PDF;

class PrintController extends Controller
{
	
	public function sekolah_print()
    {
        if(!Auth::check()){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
			//hak akses halaman
			$hu = Auth::user()->user_type;
			if (!hak_akses('1,2',$hu)){
				return redirect('home');
			} else {
				// mengambil data pegawai
				$sekolah = ModelSekolah::where('status','aktif')->first();
				// mengirim data pegawai ke view pegawai
				$pdf = PDF::loadView('pages.print.sekolah-print',compact('sekolah'));
				//return $pdf->download('identitas_sekolah.pdf');
				return view('pages.print.sekolah-print',compact('sekolah'));
			}
		}
    }
}
