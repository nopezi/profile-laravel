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

    public function tambah_pesan(Request $request)
    {
        $hasil_id = DB::table('pesan_weeding')->insertGetId([
            'name' => $request->input('name'),
            'no_wa' => $request->input('no_wa'),
            'pesan' => $request->input('pesan'),
        ]);

        if (!empty($hasil_id)) {
            
            $cek = $this->cek($hasil_id);

            if (!empty($cek)) {
                return Response([
                    'status' => true,
                    'message' =>  'berhasil tambah data pesan',
                    'data' => $cek,
                ], 200);
            }

        } else {

            if (!empty($cek)) {
                return Response([
                    'status' => false,
                    'message' =>  'gagal insert id',
                    'data' => null,
                ], 200);
            }

        }
    }

    private function cek($id)
    {
        
        $cek = DB::table('pesan_weeding')
                 ->where('id', '=', $id)
                 ->get()
                 ->first();

        return $cek;
        
    }

}
