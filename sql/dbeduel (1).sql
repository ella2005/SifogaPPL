-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 11.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

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
-- Struktur dari tabel `cek_soal`
--

CREATE TABLE `cek_soal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Kesalahan membaca data untuk tabel dbeduel.cek_soal: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `dbeduel`.`cek_soal`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `nama_materi` varchar(200) NOT NULL,
  `artikel` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Kesalahan membaca data untuk tabel dbeduel.materi: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `dbeduel`.`materi`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_27_193926_create_jawaban_table', 2),
(4, '2019_11_27_203840_create_cek_soal_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_jawaban`
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
-- Dumping data untuk tabel `soal_jawaban`
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
(220, 4, 'Apakah tanaman busuk basah?', 'Iya', 'tidak', 'Iya', '2020-12-21 03:30:17', '2020-12-21 03:30:17', NULL, NULL),
(243, 4, 'Apakah buah kerdil?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:04:39', '2020-12-21 03:04:39', NULL, NULL),
(253, 4, 'Apakah buah mengering?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:05:02', '2020-12-21 03:05:02', NULL, NULL),
(295, 4, 'Apakah buah gugur sebelum matang ?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:02:41', '2020-12-21 03:02:41', NULL, NULL),
(338, 1, 'sebutkan huruf di kata pelangi', 'iyaaa', 'tidak', 'tidak', '2020-12-14 09:32:55', '2020-12-14 02:32:55', NULL, NULL),
(358, 4, 'Apakah batang busuk berwarna  kuning keemasan?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:22:18', '2020-12-21 03:22:18', NULL, NULL),
(361, 4, 'Apakah batang yang terinfeksi ditumbuhi bulu putih?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:32:02', '2020-12-21 03:32:02', NULL, NULL),
(398, 4, 'Apakah bercak pada buah menjadi lekukan basah dan berubah menjadi berwarna orange?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:07:13', '2020-12-21 03:07:13', NULL, NULL),
(407, 4, 'Apakah tanaman terlihat kusam?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:21:04', '2020-12-21 03:21:04', NULL, NULL),
(421, 4, 'Apakah batang hanya busuk disatu sisi', 'iya', 'Tidak', 'iya', '2020-12-21 03:23:08', '2020-12-21 03:23:08', NULL, NULL),
(483, 4, 'Apakah kondisi tanah terlalu lembab?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:29:33', '2020-12-21 03:29:33', NULL, NULL),
(486, 4, 'Tanaman terlihat kusam', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:17:11', '2020-12-21 03:17:11', NULL, NULL),
(529, 4, 'Apakah batang busuk awalnya seperti digigit serangga?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:28:59', '2020-12-21 03:28:59', NULL, NULL),
(549, 4, 'Apakah buah busuk pada bagian yang tidak terpapar pada sinar matahari ?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:03:24', '2020-12-21 03:03:24', NULL, NULL),
(687, 4, 'Apakah pangkal batang yang berbatasan dengan tanah membusuk?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:31:24', '2020-12-21 03:31:24', NULL, NULL),
(834, 4, 'Apakah busuk basah dengan tepi sekitar pembusukan mengering?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:27:41', '2020-12-21 03:27:41', NULL, NULL),
(872, 4, 'Apakah pada buah terdapat bercak putih atau coklat ?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:06:07', '2020-12-21 03:06:07', NULL, NULL),
(900, 4, 'Apakah kondisi tanah anda terlalu lembab?', 'iya', 'Tidak', 'iya', '2020-12-21 03:15:20', '2020-12-21 03:15:20', NULL, NULL),
(905, 4, 'Apakah Batang buah naga busuk disemua sisi ?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:16:19', '2020-12-21 03:16:19', NULL, NULL),
(908, 4, 'Apakah tanaman layu?', 'Iya', 'Tidak', 'Iya', '2020-12-21 03:29:53', '2020-12-21 03:29:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_point`
--

CREATE TABLE `temp_point` (
  `id` int(11) NOT NULL,
  `point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temp_point`
--

INSERT INTO `temp_point` (`id`, `point`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_soal`
--

CREATE TABLE `tipe_soal` (
  `id` bigint(20) NOT NULL,
  `tipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_soal`
--

INSERT INTO `tipe_soal` (`id`, `tipe`) VALUES
(1, 'Pra Penanaman'),
(2, 'Penanaman'),
(3, 'Masa Panen'),
(4, 'Penyakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9844, 'admin', 'admin', 'admin', 'admin@mail.com', NULL, '$2y$10$m41nRmrSeLUhlfZHVOrowuwnTrDJg8yEqln88RrFHUfUams2Obv2m', NULL, '2019-10-16 01:25:03', '2019-10-16 01:25:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cek_soal`
--
ALTER TABLE `cek_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `soal_jawaban`
--
ALTER TABLE `soal_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_id` (`tipe_id`);

--
-- Indeks untuk tabel `temp_point`
--
ALTER TABLE `temp_point`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_soal`
--
ALTER TABLE `tipe_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cek_soal`
--
ALTER TABLE `cek_soal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `soal_jawaban`
--
ALTER TABLE `soal_jawaban`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=945;

--
-- AUTO_INCREMENT untuk tabel `temp_point`
--
ALTER TABLE `temp_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tipe_soal`
--
ALTER TABLE `tipe_soal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9845;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `soal_jawaban`
--
ALTER TABLE `soal_jawaban`
  ADD CONSTRAINT `soal_jawaban_ibfk_1` FOREIGN KEY (`tipe_id`) REFERENCES `tipe_soal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
