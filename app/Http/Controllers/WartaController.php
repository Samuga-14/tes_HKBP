<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Warta;

class WartaController extends Controller
{
    public function index(Request $request) // Tambahkan Request $request
    {
        $query = Warta::query(); // Mulai query builder

        // Jika ada fitur search (opsional)
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
        if (!in_array($perPage, [5,10, 25, 50, 100])) { // Opsi yang valid
            $perPage = 10; // Default jika input tidak valid
        }

        // Ambil data warta dengan urutan terbaru, pagination, dan sertakan query string
        // Asumsi 'created_at' atau 'tanggal_publikasi' ada untuk 'latest'
        $wartas = $query->latest('tanggal_publikasi') // Atau 'created_at' jika lebih sesuai
                        ->paginate($perPage)
                        ->withQueryString(); // Ini penting!

        return view('admin.warta.index', compact('wartas'));
    }

    public function index2()
    {
        $wartas = Warta::latest()->paginate(10);
        return view('warta', compact('wartas'));
    }

    public function create()
    {
        return view('admin.warta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'file_pdf' => 'required|mimes:pdf|max:16384',
        ]);

        $filePath = $request->file('file_pdf')->store('uploads/pdf', 'public');

        Warta::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_publikasi' => now(),
            'file_pdf' => $filePath,
        ]);

        return redirect()->route('admin.warta.index')->with('success', 'Warta berhasil ditambahkan!');
    }

    public function edit(Warta $warta)
    {
        return view('admin.warta.edit', compact('warta'));
    }

    public function update(Request $request, Warta $warta)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'file_pdf' => 'mimes:pdf|max:16384',
        ]);

        if ($request->hasFile('file_pdf')) {
            $filePath = $request->file('file_pdf')->store('uploads/pdf', 'public');
            $warta->update(['file_pdf' => $filePath]);
        }

        $warta->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file_pdf' => 'mimes:pdf|max:16384',
        ]);

        return redirect()->route('admin.warta.index')->with('success', 'Warta berhasil diperbarui!');

    }

    public function destroy(Warta $warta)
    {
        $warta->delete();
        return redirect()->route('admin.warta.index')->with('success', 'Warta berhasil dihapus!');
    }
}
