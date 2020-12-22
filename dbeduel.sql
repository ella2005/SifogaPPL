-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 05:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeduel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cek_penyakit`
--

CREATE TABLE `cek_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cek_soal`
--

CREATE TABLE `cek_soal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cek_soal`
--

INSERT INTO `cek_soal` (`id`, `soal_id`, `session_id`, `created_at`, `updated_at`) VALUES
(234, 1, 1, NULL, NULL),
(235, 1, 1, NULL, NULL),
(236, 1, 1, NULL, NULL),
(237, 1, 1, NULL, NULL),
(238, 2, 1, NULL, NULL),
(239, 3, 1, NULL, NULL),
(240, 4, 1, NULL, NULL),
(241, 5, 1, NULL, NULL),
(242, 26, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `nama_materi` varchar(200) NOT NULL,
  `artikel` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_user`, `nama_materi`, `artikel`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mengelola Data Pembibitan', '<p>Teknik menanam buah naga</p> sebernarnya sederhana. Baik untuk budidaya di kebun maupun dalam pot.\r\n\r\nHanya saja, sebagian orang melupakan bagian penting di awal sehinga setelah beberapa tahun pohon buah naganya tidak berbuah. Normalnya buah naga bisa berbuah setalah 7 -10 bulan. Jika beruntung 5 bulan sudah berbuah.\r\n1. Kenali Buah Naga yang Akan Anda Tanam\r\nDi Indonesia jenis buah naga ada 6. Merah, putih, super merah, kuning, orang dan hitam. Apapun jenisnya tetap menguntungkan.\r\nsifoga', '2020-12-22 16:02:17', NULL),
