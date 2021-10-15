-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 15 oct. 2021 à 19:10
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
-- Base de données : `lecoupdejus_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_about`
--

DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` varchar(255) NOT NULL,
  `about` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about`) VALUES
('01', '                    ');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `user_id` varchar(255) NOT NULL DEFAULT 'A237893',
  `username` varchar(255) NOT NULL DEFAULT 'admin',
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `avatar` varchar(255) DEFAULT NULL,
  `reg_date` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL DEFAULT 'YES',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `username`, `email`, `login`, `role`, `avatar`, `reg_date`, `verified`) VALUES
('A237893', 'admin', 'admin@admin.com', '$2y$10$k7NZ9Hu8myBvImC0g7.R4eXW4G06rrzfwydYPjTPXF7RcOeoQoxfW', 'admin', NULL, '04/11/2018 - 03:10:57', 'YES');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_ads`
--

DROP TABLE IF EXISTS `tbl_ads`;
CREATE TABLE IF NOT EXISTS `tbl_ads` (
  `enc_id` int(255) NOT NULL AUTO_INCREMENT,
  `ad_id` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `ad_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fixed` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'inactive',
  `featured` varchar(255) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`enc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_alerts`
--

DROP TABLE IF EXISTS `tbl_alerts`;
CREATE TABLE IF NOT EXISTS `tbl_alerts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_alerts`
--

INSERT INTO `tbl_alerts` (`id`, `code`, `description`, `type`) VALUES
(1, '001', 'Vous avez été enregistré avec succès, connectez vous pour continuer', 'success'),
(2, '002', 'Adresse e-mail ou mot de passe invalide', 'danger'),
(3, '003', 'Désolé, seuls les fichiers JPG, JPEG et PNG sont autorisés.', 'warning'),
(4, '004', 'Désolé, votre fichier est trop volumineux. le téléchargement de votre avatar doit être inférieur à <strong>800KB</strong>', 'warning'),
(5, '005', 'Le profil a été mis à jour', 'success'),
(6, '006', 'Le mot de passe a été mis à jour', 'success'),
(7, '007', 'Image téléchargée avec succès', 'success'),
(8, '008', 'Votre annonce a été mise à jour avec succès', 'success'),
(9, '009', 'Votre annonce a été supprimée avec succès', 'success'),
(10, '010', 'Veuillez compléter le ReCaptcha avant de vous connecter ', 'warning'),
(11, '011', 'Votre message a été envoyé', 'success'),
(12, '012', 'Une erreur à été rencontré avec votre message', 'warning'),
(13, '013', 'Le compte a pas été trouvé', 'warning'),
(14, '014', 'Veuillez vérifier votre courrier électronique pour connaitre les instructions suivantes', 'info'),
(15, '015', 'Une erreur inconnue à été rencontré', 'warning'),
(16, '016', 'Paramètres appliqués avec succès', 'info'),
(17, '017', 'La FAQ a été ajoutée avec succès', 'success'),
(18, '018', 'Adresse e-mail déjà utilisée', 'warning'),
(19, '019', 'Email ou le pseudo est déjà enregistré', 'warning'),
(20, '020', 'Ce pseudo est déjà enregistré', 'warning');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_categories`
--

DROP TABLE IF EXISTS `tbl_categories`;
CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category`) VALUES
(3, 'Gyropode'),
(4, 'Gyroroue'),
(6, 'Hoverboard'),
(8, 'Scooter électrique'),
(5, 'Skateboard électrique'),
(2, 'Trottinette électrique'),
(1, 'Vélo électrique'),
(7, 'Voiture électrique');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_departement`
--

