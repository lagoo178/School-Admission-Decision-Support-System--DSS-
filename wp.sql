-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 05:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL,
  `n_vektor_s` double NOT NULL,
  `n_vektor_v` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nm_alternatif`, `n_vektor_s`, `n_vektor_v`) VALUES
('al001', 'Thomas Yancik', 77.345893808528, 0.24200586585341),
('al002', 'Sinka Waluyo', 81.229604205233, 0.25415752188838),
('al003', 'Untung Menang', 77.836198557652, 0.2435399695983),
('al004', 'Aji Utomo', 82.191687981997, 0.2571677646557),
('al005', 'Asep Jamal', 1, 0.0031288780042093);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `bobot` double NOT NULL,
  `sifat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `sifat`) VALUES
('kr001', 'Nilai B.indo', 3, 'benefit'),
('kr002', 'Nilai MTK', 5, 'benefit'),
('kr003', 'Nilai B.ing', 4, 'benefit'),
('kr004', 'Nilai IPA', 5, 'benefit'),
('kr005', 'Psikotest', 3, 'benefit'),
('kr006', 'Nilai Raport', 3, 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(7) NOT NULL,
  `id_alternatif` varchar(7) NOT NULL,
  `id_kriteria` varchar(7) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(31, 'al001', 'kr001', 85),
(32, 'al001', 'kr002', 62),
(33, 'al001', 'kr003', 80),
(34, 'al001', 'kr004', 75),
(35, 'al001', 'kr005', 88),
(36, 'al001', 'kr006', 90),
(37, 'al002', 'kr001', 74),
(38, 'al002', 'kr002', 90),
(39, 'al002', 'kr003', 70),
(40, 'al002', 'kr004', 81),
(41, 'al002', 'kr005', 85),
(42, 'al002', 'kr006', 88),
(43, 'al003', 'kr001', 91),
(44, 'al003', 'kr002', 68),
(45, 'al003', 'kr003', 65),
(46, 'al003', 'kr004', 80),
(47, 'al003', 'kr005', 83),
(48, 'al003', 'kr006', 95),
(49, 'al004', 'kr001', 75),
(50, 'al004', 'kr002', 77),
(51, 'al004', 'kr003', 90),
(52, 'al004', 'kr004', 80),
(53, 'al004', 'kr005', 85),
(54, 'al004', 'kr006', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
