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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,webm,ogg|max:10240',
            'tanggal_unggah' => 'required|date',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'tanggal_unggah']);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/galeri'), $namaFile);

            $data['gambar'] = $namaFile;
        }

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $namaFile = time() . '_' . $video->getClientOriginalName();
            $video->move(public_path('videos/galeri'), $namaFile);
            $data['video'] = 'videos/galeri/' . $namaFile;
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
        'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
        'video' => 'nullable|mimes:mp4,webm,ogg|max:10240',
        'tanggal_unggah' => 'required|date',
    ]);

    $data = $request->only(['judul', 'deskripsi', 'tanggal_unggah']);

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move(public_path('images/galeri'), $namaFile);
        $data['gambar'] = 'images/galeri/' . $namaFile;
    }

    if ($request->hasFile('video')) {
        $video = $request->file('video');
        $namaFile = time() . '_' . $video->getClientOriginalName();
        $video->move(public_path('videos/galeri'), $namaFile);
        $data['video'] = 'videos/galeri/' . $namaFile;
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
