<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use Illuminate\Validation\Rule; // Import Rule untuk validasi 'in'

class JemaatController extends Controller
{
    public function index(Request $request)
    {
        $query = Jemaat::query();

        if ($request->has('search') && !empty($request->search)) {
            $query->where('nama', 'like', "%{$request->search}%");
        }

        // Ambil jumlah jemaat berdasarkan jenis kelamin
        $jumlahLakiLaki = Jemaat::where('jenis_kelamin', 'Laki-laki')->count();
        $jumlahPerempuan = Jemaat::where('jenis_kelamin', 'Perempuan')->count();
        $totalJemaat = Jemaat::count(); // Total semua jemaat

        // Ambil data perPage dari request, default 10
        $perPage = $request->input('perPage', 10);
        $jemaats = $query->latest()->paginate($perPage)->withQueryString(); // withQueryString agar parameter search & perPage tetap ada di pagination

        return view('admin.jemaat.index', compact('jemaats', 'jumlahLakiLaki', 'jumlahPerempuan', 'totalJemaat'));
    }

    public function create()
    {
        return view('admin.jemaat.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
            'tanggal_lahir' => 'required|date|before_or_equal:today', // Wajib diisi dan tidak boleh tanggal di masa depan
            'alamat' => 'required|string|max:1000', // Maksimal 1000 karakter untuk alamat
            'status_pernikahan' => ['required', Rule::in(['Menikah', 'Belum Menikah', 'Cerai'])],
            // 'jumlah_anak' dan 'nama_pasangan' sudah dihapus
        ];

        $messages = [
            'nama.required' => 'Nama jemaat wajib diisi.',
            'nama.string' => 'Format nama tidak valid.',
            'nama.max' => 'Nama jemaat maksimal 255 karakter.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'jenis_kelamin.in' => 'Pilihan jenis kelamin tidak valid.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',
            'tanggal_lahir.before_or_equal' => 'Tanggal lahir tidak boleh melebihi hari ini.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Format alamat tidak valid.',
            'alamat.max' => 'Alamat maksimal 1000 karakter.',
            'status_pernikahan.required' => 'Status pernikahan wajib dipilih.',
            'status_pernikahan.in' => 'Status pernikahan harus salah satu dari: Menikah, Belum Menikah, atau Cerai.',
        ];

        // Tidak perlu lagi logika merge untuk nama_pasangan dan jumlah_anak
        // if ($request->status_pernikahan !== 'Menikah') {
        //     $request->merge(['nama_pasangan' => null, 'jumlah_anak' => 0]);
        // }

        $validatedData = $request->validate($rules, $messages);

        Jemaat::create($validatedData);

        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil ditambahkan!');
    }

    public function edit(Jemaat $jemaat)
    {
        return view('admin.jemaat.edit', compact('jemaat'));
    }

    public function update(Request $request, Jemaat $jemaat)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
            'tanggal_lahir' => 'required|date|before_or_equal:today',
            'alamat' => 'required|string|max:1000',
            'status_pernikahan' => ['required', Rule::in(['Menikah', 'Belum Menikah', 'Cerai'])],
        ];

        // Hapus validasi kondisional untuk nama_pasangan dan jumlah_anak
        // if ($request->status_pernikahan === 'Menikah') {
        //     $rules['nama_pasangan'] = 'required|string';
        //     $rules['jumlah_anak'] = 'required|integer|min:0';
        // } else {
        //     $request->merge(['nama_pasangan' => null, 'jumlah_anak' => 0]);
        // }

        $messages = [
            'nama.required' => 'Nama jemaat wajib diisi.',
            'nama.max' => 'Nama jemaat maksimal 255 karakter.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'jenis_kelamin.in' => 'Pilihan jenis kelamin tidak valid.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',
            'tanggal_lahir.before_or_equal' => 'Tanggal lahir tidak boleh melebihi hari ini.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.max' => 'Alamat maksimal 1000 karakter.',
            'status_pernikahan.required' => 'Status pernikahan wajib dipilih.',
            'status_pernikahan.in' => 'Status pernikahan harus salah satu dari: Menikah, Belum Menikah, atau Cerai.',
            // Pesan untuk nama_pasangan dan jumlah_anak dihapus
        ];

        $validatedData = $request->validate($rules, $messages);

        // Pengecekan data duplikat yang lebih spesifik (misal, kombinasi nama dan tanggal lahir)
        // Atau, jika tidak ada field unik selain ID, logika ini bisa dipertimbangkan untuk dihapus/disederhanakan.
        // Untuk saat ini, kita sesuaikan dengan field yang ada.
        // Pengecekan ini akan mencegah update jika ada data lain (selain data yg diedit) yg SEMUA fieldnya sama persis.
        // Ini mungkin terlalu ketat. Biasanya uniqueness check dilakukan pada field tertentu seperti email atau NIK.
        // Jika tidak ada field unik seperti itu, mungkin lebih baik mengandalkan ID saja.
        // Untuk saat ini, kita modifikasi pengecekan originalmu.
        $existingJemaat = Jemaat::where('id', '!=', $jemaat->id)
            ->where('nama', $validatedData['nama'])
            ->where('jenis_kelamin', $validatedData['jenis_kelamin'])
            ->where('tanggal_lahir', $validatedData['tanggal_lahir']) // Pastikan format tanggal_lahir sesuai untuk perbandingan
            ->where('alamat', $validatedData['alamat'])
            ->where('status_pernikahan', $validatedData['status_pernikahan'])
            // Hapus pengecekan untuk nama_pasangan dan jumlah_anak
            ->first();

        if ($existingJemaat) {
            return back()->withErrors(['message' => 'Data jemaat dengan informasi yang sama persis sudah ada! Harap periksa kembali.'])->withInput();
        }

        $jemaat->update($validatedData);

        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil diperbarui!');
    }

    public function destroy(Jemaat $jemaat)
    {
        $jemaat->delete();
        return redirect()->route('admin.jemaat.index')->with('success', 'Jemaat berhasil dihapus!');
    }
}