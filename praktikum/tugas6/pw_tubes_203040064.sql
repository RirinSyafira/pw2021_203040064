-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 05.30
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
-- Database: `pw_tubes_203040064`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shoes`
--

INSERT INTO `shoes` (`id`, `img`, `name`, `details`, `price`, `color`, `category`) VALUES
(1, 'img1.jpg', 'Nike AF-1 Pixel SE', 'A re-imagined off-court style designed by and for women. The animal print accents add a little wildness while the new logo and distorted sole and midsole with large, pixelated details add a modern touch.', 'Rp 1,649,000', 'White', 'Sneaker'),
(2, 'img2.jpg', 'Men’s Gucci Tennis 1977 High-Top Sneaker', 'The high-top combines different elements from the House’s heritage such as a label with the line name, a textured GG motif at the sole and the classic Web—details which add a vintage feel to the style while recalling the House’s connection to the world of sports and leisure.', 'Rp 12,577,198', 'Soft Suede', 'Sneaker'),
(3, 'img3.JPG', 'Dior Ankle Boot Black Polished Calfskin', 'The sleek ankle boots are a refined iteration of the timeless Chelsea boot, made in polished black calfskin with dual elastic side panels for flexibility. The back tab is embossed with the \'Dior\' logo, and a glossy leather sole and stacked heel complement the impeccably crafted upper.', 'Rp 16,624,687', 'Black', 'Boot'),
(4, 'img4.jpg', 'Gucci Women\'s Princetown Leather Slipper', 'The Princetown slippers are crafted in soft, shiny leather and finished with Gucci\'s signature Horsebit. The most recognizable Gucci lines are once again updated in seasonal colors.', 'Rp 11,420,437', 'Brown', 'Slipper'),
(5, 'img5.jpg', 'Balenciaga Men\'s Triple S Clear Sole Sneaker', 'Crafted from leather and mesh panels, these dark grey Triple S bubble sneakers from Balenciaga feature a pull tab at the rear, a lace-up front fastening, a round toe, an embroidered logo and a chunky rubber sole.', 'Rp 17,556,750', 'Dark Grey', 'Sneaker'),
(6, 'img6.jpg', 'Gucci Women\'s Lug Sole Loafer', 'The loafer is given a contemporary twist with a defined lug sole and metallic silver finish. Classic silhouettes continue to be reimagined and reinvented throughout each season.', 'Rp 14,161,000', 'Silver', 'Loafer'),
(7, 'img7.jpg', 'Nike Air Jordan 1 Mid LX', 'The Air Jordan 1 Mid LX brings fresh suede to the famous retro. This luxe version features Neon Yellow highlights along the edges of the overlays, with a Swoosh, Wings logo and tongue label to match.', 'Rp 1,799,000', 'Off-white/Yellow', 'Sneaker'),
(8, 'img8.jpg', 'Converse Run Star Hike High Top', 'A chunky platform and jagged rubber sole put an unexpected twist on your favorite Chucks. This edition keeps it clean and classic with Parchment-colored canvas, contrast pinstripes, and a gum rubber outsole.', 'Rp 1,589,500', 'White', 'Sneaker'),
(9, 'img9.JPG', 'Prada Cloudbust Thunder Technical Fabric Sneakers', 'The new Cloudbust Thunder sneakers, an evolution of the previous style towards a more complex and sculptural design, are characterized by the 3D eyestay and voluminous light rubber sole.', 'Rp 16,195,900', 'Black/Navy', 'Sneaker'),
(10, 'img10.JPG', 'LV Ollie Sneaker', 'The LV Ollie sneaker comes in jacquard textile. Key details of this design, which was inspired by skate shoes, are the double laces with the Vuitton signature and the rubber outsole with Monogram Flowers.', 'Rp 14,157,000', 'Black/Green', 'Sneaker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ririn', '$2y$10$K7WhaMUjl1SNpBMg.RPz/.o4dUpLRPEwNUVorXYcJAev8c9u3ywue');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `shoes`
--
ALTER TABLE `shoes`
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
-- AUTO_INCREMENT untuk tabel `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
