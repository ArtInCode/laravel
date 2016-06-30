-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 29 2016 г., 18:38
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `zend`
--


--
-- Структура таблицы `spy_migration`
--

CREATE TABLE IF NOT EXISTS `spy_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `spy_migration`
--

INSERT INTO `spy_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1467039275),
('m130524_201442_init', 1467039280),
('m160627_145621_statistics', 1467044835);

-- --------------------------------------------------------

--
-- Структура таблицы `spy_migrations`
--

CREATE TABLE IF NOT EXISTS `spy_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `spy_migrations`
--

INSERT INTO `spy_migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_28_135744_statistics', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `spy_password_resets`
--

CREATE TABLE IF NOT EXISTS `spy_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `spy_statistics`
--

CREATE TABLE IF NOT EXISTS `spy_statistics` (
`id` int(11) NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referrer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `os` varchar(2550) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visit_count` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `un_cookie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `spy_statistics`
--

INSERT INTO `spy_statistics` (`id`, `domain`, `referrer`, `browser`, `os`, `geo`, `visit_count`, `ip`, `un_cookie`, `data`) VALUES
(1, 'spy.com', 'site/index', 'Chrome', 'Windows', 'AM', '1', '125.5211.545.524', '123', '2016-06-28 15:13:16'),
(2, 'spy.com', 'site/about', 'Chrome', 'Mac', 'AM', '1', '253.200.3222', '321', '2016-06-28 15:13:16'),
(3, 'spy.dev', 'site/contact', 'Opera', 'Mac', 'AM', '2', '233.15215.2121', '654', '2016-06-28 15:13:16'),
(4, 'spy.dev', 'site/about', 'Opera', 'Mac', 'AM', '2', '12313.21321.212', '654', '2016-06-28 15:13:16'),
(39, 'spy.dev', 'http://spy.dev/register', 'Chrome', 'Windows', 'AM', NULL, '46.241.230.49', '46.241.230.49', '2016-06-29 14:54:33');

-- --------------------------------------------------------


--
-- Структура таблицы `spy_users`
--

CREATE TABLE IF NOT EXISTS `spy_users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `spy_users`
--

INSERT INTO `spy_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@gmail.com', '$2y$10$K4TCds18ytu/mEfjeDfoPOjFIBxUQZgQ0xmkh2ktqDaMG.kzpCzSC', 'n2WyLWSZmtyB9BbURlO3FRhm4tpi8Cb9WOEdG6sDWP5aTdAYPorN8hHHpviq', '2016-06-29 07:43:43', '2016-06-29 09:49:30');

-- --------------------------------------------------------

--
-- Индексы таблицы `spy_migration`
--
ALTER TABLE `spy_migration`
 ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `spy_password_resets`
--
ALTER TABLE `spy_password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `spy_statistics`
--
ALTER TABLE `spy_statistics`
 ADD PRIMARY KEY (`id`);


-- Индексы таблицы `spy_users`
--
ALTER TABLE `spy_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);


--
-- AUTO_INCREMENT для таблицы `spy_statistics`
--
ALTER TABLE `spy_statistics`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `spy_users`
--
ALTER TABLE `spy_users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `st`
--
ALTER TABLE `st`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

