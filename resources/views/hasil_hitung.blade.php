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
      .my-loader {
        width: 200px;
        height: 200px;
        perspective: 1000px;
        margin: 100px auto;
      }

      .rubiks-cube {
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        animation: my-rotateCube 5s infinite linear;
      }

      .my-loader .face {
        position: absolute;
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: 100%;
      }

      .my-loader .face.front {
        transform: translateZ(100px);
      }
      .my-loader .face.back {
        transform: rotateY(180deg) translateZ(100px);
      }
      .my-loader .face.left {
        transform: rotateY(-90deg) translateZ(100px);
      }
      .my-loader .face.right {
        transform: rotateY(90deg) translateZ(100px);
      }
      .my-loader .face.top {
        transform: rotateX(90deg) translateZ(100px);
      }
      .my-loader .face.bottom {
        transform: rotateX(-90deg) translateZ(100px);
      }

      .my-loader .cube {
        width: calc(100% / 3);
        height: calc(100% / 3);
        box-sizing: border-box;
        border: 1px solid #000;
      }

      @keyframes my-rotateCube {
        0% {
          transform: rotateX(0deg) rotateY(0deg);
        }
        100% {
          transform: rotateX(360deg) rotateY(360deg);
        }
      }

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
                <a class="nav-link" href="/proses_hitung">Proses Perhitungan</a>
                <div><a class="nav-link nav-link active" href="/hasil_hitung">Hasil Perhitungan</a></div>
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
                <div class="my-loader">
                    <div class="rubiks-cube">
                      <div class="face front">
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ffffff;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                      </div>
                  
                      <div class="face back">
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ffffff;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                      </div>
                      <div class="face left">
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #ffffff;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                      </div>
                      <div class="face right">
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ffffff;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                      </div>
                      <div class="face top">
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #ffffff;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                      </div>
                      <div class="face bottom">
                        <div style="background: #ffffff;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                        <div style="background: #ffeb3b;" class="cube"></div>
                        <div style="background: #4caf50;" class="cube"></div>
                        <div style="background: #2196f3;" class="cube"></div>
                        <div style="background: #ffffff;" class="cube"></div>
                        <div style="background: #ff3d00;" class="cube"></div>
                      </div>
                    </div>
                  </div>


                  
                  
            </div>

            <!-- Footer -->
            <div class="footer">
                
            </div>
        </div>
    </div>
</body>
</html>