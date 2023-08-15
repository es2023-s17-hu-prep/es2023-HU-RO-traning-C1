-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 15, 2023 at 02:04 AM
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
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `database`;

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `restaurant_id`, `dish_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'fdas', 10.99, '2023-08-15 01:00:11', '2023-08-15 01:22:22'),
(2, 1, 'Chicken Paprikash', 11.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(3, 2, 'Mămăligă cu Brânză', 8.49, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(4, 2, 'Sarmale', 12.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(5, 3, 'Placki Ziemniaczane', 14.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(6, 3, 'Bigos', 9.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(7, 4, 'Fresh Grilled Fish', 17.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(8, 4, 'Octopus Salad', 13.49, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(9, 5, 'Pizza Margherita', 10.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(10, 5, 'Tiramisu', 6.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(11, 6, 'Beef Stew', 12.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(12, 6, 'Dobos Torte', 8.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(13, 7, 'Ciorbă de Burtă', 9.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(14, 7, 'Mămăligă cu Sarmale', 15.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(15, 8, 'Pierogi Ruskie', 10.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(16, 8, 'Zurek Soup', 7.49, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(17, 9, 'Grilled Salmon', 16.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(18, 9, 'Crispy Calamari', 11.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(19, 10, 'Spaghetti Carbonara', 13.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(20, 10, 'Panna Cotta', 6.49, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(21, 11, 'Chicken Paprikash', 11.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(22, 11, 'Somlói Galuska', 7.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(23, 12, 'Ciorbă de Perișoare', 10.49, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(24, 12, 'Cozonac', 9.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(25, 13, 'Kotlet Schabowy', 12.99, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(26, 1, 'fsdafsd', 3213, '2023-08-15 01:32:03', '2023-08-15 01:32:03');

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
(1, '2000_08_15_114709_create_restaurants_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_15_005430_create_reviews_table', 1),
(7, '2023_08_15_120243_create_menus_table', 1),
(8, '2023_08_15_120408_create_reservations_table', 1);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `when` datetime NOT NULL,
  `party_size` int(10) UNSIGNED NOT NULL,
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
  `cusine` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `location`, `cusine`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Quam enimfdsasdfdsa repudiandae.', 'Iure qui.', 'Officia et nulla quidem fuga nulla vel.', 28.3, '2023-08-06 06:41:17', '2023-08-15 02:02:03'),
(2, 'Szép Étterem', 'Budapest', 'Hungarian', 4.6, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(3, 'La Piața', 'Bucharest', 'Romanian', 4.3, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(4, 'Gospoda Krakowska', 'Warsaw', 'Polish', 4.8, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(5, 'Fisherman\'s Hut', 'Budapest', 'Seafood', 4.2, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(6, 'Casa del Gusto', 'Bucharest', 'Italian', 4.4, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(7, 'Kék Duna Étterem', 'Budapest', 'Hungarian', 4.5, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(8, 'Brânza și Mămăligă', 'Cluj-Napoca', 'Romanian', 4.2, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(9, 'Czerwona Karczma', 'Krakow', 'Polish', 4.6, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(10, 'Móló Rózsa Étterem', 'Budapest', 'Seafood', 4.7, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(11, 'Trattoria Bella', 'Varna', 'Italian', 4.1, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(12, 'Paradicsom Étterem', 'Szeged', 'Hungarian', 4.3, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(13, 'Sarmale Bistro', 'Timisoara', 'Romanian', 4.7, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(14, 'Smaczne Pierogi', 'Wroclaw', 'Polish', 4.5, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(15, 'Halász Fogadó', 'Székesfehérvár', 'Seafood', 4.4, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(16, 'Vivace Ristorante', 'Bucharest', 'Italian', 4.8, '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(17, 'test', 'test', 'test', 1, '2023-08-15 01:50:29', '2023-08-15 01:50:29'),
(19, 'tetatsdt', 'fasdfsadfs', 'etsasdtg', 1, '2023-08-15 01:51:47', '2023-08-15 01:51:47'),
(21, 'tetatsdtgdfsgdfgdf', 'fasdfsadfs', 'etsasdtg', 1, '2023-08-15 01:52:06', '2023-08-15 01:52:06'),
(22, 'ggds', 'gsdfgsdfgsdf', 'gssss', 1, '2023-08-15 01:53:34', '2023-08-15 01:53:34'),
(23, 'fdsafhasd', 'fdsafsdafdsf', 'fdasfsadfsda', 1, '2023-08-15 01:53:57', '2023-08-15 01:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `restaurant_id`, `user_name`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Anna Nagy', 4.8, 'Wonderful traditional Hungarian dishes!', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(2, 2, 'Andrei Ionescu', 4.2, 'Delicious Romanian flavors in every bite.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(3, 3, 'Kasia Wójcik', 4.9, 'Authentic Polish cuisine, loved it!', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(4, 4, 'Márton Szabó', 4, 'Great fish, friendly staff.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(5, 5, 'Aneta Nowak', 4.5, 'Tasty pizza and cozy atmosphere.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(6, 6, 'Péter Farkas', 4.6, 'Excellent service and tasty Hungarian dishes.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(7, 7, 'Cristina Avram', 4.3, 'Traditional Romanian food, good experience.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(8, 8, 'Jacek Nowak', 4.7, 'Loved the Polish atmosphere and food.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(9, 9, 'Beáta Kiss', 4.5, 'Fresh seafood, great location by the river.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(10, 10, 'Stefan Petrov', 4.1, 'Nice Italian restaurant, good pasta.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(11, 11, 'Andrea Kovács', 4.3, 'Classic Hungarian cuisine, worth a visit.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(12, 12, 'Radu Popescu', 4.7, 'Amazing Romanian food, will come again.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(13, 13, 'Monika Kowalska', 4.5, 'Polish pierogi were delicious, nice staff.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(14, 14, 'Tamás Varga', 4.4, 'Enjoyed the fish dishes, nice ambience.', '2023-08-15 01:00:11', '2023-08-15 01:00:11'),
(15, 15, 'Karolina Zawadzka', 4.8, 'Fantastic Italian food, great service.', '2023-08-15 01:00:11', '2023-08-15 01:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `restaurant_id`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ferenc Kis', 'ferenc.kis@sze.hu', '2023-08-15 01:00:10', '$2y$10$Vcx44RPTIAkw68tNAG/GiOVfFeZv9GoYccCLUM6l4RFX8DAqSQ3jK', 1, 0, 'FV4e0VKDoGjmxkQ8bzbtiGhCbycoMxTAyoeBh8AG3gou0km3r6rUxgqDe7MI', '2023-08-15 01:00:10', '2023-08-15 01:00:10'),
(2, 'Laszlo Nagy', 'laszlo.nagy@dineeasy.com', '2023-08-15 01:00:10', '$2y$10$Vf6R6swf205MipC7mVmFJ.U4a3GH7.Mz7d./E3dKSs7dgJH5RKwty', NULL, 1, 'AQMlivW9ia', '2023-08-15 01:00:10', '2023-08-15 01:00:10'),
(3, 'fdsaffsdf', 'test@gmail.com', NULL, '$2y$10$OMZtZo1LoVLhuNpr/RoUNu9N.1dj3Z53WAUNtOlwhvagaEmyrD1UC', 23, 0, NULL, '2023-08-15 01:53:58', '2023-08-15 01:53:58');

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
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restaurants_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
