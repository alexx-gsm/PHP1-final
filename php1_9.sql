-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 07 2016 г., 14:11
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php1_9`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `published` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `title`, `img`, `published`) VALUES
(1, '45', '/assets/images/album_45.jpg', '1982-01-01'),
(2, '46', '/assets/images/album_46.jpg', '1983-01-01'),
(3, 'Начальник Камчатки', '/assets/images/album_Kamchatka-boss.jpg', '1984-01-01'),
(4, 'Это не любовь...', '/assets/images/album_not-love.jpg', '1985-01-01');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Концерты'),
(2, 'Репетиции'),
(3, 'Из жизни'),
(4, 'Концерты'),
(5, 'Репетиции'),
(6, 'Из жизни');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `title`, `path`, `category`) VALUES
(1, 'Фотография 1', '/assets/images/1.jpg', 1),
(2, 'Фотография 2', '/assets/images/2.jpg', 1),
(3, 'Фотография 3', '/assets/images/3.jpg', 2),
(4, 'Фотография 4', '/assets/images/4.jpg', 2),
(5, 'Фотография 5', '/assets/images/5.jpg', 2),
(6, 'Фотография 6', '/assets/images/6.jpg', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
