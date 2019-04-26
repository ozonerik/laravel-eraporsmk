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
        $this->validate($request, [
            'name' => 'required|min:4',
			'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
			'user_type' => 'required',
        ]);
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
