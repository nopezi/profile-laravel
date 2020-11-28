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
class PostingApi extends Controller
{
	
	public function index(Request $parameter)
    {

        if (empty($parameter->id_kategori)) {
           $posting = DB::table('posting')->paginate(50);
        } else {
            $posting = DB::table('posting')->where('id_kategori', $parameter->id_kategori)->get();
        }
        

        if (!empty($posting)) {
            
            return Response([
                'status'  => true,
                'message' => 'Berhasil dapat data',
                'data'    => $posting
            ], 200);

        } else {

            return Response([
                'status'  => false,
                'message' => 'gagal dapat data',
                'data'    => null
            ], 200);

        }

    }

}