<!-- Selamat Datang -->
<?php
session_start();
include '../config/koneksi.php';
if ($_SESSION['status'] != 'login') {
    echo "<script>
    alert('Anda Belum Login!');
    location.href='../index.php';
    </script>";
}

?>

<!-- <a href="../config/aksi_logout.php">Logout</a> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
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
    .navbar-brand img {
    border-radius: 50%; /* Membuat gambar logo menjadi bulat */
  }
  
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
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
      <a href="home.php" class="nav-link">Home</a>
      <a href="album.php" class="nav-link">Album</a>
      <a href="foto.php" class="nav-link">Foto</a>
      </div>
      <!-- <form class="d-flex">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
      </form> -->
      <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
    </div>
  </div>
</nav> 

<div class="container">
   <div class="row">
         <div class="col-md-4">
             <div class="card mt-2">
                 <div class="card-header">Tambah Album</div>
                     <div class="card-body">
                        <form action="../config/aksi_album.php" method="POST">
                            <label class="form-label">Nama Album</label>
                            <input type="text" name="namaalbum" class="form-control" required>
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" required></textarea>
                            <button type="submit" class="btn btn-primary mt-2" name="tambah">Tambah Data</button>
                        </form>
                     </div>
             </div>   
         </div>

         <div class="col-md-8">
             <div class="card mt-2">
                 <div class="card-header">Data Album</div>
                 <div class="card-body">
                    <table class="table">
                        <thead>
                           <tr>
                            <th>#</th>
                            <th>Nama Album</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $userid = $_SESSION['userid'];
                            $sql = mysqli_query($koneksi,"SELECT * FROM album WHERE userid='$userid'");
                            while($data = mysqli_fetch_array($sql)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['namaalbum'] ?></td>
                                <td><?php echo $data['deskripsi'] ?></td>
                                <td><?php echo $data['tanggalbuat'] ?></td>
                                <td>
                                   <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['albumid'] ?>">
                                <i class="fas fa-edit"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="edit<?php echo $data['albumid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../config/aksi_album.php" method="POST">
                                           <input type="hidden" name="albumid" value="<?php echo $data['albumid'] ?>">
                                           <label class="form-label">Nama Album</label>
                                            <input type="text" name="namaalbum" value="<?php echo $data['namaalbum'] ?>" class="form-control" required>
                                            <label class="form-label">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" required>
                                            <?php echo $data['deskripsi']; ?>
                                            </textarea>       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['albumid'] ?>">
                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hapus<?php echo $data['albumid'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../config/aksi_album.php" method="POST">
                                           <input type="hidden" name="albumid" value="<?php echo $data['albumid'] ?>">
                                           Apakah Anda Yakin Akan Menghapus Data <strong> <?php echo $data['namaalbum'] ?> </strong> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="hapus" class="btn btn-primary">Hapus Data</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                </td>
                            </tr>
                               <?php } ?>
                        </tbody>
                    </table>
                 </div>
             </div>
         </div>
   </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | Juhairia Rahayu</p>
</footer>    

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>