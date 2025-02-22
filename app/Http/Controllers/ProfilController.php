<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // dasar dan tupoksi
    public function dasarDanTupoksi()
    {
        return view('FrontEnd.Profil.dasarDanTupoksi');
    }
    // tujuan dan sasaran
    public function tujuanDanSasaran()
    {
        return view('FrontEnd.Profil.tujuanDanSasaran');
    }
    // struktur organisasi
    public function strukturOrganisasi()
    {
        return view('FrontEnd.Profil.strukturOrganisasi');
    }
    // visi dan misi
    public function visiDanMisi()
    {
        return view('FrontEnd.Profil.visiDanMisi');
    }
}
