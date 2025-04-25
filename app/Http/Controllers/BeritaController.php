<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            $path = $gambar->storeAs('public/images/berita', $namaFile);
            $data['gambar'] = Storage::url($path); // Hasil: /storage/images/berita/namafile.jpg
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show($id)
{
    $berita = Berita::findOrFail($id);
    return view('detail', compact('berita'));
}


    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_publikasi' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->only(['judul', 'deskripsi', 'tanggal_publikasi']);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($berita->gambar) {
                $oldPath = public_path($berita->gambar);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->storeAs('public/images/berita', $namaFile);
            $data['gambar'] = Storage::url($path);
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar) {
            $oldPath = public_path($berita->gambar);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
