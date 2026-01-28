<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('lokasi.lokasi', compact('lokasi'));
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'nama_lokasi' => 'required|string|max:225'
        ]);

        if (!isset($payload['nama_lokasi'])) {
            return redirect()->route('lokasi.index')->with('error', 'Nama Lokasi Wajib diisi');
        }

        Lokasi::create([
            'nama_lokasi' => $payload['nama_lokasi'],
        ]);

        return redirect()->route('admin.lokasi.index')->with('success', 'Lokasi Berhasil Ditambahkan.');
    }

    public function update(Request $request, string $id)
    {
        $payload = $request->validate([
            'nama_lokasi' => 'required|string|max:225'
        ]);

        if (!isset($payload['nama_lokasi'])) {
            return redirect()->route('lokasi.index')->with('error', 'Nama lokasi wajid diisi!');
        }

        $lokasi = Lokasi::findOrFail($id);
        $lokasi->nama_lokasi = $payload['nama_lokasi'];
        $lokasi->save();

        return redirect()->route('admin.lokasi.index')->with('success', 'Lokasi Berhasil di Update.');
    }

    public function destroy(string $id)
    {
        Lokasi::destroy($id);
        return redirect()->route('admin.lokasi.index')->with('success', 'Lokasi Berhasil dihapus.');
    }
}
