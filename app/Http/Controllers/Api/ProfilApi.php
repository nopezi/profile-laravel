<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

/**
 * 
 */
/**
 * 
 */
class ProfilApi extends Controller
{
	
	public function index()
	{

		$data = DB::table('profil')->first();
		// $data->url_gambar = 'http://shielded-beyond-23529.herokuapp.com/gambar/'.$data->foto;
		$data->url_gambar = asset('gambar').'/'.$data->foto; 

		return Response([
            'status'  => true,
            'message' => 'Berhasil dapat data',
            'data'    => $data
        ], 200);

	}

	public function edit(Request $request)
	{
		$data_update = $request->input();

		DB::table('profil')
		  ->where('id', 1)
		  ->update($data_update);

		$data = DB::table('profil')
				  ->where('id', 1)
				  ->get()
				  ->first();

		return Response([
            'status'  => true,
            'message' => 'Berhasil edit data',
            'data'    => $data
        ], 200);

	}

}