<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pendukung Keputusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column position-relative">
            <h4>Admin</h4>
            <div class="text-center mb-3">
                <img src="/assets/images/mahal.jpg"" alt="User Avatar" class="rounded-circle" style="width: 70px; height: 70px;">
                <p>@bagas</p>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-link" href="/alternatif">Data Alternatif</a>
                <div><a class="nav-link nav-link active" href="/kriteria">Data Kriteria</a></div>
                <a class="nav-link" href="/nilai_alternatif">Penilaian Alternatif</a>
                <a class="nav-link" href="/hasil_hitung">Hasil Perhitungan</a>
            </nav>
            <a href="#" class="logout">LOGOUT</a>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1" style="background-color: #D9D9D9;">
            <!-- Header -->
            <div class="content-header">
                <h5>Sistem Pendukung Keputusan Menentukan Member Loyal di Mix Yoga Studio</h5>
            </div>

            <!-- Main Section -->
            <div class="main-content" style="padding: 40px; background-color: #D9D9D9;">
                <p>test </p>
            </div>
                
        </div>
    </div>
     <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

       
    </div>
</body>
</html>