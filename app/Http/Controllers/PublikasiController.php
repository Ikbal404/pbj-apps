<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    //info katalog
    public function infoKatalog()
    {
        return view('FrontEnd.Publikasi.InfoKatalog.infoKatalog');
    }
    // info katalog detail
    public function infoKatalogDetail()
    {
        return view('FrontEnd.Publikasi.InfoKatalog.detail');
    }

    // proges SIRUP
    public function progesSirup()
    {
        return view('FrontEnd.Publikasi.ProgesSirup.index');
    }
}
