-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2020 г., 11:50
-- Версия сервера: 5.6.43
-- Версия PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `todo`
--
CREATE DATABASE IF NOT EXISTS `todo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `todo`;

-- --------------------------------------------------------

--
-- Структура таблицы `fcalendar`
--

CREATE TABLE `fcalendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fcalendar`
--

INSERT INTO `fcalendar` (`id`, `title`, `start`, `end`) VALUES
(1, 'РАБОТАЕТ', '2020-04-22', '2020-04-25'),
(3, 'проверка', '2020-04-23', '2020-04-23'),
(33, 'dfsdc', '0000-00-00', '0000-00-00'),
(32, 'rew', '0000-00-00', '0000-00-00'),
(31, '1q', '0000-00-00', '0000-00-00'),
(30, 'test', '0000-00-00', '0000-00-00'),
(29, 'qwe12', '0000-00-00', '0000-00-00'),
(28, 'q', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nproject` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `nproject`) VALUES
(7, 'Test two'),
(6, 'Test one');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `content`) VALUES
(88, 'qq'),
(83, 'ddf'),
(89, 'sd'),
(79, 't'),
(78, 'we'),
(74, 'Test two'),
(73, 'Test one');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fcalendar`
--
ALTER TABLE `fcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fcalendar`
--
ALTER TABLE `fcalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- База данных: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `login` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `content`, `login`) VALUES
(1, '123', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `city`, `email`, `login`, `password`) VALUES
(5, 'Роман', 'Сакнт-Петербург', 'litvinovrs@mail.ru', 'PerfectSay', '$2y$10$SGWGSCin34iMsB7.izabR.lNvGYkPvwd8fztZRLryba1Irzi9WcP.'),
(6, 'Максим', 'Москва', 'maks@mail.ru', 'maximilliano', '$2y$10$3AoKfJolvBLqe/kltVhkd.zJwJa2v6La3VzWGEjv0aP/plK00ArsC'),
(7, 'Маша', 'Питер', 'masha@mail.ru', 'Masha', '$2y$10$V8h25gNLVCCRNTf7sWoVGeX6W49o2jqNOEf2C7sUt9g2Vgdg3FC/.'),
(8, 'admin', 'Сакнт-Петербург', 'makcum_kotuak@mail.ru', 'admin', '$2y$10$SmBuFUzYSNdz.Hc/o1UUu.vHDRFEquxuhyF76wCG2wWEhLi4bevC6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
