-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 21.19
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
-- Database: `competency_assessment`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pageform`
--

CREATE TABLE `pageform` (
  `id` int(11) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pageform`
--

INSERT INTO `pageform` (`id`, `password`, `nama`, `nik`, `tanggal`) VALUES
(1, '', 'Mas Reja', '123456', '2024-01-29'),
(2, '', 'Mas Reja', '123456', '2024-01-29'),
(3, '', 'Fajri', '123456', '2024-01-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pagemanagerial`
--

CREATE TABLE `pagemanagerial` (
  `id` int(11) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `departemen` varchar(199) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `com_value` int(11) DEFAULT NULL,
  `com_value2` int(11) DEFAULT NULL,
  `com_value3` int(11) DEFAULT NULL,
  `com_value4` int(11) DEFAULT NULL,
  `com_value5` int(11) DEFAULT NULL,
  `com_value6` int(11) DEFAULT NULL,
  `com_value7` int(11) DEFAULT NULL,
  `com_value8` int(11) DEFAULT NULL,
  `com_value9` int(11) DEFAULT NULL,
  `com_value10` int(11) DEFAULT NULL,
  `com_value11` int(11) DEFAULT NULL,
  `com_value12` int(11) DEFAULT NULL,
  `com_value13` int(11) DEFAULT NULL,
  `com_value14` int(11) DEFAULT NULL,
  `com_value15` int(11) DEFAULT NULL,
  `com_value16` int(11) DEFAULT NULL,
  `komenkekuatan` varchar(1000) DEFAULT NULL,
  `komenkelemahan` varchar(1000) DEFAULT NULL,
  `komentindakan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pagemanagerial`
--

INSERT INTO `pagemanagerial` (`id`, `password`, `nama`, `nik`, `tanggal`, `departemen`, `jabatan`, `com_value`, `com_value2`, `com_value3`, `com_value4`, `com_value5`, `com_value6`, `com_value7`, `com_value8`, `com_value9`, `com_value10`, `com_value11`, `com_value12`, `com_value13`, `com_value14`, `com_value15`, `com_value16`, `komenkekuatan`, `komenkelemahan`, `komentindakan`) VALUES
(1, NULL, 'Mas Reja', '123456', '2024-01-29', 'IT', 'Supervisor', 15, 15, 15, 15, 15, 15, 15, 15, 9, 15, 15, 15, 15, 15, 15, 15, '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pagenonmanagerial`
--

CREATE TABLE `pagenonmanagerial` (
  `id` int(11) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `departemen` varchar(199) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `com_value` int(11) DEFAULT NULL,
  `com_value2` int(11) DEFAULT NULL,
  `com_value3` int(11) DEFAULT NULL,
  `com_value4` int(11) DEFAULT NULL,
  `com_value5` int(11) DEFAULT NULL,
  `com_value6` int(11) DEFAULT NULL,
  `com_value7` int(11) DEFAULT NULL,
  `com_value8` int(11) DEFAULT NULL,
  `com_value9` int(11) DEFAULT NULL,
  `com_value10` int(11) DEFAULT NULL,
  `komenkekuatan` varchar(1000) DEFAULT NULL,
  `komenkelemahan` varchar(1000) DEFAULT NULL,
  `komentindakan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pagenonmanagerial`
--

INSERT INTO `pagenonmanagerial` (`id`, `password`, `nama`, `nik`, `tanggal`, `departemen`, `jabatan`, `com_value`, `com_value2`, `com_value3`, `com_value4`, `com_value5`, `com_value6`, `com_value7`, `com_value8`, `com_value9`, `com_value10`, `komenkekuatan`, `komenkelemahan`, `komentindakan`) VALUES
(0, NULL, 'Mas Reja', '123456', '2024-01-29', 'IT', 'Staff', 15, 15, 15, 15, 15, 15, 15, 15, 9, 15, 'ad', 'ad', 'ad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`) VALUES
(1, 'fajri', '$2y$10$bYpg2nLGWahpbX1F2NjaseK5U3IcR.pni', '2024-01-14'),
(2, 'ayang', '$2y$10$pBD78k5D/dq4LiLFCVkN5uYQln5klRTT4', '2024-01-15'),
(3, '123456', '$2y$10$6BNnkFPGORvHpiixBOpfNuGUOddTe7dVe', '2024-01-15'),
(4, 'jhonnnn', '$2y$10$5tD54fEiS3lvjT3rh/POKO95RcCD2EfCX', '2024-01-15'),
(5, 'david', '$2y$10$sdt3yAp67Zs.vSVeteZRNe/wjwrpf2Omy', '2024-01-15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pageform`
--
ALTER TABLE `pageform`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pagemanagerial`
--
ALTER TABLE `pagemanagerial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pageform`
--
ALTER TABLE `pageform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pagemanagerial`
--
ALTER TABLE `pagemanagerial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
