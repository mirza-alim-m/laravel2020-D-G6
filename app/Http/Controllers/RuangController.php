<?php

namespace App\Http\Controllers;

// use App\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
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
        return view("ruang.create");
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

        $request->validate(['ruang'=>'required'
        ,'kelas' => 'required'
        ,'gedung' => 'required'
        ,'image' => 'image|mimes:jpeg,png,jpg,gif|max5000']);
       

        $ruang = new Ruang();
        $ruang -> kelas = $request->kelas;
        $ruang -> gedung = $request->gedung;

        if ($request->has('image')) {
            $path = $request->file('image')->store('public/image');
            $file = explode('/',path);
            $name = $file[1] . '/' .$file[2];
            $ruang->image = $name;
        } else {
            $ruang->image = 'image/default.jpg';
        }

        $new_ruang = new \App\Ruang;
        $new_ruang->kelas = $request->get('kelas');
        $new_ruang->gedung = $request->get('gedung');


        $new_ruang->save();
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
    public function update(Request $request, $id)
    {
        //
        $ruang = \App\Ruang::findOrFail($id);
        $ruang->kelas = $request->get('kelas');
        $ruang->gedung = $request->get('gedung');
        $ruang->save();
        return redirect()->route('ruang.edit', [$id])->with('status', 'Ruang
        succesfully updated');
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
