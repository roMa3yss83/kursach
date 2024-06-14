-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2024 г., 12:50
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_vakansii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `companys`
--

CREATE TABLE `companys` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(120) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` text,
  `logo` varchar(150) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `email_for_users` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `companys`
--

INSERT INTO `companys` (`id`, `name`, `address`, `branch`, `email`, `password`, `description`, `logo`, `number`, `email_for_users`) VALUES
(1, 'ООО Метал', '423827, Республика Татарстан (татарстан), г. Набережные Челны, пр-кт Автозаводский, д.2', 'машиностроение', 'metal@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '<h2>МЕТАЛ НОМЕР 1</h2><p><strong>НУЖНЫ ЗДРАВЫЕ РЕБЯТА</strong></p><p>Если умеете</p><ul><li>Стоять за станком</li><li>Вставать к 7&nbsp;</li></ul><p>Ты нам нужен&nbsp;</p><p><a href=\"https://t.me\">НАШ ТГ:&nbsp;</a></p>', 'unknown.jpg', '88005353535', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `companys`
--
ALTER TABLE `companys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `companys`
--
ALTER TABLE `companys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
