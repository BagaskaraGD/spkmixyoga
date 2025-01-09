<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column position-relative">
            <h4>Admin</h4>
            <div class="text-center mb-3">
                <img src="/assets/images/mahal.jpg" alt="User Avatar" class="rounded-circle" style="width: 70px; height: 70px;">
                <p>@bagas</p>
            </div>
            <nav class="nav flex-column">
                <div><a class="nav-link nav-link active" href="/dashboard">Dashboard</a></div>
                <a class="nav-link" href="/alternatif">Data Alternatif</a>
                <a class="nav-link" href="/kriteria">Data Kriteria</a>
                <a class="nav-link" href="/nilai_alternatif">Penilaian Alternatif</a>
                <a class="nav-link" href="/proses_hitung">Proses Perhitungan</a>
                <a class="nav-link" href="/hasil_hitung">Hasil Perhitungan</a>
            </nav>
            <a href="/login" class="logout">LOGOUT</a>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1">
            <!-- Header -->
            <div class="content-header">
                <h5>Sistem Pendukung Keputusan Menentukan Member Loyal di Mix Yoga Studio</h5>
            </div>

            <!-- Main Section -->
            <div class="main-content">
                <h4 class="mb-4">Halaman Utama</h4>
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="box">Data Alternatif</div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">Data Kriteria</div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">Data Pembobotan</div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">Data Perhitungan</div>
                    </div>
                </div>

                <div class="box">
                    <h5>HELLO ADMIN</h5>
                    <hr>
                    <p>di Sistem Pendukung Keputusan Untuk Menentukan Member Loyal di Mix Yoga Studio, menggunakan metode Weighted Product</p>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
