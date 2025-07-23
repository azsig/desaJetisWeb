<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderBy('tanggal', 'desc')->paginate(6);

        return view('berita', [
            'beritas' => $beritas
        ]);
    }

    public function list()
    {
        $beritas = Berita::orderBy('tanggal', 'desc')->get();

        return view('edit-berita-list', [
            'beritas' => $beritas
        ]);
    }

    public function create()
    {
        return view('tambah-berita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'keterangan' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|url'
        ]);

        $berita = Berita::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'gambar' => $request->gambar
        ]);

        return redirect()->route('berita.detail', $berita->id)
                    ->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        $beritaTerbaru = Berita::where('id', '!=', $id)
                            ->orderBy('tanggal', 'desc')
                            ->limit(3)
                            ->get();

        return view('berita-detail', [
            'berita' => $berita,
            'beritaTerbaru' => $beritaTerbaru
        ]);
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('edit-berita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'keterangan' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|url'
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update($request->all());
        $berita->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'gambar' => $request->gambar
        ]);

        return redirect()->route('berita.index')
                        ->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.list')
                        ->with('success', 'Berita berhasil dihapus');
    }

    public function beritaTerbaru()
    {
        return Berita::orderBy('tanggal', 'desc')
                    ->limit(3)
                    ->get();
    }
}
