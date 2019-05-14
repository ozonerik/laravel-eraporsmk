<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ModelUser;

class PenggunaController extends Controller
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
				$pengguna = ModelUser::get();
				// mengirim data pegawai ke view pegawai
				return view('pages.pengguna.index', compact('pengguna'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
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
				$id = $request->pengguna_id;
				// mengambil data pegawai
				$pengguna = ModelUser::find($id);
				$pengguna -> delete();
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
			if (!hak_akses('1,2',$hu)){
				return redirect('home');
			} else {
				$ids = $request->pengguna_id;
				$pengguna = ModelUser::whereIn('id',explode(",",$ids));
				$pengguna -> delete();
				return redirect('pengguna')->with('alert-success','Data Berhasil terhapus');
			}
		}
    }
}
