-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 02:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_perpusuny`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `buku_id` char(6) NOT NULL,
  `buku_judul` varchar(225) NOT NULL,
  `buku_pengarang` varchar(100) NOT NULL,
  `buku_keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `kategori_id` char(5) NOT NULL,
  `penerbit_id` char(5) NOT NULL,
  `no_rak` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE IF NOT EXISTS `bukus` (
  `idbuku` char(6) NOT NULL,
  `no_inventaris` char(20) NOT NULL,
  `kodebarang` char(50) NOT NULL,
  `register` char(7) NOT NULL,
  `ISBN` char(50) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `kategori_id` char(5) NOT NULL,
  `penerbit_id` char(5) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_beli` int(4) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargasatuan` double NOT NULL,
  `totalharga` double NOT NULL,
  `kondisi` char(10) NOT NULL,
  `ruang` varchar(200) NOT NULL,
  `asalusul` text NOT NULL,
  `ket` text NOT NULL,
  `tgl_penerimaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`idbuku`, `no_inventaris`, `kodebarang`, `register`, `ISBN`, `judul_buku`, `kategori_id`, `penerbit_id`, `pengarang`, `tahun_beli`, `jumlah`, `hargasatuan`, `totalharga`, `kondisi`, `ruang`, `asalusul`, `ket`, `tgl_penerimaan`) VALUES
('000001', '000001H/SMA/00', '15.12.678.5136', '000001', '1219/1717/SAN/2772', 'BUKU AGAMA ISLAM', '200', 'P0001', 'ANDI', 2010, 100, 100000, 10000000, 'B', 'PERPUSTAKAAN', 'HADIAH DINAS PENDIDIKAN', '-tes', '2016-12-27'),
('000002', '000002P/SMA/00', '15.12.678.5138', '000002', '1219/1717/SAN/2774', 'CAMPUS AMBASADOR', '800', 'P0002', 'AHMAD BASTIAR', 2011, 10, 150000, 1500000, 'R', 'PERPUSTAKAAN', 'PEMBELIAN', '-', '2016-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `buku_inventori`
--

CREATE TABLE IF NOT EXISTS `buku_inventori` (
  `idbuku` char(6) NOT NULL,
  `no_inventaris` char(14) NOT NULL,
  `tgl_terima` date NOT NULL,
  `diterimadari` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` char(10) NOT NULL,
  `asalusul` text NOT NULL,
  `ket` text NOT NULL,
  `penerbit_id` char(5) NOT NULL,
  `kategori_id` char(5) NOT NULL,
  `noreg` char(5) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE IF NOT EXISTS `detail_peminjaman` (
  `id_transaksi` char(9) NOT NULL,
  `id_siswa` char(6) NOT NULL,
  `idbuku` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_transaksi`, `id_siswa`, `idbuku`) VALUES
('PI0001', 'S00001', '000002'),
('PI0002', 'S00002', '000001'),
('PI0003', 'S00004', '000002'),
('PI0004', 'S0005', '000002'),
('PI0005', 'S0007', '000001'),
('PI0002', 'S00002', '000002'),
('PI0005', 'S0007', '000001');

-- --------------------------------------------------------

--
-- Table structure for table `inventori`
--

CREATE TABLE IF NOT EXISTS `inventori` (
  `id_barang` char(5) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(8) NOT NULL,
  `lokasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventori`
--

INSERT INTO `inventori` (`id_barang`, `nama_barang`, `keterangan`, `jumlah`, `lokasi`) VALUES
('I0001', 'Kursi Perpustakaan', 'Kursi untuk ruang perpustakaan', 20, ''),
('I0002', 'Meja Perpustakaan', 'meja dalam kondisi baik dan sedang digunknan ', 20, ''),
('I0003', 'Global / Peta', ' kondisi baik dan digunakan di ruang kepala sekolah dan diperpustakaan ', 5, 'askldnfkjasn'),
('I0004', 'Meja Ruang Guru', '   4 kondisi baik 2 kondisi buruk ', 7, 'Ruang Guru');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` char(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
('000', 'BUKU UMUM'),
('100', 'FILSAFAT'),
('200', 'PENDIDIKAN AGAMA'),
('300', 'PENDIDIKAN SOSIAL'),
('400', 'PENDIDIKAN BAHASA'),
('500', 'P. ILMU MURNI'),
('600', 'PENDIDIKAN TEKNOLOGI'),
('700', 'KESENIAN'),
('800', 'PENDIDIKAN KESUSASTRAAN'),
('900', 'SEJARAH & GEOGRAFI');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `penerbit_id` char(5) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`penerbit_id`, `nama_penerbit`) VALUES
('P0001', 'ANDI'),
('P0002', 'SINDO'),
('P0003', 'MULTIFATIONDO'),
('P0004', 'ALFATINDO'),
('P0005', 'Gema Insani'),
('P0006', 'PT One Earth Media'),
('P0007', 'PT Sarana Panca Kary'),
('P0008', 'Java Books Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
`id_pengaturan` int(11) NOT NULL,
  `judul_pengaturan` text NOT NULL,
  `alamat` text NOT NULL,
  `kontak` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `judul_pengaturan`, `alamat`, `kontak`) VALUES
(1, 'SMP N 4 Kuantan Hilir', 'Kampung medan, Baserah, Riau', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `siswa_id` char(6) NOT NULL,
  `kodeanggota` varchar(100) NOT NULL,
  `NIS` char(10) NOT NULL,
  `siswa_nama` varchar(100) NOT NULL,
  `kelas` char(15) NOT NULL,
  `siswa_alamat` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `namakelas` char(10) NOT NULL,
  `jurusan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `kodeanggota`, `NIS`, `siswa_nama`, `kelas`, `siswa_alamat`, `foto`, `namakelas`, `jurusan`) VALUES
('S00001', '01-13/14-00001', '1234/siswa', 'Melisa Meliga Itha', '01', 'jln. turi yogyakarta, ', 'file_1483518150.jpg', 'XA', 'BELUM ADA JURUSAN'),
('S00002', '01-13/14-00002', '10125135', 'Melisa Purnama Sari', '01', 'ds.sambisari, Joho, Selamn Yogyakarta', 'file_1483523661.jpg', 'XA', 'BELUM ADA JURUSAN'),
('S00004', '01-13/14-00004', '10125133', 'Tri Ratna Sari Devi', '01', 'ds.sambisari, Joho, Selamn Yogyakarta', 'file_1483523679.jpg', 'XA', 'BELUM ADA JURUSAN'),
('S0005', '01-13/14-0005', '123/1212/1', 'Diana Putri Shima', '01', 'jepara', 'file_1483523692.jpg', 'XA', 'BELUM ADA JURUSAN'),
('S0006', '01-13/14-0006', '121211', 'te', '01', 'whjj', 'file_1483503553.jpg', 'XA', 'BELUM ADA JURUSAN'),
('S0007', '01-13/14-0007', 'sad', 'sad', '01', 'asdas', 'file_1483523819.jpeg', 'XA', 'BELUM ADA JURUSAN'),
('S0008', '01-13/14-0008', '1234/1212/', 'ahmad bastiar', '01', 'ds. bukit berbunga, baserah, kuntan hilir', 'file_1483523785.png', 'XA', 'BELUM ADA JURUSAN'),
('S0009', '01-13/14-0009', '12312312', 'ahmad bastiar', '01', 'jln bukit berbunga, bukit berbunga, baserah, kuantan hilir, riau', 'file_1483523800.jpg', 'XA', 'BELUM ADA JURUSAN'),
('S0010', '01-13/14-0010', '12121', 'bas', '01', 'jgja', 'file_1484037682.jpg', 'XA', 'BELUM ADA JURUSAN'),
('S0011', '01-13/14-0011', '1212121', 'ahmad bastiar', '01', 'jogja', 'file_1484038518.jpg', 'XA', 'BELUM ADA JURUSAN');

-- --------------------------------------------------------

--
-- Table structure for table `temporari_pinjaman`
--

CREATE TABLE IF NOT EXISTS `temporari_pinjaman` (
  `idtemporari` char(9) NOT NULL,
  `siswa_id` char(6) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_pinjam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporari_pinjaman`
--

INSERT INTO `temporari_pinjaman` (`idtemporari`, `siswa_id`, `tgl_pinjam`, `tgl_kembali`, `status_pinjam`) VALUES
('PI0001', 'S00001', '2016-12-29', '2017-01-01', 'Dikembalikan'),
('PI0002', 'S00002', '2017-01-04', '2017-01-07', 'Dikembalikan'),
('PI0003', 'S00004', '2017-01-04', '2017-01-07', 'Dikembalikan'),
('PI0004', 'S0005', '2017-01-04', '2017-01-07', 'Dipinjam'),
('PI0005', 'S0007', '2017-01-04', '2017-01-07', 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` char(5) NOT NULL,
  `user_nm` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_alamat` text NOT NULL,
  `user_hp` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nm`, `username`, `password`, `user_alamat`, `user_hp`) VALUES
('U0001', 'administrator', 'admin', 'admin', 'Yogjakarta', '0877381212'),
('U0002', 'Melisa putri', 'melisa', 'melisa', 'jogja', '0987654567'),
('U0003', 'susilo', 'susilo', 'susilo', 'pakem', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
 ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `buku_inventori`
--
ALTER TABLE `buku_inventori`
 ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `inventori`
--
ALTER TABLE `inventori`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
 ADD PRIMARY KEY (`penerbit_id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
 ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `temporari_pinjaman`
--
ALTER TABLE `temporari_pinjaman`
 ADD PRIMARY KEY (`idtemporari`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
