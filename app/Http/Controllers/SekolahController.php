<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ModelSekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
				return view('pages.sekolah.index',compact('sekolah'));
			}
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
				$sekolah = ModelSekolah::find($id);
				// mengirim data pegawai ke view pegawai
				return view('pages.sekolah.edit', compact('sekolah'));
			}
		}
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
				$messages = [
					'required' => 'kolom :attribute wajib diisi!',
					'digits' => 'kolom :attribute harus bernilai :digits karakter!',
					'numeric' => 'kolom :attribute harus harus diisi dengan angka!',
					'url' => 'kolom :attribute harus berbentuk URL (misalnya: http://www.test.com)!',
					'email' => 'kolom :attribute harus berbentuk Email (misalnya: test@test.com)!',
				];

				$this->validate($request,[
				   'npsn' => 'required|digits:8|numeric',
				   'nss' => 'nullable|numeric',
				   'nama_sekolah' => 'required',
				   'alamat' => 'required',
				   'kelurahan' => 'required',
				   'kecamatan' => 'required',
				   'kota' => 'required',
				   'provinsi' => 'required',
				   'negara' => 'required',
				   'website' => 'nullable|url',
				   'kodepos' => 'required|digits:5|numeric',
				   'email' => 'nullable|email'			   
				],$messages);
			 
				$sekolah = ModelSekolah::where('status','aktif')->first();
				$sekolah->npsn = $request->npsn;
				$sekolah->nss = $request->nss;
				$sekolah->nama_sekolah = $request->nama_sekolah;
				$sekolah->alamat = $request->alamat;
				$sekolah->kelurahan = $request->kelurahan;
				$sekolah->kecamatan = $request->kecamatan;
				$sekolah->kota = $request->kota;
				$sekolah->kodepos = $request->kodepos;
				$sekolah->telp = $request->telp;
				$sekolah->website = $request->website;
				$sekolah->email = $request->email;
				$sekolah->provinsi = $request->provinsi;
				$sekolah->negara = $request->negara;
				$sekolah->save();
				return redirect('sekolah')->with('alert-success','Data Berhasil terupdate');
			}
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
