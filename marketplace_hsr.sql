-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2025 pada 19.58
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
-- Database: `marketplace_hsr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipe_akun` varchar(50) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `tipe_akun`, `harga`, `deskripsi`, `tanggal_upload`) VALUES
(1, 'azrion', '13801314', 'whale', 400000.00, '🔥 Akun Whale Honkai: Star Rail | 30+ Karakter 5★ | LC Meta Lengkap | Endgame Ready 🔥\r\n\r\n✨ DETAIL AKUN:\r\n\r\nTrailblazer Level: 70+\r\n\r\nServer: Asia\r\n\r\nTotal Top Up: ± Rp 35.000.000\r\n\r\nKarakter 5★: 32 Unit\r\n\r\nLight Cone 5★: 18 Unit (Banyak yang Limited & Meta)\r\n\r\nKarakter Limited:\r\n\r\nDPS Meta: Seele E2, Jingliu E1, Dan Heng IL, Argenti, Topaz\r\n\r\nSupport Meta: Ruan Mei E1, Bronya, Silver Wolf, Fu Xuan, Black Swan\r\n\r\nLight Cone Meta:\r\n\r\nIncessant Rain, Patience Is All You Need, Before Dawn, Moment of Victory, The Unreachable Side, dll.\r\n\r\nRelic: Sudah dioptimasi untuk DPS & Support (Stat Bagus)\r\n\r\nProgress: Sudah tamat main story, Simulated Universe 100%, Memory of Chaos tembus floor 12\r\n\r\nStellar Jade: 3.000+ (Masih banyak simpanan)\r\n\r\nPass Aktif: Ya (Monthly Pass aktif)\r\n\r\nEvent Terbaru: Sudah ikut semua\r\n\r\n💎 BONUS:\r\n\r\nNameless Glory & Nameless Medal Aktif\r\n\r\nBanyak EXP Material, Trace Resource, dan Relic Strongbox siap pakai\r\n\r\nNama akun aesthetic\r\n\r\nBind HoYoVerse masih bisa diganti (akun fresh tanpa email pribadi)', '2025-05-26 16:19:56'),
(2, 'azrion', '13801314', 'whale', 400000.00, '🔥 Akun Whale Honkai: Star Rail | 30+ Karakter 5★ | LC Meta Lengkap | Endgame Ready 🔥\r\n\r\n✨ DETAIL AKUN:\r\n\r\nTrailblazer Level: 70+\r\n\r\nServer: Asia\r\n\r\nTotal Top Up: ± Rp 35.000.000\r\n\r\nKarakter 5★: 32 Unit\r\n\r\nLight Cone 5★: 18 Unit (Banyak yang Limited & Meta)\r\n\r\nKarakter Limited:\r\n\r\nDPS Meta: Seele E2, Jingliu E1, Dan Heng IL, Argenti, Topaz\r\n\r\nSupport Meta: Ruan Mei E1, Bronya, Silver Wolf, Fu Xuan, Black Swan\r\n\r\nLight Cone Meta:\r\n\r\nIncessant Rain, Patience Is All You Need, Before Dawn, Moment of Victory, The Unreachable Side, dll.\r\n\r\nRelic: Sudah dioptimasi untuk DPS & Support (Stat Bagus)\r\n\r\nProgress: Sudah tamat main story, Simulated Universe 100%, Memory of Chaos tembus floor 12\r\n\r\nStellar Jade: 3.000+ (Masih banyak simpanan)\r\n\r\nPass Aktif: Ya (Monthly Pass aktif)\r\n\r\nEvent Terbaru: Sudah ikut semua\r\n\r\n💎 BONUS:\r\n\r\nNameless Glory & Nameless Medal Aktif\r\n\r\nBanyak EXP Material, Trace Resource, dan Relic Strongbox siap pakai\r\n\r\nNama akun aesthetic\r\n\r\nBind HoYoVerse masih bisa diganti (akun fresh tanpa email pribadi)', '2025-05-26 16:20:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
