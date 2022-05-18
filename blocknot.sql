-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.116:3306
-- Время создания: Май 18 2022 г., 10:43
-- Версия сервера: 10.3.27-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `9876207546`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blocknot`
--

CREATE TABLE `blocknot` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blocknot`
--

INSERT INTO `blocknot` (`id`, `title`, `content`) VALUES
(3, 'Сходить в магазин', 'Купить: молоко, хлеб, сыр'),
(4, 'Сделать текст по БД', 'До 30.01.22'),
(5, 'Купить билеты в кино', 'На фильм Мадагаскар 6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blocknot`
--
ALTER TABLE `blocknot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blocknot`
--
ALTER TABLE `blocknot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
