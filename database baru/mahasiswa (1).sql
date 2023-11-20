-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2023 pada 06.57
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
-- Database: `unggul_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` varchar(11) DEFAULT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `email`, `prodi`, `no_hp`, `alamat`, `asal_sekolah`) VALUES
(1, 'Raka', 234567, 'Perempuan', 'raka@mahasiswa.pcr.ac.id', 'teknik_info', 823131231, 'umban sari', 'SMA 1 Duri'),
(3, 'werqrqw', 11111, 'Laki-Laki', 'oryanda22ti@mahasiswa.pcr.ac.id', 'sistem_info', 2147483647, 'sukajadi', 'SMA 2 Pyk'),
(4, 'abdi', 222222, 'Laki-Laki', 'abdi@gmail.com', 'teknik_info', 9999999, 'US', 'SLB'),
(6, 'kala', 1231231, 'Perempuan', 'kala123@gmail', '3', 8231312, 'rowo', 'smp'),
(8, 'u', 1111, 'Laki-Laki', 'u@gmail.com', '1', 121, 'g', 'fdgd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
