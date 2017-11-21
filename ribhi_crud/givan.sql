-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 21 Nov 2017 pada 21.38
-- Versi Server: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `givan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `nama`, `password`) VALUES
('admin', 'admin', 'admin'),
('givan', 'givan', 'givan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bisnis`
--

CREATE TABLE `bisnis` (
  `id_bisnis` varchar(30) NOT NULL,
  `id_customer` varchar(30) NOT NULL,
  `id_layanan` varchar(30) NOT NULL,
  `tanggal_transaksi` varchar(30) NOT NULL,
  `biaya` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bisnis`
--

INSERT INTO `bisnis` (`id_bisnis`, `id_customer`, `id_layanan`, `tanggal_transaksi`, `biaya`, `keterangan`) VALUES
('B00121', 'cus001', 'atas', '21 November 2017', '2000000', 'Lunas'),
('B0012111', 'cus002', 'atas', '20 September 2017', '2000000', 'Lunas'),
('B012121', 'cus003', 'atas', '10 Oktober 2017', '600000', 'Lunas'),
('B05351', 'cus001', 'bawah', '18 November 2017', '300000', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(30) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `password`, `nohp`) VALUES
('cus001', 'rehan', 'rehan', '08126123456'),
('cus002', 'putri\n', 'putri', '08127894561'),
('cus003', 'nanda', 'nanda', '08526451236');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` varchar(30) NOT NULL,
  `kendaraan_layanan` varchar(30) NOT NULL,
  `keterangan_layanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `kendaraan_layanan`, `keterangan_layanan`) VALUES
('atas', 'alphard', 'mobil terbaik untuk keluarga'),
('bawah', 'Xpander', 'cocok untuk budget kebawah'),
('menengah', 'Innova', 'Cocok untuk budget menengah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bisnis`
--
ALTER TABLE `bisnis`
  ADD PRIMARY KEY (`id_bisnis`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_paket` (`id_layanan`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bisnis`
--
ALTER TABLE `bisnis`
  ADD CONSTRAINT `transaksi_crud_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_crud_2` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
