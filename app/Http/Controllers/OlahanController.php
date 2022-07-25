<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlahanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ewak.v_kategori_olahan');
    }
}
