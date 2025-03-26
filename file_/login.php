<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk - WorldGreen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .login-container {
      background: linear-gradient(rgba(46, 139, 87, 0.8), rgba(46, 139, 87, 0.8)), 
                  url('aset/bg-login.jpg') no-repeat center center/cover;
    }
    .login-card {
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.2);
      border-radius: 15px;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  
  <?php include './_partial/_template/header.php'; ?>

  <main class="login-container flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="login-card bg-white bg-opacity-90 p-4 p-md-5 shadow">

            <div class="text-center mb-4">
              <img src="aset/eco-green.png" alt="WorldGreen Logo" width="100" class="img-fluid">
            </div>

            <h2 class="text-center mb-4 text-success">
              <i class="bi bi-door-open"></i> Masuk ke WorldGreen
            </h2>

            <form method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <div class="input-group">
                  <span class="input-group-text bg-success text-white">
                    <i class="bi bi-envelope"></i>
                  </span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email@contoh.com">
                </div>
              </div>

              <div class="mb-4">
                <label for="password" class="form-label">Kata Sandi</label>
                <div class="input-group">
                  <span class="input-group-text bg-success text-white">
                    <i class="bi bi-lock"></i>
                  </span>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi">
                </div>
              </div>

              <div class="d-grid mb-3">
                 <a href="?page=produk" class="btn btn-success btn-lg fw-bold">Login</a>
              </div>


              <hr class="my-4">

              <div class="text-center">
                <p class="mb-0">Belum punya akun? 
                  <a href="register.php" class="text-success fw-bold text-decoration-none">
                    Daftar sekarang
                  </a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-dark text-white py-4 mt-auto">
    <div class="container">
      <div class="text-center">
        <h5 class="mb-3">Ikuti Kami</h5>
        <div class="social-links mb-3">
          <a href="#" class="text-white mx-2"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-white mx-2"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="text-white mx-2"><i class="bi bi-twitter-x fs-4"></i></a>
          <a href="#" class="text-white mx-2"><i class="bi bi-linkedin fs-4"></i></a>
        </div>
        <p class="mb-0">&copy; 2024 WorldGreen. Seluruh hak cipta dilindungi.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
