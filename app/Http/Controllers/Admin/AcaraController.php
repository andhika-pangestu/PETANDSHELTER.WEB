<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{

    public function index()
    {
        $acara = Acara::orderBy('created_at', 'desc')->get();
        return view('admin.acara', compact('acara'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
        ]);

        $path = $request->file('gambar')->store('public/images');

        Acara::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
        ]);

        return redirect()->route('admin.acara')->with('success', 'Acara berhasil ditambahkan.');
    }

    public function update(Request $request, Acara $acara)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/images');
            $acara->gambar = $path;
        }

        $acara->update($request->all());

        return redirect()->route('admin.acara')->with('success', 'Acara berhasil diupdate.');
    }

    public function destroy(Acara $acara)
    {
        $acara->delete();
        return redirect()->route('admin.acara')->with('success', 'Acara berhasil dihapus.');
    }
}
