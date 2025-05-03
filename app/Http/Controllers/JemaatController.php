<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jemaat;

class JemaatController extends Controller
{
    public function index(Request $request)
    {
        $query = Jemaat::query();

        if ($request->has('search')) {
            $query->where('nama', 'like', "%{$request->search}%");
        }

        $jemaats = $query->latest()->paginate(10);
        return view('admin.jemaat.index', compact('jemaats'));
    }

    public function create()
    {
        return view('admin.jemaat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'nullable|date',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'nama_pasangan' => 'nullable|string',
            'jumlah_anak' => 'required|integer',
        ]);

        Jemaat::create($request->all());

        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil ditambahkan!');
    }

    public function edit(Jemaat $jemaat)
    {
        return view('admin.jemaat.edit', compact('jemaat'));
    }

    public function update(Request $request, Jemaat $jemaat)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'nullable|date',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'nama_pasangan' => 'nullable|string',
            'jumlah_anak' => 'required|integer',
        ]);

        $jemaat->update($request->all());

        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil diperbarui!');
    }

    public function destroy(Jemaat $jemaat)
    {
        $jemaat->delete();
        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil dihapus!');
    }
}
