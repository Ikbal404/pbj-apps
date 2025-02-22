<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // dasar dan tupoksi
    public function dasarDanTupoksi()
    {
        // $path = storage_path('app/public/Data/PDF/tes.pdf');

        // if (!file_exists($path)) {
        //     abort(404, 'File not found');
        // }

        // return response()->file($path);
        return view('FrontEnd.Profil.dasarDanTupoksi');
    }
}
