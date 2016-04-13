-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 13 2016 г., 13:19
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bd_med`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `login` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `fio` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `fio`) VALUES
(1, 'dima', 'dima', 'Dima Isachenckov'),
(2, 'natasha', 'natasha', 'Natasha Aleksandrova');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Фамилия` text NOT NULL,
  `Имя` text NOT NULL,
  `Отчество` text NOT NULL,
  `Паспортные данные` int(9) NOT NULL,
  `Номер телефона` bigint(11) NOT NULL,
  `Гемоглобин Hb` int(11) DEFAULT NULL,
  `Эритроциты RBC` int(11) DEFAULT NULL,
  `Цветовой показатель MCHC, %` int(11) DEFAULT NULL,
  `Ретикулоциты RTC` int(11) DEFAULT NULL,
  `Тромбоциты PLT` int(11) DEFAULT NULL,
  `СОЭ ESR` int(11) DEFAULT NULL,
  `Лейкоциты WBC, %` int(11) DEFAULT NULL,
  `Палочкоядерные, %` int(11) DEFAULT NULL,
  `Сегментоядерные, %` int(11) DEFAULT NULL,
  `Эозинофилы EOS, %` int(11) DEFAULT NULL,
  `Базофилы BAS, %` int(11) DEFAULT NULL,
  `Лимфоциты LYM, %` int(11) DEFAULT NULL,
  `Моноциты MON, %` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Фамилия`, `Имя`, `Отчество`, `Паспортные данные`, `Номер телефона`, `Гемоглобин Hb`, `Эритроциты RBC`, `Цветовой показатель MCHC, %`, `Ретикулоциты RTC`, `Тромбоциты PLT`, `СОЭ ESR`, `Лейкоциты WBC, %`, `Палочкоядерные, %`, `Сегментоядерные, %`, `Эозинофилы EOS, %`, `Базофилы BAS, %`, `Лимфоциты LYM, %`, `Моноциты MON, %`) VALUES
(1, 'familia', 'imya', 'otchestvo', 2147483647, 89119917109, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200, 210, 220, 230),
(2, 'test', 'test', 'test', 123, 123, 123, 123, 123, 123, 123, 123, 123, 13, 123, 123, 123, 132, 123),
(3, 'f', 'f', 'f', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 'Lancetov', 'Vlab', 'Igorevich', 2147483647, 89117532645, 130, 20, 15, 18, 19, 45, 456, 123, 12, 123, 123, 123, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
