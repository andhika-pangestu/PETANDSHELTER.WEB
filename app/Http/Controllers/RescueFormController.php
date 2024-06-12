<?php

namespace App\Http\Controllers;

use App\Models\rescue;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RescueFormController extends Controller
{
    /**
     * Show the form for creating a new rescue form.
     */
    public function create()
    {
        return view('rescue');
    }

    /**
     * Store a newly created rescue form in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'namaHewan' => 'required | string  ',
            'bbHewan' => 'required | numeric | min:1  ',
            'jenisHewan' => 'required | string ',
            'deskripsiHewan' => 'required | string ',
            'kondisiHewan' => 'required | string ',
            'tglLokasiPenemuan' => 'required | string  ',
            'kondisiLingkungan' => 'required | string ',
            'fotoHewan' => 'required|file|max:1024|mimes:jpeg,png,jpg',
            'fotoLokasi' => 'required|file|max:1024|mimes:jpeg,png,jpg',
            'namaPelapor' => 'required | string ',
            'usiaPelapor' => 'required | numeric | min:1 ',
            'nomorTelp' => 'required | numeric | min:10 ',
            'jenisKelamin' => 'required',
            'status' => 'string',
        ]);

        // Handle the file uploads
        $fotoHewanPath = $request->file('fotoHewan')->store('uploads', 'public');
        $fotoLokasiPath = $request->file('fotoLokasi')->store('uploads', 'public');

        $rescue = new Rescue();

        // Check if a file is uploaded
        if ($request->hasFile('fotoHewan')) {
            $fileName = time() . '_' . Str::random(10) . '.' . $request->fotoHewan->extension();
            $request->fotoHewan->move(public_path('uploads'), $fileName);
            $rescue->fotoHewan = $fileName;
        }
        if ($request->hasFile('fotoLokasi')) {
            $fileName = time() . '_' . Str::random(10) . '.' . $request->fotoLokasi->extension();
            $request->fotoLokasi->move(public_path('uploads'), $fileName);
            $rescue->fotoLokasi = $fileName;
        }

        // Create a new rescue form record
        $rescue->namaHewan = $request->input('namaHewan');
        $rescue->bbHewan = $request->input('bbHewan');
        $rescue->jenisHewan = $request->input('jenisHewan');
        $rescue->deskripsiHewan = $request->input('deskripsiHewan');
        $rescue->kondisiHewan = $request->input('kondisiHewan');
        $rescue->tglLokasiPenemuan = $request->input('tglLokasiPenemuan');
        $rescue->kondisiLingkungan = $request->input('kondisiLingkungan');
        $rescue->namaPelapor = $request->input('namaPelapor');
        $rescue->usiaPelapor = $request->input('usiaPelapor');
        $rescue->nomorTelp = $request->input('nomorTelp');
        $rescue->jenisKelamin = $request->input('jenisKelamin');
        $rescue->status = $request->input('status', 'pending');
        $rescue->save();

        // Create a new rescue form record
        // rescue::create([
        //     'namaHewan' => $request->input('namaHewan'),
        //     'bbHewan' => $request->input('bbHewan'),
        //     'jenisHewan' => $request->input('jenisHewan'),
        //     'deskripsiHewan' => $request->input('deskripsiHewan'),
        //     'kondisiHewan' => $request->input('kondisiHewan'),
        //     'tglLokasiPenemuan' => $request->input('tglLokasiPenemuan'),
        //     'kondisiLingkungan' => $request->input('kondisiLingkungan'),
        //     'fotoHewan' => $fotoHewanPath,
        //     'fotoLokasi' => $fotoLokasiPath,
        //     'namaPelapor' => $request->input('namaPelapor'),
        //     'usiaPelapor' => $request->input('usiaPelapor'),
        //     'nomorTelp' => $request->input('nomorTelp'),
        //     'jenisKelamin' => $request->input('jenisKelamin'),
        // ]);

        // Redirect the user to a success page
        return redirect()->route('rescue')->with('success', 'Form berhasil dikirim.');
    }
    public function index()
    {
        // Fetch all records from the 'rescue' table
        $rescues = Rescue::all();

        // Return the 'rescue' view, with the rescues data
        return view('rescue', ['rescues' => $rescues]);
    }

    public function dashboard()
    {
        $rescues = Rescue::all(); // Fetch all records from the 'rescues' table
        return view('volunteer.dashboard', compact('rescues')); // Pass the $rescues variable to the view
    }
    public function show($id)
    {
        $rescue = Rescue::findOrFail($id); // Fetch the rescue report with the given ID
        return view('volunteer.rescue', compact('rescue')); // Pass the rescue report to the view
    }
}
