<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeskripsiController extends Controller
{

    public function index()
    {
        return view('ewak.v_deskripsi');
    }
}
