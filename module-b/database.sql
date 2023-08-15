-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 15, 2023 at 02:46 PM
-- Server version: 11.0.3-MariaDB-1:11.0.3+maria~ubu2204
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

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
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `created_at`, `updated_at`, `name`, `price`, `restaurant_id`) VALUES
(1, '2023-08-15 14:30:08', '2023-08-15 14:30:08', 'adf', 123.00, NULL),
(2, '2023-08-15 14:30:33', '2023-08-15 14:30:33', 'asdf', 123.00, NULL),
(3, '2023-08-15 14:30:43', '2023-08-15 14:30:43', 'adsf', 123.00, NULL),
(4, '2023-08-15 14:31:30', '2023-08-15 14:31:30', 'asdf', 123.00, NULL),
(5, '2023-08-15 14:31:54', '2023-08-15 14:31:54', 'asdf', 123.00, NULL),
(6, '2023-08-15 14:32:28', '2023-08-15 14:32:28', 'adsf', 123.00, 16),
(7, '2023-08-15 14:44:12', '2023-08-15 14:44:12', 'test123', 123.00, 16);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_15_114824_create_restaurants_table', 1),
(6, '2023_08_15_115159_create_menu_items_table', 1),
(7, '2023_08_15_115203_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `location`, `cuisine`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Szép Étterem', 'Budapest', 'Hungarian', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(2, 'La Piața', 'Bucharest', 'Romanian', 4, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(3, 'Gospoda Krakowska', 'Warsaw', 'Polish', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(4, 'Fisherman\'s Hut', 'Budapest', 'Seafood', 4, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(5, 'Casa del Gusto', 'Bucharest', 'Italian', 4, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(6, 'Kék Duna Étterem', 'Budapest', 'Hungarian', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(7, 'Brânza și Mămăligă', 'Cluj-Napoca', 'Romanian', 4, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(8, 'Czerwona Karczma', 'Krakow', 'Polish', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(9, 'Móló Rózsa Étterem', 'Budapest', 'Seafood', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(10, 'Trattoria Bella', 'Varna', 'Italian', 4, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(11, 'Paradicsom Étterem', 'Szeged', 'Hungarian', 4, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(12, 'Sarmale Bistro', 'Timisoara', 'Romanian', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(13, 'Smaczne Pierogi', 'Wroclaw', 'Polish', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(14, 'Halász Fogadó', 'Székesfehérvár', 'Seafood', 4, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(15, 'Vivace Ristorante', 'Bucharest', 'Italian', 5, '2023-08-15 14:19:36', '2023-08-15 14:19:36'),
(16, 'asdfasdf', 'asdfa', 'asdfasdf', 0, '2023-08-15 14:21:49', '2023-08-15 14:21:49'),
(17, 'Szép Étterem', 'Budapest', 'Hungarian', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(18, 'La Piața', 'Bucharest', 'Romanian', 4, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(19, 'Gospoda Krakowska', 'Warsaw', 'Polish', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(20, 'Fisherman\'s Hut', 'Budapest', 'Seafood', 4, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(21, 'Casa del Gusto', 'Bucharest', 'Italian', 4, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(22, 'Kék Duna Étterem', 'Budapest', 'Hungarian', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(23, 'Brânza și Mămăligă', 'Cluj-Napoca', 'Romanian', 4, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(24, 'Czerwona Karczma', 'Krakow', 'Polish', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(25, 'Móló Rózsa Étterem', 'Budapest', 'Seafood', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(26, 'Trattoria Bella', 'Varna', 'Italian', 4, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(27, 'Paradicsom Étterem', 'Szeged', 'Hungarian', 4, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(28, 'Sarmale Bistro', 'Timisoara', 'Romanian', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(29, 'Smaczne Pierogi', 'Wroclaw', 'Polish', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(30, 'Halász Fogadó', 'Székesfehérvár', 'Seafood', 4, '2023-08-15 14:44:40', '2023-08-15 14:44:40'),
(31, 'Vivace Ristorante', 'Bucharest', 'Italian', 5, '2023-08-15 14:44:40', '2023-08-15 14:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `role` varchar(255) NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `restaurant_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ferenc.kis@sze.hu', 'restaurantAdmin', 1, 'Ferenc Kis  ', '2023-08-15 14:19:32', '$2y$10$Eu/ik7yCbRv5IGxdaN7OLOkUHxXYmXBQUjsMEmGSqvr91/4s/TtQW', 'tpeMwSowXl', '2023-08-15 14:19:32', '2023-08-15 14:19:32'),
(2, 'laszlo.nagy@dineeasy.com ', 'dineEasyAdmin', NULL, 'Laszlo Nagy', '2023-08-15 14:19:32', '$2y$10$Nr6ynFnaOI0E2VpXpMAjc.TuOtjMxzUZowF6BAqSFEFTELfimZVMS', 'faWpNfMVnF', '2023-08-15 14:19:33', '2023-08-15 14:19:33'),
(3, 'asdfasdf', 'restaurantAdmin', 16, 'asdf@gmail.com', '2023-08-15 14:21:49', '$2y$10$opSSvLy1ombAyPT.54lVn.hyodu51RJhJ6Sdsex5o2yiGDOg0ZRLi', 'kyweP10G1Q', '2023-08-15 14:21:49', '2023-08-15 14:21:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
