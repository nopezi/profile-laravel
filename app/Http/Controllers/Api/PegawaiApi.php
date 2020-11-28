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
class PegawaiApi extends Controller
{
	
	public function index()
    {

        $pegawai = DB::table('pegawai')->paginate(5);

        return Response([
            'status'  => true,
            'message' => 'Berhasil dapat data',
            'data'    => $pegawai
        ], 200);

    }

}