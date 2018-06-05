-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: 62.149.150.175
-- Generato il: Nov 24, 2016 alle 10:42
-- Versione del server: 5.5.52
-- Versione PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Sql930635_1`
--
CREATE DATABASE `Sql930635_1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Sql930635_1`;

-- --------------------------------------------------------

--
-- Struttura della tabella `atc`
--
-- Creazione: Lug 22, 2016 alle 14:39
-- Ultimo cambiamento: Lug 22, 2016 alle 14:39
--

CREATE TABLE IF NOT EXISTS `atc` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `id_territorio` int(11) NOT NULL COMMENT 'Id Territorio',
  `sigla_atc` varchar(4) NOT NULL COMMENT 'sigla ATC ',
  `nome_atc` varchar(150) NOT NULL COMMENT 'Nome esteso ATC',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabella Tipologica degli ambiti territoriali di caccia italiani' AUTO_INCREMENT=357 ;

--
-- Dump dei dati per la tabella `atc`
--

INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(133, 52, 'MO2', 'ATC Modena 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(132, 51, 'MO1', 'ATC Modena 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(131, 50, 'FO6', 'ATC Forlì 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(130, 49, 'FO5', 'ATC Forlì 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(129, 48, 'FO4', 'ATC Forlì 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(128, 47, 'FO3', 'ATC Forlì 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(127, 46, 'FO2', 'ATC Forlì 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(126, 45, 'FO1', 'ATC Forlì 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(125, 44, 'FE9', 'ATC Ferrara 9');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(124, 43, 'FE8', 'ATC Ferrara 8');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(123, 42, 'FE7', 'ATC Ferrara 7');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(122, 41, 'FE6', 'ATC Ferrara 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(121, 40, 'FE5', 'ATC Ferrara 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(120, 39, 'FE4', 'ATC Ferrara 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(119, 38, 'FE3', 'ATC Ferrara 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(118, 37, 'FE2', 'ATC Ferrara 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(117, 36, 'FE1', 'ATC Ferrara 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(116, 34, 'BO03', 'ATC Bologna 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(115, 33, 'BO02', 'ATC Bologna 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(114, 32, 'BO01', 'ATC Bologna 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(113, 31, 'SA01', 'ATC Salerno');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(112, 30, 'NA01', 'ATC Napoli');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(111, 29, 'CE01', 'ATC Caserta');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(110, 28, 'BN01', 'ATC Benevento');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(109, 27, 'AV01', 'ATC Avellino');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(108, 26, 'VV02', 'ATC Vibo Valentia 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(107, 25, 'VV01', 'ATC Vibo Valentia 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(106, 24, 'RC02', 'ATC Reggio Calabria 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(105, 23, 'RC01', 'ATC Reggio Calabria 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(104, 277, 'KR02', 'ATC Crotone 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(103, 22, 'KR01', 'ATC Crotone 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(102, 21, 'CS03', 'ATC Cosenza 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(101, 20, 'CS02', 'ATC Cosenza 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(100, 19, 'CS01', 'ATC Cosenza 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(99, 18, 'CZ02', 'ATC Catanzaro 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(98, 17, 'CZ01', 'ATC Catanzaro 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(97, 16, 'PZ03', 'ATC Potenza 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(96, 15, 'PZ02', 'ATC Potenza 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(95, 14, 'PZ01', 'ATC Potenza 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(94, 13, 'MT B', 'ATC Matera B');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(93, 12, 'MT A', 'ATC Matera A');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(92, 11, 'TE02', 'ATC Vomano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(91, 10, 'TE01', 'ATC Salinello');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(90, 9, 'PE01', 'ATC Pescara');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(89, 8, 'AQ06', 'ATC Sulmona');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(88, 7, 'AQ05', 'ATC Roveto Carseolano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(87, 6, 'AQ04', 'ATC Subequano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(86, 5, 'AQ03', 'ATC L''Aquila');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(85, 4, 'AQ02', 'ATC Barisciano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(84, 3, 'AQ01', 'ATC Avezzano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(83, 2, 'CH02', 'ATC Vastese');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(82, 1, 'CH01', 'ATC Chietino Lancianese');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(152, 71, 'PC09', 'ATC Piacenza 9');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(151, 70, 'PC08', 'ATC Piacenza 8');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(150, 69, 'PC07', 'ATC Piacenza 7');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(149, 68, 'PC06', 'ATC Piacenza 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(148, 67, 'PC05', 'ATC Piacenza 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(147, 66, 'PC04', 'ATC Piacenza 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(146, 65, 'PC03', 'ATC Piacenza 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(145, 64, 'PC02', 'ATC Piacenza 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(144, 63, 'PC01', 'ATC Piacenza 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(143, 62, 'PR09', 'ATC Parma 9');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(142, 61, 'PR08', 'ATC Parma 8');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(141, 60, 'PR07', 'ATC Parma 7');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(140, 59, 'PR06', 'ATC Parma 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(139, 58, 'PR05', 'ATC Parma 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(138, 57, 'PR04', 'ATC Parma 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(137, 56, 'PR03', 'ATC Parma 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(136, 55, 'PR02', 'ATC Parma 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(135, 54, 'PR01', 'ATC Parma 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(134, 53, 'MO3', 'ATC Modena 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(153, 72, 'PC10', 'ATC Piacenza 10');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(154, 73, 'PC11', 'ATC Piacenza 11');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(155, 74, 'RA01', 'ATC Ravenna 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(156, 75, 'RA02', 'ATC Ravenna 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(157, 76, 'RA03', 'ATC Ravenna 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(158, 77, 'RE01', 'ATC Reggio Emilia 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(159, 78, 'RE02', 'ATC Reggio Emilia 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(160, 79, 'RE03', 'ATC Reggio Emilia 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(161, 80, 'RE04', 'ATC Reggio Emilia 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(162, 81, 'RN01', 'ATC Reggio Rimini 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(163, 82, 'RN02', 'ATC Reggio Rimini 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(164, 83, 'GO13', 'ATC Dist. Ven. N.13');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(165, 84, 'GO07', 'ATC Dist. Ven. N.7');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(166, 85, 'PN11', 'ATC Dist. Ven. N.11');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(167, 86, 'PN04', 'ATC Dist. Ven. N.4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(168, 87, 'PN06', 'ATC Dist. Ven. N.6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(169, 88, 'PN09', 'ATC Dist. Ven. N.9');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(170, 89, 'TS12', 'ATC Dist. Ven. N.12');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(171, 90, 'UD10', 'ATC Dist. Ven. N.10');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(172, 91, 'UD02', 'ATC Dist. Ven. N.2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(173, 92, 'UD14', 'ATC Dist. Ven. N.14');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(174, 93, 'UD03', 'ATC Dist. Ven. N.3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(175, 94, 'UD05', 'ATC Dist. Ven. N.5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(176, 95, 'UD08', 'ATC Dist. Ven. N.8');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(177, 96, 'UD15', 'ATC Dist. Ven. N.15');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(178, 97, 'UD15', 'ATC Dist. Ven. N.1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(179, 98, 'FR01', 'ATC Frosinone 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(180, 99, 'FR02', 'ATC Frosinone 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(181, 100, 'LT01', 'ATC Latina 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(182, 101, 'LT02', 'ATC Latina 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(183, 102, 'RI01', 'ATC Rieti 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(184, 103, 'RI02', 'ATC Rieti 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(185, 104, 'RM01', 'ATC Roma 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(186, 105, 'RM02', 'ATC Roma 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(187, 106, 'VT01', 'ATC Viterbo 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(188, 107, 'VT02', 'ATC Viterbo 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(189, 108, 'GE01', 'ATC Genova 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(190, 109, 'GE02', 'ATC Genova 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(191, 110, 'GE03', 'ATC Genova 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(192, 111, 'IM01', 'ATC Imperia 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(193, 112, 'IM02', 'ATC Imperia 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(194, 113, 'SP01', 'ATC La Spezia 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(195, 114, 'SP02', 'ATC La Spezia 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(196, 115, 'SV01', 'ATC Savona 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(197, 116, 'SV02', 'ATC Savona 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(198, 117, 'SV03', 'ATC Savona 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(199, 118, 'SV04', 'ATC Savona 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(200, 119, 'SV05', 'ATC Savona 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(201, 120, 'BG01', 'ATC Pianura Bergamasca');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(202, 121, 'BG02', 'ATC Prealpi Bergamasche');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(203, 122, 'BS01', 'ATC Brescia Unico');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(204, 124, 'CO01', 'ATC Como 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(205, 125, 'CO02', 'ATC Como 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(206, 126, 'CR01', 'ATC Cremona 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(207, 127, 'CR02', 'ATC Cremona 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(208, 128, 'CR03', 'ATC Cremona 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(209, 129, 'CR04', 'ATC Cremona 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(210, 130, 'CR05', 'ATC Cremona 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(211, 131, 'CR06', 'ATC Cremona 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(212, 132, 'CR07', 'ATC Cremona 7');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(213, 133, 'LC01', 'ATC Lecco 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(214, 134, 'LO04', 'ATC Lodi 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(215, 135, 'LO06', 'ATC Lodi 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(216, 136, 'MN01', 'ATC Mantova 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(217, 137, 'MN02', 'ATC Mantova 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(218, 138, 'MN03', 'ATC Mantova 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(219, 139, 'MN04', 'ATC Mantova 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(220, 140, 'MN05', 'ATC Mantova 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(221, 141, 'MN06', 'ATC Mantova 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(222, 142, 'MB01', 'ATC Brianteo');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(223, 143, 'MI01', 'ATC 1 Pianura Milanese');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(224, 144, 'MI02', 'ATC 2 San Colombano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(225, 145, 'PV01', 'ATC 1 Lomellina ovest');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(226, 146, 'PV02', 'ATC 2 Lomellina est');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(227, 147, 'PV03', 'ATC 3 Pavese');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(228, 148, 'PV04', 'ATC 4 Oltrepò Nord');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(229, 149, 'PV05', 'ATC 5 Oltrepò Sud');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(230, 150, 'VA01', 'ATC Varese 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(231, 151, 'VA02', 'ATC Varese 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(232, 152, 'VA03', 'ATC Varese 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(233, 153, 'AN01', 'ATC Ancona 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(234, 154, 'AN02', 'ATC Ancona 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(235, 155, 'AP01', 'ATC Ascoli Piceno 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(236, 156, 'AP02', 'ATC Ascoli Piceno 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(237, 157, 'MC01', 'ATC Macerata 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(238, 158, 'MC02', 'ATC Macerata 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(239, 159, 'PS01', 'ATC Pesaro 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(240, 160, 'PS02', 'ATC Pesaro 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(241, 161, 'CB01', 'ATC 1 Campobasso');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(242, 278, 'CB02', 'ATC 2 Termoli');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(243, 162, 'IS01', 'ATC 3 Isernia');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(244, 163, 'AL01', 'ATC Alessandria 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(245, 164, 'AL02', 'ATC Alessandria 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(246, 165, 'AL03', 'ATC Alessandria 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(247, 166, 'AL04', 'ATC Alessandria 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(248, 167, 'AT01', 'ATC Asti 1 Nord Tanaro');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(249, 168, 'AT02', 'ATC Asti 1 Sud Tanaro');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(250, 169, 'BI01', 'ATC Biella 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(251, 170, 'CN01', 'ATC Cuneo 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(252, 171, 'CN02', 'ATC Cuneo 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(253, 172, 'CN03', 'ATC Cuneo 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(254, 173, 'CN04', 'ATC Cuneo 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(255, 174, 'CN05', 'ATC Cuneo 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(256, 175, 'NO01', 'ATC Novara 1 Ticino');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(257, 176, 'NO02', 'ATC Novara 2 Sesia');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(258, 177, 'TO01', 'ATC Torino 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(259, 178, 'TO02', 'ATC Torino 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(260, 179, 'TO03', 'ATC Torino 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(261, 180, 'TO04', 'ATC Torino 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(262, 181, 'TO05', 'ATC Torino 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(263, 182, 'VC01', 'ATC Vercelli 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(264, 183, 'VC02', 'ATC Vercelli 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(265, 184, 'BA01', 'ATC Bari');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(266, 185, 'BR01', 'ATC Brindisi A');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(267, 186, 'FG01', 'ATC Foggia');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(268, 187, 'LE01', 'ATC Lecce');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(269, 188, 'TA01', 'ATC Taranto');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(270, 189, 'AG01', 'ATC Agrigento 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(271, 190, 'AG02', 'ATC Agrigento 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(272, 191, 'AG03', 'ATC Agrigento 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(273, 192, 'CL01', 'ATC Caltanissetta 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(274, 193, 'CL02', 'ATC Caltanissetta 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(275, 194, 'CT01', 'ATC Catania 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(276, 195, 'CT02', 'ATC Catania 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(277, 196, 'EN01', 'ATC Enna 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(278, 197, 'EN02', 'ATC Enna 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(279, 198, 'ME01', 'ATC Messina 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(280, 199, 'ME02', 'ATC Messina 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(281, 200, 'ME03', 'ATC Messina 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(282, 201, 'PA01', 'ATC Palermo 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(283, 202, 'PA02', 'ATC Palermo 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(284, 203, 'PA03', 'ATC Palermo 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(285, 204, 'RG01', 'ATC Ragusa 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(286, 205, 'RG02', 'ATC Ragusa 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(287, 206, 'SR01', 'ATC Siracusa 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(288, 207, 'SR02', 'ATC Siracusa 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(289, 208, 'TP01', 'ATC Trapani 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(290, 209, 'TP02', 'ATC Trapani 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(291, 210, 'TP03', 'ATC Trapani 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(292, 211, 'TP04', 'ATC Trapani 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(293, 212, 'AR01', 'ATC Arezzo 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(294, 213, 'AR02', 'ATC Arezzo 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(295, 214, 'AR03', 'ATC Arezzo 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(296, 215, 'FI04', 'ATC Firenze 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(297, 216, 'FI05', 'ATC Firenze 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(298, 217, 'GR06', 'ATC Grosseto 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(299, 218, 'GR07', 'ATC Grosseto 7');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(300, 219, 'GR08', 'ATC Grosseto 8');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(301, 220, 'LI09', 'ATC Livorno 9');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(302, 221, 'LI10', 'ATC Livorno 10');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(303, 222, 'LU11', 'ATC Lucca 11');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(304, 223, 'LU12', 'ATC Lucca 12');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(305, 224, 'MS13', 'ATC Massa 13');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(306, 225, 'PI14', 'ATC Pisa 14');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(307, 226, 'PI15', 'ATC Pisa 15');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(308, 227, 'PT16', 'ATC Pistoia 16');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(309, 228, 'SI17', 'ATC Siena 17');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(310, 229, 'SI18', 'ATC Siena 18');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(311, 230, 'SI18', 'ATC Siena 19');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(312, 231, 'BZ01', 'Distretto dell’Alta Pusteria');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(313, 232, 'BZ02', 'Distretto della Bassa Atesina');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(314, 233, 'BZ03', 'Distretto della Val Venosta');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(315, 234, 'BZ04', 'Distretto di Bolzano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(316, 235, 'BZ05', 'Distretto di Bressanone');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(317, 236, 'BZ06', 'Distretto di Brunico');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(318, 237, 'BZ07', 'Distretto di Merano');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(319, 238, 'BZ08', 'Distretto di Vipiteno');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(320, 239, 'PG01', 'ATC Perugia 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(321, 240, 'PG02', 'ATC Perugia 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(322, 241, 'TR03', 'ATC Terni 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(323, 242, 'PD01', 'ATC Padova 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(324, 243, 'PD02', 'ATC Padova 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(325, 244, 'PD03', 'ATC Padova 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(326, 245, 'PD04', 'ATC Padova 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(327, 246, 'PD05', 'ATC Padova 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(328, 247, 'RO01', 'ATC Rovigo 4 A1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(329, 248, 'RO02', 'ATC Rovigo 4 A2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(330, 249, 'RO03', 'ATC Rovigo 4 A3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(331, 250, 'TV01', 'ATC Treviso 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(332, 251, 'TV10', 'ATC Treviso 10');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(333, 252, 'TV11', 'ATC Treviso 11');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(334, 253, 'TV12', 'ATC Treviso 12');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(335, 254, 'TV13', 'ATC Treviso 13');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(336, 255, 'TV02', 'ATC Treviso 02');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(337, 256, 'TV03', 'ATC Treviso 03');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(338, 257, 'TV04', 'ATC Treviso 04');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(339, 258, 'TV05', 'ATC Treviso 05');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(340, 259, 'TV06', 'ATC Treviso 06');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(341, 260, 'TV07', 'ATC Treviso 07');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(342, 261, 'TV08', 'ATC Treviso 08');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(343, 262, 'TV09', 'ATC Treviso 09');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(344, 263, 'VE01', 'ATC Venezia 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(345, 264, 'VE02', 'ATC Venezia 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(346, 265, 'VE03', 'ATC Venezia 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(347, 267, 'VE04', 'ATC Venezia 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(348, 268, 'VE05', 'ATC Venezia 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(349, 269, 'VR01', 'ATC Verona 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(350, 270, 'VR02', 'ATC Verona 2');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(351, 271, 'VR03', 'ATC Verona 3');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(352, 272, 'VR04', 'ATC Verona 4');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(353, 273, 'VR05', 'ATC Verona 5');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(354, 274, 'VR06', 'ATC Verona 6');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(355, 275, 'VI01', 'ATC Vicenza 1');
INSERT INTO `atc` (`id`, `id_territorio`, `sigla_atc`, `nome_atc`) VALUES(356, 276, 'VI02', 'ATC Vicenza 2');

-- --------------------------------------------------------

--
-- Struttura della tabella `cane`
--
-- Creazione: Lug 22, 2016 alle 14:39
-- Ultimo cambiamento: Lug 22, 2016 alle 14:39
--

CREATE TABLE IF NOT EXISTS `cane` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `nome` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'nome cane',
  `url_foto` varchar(150) DEFAULT NULL COMMENT 'foto cane',
  `id_user` int(11) NOT NULL COMMENT 'padrone',
  `anni` int(11) NOT NULL COMMENT 'eta cane',
  `note` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabella dei cani da caccia' AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `cane`
--

INSERT INTO `cane` (`id`, `nome`, `url_foto`, `id_user`, `anni`, `note`) VALUES(1, 'birba', './uploads/Penguins.jpg', 3, 4, 'Golden Terrier');

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--
-- Creazione: Ott 06, 2016 alle 20:40
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `titolo` varchar(150) DEFAULT NULL COMMENT 'Titolo dell''evento',
  `data_evento` datetime NOT NULL COMMENT 'Data Evento',
  `importo` double NOT NULL COMMENT 'Costo evento',
  `id_squadra` int(11) NOT NULL COMMENT 'Squadra che ha inserito l''evento',
  `descrizione` varchar(500) DEFAULT NULL COMMENT 'Descrizione dell''evento',
  `url_foto` varchar(150) DEFAULT NULL COMMENT 'Immagine evento',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabella degli eventi di una squadra al cinghiale' AUTO_INCREMENT=68 ;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(1, '', '0000-00-00 00:00:00', 0, 0, '', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(2, '', '0000-00-00 00:00:00', 0, 0, '', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(3, '', '0000-00-00 00:00:00', 20, 0, 'Cacciata Brancalino', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(4, '', '0000-00-00 00:00:00', 20, 0, 'Cacciata Brancalino', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(5, 'Cacciata Brancalino', '0000-00-00 00:00:00', 20, 0, 'Cacciata Brancalino Cacciagrande', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(6, 'Cacciata Brancalino', '0000-00-00 00:00:00', 20, 20, 'Cacciata Brancalino Cacciagrande', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(7, 'Cacciata Brancalino', '0000-00-00 00:00:00', 20, 20, 'Cacciagrande', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(8, 'Cacciata Brancalino', '0000-00-00 00:00:00', 20, 20, 'Cacciagrande', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(9, 'braccata 1', '2016-01-31 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(10, 'braccata 1', '2016-01-30 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(11, 'braccata 1', '2016-02-29 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(12, 'braccata 1', '2016-02-16 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(13, 'braccata 1', '2016-02-17 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(14, 'braccata 1', '2016-02-28 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(15, 'braccata 1', '2016-02-24 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(16, 'braccata 1', '2016-02-09 00:00:00', 27, 19, 'braccata 1 Chiusura', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(17, 'Chiusura ', '2016-02-01 00:00:00', 5, 20, 'stagione  venatoria 2015/2016', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(18, 'Chiusura ', '2016-02-01 00:00:00', 5, 20, 'stagione  venatoria 2015/2016', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(19, 'Chiusura ', '2016-02-01 01:37:44', 5, 20, 'stagione  venatoria 2015/2016', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(20, 'Chiusura ', '2016-02-01 01:46:52', 5, 20, 'stagione  venatoria 2015/2016', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(21, 'Chiusura ', '2016-02-01 01:46:58', 5, 20, 'stagione  venatoria 2015/2016', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(22, 'Chiusura ', '2016-02-01 01:48:24', 5, 20, 'stagione  venatoria 2015/2016', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(23, 'Grazie', '2016-02-02 00:00:00', 22, 20, 'Ciao', './uploads/20160131_144415.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(24, 'grazie', '2016-02-02 00:00:00', 23, 20, 'thank''s', './uploads/Desert.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(25, 'cacciagrande', '2016-01-21 00:00:00', 25, 20, 'caccia', './uploads/Desert.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(26, 'cacciagrande', '2016-01-21 00:00:00', 25, 20, 'caccia', './uploads/Desert.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(27, 'prova', '2016-02-03 17:18:52', 23, 20, 'prova', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(28, 'terterterte', '2016-02-03 19:32:01', 23, 20, 'Pippo', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(29, 'novità', '2016-02-04 21:19:55', 23, 20, 'Novità', './uploads/Chrysanthemum.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(30, '@Parrina', '2016-02-04 21:32:01', 40, 20, 'Parrina', './uploads/Tulips.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(31, 'Evento di caccia della squadra di stedurred', '2016-03-12 08:00:00', 15, 20, 'Evento di caccia della squadra di stedurred', './uploads/piggy-vector-angbir.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(32, '', '0000-00-00 00:00:00', 0, 21, '', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(33, 'Evento di caccia della squadra di stedurred', '0000-00-00 00:00:00', 15, 20, 'Evento di caccia della squadra di stedurred', './uploads/la-storia-infinita-2-locandina1.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(34, 'Evento di caccia della squadra di stedurred', '0000-00-00 00:00:00', 20, 20, 'Evento di caccia della squadra di stedurred', './uploads/stock-vector-smoker-hog-321653072.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(35, 'Evento di caccia della squadra di stedurred', '0000-00-00 00:00:00', 20, 20, 'Evento di caccia della squadra di stedurred', './uploads/stock-vector-smoker-hog-321653072.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(36, 'Evento di caccia della squadra di stedurred', '0000-00-00 00:00:00', 20, 20, 'Evento di caccia della squadra di stedurred v', './uploads/img2.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(37, 'Evento di caccia della squadra di stedurred', '0000-00-00 00:00:00', 20, 20, 'Evento di caccia della squadra di stedurred v', './uploads/img2.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(38, 'Evento di caccia della squadra di stedurred', '2016-04-19 00:00:00', 23, 20, 'Evento di caccia della squadra di stedurred 2', './uploads/img2.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(39, 'Evento di caccia della squadra di stedurred', '2016-11-23 00:00:00', 25, 20, 'Evento di caccia della squadra di stedurred', './uploads/img2.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(40, 'Evento di caccia della squadra di stedurred r', '2016-11-26 00:00:00', 20, 24, 'Evento di caccia della squadra di stedurred r', './uploads/comuniMaremma.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(41, 'Evento di caccia della squadra di stedurred', '2016-09-24 00:00:00', 20, 20, 'Evento di caccia della squadra di stedurred', './uploads/img1.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(42, 'Evento di caccia della squadra di stedurred', '2016-10-12 00:00:00', 20, 20, '', './uploads/img1.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(43, 'Evento di caccia ', '2016-10-18 08:00:00', 20, 20, 'Evento di caccia ', './uploads/img1.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(44, 'Evento di caccia5', '2016-11-12 06:00:00', 23, 20, 'Evento di caccia5', './uploads/comuniMaremma.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(45, 'Evento  di stedurred', '0000-00-00 00:00:00', 5, 20, 'Evento  di stedurred', './uploads/comuniMaremma.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(46, 'Evento di caccia della squadra di stedurred', '2016-11-20 08:00:00', 20, 20, 'Evento di caccia', './uploads/nikko_red_dot.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(47, 'Evento di caccia', '2016-12-08 00:00:00', 20, 20, 'Evento di caccia', './uploads/mp304.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(48, '', '0000-00-00 00:00:00', 0, 20, '', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(49, '', '0000-00-00 00:00:00', 0, 20, '', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(50, '', '2016-11-02 00:00:00', 0, 0, '', '');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(51, '', '2016-11-02 00:00:00', 0, 0, '', '');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(52, 'Evento di caccia della squadra di Utente', '2016-10-15 00:00:00', 15, 22, 'Descrizione Evento di caccia della squadra di Utente', './uploads/13087908_1198625896828285_8651129548387473613_n.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(53, 'Evento di caccia della squadra di Utente', '2016-10-15 00:00:00', 13, 22, 'Evento di caccia della squadra di Utente', './uploads/republic-day-italy-2016-6218479218720768-hp.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(54, 'Evento di caccia della squadra di madonnina cacciatore', '2016-10-15 00:00:00', 15, 20, '', './uploads/13087908_1198625896828285_8651129548387473613_n.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(55, 'Evento di caccia della squadra di madonnina cacciatore', '2016-10-15 00:00:00', 15, 20, '', './uploads/Costa Rican Frog.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(56, 'Evento di caccia della squadra di madonnina cacciatore', '0000-00-00 00:00:00', 15, 20, '', './uploads/Boston City Flow.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(57, 'Evento di caccia della squadra di madonnina cacciatore', '0000-00-00 00:00:00', 15, 20, '', './uploads/Boston City Flow.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(58, 'Evento di caccia della squadra di madonnina cacciatore', '0000-00-00 00:00:00', 15, 20, '', './uploads/Boston City Flow.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(59, 'Evento di caccia della squadra di madonnina cacciatore', '0000-00-00 00:00:00', 15, 20, '', './uploads/Boston City Flow.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(60, 'Evento di caccia della squadra di madonnina cacciatore', '0000-00-00 00:00:00', 15, 20, '', './uploads/Pensive Parakeet.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(61, 'Evento di caccia della squadra di madonnina cacciatore', '2016-11-26 00:00:00', 5, 20, '', './uploads/Boston City Flow.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(62, 'Evento di caccia della squadra di madonnina cacciatore', '2016-12-07 00:00:00', 15, 20, '', './uploads/Pensive Parakeet.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(63, 'Evento di caccia della squadra di madonnina cacciatore', '2016-12-07 00:00:00', 15, 20, '', './uploads/Pensive Parakeet.jpg');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(64, 'Evento di caccia della squadra verre', '2016-10-15 08:30:00', 10, 21, 'Evento di caccia della squadra verre', './uploads/t_home.gif');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(65, 'Evento prova', '2016-11-01 00:00:00', 23, 28, 'Descrizione evento ', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(66, 'Evento di caccia della squadra verre bianco ', '2016-11-18 00:00:00', 0, 30, 'Evento verre bianco ', './uploads/');
INSERT INTO `evento` (`id`, `titolo`, `data_evento`, `importo`, `id_squadra`, `descrizione`, `url_foto`) VALUES(67, 'Evento di caccia della squadra verre bianco ', '2016-11-24 00:00:00', 2, 30, 'Evento verre bianco ', './uploads/IMG_20160818_120327.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `pagamenti`
--
-- Creazione: Nov 02, 2016 alle 13:21
-- Ultimo cambiamento: Nov 02, 2016 alle 13:21
--

CREATE TABLE IF NOT EXISTS `pagamenti` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(20) NOT NULL,
  `importo_pagamento` decimal(7,2) NOT NULL,
  `stato_pagamento` varchar(25) NOT NULL,
  `id_evento` varchar(25) NOT NULL,
  `data_pagamento` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--
-- Creazione: Ott 06, 2016 alle 20:40
--

CREATE TABLE IF NOT EXISTS `prenotazione` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice univoco',
  `id_user` int(11) NOT NULL COMMENT 'Id User',
  `data_prenotazione` datetime NOT NULL COMMENT 'Data prenotazione',
  `id_evento` int(11) NOT NULL COMMENT 'Id Evento',
  `stato` varchar(20) NOT NULL COMMENT 'Stato prenotazione',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabella delle prenotazioni squadre al cinghiale' AUTO_INCREMENT=81 ;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(1, 0, '0000-00-00 00:00:00', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(2, 0, '0000-00-00 00:00:00', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(3, 0, '0000-00-00 00:00:00', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(4, 0, '0000-00-00 00:00:00', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(5, 0, '0000-00-00 00:00:00', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(6, 0, '0000-00-00 00:00:00', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(7, 0, '2016-07-28 00:00:00', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(8, 0, '2016-07-28 01:15:19', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(9, 0, '2016-07-28 01:27:08', 0, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(10, 0, '2016-07-28 01:27:36', 52, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(11, 0, '2016-07-28 01:33:13', 52, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(12, 0, '2016-07-28 01:35:00', 55, '');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(13, 0, '2016-07-28 01:35:43', 55, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(14, 0, '2016-08-07 03:01:53', 55, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(15, 0, '2016-08-07 03:04:03', 42, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(16, 2, '2016-08-07 03:19:32', 55, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(17, 2, '2016-08-07 03:30:54', 42, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(18, 2, '2016-08-07 04:04:32', 61, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(19, 2, '2016-08-07 04:05:39', 39, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(20, 0, '2016-08-07 23:30:04', 54, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(21, 43, '2016-08-08 00:25:40', 53, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(22, 2, '2016-08-14 19:05:31', 46, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(23, 2, '2016-08-16 00:10:29', 53, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(24, 2, '2016-08-16 01:04:15', 65, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(25, 2, '2016-08-18 12:45:32', 54, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(26, 2, '2016-08-18 15:13:23', 66, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(27, 2, '2016-08-18 15:22:09', 67, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(28, 0, '2016-08-28 16:03:24', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(29, 0, '2016-08-28 16:03:33', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(30, 0, '2016-08-28 21:19:27', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(31, 0, '2016-08-28 21:19:38', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(32, 2, '2016-08-29 15:46:07', 64, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(33, 0, '2016-08-31 00:05:16', 46, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(34, 0, '2016-08-31 12:34:36', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(35, 0, '2016-09-01 00:23:06', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(36, 0, '2016-09-01 00:23:11', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(37, 0, '2016-09-03 02:27:45', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(38, 0, '2016-09-03 02:27:50', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(39, 0, '2016-09-03 05:53:29', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(40, 0, '2016-09-03 05:53:34', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(41, 0, '2016-09-03 22:58:16', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(42, 0, '2016-09-03 22:58:21', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(43, 0, '2016-09-05 16:40:57', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(44, 0, '2016-09-05 16:41:19', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(45, 0, '2016-09-06 20:13:02', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(46, 0, '2016-09-06 20:13:08', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(47, 0, '2016-09-07 13:45:30', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(48, 0, '2016-09-07 13:45:35', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(49, 0, '2016-09-08 00:14:36', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(50, 0, '2016-09-08 00:14:41', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(51, 0, '2016-09-10 08:17:06', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(52, 0, '2016-09-10 08:17:11', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(53, 0, '2016-09-11 12:34:45', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(54, 0, '2016-09-11 12:34:50', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(55, 0, '2016-09-12 05:56:13', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(56, 0, '2016-09-12 05:56:17', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(57, 0, '2016-09-14 04:55:29', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(58, 0, '2016-09-14 04:55:35', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(59, 0, '2016-09-16 07:05:47', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(60, 0, '2016-09-16 07:05:55', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(61, 0, '2016-09-16 09:14:03', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(62, 0, '2016-09-16 09:14:09', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(63, 0, '2016-09-18 06:43:56', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(64, 0, '2016-09-18 06:44:01', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(65, 0, '2016-09-18 10:10:46', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(66, 0, '2016-09-18 10:10:51', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(67, 0, '2016-09-20 16:40:54', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(68, 0, '2016-09-20 16:40:59', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(69, 0, '2016-09-23 06:34:51', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(70, 0, '2016-09-23 06:34:57', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(71, 0, '2016-09-25 15:33:47', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(72, 0, '2016-09-25 15:33:52', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(73, 0, '2016-09-27 23:06:33', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(74, 0, '2016-09-27 23:06:37', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(75, 0, '2016-09-30 01:10:20', 42, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(76, 0, '2016-10-02 13:35:44', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(77, 0, '2016-10-02 13:35:51', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(78, 0, '2016-10-04 09:03:12', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(79, 0, '2016-10-04 09:03:17', 0, 'da pagare');
INSERT INTO `prenotazione` (`id`, `id_user`, `data_prenotazione`, `id_evento`, `stato`) VALUES(80, 0, '2016-10-08 23:28:46', 55, 'da pagare');

-- --------------------------------------------------------

--
-- Struttura della tabella `province`
--
-- Creazione: Lug 22, 2016 alle 14:39
-- Ultimo cambiamento: Lug 22, 2016 alle 14:39
--

CREATE TABLE IF NOT EXISTS `province` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `id_regione` int(11) NOT NULL COMMENT 'Id Regione',
  `sigla_provincia` varchar(2) NOT NULL COMMENT 'sigla provincia',
  `nome_provincia` varchar(50) NOT NULL COMMENT 'nome provincia',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dump dei dati per la tabella `province`
--

INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(1, 12, 'TO', 'Torino');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(2, 12, 'VC', 'Vercelli');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(3, 12, 'NO', 'Novara');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(4, 12, 'CN', 'Cuneo');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(5, 12, 'AT', 'Asti');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(6, 12, 'AL', 'Alessandria');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(7, 12, 'BI', 'Biella');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(8, 12, 'VB', 'Verbano-Cusio-Ossola');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(9, 19, 'AO', 'Aosta');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(10, 9, 'VA', 'Varese	');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(11, 9, 'CO', 'Como	');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(12, 9, 'SO', 'Sondrio');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(13, 9, 'MI', 'Milano');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(14, 9, 'BG', 'Bergamo');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(15, 9, 'BS', 'Brescia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(16, 9, 'PV', 'Pavia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(17, 9, 'CR', 'Cremona');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(18, 9, 'MN', 'Mantova');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(19, 9, 'LC', 'Lecco');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(20, 9, 'LO', 'Lodi');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(21, 17, 'BZ', 'Bolzano');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(22, 17, 'TN', 'Trento');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(23, 20, 'VR', 'Verona');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(24, 20, 'VI', 'Vicenza');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(25, 20, 'BL', 'Belluno');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(26, 20, 'TV', 'Treviso');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(27, 20, 'VE', 'Venezia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(28, 20, 'PD', 'Padova');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(29, 20, 'RO', 'Rovigo');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(30, 6, 'UD', 'Udine');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(31, 6, 'GO', 'Gorizia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(32, 6, 'TS', 'Trieste');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(33, 6, 'PN', 'Pordenone');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(34, 8, 'IM', 'Imperia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(35, 8, 'SV', 'Savona');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(36, 8, 'GE', 'Genova');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(37, 8, 'SP', 'La Spezia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(38, 5, 'PC', 'Piacenza');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(39, 5, 'PR', 'Parma');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(40, 5, 'RE', 'Reggio nell''Emilia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(41, 5, 'MO', 'Modena');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(42, 5, 'BO', 'Bologna');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(43, 5, 'FE', 'Ferrara');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(44, 5, 'RA', 'Ravenna');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(45, 5, 'FO', 'Forli''-Cesena');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(46, 5, 'RN', 'Rimini');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(47, 16, 'MS', 'Massa-Carrara');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(48, 16, 'LU', 'Lucca');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(49, 16, 'PT', 'Pistoia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(50, 16, 'FI', 'Firenze');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(51, 16, 'LI', 'Livorno');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(52, 16, 'PI', 'Pisa');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(53, 16, 'AR', 'Arezzo');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(54, 16, 'SI', 'Siena');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(55, 16, 'GR', 'Grosseto');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(56, 16, 'PO', 'Prato');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(57, 18, 'PG', 'Perugia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(58, 18, 'TR', 'Terni');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(59, 10, 'PS', 'Pesaro e Urbino');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(60, 10, 'AN', 'Ancona');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(61, 10, 'MC', 'Macerata');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(62, 10, 'AP', 'Ascoli Piceno');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(63, 7, 'VT', 'Viterbo');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(64, 7, 'RI', 'Rieti');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(65, 7, 'RM', 'Roma');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(66, 7, 'LT', 'Latina');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(67, 7, 'FR', 'Frosinone');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(68, 1, 'AQ', 'L''Aquila');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(69, 1, 'TE', 'Teramo	');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(70, 1, 'PE', 'Pescara');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(71, 1, 'CH', 'Chieti');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(72, 11, 'CB', 'Campobasso');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(73, 11, 'IS', 'Isernia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(74, 4, 'CE', 'Caserta');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(75, 4, 'BN', 'Benevento');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(76, 4, 'NA', 'Napoli');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(77, 4, 'AV', 'Avellino');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(78, 4, 'SA', 'Salerno');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(79, 13, 'FG', 'Foggia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(80, 13, 'BA', 'Bari');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(81, 13, 'TA', 'Taranto');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(82, 13, 'BR', 'Brindisi');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(83, 13, 'LE', 'Lecce');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(84, 2, 'PZ', 'Potenza');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(85, 2, 'MT', 'Matera');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(86, 3, 'CS', 'Cosenza');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(87, 3, 'CZ', 'Catanzaro');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(88, 3, 'RC', 'Reggio di Calabria');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(89, 3, 'KR', 'Crotone');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(90, 3, 'VV', 'Vibo Valentia');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(91, 15, 'TP', 'Trapani');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(92, 15, 'PA', 'Palermo');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(93, 15, 'ME', 'Messina');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(94, 15, 'AG', 'Agrigento');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(95, 15, 'CL', 'Caltanissetta');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(96, 15, 'EN', 'Enna');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(97, 15, 'CT', 'Catania');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(98, 15, 'RG', 'Ragusa');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(99, 15, 'SR', 'Siracusa');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(100, 14, 'SS', 'Sassari');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(101, 14, 'NU', 'Nuoro');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(102, 14, 'CA', 'Cagliari');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(103, 14, 'OR', 'Oristano');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(104, 13, 'BT', 'Barletta-Andria-Trani');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(105, 14, 'CI', 'Carbonia Iglesias');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(106, 10, 'FM', 'Fermo');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(107, 14, 'VS', 'Medio Campidano');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(108, 9, 'MB', 'Monza-Brianza');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(109, 14, 'OG', 'Ogliastra');
INSERT INTO `province` (`id`, `id_regione`, `sigla_provincia`, `nome_provincia`) VALUES(110, 14, 'OT', 'Olbia Tempio');

-- --------------------------------------------------------

--
-- Struttura della tabella `regioni`
--
-- Creazione: Lug 22, 2016 alle 14:39
-- Ultimo cambiamento: Lug 22, 2016 alle 14:39
--

CREATE TABLE IF NOT EXISTS `regioni` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `regione` varchar(50) NOT NULL COMMENT 'Nome Regione',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dump dei dati per la tabella `regioni`
--

INSERT INTO `regioni` (`id`, `regione`) VALUES(1, 'Abruzzo');
INSERT INTO `regioni` (`id`, `regione`) VALUES(2, 'Basilicata');
INSERT INTO `regioni` (`id`, `regione`) VALUES(3, 'Calabria');
INSERT INTO `regioni` (`id`, `regione`) VALUES(4, 'Campania');
INSERT INTO `regioni` (`id`, `regione`) VALUES(5, 'Emilia Romagna');
INSERT INTO `regioni` (`id`, `regione`) VALUES(6, 'Friuli Venezia Giulia');
INSERT INTO `regioni` (`id`, `regione`) VALUES(7, 'Lazio');
INSERT INTO `regioni` (`id`, `regione`) VALUES(8, 'Liguria');
INSERT INTO `regioni` (`id`, `regione`) VALUES(9, 'Lombardia');
INSERT INTO `regioni` (`id`, `regione`) VALUES(10, 'Marche');
INSERT INTO `regioni` (`id`, `regione`) VALUES(11, 'Molise');
INSERT INTO `regioni` (`id`, `regione`) VALUES(12, 'Piemonte');
INSERT INTO `regioni` (`id`, `regione`) VALUES(13, 'Puglia');
INSERT INTO `regioni` (`id`, `regione`) VALUES(14, 'Sardegna');
INSERT INTO `regioni` (`id`, `regione`) VALUES(15, 'Sicilia');
INSERT INTO `regioni` (`id`, `regione`) VALUES(16, 'Toscana');
INSERT INTO `regioni` (`id`, `regione`) VALUES(17, 'Trentino Alto Adige');
INSERT INTO `regioni` (`id`, `regione`) VALUES(18, 'Umbria');
INSERT INTO `regioni` (`id`, `regione`) VALUES(19, 'Valle d''Aosta');
INSERT INTO `regioni` (`id`, `regione`) VALUES(20, 'Veneto');

-- --------------------------------------------------------

--
-- Struttura della tabella `squadra`
--
-- Creazione: Lug 22, 2016 alle 14:39
-- Ultimo cambiamento: Ago 18, 2016 alle 13:08
--

CREATE TABLE IF NOT EXISTS `squadra` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `nome` varchar(50) DEFAULT NULL COMMENT 'nome squadra',
  `numero` varchar(5) NOT NULL COMMENT 'numero squadra',
  `url_foto` varchar(150) DEFAULT NULL COMMENT 'foto profilo',
  `catture_cinghiali` int(11) DEFAULT '0' COMMENT 'numero totale di cinghiali catturati',
  `id_atc` int(11) NOT NULL COMMENT 'Atc squadra',
  `trn_date` date NOT NULL COMMENT 'Data Registrazione',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dump dei dati per la tabella `squadra`
--

INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(5, 'prova squadra', '22', './maremmacinghiale.it/images/uploads/', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(6, 'prova squadra 2', '22', 'maremmacinghiale.it/images/uploads/', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(7, 'prova squadra', '31', 'maremmacinghiale.it/images/uploads/', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(8, 'prova squadra', '22', 'maremmacinghiale.it/images/uploads/', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(9, 'prova squadra 3', '33', 'maremmacinghiale.it/images/uploads/', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(10, 'prova squadra 3', '33', 'maremmacinghiale.it/images/uploads/', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(11, 'prova squadra 4', '44', 'maremmacinghiale.it/images/uploads/boar.jpg', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(12, 'prova squadra 5', '55', '/images/uploads/button.png', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(13, 'prova squadra 6', '66', './images/uploadsheader1.jpg', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(14, 'prova squadra 7', '778', './images/uploadsimg2.jpg', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(15, 'prova squadra 8', '88', './images/uploads/img1.jpg', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(16, 'prova squadra 9', '9', './images/uploads/img1.jpg', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(17, 'prova squadra 10', '10', './uploads/img3.jpg', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(18, 'prova squadra 12', '12', './uploads/img2.jpg', 0, 0, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(19, 'cacciatori1', '19', './uploads/pn.png', 0, 180, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(20, 'madonnina cacciatore', '32/12', './uploads/pn.png', 0, 299, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(21, 'verre', '11', './uploads/s1.png', 0, 186, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(22, 'Offreghete', '12', './uploads/hogrunning.png', 0, 88, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(24, 'Pomonte', '76/12', './uploads/Penguins.jpg', 0, 299, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(25, 'Cacciatori del Verre', '1', './uploads/Penguins.jpg', 0, 186, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(26, 'Cacciatori del Verre2', '2', './uploads/Penguins.jpg', 0, 186, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(27, 'Bucaioli ', 'A12', './uploads/', 0, 300, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(28, 'Cacciatori della bestia nera', '23', './uploads/16 - 1.jpg', 0, 300, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(29, 'Cecchini della Maremma ', '7', './uploads/', 0, 300, '0000-00-00');
INSERT INTO `squadra` (`id`, `nome`, `numero`, `url_foto`, `catture_cinghiali`, `id_atc`, `trn_date`) VALUES(30, 'Il verre bianco ', '3', './uploads/IMG_20160818_120327.jpg', 0, 298, '0000-00-00');

-- --------------------------------------------------------

--
-- Struttura della tabella `territorio`
--
-- Creazione: Lug 22, 2016 alle 14:39
-- Ultimo cambiamento: Lug 22, 2016 alle 14:39
--

CREATE TABLE IF NOT EXISTS `territorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `comprensorio` varchar(2000) NOT NULL COMMENT 'Insieme dei Comuni ricadenti in un ATC',
  `id_provincia` int(11) NOT NULL COMMENT 'Id Provincia',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=279 ;

