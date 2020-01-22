-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 07:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_pagi`
--

CREATE TABLE `absen_pagi` (
  `id_absen` int(5) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tgl_absen` date NOT NULL,
  `absen_pagi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_pagi`
--

INSERT INTO `absen_pagi` (`id_absen`, `nip`, `tgl_absen`, `absen_pagi`) VALUES
(10, '196809271997031003', '2019-11-20', 4),
(13, '196307191986031004', '2019-11-20', 1),
(14, '196303151987021003', '2019-11-26', 1),
(15, '196912262002122002', '2019-11-26', 1),
(16, '197302151998031003', '2019-11-26', 1),
(17, '1234567890', '2019-11-26', 1),
(19, '11651201180', '2019-11-28', 1),
(20, '0987654321', '2019-11-28', 1),
(21, '1234567890', '2019-11-28', 4),
(22, '196912262002122002', '2019-11-28', 1),
(23, '197302151998031003', '2019-11-28', 1),
(24, '196303151987021003', '2019-11-28', 1),
(25, '197705202006051001', '2019-11-28', 1),
(26, '196809271997031003', '2019-11-28', 1),
(27, '198407272011021001', '2019-11-28', 1),
(28, '198008141998102002', '2019-11-28', 1),
(29, '196307191986031004', '2019-11-28', 1),
(30, '1234567890', '2019-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `absen_siang`
--

CREATE TABLE `absen_siang` (
  `id_absen` int(5) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tgl_absen` date NOT NULL,
  `absen_siang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_siang`
--

INSERT INTO `absen_siang` (`id_absen`, `nip`, `tgl_absen`, `absen_siang`) VALUES
(12, '1234567890', '2019-11-28', 1),
(13, '11651201180', '2019-11-28', 1),
(14, '196303151987021003', '2019-11-28', 1),
(15, '196912262002122002', '2019-11-28', 1),
(16, '197705202006051001', '2019-11-28', 1),
(17, '197302151998031003', '2019-11-28', 1),
(18, '196809271997031003', '2019-11-28', 1),
(19, '0987654321', '2019-11-28', 1),
(20, '198407272011021001', '2019-11-28', 1),
(21, '198008141998102002', '2019-11-28', 1),
(23, '196307191986031004', '2019-11-28', 1),
(24, '197705202006051001', '2019-11-28', 2),
(25, '1234567890', '2019-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `absen_sore`
--

CREATE TABLE `absen_sore` (
  `id_absen` int(5) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tgl_absen` date NOT NULL,
  `absen_sore` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_sore`
--

INSERT INTO `absen_sore` (`id_absen`, `nip`, `tgl_absen`, `absen_sore`) VALUES
(8, '1234567890', '2019-11-28', 1),
(10, '196303151987021003', '2019-11-28', 1),
(12, '11651201180', '2019-11-28', 2),
(13, '196912262002122002', '2019-11-28', 1),
(15, '197705202006051001', '2019-11-28', 1),
(16, '197302151998031003', '2019-11-28', 1),
(17, '196809271997031003', '2019-11-28', 1),
(18, '0987654321', '2019-11-28', 1),
(19, '198407272011021001', '2019-11-28', 1),
(20, '198008141998102002', '2019-11-28', 1),
(21, '196307191986031004', '2019-11-28', 1),
(22, '196303151987021003', '2019-11-28', 1),
(23, '11651201180', '2019-11-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` int(3) NOT NULL,
  `golongan` int(3) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unitkerja` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `pangkat`, `golongan`, `jabatan`, `unitkerja`, `status`) VALUES
('0987654321', 'novita sari', 3, 0, 'OB', 'Dinas Koperasi UKM Kota Pekanbaru', 1),
('11651201180', 'Detol', 18, 18, 'OB', 'Dinas Koperasi UKM Kota Pekanbaru', 2),
('1234567890', 'ANTON HUDRI, S.Sosos', 0, 0, 'THL', '', 0),
('196303151987021003', 'EDY PRATONO,AMP', 13, 13, 'Kepala Bidang Fasilitasi Pengawasan dan Pengembangan Kapasitas', 'Dinas Koperasi UKM Kota Pekanbaru', 1),
('196307191986031004', 'YURNALIS,SH,M.Si', 0, 0, 'Kepala Bidang Kelembagaan', 'Dinas Koperasi UKM Kota Pekanbaru', 1),
('196809271997031003', 'Ir.RIZWANDI,M.Eng', 13, 13, 'Kepala Seksi Akuntabilitas', 'Dinas Koperasi UKM Kota Pekanbaru', 1),
('196912262002122002', 'ERNICHRISTIEN NAINGGOLAN, SH', 12, 12, 'Kepala Seksi Pendataan', 'Dinas Koperasi UKM Kota Pekanbaru', 1),
('197302151998031003', 'IDRUS,S.Ag.M.Ag', 0, 0, 'Kepala Dinas ', '', 0),
('197705202006051001', 'FAIZAL ZUBIR, ST, M.Si', 12, 12, 'Kepala Bidang Promosi Pengembangan Usaha dan Sarana Prasarana', 'Dinas Koperasi UKM Kota Pekanbaru', 1),
('198008141998102002', 'SRI RAHAYU FITRI,S.STP', 13, 13, 'Kepala Seksi Pengembangan Usaha dan Investasi', 'Dinas Koperasi UKM Kota Pekanbaru', 1),
('198407272011021001', 'RIKO PUTRA ,SE', 10, 10, 'Kepala Sub Bagian Keuangan', 'Dinas Koperasi UKM Kota Pekanbaru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip` varchar(18) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `username`, `password`, `nama`, `email`, `level`, `no_hp`, `jenis_kelamin`) VALUES
('11651201180', 'vinaa', '827ccb0eea8a706c4c34a16891f84e7b', 'Vina Azizah', 'vina.azizah0507@gmail.com', 1, '082283594880', 'Perempuan'),
('11651201189', 'detool', '827ccb0eea8a706c4c34a16891f84e7b', 'Detol', 'denidetol@gmail.com', 2, '098738724', 'Laki-Laki'),
('1165120199', 'ocuuuu', '827ccb0eea8a706c4c34a16891f84e7b', 'Rizki Prasetia', 'vina.azizah0507@gmail.com', 2, '085443', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_pagi`
--
ALTER TABLE `absen_pagi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `absen_siang`
--
ALTER TABLE `absen_siang`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `absen_sore`
--
ALTER TABLE `absen_sore`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_pagi`
--
ALTER TABLE `absen_pagi`
  MODIFY `id_absen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `absen_siang`
--
ALTER TABLE `absen_siang`
  MODIFY `id_absen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `absen_sore`
--
ALTER TABLE `absen_sore`
  MODIFY `id_absen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen_pagi`
--
ALTER TABLE `absen_pagi`
  ADD CONSTRAINT `absen_pagi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `absen_siang`
--
ALTER TABLE `absen_siang`
  ADD CONSTRAINT `absen_siang_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `absen_sore`
--
ALTER TABLE `absen_sore`
  ADD CONSTRAINT `absen_sore_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
