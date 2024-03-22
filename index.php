<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Link font awesome untuk icon. Ganti dengan link CDN yang aktif jika perlu. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style>
    body {
    /* background-image: url('https://img.freepik.com/free-photo/pink-sky-background-with-crescent-moon_53876-129048.jpg'); */
    background-size: cover;
    background: #057a8d 64%;
    height: 100vh; /* Pastikan halaman mengisi seluruh tinggi viewport */
    margin: 0; /* Menghilangkan margin default */
    font-family: sans-serif; /* Ganti dengan font yang Anda sukai */
    }

    .navbar-brand {
    font-size: 30px; /* Ubah ukuran font sesuai kebutuhan */
    font-weight: bold; /* Atur ketebalan font sesuai keinginan */
    text-decoration: none; /* Hapus dekorasi tautan jika diinginkan */
    color: #333; /* Atur warna teks sesuai kebutuhan */
  }

    /* Tambahkan gaya khusus jika diperlukan */
    .welcome-message {
        text-align: center;
        margin: 20px 0;
        color: #fff; /* Sesuaikan warna teks dengan latar belakang atau selera Anda */
    }

    .hero {
    position: relative;
    padding: 5em 0;
    overflow: hidden;
    }

    .hero-bg {
        /* background-image: url('https://img.freepik.com/free-photo/pink-sky-background-with-crescent-moon_53876-129048.jpg'); */
        background-size: cover;
        background-position: center;
        height: 100vh; /* Gunakan 100vh untuk membuatnya memenuhi layar */
        display: flex;
        justify-content: center;
        align-items: flex-end; /* Sesuaikan ini untuk mengontrol posisi vertikal */
        color: #fff;
    }

    .hero-text {
        text-align: center;
        margin-bottom: 20vh; /* Atur margin bawah untuk menyesuaikan posisi vertikal teks */
    }

    .hero-image img {
        max-width: 80%;
        height: auto;
        margin-bottom: 16vh;
        margin-left: 10vh;
    }
    .navbar-brand img {
    border-radius: 50%; /* Membuat gambar logo menjadi bulat */
  }
    
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
  <a class="navbar-brand" href="index.php">
  <i class="fas fa-images" style="font-size: 30px;"></i>
      WEB GALERI FOTO
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
       
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<!-- Pesan Selamat Datang -->

<section class="hero hero-bg d-flex justify-content-center align-items-center">
<div class="container">
 <div class="row">

   <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
        <div class="hero-text">

         <h1 class="text-white" data-aos="fade-up">Selamat Datang di Aplikasi Website Gallery Foto CT STAR!</h1>
          </div>
           </div>

            <div class="col-lg-6 col-12">
            <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

       <img src="logo3.jpg" class="img-fluid" alt="working girl">
         </div>
        </div>

          </div>
     </div>
  </section>
<!-- <div class="welcome-message">
    <h1>Selamat Datang di Galeri Foto Kami!</h1>
    <p>Nikmati koleksi foto terbaik dari kami.</p>
</div> -->

<!-- Container untuk galeri foto -->
<!-- <div class="container mt-5">
    <div class="row"> -->
        <!-- Contoh foto dalam galeri -->
        <!-- <div class="container mt-30">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img style="height: 12rem;" src="" class="card-img-top" title="">
                <div class="card-footer text-center">
                <a href=""><i class="fa-regular fa-heart m-1"></i></a>10 Suka  
                    <a href=""><i class="fa-regular fa-comment"></i></a>3 Komentar  
                </div>
            </div>
        </div>
    </div>
</div> -->
        <!-- <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="path_to_your_image.jpg" alt="Foto" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <div class="card-body">
                    <p class="card-text">Deskripsi singkat foto.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Lihat</button>
                        </div>
                        <small class="text-muted">9 likes</small>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Tambahkan lebih banyak foto sesuai dengan format di atas -->
    <!-- </div>
</div> -->

<!-- <div class="container mt-30">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img style="height: 12rem;" src="" class="card-img-top" title="">
                <div class="card-footer text-center">
                <a href=""><i class="fa-regular fa-heart m-1"></i></a>10 Suka  
                    <a href=""><i class="fa-regular fa-comment"></i></a>3 Komentar  
                </div>
            </div>
        </div>
    </div>
</div> -->

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Juhairia Rahayu</p>
</footer>    

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>