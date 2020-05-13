-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2019 pada 17.16
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_pesan` int(11) NOT NULL,
  `judul` varchar(99) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_pesan`, `judul`, `isi`, `tanggal`) VALUES
(1, 'aufa, Telah Meminjam', 'Web ini telah Berkurang uang sebesar Rp. 9000000', ''),
(2, 'aufa, Telah Menyumbang', 'Web ini telah tersumbangkan uang sebesar Rp. 10000000', ''),
(3, 'aufa, Telah Menyumbang', 'Web ini telah tersumbangkan uang sebesar Rp. 82401352', ''),
(4, 'aufa, Telah Meminjam', 'Web ini telah Berkurang uang sebesar Rp. 10000000', ''),
(5, 'aufa, Telah Menyumbang', 'Web ini telah tersumbangkan uang sebesar Rp. 10000000', ''),
(6, 'aufa, Telah Meminjam', 'Web ini telah Berkurang uang sebesar Rp. 18910', ''),
(7, 'aufa, Telah Menyumbang', 'Web ini telah tersumbangkan uang sebesar Rp. 18910', ''),
(8, 'aufa, Telah Meminjam', 'Web ini telah Berkurang uang sebesar Rp. 578790', ''),
(9, 'aufa, Telah Meminjam', 'Web ini telah Berkurang uang sebesar Rp. 60512', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mu`
--

CREATE TABLE `tb_mu` (
  `id_mu` int(11) NOT NULL,
  `mu` varchar(99) NOT NULL,
  `sedia` int(11) NOT NULL,
  `setara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mu`
--

INSERT INTO `tb_mu` (`id_mu`, `mu`, `sedia`, `setara`) VALUES
(3, 'Ada Yang Baru Nih', 0, 19023810),
(4, 'ahaha', 1654, 192930),
(5, 'dshkl', 58, 1891);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `judul` varchar(99) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `judul`, `isi`, `id_user`, `tanggal`) VALUES
(1, 'Terimakasih Telah Meminjam', '\"Terimakasih karena anda telah menerima sebesar Rp. 9000000 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, ''),
(2, 'Terimakasih Atas Sumbangan Anda', '\"Terimakasih karena anda telah menymbang sebesar Rp. 10000000 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, ''),
(3, 'Terimakasih Atas Sumbangan Anda', '\"Terimakasih karena anda telah menymbang sebesar Rp. 82401352 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, ''),
(4, 'Terimakasih Telah Meminjam', '\"Terimakasih karena anda telah menerima sebesar Rp. 10000000 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, ''),
(5, 'Terimakasih Atas Sumbangan Anda', '\"Terimakasih karena anda telah menymbang sebesar Rp. 10000000 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, ''),
(6, 'Terimakasih Telah Meminjam', '\"Terimakasih karena anda telah menerima sebesar Rp. 18910 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, ''),
(7, 'Terimakasih Atas Sumbangan Anda', '\"Terimakasih karena anda telah menymbang sebesar Rp. 18910 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, ''),
(8, 'Terimakasih Telah Meminjam', '\"Terimakasih karena anda telah menerima sebesar Rp. 578790 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, 'date(\"Y-m-d h:i:sa\")'),
(9, 'Terimakasih Telah Meminjam', '\"Terimakasih karena anda telah menerima sebesar Rp. 60512 membantu kami untuk mencegah jual beli ginjal,\r\n          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash.\"', 3, '2019-05-27 05:10:46pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usn` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `pass` varchar(99) NOT NULL,
  `dompet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `usn`, `email`, `pass`, `dompet`) VALUES
(3, 'aufa', 'aufa@a', 'a', 639302);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_mu`
--
ALTER TABLE `tb_mu`
  ADD PRIMARY KEY (`id_mu`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_mu`
--
ALTER TABLE `tb_mu`
  MODIFY `id_mu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
