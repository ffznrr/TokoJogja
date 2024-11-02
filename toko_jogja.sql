-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2024 pada 19.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_mutiaraindah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'bedur', 'bedur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Minuman'),
(2, 'Rokok'),
(9, 'Makanan Ringan'),
(10, 'Bumbu Dapur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `password_pelanggan` varchar(11) NOT NULL,
  `telepon_pelanggan` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `fotoprofil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `password_pelanggan`, `telepon_pelanggan`, `alamat`, `fotoprofil`) VALUES
(1, 'Desty Rahmadanti', 'desti789@gmail.com', 'gampang', '087787874503', 'pengasinan', ''),
(13, 'Abyan', 'AbyanAldi@gmail.com', 'gampang', '087878348409', 'Cileungsi Bogor', ''),
(14, 'Bogel', 'browgel112@gmail.com', 'gampang', '082111741730', 'Griya blok v No 13', ''),
(15, 'ANGGA', 'ANGGA@GMAIL.COM', '12345678', '085771264849', 'BOGOR', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(41, 58, 'Achong', 'Bca', 76, '2023-07-14 00:00:00', '20230714194524IMG_0862.JPG'),
(44, 61, 'Desty Rahmadanti', 'Bca', 54, '2023-07-15 00:00:00', '20230715105745MAPA.PNG'),
(45, 62, 'Abyan', 'Bca', 115, '2023-07-18 00:00:00', '20230718093636Tanda tangan Bedur.png'),
(46, 63, 'Browwgwll', 'Bca', 263000, '2023-07-24 00:00:00', '20230724172445Screenshot (6).png'),
(47, 63, 'Browwgwll', 'on', 2, '2023-07-24 00:00:00', '20230724172647Screenshot (2).png'),
(48, 61, 'Desty Rahmadanti', 'on', 1, '2023-07-24 00:00:00', '20230724173035Screenshot (1).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` datetime NOT NULL,
  `status_pembelian` varchar(255) NOT NULL DEFAULT 'belum bayar',
  `total_pembelian` int(11) NOT NULL,
  `totalberat` int(11) NOT NULL,
  `alamatpengiriman` text NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `distrik` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `estimasi` varchar(255) NOT NULL,
  `resipengiriman` varchar(100) NOT NULL,
  `ekspedisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `status_pembelian`, `total_pembelian`, `totalberat`, `alamatpengiriman`, `provinsi`, `distrik`, `tipe`, `kodepos`, `paket`, `ongkir`, `estimasi`, `resipengiriman`, `ekspedisi`) VALUES
(61, 1, '2023-07-15 00:00:00', 'Selesai', 54000, 750, 'bogor', 'Jawa Barat', 'Bogor', 'Kota', 16119, 'REG', 9000, '2', 'uhbyubygb', ''),
(62, 13, '2023-07-18 00:00:00', 'barang dikirim', 115000, 850, 'Cileungsi Bogor', 'Jawa Barat', 'Bogor', 'Kabupaten', 16911, 'Pos Kargo', 30000, '7-14 HARI', 'sfgsfg', ''),
(63, 14, '2023-07-24 00:00:00', 'Selesai', 263000, 1450, 'Griya Bukit Jaya ', 'Jawa Barat', 'Bogor', 'Kabupaten', 16911, 'REG', 18000, '2', 'sgrsgsgsrgsrgr', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ukuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_pelanggan`, `id_produk`, `nama`, `harga`, `berat`, `subberat`, `subharga`, `jumlah`, `ukuran`) VALUES
(74, 59, 0, 59, 'Gudang Garam Filter', 60000, 50, 50, 60000, 1, ''),
(75, 59, 0, 58, 'Teh pucuk', 40000, 100, 100, 40000, 1, ''),
(76, 60, 0, 59, 'Gudang Garam Filter', 60000, 50, 50, 60000, 1, ''),
(77, 61, 0, 54, 'Coca - cola', 45000, 750, 750, 45000, 1, ''),
(78, 62, 0, 54, 'Coca - cola', 45000, 750, 750, 45000, 1, ''),
(79, 62, 0, 58, 'Teh pucuk', 40000, 100, 100, 40000, 1, ''),
(80, 63, 0, 62, 'Camel Kretek ', 210000, 250, 250, 210000, 1, ''),
(81, 63, 0, 61, 'Kopi Granita ', 35000, 1200, 1200, 35000, 1, ''),
(82, 0, 0, 0, '', 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `stok_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `berat_produk`, `stok_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(64, 2, 'Dunhill Black ', 400000, 300, '300', 'PhotoRoom-20230729_200357.png', '<p>&gt;&gt; DUNHILL HITAM 16 BATANG ISI 10 BUNGKUS #CUKAI 2023 &lt;&lt;</p>\r\n'),
(65, 1, 'Organique 500 ml', 187500, 7000, '150', 'PhotoRoom-20230803_165051.png', '<p>&gt;&gt; ORGANIQUE 500 ML 1 BOX ISI 20 BOTOL &lt;&lt;</p>\r\n'),
(66, 10, 'Lada Hitam Bubuk ', 420000, 4500, '230', 'PhotoRoom-20230803_165535.png', '<p>&gt;&gt; LADA HITAM BUBUK 1 DUS ISI 12 &lt;&lt;</p>\r\n'),
(67, 2, 'Sampoerna Kretek', 154000, 400, '350', 'PhotoRoom-20230729_200628.png', '<p>&gt;&gt; SAMPOERNA KRETEK 12 BATANG 10 BUNGKUS #CUKAI 2023 &lt;&lt;</p>\r\n'),
(68, 1, 'Ultra Milk Cokelat', 153000, 5000, '230', 'PhotoRoom-20230803_165332.png', '<p>&gt;&gt; ULTRA MILK COKELAT 1 DUS ISI 24 &lt;&lt;</p>\r\n'),
(69, 10, 'Blue Band', 640500, 15000, '100', 'PhotoRoom-20230803_170140.png', '<p>&gt;&gt; BLUE BAND 300 GRAM 1 DUS ISI 30 &lt;&lt;</p>\r\n'),
(70, 1, 'Frisian Flag', 525000, 10000, '120', 'PhotoRoom-20230803_165939.png', '<p>&gt;&gt; FRISIAN FLAG 370 GRAM 1 DUS ISI 48 &lt;&lt;</p>\r\n'),
(71, 2, 'Camel Mini Purple', 170000, 250, '300', 'PhotoRoom-20230729_201334.png', '<p>&gt;&gt; CAMEL MINI PURPLE 12 BATANG ISI 10 BUNGKUS #CUKAI 2023 &lt;&lt;</p>\r\n'),
(72, 10, 'Kecap Asin Indofood', 249000, 9600, '120', 'PhotoRoom-20230803_165736.png', '<p>&gt;&gt; KECAP ASIN 140 ML 1 DUS ISI 48 &lt;&lt;</p>\r\n'),
(73, 1, 'Nestle Dancow Cokelat', 555000, 5100, '130', 'PhotoRoom-20230803_170940.png', '<p>&gt;&gt; NESTLE DANCOW 1 DUS ISI 160 SACHET &lt;&lt;</p>\r\n'),
(74, 2, 'Evo Blue', 225000, 350, '120', 'PhotoRoom-20230803_000538.png', '<p>&gt;&gt; EVO BLUE 1 SLOP ISI 10 BUNGKUS #CUKAI 2023 &lt;&lt;</p>\r\n'),
(75, 10, 'Royco ', 205000, 4100, '140', 'PhotoRoom-20230803_170700.png', '<p>&gt;&gt; ROYCO RASA SAPI 1 DUS ISI 576 SACHET &lt;&lt;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_foto`
--

CREATE TABLE `produk_foto` (
  `id_produk_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `produk_foto`
--

INSERT INTO `produk_foto` (`id_produk_foto`, `id_produk`, `nama_produk_foto`) VALUES
(69, 58, 'tehpucuk.jpeg'),
(70, 59, 'Gudang garam filter.jpeg'),
(71, 60, 'filter.jpeg'),
(72, 61, 'granita.jpeg'),
(73, 62, 'ROKO CAMEL.jpeg'),
(74, 63, 'Signature Rokok.jpg'),
(75, 64, 'PhotoRoom-20230729_200357.png'),
(76, 65, 'PhotoRoom-20230803_165051.png'),
(79, 66, 'PhotoRoom-20230803_165535.png'),
(80, 67, 'PhotoRoom-20230729_200628.png'),
(81, 68, 'PhotoRoom-20230803_165332.png'),
(82, 69, 'PhotoRoom-20230803_170140.png'),
(83, 70, 'PhotoRoom-20230803_165939.png'),
(84, 71, 'PhotoRoom-20230729_201334.png'),
(85, 72, 'PhotoRoom-20230803_165736.png'),
(86, 73, 'PhotoRoom-20230803_170940.png'),
(87, 74, 'PhotoRoom-20230803_000538.png'),
(88, 75, 'PhotoRoom-20230803_170700.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tema`
--

INSERT INTO `tema` (`id_tema`, `tema`) VALUES
(21, '20230815234407PhotoRoom-20230803_173437.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `namatoko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `fotoprofil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `id_admin`, `namatoko`, `email`, `telepon`, `provinsi`, `tipe`, `kota`, `alamat`, `fotoprofil`) VALUES
(1, 1, 'TOKO MUTIARA', 'TOKOMUTIARA@GMAIL.COM', '082144951684', 'JAWA BARAT', 'Kota', 'KABUPATEN BOGOR', 'Griya Alam Sentosa Block F25 No. 14-15 Cileungsi, Bogor', '3123123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD PRIMARY KEY (`id_produk_foto`);

--
-- Indeks untuk tabel `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  MODIFY `id_produk_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
