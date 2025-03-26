<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar - WorldGreen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .register-container {
      background: linear-gradient(rgba(46, 139, 87, 0.7), rgba(46, 139, 87, 0.7)), 
                  url('aset/bg-register.jpg') no-repeat center center/cover;
    }
    .register-card {
      backdrop-filter: blur(8px);
      border: 2px solid rgba(255, 255, 255, 0.2);
    }
    .form-control:focus {
      border-color: #2e8b57;
      box-shadow: 0 0 0 0.25rem rgba(46, 139, 87, 0.25);
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <?php include '_partial/_template/header.php'; ?>

  <main class="register-container flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="register-card bg-white bg-opacity-90 p-4 p-md-5 rounded-4 shadow">
            <div class="text-center mb-4">
              <img src="aset/eco-green.png" alt="WorldGreen Logo" width="100" class="mb-3">
              <h2 class="text-success">
                <i class="bi bi-person-plus"></i> Daftar Akun Baru
              </h2>
              <p class="text-muted">Bergabunglah dengan komunitas peduli lingkungan</p>
            </div>

            <?php if (isset($error)): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <form method="POST" class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="fullname" class="form-label">Nama Lengkap</label>
                  <div class="input-group">
                    <span class="input-group-text bg-success text-white">
                      <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama lengkap Anda" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="email" class="form-label">Alamat Email</label>
                  <div class="input-group">
                    <span class="input-group-text bg-success text-white">
                      <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@contoh.com" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="password" class="form-label">Kata Sandi</label>
                  <div class="input-group">
                    <span class="input-group-text bg-success text-white">
                      <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 8 karakter" required minlength="8">
                    <button class="btn btn-outline-success" type="button" id="togglePassword">
                      <i class="bi bi-eye"></i>
                    </button>
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
                  <div class="input-group">
                    <span class="input-group-text bg-success text-white">
                      <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Ulangi kata sandi" required>
                    <button class="btn btn-outline-success" type="button" id="toggleConfirmPassword">
                      <i class="bi bi-eye"></i>
                    </button>
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="no_telp" class="form-label">Nomor Telepon</label>
                  <div class="input-group">
                    <span class="input-group-text bg-success text-white">
                      <i class="bi bi-telephone"></i>
                    </span>
                    <input type="tel" class="form-control" id="no_telp" name="no_telp" placeholder="Contoh: 08123456789" required>
                  </div>
                </div>

                <div class="col-12">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat lengkap Anda" required></textarea>
                </div>

                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-success btn-lg w-100 py-2">
                    <i class="bi bi-person-plus"></i> Daftar Sekarang
                  </button>
                </div>
              </div>
            </form>

            <div class="text-center mt-4">
              <p class="mb-0">Sudah punya akun? 
                <a href="?page=login" class="text-success fw-bold text-decoration-none">
                  <i class="bi bi-box-arrow-in-right"></i> Masuk disini
                </a>
              </p>
            </div>
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
  <script>
    document.getElementById('togglePassword').addEventListener('click', function() {
      const password = document.getElementById('password');
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.innerHTML = type === 'password' ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
      const confirmPassword = document.getElementById('confirm-password');
      const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
      confirmPassword.setAttribute('type', type);
      this.innerHTML = type === 'password' ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
    });

    (function() {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      
      Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          
          const password = document.getElementById('password').value;
          const confirmPassword = document.getElementById('confirm-password').value;
          
          if (password !== confirmPassword) {
            alert('Kata sandi dan konfirmasi kata sandi tidak sama!');
            event.preventDefault();
            event.stopPropagation();
          }
          
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>
</html>