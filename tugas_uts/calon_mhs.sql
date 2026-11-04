-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2026 pada 11.47
-- Versi server: 10.11.16-MariaDB
-- Versi PHP: 8.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `calon_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `pekerjaan_ortu` varchar(100) DEFAULT NULL,
  `matematika` decimal(5,2) NOT NULL,
  `inggris` decimal(5,2) NOT NULL,
  `umum` decimal(5,2) NOT NULL,
  `rata_rata` decimal(5,2) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `kode`, `nama`, `jenis_kelamin`, `ttl`, `asal_sekolah`, `pekerjaan_ortu`, `matematika`, `inggris`, `umum`, `rata_rata`, `keterangan`, `created_at`) VALUES
(1, 'A3', 'raihan', 'Laki-Laki', 'Tangerang, 2000-07-04', 'Fadillah', 'Sopir', 92.00, 90.00, 95.00, 92.33, 'Lulus', '2026-11-04 10:46:39');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
