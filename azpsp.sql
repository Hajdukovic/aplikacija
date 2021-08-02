-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 05:02 PM
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `control_date` date NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `controls`
--

INSERT INTO `controls` (`id`, `name`, `control_date`, `description`, `status`, `patient_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, 'Praćenje šećera u krvi', '2021-07-01', 'Šećer izmjeren ujutro u 8h, stanje uredno 4,5ph', 'Stanje uredno', 1, 1, '2021-07-04 22:00:00', '2021-08-02 12:54:20'),
(2, 'Krvni tlak', '2021-08-02', 'Praćenje stanja krvnog  tlaka u 8h ujutro iznosi 120/70.', 'Stanje tlaka malo iznad prosiječnog. Tijekom dana pripaziti te jesti više puta po malo.', 2, 1, '2021-07-04 22:00:00', '2021-08-02 12:57:01'),
(3, 'Praćenje šećera u krvi', '2021-07-03', 'Šećer mjeren u 9h , iznosi 8,2 , doručak 2 jabuke', NULL, 1, 1, '2021-06-30 22:00:00', '2021-07-20 05:52:12'),
(4, 'Krvne pretrage', '2021-07-04', 'Tokom pretraga primjećena je bakterija Facilijus Gebardus i smatra se da je vrlo opasna za pacijenta u stanju u kojem se trenutno nalazi.', 'Pacijent upućen na zarazni odijel Osijek.', 4, 1, '2021-07-12 08:50:36', '2021-08-02 12:58:37'),
(5, 'Krvne pretrage', '2021-07-05', 'Pregledom rezultata pretrage krvi nisu primjećene nikakve abnormalnosti.', NULL, 3, 1, '2021-07-08 08:56:04', '2021-07-20 08:56:04'),
(6, 'Praćenje šećera u krvi', '2021-08-06', 'Kontrola secera provedena u 10:00, mjerenje prikazalo rezultat: 7,2 . Potrebno daljnje praćenje šećera tokom dana.', NULL, 1, 1, '2021-07-22 09:14:49', '2021-07-22 09:14:49'),
(7, 'Praćenje šećera u krvi', '2021-07-07', 'Šećer izmjeren nakon ručka u 13:00 iznosi 6,4.', 'Šećer malo iznad prosijeka, pripaziti tokom dana na daljnju prehranu.', 1, 1, '2021-07-22 12:43:37', '2021-08-02 13:00:08'),
(8, 'Krvni tlak', '2021-07-08', 'Osjećaj malaksalosti popraćen visokim krvnim tlakom koji je izmjeren  16:00 iznosi 130/80', NULL, 7, 1, '2021-07-22 12:44:52', '2021-07-22 12:44:52'),
(9, 'Praćenje šećera u krvi', '2021-07-09', 'Šećer mjeren u 19:00 iznosi 5,4', NULL, 1, 1, '2021-07-22 13:03:35', '2021-07-22 13:03:35'),
(10, 'Praćenje šećera u krvi', '2021-08-10', 'Šećer izmjeren u 13:00 iznosi 7,4 jednostavan obijed tijekom ručka: riba i povrće', NULL, 1, 1, '2021-07-22 13:09:06', '2021-07-22 13:09:06'),
(11, 'Krvni tlak', '2021-07-11', 'Praćenje krvnog tlaka  tokom dana nije prikazalo nikakvih zdravstvenih problema.', NULL, 6, 1, '2021-07-22 13:11:00', '2021-07-22 13:11:00'),
(12, 'Prekomjerna težina', '2021-07-12', 'Osoba zbog prekomjerne težina ima srčanih i drugih zdravstvenih problema. Potrebno praćenje i stroga dijeta.', NULL, 8, 1, '2021-07-22 13:24:37', '2021-07-22 13:24:37'),
(13, 'Praćenje šećera u krvi', '2021-07-13', 'Naručena godišnja kotrola zbog praćenja šećera.', 'Nakon kontrole pacijent ima uredne nalaze i traži se \r\nnastavak daljenjeg praćenja šećera.', 1, 1, '2021-07-23 11:02:31', '2021-08-02 13:01:09'),
(14, 'Krvni tlak', '2021-07-21', 'Mjerenje krvog tlaka tijekom kontrole iznos 120/50', NULL, 5, 1, '2021-07-23 11:10:13', '2021-07-23 11:10:13'),
(15, 'Krvne pretrage', '2021-08-27', 'Kontrola nakon vađenja krvi. Pregled rezultata.', NULL, 6, 1, '2021-07-23 11:22:42', '2021-07-23 11:22:42'),
(16, 'Praćenje šećera u krvi', '2021-07-29', 'Naručena godišnja kontrola radi praćenja šećera u krvi.', NULL, 1, 1, '2021-07-23 12:06:23', '2021-07-23 12:06:23'),
(17, 'Krvni tlak', '2021-07-23', 'Mjerenje krvog tlaka mjereno u 17:00 iznosi 130/70. Potrebno daljnje praćenje tokom dana.', NULL, 5, 1, '2021-07-23 12:10:56', '2021-07-23 12:10:56');

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
(1, 'Hrvoje', 'Hajduković', '2021-07-02', 'V nazora 45', 2, NULL, 'musko', 'hrvoje@ferit.hr', '123432', '2021-07-05 14:15:50', '2021-07-05 14:15:50'),
(2, 'Tihomir', 'Hajduković', '2021-07-02', 'V nazora 45', 2, NULL, 'musko', 'tihomir@ferit.hr', '43534', '2021-07-05 15:58:18', '2021-07-05 15:58:18');

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
(2, 'Osijek', '31000', NULL, NULL),
(3, 'Belišće', '31551', NULL, NULL),
(4, 'Bjelovar', '43000', NULL, NULL),
(5, 'Imotski', '21260', NULL, NULL),
(6, 'Jastrebarsko', '10450', NULL, NULL),
(7, 'Karlovac', '47000', NULL, NULL),
(8, 'Kaštel Gomilica', '21213', NULL, NULL),
(9, 'Knin', '22300', NULL, NULL),
(10, 'Koprivnica', '48000', NULL, NULL),
(11, 'Kotoriba', '40329', NULL, NULL),
(12, 'Krapina', '49000', NULL, NULL),
(13, 'Križišće', '51241', NULL, NULL),
(14, 'Kutina', '44320', NULL, NULL),
(15, 'Fažana', '52212', NULL, NULL),
(16, 'Gospić', '53000', NULL, NULL),
(17, 'Hrvatska Kostajnica', '44430', NULL, NULL),
(18, 'Umag', '52470', NULL, NULL),
(19, 'Viljevo', '31531', NULL, NULL),
(20, 'Županja', '32270', NULL, NULL),
(21, 'Zmijavci', '21266', NULL, NULL);

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
(1, 'Zvonimir', 'Hajduković', '2021-07-02', 'Vldimira Nazora 45', 2, 1, 'M', 'zvonimir@ferit.hr', '09812534323', '2021-07-05 14:16:07', '2021-07-23 06:42:44'),
(2, 'Domagoj', 'Hajduković', '2021-07-02', 'Vldimira Nazora 45', 1, 1, 'M', 'domagoj@ferit.hr', '0312542654', '2021-07-05 14:20:46', '2021-07-23 06:52:54'),
(3, 'Tihomir', 'Hajduković', '2021-07-02', 'Vldimira Nazora 45', 2, 1, 'M', 'tihomir@ferit.hr', '43534', '2021-07-20 08:48:43', '2021-07-20 08:48:43'),
(4, 'Marko', 'Marić', '1976-01-12', 'Matije Gupca 56', 1, 2, 'M', 'marko@ferit.hr', '56546256', '2021-07-20 08:49:24', '2021-07-23 06:52:42'),
(5, 'Ivan', 'Premec', '1996-02-16', 'Petra Svačića 12', 2, 1, 'M', 'ivan@ferit.hr', '097745363', '2021-07-20 08:51:23', '2021-07-20 08:51:23'),
(6, 'Ana', 'Anić', '1967-05-04', 'K. A. Stepinca 4', 2, 1, 'Ž', 'ana@ferit.hr', '7564673', '2021-07-20 08:51:56', '2021-07-20 08:51:56'),
(7, 'Ivo', 'Ivić', '1992-02-12', 'Matije Gupca 56', 2, 1, 'M', 'ivo@ferit.hr', '0912351232', '2021-07-22 09:01:29', '2021-07-22 09:01:29'),
(8, 'Zarko', 'Zarić', '1912-12-12', 'Matije Gupca 56', 2, 1, 'M', 'zarko@ferit.hr', '09845425423', '2021-07-22 09:06:03', '2021-07-22 09:06:03'),
(9, 'Pero', 'Perić', '1976-01-31', 'Petra Svačića 122', 1, 1, 'M', 'pero@ofir.hr', '01283354853', '2021-07-22 09:08:36', '2021-07-22 09:08:36'),
(10, 'Tomislav', 'Hajduković', '1992-09-09', 'Vldimira Nazora 45', 2, 2, 'M', 'tomislav@ferit.hr', '0942344524', '2021-07-22 09:09:27', '2021-07-22 09:09:27'),
(11, 'Lana', 'Lulić', '1965-06-12', 'Luke Lulića 45', 2, 2, 'Ž', 'lana@ferit.hr', '098213432', '2021-07-22 12:30:17', '2021-07-22 12:30:17');

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
(1, 'Zvonimir Hajduković', 'zvonimir@ferit.hr', NULL, '$2y$10$xealp0R8ttxQBJnjpDFxaOi4xxhNotgT68ezParLRL4bXwY.YrBzm', 1, NULL, '2021-07-05 14:12:58', '2021-07-05 14:12:58'),
(2, 'Hrvoje Hajduković', 'hrvoje@ferit.hr', NULL, '$2y$10$7F1M/JVodXAkVs64pWD44uPGTwKfLKgMozk6TznloQBScs..Xvlii', 0, 'hZ19UNdFVvCz5Tzyy1sxYSe75vjt50uqn3CguYZLMIV5pTZkwYTNscy1bc2Z', '2021-07-05 14:13:23', '2021-07-05 14:13:23'),
(3, 'Domagoj Hajduković', 'domagoj@ferit.hr', NULL, '$2y$10$.gDkAlIAjyB0MGJ2B9xWdO6QM/U22pJq98GWEL8rolejw.ulsc1Lq', 1, NULL, '2021-07-05 14:21:00', '2021-07-05 14:21:00'),
(4, 'Tihomir Hajduković', 'tihomir@ferit.hr', NULL, '$2y$10$4AZx.8sPlY.dSreImTXXLuTR3ydNpdzJr7G8msoNIMlJy6oq0krfK', 0, NULL, '2021-07-05 15:53:42', '2021-07-05 15:53:42'),
(5, 'Sanja Hajduković', 'sanja@ferit.hr', NULL, '$2y$10$2mgFC9y0FRHgRSqMhOdG/.u0Dt.zGvSVsRACyYi/jjzvcKE3nYt4u', 2, NULL, '2021-07-05 16:01:16', '2021-07-05 16:01:16');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
