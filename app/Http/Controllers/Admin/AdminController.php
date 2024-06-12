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
        ->select('id', 'invoice', 'name', 'email', 'amount', 'note', 'status', 'snap_token', 'created_at', 'updated_at', 
                 DB::raw('RANK() OVER (ORDER BY amount DESC) as rank'))
        ->where('status', 'SUCCESS')
        ->orderBy('rank')
        ->take(10)
        ->get();


        return view('admin.dashboard', compact('users', 'passwordResetTokens', 'sessions', 'topDonations'));
    }

    public function editUser(User $user)
    {
        return view('admin.editUser', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|integer',
        ]);

        $user->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'User berhasil diperbarui.');
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User berhasil dihapus.');
    }
}
