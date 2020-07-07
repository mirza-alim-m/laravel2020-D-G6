<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mk;
use Illuminate\Http\Request;

class MkController extends Controller
{
    public function_construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'id' => 'required|numeric'
            ,'mata_kuliah' => 'required'
            ]);

        $mk = new Mk();
        $mk-> id = $request->id;
        $mk-> mata_kuliah = $request->mata_kuliah;
        $mk-> save();
        $response = ['pesan' => 'Mk telah dimasukkan'];
        return response()->json($response);
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
        $response = ['Pesan' => 'Ini data mknya.',
        'Mk' => $mk];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function edit(Mk $mk)
    {
        //
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
        $request->validate([
            'id' => 'required', 
            'mata_kuliah' => 'numeric'
          ]);
          $change = [];
          if (null !== $request->id) {
              $change['id'] = $request->id;
          }
          if (null !== $request->mata_kuliah) {
            $change['mata_kuliah'] = $request->mata_kuliah;
          }

          Mk::where('id', $request->id)
                      ->update($change);
          $mk = Mk::find($request->id);
          $response = ['Pesan' => 'Mk berhasil diupdate.',
          'Mk' => $mk];
          return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mk  $mk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mk $mk)
    {
        //
        Mk::destroy($mk->id);
        $response = ['pesan' => 'Mk berhasil dihapus.'];
        return response()->json($response);
    }
}
