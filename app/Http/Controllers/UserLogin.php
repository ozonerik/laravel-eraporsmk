<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\ModelUser;
use App\ModelUsertype;

class UserLogin extends Controller
{
	
    public function login(){
        return view('pages.login');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;
		
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('home');
        } 
		else {
			return redirect('login')->with('alert','Password atau Email, Salah !');
		}
    }

    public function logout(){
		Auth::logout();
		
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
		$usertype = ModelUsertype::all();
        return view('pages.register',['groupuser' => $usertype]);
    }

    public function registerPost(Request $request){
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
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}
