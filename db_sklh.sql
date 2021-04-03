-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2021 pada 15.35
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sklh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_training`
--

CREATE TABLE `tb_data_training` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendapatan_ayah` int(11) NOT NULL,
  `bobot_pendapatan_ayah` float NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendapatan_ibu` int(11) NOT NULL,
  `bobot_pendapatan_ibu` float NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `bobot_saudara` float NOT NULL,
  `jarak_rumah` float NOT NULL,
  `bobot_jarak` float NOT NULL,
  `prestasi_akedemik` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_training`
--

INSERT INTO `tb_data_training` (`id`, `nama`, `pekerjaan_ayah`, `pendapatan_ayah`, `bobot_pendapatan_ayah`, `pekerjaan_ibu`, `pendapatan_ibu`, `bobot_pendapatan_ibu`, `jumlah_saudara`, `bobot_saudara`, `jarak_rumah`, `bobot_jarak`, `prestasi_akedemik`, `keterangan`) VALUES
(6, 'ABRILIA TANTRI PRAMUDITA', 'Karyawan Swasta', 5500000, 0.214286, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 5, 0.444444, 79, '1'),
(7, 'ALICIA RESTI MAHARDIKA\r\n', 'Buruh', 2000000, 0.714286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 6, 0.555556, 75, '1'),
(8, 'ANUGRAH SANG PERKASA\r\n', 'Karyawan Swasta', 4500000, 0.357143, 'Karyawan Swasta', 2700000, 0.614286, 2, 0.25, 5, 0.444444, 80, '0'),
(9, 'DUWI MASHURI\r\n', 'Pegawai Negeri Sipil', 2530000, 0.638571, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 5, 0.444444, 78, '1'),
(10, 'FIRZA KAROMA NUR MAULUDIYAH\r\n', 'Pegawai Negeri Sipil', 5500000, 0.214286, 'Karyawan Swasta', 2700000, 0.614286, 1, 0, 5, 0.444444, 78, '0'),
(11, 'KURNIA PUTRI ANJELICA', 'Buruh', 1000000, 0.857143, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 8, 0.777778, 79, '1'),
(12, 'NICHOLAS ARDIANSYAH\r\n', 'Petani', 600000, 0.914286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 5, 0.444444, 75, '1'),
(13, 'RIZA LAILATULRAHMAN\r\n', 'Wiraswasta', 6500000, 0.0714286, 'Wiraswasta', 6500000, 0.0714286, 2, 0.25, 4, 0.333333, 78, '0'),
(19, 'SITI AISYAH\r\n', 'Pegawai Negeri Sipil', 3000000, 0.571429, 'Pegawai Negeri Sipil', 2700000, 0.614286, 2, 0.25, 8, 0.777778, 78, '0'),
(20, 'GHESITA SALSADILA F\r\n', 'Buruh', 1200000, 0.828571, 'Buruh', 1200000, 0.828571, 4, 0.75, 7, 0.666667, 76, '1'),
(21, 'RISKI NUR AISYAH\r\n', 'Buruh', 1500000, 0.785714, 'Buruh', 1500000, 0.785714, 3, 0.5, 4, 0.333333, 83, '1'),
(22, 'NOVA VALENTINO DWI R\r\n', 'Petani', 450000, 0.935714, 'Ibu Rumah Tangga', 0, 1, 1, 0, 5, 0.444444, 80, '1'),
(23, 'ADITYA IMAM PRASETYO HADI\r\n', 'Buruh', 2100000, 0.7, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 4, 0.333333, 83, '1'),
(24, 'AYU KUMALASARI\r\n', 'Wiraswasta', 5500000, 0.214286, 'Pegawai Negeri Sipil', 2750000, 0.607143, 2, 0.25, 3, 0.222222, 80, '0'),
(25, 'DEWI AYU SAFITRI\r\n', 'Karyawan Swasta', 3000000, 0.571429, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 9, 0.888889, 78, '1'),
(26, 'DODIK FEMAS KURNIAWAN\r\n', 'Karyawan Swasta', 6000000, 0.142857, 'Karyawan Swasta', 3000000, 0.571429, 2, 0.25, 6, 0.555556, 78, '0'),
(27, 'FITRI LAILI JULFIA\r\n', 'Buruh', 850000, 0.878571, 'Ibu Rumah Tangga', 0, 1, 1, 0, 3, 0.222222, 80, '1'),
(28, 'KHUSAY ROYHAN AGUS\r\n', 'Petani', 600000, 0.914286, 'Petani', 600000, 0.914286, 1, 0, 8, 0.777778, 79, '1'),
(29, 'M. FIKRI INDRIANTO\r\n', 'Karyawan Swasta', 3000000, 0.571429, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 6, 0.555556, 81, '1'),
(30, 'M. YUNUS FIRMANSYAH\r\n', 'Karyawan Swasta', 3000000, 0.571429, 'Karyawan Swasta', 3000000, 0.571429, 1, 0, 1, 0, 78, '0'),
(31, 'MIFIDATUS SAPUTRI RAMADANITA\r\n', 'Karyawan Swasta', 2950000, 0.578571, 'Karyawan Swasta', 3000000, 0.571429, 1, 0, 7, 0.666667, 79, '0'),
(32, 'MOCHAMAD ZAMACHSARI S\r\n', 'Wiraswasta', 900000, 0.871429, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 1, 0, 85, '1'),
(33, 'MOH NOVAL FIRMANSYAH\r\n', 'Petani', 750000, 0.892857, 'Ibu Rumah Tangga', 0, 1, 4, 0.75, 1, 0, 80, '1'),
(34, 'NINIK SRI WAHYUNI\r\n', 'Buruh', 3000000, 0.571429, 'Karyawan Swasta', 3000000, 0.571429, 2, 0.25, 10, 1, 81, '0'),
(35, 'NURUL QOMARIYAH\r\n', 'Wiraswasta', 3500000, 0.5, 'Buruh', 1000000, 0.857143, 1, 0, 8, 0.777778, 82, '0'),
(36, 'SALAHUDIN AL AYYUBI ASSIFA\r\n', 'Karyawan Swasta', 6000000, 0.142857, 'Karyawan Swasta', 4000000, 0.428571, 3, 0.5, 6, 0.555556, 81, '0'),
(37, 'WAHYU ADI SETIAWAN\r\n', 'Petani', 900000, 0.871429, 'Ibu Rumah Tangga', 0, 1, 1, 0, 4, 0.333333, 81, '1'),
(38, 'ANGGA PRATAMA\r\n', 'Karyawan Swasta', 5500000, 0.214286, 'Ibu Rumah Tangga', 0, 1, 1, 0, 2, 0.111111, 78, '0'),
(39, 'NENI INDRIANI\r\n', 'Petani', 600000, 0.914286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 8, 0.777778, 82, '1'),
(40, 'FIRMAN WARDANA PUTRA\r\n', 'Pegawai Negeri Sipil', 2500000, 0.642857, 'Buruh', 870000, 0.875714, 5, 1, 11, 1, 84, '1'),
(41, 'ACHMAD SISWANTORO', 'Pegawai Negeri Sipil', 6000000, 0.142857, 'Wiraswasta', 2500000, 0.642857, 3, 0.5, 4, 0.333333, 83, '0'),
(42, 'ACHMAD SUJAY SAPUTRA\r\n', 'Pegawai Negeri Sipil', 5000000, 0.285714, 'Pegawai Negeri Sipil', 1500000, 0.785714, 2, 0.25, 9, 0.888889, 82, '0'),
(43, 'AHMAD NUR ALFIAN\r\n', 'Wiraswasta', 4000000, 0.428571, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 11, 1, 82, '1'),
(44, 'DAKHIA AHMAD FAHRUDIN\r\n', 'Buruh', 1200000, 0.828571, 'Buruh', 350000, 0.95, 1, 0, 1, 0, 84, '1'),
(45, 'ILHAM ABDI DARMAWAN\r\n', 'Honorer', 3000000, 0.571429, 'Honorer', 2300000, 0.671429, 1, 0, 5, 0.444444, 83, '0'),
(46, 'KHUSNI MUBAROK\r\n', 'Wiraswasta', 2000000, 0.714286, 'Pegawai Negeri Sipil', 2500000, 0.642857, 2, 0.25, 6, 0.555556, 83, '0'),
(47, 'MOCH MUIS NUR HIDAYAT\r\n', 'Petani', 1500000, 0.785714, 'Petani', 1500000, 0.785714, 2, 0.25, 8, 0.777778, 85, '1'),
(48, 'MOHAMMAD RAFAEL REBRIANI\r\n', 'Honorer', 1700000, 0.757143, 'Ibu Rumah Tangga', 500000, 0.928571, 2, 0.25, 8, 0.777778, 81, '1'),
(49, 'MOHAMMAD ROFIUL IKHSAN\r\n', 'Karyawan Swasta', 5500000, 0.214286, 'Pegawai Negeri Sipil', 2000000, 0.714286, 3, 0.5, 3, 0.222222, 81, '0'),
(69, 'ANDI ROSEN', 'Karyawan Swasta', 5000000, 0.285714, 'Ibu Rumah Tangga', 1500000, 0.785714, 1, 0, 7, 0.666667, 79, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_halamancek`
--

CREATE TABLE `tb_halamancek` (
  `id` int(11) NOT NULL,
  `periode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_halamancek`
--

INSERT INTO `tb_halamancek` (`id`, `periode`) VALUES
(1, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `nis` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pendapatan_ayah` int(50) NOT NULL,
  `bobot_pendapatan_ayah` float NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `pendapatan_ibu` int(50) NOT NULL,
  `bobot_pendapatan_ibu` float NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `bobot_saudara` float NOT NULL,
  `jarak_rumah` float NOT NULL,
  `bobot_jarak` float NOT NULL,
  `prestasi_akedemik` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `periode` varchar(20) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`nis`, `nama`, `pekerjaan_ayah`, `pendapatan_ayah`, `bobot_pendapatan_ayah`, `pekerjaan_ibu`, `pendapatan_ibu`, `bobot_pendapatan_ibu`, `jumlah_saudara`, `bobot_saudara`, `jarak_rumah`, `bobot_jarak`, `prestasi_akedemik`, `keterangan`, `kelas`, `periode`, `level`) VALUES
