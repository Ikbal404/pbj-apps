<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    //LPSE
    public function lpse()
    {
        return view('FrontEnd.UnitKerja.LPSE');
    }
    //PBJ
    public function pbj()
    {
        return view('FrontEnd.UnitKerja.PBJ');
    }
}
