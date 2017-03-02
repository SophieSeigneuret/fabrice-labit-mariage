-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 01 Mars 2017 à 17:23
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fl_mariage`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nom_album` varchar(128) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `album`
--

INSERT INTO `album` (`id`, `nom_album`, `date`) VALUES
(1, 'Aline & Charles', '2014-08-30'),
(2, 'Anne-Sophie & Emmanuel', '2015-09-05'),
(3, 'Clémence & Thomas', '2011-09-24'),
(4, 'Fanny & Guillaume', '2016-09-24'),
(5, 'Marie & Colin', '2016-08-20'),
(6, 'Marine & Guillaume', '2015-06-06'),
(7, 'Marine & Olivier', '2011-09-17'),
(8, 'Olivia & Martin', '2015-09-12'),
(9, 'Rebecca & Isaac', '2015-10-17'),
(10, 'Sylvie & Franck', '2015-06-27');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `nom`) VALUES
(1, 'préparatifs'),
(2, 'mariage'),
(3, 'engagement'),
(4, 'deco');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `nom_photo` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `nom_photo`, `category_id`, `album_id`, `ordre`, `date`) VALUES
(1, 'preparatifs_1.jpg', 1, 6, 0, '2015-06-06'),
(2, 'preparatifs_2.jpg', 1, 6, 0, '2015-06-06'),
(3, 'preparatifs_3.jpg', 1, 6, 0, '2015-06-06'),
(4, 'preparatifs_4.jpg', 1, 6, 0, '2015-06-06'),
(5, 'preparatifs_5.jpg', 1, 10, 0, '2015-06-27'),
(6, 'preparatifs_6.jpg', 1, 10, 0, '2015-06-27'),
(7, 'preparatifs_7.jpg', 1, 10, 0, '2015-06-27'),
(8, 'preparatifs_8.jpg', 1, 5, 0, '2016-08-20'),
(9, 'preparatifs_9.jpg', 1, 5, 0, '2016-08-20'),
(10, 'preparatifs_10.jpg', 1, 9, 0, '2015-10-17'),
(11, 'mariage_1.jpg', 2, 6, 0, '2015-06-06'),
(12, 'mariage_2.jpg', 2, 6, 0, '2015-06-06'),
(15, 'mariage_3.jpg', 2, 6, 0, '2015-06-06'),
(16, 'mariage_4.jpg', 2, 6, 0, '2015-06-06'),
(17, 'mariage_5.jpg', 2, 6, 0, '2015-06-06'),
(18, 'mariage_6.jpg', 2, 6, 0, '2015-06-06'),
(19, 'mariage_7.jpg', 2, 6, 0, '2015-06-06'),
(20, 'mariage_8.jpg', 2, 6, 0, '2015-06-06'),
(21, 'mariage_9.jpg', 2, 6, 0, '2015-06-06'),
(22, 'mariage_10.jpg', 2, 6, 0, '2015-06-06'),
(23, 'mariage_11.jpg', 2, 6, 0, '2015-06-06'),
(24, 'mariage_12.jpg', 2, 6, 0, '2015-06-06'),
(25, 'mariage_13.jpg', 2, 10, 0, '2015-06-27'),
(26, 'mariage_14.jpg', 2, 10, 0, '2015-06-27'),
(27, 'mariage_15.jpg', 2, 10, 0, '2015-06-27'),
(28, 'mariage_16.jpg', 2, 10, 0, '2015-06-27'),
(29, 'mariage_17.jpg', 2, 10, 0, '2015-06-27'),
(30, 'mariage_18.jpg', 2, 10, 0, '2015-06-27'),
(31, 'mariage_19.jpg', 2, 10, 0, '2015-06-27'),
(32, 'mariage_20.jpg', 2, 10, 0, '2015-06-27'),
(33, 'mariage_21.jpg', 2, 10, 0, '2015-06-27'),
(34, 'mariage_22.jpg', 2, 5, 0, '2016-08-20'),
(36, 'mariage_23.jpg', 2, 8, 0, '2015-09-12'),
(37, 'mariage_24.jpg', 2, 8, 0, '2015-09-12'),
(38, 'mariage_25.jpg', 2, 8, 0, '2015-09-12'),
(39, 'mariage_26.jpg', 2, 8, 0, '2015-09-12'),
(40, 'mariage_27.jpg', 2, 8, 0, '2015-09-12'),
(41, 'mariage_28.jpg', 2, 8, 0, '2015-09-12'),
(42, 'mariage_29.jpg', 2, 1, 0, '2014-08-30'),
(43, 'mariage_30.jpg', 2, 1, 0, '2014-08-30'),
(44, 'mariage_31.jpg', 2, 9, 0, '2015-10-17'),
(45, 'engagement_1.jpg', 3, 10, 0, '2015-05-12'),
(47, 'engagement_2.jpg', 3, 10, 0, '2015-05-12'),
(48, 'engagement_3.jpg', 3, 10, 0, '2015-05-12'),
(49, 'engagement_4.jpg', 3, 10, 0, '2015-05-12'),
(50, 'engagement_5.jpg', 3, 10, 0, '2015-05-12'),
(51, 'engagement_6.jpg', 3, 10, 0, '2015-05-12'),
(52, 'engagement_7.jpg', 3, 10, 0, '2015-06-27'),
(53, 'engagement_8.jpg', 3, 10, 0, '2015-06-27'),
(54, 'engagement_9.jpg', 3, 10, 0, '2015-06-27'),
(56, 'deco_bouquet_1.jpg', 4, 9, NULL, NULL),
(57, 'deco_bouquet_2.jpg', 4, 9, NULL, NULL),
(58, 'deco_bouquet_3.jpg', 4, 9, NULL, NULL),
(59, 'deco_bouquet_4.jpg', 4, 9, NULL, NULL),
(60, 'deco_bouquet_5.jpg', 4, 9, NULL, NULL),
(61, 'deco_bouquet_6.jpg', 4, 9, NULL, NULL),
(62, 'deco_table_1.jpg', 4, 9, NULL, NULL),
(63, 'deco_table_2.jpg', 4, 9, NULL, NULL),
(64, 'deco_table_3.jpg', 4, 9, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
