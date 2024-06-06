-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 04:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambil`
--

CREATE TABLE `ambil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengambil` varchar(255) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ambil`
--

INSERT INTO `ambil` (`id`, `pengambil`, `id_barang`, `barang`, `nim`, `telepon`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Sthevani', '2', 'Mouse Logitech', '11421010', '0895626467202', '2024-06-06', '2024-06-05 19:01:09', '2024-06-05 19:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang` varchar(255) NOT NULL,
  `penemu` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `barang`, `penemu`, `telepon`, `lokasi`, `deskripsi`, `kategori`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'Vani', '0895626467202', 'GD 921', 'Berwarna hitam, logo android', 'elektronik', 'itdel.jpg', 'Mahasiswa', '2024-06-05 18:54:18', '2024-06-05 18:54:18'),
(2, 'Mouse Logitech', 'Vani', '0895626467202', 'Kantin Lama', 'Hitam, merk Logitech', 'elektronik', 'HAMInterFeed.png', 'Mahasiswa', '2024-06-05 19:00:28', '2024-06-05 19:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `forumhilang`
--

CREATE TABLE `forumhilang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang` varchar(255) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forumhilang`
--

INSERT INTO `forumhilang` (`id`, `barang`, `pemilik`, `telepon`, `lokasi`, `deskripsi`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'HP Poco', 'sthevani', '0895626467202', 'GD 5', 'Berwarna Biru, case doraemon', 'elektronik', 'Authentic-signin1.png', '2024-06-05 18:53:12', '2024-06-05 18:53:12'),
(2, 'Dompet', 'sthevani', '0895626467202', 'Kantin Baru IT Del', 'berwarna coklat, berisi ktp atas nama Sthevani Manurung', 'Barang Berharga', 'itdel.jpg', '2024-06-05 18:56:19', '2024-06-05 18:56:19'),
(3, 'Laptop HP', 'sthevani', '0895626467202', 'Asrama Kana', 'Warna Hitam Striker GenerationGirl', 'elektronik', 'splash.png', '2024-06-05 18:59:07', '2024-06-05 18:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_13_151840_create_forum_table', 1),
(6, '2022_05_13_163954_create_forumhilang_table', 1),
(7, '2022_05_18_181734_create_ambil_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('a','u') NOT NULL DEFAULT 'u',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nomor`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Laporkan Saja', 'laporkansaja@gmail.com', '082246821633', '$2y$10$aizfeNezjPKxJgyOVzMAe.vA/kDP3dpqOAzI4IsmCZhnvxvwkE9sS', 'a', NULL, '2024-06-05 18:49:25', '2024-06-05 18:49:25'),
(2, 'Sthevani', 'sthevani@gmail.com', '0895626467202', '$2y$10$JcPfHycpTTP8DXX.KkWvqOuHyWsH6qlCV/s9wp5my8cRPTg8WveM.', 'a', NULL, '2024-06-05 18:51:43', '2024-06-05 18:51:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil`
--
ALTER TABLE `ambil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forumhilang`
--
ALTER TABLE `forumhilang`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `ambil`
--
ALTER TABLE `ambil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forumhilang`
--
ALTER TABLE `forumhilang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
