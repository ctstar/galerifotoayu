-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 03:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_galerifotoayu`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `albumid` int(11) NOT NULL,
  `namaalbum` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggalbuat` date NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`albumid`, `namaalbum`, `deskripsi`, `tanggalbuat`, `userid`) VALUES
(3, 'Teknologi', 'Teknologi Masa Kini', '2024-01-29', 2),
(6, 'Hewan', 'Bermacam - macam hewan ada disini!', '2024-02-18', 4),
(7, 'Buah', 'Bermacam - macam buah ada disini!', '2024-02-18', 4),
(8, 'Alat Dapur', 'Bermacam - macam alat dapur', '2024-03-16', 4),
(9, 'Huruf', '                                            Ini adalah huruf-huruf ', '2024-03-16', 4),
(10, 'Transportasi', '                                            Bermacam transportasi                                            ', '2024-03-16', 4),
(11, 'Sport', 'Olahraga membuat sehat', '2024-03-16', 4),
(12, 'Mobil', 'the car is good!', '2024-03-16', 4),
(13, 'Alat Musik', 'Welcome to alat musik\r\n', '2024-03-16', 4);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `fotoid` int(11) NOT NULL,
  `judulfoto` varchar(255) NOT NULL,
  `deskripsifoto` text NOT NULL,
  `tanggalunggah` date NOT NULL,
  `lokasifile` varchar(255) NOT NULL,
  `albumid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`fotoid`, `judulfoto`, `deskripsifoto`, `tanggalunggah`, `lokasifile`, `albumid`, `userid`) VALUES
(5, 'Komputer', 'waw', '2024-02-18', '1020005115-download.jpg', 3, 2),
(6, 'Apel', 'Apel adalah tambahan sempurna untuk pola makan sehat Anda. ', '2024-03-16', '1637914554-apel.jpg', 7, 4),
(7, 'Anggur Hijau', 'Anggur merupakan buah yang banyak dikonsumsi oleh masyarakat, salah satunya adalah Anggur Hijau. ', '2024-03-16', '1454748819-anggur hijau.jpg', 7, 4),
(8, 'Pepaya', 'Pepaya adalah tumbuhan yang diperkirakan berasal dari Meksiko bagian selatan dan bagian utara dari Amerika Selatan.', '2024-02-18', '454779350-pepaya.jpg', 7, 4),
(9, 'Jeruk', 'Jeruk adalah salah satu sumber terbaik vitamin C alami. ', '2024-03-16', '1670972805-jeruk.jpg', 7, 4),
(10, 'Strawberry', 'Buah ini mengandung banyak nutrisi seperti vitamin C, folat, mangan, serat, dan antioksidan. Stroberi juga rendah kalori dan kaya akan serat.', '2024-02-18', '1134979835-strawberry.jpg', 7, 4),
(11, 'Kiwi', 'Daging buahnya berwarna hijau, memiliki rasa yang manis serta kaya akan nutrisi seperti vitamin C, vitamin K, vitamin E, asam folat dan kalium.', '2024-02-18', '506602081-kiwi.jpg', 7, 4),
(12, 'Singa', 'Singa (Sanskerta: Siṃha, atau nama ilmiahnya Panthera leo) adalah spesies hewan dari keluarga felidae atau keluarga kucing. ', '2024-02-18', '1886996599-singa.jpg', 6, 4),
(13, 'Kucing', 'Kucing merupakan hewan peliharaan yang umum di Eropa dan Amerika Utara, dan bahkan populasi kucing di seluruh dunia melebihi 500 juta ekor.', '2024-02-18', '2019576255-kucing.jpg', 6, 4),
(14, 'Buaya', 'Buaya adalah reptil bertubuh besar yang hidup di air. Secara ilmiah, buaya meliputi seluruh spesies anggota famili Crocodylidae, ', '2024-02-18', '526736817-buaya.jpg', 6, 4),
(15, 'Jerapah', 'Jerapah adalah hewan paling tinggi di dunia. Jerapah jantan dapat tumbuh hingga setinggi 5,5 meter.', '2024-02-18', '494710238-jerapah.jpeg', 6, 4),
(16, 'Panda', 'Panda raksasa lama menjadi hewan favorit masyarakat, sebagian karena spesies ini lucu seperti bayi, mirip dengan boneka beruang hidup.', '2024-02-18', '1861925177-panda.jpg', 6, 4),
(17, 'Harimau', 'Harimau (Panthera tigris) adalah spesies kucing terbesar yang masih hidup dari genus Panthera. Harimau memiliki ciri loreng yang khas pada bulunya, berupa garis-garis vertikal gelap pada bulu oranye, dengan bulu bagian bawah berwarna putih. Harimau adalah pemangsa puncak, mereka terutama memangsa ungulata seperti rusa dan babi celeng.', '2024-02-18', '1910728864-harimau.jpg', 6, 4),
(18, 'Zebra', 'Zebra (subgenus Hippotigris, disebut juga kuda loreng) adalah hewan dari Afrika yang dikenal akan tubuhnya yang berbelang hitam-putih.', '2024-02-18', '1875098596-zebra.jpg', 6, 4),
(19, 'Kelinci', 'Kelinci adalah hewan yang sangat lucu.', '2024-02-18', '509042321-kelinci.jpg', 6, 4),
(20, 'Melon', 'Melon (Cucumis melo L.) merupakan tanaman buah termasuk famili Cucurbitaceae, banyak yang menyebutkan buah melon berasal dari Lembah Panas Persia atau.', '2024-02-18', '579424453-melon.jpg', 7, 4),
(21, 'Rambutan', ' Buah ini memiliki kandungan air yang tinggi dan vitamin B3 yang membantu menjaga kulit tetap halus dan lembab.', '2024-02-18', '579156196-rambutan.jpg', 7, 4),
(22, 'Panci', 'Panci merupakan', '2024-03-16', '1120764953-alat dapur1.jpg', 8, 4),
(23, 'Teflon', 'ini teflon yang tidak lengket', '2024-03-16', '1380696921-alatdapur2.jpg', 8, 4),
(24, 'Pisau', 'Pisau ini sangat bahaya', '2024-03-16', '1051479798-alatdapur3.jpg', 8, 4),
(25, 'Sutil', 'Bermacam Sutil berguna untuk memasak', '2024-03-16', '1553705954-alatdapur4.jfif', 8, 4),
(26, 'Spatula', 'Spatula berfungsi untuk menyatukan bahan bahan yg diaduk', '2024-03-16', '511390957-spatula.jfif', 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `komentarid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `isikomentar` text NOT NULL,
  `tanggalkomentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentarfoto`
