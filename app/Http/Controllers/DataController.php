<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = data::orderBy('id','asc')->get();

        return view('data.index', ['datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('data.create');
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
            'nip' => 'required|unique:data',
            'nama_guru' => 'required',
            'mata_pelajaran' => 'required'
        ]);

        $input = new data;

        $input -> nip = $request->input('nip');
        $input -> nama_guru = $request->input('nama_guru');
        $input -> mata_pelajaran = $request->input('mata_pelajaran');

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
        $data = data::findOrFail($id);

        return view('data.edit', ['data' => $data]);
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
            'nip' => 'required|max:150',
            'nama_guru' => 'required',
            'mata_pelajaran'
        ]);

        $data = data::find($id)->update($request->all());

        return back()->with('success','Data Telah Diubah');

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
        $data = data::find($id);

        $data->delete();

        return back()->with('success','Data berhasil dihapus.');
    }
}
