-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 08:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larave_practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'technowise', 'infotechnowise@gmail.ocm', 'Balanced Rock Arches National Park Utah.jpg', 'http://infotechnowise.com', '2020-04-20 00:36:47', '2020-04-20 00:36:47'),
(2, 'infosys', 'infosys@gmail.ocm', '[wallcoo.com]_2560x1600_Widescreen_Beach_wallpaper_00415.jpg', 'http://www.infosys.com', '2020-04-20 00:37:27', '2020-04-20 00:37:27'),
(3, 'wipro', 'infowipro@gmail.com', '152282.jpg', 'http://www.wipro.com', '2020-04-20 00:38:09', '2020-04-20 00:38:09'),
(4, 'techds', 'tech@gmail.com', '[wallcoo.com]_2560x1600_Widescreen_Beach_wallpaper_00962.jpg', 'http://www.techds.com', '2020-04-20 00:39:00', '2020-04-20 00:39:00'),
(5, 'rolta', 'rolta@gmail.com', '[wallcoo.com]_2560x1600_Widescreen_Beach_wallpaper_2EP126.jpg', 'http://www.rolta.com', '2020-04-20 00:40:07', '2020-04-20 00:40:07'),
(6, 'kunj', 'kunj@gmail.com', '[wallcoo.com]_2560x1600_Widescreen_Beach_wallpaper_1EP022.jpg', 'http://infokunj.com', '2020-04-20 00:41:21', '2020-04-20 00:41:21'),
(7, 'techstub', 'info@techgmail.com', '[wallcoo.com]_2560x1600_Widescreen_Beach_wallpaper_2EP162.jpg', 'http://www.techstub.com', '2020-04-20 00:42:13', '2020-04-20 00:42:13'),
(8, 'technock', 'infotechno@gmail.com', '152287.jpg', 'http://www.technok.com', '2020-04-20 00:43:09', '2020-04-20 00:43:09'),
(9, 'rethink', 'rethink@gmail.com', 'sunset_at_Hawaii_beach_JY200_350A.jpg', 'http://www.rithink.com', '2020-04-20 00:44:04', '2020-04-20 00:44:04'),
(10, 'ds', 'ds@gmail.com', '152282.jpg', 'http://www.infods.com', '2020-04-20 00:44:41', '2020-04-20 00:44:41'),
(11, 'starline', 'infostarline@gmail.com', '26th_january_republic_day_celebration-1280x720.jpg', 'http://www.starline.com', '2020-04-20 00:46:20', '2020-04-20 00:46:20'),
(12, 'teambuilder', 'info@teambuild.com', 'amazing_morning_sunrise-1440x900.jpg', 'http://www.teambuilder.com', '2020-04-20 00:47:20', '2020-04-20 00:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `email`, `phone`, `company`, `created_at`, `updated_at`) VALUES
(1, 'john', 'doe', 'john@gmail.com', '2376347634', 5, '2020-04-20 00:48:01', '2020-04-20 00:48:01'),
(2, 'dom', 'doe', 'dome@gmail.com', '2387348745', 8, '2020-04-20 00:48:27', '2020-04-20 00:48:27'),
(3, 'shool', 'doe', 'sholl@gmail.com', '2387348734', 11, '2020-04-20 00:48:59', '2020-04-20 00:48:59'),
(4, 'aenny', 'doe', 'aenny@gmail.com', '2398349898', 2, '2020-04-20 00:49:34', '2020-04-20 00:49:34'),
(5, 'james', 'doe', 'james@gmail.com', '2398239034', 6, '2020-04-20 00:50:01', '2020-04-20 00:50:01'),
(6, 'sunny', 'shah', 'sunny@gmail.com', '2398459845', 4, '2020-04-20 00:50:33', '2020-04-20 00:50:33'),
(7, 'trump', 'doe', 'trumpdoe@gmil.co', '2390239834', 10, '2020-04-20 00:51:00', '2020-04-20 00:51:00'),
(8, 'roy', 'doe', 'roy@gmail.com', '2387348745', 12, '2020-04-20 00:51:27', '2020-04-20 00:51:27'),
(9, 'jak', 'doe', 'jak@gmail.com', '3476457634', 7, '2020-04-20 00:52:20', '2020-04-20 00:52:20'),
(10, 'omar', 'doe', 'omar@gmail.com', '2376458745', 9, '2020-04-20 00:52:49', '2020-04-20 00:52:49'),
(11, 'ket', 'doe', 'ket@gmail.com', '2345874587', 5, '2020-04-20 00:53:31', '2020-04-20 00:53:31'),
(12, 'joy', 'doe', 'joy@gmail.com', '3498459833', 5, '2020-04-20 00:54:09', '2020-04-20 00:54:09');

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
(3, '2020_04_19_141255_create_companies_table', 1),
(4, '2020_04_19_141914_create_employees_table', 1);

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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$4dIO79CaK8mBI.P74xdwBO8JwHdsKyrm/lFO90K1zWtGceQ59Vxhm', NULL, '2020-04-20 00:32:22', '2020-04-20 00:32:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