--

INSERT INTO `komentarfoto` (`komentarid`, `fotoid`, `userid`, `isikomentar`, `tanggalkomentar`) VALUES
(3, 5, 2, 'like this', '2024-02-18'),
(4, 5, 2, 'keren banget lho', '2024-02-18'),
(5, 6, 2, 'apel itu sehat', '2024-02-18'),
(6, 9, 2, 'jeruk manisss', '2024-02-18'),
(7, 12, 2, 'singa canti bangettt', '2024-02-18'),
(8, 16, 2, 'keren banget lho', '2024-02-23'),
(9, 13, 4, 'meowww', '2024-02-28'),
(10, 13, 4, 'mau beli ini lah', '2024-03-11'),
(11, 12, 4, 'gud', '2024-03-15'),
(12, 14, 4, 'wahhhh', '2024-03-16'),
(13, 7, 4, 'i like it', '2024-03-16'),
(14, 12, 4, 'ini ayu', '2024-03-16'),
(15, 10, 4, 'i like it', '2024-03-18'),
(16, 7, 4, 'anggur', '2024-03-19'),
(17, 8, 4, 'pepaya', '2024-03-20'),
(18, 6, 4, 'ya', '2024-03-20'),
(19, 8, 4, 'wahhhh', '2024-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `likeid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tanggallike` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likefoto`
--

INSERT INTO `likefoto` (`likeid`, `fotoid`, `userid`, `tanggallike`) VALUES
(40, 5, 2, '2024-02-18'),
(45, 12, 2, '2024-02-18'),
(46, 13, 2, '2024-02-25'),
(47, 12, 4, '2024-02-25'),
(48, 10, 4, '2024-02-25'),
(51, 15, 4, '2024-02-28'),
(52, 16, 4, '2024-02-28'),
(55, 13, 4, '2024-02-28'),
(56, 14, 4, '2024-02-28'),
(57, 18, 4, '2024-02-28'),
(58, 19, 4, '2024-02-28'),
(61, 5, 4, '2024-03-16'),
(62, 24, 4, '2024-03-16'),
(63, 7, 4, '2024-03-16'),
(65, 23, 4, '2024-03-16'),
(69, 9, 4, '2024-03-20'),
(70, 17, 4, '2024-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `namalengkap`, `alamat`) VALUES
(2, 'aa', '202cb962ac59075b964b07152d234b70', 'aa@gmail.com', 'aa', 'aa'),
(4, 'Ayu', '202cb962ac59075b964b07152d234b70', 'ayu@gmail.com', 'Ayu Andira', 'Gatsu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`albumid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`fotoid`),
  ADD KEY `albumid` (`albumid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`komentarid`),
  ADD KEY `fotoid` (`fotoid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `fotoid` (`fotoid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `fotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `komentarid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`albumid`) REFERENCES `album` (`albumid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD CONSTRAINT `komentarfoto_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentarfoto_ibfk_2` FOREIGN KEY (`fotoid`) REFERENCES `foto` (`fotoid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD CONSTRAINT `likefoto_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likefoto_ibfk_2` FOREIGN KEY (`fotoid`) REFERENCES `foto` (`fotoid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
