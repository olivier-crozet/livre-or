-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 jan. 2020 à 13:30
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livreor`
--
CREATE DATABASE IF NOT EXISTS `livreor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `livreor`;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'salut', 27, '2020-01-03 20:25:36'),
(2, 'je fais mon premier test', 27, '2020-01-03 20:26:51'),
(3, 'test 2', 27, '2020-01-03 20:59:56'),
(4, 'sa marche ?', 29, '2020-01-03 21:07:26'),
(5, 'c mieux avec un peu de css', 2, '2020-01-03 23:06:13'),
(6, 'trop fort', 31, '2020-01-06 18:03:46'),
(7, 'trop fort', 31, '2020-01-06 18:06:18'),
(8, 'trop fort', 31, '2020-01-06 18:06:21'),
(9, 'yes', 27, '2020-01-06 18:16:26'),
(10, 'yes', 27, '2020-01-06 18:18:11'),
(11, 'yes', 27, '2020-01-06 18:18:17'),
(12, 'yes', 27, '2020-01-06 18:18:57'),
(13, 'yes', 27, '2020-01-06 18:19:09'),
(14, 'yes', 27, '2020-01-06 18:21:21'),
(15, 'yes', 27, '2020-01-06 18:21:58'),
(16, 'yes', 27, '2020-01-06 18:22:04'),
(17, 'non', 27, '2020-01-06 18:22:28'),
(18, 'non', 27, '2020-01-06 18:22:34'),
(19, 'non', 27, '2020-01-06 18:23:54'),
(20, 'non', 27, '2020-01-06 18:24:23'),
(21, 'non', 27, '2020-01-06 18:24:30'),
(22, 'aie', 27, '2020-01-06 18:24:46'),
(23, 'salut', 27, '2020-01-06 18:32:50'),
(24, 'salut', 27, '2020-01-06 18:34:00'),
(25, 'salut', 27, '2020-01-06 18:35:46'),
(26, 'salut', 27, '2020-01-06 18:35:52'),
(27, 'salut', 27, '2020-01-06 18:37:21'),
(28, 'salut', 27, '2020-01-06 18:37:33'),
(29, 'salut', 27, '2020-01-06 18:37:47'),
(30, 'salut', 27, '2020-01-06 18:37:54'),
(31, 'salut', 27, '2020-01-06 18:38:04'),
(32, 'salut', 27, '2020-01-06 18:41:31'),
(33, 'salut', 27, '2020-01-06 18:41:35'),
(34, 'salut', 27, '2020-01-06 18:42:41'),
(35, 'salut', 27, '2020-01-06 18:43:28'),
(36, 'salut', 27, '2020-01-06 18:43:35'),
(37, 'test 2', 27, '2020-01-06 18:44:15'),
(38, 'test 2', 27, '2020-01-06 18:44:21'),
(39, 'test 2', 27, '2020-01-06 18:47:25'),
(40, 'test 2', 27, '2020-01-06 18:47:32'),
(41, 'test 2', 27, '2020-01-06 18:47:38'),
(42, 'test 2', 27, '2020-01-06 18:51:18'),
(43, 'test 2', 27, '2020-01-06 18:51:27'),
(44, 'test 2', 27, '2020-01-06 18:52:37'),
(45, 'test 2', 27, '2020-01-06 18:53:07'),
(46, 'test 2', 27, '2020-01-06 18:53:11'),
(47, 'test 2', 27, '2020-01-06 18:53:16'),
(48, 'test 2', 27, '2020-01-06 18:53:25'),
(49, 'test 2', 27, '2020-01-06 18:54:11'),
(50, 'iiii', 27, '2020-01-06 18:55:50'),
(51, 'iiii', 27, '2020-01-06 18:56:34'),
(52, 'popp', 27, '2020-01-06 18:56:41'),
(53, 'popp', 27, '2020-01-06 18:56:48'),
(54, 'coucou', 27, '2020-01-06 18:57:55'),
(55, 'jjj', 27, '2020-01-06 19:00:47'),
(56, 'hhh', 27, '2020-01-06 19:02:00'),
(57, 'nik ta mer', 27, '2020-01-06 19:06:10'),
(58, 'fsxgchjkhljm', 27, '2020-01-06 19:07:07'),
(59, 'fsxgchjkhljm', 27, '2020-01-06 19:07:19'),
(60, 'geeee', 27, '2020-01-06 19:08:14'),
(61, 'kkkkkkkkkkkkkkkkk', 27, '2020-01-06 19:09:43'),
(62, 'mmmm', 27, '2020-01-06 19:10:35'),
(63, 'mmmm', 27, '2020-01-06 19:10:56'),
(64, 'mmmm', 27, '2020-01-06 19:11:37'),
(65, 'mmmm', 27, '2020-01-06 19:12:08'),
(66, 'mmmm', 27, '2020-01-06 19:13:48'),
(67, 'z', 27, '2020-01-06 19:14:52'),
(68, 'z', 27, '2020-01-06 19:15:55'),
(69, 'prion', 27, '2020-01-06 19:16:58'),
(70, 'conard', 27, '2020-01-06 19:19:19'),
(71, 'pascal', 27, '2020-01-06 19:21:10'),
(72, 'pascal', 27, '2020-01-07 13:34:25'),
(73, 'vugjfj', 27, '2020-01-07 14:02:42'),
(74, 'njbfrufroe', 27, '2020-01-07 14:03:15'),
(75, 'c tous bon', 33, '2020-01-07 15:40:30'),
(76, 'jhkgsfzrjhfgjhzsgjwfljhgjhgjkhgfqkmhlkfÃ¹ljfmoksqlijhfÃ¹liqsjrvÃ¹lcjkqhsrÃ¹oifgj:,cksq&lt;ijwdf*mkJS?FV%LJSDILFJ?CSDLKJFC%LIQSLJDFMLCISUJDMOFIKJSD%&lt;LIJFC%LSJC%OILWSDJF%LISKJ%FLJSR%LIJ', 33, '2020-01-07 15:42:58'),
(77, 'UYTRDFSFGHJKLHKJGFDSGYGFTDGRKYTDRURTHGDFFDSYRDSGRTYRDSYERGDFTRSTRDREJSJRDJTFJYRTDFTYTULTFDKTFL', 33, '2020-01-07 15:55:52'),
(78, 'TEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEETEReeeeeeeeerfddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsssssssssssedsfdsfds', 33, '2020-01-07 15:58:52'),
(79, 'fjefezr zedoifjzaelkfjza zeafjazeklfj elfkzjazeflkza zefjzaemkfjazekfjd zelkjfzlkeajfazkelf zeklfjzkelfjzkel ezlkjrzlkejzlkae lizejrlkzejrlkzae lkzejlkzeajrflkaze lkzerjklzeajrlkzeajrlkz zeklrjzelkrjer ekzlrjlkae', 33, '2020-01-07 16:16:08'),
(80, 'salut c bibi', 34, '2020-01-07 22:08:26'),
(81, 'c bon quand sa marche', 35, '2020-01-08 20:41:56');

