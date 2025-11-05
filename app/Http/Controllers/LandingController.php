<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Digunakan untuk debugging

class LandingController extends Controller
{
    // Method untuk halaman landing (sudah ada)
    public function index()
    {
        return view('landing'); // Anda mungkin perlu membuat view ini
    }

    // Method untuk menampilkan halaman pilihan peran (sudah ada)
    public function loginRole()
    {
        return view('login-role-selection'); // Ganti dengan nama view yang sesuai
    }

    // METHOD BARU UNTUK MEMPROSES FORM POST
    public function processRoleSelection(Request $request)
    {
        // 1. Ambil data peran yang dikirimkan dari form.
        // Asumsi nama input di form Anda adalah 'role'
        $selectedRole = $request->input('role'); 

        // Untuk debugging, Anda bisa mencatat peran yang dipilih
        // Log::info('Peran yang dipilih: ' . $selectedRole);

        // 2. Lakukan pengecekan dan pengalihan (redirect)
        switch ($selectedRole) {
            case 'admin':
                return redirect()->route('login.admin');
                break;
            case 'guru':
                return redirect()->route('login.guru');
                break;
            case 'wali':
                return redirect()->route('login.wali');
                break;
            default:
                // Jika peran tidak valid, kembalikan ke halaman sebelumnya dengan pesan error
                return redirect()->back()->withErrors(['role' => 'Peran tidak valid telah dipilih.']);
                break;
        }
    }
}