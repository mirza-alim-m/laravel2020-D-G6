<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DosenController extends Controller
{
	public function index()
	{
    	// mengambil data dari table dosen
		$dosen = DB::table('dosen')->get();

    	// mengirim data dosen ke view index
		return view('index',['dosen' => $dosen]);

	}

	// method untuk menampilkan view form tambah dosen
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table dosen
	public function store(Request $request)
	{
		// insert data ke table dosen
		DB::table('dosen')->insert([
			'dosennip' => $request->dosennip,
			
			'dosenmatakuliah' => $request->dosenmatakuliah,
            'dosennotelepon' => $request->dosennotelepon,
            'dosenalamat' => $request->dosenalamat
		]);
		// alihkan halaman ke halaman dosen
		return redirect('/dosen');

	}

	// method untuk edit data dosen
	public function edit($id_dosen)
	{
		// mengambil data dosen berdasarkan id yang dipilih
		$dosen = DB::table('dosen')->where('id_dosen',$id_dosen)->get();
		// passing data dosen yang didapat ke view edit.blade.php
		return view('edit',['dosen' => $dosen]);

	}

	// update data dosen
	public function update(Request $request)
	{
		// update data dosen
		DB::table('dosen')->where('id_dosen',$request->id_dosen)->update([
			'dosennip' => $request->dosennip,
			
			'dosenmatakuliah' => $request->dosenmatakuliah,
            'dosennotelepon' => $request->dosennotelepon,
            'dosenalamat' => $request->dosenalamat
		]);
		// alihkan halaman ke halaman dosen
		return redirect('/dosen');
	}

	// method untuk hapus data dosen
	public function hapus($id_dosen)
	{
		// menghapus data dosen berdasarkan id yang dipilih
		DB::table('dosen')->where('id_dosen',$id_dosen)->delete();
		
		// alihkan halaman ke halaman dosen
		return redirect('/dosen');
	}
}