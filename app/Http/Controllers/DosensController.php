<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosens;
use App\Mk;
use Datatables;

class DosensController extends Controller
{
    public function __construct()
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
        // $dosen = Dosens::all();
        // $dosen = Dosens::paginate(10);
        $matkul = Mk::all();

        return View('dosen.index', compact('matkul'));
    }

    public function json(Request $r)
    {
        // variable dosens menyimpan query untuk select kolom dibawah
        $query = Dosens::with('matkuls');
        // jika ada http request yang membawa parameter matkul
        if(isset($r->matkul)){
            // Maka buat kondisi query dimana mata kuliah sesuai yang di filter
            $query->whereHas('matkuls', function ($query) use ($r)
            {
                $query->where('id', '=', $r->matkul);
            });
        }
        // Memuat data sesuai query dan menaruhnya ke class datatables
        $data = Datatables::of($query);
        // return respon dari http request
        return $data
        // tambahkan kolom untuk button detail dan ubah
        ->addColumn('action', function($dosens)
        {
            return '<a href="'.route('dosens.show', ['dosen' => $dosens->id])
            .'" class="btn btn-xs btn-primary mr-1">Detail</a>'
            .'<a href="'.route('dosens.edit',['dosen' => $dosens->id ])
            .'" class="btn btn-xs btn-success mr-1">Ubah</a>'
            .'<form action='. route('dosens.destroy', ['dosen' => $dosens->id])
            .' method="post"><input type="hidden" value="DELETE" name="_method"><input type="hidden" name="_token" value="' . csrf_token()
            .'"><button class="btn btn-xs btn-danger" type="submit" onclick="return confirm(\'Data mau dihapus?\')">Hapus</button></form>'
            ;
        })->make(true);
    }

    public function search(Request $req)
    {
        //
        $keyword = $req->cari;
        // dd($keyword);
        $dosen = Dosens::where('dosen_nama', 'like', '%'.$keyword.'%')
                ->OrWhere('dosen_nip', 'like', '%'.$keyword.'%')
                ->OrWhere('mata_kuliah_id', 'like', '%'.$keyword.'%')
                ->OrWhere('dosen_no_telpon', 'like', '%'.$keyword.'%')
                ->OrWhere('dosen_alamat', 'like', '%'.$keyword.'%')
                ->paginate(10);
        return View('dosen.index', compact('dosen'));
    }
    public function carinama(Request $req)
    {
        //
        $keyword = $req->nama;
        // dd($keyword);
        $dosen = Dosens::where('dosen_nama', 'like', '%'.$keyword.'%')
                ->paginate(10);
        return View('dosen.index', compact('dosen'));
    }
    public function carinip(Request $req)
    {
        //
        $keyword = $req->nip;
        // dd($keyword);
        $dosen = Dosens::where('dosen_nip', 'like', '%'.$keyword.'%')
                ->paginate(10);
        return View('dosen.index', compact('dosen'));
    }
    public function carimatakuliah(Request $req)
    {
        //
        $keyword = $req->matkul;
        // dd($keyword);
        $dosen = Dosens::where('mata_kuliah_id', 'like', '%'.$keyword.'%')
                ->paginate(10);
        $matkul = Dosens::select('mata_kuliah_id')->groupBy('mata_kuliah_id')->get();
        return View('dosen.index', compact('dosen', 'matkul'));
    }
    public function carinotelpon(Request $req)
    {
        //
        $keyword = $req->telp;
        // dd($keyword);
        $dosen = Dosens::where('dosen_no_telpon', 'like', '%'.$keyword.'%')
                ->paginate(10);
        return View('dosen.index', compact('dosen'));
    }
    public function carialamat(Request $req)
    {
        //
        $keyword = $req->alamat;
        // dd($keyword);
        $dosen = Dosens::where('dosen_alamat', 'like', '%'.$keyword.'%')
                ->paginate(10);
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
        $matkul = Mk::all();
        return View('dosen.add', compact('matkul'));
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
            ,'mata_kuliah_id' => 'required'
            ,'dosen_no_telpon' => 'required'
            ,'image' => 'image|mimes:jpeg,png,jpg,gif|max:5000|nullable'
            ,'dosen_alamat' => 'required'
            ,'file' => 'mimes:pdf|nullable']);
        

        $dosen = new Dosens();
        $dosen-> dosen_nama = $request->dosen_nama;
        $dosen-> dosen_nip = $request->dosen_nip;
        $dosen-> mata_kuliah_id = $request->mata_kuliah_id;
        $dosen-> dosen_no_telpon = $request->dosen_no_telpon;
        $dosen-> dosen_alamat = $request->dosen_alamat;

        if ($request->has('image')) {
            $path = $request->file('image')->store('public/images');
            $file = explode('/', $path);
            $name = $file[1] . '/' . $file[2];
            $dosen->image = $name;

        } else {
            $dosen->image = 'images/default.jpg';
        }
        if ($request->has('file')) {
             $path = $request->file('file')->store('public/files');
             $file = explode('/', $path);
             $name = $file[1] . '/' . $file[2];
             $dosen->file = $name;
        }
        $dosen->save();

        return redirect(route('dosens.index'))->with('info', 'Dosen telah di-store.');
        
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
        $matkul = Mk::all();
        return View('dosen.edit', compact('dosen', 'matkul'));
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
            ,'mata_kuliah_id' => 'required'
            ,'dosen_no_telpon' => 'required'
            ,'dosen_alamat' => 'required']);
        Dosens::where('id', $dosen->id)->update(
            ['dosen_nama' => $request->dosen_nama
            ,'dosen_nip' => $request->dosen_nip
            ,'mata_kuliah_id' => $request->mata_kuliah_id
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
