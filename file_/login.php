<?php include'./_partial/_template/header.php';?>

<div class="container login-container">
            <div class="login-image">
                <img src="aset/2.png" alt="Chat Zone Logo">
            </div>
    
            <!-- Form Login -->
            <div class="login-form">
                <div class="card p-4">
                    <h3 class="text-center mb-3">Login to Chat Zone</h3>
                    <form action="dashboard.html" method="get">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Login</button>
                    </form>
                    <hr>
				<p> <b> Belum punya akun? <a href="?page=register"> Daftar disini! </b> </a></p>
                </div>
            </div>
        </div>
        <footer class="bg-dark text-white text-center ">
    <div class="container">
        <p>&copy; OUR SOCIAL MEDIA</p>
        <div>
            <a href="https://www.instagram.com" target="_blank" class="text-white mx-2">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank" class="text-white mx-2">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="text-white mx-2">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
        </div>
    </div>
</footer>