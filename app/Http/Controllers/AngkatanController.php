<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\angkatan;

class AngkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $angkatan = angkatan::all();

        return view('angkatan.index', ['angkatan' => $angkatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('angkatan.create');
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
            'kelas' => 'required|max: 150',
            'jurusan' => 'required'
        ]);

        $input = $request->all();

        $angkatan = angkatan::create($input);

        return back()->with('success', 'Data siswa telah ditambahkan.');
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
        $angkatan = angkatan::findOrFail($id);
        return view('angkatan.edit',[
            'angkatan' => $angkatan
        ]);
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
            'kelas' => 'required|max: 150',
            'jurusan' => 'required'
        ]);

        $angkatan = angkatan::find($id)->update($request->all());

        return back()->with('success', 'Data telah diperbarui.');
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
        $angkatan = angkatan::find($id);
        $angkatan->delete();
        return back()->with('success', 'Penghapusan berhasil.');
    }
}
