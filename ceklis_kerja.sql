-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2023 pada 10.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceklis_kerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan_upsrs`
--

CREATE TABLE `pekerjaan_upsrs` (
  `ID` int(100) NOT NULL,
  `No` int(255) NOT NULL,
  `tgl_lapor` date NOT NULL,
  `unit_pelapor` varchar(255) NOT NULL,
  `penerima_laporan` varchar(255) NOT NULL,
  `laporan` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan_upsrs`
--

INSERT INTO `pekerjaan_upsrs` (`ID`, `No`, `tgl_lapor`, `unit_pelapor`, `penerima_laporan`, `laporan`, `kriteria`) VALUES
(19, 0, '2023-03-14', 'asuransi 123', 'dedi', 'dafagfagfa', 'prioritas'),
(24, 0, '2023-03-15', 'abc', 'dsf', 'kljij', 'Pending'),
(26, 0, '2023-03-15', 'abcdasdas', 'dsfsdadadsa', 'sadadadada', 'Gampang'),
(27, 0, '2023-08-22', 'pkrs', 'basaa', 'papdpsdpapdpapsdpadkakkadfkaskdkasdkkadkaskdkaksdkadkkadkskadka', 'Pending'),
(28, 0, '2023-08-22', 'dasda', 'dsaffsfa', 'fasfasafafa', 'Prioritas'),
(29, 0, '2023-08-23', 'safhtyi', 'iglykly', 'dtkutukdutkdt', 'Gampang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pekerjaan_upsrs`
--
ALTER TABLE `pekerjaan_upsrs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pekerjaan_upsrs`
--
ALTER TABLE `pekerjaan_upsrs`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
