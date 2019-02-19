-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 19 fév. 2019 à 10:18
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
-- Base de données :  `dataRestaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `Meal`
--

CREATE TABLE `Meal` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `QuantityInStock` int(4) NOT NULL,
  `BuyPrice` double NOT NULL,
  `SalePrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Meal`
--

INSERT INTO `Meal` (`Id`, `Name`, `Photo`, `Description`, `QuantityInStock`, `BuyPrice`, `SalePrice`) VALUES
(1, 'Coca-Cola', 'coca.jpg', 'Mmmm, le Coca-Cola avec 10 morceaux de sucres et tout plein de caféine !', 72, 0.6, 3),
(2, 'Bagel Thon', 'bagel_thon.jpg', 'Notre bagel est constitué d\'un pain moelleux avec des grains de sésame et du thon albacore, accompagné de feuilles de salade fraîche du jour  et d\'une sauce renversante :-)', 18, 2.75, 5.5),
(3, 'Bacon Cheeseburger', 'bacon_cheeseburger.jpg', 'Ce délicieux cheeseburger contient un steak haché viande française de 150g ainsi que d\'un buns grillé juste comme il faut, le tout accompagné de frites fraîches maison !', 14, 6, 12.5),
(4, 'Carrot Cake', 'carrot_cake.jpg', 'Le carrot cake maison ravira les plus gourmands et les puristes : tous les ingrédients sont naturels !\r\nÀ consommer sans modération', 9, 3, 6.75),
(5, 'Donut Chocolat', 'chocolate_donut.jpg', 'Les donuts sont fabriqués le matin même et sont recouvert d\'une délicieuse sauce au chocolat !', 16, 3, 6.2),
(6, 'Dr. Pepper', 'drpepper.jpg', 'Son goût sucré avec de l\'amande vous ravira !', 53, 0.5, 2.9),
(7, 'Milkshake', 'milkshake.jpg', 'Notre milkshake bien crémeux contient des morceaux d\'Oréos et est accompagné de crème chantilly et de smarties en guise de topping. Il éblouira vos papilles !', 12, 2, 5.35);

-- --------------------------------------------------------

--
-- Structure de la table `OderLine`
--

CREATE TABLE `OderLine` (
  `Id` int(11) NOT NULL,
  `QuantityOrdered` int(11) NOT NULL,
  `Meal_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `PriceEach` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `OderLine`
--

INSERT INTO `OderLine` (`Id`, `QuantityOrdered`, `Meal_Id`, `Order_Id`, `PriceEach`) VALUES
(6, 2, 5, 5, 6.2),
(7, 2, 1, 5, 3),
(8, 2, 5, 6, 6.2),
(9, 2, 1, 6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Orders`
--

CREATE TABLE `Orders` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `TotalAmount` double DEFAULT NULL,
  `TaxAmount` double DEFAULT NULL,
  `TaxeRate` float DEFAULT NULL,
  `Tax_Amount` double DEFAULT NULL,
  `CreationTimestamp` datetime DEFAULT NULL,
  `CompleteTimestamp` datetime DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Orders`
--

INSERT INTO `Orders` (`Id`, `User_Id`, `TotalAmount`, `TaxAmount`, `TaxeRate`, `Tax_Amount`, `CreationTimestamp`, `CompleteTimestamp`, `Status`) VALUES
(4, 10, 18.4, 3.68, 20, NULL, '2019-02-06 12:57:21', '2019-02-06 12:57:21', 'not payed'),
(5, 10, 18.4, 3.68, 20, NULL, '2019-02-06 12:57:56', '2019-02-06 12:57:56', 'not payed'),
(6, 10, 18.4, 3.68, 20, NULL, '2019-02-06 12:58:48', '2019-02-06 12:58:48', 'not payed');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `Id` int(11) NOT NULL,
  `FirtsName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `BirthDate` date NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(40) NOT NULL,
  `ZipCode` varchar(5) NOT NULL,
  `Country` varchar(40) DEFAULT NULL,
  `Phone` varchar(10) NOT NULL,
  `CreationTimestamp` datetime NOT NULL,
  `LastLoginTimestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`Id`, `FirtsName`, `LastName`, `Email`, `Password`, `BirthDate`, `Address`, `City`, `ZipCode`, `Country`, `Phone`, `CreationTimestamp`, `LastLoginTimestamp`) VALUES
(1, 'Wilkenson', 'Eliazar', 'root', 'azerty', '1940-01-01', '16 Allée de l\'Orangerie', 'ABLON SUR SEINE', '94480', NULL, '0629806990', '2019-01-29 16:44:02', NULL),
(2, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:47:55', NULL),
(3, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:50:14', NULL),
(4, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:50:49', NULL),
(5, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:51:02', NULL),
(6, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:55:01', NULL),
(7, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:55:52', NULL),
(8, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:57:28', NULL),
(9, '', '', 'root', 'troiswa', '1940-01-01', '', '', '', NULL, '', '2019-01-29 16:59:34', NULL),
(10, 'Wilkenson', 'Eliazar', 'root2', '$2y$11$c1a686c0a6c13c3f67d85eGdSDh6d/upWTUki9NYxGNJjWR494CKO', '1940-01-01', '16 Allée de l\'Orangerie', 'ABLON SUR SEINE', '94480', NULL, '0629806990', '2019-01-30 11:25:57', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Meal`
--
ALTER TABLE `Meal`
  ADD PRIMARY KEY (`Id`);

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
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Meal`
--
ALTER TABLE `Meal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `OderLine`
--
ALTER TABLE `OderLine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
