<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Warta;

class WartaController extends Controller
{
    public function index()
    {
        $wartas = Warta::latest()->paginate(10);
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
        ]);

        return redirect()->route('admin.warta.index')->with('success', 'Warta berhasil diperbarui!');

    }

    public function destroy(Warta $warta)
    {
        $warta->delete();
        return redirect()->route('admin.warta.index')->with('success', 'Warta berhasil dihapus!');
    }
}
