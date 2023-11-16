-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2023 г., 17:57
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cooking`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Вкусный торт'),
(2, 'Выпечка'),
(3, 'Первые блюда'),
(4, 'Вторые блюда'),
(5, 'Напитки'),
(6, 'Закуски');

-- --------------------------------------------------------

--
-- Структура таблицы `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `kitchen`
--

INSERT INTO `kitchen` (`id`, `title`) VALUES
(1, 'Русская кухня'),
(2, 'Индийская кухня'),
(3, 'Китайская кухня'),
(4, 'Французская');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`) VALUES
(1, 'Детское меню'),
(2, 'Завтрак'),
(3, 'Ужин'),
(4, 'Обед');

-- --------------------------------------------------------

--
-- Структура таблицы `recipe`
--

CREATE TABLE `recipe` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `kitchen_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `recipe`
--

INSERT INTO `recipe` (`id`, `title`, `category_id`, `kitchen_id`, `menu_id`, `img`, `created_at`) VALUES
(1, 'Банановый торт', 6, 3, 1, 'https://chokolike.ru/images/wp-content/uploads/2019/06/full_CubLp4bq_3.jpg', '2023-11-10 11:35:34'),
(2, 'Вкусный пирог', 2, 1, 4, 'https://klike.net/uploads/posts/2022-11/1667627998_3-54.jpg', '2023-11-10 11:36:15'),
(3, 'Борщ', 3, 4, 4, 'https://mykaleidoscope.ru/x/uploads/posts/2022-09/1663686606_11-mykaleidoscope-ru-p-borshch-so-smetanoi-oboi-15.jpg', '2023-11-14 08:30:00'),
(4, 'Пирог', 2, 1, 1, 'https://aroma-avenue.ru/wp-content/uploads/a/c/5/ac59c8b8e72e0811878d96a0adc4b32c.jpeg', '2023-11-14 08:30:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `recipe_id` int DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `patronymic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `recipe_id`, `first_name`, `last_name`, `patronymic`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(7, 2, 'Александра', 'Чугаенко', 'Андреевна', 'admin', 's.chugaenko@mail.ru', '$2y$13$gw31k/RR9EBECzBieikMh.GnrljHxC8U1ACr/TQAcTif0PYT6Chzu', 'admin', '2023-11-12 10:09:41'),
(8, 2, 'Нина', 'Антошкина', 'Андреевна', 'user', 'n.chugaenko@gmail.com', '$2y$13$fXYuImQP48pnMd0UTva5q.3e4UG0/3waLomWCkWNP6WPs23hTIDfG', 'user', '2023-11-12 10:42:55'),
(9, 1, 'Анастасия', 'Артамоновна', 'Андреевна', 'nasta', 'n@gmail.com', '$2y$13$hmUcAx/Fmdivd8gmceUS0eeIM1S2u.FVKITDm2NSjYNKbU1Y6r.LK', 'user', '2023-11-14 08:32:12'),
(10, 3, 'Анастасия', 'Артамоновна', 'Андреевна', 'nasta1', 'n@gmail.com', '$2y$13$tWla2G1dmaqCQRld9yTLPOHg8owQEMJN/AXNwPh/KSM6c.4zb8gk2', 'user', '2023-11-15 08:46:17'),
(11, NULL, 'Никита', 'Стрелецкий', 'Михайлович', 'nik', 'nik@gmail.com', '$2y$13$dfcuVgQ9ikCLatCRMaXZcem/9r7rsjmhvveQpu0k7iYrNR8AaxDTm', 'user', '2023-11-16 09:01:12'),
(12, NULL, 'Марина', 'Ермоленко', 'Александровна', 'marina', 'mar@gmail.com', '$2y$13$7flczkNqbN2Tyh77uHhxw.kk2TEA8gMUqiF4b3UnySUnui3jMmM8y', 'user', '2023-11-16 09:23:45'),
(13, NULL, 'Артем', 'Есенин', 'Андреевич', 'artem', 'artem@gmail.com', '$2y$13$UTC9pSzhqqLusjuAAxLR.ej6izok5TD.eUKIAMCMP/cjJr4PXZ3Cy', 'user', '2023-11-16 11:54:23'),
(14, NULL, 'Константин', 'Алексеев', 'Алексеевич', 'alex', 'Alex@mail.ru', '$2y$13$OxyYNVqMmHzRJDWMiBJeCeEZnuL5gpmf.RB9feSzKlBPUhkReh4ua', 'user', '2023-11-16 12:00:32'),
(15, NULL, 'Антон', 'Белкин', 'Данилович', 'anton', 'anton@mail.ru', '$2y$13$E0q1BLlFtLM1Ym3xmSlzQOFlLsia2gu2y0d4SO9bbhM/AgWuztR.6', 'user', '2023-11-16 12:10:27'),
(16, NULL, 'Михаил', 'Беляев', 'Филипович', '123', 'dfd@mail.ru', '$2y$13$4npzxO6NJ8QZfEQyER2YxOLhsv0nLNL07oRiUGOpXdMLGJ.9qpTS2', 'user', '2023-11-16 12:17:47'),
(17, NULL, 'Алина', 'Суворова', 'Константиновна', 'marina12', 'mar1@gmail.com', '$2y$13$XOA4qrdu4Y2uwIol0Y7/Z.36p4hpQUB.Mi8CeGgrCAm2yjiwzd3F.', 'user', '2023-11-16 13:26:35'),
(18, NULL, 'кеке', 'прпр', 'парапр', 'nik1', 'ni@gmail.com', '$2y$13$dsqGKkIA7pAgcwFR1nc3c.l1UcBLp/F9wGNqrWf7mN4NT3kghIn7O', 'user', '2023-11-16 13:30:52'),
(19, NULL, 'ваорво', 'вава', 'ваыв', 'art', 'artem@gmail1.com', '$2y$13$LNv04F71AtHy/BaM.81Lie0LVDVABSaF2FjobCnStNWOmG3/W7IVm', 'user', '2023-11-16 13:44:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `kitchen_id` (`kitchen_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`kitchen_id`) REFERENCES `kitchen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recipe_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
