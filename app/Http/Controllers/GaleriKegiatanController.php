<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GaleriKegiatan;

class GaleriKegiatanController extends Controller
{
    public function index(Request $request) // Tambahkan Request $request
    {
        $query = GaleriKegiatan::query(); // Mulai query builder

        // Jika ada fitur search (opsional, bisa ditambahkan nanti jika perlu)
        // if ($request->filled('search')) {
        //     $searchTerm = $request->search;
        //     $query->where(function ($q) use ($searchTerm) {
        //         $q->where('judul', 'like', "%{$searchTerm}%")
        //           ->orWhere('deskripsi', 'like', "%{$searchTerm}%");
        //     });
        // }

        // Ambil nilai perPage dari request, default 10 (sesuai kode awalmu)
        $perPage = $request->input('perPage', 5);
        // Validasi opsi perPage
        if (!in_array($perPage, [5, 10, 25, 50, 100])) { // Opsi yang valid
            $perPage = 5; // Default jika input tidak valid
        }

        // Ambil data galeri dengan urutan terbaru, pagination, dan sertakan query string
        // Asumsi 'created_at' atau 'tanggal_unggah' ada untuk 'latest'
        $galeri = $query->latest('tanggal_unggah') // Atau 'created_at' jika lebih sesuai
                        ->paginate($perPage)
                        ->withQueryString(); // Ini penting!

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