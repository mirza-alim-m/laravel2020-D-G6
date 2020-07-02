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
        $dosens = Dosens::all();
        $response = ['Jam_Kuliah' => $Jam_Kuliah];
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
            'dosen_id' => 'required'
            ,'ruang_id' => 'required|numeric'
            ,'hari' => 'required|numeric'
            ,'jam' => 'required|numeric'
            ]);
            
        $jam_Kuliah = new jam_Kuliah();
        $jam_Kuliah-> dosen_id = $request->dosen_id;
        $jam_Kuliah-> ruang_id = $request->ruang_id;
        $jam_Kuliah-> hari = $request->hari;
        $jam_Kuliah-> jam = $request->jam;
        $jam_Kuliah-> save();
        $response = ['pesan' => 'jam Kuliah telah dimasukkan'];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Jam_Kuliah $jam_Kuliah)
    {
        //
        $response = ['Pesan' => 'Ini data dosennya.',
        'jam_Kuliah' => $jam_Kuliah];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Jam_Kuliah $jam_Kuliah)
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
    public function update(Request $request, Jam_Kuliah $jam_Kuliah)
    {
        //
        $request->validate([
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
          $dosen = Dosens::find($request->id);
          $response = ['Pesan' => 'jam Kuliah berhasil diupdate.',
          'jam_Kuliah' => $dosen];
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
