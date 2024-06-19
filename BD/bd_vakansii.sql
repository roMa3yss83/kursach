-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 18 2024 г., 14:25
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.7

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
(1, 'ООО Метал', '423827, Республика Татарстан (татарстан), г. Набережные Челны, пр-кт Автозаводский, д.2', 'машиностроение', 'metal@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '<h2>МЕТАЛ НОМЕР 1</h2><p><strong>НУЖНЫ ЗДРАВЫЕ РЕБЯТА</strong></p><p>Если умеете</p><ul><li>Стоять за станком</li><li>Вставать к 7&nbsp;</li></ul><p>Ты нам не нужен&nbsp;</p><p><a href=\"https://t.me\">НАШ ТГ:&nbsp;</a></p>', 'unknown.jpg', '88005353535', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `otkliki`
--

CREATE TABLE `otkliki` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_vakansia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `otkliki`
--

INSERT INTO `otkliki` (`id`, `id_user`, `id_vakansia`) VALUES
(11, 33, 6),
(12, 36, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `title` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`title`) VALUES
(123);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(39) NOT NULL,
  `patronymic` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `birthdate` date NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `education` varchar(160) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `birthdate`, `avatar`, `email`, `password`, `skills`, `education`) VALUES
(33, 'Главный', 'Админ', 'Сайта', '2024-06-06', 'vHM6x5kF87PqicTE4SGgwK9Ooj1lW2BJCIZby3seNuQdzn0hmaDVptULXrAYRf.png', '32rungo23@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'php,sql,html,css,максим,вагиз', 'Челны. Колледж имени Технический колледж им. В. Д. Поташова. Информационные системы и программирование'),
(34, 'Тест', 'Странный', 'Тестович', '2024-06-14', 'unknown.jpg', 'test@test.test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL),
(36, 'Савелий', 'Суханов', 'Нефор', '2007-07-01', '9a778df1-4520-479d-8e6e-69209f7f2226.jpg', 'sava@mail.ru', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'подик,парить,умею', '9 классов Школа узбека');

-- --------------------------------------------------------

--
-- Структура таблицы `vakansii`
--

CREATE TABLE `vakansii` (
  `id` int NOT NULL,
  `id_company` int NOT NULL,
  `salary` varchar(40) DEFAULT NULL,
  `description` text NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `vakansii`
--

INSERT INTO `vakansii` (`id`, `id_company`, `salary`, `description`, `title`) VALUES
(6, 1, '200к - 450к руб в месяц', '<p>Ничего делать не надо. Схема максимум серая</p>', 'ЧПУ 10 разряд'),
(7, 1, '80к - 120к в неделю', '<p>Работа фасовщиком. график 1 месяц через 3 года</p>', 'Кладовщик на склад \"OZON\"'),
(8, 1, '1кк руб в месяц', '<p>2 килла в среднем надо делать</p>', 'Киллер');

-- --------------------------------------------------------

--
-- Структура таблицы `work_experience_user`
--

CREATE TABLE `work_experience_user` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `text` text NOT NULL,
  `duration_work` int DEFAULT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `companys`
--
ALTER TABLE `companys`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otkliki`
--
ALTER TABLE `otkliki`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vakansii`
--
ALTER TABLE `vakansii`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `work_experience_user`
--
ALTER TABLE `work_experience_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `companys`
--
ALTER TABLE `companys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `otkliki`
--
ALTER TABLE `otkliki`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `vakansii`
--
ALTER TABLE `vakansii`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `work_experience_user`
--
ALTER TABLE `work_experience_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
