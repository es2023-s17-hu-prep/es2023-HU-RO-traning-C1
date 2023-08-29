-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 29, 2023 at 01:54 PM
-- Server version: 11.0.2-MariaDB-1:11.0.2+maria~ubu2204
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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `dish_name`, `price`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 'Goulash', 10.99, 1, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(2, 'Chicken Paprikash', 11.99, 1, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(3, 'Mămăligă cu Brânză', 8.49, 2, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(4, 'Sarmale', 12.99, 2, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(5, 'Placki Ziemniaczane', 14.99, 3, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(6, 'Bigos', 9.99, 3, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(7, 'Fresh Grilled Fish', 17.99, 4, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(8, 'Octopus Salad', 13.49, 4, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(9, 'Pizza Margherita', 10.99, 5, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(10, 'Tiramisu', 6.99, 5, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(11, 'Beef Stew', 12.99, 6, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(12, 'Dobos Torte', 8.99, 6, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(13, 'Ciorbă de Burtă', 9.99, 7, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(14, 'Mămăligă cu Sarmale', 15.99, 7, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(15, 'Pierogi Ruskie', 10.99, 8, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(16, 'Zurek Soup', 7.49, 8, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(17, 'Grilled Salmon', 16.99, 9, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(18, 'Crispy Calamari', 11.99, 9, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(19, 'Spaghetti Carbonara', 13.99, 10, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(20, 'Panna Cotta', 6.49, 10, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(21, 'Chicken Paprikash', 11.99, 11, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(22, 'Somlói Galuska', 7.99, 11, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(23, 'Ciorbă de Perișoare', 10.49, 12, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(24, 'Cozonac', 9.99, 12, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(25, 'Kotlet Schabowy', 12.99, 13, '2023-08-29 13:54:22', '2023-08-29 13:54:22');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_08_29_110840_create_restaurants_table', 1),
(3, '2023_08_29_110908_create_reviews_table', 1),
(4, '2023_08_29_110919_create_users_table', 1),
(5, '2023_08_29_110950_create_menus_table', 1),
(6, '2023_08_29_110957_create_reservations_table', 1);

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
  `user_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `party_size` int(11) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_name`, `date`, `time`, `party_size`, `confirmed`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 'András Kovács', '2023-08-15', '19:00:00', 2, 0, 1, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(2, 'Elena Popescu', '2023-08-20', '20:30:00', 4, 0, 2, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(3, 'Krzysztof Nowak', '2023-08-18', '18:45:00', 3, 0, 3, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(4, 'Szilvia Horváth', '2023-08-16', '13:15:00', 2, 0, 4, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(5, 'Lukasz Kowalski', '2023-08-19', '19:30:00', 5, 0, 5, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(6, 'Gabriella Tóth', '2023-08-17', '20:00:00', 3, 0, 6, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(7, 'Adrian Ionescu', '2023-08-22', '19:30:00', 2, 0, 7, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(8, 'Alicja Nowak', '2023-08-21', '18:15:00', 4, 0, 8, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(9, 'Attila Nagy', '2023-08-23', '13:45:00', 2, 0, 9, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(10, 'Viktor Popov', '2023-08-24', '19:30:00', 6, 0, 10, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(11, 'Veronika Kovács', '2023-08-26', '14:00:00', 3, 0, 11, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(12, 'Ioana Mihai', '2023-08-27', '19:45:00', 4, 0, 12, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(13, 'Kamil Kowalczyk', '2023-08-28', '20:30:00', 2, 0, 13, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(14, 'László Balogh', '2023-08-29', '18:30:00', 5, 0, 14, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(15, 'Dorota Król', '2023-08-30', '19:15:00', 3, 0, 15, '2023-08-29 13:54:22', '2023-08-29 13:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `location`, `cuisine`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Szép Étterem', 'Budapest', 'Hungarian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(2, 'La Piața', 'Bucharest', 'Romanian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(3, 'Gospoda Krakowska', 'Warsaw', 'Polish', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(4, 'Fisherman\'s Hut', 'Budapest', 'Seafood', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(5, 'Casa del Gusto', 'Bucharest', 'Italian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(6, 'Kék Duna Étterem', 'Budapest', 'Hungarian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(7, 'Brânza și Mămăligă', 'Cluj-Napoca', 'Romanian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(8, 'Czerwona Karczma', 'Krakow', 'Polish', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(9, 'Móló Rózsa Étterem', 'Budapest', 'Seafood', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(10, 'Trattoria Bella', 'Varna', 'Italian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(11, 'Paradicsom Étterem', 'Szeged', 'Hungarian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(12, 'Sarmale Bistro', 'Timisoara', 'Romanian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(13, 'Smaczne Pierogi', 'Wroclaw', 'Polish', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(14, 'Halász Fogadó', 'Székesfehérvár', 'Seafood', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(15, 'Vivace Ristorante', 'Bucharest', 'Italian', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `rating` double(8,2) NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_name`, `comment`, `rating`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 'Anna Nagy', '\"Wonderful traditional Hungarian dishes!\"', 4.80, 1, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(2, 'Andrei Ionescu', '\"Delicious Romanian flavors in every bite.\"', 4.20, 2, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(3, 'Kasia Wójcik', '\"Authentic Polish cuisine', 4.90, 3, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(4, 'Márton Szabó', '\"Great fish', 4.00, 4, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(5, 'Aneta Nowak', '\"Tasty pizza and cozy atmosphere.\"', 4.50, 5, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(6, 'Péter Farkas', '\"Excellent service and tasty Hungarian dishes.\"', 4.60, 6, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(7, 'Cristina Avram', '\"Traditional Romanian food', 4.30, 7, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(8, 'Jacek Nowak', '\"Loved the Polish atmosphere and food.\"', 4.70, 8, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(9, 'Beáta Kiss', '\"Fresh seafood', 4.50, 9, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(10, 'Stefan Petrov', '\"Nice Italian restaurant', 4.10, 10, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(11, 'Andrea Kovács', '\"Classic Hungarian cuisine', 4.30, 11, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(12, 'Radu Popescu', '\"Amazing Romanian food', 4.70, 12, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(13, 'Monika Kowalska', '\"Polish pierogi were delicious', 4.50, 13, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(14, 'Tamás Varga', '\"Enjoyed the fish dishes', 4.40, 14, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(15, 'Karolina Zawadzka', '\"Fantastic Italian food', 4.80, 15, '2023-08-29 13:54:22', '2023-08-29 13:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('restaurantAdmin','dineEasyAdmin') NOT NULL DEFAULT 'restaurantAdmin',
  `restaurant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 'Laszlo Nagy', 'laszlo.nagy@dineeasy.com', '$2y$10$XfJOTa5kELa3RQNqMEAGruWCVIQ94uHwo2YJkJW/F.8ksp0g16Ql6', 'dineEasyAdmin', NULL, '2023-08-29 13:54:22', '2023-08-29 13:54:22'),
(2, 'Ferenc Kis', 'ferenc.kis@sze.hu', '$2y$10$fh9nv9r9dEU4xp7u/EroBehd7QryhI0KnRXVdaeksQilRFTlBMCQe', 'restaurantAdmin', 1, '2023-08-29 13:54:22', '2023-08-29 13:54:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_restaurant_id_foreign` (`restaurant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
