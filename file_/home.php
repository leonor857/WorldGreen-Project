<?php include'./_partial/_template/header.php';?>

<div id="worldGreenCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#worldGreenCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#worldGreenCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#worldGreenCarousel" data-bs-slide-to="2"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="aset/carousel1.jpg" class="d-block w-100" alt="Produk Ramah Lingkungan" style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-success bg-opacity-75 rounded-3 p-4">
        <h3>Produk Ramah Lingkungan</h3>
        <p>Temukan koleksi produk sehari-hari yang dibuat dengan bahan daur ulang dan proses berkelanjutan</p>
        <a href="?page=login" class="btn btn-dark btn-success text-white">Lihat Produk</a>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="aset/carousel2.jpg" class="d-block w-100" alt="Komunitas Hijau" style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-success bg-opacity-75 rounded-3 p-4">
        <h3>Bergabung dengan Komunitas</h3>
        <p>Jadilah bagian dari gerakan hijau kami untuk menciptakan perubahan nyata</p>
        <a href="?page=login" class="btn btn-dark btn-success text-white">Gabung Sekarang</a>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="aset/carousel3.jpg" class="d-block w-100" alt="Teknologi Hijau" style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-success bg-opacity-75 rounded-3 p-4">
        <h3>Inovasi Berkelanjutan</h3>
        <p>Teknologi terbaru kami yang mendukung gaya hidup ramah lingkungan</p>
        <a href="#inovasi" class="btn btn-dark btn-success text-white">Pelajari Lebih Lanjut</a>
      </div>
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#worldGreenCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#worldGreenCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-4">
  <div class="p-5 bg-success bg-opacity-10 text-dark rounded-4 d-flex align-items-center position-relative" 
       style="border-top: 4px solid #2e8b57; 
              border-right: 15px solid #2e8b57;
              border-radius: 0 0 50px 10px;">
    <div>
      <h1 class="display-4 fw-bold"><i class="bi bi-leaf"></i> 🌿 Tentang WorldGreen</h1>
      <p class="lead"><b>Mewujudkan Masa Depan yang Lebih Hijau
      WorldGreen adalah startup inovatif yang berfokus pada pengembangan dan distribusi produk ramah lingkungan untuk menciptakan dunia yang lebih hijau dan berkelanjutan. Dengan visi untuk meningkatkan kesadaran dan kepedulian terhadap lingkungan, kami menyediakan berbagai solusi berbasis ekologi yang dapat membantu individu, komunitas, dan bisnis dalam menerapkan gaya hidup berkelanjutan.</b></p>
      <p class="text-muted">Temukan produk inovatif kami yang membantu mengurangi jejak karbon dan menciptakan dunia yang lebih hijau</p>
      <a href="login.php" class="btn btn-success btn-lg mt-3">
        <i class="bi bi-cart3 me-2"></i>Lihat Produk
      </a>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h2 class="text-center mb-4 fw-bold"><i class="bi bi-stars"></i> Keunggulan WorldGreen</h2>
  <p class="text-center text-muted mb-5">Mengapa memilih produk kami untuk solusi ramah lingkungan Anda</p>
  
  <div class="row g-4">
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 border-success border-2 rounded-4">
        <div class="card-body text-center p-4">
          <img src="aset/daur-ulang.png" width="80" class="mb-3">
          <h5 class="card-title fw-bold">Material Daur Ulang</h5>
          <p class="card-text">Produk kami menggunakan 100% material daur ulang yang ramah lingkungan</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 border-success border-2 rounded-4">
        <div class="card-body text-center p-4">
          <img src="aset/energi-hijau.png" width="80" class="mb-3">
          <h5 class="card-title fw-bold">Energi Terbarukan</h5>
          <p class="card-text">Didukung oleh energi terbarukan untuk proses produksi yang berkelanjutan</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 border-success border-2 rounded-4">
        <div class="card-body text-center p-4">
          <img src="aset/karbon.png" width="80" class="mb-3">
          <h5 class="card-title fw-bold">Netral Karbon</h5>
          <p class="card-text">Komitmen kami untuk operasi bisnis yang netral karbon</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
      <div class="card h-100 border-success border-2 rounded-4">
        <div class="card-body text-center p-4">
          <img src="aset/komunitas.png" width="80" class="mb-3">
          <h5 class="card-title fw-bold">Dukungan Komunitas</h5>
          <p class="card-text">Bagian dari keuntungan kami disalurkan untuk program penghijauan</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container my-5 py-4">
  <h2 class="text-center mb-5 fw-bold"><i class="bi bi-chat-quote"></i> Kata Mereka Tentang Kami</h2>
  
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body p-4">
          <div class="d-flex mb-3">
            <img src="aset/andre.jpg" class="rounded-circle me-3" width="60" height="60">
            <div>
              <h5 class="mb-0">Andre Tulalit</h5>
              <small class="text-muted">Pemilik Eco Cafe</small>
            </div>
          </div>
          <p class="card-text">"Produk WorldGreen membantu bisnis saya mengurangi sampah plastik hingga 70% dengan kemasan ramah lingkungan mereka."</p>
          <div class="text-warning">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body p-4">
          <div class="d-flex mb-3">
            <img src="aset/ernest.jpg" class="rounded-circle me-3" width="60" height="60">
            <div>
              <h5 class="mb-0">Ernest Kewer Kewer</h5>
              <small class="text-muted">Kepala Keluarga</small>
            </div>
          </div>
          <p class="card-text">"Sejak beralih ke produk pembersih WorldGreen, rumah kami lebih sehat dan tagihan air berkurang signifikan."</p>
          <div class="text-warning">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body p-4">
          <div class="d-flex mb-3">
            <img src="aset/jonathan.jpg" class="rounded-circle me-3" width="60" height="60">
            <div>
              <h5 class="mb-0">Jonathan Alamak oy</h5>
              <small class="text-muted">Aktivis Lingkungan</small>
            </div>
          </div>
          <p class="card-text">"WorldGreen bukan sekadar bisnis, tapi gerakan nyata untuk perubahan. Produk mereka benar-benar membuat perbedaan!"</p>
          <div class="text-warning">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 mb-md-0">
        <h5><i class="bi bi-leaf"></i> WorldGreen</h5>
        <p>Menciptakan solusi berkelanjutan untuk masa depan yang lebih hijau.</p>
      </div>
      
      <div class="col-md-4 mb-4 mb-md-0">
        <h5>Tautan Cepat</h5>
        <ul class="list-unstyled">
          <li><a href="#tentang" class="text-white text-decoration-none">Tentang Kami</a></li>
          <li><a href="#produk" class="text-white text-decoration-none">Produk</a></li>
          <li><a href="#blog" class="text-white text-decoration-none">Blog</a></li>
          <li><a href="#kontak" class="text-white text-decoration-none">Kontak</a></li>
        </ul>
      </div>
      
      <div class="col-md-4">
        <h5>Media Sosial</h5>
        <div class="social-links">
          <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter-x fs-4"></i></a>
          <a href="#" class="text-white"><i class="bi bi-linkedin fs-4"></i></a>
        </div>
        <p class="mt-3 mb-0">
          <i class="bi bi-envelope"></i> hello@worldgreen.id<br>
          <i class="bi bi-telephone"></i> +62 123 4567 890
        </p>
      </div>
    </div>
    
    <hr class="my-4">
    
    <div class="text-center">
      <p class="mb-0">&copy; 2023 WorldGreen. Seluruh hak cipta dilindungi.</p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>