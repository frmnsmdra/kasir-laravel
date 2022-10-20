<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = DB::table('tbl_barang')
        ->join('tbl_jenis','tbl_jenis.id_jenis','=','tbl_barang.id_jenis')
        ->join('tbl_supplier','tbl_barang.id_supplier','=','tbl_supplier.id_supplier')
        ->get();

        //dd($barang);
        return view('barang.index', compact('barang'));
    }

    public function tambah()
    {
        $supplier = DB::table('tbl_supplier')
        ->get();
        $jenis = DB::table('tbl_jenis')
        ->get();


        return view('barang.tambah', compact(['supplier','jenis']));
    }

    public function simpan(request $request)
    {
        $simpan = Barang::create([
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'id_jenis' => $request->id_jenis,
            'id_supplier' => $request->id_supplier,
            'harga_jual' => $request->harga_jual,
            'barang_status' => $request->barang_status,
        ]);
        echo $simpan->id_barang;
        return redirect('barang');
    }

    public function ubah($id)
    {
        $barang = Barang::find($id);
        return view('barang.ubah', compact(['barang']));
    }

    public function update($id,request $request)
    {
        $barang = Barang::find($id);
        $barang->update($request->except('_token','_method'));
        return redirect('barang');
    }


    public function hapus($id)
    {
        $hapus = DB::table('tbl_barang')->where('id_barang',$id)->delete();
        return redirect('/barang');
    }
}