(2, 1, 'Mengelola Data Pemupukan', 'Di awal pertumbuhan, Anda harus memberi pupuk yang kandungan N nya banyak. di masa siap berbuah, kandungan P dan K bisa diperbanyak.\r\nJangan beri pupuk urea, bisa terjadi busuk batang.\r\nJangan beri pupuk kandang yang belum matang apalagi kotoran langsung.\r\nRajinlah membersihkan gulma dan rumput agar peresapan pupuk sempurna.\r\nsifoga', '2020-12-22 16:02:31', NULL),
(3, 1, 'Mengelola  Data tanaman', '<p>Pengairan<p>\r\nSiramlah buah naga 2 hari sekali pagi dan sore saat tidak hujan, jangan sampai airnya menggenang.\r\nuntuk awal-awal pertumbuhan sampai pohonnya mencapai ujung tiang panjatan, pangkaslah tunas dan sisakan 1 saja. ini agar pohon cepat tumbuh ke atas. Setelah dewasa, pangkaslah tunas yang kira-kira tidak diperlukan, yang busuk, atau yang terkena penyakit lalu timbun ke dalam tanah agar tidak menular. Cabang buah naga yang telah berbuah 4 kali sebaiknya di potong dan dijadikan bibit.\r\nsifoga', '2020-12-22 16:02:40', NULL),
(4, 1, 'Mengelola Data lahan', '<p>Mengelola Data Lahan</p>\r\nBahasa ilmiahnya, ia bisa hidup bagus di daerah dengan ketinggian 0-350m di atas permukaan laut dan curah hujan 720mm per tahun.\r\n\r\nKondisi yang terlalu basah dan kurang sinar matahari akan membuat buah naga mengalami busuk batang.\r\n\r\nPohon naga cocok untuk daerah tegalan (ladang) yang bila hujan selesai, airnya tidak menggenang.\r\nTanaman buah naga telah menjadi perhatian bukan hanya karena warna merah yang\r\nmenarik dan nilai ekonominya tetapi juga karena anti oksidan yang dikandungnya.\r\nKomoditas ini telah dikembangkan di beberapa daerah di Indonesia yang pada umumnya di\r\nlahan marjinal. Namun sampai saat ini belum tersedia data lengkap tentang produktivitas\r\nbuah naga di lokasi pengembangan buah naga tersebut. Penelitian ini bertujuan untuk\r\nmengetahui produktivitas buah naga di lahan marjinal. Penelitian dilakukan di Kebun\r\nPercobaan Aripan Balai Penelitian Tanaman Buah Tropika, Solok Sumatera Barat dari April\r\n2014–April 2015. Penelitian dilakukan secara deskriptif menggunakan 18 tanaman buah\r\nnaga (Hylocereus polyrhizus) berumur ±2 tahun. Hasil penelitian menunjukkan bahwa\r\ntanaman buah naga di lahan marjinal (KP. Aripan) berproduksi sepanjang tahun dengan\r\njumlah yang berfluktuatif. Produksi tertinggi bulan September 2014 6,53 kg/tan (5,44\r\nton/ha), dan terendah Februari 2015 0,59 kg/tan (0,49 ton/ha). Jumlah bunga berkisar\r\nantara 2,11-27,7/tan/bulan, persentase bunga mekar berkisar antara 39,72-68,24%,\r\npersentase bunga gugur yang tertinggi terjadi saat bunga pada fase bakal bunga sampai\r\nbunga mekar berkisar antara 31,75-60,27% dan terendah pada fase bunga mekar sampai\r\nterbentuknya buah berkisar antara 0,34-41,57 %, jumlah buah berkisar antara 1,33-\r\n13,05/tan/bulan, fruitset berkisar antara 30,76- 65,78%,', '2020-12-22 16:03:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_27_193926_create_jawaban_table', 2),
(4, '2019_11_27_203840_create_cek_soal_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soal_jawaban`
--

CREATE TABLE `soal_jawaban` (
  `id` bigint(20) NOT NULL,
  `tipe_id` bigint(20) DEFAULT NULL,
  `soalnya` varchar(200) NOT NULL,
  `a` varchar(200) DEFAULT NULL,
  `b` varchar(200) DEFAULT NULL,
  `jawaban_benar` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `point_a` varchar(191) DEFAULT NULL,
  `point_b` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_jawaban`
--

INSERT INTO `soal_jawaban` (`id`, `tipe_id`, `soalnya`, `a`, `b`, `jawaban_benar`, `created_at`, `updated_at`, `point_a`, `point_b`) VALUES
(1, 1, 'Apakah tinggi tiang panjat  anda untuk budidaya buahnaga 2-2,5 meter ?', 'Iya', 'Tidak', 'Iya', '2020-12-14 08:07:02', '2020-12-14 01:07:02', '0.1', '0'),
(2, 1, 'Apakah tiang panjat yang anda tanam sudah sedalam 50 cm ?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:58:25', '2020-12-03 03:00:08', '0.1', '0'),
(3, 1, 'Apakah anda sudah membuat lubang tanam ukuran 60x60x60 dengan kedalaman 25 cm?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:58:29', '2020-12-03 03:00:18', '0.1', '0'),
(4, 1, 'Apakah posisi tiang panjat sudah persis terletak ditengah-tengah lubang tanaman tersebut ?', 'Iya', 'Tidak', 'Tidak', '2020-12-06 11:58:33', '2020-12-03 03:00:32', '0.1', '0'),
(5, 1, 'Apakah jarak tiang dalam 1 baris 2,5 meter dan jarak antar baris 3 meter ?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:58:37', '2020-12-03 03:00:44', '0.1', '0'),
(6, 1, 'Apakah anda sudah melakukan pemotongan terhadap batang yang panjangnya sekitar 80cm-120cm ?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:58:43', '2020-12-03 01:06:46', '0.1', '0'),
(7, 1, 'Apakah anda sudah menambahkan dolomit atau kapur pertanian sebanyak 300 gr?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:58:48', '2020-12-03 01:03:11', '0.1', '0'),
(8, 1, 'Apakah anda sudah menyiapkan lahan untuk budidaya buah naga?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:58:53', '2020-12-03 01:08:50', '0.1', '0'),
(9, 1, 'Apakah anda sudah memilih batang yang berdiamter 8cm , keras, tua, berwarna hijau kelabu, dan sehat?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:58:57', '2020-12-03 01:05:53', '0.1', '0'),
(10, 1, 'Apakah anda sudah mencampurkan 10 kg pasir dengan tanah galian untuk menambahkan porositas tanah?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:01', '2020-12-03 01:02:03', '0.1', '0'),
(11, 2, 'Apakah bibit yang anda tanam sudah mengitari tiang panjat ?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:05', '2020-12-03 01:10:58', '0.1', '0'),
(12, 2, 'Apakah jarak antar tiang panjat dengan bibit tanaman sekitar 10 cm?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:09', '2020-12-03 01:11:43', '0.1', '0'),
(13, 2, 'Apakah anda sudah melakukan pemupukan dengan pupuk kompos/kandang yang dilakukan setiap 3 bulan sekali dengan dosis 5-10 kg perlubang tanam?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:13', '2020-12-03 01:13:23', '0.1', '0'),
(14, 2, 'Apakah pupuk yang anda gunakan mengandung Fosfor dan kalium?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:17', '2020-12-03 01:14:42', '0.1', '0'),
(15, 2, 'Apakah sudah memberi pupuk organik cair atau hormon perangsang buah?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:20', '2020-12-03 01:15:55', '0.1', '0'),
(16, 2, 'Jika anda melakukan penyiraman dengan parit drainase, apakah sudah direndam selama +- 2 jam?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:25', '2020-12-03 01:18:50', '0.1', '0'),
(17, 2, 'saat musim kering, apakah anda menyiram sebanyak 3 hari sekali?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:29', '2020-12-03 01:20:46', '0.1', '0'),
(18, 2, 'Jika anda menggunakan penyiraman demgam gembor, apakah setiap lubang tanam disiram dengan air sebanyak 4-5 liter?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:33', '2020-12-03 01:19:51', '0.1', '0'),
(19, 2, 'Apakah anda sudah melakukan pemangkasan batang pokok, pemangkasan untuk memmbentuk cabang dan pemangkasan peremajaan?', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:48', '2020-12-03 01:22:04', '0.1', '0'),
(20, 2, 'Apakah anda sudah memberikan pupuk yang mengandung banyak unsur nitrogen untuk awal pertumbuhan buah naga', 'Iya', 'Tidak', 'Iya', '2020-12-06 11:59:53', '2020-12-03 03:17:29', '0.1', '0'),
(21, 3, 'Apakah anda memanen buah naga selama 40 hari sekali?', 'Iya', 'Tidak', 'Iya', '2020-12-13 07:31:47', '2020-12-13 00:13:16', '0.2', '0'),
(22, 3, 'Apakah anda melakukan pemanenan ssat cuaca cerah dan tidak hujan?', 'Iya', 'Tidak', 'Iya', '2020-12-13 07:31:52', '2020-12-13 00:29:11', '0.2', '0'),
(23, 3, 'apakah buah naga yang anda panen memiliki kulit buah Kulit buah mengkilat dengan adanya perubahan warna dari hijau menjadi merah dan pada kedua ujung pangkal buah menjadi kering dan keriput ?', 'Iya', 'Tidak', 'Iya', '2020-12-13 07:31:57', '2020-12-13 00:21:05', '0.2', '0'),
(24, 3, 'Apakah anda sudah memanen pada pukul 06.00-09.00 atau pukul 15.00-17.00 ?', 'Iya', 'Tidak', 'Iya', '2020-12-13 07:32:01', '2020-12-13 00:22:33', '0.2', '0'),
(25, 3, 'Ketika anda sudah memanen buah naga apakah anda sudah melakukan pemotongan buah yang menempel di bagian cabang harus dilakukan dengan melihat letak atau posisi buah yang akan dipetik ?', 'Iya', 'Tidak', 'Iya', '2020-12-13 07:32:04', '2020-12-13 00:26:31', '0.2', '0'),
(26, 4, 'Apakah buah gugur sebelum matang ?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:46:20', '2020-12-22 07:46:20', '0.1', '0'),
(27, 4, 'Apakah pada bagian yang tidak terpapar cahaya matahari', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:15:26', '2020-12-22 07:01:10', '0.1', '0'),
(28, 4, 'Apakah buah kerdil?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:15:33', '2020-12-22 07:01:37', '0.1', '0'),
(29, 4, 'Apakah buah mengering?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:15:40', '2020-12-22 07:01:58', '0.1', '0'),
(30, 4, 'Apakah pada buah terdapat bercak putih atau coklat?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:15:47', '2020-12-22 07:02:17', '0.1', '0'),
(31, 4, 'Apakah bercak pada buah menjadi lekukan basah dan berubah menjadi warna orange?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:15:53', '2020-12-22 07:02:34', '0.1', '0'),
(32, 4, 'Apakah bercak pada buah dengan garis-garis melingkar berwarna hitam?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:15:59', '2020-12-22 07:02:48', '0.1', '0'),
(33, 5, 'Apakah ujung cabang produktif membusuk?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:30:53', '2020-12-22 07:25:27', '0.1', '0'),
(34, 5, 'Apakah buah membusuk kering?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:31:13', '2020-12-22 07:26:36', '0.1', '0'),
(35, 5, 'Apakah ujung cabang produktif berkerut?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:31:10', '2020-12-22 07:26:48', '0.1', '0'),
(36, 5, 'Apakah ada bintik - bintik coklat pada ujung cabang produktif ?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:31:08', '2020-12-22 07:27:01', '0.1', '0'),
(37, 6, 'Apakah bunga gugur sebelum menjadi putik?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:31:05', '2020-12-22 07:28:19', '0.1', '0'),
(38, 6, 'Apakah bunga tidak merekah?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:31:02', '2020-12-22 07:28:39', '0.1', '0'),
(39, 6, 'Apakah terdapat bintik bintik putih atau kecoklatan pada bunga?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:31:00', '2020-12-22 07:28:54', '0.1', '0'),
(40, 6, 'Apakah bunga layu?', 'Iya', 'Tidak', 'Iya', '2020-12-22 14:30:56', '2020-12-22 07:29:13', '0.1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `temp_point`
--

CREATE TABLE `temp_point` (
  `id` int(11) NOT NULL,
  `point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_point`
--

INSERT INTO `temp_point` (`id`, `point`) VALUES
(1, '0.4');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_penyakit`
--

CREATE TABLE `tipe_penyakit` (
  `id` bigint(20) NOT NULL,
  `tipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_penyakit`
--

INSERT INTO `tipe_penyakit` (`id`, `tipe`) VALUES
(4, 'Antraknosa'),
(5, 'Fusarium'),
(6, 'Solepnopsis');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_soal`
--

CREATE TABLE `tipe_soal` (
  `id` bigint(20) NOT NULL,
  `tipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_soal`
--

INSERT INTO `tipe_soal` (`id`, `tipe`) VALUES
(1, 'Pra Penanaman'),
(2, 'Penanaman'),
(3, 'Masa Panen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9844, 'admin', 'admin', 'admin', 'admin@mail.com', NULL, '$2y$10$m41nRmrSeLUhlfZHVOrowuwnTrDJg8yEqln88RrFHUfUams2Obv2m', NULL, '2019-10-16 01:25:03', '2019-10-16 01:25:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cek_penyakit`
--
ALTER TABLE `cek_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cek_soal`
--
ALTER TABLE `cek_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `soal_jawaban`
--
ALTER TABLE `soal_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_id` (`tipe_id`);

--
-- Indexes for table `temp_point`
--
ALTER TABLE `temp_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_penyakit`
--
ALTER TABLE `tipe_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_soal`
--
ALTER TABLE `tipe_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cek_penyakit`
--
ALTER TABLE `cek_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cek_soal`
--
ALTER TABLE `cek_soal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal_jawaban`
--
ALTER TABLE `soal_jawaban`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `temp_point`
--
ALTER TABLE `temp_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipe_penyakit`
--
ALTER TABLE `tipe_penyakit`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tipe_soal`
--
ALTER TABLE `tipe_soal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9845;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
