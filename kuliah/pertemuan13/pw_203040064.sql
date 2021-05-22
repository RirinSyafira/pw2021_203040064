-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2021 pada 15.11
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040064`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, '183030003', 'Tristan Suriatmadja', 'tristan.atmadja@gmail.com', 'Teknik Mesin', 'tristan.jpg'),
(2, '193010002', 'Raden Pradipta Hakim', 'diptahakim96@gmial.com', 'Teknik Industri', 'dipta.jpg'),
(3, '193050027', 'Tarendra Azka Winata', 'rendrazka27@gmail.com', 'Teknik Lingkungan', 'tarendra.jpg'),
(4, '203040066', 'Haikal Ariayudha', 'haikalariayudha@gmail.com', 'Teknik Informatika', 'haikal.jpg'),
(5, '193020076', 'Candra Mahawira', 'mahawiracandra@gmail.com', 'Teknologi Pangan', 'mahawira.jpg'),
(6, '193020028', 'Wira Bagaskara', 'wirabagas28@gmail.com', 'Teknologi Pangan', 'wira.jpg'),
(7, '193010013', 'Salman Darmaji', 'ssalmandar@gmail.com', 'Teknik Industri', 'salman.jpg'),
(8, '183030013', 'Jefry Wijaya', 'jefrywijaya@gmail.com', 'Teknik Mesin', 'jefry.jpg'),
(9, '203060037', 'Iqbal Narizham', 'nanaiqbal@gmail.com', 'Teknik PWK', 'iqbal.jpg'),
(10, '183060025', 'Luthfi Wisnu Kamal', 'luthfikamal@gmail.com', 'Teknik PWK', 'luthfi.jpg'),
(21, '203040013', 'Janendra Mahakim', 'janendrahakim@gmail.com', 'Teknik Informatika', '60a901d9c76fa.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'syafira', '$2y$10$TcFmlgHsavq/rtgCj5ZE.Op4ts7xMtUwy.eHAUL3isHhN.tkOMoJm'),
(5, 'admin', '$2y$10$gJXM6u6fjRNne7i6iGMkTuxomLcUieotm88o3J6j.vccbEJd/TZiG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
