-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 10 avr. 2022 à 22:16
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `d6_php_poo_zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `idAnimal` int(11) NOT NULL AUTO_INCREMENT,
  `nomAnimal` varchar(50) DEFAULT NULL,
  `ageAnimal` int(11) NOT NULL,
  `especeAnimal` varchar(50) DEFAULT NULL,
  `dateEntreeAnimal` date DEFAULT NULL,
  `dateSortieAnimal` date DEFAULT NULL,
  `sexeAnimal` varchar(50) DEFAULT NULL,
  `parentAnimal` varchar(50) DEFAULT NULL,
  `photoAnimal` blob,
  `regimeAlimentaireAnimal` varchar(50) DEFAULT NULL,
  `traitementAnimal` varchar(50) DEFAULT NULL,
  `environnementAnimal` varchar(50) DEFAULT NULL,
  `dateDecesAnimal` date DEFAULT NULL,
  `idEnclos` int(11) NOT NULL,
  PRIMARY KEY (`idAnimal`),
  KEY `FK_animal_enclos` (`idEnclos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`idAnimal`, `nomAnimal`, `ageAnimal`, `especeAnimal`, `dateEntreeAnimal`, `dateSortieAnimal`, `sexeAnimal`, `parentAnimal`, `photoAnimal`, `regimeAlimentaireAnimal`, `traitementAnimal`, `environnementAnimal`, `dateDecesAnimal`, `idEnclos`) VALUES
(2, 'Hippotrague', 10, 'Bovidae', '2022-04-01', NULL, 'M', NULL, NULL, 'Herbivore', NULL, 'Savane', NULL, 1),
(3, 'Elephant', 30, 'Elephantidae', '2020-10-14', NULL, 'F', NULL, NULL, 'Herbivore', NULL, 'Savane', NULL, 2),
(4, 'Crocodile', 15, 'Reptile', '2021-10-12', NULL, 'F', NULL, NULL, 'Carnivore', NULL, 'Eau', NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `animal_soigneur`
--

DROP TABLE IF EXISTS `animal_soigneur`;
CREATE TABLE IF NOT EXISTS `animal_soigneur` (
  `idAnimal` int(11) NOT NULL,
  `idSoigneur` int(11) NOT NULL,
  PRIMARY KEY (`idAnimal`) USING BTREE,
  KEY `FK_animal_soigneur_idSoigneur` (`idSoigneur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animal_soigneur`
--

INSERT INTO `animal_soigneur` (`idAnimal`, `idSoigneur`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `enclos`
--

DROP TABLE IF EXISTS `enclos`;
CREATE TABLE IF NOT EXISTS `enclos` (
  `idEnclos` int(11) NOT NULL AUTO_INCREMENT,
  `numeroEnclos` int(11) NOT NULL,
  `idZoo` int(11) NOT NULL,
  PRIMARY KEY (`idEnclos`),
  KEY `FK_enclos_zoo` (`idZoo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enclos`
--

INSERT INTO `enclos` (`idEnclos`, `numeroEnclos`, `idZoo`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `soigneur`
--

DROP TABLE IF EXISTS `soigneur`;
CREATE TABLE IF NOT EXISTS `soigneur` (
  `idSoigneur` int(11) NOT NULL AUTO_INCREMENT,
  `nomSoigneur` varchar(50) DEFAULT NULL,
  `prenomSoigneur` varchar(50) DEFAULT NULL,
  `dateEntreeSoigneur` date NOT NULL,
  `sexeSoigneur` varchar(50) DEFAULT NULL,
  `telephoneSoigneur` int(11) NOT NULL,
  `emailSoigneur` varchar(50) DEFAULT NULL,
  `photoSoigneur` blob,
  `specialiteSoigneur` varchar(50) DEFAULT NULL,
  `nbreMaxEnclosSoigneur` int(11) NOT NULL,
  `superieurHierarchiqueSoigneur` varchar(50) DEFAULT NULL,
  `dateSortieSoigneur` date DEFAULT NULL,
  `infoSupplementaireSoigneur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idSoigneur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soigneur`
--

INSERT INTO `soigneur` (`idSoigneur`, `nomSoigneur`, `prenomSoigneur`, `dateEntreeSoigneur`, `sexeSoigneur`, `telephoneSoigneur`, `emailSoigneur`, `photoSoigneur`, `specialiteSoigneur`, `nbreMaxEnclosSoigneur`, `superieurHierarchiqueSoigneur`, `dateSortieSoigneur`, `infoSupplementaireSoigneur`) VALUES
(1, 'Sayag', 'David', '2022-01-02', 'M', 607080910, 'd.sayag@leparc.fr', NULL, 'Biodiversité', 3, 'Anne', NULL, NULL),
(2, 'Boboc', 'Anne', '2021-07-13', 'F', 654525358, 'a.boboc@leparc.fr', NULL, 'Félin', 4, 'Bertrand', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `zoo`
--

DROP TABLE IF EXISTS `zoo`;
CREATE TABLE IF NOT EXISTS `zoo` (
  `idZoo` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idZoo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `zoo`
--

INSERT INTO `zoo` (`idZoo`) VALUES
(1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_animal_enclos` FOREIGN KEY (`idEnclos`) REFERENCES `enclos` (`idEnclos`);

--
-- Contraintes pour la table `animal_soigneur`
--
ALTER TABLE `animal_soigneur`
  ADD CONSTRAINT `FK_animal_soigneur_idAnimal` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`idAnimal`),
  ADD CONSTRAINT `FK_animal_soigneur_idSoigneur` FOREIGN KEY (`idSoigneur`) REFERENCES `soigneur` (`idSoigneur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
