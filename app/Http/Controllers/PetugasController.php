<?php

namespace App\Http\Controllers;

use App\Models\Petugas; // Import model Petugas
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel petugas
        $petugas = Petugas::all();
        
        // Kirim data ke view
        return view('petugas.index', compact('petugas'));
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'no_telepon' => 'required|string|max:15',
        'alamat' => 'required|string|max:255',
    ]);

    // Simpan data ke database
    Petugas::create([
        'nama' => $request->nama,
        'no_telepon' => $request->no_telepon,
        'alamat' => $request->alamat,
        'status' => 'Aktif', // Default status
    ]);

    // Redirect kembali ke halaman daftar petugas
    return redirect()->route('petugas.index')->with('success', 'Petugas berhasil ditambahkan!');
}

}
