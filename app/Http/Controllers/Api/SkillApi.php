<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SkillApi extends Controller
{
   
    public function index(Request $request)
    {
        
        $data =  DB::table('skill')->get()->all();

        if (!empty($data)) {
            return Response([
                'status' => true,
                'message' => 'data berhasil didapat',
                'data' => $data,
            ], 200);
        } else {
            return Response([
                'status' => false,
                'message' => 'data gagal didapat',
                'data' => [],
            ], 200);
        }
        
    }

    public function tambah(Request $request)
    {

        $tambah = DB::table('skill')->insertGetId([
            'nama_skill' => $request->nama_skill,
            'persentasi' => $request->nilai,
            'warna' => $request->warna,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $hasil = DB::table('skill')->where('id', $tambah)->get()->first();

        if (!empty($hasil)) {
            return Response([
                'status' => true,
                'message' => 'data berhasil di tambah',
                'data' => $hasil,
            ], 200);
        } else {
            return Response([
                'status' => false,
                'message' => 'data gagal di tambah',
                'data' => [],
            ], 200);
        }

    }

    public function edit(Request $request)
    {
        
        DB::table('skill')
          ->where('id', '=', $request->id)
          ->update([
            'nama_skill' => $request->nama_skill,
            'persentasi' => $request->nilai,
            'warna' => $request->warna,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $hasil = DB::table('skill')->where('id', '=', $request->id)->get()->first();

        if (!empty($hasil)) {
            return Response([
                'status' => true,
                'message' => 'data berhasil di edit',
                'data' => $hasil,
            ], 200);
        } else {
            return Response([
                'status' => false,
                'message' => 'data gagal di edit',
                'data' => [],
            ], 200);
        }

    }
    
}