DROP TABLE IF EXISTS `tbl_departement`;
CREATE TABLE IF NOT EXISTS `tbl_departement` (
  `departement_id` int(11) NOT NULL AUTO_INCREMENT,
  `departement_code` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom_uppercase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `departement_slug` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom_soundex` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`departement_id`),
  KEY `departement_slug` (`departement_slug`),
  KEY `departement_code` (`departement_code`),
  KEY `departement_nom_soundex` (`departement_nom_soundex`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_departement`
--

INSERT INTO `tbl_departement` (`departement_id`, `departement_code`, `departement_nom`, `departement_nom_uppercase`, `departement_slug`, `departement_nom_soundex`) VALUES
(1, '01', 'Ain', 'AIN', 'ain', 'A500'),
(2, '02', 'Aisne', 'AISNE', 'aisne', 'A250'),
(3, '03', 'Allier', 'ALLIER', 'allier', 'A460'),
(4, '04', 'Alpes-de-Haute-Provence', 'ALPES-DE-HAUTE-PROVENCE', 'alpes-de-haute-provence', 'A412316152'),
(5, '05', 'Hautes-Alpes', 'HAUTES-ALPES', 'hautes-alpes', 'H32412'),
(6, '06', 'Alpes-Maritimes', 'ALPES-MARITIMES', 'alpes-maritimes', 'A41256352'),
(7, '07', 'Ardèche', 'ARDÈCHE', 'ardeche', 'A632'),
(8, '08', 'Ardennes', 'ARDENNES', 'ardennes', 'A6352'),
(9, '09', 'Ariège', 'ARIÈGE', 'ariege', 'A620'),
(10, '10', 'Aube', 'AUBE', 'aube', 'A100'),
(11, '11', 'Aude', 'AUDE', 'aude', 'A300'),
(12, '12', 'Aveyron', 'AVEYRON', 'aveyron', 'A165'),
(13, '13', 'Bouches-du-Rhône', 'BOUCHES-DU-RHÔNE', 'bouches-du-rhone', 'B2365'),
(14, '14', 'Calvados', 'CALVADOS', 'calvados', 'C4132'),
(15, '15', 'Cantal', 'CANTAL', 'cantal', 'C534'),
(16, '16', 'Charente', 'CHARENTE', 'charente', 'C653'),
(17, '17', 'Charente-Maritime', 'CHARENTE-MARITIME', 'charente-maritime', 'C6535635'),
(18, '18', 'Cher', 'CHER', 'cher', 'C600'),
(19, '19', 'Corrèze', 'CORRÈZE', 'correze', 'C620'),
(20, '2a', 'Corse-du-sud', 'CORSE-DU-SUD', 'corse-du-sud', 'C62323'),
(21, '2b', 'Haute-corse', 'HAUTE-CORSE', 'haute-corse', 'H3262'),
(22, '21', 'Côte-d\'or', 'CÔTE-D\'OR', 'cote-dor', 'C360'),
(23, '22', 'Côtes-d\'armor', 'CÔTES-D\'ARMOR', 'cotes-darmor', 'C323656'),
(24, '23', 'Creuse', 'CREUSE', 'creuse', 'C620'),
(25, '24', 'Dordogne', 'DORDOGNE', 'dordogne', 'D6325'),
(26, '25', 'Doubs', 'DOUBS', 'doubs', 'D120'),
(27, '26', 'Drôme', 'DRÔME', 'drome', 'D650'),
(28, '27', 'Eure', 'EURE', 'eure', 'E600'),
(29, '28', 'Eure-et-Loir', 'EURE-ET-LOIR', 'eure-et-loir', 'E6346'),
(30, '29', 'Finistère', 'FINISTÈRE', 'finistere', 'F5236'),
(31, '30', 'Gard', 'GARD', 'gard', 'G630'),
(32, '31', 'Haute-Garonne', 'HAUTE-GARONNE', 'haute-garonne', 'H3265'),
(33, '32', 'Gers', 'GERS', 'gers', 'G620'),
(34, '33', 'Gironde', 'GIRONDE', 'gironde', 'G653'),
(35, '34', 'Hérault', 'HÉRAULT', 'herault', 'H643'),
(36, '35', 'Ile-et-Vilaine', 'ILE-ET-VILAINE', 'ile-et-vilaine', 'I43145'),
(37, '36', 'Indre', 'INDRE', 'indre', 'I536'),
(38, '37', 'Indre-et-Loire', 'INDRE-ET-LOIRE', 'indre-et-loire', 'I536346'),
(39, '38', 'Isère', 'ISÈRE', 'isere', 'I260'),
(40, '39', 'Jura', 'JURA', 'jura', 'J600'),
(41, '40', 'Landes', 'LANDES', 'landes', 'L532'),
(42, '41', 'Loir-et-Cher', 'LOIR-ET-CHER', 'loir-et-cher', 'L6326'),
(43, '42', 'Loire', 'LOIRE', 'loire', 'L600'),
(44, '43', 'Haute-Loire', 'HAUTE-LOIRE', 'haute-loire', 'H346'),
(45, '44', 'Loire-Atlantique', 'LOIRE-ATLANTIQUE', 'loire-atlantique', 'L634532'),
(46, '45', 'Loiret', 'LOIRET', 'loiret', 'L630'),
(47, '46', 'Lot', 'LOT', 'lot', 'L300'),
(48, '47', 'Lot-et-Garonne', 'LOT-ET-GARONNE', 'lot-et-garonne', 'L3265'),
(49, '48', 'Lozère', 'LOZÈRE', 'lozere', 'L260'),
(50, '49', 'Maine-et-Loire', 'MAINE-ET-LOIRE', 'maine-et-loire', 'M346'),
(51, '50', 'Manche', 'MANCHE', 'manche', 'M200'),
(52, '51', 'Marne', 'MARNE', 'marne', 'M650'),
(53, '52', 'Haute-Marne', 'HAUTE-MARNE', 'haute-marne', 'H3565'),
(54, '53', 'Mayenne', 'MAYENNE', 'mayenne', 'M000'),
(55, '54', 'Meurthe-et-Moselle', 'MEURTHE-ET-MOSELLE', 'meurthe-et-moselle', 'M63524'),
(56, '55', 'Meuse', 'MEUSE', 'meuse', 'M200'),
(57, '56', 'Morbihan', 'MORBIHAN', 'morbihan', 'M615'),
(58, '57', 'Moselle', 'MOSELLE', 'moselle', 'M240'),
(59, '58', 'Nièvre', 'NIÈVRE', 'nievre', 'N160'),
(60, '59', 'Nord', 'NORD', 'nord', 'N630'),
(61, '60', 'Oise', 'OISE', 'oise', 'O200'),
(62, '61', 'Orne', 'ORNE', 'orne', 'O650'),
(63, '62', 'Pas-de-Calais', 'PAS-DE-CALAIS', 'pas-de-calais', 'P23242'),
(64, '63', 'Puy-de-Dôme', 'PUY-DE-DÔME', 'puy-de-dome', 'P350'),
(65, '64', 'Pyrénées-Atlantiques', 'PYRÉNÉES-ATLANTIQUES', 'pyrenees-atlantiques', 'P65234532'),
(66, '65', 'Hautes-Pyrénées', 'HAUTES-PYRÉNÉES', 'hautes-pyrenees', 'H321652'),
(67, '66', 'Pyrénées-Orientales', 'PYRÉNÉES-ORIENTALES', 'pyrenees-orientales', 'P65265342'),
(68, '67', 'Bas-Rhin', 'BAS-RHIN', 'bas-rhin', 'B265'),
(69, '68', 'Haut-Rhin', 'HAUT-RHIN', 'haut-rhin', 'H365'),
(70, '69', 'Rhône', 'RHÔNE', 'rhone', 'R500'),
(71, '70', 'Haute-Saône', 'HAUTE-SAÔNE', 'haute-saone', 'H325'),
(72, '71', 'Saône-et-Loire', 'SAÔNE-ET-LOIRE', 'saone-et-loire', 'S5346'),
(73, '72', 'Sarthe', 'SARTHE', 'sarthe', 'S630'),
(74, '73', 'Savoie', 'SAVOIE', 'savoie', 'S100'),
(75, '74', 'Haute-Savoie', 'HAUTE-SAVOIE', 'haute-savoie', 'H321'),
(76, '75', 'Paris', 'PARIS', 'paris', 'P620'),
(77, '76', 'Seine-Maritime', 'SEINE-MARITIME', 'seine-maritime', 'S5635'),
(78, '77', 'Seine-et-Marne', 'SEINE-ET-MARNE', 'seine-et-marne', 'S53565'),
(79, '78', 'Yvelines', 'YVELINES', 'yvelines', 'Y1452'),
(80, '79', 'Deux-Sèvres', 'DEUX-SÈVRES', 'deux-sevres', 'D2162'),
(81, '80', 'Somme', 'SOMME', 'somme', 'S500'),
(82, '81', 'Tarn', 'TARN', 'tarn', 'T650'),
(83, '82', 'Tarn-et-Garonne', 'TARN-ET-GARONNE', 'tarn-et-garonne', 'T653265'),
(84, '83', 'Var', 'VAR', 'var', 'V600'),
(85, '84', 'Vaucluse', 'VAUCLUSE', 'vaucluse', 'V242'),
(86, '85', 'Vendée', 'VENDÉE', 'vendee', 'V530'),
(87, '86', 'Vienne', 'VIENNE', 'vienne', 'V500'),
(88, '87', 'Haute-Vienne', 'HAUTE-VIENNE', 'haute-vienne', 'H315'),
(89, '88', 'Vosges', 'VOSGES', 'vosges', 'V200'),
(90, '89', 'Yonne', 'YONNE', 'yonne', 'Y500'),
(91, '90', 'Territoire de Belfort', 'TERRITOIRE DE BELFORT', 'territoire-de-belfort', 'T636314163'),
(92, '91', 'Essonne', 'ESSONNE', 'essonne', 'E250'),
(93, '92', 'Hauts-de-Seine', 'HAUTS-DE-SEINE', 'hauts-de-seine', 'H32325'),
(94, '93', 'Seine-Saint-Denis', 'SEINE-SAINT-DENIS', 'seine-saint-denis', 'S525352'),
(95, '94', 'Val-de-Marne', 'VAL-DE-MARNE', 'val-de-marne', 'V43565'),
(96, '95', 'Val-d\'oise', 'VAL-D\'OISE', 'val-doise', 'V432'),
(97, '976', 'Mayotte', 'MAYOTTE', 'mayotte', 'M300'),
(98, '971', 'Guadeloupe', 'GUADELOUPE', 'guadeloupe', 'G341'),
(99, '973', 'Guyane', 'GUYANE', 'guyane', 'G500'),
(100, '972', 'Martinique', 'MARTINIQUE', 'martinique', 'M6352'),
(101, '974', 'Réunion', 'RÉUNION', 'reunion', 'R500');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_faqs`
--

DROP TABLE IF EXISTS `tbl_faqs`;
CREATE TABLE IF NOT EXISTS `tbl_faqs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `quest` varchar(255) NOT NULL,
  `answ` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_reset_tokens`
--

DROP TABLE IF EXISTS `tbl_reset_tokens`;
CREATE TABLE IF NOT EXISTS `tbl_reset_tokens` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `expires` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_reset_tokens`
--

INSERT INTO `tbl_reset_tokens` (`id`, `email`, `token`, `role`, `expires`) VALUES
(4, 'hosni.is@outlook.fr', 'ecbfb18dbc40908ced0a8a5d5ef694d9', 'user', '2021-05-31 12:53:48'),
(15, 'hosni.ismail07@gmail.com', '637c17ec4e4446709659f705105c8f5f', 'user', '2021-07-03 04:02:15');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `verified` varchar(255) NOT NULL DEFAULT 'NO',
  `reg_date` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `login`, `role`, `verified`, `reg_date`, `avatar`) VALUES
('M795218', 'Hosni', 'hosni.ismail07@gmail.com', '$2y$10$b0SEekjjojMfIlgr0CqEjeutirvYgu2lkQZhs/bNwmWuoT/SE2JnG', 'user', 'YES', '10/06/2021 - 05:00:27', 'M79521810062021050600.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
