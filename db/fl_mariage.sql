-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 07 Mars 2017 à 20:56
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
  `nom_photo_album` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `album`
--

INSERT INTO `album` (`id`, `nom_album`, `nom_photo_album`, `date`, `ordre`) VALUES
(1, 'Marine et Guillaume', 'couple_marine_guillaume.jpg', '2015-06-06', 2),
(2, 'Anne-Sophie et Pierre-Emmanuel', 'couple_anneso_pierremanu.jpg', '2015-09-05', 4),
(3, 'Olivia et Martin', 'couple_olivia_martin.jpg', '2015-09-12', 5),
(4, 'Anne-Sophie et Guillaume', 'couple_anneso_guillaume.jpg', '2016-06-11', 6),
(5, 'Marie et Colin', 'couple_marie_colin.jpg', '2016-08-20', 7),
(6, 'Fanny et Guillaume', 'couple_fanny_guillaume.jpg', '2016-09-24', 8),
(7, 'Elisabeth et Guillaume', 'couple_elisabeth_guillaume.jpg', '2016-10-22', 9),
(8, 'Sylvie et Franck', 'couple_sylvie_franck.jpg', '2015-05-12', 1),
(9, 'Marine et Guillaume', 'couple_marine_guillaume_eng.jpg', '2015-06-15', 3),
(10, 'Karine et JB', 'couple_karine_jb.jpg', '2016-10-23', 10),
(11, 'Leila et Roger', 'couple_leila_roger.jpg', '2016-10-23', 11);

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
  `date` date DEFAULT NULL,
  `format` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `nom_photo`, `category_id`, `album_id`, `ordre`, `date`, `format`) VALUES
