<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class Weeding extends Controller
{
    
    public function pesan(Request $parameter)
    {

        $pesan = DB::table('pesan_weeding')->orderBy('id', 'DESC')->get();

        if (!empty($pesan)) {
            
            return Response([
                'status'  => true,
                'message' => 'Berhasil dapat data',
                'data'    => $pesan
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
