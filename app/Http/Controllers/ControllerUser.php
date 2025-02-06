<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Session;

class ControllerUser extends Controller {	
	public function index(Request $req){
		if($req->session()->has('tbl_user')){
			$dtuser = DB::table('tbl_user')->orderby('created', 'desc')->get();
			
			return view('readUser', compact('dtuser'));
		}
		else{
			return redirect()->action('ControllerLogin@index');
		}
	}
	
	public function create(Request $req){
		if($req->session()->has('tbl_user')){
			return view('createUser');
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
	
	public function process_create(Request $req){
		if($req->session()->has('tbl_user')){
			try{				
				DB::table('tbl_user')->insert([
					'username'	=>$req->username,
					'password'	=>md5($req->password),
					'level'		=>$req->level,
				]);
				Session::flash('success', 'Berhasil Create Data User');
				return redirect()->action('App\Http\Controllers\ControllerUser@index');
			}
			catch(QueryException $ex){
				Session::flash('failed', $req->username.' sudah memiliki akun');
			}
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
    }
	
	public function update(Request $req, $username){
		if($req->session()->has('tbl_user')){
			$dtuser = DB::table('tbl_user')->where('username', $username)->first();
            return view('updateUser', compact('dtuser'));
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
	
	public function process_update(Request $req){
		if($req->session()->has('tbl_user')){
			$username	= $req->username;
			$level		= $req->level;
			try{
				if(empty($req->password)){
					DB::table('tbl_user')->where('username', $username)
									 ->update(['level' => $level]);
				}
				else{
					DB::table('tbl_user')->where('username', $username)
									 ->update(['password' => md5($req->password), 'level' => $level, 'updated' => date('Y-m-d H:i:s')]);
				}
				
				if(Session::get('tbl_user')==$username){
					Session::flash('success', 'Silakan Login Kembali');
					return redirect()->action('App\Http\Controllers\ControllerLogin@index');
				}
				else{
					Session::flash('success', 'Berhasil Update Data User');
					return redirect()->action('App\Http\Controllers\ControllerUser@index');
				}
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Gagal update data ke dalam database');
				return redirect()->action('App\Http\Controllers\ControllerUser@index');
			}
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
    }
	
	public function delete(Request $req, $username){
		if($req->session()->has('tbl_user')){
			try{
				DB::table('tbl_user')->where('username', $username)
								 ->delete();
				Session::flash('success', 'Berhasil Delete Data User');
				if(Session::get('tbl_user')==$username){
					return redirect()->action('App\Http\Controllers\ControllerLogin@index');
				}
				return redirect()->action('App\Http\Controllers\ControllerUser@index');
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Gagal delete data');
			}
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
}