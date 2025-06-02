<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturKepengurusan;

class StrukturKepengurusanController extends Controller
{
    private $listJabatan = [
        'Pendeta Resort',
        'Guru Huria',
        'Pendeta Fungsional',
        'Sekretaris',
        'Parartaon',
        'Wakil Parartaon',
        'Bendahara',
        'Wakil Bendahara',
        'Ketua Marturia',
        'Anggota Marturia',
        'Ketua Diakonia',
        'Anggota Diakonia',
        'Ketua Koinonia',
        'Anggota Koinonia',
        'Learning',
        'Calon Sintua'
    ];

    public function index(Request $request) // Tambahkan Request $request
    {
        $query = StrukturKepengurusan::query(); // Mulai query builder

        // Jika ada fitur search (opsional)
        // if ($request->filled('search')) {
        //     $searchTerm = $request->search;
        //     $query->where(function ($q) use ($searchTerm) {
        //         $q->where('nama', 'like', "%{$searchTerm}%")
        //           ->orWhere('jabatan', 'like', "%{$searchTerm}%");
        //     });
        // }

        // Ambil nilai perPage dari request, default 10 (sesuai kode awalmu)
        $perPage = $request->input('perPage', 5);
        // Validasi opsi perPage
        if (!in_array($perPage, [5, 10, 25, 50, 100])) { // Opsi yang valid
            $perPage = 5; // Default jika input tidak valid
        }

        // Ambil data struktur kepengurusan dengan urutan terbaru, pagination, dan sertakan query string
        // Asumsi 'created_at' atau mungkin ada kolom 'urutan' atau 'id' untuk 'latest'
        // Jika ada kolom spesifik untuk urutan (misal 'urutan'), gunakan itu.
        // Jika tidak, 'created_at' atau 'id' bisa jadi pilihan.
        $struktur = $query->latest() // Defaultnya mengurutkan berdasarkan 'created_at' desc
                          // atau $query->orderBy('urutan', 'asc')->paginate... jika ada kolom urutan
                          ->paginate($perPage)
                          ->withQueryString(); // Ini penting!

        return view('admin.struktur.index', compact('struktur'));
    }


    public function index2()
    {
        $struktur = StrukturKepengurusan::all();

        $pendeta = $struktur->whereIn('jabatan', ['Pendeta Resort', 'Pendeta Fungsional']);
        $fungsionaris = $struktur->whereIn('jabatan', ['Guru Huria', 'Sekretaris', 'Parartaon', 'Wakil Parartaon', 'Bendahara', 'Wakil Bendahara']);
        $marturia = $struktur->whereIn('jabatan', ['Ketua Marturia', 'Anggota Marturia']);
        $diakonia = $struktur->whereIn('jabatan', ['Ketua Diakonia', 'Anggota Diakonia']);
        $koinonia = $struktur->whereIn('jabatan', ['Ketua Koinonia', 'Anggota Koinonia']);
        $calonsintua = $struktur->whereIn('jabatan', ['Learning', 'Calon Sintua']);

        return view('pengurus', compact('pendeta', 'fungsionaris', 'marturia', 'diakonia', 'koinonia', 'calonsintua'));
    }

    public function create()
    {
        $listJabatan = $this->listJabatan;
        return view('admin.struktur.create', compact('listJabatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png,gif,svg|max:8192',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/struktur'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        StrukturKepengurusan::create($data);

        return redirect()->route('admin.struktur.index')->with('success', 'Struktur berhasil ditambahkan!');
    }

    public function edit(StrukturKepengurusan $struktur)
    {
        $listJabatan = $this->listJabatan;
        return view('admin.struktur.edit', compact('struktur', 'listJabatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:8192',
        ]);

        $struktur = StrukturKepengurusan::findOrFail($id);

        $data = $request->only(['nama', 'jabatan']);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/struktur'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $struktur->update($data);

        return redirect()->route('admin.struktur.index')->with('success', 'Struktur berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $struktur = StrukturKepengurusan::findOrFail($id);

        if ($struktur->gambar && file_exists(public_path('images/struktur/' . $struktur->gambar))) {
            unlink(public_path('images/struktur/' . $struktur->gambar));
        }

        $struktur->delete();

        return redirect()->route('admin.struktur.index')->with('success', 'Data berhasil dihapus!');
    }
}
