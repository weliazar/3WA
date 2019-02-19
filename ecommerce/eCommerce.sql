-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 14 fév. 2019 à 17:18
-- Version du serveur :  5.7.25-0ubuntu0.16.04.2
-- Version de PHP :  7.2.11-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eCommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `OderLine`
--

CREATE TABLE `OderLine` (
  `Id` int(11) NOT NULL,
  `QuantityOrdered` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `PriceEach` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Orders`
--

CREATE TABLE `Orders` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TotalAmount` double NOT NULL,
  `TaxAmount` double NOT NULL,
  `TaxRate` float NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Products`
--

CREATE TABLE `Products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `QuantityInStock` int(4) NOT NULL,
  `BuyPrice` double NOT NULL,
  `SalePrice` double NOT NULL,
  `CategoryId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(40) NOT NULL,
  `ZipCode` varchar(5) NOT NULL,
  `Country` varchar(40) DEFAULT NULL,
  `Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`Id`, `FirstName`, `LastName`, `Email`, `Password`, `Address`, `City`, `ZipCode`, `Country`, `Phone`) VALUES
(1, 'Wilkenson', 'Eliazar', 'root', '$2y$11$1e23e97fd92256281dc87u.3uEb6IsM3BGjmLouR239f0vtPaQlQG', '16 Allée de l\'Orangerie', 'ABLON SUR SEINE', '94480', NULL, '629806990');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `OderLine`
--
ALTER TABLE `OderLine`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `OderLine`
--
ALTER TABLE `OderLine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Products`
--
ALTER TABLE `Products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
