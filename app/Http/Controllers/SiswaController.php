<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = siswa::all();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siswa.create');
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
            'no_absen' => 'required|unique:data',
            'nama_siswa' => 'required',
            'keahlian_bidang' => 'required'
        ]);

        $input = new siswa;

        $input -> no_absen = $request->input('no_absen');
        $input -> nama_siswa = $request->input('nama_siswa');
        $input -> keahlian_bidang = $request->input('keahlian_bidang');

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
        $siswa = siswa::findOrFail($id);

        return view ('siswa.edit', [
            'siswa' => $siswa
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
            'no_absen' => 'required|max:150',
            'nama_siswa' => 'required',
            'keahlian_bidang' => 'required'
        ]);

        $siswa = siswa::find($id)->update($request->all());

        return back()->with('success','Data telah diubah.');
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
        $siswa = siswa::find($id);

        $siswa->delete();

        return back()->with('success','Data berhasil dihapus.');
    }
}
