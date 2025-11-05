<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class LandingAdminController extends Controller
    {
        // 1. Method untuk menampilkan form login admin
        public function showLoginForm()
        {
            return view('landingAdmin'); // Mengambil view dari route/web.php
        }

        // 2. Method untuk memproses login admin
        public function authenticate(Request $request)
        {
            // Tambahkan logika autentikasi admin di sini
            // Misalnya: Auth::attempt(...)

            return redirect()->route('admin.dashboard');
        }
    }