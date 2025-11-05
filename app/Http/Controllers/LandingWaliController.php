<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingWaliController extends Controller
{
    // 1. Method untuk menampilkan form login wali murid
    public function showLoginForm()
    {
        // View ini merujuk ke 'resources/views/landingWali.blade.php'
        return view('landingWali'); 
    }

    // 2. Method untuk memproses login wali murid
    public function authenticate(Request $request)
    {
        // Tambahkan logika autentikasi wali murid di sini
        // Misalnya: memeriksa kredensial terhadap tabel 'wali'

        // Setelah sukses autentikasi, arahkan ke dashboard wali
        return redirect()->route('wali.dashboard');
    }
}