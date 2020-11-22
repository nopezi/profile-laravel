<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
	
	public function index(){
		$text = "Halo ini adalah method index, dalam controller DosenController";
		// return $text;
		$data['nama'] = 'jono';
		$data['makul'] = ['kalkulus', 'pemograman java', 'pemograman web'];
		return view('biodata', $data);
	}

}
