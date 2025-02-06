<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Session;
use File;

class ControllerManageProduct extends Controller {	
	public function index(Request $req){
		if($req->session()->has('tbl_user')){
			if(isset($_GET['keyword'])){
				$keyword = $req->keyword;
				$dtp  = DB::table('tbl_product')
									->where('kd_product', 'like', '%'.$keyword.'%')
									->orWhere('nama_product', 'like', '%'.$keyword.'%')
									->orWhere('hrg_product', 'like', '%'.$keyword.'%')
									->get();
			}
			else{
				$dtp = DB::table('tbl_product')->orderby('kd_product', 'asc')->get();
			}
			return view('readProduct', compact('dtp'));
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
	
	public function create(Request $req){
		if($req->session()->has('tbl_user')){
			return view('createProduct');
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
	
	public function process_create(Request $req){
		if($req->session()->has('tbl_user')){
			try{
				$file 				= $req->file('foto');
				$extension			=['jpeg','jpg','png'];
				$extension_file 	= $file->getClientOriginalExtension();
				$size_file			= $file->getSize();
				$check				= in_array($extension_file,$extension);
				if($check){
					if ($size_file <= 5242880){
						$nama_file 	= $req->kode.".".$file->getClientOriginalExtension();
						DB::table('tbl_product')->insert([
							'kd_product'	=>$req->kode,
							'foto_product'	=>$nama_file,
							'nama_product'	=>$req->nama,
							'hrg_product'	=>$req->harga,
							'deskripsi'		=>$req->deskripsi,
						]);
						$tujuan_upload 	= 'product';
						$file->move($tujuan_upload,$nama_file);
						Session::flash('success', 'Berhasil Create Data Product');
					}
					else{
						Session::flash('failed', 'Size file max 5MB');
						return redirect()->back()->withInput();	
					}
				}
				else{
					Session::flash('failed', 'Extension file yang diterima hanya .jpeg, .jpg, dan .png');
					return redirect()->back()->withInput();	
				}
			}
			catch(QueryException $ex){
				Session::flash('failed', $req->kode.'Product telah ada di database');
			}
			return redirect()->action('App\Http\Controllers\ControllerManageProduct@index');
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
    }
	
	public function update(Request $req, $kd_product){
		if($req->session()->has('tbl_user')){
			$dtp = DB::table('tbl_product')->where('kd_product', $kd_product)->first();
            return view('updateProduct', compact('dtp'));
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}
	}
	
	public function process_update(Request $req){
		if($req->session()->has('tbl_user')){
			$kode 			= $req->kode;
			$nama 			= $req->nama;
			$harga 			= $req->harga;
			$deskripsi		= $req->deskripsi;
			
			try{
				if(empty($req->file('foto'))) {
					DB::table('tbl_product')->where('kd_product', $kode)
											->update([
											'hrg_product'	=>$harga, 'nama_product'  =>$nama, 
											'deskripsi'		=>$deskripsi]);
					Session::flash('success', 'Berhasil Update Data Product');
				}
				else{
					$file 				= $req->file('foto');
					$extension			= ['jpeg','jpg','png'];
					$extension_file 	= $file->getClientOriginalExtension();
					$size_file			= $file->getSize();
					$check				= in_array($extension_file,$extension);
					
					if($check){
						if ($size_file <= 5242880){
							$old  		= DB::table('tbl_product')->where('kd_product', $kode)
																->get();
										
							$nama_file 	= $req->kode.".".$file->getClientOriginalExtension();
									
							DB::table('tbl_product')->where('kd_product', $kode)
													->update([
													'foto_product' => $nama_file,'hrg_product'	=>$harga, 
													'nama_product'  =>$nama, 'deskripsi' =>$deskripsi]);
					
							foreach ($old as $o){
								unlink(public_path("product/".$o->foto_product));
							}
							
							$tujuan_upload 	= 'product';
							$file->move($tujuan_upload,$nama_file);
							
							Session::flash('success', 'Berhasil Update Data Product');
						}
						else{
							Session::flash('failed', 'Size file max 5MB');
							return redirect()->back()->withInput();	
						}
					}
					else{
						Session::flash('failed', 'Extension file yang diterima hanya .jpeg, .jpg, dan .png');
						return redirect()->back()->withInput();	
					}
					return redirect()->action('App\Http\Controllers\ControllerManageProduct@index');
				}
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Gagal update data ke dalam database');
			}
			return redirect()->action('App\Http\Controllers\ControllerManageProduct@index');
		}
		else{
			return redirect()->action('App\Http\Controllers\ControllerLogin@index');
		}	
    }
	
	public function delete(Request $req, $kd_product){
		if($req->session()->has('tbl_user')){
			try{
				$file = DB::table('tbl_product')->where('kd_product', $kd_product)
											  ->get();
				
				DB::table('tbl_product')->where('kd_product', $kd_product)
									  ->delete();
				
				foreach ($file as $f){
					unlink(public_path("product/".$f->foto_product));
				}
				
				Session::flash('success', 'Berhasil Delete Data Product');
				return redirect()->action('App\Http\Controllers\ControllerManageProduct@index');
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
