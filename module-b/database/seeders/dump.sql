INSERT INTO `menu_items` (`id`, `restaurant_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
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

INSERT INTO `reservations` (`id`, `restaurant_id`, `user_name`, `date`, `time`, `party_size`, `created_at`, `updated_at`) VALUES
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

INSERT INTO `restaurants` (`id`, `name`, `cuisine`, `location`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Szép Étterem', 'Hungarian', 'Budapest', 4.60, NULL, NULL),
(2, 'La Piața', 'Romanian', 'Bucharest', 4.30, NULL, NULL),
(3, 'Gospoda Krakowska', 'Polish', 'Warsaw', 4.80, NULL, NULL),
(4, 'Fisherman\'s Hut', 'Seafood', 'Budapest', 4.20, NULL, NULL),
(5, 'Casa del Gusto', 'Italian', 'Bucharest', 4.40, NULL, NULL),
(6, 'Kék Duna Étterem', 'Hungarian', 'Budapest', 4.50, NULL, NULL),
(7, 'Brânza și Mămăligă', 'Romanian', 'Cluj - Napoca', 4.20, NULL, NULL),
(8, 'Czerwona Karczma', 'Polish', 'Krakow', 4.60, NULL, NULL),
(9, 'Móló Rózsa Étterem', 'Seafood', 'Budapest', 4.70, NULL, NULL),
(10, 'Trattoria Bella', 'Italian', 'Varna', 4.10, NULL, NULL),
(11, 'Paradicsom Étterem', 'Hungarian', 'Szeged', 4.30, NULL, NULL),
(12, 'Sarmale Bistro', 'Romanian', 'Timisoara', 4.70, NULL, NULL),
(13, 'Smaczne Pierogi', 'Polish', 'Wroclaw', 4.50, NULL, NULL),
(14, 'Halász Fogadó', 'Seafood', 'Székesfehérvár', 4.40, NULL, NULL),
(15, 'Vivace Ristorante', 'Italian', 'Bucharest', 4.80, NULL, NULL);

INSERT INTO `reviews` (`id`, `reviewer`, `comment`, `restaurant_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Anna Nagy', 'Wonderful traditional Hungarian dishes!', 1, 4.80, NULL, NULL),
(2, 'Andrei Ionescu', 'Delicious Romanian flavors in every bite.', 2, 4.20, NULL, NULL),
(3, 'Kasia Wójcik', 'Authentic Polish cuisine, loved it!', 3, 4.90, NULL, NULL),
(4, 'Márton Szabó', 'Great fish, friendly staff.', 4, 4.00, NULL, NULL),
(5, 'Aneta Nowak', 'Tasty pizza and cozy atmosphere.', 5, 4.50, NULL, NULL),
(6, 'Péter Farkas', 'Excellent service and tasty Hungarian dishes.', 6, 4.60, NULL, NULL),
(7, 'Cristina Avram', 'Traditional Romanian food, good experience.', 7, 4.30, NULL, NULL),
(8, 'Jacek Nowak', 'Loved the Polish atmosphere and food.', 8, 4.70, NULL, NULL),
(9, 'Beáta Kiss', 'Fresh seafood, great location by the river.', 9, 4.50, NULL, NULL),
(10, 'Stefan Petrov', 'Nice Italian restaurant, good pasta.', 10, 4.10, NULL, NULL),
(11, 'Andrea Kovács', 'Classic Hungarian cuisine, worth a visit.', 11, 4.30, NULL, NULL),
(12, 'Radu Popescu', 'Amazing Romanian food, will come again.', 12, 4.70, NULL, NULL),
(13, 'Monika Kowalska', 'Polish pierogi were delicious, nice staff.', 13, 4.50, NULL, NULL),
(14, 'Tamás Varga', 'Enjoyed the fish dishes, nice ambience.', 14, 4.40, NULL, NULL),
(15, 'Karolina Zawadzka', 'Fantastic Italian food, great service.', 15, 4.80, NULL, NULL);