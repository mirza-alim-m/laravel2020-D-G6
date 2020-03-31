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
		'dosen_nama' => $request->nama
	]);
	// alihkan halaman ke halaman dosen
	return redirect('/dosen');

    }
    // method untuk edit data dosen
    public function edit($id)
    {
	// mengambil data dosen berdasarkan nip yang dipilih
	$dosen = DB::table('dosen')->where('dosen_nip',$id)->get();
	// passing data dosen yang didapat ke view edit.blade.php
	return view('edit',['dosen' => $dosen]);

    }
    // update data dosen
    public function update(Request $request)
    {
	// update data dosen
	DB::table('dosen')->where('dosen_nip',$request->id)->update([
		'dosen_nama' => $request->nama
	]);
	// alihkan halaman ke halaman dosen
	return redirect('/dosen');
    }
    // method untuk hapus data dosen
    public function hapus($id)
    {
	// menghapus data dosen berdasarkan nip yang dipilih
	DB::table('dosen')->where('dosen_nip',$id)->delete();
		
	// alihkan halaman ke halaman dosen
	return redirect('/dosen');
	}
	//menampilkan data relasi
}
