<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shelter;

class ListAdopsiController extends Controller
{
    public function index()
    {
        $shelters = Shelter::with(['hewan' => function ($query) {
            $query->whereNotIn('status', ['teradopsi', 'booking']);
        }])->get();
        
        return view('list', compact('shelters'));
    }

    public function show($id)
    {
        $shelter = Shelter::with(['hewan' => function ($query) {
            $query->whereNotIn('status', ['teradopsi', 'booking']);
        }])->findOrFail($id);
        
        $shelters = Shelter::where('id', '!=', $id)->get(); // Other shelters
        
        return view('shelter', compact('shelter', 'shelters'));
    }
}