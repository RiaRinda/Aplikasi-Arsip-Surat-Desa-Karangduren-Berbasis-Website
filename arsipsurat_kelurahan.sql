-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2025 at 04:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipsurat_kelurahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` bigint UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_file_arsip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_arsip` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `nomor`, `id_kategori`, `judul`, `lokasi_file_arsip`, `waktu_arsip`, `created_at`, `updated_at`) VALUES
(2, '2025/PGU/KDR/01', 3, 'Nota Dinas Manusuk Sima 2025', 'arsip/YWG9mRFfIbmWJXRHwa4aeyuVKON9NWAUkXy2FvMK.pdf', '2025-09-13 14:01:59', '2025-09-13 14:01:59', '2025-09-13 14:14:19'),
(3, '2025/PGU/KDR/02', 4, 'Pemberitahuan Rapat Dinas Parpora 2025', 'arsip/aU2YHbZZVzAPYVukGgwLSXTi6hIPCCfajD80BbZY.pdf', '2025-09-13 14:12:49', '2025-09-13 14:12:49', '2025-09-13 14:14:33'),
(4, '2025/PGU/KDR/03', 3, 'Nota Dinas Manusuk Sima 2025', 'arsip/WSLOchl7X1vyEmrhFW3nsKBU4XzlMAEtp74hvC08.pdf', '2025-09-13 14:14:59', '2025-09-13 14:14:59', '2025-09-13 14:14:59'),
(5, '2025/PGU/KDR/04', 2, 'Surat Pengumuman Workshop Interpreneur 2025', 'arsip/ORHon5S7IIRcAercDBEkJluAAidrkhuIuxndIP0o.pdf', '2025-09-13 14:15:51', '2025-09-13 14:15:51', '2025-09-13 14:15:51'),
(6, '2025/PGU/KDR/05', 1, 'Surat Undangan DDM Polinema Kediri 2025', 'arsip/GmK18HJss9oBFOu2FM4rMJScShyMGNFnkMB9alDh.pdf', '2025-09-13 14:16:26', '2025-09-13 14:16:26', '2025-09-13 14:16:26'),
(7, '2025/PGU/KDR/06', 3, 'Nota Dinas PUPR 2025', 'arsip/APqNeLLXiD87d6B6hmsTPNTYuBi1Q7QsF6yhpcBT.pdf', '2025-09-13 14:17:03', '2025-09-13 14:17:03', '2025-09-13 14:17:03'),
(8, '2025/PGU/KDR/07', 4, 'Surat Pemberitahuan Rapat Dinas Manusuk Sima 2025', 'arsip/PTDlbXy4TVhaV6hQkixIjXAOipFL0Fj9W9U11l3f.pdf', '2025-09-13 14:17:30', '2025-09-13 14:17:30', '2025-09-13 14:17:30'),
(9, '2025/PGU/KDR/08', 4, 'Surat Pemberitahuan Organisasi 2025', 'arsip/jjLGQGlIlbvZYZl0mCgwS8V03ka5VIZSA1QEjMs1.pdf', '2025-09-13 14:18:08', '2025-09-13 14:18:08', '2025-09-13 14:18:08'),
(10, '2025/PGU/KDR/09', 4, 'Surat Pemberitahuan Kepala OPD 2025', 'arsip/YKkPtW1TkapCTI8r74RqVDlrAEuk8E5oGK8pAY10.pdf', '2025-09-13 14:19:02', '2025-09-13 14:19:02', '2025-09-13 14:19:02'),
(11, '2025/PGU/KDR/10', 3, 'Nota Dinas 2025', 'arsip/UP5UCey0vWaIxZ7WPMgFGM9vWJtPRFlnhX1Xsy4s.pdf', '2025-09-13 14:19:32', '2025-09-13 14:19:33', '2025-09-13 14:19:33'),
(12, '2025/PGU/KDR/11', 4, 'Surat Pemberitahuan Workshop Digital Interpreneur 2024', 'arsip/ZH9hJk7SupF9rEd2RSGrfO5T4eLUDAeAOB15qeoB.pdf', '2025-09-13 14:20:33', '2025-09-13 14:20:33', '2025-09-13 14:20:33'),
(13, '2025/PGU/KDR/12', 4, 'Surat Pemberitahuan Workshop Digital Interpreneur 2023', 'arsip/0wkIXz7ZVymaYEchvCGZT8eHLvVXPROeBsK3KLBg.pdf', '2025-09-14 02:55:55', '2025-09-14 02:55:55', '2025-09-14 02:55:55'),
(14, '2025/PGU/KDR/13', 1, 'Surat Rapat Dinas Luar Kota Kediri 2025', 'arsip/rU4vFNvk1brHREM1qFquEtO8jzpeVmcLKYg2sEZe.pdf', '2025-09-14 03:00:11', '2025-09-14 03:00:11', '2025-09-14 03:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Undangan', 'Kategori ini digunakan untuk surat yang sifatnya berupa undangan resmi kepada pihak tertentu untuk hadir dalam kegiatan, rapat, atau acara tertentu.', '2025-09-13 05:38:34', '2025-09-13 05:38:34'),
(2, 'Pengumuman', 'Kategori ini digunakan untuk surat yang sifatnya berupa pengumuman resmi kepada masyarakat, karyawan, atau pihak terkait mengenai suatu hal tertentu.', '2025-09-13 05:47:29', '2025-09-13 05:47:29'),
(3, 'Nota Dinas', 'Kategori ini digunakan untuk menyampaikan informasi, instruksi, atau laporan singkat yang bersifat kedinasan.', '2025-09-13 05:48:20', '2025-09-13 05:48:20'),
(4, 'Pemberitahuan', 'Kategori ini digunakan untuk surat yang sifatnya berupa pemberitahuan atau memberikan informasi atau kabar secara langsung kepada pihak tertentu agar diketahui dan ditindaklanjuti.', '2025-09-13 05:49:47', '2025-09-14 04:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_13_045724_buat_tabel_kategori', 1),
(5, '2025_09_13_045736_buat_tabel__arsip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('B3rGXNjHZNayGcIUgaqQlLUW1ZzlmjzCb0Er0C58', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGVzdjN0WGs4OFp3QXprcWNlSjViZWFucjBqMWJWOElOZmZ3WFFiZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757818508),
('rrKpX98uHaDDrqfyKRfpFtAuDDvoyGNoSry0cCiE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGprU2I1YVhqWVRzRHZkbEdkRzZGbW1mUmRnMkxQa2hkM3lGRTZ2RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnNpcCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757818509),
('wlwrfOB0EfxyHlx535Z3cY1RFQdCzYxr7CPt4Jbz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzlVNjdUTW5aN0ZUY1liQ3dUbXBrd3B1Z242S0NPR0VhbDJhaHRxeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rYXRlZ29yaSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757823571);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arsip_id_kategori_foreign` (`id_kategori`),
  ADD KEY `arsip_nomor_index` (`nomor`),
  ADD KEY `arsip_judul_index` (`judul`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_nama_kategori_unique` (`nama_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
