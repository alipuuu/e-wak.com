<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatuanController extends Controller
{

    public function index()
    {
        return view('ewak.v_kategori_satuan');
    }
}
