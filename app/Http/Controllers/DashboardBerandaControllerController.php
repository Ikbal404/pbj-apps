<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class DashboardBerandaControllerController extends Controller
{

    // Hero
    public function hero()
    {
        $Data = Hero::latest()->first();
        return view('BackEnd.Beranda.hero', compact('Data'));
    }
    // add hero
    public function heroStore(Request $request)
    {

        $request->validate([
            'Judul' => 'required',
            'SubJudul' => 'nullable',
            'Image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan gambar langsung ke public/Data/Beranda/Hero/
         $imageName = time() . '.' . $request->file('Image')->getClientOriginalExtension();
        $request->file('Image')->move(public_path('Data/Beranda/Hero'), $imageName);

            // Simpan path gambar ke database
        Hero::create([
            'Judul' => $request->Judul,
            'SubJudul' => $request->SubJudul,
            'Image' => 'Data/Beranda/Hero/' . $imageName, // Simpan path relatif
        ]);

        return redirect()->route('hero')->with('success', 'Data berhasil ditambahkan.');
    }
    // update hero
    public function heroUpdate(Request $request,$id)
    {
        $hero = Hero::findOrFail($id);

        // Validasi input
        $request->validate([
            'Judul' => 'required|max:255',
            'SubJudul' => 'required|max:255',
            'Image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan perubahan
        $hero->Judul = $request->Judul;
        $hero->SubJudul = $request->SubJudul;

        // Jika ada gambar baru
        if ($request->hasFile('Image')) {
            // Hapus gambar lama
            if ($hero->Image && file_exists(public_path($hero->Image))) {
                unlink(public_path($hero->Image));
            }

            // Simpan gambar baru ke folder public/Data/Beranda/Hero
            $Image = $request->file('Image');
            $imageName = time() . '_' . $Image->getClientOriginalName();
            $imagePath = 'Data/Beranda/Hero/' . $imageName;

            // Pindahkan file ke lokasi tujuan
            $Image->move(public_path('Data/Beranda/Hero'), $imageName);

            // Simpan path gambar di database
            $hero->image = $imagePath;
        }

        $hero->save();

        return redirect()->route('hero')->with('success', 'Data berhasil diperbarui!');
    }

}
