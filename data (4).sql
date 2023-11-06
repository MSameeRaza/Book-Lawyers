-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 08:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lawyer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `message`, `status`, `user_id`, `lawyer_id`, `created_at`, `updated_at`) VALUES
(25, 'Mohammad Samee Raza', 'ra6767167@gmail.com', '5465464532', 'Hamza', '8u5678', 'approved', '33', '0', '2021-10-27 00:57:51', '2021-10-31 19:19:37'),
(26, 'saa', 'ra67671673@gmail.com', '5465464532', 'haroon', '234', 'cancelled', '33', '33', '2021-10-27 01:16:00', '2021-10-31 17:54:12'),
(28, 'Mohammad Samee Raza', 'ra6767167@gmail.com', '5465464532', 'Hamza', 'ds', 'approved', '33', '33', '2021-10-31 17:52:09', '2021-10-31 17:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `name`, `phone`, `speciality`, `room`, `image`, `created_at`, `updated_at`) VALUES
(40, 'Saqib', '021789442', 'divorces', '78d', 'C:\\xampp\\tmp\\php52F6.tmp', '2021-10-25 19:30:23', '2021-10-31 22:21:35'),
(41, 'haroon', '0124894532', 'kidnaping', '78', 'C:\\xampp\\tmp\\phpA1F2.tmp', '2021-10-25 19:30:43', '2021-10-25 19:30:43'),
(42, 'Ashar', '0245786533', 'criminal', '54', 'C:\\xampp\\tmp\\php1BF5.tmp', '2021-10-25 19:31:14', '2021-10-25 19:31:14'),
(43, 'Hamza', '097331324', 'relation', '89', 'C:\\xampp\\tmp\\php62E3.tmp', '2021-10-25 19:31:32', '2021-10-25 19:31:32'),
(44, 'Shahzaib', '139845454', 'affidavit', '43', 'C:\\xampp\\tmp\\phpB0C5.tmp', '2021-10-25 19:31:52', '2021-10-25 19:31:52'),
(45, 'Usama', '2156584984', 'rapecase', '98', 'C:\\xampp\\tmp\\php1E93.tmp', '2021-10-25 19:32:20', '2021-10-25 19:32:20'),
(46, 'Aisha', '94735674', 'relation', '34', 'C:\\xampp\\tmp\\php1813.tmp', '2021-10-25 19:34:30', '2021-10-25 19:34:30'),
(48, 'sad', '0124894532', 'divorce', 'sa', 'C:\\xampp\\tmp\\phpEDE1.tmp', '2021-10-25 19:43:03', '2021-10-25 19:43:03'),
(49, 'dsd', '23456', 'affidavit', '65', 'C:\\xampp\\tmp\\php6409.tmp', '2021-10-25 19:47:56', '2021-10-25 19:47:56'),
(50, 'dsd', '345345', 'kidnaping', 't34', 'C:\\xampp\\tmp\\php41C5.tmp', '2021-10-25 19:56:31', '2021-10-25 19:56:31'),
(51, 'Mohammad Samee Raza', '5465464532', 'kidnaping', '54', 'C:\\xampp\\tmp\\php93A4.tmp', '2021-10-31 18:46:13', '2021-10-31 18:46:13'),
(52, 'Mohammad Samee Raza', '5465464532', 'kidnaping', 'sa', 'C:\\xampp\\tmp\\phpA3D7.tmp', '2021-10-31 19:10:18', '2021-10-31 19:10:18'),
(53, 'Mohammad Samee Raza', '5465464532', 'divorce', 'h789', 'C:\\xampp\\tmp\\php3300.tmp', '2021-11-01 06:33:59', '2021-11-01 06:33:59'),
(54, 'dsaa', '0124894532', 'rapecase', 'rrrr', 'C:\\xampp\\tmp\\php6C8A.tmp', '2021-11-01 06:35:19', '2021-11-01 06:35:19'),
(55, 'Mohammad Samee Raza-08907', '5465464532', 'affidavit', 'dswd', 'C:\\xampp\\tmp\\php380E.tmp', '2021-11-01 06:49:18', '2021-11-01 06:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2021_10_15_020715_create_lawyers_table', 2),
(6, '2021_10_16_205119_create_appointments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ra6767167@gmail.com', '$2y$10$A4Jz3dkAHjYlRxO1u9/oLOT1f8.HXBJliYoQpm6y2LX36Gk3m4I9W', '2021-10-16 19:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `id_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `id_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(31, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$4mqJIq5uXn.a7chlnpyQveRfIIjKFuYFQ8mwu6p61nnqCSNd4jzwi', NULL, '2021-10-27 00:40:47', '2021-10-27 00:40:47'),
(32, 'Hamza1', 'hamza@gmail.com', NULL, 2, '$2y$10$4gxs2lhNFTiBE.vu2JMvqe3xlCqezYWhTfuy8VQ9VUC/FS/87SLQW', NULL, '2021-10-27 00:47:53', '2021-10-31 22:21:14'),
(33, 'Ashar1', 'ashar1@gmail.com', NULL, 0, '$2y$10$juDVTjccf3pNbh8A59C8RemgRGYO9qoxudjXXnUrlpUXE54lEOGhm', NULL, '2021-10-27 00:48:21', '2021-10-31 22:22:58'),
(34, 'kashif', 'kashif@gmail.com', NULL, 2, '$2y$10$dSGEUBJgn8N5P74UCDva6.xeJMfGVrdXg9T.Qxh6AQXyTOQAQUpES', NULL, '2021-10-27 01:18:46', '2021-10-27 01:18:46'),
(35, 'ham', 'ham@gmail.com', NULL, 2, '$2y$10$kOG1mZ7Ahu17Pr78AaicVOWitT2OUsRhnnHPtSX53blxN74FvKJbi', NULL, '2021-10-31 17:53:11', '2021-10-31 17:53:11'),
(36, 'ashar1', 'ashar12@gmail.com', NULL, 0, '$2y$10$TR2uVTqIChBTYJMn6eUgV.LWs.f8E8lzPuK4Z9IgRed7wwO3vXiT6', NULL, '2021-11-01 06:31:51', '2021-11-01 06:31:51'),
(37, 'kl', 'kk@gmail.com', NULL, 2, '$2y$10$kLMVFA4HZ83VtqeV5oX5ceQ6RP.4TTIcm7sE4ZQOMZ7gbJZB0gJQq', NULL, '2021-11-01 06:32:27', '2021-11-01 06:32:27'),
(38, 'Hamza1', 'haroon@gmail.com', NULL, 0, '$2y$10$BNn03bzGUxTafnks8sWvo.sgNtT/r0HSJLhwFHRelBjPX5/dpclyy', NULL, '2021-11-02 13:17:41', '2021-11-02 13:17:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
