-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2020 pada 04.44
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loker`
--
CREATE DATABASE IF NOT EXISTS `db_loker` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_loker`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`) VALUES
(2, '1831710085', '1831710085', 'fikri@gmail.com', 1),
(3, '1831710023', '1831710023', 'Mukti@gmail.com', 1),
(4, '1831710027', '1831710027', 'fikky@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_pelamaran`
--

DROP TABLE IF EXISTS `form_pelamaran`;
CREATE TABLE IF NOT EXISTS `form_pelamaran` (
  `id_form_pelamaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pekerjaan` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat_f` varchar(50) NOT NULL,
  `no_telp_f` int(15) NOT NULL,
  `email_f` varchar(50) NOT NULL,
  `alasan` text NOT NULL,
  `upload_cv` varchar(50) NOT NULL,
  `upload_ijazah` varchar(50) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_loker` int(11) NOT NULL,
  PRIMARY KEY (`id_form_pelamaran`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form_pelamaran`
--

INSERT INTO `form_pelamaran` (`id_form_pelamaran`, `nama_pekerjaan`, `nama_lengkap`, `alamat_f`, `no_telp_f`, `email_f`, `alasan`, `upload_cv`, `upload_ijazah`, `id_pelamar`, `id_perusahaan`, `id_loker`) VALUES
(3, 'Education & Training', 'fikri', 'pasuruan', 888811181, 'fikri@gmail.com', 'karena saya ingin bekerja', 'cv.jpg', 'ijasah.jpg', 13, 3, 5),
(4, 'Education & Training', 'ega', 'bojonegoro', 88888888, 'ega@gmail.com', 'karena saya ingin membahagiakan orang tua saya', 'cv1.jpg', 'ijasah1.jpg', 1, 3, 5),
(6, 'Programmer', 'viki', 'pasuruan , jl.MT HARYONO', 2222222, 'viki@gmail.com', 'karena saya ingin dapat duit sendiri', 'cv2.jpg', 'ijasah2.jpg', 14, 4, 1),
(7, 'System Administrator', 'viki', 'pasuruan , jl.MT HARYONO', 2222222, 'viki@gmail.com', 'karena saya ingin menambah wawasan dalam pekerjaan ini', 'cv3.jpg', 'ijasah3.jpg', 14, 5, 11),
(8, 'Software developer', 'mukti', 'bojonegoro', 22222222, 'mukti@gmail.com', 'karena ingin dapat uang', 'cv5.jpg', 'ijasah4.jpg', 12, 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

DROP TABLE IF EXISTS `loker`;
CREATE TABLE IF NOT EXISTS `loker` (
  `id_loker` int(11) NOT NULL AUTO_INCREMENT,
  `nama_loker` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `alamat_lkr` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  PRIMARY KEY (`id_loker`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id_loker`, `nama_loker`, `gambar`, `alamat_lkr`, `deskripsi`, `kategori`, `id_perusahaan`) VALUES
(1, 'Network engineer', 'Network_engineer.jpeg', 'surabaya', 'ini network engineer', 'full time', 4),
(2, 'Back-End Developer', 'Back-End_Developer.jpg', 'pasuruan', 'periklanan', 'part time', 5),
(3, 'Software developer', 'Software_developer.jpeg', 'jember', 'sosial human', 'full time', 4),
(4, 'Developer website', 'Developer_website.jpg', 'sidoarjo', 'pengelola data basis', 'part time', 3),
(5, 'Education & Training', 'Education_&_Training.jpg', 'malang', 'pelatihan', 'part time', 3),
(7, 'Guru komputer', 'Guru_komputer.jpg', 'surabaya', 'membuat program', 'magang', 5),
(8, 'Designer', 'Designer.jpeg', 'malang', 'pemasaran', 'freelance', 4),
(9, 'Project manager', 'Project_manager.jpeg', 'probolinggo', 'manager', 'part time', 3),
(11, 'System Administrator', 'System_Administrator.jpg', 'PLN pusat surabaya', 'Minimal D3 Teknik Informatika, laki-laki minimal 20 thn.', 'part time', 5),
(12, 'IT support', 'IT_support.jpg', 'surabaya', 'ini IT support', 'Part Time', 3),
(13, 'IT programmer', 'IT_programmer.jpg', 'bangil', 'ini it programmer', 'Sementara', 3),
(16, 'Programmer', 'Programmer.jpg', 'bojonegoro', 'ini programmer', 'part time', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_pelamar`
--

DROP TABLE IF EXISTS `reg_pelamar`;
CREATE TABLE IF NOT EXISTS `reg_pelamar` (
  `id_pelamar` int(11) NOT NULL AUTO_INCREMENT,
  `foto_profil` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `lulusan` varchar(50) NOT NULL,
  `tinggi_bdn` int(3) NOT NULL,
  `berat_bdn` int(3) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id_pelamar`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reg_pelamar`
--

INSERT INTO `reg_pelamar` (`id_pelamar`, `foto_profil`, `nama`, `username`, `password`, `tgl_lahir`, `email`, `alamat`, `no_telp`, `lulusan`, `tinggi_bdn`, `berat_bdn`, `jenis_kelamin`, `level`) VALUES
(1, 'ega.jpeg', 'ega', 'ega', '123', '2020-03-04', 'ega@gmail.com', 'bojonegoro', 88888888, 'SMA', 160, 50, 'Laki-Laki', 2),
(12, 'mukti.jpeg', 'mukti', 'mukti', '123', '2020-01-01', 'mukti@gmail.com', 'bojonegoro', 22222222, 'S1', 47, 50, 'laki laki', 2),
(13, 'fikri.jpg', 'fikri', 'fikri', '123', '2000-09-01', 'fikri@gmail.com', 'pasuruan', 888811181, 'D3', 65, 43, 'Laki-Laki', 2),
(14, 'viki.jpeg', 'viki', 'viki', '123', '2020-01-01', 'viki@gmail.com', 'pasuruan , jl.MT HARYONO', 2222222, 'D3', 27, 41, 'laki laki', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_perusahaan`
--

DROP TABLE IF EXISTS `reg_perusahaan`;
CREATE TABLE IF NOT EXISTS `reg_perusahaan` (
  `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `contact_person` int(11) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reg_perusahaan`
--

INSERT INTO `reg_perusahaan` (`id_perusahaan`, `logo`, `nama`, `username`, `password`, `email`, `alamat`, `no_telp`, `fax`, `website`, `deskripsi`, `contact_person`, `level`) VALUES
(1, 'vikky.jpg', 'vikky', 'vikky', '321', 'vikky@gmail.com', 'pasuruan', 880880880, 1222222211, 'vikky.blogspot.com', 'iki gwe perusahaan', 111111111, 3),
(3, 'samsung.png', 'samsung', 'samsung', '321', 'samsung@gmail.com', 'amerika serikat', 7333922, 911922, 'samsung.co.id', 'ini perusahaan samsung', 34424224, 3),
(4, 'panasonic.jpg', 'panasonic', 'panasonic', '321', 'panasonic@gmail.com', 'malang', 822323223, 777777, 'panasonic.co.id', 'perusahaan panasonic', 66767, 3),
(5, 'gojek.jpg', 'gojek', 'gojek', '321', 'gojek@app.co.id', 'sidoarjo', 92292839, 778780, 'gojek.co.id', 'perusahaan gojek', 13323343, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
