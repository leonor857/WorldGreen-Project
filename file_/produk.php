<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - WorldGreen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    body {
      background-color: #f5f5f5;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    
    .eco-card {
      transition: transform 0.3s, box-shadow 0.3s;
      border: 2px solid #e9ecef;
      border-radius: 10px;
      overflow: hidden;
    }
    
    .eco-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(46, 139, 87, 0.1);
      border-color: #2e8b57;
    }
    
    .eco-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: #2e8b57;
      color: white;
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
    }
    
    .chat-container {
      display: flex;
      flex-direction: column;
      height: 400px;
      border: 1px solid #e9ecef;
      border-radius: 10px;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .chat-header {
      background-color: #2e8b57;
      color: white;
      padding: 12px;
      text-align: center;
      font-weight: bold;
    }
    
    .chat-messages {
      flex: 1;
      padding: 15px;
      overflow-y: auto;
      background-color: #f9f9f9;
    }
    
    .chat-input {
      display: flex;
      padding: 12px;
      background-color: #f8f9fa;
      border-top: 1px solid #e9ecef;
    }
    
    .chat-input input {
      flex: 1;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      margin-right: 10px;
      outline: none;
    }
    
    .chat-input input:focus {
      border-color: #2e8b57;
      box-shadow: 0 0 0 0.25rem rgba(46, 139, 87, 0.25);
    }
    
    .chat-input button {
      padding: 10px 20px;
      border: none;
      background-color: #2e8b57;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    .chat-input button:hover {
      background-color: #24734a;
    }
    
    .message {
      margin-bottom: 12px;
      padding: 10px 15px;
      border-radius: 8px;
      max-width: 80%;
      word-wrap: break-word;
    }
    
    .message.user {
      background-color: #2e8b57;
      color: white;
      margin-left: auto;
      border-bottom-right-radius: 0;
    }
    
    .message.bot {
      background-color: #e9ecef;
      color: #212529;
      margin-right: auto;
      border-bottom-left-radius: 0;
    }
    
    .welcome-section {
      background: linear-gradient(135deg, rgba(46, 139, 87, 0.1), rgba(46, 139, 87, 0.05));
      border-radius: 15px;
      border-left: 5px solid #2e8b57;
    }
    
    .product-img {
      height: 180px;
      object-fit: cover;
      width: 100%;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand fw-bold" a href="home.php">
        <i class="bi bi-leaf"></i> WorldGreen
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="bi bi-house-door"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-shop"></i> Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-award"></i> Keunggulan</a>
          </li>
        </ul>
        <div class="d-flex">
          <a href="index.php?page=logout" class="btn btn-outline-light">
            <i class="bi bi-box-arrow-left"></i> Logout
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container my-4 flex-grow-1">
    <div class="p-4 mb-4 welcome-section">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h2 class="fw-bold text-success"><i class="bi bi-flower1"></i> Selamat Datang
          <p class="lead mb-0">Mulai jelajahi produk ramah lingkungan kami untuk gaya hidup yang lebih berkelanjutan.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
          <a href="#produk" class="btn btn-success btn-lg">
            <i class="bi bi-cart-plus"></i> Belanja Sekarang
          </a>
        </div>
      </div>
    </div>

    <div class="mb-5">
      <h3 class="mb-4 text-success fw-bold"><i class="bi bi-stars"></i> Produk Unggulan</h3>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="eco-card h-100">
            <div class="eco-badge">Terlaris</div>
            <img src="aset/produk1.png" class="product-img" alt="Tas Daur Ulang">
            <div class="card-body">
              <h5 class="card-title">Tas Daur Ulang</h5>
              <p class="card-text">Tas kuat dari bahan daur ulang 100%, tahan air dan awet.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold text-success">Rp 89.000</span>
                <button class="btn btn-sm btn-outline-success">
                  <i class="bi bi-cart-plus"></i> Beli
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="eco-card h-100">
            <img src="aset/produk2.png" class="product-img" alt="Botol Minum Stainless">
            <div class="card-body">
              <h5 class="card-title">Botol Minum Stainless</h5>
              <p class="card-text">Botol ramah lingkungan bebas BPA, menjaga suhu hingga 12 jam.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold text-success">Rp 149.000</span>
                <button class="btn btn-sm btn-outline-success">
                  <i class="bi bi-cart-plus"></i> Beli
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="eco-card h-100">
            <div class="eco-badge">Baru</div>
            <img src="aset/produk3.png" class="product-img" alt="Peralatan Makan Bambu">
            <div class="card-body">
              <h5 class="card-title">Peralatan Makan Bambu</h5>
              <p class="card-text">Set peralatan makan dari bambu alami, biodegradable.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold text-success">Rp 75.000</span>
                <button class="btn btn-sm btn-outline-success">
                  <i class="bi bi-cart-plus"></i> Beli
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
          <div class="eco-card h-100">
            <img src="aset/produk4.png" class="product-img" alt="Sabun Organik">
            <div class="card-body">
              <h5 class="card-title">Sabun Organik</h5>
              <p class="card-text">Sabun alami tanpa bahan kimia, kemasan biodegradable.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold text-success">Rp 45.000</span>
                <button class="btn btn-sm btn-outline-success">
                  <i class="bi bi-cart-plus"></i> Beli
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <h3 class="mb-4 text-success fw-bold"><i class="bi bi-chat-left-text"></i> Butuh Bantuan?</h3>
        <div class="chat-container">
          <div class="chat-header">
            <i class="bi bi-robot"></i> Chat dengan EcoBot
          </div>
          <div class="chat-messages" id="chat-messages">
            <div class="message bot">
              Halo! Saya EcoBot dari WorldGreen. Ada yang bisa saya bantu?
            </div>
          </div>
          <div class="chat-input">
            <input type="text" id="chat-input" placeholder="Ketik pesan Anda...">
            <button id="send-button"><i class="bi bi-send"></i> Kirim</button>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <h3 class="mb-4 text-success fw-bold"><i class="bi bi-info-circle"></i> Tips Hijau</h3>
        <div class="card border-success mb-3">
          <div class="card-header bg-success text-white">
            <i class="bi bi-lightbulb"></i> Tip Hari Ini
          </div>
          <div class="card-body">
            <h5 class="card-title">Mengurangi Sampah Plastik</h5>
            <p class="card-text">Gunakan tas belanja reusable dan botol minum isi ulang untuk mengurangi sampah plastik hingga 80%.</p>
          </div>
        </div>
        
        <div class="card border-success">
          <div class="card-header bg-success text-white">
            <i class="bi bi-recycle"></i> Fakta Menarik
          </div>
          <div class="card-body">
            <h5 class="card-title">Daur Ulang Aluminium</h5>
            <p class="card-text">Mendaur ulang satu kaleng aluminium menghemat energi yang cukup untuk menyalakan TV selama 3 jam!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white py-4 mt-auto">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h5><i class="bi bi-leaf"></i> WorldGreen</h5>
          <p>Menciptakan solusi berkelanjutan untuk masa depan yang lebih hijau.</p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <h5>Link Cepat</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
            <li><a href="#" class="text-white text-decoration-none">Produk</a></li>
            <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Hubungi Kami</h5>
          <div class="social-links mb-3">
            <a href="#" class="text-white me-2"><i class="bi bi-instagram fs-4"></i></a>
            <a href="#" class="text-white me-2"><i class="bi bi-facebook fs-4"></i></a>
            <a href="#" class="text-white me-2"><i class="bi bi-whatsapp fs-4"></i></a>
          </div>
          <p><i class="bi bi-envelope"></i> hello@worldgreen.id</p>
        </div>
      </div>
      <hr class="my-4">
      <div class="text-center">
        <p class="mb-0">&copy; 2023 WorldGreen. Seluruh hak cipta dilindungi.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('send-button').addEventListener('click', sendMessage);
    document.getElementById('chat-input').addEventListener('keypress', function(e) {
      if (e.key === 'Enter') sendMessage();
    });

    function sendMessage() {
      const input = document.getElementById('chat-input');
      const message = input.value.trim();
      if (message) {
        const chatMessages = document.getElementById('chat-messages');
        
        const userMessage = document.createElement('div');
        userMessage.className = 'message user';
        userMessage.textContent = message;
        chatMessages.appendChild(userMessage);
        
        input.value = '';
        
        chatMessages.scrollTop = chatMessages.scrollHeight;
        
        setTimeout(() => {
          const botResponses = [
            "Saya mengerti pertanyaan Anda tentang produk ramah lingkungan kami. Bagian customer service akan segera menghubungi Anda.",
            "Terima kasih atas pertanyaannya! Produk WorldGreen memiliki garansi kepuasan 30 hari.",
            "Untuk informasi lebih lanjut tentang produk daur ulang kami, silakan kunjungi halaman produk di website kami.",
            "Apakah Anda ingin mengetahui tips hidup ramah lingkungan lainnya?",
            "Pertanyaan bagus! Produk kami telah tersertifikasi ramah lingkungan oleh lembaga independen."
          ];
          
          const botMessage = document.createElement('div');
          botMessage.className = 'message bot';
          botMessage.textContent = botResponses[Math.floor(Math.random() * botResponses.length)];
          chatMessages.appendChild(botMessage);
          
          chatMessages.scrollTop = chatMessages.scrollHeight;
        }, 1000);
      }
    }
  </script>
</body>
</html>