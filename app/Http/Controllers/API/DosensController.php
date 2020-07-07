<?php

namespace App\Http\Controllers\API;

use App\Dosens;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $dosens = Dosens::all();
        $response = ['dosens' => $dosens];
        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'dosen_nama' => 'required'
            ,'dosen_nip' => 'required|numeric'
            ,'mata_kuliah_id' => 'required|numeric'
            ,'dosen_no_telpon' => 'required|numeric'
            ,'dosen_alamat' => 'required'
            ]);
            
        $dosen = new Dosens();
        $dosen-> dosen_nama = $request->dosen_nama;
        $dosen-> dosen_nip = $request->dosen_nip;
        $dosen-> mata_kuliah_id = $request->mata_kuliah_id;
        $dosen-> dosen_no_telpon = $request->dosen_no_telpon;
        $dosen-> dosen_alamat = $request->dosen_alamat;
        $dosen-> save();
        $response = ['pesan' => 'Dosen telah dimasukkan'];
        return response()->json($response);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Dosens  $dosens
     * @return \Illuminate\Http\Response
     */
    public function show(Dosens $dosens)
    {
        //
        $response = ['Pesan' => 'Ini data dosennya.',
        'Dosen' => $dosens];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosens  $dosens
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosens $dosens)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosens  $dosens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'id' => 'required',
            'dosen_nip' => 'numeric'
            ,'mata_kuliah_id' => 'numeric'
            ,'dosen_no_telpon' => 'numeric'
          ]);
          $change = [];
          if (null !== $request->dosen_nama) {
              $change['dosen_nama'] = $request->dosen_nama;
          }
          if (null !== $request->dosen_nip) {
              $change['dosen_nip'] = $request->dosen_nip;
          }
          if (null !== $request->mata_kuliah_id) {
            $change['mata_kuliah_id'] = $request->mata_kuliah_id;
          }
          if (null !== $request->dosen_no_telpon) {
            $change['dosen_no_telpon'] = $request->dosen_no_telpon;
          }
          if (null !== $request->dosen_alamat) {
            $change['dosen_alamat'] = $request->dosen_alamat;
          }
    
          Dosens::where('id', $request->id)
                      ->update($change);
          $dosen = Dosens::find($request->id);
          $response = ['Pesan' => 'Dosen berhasil diupdate.',
          'dosen' => $dosen];
          return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosens  $dosens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosens $dosens)
    {
        //
        Dosens::destroy($dosens->id);
        $response = ['pesan' => 'Dosen berhasil dihapus.'];
        return response()->json($response);
    }
}
