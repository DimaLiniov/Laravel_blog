-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 27 2019 г., 17:15
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `mount_name` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `height` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(40) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `mount_name`, `country`, `description`, `height`, `image`, `updated_at`, `created_at`, `views`) VALUES
(1, 'Джомолунгма', 'Китай, Непал', 'Высочайшая вершина Земли. Находится в Гималаях, в хребте Махалангур-Химал (в части, называемой Кхумбу-Гимал). Южная вершина (8760 м) лежит на границе Непала и Тибетского автономного района (Китай), Северная (главная) вершина (8848 м) расположена на территории Китая. ', 8848, 'Jomolungma.jpg', '2019-08-17 18:37:10', NULL, 121),
(2, 'Чогори', 'Пакистан', 'Вторая по высоте горная вершина Земли. Самый северный восьмитысячник мира. Находится в хребте Балторо на границе Кашмира (контролируемые Пакистаном Северные территории) и Синьцзян-Уйгурского автономного района Китая, в горной системе Каракорум к северо-западу от Гималаев.', 8611, 'Chogori.jpg', NULL, NULL, 110),
(3, 'Конченджанга', 'Индия', 'До 1852 года Канченджанга считалась высочайшей горой мира.Однако,расчеты показали, что эта гора третья гора по высоте\r\nПервое успешное восхождение было совершено 25 мая 1955 года участниками британской экспедиции Джорджем Бэндом и Джо Брауном.', 8586, 'Kanchanjunga.jpg', NULL, NULL, 100),
(7, 'Говерла', 'Украина', 'Самая высокая гора Украины', 2071, 'hoverla.jpg', '2019-08-16 18:07:23', '2019-08-16 18:07:23', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Dima', 'dimalinyov@gmail.com', NULL, '$2y$10$ttX6OXqyUAJwWG79ncZbjOvPMbUm3Kq/BvJU/QtU39zW823k2uTRO', NULL, '2019-08-20 08:18:36', '2019-08-20 08:18:36', 1),
(2, 'BoDick', 'bohdan@mail.ru', NULL, '$2y$10$zi93qJaEI8xxRn3PYJA0z.J3p7D1qkcBII4gCFBPRTQi8POZz0sNm', NULL, '2019-08-20 08:38:10', '2019-08-20 08:38:10', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
