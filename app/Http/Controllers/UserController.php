<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {

            return view('dashboard/home', ['title' => "Dashboard", 'halaman' => "Dashboard", 'active' => 'Dashboard',]);

    }

    public function awal() {

            return redirect()->intended('/dashboard');


    }

    public function home() {

        return view('auth/login', ['title' => "Login"]);

    }

    public function profile() {

        return view('auth/profile', ['title' => "Profile",'halaman' => "Profile", 'active' => 'Profile']);

    }

    public function new_password(Request $request){
        $validateData = $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required',
        ]);

        // Get the authenticated user
    $user = Auth::user();

    // Check if the old password matches the user's current password
    if (!Hash::check($request->password_lama, $user->password)) {
        return redirect()->back()->with('status', 'Password lama tidak cocok, Periksa kembali!');
    }
    // Update the password
    $user->password = Hash::make($request->password_baru);
    $user->save();

    // Redirect with a success message
    return redirect()->back()->with('status', 'Password berhasil diperbarui!');

    }

    public function login(Request $request) {

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials )) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'username atau password salah, silakan coba lagi')->withInput();

    }

    public function logout(Request $request) {

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function toPortal(Request $request){
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Auth::logout();
        return redirect(env('API_BASE_URL'));
    }
}
