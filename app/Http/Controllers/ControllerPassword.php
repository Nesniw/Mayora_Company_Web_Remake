<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cookie;

class ControllerPassword extends Controller
{
    public function index(Request $req){
		if($req->session()->has('tbl_user')){
			return view('changePassword');
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
		
	public function process_change(Request $req){
		if($req->session()->has('tbl_user')){
			$user 		= Session::get('tbl_user');
			$pass 		= $req->password;
			$confirm 	= $req->confirm;
			
			if($pass==$confirm){
				try{
					DB::table('tbl_user')->where('username', $user)
									 ->update(['password' => md5($req->password)]);
				}
				catch(QueryException $ex){
					Session::flash('failed', 'Gagal update data ke dalam database');
				}
				Session::flash('success', 'Berhasil mengubah Password');
				return redirect("/");
			}
			else{
				Session::flash('failed', 'Password baru dan konfirmasi tidak sesuai');
				return redirect()->back()->withInput();
			}
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
}
