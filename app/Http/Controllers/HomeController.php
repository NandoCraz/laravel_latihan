<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;
use App\Models\siswa;
use App\Models\angkatan;
use App\Models\kelas;
use App\Models\walkel;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $tampil = [
            'data' => data::get(),
            'siswa' => siswa::get(),
            'angkatan' => angkatan::get(),
            'kelas' => kelas::get(),
            'walkel' => walkel::get()
        ];
        return view('home', $tampil);
    }
}
