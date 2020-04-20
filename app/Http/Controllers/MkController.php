<?php

namespace App\Http\Controllers;

use App\Mk;
use Illuminate\Http\Request;

class MkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table dosen
        $mata_kuliah = DB::table('mata_kuliah')->get();

        // mengirim data dosen ke view index
        return view('index',['mata_kuliah' => $mata_kuliah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // memanggil view tambah
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table dosen
        DB::table('mata_kuliah')->insert([
            'id_mk' => $request->id_mk,
            'mata_kuliah' => $request->mata_kuliah,
            'dosen_nip' => $request->dosen_nip
        ]);
        // alihkan halaman ke halaman dosen
        return redirect('/mata_kuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function show(Mk $mk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function edit(Mk $mk)
    {
        // mengambil data dosen berdasarkan id yang dipilih
        $mata_kuliah = DB::table('mata_kuliah')->where('id_mk',$id_mk)->get();
        // passing data dosen yang didapat ke view edit.blade.php
        return view('edit',['mata_kuliah' => $mata_kuliah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mk $mk)
    {
      // update data dosen
        DB::table('mata_kuliah')->where('id_mk',$request->id_mk)->update([
            'id_mk' => $request->id_mk,
            'mata_kuliah' => $request->mata_kuliah,
            'dosen_nip' => $request->dosen_nip
            
        ]);
        // alihkan halaman ke halaman dosen
        return redirect('/mata_kuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mk $mk)
    {
       // menghapus data dosen berdasarkan id yang dipilih
        DB::table('mata_kuliah')->where('id_mk',$id_mk)->delete();
        
        // alihkan halaman ke halaman dosen
        return redirect('/mata_kuliah');
    }
}