--
-- Dump dei dati per la tabella `territorio`
--

INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(1, 'Altino,Ari,Arielli,Bucchianico,Canosa Sannita,Casacanditella,Casalincontrada,Casoli,Castel Frentano,Chieti,Civitaluparella,Civitella Messer Raimondo,Colledimacine,Crecchio,Fallo,Fara Filiorum Petri,Fara San Martino,Filetto,Fossacesia,Francavilla al Mare,Frisa,Gamberale,Gessopalena,Giuliano Teatino, Guardiagrele, Lama dei Peligni,Lanciano,Lettopalena, Miglianico,Montebello sul Sangro,Montelapiano,Montenerodomo,Mozzagrogna,Orsogna,Ortona,Palena,Palombaro,Pennadomo,Pennapiedimonte,Pizzoferrato,Poggiofiorito,Pretoro,Quadri,Rapino,Ripa Teatina,Rocca San Giovanni,Roccamontepiano,Roccascalegna,San Giovanni Teatino,San Martino sulla Marrucina,San Vito Chietino,Sant''Eusanio del Sangro,Santa Maria Imbaro,Taranta Peligna,Tollo,Torrevecchia Teatina,Torricella Peligna,Treglio,Vacri,Villa Santa Maria,Villamagna', 71);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(2, 'Archi,Atessa,Bomba,Borrello,Carpineto Sinello,Carunchio,Casalanguida,Casalbordino,Castel Guidone,Castiglione Messer Marino,Celenza Sul Trigno,Colledimezzo,Cupello,Dogliola,Fraine,Fresagrandinaria,Furci,Gissi,Guilmi,Lentella,Liscia,Montazzoli,Monteferrante,Monteodorisio,Paglieta,Palmoli,Perano,Pietraferrazzana,Pollutri,Roccaspinalveti,Roio Del Sangro,Rosello,S. Giovanni Lipioni,S.Buono,San Salvo,Scerni,Schiavi D''Abruzzo,Torino Di Sangro,Tornareccio,Torrebruna,Tufillo,Vasto,Villalfonsina', 71);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(3, 'Avezzano', 68);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(4, 'Barisciano', 68);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(5, 'L''Aquila', 68);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(6, 'Subequano', 68);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(7, 'Roveto Carseolano', 68);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(8, 'Sulmona', 68);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(9, 'Pescara', 70);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(10, 'Salinello', 69);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(11, 'Vomano', 69);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(12, 'Matera', 85);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(13, 'Stigliano', 85);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(14, 'Rionero Vulture', 84);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(15, 'Potenza', 84);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(16, 'San Brancato di S. Arcangelo', 84);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(17, 'Catanzaro', 87);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(18, 'Catanzaro', 87);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(19, 'Cosenza', 86);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(20, 'Cosenza', 86);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(21, 'Cosenza', 86);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(22, 'Crotone', 89);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(277, 'Crotone', 89);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(23, 'Reggio Calabria', 88);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(24, 'Reggio Calabria', 88);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(25, 'Vibo Valentia', 90);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(26, 'Vibo Valentia', 90);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(27, 'Avellino', 77);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(28, 'Benevento', 75);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(29, 'Caserta', 74);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(30, 'Napoli', 76);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(31, 'Salerno', 78);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(32, 'Anzola dell''Emilia, Argelato, Baricella,Bentivoglio, Bologna, Budrio,Calderara di Reno, Castello d''Argile,Castel Maggiore, Castenaso,Crevalcore, Galliera, Granarolo dell''Emilia, Malalbergo,Minerbio, Molinella, Pieve di Cento, Sala Bolognese, San Giorgio di Piano, San Giovanni in Persiceto, San Pietro in Casale,Sant''Agata Bolognese', 42);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(33, 'Bologna, Borgo Tossignano, Casalfiumanese, Castel del Rio, Castel Guelfo,Castel San Pietro Terme, Dozza, Fontanelice, lmola, Loiano, Medicina, Monghidoro, Monterenzio, Monzuno, Mordano, Ozzano, Pianoro, San Benedetto Val di Sambro, San Lazzaro di Savena', 42);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(34, 'Bologna, Camugnano, Casalecchio di Reno, Castel d''Aiano, Castel di Casio,Castiglione dei Pepoli, Gaggio Montano, Granaglione, Grizzana, Lizzano in Belvedere, Marzabotto, Monte San Pietro,Porretta Terme, Sasso Marconi,Valsamoggia, Vergato, Zola Predosa', 42);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(36, 'Bondeno, Cento, Ferrara, Mirabello, Poggio Renatico, Sant''Agostino, Vigarano, Mainarda', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(37, 'Berra, Copparo, Formignana, Jolanda di Savoia, Ro, Tresigallo', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(38, 'Mesola', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(39, 'Codigoro', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(40, 'Comacchio, Lagosanto', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(41, 'Fiscaglia', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(42, 'Ostellato', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(43, 'Masi Torello, Portomaggiore, Voghiera', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(44, 'Argenta', 43);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(45, 'Bertinoro, Castrocaro, Civitella di Romagna, ForIì, Forlimpopoli, Meldola,Predappio', 45);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(46, 'Borghi, Cesena, Cesenatico, Gambettola, Gatteo, Longiano, Mercato Saraceno,Montiano, Roncofreddo, San Mauro Pascoli, Sarsina, Savignano sul Rubicone,Sogliano al Rubicone', 45);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(47, 'Verghereto', 45);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(48, 'Dovadola, Modigliana, Portico, Premilcuore, Rocca San Casciano, Tredozio', 45);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(49, 'Bagno di Romagna, Santa Sofia', 45);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(50, 'Civitella di Romagna, Galeata', 45);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(51, 'Bomporto, Camposanto, Carpi, Cavezzo, Concordia, Finale Emilia, Medolla, Mirandola, Novi, Ravarino, San Felice sul Panaro, San Possidonio, San Prospero', 41);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(52, 'Bastiglia, Campogalliano, Castelfranco Emilia, Castelnuovo Rangone, Castelvetro, Fiorano, Formigine, Guiglia, Maranello, Marano sul Panaro, Modena, Montese, Nonantola, Pavullo, Polinago, Prignano sul Secchia, San Cesario sul Panaro, Sassuolo, Savignano sul Panaro, Serramazzoni, Soliera, Spilamberto, Vignola, Zocca', 41);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(53, 'Fanano, Fiumalbo, Frassinoro, Lama Moccogno, Montecreto, Montefiorino, Palagano, Pievepelago, Riolunato, Sestola', 41);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(54, 'Busseto, Polesine, Roccabianca, Soragna, Zibello', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(55, 'Fontanellato, Fontevivo, San Secondo Parmense, Sissa Trecasali', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(56, 'Colorno, Mezzani, Parma, Sorbolo, Torrile', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(57, 'Langhirano, Lesignano de'' Bagni, Montechiarugolo, Neviano degli Arduini, Parma, Traversetolo', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(58, 'Berceto, Corniglio, Monchio delle Corti, Palanzano, Tizzano Val Parma', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(59, 'Bardi, Bedonia, Borgo Val di Taro, Compiano, Tornolo, Valmozzola, Varsi', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(60, 'Bore, Fidenza, Pellegrino Parmense, Salsomaggiore', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(61, 'Calestano, Collecchio, Felino, Fomovo di Taro, Medesano, Noceto, Parma, Sala Baganza, Solignano, Terenzo, Varano Melegari', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(62, 'Albareto', 39);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(63, 'Borgonuovo Val Tidone, Calendasco, Castel San Giovanni, Gragnano Trebbiense, Rottofreno, Sarmato, Agazzano, Gazzola, Piozzano', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(64, 'Besenzone, Cadeo, Caorso, Cortemaggiore, Fiorenzuola d''Arda, Monticelli d''Ongina, Piacenza, Pontenure, San Pietro in Cerro, Gossolengo, Podenzano', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(65, 'Rivergaro, Travo, Vigolzone', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(66, 'Castelvetro Piacentino, Villanova sull''Arda', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(67, 'Bettola, Gropparello, Lugagnano Val d''Arda', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(68, 'Ponte dell''Olio, Carpaneto Piacentino, San Giorgio Piacentino, Castell''Arquato,Alseno', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(69, 'Farini, Morfasso, Vernasca', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(70, 'Caminata, Nibbiano, Pecorara, Pianello Val Tidone, Ziano Piacentino', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(71, 'Bobbio, Coli, Corte Brugnatella', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(72, 'Cerignale, Ottone, Zerba', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(73, 'Ferriere', 38);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(74, 'Alfonsine, Bagnacavallo, Bagnara di Romagna, Conselice, Cotignola, Fusignano, Lugo, Massalombarda, Sant''Agata Sul Santerno', 44);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(75, 'Cervia, Ravenna, Russi', 44);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(76, 'Brisighella, Casola Valsenio, Castel Bolognese, Faenza, Riolo Terme, Solarolo', 44);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(77, 'Boretto, Brescello, Campegine, Castelnuovo di Sotto, Gattatico, Gualtieri, Poviglio, Sant''Ilario d''Enza', 40);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(78, 'Bagnolo di Piano, Cadelbosco di Sopra, Campagnola Emilia, Correggio, Fabbrico, Guastalla, Luzzara, Novellara, Reggiolo, Reggio Emilia, Rio Saliceto, Rolo, Rubiera, San Martino in Rio', 40);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(79, 'Albinea, Baiso, Bibbiano, Carpineti, Casalgrande, Casina, Castellarano, Cavriago, Canossa, Montecchio Emilia, Quattro CasteIIa, San Polo d''Enza, Scandiano, Toano, Vezzano sul Crostolo, Viano', 40);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(80, 'Busana, Castelnuovo ne'' Monti, Collagna, Ligonchio, Ramiseto, Vetto, Villa Minozzo', 40);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(81, 'Bellaria-Igea Marina, Cattolica, Coriano, Gemmano, Misano Adriatico, Mondaino, Monte Colombo, Montefiore Conca, Monte Gridolfo, Montescudo, Morciano di Romagna, Poggio Torriana, Riccione, Rimini, Saludecio, San Clemente, San Giovanni in Marignano, Santarcangelo di Romagna, Verucchio', 46);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(82, 'Casteldelci, Maiolo, Novafeltria, Pennabilli, San Leo, Sant''’Agata Feltria, Talamello', 46);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(83, 'Carsò', 31);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(84, 'San Floriano del Collio', 31);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(85, 'Bassa Pianura Pordenonese', 33);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(86, 'Prealpi Carniche', 33);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(87, 'Pedemontana Pordenonese', 33);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(88, 'Alta Pianura Pordenonese', 33);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(89, 'Laguna Milocco', 33);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(90, 'Bassa Pianura Udinese', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(91, 'Carnia', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(92, 'Colli Orientali', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(93, 'Valli del Natisone', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(94, 'Colline Moreniche', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(95, 'Alta Pianura Udinese', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(96, 'Pianura Isontina', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(97, 'Tarvisio', 30);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(98, 'Frosinone', 67);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(99, 'Frosinone', 67);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(100, 'Latina', 66);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(101, 'Latina', 66);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(102, 'Rieti', 64);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(103, 'Rieti', 64);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(104, 'Roma', 65);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(105, 'Roma', 65);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(106, 'Viterbo', 63);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(107, 'Viterbo', 63);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(108, 'Genova Ponente', 36);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(109, 'Genova Levante', 36);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(110, 'Genova Centro', 36);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(111, 'Imperia Ponente', 34);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(112, 'Imperia Levante', 34);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(113, 'La Spezia', 37);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(114, 'La Spezia', 37);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(115, 'Savona Levante', 35);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(116, 'Savona Ponente', 35);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(117, 'Valle Erro', 35);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(118, 'Media Valle Bormida', 35);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(119, 'Alta Valle Bormida', 35);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(120, 'Albano Sant`Alessandro, Alme`, Almenno San Bartolomeo, Almenno San Salvatore, Ambivere, Antegnate, Arcene , Arzago d`Adda, Azzano San Paolo, Bagnatica, Barbata, Bariano, Barzana, Bergamo, Bolgare,Boltiere, Bonate Sopra, Bonate Sotto, Bottanuco, Brembate,Brembate Sopra, Brignano Gera d`Adda, Brusaporto, Calcinate, Calcio,Calusco d`Adda, Calvenzano, Canonica d`Adda, Capriate San Gervasio,Caravaggio, Carobbio degli Angeli, Carvico, Casirate d`Adda, Castel Rozzone, Castelli Calepio, Cavernago,  Chignolo d`Isola, Chiuduno, Ciserano, Cividate al Piano, Cologno al Serio, Comun Nuovo, Cortenuova, Costa di Mezzate, Covo, Curno,Dalmine, Fara Gera d`Adda, Fara Olivana con Sola, Filago, Fontanella,Fornovo San Giovanni, Ghisalba, Gorlago, Gorle, Grassobbio, Grumello del Monte, Isso, Lallio, Levate, Lurano, Madone, Mapello, Martinengo,Medolago, Misano Gera d`Adda, Montello, Morengo, Mornico al Serio, Mozzanica, Mozzo, Orio al Serio, Osio Sopra, Osio Sotto, Pagazzano, Paladina, Palazzago, Palosco, Pedrengo, Pognano, Ponte San Pietro, Ponteranica, Pontirolo Nuovo, Presezzo, Pumenengo,Romano di Lombardia, San Paolo d`Argon, Scanzorosciate, Seriate,Solza, Sorisole, Sotto il Monte, Spirano, Stezzano, Suisio, Telgate,Terno d`Isola, Torre Pallavicina, Treviglio, Treviolo, Urgnano,Valbrembo, Verdellino, Verdello, Villa d`Adda, Villa d`Alme`, Zanica', 14);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(121, 'Adrara San Martino, Adrara San Rocco, Albano Sant''Alessandro, Albino, Algua, Alme'', Almenno San Bartolomeo, Almenno San Salvatore, Alzano Lombardo, Ambivere, Aviatico, Barzana, Bedulita, Berbenno, Bergamo, Berzo San Fermo, Bianzano, Blello, Bonate Sopra, Borgo Di Terzo, Bracca, Brembate Di Sopra, Brembilla, Brumano, Calusco D''Adda, Capizzone, Caprino Bergamasco, Carobbio Degli Angeli, Carvico, Casazza, Casnigo, Castelli Caleppio, Castro, Cazzano Sant''Andrea, Cenate Sopra, Cenate Sotto, Cene, Chiuduno, Cisano Bergamasco, Colzate, Corna Imagna, Costa Di Serina, Costa Valle Imagna, Credaro, Curno, Endine Gaiano, Entratico, Fiorano Al Serio, Fonteno, Foresto Sparso, Fuipiano Valle Imagna, Gandino, Gandosso, Gaverina Terme, Gazzaniga, Gerosa, Gorlago, Gorle, Grone, Grumello Del Monte, Leffe, Locatello, Luzzana, Mapello, Monasterolo Del Castello, Montello, Mozzo, Nembro, Paladina, Palazzago, Parzanica, Pedrengo, Peia, Pianico, Ponte San Pietro, Ponteranica, Pontida, Pradalunga, Predore, Presezzo, Ranica, Ranzanico, Riva Di Solto, Roncola, Rota D''Imagna, San Paolo D''Argon, San Pellegrino Terme, Sant''Omobono Terme, Sarnico, Scanzorosciate, Sedrina, Selvino, Seriate, Solto Collina, Sorisole, Sotto Il Monte Giovanni Xxiii, Spinone Al Lago, Strozza, Tavernola Bergamasca, Terno D''Isola, Torre Boldone, Torre De'' Roveri, Trescore Balneario, Ubiale Clanezzo, Valbrembo, Valsecca, Vertova, Viadanica, Vigano San Martino, Vigolo, Villa D''Adda, Villa D''Alme'', Villa Di Serio, Villongo, Zandobbio, Zogno', 14);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(122, 'Brescia', 15);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(124, 'Canturino', 11);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(125, 'Olgiatese', 11);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(126, 'Cremona', 17);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(127, 'Cremona', 17);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(128, 'Cremona', 17);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(129, 'Cremona', 17);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(130, 'Cremona', 17);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(131, 'Cremona', 17);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(132, 'Cremona', 17);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(133, 'Meratese', 19);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(134, 'Laudense Nord', 20);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(135, 'Laudense Sud', 20);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(136, 'Mantova', 18);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(137, 'Mantova', 18);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(138, 'Mantova', 18);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(139, 'Mantova', 18);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(140, 'Mantova', 18);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(141, 'Mantova', 18);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(142, 'Brianteo', 108);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(143, 'Milano,Abbiategrasso,Morimondo', 13);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(144, 'Milano', 13);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(145, 'Pavia', 16);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(146, 'Pavia', 16);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(147, 'Pavia', 16);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(148, 'Pavia', 16);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(149, 'Pavia', 16);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(150, 'Varese', 10);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(151, 'Varese', 10);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(152, 'Varese', 10);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(153, 'Ancona', 60);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(154, 'Ancona', 60);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(155, 'Ascoli Piceno', 62);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(156, 'Ascoli Piceno', 62);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(157, 'Macerata', 61);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(158, 'Macerata', 61);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(159, 'Pesaro', 59);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(160, 'Pesaro', 59);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(161, 'Campobasso', 72);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(278, 'Termoli', 72);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(162, 'Isernia', 73);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(163, 'Alessandria', 6);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(164, 'Alessandria', 6);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(165, 'Alessandria', 6);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(166, 'Alessandria', 6);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(167, 'Asti', 5);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(168, 'Asti', 5);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(169, 'Biella', 7);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(170, 'Cuneo', 4);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(171, 'Cuneo', 4);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(172, 'Cuneo', 4);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(173, 'Cuneo', 4);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(174, 'Cuneo', 4);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(175, 'Novara', 3);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(176, 'Novara', 3);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(177, 'Torino', 1);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(178, 'Torino', 1);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(179, 'Torino', 1);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(180, 'Torino', 1);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(181, 'Torino', 1);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(182, 'Vercelli', 2);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(183, 'Vercelli', 2);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(184, 'Bari', 80);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(185, 'Brindisi', 82);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(186, 'Foggia', 79);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(187, 'Lecce', 83);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(188, 'Taranto', 81);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(189, 'Agrigento, Bivona, Burgio, Calamonaci, Caltabellotta, Cattolica Eraclea, Cianciana, Lucca Sicula, Menfi, Montallegro, Montevago, Porto Empedocle, Realmonte, Ribera, Sambuca di Sicilia, Sciacca, Siculiana, S. Margherita Belice, Villafranca Sicula', 94);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(190, 'Alessandria della Rocca, Aragona, Camastra, Cammarata, Campobello di Licata, Canicattì, Casteltermini, Castrofilippo, Comitini, Favara, Grotte, Joppolo Jancaxio, Licata, Naro, Palma di Montechiaro, Racalmuto, Raffadali, Ravanusa, S. Biagio Platani, S. Giovanni Gemini, Santa Elisabetta, Sant’Angelo Muxaro e Santo Stefano Quisquina', 94);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(191, 'Lampedusa, Linosa e Lampione', 94);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(192, 'Acquaviva Platani, Bompensiere, Caltanissetta, Campofranco, Delia, Marianopoli, Milena, Montedoro, Mussomeli, S. Caterina Villarmosa, S. Cataldo, Serradifalco, Sommatino, Sutera, Vallelunga Pratameno, Villalba', 95);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(193, 'Butera, Gela, Mazzarino, Niscemi e Riesi', 95);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(194, 'Aci Bonaccorsi, Aci Castello, Aci Catena, Acireale, Aci Sant’Antonio, Adrano, Belpasso, Biancavilla, Bronte, Calatabiano, Camporotondo Etneo, Castel di Judica, Castiglione di Sicilia, Catania, Fiumefreddo di Sicilia, Giarre, Gravina di Catania, Linguaglossa, Maletto, Maniace, Mascali, Mascalucia, Militello in Val di Catania, Milo, Mineo, Misterbianco, Motta Sant’Anastasia, Nicolosi, Palagonia, Paternò, Pedara, Piedimonte Etneo, Raddusa, Ragalna, Ramacca, Randazzo, Riposto, S. Giovanni La Punta, ', 97);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(195, 'Caltagirone, Grammichele, Licodia Eubea, Mazzarrone, Mirabella Imbaccari, San Cono, S. Michele di Ganzaria, Vizzini', 97);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(196, 'Agira, Assoro, Catenanuova, Centuripe, Cerami, Gagliano Castelferrato, Leonforte, Nicosia, Nissoria, Regalbuto, Sperlinga, Troina', 96);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(197, 'Aidone, Barrafranca, Calascibetta, Enna, Piazza Armerina, Pietraperzia, Valguarnera Caropepe, Villarosa', 96);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(198, 'Acquedolci, Alcara Li Fusi, Capizzi, Capo D’Orlando, Capri Leone, Caronia, Castel di Lucio, Castell’Umberto, Cesarò, Frazzanò, Galati Mamertino, Longi, Militello Rosmarino, Mirto, Mistretta, Motta D’Affermo, Naso, Pettineo, Reitano, San Fratello, S. Marco D’Alunzio, S. Salvatore di Fitalia, Sant’Agata di Militello, San Teodoro, Santo Stefano di Camastra, Torrenova, Tortorici, Tusa', 93);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(199, 'Alì, Ali Terme, Antillo, Barcellona Pozzo di Gotto, Basicò, Brolo, Casalvecchio Siculo, Castelmola, Castroreale, Condrò, Falcone, Ficarra, Fiumedinisi, Floresta, Fondachelli Fantina, Forza D’Agrò, Francavilla di Sicilia, Furci Siculo, Furnari, Gaggi, Gallodoro, Giardini Naxos, Gioiosa Marea, Graniti, Gualtieri Sicaminò, Itala, Letojanni, Librizzi, Limina, Malvagna, Mandanici, Mazzarò Sant’Andrea, Merì, Messina, Milazzo, Moio Alcantara, Monforte San Giorgio, Mongiuffi Melia, Montagnareale, Montal', 93);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(200, 'Isole Eolie, Lipari, Vulcano, Stromboli, Panarea, Alicudi e Filicudi, costituenti unico comune e l’isola di Salina con i Comuni di Leni, Malfa, Santa Marina Salina', 93);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(201, 'Altofone, Bagheria, Balestrate, Belmonte Mezzagno, Bisacquino, Bolognetta, Borgetto, Campofelice di Fitalia, Campofiorito, Camporeale, Capaci, Carini, Castronovo di Sicilia, Cefalà Diana, Chiusa Sclafani, Cinisi, Contessa Entellina, Corleone, Ficarazzi, Giardinello, Giuliana, Godrano, Isola delle Femmine, Lercara Friddi, Marineo, Mezzojuso, Misilmeri, Monreale, Montelepre, Palazzo Adriano, Palermo, Partinico, Piana degli Albanesi, Prizzi, Roccamena, Roccapalumba, S. Cipirello, S. Giuseppe Jato, ', 92);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(202, ' Alia, Alimena, Aliminusa, Altavilla Milicia, Baucina, Blufi, Bompietro, Caccamo, Caltavuturo, Campofelice di Roccella, Castelbuono, Casteldaccia, Castellana Sicula, Cefalù, Cerda, Ciminna, Collesano, Gangi, Geraci Siculo, Gratteri, Isnello, Lascari, Monte Maggiore Belsito, Petralia Soprana, Petralia Sottana, Polizzi Generosa, Pollina, S. Mauro Castelverde, Sciara, Scillato, Sclafani Bagni, Termini Imerese, Trabia, Valledolmo, Ventimiglia di Sicilia, Resuttano', 92);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(203, 'Ustica', 92);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(204, 'Acate, Chiaromonte Gulfi, Comiso, Giarratana, Monterosso Almo, Ragusa, Santa Croce Camerina, Vittoria', 98);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(205, 'Ispica, Pozzallo, Modica, Scicli', 98);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(206, 'Augusta, Buccheri, Buscemi, Carlentini, Cassaro, Ferla, Francofonte, Lentini, Melilli, Palazzolo Acreide, Floridia, Priolo Gargallo, Solarino, Sortino', 99);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(207, 'Avola, Canicattini Bagni, Noto, Pachino, Porto Palo di Capo Passero, Rosolini, Siracusa', 99);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(208, 'Alcamo, Buseto Palizzolo, Calatafimi, Castellammare del Golfo, Custonaci, Erice, Paceco, S. Vito Lo Capo, Trapani, Valderice, Vita', 91);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(209, 'Campobello di Mazara, Castelvetrano, Gibellina, Marsala, Mazara del Vallo, Partanna, Petrosino, Poggioreale, Salaparuta, Salemi, Santa Ninfa', 91);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(210, 'Favignana, Marettimo, Levanzo', 91);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(211, 'Pantelleria', 91);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(212, 'Bibbiena, Castel Focognano, Castel San Niccolò, Chitignano, Chiusi della Verna, Montemignaio, Ortignano Raggiolo, Pratovecchio, Poppi, Stia, Talla', 53);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(213, 'Anghiari,Badia Tedalda, Caprese Michelangelo, Monterchi, Pieve Santo Stefano, Sansepolcro, Sestino', 53);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(214, 'Arezzo, Bucine, Capolona, Castelfranco di Sopra, Castiglion Fibocchi, Castiglion Fiorentino, Cavriglia, Civitella in Valdichiana, Cortona, Foiano della Chiana, Laterina, Loro Ciuffenna, Lucignano, Marciano della Chiana, Monte San Savino, Montevarchi, Pergine Valdarno, Pian di Sco'', San Giovanni Valdarno, Subbiano, Terranuova Bracciolini', 53);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(215, 'Barberino di Mugello, Borgo San Lorenzo, Calenzano, Campi Bisenzio, Dicomano, Fiesole, Firenze, Firenzula, Londa, Marradi, Palazzuolo sul Senio, Pelago, Pontassieve, Rufina, San Godenzo, San Piero a Sieve, Scarperia, Sesto Fiorentino, Signa, Vaglia, Vicchio, Cantagallo, Carmignano, Montemurlo, Poggio a Caiano, Prato, Vaiano, Vernio', 50);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(216, 'Bagno a Ripoli, Barberino Val d''Elsa, Capraia e Limite, Castelfiorentino, Cerreto Guidi, Certaldo, Empoli, Fucecchio, Gambassi Terme, Greve in Chianti, Impruneta, Incisa Val d''Arno, Lastra a Signa, Montaione, Montelupo Fiorentino, Montespertoli, Reggello, Rignano sull''Arno, San Casciano Val di Pesa, Scandicci, Tavarnelle val di Pesa, Vinci', 50);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(217, 'Civitella Paganico, Follonica, Gavorrano, Massa marittima, Monterotondo Marittimo, Montieri, Roccastrada, Scarlino', 55);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(218, 'Arcidosso, Campagnatico, Castel del Piano, Castiglione della Pescaia, Cinigiano, Grosseto, Magliano in Toscana, Roccalbegna, Santa Fiora, Scansano, Seggiano', 55);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(219, 'Capalbio, Castell''Azzara, Isola del Giglio, Manciano, Monte Argentario, Orbetello, Pitigliano, Semproniano, Sorano', 55);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(220, 'Bibbona, Campiglia Marittima, Capraia Isola, Castagneto Carducci, Cecina, Livorno, Piombino, Rosignano Marittimo, San Vincenzo, Sassetta, Suvereto', 51);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(221, 'Campo nell''Elba, Capoliveri, Marciana, Marciana Marina, Porto Azzurro, Portoferraio, Rio Marina, Rio nell''Elba', 51);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(222, 'Camporgiano,Careggine, Castelnuovo di Garfagnana, Castiglione di Garfagnana, Fosciandora, Gallicano, Giuncugnano, Minucciano, Molazzana, Piazza al Serchio, Pieve Fosciana, San Romano in Garfagnana, Sillano, Vagli Sotto, Vergemoli, Villa Collemandina', 48);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(223, 'Altopascio, Bagni di Lucca, Barga, Borgo a Mozzano, Camaiore, Capannori,   Coreglia Antelminelli, Fabbriche di Vallico, Forte dei Marmi, Lucca, Massarosa, Montecarlo, Pescaglia, Pietrasanta, Porcari, Seravezza, Stazzema, Viareggio, Villa Basilica', 48);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(224, 'Aulla, Bagnone, Carrara, Casola in Lunigiana, Comano, Filattiera, Fivizzano, Fosdinovo, Licciana Nardi, Massa, Montignoso, Mulazzo, Podenzana, Pontremoli, Tresana, Villafranca Lunigiana, Zeri', 47);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(225, 'Bientina, Buti, Calci, Caicinaia, Capannoli, Casale Marittimo, Casciana Terme, Cascina, Castelllina Marittima, Chianni, Crespina, Fauglia, Guardistallo, Lajatico, Lari, Lorenzana, Montecatini Val di Cecina, Montescudaio, Monteverdi Marittimo, Orciano Pisano, Pisa, Ponsacco, Riparbella, San Giuliano Terme, Santa Luce, Terricciola, Vecchiano, Vicopisano', 52);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(226, 'Castelfranco di Sotto, Castelnuovo di Val di Cecina, Montopoli in Valdarno, Palaia, Peccioli, Pomarance, Pontedera, San Miniato, Santa Croce sull''Arno, Santa Maria a Monte, Volterra', 52);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(227, 'Abetone, Agliana, Buggiano, Chiesina Uzzanese, .Cutigliano, Lamporecchio, Larciano, Marliana, Massa e Cozzile, Monsummano Terme, Montale, Montecatini Terme, Pescia, Pieve a Nievole, Pistoia, Piteglio, Ponte Buggianese, Quarrata, San Marcello Pistoiese, Sambuca Pistoiese, Serravalle Pistoiese, Uzzano', 49);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(228, 'Casole d''Elsa, Castellina in Chianti, Chiusdino, Colle Valdelsa, Monteriggioni, Monticiano, Poggibonsi, Radda in Chianti, Radicondoli, San Gimignano, Sovicille', 54);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(229, 'Asciano, Buonconvento, Castelnuovo Berardenga, Gaiole in Chianti, Montalcino, Monteroni d''Arbia, Murlo, Rapolano Terme, San Giovanni d''Asso, Siena', 54);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(230, 'Abbadia San Salvatore, Castiglione d''Orcia, Cetona, Chianciano, Chiusi, Montepulciano, Piancastagnaio, Pienza, Radicofani, San Casciano dei Bagni, San Quirico d''Orcia, Sarteano, Sinalunga, Torrita di Siena, Trequanda', 54);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(231, 'Alta Pusteria', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(232, 'Bassa Atesina', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(233, 'Val Venosta', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(234, 'Bolzano', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(235, 'Bressanone', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(236, 'Brunico', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(237, 'Merano', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(238, 'Vipiteno', 21);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(239, 'Citerna, San Giustino, Monte S. Maria Tiberina, Città di Castello, Pietralunga, Montone, Gualdo Tadino, Gubbio, Scheggia e Pascelupo, Costacciaro, Sigillo, Fossato di Vico, Umbertide, Corciano, Perugia, Valfabbrica, Lisciano Niccone, Tuoro sul Trasimeno, Passignano, Magione, Castiglione del Lago, Paciano, Panicale, Città della Pieve,Fabro ,Città della Pieve, Piegaro, Marsciano', 57);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(240, 'Nocera Umbra, Valtopina, Torgiano, Bastia, Assisi, Spello, Deruta, Bettona, Cannara, Bevagna, Foligno, Collazzone, Gualdo Cattaneo, Montefalco, Trevi, Sellano, Fratta Todina, Montecastello di Vibio, Todi, Massa Martana, Giano dell''Umbria, Castel Ritaldi, Campello sul Clitunno, Spoleto, Cerreto di Spoleto, Preci, Norcia, Vallo di Nera, Sant''Anatolia di Narco, Poggiodomo, Cascia, Scheggino, Monteleone di Spoleto', 57);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(241, 'Monteleone di Orvieto, Montegabbione, San Venanzo, Fabro, Allerona, Ficulle, Parrano, Castel Viscardo, Orvieto, Castel Giorgio, Porano, Baschi, Montecchio, Avigliano Umbro, Acquasparta, Montecastrilli, San Gemini, Guardea, Alviano, Lugnano in Teverina, Amelia, Attigliano, Giove, Penna in Teverina, Narni, Terni, Otricoli, Stroncone, Montefranco, Calvi dell''Umbria, Ferentillo, Arrone, Polino', 58);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(242, 'Alta Padovana', 28);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(243, 'Padova', 28);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(244, 'Padova', 28);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(245, 'Padova', 28);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(246, 'Padova', 28);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(247, 'Polesine Occidentale', 29);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(248, 'Polesine Centrale', 29);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(249, 'Delta del Po', 29);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(250, 'Riese Pio X°', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(251, 'Negrisia, P. di Piave', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(252, 'Motta di Livenza', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(253, 'Mogliano Veneto', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(254, 'Roncade', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(255, 'Trevignano', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(256, 'Villorba', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(257, 'San Vendemiano', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(258, 'Godega Sant’Urbano', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(259, 'Castelfranco Veneto', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(260, 'Ponzano Veneto', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(261, 'Rovarè, San Biagio di Callalta', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(262, 'Cimadolmo', 26);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(263, 'Portogruaro', 27);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(264, ' S.Dona’ di Piave', 27);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(265, ' Area Centrale', 27);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(267, ' Chioggia, Cavarzere', 27);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(268, 'Lagunare', 27);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(269, 'Garda', 23);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(270, 'Colli', 23);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(271, 'Mincio', 23);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(272, 'Adige', 23);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(273, 'Tartaro', 23);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(274, 'Valli Grandi', 23);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(275, 'Vicenza Nord', 24);
INSERT INTO `territorio` (`id`, `comprensorio`, `id_provincia`) VALUES(276, 'Vicenza Sud', 24);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--
-- Creazione: Ago 10, 2016 alle 21:09
-- Ultimo cambiamento: Ott 11, 2016 alle 00:49
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Univoco',
  `fb_user_id` int(11) DEFAULT NULL,
  `fb_user_name` varchar(100) DEFAULT NULL,
  `fb_user_email` varchar(50) DEFAULT NULL,
  `fb_user_first_name` varchar(50) DEFAULT NULL,
  `fb_user_last_name` varchar(50) DEFAULT NULL,
  `facebook_access_token` varchar(250) DEFAULT NULL,
  `id_atc` int(11) NOT NULL COMMENT 'Id ATC',
  `id_squadra` int(11) DEFAULT NULL COMMENT 'Id Squadra',
  `username` varchar(50) NOT NULL COMMENT 'User Name',
  `email` varchar(50) NOT NULL COMMENT 'Email',
  `password` varchar(50) NOT NULL COMMENT 'Psw',
  `trn_date` datetime NOT NULL COMMENT 'Data registrazione',
  `url_foto` varchar(150) DEFAULT NULL COMMENT 'Immagine del Profilo',
  `capocaccia` tinyint(1) DEFAULT '0' COMMENT 'capocaccia',
  `canaio` tinyint(1) DEFAULT '0' COMMENT 'canaio',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(3, NULL, NULL, NULL, NULL, NULL, NULL, 299, 20, 'aroma', 'aromaguram@gmail.com', 'af6e976470ada65d49aee07549c481ba', '2016-02-08 20:19:59', './uploads/Koala.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(2, 2147483647, 'Stefano Durante', 'stedurred@gmail.com', 'Stefano', 'Durante', 'EAAM03PcZABZBcBABuU7sZAuqt9ZCPK5ZB3sBx1P5NFT4PZB7rZBkm6KJkZCNZAlPg8z42tTFqGA5ZCZB4en14k3OZCAqtt6uBH9ZCRbfBlkD4Hu1rzXZCUEQsXjkTKoP2bdj4HEFQdU0qkIBF9uH2inhzFmzsNaMtTp1h5PpYZD', 299, 20, 'stedurred', 'stedurred@gmail.com', '81b3ef96181a69bc7d10ea89789b789c', '2016-08-11 00:46:50', './uploads/20160110_122448.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(5, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'pippo', 'pippo@gmail.com', '0c88028bf3aa6a6a143ed846f2be1ea4', '2016-07-23 20:01:06', './uploads/!BfsyvMwBWk~$(KGrHqMH-DsErfrsHfzdBLC(rzWOTw~~_12.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(6, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'poppo', 'poppo@gmail.com', '0c88028bf3aa6a6a143ed846f2be1ea4', '0000-00-00 00:00:00', NULL, 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(7, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'pincopallo', 'pinco@gmail.com', '3aa884fab55983681bba9c163a1f0ad7', '0000-00-00 00:00:00', NULL, 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(8, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'nello', 'nello@gmail.com', '66715059c16a19878091e2343792dce7', '0000-00-00 00:00:00', NULL, 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(10, NULL, NULL, NULL, NULL, NULL, NULL, 88, 22, 'borgo', 'borgo@gmail.com', '10d77ae395dbb360f58567bb9448ce75', '0000-00-00 00:00:00', NULL, 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(11, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'poac', 'poac@gmail.com', 'cef79cb4a74a9109305a3f011b90d32e', '2016-01-11 00:00:00', NULL, 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(12, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'braciola', 'braciola@gmail.com', 'c43e8f15d2dca4a73e0e7a7f0ad3fd86', '0000-00-00 00:00:00', NULL, 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(13, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'draco', 'draco@gmail.com', 'a21aaba95ca025e561e9c769399fd59f', '2016-01-11 17:53:09', NULL, 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(14, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'picco', 'picco@email.com', '4d34960c5449570f46171341a9990a69', '2016-01-13 15:10:50', './uploads/', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(15, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'stedurred2', 'stedurred@g2mail.com', '81b3ef96181a69bc7d10ea89789b789c', '2016-01-13 15:12:45', './uploads/', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(16, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'ricc', 'riccardo_guru@gmail.com', '9667aacee4c11ab5cb1aee39cb183599', '2016-01-13 15:17:45', './uploads/img4.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(17, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'ragioniere', 'ragioniere@gmail.com', 'a09b8e153df138b39dcc281605231b07', '2016-01-13 15:20:33', './uploads/20151114_103614.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(18, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'dasco', 'dasco@gmail.com', '8b2b11a456e936b8717603158405b958', '2016-01-13 16:07:58', './uploads/20151114_125026.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(19, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'retti', 'bretti@gmail.com', '80cfd5e544a71e65a4c3441752c9660b', '2016-01-13 16:17:52', './uploads/20151114_104529.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(20, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'eretic', 'eretic@gmail.com', '60b3ec3532acc81fc9ca2dc76d5a7266', '2016-01-13 16:23:54', './uploads/20151114_104533.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(21, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'drunk', 'drunk@gmail.com', '4bfda39fbefa28b9c2975eb9b4c3b8db', '2016-01-13 16:31:38', './uploads/', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(22, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'restino', 'restino@gmail.com', 'f527ef976f2fb67124a2be7634a9c1d4', '0000-00-00 00:00:00', './uploads/', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(23, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'sissi', 'sissi@gmail.com', '03882d0cbe1a68c57e75c7056ca33c3a', '0000-00-00 00:00:00', './uploads/img1.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(24, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'bravo', 'bravos@gmail.com', 'fd9ab41e47a9ef4f6477a8a000bf404f', '2016-01-20 15:01:57', './uploads/hogrunning.png', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(25, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'nuovo1', 'nuovo1@gmail.com', '8c28200e0f13c8fb0b057e6ccc9cf15c', '2016-01-20 18:00:43', './uploads/20160110_122448.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(26, NULL, NULL, NULL, NULL, NULL, NULL, 218, NULL, 'figaro', 'figaro@gmail.com', 'a3f77e6d3856b9c0dc674238ded4accc', '2016-01-22 17:43:53', './uploads/20160116_090535.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(27, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'claudio', 'claudio@gmail.com', 'f6a47a638824180d57f0a561fd5843c6', '2016-01-26 20:32:46', './uploads/028.JPG', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(28, NULL, NULL, NULL, NULL, NULL, NULL, 186, NULL, 'alex', 'alex@gmail.com', '534b44a19bf18d20b71ecc4eb77c572f', '2016-01-26 20:37:30', './uploads/s1.png', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(29, NULL, NULL, NULL, NULL, NULL, NULL, 186, 21, 'strange', 'strange@gmail.com', '73a6fcb016535503154cecf09b787015', '2016-01-27 08:58:56', './uploads/', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(30, NULL, NULL, NULL, NULL, NULL, NULL, 182, NULL, 'jessica', 'jessica@gmail.com', 'aae039d6aa239cfc121357a825210fa3', '2016-01-26 22:34:50', '', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(31, NULL, NULL, NULL, NULL, NULL, NULL, 322, NULL, 'jhon', 'jhon@gmail.com', '4c25b32a72699ed712dfa80df77fc582', '2016-01-26 22:59:11', './uploads/', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(32, NULL, NULL, NULL, NULL, NULL, NULL, 342, NULL, 'alias', 'alias@gmail.com', '724874d1be77f450a09b305fc1534afb', '2016-01-26 23:03:58', './uploads/', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(33, NULL, NULL, NULL, NULL, NULL, NULL, 186, NULL, 'pallino', 'pallino@gmail.com', '7efc32ad84aa1a1313b8db8f59fc7139', '2016-01-26 23:13:13', './uploads/pn.png', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(34, NULL, NULL, NULL, NULL, NULL, NULL, 186, 25, 'User1', 'user1@gmail.com', '6b908b785fdba05a6446347dae08d8c5', '2016-03-07 23:48:21', './uploads/cinghiale-impronta-bianco-su-sfondo-nero-circolare_318-38400.png', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(35, NULL, NULL, NULL, NULL, NULL, NULL, 186, 21, 'User2', 'User2@gmail.com', 'a09bccf2b2963982b34dc0e08d8b582a', '2016-02-07 16:57:15', './uploads/Lighthouse.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(36, NULL, NULL, NULL, NULL, NULL, NULL, 186, 21, 'User3', 'User3@gmail.com', 'e5d2ad241ec44cf155bc78ae8d11f715', '2016-02-07 17:04:25', './uploads/Penguins.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(37, NULL, NULL, NULL, NULL, NULL, NULL, 186, 21, 'User4', 'User4@gmail.com', '5ad55d96abf0e50647d6de116530d6df', '2016-02-07 17:08:48', './uploads/Hydrangeas.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(38, NULL, NULL, NULL, NULL, NULL, NULL, 299, 20, 'User5', 'Usre5@gmail.com', '50c22602b70659dde2893f3a2ba0ab82', '2016-02-07 17:16:00', './uploads/Chrysanthemum.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(39, NULL, NULL, NULL, NULL, NULL, NULL, 299, 20, 'user6', 'user6@gmail.com', 'affec3b64cf90492377a8114c86fc093', '2016-07-22 18:47:13', './uploads/republic-day-italy-2016-6218479218720768-hp.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(40, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'user7', 'user7@gmail.com', '3e0469fb134991f8f75a2760e409c6ed', '2016-07-23 21:01:12', './uploads/ospitatodah.gif', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(41, NULL, NULL, NULL, NULL, NULL, NULL, 299, 20, 'user8', 'user8@gmail.com', '7668f673d5669995175ef91b5d171945', '2016-07-23 23:15:11', './uploads/logo.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(42, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'user9', 'user9@gmail.com', '8808a13b854c2563da1a5f6cb2130868', '2016-07-23 21:23:33', './uploads/framely.gif', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(43, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'user10', 'user10@gmail.com', '990d67a9f94696b1abe2dccf06900322', '2016-07-23 21:29:29', './uploads/car.png', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(44, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'user11', 'user11@gmail.com', '03aa1a0b0375b0461c1b8f35b234e67a', '2016-07-23 21:34:23', './uploads/ospitatodah.gif', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(45, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'user12', 'user12@gmail.com', 'd781eaae8248db6ce1a7b82e58e60435', '2016-07-23 21:36:29', './uploads/googlelogo_color_112x36dp.png', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(46, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'user13', 'user13@gmail.com', 'd09979d794a6ee60d836f884739f7196', '2016-07-23 22:33:48', './uploads/cta2.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(47, NULL, NULL, NULL, NULL, NULL, NULL, 299, 24, 'user14', 'user14@gmail.com', 'ef06d5cbf35386ff2203d186eeff7923', '2016-07-23 22:41:44', './uploads/logo.jpg', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(48, NULL, NULL, NULL, NULL, NULL, NULL, 186, 21, 'user15', 'user15@gmail.com', '726dedc0d6788b05f486730edcc0e871', '2016-07-23 23:35:32', './uploads/preferiti.gif', 0, 0);
INSERT INTO `users` (`id`, `fb_user_id`, `fb_user_name`, `fb_user_email`, `fb_user_first_name`, `fb_user_last_name`, `facebook_access_token`, `id_atc`, `id_squadra`, `username`, `email`, `password`, `trn_date`, `url_foto`, `capocaccia`, `canaio`) VALUES(88, 2147483647, 'Open Graph Test User', 'open_tsbipcn_user@tfbnw.net', 'Open', 'User', 'EAAM03PcZABZBcBANJM0Gv9mjZCEYYZBnwStkMQX8JyXgbCZBHC9iJ9XbBNx7lfSQJZCUlOOkwPPrevZAqMfZBZBGUYiMgeX0aJ4FjvVQh9GLGkSxI6xMVYVj263MALWz4HaYElmqM73CAMZBrhu4gwcXE8xEokgCk9ZCUyAV04BFnIxogZDZD', 299, 20, 'Open Graph Test User', 'open_tsbipcn_user@tfbnw.net', '81b3ef96181a69bc7d10ea89789b789c', '2016-10-11 02:49:18', './uploads/nullpointerexception.jpg', 0, 0);
