<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\ModelUser;

class UserLogin extends Controller
{
	public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('pages.home');
		}
    }

    public function login(){
        return view('pages.login');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = ModelUser::where('username','=',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
				Session::put('username',$data->username);
				Session::put('usertype',$data->user_type);
				Session::put('name',$data->name);
				Session::put('group_user',$data->users_usertypes->group_user);				
                Session::put('login',TRUE);
                return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('pages.register');
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
