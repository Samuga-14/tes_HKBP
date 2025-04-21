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

    public function edit(StrukturKepengurusan $struktur_kepengurusan)
    {
        return view('admin.struktur.edit', ['struktur' => $struktur_kepengurusan]);
    }

    public function update(Request $request, StrukturKepengurusan $struktur_kepengurusan)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'nullable|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($struktur_kepengurusan->gambar && file_exists(public_path($struktur_kepengurusan->gambar))) {
                unlink(public_path($struktur_kepengurusan->gambar));
            }

            $gambar = $request->file('gambar');
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('images/struktur'), $namaFile);
            $data['gambar'] = 'images/struktur/' . $namaFile;
        }

        $struktur_kepengurusan->update($data);

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
