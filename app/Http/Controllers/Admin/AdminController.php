<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $passwordResetTokens = DB::table('password_reset_tokens')->get();
        $sessions = DB::table('sessions')->get();
        $topDonations = DB::table('donations')
                          ->select('name', 'email', 'amount', 'invoice', 'status', DB::raw('@rank := @rank + 1 AS rank'))
                          ->where('status', 'SUCCESS')
                          ->orderBy('amount', 'desc')
                          ->limit(10)
                          ->get();

        return view('admin.dashboard', compact('users', 'passwordResetTokens', 'sessions', 'topDonations'));
    }
}
