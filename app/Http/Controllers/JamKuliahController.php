<?php

namespace App\Http\Controllers;

use App\Jam_Kuliah;
use App\Mk;
use App\Dosens;
use App\Ruang;
use Datatables;
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
        $matkul = Mk::all();
        $ruang = Ruang::all();
        return view('jam.index', compact('matkul','ruang'));
    }

    public function json(Request $r)
    {
        //
        $query = Jam_Kuliah::with('dosens.matkuls','ruangs');

        if(isset($r->matkul)){
            $query->whereHas('dosens.matkuls', function($query) use($r){
              $query->where('id', '=', $r->matkul);
            });
        }
        if(isset($r->ruang)){
            $query->whereHas('ruangs', function($query) use($r){
              $query->where('id', '=', $r->ruang);
            });
        }
        if(isset($r->hari)){
            $query->where('hari', 'like', '%'. $r->hari .'%');
        }

        $data = Datatables::of($query);

        return $data
            ->addColumn('action', function($jam_Kuliah)
            {
                return '<a href="'.route('jamkuliah.show', ['jamkuliah' => $jam_Kuliah->id])
                .'" class="btn btn-xs btn-primary mr-1">Detail</a>'
                .'<a href="'.route('jamkuliah.edit',['jamkuliah' => $jam_Kuliah->id ])
                .'" class="btn btn-xs btn-success mr-1">Ubah</a>'
                .'<form action='. route('jamkuliah.destroy', ['jamkuliah' => $jam_Kuliah->id])
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
        //
        $dosen = Dosens::all();
        $ruang = Ruang::all();
        // $jam_Kuliah = Jam_Kuliah::all();
        return view('jam.create', compact('dosen','ruang'));
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
        // $request->validate(['dosen_id' => 'required|numeric'
        //     ,'ruang_id' => 'required|numeric'
        //     ,'tanggal' => 'required|date'
        //     ,'jam' => 'required']);
        // $request =
        // dd($request);
        Jam_Kuliah::create($request->all());
        return redirect('/jamkuliah')->with('info', 'Dosen telah terdata.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Jam_Kuliah $jam_Kuliah, Request $request)
    {
        //
        $id = explode('/',$request->fullUrl())[4];
        $jam_Kuliah = Jam_Kuliah::with('dosens.matkuls','ruangs')->where('id','=',$id)->get()[0];
        // dd($id);
        return view('jam.show', compact('jam_Kuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Jam_Kuliah $jam_Kuliah, Request $r)
    {
        //
        $dosen = Dosens::all();
        $ruang = Ruang::all();
        $jam_Kuliah = Jam_Kuliah::where('id','=',explode('/',$r->fullUrl())[4])->get()[0];
        // dd($jam_Kuliah);
        return view('jam.edit', compact('dosen','ruang','jam_Kuliah'));
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
        $id = explode('/',$request->fullUrl())[4];
        // dd($id);
        Jam_Kuliah::where('id','=',$id)
            ->update([
              'dosen_id' => $request->dosen_id
              ,'ruang_id' => $request->ruang_id
              ,'hari' => $request->hari
              ,'jam' => $request->jam
          ]);
        return redirect('/jamkuliah')->with('status', 'Sudah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jam_Kuliah  $jam_Kuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jam_Kuliah $jam_Kuliah, Request $r)
    {
        //
        // dd(explode('/',$r->fullUrl())[4]);
        Jam_Kuliah::destroy(explode('/',$r->fullUrl())[4]);
        // dd($jam_Kuliah);
        return redirect('/jamkuliah')->with('status', 'Sudah terhapus');
    }
}
