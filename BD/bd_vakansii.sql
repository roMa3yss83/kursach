-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 18 2024 г., 09:42
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
(1, 'ООО Метал', '423827, Республика Татарстан (татарстан), г. Набережные Челны, пр-кт Автозаводский, д.2', 'машиностроение', 'metal@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '<h2>МЕТАЛ НОМЕР 1</h2><p><strong>НУЖНЫ ЗДРАВЫЕ РЕБЯТА</strong></p><p>Если умеете</p><ul><li>Стоять за станком</li><li>Вставать к 7&nbsp;</li></ul><p>Ты нам не нужен&nbsp;</p><p><a href=\"https://t.me\">НАШ ТГ:&nbsp;</a></p>', 'unknown.jpg', '88005353535', NULL);

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
(33, 'Главный', 'Админ', 'Сайта', '2024-06-06', 'vHM6x5kF87PqicTE4SGgwK9Ooj1lW2BJCIZby3seNuQdzn0hmaDVptULXrAYRf.png', '32rungo23@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'php,sql,html,css', 'Челны. Колледж имени Технический колледж им. В. Д. Поташова. Информационные системы и программирование'),
(34, 'Тест', 'Странный', 'Тестович', '2024-06-14', 'unknown.jpg', 'test@test.test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL);

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
(1, 1, '40000-50000 руб.', '<p><strong>Обязанности:</strong></p><ul><li>Слесарные работы</li></ul><p><strong>Требования:</strong></p><ul><li>Знание инструментов</li><li>Опыт работы слесарем</li><li>Знание гидравлики приветствуется</li></ul><p><strong>Условия:</strong></p><ul><li>График работы 5/2</li><li>Официальное трудоустройство</li><li>Предоставление спецодежды</li><li>Испытательный срок 2 месяца</li><li>Стабильная заработная плата</li><li>Непрерывный профессиональный и личностный рост</li><li>Подарки на праздники работникам + новогодние подарки для детей сотрудников</li></ul><p>&nbsp;</p><p><strong>ООО “Метал”</strong> сегодня это:</p><ul><li>Интересная работа по производству новых специальных автомобилей (Создание разных моделей специализированных автомобилей, Сервисное обслуживание, Различные виды доработок, Знакомство и изучение привезенной из за рубежа новой спецтехники и тд)</li><li>Динамично развивающаяся автомобильная компания</li><li>Максимальная реализация идей клиента</li><li>Передовые технологии</li><li>Комплексный подход</li><li>Широкая продуктовая линейка на шасси различных производителей</li></ul>', 'Слесарь МСР'),
(2, 1, 'от 55 000 ₽ на руки', '<p><strong>Обязанности:</strong></p><ul><li>Банк-клиент: формирование и отправка в банк платежных поручений</li><li>Взаимодействие с банком по вопросам кредитования</li><li>Прием, контроль и ввод первичной документации (актов, накладных, счет-фактур)</li><li>Отслеживание своевременного поступления документов от поставщиков и покупателей</li><li>Сверка расчетов с контрагентами, контроль дебиторской и кредиторской задолженности</li><li>Списание ТМЦ</li><li>Учет основных средств</li><li>Учет расходов на аренду</li><li>Ведение книги учета доходов и расходов (УСН).</li><li>Взаимодействие с ИФНС - письма, сверки, ответы на требования</li><li>Сдача отчетности по УСН</li><li>Выполнение поручений главного бухгалтера</li></ul><p><strong>Требования:</strong></p><ul><li>Опыт работы от 3-х лет</li><li>Знание 1С 8.3</li><li>Знание бухгалтерского и налогового законодательства (УСН)</li><li>Умение работать в режиме многозадачности, оперативности</li><li>Умение работать с большим объёмом информации</li><li>Ответственность, пунктуальность, внимательность, инициативность</li></ul><p><strong>Условия:</strong></p><ul><li>Устройство по ТК РФ</li><li>График работы 5/2 с 8:00 до 17:00</li><li>Заработная плата 2 раза в месяц, без задержек</li><li>Испытательный срок 3 месяца</li><li>Место работы: Хлебный проезд, 29 (Промкомзона)</li><li>Вахта.</li></ul>', 'Бухгалтер');

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
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `vakansii`
--
ALTER TABLE `vakansii`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `work_experience_user`
--
ALTER TABLE `work_experience_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
