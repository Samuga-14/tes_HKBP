<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturKepengurusan;

class StrukturKepengurusanController extends Controller
{
    public function index()
    {
        $struktur = StrukturKepengurusan::latest()->paginate(10);
        return view('admin.struktur.index', compact('struktur'));
    }

//
public function index2()
{
    $struktur = StrukturKepengurusan::all();

    // Filter berdasarkan jabatan
    $pendeta = $struktur->filter(function($item){
    return in_array($item->jabatan, [
        'Pendeta',
        'Pendeta Fungsional'
    ]);
});

    $fungsionaris = $struktur->filter(function ($item) {
        return in_array($item->jabatan, [
            'Sekretaris',
            'Parartaon',
            'Bendahara'
        ]);
    });

    $marturia = $struktur->filter(function ($item) {
        return in_array($item->jabatan, [
            'Ketua Marturia',
            'Anggota Marturia'
        ]);
    });

    return view('pengurus', compact('pendeta', 'fungsionaris', 'marturia'));
}



    public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/struktur'), $namaFile);
            $data['gambar'] = 'images/struktur/' . $namaFile;
        }

        StrukturKepengurusan::create($data);

        return redirect()->route('admin.struktur.index')->with('success', 'Struktur berhasil ditambahkan!');
    }

    public function edit(StrukturKepengurusan $struktur)
    {
        return view('admin.struktur.edit', ['struktur' => $struktur]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $struktur = StrukturKepengurusan::findOrFail($id);

        // Cek apakah user upload gambar baru
        if ($request->hasFile('gambar')) {
            // Simpan file baru
            $gambarPath = $request->file('gambar')->store('uploads/struktur', 'public');

            // Optional: hapus file lama kalau mau
            // Storage::disk('public')->delete($struktur->gambar);

            // Update semua
            $struktur->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'gambar' => $gambarPath,
            ]);
        } else {
            // Gambar tidak diubah
            $struktur->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
            ]);
        }

        return redirect()->route('admin.struktur.index')->with('success', 'Struktur berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $struktur = StrukturKepengurusan::findOrFail($id);

        if ($struktur->gambar && file_exists(public_path($struktur->gambar))) {
            unlink(public_path($struktur->gambar));
        }

        $struktur->delete();

        return redirect()->route('admin.struktur.index')->with('success', 'Data berhasil dihapus!');
    }
}
