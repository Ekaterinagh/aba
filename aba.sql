-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2017 г., 21:46
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aba`
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
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'welcome to website', 'American Body Art, salons de Tatouage et Piercing sont présents à Paris, principalement à Chatelet depuis bientôt vingt ans.\r\n					A Paris, les salons de tatouage et piercing American Body Art sont une institution. Le tatouage à Paris est un art de vivre.\r\n					Mille significations aux tatouages. Tatouage homme, tatouage femme, tatouage avant bras, tatouage poignet, c\'est plusieurs milliers de modèles que nous avons réalisés depuis notre ouverture à Paris dans la fin des années 90.\r\n					La philosophie de American Body Art demeure le client avant tout, et l\'esprit Rock & Roll. L\'accueil et le suivi est primordial pour nous, car nous faisons notre metier depuis plusieurs décénies, avec toujours le même souci du travail, non pas bien fait, mais parfaitement éxécuté.\r\n					A Paris, en Floride, en Australie, au Liban, si vous voulez vous faire tatouer ou percer...\r\n				<br/>Vous pouvez vous rendre chez AMERICAN BODY ART.', 'index', 'show', 'ru', '2017-05-31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
