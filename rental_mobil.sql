-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 05:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(5) NOT NULL,
  `username_admin` varchar(10) NOT NULL,
  `password_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
('a0001', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` char(5) NOT NULL,
  `nik_customer` char(16) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `gender_customer` enum('M','F') DEFAULT NULL,
  `noHp_customer` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nik_customer`, `nama_customer`, `alamat_customer`, `gender_customer`, `noHp_customer`) VALUES
('c001', '123456', 'faris h', 'Jalan Argomoyo gang Masjid Al-Amin,65211 kelurahan Lawang,Kecamatan Lawang', NULL, '+628213294088'),
('c002', '123456', 'galih', 'singosari', NULL, '01234'),
('c004', '123456', 'faris', 'Jalan Argomoyo gang Masjid Al-Amin,65211 kelurahan Lawang,Kecamatan Lawang', NULL, '+628213294088'),
('c006', '123456', 'faris', 'Jalan Argomoyo gang Masjid Al-Amin,65211 kelurahan Lawang,Kecamatan Lawang', NULL, '+628213294088');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `LEVEL` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `Email`, `LEVEL`) VALUES
(0, 'galih', '202cb962ac59075b964b07152d234b70', 'galih@mail.com', 2),
(1, 'admin', 'admin', 'admin@mail.com', 1),
(0, 'faris', '7d77e825b80cff62a72e680c1c81424f', 'faris@mail.com', 2),
(0, 'haped', '202cb962ac59075b964b07152d234b70', 'haped@mail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `kode_mobil` char(5) NOT NULL,
  `tipe_mobil` varchar(10) NOT NULL,
  `merk_mobil` varchar(10) NOT NULL,
  `stok_mobil` int(20) DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime DEFAULT '2002-01-16 01:01:01'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`kode_mobil`, `tipe_mobil`, `merk_mobil`, `stok_mobil`, `file_name`, `uploaded_on`) VALUES
('m001', 'california', 'ferrari', 5, '', '2002-01-16 01:01:01'),
('m002', 'california', 'ferrari', 5, '114150.jpg', '2021-06-10 21:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kode_pengembalian` char(5) NOT NULL,
  `kode_sewa` char(5) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `kode_sewa` char(5) NOT NULL,
  `kode_mobil` char(5) NOT NULL,
  `id_customer` char(5) NOT NULL,
  `harga_sewa` double NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tglKembali_sewa` date NOT NULL,
  `status_sewa` enum('BELUM','KEMBALI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`kode_sewa`, `kode_mobil`, `id_customer`, `harga_sewa`, `tgl_sewa`, `tglKembali_sewa`, `status_sewa`) VALUES
('s002', 'm001', 'c001', 5000, '2021-06-30', '2021-07-01', 'BELUM'),
('s003', 'm001', 'c001', 50000, '2021-07-01', '2021-07-02', 'BELUM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`kode_mobil`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kode_pengembalian`),
  ADD KEY `kode_sewa` (`kode_sewa`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`kode_sewa`),
  ADD KEY `kode_mobil` (`kode_mobil`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`kode_sewa`) REFERENCES `sewa` (`kode_sewa`);

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`kode_mobil`) REFERENCES `mobil` (`kode_mobil`),
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
