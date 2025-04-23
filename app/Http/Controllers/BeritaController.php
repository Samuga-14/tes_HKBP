<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(5);
        return view('admin.berita.index', compact('beritas'));

    }

    public function index2()
    {
        $beritas = Berita::latest()->paginate(5);
        return view('berita', compact('beritas'));
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

        $data = $request->only(['judul', 'deskripsi', 'tanggal_publikasi']);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/berita'), $namaFile);
            $data['gambar'] = 'images/berita/' . $namaFile;
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
    $berita = Berita::findOrFail($id);
    return view('admin.berita.edit', compact('berita'));
}


public function update(Request $request, Berita $berita)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'tanggal_publikasi' => 'required|date',
        'gambar' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048'
    ]);

    // Simpan data awal
    $data = $request->only(['judul', 'deskripsi', 'tanggal_publikasi']);

    // Handle gambar
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        $gambar->move(public_path('images/berita'), $namaFile);
        $data['gambar'] = 'images/berita/' . $namaFile;
    }

    $berita->update($data);

    return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
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
}
