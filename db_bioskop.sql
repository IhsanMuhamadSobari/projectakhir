-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 06:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `id_cinema` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `nama` enum('Cinema XXI','CGV','Cinepolis','Kota Cinema') NOT NULL,
  `alamat` text NOT NULL,
  `tiket_sun_mon` int(15) NOT NULL,
  `tiket_sat_sun` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id_cinema`, `id_film`, `nama`, `alamat`, `tiket_sun_mon`, `tiket_sat_sun`) VALUES
(1, 21, 'Cinema XXI', 'tesssssssssss', 50000, 60000),
(4, 22, 'Cinepolis', '412441', 324, 24);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun_rilis` varchar(50) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `genre` enum('action','horor','animation','romance','comedy') NOT NULL,
  `sinopsis` text NOT NULL,
  `aktor` varchar(255) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `gambar`, `judul`, `tahun_rilis`, `rating`, `genre`, `sinopsis`, `aktor`, `sutradara`, `penulis`) VALUES
(21, 'kkn2 1.png', 'KKN di New York', '2022', '9.8', 'action', 'pada suatu hari di siang hari', 'riswan', 'mamang daya', 'lurah'),
(22, 'IMG_20220520_081632_176.jpg', 'BBANG TAMVAN', '2021', '9.5', 'animation', 'twet', 'wet', 'wet', 'wetwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id_cinema`),
  ADD UNIQUE KEY `id_film` (`id_film`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id_cinema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
