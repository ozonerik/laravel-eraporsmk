<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelUsertype;


class PenggunaController extends Controller
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
				$pengguna = ModelUser::all();
				// mengirim data pegawai ke view pegawai
				return view('pages.pengguna', ['pengguna' => $pengguna]);
			}
		}
    }
	
	public function del($id)
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
				$pengguna = ModelUser::where('id',$id)->delete();
				// mengirim data pegawai ke view pegawai
				return redirect('pengguna')->with('alert-success','Data Berhasil terhapus');
			}
		}
    }
	
	public function delall(Request $request)
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
				$ids=$request->ids;
				$pengguna = ModelUser::where('id', explode(",",$ids))->delete();
				// mengirim data pegawai ke view pegawai
				return redirect('pengguna')->with('alert-success','Data Berhasil terhapus');
			}
		}
    }
	
	public function edit()
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
				
			}
		}
    }
	
	public function update(Request $request)
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
				$messages = [
					'required' => 'kolom :attribute wajib diisi!',
					'digits' => 'kolom :attribute harus bernilai :digits karakter!',
					'numeric' => 'kolom :attribute harus harus diisi dengan angka!',
					'url' => 'kolom :attribute harus berbentuk URL (misalnya: http://www.test.com)!',
					'email' => 'kolom :attribute harus berbentuk Email (misalnya: test@test.com)!',
				];

				$this->validate($request,[
		   
				],$messages);
			 

				return redirect('pengguna')->with('alert-success','Data Berhasil terupdate');
			}
		}
    }
}
