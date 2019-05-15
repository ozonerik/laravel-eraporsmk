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
				date_default_timezone_set('Asia/Jakarta');
				// mengambil data pegawai
				$sekolah = ModelSekolah::where('status','aktif')->first();
				// mengirim data pegawai ke view pegawai
				$pdf = PDF::loadView('pages.print.sekolah-print',compact('sekolah'))
				->setPaper('folio', 'portrait');
				return $pdf->download(substr(date("Ymdhi", time()),2)."_".'identitas_sekolah.pdf');
				//return view('pages.print.sekolah-print',compact('sekolah'));
			}
		}
    }
}