('151910', 'MUCHAMMAD FAIZ MUZAQQI', 'Karyawan Swasta', 2000000, 0.714286, 'Karyawan Swasta', 2000000, 0.714286, 3, 0.5, 10, 1, 78, 'Tidak Mendapatkan Bantuan', 'X-TAV', '2020/2021', 0),
('151911', 'MUHAMMAD YANI SEKTIAWAN', 'Pegawai Negeri Sipil', 3200000, 0.542857, 'Karyawan Swasta', 2000000, 0.714286, 1, 0, 5, 0.444444, 78, 'Tidak Mendapatkan Bantuan', 'X-TAV', '2020/2021', 0),
('151912', 'RESA ANUGRAH SAPUTRA', 'Buruh', 1500000, 0.785714, 'Honorer', 1000000, 0.857143, 2, 0.25, 5, 0.444444, 87, 'Mendapatkan Bantuan', 'X-TAV', '2020/2021', 0),
('151913', 'REVAN PRATAMA', 'Petani', 1000000, 0.857143, 'Buruh', 1000000, 0.857143, 2, 0.25, 7, 0.666667, 88, 'Mendapatkan Bantuan', 'X-TAV', '2020/2021', 0),
('151914', 'SIGIT BAYU PRIAMBODO', 'Karyawan Swasta', 4500000, 0.357143, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 5, 0.444444, 80, 'Mendapatkan Bantuan', 'X-TAV', '2020/2021', 0),
('151915', 'YOGA KUSUMA WARDANA PUTRA', 'Pegawai Negeri Sipil', 5000000, 0.285714, 'Buruh', 1000000, 0.857143, 2, 0.25, 15, 1, 80, 'Tidak Mendapatkan Bantuan', 'X-TAV', '2020/2021', 0),
('211901', 'M. RAFI NUR IKHWAN', 'Karyawan Swasta', 3000000, 0.571429, 'Karyawan Swasta', 2500000, 0.642857, 4, 0.75, 9, 0.888889, 80, 'Mendapatkan Bantuan', 'X-TBSM', '2020/2021', 1),
('211902', 'M. SANY ARDIANSYAH', 'Buruh', 700000, 0.9, 'Buruh', 600000, 0.914286, 2, 0.25, 1, 0, 90, 'Mendapatkan Bantuan', 'X-TBSM', '2020/2021', 0),
('211903', 'MOH ADI SAPUTRA', 'Petani', 1000000, 0.857143, 'Buruh', 700000, 0.9, 3, 0.5, 2, 0.111111, 87, 'Mendapatkan Bantuan', 'X-TBSM', '2020/2021', 0),
('211904', 'MUHAMMAD HERMANSYAH', 'Karyawan Swasta', 4000000, 0.428571, 'Karyawan Swasta', 2700000, 0.614286, 4, 0.75, 8, 0.777778, 80, 'Mendapatkan Bantuan', 'X-TBSM', '2020/2021', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id` int(11) NOT NULL,
  `periode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_periode`
--

INSERT INTO `tb_periode` (`id`, `periode`) VALUES
(2, '2019/2020'),
(3, '2020/2021'),
(7, '2021/2022'),
(8, '2022/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sort`
--

CREATE TABLE `tb_sort` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendapatan_ayah` int(11) NOT NULL,
  `bobot_pendapatan_ayah` float NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendapatan_ibu` int(11) NOT NULL,
  `bobot_pendapatan_ibu` float NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `bobot_saudara` float NOT NULL,
  `jarak_rumah` float NOT NULL,
  `bobot_jarak` float NOT NULL,
  `prestasi_akedemik` int(11) NOT NULL,
  `jarak` double NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sort`
--

INSERT INTO `tb_sort` (`id`, `nama`, `pekerjaan_ayah`, `pendapatan_ayah`, `bobot_pendapatan_ayah`, `pekerjaan_ibu`, `pendapatan_ibu`, `bobot_pendapatan_ibu`, `jumlah_saudara`, `bobot_saudara`, `jarak_rumah`, `bobot_jarak`, `prestasi_akedemik`, `jarak`, `keterangan`) VALUES
(7, 'ALICIA RESTI MAHARDIKA\r\n', 'Buruh', 2000000, 0.714286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 6, 0.555556, 75, 76.006267997836, '1'),
(9, 'DUWI MASHURI\r\n', 'Pegawai Negeri Sipil', 2530000, 0.638571, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 5, 0.444444, 78, 79.005636896307, '1'),
(12, 'NICHOLAS ARDIANSYAH\r\n', 'Petani', 600000, 0.914286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 5, 0.444444, 75, 76.005048367585, '1'),
(20, 'GHESITA SALSADILA F\r\n', 'Buruh', 1200000, 0.828571, 'Buruh', 1200000, 0.828571, 4, 0.75, 7, 0.666667, 76, 77.00367342337, '1'),
(30, 'M. YUNUS FIRMANSYAH\r\n', 'Karyawan Swasta', 3000000, 0.571429, 'Karyawan Swasta', 3000000, 0.571429, 1, 0, 1, 0, 78, 79.008653615943, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_temp`
--

CREATE TABLE `tb_temp` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendapatan_ayah` int(11) NOT NULL,
  `bobot_pendapatan_ayah` float NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendapatan_ibu` int(11) NOT NULL,
  `bobot_pendapatan_ibu` float NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `bobot_saudara` float NOT NULL,
  `jarak_rumah` float NOT NULL,
  `bobot_jarak` float NOT NULL,
  `prestasi_akedemik` int(11) NOT NULL,
  `jarak` double NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_temp`
--

INSERT INTO `tb_temp` (`id`, `nama`, `pekerjaan_ayah`, `pendapatan_ayah`, `bobot_pendapatan_ayah`, `pekerjaan_ibu`, `pendapatan_ibu`, `bobot_pendapatan_ibu`, `jumlah_saudara`, `bobot_saudara`, `jarak_rumah`, `bobot_jarak`, `prestasi_akedemik`, `jarak`, `keterangan`) VALUES
(6, 'ABRILIA TANTRI PRAMUDITA', 'Karyawan Swasta', 5500000, 0.214286, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 5, 0.444444, 79, 80.00665520417, '1'),
(7, 'ALICIA RESTI MAHARDIKA\r\n', 'Buruh', 2000000, 0.714286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 6, 0.555556, 75, 76.006267997836, '1'),
(8, 'ANUGRAH SANG PERKASA\r\n', 'Karyawan Swasta', 4500000, 0.357143, 'Karyawan Swasta', 2700000, 0.614286, 2, 0.25, 5, 0.444444, 80, 81.008160520292, '0'),
(9, 'DUWI MASHURI\r\n', 'Pegawai Negeri Sipil', 2530000, 0.638571, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 5, 0.444444, 78, 79.005636896307, '1'),
(10, 'FIRZA KAROMA NUR MAULUDIYAH\r\n', 'Pegawai Negeri Sipil', 5500000, 0.214286, 'Karyawan Swasta', 2700000, 0.614286, 1, 0, 5, 0.444444, 78, 79.012427201351, '0'),
(11, 'KURNIA PUTRI ANJELICA', 'Buruh', 1000000, 0.857143, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 8, 0.777778, 79, 80.005470730068, '1'),
(12, 'NICHOLAS ARDIANSYAH\r\n', 'Petani', 600000, 0.914286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 5, 0.444444, 75, 76.005048367585, '1'),
(13, 'RIZA LAILATULRAHMAN\r\n', 'Wiraswasta', 6500000, 0.0714286, 'Wiraswasta', 6500000, 0.0714286, 2, 0.25, 4, 0.333333, 78, 79.015176394024, '0'),
(19, 'SITI AISYAH\r\n', 'Pegawai Negeri Sipil', 3000000, 0.571429, 'Pegawai Negeri Sipil', 2700000, 0.614286, 2, 0.25, 8, 0.777778, 78, 79.009492385467, '0'),
(20, 'GHESITA SALSADILA F\r\n', 'Buruh', 1200000, 0.828571, 'Buruh', 1200000, 0.828571, 4, 0.75, 7, 0.666667, 76, 77.00367342337, '1'),
(21, 'RISKI NUR AISYAH\r\n', 'Buruh', 1500000, 0.785714, 'Buruh', 1500000, 0.785714, 3, 0.5, 4, 0.333333, 83, 84.002696074998, '1'),
(22, 'NOVA VALENTINO DWI R\r\n', 'Petani', 450000, 0.935714, 'Ibu Rumah Tangga', 0, 1, 1, 0, 5, 0.444444, 80, 81.00741733421, '1'),
(23, 'ADITYA IMAM PRASETYO HADI\r\n', 'Buruh', 2100000, 0.7, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 4, 0.333333, 83, 84.002685140946, '1'),
(24, 'AYU KUMALASARI\r\n', 'Wiraswasta', 5500000, 0.214286, 'Pegawai Negeri Sipil', 2750000, 0.607143, 2, 0.25, 3, 0.222222, 80, 81.008540078991, '0'),
(25, 'DEWI AYU SAFITRI\r\n', 'Karyawan Swasta', 3000000, 0.571429, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 9, 0.888889, 78, 79.009722798883, '1'),
(26, 'DODIK FEMAS KURNIAWAN\r\n', 'Karyawan Swasta', 6000000, 0.142857, 'Karyawan Swasta', 3000000, 0.571429, 2, 0.25, 6, 0.555556, 78, 79.011325198946, '0'),
(27, 'FITRI LAILI JULFIA\r\n', 'Buruh', 850000, 0.878571, 'Ibu Rumah Tangga', 0, 1, 1, 0, 3, 0.222222, 80, 81.006568422686, '1'),
(28, 'KHUSAY ROYHAN AGUS\r\n', 'Petani', 600000, 0.914286, 'Petani', 600000, 0.914286, 1, 0, 8, 0.777778, 79, 80.01012206213, '1'),
(29, 'M. FIKRI INDRIANTO\r\n', 'Karyawan Swasta', 3000000, 0.571429, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 6, 0.555556, 81, 82.006431550039, '1'),
(30, 'M. YUNUS FIRMANSYAH\r\n', 'Karyawan Swasta', 3000000, 0.571429, 'Karyawan Swasta', 3000000, 0.571429, 1, 0, 1, 0, 78, 79.008653615943, '0'),
(31, 'MIFIDATUS SAPUTRI RAMADANITA\r\n', 'Karyawan Swasta', 2950000, 0.578571, 'Karyawan Swasta', 3000000, 0.571429, 1, 0, 7, 0.666667, 79, 80.011284956517, '0'),
(32, 'MOCHAMAD ZAMACHSARI S\r\n', 'Wiraswasta', 900000, 0.871429, 'Ibu Rumah Tangga', 0, 1, 3, 0.5, 1, 0, 85, 86.001549581982, '1'),
(33, 'MOH NOVAL FIRMANSYAH\r\n', 'Petani', 750000, 0.892857, 'Ibu Rumah Tangga', 0, 1, 4, 0.75, 1, 0, 80, 81.000456663049, '1'),
(34, 'NINIK SRI WAHYUNI\r\n', 'Buruh', 3000000, 0.571429, 'Karyawan Swasta', 3000000, 0.571429, 2, 0.25, 10, 1, 81, 82.011766510691, '0'),
(35, 'NURUL QOMARIYAH\r\n', 'Wiraswasta', 3500000, 0.5, 'Buruh', 1000000, 0.857143, 1, 0, 8, 0.777778, 82, 83.011296500776, '0'),
(36, 'SALAHUDIN AL AYYUBI ASSIFA\r\n', 'Karyawan Swasta', 6000000, 0.142857, 'Karyawan Swasta', 4000000, 0.428571, 3, 0.5, 6, 0.555556, 81, 82.009876647228, '0'),
(37, 'WAHYU ADI SETIAWAN\r\n', 'Petani', 900000, 0.871429, 'Ibu Rumah Tangga', 0, 1, 1, 0, 4, 0.333333, 81, 82.006875573887, '1'),
(38, 'ANGGA PRATAMA\r\n', 'Karyawan Swasta', 5500000, 0.214286, 'Ibu Rumah Tangga', 0, 1, 1, 0, 2, 0.111111, 78, 79.010313833981, '0'),
(39, 'NENI INDRIANI\r\n', 'Petani', 600000, 0.914286, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 8, 0.777778, 82, 83.00707671944, '1'),
(40, 'FIRMAN WARDANA PUTRA\r\n', 'Pegawai Negeri Sipil', 2500000, 0.642857, 'Buruh', 870000, 0.875714, 5, 1, 11, 1, 84, 85.00672325253, '1'),
(41, 'ACHMAD SISWANTORO', 'Pegawai Negeri Sipil', 6000000, 0.142857, 'Wiraswasta', 2500000, 0.642857, 3, 0.5, 4, 0.333333, 83, 84.007281566146, '0'),
(42, 'ACHMAD SUJAY SAPUTRA\r\n', 'Pegawai Negeri Sipil', 5000000, 0.285714, 'Pegawai Negeri Sipil', 1500000, 0.785714, 2, 0.25, 9, 0.888889, 82, 83.011497677333, '0'),
(43, 'AHMAD NUR ALFIAN\r\n', 'Wiraswasta', 4000000, 0.428571, 'Ibu Rumah Tangga', 0, 1, 2, 0.25, 11, 1, 82, 83.011378925434, '1'),
(44, 'DAKHIA AHMAD FAHRUDIN\r\n', 'Buruh', 1200000, 0.828571, 'Buruh', 350000, 0.95, 1, 0, 1, 0, 84, 85.006069712121, '1'),
(45, 'ILHAM ABDI DARMAWAN\r\n', 'Honorer', 3000000, 0.571429, 'Honorer', 2300000, 0.671429, 1, 0, 5, 0.444444, 83, 84.008863594702, '0'),
(46, 'KHUSNI MUBAROK\r\n', 'Wiraswasta', 2000000, 0.714286, 'Pegawai Negeri Sipil', 2500000, 0.642857, 2, 0.25, 6, 0.555556, 83, 84.006430266268, '0'),
(47, 'MOCH MUIS NUR HIDAYAT\r\n', 'Petani', 1500000, 0.785714, 'Petani', 1500000, 0.785714, 2, 0.25, 8, 0.777778, 85, 86.007321058134, '1'),
(48, 'MOHAMMAD RAFAEL REBRIANI\r\n', 'Honorer', 1700000, 0.757143, 'Ibu Rumah Tangga', 500000, 0.928571, 2, 0.25, 8, 0.777778, 81, 82.007508925962, '1'),
(49, 'MOHAMMAD ROFIUL IKHSAN\r\n', 'Karyawan Swasta', 5500000, 0.214286, 'Pegawai Negeri Sipil', 2000000, 0.714286, 3, 0.5, 3, 0.222222, 81, 82.006087344763, '0'),
(69, 'ANDI ROSEN', 'Karyawan Swasta', 5000000, 0.285714, 'Ibu Rumah Tangga', 1500000, 0.785714, 1, 0, 7, 0.666667, 79, 80.012502572214, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'Mochammad Faris', 'admin', '$2y$10$FGz5d7E3Af5eLnpNB9syMeL/4v3FNhfZUteDFRAp3UpQgbSKUoSeC', 1),
(7, 'MUCHAMMAD FAIZ MUZAQQI', '151910', '$2y$10$zgeXs/bNHxs/NVKCv26PTu3BlGk1ZVtaVmKYmscDuYLVB2He5zB5G', 0),
(8, 'MUHAMMAD YANI SEKTIAWAN', '151911', '$2y$10$FUqy2nEWMKMr8azIDejd5.EHnKcsImQuvgKWxAKCIF9dB5OtIM/8m', 0),
(9, 'RESA ANUGRAH SAPUTRA', '151912', '$2y$10$Rtc3RrlCp.t86kJGLson9u73qJiwdqW85Mw8tawyEUy0nIIFpjr7m', 0),
(10, 'REVAN PRATAMA', '151913', '$2y$10$jQT97DaLCJY95xKJ3udbj.YF/h8i/uurjVly/mXqGwMcdH7pTa8yu', 0),
(11, 'SIGIT BAYU PRIAMBODO', '151914', '$2y$10$Yx00TMFgueOt9TM4peXo..tlyxYUMAMyVUlm4/WkpKQNBJAcuQv8G', 0),
(12, 'YOGA KUSUMA WARDANA PUTRA', '151915', '$2y$10$woiUXa1VjoIgn17phcaoNeEX9Mfr9MRXir6MKs7ckDi3kTe0P3DXq', 0),
(13, 'M. RAFI NUR IKHWAN', '211901', '$2y$10$zvzmpAP9h1HBCOWv6dSaSeNJ2LEJAIr.NAD6P/vD1arig8A8x4sEC', 0),
(14, 'M. SANY ARDIANSYAH', '211902', '$2y$10$zm4Xn3nrC4NEZ08AhCNl6.eKhlIYnJzJY1H2.CrzbMZOwPbNHke2q', 0),
(15, 'MOH ADI SAPUTRA', '211903', '$2y$10$XIgmnnEdWdqw6w/mh8YHHOvA.CrGWyAHzWJj3YvvzAQ0ZHUjMOSX2', 0),
(16, 'MUHAMMAD HERMANSYAH', '211904', '$2y$10$mpw5Keac8KX82IvF2XtE3uDmDnd8pJlrE1xERPg16b.zQX5Jv7EtS', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data_training`
--
ALTER TABLE `tb_data_training`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_halamancek`
--
ALTER TABLE `tb_halamancek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `periode` (`periode`);

--
-- Indeks untuk tabel `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sort`
--
ALTER TABLE `tb_sort`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_temp`
--
ALTER TABLE `tb_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data_training`
--
ALTER TABLE `tb_data_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `tb_halamancek`
--
ALTER TABLE `tb_halamancek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_sort`
--
ALTER TABLE `tb_sort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tb_temp`
--
ALTER TABLE `tb_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
