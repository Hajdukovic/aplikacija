-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 12:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azpsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `controls`
--

CREATE TABLE `controls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `controls`
--

INSERT INTO `controls` (`id`, `name`, `description`, `patient_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, 'Pracenje secera', 'Secer  mjeren ujutro u 8h, stanje uredno 4,5ph', 1, 1, '2021-07-04 22:00:00', '2021-07-05 14:19:39'),
(2, 'Krvni tlak', 'Praćenje stanja krvnog  tlaka u 8h ujutro iznosi 120/70.', 2, 1, '2021-07-04 22:00:00', '2021-07-05 14:21:53'),
(3, 'Pracenje secera', 'Secer mjeren u 9h , iznosi 8,2 , doručak 2 jabuke', 1, 1, '2021-06-30 22:00:00', '2021-07-20 05:52:12'),
(4, 'Pretrage krvi', 'Tokom pretraga primjećena je bakterija Facilijus Getardus i smatra se da je vrlo opasna za pacijenta u stanju u kojem se trenutno nalazi.', 4, 1, '2021-07-12 08:50:36', '2021-07-20 08:50:36'),
(5, 'Krvne pretrage', 'Pregledom rezultata pretrage krvi nisu primjećene nikakve abnormalnosti.', 3, 1, '2021-07-08 08:56:04', '2021-07-20 08:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `surname`, `birth_date`, `address`, `location_id`, `patient_id`, `gender`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Hrvoje', 'Hajdukovic', '2021-07-02', 'V nazora 45', 2, NULL, 'musko', 'hrvoje@ferit.hr', '123432', '2021-07-05 14:15:50', '2021-07-05 14:15:50'),
(2, 'Tihomir', 'Hajdukovic', '2021-07-02', 'V nazora 45', 2, NULL, 'musko', 'tihomir@ferit.hr', '43534', '2021-07-05 15:58:18', '2021-07-05 15:58:18');

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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'Zagreb', '10000', NULL, NULL),
(2, 'Osijek', '31000', NULL, NULL);

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
(4, '2021_07_05_090129_create_patients_table', 1),
(5, '2021_07_05_090143_create_doctors_table', 1),
(6, '2021_07_05_090159_create_controls_table', 1),
(7, '2021_07_05_090233_create_locations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `surname`, `birth_date`, `address`, `location_id`, `doctor_id`, `gender`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Zvonimir', 'Hajdukovic', '2021-07-02', 'V nazora 45', 1, 1, 'musko', 'zvonimir@ferit.hr', '67354', '2021-07-05 14:16:07', '2021-07-05 14:16:07'),
(2, 'Domagoj', 'Hajdukovic', '2021-07-02', 'V nazora 45', 1, 1, 'musko', 'domagoj@ferit.hr', '123123', '2021-07-05 14:20:46', '2021-07-05 14:20:46'),
(3, 'Tihomir', 'Hajdukovic', '2021-07-02', 'V nazora 45', 2, 1, 'musko', 'tihomir1@ferit.hr', '43534', '2021-07-20 08:48:43', '2021-07-20 08:48:43'),
(4, 'Marko', 'Maric', '1976-01-12', 'Matije Gupca 56', 1, 1, 'musko', 'marko@ferit.hr', '56546256', '2021-07-20 08:49:24', '2021-07-20 08:49:24'),
(5, 'Ivan', 'Premec', '1996-02-16', 'Petra Svačića 12', 2, 1, 'musko', 'ivan@ferit.hr', '097745363', '2021-07-20 08:51:23', '2021-07-20 08:51:23'),
(6, 'Ana', 'Anic', '1967-05-04', 'K. A. Stepinca 4', 2, 1, 'zensko', 'ana@ferit.hr', '7564673', '2021-07-20 08:51:56', '2021-07-20 08:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zvonimir', 'zvonimir@ferit.hr', NULL, '$2y$10$xealp0R8ttxQBJnjpDFxaOi4xxhNotgT68ezParLRL4bXwY.YrBzm', 1, NULL, '2021-07-05 14:12:58', '2021-07-05 14:12:58'),
(2, 'Hrvoje', 'hrvoje@ferit.hr', NULL, '$2y$10$7F1M/JVodXAkVs64pWD44uPGTwKfLKgMozk6TznloQBScs..Xvlii', 0, 'kQhcEx4EqGIpFf07AmfL5w8nMTjWcwsourXUqan9JvDFyVa8Lbqp1EW8DOnC', '2021-07-05 14:13:23', '2021-07-05 14:13:23'),
(3, 'Domagoj', 'domagoj@ferit.hr', NULL, '$2y$10$.gDkAlIAjyB0MGJ2B9xWdO6QM/U22pJq98GWEL8rolejw.ulsc1Lq', 1, NULL, '2021-07-05 14:21:00', '2021-07-05 14:21:00'),
(4, 'Tihomir', 'tihomir@ferit.hr', NULL, '$2y$10$4AZx.8sPlY.dSreImTXXLuTR3ydNpdzJr7G8msoNIMlJy6oq0krfK', 0, NULL, '2021-07-05 15:53:42', '2021-07-05 15:53:42'),
(5, 'Sanja', 'sanja@ferit.hr', NULL, '$2y$10$2mgFC9y0FRHgRSqMhOdG/.u0Dt.zGvSVsRACyYi/jjzvcKE3nYt4u', 2, NULL, '2021-07-05 16:01:16', '2021-07-05 16:01:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controls`
--
ALTER TABLE `controls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `controls_patient_id_index` (`patient_id`),
  ADD KEY `controls_doctor_id_index` (`doctor_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD UNIQUE KEY `doctors_phone_unique` (`phone`),
  ADD KEY `doctors_location_id_index` (`location_id`),
  ADD KEY `doctors_patient_id_index` (`patient_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`),
  ADD UNIQUE KEY `patients_phone_unique` (`phone`),
  ADD KEY `patients_location_id_index` (`location_id`),
  ADD KEY `patients_doctor_id_index` (`doctor_id`);

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
-- AUTO_INCREMENT for table `controls`
--
ALTER TABLE `controls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
