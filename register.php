<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style>
    body {
    /* background-image: url('https://img.freepik.com/free-photo/pink-sky-background-with-crescent-moon_53876-129048.jpg'); */
    background-size: cover;
    background: #057a8d 64%;
    height: 100vh; /* Pastikan halaman mengisi seluruh tinggi viewport */
    margin: 0; /* Menghilangkan margin default */
    /* background: linear-gradient(135deg, #87ceeb 50%, #0dcaf0 100%); */
    font-family: sans-serif; /* Ganti dengan font yang Anda sukai */
    }

    .navbar-brand {
    font-size: 30px; /* Ubah ukuran font sesuai kebutuhan */
    font-weight: bold; /* Atur ketebalan font sesuai keinginan */
    text-decoration: none; /* Hapus dekorasi tautan jika diinginkan */
    color: #333; /* Atur warna teks sesuai kebutuhan */
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

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h2>DAFTAR</h2>
                    </div>
                    <form action="config/aksi_register.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <input id="password-input" type="password" name="password" class="form-control" required>
                            <button id="toggle-password" type="button" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></button>
                        </div>
                        <!-- <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required> -->
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" required>
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        <div class="d-grid mt-2">
                        <button class="btn btn-primary" type="submit" name="kirim">DAFTAR</button>
                        </div>
                    </form>
                    <hr>
                    <p>Sudah punya akun? <a href="login.php">Login Disini!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Juhairia Rahayu</p>
</footer>    

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script>
    document.getElementById("toggle-password").onclick = function() {
        var passwordInput = document.getElementById("password-input");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            document.getElementById("toggle-password").innerHTML = '<i class="fa fa-eye-slash"></i>';
        } else {
            passwordInput.type = "password";
            document.getElementById("toggle-password").innerHTML = '<i class="fa fa-eye"></i>';
        }
    }
</script>

</body>
</html>