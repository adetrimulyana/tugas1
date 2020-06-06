-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jul 2017 pada 12.36
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `difatours`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_cust` int(8) NOT NULL,
  `nama` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `negara` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `nama`, `no_hp`, `email`, `negara`) VALUES
(16, 'Dadang', '081394199522', 'inidank@gmail.com', 'indonesia'),
(18, 'Nai Irene', '', '', 'singapore'),
(19, 'Jasniza Abd Jalil', '+60123271665', '', 'malaysia'),
(20, 'Abdul Rahim', '+60177541458', '', 'malaysia'),
(21, 'Ajid', '082130542168', '', 'indonesia'),
(22, 'Sabuga', '085222272126', '', 'indonesia'),
(23, 'Andi', '081320012437', '', 'indonesia'),
(24, 'Cepy', '081395357420', '', 'indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_alokasi`
--

CREATE TABLE IF NOT EXISTS `detail_alokasi` (
  `kode_resv` varchar(8) NOT NULL,
  `id_driver` int(3) NOT NULL,
  `id_kend` int(5) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_reservasi`
--

CREATE TABLE IF NOT EXISTS `detail_reservasi` (
  `kode_resv` varchar(8) NOT NULL,
  `tgl` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `itinerary` text NOT NULL,
  `total` varchar(30) NOT NULL,
  `id_driver` int(3) NOT NULL,
  `id_kend` int(5) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_reservasi`
--

INSERT INTO `detail_reservasi` (`kode_resv`, `tgl`, `type`, `city`, `itinerary`, `total`, `id_driver`, `id_kend`, `status`) VALUES
('DHY7SD', '2017-06-12', 'Deluxe', 'Jakarta', 'Bandung', '60000', 0, 0, ''),
('DHY7SD', '2017-06-13', 'Economy', 'Puncak', 'Bandung', '60000', 0, 0, ''),
('KN7IGV', '2017-06-10', 'Deluxe', 'Bandung', 'Bandung', '--Pilih--', 0, 0, ''),
('KN7IGV', '2017-06-11', 'Deluxe', 'Bandung', 'Bandung', '--Pilih--', 0, 0, ''),
('KN7IGV', '2017-06-12', 'Deluxe', 'Bandung', 'Bandung', '--Pilih--', 0, 0, ''),
('KN7IGV', '2017-06-13', 'Deluxe', 'Bandung', 'Bandung', '--Pilih--', 0, 0, ''),
('DHY7SD', '2017-06-12', 'Deluxe', 'Jakarta', 'Bandung', '400000', 7, 11, 'Jakarta'),
('DHY7SD', '2017-06-13', 'Deluxe', 'Jakarta', 'Bandung', '400000', 7, 11, 'Jakarta'),
('BNZN1K', '2017-06-15', 'Economy', 'Jakarta', 'bandung', '400000', 7, 12, 'Jakarta'),
('BNZN1K', '2017-06-17', 'Economy', 'Jakarta', 'bandung', '400000', 7, 13, 'Puncak'),
('KN7IGV', '2017-06-15', 'Economy', 'Jakarta', 'Jakarta', '750000', 8, 13, 'Jakarta'),
('KN7IGV', '2017-06-16', 'Economy', 'Puncak', 'Puncak', '700000', 8, 13, 'Jakarta'),
('KN7IGV', '2017-06-17', 'Economy', 'Bandung', 'Bandung', '450000', 8, 13, 'Jakarta'),
('KN7IGV', '2017-06-18', 'Economy', 'Bandung', 'Bandung', '450000', 8, 13, 'Jakarta'),
('KN7IGV', '2017-06-19', 'Economy', 'Jakarta', 'Jakarta', '450000', 8, 13, 'Jakarta'),
('FSZXQX', '2017-06-15', 'Economy', 'Bandung', 'Bandung', '450000', 10, 16, 'Bandung'),
('FSZXQX', '2017-06-16', 'Economy', 'Bandung', 'Bandung', '450000', 10, 16, 'Bandung'),
('FSZXQX', '2017-06-17', 'Economy', 'Bandung', 'Bandung', '450000', 10, 16, 'Bandung'),
('FSZXQX', '2017-06-18', 'Economy', 'Bandung', 'Bandung', '450000', 10, 16, 'Bandung'),
('FSZXQX', '2017-06-19', 'Economy', 'Bandung', 'Bandung', '450000', 10, 16, 'Bandung'),
('5XYMWT', '2017-06-15', 'Elf Long', 'Puncak', 'Puncak', '1200000', 11, 15, 'Puncak'),
('5XYMWT', '2017-06-16', 'Elf Long', 'Puncak', 'Puncak', '1200000', 11, 15, 'Puncak'),
('5XYMWT', '2017-06-17', 'Elf Long', 'Puncak', 'Puncak', '1200000', 11, 15, 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `id_kend` int(5) NOT NULL,
  `type` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `no` varchar(10) NOT NULL,
  `kapasitas` varchar(3) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kend`, `type`, `jenis`, `no`, `kapasitas`, `tahun`) VALUES
(11, 'Deluxe', 'Innova', 'D 599 RI', '6', '2008'),
(12, 'Economy', 'Avanza', 'D 1705 QF', '7', '2012'),
(13, 'Deluxe', 'Innova', 'D 777 EZ', '6', '2008'),
(15, 'Elf Long', 'Elf Long', 'D 1756 AA', '17', '2015'),
(16, 'Economy', 'APV', 'D 1857 WE', '5', '2013');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeliharaan`
--

CREATE TABLE IF NOT EXISTS `pemeliharaan` (
  `id_pemeliharaan` int(30) NOT NULL,
  `tgl` date NOT NULL,
  `id_kend` int(5) NOT NULL,
  `jenis_kerusakan` text NOT NULL,
  `keterangan` text NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `nama_bengkel` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`id_pemeliharaan`, `tgl`, `id_kend`, `jenis_kerusakan`, `keterangan`, `biaya`, `nama_bengkel`) VALUES
(7, '2017-06-16', 12, 'Ganti Ban', 'cek ban', '800000', 'Ko Caca'),
(8, '2017-06-15', 16, 'Ganti aki', 'ganti pake aki yuasa', '750000', 'Cihampelas Aki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `kode_resv` varchar(8) NOT NULL,
  `pass` varchar(4) NOT NULL,
  `id_cust` int(8) NOT NULL,
  `pax` int(3) NOT NULL,
  `tgl_datang` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`kode_resv`, `pass`, `id_cust`, `pax`, `tgl_datang`, `tgl_pulang`, `notes`) VALUES
('5XYMWT', '0959', 24, 10, '2017-06-15', '2017-06-17', ''),
('BNZN1K', '3481', 16, 6, '2017-06-15', '2017-06-17', ''),
('DHY7SD', '0527', 16, 4, '2017-06-12', '2017-06-15', ''),
('FSZXQX', '3391', 22, 4, '2017-06-15', '2017-06-19', ''),
('KN7IGV', '4381', 19, 4, '2017-06-09', '2017-06-13', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE IF NOT EXISTS `supir` (
  `id_driver` int(3) NOT NULL,
  `nama_driver` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `type_sim` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id_driver`, `nama_driver`, `alamat`, `no_hp`, `type_sim`) VALUES
(7, 'Ade', 'Bandung', '+6281222559257', 'SIM B I'),
(8, 'Andi', 'Tanjung Sari', '+6281320012437', 'SIM B I Umum'),
(9, 'Adi', 'Dago', '+6281394664715', 'SIM B I'),
(10, 'Asep', 'Sabuga', '+6281320267211', 'SIM B I Umum'),
(11, 'Robi', 'Sabuga', '+6281320150885', 'SIM B I Umum'),
(12, 'Rijal', 'Bandung', '+6281222822431', 'SIM B I Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tour_paket`
--

CREATE TABLE IF NOT EXISTS `tour_paket` (
  `id_tour` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `minimal` int(4) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tour_paket`
--

INSERT INTO `tour_paket` (`id_tour`, `nama`, `harga`, `minimal`, `kota`, `tanggal`, `isi`) VALUES
(3, '4D3N', '600000', 4, 'Bandung', '2017-06-01 08:33:15', '<h1><u>Heading Of Message</u></h1>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</p>\r\n                      <ul>\r\n                        <li>List item one</li>\r\n                        <li>List item two</li>\r\n                        <li>List item three</li>\r\n                        <li>List item four</li>\r\n                      </ul>\r\n                      <p>Thank you,</p>\r\n                      <p>John Doe</p>'),
(4, 'Ciwidey Tour', '100000', 8, 'Bandung', '2017-06-17 10:58:00', '<p>Ciwidey Tour</p><p><br></p><p>Test Aja</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_kendaraan`
--

CREATE TABLE IF NOT EXISTS `type_kendaraan` (
  `type` varchar(30) NOT NULL,
  `harga_sewa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_kendaraan`
--

INSERT INTO `type_kendaraan` (`type`, `harga_sewa`) VALUES
('Deluxe', '250000'),
('Economy', '200000'),
('Elf Long', '600000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `detail_alokasi`
--
ALTER TABLE `detail_alokasi`
  ADD KEY `id_driver` (`id_driver`), ADD KEY `id_kend` (`id_kend`), ADD KEY `kode_resv` (`kode_resv`);

--
-- Indexes for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD KEY `kode_resv` (`kode_resv`), ADD KEY `type` (`type`), ADD KEY `type_2` (`type`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kend`), ADD KEY `type` (`type`), ADD KEY `type_2` (`type`), ADD KEY `type_3` (`type`), ADD KEY `type_4` (`type`), ADD KEY `type_5` (`type`);

--
-- Indexes for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`id_pemeliharaan`), ADD KEY `id_kend` (`id_kend`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`kode_resv`), ADD KEY `id_cust` (`id_cust`), ADD KEY `id_cust_2` (`id_cust`), ADD KEY `id_cust_3` (`id_cust`), ADD KEY `id_cust_4` (`id_cust`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `tour_paket`
--
ALTER TABLE `tour_paket`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `type_kendaraan`
--
ALTER TABLE `type_kendaraan`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kend` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  MODIFY `id_pemeliharaan` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `id_driver` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tour_paket`
--
ALTER TABLE `tour_paket`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_alokasi`
--
ALTER TABLE `detail_alokasi`
ADD CONSTRAINT `detail_alokasi_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `supir` (`id_driver`),
ADD CONSTRAINT `detail_alokasi_ibfk_2` FOREIGN KEY (`id_kend`) REFERENCES `kendaraan` (`id_kend`),
ADD CONSTRAINT `detail_alokasi_ibfk_3` FOREIGN KEY (`kode_resv`) REFERENCES `reservation` (`kode_resv`);

--
-- Ketidakleluasaan untuk tabel `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
ADD CONSTRAINT `detail_reservasi_ibfk_1` FOREIGN KEY (`kode_resv`) REFERENCES `reservation` (`kode_resv`),
ADD CONSTRAINT `detail_reservasi_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type_kendaraan` (`type`);

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type_kendaraan` (`type`);

--
-- Ketidakleluasaan untuk tabel `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
ADD CONSTRAINT `pemeliharaan_ibfk_1` FOREIGN KEY (`id_kend`) REFERENCES `kendaraan` (`id_kend`);

--
-- Ketidakleluasaan untuk tabel `reservation`
--
ALTER TABLE `reservation`
ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- ieu teks ti urang, percobaan