<?php

namespace App\Http\Controllers;

use App\Models\rescue;
use App\Models\assignedJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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

    public function dashboard(Request $request)
    {$status = $request->query('status');
        if ($status) {
            $rescues = Rescue::where('status', $status)->get();
        } else {
            $rescues = Rescue::all();// Fetch all records from the 'rescues' table
        } 
        return view('volunteer.dashboard', compact('rescues')); // Pass the $rescues variable to the view
        
    }
    public function assignJob(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user

        $existingJob = assignedJobs::where('rescue_id', $request->rescue_id)->first();
        if ($existingJob) {
            return redirect()->back()->with('error', 'This job has already been taken!');
        }
    
        // Create a new assigned job
        $assignedJob = new assignedJobs;
        $assignedJob->rescue_id = $request->rescue_id;
        $assignedJob->volunteer_id = $user->id;
        $assignedJob->status = 'assigned';
        $assignedJob->save();

        $rescue = Rescue::find($request->rescue_id);
        $rescue->status = 'assigned';
        $rescue->save();
    
        // Redirect back to the dashboard with a success message
        return redirect()->back()->with('success', 'Job assigned successfully!');
    }
    public function showAssignedJobs()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $assignedJobs = assignedJobs::where('volunteer_id', $user->id)->get(); // Get the jobs assigned to the user
    
        return view('volunteer.assigned-jobs', ['assignedJobs' => $assignedJobs]);
    }
    public function complete($id)
    {
        $job = assignedJobs::findOrFail($id);
        $job->status = 'rescued';
        $job->save();

        $rescue = $job->rescue;
        $rescue->status = 'rescued';
        $rescue->save();

        if ($job->save() && $rescue->save()) {
            session()->flash('message', 'Job completed successfully!');
            session()->flash('alert-class', 'alert-success');
        } else {
            session()->flash('message', 'Failed to complete job.');
            session()->flash('alert-class', 'alert-danger');
        }
    
        return redirect()->back();
    }

}
