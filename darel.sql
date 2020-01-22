-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Okt 2019 pada 07.09
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perencanaan`
--

CREATE TABLE `perencanaan` (
  `no` int(10) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `sekolah` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keringkasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perencanaan`
--

INSERT INTO `perencanaan` (`no`, `kode`, `sekolah`, `tanggal`, `alamat`, `keringkasan`) VALUES
(123, '2', 0, '2019-10-01', 'Laboy Jaya', 'undangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` varchar(18) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `username`, `password`, `nama`, `jabatan`, `email`, `level`, `no_hp`, `jenis_kelamin`) VALUES
('11551105411', 'anjaa', '827ccb0eea8a706c4c34a16891f84e7b', 'Anja Deni Kesuma', 'Administrator', 'anjadeni@gmail.com', 1, '081267118821', 'Perempuan'),
('11651103422', 'rizki', '827ccb0eea8a706c4c34a16891f84e7b', 'Rizki Prasetia', 'Administrator', 'thata.shafiraa@gmail.com', 1, '081267118821', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perencanaan`
--
ALTER TABLE `perencanaan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
