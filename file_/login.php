<?php 
include 'koneksi.php';
session_start(); // Pastikan session_start() dipanggil di awal script

// Proses login jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan email
    $stmt = $conn->prepare("SELECT id, fullname, email, password, role_id FROM tb_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Simpan data pengguna ke session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role_id'] = $user['role_id'];
            
            // Redirect berdasarkan role (opsional)
            if ($user['role_id'] == 2) { // Admin
                header("Location: index.php?page=admin_dashboard");
            } else { // User biasa
                header("Location: index.php?page=user_dashboard");
            }
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Email not found!";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Leonor.AI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Styling untuk memastikan footer tetap di bawah */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('aset/background.jpg') no-repeat center center/cover;
        }
        .login-box {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php include './_partial/_template/header.php'; ?>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div class="content">
            <div class="login-box">
                <div style="margin-bottom: 20px;">
                    <img src="aset/singa.png" alt="Leonor.AI Logo" style="width: 100px;">
                </div>
                <h3 style="color: black; font-size: 22px; margin-bottom: 20px;">Login to Leonor.AI</h3>
                <form action="" method="POST">
                    <div style="margin-bottom: 15px;">
                        <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                    </div>
                    <button type="submit" style="width: 100%; padding: 10px; font-size: 18px; background: gold; color: black; border: none; border-radius: 5px; cursor: pointer;">Login</button>
                </form>
                <hr style="margin: 20px 0; border: 0; border-top: 1px solid white;">
                <p style="color: black;">Belum punya akun? <a href="?page=register" style="color: blue; text-decoration: none; font-weight: bold;">Daftar disini!</a></p>
            </div>
        </div>

        <footer>
            <div>
                <p>&copy; 2024 Chat Zone | Follow us:</p>
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
    </div>
</body>
</html>