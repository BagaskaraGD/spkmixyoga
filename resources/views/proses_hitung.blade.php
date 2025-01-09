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
        .container {
        margin-bottom: 50px; 
        }
        /* Atur jarak sesuai kebutuhan */
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
                <a class="nav-link" href="/alternatif">Data Alternatif</a>
                <a class="nav-link" href="/kriteria">Data Kriteria</a>
                <a class="nav-link" href="/nilai_alternatif">Penilaian Alternatif</a>
                <a class="nav-link nav-link active" href="/proses_hitung">Proses Perhitungan</a>
                <div><a class="nav-link" href="/hasil_hitung">Hasil Perhitungan</a></div>
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
                    <div class="container mt-2" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                        <h4>Menentukan Alternatif</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle" >
                              <thead class="table-light">
                                <tr>
                                    <th>KODE</th>
                                  <th>ALTERNATIF</th>
                                </tr>
                              </thead>
                              <tbody>             
                                  @foreach($alternatif as $alt)
                                  <tr>
                                        <td>{{ $alt->id_member }}</td>
                                        <td>{{ $alt->Nama }}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                    </div>
                    <div class="container mt-2" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                        <h4>Menentukan Kriteria dan Bobot</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kriteria</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $item)
                                <tr>
                                    <td>{{ $item->nama_kriteria }}</td>
                                    <td>{{ $item->bobot }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container mt-2" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                        <h4>Menentukan  Nilai Vektor S</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Alternatif</th>
                                    <th>Nilai S</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vectorS as $item)
                                <tr>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ number_format($item['nilaiS'], 4) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container mt-2" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                        <h4>Menentukan  Nilai Vektor V</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Alternatif</th>
                                    <th>Nilai V</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vectorS as $item)
                                <tr>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ number_format($item['nilaiV'], 4) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container mt-2" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                        <h4>Melakukan Perankingnan Berdasarkan Nilai Terbesar</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Peringkat</th>
                                    <th>Nama Alternatif</th>
                                    <th>Nilai V</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $rank = 1; @endphp
                                @foreach ($vectorS as $item)
                                <tr>
                                    <td>{{ $rank++ }}</td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ number_format($item['nilaiV'], 4) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</body>
</html>