-- --------------------------------------------------------

--
-- Structure de la table `message_admin`
--

DROP TABLE IF EXISTS `message_admin`;
CREATE TABLE IF NOT EXISTS `message_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message_admin`
--

INSERT INTO `message_admin` (`id`, `mail`, `message`) VALUES
(1, 'oliviercrozet@hotmail.fr', 'jkhgfdhgsfdgfh'),
(2, 'oliviercrozet@hotmail.fr', 'jkhgfdhgsfdgfh'),
(3, 'oliviercrozet@hotmail.fr', 'jkhgfdhgsfdgfh'),
(4, 'oliviercrozet@hotmail.fr', 'jkhgfdhgsfdgfh'),
(5, 'oliviercrozet@hotmail.fr', 'jhjgfdsf'),
(6, 'oliviercrozet@hotmail.fr', 'jhjgfdsf'),
(7, 'oliviercrozet@hotmail.fr', 'jhjgfdsf'),
(8, 'oliviercrozet@hotmail.fr', 'test 2'),
(9, 'oliviercrozet@hotmail.fr', 'test3'),
(10, 'olivier.crozet@laplateforme.io', 'C BON QUAND SA MARCHE');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(33, 'olive', '2d31eb16cfd11c294ded0703c648f5caa95a9770'),
(2, 'manu', '158873d90a7ef40f3637a222b7329c09d0222554'),
(27, 'toto', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c'),
(34, 'bibi', '1a852b5e2b88dd7a6d137a0a68b070ddb03cc3e8'),
(31, 'eti', 'e23b2b5bb2689a328900dfe85e5f273dd294d5b6'),
(35, 'jean', '51f8b1fa9b424745378826727452997ee2a7c3d7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
