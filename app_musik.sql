-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2020 pada 04.48
-- Versi server: 8.0.11
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_musik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_genre`
--

INSERT INTO `tbl_genre` (`id_genre`, `nama_genre`) VALUES
(1, 'Pop'),
(2, 'Rock');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_musik`
--

CREATE TABLE `tbl_musik` (
  `id_musik` int(11) NOT NULL,
  `nama_band` varchar(50) NOT NULL,
  `judul_musik` varchar(50) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_musik`
--

INSERT INTO `tbl_musik` (`id_musik`, `nama_band`, `judul_musik`, `id_genre`) VALUES
(1, 'Maroon 5', 'Payphone', 1),
(3, 'Adam Levine', 'Lost Star', 1),
(4, 'One Ok Rock', 'Heartache', 2),
(6, 'Katy Perry', 'Teenage Dream', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indeks untuk tabel `tbl_musik`
--
ALTER TABLE `tbl_musik`
  ADD PRIMARY KEY (`id_musik`),
  ADD KEY `id_genre` (`id_genre`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_musik`
--
ALTER TABLE `tbl_musik`
  MODIFY `id_musik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_musik`
--
ALTER TABLE `tbl_musik`
  ADD CONSTRAINT `tbl_musik_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `tbl_genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
