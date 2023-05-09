-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour panier
DROP DATABASE IF EXISTS `panier`;
CREATE DATABASE IF NOT EXISTS `panier` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `panier`;

-- Listage de la structure de la table panier. exemple
DROP TABLE IF EXISTS `exemple`;
CREATE TABLE IF NOT EXISTS `exemple` (
  `Colonne 1` int(11) NOT NULL DEFAULT '0',
  `Colonne 2` int(11) DEFAULT NULL,
  `Colonne 3` int(11) DEFAULT NULL,
  `Colonne 4` int(11) DEFAULT NULL,
  `Colonne 5` int(11) DEFAULT NULL,
  `Colonne 6` int(11) DEFAULT NULL,
  `Colonne 7` int(11) DEFAULT NULL,
  `Colonne 8` int(11) DEFAULT NULL,
  `Colonne 9` int(11) DEFAULT NULL,
  `Colonne 10` int(11) DEFAULT NULL,
  `Colonne 11` int(11) DEFAULT NULL,
  PRIMARY KEY (`Colonne 1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table panier. florian
DROP TABLE IF EXISTS `florian`;
CREATE TABLE IF NOT EXISTS `florian` (
  `Colonne 1` int(11) NOT NULL AUTO_INCREMENT,
  `prix` float DEFAULT '0',
  `produit` varchar(50) DEFAULT NULL,
  `exemple` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Colonne 1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table panier. produits
DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) DEFAULT NULL,
  `prix` float DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
