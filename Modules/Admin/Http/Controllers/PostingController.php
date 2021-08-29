<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Admin\Entities\JenisPosting;
use Modules\Admin\Entities\Posting;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request  $request, $id)
    {

        $data['posting']    = Posting::where('id_kategori', $id)->get();
        $data['kategori']   = JenisPosting::where('id', $id)->firstOrFail();
        $data['id_menu']    = $id;
        $data['jenis_menu'] = JenisPosting::all();

        return view('admin::posting/index', $data);
    }
    
    public function tambah(Request $request, $id)
    {
        
        Posting::insert([
            'id_kategori' => $id,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' =>'',
        ]);

        $request->session()->flash('berhasil', 'Berhasil tambah posting');

        return redirect('/admin/posting/'.$id);
        
    }

    public function edit(Request $request, $id)
    {
        Posting::where('id', $request->id)
                ->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);

        $request->session()->flash('berhasil', 'Berhasil edit data');
        return redirect('/admin/posting/'.$id);
    }

    public function hapus(Request $request, $id)
    {
        
        $hapus = Posting::find($request->id);
        $hapus->delete();

        $request->session()->flash('berhasil', 'Berhasil hapus data');
        return redirect('/admin/posting/'.$id);

    }

}
