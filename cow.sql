-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Мар 30 2021 г., 21:28
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cow`
--

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `lang` enum('ru','en','by') NOT NULL DEFAULT 'ru',
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `lang`, `showhide`, `putdate`) VALUES
(1, 'О нас', 'О нас текст мнго\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78449.49890276486!2d23.632848710217917!3d52.087978697534695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47210c0223630975%3A0x4d319ea41f64ae99!2z0JHRgNC10YHRgg!5e0!3m2!1sru!2sby!4v1612982320611!5m2!1sru!2sby\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'about', 'ru', 'show', '2021-03-30 17:44:00'),
(2, 'Доставка', 'Текст доставки. Доставим быстро.', 'delivery', 'ru', 'show', '2021-03-30 17:44:48'),
(3, 'Акции', 'текст для акций', 'discount', 'ru', 'show', '2021-03-30 17:47:47'),
(4, 'Контакты', '<p>По вопросам сотрудничества обращаться по телефону:</p>\r\n+375(29)763-93-82', 'contacts', 'ru', 'show', '2021-03-30 17:49:09'),
(5, 'test', 'test', 'test', 'ru', 'show', '2021-03-30 18:19:46');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
