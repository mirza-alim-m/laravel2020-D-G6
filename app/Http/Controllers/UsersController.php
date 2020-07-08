<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Datatables;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit(Request $request)
    {
        //
        $user = auth()->user();
        return View('ubah', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate(['old_password' => 'required'
            ,'new_password' => 'required|min:6'
            ,'confirm_password' => 'required|same:new_password']);
        $user = User::where('id', auth()->user()->id)->get()[0];

        if (\Hash::check($request->old_password, $user->password)) {
            $user->password = \Hash::make($request->new_password);
            $user->save();
            return redirect($request->input('url'))->with('status', 'Password telah terganti.');
        } else {
            return back()->with('status', 'Password Lama tidak cocok.');
        }


        return redirect('/dosens')->with('info', 'Dosen telah di-update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
