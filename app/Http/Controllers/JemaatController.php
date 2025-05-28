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
    $rules = [
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'nullable|date',
        'alamat' => 'required',
        'status_pernikahan' => 'required|in:Menikah,Belum Menikah,Cerai,Janda,Duda',
        'jumlah_anak' => 'required|integer|min:0',
    ];

    $messages = [
        'status_pernikahan.in' => 'Status pernikahan harus dipilih dari pilihan yang tersedia',
        'nama_pasangan.required' => 'Nama pasangan harus diisi jika status pernikahan menikah!',
        'jumlah_anak.required' => 'Jumlah anak harus diisi jika status pernikahan menikah!',
        'jumlah_anak.min' => 'Jumlah anak tidak boleh kurang dari 0',
    ];

    if ($request->status_pernikahan !== 'Menikah') {
        $request->merge(['nama_pasangan' => null, 'jumlah_anak' => 0]);
    }

    $request->validate($rules, $messages);

    $data = $request->all();

    Jemaat::create($data);

    return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil ditambahkan!');
}


    public function edit(Jemaat $jemaat)
    {
        return view('admin.jemaat.edit', compact('jemaat'));
    }

    public function update(Request $request, Jemaat $jemaat)
    {
        $rules = [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'nullable|date',
            'alamat' => 'required',
            'status_pernikahan' => 'required|in:Menikah,Belum Menikah,Cerai,Janda,Duda',
        ];

        if ($request->status_pernikahan === 'Menikah') {
            $rules['nama_pasangan'] = 'required|string';
            $rules['jumlah_anak'] = 'required|integer|min:0';
        } else {
            $request->merge(['nama_pasangan' => null, 'jumlah_anak' => 0]);
        }

        $messages = [
            'status_pernikahan.in' => 'Status pernikahan harus dipilih dari pilihan yang tersedia',
            'nama_pasangan.required' => 'Nama pasangan harus diisi jika status pernikahan menikah!',
            'jumlah_anak.required' => 'Jumlah anak harus diisi jika status pernikahan menikah!',
            'jumlah_anak.min' => 'Jumlah anak tidak boleh kurang dari 0'
        ];

        $request->validate($rules, $messages);

        $existingJemaat = Jemaat::where('id', '!=', $jemaat->id)
            ->where('nama', $request->nama)
            ->where('jenis_kelamin', $request->jenis_kelamin)
            ->where('tanggal_lahir', $request->tanggal_lahir)
            ->where('alamat', $request->alamat)
            ->where('status_pernikahan', $request->status_pernikahan)
            ->where('nama_pasangan', $request->nama_pasangan)
            ->where('jumlah_anak', $request->jumlah_anak)
            ->first();

        if ($existingJemaat) {
            return back()->withErrors(['message' => 'Data jemaat dengan informasi yang sama sudah ada!'])->withInput();
        }

        $jemaat->update($request->all());

        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil diperbarui!');
    }

    public function destroy(Jemaat $jemaat)
    {
        $jemaat->delete();
        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil dihapus!');
    }
}
