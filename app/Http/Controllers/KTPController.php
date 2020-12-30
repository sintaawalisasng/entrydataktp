<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KTPController extends Controller
{
    public function index()
    {
    	$data_ktp = \App\KTPModel::all();
    	return view('dataktp.index', ['data_ktp' => $data_ktp]);
    }

    public function create(Request $request)
    {
    	\App\KTPModel::create($request->all());
    	return redirect('/dataktp')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
    	$dataktp = \App\KTPModel::find($id);
    	return view('dataktp/edit', ['dataktp'=> $dataktp]);
    }

    public function update(Request $request, $id)
    {
    	$dataktp = \App\KTPModel::find($id);
    	$dataktp->update($request->all());
    	return redirect('/dataktp')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$dataktp = \App\KTPModel::find($id);
    	$dataktp->delete($dataktp);
    	return redirect('/dataktp')->with('sukses', 'Data Berhasil Dihapus');
    	
    }
}
