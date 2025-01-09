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
                <img src="/assets/images/admin.png"" alt="User Avatar" class="rounded-circle" style="width: 70px; height: 70px;">
                <p>@bagas</p>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-link" href="/alternatif">Data Alternatif</a>
                <a class="nav-link" href="/kriteria">Data Kriteria</a>
                <div><a class="nav-link nav-link active" href="/nilai_alternatif">Penilaian Alternatif</a></div>
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
            <div class="main-content" style="padding: 40px; background-color: #D9D9D9;">
                <div class="container mt-1" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <button class="btn btn-primary mb-3">Add Alternatif</button>
                    <div class="container mt-2" style="background-color: white; padding: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" >
                      <div class="table-responsive">
                      <table class="table table-bordered align-middle">
                        <thead class="table-light">
                          <tr>
                            <th>ALTERNATIF</th>
                            <th>KEHADIRAN</th>
                            <TH>KEANGGOTAAN</TH>
                            <th>PARTISIPASI PROGRAM</th>
                            <th>FEEDBACK</th>
                            <TH>KEDISIPLINAN</TH>
                            <TH>ACTION</TH>
                          </tr>
                        </thead>
                        <tbody>             
                            @foreach($hasilalt as $key => $alt)
                            <tr>
                                <td>{{ $alt->Nama }}</td>
                                <td>{{ $hasilkehadiran[$key]->persentase_kehadiran ?? 'N/A' }}</td>
                                <td>{{ $hasilkeanggotaan[$key]->keanggotaan ?? 'N/A' }}</td>
                                <td>{{ $hasilpartisipasiprogram[$key]->score_partisipasi ?? 'N/A' }}</td>
                                <td>{{ $hasilfeedback[$key]->score ?? 'N/A' }}</td>
                                <td>{{ $hasilkedisiplinan[$key]->skor_kedisiplinan ?? 'N/A' }}</td>
                                <td>
                                    <a href="/edit/{{ $alt->Nama }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/delete/{{ $alt->Nama }}" class="btn btn-danger btn-sm">Delete</a>
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
                    <button class="btn btn-primary mb-3">Hitung</button>
                </div>
                </div>   
            </div>
        </div>    
    </div>

</body>
</html>