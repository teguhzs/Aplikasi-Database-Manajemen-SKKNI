-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 09:55 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `kode_peserta` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `skema_sertifikasi` varchar(2) NOT NULL,
  `tmpt_uji` varchar(2) NOT NULL,
  `rekomendasi` varchar(10) NOT NULL,
  `tanggal_terbit_sertifikasi` date NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `organisasi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`kode_peserta`, `nama`, `nik`, `no_hp`, `email`, `skema_sertifikasi`, `tmpt_uji`, `rekomendasi`, `tanggal_terbit_sertifikasi`, `tanggal_lahir`, `organisasi`) VALUES
(1, 'BUSSYAFRIZAL', '1506020501960002', '085383345262', 'teguhs050196@gmail.com', '1', '1', '0', '2018-08-08', '2018-07-17', 'Stikom'),
(2, 'Yopian Andika', '15060211922929', '086547388292', 'teguhs050196@gmail.com', '2', '3', '1', '2018-08-07', '2018-08-01', 'Stikom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`kode_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `kode_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
