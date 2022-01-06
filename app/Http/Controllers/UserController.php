<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('user.index',compact('users'));
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
        $user = User::findorFail($id);

        return view('user.edit',compact('user'));
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
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = User::find($id)->update($request->all());

        return back()->with('Success','Data Telah Diubah');
        
    }

    public function reset(request $request, $id) {
        $request -> validate([
            'old_pass' => 'required',
            'new_pass' => 'required',
            'conf_pass' => 'required'
        ]);

        $pass = User::findorFail($id);

        if (Hash::check($request->old_pass, $pass->password)) {
            if ($request->new_pass == $request->conf_pass) {
                User::find($id)->update([
                    'password' => Hash::make($request->new_pass)
                ]);
                return back()->with('success', 'Password Berhasil di ubah');
            } else {
                return back()->with('error', 'Konfirmasi Password tidak sama');
            }
        } else {
            return back()->with('error', 'Password Lama salah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);

        $user->delete();
        return back()->with('success', 'Data Berhasil di hapus');
    }
}
