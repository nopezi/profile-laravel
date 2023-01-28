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
            $posting = DB::table('posting')
                         ->where('id_kategori', $parameter->id_kategori)
                         ->orderBy('id', 'desc')
                         ->get();
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

    private function cek($id)
    {
        
        $cek = DB::table('posting')
                 ->where('id', '=', $id)
                 ->get()
                 ->first();

        return $cek;
        
    }

    public function tambah(Request $request)
    {
        
        $hasil_id = DB::table('posting')->insertGetId([
            'id_kategori' => $request->input('id_kategori'),
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'gambar' =>'',
        ]);
        
        if (!empty($hasil_id)) {
            
            $cek = $this->cek($hasil_id);

            if (!empty($cek)) {
                return Response([
                    'status' => true,
                    'message' =>  'berhasil tambah data posting',
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

    public function edit(Request $request)
    {
        
        $input = $request->input();

        $update = DB::table('posting')
                    ->where('id', '=', $input['id'])
                    ->update([
                        'judul' => $input['judul'],
                        'isi' => $input['isi'],
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);

        $cek = $this->cek($input['id']);

        if (!empty($cek)) {
            return Response([
                'status' => true,
                'message' => 'Berhasil  edit data',
                'data' => $cek,
            ], 200);
        } else {
            return Response([
                'status' => false,
                'message' => 'Gagal  edit data',
                'data' => null,
            ], 200);
        }
        
    }

    public function hapus(Request $request)
    {

        $id = $request->input('id');

        DB::table('posting')->where('id', '=', $id)->delete();

        return Response([
            'status' => true,
            'message' => 'Berhasil  hapus data',
            'data' => '',
        ], 200);

    }

}