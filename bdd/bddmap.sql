-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 11, 2020 at 11:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bddmap`
--

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(7) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `LAT` float NOT NULL,
  `LNG` float NOT NULL,
  `IMAGE` text NOT NULL,
  `PAYS` varchar(255) NOT NULL,
  `VILLE` varchar(255) NOT NULL,
  `LIEN` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `NOM`, `LAT`, `LNG`, `IMAGE`, `PAYS`, `VILLE`, `LIEN`) VALUES
(1, 'paris', 2.2, 48.52, '', 'france', 'paris', ''),
(2, 'washington , dc', -77.02, 38.53, '', 'united states', 'washington , dc', ''),
(3, 'london', -0.1, 51.3, '', 'united kingdom', 'london', ''),
(4, 'moscow', 37.35, 55.45, '', 'russia', 'moscow', ''),
(5, 'conakry', -13.42, 9.33, '', 'guinea', 'conakry', ''),
(6, 'brasilia', -47.55, -15.47, '', 'brazil', 'brasilia', ''),
(7, 'riyadh', 46.43, 24.38, '', 'saudi arabia', 'riyadh', '');

-- --------------------------------------------------------

--
-- Table structure for table `pays2`
--

CREATE TABLE `pays2` (
  `ID` int(7) UNSIGNED NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `LAT` double NOT NULL,
  `LNG` float NOT NULL,
  `IMAGE` text NOT NULL,
  `PAYS` varchar(255) NOT NULL,
  `VILLE` varchar(255) NOT NULL,
  `CCA2` varchar(5) NOT NULL,
  `LIEN` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays2`
--

INSERT INTO `pays2` (`ID`, `NOM`, `LAT`, `LNG`, `IMAGE`, `PAYS`, `VILLE`, `CCA2`, `LIEN`) VALUES
(1, 'france', 2.200000047683716, 48.52, '../IMAGE/paris.jpg', 'france', 'paris', 'fr', 'https://fr.wikipedia.org/wiki/Paris'),
(2, 'united states', -77.0365982055664, 38.895, '../IMAGE/dc.png', 'united states', 'washington , dc', 'us', 'https://fr.wikipedia.org/wiki/Washington_(district_de_Columbia)'),
(3, 'united kingdom', -0.12764699757099152, 51.5073, '../IMAGE/londre.jpg', 'united kingdom', 'london', 'gb', 'https://fr.wikipedia.org/wiki/Londres'),
(4, 'russia', 37.356201171875, 55.7504, '../IMAGE/moscow.png', 'russia', 'moscow', 'ru', 'https://fr.wikipedia.org/wiki/Moscou'),
(5, 'guinea', -13.699799537658691, 9.51706, '../IMAGE/conakry.jpg', 'guinea', 'conakry', 'gn', 'https://fr.wikipedia.org/wiki/Conakry'),
(6, 'brazil', -55, -10, '../IMAGE/brasilia.png', 'brazil', 'brasilia', 'br', 'https://fr.wikipedia.org/wiki/Brasilia'),
(7, 'saudi arabia', 46.7150993347168, 24.632, '../IMAGE/riyadh.jpg', 'saudi arabia', 'riyadh', 'sa', 'https://fr.wikipedia.org/wiki/Riyad_(province)'),
(8, 'algérie', 4.237189769744873, 36.6816, '../IMAGE/djurdura.jpeg', 'algérie', 'tiziouzou', 'dz', 'https://fr.wikipedia.org/wiki/Alg%C3%A9rie'),
(9, 'espagne', -4.838059902191162, 39.3262, '../IMAGE/madrid.jpeg', 'espagne', 'madrid', 'es', 'https://fr.wikipedia.org/wiki/Paris'),
(18, 'portugal', -8.6107884, 41.1495, '../IMAGE/porto.png', 'portugal', 'porto', 'pt', 'https://fr.wikipedia.org/wiki/Portugal'),
(19, 'canada', -75.690308, 45.4211, '../IMAGE/ottawa.jpeg', 'canada', 'ottawa', 'ca', 'https://fr.wikipedia.org/wiki/Canada'),
(20, 'mexique', -99.1332, 19.4326, '../IMAGE/mexico.jpeg', 'mexique', 'mexico', 'mx', 'https://fr.wikipedia.org/wiki/Mexique'),
(21, 'porto rico', -66.116666, 18.4653, '../IMAGE/sanj.jpg', 'porto rico', 'san juan', 'pr', 'https://fr.wikipedia.org/wiki/Porto_Rico'),
(22, 'corée du nord', 125.753388, 39.0195, '../IMAGE/pyong.jpeg', 'corée du nord', 'pyongyang', 'kp', 'https://fr.wikipedia.org/wiki/Cor%C3%A9e_du_Nord'),
(23, 'malaisie', 101.6942371, 3.1517, '../IMAGE/kuala.jpg', 'malaisie', 'kuala lumpur', 'my', 'https://fr.wikipedia.org/wiki/Malaisie'),
(24, 'thailande', 100.493087, 13.7543, '../IMAGE/bangkok.jpeg', 'thailande', 'bangkok', 'th', 'https://fr.wikipedia.org/wiki/Tha%C3%AFlande'),
(25, 'emirats arabes unis', 54.5366631, 24.3965, '../IMAGE/abou.jpeg', 'emirats arabes unis', 'abou dabi', 'ae', 'https://fr.wikipedia.org/wiki/%C3%89mirats_arabes_unis'),
(26, 'seychelles', 144.6780052, -36.5986, '../IMAGE/victoria.jpeg', 'seychelles', 'victoria', 'sc', 'https://fr.wikipedia.org/wiki/Seychelles'),
(27, 'tunisie', 9.400138, 33.8439, '../IMAGE/tunis.jpeg', 'tunisie', 'tunis', 'tn', 'https://fr.wikipedia.org/wiki/Tunisie'),
(28, 'lybie', 32.896671295166016, 13.1778, '../IMAGE/tripoli.jpeg', 'lybie', 'tripoli', 'ly', 'https://fr.wikipedia.org/wiki/Libye'),
(29, 'australie', 149.1012676, -35.2976, '../IMAGE/banb.jpeg', 'australie', 'canberra', 'au', 'https://fr.wikipedia.org/wiki/Australie'),
(30, 'nouvelle-zelande', 174.7772114, -41.2888, '../IMAGE/wellington.jpeg', 'nouvelle-zelande', 'wellington', 'nz', 'https://fr.wikipedia.org/wiki/Nouvelle-Zélande'),
(31, 'fidji', 178.4421662, -18.1416, '../IMAGE/suva.jpeg', 'fidji', 'suva', 'fj', 'https://fr.wikipedia.org/wiki/Fidji'),
(32, 'nouvelle caledonie', 166.442419, -22.2745, '../IMAGE/noumea.jpeg', 'nouvelle caledonie', 'nouméa', 'nc', 'https://fr.wikipedia.org/wiki/Nouvelle-Cal%C3%A9donie'),
(33, 'nauru', 166.9164002, -0.547101, '../IMAGE/yaren.jpeg', 'nauru', 'yaren', 'nr', 'https://fr.wikipedia.org/wiki/Nauru');

