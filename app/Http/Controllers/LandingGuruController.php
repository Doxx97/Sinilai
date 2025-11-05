<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingGuruController extends Controller
{
    // 1. Method untuk menampilkan form login guru
    public function showLoginForm()
    {
        // View ini merujuk ke 'resources/views/landingGuru.blade.php'
        return view('landingGuru'); 
    }

    // 2. Method untuk memproses login guru
    public function authenticate(Request $request)
    {
        // Tambahkan logika autentikasi guru di sini
        // Misalnya: memeriksa kredensial terhadap tabel 'guru'

        // Setelah sukses autentikasi, arahkan ke dashboard guru
        return redirect()->route('guru.dashboard');
    }
}
