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
        ]);

        StrukturKepengurusan::create($request->all());

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil ditambahkan!');
    }

    public function edit(StrukturKepengurusan $struktur_kepengurusan)
    {
        return view('admin.struktur.edit', compact('struktur'));
    }

    public function update(Request $request, StrukturKepengurusan $struktur_kepengurusan)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $struktur_kepengurusan->update($request->all());

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil diperbarui!');
    }

    public function destroy(StrukturKepengurusan $struktur_kepengurusan)
    {
        $struktur_kepengurusan->delete();
        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil dihapus!');
    }
}
