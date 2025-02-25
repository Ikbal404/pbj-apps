<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class BrandaController extends Controller
{
    public function index()
    {
        $Data = Hero::latest()->first();
        return view('FrontEnd.Beranda.index',compact('Data'));
    }
}
