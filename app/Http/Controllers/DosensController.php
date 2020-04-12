<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosens;

class DosensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dosen = Dosens::all();

        return View('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('dosen.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $request->validate(['dosen_nama' => 'required'
            ,'dosen_nip' => 'required'
            ,'dosen_mata_kuliah' => 'required'
            ,'dosen_no_telpon' => 'required'
            ,'dosen_alamat' => 'required']);
        Dosens::create($request->all());
        return redirect('/dosens')->with('info', 'Dosen telah terdata.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dosens $dosen)
    {
        //
        return View('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosens $dosen)
    {
        //
        return View('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosens $dosen)
    {
        //
        $request->validate(['dosen_nama' => 'required'
            ,'dosen_nip' => 'required'
            ,'dosen_mata_kuliah' => 'required'
            ,'dosen_no_telpon' => 'required'
            ,'dosen_alamat' => 'required']);
        Dosens::where('id', $dosen->id)->update(
            ['dosen_nama' => $request->dosen_nama
            ,'dosen_nip' => $request->dosen_nip
            ,'dosen_mata_kuliah' => $request->dosen_mata_kuliah
            ,'dosen_no_telpon' => $request->dosen_no_telpon
            ,'dosen_alamat' => $request->dosen_alamat]
        );
        return redirect('/dosens')->with('info', 'Dosen telah di-update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosens $dosen)
    {
        //
        Dosens::destroy($dosen->id);
        return redirect('/dosens')->with('info', 'Dosen telah dihapus.');
    }
}
