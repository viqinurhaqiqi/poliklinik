-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2017 pada 22.44
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT '0',
  `username` varchar(50) DEFAULT '0',
  `password` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mhs`
--

CREATE TABLE `data_mhs` (
  `id` int(20) NOT NULL,
  `kode` varchar(50) NOT NULL DEFAULT '0',
  `nama_mhs` varchar(50) NOT NULL DEFAULT '0',
  `nim` varchar(50) NOT NULL DEFAULT '0',
  `tempat_lahir` varchar(50) NOT NULL DEFAULT '0',
  `tgl_lahir` varchar(50) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `fakultas` char(50) NOT NULL DEFAULT '0',
  `jurusan` char(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `nipk` varchar(50) NOT NULL DEFAULT '0',
  `tmp_lahir` varchar(50) NOT NULL DEFAULT '0',
  `tgl_lahir` varchar(50) NOT NULL DEFAULT '0',
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_obat`
--

CREATE TABLE `kategori_obat` (
  `id` char(50) NOT NULL,
  `kode` varchar(20) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_obat`
--

INSERT INTO `kategori_obat` (`id`, `kode`, `nama`) VALUES
('19', 'K001', 'Antibiotik'),
('20', 'K002', 'Respiratory'),
('21', 'K003', 'Analgetik & Antipiretik'),
('22', 'K004', 'Gastrointestinal'),
('23', 'K005', 'Vitamin'),
('24', 'K006', 'Antihistamin & Antiinflamasi'),
('25', 'K007', 'AntiVertigo'),
('26', 'K008', 'Anti TB'),
('27', 'K009', 'Obat Stomatis'),
('28', 'K010', 'Anti Virus'),
('29', 'K011', 'Anti Cholesterol'),
('30', 'K012', 'Anti Hypertensi'),
('31', 'K013', 'Anti DM'),
('32', 'K014', 'Obat Mata'),
('33', 'K015', 'Obat Telinga'),
('34', 'K016', 'Lain-lain'),
('35', 'K017', 'Obat Inject');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` char(50) NOT NULL,
  `id_provinsi` char(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `id_provinsi`, `nama`) VALUES
('101', '100', 'Aqidah Filsafat'),
('102', '100', 'Perbandingan Agama'),
('103', '100', 'Tafsir Hadits'),
('105', '100', 'Tasawuf Psikoterapi'),
('201', '200', 'Kependidikan Islam'),
('202', '200', 'Pendidikan Agama Islam'),
('203', '200', 'Pendidikan Bahasa Arab'),
('204', '200', 'Pendidikan Bahasa Inggris'),
('205', '200', 'Pendidikan Matematika'),
('206', '200', 'Pendidikan Biologi'),
('207', '200', 'Pendidikan Fisika'),
('208', '200', 'Pendidikan Kimia'),
('209', '200', 'Pendidikan Guru MI'),
('301', '300', 'Ahwal Al-Syakhshiyah'),
('302', '300', 'Mu\'amalah'),
('303', '300', 'Siyasah'),
('304', '300', 'Perbandingan Madzhab dan Hukum'),
('305', '300', 'Ilmu Hukum'),
('306', '300', 'Hukum Pidana Islam'),
('307', '300', 'Manajemen Keuangan Syari\'ah'),
('401', '400', 'Bimbingan dan Penyuluhan Islam'),
('402', '400', 'Komunikasi dan Penyiaran Islam'),
('403', '400', 'Manajemen Dakwah'),
('404', '400', 'Pengembangan Masyarakat Islam'),
('405', '400', 'Ilmu Komunikasi Jurnalistik'),
('406', '400', 'Ilmu Komunikasi Humas'),
('501', '500', 'Sejarah dan Peradaban Islam'),
('502', '500', 'Bahasa dan Sastra Arab'),
('503', '500', 'Bahasa dan Sastra Inggris'),
('504', '500', 'D-3 Terjemahan Bahasa Inggris'),
('600', '600', 'Psikologi'),
('701', '700', 'Matematika'),
('702', '700', 'Biologi'),
('703', '700', 'Fisika'),
('704', '700', 'Kimia'),
('705', '700', 'Teknik Informatika'),
('706', '700', 'Agroteknologi'),
('707', '700', 'Teknik Elektro'),
('801', '800', 'Sosiologi'),
('802', '800', 'Administrasi Publik'),
('803', '800', 'Manajemen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(20) NOT NULL,
  `kode` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `nim` varchar(50) NOT NULL DEFAULT '0',
  `tmp_lahir` varchar(50) NOT NULL DEFAULT '0',
  `tgl_lahir` varchar(50) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `fakultas` char(50) NOT NULL DEFAULT '0',
  `jurusan` char(50) NOT NULL DEFAULT '0',
  `jk` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `kode`, `nama`, `nim`, `tmp_lahir`, `tgl_lahir`, `alamat`, `fakultas`, `jurusan`, `jk`) VALUES
(1, 'M001', 'Viqi Nurhaqiqi', '1147050168', 'Bandung', '01/06/1996', 'Komp Vijaya Kusuma A no 47', '700', '705', 'L'),
(2, 'M002', 'Siti Khodijah', '1147050157', 'Bekasi', '30/04/1994', 'Cipadung Permai', '700', '705', 'P'),
(3, 'M003', 'Susilawati', '1147050162', 'Tasikmalaya', '24/02/1996', 'Kp bantar suling rt/rw 006/001 desa sukaasih kecamatan singaparna kabupaten tasikmalaya', '700', '705', 'P'),
(4, 'M004', 'Arif Ahmad Rifai', '1147050028', 'Cianjur', '26/06/1996', 'Kp Salakopi rt/rw 003/014 kel. Pamoyanan kecamatan Cianjur kabupaten Cianjur', '700', '705', 'L'),
(5, 'M005', 'Ulfa Mardhatilah', '1147050165', 'Jambi', '12/05/1996', 'Jl.merdeka Kel.pasar rantau panjang. Kec. Tabir.kab.merangin prov jambi', '700', '705', 'P'),
(6, 'M006', 'Tia Gustini', '1148020300', 'Bandung', '23/08/1996', 'Jl desa cipadung gang budi 1 no 3 rt 1/rw 4 kel cipadung kec cibiru kota Bandung 40614', '800', '803', 'P'),
(7, 'M007', 'Hafid Fuad Mauludin', '1148020126', 'Bandung', '15/08/1996', 'Rancaekek', '800', '803', 'L'),
(8, 'M008', 'Mila Rosiana Dewi', '3145040046', 'Bandung', '20/02/1997', 'Jl Neglasari 2 no 98 RT 03 RW 05 Kel.pasangrrahan kec. Ujungberung kota Bandung, 40617', '500', '504', 'P'),
(9, 'M009', 'Fikar Arsyad Assiddik', '1148020116', 'Bandung', '20/07/1996', 'kampung cibuluh rt 24 rw 06 desa cibuluh kecamatan tanjungsiang kab subang', '800', '803', 'L'),
(10, 'M010', 'shahira', '1147050157', 'padang', '121996', 'padang', '700', '705', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(3) NOT NULL,
  `nama_obat` varchar(30) DEFAULT NULL,
  `stok` int(4) DEFAULT NULL,
  `id_kategori_obat` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok`, `id_kategori_obat`) VALUES
(1, 'Cafedroxil', NULL, 1),
(2, 'Cifroploxacin', NULL, 1),
(3, 'Clindamycin 300', NULL, 1),
(4, 'Dexicol', NULL, 1),
(5, 'Dexadrox', NULL, 1),
(6, 'Etamox', NULL, 1),
(7, 'infrantrim Forte 960', NULL, 1),
(8, 'Ketoconazole', NULL, 1),
(9, 'Novatrim 480', NULL, 1),
(10, 'Metronidazole', NULL, 1),
(11, 'Opicef', NULL, 1),
(12, 'Opimox', NULL, 1),
(13, 'Suprabiotik', NULL, 1),
(14, 'Yusimox', NULL, 1),
(15, 'Etamox syirup', NULL, 1),
(16, 'Alphara', NULL, 2),
(17, 'Ambroxol', NULL, 2),
(18, 'Bronkris Tab', NULL, 2),
(19, 'Cecyl', NULL, 2),
(20, 'Demacolin', NULL, 2),
(21, 'Dextral Tab', NULL, 2),
(22, 'Dextrosin Syrup', NULL, 2),
(23, 'Dexolut', NULL, 2),
(24, 'Degirol', NULL, 2),
(25, 'FG Trocess', NULL, 2),
(26, 'Flutamol', NULL, 2),
(27, 'Fluzep', NULL, 2),
(28, 'Fludexin', NULL, 2),
(29, 'Fludexin Syrup', NULL, 2),
(30, 'GG', NULL, 2),
(31, 'Lacoldine', NULL, 2),
(32, 'Lapifed', NULL, 2),
(33, 'Intunal F', NULL, 2),
(34, 'Molexflu', NULL, 2),
(35, 'Sistenol', NULL, 2),
(36, 'Triferdin cum exp', NULL, 2),
(37, 'As.mefenamat', NULL, 3),
(38, 'Alofar', NULL, 3),
(39, 'Buscopan plus', NULL, 3),
(40, 'Cameloc', NULL, 3),
(41, 'Dismeno', NULL, 3),
(42, 'Goralgin', NULL, 3),
(43, 'Kaditic', NULL, 3),
(44, 'Mirasic', NULL, 3),
(45, 'Meloxicam', NULL, 3),
(46, 'Neuralgin', NULL, 3),
(47, 'Pyroxicam', NULL, 3),
(48, 'Paracetamol', NULL, 3),
(49, 'Scaopamin plus', NULL, 3),
(50, 'Sumagesic', NULL, 3),
(51, 'Spasminal', NULL, 3),
(52, 'Tropineuron', NULL, 3),
(53, 'Antisida Doen', NULL, 4),
(54, 'Bicnat', NULL, 4),
(55, 'Cimetidine', NULL, 4),
(56, 'Contramo', NULL, 4),
(57, 'Combantrin', NULL, 4),
(58, 'Diaform', NULL, 4),
(59, 'Dexantra Tab', NULL, 4),
(60, 'Hemorid', NULL, 4),
(61, 'Lagesil', NULL, 4),
(62, 'Laxatab', NULL, 4),
(63, 'Primperan', NULL, 4),
(64, 'Ranitidine', NULL, 4),
(65, 'Redacid', NULL, 4),
(66, 'Ulbamed', NULL, 4),
(67, 'Vitazym', NULL, 4),
(68, 'Vosea', NULL, 4),
(69, 'Becom', NULL, 5),
(70, 'Calcium lactat', NULL, 5),
(71, 'Calcidin', NULL, 5),
(72, 'Caviplex', NULL, 5),
(73, 'Curcumex', NULL, 5),
(74, 'Coxavit', NULL, 5),
(75, 'Etabion', NULL, 5),
(76, 'Forbone forte', NULL, 5),
(77, 'Isoven', NULL, 5),
(78, 'Konilife liver guard', NULL, 5),
(79, 'Kalnex', NULL, 5),
(80, 'Opinacea', NULL, 5),
(81, 'Osteor', NULL, 5),
(82, 'Supravit', NULL, 5),
(83, 'Stamina', NULL, 5),
(84, 'Vit C', NULL, 5),
(85, 'Vit B6', NULL, 5),
(86, 'Vit K', NULL, 5),
(87, 'Vitacimin', NULL, 5),
(88, 'Kalnex', NULL, 5),
(89, 'Osteor Plus', NULL, 5),
(90, 'Alegi', NULL, 6),
(91, 'BDM', NULL, 6),
(92, 'Bufacaryl', NULL, 6),
(93, 'CTM', NULL, 6),
(94, 'Citirizine', NULL, 6),
(95, 'Colergis', NULL, 6),
(96, 'Dexteem plus', NULL, 6),
(97, 'Dexamethasone', NULL, 6),
(98, 'Loratadine', NULL, 6),
(99, 'Metrison', NULL, 6),
(100, 'Prednison', NULL, 6),
(101, 'Prednicort', NULL, 6),
(102, 'Tropidrol', NULL, 6),
(103, 'Rihest', NULL, 6),
(104, 'Histigo', NULL, 7),
(105, 'Mertigo', NULL, 7),
(106, 'Etambutol', NULL, 8),
(107, 'INH CIBA', NULL, 8),
(108, 'Pyrazinamide', NULL, 8),
(109, 'Rifampicin', NULL, 8),
(110, 'Tibigon', NULL, 8),
(111, 'Enkasari', NULL, 9),
(112, 'GOM', NULL, 9),
(113, 'Acyclovir 200mg', NULL, 10),
(114, 'Acyclovir 400mg', NULL, 10),
(115, 'Fastor', NULL, 11),
(116, 'Simvastatin', NULL, 11),
(117, 'Amlodipine 5mg', NULL, 12),
(118, 'Amlodipine 10mg', NULL, 12),
(119, 'Dilavask', NULL, 12),
(120, 'Gralixa', NULL, 12),
(121, 'Otoril', NULL, 12),
(122, 'Glibenclamide', NULL, 13),
(123, 'Metrofin', NULL, 13),
(124, 'Erlamycetine TM', NULL, 14),
(125, 'Erlamycetine SM', NULL, 14),
(126, 'Genoint TM', NULL, 14),
(127, 'Genoint SM', NULL, 14),
(128, 'Rohto', NULL, 14),
(129, 'Sagestam TM', NULL, 14),
(130, 'Erlamycetine TT', NULL, 15),
(131, 'Acyclovir zalf', NULL, 16),
(132, 'Benoson N', NULL, 16),
(133, 'Betasim', NULL, 16),
(134, 'Betamethasone', NULL, 16),
(135, 'Bethadine 30ml', NULL, 16),
(136, 'Bethadine 1000ml', NULL, 16),
(137, 'Bethadine zalf', NULL, 16),
(138, 'Bioplacentron', NULL, 16),
(139, 'Chlorampecort H', NULL, 16),
(140, 'Genoint zalf kulit', NULL, 16),
(141, 'Hidrocortison', NULL, 16),
(142, 'Ichtiol', NULL, 16),
(143, 'Ketoconazole', NULL, 16),
(144, 'Lepain', NULL, 16),
(145, 'Myconazole', NULL, 16),
(146, 'Metonate', NULL, 16),
(147, 'Neogenta', NULL, 16),
(148, 'Scabimide', NULL, 16),
(149, 'Sagestam zalf kulit', NULL, 16),
(150, 'Salep 24', NULL, 16),
(151, 'Trifasiklin', NULL, 16),
(152, 'Trombophob gel', NULL, 16),
(153, 'Vanquint plus', NULL, 16),
(154, 'Salcil talk', NULL, 17),
(155, 'Sabun hijau', NULL, 17),
(156, 'Alcohol 70%', NULL, 17),
(157, 'Fora eau de cologne', NULL, 17),
(158, 'Hansaplast plester', NULL, 17),
(159, 'Hansaplast roll', NULL, 17),
(160, 'Hyapix', NULL, 17),
(161, 'Handscoon', NULL, 17),
(162, 'Hand desifectan', NULL, 17),
(163, 'Kassa steril', NULL, 17),
(164, 'Kapas gulung', NULL, 17),
(165, 'Micropure roll', NULL, 17),
(166, 'Masker', NULL, 17),
(167, 'Nacl 0.9% 500cc', NULL, 17),
(168, 'Nasaline', NULL, 17),
(169, 'Oxligent mask', NULL, 17),
(170, 'Oxligent', NULL, 17),
(171, 'Rivanol', NULL, 17),
(172, 'Squit 1cc', NULL, 17),
(173, 'Squit 3cc', NULL, 17),
(174, 'Squit 5cc', NULL, 17),
(175, 'Squit 10cc', NULL, 17),
(176, 'Stesolid', NULL, 17),
(177, 'Gentian violet', NULL, 17),
(178, 'Supratul', NULL, 17),
(179, 'Duradryl', NULL, 18),
(180, 'Epineprim', NULL, 18),
(181, 'Lodocain', NULL, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `tmp_lahir` varchar(20) NOT NULL DEFAULT '0',
  `tgl_lahir` varchar(20) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `no_hp` char(20) NOT NULL DEFAULT '0',
  `email` varchar(20) NOT NULL DEFAULT '0',
  `jabatan` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `kode`, `nama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `jabatan`) VALUES
(3, 'P001', 'Kendy Kanadirasa Rasyad', 'Subang', '07/11/1963', 'Neglasari luar, Bandung', '081220338950', 'vitcandy@gmail.com', 'Staff Administrasi'),
(4, 'P002', 'Heri M', 'Bandung', '25/06/1961', 'Jatinangor', '', '', 'Staff Administrasi'),
(5, 'P003', 'Rusmana', 'Bandung', '07/06/1957', 'Pasanggrahan, Ujung Berung', '', '', 'Staff Administrasi'),
(7, 'P004', 'Ujang Kosasih', 'Bandung', '28/08/1964', 'Cipadung', '081312467906', '', 'Cleaning Service'),
(8, 'P005', 'Yuli Widiastuti', 'Cilacap', '15/07/1995', 'Sukaluyu, Cibiru Bandung', '083822751795', '', 'Perawat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` char(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
('100', 'Ushuluddin'),
('200', 'Tarbiyah dan Keguruan'),
('300', 'Syari\'ah dan hukum'),
('400', 'Dakwah dan Komunikasi'),
('500', 'Adab dan Humaniora'),
('600', 'Psikologi'),
('700', 'Sains dan Teknologi'),
('800', 'Ilmu Sosial dan Ilmu Politik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_medis`
--

CREATE TABLE `rekap_medis` (
  `id` int(11) NOT NULL,
  `kode` char(20) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `kode_pasien` char(20) NOT NULL DEFAULT '0',
  `keluhan` text NOT NULL,
  `obat` char(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap_medis`
--

INSERT INTO `rekap_medis` (`id`, `kode`, `nama`, `kode_pasien`, `keluhan`, `obat`) VALUES
(4, 'R001', 'Viqi Nurhaqiqi', 'M001', 'Batuk flu', '26'),
(5, 'R002', 'Siti Khodijah', '001', 'batuk pilek', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_obat`
--
ALTER TABLE `kategori_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_test_provinsi` (`fakultas`),
  ADD KEY `FK_test_kota` (`jurusan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekap_medis`
--
ALTER TABLE `rekap_medis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_mhs`
--
ALTER TABLE `data_mhs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekap_medis`
--
ALTER TABLE `rekap_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_test_kota` FOREIGN KEY (`jurusan`) REFERENCES `kota` (`id`),
  ADD CONSTRAINT `FK_test_provinsi` FOREIGN KEY (`fakultas`) REFERENCES `provinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