(1, 'preparatifs_1.jpg', 1, 1, 1, '2015-06-06', 'paysage'),
(2, 'preparatifs_2.jpg', 1, 1, 2, '2015-06-06', 'paysage'),
(3, 'preparatifs_3.jpg', 1, 1, 3, '2015-06-06', 'portrait'),
(4, 'preparatifs_4.jpg', 1, 1, 4, '2015-06-06', 'paysage'),
(5, 'preparatifs_5.jpg', 1, 1, 5, '2015-06-27', 'paysage'),
(6, 'preparatifs_6.jpg', 1, 1, 6, '2015-06-27', 'paysage'),
(7, 'preparatifs_7.jpg', 1, 5, 7, '2015-06-27', 'portrait'),
(8, 'preparatifs_8.jpg', 1, 5, 8, '2016-08-20', 'paysage'),
(9, 'preparatifs_9.jpg', 1, 5, 9, '2016-08-20', 'paysage'),
(10, 'preparatifs_10.jpg', 1, 7, 10, '2015-10-17', 'portrait'),
(11, 'mariage_1.jpg', 2, 1, 1, '2015-06-06', 'paysage'),
(12, 'mariage_2.jpg', 2, 1, 2, '2015-06-06', 'paysage'),
(15, 'mariage_3.jpg', 2, 1, 3, '2015-06-06', 'portrait'),
(16, 'mariage_4.jpg', 2, 1, 4, '2015-06-06', 'paysage'),
(17, 'mariage_5.jpg', 2, 1, 5, '2015-06-06', 'paysage'),
(18, 'mariage_6.jpg', 2, 1, 6, '2015-06-06', 'paysage'),
(19, 'mariage_7.jpg', 2, 1, 7, '2015-06-06', 'portrait'),
(20, 'mariage_8.jpg', 2, 1, 8, '2015-06-06', 'paysage'),
(21, 'mariage_9.jpg', 2, 1, 9, '2015-06-06', 'paysage'),
(22, 'mariage_10.jpg', 2, 1, 10, '2015-06-06', 'paysage'),
(23, 'mariage_11.jpg', 2, 1, 11, '2015-06-06', 'paysage'),
(24, 'mariage_12.jpg', 2, 2, 12, '2015-09-12', 'paysage'),
(25, 'mariage_13.jpg', 2, 2, 13, '2015-09-12', 'paysage'),
(26, 'mariage_14.jpg', 2, 2, 14, '2015-09-12', 'paysage'),
(27, 'mariage_15.jpg', 2, 2, 15, '2015-09-12', 'paysage'),
(28, 'mariage_16.jpg', 2, 2, 16, '2015-09-12', 'paysage'),
(29, 'mariage_17.jpg', 2, 2, 17, '2015-09-12', 'paysage'),
(30, 'mariage_18.jpg', 2, 2, 18, '2015-09-12', 'paysage'),
(31, 'mariage_19.jpg', 2, 2, 19, '2015-09-12', 'paysage'),
(32, 'mariage_20.jpg', 2, 2, 20, '2015-09-12', 'paysage'),
(33, 'mariage_21.jpg', 2, 2, 21, '2015-09-12', 'paysage'),
(34, 'mariage_22.jpg', 2, 2, 22, '2015-09-12', 'paysage'),
(36, 'mariage_23.jpg', 2, 2, 23, '2015-09-12', 'paysage'),
(37, 'mariage_24.jpg', 2, 2, 24, '2015-09-12', 'portrait'),
(38, 'mariage_25.jpg', 2, 2, 25, '2015-09-12', 'paysage'),
(39, 'mariage_26.jpg', 2, 2, 26, '2015-09-12', 'paysage'),
(40, 'mariage_27.jpg', 2, 2, 27, '2015-09-12', 'paysage'),
(41, 'mariage_28.jpg', 2, 2, 28, '2015-09-12', 'paysage'),
(42, 'mariage_29.jpg', 2, 2, 29, '2015-09-12', 'paysage'),
(43, 'mariage_30.jpg', 2, 2, 30, '2015-09-12', 'paysage'),
(44, 'mariage_31.jpg', 2, 2, 31, '2015-09-12', 'portrait'),
(45, 'engagement_1.jpg', 3, 8, 1, '2015-05-12', 'paysage'),
(47, 'engagement_2.jpg', 3, 8, 2, '2015-05-12', 'paysage'),
(48, 'engagement_3.jpg', 3, 8, 3, '2015-05-12', 'paysage'),
(49, 'engagement_4.jpg', 3, 8, 4, '2015-05-12', 'paysage'),
(50, 'engagement_5.jpg', 3, 9, 5, '2015-06-12', 'paysage'),
(51, 'engagement_6.jpg', 3, 9, 6, '2015-06-12', 'paysage'),
(52, 'engagement_7.jpg', 3, 9, 7, '2015-06-12', 'paysage'),
(53, 'engagement_8.jpg', 3, 9, 8, '2015-06-12', 'portrait'),
(54, 'engagement_9.jpg', 3, 9, 9, '2015-06-12', 'paysage'),
(56, 'deco_bouquet_1.jpg', 4, 9, NULL, NULL, ''),
(57, 'deco_bouquet_2.jpg', 4, 9, NULL, NULL, ''),
(58, 'deco_bouquet_3.jpg', 4, 9, NULL, NULL, ''),
(59, 'deco_bouquet_4.jpg', 4, 9, NULL, NULL, ''),
(60, 'deco_bouquet_5.jpg', 4, 9, NULL, NULL, ''),
(61, 'deco_bouquet_6.jpg', 4, 9, NULL, NULL, ''),
(62, 'deco_table_1.jpg', 4, 9, NULL, NULL, ''),
(63, 'deco_table_2.jpg', 4, 9, NULL, NULL, ''),
(64, 'deco_table_3.jpg', 4, 9, NULL, NULL, ''),
(65, 'mariage_32.jpg', 2, 3, 32, '2015-09-12', 'paysage'),
(66, 'mariage_33.jpg', 2, 3, 33, '2015-09-12', 'paysage'),
(67, 'mariage_34.jpg', 2, 3, 34, '2015-09-12', 'paysage'),
(68, 'mariage_35.jpg', 2, 3, 35, '2015-09-12', 'paysage'),
(69, 'mariage_36.jpg', 2, 3, 36, '2015-09-12', 'portrait'),
(70, 'mariage_37.jpg', 2, 3, 37, '2015-09-12', 'paysage'),
(71, 'mariage_38.jpg', 2, 3, 38, '2015-09-12', 'paysage'),
(72, 'mariage_39.jpg', 2, 3, 39, '2015-09-12', 'portrait'),
(73, 'mariage_40.jpg', 2, 3, 40, '2015-09-12', 'paysage'),
(74, 'mariage_41.jpg', 2, 3, 41, '2015-09-12', 'paysage'),
(75, 'mariage_42.jpg', 2, 3, 42, '2015-09-12', 'paysage'),
(76, 'mariage_43.jpg', 2, 3, 43, '2015-09-12', 'paysage'),
(77, 'mariage_44.jpg', 2, 3, 44, '2015-09-12', 'paysage'),
(78, 'mariage_45.jpg', 2, 3, 45, '2015-09-12', 'paysage'),
(79, 'mariage_46.jpg', 2, 3, 46, '2015-09-12', 'paysage'),
(80, 'mariage_47.jpg', 2, 3, 47, '2015-09-12', 'paysage'),
(81, 'mariage_48.jpg', 2, 3, 48, '2015-09-12', 'paysage'),
(82, 'mariage_49.jpg', 2, 3, 49, '2015-09-12', 'portrait'),
(83, 'mariage_50.jpg', 2, 5, 50, '2016-08-20', 'paysage'),
(84, 'mariage_51.jpg', 2, 5, 51, '2016-08-20', 'paysage'),
(85, 'mariage_52.jpg', 2, 5, 52, '2016-08-20', 'paysage'),
(86, 'mariage_53.jpg', 2, 5, 53, '2016-08-20', 'paysage'),
(87, 'mariage_54.jpg', 2, 5, 54, '2016-08-20', 'paysage'),
(88, 'mariage_55.jpg', 2, 5, 55, '2016-08-20', 'paysage'),
(89, 'mariage_56.jpg', 2, 5, 56, '2016-08-20', 'paysage'),
(90, 'mariage_57.jpg', 2, 5, 57, '2016-08-20', 'paysage'),
(91, 'mariage_58.jpg', 2, 5, 58, '2016-08-20', 'paysage'),
(92, 'mariage_59.jpg', 2, 5, 59, '2016-08-20', 'paysage'),
(93, 'mariage_60.jpg', 2, 5, 60, '2016-08-20', 'paysage'),
(94, 'mariage_61.jpg', 2, 5, 61, '2016-08-20', 'paysage'),
(95, 'engagement_10.jpg', 3, 9, 10, '2015-06-12', 'portrait'),
(96, 'engagement_11.jpg', 3, 9, 11, '2015-06-12', 'paysage'),
(97, 'engagement_12.jpg', 3, 9, 12, '2015-06-12', 'portrait'),
(98, 'engagement_13.jpg', 3, 9, 13, '2015-06-12', 'paysage'),
(99, 'engagement_14.jpg', 3, 9, 14, '2015-06-12', 'paysage'),
(100, 'engagement_15.jpg', 3, 9, 15, '2015-06-12', 'portrait'),
(101, 'engagement_16.jpg', 3, 9, 16, '2015-06-12', 'paysage'),
(102, 'mariage_62.jpg', 2, 6, 62, '2016-09-24', 'paysage'),
(103, 'mariage_63.jpg', 2, 6, 63, '2016-09-24', 'paysage'),
(104, 'mariage_64.jpg', 2, 6, 64, '2016-09-24', 'paysage'),
(105, 'mariage_65.jpg', 2, 6, 65, '2016-09-24', 'paysage'),
(106, 'mariage_66.jpg', 2, 6, 66, '2016-09-24', 'paysage'),
(107, 'mariage_67.jpg', 2, 6, 67, '2016-09-24', 'paysage'),
(108, 'mariage_68.jpg', 2, 6, 68, '2016-09-24', 'paysage'),
(109, 'mariage_69.jpg', 2, 6, 69, '2016-09-24', 'paysage'),
(110, 'mariage_70.jpg', 2, 6, 70, '2016-09-24', 'paysage'),
(111, 'mariage_71.jpg', 2, 6, 71, '2016-09-24', 'paysage'),
(112, 'mariage_72.jpg', 2, 6, 72, '2016-09-24', 'paysage'),
(113, 'engagement_17.jpg', 3, 4, 17, '2016-06-11', 'paysage'),
(114, 'engagement_18.jpg', 3, 4, 18, '2016-06-11', 'paysage'),
(115, 'engagement_19.jpg', 3, 4, 19, '2016-06-11', 'paysage'),
(116, 'engagement_20.jpg', 3, 4, 20, '2016-06-11', 'paysage'),
(117, 'engagement_21.jpg', 3, 4, 21, '2016-06-11', 'paysage'),
(118, 'engagement_22.jpg', 3, 4, 22, '2016-06-11', 'paysage'),
(119, 'engagement_23.jpg', 3, 4, 23, '2016-06-11', 'paysage'),
(120, 'engagement_24.jpg', 3, 4, 24, '2016-06-11', 'paysage'),
(121, 'engagement_25.jpg', 3, 4, 25, '2016-06-11', 'paysage'),
(122, 'engagement_26.jpg', 3, 4, 26, '2016-06-11', 'paysage'),
(123, 'engagement_27.jpg', 3, 7, 27, '2016-10-22', 'paysage'),
(124, 'engagement_28.jpg', 3, 7, 28, '2016-10-22', 'paysage'),
(125, 'engagement_29.jpg', 3, 7, 29, '2016-10-22', 'paysage'),
(126, 'engagement_30.jpg', 3, 7, 30, '2016-10-22', 'paysage'),
(127, 'engagement_31.jpg', 3, 7, 31, '2016-10-22', 'paysage'),
(128, 'engagement_32.jpg', 3, 7, 32, '2016-10-22', 'paysage'),
(129, 'engagement_33.jpg', 3, 7, 33, '2016-10-22', 'paysage'),
(130, 'engagement_34.jpg', 3, 7, 34, '2016-10-22', 'paysage'),
(131, 'engagement_35.jpg', 3, 7, 35, '2016-10-22', 'paysage'),
(132, 'engagement_36.jpg', 3, 7, 36, '2016-10-22', 'paysage'),
(133, 'engagement_37.jpg', 3, 10, 37, '2016-10-23', 'paysage'),
(134, 'engagement_38.jpg', 3, 10, 38, '2016-10-23', 'paysage'),
(135, 'engagement_39.jpg', 3, 10, 39, '2016-10-23', 'paysage'),
(136, 'engagement_40.jpg', 3, 10, 40, '2016-10-23', 'paysage'),
(137, 'engagement_41.jpg', 3, 10, 41, '2016-10-23', 'paysage'),
(138, 'engagement_42.jpg', 3, 10, 42, '2016-10-23', 'paysage'),
(139, 'engagement_43.jpg', 3, 10, 43, '2016-10-23', 'paysage'),
(140, 'engagement_44.jpg', 3, 10, 44, '2016-10-23', 'paysage'),
(141, 'engagement_45.jpg', 3, 10, 45, '2016-10-23', 'paysage'),
(143, 'engagement_47.jpg', 3, 11, 47, '2016-10-29', 'paysage'),
(145, 'engagement_49.jpg', 3, 11, 49, '2016-10-29', 'paysage');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
