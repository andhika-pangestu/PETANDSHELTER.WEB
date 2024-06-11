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

        // Return the 'shelter-home' view, with the shelters data
        return view('shelter-home', ['shelters' => $shelters]);
    }
}
