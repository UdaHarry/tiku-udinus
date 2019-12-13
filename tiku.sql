-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 03:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `tanggal rilis` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `sinopsis`, `keterangan`, `tanggal rilis`, `foto`) VALUES
(1, 'Frozen 2', 'Mengapa Elsa dikaruniai kekuatan magis sejak lahir? Jawaban atas pertanyaan itu kini memanggilnya sekaligus mengancam kelangsungan kerajaannya. Bersama Anna, Kristoff, Olaf, dan Sven, Elsa pergi dalam sebuah pengembaraan yang berbahaya namun menakjubkan.', '1 jam 43 menit', '2019-11-20', 'frozen2.jpg'),
(2, 'Ford v Ferrari', '2 pemenang Academy Award, Matt Damon dan Christian Bale berperan di FORD v FERRARI, berdasarkan kisah nyata yang luar biasa dari Carroll Shelby (Damon), seorang perancang mobil visioner dari Amerika bersama Ken Miles (Bale), seorang pembalap Inggris yang tak kenal takut. Mereka bersama-sama berjuang menghadapi campur tangan perusahaan, hukum fisika, dan masalah pribadi mereka sendiri ketika membangun mobil balap revolusioner bagi Ford Motor Company untuk menantang mobil balap buatan Enzo Ferrari yang mendomniasi 24 Jam Le Mans di Perancis pada tahun 1966.', '2 jam 32 menit', '2019-11-15', 'FordVFerrari.jpg'),
(3, 'Aladdin', 'Aladdin, seorang anak jalanan yang jatuh cinta pada seorang putri. Dengan perbedaan kasta dan harta, Aladdin pun berusaha mencari jalan agar bisa mejadi seorang pangeran, tak disangka ia menemukan lampu dengan jin di dalamnya. Aladdin pun menggunakan lampu untuk mengubah dirinya menjadi seorang pangeran untuk memenangkan hatiPutri Jasmine, tapi Wazir jahat juga mengejar lampu tersebut untuk menguasai kerajaan.', '2 jam 18 menit', '2019-05-24', 'aladdin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(15) NOT NULL,
  `jadwal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jadwal`) VALUES
(1, 'Siang'),
(2, 'Sore');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `nokur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `nokur`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'B1'),
(6, 'B2'),
(7, 'B3'),
(8, 'B4'),
(9, 'C1'),
(10, 'C2'),
(11, 'C3'),
(12, 'C4'),
(13, 'D1'),
(14, 'D2'),
(15, 'D3'),
(16, 'D4'),
(17, 'E1'),
(18, 'E2'),
(19, 'E3'),
(20, 'E4');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `tanggal_nonton` date NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nokur` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_film`, `tanggal_nonton`, `id_jadwal`, `nokur`) VALUES
(1, 3, '2019-12-18', 1, 'A1'),
(2, 3, '2019-12-18', 1, 'B1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
