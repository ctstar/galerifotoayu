<?php
$hostname = 'localhost';
$userdb = 'root';
$passdb= '';
$namedb= 'ukk_galerifotoayu';

$koneksi = mysqli_connect($hostname,$userdb,$passdb,$namedb);

// if ($koneksi) {
//     echo "Terhubung";
// }else{
//     echo "Tidak Terhubung";
// }

// Memeriksa apakah ada parameter pencarian yang dikirimkan
// if(isset($_GET['keyword']) && !empty($_GET['keyword'])) {
//     $keyword = $_GET['keyword'];
//     $query = mysqli_query($koneksi, "SELECT * FROM Foto 
//                                     INNER JOIN user ON foto.userid=user.userid 
//                                     INNER JOIN album ON foto.albumid=album.albumid 
//                                     WHERE judulfoto LIKE '%$keyword%'");
// } else {
    // Jika tidak ada parameter pencarian, tampilkan semua data
//     $query = mysqli_query($koneksi, "SELECT * FROM Foto 
//                                     INNER JOIN user ON foto.userid=user.userid 
//                                     INNER JOIN album ON foto.albumid=album.albumid");
// }

?>