<?php

namespace Modules\Tes\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $pegawai         = DB::table('pegawai')->orderBy('id_pegawai', 'desc')->paginate(5);
        $data = [
            'pegawai' => $pegawai,
            'cari'    => null,
            'status'  => null,
        ];
        return view('tes::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function tambah()
    {
        return view('tes::tambah');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'nama_pegawai' => $request->nama,
            'jabatan'      => $request->jabatan,
            'umur'         => $request->umur,
            'alamat'       => $request->alamat,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/tes');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('tes::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('id_pegawai', $id)->get();
        
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tes::edit',['pegawai' => $pegawai]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('id_pegawai',$request->id)->update([
            'nama_pegawai' => $request->nama,
            'jabatan'      => $request->jabatan,
            'umur'         => $request->umur,
            'alamat'       => $request->alamat,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/tes');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function hapus($id)
    {
         // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('id_pegawai',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tes');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
                       ->where('nama_pegawai', 'like', "%".$cari."%")
                       ->paginate();

        // mengirim data pegawai ke view index
       $data = [
        'pegawai' => $pegawai,
        'cari'    => $cari,
        'status'  => 'cari',
       ];
        return view('tes::index', $data);
    }
}
