<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function adminPanel()
    {
        $adminPanelList = User::all();

        return view('admin.adminPanelList', compact('adminPanelList'));
    }

    public function editAdmin($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.adminEdit', compact('admin'));
    }

    // Handle user update request
    public function updateAdmin(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function profile()
    {
        // Get the authenticated user
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
