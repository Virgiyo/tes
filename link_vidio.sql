-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2024 pada 17.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_vidio`
--

CREATE TABLE `link_vidio` (
  `kode_link` int(5) NOT NULL,
  `link_vidio` varchar(255) NOT NULL,
  `hari_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `link_vidio`
--

INSERT INTO `link_vidio` (`kode_link`, `link_vidio`, `hari_pengiriman`) VALUES
(10000, 'ying', '2024-10-09'),
(11442, 'virgiyo', '2024-10-07'),
(12323, 'https://www.instagram.com/virgiyo_/profiilecard/?igsh=MTkxM3l3cnRqZTdlYQ==', '2024-09-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `link_vidio`
--
ALTER TABLE `link_vidio`
  ADD PRIMARY KEY (`kode_link`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
