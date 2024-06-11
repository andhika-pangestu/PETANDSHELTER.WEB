<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shelter; 

class ShelterViewController extends Controller
{
    public function showShelterData()
    {
        // Fetch all records from the 'shelter' table
        $shelters = Shelter::all();
        $searchTerm = '';
        // Return the 'shelter-home' view, with the shelters data
        return view('shelter-home', ['shelters' => $shelters, 'searchTerm' => $searchTerm]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        
        if ($searchTerm) {
            $shelters = Shelter::where('nama_shelter', 'LIKE', "%{$searchTerm}%")
                ->orWhere('kota', 'LIKE', "%{$searchTerm}%")
                ->orWhere('alamat_jalan', 'LIKE', "%{$searchTerm}%")
                ->get();
        } else {
            $shelters = Shelter::all();
        }
        
        return view('shelter-home', compact('shelters','searchTerm'));
    }
}
