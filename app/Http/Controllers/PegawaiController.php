<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index($nama = null)
    {
    	
        if ($nama) {

            return $nama;

        } else {

            $pegawai         = DB::table('pegawai')->paginate(5);
            $data['pegawai'] = $pegawai;
            return view('crud/pegawai', $data);

        }

    }

    public function tambah()
    {
        return view('crud/tambah');
    }

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
        return redirect('/pegawai');

    }

    public function edit($id)
    {

        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('id_pegawai', $id)->get();
        
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('crud/edit',['pegawai' => $pegawai]);

    }

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
        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('id_pegawai',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function formulir()
    {
    	return view('formulir');
    }

    public function proses(Request $request)
    {
    	$nama   = $request->input('nama');
    	$alamat = $request->input('alamat');
    	$hasil  = "nama : ".$nama." alamat : ".$alamat;
    	return $hasil;
    }
}
