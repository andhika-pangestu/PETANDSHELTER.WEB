<?php

namespace App\Http\Controllers;

use App\Models\rescue;
use Illuminate\Http\Request;

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
            'namaHewan' => 'required | string ',
            'bbHewan' => 'required | numeric ',
            'jenisHewan' => 'required | string',
            'deskripsiHewan' => 'required | string',
            'kondisiHewan' => 'required | string',
            'tglLokasiPenemuan' => 'required ',
            'kondisiLingkungan' => 'required | string',
            'fotoHewan' => 'required|file',
            'fotoLokasi' => 'required|file',
            'namaPelapor' => 'required | string',
            'usiaPelapor' => 'required | numeric',
            'nomorTelp' => 'required | numeric | min:10',
            'jenisKelamin' => 'required',
        ]);

        // Handle the file uploads
        $fotoHewanPath = $request->file('fotoHewan')->store('uploads', 'public');
        $fotoLokasiPath = $request->file('fotoLokasi')->store('uploads', 'public');

        // Create a new rescue form record
        rescue::create([
            'namaHewan' => $request->input('namaHewan'),
            'bbHewan' => $request->input('bbHewan'),
            'jenisHewan' => $request->input('jenisHewan'),
            'deskripsiHewan' => $request->input('deskripsiHewan'),
            'kondisiHewan' => $request->input('kondisiHewan'),
            'tglLokasiPenemuan' => $request->input('tglLokasiPenemuan'),
            'kondisiLingkungan' => $request->input('kondisiLingkungan'),
            'fotoHewan' => $fotoHewanPath,
            'fotoLokasi' => $fotoLokasiPath,
            'namaPelapor' => $request->input('namaPelapor'),
            'usiaPelapor' => $request->input('usiaPelapor'),
            'nomorTelp' => $request->input('nomorTelp'),
            'jenisKelamin' => $request->input('jenisKelamin'),
        ]);


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
}
