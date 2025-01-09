<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pendukung Keputusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <style>

    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column position-relative">
            <h4>Admin</h4>
            <div class="text-center mb-3">
                <img src="/assets/images/admin.png"" alt="User Avatar" class="rounded-circle" style="width: 70px; height: 70px;">
                <p>@bagas</p>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <div><a class="nav-link nav-link active" href="/alternatif">Data Alternatif</a></div>
                <a class="nav-link" href="/kriteria">Data Kriteria</a>
                <a class="nav-link" href="/nilai_alternatif">Penilaian Alternatif</a>
                <a class="nav-link" href="/proses_hitung">Proses Perhitungan</a>
                <a class="nav-link" href="/hasil_hitung">Hasil Perhitungan</a>
            </nav>
            <a href="/login" class="logout">LOGOUT</a>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1" style="background-color: #D9D9D9;">
            <!-- Header -->
            <div class="content-header">
                <h5>Sistem Pendukung Keputusan Menentukan Member Loyal di Mix Yoga Studio</h5>
            </div>

            <!-- Main Section -->
            <div class="main-content" style="padding: 40px; background-color: #D9D9D9;">
                <div class="container mt-1" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <button class="btn btn-primary mb-3">Add Alternatif</button>
                    <div class="container mt-2" style="background-color: white; padding: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" >
                        <div class="table-responsive">
                      <table class="table table-bordered align-middle">
                        <thead class="table-light">
                          <tr>
                            <th>KODE</th>
                            <th>ALTERNATIF</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($hasil as $item)
                            <tr>
                                <td>{{ $item->id_member }}</td>
                                <td>{{ $item->Nama }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                  </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p>Showing 1 to 4 of 4 entries</p>
                      <nav>
                        <ul class="pagination pagination-sm mb-0">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                    </div>
                </div>
                </div>   
            </div>
        </div>
    </div>
     <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>