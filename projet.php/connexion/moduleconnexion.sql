-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 déc. 2019 à 13:47
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
-- Base de données :  `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(63, 'zob', 'z', 'z', 'fb665164a1d1af85b5b2f0bad28034d97a0b4f20'),
(81, 'olive', 'olivier', 'crozet', '2d31eb16cfd11c294ded0703c648f5caa95a9770'),
(72, 'manu', 'toto', 'crozet', '49e9fdbac7b6b28247b06e64df97a0d8e30342fa'),
(73, 'fzsdf', 'toto', 'macron', '49e9fdbac7b6b28247b06e64df97a0d8e30342fa'),
(54, 'thoni', 'thoni', 'thoni', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(44, 'zizou', 'zinedine', 'zidane', '49e9fdbac7b6b28247b06e64df97a0d8e30342fa'),
(61, 'eti', 'eti', 'eti', 'e23b2b5bb2689a328900dfe85e5f273dd294d5b6'),
(53, 'ferver', 'vsdf', 'vsdf', '17b0e7d1212c2800718d5a3e4ab0871a3efd87f4'),
(82, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(74, 'dzan ', 'fds', 'dsf', '49e9fdbac7b6b28247b06e64df97a0d8e30342fa'),
(75, 'zdfs', 'sdf', 'df', '49e9fdbac7b6b28247b06e64df97a0d8e30342fa'),
(70, 'Mathilde', 'mathilde', 'mathilde', 'e05bfbc4670d242fdf5e9512e408adb7df517863'),
(69, 'bobo', 'bobo', 'bobo', 'b736efda7342c257b42af16d6f7b8da01d5aa165'),
(68, 'fifi', 'fifi', 'fifi', 'a0d3e0799432fe1898df11e5f9dbd086635306f5'),
(67, 'yoyo', 'erz', 'z', '395df8f7c51f007019cb30201c49e884b46b92fa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
