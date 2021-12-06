<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function daftar_vaksin()
    {
        return view('daftar_vaksin');
    }

    public function isi_daftar_vaksinasi()
    {
        return view('isi_daftar_vaksinasi');
    }
}
