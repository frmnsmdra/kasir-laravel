<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = DB::table('tbl_jenis')
        ->get();

        //dd($jenis);
        return view('jenis.index', compact('jenis'));
    }

    public function tambah()
    {
        return view('jenis.tambah');
    }

    public function simpan(request $request)
    {
  
        //dd($request);
        $simpan = Jenis::create([
            
            'jenis_nama' => $request->jenis_nama,
            'jenis_status' => $request->jenis_status,
        ]);
        echo $simpan->id_jenis;
        return redirect('jenis');
    }

    public function ubah($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.ubah', compact(['jenis']));
    }

    public function update($id,request $request)
    {
        $jenis = Jenis::find($id);
        $jenis->update($request->except('_token','_method'));
        return redirect('jenis');
    }


    public function hapus($id)
    {
        $hapus = Jenis::find($id);
        $hapus->delete();
        return redirect('jenis');
    }
}


