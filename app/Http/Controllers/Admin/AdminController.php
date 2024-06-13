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
        $users = User::paginate(3); // Gunakan pagination untuk mengambil 3 pengguna per halaman
        $passwordResetTokens = DB::table('password_reset_tokens')->get();
        $sessions = DB::table('sessions')->get();

        return view('admin.dashboard', compact('users', 'passwordResetTokens', 'sessions'));
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
