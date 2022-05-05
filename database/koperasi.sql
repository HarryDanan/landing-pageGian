-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 12:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cendana`
--

-- --------------------------------------------------------

--
-- Table structure for table `koperasi`
--

CREATE TABLE `koperasi` (
  `id` int(11) NOT NULL,
  `namaKoperasi` varchar(225) NOT NULL,
  `nomorBadanHukum` varchar(225) NOT NULL,
  `nomorPerubahan_terbaru` varchar(225) NOT NULL,
  `tglPerubahan_terbaru` date NOT NULL,
  `tglRAT_terkahir` date NOT NULL,
  `alamatKoperasi` varchar(225) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kabupaten` varchar(225) NOT NULL,
  `provinsi` varchar(225) NOT NULL,
  `bentukKoperasi` varchar(225) NOT NULL,
  `sektorUsaha` varchar(225) NOT NULL,
  `namaKetua` varchar(225) NOT NULL,
  `namaSekretaris` varchar(225) NOT NULL,
  `namaBendahara` varchar(225) NOT NULL,
  `namaPengawas` varchar(225) NOT NULL,
  `namaManager` varchar(225) NOT NULL,
  `jmlAnggota_pria` int(11) NOT NULL,
  `jmlAnggota_wanita` int(11) NOT NULL,
  `totalAnggota` int(11) NOT NULL,
  `totalManager` int(11) NOT NULL,
  `totalKaryawan` int(11) NOT NULL,
  `nikKoperasi` int(150) NOT NULL,
  `statusNIK` varchar(225) NOT NULL,
  `tglBerlaku_sertifikat` date NOT NULL,
  `statusGrade` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
