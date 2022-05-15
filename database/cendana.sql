-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 02:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `role` text NOT NULL,
  `tipe_bidang` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `role`, `tipe_bidang`, `foto`) VALUES
(1, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin_super', '', 'IMG_1977_copy.jpg'),
(3, 'admin2', 'admin', 'admin2', 'Admin Super', '-', NULL),
(4, 'admin_bidang1', 'password', 'admin_bidang1', 'Admin Bidang', 'Bidang A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_kelembagaan_koperasi`
--

CREATE TABLE `data_kelembagaan_koperasi` (
  `id` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `jmlAnggota_pria` int(11) NOT NULL,
  `jmlAnggota_wanita` int(11) NOT NULL,
  `totalAnggota` int(11) NOT NULL,
  `totalManager` int(11) NOT NULL,
  `totalKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kelembagaan_koperasi`
--

INSERT INTO `data_kelembagaan_koperasi` (`id`, `id_koperasi`, `jmlAnggota_pria`, `jmlAnggota_wanita`, `totalAnggota`, `totalManager`, `totalKaryawan`) VALUES
(1, 0, 0, 0, 0, 0, 0),
(2, 1920392103, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_koperasi`
--

CREATE TABLE `data_koperasi` (
  `id` int(11) NOT NULL,
  `nikKoperasi` int(11) NOT NULL,
  `namaKoperasi` text NOT NULL,
  `nomorBadanHukum` text NOT NULL,
  `tglBadanHukumPendirian` date NOT NULL,
  `nomorPerubahan_terbaru` text NOT NULL,
  `tglPerubahan_terbaru` date NOT NULL,
  `tglRAT_terakhir` date NOT NULL,
  `provinsi` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kodePos` text NOT NULL,
  `alamatKoperasi` text NOT NULL,
  `no_telepon1` int(15) NOT NULL,
  `no_telepon2` int(15) NOT NULL,
  `faksmili` int(11) NOT NULL,
  `emaill` text NOT NULL,
  `website` text NOT NULL,
  `statusAktif` varchar(10) NOT NULL,
  `bentukKoperasi` text NOT NULL,
  `jenisKoperasi` text NOT NULL,
  `kelompokKoperasi` text NOT NULL,
  `sektorUsaha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_koperasi`
--

INSERT INTO `data_koperasi` (`id`, `nikKoperasi`, `namaKoperasi`, `nomorBadanHukum`, `tglBadanHukumPendirian`, `nomorPerubahan_terbaru`, `tglPerubahan_terbaru`, `tglRAT_terakhir`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `kodePos`, `alamatKoperasi`, `no_telepon1`, `no_telepon2`, `faksmili`, `emaill`, `website`, `statusAktif`, `bentukKoperasi`, `jenisKoperasi`, `kelompokKoperasi`, `sektorUsaha`) VALUES
(3, 0, '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Bali', 'Gianyar', '-', '-', '', '', 0, 0, 0, '', '', '-', '-', '-', '-', '-'),
(4, 1920392103, 'koperasi2', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Bali', 'Gianyar', '-', '-', '', '', 0, 0, 0, '', '', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama`) VALUES
(1, 'Gianyar');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kab`, `nama`) VALUES
(1, 1, 'Blahbatuh'),
(2, 1, 'Gianyar'),
(3, 1, 'Payangan'),
(4, 1, 'Sukawati'),
(5, 1, 'Tampaksiring'),
(6, 1, 'Tegallalang'),
(7, 1, 'Ubud');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan_desa`
--

CREATE TABLE `kelurahan_desa` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelurahan_desa`
--

INSERT INTO `kelurahan_desa` (`id`, `id_kecamatan`, `nama`, `tipe`) VALUES
(1, 1, 'Bedulu', 'Desa'),
(2, 1, 'Belega', 'Desa'),
(3, 1, 'Blahbatuh', 'Desa'),
(4, 1, 'Bona', 'Desa'),
(5, 1, 'Buruan', 'Desa'),
(6, 1, 'Keramas', 'Desa'),
(7, 1, 'Medahan', 'Desa'),
(8, 1, 'Pering', 'Desa'),
(9, 1, 'Saba', 'Desa'),
(10, 2, 'Bakbakan', 'Desa'),
(11, 2, 'Lebih', 'Desa'),
(12, 2, 'Petak', 'Desa'),
(13, 2, 'Petak Kaja', 'Desa'),
(14, 2, 'Serongan', 'Desa'),
(15, 2, 'Siangan', 'Desa'),
(16, 2, 'Sidan', 'Desa'),
(17, 2, 'Sumita', 'Desa'),
(18, 2, 'Suwat', 'Desa'),
(19, 2, 'Tegal Tugu', 'Desa'),
(20, 2, 'Temesi', 'Desa'),
(21, 2, 'Tulikup', 'Desa'),
(22, 2, 'Abianbase', 'Kelurahan'),
(23, 2, 'Beng', 'Kelurahan'),
(24, 2, 'Bitera', 'Kelurahan'),
(25, 2, 'Gianyar', 'Kelurahan'),
(26, 2, 'Samplangan', 'Kelurahan'),
(27, 3, 'Bresela', 'Desa'),
(28, 3, 'Buahan', 'Desa'),
(29, 3, 'Buahan Kaja', 'Desa'),
(30, 3, 'Bukian', 'Desa'),
(31, 3, 'Kelusa', 'Desa'),
(32, 3, 'Kerta', 'Desa'),
(33, 3, 'Melinggih', 'Desa'),
(34, 3, 'Melinggih Kelod', 'Desa'),
(35, 3, 'Puhu', 'Desa'),
(36, 4, 'Batuan', 'Desa'),
(37, 4, 'Batuan Kaler', 'Desa'),
(38, 4, 'Batubulan', 'Desa'),
(39, 4, 'Batubulan Kangin', 'Desa'),
(40, 4, 'Celuk', 'Desa'),
(41, 4, 'Guwang', 'Desa'),
(42, 4, 'Kemenuh', 'Desa'),
(43, 4, 'Ketewel', 'Desa'),
(44, 4, 'Singapadu', 'Desa'),
(45, 4, 'Singapadu Kaler', 'Desa'),
(46, 4, 'Singapadu Tengah', 'Desa'),
(47, 4, 'Sukawati', 'Desa'),
(48, 5, 'Manukaya', 'Desa'),
(49, 5, 'Pejeng', 'Desa'),
(50, 5, 'Pejeng Kaja', 'Desa'),
(51, 5, 'Pejeng Kangin', 'Desa'),
(52, 5, 'Pejeng Kawan', 'Desa'),
(53, 5, 'Pejeng Kelod', 'Desa'),
(54, 5, 'Sanding', 'Desa'),
(55, 5, 'Tampaksiring', 'Desa'),
(56, 6, 'Kedisan', 'Desa'),
(57, 6, 'Keliki', 'Desa'),
(58, 6, 'Kendran', 'Desa'),
(59, 6, 'Pupuan', 'Desa'),
(60, 6, 'Sebatu', 'Desa'),
(61, 6, 'Taro', 'Desa'),
(62, 6, 'Tegallalang', 'Desa'),
(63, 7, 'Kedewatan', 'Desa'),
(64, 7, 'Lodtunduh', 'Desa'),
(65, 7, 'Peliatan', 'Desa'),
(66, 7, 'Petulu', 'Desa'),
(67, 7, 'Sayan', 'Desa'),
(68, 7, 'Singakerta', 'Desa'),
(69, 7, 'Ubud', 'Kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `koperasi`
--

CREATE TABLE `koperasi` (
  `id` int(150) NOT NULL,
  `namaKoperasi` varchar(225) NOT NULL,
  `nomorBadanHukum` varchar(225) NOT NULL,
  `tglBadanHukumPendirian` date NOT NULL,
  `nomorPerubahan_terbaru` varchar(225) NOT NULL,
  `tglPerubahan_terbaru` date NOT NULL,
  `tglRAT_terakhir` date NOT NULL,
  `alamatKoperasi` varchar(225) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kabupaten` varchar(225) NOT NULL,
  `provinsi` varchar(225) NOT NULL,
  `bentukKoperasi` varchar(225) NOT NULL,
  `jenisKoperasi` text NOT NULL,
  `kelompokKoperasi` text NOT NULL,
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
  `nikKoperasi` text NOT NULL,
  `statusNIK` varchar(225) NOT NULL,
  `tglBerlaku_sertifikat` date NOT NULL,
  `statusGrade` varchar(225) NOT NULL,
  `statusValid` text NOT NULL,
  `kodePos` int(11) NOT NULL,
  `no_telepon1` int(111) NOT NULL,
  `no_telepon2` int(111) NOT NULL,
  `faksmili` text NOT NULL,
  `emaill` text NOT NULL,
  `website` text NOT NULL,
  `statusAktif` varchar(20) NOT NULL,
  `no_telp_ketua` int(111) NOT NULL,
  `no_telp_sekretaris` int(111) NOT NULL,
  `no_telp_bendahara` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koperasi`
--

INSERT INTO `koperasi` (`id`, `namaKoperasi`, `nomorBadanHukum`, `tglBadanHukumPendirian`, `nomorPerubahan_terbaru`, `tglPerubahan_terbaru`, `tglRAT_terakhir`, `alamatKoperasi`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `bentukKoperasi`, `jenisKoperasi`, `kelompokKoperasi`, `sektorUsaha`, `namaKetua`, `namaSekretaris`, `namaBendahara`, `namaPengawas`, `namaManager`, `jmlAnggota_pria`, `jmlAnggota_wanita`, `totalAnggota`, `totalManager`, `totalKaryawan`, `nikKoperasi`, `statusNIK`, `tglBerlaku_sertifikat`, `statusGrade`, `statusValid`, `kodePos`, `no_telepon1`, `no_telepon2`, `faksmili`, `emaill`, `website`, `statusAktif`, `no_telp_ketua`, `no_telp_sekretaris`, `no_telp_bendahara`) VALUES
(2, 'Koperasi Simpan Pinjam Sinar Sedana Yadnya', '32/BH/XXVII.4/III/2016', '2016-03-29', '', '0000-00-00', '2020-01-18', 'Jl. Pasung Grigis, Banjar Tengkulak Kaja, Desa Kemenuh', 'Kemenuh', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'I Made Murdiana', 'Putu Dolis Masdiana', 'I Wayan Wasa', '', '', 106, 45, 151, 0, 10, '5104010020001', 'Sudah Bersetifikat', '2023-03-29', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(3, 'Koperasi Simpan Pinjam Giri Sidhi Sedana', '006385/BH/M.KUKM.2/XI/2017', '2017-11-29', '', '0000-00-00', '2021-03-06', 'Jalan Pasung Grigis, Banjar Tengkulak Kaja', 'Kemenuh', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'DESAK PUTU TIRTA, SH', 'NI GUSTI PUTU BUDIANI', 'NI GUSTI NYOMAN MANUWATI', '', '', 35, 61, 96, 0, 0, '5104010020002', 'Sertifikat - Expired', '2021-11-29', 'A', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(4, 'Koperasi Simpan Pinjam Agasthia Sedana Artha', '011870/BH/M.KUKM.2/I/2019', '2019-01-28', '', '0000-00-00', '2021-02-10', 'Banjar Tengkulak Tengah', 'Kemenuh', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'I Gusti Nyoman Merta', 'Ni Luh sintia armadi', 'I Gusti Putu Sudarsa', '', '', 66, 70, 136, 0, 0, '5104010020003', 'Sertifikat - Expired', '2022-01-28', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(5, 'Koperasi Serba Usaha Yuli Dana Mandiri', '02/BH/Diskop/II/2003', '2003-02-07', '', '0000-00-00', '2020-02-01', 'Jalan Raya Negari', 'Singapadu Tengah', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Konsumen', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'I Gst. Ngr. Oka Suta Suteja', 'Ni Made Supiati', 'Ida Ayu Siratni', '', '', 286, 134, 420, 0, 4, '5104010010019', 'Sertifikat - Expired', '2017-12-31', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(6, 'KOPERASI SIMPAN PINJAM GUNUNG SARI', '10/BH/XXVII/XI/2013', '2013-11-12', '', '0000-00-00', '2019-01-27', 'Jl. Batuyang', 'Batubulan', 'Sukawati', 'Gianyar', 'Bali', 'Primer Provinsi', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'I Made Sueden', 'Ketut Mardika', 'Komang Cahya Sudiarta', '', '', 126, 52, 178, 0, 2, '5104010010235', 'Sertifikat - Expired', '2020-11-12', 'D', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(7, 'KOPERASI SIMPAN PINJAM WERDHI ARTA GUNA', '21/BH/Tahun 2007', '2007-05-21', 'AHU-0000667.AH.01.27.TAHUN 2020', '2020-07-10', '2021-02-12', 'Banjar Tengkulak Kaja Kauh, Desa Kemenuh, Kecamatan Sukawati, Kabupaten Gianyar, Propinsi Bali', 'Kemenuh', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'I MADE EDO RYENALDI', 'I MADE KANTOR', 'I GEDE EKA SUTRESNA', 'I NYOMAN SUDIARSA', '', 164, 26, 190, 0, 7, '5104010020162', 'Sertifikat - Expired', '2020-05-21', 'A', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(8, 'Koperasi Kubu Bingin Bali', '02/BH/DISKOP/VIII/2002', '2002-08-14', '', '0000-00-00', '2020-03-15', 'Jl. Ir. Sutami, Banjar Tengkulak Mas', 'Kemenuh', 'Sukawati', 'Gianyar', 'Bali', 'Primer Provinsi', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'I Nyoman Arjawa, S.Sn', 'Sri Untari, S.Pd', 'Ni Kadek Sutareni', '', '', 1325, 1368, 2693, 0, 21, '5104050010163', 'Sudah Bersetifikat', '2022-08-14', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(9, 'Koperasi Simpan Pinjam Samudra Harta', '08/BH/XXVII.4/II/2014', '2014-02-07', '', '0000-00-00', '2021-02-12', 'Jalan Pasung Grigis, Banjar Tengkulak Kaja', 'Kemenuh', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'I Gusti Ngurah Anom, SE', 'I Made Keluwes', 'Ni Putu Ari Astiti Ningsih', '', '', 460, 388, 848, 0, 6, '5104010020237', 'Sertifikat - Expired', '2019-02-07', 'A', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(10, 'Koperasi Unit Desa Sukawati', '844A/BH/VIII/1980', '1980-09-18', '56/BH/PAD/KWK.22/III/96', '1996-03-25', '2020-02-10', 'Pasar Seni Sukawati, Jalan Raya Sukawati', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Produsen', 'KUD', 'Pertanian, Kehutanan dan Perikanan', 'I Nyoman Suantha', 'I Gusti Ngurah Oka', 'Drs. I Wayan Sopan', '', '', 2000, 677, 2677, 1, 17, '5104010030001', 'Sertifikat - Expired', '2019-09-18', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(12, 'Koperasi Simpan Pinjam Tirta Sedana', '01/BH/KDK.22.4/I/2001', '2001-01-05', '', '0000-00-00', '2021-02-28', 'Candra Asri, Blok G 110 Batubulan', 'Batubulan', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'Nyoman Winaca, SE', 'I Made Sulandra, SE', 'I Gede Wilda Budiartha, SE.,M.Si.', '', '', 100, 77, 177, 0, 6, '5104010030011', 'Sudah Bersetifikat', '2023-01-05', 'A', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(13, 'Koperasi Serba Usaha Banjar Babakan', '430/BH/Banjar/DISKOP/X/03', '2003-10-09', '', '0000-00-00', '2021-02-03', 'Jalan Ciung Wanara, Banjar Babakan, Sukawati', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Konsumen', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'I Wayan Laksana, S.Pd', 'I Wayan Suarsana, SE', 'I Wayan Suwija', '', '', 252, 103, 355, 0, 6, '5104010030114', 'Sertifikat - Expired', '2020-10-09', 'A', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(14, 'Koperasi Serba Usaha Banjar Tebuana', '429/BH/Banjar/DISKOP/X/03', '2003-10-09', '', '0000-00-00', '2019-03-11', 'Banjar Tebuana, Sukawati', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Konsumen', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'I Wayan Parsana', 'I Made Mawan', 'I Gusti Ngurah Karya', '', '', 230, 106, 336, 0, 6, '5104010030115', 'Sertifikat - Expired', '2019-10-09', 'D', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(15, 'Koperasi Serba Usaha Banjar Mudita', '455/BH/Banjar/DISKOP/X/03', '2003-10-16', '', '0000-00-00', '2019-02-16', 'Banjar Mudita', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Konsumen', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'Dewa Made Mustika', 'Anak Agung Gede Raka Wibawa Putra', 'Ida Bagus Ketut Ngurah', '', '', 201, 145, 346, 0, 4, '5104010030116', 'Sertifikat - Expired', '2018-12-31', 'D', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(16, 'Koperasi Serba Usaha Banjar Kebalian', '456/BH/Banjar/DISKOP/X/03', '0000-00-00', '', '0000-00-00', '2020-01-18', 'Banjar Kebalian', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', '', '', 'Jasa Keuangan dan Asuransi', 'I Ketut Sada', 'I Wayan Agus Parta Aditya', 'I Ketut Gunarsa', '', '', 157, 5, 162, 0, 2, '5104010030119', '-', '2018-12-31', '-', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(17, 'Koperasi Serba Usaha Banjar Gelumpang', '460/BH/Banjar/DISKOP/X/03', '2003-10-20', '', '0000-00-00', '2020-02-08', 'Banjar Gelumpang, Sukawati', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Konsumen', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'Drs ketut suartaya', 'Ni Kadek Palayani', 'I Nyoman Rena', '', '', 420, 10, 430, 1, 8, '5104010030120', 'Sudah Bersetifikat', '2022-10-20', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(18, 'Koperasi Simpan Pinjam Cempaka Danatama Mandiri', '05/BH/KDK22.4/II/01', '2001-02-02', '', '0000-00-00', '2020-01-24', 'Jalan Pantai Purnama No. 14 Sukawati', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'Drs. I Wayan Subrata, MM', 'I Made Juniastra, ST, MT', 'Ni Wayan Nilawati, S.Pd', '', '', 450, 125, 575, 1, 12, '5104010030129', 'Sudah Bersetifikat', '2023-02-02', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(19, 'Koperasi Serba Usaha Banjar Tegenungan', '276/BH/Banjar/DISKOP/IX/03', '2003-09-02', '', '0000-00-00', '2020-01-26', 'Banjar Tegenungan', 'Kemenuh', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Konsumen', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'Luh Puji Ariani', 'Kadek Budiani', 'Wayan Purnami', '', '', 136, 98, 234, 0, 0, '5104010020084', 'Sertifikat - Expired', '2018-12-31', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(20, 'Koperasi Serba Usaha Arya Sedana', '06/BH/XXVII.4/I/2008', '2008-01-17', '', '0000-00-00', '2019-03-29', 'Banjar Gelulung, Desa Sukawati', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Konsumen', 'Kop. Serba Usaha', 'Jasa Keuangan dan Asuransi', 'Putu Yudy Wijaya, SE.M.Si', 'Ni Kadek Ratna Dewi', 'I Wayan Rinda', '', '', 172, 98, 270, 0, 6, '5104010030187', 'Sertifikat - Expired', '2020-01-17', 'D', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(21, 'Koperasi Simpan Pinjam Binar Dana Rahayu', '03/BH/XXVII.4/II/2012', '2012-02-24', '', '0000-00-00', '2021-02-27', 'Jalan Yudistira 99, Banjar Dlodtangluk', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'I Wayan Sucipta Budiyasa, SE', 'Ni Wayan Desy Sukmawati', 'Eka Ardy Septyawan, SE', '', '', 112, 51, 163, 1, 6, '5104010030218', 'Sudah Bersetifikat', '2023-02-24', 'A', '', 0, 0, 0, '', '', '', '', 0, 0, 0),
(23, 'Koperasi Simpan Pinjam Artha Rahayu Sejahtera Abadi', '008330/BH/M.KUKM.2/V/2018', '2018-05-08', '', '0000-00-00', '2020-01-25', 'Jalan Padma, Banjar Dlotangluk', 'Sukawati', 'Sukawati', 'Gianyar', 'Bali', 'Primer Kabupaten/Kota', 'Simpan Pinjam', 'Kop. Simpan Pinjam', 'Jasa Keuangan dan Asuransi', 'I Wayan Sugiartha', 'Ni Putu Dwi Yuliari', 'Ni Putu Laspinawati', '', '', 65, 35, 100, 0, 0, '5104010030002', 'Sertifikat - Expired', '2021-05-08', 'B', '', 0, 0, 0, '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_asset`
--

CREATE TABLE `tb_asset` (
  `id` int(11) NOT NULL,
  `idKoperasi` int(111) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `modalSendiri` int(111) NOT NULL,
  `modalLuar` int(111) NOT NULL,
  `asset` int(111) NOT NULL,
  `volumeUsaha` int(111) NOT NULL,
  `total` int(111) NOT NULL,
  `sisaHasilUsaha` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datakoperasi`
--

CREATE TABLE `tb_datakoperasi` (
  `id` int(111) NOT NULL,
  `nikKoperasi` varchar(255) NOT NULL,
  `namaKoperasi` text NOT NULL,
  `nomorBadanHukum` varchar(255) NOT NULL,
  `tglBadanHukumPendirian` date NOT NULL,
  `nomorPerubahan_terbaru` varchar(255) NOT NULL,
  `tglPerubahan_terbaru` date NOT NULL,
  `tglRAT_terakhir` date NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kodePos` int(11) NOT NULL,
  `alamatKoperasi` text NOT NULL,
  `no_telepon1` int(111) NOT NULL,
  `no_telepon2` int(111) NOT NULL,
  `faksmili` text NOT NULL,
  `emaill` varchar(255) NOT NULL,
  `website` text NOT NULL,
  `statusAktif` varchar(255) NOT NULL,
  `bentukKoperasi` varchar(255) NOT NULL,
  `jenisKoperasi` varchar(255) NOT NULL,
  `kelompokKoperasi` varchar(255) NOT NULL,
  `sektorUsaha` varchar(255) NOT NULL,
  `namaKetua` varchar(255) NOT NULL,
  `no_telp_ketua` int(111) NOT NULL,
  `namaSekretaris` varchar(255) NOT NULL,
  `no_telp_sekretaris` int(111) NOT NULL,
  `namaBendahara` varchar(255) NOT NULL,
  `no_telp_bendahara` int(111) NOT NULL,
  `namaPengawas` varchar(255) NOT NULL,
  `namaManager` varchar(255) NOT NULL,
  `tglBerlaku_sertifikat` date NOT NULL,
  `statusGrade` varchar(255) NOT NULL,
  `statusNIK` varchar(255) NOT NULL,
  `statusValid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datakoperasi`
--

INSERT INTO `tb_datakoperasi` (`id`, `nikKoperasi`, `namaKoperasi`, `nomorBadanHukum`, `tglBadanHukumPendirian`, `nomorPerubahan_terbaru`, `tglPerubahan_terbaru`, `tglRAT_terakhir`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `kodePos`, `alamatKoperasi`, `no_telepon1`, `no_telepon2`, `faksmili`, `emaill`, `website`, `statusAktif`, `bentukKoperasi`, `jenisKoperasi`, `kelompokKoperasi`, `sektorUsaha`, `namaKetua`, `no_telp_ketua`, `namaSekretaris`, `no_telp_sekretaris`, `namaBendahara`, `no_telp_bendahara`, `namaPengawas`, `namaManager`, `tglBerlaku_sertifikat`, `statusGrade`, `statusNIK`, `statusValid`) VALUES
(0, '0', 'a', '', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Bali', 'Gianyar', 'Sukawati', 'Celuk', 0, '', 0, 0, '', '', '', '-', '-', '-', '-', '-', '', 0, '', 0, '', 0, '', '', '0000-00-00', '-', '-', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelembagaan`
--

CREATE TABLE `tb_kelembagaan` (
  `id` int(11) NOT NULL,
  `idKoperasi` int(111) NOT NULL,
  `tahunBulan` varchar(255) NOT NULL,
  `jmlAnggota_pria` int(111) NOT NULL,
  `jmlAnggota_wanita` int(111) NOT NULL,
  `totalAnggota` int(111) NOT NULL,
  `jmlManager_pria` int(111) NOT NULL,
  `jmlManager_wanita` int(111) NOT NULL,
  `totalManager` int(111) NOT NULL,
  `jmlKaryawan_pria` int(111) NOT NULL,
  `jmlKaryawan_wanita` int(111) NOT NULL,
  `totalKaryawan` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelembagaan`
--

INSERT INTO `tb_kelembagaan` (`id`, `idKoperasi`, `tahunBulan`, `jmlAnggota_pria`, `jmlAnggota_wanita`, `totalAnggota`, `jmlManager_pria`, `jmlManager_wanita`, `totalManager`, `jmlKaryawan_pria`, `jmlKaryawan_wanita`, `totalKaryawan`) VALUES
(1, 0, '2022/April', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `idKop` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `idKop`, `username`, `password`, `nama`, `foto`) VALUES
(1, '5104010020001', 'admin_koperasi1', 'admin_koperasi1', 'admin_koperasi1', ''),
(2, '1029302193', 'admin_koperasi2', 'admin_koperasi2', 'admin_koperasi2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kelembagaan_koperasi`
--
ALTER TABLE `data_kelembagaan_koperasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_koperasi` (`id_koperasi`);

--
-- Indexes for table `data_koperasi`
--
ALTER TABLE `data_koperasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nikKoperasi` (`nikKoperasi`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan_desa`
--
ALTER TABLE `kelurahan_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_asset`
--
ALTER TABLE `tb_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_datakoperasi`
--
ALTER TABLE `tb_datakoperasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nikKoperasi` (`nikKoperasi`);

--
-- Indexes for table `tb_kelembagaan`
--
ALTER TABLE `tb_kelembagaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kelembagaan_koperasi`
--
ALTER TABLE `data_kelembagaan_koperasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_koperasi`
--
ALTER TABLE `data_koperasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelurahan_desa`
--
ALTER TABLE `kelurahan_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_asset`
--
ALTER TABLE `tb_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_datakoperasi`
--
ALTER TABLE `tb_datakoperasi`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kelembagaan`
--
ALTER TABLE `tb_kelembagaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
