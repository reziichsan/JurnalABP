<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tokoobat;

class TokoobatController extends Controller
{

    public function index()
    {
    	$tokoobat = tokoobat::all();
    	return view('tokoobat', ['tokoobat' => $tokoobat]);
    }

    public function tambah()
    {
    	return view('tokoobat_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'Kode' => 'required',
    		'Nama' => 'required',
            'Deskripsi' => 'required',
            'Tipe' => 'required',
    		'Jumlah' => 'required',
            'Harga Satuan' => 'required',
    	]);

        Tokoobat::create([
    		'kode' => $request->Kode,
    		'nama' => $request->Nama,
            'deskripsi' => $request->Deskripsi,
    		'tipe' => $request->Tipe,
            'jumlah' => $request->Jumlah,
    		'harga satuan' => $request->Harga
    	]);

    	return redirect('/tokoobat');
    }
    public function edit($Kode, Request $request)
    {
        $this->validate($request,[
            'Kode' => 'required',
    		'Nama' => 'required',
            'Deskripsi' => 'required',
            'Tipe' => 'required',
    		'Jumlah' => 'required',
            'Harga Satuan' => 'required',
    ]);

        $tokoobat = Tokoobat::find($Kode);
        $tokoobat->Nama = $request->Nama;
        $tokoobat->Tipe = $request->Tipe;
        $tokoobat->Deskripsi = $request->Deskripsi;
        $tokoobat->Jumlah = $request->Jumlah;
        $tokoobat->Harga = $request->Harga;
        $tokoobat->save();
        return redirect('/tokoobat');
    }
	
    public function delete($nama)
    {
        $tokoobat = Tokoobat::find($nama);
        $tokoobat->delete();
        return redirect('/tokoobat');
    }
}