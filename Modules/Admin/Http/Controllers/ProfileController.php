<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Entities\JenisPosting;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data['id_menu']    = null;
        $data['jenis_menu'] = JenisPosting::all();
        $data['data']       = JenisPosting::all();
        $cek_profil         = DB::table('profil')->first();

        if (empty($cek_profil)) {
            $profil = (object)[
                'id'           => null,
                'nama_lengkap' => null,
                'tempat_lahir' => null,
                'tanggal_lahir'=> null,
                'no_hp'        => null,
                'email'        => null,
                'agama'        => null,
                'alamat'       => null,
                'hobi'         => null,
                'deskripsi'    => null,
                'foto'         => null,
            ];

            $data['profile'] = $profil;
        } else {
            $data['profile'] = $cek_profil;
        }

        return view('admin::profile/index', $data);

    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        
        if (!empty($request->id)) {
            
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir'=> $request->tgl_lahir,
                'agama'        => $request->agama,
                'email'        => $request->email,
                'no_hp'        => $request->no_hp,
                'hobi'         => $request->hobi,
                'alamat'       => $request->alamat,
                'deskripsi'    => $request->deskripsi
            ];

            $hasil_update = DB::table('profil')
                                ->where('id', $request->id)
                                ->update($data);

            $request->session()->flash('berhasil', true);

        } else {

            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir'=> $request->tgl_lahir,
                'agama'        => $request->agama,
                'email'        => $request->email,
                'no_hp'        => $request->no_hp,
                'hobi'         => $request->hobi,
                'alamat'       => $request->alamat,
                'deskripsi'    => $request->deskripsi
            ];

            $hasil_update = DB::table('profil')->insert($data);

            $request->session()->flash('berhasil', true);

        }
        
        return redirect('/admin/profile');

    }

    public function ganti_foto(Request $request)
    {

        if ($request->hasFile('foto')) {

            $gambar_lama = \base_path() ."/public/gambar/". $request->foto_lama;
            
            if (file_exists($gambar_lama)) {
                @unlink($gambar_lama);
            }
            
            $resorce = $request->file('foto');
            $nama    = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/gambar", $nama);

            $hasil_update = DB::table('profil')
                            ->where('id', $request->id)
                            ->update(['foto'=>$nama]);

            $request->session()->flash('berhasil_ganti_gambar', true);
        
            return redirect('/admin/profile');

        } else {

            $request->session()->flash('gagal_ganti_gambar', true);
        
            return redirect('/admin/profile');

        }

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
