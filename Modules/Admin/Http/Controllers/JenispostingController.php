<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Admin\Entities\JenisPosting;

class JenispostingController extends Controller
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
        
        return view('admin::jenis_posting/index', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $jenis = new JenisPosting();
        $jenis->jenis = $request->jenis;
        $jenis->icon = $request->icon;
        $jenis->save();

        if ($jenis) {
            $request->session()->flash('berhasil', true);
        } else {
            $request->session()->flash('gagal_tambah', true);
        }
        
        return redirect('/admin/jenis_posting');

    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $jenis = JenisPosting::find($id);
        $jenis->jenis = $request->jenis;
        $jenis->icon = $request->icon;
        $jenis->update();

        if ($jenis) {
            $request->session()->flash('berhasil_update');
            return redirect('/admin/jenis_posting');
        } else {
            $request->session()->flash('gagal_update');
            return redirect('/admin/jenis_posting');
        }

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function hapus(Request $request, $id)
    {

        $jenis = JenisPosting::find($id);
        $jenis->delete();

        if ($jenis) {
            $request->session()->flash('berhasil_hapus');
            return redirect('/admin/jenis_posting');
        } else {
            $request->session()->flash('gagal_hapus');
            return redirect('/admin/jenis_posting');
        }

    }
}
