-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 17 2019 г., 16:38
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `top9` int(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `top9` (`top9`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `top9`) VALUES
(1, 'Костюм "Лора"', '19.99', 'product_1.jpg', 1),
(2, 'Костюм "Кимоно"', '22.99', 'product_2.jpg', 1),
(3, 'Блуза "Бриз"', '7.99', 'product_3.jpg', 1),
(4, 'Шубка "White Light"', '44.99', 'product_4.jpg', 1),
(5, 'Костюм "Stripes"', '25.99', 'product_5.jpg', 1),
(6, 'Куртка "Blue Cotton"', '16.99', 'product_6.jpg', 1),
(7, 'Костюм "Brown Look"', '27.99', 'product_7.jpg', 1),
(8, 'Блуза "Токио"', '8.99', 'product_8.jpg', 1),
(9, 'Костюм "Анастасия"', '24.99', 'product_9.jpg', 1),
(10, 'Пальто "Gold"', '38.99', 'product_10.jpg', 0),
(11, 'Топ "London"', '10.99', 'product_11.jpg', 0),
(12, 'Костюм "Корса"', '29.99', 'product_12.jpg', 0),
(13, 'Блуза "Sunny Style"', '11.99', 'product_13.jpg', 0),
(14, 'Батник "California"', '8.99', 'product_14.jpg', 0),
(15, 'Платье "Лиза"', '15.99', 'product_15.jpg', 0),
(25, 'Платье "Пирамида"', '21.99', 'product_16.jpg', 0),
(26, 'Плащ "LightBlue"', '29.99', 'product_17.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
