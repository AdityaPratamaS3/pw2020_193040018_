-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 04.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040018`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Aditya pratama suherllan', '193040018', '193040018.aditya@mail.unpas.ac.id', 'Teknik Informatika', 'profil.jpg'),
(2, 'Muhammad Restu suhary', '193040026', 'restu@gamil.com', 'Teknik Informatika', 'profil.jpg'),
(3, 'Abdul Hadi', '193040001', 'Hadi@gmail.com', 'Teknik Inforamtika', 'profil.jpg'),
(4, 'Fauzan Kamal', '193040002', 'kamal@gmail.com', 'Teknik Informatika', 'profil.jpg'),
(5, 'Pidi Amd', '193040017', 'piqi@gmail.com', 'Teknik Informatika', 'profil.jpg'),
(6, 'Aryogi aziz', '193040003', 'aziz@gmail.com', 'Teknik INformatika', 'profil.jpg'),
(7, 'Alwi Ramadhan', '193040004', 'alwi@gmail.com', 'Teknik Informatika', 'profil.jpg'),
(8, 'Yusril ismail aji', '193040005', 'alwi@gmail.com', 'Teknik Informatika', 'profil.jpg'),
(9, 'Muhammad wildhan', '193040005', 'wildhan@gmail.com', 'Teknik Informatika', 'profil.jpg'),
(10, 'Ariq', '193040006', 'ariq@gmail.com', 'Teknik Informatika', 'profil.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
