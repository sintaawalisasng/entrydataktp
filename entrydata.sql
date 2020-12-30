-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2020 pada 09.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entrydata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataktp`
--

CREATE TABLE `dataktp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kabkota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dataktp`
--

INSERT INTO `dataktp` (`id`, `created_at`, `updated_at`, `nama_provinsi`, `nama_kabkota`, `NIK`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`) VALUES
(3, '2020-12-29 19:58:02', '2020-12-29 21:03:09', 'Sumatera Utara', 'Tebing Tinggi', '00345', 'Humaira Sirait', 'Sei Silau', '1998-01-09', 'P', 'Jl. Rumah Susun', 'Islam', 'Belum Menikah', 'DJ'),
(4, '2020-12-29 20:02:08', '2020-12-29 20:02:08', 'Sumatera Utara', 'Tanjung Balai', '03488', 'Ridho Alhafiz', 'Pasar Baru', '1999-03-09', 'L', 'Jl. Suka Makmur Tanjung Balai Selatan', 'Katolik', 'Menikah', 'Asisten Kebun'),
(5, '2020-12-29 20:12:27', '2020-12-29 20:12:27', 'Sumatera Utara', 'Humbang Hasundutan', '012238', 'Aryo Dilan', 'Samosir', '1992-04-10', 'L', 'Jl. Panglima Denai No. 70', 'Kristen', 'Belum Menikah', 'Manager'),
(6, '2020-12-29 20:51:07', '2020-12-29 20:51:19', 'Sumatera Utara', 'Asahan', '01455', 'Riandani', 'Mutiara', '1997-04-10', 'L', 'Jl. Mutiara No. 45, Kec. Medan Barat', 'Budha', 'Menikah', 'Aktor'),
(7, '2020-12-30 00:39:57', '2020-12-30 00:40:14', 'Sumatera Utara', 'Binjai', '01233', 'Ummi Nuraini', 'Namo Sira Sira', '1992-05-01', 'P', 'Jl. Aceh-Medan KM 34', 'Katolik', 'Belum Menikah', 'Freelancer'),
(8, '2020-12-30 00:43:14', '2020-12-30 00:43:14', 'Bikini Bottom', 'Konoha', '00128', 'Spongebob', 'Rumah Nanas', '2002-08-09', 'L', 'Jl. Lintas Bikini Bottom', 'Atheis', 'Belum Menikah', 'Chef'),
(9, '2020-12-30 00:58:26', '2020-12-30 00:58:26', 'Jawa Barat', 'Bandung', '01992', 'Reyhan Maditra', 'Bandung', '1991-02-09', 'L', 'Jl. Bumi Manusia No. 99', 'Islam', 'Menikah', 'Dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_30_010654_create_dataktp_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sinta Awalisa Sinaga', 'sintaawalisa@gmail.com', NULL, '$2y$10$s06yw.v7tAnL1XjJfFfMKO5P7c3cRyMbbCNSOjhQ.1fysChFTzC3O', NULL, '2020-12-29 21:26:07', '2020-12-29 21:26:07'),
(2, 'Naruto', 'naruto29@gmail.com', NULL, '$2y$10$GcXpHVDRIVwx5vsXR716Pu8aa20QG2A57h2LgqQD9u5SoiMmlQVLO', NULL, '2020-12-30 00:41:02', '2020-12-30 00:41:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataktp`
--
ALTER TABLE `dataktp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataktp`
--
ALTER TABLE `dataktp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
