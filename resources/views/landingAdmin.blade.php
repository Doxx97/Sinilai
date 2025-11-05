<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin - SINILAI</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>

<div class="container container-main shadow rounded">

<!-- KOTAK KIRI (Warna Hijau) -->
<div class="left-box"></div>

<!-- KONTEN KANAN (Form Login Admin) -->
<div class="right-content">
    <h3 class="fw-bold">Selamat Datang di SINILAI</h3>
    <p class="text-secondary mb-4">Silahkan login menggunakan akun Admin Anda</p>

    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="id_admin" class="form-label">No ID Admin</label>
            <input type="text" class="form-control form-control-custom" id="id_admin" name="id_admin" placeholder="Masukkan No ID Admin" required>
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control form-control-custom" id="password" name="password" placeholder="Masukkan Password" required>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                <label class="form-check-label" for="rememberMe">
                    Ingat Saya
                </label>
            </div>
            <a href="#" class="forgot-password-link">Lupa Password?</a>
        </div>

        <button type="submit" class="btn btn-custom w-100">LOGIN</button>
        <p class="text-center mt-3 text-sm">Kembali ke <a href="{{ route('landing') }}" class="forgot-password-link">Pilih Peran</a></p>
    </form>
</div>


</div>

<script src="https://www.google.com/search?q=https://cdn.jsdelivr.net/npm/bootstrap%405.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>