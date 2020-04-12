<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang = DB::select('select * from ruang');
        return view('index',['ruang'=>$ruang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
        $ruang_kelas= $request->get('ruang_kelas');
        $gedung = $request->get('gedung');
        $ruang = DB::insert('insert into ruang (ruang_kelas, gedung) value (?, ?)', [$ruang_kelas, $gedung ]);
        if($ruang){
            $red = redirect('ruang')->with('success','Sukses Menyimpan Data');
        }else{
            $red= redirect('ruang/create')->with('danger','Gagal Menyimpan Data');
        }
        return $red;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $ruang = DB::select('select * from ruang where id = ?', [$id]);
        return view('show', ['ruang'=>$ruang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ruang = DB::select('select * from ruang where id=?', [$id]);
        return view('edit', ['ruang' =>$ruang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ruang_kelas = $request->get('ruang_kelas');
        $gedung = $request->get('gedung');
        $ruang = DB::update('update ruang set ruang_kelas=?, gedung=? where id=?', [$ruang_kelas, $gedung, $id]);
        if($ruang){
            $red = redirect('ruang')->with('success','Sukses Ubah Data');
        }else{
            $red = redirect('ruang/edit/' .$id)->with('danger','Gagal Menyimpan Data');
        }
        return $red;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruang = DB::delete('delete from ruang where id = ?', [$id]);
        $red = redirect('ruang');
        return $red;
    }
}
