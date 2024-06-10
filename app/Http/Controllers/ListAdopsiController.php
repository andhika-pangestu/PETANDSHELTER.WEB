<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shelter;

class ListAdopsiController extends Controller
{
    public function index()
    {
        $shelters = Shelter::with('hewan')->get();
        return view('list', compact('shelters'));
        
    }
    public function show($id)
    {
        $shelter = Shelter::with('hewan')->findOrFail($id);
        $shelters = Shelter::where('id', '!=', $id)->get(); // Other shelters
        return view('shelter', compact('shelter', 'shelters'));
    }
}

