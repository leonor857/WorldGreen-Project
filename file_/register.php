<?php

// Include koneksi database
include 'koneksi.php';

// Proses registrasi jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    // Validasi data
    if (empty($fullname) || empty($email) || empty($password) || empty($confirm_password) || empty($jenis_kelamin) || empty($no_telp) || empty($alamat)) {
        $error = "Semua field harus diisi!";
    } elseif ($password !== $confirm_password) {
        $error = "Password dan Confirm Password tidak sama!";
    } else {
        // Hash password sebelum disimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data ke database
        $stmt = $conn->prepare("INSERT INTO tb_users (fullname, email, password, jenis_kelamin, no_telp, alamat, image, role_id, created_at, update_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
        if (!$stmt) {
            die("Error dalam query: " . $conn->error); // Tampilkan error jika query gagal
        }

        // Set default value untuk kolom yang tidak diisi user
        $image = ''; // Kolom image bisa diisi dengan path default atau dibiarkan kosong
        $role_id = 1; // Default role_id untuk user biasa

        // Bind parameter ke query
        $stmt->bind_param("sssisssi", $fullname, $email, $hashed_password, $jenis_kelamin, $no_telp, $alamat, $image, $role_id);

        if ($stmt->execute()) {
            // Registrasi berhasil
            $_SESSION['message'] = "Registrasi berhasil! Silakan login.";
            header("Location: http://localhost/myproject2/?page=login"); // Redirect ke halaman login
            exit();
        } else {
            // Registrasi gagal
            $error = "Terjadi kesalahan saat registrasi: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Leonor.AI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <script>
    // Validasi client-side untuk memastikan password dan confirm password sama
    function validateForm() {
      const password = document.querySelector('input[name="password"]').value;
      const confirmPassword = document.querySelector('input[name="confirm-password"]').value;

      if (password !== confirmPassword) {
        alert("Password dan Confirm Password tidak sama!");
        return false;
      }
      return true;
    }
  </script>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">
  <!-- Include Header -->
  <?php include '_partial/_template/header.php'; ?>

  <!-- Konten Utama -->
  <main style="flex: 1; display: flex; justify-content: center; align-items: center; background: url('aset/background.jpg') no-repeat center center/cover; text-align: center;">
    <div style="max-width: 450px; width: 100%; padding: 20px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; backdrop-filter: blur(10px); box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
      <!-- Logo -->
      <div style="margin-bottom: 20px;">
        <img src="aset/singa.png" alt="Chat Zone Logo" style="width: 100px;">
      </div>

      <!-- Judul -->
      <h3 style="color: white; font-size: 22px; margin-bottom: 20px;">Register to Chat Zone</h3>

      <!-- Pesan Error -->
      <?php if (isset($error)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $error; ?>
        </div>
      <?php endif; ?>

      <!-- Form Register -->
      <form action="" method="post" onsubmit="return validateForm()">
        <div style="margin-bottom: 15px;">
          <input type="text" name="fullname" placeholder="Full Name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <div style="margin-bottom: 15px;">
          <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <div style="margin-bottom: 15px;">
          <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <div style="margin-bottom: 15px;">
          <input type="password" name="confirm-password" placeholder="Confirm Password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <div style="margin-bottom: 15px;">
          <select name="jenis_kelamin" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="1">Laki-laki</option>
            <option value="2">Perempuan</option>
          </select>
        </div>
        <div style="margin-bottom: 15px;">
          <input type="text" name="no_telp" placeholder="No Telepon" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <div style="margin-bottom: 15px;">
          <textarea name="alamat" placeholder="Alamat" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; resize: vertical;"></textarea>
        </div>
        <button type="submit" style="width: 100%; padding: 10px; font-size: 18px; background: yellow; color: black; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;">Register</button>
      </form>

      <!-- Garis Pemisah -->
      <hr style="margin: 20px 0; border: 0; border-top: 1px solid white;">

      <!-- Link Login -->
      <p style="color: black;">Sudah punya akun? <a href="http://localhost/myproject2/?page=login" style="color: blue; text-decoration: none; font-weight: bold;">Login disini!</a></p>
    </div>
  </main>

  <!-- Footer -->
  <footer style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.8); color: white; padding: 10px 0; text-align: center;">
    <div>
      <p>&copy; Leonor AI | Follow us:</p>
      <a href="https://www.instagram.com" target="_blank" style="color: white; margin: 0 10px; font-size: 20px;">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.facebook.com" target="_blank" style="color: white; margin: 0 10px; font-size: 20px;">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://twitter.com" target="_blank" style="color: white; margin: 0 10px; font-size: 20px;">
        <i class="fab fa-twitter"></i>
      </a>
    </div>
  </footer>
</body>
</html>