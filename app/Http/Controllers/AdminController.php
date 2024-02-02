<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin; // Add this use statement
use App\Models\Gejala;

use Illuminate\Http\Request;

class AdminController extends Controller
{
public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function create()
    {
        // Tampilkan form untuk menambah data
        return view('admin.create');
    }
    public function home()
    {
        // Tampilkan form untuk menambah data
        return view('admin.home');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'bobot' => 'required|numeric',
            'categori' => 'required|string',
        ]);

        // Validasi dan simpan data ke database
        Gejala::create([
            'name' => $request->input('name'),
            'bobot' => $request->input('bobot'),
            'categori' => $request->input('categori'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $gejala = Gejala::where('id', $id)->firstOrFail(); // Fetch a single model based on the ID

        return view('admin.edit', compact('gejala'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'bobot' => 'required|numeric',
            'categori' => 'required|string',
        ]);

        $gejala = Gejala::findOrFail($id);
        
        // Update the data in the database
        $gejala->update([
            'name' => $request->input('name'),
            'bobot' => $request->input('bobot'),
            'categori' => $request->input('categori'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();
    
        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
