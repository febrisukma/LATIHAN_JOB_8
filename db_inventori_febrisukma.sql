-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 10 Jun 2017 pada 07.25
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_inventori_febrisukma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode` varchar(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pokok_jual` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `nama_barang`, `kategori`, `jumlah`, `pokok_jual`, `harga_jual`, `harga_beli`) VALUES
('A001', 'Fanta 270ml', 'Minuman', 67, 32, 3000, 2300),
('A002', 'Sprite 270ml', 'Minuman', 56, 25, 3000, 2300),
('A003', 'Coca Cola 270ml', 'Minuman', 34, 21, 3000, 2300),
('A004', 'Fanta 1.5l', 'Minuman', 21, 16, 9000, 11000),
('A005', 'Sprite 1.5l', 'Minuman', 31, 22, 9000, 11000),
('B001', 'QTela BBQ 200g', 'Snack', 47, 36, 5500, 4700),
('B002', 'QTela Balado 200g', 'Snack', 27, 12, 5500, 4700),
('B003', 'Chipstaro BBQ 250g', 'Snack', 30, 14, 6000, 7000),
('B004', 'Chipstaro Balado 250', 'Snack', 29, 19, 6400, 7600),
('C001', 'Sunlight 400ml', 'Cairan Pencuci Piring', 24, 8, 5000, 6200),
('C002', 'Sunlight 800ml', 'Cairan Pencuci Piring', 28, 12, 11000, 12000),
('C003', 'Sunligh 1200ml', 'Cairan Pencuci Piring', 19, 8, 16000, 17000),
('D001', 'Oreo Krim Vanila 70g', 'Biskuit', 16, 8, 5500, 7000),
('D002', 'Oreo Krim Coklat 70g', 'Biskuit', 18, 7, 5500, 7000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
