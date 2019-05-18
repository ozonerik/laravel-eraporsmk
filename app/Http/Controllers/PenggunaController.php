<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ModelUser;
use App\ModelUsertype;

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
				$groupuser = ModelUsertype::all();
				// mengirim data pegawai ke view pegawai
				return view('pages.pengguna.index', compact('pengguna','groupuser'));
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
        $messages = [
					'required' => 'kolom :attribute wajib diisi!',
					'digits' => 'kolom :attribute harus bernilai :digits karakter!',
					'min' => 'kolom :attribute minimal :min karakter!',
					'unique' => 'Silahkan ganti nilai di kolom :attribute dengan yang lain!',
					'numeric' => 'kolom :attribute harus harus diisi dengan angka!',
					'same' => 'kolom :attribute harus bernilai sama dengan password !',
					'url' => 'kolom :attribute harus berbentuk URL (misalnya: http://www.test.com)!',
					'email' => 'kolom :attribute harus berbentuk Email (misalnya: test@test.com)!',
					'alpha_num' => 'kolom :attribute harus berbentuk Huruf dan atau angka',
				];
        $this->validate($request, [
            'name' => 'required|min:4',
			'username' => 'required|alpha_num|min:4|unique:users',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required|min:6',
            'confirmation' => 'required|same:password',
			'user_type' => 'required',
        ],$messages);
		//registrasi
        $data =  new ModelUser();
        $data->name = $request->name;
		$data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
		$data->user_type = $request->user_type;
        $data->save();
        return redirect()->back()->with('alert-success','Kamu berhasil Register');
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
