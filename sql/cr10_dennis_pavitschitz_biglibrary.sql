-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Nov 2019 um 08:55
-- Server-Version: 10.4.8-MariaDB
-- PHP-Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_dennis_pavitschitz_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `author_name` varchar(50) DEFAULT NULL,
  `author_surname` varchar(50) DEFAULT NULL,
  `isbn` varchar(14) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `type` enum('book','cd','dvd','kindl') DEFAULT NULL,
  `available` int(1) NOT NULL DEFAULT 1,
  `publisher_address` varchar(50) DEFAULT NULL,
  `publisher_size` enum('small','medium','large') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `description`, `author_name`, `author_surname`, `isbn`, `publish_date`, `publisher`, `type`, `available`, `publisher_address`, `publisher_size`) VALUES
(1, 'sword of truth 1', 'https://images-na.ssl-images-amazon.com/images/I/51bY4Q6fExL._SX309_BO1,204,203,200_.jpg', 'fantasy magic swords ', 'terry', 'goodkind', '9780812548051', '1994-08-15', 'tor fantasy', 'book', 1, 'america', 'small'),
(2, 'sword of truth 2', 'https://images-na.ssl-images-amazon.com/images/I/51MwkW%2B%2BsuL._SX276_BO1,204,203,200_.jpg', 'fantasy magic swords ', 'terry', 'goodkind', '9780812548099', '1996-08-15', 'tor fantasy', 'book', 1, 'america', 'small'),
(3, 'midkemia chronicls', 'https://images-na.ssl-images-amazon.com/images/I/611kIl9rM9L._SX420_BO1,204,203,200_.jpg', 'fantasy magic swords ', 'raymond', 'feist', '9780380810949', '2014-10-07', 'harper design', 'book', 1, 'america', 'small'),
(4, 'midkemia chronicls 3', 'https://images-na.ssl-images-amazon.com/images/I/5178k4EEukL._SX303_BO1,204,203,200_.jpg', 'fantasy magic swords ', 'raymond', 'feist', '9780553270549', '1993-12-01', 'spectra', 'book', 1, 'america', 'medium'),
(5, 'the chemistry of death', 'https://images-na.ssl-images-amazon.com/images/I/61ozd0FrvnL._SY424_BO1,204,203,200_.jpg', 'crime thriller science', 'simon', 'beckett', '9780553270549', '2006-03-02', 'audioboks', 'cd', 0, 'england', 'large'),
(6, 'written in bone', 'https://images-na.ssl-images-amazon.com/images/I/5117AzfpiYL._SX295_BO1,204,203,200_.jpg', 'crime thriller science', 'simon', 'beckett', '9780553817508', '2008-04-07', 'bantam', 'book', 1, 'england', 'small'),
(7, 'die knickerbocker-bande 2', 'https://images-na.ssl-images-amazon.com/images/I/51JTvo8JMYL._SX331_BO1,204,203,200_.jpg', 'teenager book crime', 'thomas', 'brezina', '9783473471775', '2015-01-13', 'ravensburger buchverlag', 'book', 1, 'austria', 'large'),
(8, 'die knickerbocker-bande 3', 'https://images-na.ssl-images-amazon.com/images/I/51lm3VMHrsL._SX331_BO1,204,203,200_.jpg', 'teenager book crime', 'thomas', 'brezina', '9783473471782', '2015-01-13', 'ravensburger buchverlag', 'book', 1, 'austria', 'large'),
(9, 'the hungergames', 'https://images-eu.ssl-images-amazon.com/images/I/41nphb8vbPL.jpg', 'fantasy competition live/death', 'suzanne', 'colins', '9781531831288', '2016-05-13', 'scholastic on brilliance', 'cd', 1, 'england', 'small'),
(11, 'the php workshop', 'https://images-na.ssl-images-amazon.com/images/I/51KTuOs0PuL._SX404_BO1,204,203,200_.jpg', 'php development', 'david ', 'carr', '9781838648916', '2019-10-31', 'packt publishing', 'book', 1, 'england', 'small'),
(15, 'html quick start guide', 'https://images-eu.ssl-images-amazon.com/images/I/51s7D9oqKGL.jpg', 'html for starters', 'martin ', 'mihajlov', '9781511617994', '2015-04-10', 'create space independent', 'book', 1, 'america', 'medium');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
