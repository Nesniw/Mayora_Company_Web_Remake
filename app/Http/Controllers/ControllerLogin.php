<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cookie;

class ControllerLogin extends Controller
{
    public function index(){
		return view('login');
	}
		
	public function process_login(Request $req){
		$user = $req->username;
        $pass = $req->password;
		$rem  = $req->remember;
		
		$login = DB::table('tbl_user')->where('username', $user)
								  ->where('password',md5($pass))
								  ->first();

		if($login){
			$dtuser = DB::table('tbl_user')->where('username',$user)
										   ->first();
			session(['tbl_user' => $user, 'level' => $login->level, 'name' => $dtuser->username]);
			if($rem){
				Cookie::queue('cookieUser', $user, 60*365);
				Cookie::queue('cookiePass', $pass, 60*365);
			}
			if($login->level=="Admin"){
				return redirect()->action('App\Http\Controllers\ControllerDashboard@index');
			}
			else{
				return redirect("/");
			}
		}
		else{
			Session::flash('failed', 'Username atau Password Salah');
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');			
		}
	}
	
	public function process_logout(Request $req){
		Session::flush();
		if(!($req->session()->has('tbl_user'))){
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
}