<?php

namespace App\Http\Controllers;

use App\Ruang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RuangController extends Controller
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
     public function index(Request $request)
     {
         //
         $ruangs = \App\Ruang::paginate(10);
         $filterKeyword = $request->get('keyword');
         if($filterKeyword){
         $ruangs = \App\Ruang::where('kelas', 'LIKE', "%$filterKeyword%")->paginate(10);
       }
         return view('ruang.index', ['ruangs' => $ruangs]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ruangs = Ruang::all();
        return View('ruang.create', compact('ruangs'));
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
        'kelas' => 'required'
        ,'gedung' => 'required'
        ,'image' => 'image|mimes:jpeg,png,jpg,gif|max:5000'
        ,'file' => 'mimes:pdf']);
       
        
        $ruang = new Ruang();
        $ruang->kelas = $request->kelas;
        $ruang->gedung = $request->gedung;

        if ($request->has('image')) {
            $path = $request->file('image')->store('public/images');
            $file = explode('/',$path);
            $name = $file[1] . '/' .$file[2];
            $ruang->image = $name;
        } else {
            $ruang->image = 'image/default.jpg';
        }

        if($request->has('file')){
            $path = $request->file('file')->store('public/files');
            $file = explode('/',$path);
            $name = $file[1] . '/' .$file[2];
            $ruang->pdf = $name;
        }
        

        $ruang->save();
        return redirect()->route('ruang.index')->with('status', 'Ruang
        successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ruang = \App\Ruang::findOrFail($id);
        return view('ruang.show', ['ruang' => $ruang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ruang = \App\Ruang::findOrFail($id);
        return view('ruang.edit', ['ruang' => $ruang]);
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
        $request->validate(['kelas' => 'required'
        ,'gedung' => 'required']);
    
        $ubah = (['kelas' => $request->kelas
        ,'gedung' => $request->gedung]);

        if($request->has('image')){
            $path = $request->file('image')->store('public/image');
            $file = explode('/',$path);
            $name = $file[1].'/'. $file[2];
            if ($ruang->image != 'images/default.jpg' and $ruang->image != null){
                Storage::delete('public/' .$ruang->image);
            }
            $ubah['image']= $name;
        }
        if($request->has('file')){
            $path = $request->file('file')->store('public/file(filename)');
            $file = explode('/',$path);
            $name = $file[1].'/'. $file[2];
            if ($ruang->pdf != null){
                Storage::delete('public/' .$ruang->image);
            }
            $ubah['pdf']= $name;
        }
        Ruang::where('id',$ruang->id)->update($ubah);
        $ruang->save();

        return redirect ('/ruang')->with('info', 'Ruang telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ruang = \App\Ruang::findOrFail($id);
        $ruang->delete();
        return redirect()->route('ruang.index')->with('status', 'Ruang successfully delete');
    }
}
