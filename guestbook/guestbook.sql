-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Мар 19 2026 г., 21:26
-- Версия сервера: 8.0.40
-- Версия PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guestbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`, `status`, `created_at`) VALUES
(1, 7, 'Ea quisquam ea anim', 0, '2026-03-17 17:18:35'),
(2, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum erat vitae urna porta dignissim. Sed eget nibh faucibus, semper mauris id, commodo lacus. Aenean quis tellus eu tortor mattis sollicitudin. Proin consequat pellentesque metus sit amet faucibus. Cras ultrices libero vitae ex posuere aliquam. Ut luctus urna non tortor hendrerit laoreet. Proin commodo sapien turpis, vel mattis neque eleifend nec. Aenean malesuada lectus vel velit sollicitudin suscipit. Donec porta mauris nunc, euismod pulvinar ipsum mattis ac. Phasellus tempus finibus felis, id fermentum mi ullamcorper vitae. Maecenas rhoncus ipsum et mauris vulputate, eget maximus dui bibendum. Nullam pharetra diam arcu, at condimentum quam mollis sed. Vestibulum mattis hendrerit leo, vitae aliquam sem ultrices sit amet. Sed a tellus sed mi tincidunt finibus sed ac lacus. Sed aliquam ante libero. Vestibulum mollis nunc ante, vel finibus libero luctus eu.\r\nNunc orci arcu, efficitur non purus id, congue aliquet est. Sed vehicula, ex id hendrerit mollis, odio augue luctus enim, id sodales tortor purus at sapien. Quisque eu mattis velit, eu finibus est. Proin ante dui, efficitur ac ex sit amet, varius molestie risus. Proin laoreet nisl neque, nec eleifend libero placerat et. Vivamus fermentum mollis lectus sit amet sodales. Sed viverra lectus felis, eget auctor nunc imperdiet ac.', 0, '2026-03-17 17:20:49');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'John', 'john@mail.com', '123456', 1),
(2, 'Olympia Richmond', 'xinylenis@mailinator.com', '$2y$10$iQnUVAclYVxF.K/WHlarjePlVcz4UfnQ5nGIGkkhqlwBUDWsNBtTq', 1),
(3, 'Octavius Harrell', 'tydojud@mailinator.com', '$2y$10$4dbirRr7f7OnTMtbm0mLYueSMERLkYUpq/vVWR9J4YI.KHqatKCe2', 1),
(4, 'Callum Sanders', 'fenevirani@mailinator.com', '$2y$10$59ZoIr1vKFCKOW/Fds.0AenwFDpwr7Z86ViZE5YpAlRF/MOmvTfY.', 1),
(5, 'Test', 'test@gmail.com', '$2y$10$tG8GHyIaQ5ATO74pTx29dO6jnMEAW1SzVx03X60nAFI6xSkZ6D9km', 1),
(6, 'Admin', 'admin@mail.com', '$2y$10$cnN54EyKszE4027iB1Oe9O5f/8uwSPyl/HU/Xa6vyFtYrXdxgz4CC', 2),
(7, 'User 1', 'user1@mail.com', '$2y$10$692.RK8wyFD1vQYBgcSjHOd.0HzDLHkmVLSNIJM1i4rcyqF.A0fMi', 1),
(8, 'User 2', 'user2@mail.com', '$2y$10$ERavzcauEaqn6FYGbHWeYuVXxvNfrbB24k52n2Kc9LvAH/6742KqK', 1),
(9, 'User 3', 'user3@mail.com', '$2y$10$5Fa9GT5DC099QeQkanb6BuV/gyYyv5KduzUdFr/zPaISHYjBOoCh6', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
