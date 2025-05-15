<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GaleriKegiatan;

class GaleriKegiatanController extends Controller
{
    public function index()
    {
        $galeri = GaleriKegiatan::latest()->paginate(10);
        return view('admin.galeri.index', compact('galeri'));
    }
    public function index2()
    {
        $galeri = GaleriKegiatan::latest()->paginate(10);
        return view('galeri', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'link_google_foto' => 'nullable|url|max:2048',
        ]);

        $data = $request->only(['judul', 'deskripsi']);
        $data['tanggal_unggah'] = now();
        $data['link_google_foto'] = $request->input('link_google_foto');


        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/galeri'), $namaFile);

            $data['gambar'] = $namaFile;
        }


        GaleriKegiatan::create($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit(GaleriKegiatan $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, GaleriKegiatan $galeri)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        'link_google_foto' => 'nullable|url|max:2048',
    ]);

    $data = $request->only(['judul', 'deskripsi']);
    $data['link_google_foto'] = $request->input('link_google_foto');


    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move(public_path('images/galeri'), $namaFile);
        $data['gambar'] = 'images/galeri/' . $namaFile;
    }


    $galeri->update($data);

    return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui!');
}


    public function destroy(GaleriKegiatan $galeri)
    {
        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus!');
    }
}
