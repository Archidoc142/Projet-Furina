-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 oct. 2023 à 14:47
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbgenshin`
--

-- --------------------------------------------------------

--
-- Structure de la table `arme`
--

CREATE TABLE `arme` (
  `name` varchar(40) NOT NULL,
  `rarity` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `arme`
--

INSERT INTO `arme` (`name`, `rarity`, `type_id`, `id`) VALUES
('Épée émoussée', 1, 0, 1),
('Épée en argent', 2, 0, 2),
('Lame froide', 3, 0, 3),
('Messager de l\'Aube', 3, 0, 4),
('Épée du voyageur', 3, 0, 5),
('Épée en fer noir', 3, 0, 6),
('Couteau à filets', 3, 0, 7),
('Épée céleste', 3, 0, 8),
('Épée de Favonius', 4, 0, 9),
('Flûte', 4, 0, 10),
('Épée rituelle', 4, 0, 11),
('Épée longue royale', 4, 0, 12),
('Rugissement du Lion', 4, 0, 13),
('Tailleur de pierre (prototype)', 4, 0, 14),
('Piqûre de fer', 4, 0, 15),
('Épée longue de Rochenoire', 4, 0, 16),
('Épée noire', 4, 0, 17),
('Éclair des impasses', 4, 0, 18),
('Épée de la descente', 4, 0, 19),
('Croc suppurant', 4, 0, 20),
('Lame kageuchi d\'Amenoma', 4, 0, 21),
('Fuseau de cinabre', 4, 0, 22),
('Kagotsurube Isshin', 4, 0, 23),
('Lame d\'aubier', 4, 0, 24),
('Clair de lune de Xiphos', 4, 0, 25),
('Pluie florale', 4, 0, 26),
('Croc de loup', 4, 0, 27),
('Final des profondeurs', 4, 0, 28),
('Passeur du Fleuve cendré', 4, 0, 29),
('L\'assistant du docker', 4, 0, 30),
('Lame du Narzissenkreuz', 4, 0, 31),
('Épée du faucon', 5, 0, 32),
('Lame de la Voûte d\'Azur', 5, 0, 33),
('Serment de la liberté', 5, 0, 34),
('Tranche-sommets', 5, 0, 35),
('Coupeur de jade primordial', 5, 0, 36),
('Reflet de tranche-brume', 5, 0, 37),
('Lune ondulante de Futsu', 5, 0, 38),
('Clé de Khaj-Nisut', 5, 0, 39),
('Lumière d\'incision foliaire', 5, 0, 40),
('Splendeur des eaux calmes', 5, 0, 41),
('Épée d\'entraînement', 1, 1, 42),
('Lame du mercenaire', 2, 1, 43),
('Ombre ferreuse', 3, 1, 44),
('Ombre ferreuse', 3, 1, 45),
('Épée sanglante', 3, 1, 46),
('Grande épée en fer blanc', 3, 1, 47),
('Épée de la raison', 3, 1, 48),
('Grande épée céleste', 3, 1, 49),
('Espadon de Favonius', 4, 1, 50),
('Espadon de Favonius', 4, 1, 51),
('Épée-horloge', 4, 1, 52),
('Espadon rituel', 4, 1, 53),
('Espadon royal', 4, 1, 54),
('Fluorescence', 4, 1, 55),
('Espadon (prototype)', 4, 1, 56),
('Ombre immaculée', 4, 1, 57),
('Trancheuse de Rochenoire', 4, 1, 58),
('Ossature du dragon', 4, 1, 59),
('Tombe-neige en argétoile', 4, 1, 60),
('Illustre seigneur des mers', 4, 1, 61),
('Espadon de Nagamasa', 4, 1, 62),
('Aigue-marine de Makhaira', 4, 1, 63),
('Akuoumaru', 4, 1, 64),
('Apparat de la forêt', 4, 1, 65),
('Fleur de mailles', 4, 1, 66),
('Bâton bavard', 4, 1, 67),
('Ombre tidale', 4, 1, 68),
('Scie électrique portative', 4, 1, 69),
('Fierté de la Voûte d\'Azur', 5, 1, 70),
('Mort-du-loup', 5, 1, 71),
('Ode au chant du vent', 5, 1, 72),
('Lame brute', 5, 1, 73),
('Brise-pierre de corne rouge', 5, 1, 74),
('Balise de la mer de roseaux', 5, 1, 75),
('Lance du débutant', 1, 2, 76),
('Pointe de fer', 2, 2, 77),
('Pampille blanche', 3, 2, 78),
('Hallebarde', 3, 2, 79),
('Pampille noire', 3, 2, 80),
('Fléau du dragon', 4, 2, 81),
('Guisarme stellaire (prototype)', 4, 2, 82),
('Pique du croissant de lune', 4, 2, 83),
('Lance de Rochenoire', 4, 2, 84),
('Scion de la victoire', 4, 2, 85),
('Lance des Millelithes', 4, 2, 86),
('Lance de Favonius', 4, 2, 87),
('Lance de chasse royale', 4, 2, 88),
('Lance Dosdragon', 4, 2, 89),
('« La prise »', 4, 2, 90),
('Aileron de brise-vagues', 4, 2, 91),
('Perce-lune', 4, 2, 92),
('Lance du vent saisonnier', 4, 2, 93),
('Ballade des fjords', 4, 2, 94),
('Récompense légitime', 4, 2, 95),
('Foret de prospecteur', 4, 2, 96),
('Bâton de Homa', 5, 2, 97),
('Berge de la Voûte d\'Azur', 5, 2, 98),
('Perceur prismatique', 5, 2, 99),
('Lance de jade ailée', 5, 2, 100),
('Étouffeur de calamités', 5, 2, 101),
('Lumière du faucheur', 5, 2, 102),
('Bâton des sables écarlates', 5, 2, 103),
('Arc de chasse', 1, 3, 104),
('Arc de chasse aguerri', 2, 3, 105),
('Arc du corbeau', 3, 3, 106),
('Serment de l\'archer', 3, 3, 107),
('Arc courbé', 3, 3, 108),
('Lance-pierres', 3, 3, 109),
('Messager', 3, 3, 110),
('Arc de chasse de Favonius', 4, 3, 111),
('Dernière corde', 4, 3, 112),
('Arc rituel', 4, 3, 113),
('Arc royal', 4, 3, 114),
('Arc rouillé', 4, 3, 115),
('Lune paisible (prototype)', 4, 3, 116),
('Arc à poulies', 4, 3, 117),
('Arc de guerre de Rochenoire', 4, 3, 118),
('Arc de chasse verdoyant', 4, 3, 119),
('Traqueur des impasses', 4, 3, 120),
('Crépuscule couchant', 4, 3, 121),
('Valse nocturne', 4, 3, 122),
('Ode aux alizées', 4, 3, 123),
('Arc d\'exorcisme', 4, 3, 124),
('Predator', 4, 3, 125),
('Lune de Mouun', 4, 3, 126),
('Le valet du roi', 4, 3, 127),
('Chalutier', 4, 3, 128),
('Perceur d\'ibis', 4, 3, 129),
('Descendant du soleil flamboyant', 4, 3, 130),
('Chant de quiétude', 4, 3, 131),
('Jauge de portée', 4, 3, 132),
('Ailes de la Voûte d\'Azur', 5, 3, 133),
('Arc d\'Amos', 5, 3, 134),
('Ultime soupir', 5, 3, 135),
('Étoile polaire', 5, 3, 136),
('Simulacre d\'eau', 5, 3, 137),
('Pulsation du tonnerre', 5, 3, 138),
('La voie du chasseur', 5, 3, 139),
('La première grande magie', 5, 3, 140),
('Notes de l\'apprenti', 1, 4, 141),
('Grimoire de poche', 2, 4, 142),
('Guide de magie', 3, 4, 143),
('Histoire des chasseurs de dragon', 3, 4, 144),
('Conte d\'un autre monde', 3, 4, 145),
('Orbe jadien', 3, 4, 146),
('Néphrite jumelle', 3, 4, 147),
('Code de Favonius', 4, 4, 148),
('Mouvement vagabond', 4, 4, 149),
('Mémoires de rituels', 4, 4, 150),
('Grimoire royal', 4, 4, 151),
('Perle solaire', 4, 4, 152),
('Malice (prototype)', 4, 4, 153),
('Atlas des terres et des mers', 4, 4, 154),
('Agate de Rochenoire', 4, 4, 155),
('Œil de la perception', 4, 4, 156),
('Vins et chants', 4, 4, 157),
('Fruit du permafrost', 4, 4, 158),
('Contes de Dodoco', 4, 4, 159),
('Anneau des Hakushin', 4, 4, 160),
('Œil d\'assermentation', 4, 4, 161),
('Étoile du soir errante', 4, 4, 162),
('Le fruit de l\'accomplissement', 4, 4, 163),
('Jade sacrificiel', 4, 4, 164),
('Pureté fluide', 4, 4, 165),
('Ballade d\'un azur infini', 4, 4, 166),
('Atlas de la Voûte d\'Azur', 5, 4, 167),
('L\'origine des Quatre Vents', 5, 4, 168),
('Chaînes mortelles', 5, 4, 169),
('Splendeur de l\'azur', 5, 4, 170),
('Lueur de la lune éternelle', 5, 4, 171),
('Vérité de Kagura', 5, 4, 172),
('Mille rêves flottants', 5, 4, 173),
('Mémoire de Tulaytullah', 5, 4, 174),
('Tome du flux éternel', 5, 4, 175),
('Supervision de trésorerie', 5, 4, 176);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rarity` int(11) NOT NULL,
  `element` varchar(20) NOT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id`, `name`, `rarity`, `element`, `type_id`) VALUES
(0, 'Lumine', 5, 'Anémo', 0),
(1, 'Aether', 5, 'Anémo', 0),
(2, 'Sucrose', 4, 'Anémo', 4),
(3, 'Keqing', 5, 'Électro', 0),
(4, 'Mona', 5, 'Hydro', 4),
(5, 'Chongyun', 4, 'Cryo', 1),
(6, 'Qiqi', 5, 'Cryo', 0),
(7, 'Noëlle', 4, 'Géo', 1),
(8, 'Bennett', 4, 'Pyro', 0),
(9, 'Fischl', 4, 'Électro', 3),
(10, 'Klee', 5, 'Pyro', 4),
(11, 'Ningguang', 4, 'Géo', 4),
(12, 'Xingqiu', 4, 'Hydro', 0),
(13, 'Beidou', 4, 'Électro', 1),
(14, 'Xiangling', 4, 'Pyro', 2),
(15, 'Venti', 5, 'Anémo', 3),
(16, 'Amber', 4, 'Pyro', 3),
(17, 'Razor', 4, 'Électro', 1),
(18, 'Diluc', 5, 'Pyro', 1),
(19, 'Kaeya', 4, 'Cryo', 0),
(20, 'Barbara', 4, 'Hydro', 4),
(21, 'Lisa', 4, 'Électro', 4),
(22, 'Jean', 5, 'Anémo', 0),
(23, 'Diona', 4, 'Cryo', 3),
(24, 'Tartaglia', 5, 'Hydro', 3),
(25, 'Zhongli', 5, 'Géo', 2),
(26, 'Albedo', 5, 'Géo', 0),
(27, 'Ganyu', 5, 'Cryo', 3),
(28, 'Xiao', 5, 'Anémo', 2),
(29, 'Hu Tao', 5, 'Pyro', 2),
(30, 'Rosalia', 4, 'Cryo', 2),
(31, 'Yanfei', 4, 'Pyro', 4),
(32, 'Kaedehara Kazuha', 5, 'Anémo', 0),
(33, 'Kamisato Ayaka', 5, 'Cryo', 0),
(34, 'Sayu', 4, 'Anémo', 1),
(35, 'Yoimiya', 5, 'Pyro', 3),
(36, 'Kujou Sara', 4, 'Électro', 3),
(37, 'Raiden Shogun', 5, 'Électro', 2),
(38, 'Sangonomiya Kokomi', 5, 'Hydro', 4),
(39, 'Arataki Itto', 5, 'Géo', 1),
(40, 'Gorou', 4, 'Géo', 3),
(41, 'Yun Jin', 4, 'Géo', 2),
(42, 'Shenhe', 5, 'Cryo', 2),
(43, 'Yae Miko', 5, 'Électro', 4),
(44, 'Kamisato Ayato', 5, 'Hydro', 0),
(45, 'Yelan', 5, 'Hydro', 3),
(46, 'Kuki Shinobu', 4, 'Électro', 1),
(47, 'Heizou', 4, 'Anémo', 4),
(48, 'Tighnari', 5, 'Dendro', 3),
(49, 'Collei', 4, 'Dendro', 3),
(50, 'Dori', 4, 'Électro', 1),
(51, 'Candace', 4, 'Hydro', 2),
(52, 'Cyno', 5, 'Électro', 2),
(53, 'Nilou', 4, 'Hydro', 0),
(54, 'Nahida', 5, 'Dendro', 4),
(55, 'Layla', 4, 'Cryo', 0),
(56, 'Faruzan', 4, 'Anémo', 3),
(57, 'Nomade', 5, 'Anémo', 4),
(58, 'Alhaitham', 5, 'Dendro', 0),
(59, 'Yaoyao', 4, 'Dendro', 2),
(60, 'Dehya', 5, 'Pyro', 1),
(61, 'Mika', 4, 'Cryo', 2),
(62, 'Baizhu', 5, 'Dendro', 4),
(63, 'Kaveh', 4, 'Dendro', 1),
(64, 'Kirara', 4, 'Dendro', 0),
(65, 'Lyney', 5, 'Pyro', 3),
(66, 'Lynette', 4, 'Anémo', 0),
(67, 'Fréminet', 4, 'Cryo', 1),
(68, 'Neuvillette', 5, 'Hydro', 4),
(69, 'Wriothesley', 5, 'Cryo', 4),
(70, 'Charlotte', 4, 'Cryo', 4),
(71, 'Furina', 5, 'Hydro', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arme`
--
ALTER TABLE `arme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `arme`
--
ALTER TABLE `arme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `arme`
--
ALTER TABLE `arme`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Contraintes pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD CONSTRAINT `fk_type_id` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
