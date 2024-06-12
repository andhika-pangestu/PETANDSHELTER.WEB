<?php
namespace App\Http\Controllers;

use App\Models\Rescue;
use App\Models\AssignedJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RescueFormController extends Controller
{
    public function create()
    {
        return view('rescue');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'namaHewan' => 'required|string',
            'bbHewan' => 'required|numeric|min:1',
            'jenisHewan' => 'required|string',
            'deskripsiHewan' => 'required|string',
            'kondisiHewan' => 'required|string',
            'tglLokasiPenemuan' => 'required|string',
            'kondisiLingkungan' => 'required|string',
            'fotoHewan' => 'required|file|max:1024|mimes:jpeg,png,jpg',
            'fotoLokasi' => 'required|file|max:1024|mimes:jpeg,png,jpg',
            'namaPelapor' => 'required|string',
            'usiaPelapor' => 'required|numeric|min:1',
            'nomorTelp' => 'required|numeric|min:10',
            'jenisKelamin' => 'required|string',
            'status' => 'string',
        ]);

        // Handle the file uploads
        $fotoHewanPath = $request->file('fotoHewan')->store('uploads', 'public');
        $fotoLokasiPath = $request->file('fotoLokasi')->store('uploads', 'public');

        $rescue = new Rescue();
        $rescue->fill($request->all());
        $rescue->fotoHewan = $fotoHewanPath;
        $rescue->fotoLokasi = $fotoLokasiPath;
        $rescue->status = $request->input('status', 'pending');
        $rescue->save();

        return redirect()->route('rescue')->with('success', 'Form berhasil dikirim.');
    }

    public function index()
    {
        $rescues = Rescue::all();
        return view('rescue', ['rescues' => $rescues]);
    }

    public function dashboard(Request $request)
    {
        $status = $request->query('status');
        if ($status) {
            $rescues = Rescue::where('status', $status)->get();
        } else {
            $rescues = Rescue::all();
        }
        return view('volunteer.dashboard', compact('rescues'));
    }
    
    

    public function assignJob(Request $request)
    {
        $user = Auth::user();

        $existingJob = AssignedJobs::where('rescue_id', $request->rescue_id)->first();
        if ($existingJob) {
            return redirect()->back()->with('error', 'This job has already been taken!');
        }

        $assignedJob = new AssignedJobs();
        $assignedJob->rescue_id = $request->rescue_id;
        $assignedJob->volunteer_id = $user->id;
        $assignedJob->status = 'assigned';
        $assignedJob->save();

        $rescue = Rescue::find($request->rescue_id);
        $rescue->status = 'assigned';
        $rescue->save();

        return redirect()->back()->with('success', 'Job assigned successfully!');
    }

    public function showAssignedJobs()
    {
        $user = Auth::user();
        $assignedJobs = AssignedJobs::where('volunteer_id', $user->id)->get();
        return view('volunteer.assigned-jobs', ['assignedJobs' => $assignedJobs]);
    }

    public function complete($id)
    {
        $job = AssignedJobs::findOrFail($id);
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
