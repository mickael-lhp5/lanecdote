-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 fév. 2021 à 14:00
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lanecdote`
--

-- --------------------------------------------------------

--
-- Structure de la table `mf_category_menucomponents`
--

DROP TABLE IF EXISTS `mf_category_menucomponents`;
CREATE TABLE IF NOT EXISTS `mf_category_menucomponents` (
  `category_menucomponent_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_menucomponent_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_menucomponent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mf_category_menucomponents`
--

INSERT INTO `mf_category_menucomponents` (`category_menucomponent_id`, `category_menucomponent_name`) VALUES
(1, 'Mise en bouche'),
(2, 'Entrée'),
(3, 'Plat'),
(4, 'Fromage'),
(5, 'Dessert'),
(6, 'Mignardises');

-- --------------------------------------------------------

--
-- Structure de la table `mf_drinks`
--

DROP TABLE IF EXISTS `mf_drinks`;
CREATE TABLE IF NOT EXISTS `mf_drinks` (
  `drink_id` int(11) NOT NULL AUTO_INCREMENT,
  `drink_name` varchar(50) NOT NULL,
  `drink_price` float NOT NULL,
  `drink_visible` tinyint(1) NOT NULL,
  `drinks_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`drink_id`),
  KEY `mf_drinks_mf_drinks_cat_FK` (`drinks_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mf_drinks`
--

INSERT INTO `mf_drinks` (`drink_id`, `drink_name`, `drink_price`, `drink_visible`, `drinks_cat_id`) VALUES
(1, ' Blayes Cotes de Bordeaux', 13.9, 0, 1),
(2, 'saumur champigny voltige des clos', 16.7, 0, 1),
(3, 'Brouilly Château de la Terrière', 18.9, 0, 1),
(4, 'Chardonnay Moulin de Gassac', 12.9, 0, 2),
(5, 'Macon-Villages Les Trois rieuses', 19.9, 0, 2),
(6, 'Chablis Domaine Gautheron AOC', 28.9, 0, 2),
(7, 'La Pive Bio Sable de Camargue', 14.9, 0, 3),
(8, 'Belzebuth Rouge', 4.8, 0, 2),
(9, 'Belzebuth Pink', 4.8, 0, 2),
(10, 'Belzebuth Classique', 4.8, 0, 2),
(11, 'Desperados', 4.8, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `mf_drinks_cat`
--

DROP TABLE IF EXISTS `mf_drinks_cat`;
CREATE TABLE IF NOT EXISTS `mf_drinks_cat` (
  `drinks_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `drinks_cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`drinks_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mf_drinks_cat`
--

INSERT INTO `mf_drinks_cat` (`drinks_cat_id`, `drinks_cat_name`) VALUES
(1, 'Vin Rouge'),
(2, 'Vin Blanc'),
(3, 'Vin Rosé'),
(4, 'Bière');

-- --------------------------------------------------------

--
-- Structure de la table `mf_formule`
--

DROP TABLE IF EXISTS `mf_formule`;
CREATE TABLE IF NOT EXISTS `mf_formule` (
  `formule_id` int(11) NOT NULL AUTO_INCREMENT,
  `formule_name` varchar(150) NOT NULL,
  `formule_price` float NOT NULL,
  PRIMARY KEY (`formule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mf_formule`
--

INSERT INTO `mf_formule` (`formule_id`, `formule_name`, `formule_price`) VALUES
(1, 'Entrée et plat', 18.9),
(2, 'Plat et dessert', 18.9),
(3, ' Entrée Plat et dessert', 22.9);

-- --------------------------------------------------------

--
-- Structure de la table `mf_menu`
--

DROP TABLE IF EXISTS `mf_menu`;
CREATE TABLE IF NOT EXISTS `mf_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `menu_visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mf_menu`
--

INSERT INTO `mf_menu` (`menu_id`, `menu_name`, `menu_visible`) VALUES
(1, 'Menu Duo', 0),
(2, 'Menu Trio', 0),
(3, 'Menu Midi', 0),
(4, 'Menu L\'Anecdote', 0),
(5, 'Menu Saint Valentin', 0),
(6, 'Menu Noël', 0),
(7, 'Menu Plaisir', 0);

-- --------------------------------------------------------

--
-- Structure de la table `mf_menucompo`
--

DROP TABLE IF EXISTS `mf_menucompo`;
CREATE TABLE IF NOT EXISTS `mf_menucompo` (
  `menu_id` int(11) NOT NULL,
  `menucomponent_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`,`menucomponent_id`),
  KEY `mf_menucompo_mf_menucomponents0_FK` (`menucomponent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mf_menucomponents`
--

DROP TABLE IF EXISTS `mf_menucomponents`;
CREATE TABLE IF NOT EXISTS `mf_menucomponents` (
  `menucomponent_id` int(11) NOT NULL AUTO_INCREMENT,
  `menucomponent_name` varchar(50) NOT NULL,
  `menucomponent_composition` varchar(200) NOT NULL,
  `menucomponent_price` float NOT NULL,
  `menucomponent_image` varchar(50) DEFAULT NULL,
  `menucomponent_supp` int(11) DEFAULT NULL,
  `menucomponent_visible` tinyint(1) NOT NULL,
  `category_menucomponent_id` int(11) NOT NULL,
  PRIMARY KEY (`menucomponent_id`),
  KEY `mf_menucomponents_mf_category_menucomponents_FK` (`category_menucomponent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mf_menucomponents`
--

INSERT INTO `mf_menucomponents` (`menucomponent_id`, `menucomponent_name`, `menucomponent_composition`, `menucomponent_price`, `menucomponent_image`, `menucomponent_supp`, `menucomponent_visible`, `category_menucomponent_id`) VALUES
(1, 'Le  Saumon exotique', 'Tartare de saumon, avocat et mangue, vinaigrette exotique', 6.9, '123.jpeg', NULL, 0, 2),
(2, 'L\'Oeuf Cocotte', 'Oeuf en cocotte au chorizo, gratiné au comté', 5.9, '234.jpeg', NULL, 0, 2),
(3, 'Le Foie Gras', 'Tranche de foie gras, chutney de figue et crumble noisette', 11.9, '456jpeg', 2, 0, 2),
(4, 'Le Burger Maison', 'Pain brioché Maison, sauce burger, steak haché minute, cornichon, tomate et salade, cheddar fondant ou raclette coulante, frites', 13.9, '678.jpeg', NULL, 0, 3),
(5, 'La Criée', 'Assortissement de poissons et de crustacés mijotés à la crème accompagné d\'une fondue de poireaux et pommes grenailles', 13.9, '678.jpeg', NULL, 0, 3),
(6, 'Le Risotto', 'Risotto aux champignons, copeaux de fromages italiens,oeuf poché', 13.9, '789.jpeg', NULL, 0, 3),
(7, 'La Souris d\'Agneau', 'Souris d\'agneau confite, jus de citon, légumes mijotés', 15.9, '1011.jpeg', 2, 0, 3),
(8, 'La César', 'Salade, tomate, croutons à l\'ail, poulet croustillant, copeaux de fromage italien, sauce césar du chef', 13.9, '1213.jpeg', NULL, 0, 3),
(9, 'L\'intenssement', 'Fondant au chocolat et crème anglaise', 4.9, '444.jpeg', NULL, 0, 5),
(10, 'Le Galet', 'Mousse au fromage blanc, compoté caramélisée crumble, sauce caramel', 5.9, '555.jpeg', NULL, 0, 5),
(11, 'Le Yuzu', 'Mousse chocolat blanc au yuzu, coeur framboise, croustillant pistache', 5.9, '555.jpeg', NULL, 0, 5),
(12, 'La Citron Meringué', 'Pâte sablée, cremeux citron jaune, meringue italienne flambée', 4.9, '666.jpeg', NULL, 0, 5),
(13, 'La Figue', 'Tartelle crème d\'amande et figues roties, chantilly au miel et figue fraîche, coulis de fruits', 5.9, '777.jpeg', NULL, 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `mf_menuformule`
--

DROP TABLE IF EXISTS `mf_menuformule`;
CREATE TABLE IF NOT EXISTS `mf_menuformule` (
  `_Formule_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`_Formule_id`,`menu_id`),
  KEY `mf_menuformule_mf_menu0_FK` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mf_drinks`
--
ALTER TABLE `mf_drinks`
  ADD CONSTRAINT `mf_drinks_mf_drinks_cat_FK` FOREIGN KEY (`drinks_cat_id`) REFERENCES `mf_drinks_cat` (`drinks_cat_id`);

--
-- Contraintes pour la table `mf_menucompo`
--
ALTER TABLE `mf_menucompo`
  ADD CONSTRAINT `mf_menucompo_mf_menu_FK` FOREIGN KEY (`menu_id`) REFERENCES `mf_menu` (`menu_id`),
  ADD CONSTRAINT `mf_menucompo_mf_menucomponents0_FK` FOREIGN KEY (`menucomponent_id`) REFERENCES `mf_menucomponents` (`menucomponent_id`);

--
-- Contraintes pour la table `mf_menucomponents`
--
ALTER TABLE `mf_menucomponents`
  ADD CONSTRAINT `mf_menucomponents_mf_category_menucomponents_FK` FOREIGN KEY (`category_menucomponent_id`) REFERENCES `mf_category_menucomponents` (`category_menucomponent_id`);

--
-- Contraintes pour la table `mf_menuformule`
--
ALTER TABLE `mf_menuformule`
  ADD CONSTRAINT `mf_menuformule_mf_formule_FK` FOREIGN KEY (`_Formule_id`) REFERENCES `mf_formule` (`formule_id`),
  ADD CONSTRAINT `mf_menuformule_mf_menu0_FK` FOREIGN KEY (`menu_id`) REFERENCES `mf_menu` (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
