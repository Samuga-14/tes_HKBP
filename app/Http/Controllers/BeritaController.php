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
        // Cari Ayat Harian terbaru berdasarkan tipe
        $ayatHarian = Berita::where('tipe', 'ayat_harian')
                            ->orderBy('tanggal_publikasi', 'desc')
                            ->first();

        // Ambil berita dengan tipe 'berita', kecuali Ayat Harian yang diambil
        $beritas = Berita::where('tipe', 'berita')
                         ->when($ayatHarian, function ($q) use ($ayatHarian) {
                             return $q->where('id', '!=', $ayatHarian->id);
                         })
                         ->orderBy('tanggal_publikasi', 'desc')
                         ->paginate(5);

        return view('berita', compact('beritas', 'ayatHarian'));
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
            'tipe' => 'required|string|in:berita,ayat_harian', // validasi tipe
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'tipe']);
        $data['tanggal_publikasi'] = now();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/berita'), $namaFile);
            $data['gambar'] = $namaFile;
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
            'tipe' => 'required|string|in:berita,ayat_harian', // validasi tipe
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'tipe']);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                $oldPath = public_path('images/berita/' . $berita->gambar);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/berita'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar) {
            $oldPath = public_path('images/berita/' . $berita->gambar);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    public function home()
    {
        $ayatHarian = Berita::where('tipe', 'ayat_harian')
                            ->orderBy('tanggal_publikasi', 'desc')
                            ->first();

        return view('home', compact('ayatHarian'));
    }
}
