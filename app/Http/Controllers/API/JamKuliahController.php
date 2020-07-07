<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jam_Kuliah;
use Illuminate\Http\Request;

class JamKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $JamKuliah= Jam_Kuliah::all();
        $response = ['JamKuliah' => $JamKuliah];
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
        //
        $request->validate([
            'id' => 'required'
            ,'dosen_id' => 'required'
            ,'ruang_id' => 'required|numeric'
            ,'jam' => 'required|numeric'
            ,'hari' => 'required|numeric'
            ]);
            
        $JamKuliah = new Jam_Kuliah();
        $JamKuliah-> id = $request->id;
        $JamKuliah-> dosen_id = $request->dosen_id;
        $JamKuliah-> ruang_id = $request->ruang_id;
        $JamKuliah-> hari = $request->hari;
        $JamKuliah-> jam = $request->jam;
        $JamKuliah-> save();
        $response = ['pesan' => 'jam Kuliah telah dimasukkan'];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function show(JamKuliah $JamKuliah)
    {
        //
        $response = ['Pesan' => 'Ini data dosennya.',
        'jamKuliah' => $JamKuliah];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(JamKuliah $JamKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JamKuliah $jamKuliah)
    {
        //
        $request->validate([
            'id' => 'required',
            'dosen_id' => 'required',
            'ruang_id' => 'numeric'
            ,'hari' => 'numeric'
            ,'jam' => 'numeric'
          ]);
          $change = [];
          if (null !== $request->dosen_id) {
              $change['dosen_id'] = $request->dosen_id;
          }
          if (null !== $request->ruang_id) {
              $change['ruang_id'] = $request->ruang_id;
          }
          if (null !== $request->hari) {
            $change['hari'] = $request->hari;
          }
          if (null !== $request->jam) {
            $change['jam'] = $request->jam;
          
          }
    
          jam_Kuliah::where('id', $request->id)
                      ->update($change);
          $JamKuliah = jam_Kuliah::find($request->id);
          $response = ['Pesan' => 'jam Kuliah berhasil diupdate.',
          'jam_Kuliah' => $jam_Kuliah];
          return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jam_Kuliah $jam_Kuliah)
    {
        //
    }
}
