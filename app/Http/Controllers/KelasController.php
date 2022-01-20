<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelas = kelas::orderBy('no_ruangan','asc') -> get();

        return view('kelas.index', ['kelas' => $kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelas.create');
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
        $this->validate($request, [
            'no_ruangan' => 'required|unique:kelas',
            'nama_ruangan' => 'required'
        ]);

        $input = new kelas;

        $input -> no_ruangan = $request->input('no_ruangan');
        $input -> nama_ruangan = $request->input('nama_ruangan');

        $input -> save();

        return back()->with('berhasil','Data baru telah ditambahkan.');
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
        $kelas = kelas::findOrFail($id);

        return view('kelas.edit', [
            'kelas' => $kelas
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
        $request -> validate ([
            'no_ruangan' => 'required|max:150',
            'nama_ruangan' => 'required|unique:kelas'
        ]);

        $kelas = kelas::find($id)->update($request->all());

        return back()->with('success','Data kelas telah diubah.');
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
        $kelas = kelas::find($id);
        $kelas->delete();
        return back()->with('success', 'Kelas berhasil dihapus.');
    }
}
