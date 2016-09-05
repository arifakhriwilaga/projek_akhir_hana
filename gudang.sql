-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Okt 2015 pada 05.28
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `kode_supplier` varchar(50) NOT NULL,
  `CPU` varchar(30) NOT NULL,
  `VGA` varchar(20) NOT NULL,
  `RAM` varchar(20) NOT NULL,
  `HDD` varchar(20) NOT NULL,
  `stok` int(50) NOT NULL,
  `stok_minimal` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`, `kode_supplier`, `CPU`, `VGA`, `RAM`, `HDD`, `stok`, `stok_minimal`, `keterangan`) VALUES
('B00007', 'ASUS', '4500000', 'S00003', 'Intel', 'sekian', '4GB', '320BG', 0, 5, '-'),
('B00006', 'TOSHIBA', '5000000', 'S00002', 'Intel', 'sekian', '2GB', '500 GB', 0, 4, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `kode_customer` varchar(50) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`kode_customer`, `nama_customer`, `alamat`, `telepon`, `email`, `keterangan`) VALUES
('C00002', 'Resti Yulianti', 'Jalan Leuwigajah', '0898763432', 'restiamoy@gmail.com', '-'),
('C00001', 'Hana Ervani Fauziyah', 'Jalan Pojok Utara 1 No 207', '083820002724', 'hanaervani@rocketmail.com', '-'),
('C00003', 'Dede Permana', 'Jalan Entah Dimana', '081876890', 'dedepen@ymail.com', '-'),
('C00004', 'Rivaldo', 'Jalan Terusan', '0897654456', 'rivaldo@yahoo.com', '-'),
('C00005', 'Nanny Suhartini', 'Jalan mana cik aku lupa', '085234689', 'nanny@gmail.com', '-'),
('C00006', 'Novi Rosdiani', 'Nusa Hijau', '087754429', 'novia.kiki1@gmail.com', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE IF NOT EXISTS `penerimaan` (
  `kode_penerimaan` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `kode_supplier` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `total_penerimaan` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerimaan`
--

INSERT INTO `penerimaan` (`kode_penerimaan`, `kode_barang`, `kode_supplier`, `tanggal`, `total_penerimaan`) VALUES
('TB00006', 'B00003', 'S00001', '2015-05-21', 40),
('TB00005', 'B00004', 'S00004', '2015-05-21', 75),
('TB00004', 'B00003', 'S00005', '2015-05-21', 95),
('TB00003', 'B00001', 'S00002', '2015-05-21', 155),
('TB00002', 'B00004', 'S00003', '2015-05-21', 125),
('TB00001', 'B00005', 'S00001', '2015-05-21', 85),
('TB00007', 'B00003', 'S00003', '2015-05-21', 40),
('TB00008', 'B00002', 'S00002', '2015-05-21', 120),
('TB00009', 'B00003', 'S00004', '2015-05-21', 30),
('TB00010', 'B00001', 'S00001', '2015-05-21', 20),
('TB00011', 'B00002', 'S00002', '2015-09-15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `kode_pengeluaran` varchar(50) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_customer` varchar(50) NOT NULL,
  `total_pengeluaran` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`kode_pengeluaran`, `kode_barang`, `tanggal`, `kode_customer`, `total_pengeluaran`) VALUES
('KB00004', 'B00003', '2015-05-21', 'C00003', '35'),
('KB00003', 'B00004', '2015-05-21', 'C00002', '125'),
('KB00002', 'B00002', '2015-05-21', 'C00001', '25'),
('KB00001', 'B00005', '2015-05-21', 'C00002', '15'),
('KB00005', 'B00001', '2015-05-21', 'C00004', '45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `kode_supplier` varchar(50) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `telepon`, `email`, `keterangan`) VALUES
('S00002', 'Ari Fakhri Wilaga', 'Jalan Gadobangkong', '08973182969', 'ari_fakhri@live.com', '-'),
('S00001', 'Matias Misael', 'Jalan Cibabat', '089123456', 'matias_misael@yahoo.com', '-'),
('S00003', 'Putri Silvy Rahmayani', 'Jalan Batujajar', '0893216545', 'putrisilvy@gmail.com', '-'),
('S00004', 'Ayu Puji Lestari', 'Jalan Leuwigajah', '08578734566', 'ayupuji@gmail.com', '-'),
('S00005', 'Siti Aminah', 'Jalan Baros Deket Pasar', '085219750', 'sitiminsuysuy@yahoo.com', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`email`, `nama`, `username`, `password`) VALUES
('hanaervani@rocketmail.com', 'Hana Ervani Fauziyah', 'hanaervani', 'apaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode_customer`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`kode_penerimaan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`kode_pengeluaran`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
