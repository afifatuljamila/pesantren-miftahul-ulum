<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar; // Pastikan Anda sudah membuat model Pendaftar

class PendaftaranController extends Controller
{
    /**
     * Menyimpan data pendaftaran santri baru
     */
    public function store(Request $request)
    {
        // 1. Validasi Input agar data yang masuk benar
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        // 2. Simpan ke Database
        // Pastikan nama kolom (nama_lengkap, dll) sesuai dengan tabel di database Anda
        Pendaftar::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email'        => $request->email,
            'no_hp'        => $request->no_hp,
            'alamat'       => $request->alamat,
        ]);

        // 3. Kembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Alhamdulillah, pendaftaran Anda berhasil dikirim!');
    }
}