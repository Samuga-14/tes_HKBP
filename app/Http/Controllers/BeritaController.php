<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'tanggal_publikasi' => 'required|date',
    ]);

    $data = $request->all();

<<<<<<< Updated upstream
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move(public_path('images/berita'), $namaFile);
        $data['gambar'] = 'images/berita/' . $namaFile;
=======
        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    }

    Berita::create($data);

    return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
}


    public function show(Berita $berita)
    {
        return view('admin.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $beritum = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('beritum'));
    }

    public function update(Request $request, Berita $beritum)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'tanggal_publikasi' => 'required|date',
    ]);

    $data = $request->all();

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama kalau ada
        if ($beritum->gambar && file_exists(public_path($beritum->gambar))) {
            unlink(public_path($beritum->gambar));
        }

<<<<<<< Updated upstream
        $gambar = $request->file('gambar');
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move(public_path('images/berita'), $namaFile);
        $data['gambar'] = 'images/berita/' . $namaFile;
    }

    $beritum->update($data);

    return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diupdate!');
}


    public function destroy($id)
        {
        $berita = Berita::findOrFail($id);
    
        if ($berita->gambar && file_exists(public_path($berita->gambar))) {
            unlink(public_path($berita->gambar));
            }

            $berita->delete();
            return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
            }
=======
        $berita->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
>>>>>>> Stashed changes
}
