<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\walkel;
use App\Models\data;
use App\Models\angkatan;
use App\Models\kelas;


class WalkelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali = walkel::join('data','data.id','=','walkels.id_guru')
        ->join('angkatans','angkatans.id','=','walkels.id_angkatan')
        ->join('kelas','kelas.id','=','walkels.id_ruangan')
        ->get(['walkels.*','data.nama_guru','angkatans.kelas','angkatans.jurusan','kelas.nama_ruangan']);
        return view('walkel.index',compact('wali'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $wali = [
            'guru' => data::select('id','nama_guru')->get(),
            'angkatan' => angkatan::select('id','kelas','jurusan')->get(),
            'ruangan' => kelas::select('id','nama_ruangan')->get()
        ];
        return view('walkel.create', $wali);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_guru' => 'required',
            'id_angkatan' => 'required',
            'id_jurusan' => 'required',
            'id_ruangan' => 'required',
            'tahun_ajaran' => 'required'
          ]);
        
          $input = $request->all();
        
          $walkel = walkel::create($input);
         
          return back()->with('success',' Data baru berhasil dibuat.');
        
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
        $data = [
            'walkel' => walkel::findOrFail($id),
            'data' => data::select('id', 'nama_guru')->get(),
            'angkatans' => angkatan::select('id', 'kelas', 'jurusan')->get(),
            'kelas' => kelas::select('id', 'nama_ruangan')->get(),
        ];
        
        // dd($data);
        return view('walkel.edit', $data);
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
            'id_guru' => 'required',
            'id_angkatan' => 'required',
            'id_jurusan' => 'required',
            'id_ruangan' => 'required',
            'tahun_ajaran' => 'required' 
         ]);
               
         $wali = walkel::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
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
    $wali = walkel::findOrFail($id);

    if ($wali != null) {
        $wali->delete();
        return back()->with('success',' Penghapusan berhasil.');
        }
    }
}
