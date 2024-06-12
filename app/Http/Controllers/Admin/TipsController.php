<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TipsController extends Controller
{
    public function index()
    {
        $tips = Tips::with('author')->orderBy('created_at', 'desc')->get();
        return view('admin.tips', compact('tips'));
    }

    public function showPublic()
    {
        $tips = Tips::with('author')->orderBy('created_at', 'desc')->get();
        return view('tips', compact('tips'));
       
    }
    // TipsController.php
// TipsController.php
public function show($id)
{
    $tip = Tips::with('author')->findOrFail($id);
    $relatedTips = Tips::where('id', '!=', $id)->latest()->take(5)->get();
    $latestTips = Tips::latest()->take(5)->get();

    return view('tips.show', compact('tip', 'relatedTips', 'latestTips'));
}

    

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal' => 'required|date'
        ]);

        $userId = Auth::id();
        $path = $request->file('gambar')->store('public/images');

        Tips::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'tanggal' => $request->tanggal,
            'user_id' => $userId,
        ]);

        return redirect()->route('admin.tips')->with('success', 'Postingan berhasil ditambahkan.');
    }

    public function update(Request $request, Tips $tips)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($tips->gambar) {
                Storage::delete($tips->gambar);
            }
            $path = $request->file('gambar')->store('public/images');
            $tips->gambar = $path;
        }

        $tips->update($request->except(['gambar']));
        if (isset($path)) {
            $tips->gambar = $path;
        }

        return redirect()->route('admin.tips')->with('success', 'Postingan berhasil diupdate.');
    }

    public function destroy(Tips $tips)
    {
        if ($tips->gambar) {
            Storage::delete($tips->gambar);
        }

        $tips->delete();
        return redirect()->route('admin.tips')->with('success', 'Postingan berhasil dihapus.');
    }
}