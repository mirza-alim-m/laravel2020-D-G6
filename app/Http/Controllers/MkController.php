<?php

namespace App\Http\Controllers;

use App\Mk;
use App\Dosens;
use Datatables;
use Illuminate\Support\Facades\Storage;
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
        $mata_kuliah = Mk::all();

        // mengirim data dosen ke view index
        return view('mk.index',['matkul' => $mata_kuliah]);
    }

    public function json(Request $r)
    {
        // variable dosens menyimpan query untuk select kolom dibawah
        $query = Mk::select('id','mata_kuliah');
        // jika ada http request yang membawa parameter matkul
        if(isset($r->matkul)){
            // Maka buat kondisi query dimana mata kuliah sesuai yang di filter
            $query->where('id', '=', $r->matkul);
        }
        // Memuat data sesuai query dan menaruhnya ke class datatables
        $data = Datatables::of($query);
        // return respon dari http request
        return $data
        // tambahkan kolom untuk button detail dan ubah
        ->addColumn('action', function($mk)
        {
            return '<a href="'.route('mata_kuliah.show', ['mata_kuliah' => $mk->id])
            .'" class="btn btn-xs btn-primary mr-1">Detail</a>'
            .'<a href="'.route('mata_kuliah.edit',['mata_kuliah' => $mk->id ])
            .'" class="btn btn-xs btn-success mr-1">Ubah</a>'
            .'<form action='. route('mata_kuliah.destroy', ['mata_kuliah' => $mk->id])
            .' method="post"><input type="hidden" value="DELETE" name="_method"><input type="hidden" name="_token" value="' . csrf_token()
            .'"><button class="btn btn-xs btn-danger" type="submit" onclick="return confirm(\'Data mau dihapus?\')">Hapus</button></form>'
            ;
        })->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // memanggil view tambah
        $Mk = Mk::all();
        return View('mk.create', compact('Mk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mata_kuliah' => 'required'
            ,'image' => 'image|mimes:jpeg,png,jpg,gif|max:5000|nullable'
            ,'file' => 'mimes:pdf|nullable']);
        // insert data ke table dosen
        $mk = new Mk();
        $mk-> mata_kuliah = $request->mata_kuliah;

        if ($request->has('image')){
            $path = $request->file('image')->store('public/images');
            $file = explode('/',$path);
            $name = $file[1] . '/' .$file[2];
            $mk->image = $name;
        }else {
            $mk->image = 'image/default.jpg';
        }
        if ($request->has('file')){
            $path = $request->file('file')->store('public/files');
            $file = explode('/',$path);
            $name = $file[1] . '/' .$file[2];
            $mk->pdf = $name;
        }
        $mk->save();
        // alihkan halaman ke halaman dosen
        return redirect()->route('mata_kuliah.index')->with('status', 'mata_kuliah successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function show(Mk $mk, Request $request)
    {
        //
        $mk = Mk::with('dosens');
        $mk->where('id','=',explode('/',$request->fullUrl())[4]);
        $mk = $mk->get()[0];
        return view('mk.show', compact('mk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function edit(Mk $mk, Request $request)
    {
        // mengambil data dosen berdasarkan id yang dipilih
        $mk = Mk::where('id','=',explode('/',$request->fullUrl())[4])->get()[0];
        // passing data dosen yang didapat ke view edit.blade.php
        // dd($mk);
        return view('mk.edit',['mk' => $mk]);
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
        $id = explode('/',$request->fullUrl())[4];
        $request->validate(['mata_kuliah' => 'required']);
        
        // alihkan halaman ke halaman dosen

        $ubah = ['mata_kuliah' => $request->mata_kuliah];

        if ($request->has('image')) {
            $path = $request->file('image')->store('public/images');
            $file = explode('/', $path);
            $name = $file[1] . '/' . $file[2];
            if ($mk->image != 'images/default.jpg' and $mk->image != null) {
                Storage::delete('public/' .$mk->image);
            }
            $ubah['image'] = $name;
        }
        if ($request->has('file')) {
            $path = $request->file('file')->store('public/files');
            $file = explode('/', $path);
            $name = $file[1] . '/' . $file[2];
            if ($mk->file != null) {
                Storage::delete('public/' .$mk->file);
            }
            $ubah['pdf'] = $name;
        }
        // dd($id);
        Mk::where('id', $id)->update($ubah);

        return redirect('/mata_kuliah')->with('info', 'mk sudah di-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mk $mk, Request $request)
    {
       // menghapus data dosen berdasarkan id yang dipilih
        // dd(explode('/',$request->fullUrl())[4]);
        Mk::destroy(explode('/',$request->fullUrl())[4]);

        // alihkan halaman ke halaman dosen
        return redirect('/mata_kuliah');
    }
}
