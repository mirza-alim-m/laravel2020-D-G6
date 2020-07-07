<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ruang = Ruang::all();
        $response = ['ruang' => $ruang];
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
            'id' => 'required|numeric',
            'kelas' => 'required'
            ,'gedung' => 'required'
            ]);
            
        $ruang = new Ruang();
        $ruang-> id = $request->id;
        $ruang-> kelas = $request->kelas;
        $ruang-> gedung= $request->gedung;
        $ruang-> save();
        $response = ['pesan' => 'Ruang telah dimasukkan'];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        //
        $response = ['Pesan' => 'Ini data ruangnya.',
        'Ruang' => $ruang];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruang $ruang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruang $ruang)
    {
        //
        $request->validate([
            'id' => 'required',
            'kelas' => 'required',
            'gedung' => 'required'
          ]);
          $change = [];
          if (null !== $request->id) {
            $change['id'] = $request->id;
          }
          if (null !== $request->gedung) {
              $change['kelas'] = $request->kelas;
          }
          if (null !== $request->kelas) {
              $change['gedung'] = $request->gedung;
          }
    
          Ruang::where('id', $request->id)
                      ->update($change);
          $Ruang = Ruang::find($request->id);
          $response = ['Pesan' => 'Ruang berhasil diupdate.',
          'ruang' => $ruang];
          return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        //
        Ruang::destroy($ruang->id);
        $response = ['pesan' => 'Ruang berhasil dihapus.'];
        return response()->json($response);
    
    }
}