-- --------------------------------------------------------

--
-- Table structure for table `pays3`
--

CREATE TABLE `pays3` (
  `ID` int(7) UNSIGNED NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `LAT` float NOT NULL,
  `LNG` float NOT NULL,
  `IMAGE` text NOT NULL,
  `PAYS` varchar(255) NOT NULL,
  `VILLE` varchar(255) NOT NULL,
  `LIEN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays3`
--

INSERT INTO `pays3` (`ID`, `NOM`, `LAT`, `LNG`, `IMAGE`, `PAYS`, `VILLE`, `LIEN`) VALUES
(1, 'euro', 2.2, 48.52, '../IMAGE/euro.jpg', 'france', 'paris', 'https://fr.wikipedia.org/wiki/Euro'),
(2, 'dollar', -77.0366, 38.895, '../IMAGE/dollar.jpeg', 'united states', 'washington , dc', 'https://fr.wikipedia.org/wiki/Dollar'),
(3, 'livre', -0.127647, 51.5073, '../IMAGE/livres.jpg', 'united kingdom', 'london', 'https://fr.wikipedia.org/wiki/Livre_sterling'),
(4, 'Rouble russe', 37.6175, 55.7504, '../IMAGE/rouble.jpeg', 'russia', 'moscow', 'https://fr.wikipedia.org/wiki/Rouble'),
(5, 'franc guineen', -13.6998, 9.51706, '../IMAGE/francg.jpeg', 'guinea', 'conakry', 'https://fr.wikipedia.org/wiki/Franc_guin%C3%A9en'),
(6, 'Réal brésilien', -55, -10, '../IMAGE/realb.jpg', 'brazil', 'brasilia', 'https://fr.wikipedia.org/wiki/R%C3%A9al_br%C3%A9silien'),
(7, 'Riyal saoudien', 46.7151, 24.632, '../IMAGE/riyal.jpeg', 'saudi arabia', 'riyadh', 'https://fr.wikipedia.org/wiki/Riyal_saoudien');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `PSEUDO` varchar(255) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `SEXE` varchar(255) NOT NULL,
  `MAIL` varchar(255) NOT NULL,
  `MDP` varchar(255) NOT NULL,
  `DATE_INSCRIPTION` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `PSEUDO`, `NOM`, `PRENOM`, `DATE_NAISSANCE`, `SEXE`, `MAIL`, `MDP`, `DATE_INSCRIPTION`) VALUES
(1, 'princek', 'kevin', 'tatibouet', '1996-09-10', 'Homme', 'kt@gmail.com', '5c246dd0082cf88e487fc6bd3eb54f71', '2020-06-08 14:11:44'),
(8, 'lyd', 'khris', 'lydia', '1998-06-17', 'Femme', 'khrislydia@gmail.com', '1cd8ca0f87fa3169204590ac710ce983', '2020-06-11 10:34:07'),
(9, 'mae', 'tati', 'maeva', '1994-11-25', 'Femme', 'maeva@yahoo.fr', '8fa0bf2354da6b73671b8684c9e36b71', '2020-06-11 10:36:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pays2`
--
ALTER TABLE `pays2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pays3`
--
ALTER TABLE `pays3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pays2`
--
ALTER TABLE `pays2`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pays3`
--
ALTER TABLE `pays3`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
