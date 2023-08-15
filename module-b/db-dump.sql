-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: db
-- Létrehozás ideje: 2023. Aug 15. 14:41
-- Kiszolgáló verziója: 11.0.2-MariaDB-1:11.0.2+maria~ubu2204
-- PHP verzió: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `database`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurantId` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `menu_items`
--

INSERT INTO `menu_items` (`id`, `restaurantId`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Goulash', 10.99, NULL, NULL),
(2, 1, 'Chicken Paprikash', 11.99, NULL, NULL),
(3, 2, 'Mămăligă cu Brânză', 8.49, NULL, NULL),
(4, 2, 'Sarmale', 12.99, NULL, NULL),
(5, 3, 'Placki Ziemniaczane', 14.99, NULL, NULL),
(6, 3, 'Bigos', 9.99, NULL, NULL),
(7, 4, 'Fresh Grilled Fish', 17.99, NULL, NULL),
(8, 4, 'Octopus Salad', 13.49, NULL, NULL),
(9, 5, 'Pizza Margherita', 10.99, NULL, NULL),
(10, 5, 'Tiramisu', 6.99, NULL, NULL),
(11, 6, 'Beef Stew', 12.99, NULL, NULL),
(12, 6, 'Dobos Torte', 8.99, NULL, NULL),
(13, 7, 'Ciorbă de Burtă', 9.99, NULL, NULL),
(14, 7, 'Mămăligă cu Sarmale', 15.99, NULL, NULL),
(15, 8, 'Pierogi Ruskie', 10.99, NULL, NULL),
(16, 8, 'Zurek Soup', 7.49, NULL, NULL),
(17, 9, 'Grilled Salmon', 16.99, NULL, NULL),
(18, 9, 'Crispy Calamari', 11.99, NULL, NULL),
(19, 10, 'Spaghetti Carbonara', 13.99, NULL, NULL),
(20, 10, 'Panna Cotta', 6.49, NULL, NULL),
(21, 11, 'Chicken Paprikash', 11.99, NULL, NULL),
(22, 11, 'Somlói Galuska', 7.99, NULL, NULL),
(23, 12, 'Ciorbă de Perișoare', 10.49, NULL, NULL),
(24, 12, 'Cozonac', 9.99, NULL, NULL),
(25, 13, 'Kotlet Schabowy', 12.99, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_08_15_115351_create_restaurants_table', 1),
(4, '2023_08_15_115842_create_menu_items_table', 1),
(5, '2023_08_15_115930_create_reviews_table', 1),
(6, '2023_08_15_115934_create_reservations_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
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
-- Tábla szerkezet ehhez a táblához `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurantId` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `size` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `reservations`
--

INSERT INTO `reservations` (`id`, `restaurantId`, `name`, `date`, `time`, `size`, `created_at`, `updated_at`) VALUES
(1, 1, 'András Kovács', '2023-08-15', '19:00:00', 2, NULL, NULL),
(2, 2, 'Elena Popescu', '2023-08-20', '20:30:00', 4, NULL, NULL),
(3, 3, 'Krzysztof Nowak', '2023-08-18', '18:45:00', 3, NULL, NULL),
(4, 4, 'Szilvia Horváth', '2023-08-16', '13:15:00', 2, NULL, NULL),
(5, 5, 'Lukasz Kowalski', '2023-08-19', '19:30:00', 5, NULL, NULL),
(6, 6, 'Gabriella Tóth', '2023-08-17', '20:00:00', 3, NULL, NULL),
(7, 7, 'Adrian Ionescu', '2023-08-22', '19:30:00', 2, NULL, NULL),
(8, 8, 'Alicja Nowak', '2023-08-21', '18:15:00', 4, NULL, NULL),
(9, 9, 'Attila Nagy', '2023-08-23', '13:45:00', 2, NULL, NULL),
(10, 10, 'Viktor Popov', '2023-08-24', '19:30:00', 6, NULL, NULL),
(11, 11, 'Veronika Kovács', '2023-08-26', '14:00:00', 3, NULL, NULL),
(12, 12, 'Ioana Mihai', '2023-08-27', '19:45:00', 4, NULL, NULL),
(13, 13, 'Kamil Kowalczyk', '2023-08-28', '20:30:00', 2, NULL, NULL),
(14, 14, 'László Balogh', '2023-08-29', '18:30:00', 5, NULL, NULL),
(15, 15, 'Dorota Król', '2023-08-30', '19:15:00', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `rating` double(8,2) NOT NULL DEFAULT 3.00,
  `logoUrl` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `location`, `cuisine`, `rating`, `logoUrl`, `created_at`, `updated_at`) VALUES
(1, 'Szép Étterem', 'Budapest', 'Hungarian', 4.60, NULL, NULL, NULL),
(2, 'La Piața', 'Bucharest', 'Romanian', 4.30, NULL, NULL, NULL),
(3, 'Gospoda Krakowska', 'Warsaw', 'Polish', 4.80, NULL, NULL, NULL),
(4, 'Fisherman\'s Hut', 'Budapest', 'Seafood', 4.20, NULL, NULL, NULL),
(5, 'Casa del Gusto', 'Bucharest', 'Italian', 4.40, NULL, NULL, NULL),
(6, 'Kék Duna Étterem', 'Budapest', 'Hungarian', 4.50, NULL, NULL, NULL),
(7, 'Brânza și Mămăligă', 'Cluj-Napoca', 'Romanian', 4.20, NULL, NULL, NULL),
(8, 'Czerwona Karczma', 'Krakow', 'Polish', 4.60, NULL, NULL, NULL),
(9, 'Móló Rózsa Étterem', 'Budapest', 'Seafood', 4.70, NULL, NULL, NULL),
(10, 'Trattoria Bella', 'Varna', 'Italian', 4.10, NULL, NULL, NULL),
(11, 'Paradicsom Étterem', 'Szeged', 'Hungarian', 4.30, NULL, NULL, NULL),
(12, 'Sarmale Bistro', 'Timisoara', 'Romanian', 4.70, NULL, NULL, NULL),
(13, 'Smaczne Pierogi', 'Wroclaw', 'Polish', 4.50, NULL, NULL, NULL),
(14, 'Halász Fogadó', 'Székesfehérvár', 'Seafood', 4.40, NULL, NULL, NULL),
(15, 'Vivace Ristorante', 'Bucharest', 'Italian', 4.80, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurantId` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `reviews`
--

