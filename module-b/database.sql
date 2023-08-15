-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 15, 2023 at 02:15 PM
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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `dish_name` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `restaurant_id`, `dish_name`, `price`) VALUES
(1, 1, 'Goulash', 10.99),
(2, 1, 'Chicken Paprikash', 11.99),
(3, 2, 'Mămăligă cu Brânză', 8.49),
(4, 2, 'Sarmale', 12.99),
(5, 3, 'Placki Ziemniaczane', 14.99),
(6, 3, 'Bigos', 9.99),
(7, 4, 'Fresh Grilled Fish', 17.99),
(8, 4, 'Octopus Salad', 13.49),
(9, 5, 'Pizza Margherita', 10.99),
(10, 5, 'Tiramisu', 6.99),
(11, 6, 'Beef Stew', 12.99),
(12, 6, 'Dobos Torte', 8.99),
(13, 7, 'Ciorbă de Burtă', 9.99),
(14, 7, 'Mămăligă cu Sarmale', 15.99),
(15, 8, 'Pierogi Ruskie', 10.99),
(16, 8, 'Zurek Soup', 7.49),
(17, 9, 'Grilled Salmon', 16.99),
(18, 9, 'Crispy Calamari', 11.99),
(19, 10, 'Spaghetti Carbonara', 13.99),
(20, 10, 'Panna Cotta', 6.49),
(21, 11, 'Chicken Paprikash', 11.99),
(22, 11, 'Somlói Galuska', 7.99),
(23, 12, 'Ciorbă de Perișoare', 10.49),
(24, 12, 'Cozonac', 9.99),
(25, 13, 'Kotlet Schabowy', 12.99);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `user_name` varchar(127) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `party_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `restaurant_id`, `user_name`, `date`, `time`, `party_size`) VALUES
(1, 1, 'András Kovács', '2023-08-15', '19:00:00', 2),
(2, 2, 'Elena Popescu', '2023-08-20', '20:30:00', 4),
(3, 3, 'Krzysztof Nowak', '2023-08-18', '18:45:00', 3),
(4, 4, 'Szilvia Horváth', '2023-08-16', '13:15:00', 2),
(5, 5, 'Lukasz Kowalski', '2023-08-19', '19:30:00', 5),
(6, 6, 'Gabriella Tóth', '2023-08-17', '20:00:00', 3),
(7, 7, 'Adrian Ionescu', '2023-08-22', '19:30:00', 2),
(8, 8, 'Alicja Nowak', '2023-08-21', '18:15:00', 4),
(9, 9, 'Attila Nagy', '2023-08-23', '13:45:00', 2),
(10, 10, 'Viktor Popov', '2023-08-24', '19:30:00', 6),
(11, 11, 'Veronika Kovács', '2023-08-26', '14:00:00', 3),
(12, 12, 'Ioana Mihai', '2023-08-27', '19:45:00', 4),
(13, 13, 'Kamil Kowalczyk', '2023-08-28', '20:30:00', 2),
(14, 14, 'László Balogh', '2023-08-29', '18:30:00', 5),
(15, 15, 'Dorota Król', '2023-08-30', '19:15:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `name` varchar(127) NOT NULL,
  `location` varchar(127) NOT NULL,
  `cuisine` varchar(127) NOT NULL,
  `rating` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `name`, `location`, `cuisine`, `rating`) VALUES
(1, 'Szép Étterem', 'Budapest', 'Hungarian', 4.60),
(2, 'La Piața', 'Bucharest', 'Romanian', 4.30),
(3, 'Gospoda Krakowska', 'Warsaw', 'Polish', 4.80),
(4, 'Fisherman\'s Hut', 'Budapest', 'Seafood', 4.20),
(5, 'Casa del Gusto', 'Bucharest', 'Italian', 4.40),
(6, 'Kék Duna Étterem', 'Budapest', 'Hungarian', 4.50),
(7, 'Brânza și Mămăligă', 'Cluj-Napoca', 'Romanian', 4.20),
(8, 'Czerwona Karczma', 'Krakow', 'Polish', 4.60),
(9, 'Móló Rózsa Étterem', 'Budapest', 'Seafood', 4.70),
(10, 'Trattoria Bella', 'Varna', 'Italian', 4.10),
(11, 'Paradicsom Étterem', 'Szeged', 'Hungarian', 4.30),
(12, 'Sarmale Bistro', 'Timisoara', 'Romanian', 4.70),
(13, 'Smaczne Pierogi', 'Wroclaw', 'Polish', 4.50),
(14, 'Halász Fogadó', 'Székesfehérvár', 'Seafood', 4.40),
(15, 'Vivace Ristorante', 'Bucharest', 'Italian', 4.80);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `user_name` varchar(127) NOT NULL,
  `rating` decimal(10,2) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `restaurant_id`, `user_name`, `rating`, `comment`) VALUES
(1, 1, 'Anna Nagy', 4.80, 'Wonderful traditional Hungarian dishes!'),
(2, 2, 'Andrei Ionescu', 4.20, 'Delicious Romanian flavors in every bite.'),
(3, 3, 'Kasia Wójcik', 4.90, 'Authentic Polish cuisine, loved it!'),
(4, 4, 'Márton Szabó', 4.00, 'Great fish, friendly staff.'),
(5, 5, 'Aneta Nowak', 4.50, 'Tasty pizza and cozy atmosphere.'),
(6, 6, 'Péter Farkas', 4.60, 'Excellent service and tasty Hungarian dishes.'),
(7, 7, 'Cristina Avram', 4.30, 'Traditional Romanian food, good experience.'),
(8, 8, 'Jacek Nowak', 4.70, 'Loved the Polish atmosphere and food.'),
(9, 9, 'Beáta Kiss', 4.50, 'Fresh seafood, great location by the river.'),
(10, 10, 'Stefan Petrov', 4.10, 'Nice Italian restaurant, good pasta.'),
(11, 11, 'Andrea Kovács', 4.30, 'Classic Hungarian cuisine, worth a visit.'),
(12, 12, 'Radu Popescu', 4.70, 'Amazing Romanian food, will come again.'),
(13, 13, 'Monika Kowalska', 4.50, 'Polish pierogi were delicious, nice staff.'),
(14, 14, 'Tamás Varga', 4.40, 'Enjoyed the fish dishes, nice ambience.'),
(15, 15, 'Karolina Zawadzka', 4.80, 'Fantastic Italian food, great service.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(127) NOT NULL,
  `name` varchar(127) NOT NULL,
  `role` varchar(127) NOT NULL,
  `restaurantId` int(11) DEFAULT NULL,
  `password` varchar(127) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `role`, `restaurantId`, `password`, `created_at`, `updated_at`) VALUES
(1, 'laszlo.nagy@dineeasy.com', 'Laszlo Nagy', 'dineEasyAdmin', NULL, '12345678', '2023-08-15 14:12:46', '2023-08-15 14:12:46'),
(2, 'ferenc.kis@sze.hu', 'Ferenc Kis', 'restaurantAdmin', 1, '12345678', '2023-08-15 14:12:46', '2023-08-15 14:12:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `restaurant_id` (`restaurant_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
