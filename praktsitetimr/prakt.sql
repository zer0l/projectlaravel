-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2022 г., 14:09
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `prakt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attachment`
--

CREATE TABLE `attachment` (
  `id_attachment` int(111) NOT NULL,
  `id_dish` int(111) NOT NULL,
  `id_user` int(111) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `status` varchar(111) NOT NULL,
  `datatime` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attachment`
--

INSERT INTO `attachment` (`id_attachment`, `id_dish`, `id_user`, `number`, `price`, `status`, `datatime`) VALUES
(24, 21, 9, '8', '99', 'Ожидание', '2022-04-06 13ч:59м');

-- --------------------------------------------------------

--
-- Структура таблицы `dish`
--

CREATE TABLE `dish` (
  `id_dish` int(5) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Price` varchar(1000) NOT NULL,
  `Photo` varchar(1000) NOT NULL,
  `Gramme` varchar(1000) NOT NULL,
  `id_types` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dish`
--

INSERT INTO `dish` (`id_dish`, `Name`, `Price`, `Photo`, `Gramme`, `id_types`) VALUES
(16, 'Медовик', '275', 'img/med.jpg', '250', 21),
(17, 'Круассан', '99', 'img/kru.jpg', '100', 22),
(18, 'Фраде (3шт.)', '30', 'img/konf.jpg', '30', 23),
(19, 'Малиновый', '180', 'img/pirog.jpg', '190', 24),
(20, 'Клубничный', '160', 'img/ponch.jpg', '150', 25),
(21, 'Иванчай', '99', 'img/tea.jpg', '150', 26);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id_order` int(5) NOT NULL,
  `Number` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id_order`, `Number`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(111) NOT NULL,
  `id_user` int(111) NOT NULL,
  `total` varchar(1111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datatime` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_data` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stol` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_worker` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id_types` int(5) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id_types`, `Name`, `url`) VALUES
(21, 'Торты', 'img/1.jpg'),
(22, 'Фирменная выпечка', 'img/menu2.jpg'),
(23, 'Конфеты ручной работы ', 'img/menu3.jpg'),
(24, 'Пироги', 'img/menu4.jpg'),
(25, 'Пончики', 'img/soup.jpg'),
(26, 'Горячие напитки', 'img/ea.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `surname` varchar(1000) NOT NULL,
  `telephone` varchar(1000) NOT NULL,
  `login` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `telephone`, `login`, `password`, `role`) VALUES
(2, 'Антон', 'Семенов', '89870041566', 'user', '4297f44b13955235245b2497399d7a93', 'user'),
(4, 'Админ', 'Админ', '89870041577', 'admin', '4297f44b13955235245b2497399d7a93', 'admin'),
(5, 'Дима', 'Морозов', '89870041511', 'worker', '4297f44b13955235245b2497399d7a93', 'worker'),
(6, 'Абдул', 'Хабиби', '89870041533', 'user1', '4297f44b13955235245b2497399d7a93', 'user'),
(7, 'Папа', 'Римский', '89870041535', 'worker1', '4297f44b13955235245b2497399d7a93', 'worker'),
(8, 'Админ', 'Админыч', '89870041577', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin'),
(9, 'вфц', 'вцф', '89870041577', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user'),
(10, 'Торты', 'Админыч', '89870041577', 'worker2', '01925b7892e2ca194993afdd20a7c761', 'worker');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id_attachment`);

--
-- Индексы таблицы `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id_dish`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_types`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attachment`
--
ALTER TABLE `attachment`
  MODIFY `id_attachment` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `dish`
--
ALTER TABLE `dish`
  MODIFY `id_dish` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id_types` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
