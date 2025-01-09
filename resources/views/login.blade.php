<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center vh-100 position-relative">
        <img src="/assets/images/yoga1.png" alt="Left Yoga Icon" class="yoga-icon side-icons left-icon">
        <div class="login-container">
            <h1>Login Admin</h1>
             <!-- Menampilkan pesan kesalahan -->
             @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
             @endif
            <form action="/login" method="POST">
                @csrf <!-- Tambahkan ini untuk keamanan CSRF -->
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
            <div class="links">
                <a href="#">Lupa Password</a> | <a href="#">Daftar Akun Baru</a>
            </div>
        </div>
        <img src="/assets/images/yoga2.png" alt="Right Yoga Icon" class="yoga-icon side-icons right-icon">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