INSERT INTO `reviews` (`id`, `restaurantId`, `userName`, `comment`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 'Anna Nagy', '\"Wonderful traditional Hungarian dishes!\"', 4.80, NULL, NULL),
(2, 2, 'Andrei Ionescu', '\"Delicious Romanian flavors in every bite.\"', 4.20, NULL, NULL),
(3, 3, 'Kasia Wójcik', '\"Authentic Polish cuisine, loved it!\"', 4.90, NULL, NULL),
(4, 4, 'Márton Szabó', '\"Great fish, friendly staff.\"', 4.00, NULL, NULL),
(5, 5, 'Aneta Nowak', '\"Tasty pizza and cozy atmosphere.\"', 4.50, NULL, NULL),
(6, 6, 'Péter Farkas', '\"Excellent service and tasty Hungarian dishes.\"', 4.60, NULL, NULL),
(7, 7, 'Cristina Avram', '\"Traditional Romanian food, good experience.\"', 4.30, NULL, NULL),
(8, 8, 'Jacek Nowak', '\"Loved the Polish atmosphere and food.\"', 4.70, NULL, NULL),
(9, 9, 'Beáta Kiss', '\"Fresh seafood, great location by the river.\"', 4.50, NULL, NULL),
(10, 10, 'Stefan Petrov', '\"Nice Italian restaurant, good pasta.\"', 4.10, NULL, NULL),
(11, 11, 'Andrea Kovács', '\"Classic Hungarian cuisine, worth a visit.\"', 4.30, NULL, NULL),
(12, 12, 'Radu Popescu', '\"Amazing Romanian food, will come again.\"', 4.70, NULL, NULL),
(13, 13, 'Monika Kowalska', '\"Polish pierogi were delicious, nice staff.\"', 4.50, NULL, NULL),
(14, 14, 'Tamás Varga', '\"Enjoyed the fish dishes, nice ambience.\"', 4.40, NULL, NULL),
(15, 15, 'Karolina Zawadzka', '\"Fantastic Italian food, great service.\"', 4.80, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('restaurantAdmin','dineEasyAdmin') NOT NULL DEFAULT 'dineEasyAdmin',
  `restaurantId` bigint(20) UNSIGNED DEFAULT NULL,
  `failedAttempts` tinyint(4) NOT NULL DEFAULT 0,
  `lockedOutUntil` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `restaurantId`, `failedAttempts`, `lockedOutUntil`, `created_at`, `updated_at`) VALUES
(1, 'Ferenc Kis', 'ferenc.kis@sze.hu', '$2y$10$fDVCAk8MoHoSFzw33eTukO7TKFIWDBKx0vAX8AhRs6CP/AGlC.VRi', 'restaurantAdmin', 1, 0, NULL, '2023-08-15 14:41:43', '2023-08-15 14:41:43'),
(2, 'Laszlo Nagy', 'laszlo.nagy@dineeasy.com', '$2y$10$Jt65g16He6PVSuQMUnF84uIh/lvpoPSG9tjKcU/0aLKgaQGYhk36W', 'dineEasyAdmin', NULL, 0, NULL, '2023-08-15 14:41:43', '2023-08-15 14:41:43');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
