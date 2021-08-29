<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class JenisPostingApi extends Controller
{
   
    public function index(Request $request)
    {
        
        $data =  DB::table('jenis_posting')
                    ->orderBy('id', 'desc')
                    ->get()
                    ->all();

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
    
}
