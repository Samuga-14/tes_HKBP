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

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'video' => 'required|mimes:mp4,webm,ogg|max:10240',
            'tanggal_unggah' => 'required|date',
        ]);

        $gambarPath = $request->file('gambar')->store('uploads', 'public');

        GaleriKegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'video' => $request->file('video')->store('uploads', 'public'),
            'tanggal_unggah' => $request->tanggal_unggah,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function edit(GaleriKegiatan $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, GaleriKegiatan $galeri)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'video' => 'required|mimes:mp4,webm,ogg|max:10240',
            'tanggal_unggah' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('uploads', 'public');
            $galeri->update(['gambar' => $gambarPath]);
        }
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('uploads', 'public');
            $galeri->update(['video' => $videoPath]);
        }

        $galeri->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'video' => $videoPath,
            'tanggal_unggah' => $request->tanggal_unggah,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy(GaleriKegiatan $galeri)
    {
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus!');
    }
}
