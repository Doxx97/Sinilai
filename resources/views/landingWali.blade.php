<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Wali Murid - SINILAI</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>

<div class="container container-main shadow rounded">

<!-- KOTAK KIRI (Warna Hijau) -->
<div class="left-box"></div>

<!-- KONTEN KANAN (Form Login Wali Murid) -->
<div class="right-content">
    <h3 class="fw-bold">Selamat Datang di SINILAI</h3>
    <p class="text-secondary mb-4">Silahkan login menggunakan akun Wali Murid Anda</p>

    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control form-control-custom" id="nama" name="nama" placeholder="Masukkan Nama Wali Murid" required>
        </div>
        
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN Siswa</label>
            <input type="text" class="form-control form-control-custom" id="nisn" name="nisn" placeholder="Masukkan NISN Siswa" required>
        </div>
        
        <div class="d-flex justify-content-end mb-4">
            <a href="#" class="forgot-password-link">Lupa NISN?</a>
        </div>

        <button type="submit" class="btn btn-custom w-100">LOGIN</button>
        <p class="text-center mt-3 text-sm">Kembali ke <a href="{{ route('landing') }}" class="forgot-password-link">Pilih Peran</a></p>
    </form>
</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap%405.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>