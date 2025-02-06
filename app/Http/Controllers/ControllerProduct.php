<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cookie;

class ControllerProduct extends Controller
{
	public function index(){
		
		$dtp = DB::table('tbl_product')->orderby('kd_product', 'asc')->get();
		return view('viewProduct', compact('dtp'));
	}
	
	public function detail($kd_product){
		
		$dtp = DB::table('tbl_product')->where('kd_product', $kd_product)->first();
        return view('viewDetailProduct', compact('dtp'));
	}
}