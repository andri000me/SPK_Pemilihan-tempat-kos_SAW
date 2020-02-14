-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 04:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_kos`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatifvalue`
--

CREATE TABLE `alternatifvalue` (
  `id_alternatifvalue` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `k1` varchar(100) NOT NULL,
  `k2` varchar(100) NOT NULL,
  `k3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatifvalue`
--

INSERT INTO `alternatifvalue` (`id_alternatifvalue`, `id_alternatif`, `k1`, `k2`, `k3`) VALUES
(1, 3, '<500.000', 'Dekat Kampus', 'Kamar Mandi luar, Kasur, Kipas'),
(2, 3, '<500.000', 'Dekat Tempat Ibadah', 'Kamar Mandi luar, Kasur, Kipas'),
(3, 4, '<=500.000 >600.000<', 'Kamar Mandi luar, Kasur, Kipas', 'Dekat Kampus'),
(4, 5, '<500.000', 'Dekat Kampus', 'Kamar mandi luar, tempat parkir, kasur, kipas angin'),
(5, 6, '<500.000', 'kamar mandi dalam, R. Tamu, tempat parkir, kasur, kipas angin, wifi, lemari kursi', 'Dekat Kampus');

-- --------------------------------------------------------

--
-- Table structure for table `dataalternatif`
--

CREATE TABLE `dataalternatif` (
  `id_alternatif` int(5) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `hasil_alternatif` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataalternatif`
--

INSERT INTO `dataalternatif` (`id_alternatif`, `nama_alternatif`, `hasil_alternatif`, `harga`, `alamat`, `fasilitas`) VALUES
(1, 'kos_putri', '-', '<500.000', 'Dekat Tempat Ibadah', 'kamar mandi dalam, R. Tamu, tempat parkir, kasur, kipas angin, wifi, lemari kursi'),
(2, 'kos_putri', '-', '<=500.000 >600.000<', 'Dekat Kampus', 'Kamar Mandi luar, Kasur, Kipas'),
(3, 'kos_pria', '-', '<500.000', 'Dekat Tempat Ibadah', 'Kamar Mandi luar, Kasur, Kipas'),
(4, 'kos_putri', '-', '<=500.000 >600.000<', 'Dekat Kampus', 'Kamar Mandi luar, Kasur, Kipas'),
(5, 'kos_pria', '-', '<500.000', 'Dekat Kampus', 'Kamar mandi luar, tempat parkir, kasur, kipas angin'),
(6, 'kos_putri', '-', '<500.000', 'Dekat Kampus', 'kamar mandi dalam, R. Tamu, tempat parkir, kasur, kipas angin, wifi, lemari kursi');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `Kode` varchar(2) NOT NULL,
  `Nama_Kriteria` varchar(100) NOT NULL,
  `Tipe` varchar(100) NOT NULL,
  `Bobot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `Kode`, `Nama_Kriteria`, `Tipe`, `Bobot`) VALUES
(1, 'C1', 'Harga', 'cost', '01'),
(2, 'C2', 'Fasilitas', 'benefit', '02'),
(3, 'C3', 'Lokasi', 'benefit', '03');

-- --------------------------------------------------------

--
-- Table structure for table `kriteriavalue`
--

CREATE TABLE `kriteriavalue` (
  `id_kriteriavalue` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `k1` double NOT NULL,
  `k2` double NOT NULL,
  `k3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteriavalue`
--

INSERT INTO `kriteriavalue` (`id_kriteriavalue`, `id_alternatif`, `k1`, `k2`, `k3`) VALUES
(1, 1, 3, 2, 3),
(2, 2, 2, 3, 1),
(3, 3, 1, 1, 1),
(4, 4, 3, 2, 3),
(5, 5, 1, 2, 2),
(6, 6, 0, 1, 1),
(7, 7, 0, 1, 1),
(8, 8, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `status`) VALUES
(2, 'Maseko', 'maseko', 'ekoaewes', 'admin'),
(3, 'paul', 'paul', 'paul', 'admin'),
(4, 'user', 'user', 'user', 'user'),
(5, 'admin', 'admin', 'admin', 'admin'),
(6, 'user', 'user', 'user', 'admin'),
(7, 'adhit', 'adhit', 'adhit', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatifvalue`
--
ALTER TABLE `alternatifvalue`
  ADD PRIMARY KEY (`id_alternatifvalue`);

--
-- Indexes for table `dataalternatif`
--
ALTER TABLE `dataalternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteriavalue`
--
ALTER TABLE `kriteriavalue`
  ADD PRIMARY KEY (`id_kriteriavalue`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataalternatif`
--
ALTER TABLE `dataalternatif`
  MODIFY `id_alternatif` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
