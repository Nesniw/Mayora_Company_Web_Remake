<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContactForm extends Controller
{
	public function index() {
		return view('contactform');
		
	}
}
