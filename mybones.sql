-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 12 2014 г., 13:12
-- Версия сервера: 5.5.32
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mybones`
--
CREATE DATABASE IF NOT EXISTS `mybones` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `mybones`;

-- --------------------------------------------------------

--
-- Структура таблицы `experiment`
--

CREATE TABLE IF NOT EXISTS `experiment` (
  `id_exp` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bones_num` int(10) NOT NULL,
  `throws` int(10) NOT NULL,
  PRIMARY KEY (`id_exp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Дамп данных таблицы `experiment`
--

INSERT INTO `experiment` (`id_exp`, `date`, `time`, `name`, `bones_num`, `throws`) VALUES
(15, '2014-07-31', '15:50:34', 'Ivan', 2, 36000),
(16, '2014-07-31', '15:51:43', 'Alex', 2, 36000),
(17, '2014-08-01', '07:52:17', 'Alex', 2, 36000),
(18, '2014-08-01', '08:25:32', 'Alex', 2, 36000),
(19, '2014-08-01', '08:25:55', 'Serg', 2, 36000),
(20, '2014-08-01', '08:27:42', 'Serg', 2, 36000),
(21, '2014-08-01', '08:29:11', 'Ivan', 2, 36000),
(22, '2014-08-01', '08:30:41', 'Alex', 2, 36000),
(23, '2014-08-01', '08:35:01', 'Serg', 2, 36000),
(24, '2014-08-01', '08:35:37', 'Igor', 2, 36000),
(25, '2014-08-01', '08:36:14', 'Den', 2, 36000),
(26, '2014-08-01', '08:48:55', 'Serg', 2, 36000),
(27, '2014-08-01', '08:50:03', 'Ivan', 2, 36000),
(46, '2014-08-12', '10:26:36', 'Sergey', 2, 36000),
(47, '2014-08-12', '10:40:36', 'Sergey', 2, 36000),
(48, '2014-08-12', '10:52:35', 'Sergey', 2, 36000),
(50, '2014-08-12', '10:57:35', 'Sergey', 2, 36000),
(51, '2014-08-12', '11:01:16', 'Toxa', 2, 36000);

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id_result` int(10) NOT NULL AUTO_INCREMENT,
  `sumBones` int(10) DEFAULT NULL,
  `arrSumBones` int(10) DEFAULT NULL,
  `id_exp` int(10) DEFAULT NULL,
  `Chance` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_result`),
  KEY `id_exp` (`id_exp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=232 ;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id_result`, `sumBones`, `arrSumBones`, `id_exp`, `Chance`) VALUES
(56, 2, 1020, 15, '1/35'),
(57, 3, 1989, 15, '1/18'),
(58, 4, 3006, 15, '1/12'),
(59, 5, 3984, 15, '1/9'),
(60, 6, 5024, 15, '1/7'),
(61, 7, 5992, 15, '1/6'),
(62, 8, 4975, 15, '1/7'),
(63, 9, 4005, 15, '1/9'),
(64, 10, 3016, 15, '1/12'),
(65, 11, 2008, 15, '1/18'),
(66, 12, 981, 15, '1/37'),
(67, 2, 997, 16, '1/36'),
(68, 3, 2007, 16, '1/18'),
(69, 4, 2972, 16, '1/12'),
(70, 5, 4026, 16, '1/9'),
(71, 6, 4996, 16, '1/7'),
(72, 7, 5981, 16, '1/6'),
(73, 8, 4990, 16, '1/7'),
(74, 9, 3991, 16, '1/9'),
(76, 11, 2009, 16, '1/18'),
(77, 12, 1010, 16, '1/36'),
(78, 2, 1002, 17, '1/36'),
(79, 3, 2015, 17, '1/18'),
(80, 4, 3034, 17, '1/12'),
(81, 5, 4004, 17, '1/9'),
(82, 6, 4991, 17, '1/7'),
(83, 7, 5978, 17, '1/6'),
(84, 8, 4970, 17, '1/7'),
(85, 9, 4004, 17, '1/9'),
(86, 10, 2983, 17, '1/12'),
(87, 11, 2010, 17, '1/18'),
(88, 12, 1009, 17, '1/36'),
(89, 2, 998, 18, '1/36'),
(90, 3, 1999, 18, '1/18'),
(91, 4, 2994, 18, '1/12'),
(92, 5, 3997, 18, '1/9'),
(93, 6, 5010, 18, '1/7'),
(94, 7, 6029, 18, '1/6'),
(95, 8, 4992, 18, '1/7'),
(96, 9, 3998, 18, '1/9'),
(97, 10, 2986, 18, '1/12'),
(98, 11, 1992, 18, '1/18'),
(99, 12, 1005, 18, '1/36'),
(100, 2, 1007, 19, '1/36'),
(101, 3, 2007, 19, '1/18'),
(102, 4, 3020, 19, '1/12'),
(103, 5, 3998, 19, '1/9'),
(104, 6, 4981, 19, '1/7'),
(105, 7, 5998, 19, '1/6'),
(106, 8, 4993, 19, '1/7'),
(107, 9, 4022, 19, '1/9'),
(108, 10, 2997, 19, '1/12'),
(109, 11, 1988, 19, '1/18'),
(110, 12, 989, 19, '1/36'),
(111, 2, 994, 20, '1/36'),
(112, 3, 1988, 20, '1/18'),
(113, 4, 2998, 20, '1/12'),
(114, 5, 4010, 20, '1/9'),
(115, 6, 4965, 20, '1/7'),
(116, 7, 6021, 20, '1/6'),
(117, 8, 5002, 20, '1/7'),
(118, 9, 4006, 20, '1/9'),
(119, 10, 3007, 20, '1/12'),
(120, 11, 2000, 20, '1/18'),
(121, 12, 1009, 20, '1/36'),
(122, 2, 989, 21, '1/36'),
(123, 3, 2011, 21, '1/18'),
(124, 4, 2986, 21, '1/12'),
(125, 5, 3966, 21, '1/9'),
(126, 6, 4985, 21, '1/7'),
(127, 7, 6040, 21, '1/6'),
(128, 8, 5025, 21, '1/7'),
(129, 9, 3985, 21, '1/9'),
(130, 10, 3026, 21, '1/12'),
(131, 11, 1991, 21, '1/18'),
(132, 12, 996, 21, '1/36'),
(133, 2, 1021, 22, '1/35'),
(134, 3, 1987, 22, '1/18'),
(135, 4, 3014, 22, '1/12'),
(136, 5, 3991, 22, '1/9'),
(137, 6, 5009, 22, '1/7'),
(138, 7, 6006, 22, '1/6'),
(139, 8, 4971, 22, '1/7'),
(140, 9, 4005, 22, '1/9'),
(141, 10, 3009, 22, '1/12'),
(142, 11, 2005, 22, '1/18'),
(143, 12, 982, 22, '1/37'),
(144, 2, 998, 23, '1/36'),
(145, 3, 1998, 23, '1/18'),
(146, 4, 2995, 23, '1/12'),
(147, 5, 4011, 23, '1/9'),
(148, 6, 5010, 23, '1/7'),
(149, 7, 5990, 23, '1/6'),
(150, 8, 4995, 23, '1/7'),
(151, 9, 4005, 23, '1/9'),
(152, 10, 3002, 23, '1/12'),
(153, 11, 2005, 23, '1/18'),
(154, 12, 991, 23, '1/36'),
(155, 2, 1008, 24, '1/36'),
(156, 3, 2009, 24, '1/18'),
(157, 4, 3019, 24, '1/12'),
(158, 5, 3992, 24, '1/9'),
(159, 6, 4989, 24, '1/7'),
(160, 7, 6000, 24, '1/6'),
(161, 8, 4982, 24, '1/7'),
(162, 9, 4018, 24, '1/9'),
(163, 10, 3001, 24, '1/12'),
(164, 11, 1994, 24, '1/18'),
(165, 12, 988, 24, '1/36'),
(166, 2, 993, 25, '1/36'),
(167, 3, 1993, 25, '1/18'),
(168, 4, 2998, 25, '1/12'),
(169, 5, 4013, 25, '1/9'),
(170, 6, 4974, 25, '1/7'),
(171, 7, 6008, 25, '1/6'),
(172, 8, 5006, 25, '1/7'),
(173, 9, 4014, 25, '1/9'),
(174, 10, 2996, 25, '1/12'),
(175, 11, 1998, 25, '1/18'),
(176, 12, 1007, 25, '1/36'),
(177, 2, 1017, 26, '1/35'),
(178, 3, 1992, 26, '1/18'),
(179, 4, 3005, 26, '1/12'),
(180, 5, 3978, 26, '1/9'),
(181, 6, 5024, 26, '1/7'),
(182, 7, 5987, 26, '1/6'),
(183, 8, 4987, 26, '1/7'),
(184, 9, 3997, 26, '1/9'),
(185, 10, 3019, 26, '1/12'),
(186, 11, 2007, 26, '1/18'),
(187, 12, 987, 26, '1/36'),
(188, 2, 995, 27, '1/36'),
(189, 3, 2002, 27, '1/18'),
(190, 4, 2995, 27, '1/12'),
(191, 5, 4007, 27, '1/9'),
(192, 6, 5022, 27, '1/7'),
(193, 7, 6003, 27, '1/6'),
(194, 8, 4989, 27, '1/7'),
(195, 9, 3997, 27, '1/9'),
(196, 10, 2968, 27, '1/12'),
(197, 11, 2016, 27, '1/18'),
(198, 12, 1006, 27, '1/36'),
(209, 12, 982, 47, '1/37'),
(210, 2, 991, 50, '1/36'),
(211, 3, 1995, 50, '1/18'),
(212, 4, 2996, 50, '1/12'),
(213, 5, 4001, 50, '1/9'),
(214, 6, 4993, 50, '1/7'),
(215, 7, 5995, 50, '1/6'),
(216, 8, 5037, 50, '1/7'),
(217, 9, 3995, 50, '1/9'),
(218, 10, 2997, 50, '1/12'),
(219, 11, 1990, 50, '1/18'),
(220, 12, 1010, 50, '1/36'),
(221, 2, 995, 51, '1/36'),
(222, 3, 1985, 51, '1/18'),
(223, 4, 2994, 51, '1/12'),
(224, 5, 4014, 51, '1/9'),
(225, 6, 4973, 51, '1/7'),
(226, 7, 6014, 51, '1/6'),
(227, 8, 5000, 51, '1/7'),
(228, 9, 4014, 51, '1/9'),
(229, 10, 3000, 51, '1/12'),
(230, 11, 1998, 51, '1/18'),
(231, 12, 1013, 51, '1/36');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`id_exp`) REFERENCES `experiment` (`id_exp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
