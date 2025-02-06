<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ControllerDashboard extends Controller
{
    public function index(Request $request){
		if($request->session()->has('tbl_user')){
			return view('dashboard');
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
	
	public function datauser(Request $request){
		if($request->session()->has('user')){
			$dtuser = DB::table('user')->orderby('no_induk', 'desc')->get();
			return view('readUser', compact('dtuser'));
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
	
	public function datamahasiswa(Request $request){
		if($request->session()->has('user')){
			$dtmhs = DB::table('mahasiswa')->orderby('no_induk', 'desc')->get();
			return view('readMahasiswa', compact('dtmhs'));
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
}