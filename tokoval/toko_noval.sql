-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2023 pada 07.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_noval`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_toko`
--

CREATE TABLE `tb_toko` (
  `idBarang` int(11) NOT NULL,
  `kodeBarang` varchar(15) NOT NULL,
  `namaBarang` varchar(200) NOT NULL,
  `satuanBarang` varchar(15) NOT NULL,
  `stockBarang` int(11) NOT NULL,
  `hargaBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_toko`
--

INSERT INTO `tb_toko` (`idBarang`, `kodeBarang`, `namaBarang`, `satuanBarang`, `stockBarang`, `hargaBarang`) VALUES
(1, '13', 'garam', 'k', 10, 10),
(3, '5', 'terigu', 'kg', 8, 5000),
(4, '754', 'gas', 'kg', 10, 19000),
(6, '87', 'minyak', 'ml', 40, 12);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`idBarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
