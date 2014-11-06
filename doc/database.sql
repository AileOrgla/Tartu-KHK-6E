-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Nov 06, 2014 kell 01:17 PL
-- Serveri versioon: 5.6.20
-- PHP versioon: 5.5.15

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Andmebaas: `esindus`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(10) unsigned NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Andmete tõmmistamine tabelile `news`
--

INSERT INTO `news` (`news_id`, `subject`, `date`, `text`) VALUES
  (1, 'Õpilasesinduse juhatuse koosolek', '2014-11-12 08:00:00', 'Päevakord: <br>\r\n* Jõulupidu <br>\r\n* Koolitus <br>\r\n* Jooksvad küsimused'),
  (2, 'Õpilasesinduse koolitus', '2014-11-20 09:00:00', 'Kava: <br>\r\n8.45-9.00 - Registreerimine <br>\r\n9.00-9.10 - Sissejuhatus <br>\r\n9.10-9.30 - Sõbrunemine <br>\r\n9.30-10.30 - Mõttejõud <br>\r\n10.30-10.50 - Kohvipaus <br>\r\n10.50-11.50 - Simulatsioonimäng <br>\r\n11.50-12.20 - Liidri roll <br>\r\n12.20-13.40 - Lõuna <br>\r\n13.40-14.40 - Leiutajad\r\n'),
  (3, 'Õpilasesinduse koosolek', '2014-11-20 17:00:00', 'Päevakava: <br>\r\n* Jõulupidu <br>\r\n* Jooksvad küsimused'),
  (4, 'Stiilinädala algus', '2014-11-10 08:00:00', 'E: Maskipäev <br>\r\nT: Kursuste ühisriietus <br>\r\nK: <br>\r\nN:'),
  (5, 'Jõulupidu', '2014-12-16 19:00:00', 'INERTS esineb ja BigBank tantsutüdrukud :)');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL,
  `username` varchar(25) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Andmete tõmmistamine tabelile `user`
--

INSERT INTO `user` (`user_id`, `username`, `is_admin`, `password`, `active`, `email`, `deleted`) VALUES
  (1, 'demo', 0, 'demo', 1, '', 0);

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `news`
--
ALTER TABLE `news`
ADD PRIMARY KEY (`news_id`);

--
-- Indeksid tabelile `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT tabelile `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;SET FOREIGN_KEY_CHECKS=1;
