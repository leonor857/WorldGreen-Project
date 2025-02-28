<?php include './_partial/_template/header.php'; ?>

<div style="height: 100vh; display: flex; justify-content: center; align-items: center; background: url('aset/background.jpg') no-repeat center center/cover; text-align: center;">
    <div style="max-width: 450px; width: 100%; padding: 20px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; backdrop-filter: blur(10px); box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
        
        <div style="margin-bottom: 20px;">
            <img src="aset/2.png" alt="Chat Zone Logo" style="width: 100px;">
        </div>

        <h3 style="color: white; font-size: 22px; margin-bottom: 20px;">Register to Chat Zone</h3>
        
        <form action="login.php" method="get">
            <div style="margin-bottom: 15px;">
                <input type="text" name="username" placeholder="Username" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
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
            <button type="submit" style="width: 100%; padding: 10px; font-size: 18px; background: green; color: white; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;">Register</button>
        </form>
        
        <hr style="margin: 20px 0; border: 0; border-top: 1px solid white;">
        
        <p style="color: white;">Sudah punya akun? <a href="login.php" style="color: yellow; text-decoration: none; font-weight: bold;">Login disini!</a></p>
    </div>
</div>

<footer style="position: absolute; bottom: 0; width: 100%; background: rgba(0, 0, 0, 0.8); color: white; padding: 10px 0; text-align: center;">
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
