-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 oct. 2023 à 15:06
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
-- Structure de la table `artefact`
--

CREATE TABLE `artefact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `rarity` int(11) DEFAULT NULL,
  `setName` varchar(50) DEFAULT NULL,
  `objectId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artefact`
--

INSERT INTO `artefact` (`id`, `name`, `rarity`, `setName`, `objectId`) VALUES
(2, 'Fleur de l\'Aventurier', 3, 'Aventurier', 1),
(3, 'Plume de queue de l\'Aventurier', 3, 'Aventurier', 2),
(4, 'Montre de poche de l\'Aventurier', 3, 'Aventurier', 3),
(5, 'Coupe en or de l\'Aventurier', 3, 'Aventurier', 4),
(6, 'Bandeau de l\'Aventurier', 3, 'Aventurier', 5),
(7, 'Trèfle du Chanceux', 3, 'Chanceux', 1),
(8, 'Plume d\'aigle du Chanceux', 3, 'Chanceux', 2),
(9, 'Sablier du Chanceux', 3, 'Chanceux', 3),
(10, 'Coupe du Chanceux', 3, 'Chanceux', 4),
(11, 'Diadème d\'argent du Chanceux', 3, 'Chanceux', 5),
(12, 'Anémone du Médecin itinérant', 3, 'Médecin itinérant', 1),
(13, 'Plume de hibou du Médecin itinérant', 3, 'Médecin itinérant', 2),
(14, 'Montre de poche du Médecin itinérant', 3, 'Médecin itinérant', 3),
(15, 'Pot à remèdes du Médecin itinérant', 3, 'Médecin itinérant', 4),
(16, 'Mouchoir du Médecin itinérant', 3, 'Médecin itinérant', 5),
(17, 'Fleur du Voyageur', 4, 'Cœur du Voyageur', 1),
(18, 'Plume du Voyageur\r\n', 4, 'Cœur du Voyageur', 2),
(19, 'Montre du Voyageur', 4, 'Cœur du Voyageur', 3),
(20, 'Calice du Voyageur', 4, 'Cœur du Voyageur', 4),
(21, 'Couronne du Voyageur', 4, 'Cœur du Voyageur', 5),
(22, 'Fleur du Miracle', 4, 'Miracle', 1),
(23, 'Plume du Miracle', 4, 'Miracle', 2),
(24, 'Sablier du Miracle', 4, 'Miracle', 3),
(25, 'Coupe du Miracle', 4, 'Miracle', 4),
(26, 'Boucles d\'oreilles du Miracle', 4, 'Miracle', 5),
(27, 'Rose du Berserker', 4, 'Berserker', 1),
(28, 'Plume du Berserker', 4, 'Berserker', 2),
(29, 'Sablier du Berserker', 4, 'Berserker', 3),
(30, 'Coupe du Berserker', 4, 'Berserker', 4),
(31, 'Masque du Berserker', 4, 'Berserker', 5),
(32, 'Broche de l\'Instructeur', 4, 'Instructeur', 1),
(33, 'Plume de l\'Instructeur', 4, 'Instructeur', 2),
(34, 'Montre de poche de l\'Instructeur', 4, 'Instructeur', 3),
(35, 'Tasse à thé de l\'Instructeur', 4, 'Instructeur', 4),
(36, 'Chapeau de l\'Instructeur', 4, 'Instructeur', 5),
(37, 'Fleur de l\'Exilé', 4, 'Exilé', 1),
(38, 'Plume de l\'Exilé', 4, 'Exilé', 2),
(39, 'Montre de poche de l\'Exilé', 4, 'Exilé', 3),
(40, 'Coupe de l\'Exilé', 4, 'Exilé', 4),
(41, 'Diadème de l\'Exilé', 4, 'Exilé', 5),
(42, 'Fleur du Gardien', 4, 'Cœur du Gardien', 1),
(43, 'Plume du Gardien', 4, 'Cœur du Gardien', 2),
(44, 'Horloge du Gardien', 4, 'Cœur du Gardien', 3),
(45, 'Coupe du Gardien', 4, 'Cœur du Gardien', 4),
(46, 'Bandeau du Gardien', 4, 'Cœur du Gardien', 5),
(47, 'Emblème du Brave', 4, 'Cœur du Brave', 1),
(48, 'Espoir du Brave', 4, 'Cœur du Brave', 2),
(49, 'Persévérance du Brave', 4, 'Cœur du Brave', 3),
(50, 'Dignité du Brave', 4, 'Cœur du Brave', 4),
(51, 'Couronne du Brave', 4, 'Cœur du Brave', 5),
(52, 'Fleur écarlate de l\'Artiste martial', 4, 'Artiste martial', 1),
(53, 'Plume de l\'Artiste martial', 4, 'Artiste martial', 2),
(54, 'Sablier d\'eau de l\'Artiste martial', 4, 'Artiste martial', 3),
(55, 'Coupe de l\'Artiste martial', 4, 'Artiste martial', 4),
(56, 'Bandeau de l\'Artiste martial', 4, 'Artiste martial', 5),
(57, 'Broche du Parieur', 4, 'Parieur', 1),
(58, 'Plume du Parieur', 4, 'Parieur', 2),
(59, 'Montre de poche du Parieur', 4, 'Parieur', 3),
(60, 'Coupe à dés du Parieur', 4, 'Parieur', 4),
(61, 'Boucles d\'oreilles du Parieur', 4, 'Parieur', 5),
(62, 'Marque-page de l\'Érudit', 4, 'Érudit', 1),
(63, 'Plume de l\'Érudit', 4, 'Érudit', 2),
(64, 'Horloge de l\'Érudit', 4, 'Érudit', 3),
(65, 'Coupe de l\'Érudit', 4, 'Érudit', 4),
(66, 'Lunettes de l\'Érudit', 4, 'Érudit', 5),
(67, 'Couronne rituelle Pyro', 4, 'Sacrifieur Pyro', 1),
(68, 'Couronne rituelle Hydro', 4, 'Sacrifieur Hydro', 1),
(69, 'Couronne rituelle Électro', 4, 'Sacrifieur Électro', 1),
(70, 'Couronne rituelle Cryo', 4, 'Sacrifieur Cryo', 1),
(71, 'Mémoires du froid', 5, 'Briseur de glace', 1),
(72, 'Résolution du Briseur de glace', 5, 'Briseur de glace', 2),
(73, 'Fin du pays des glaces', 5, 'Briseur de glace', 3),
(74, 'Fierté du Tisseur de givre', 5, 'Briseur de glace', 4),
(75, 'Écho de l\'hiver', 5, 'Briseur de glace', 5),
(76, 'Cœur du Dompteur de foudre', 5, 'Dompteur de foudre', 1),
(77, 'Plume du Dompteur de foudre', 5, 'Dompteur de foudre', 2),
(78, 'Temps du Dompteur de foudre', 5, 'Dompteur de foudre', 3),
(79, 'Calice du Dompteur de foudre', 5, 'Dompteur de foudre', 4),
(80, 'Couronne du Dompteur de foudre', 5, 'Dompteur de foudre', 5),
(81, 'Détermination du Marcheur du feu', 5, 'Marcheur du feu', 1),
(82, 'Insouciance du Marcheur du feu', 5, 'Marcheur du feu', 2),
(83, 'Tourment du Marcheur du feu', 5, 'Marcheur du feu', 3),
(84, 'Éveil du Marcheur du feu', 5, 'Marcheur du feu', 4),
(85, 'Sagesse du Marcheur du feu', 5, 'Marcheur du feu', 5),
(86, 'Cœur lointain de la Demoiselle', 5, 'Amour chéri', 1),
(87, 'Pensée de la Demoiselle', 5, 'Amour chéri', 2),
(88, 'Petit matin de la Demoiselle', 5, 'Amour chéri', 3),
(89, 'Loisir de la Demoiselle', 5, 'Amour chéri', 4),
(90, 'Beauté fugace de la Demoiselle', 5, 'Amour chéri', 5),
(91, 'Nostalgie du Gladiateur', 5, 'Rideau du Gladiateur', 1),
(92, 'Destination du Gladiateur', 5, 'Rideau du Gladiateur', 2),
(93, 'Espoir du Gladiateur', 5, 'Rideau du Gladiateur', 3),
(94, 'Ivresse du Gladiateur', 5, 'Rideau du Gladiateur', 4),
(95, 'Triomphe du Gladiateur', 5, 'Rideau du Gladiateur', 5),
(96, 'Souvenir de fleur des champs', 5, 'Ombre de la Verte Chasseuse', 1),
(97, 'Plume de flèche de la Verte Chasseuse', 5, 'Ombre de la Verte Chasseuse', 2),
(98, 'Détermination de la Verte Chasseuse', 5, 'Ombre de la Verte Chasseuse', 3),
(99, 'Récipient de la Verte Chasseuse', 5, 'Ombre de la Verte Chasseuse', 4),
(100, 'Diadème de la Verte Chasseuse', 5, 'Ombre de la Verte Chasseuse', 5),
(101, 'Aube de l\'orchestre', 5, 'Bande vagabonde', 1),
(102, 'Plume de flèche du lyriste', 5, 'Bande vagabonde', 2),
(103, 'Tombée du rideau', 5, 'Bande vagabonde', 3),
(104, 'Gourde à cordes du ménestrel', 5, 'Bande vagabonde', 4),
(105, 'Haut-de-forme du chef d\'orchestre', 5, 'Bande vagabonde', 5),
(106, 'Compassion de l\'Oiselle du tonnerre', 5, 'Colère de tonnerre', 1),
(107, 'Survivant de la catastrophe', 5, 'Colère de tonnerre', 2),
(108, 'Sablier de tonnerre', 5, 'Colère de tonnerre', 3),
(109, 'Présage de tombée du tonnerre', 5, 'Colère de tonnerre', 4),
(110, 'Diadème de l\'Invocateur de tonnerre', 5, 'Colère de tonnerre', 5),
(111, 'Fleur ardente de la Sorcière', 5, 'Sorcière des flammes ardentes', 1),
(112, 'Plume enflammée éternelle de la Sorcière', 5, 'Sorcière des flammes ardentes', 2),
(113, 'Temps évanoui de la Sorcière', 5, 'Sorcière des flammes ardentes', 3),
(114, 'Feu du cœur de la Sorcière', 5, 'Sorcière des flammes ardentes', 4),
(115, 'Chapeau brûlé de la Sorcière', 5, 'Sorcière des flammes ardentes', 5),
(116, 'Fleur du Noble', 5, 'Ancien rituel royal', 1),
(117, 'Plume du Noble', 5, 'Ancien rituel royal', 2),
(118, 'Montre de poche du Noble', 5, 'Ancien rituel royal', 3),
(119, 'Urne d\'argent du Noble', 5, 'Ancien rituel royal', 4),
(120, 'Masque du Noble', 5, 'Ancien rituel royal', 5),
(121, 'Fleur de fer ensanglantée', 5, 'Chevalerie ensanglantée', 1),
(122, 'Plume noire ensanglantée', 5, 'Chevalerie ensanglantée', 2),
(123, 'Sablier du Chevalier ensanglanté', 5, 'Chevalerie ensanglantée', 3),
(124, 'Coupe du chevalier ensanglantée', 5, 'Chevalerie ensanglantée', 4),
(125, 'Masque de fer ensanglanté', 5, 'Chevalerie ensanglantée', 5),
(126, 'Fleur des crevasses', 5, 'Roche ancienne', 1),
(127, 'Plume des sommets escarpés', 5, 'Roche ancienne', 2),
(128, 'Cadran du jade immuable', 5, 'Roche ancienne', 3),
(129, 'Coupe en roche escarpée', 5, 'Roche ancienne', 4),
(130, 'Masque en basalte inerte', 5, 'Roche ancienne', 5),
(131, 'Fleur de la nuit d\'été', 5, 'Météore inversé', 1),
(132, 'Fin de la nuit d\'été', 5, 'Météore inversé', 2),
(133, 'Temps de la nuit d\'été', 5, 'Météore inversé', 3),
(134, 'Ballon d\'eau de la nuit d\'été', 5, 'Météore inversé', 4),
(135, 'Masque de la nuit d\'été', 5, 'Météore inversé', 5),
(136, 'Broche plaquée', 5, 'Âme des profondeurs', 1),
(137, 'Brise nostalgique', 5, 'Âme des profondeurs', 2),
(138, 'Boussole en bronze', 5, 'Âme des profondeurs', 3),
(139, 'Calice des profondeurs', 5, 'Âme des profondeurs', 4),
(140, 'Calot taché de vin', 5, 'Âme des profondeurs', 5),
(141, 'Fleur honorifique', 5, 'Ténacité du Millelithe', 1),
(142, 'Plume de guerre du Commandant', 5, 'Ténacité du Millelithe', 2),
(143, 'Cadran solaire doré', 5, 'Ténacité du Millelithe', 3),
(144, 'Coupe du serment', 5, 'Ténacité du Millelithe', 4),
(145, 'Ancien heaume de Général', 5, 'Ténacité du Millelithe', 5),
(146, 'Fleur inaltérable', 5, 'Flamme blême', 1),
(147, 'Plume du sage docteur', 5, 'Flamme blême', 2),
(148, 'Figé dans le temps', 5, 'Flamme blême', 3),
(149, 'Coupe de transcendance', 5, 'Flamme blême', 4),
(150, 'Masque ricanant', 5, 'Flamme blême', 5),
(151, 'Flèche de nostalgie', 5, 'Réminiscence nostalgique', 1),
(152, 'Flèche de nostalgie', 5, 'Réminiscence nostalgique', 2),
(153, 'Horloge de l\'aube', 5, 'Réminiscence nostalgique', 3),
(154, 'Cœur plein d\'espoir', 5, 'Réminiscence nostalgique', 4),
(155, 'Visage capricieux', 5, 'Réminiscence nostalgique', 5),
(156, 'Tsuba magnifique', 5, 'Emblème du destin brisé', 1),
(157, 'Plume brisée', 5, 'Emblème du destin brisé', 2),
(158, 'Inro de la tempête', 5, 'Emblème du destin brisé', 3),
(159, 'Gourde pourpre', 5, 'Emblème du destin brisé', 4),
(160, 'Kabuto orné', 5, 'Emblème du destin brisé', 5),
(161, 'Période de floraison', 5, 'Coquille des rêves opulents', 1),
(162, 'Plume d\'opulence', 5, 'Coquille des rêves opulents', 2),
(163, 'Chant de vie', 5, 'Coquille des rêves opulents', 3),
(164, 'Calebasse d\'éveil', 5, 'Coquille des rêves opulents', 4),
(165, 'Chapeau squelettique', 5, 'Coquille des rêves opulents', 5),
(166, 'Fleur de teinte marine', 5, 'Palourde aux teintes océaniques', 1),
(167, 'Plume du palais des profondeurs', 5, 'Palourde aux teintes océaniques', 2),
(168, 'Pétoncle de séparation', 5, 'Palourde aux teintes océaniques', 3),
(169, 'Écrin de perle', 5, 'Palourde aux teintes océaniques', 4),
(170, 'Couronne de Watatsumi', 5, 'Palourde aux teintes océaniques', 5),
(171, 'Vie fleurie', 5, 'Au-delà cinabrin', 1),
(172, 'Plume de lumière latente', 5, 'Au-delà cinabrin', 2),
(173, 'Relique solaire', 5, 'Au-delà cinabrin', 3),
(174, 'Instant du contrat', 5, 'Au-delà cinabrin', 4),
(175, 'Maintien fulgurant', 5, 'Au-delà cinabrin', 5),
(176, 'Fleur d\'aromesprit', 5, 'Échos d\'une offrande', 1),
(177, 'Feuille de jade', 5, 'Échos d\'une offrande', 2),
(178, 'Symbole de félicitation', 5, 'Échos d\'une offrande', 3),
(179, 'Calice des sources', 5, 'Échos d\'une offrande', 4),
(180, 'Anneaux de fluidité', 5, 'Échos d\'une offrande', 5),
(181, 'Voyageur du labyrinthe', 5, 'Souvenir de forêt', 1),
(182, 'Érudit des lianes', 5, 'Souvenir de forêt', 2),
(183, 'Période de perspicacité', 5, 'Souvenir de forêt', 3),
(184, 'Lampe des perdus', 5, 'Souvenir de forêt', 4),
(185, 'Couronne de laurier', 5, 'Souvenir de forêt', 5),
(186, 'Fleur d\'acier rêveuse', 5, 'Rêve doré', 1),
(187, 'Plume du jugement', 5, 'Rêve doré', 2),
(188, 'Les années dorées', 5, 'Rêve doré', 3),
(189, 'Festin final de miel', 5, 'Rêve doré', 4),
(190, 'L\'ombre du roi des sables', 5, 'Rêve doré', 5),
(191, 'Aube de la cité des rois', 5, 'Chronique du Pavillon du désert', 1),
(192, 'Fin du royaume doré', 5, 'Chronique du Pavillon du désert', 2),
(193, 'Horloge du chemin perdu', 5, 'Chronique du Pavillon du désert', 3),
(194, 'Défenseur du rêve enchanteur', 5, 'Chronique du Pavillon du désert', 4),
(195, 'Héritage de la haute lignée du désert', 5, 'Chronique du Pavillon du désert', 5),
(196, 'Myriade d\'Ay-Khanoum', 5, 'Fleur du paradis perdu', 1),
(197, 'Fête du flétrissement', 5, 'Fleur du paradis perdu', 2),
(198, 'Instant figé', 5, 'Fleur du paradis perdu', 3),
(199, 'Bouteille magique du gardien du secret', 5, 'Fleur du paradis perdu', 4),
(200, 'Couronne d\'améthyste', 5, 'Fleur du paradis perdu', 5),
(201, 'Fleur odysséenne', 5, 'Rêve de la nymphe', 1),
(202, 'Plumule de mage malsain', 5, 'Rêve de la nymphe', 2),
(203, 'Constance de la nymphe', 5, 'Rêve de la nymphe', 3),
(204, 'Goûter des héros', 5, 'Rêve de la nymphe', 4),
(205, 'Monocle de dragon démoniaque', 5, 'Rêve de la nymphe', 5),
(206, 'Étamine de l\'origine de la khvarena', 5, 'Lueur du vourukasha', 1),
(207, 'Penne vibrante', 5, 'Lueur du vourukasha', 2),
(208, 'Abscission ancienne', 5, 'Lueur du vourukasha', 3),
(209, 'Festin de joie sans bornes', 5, 'Lueur du vourukasha', 4),
(210, 'Cœur de la brillance de la khvarena', 5, 'Lueur du vourukasha', 5),
(211, 'Broche du chasseur', 5, 'Chasseur de la Maréchaussée', 1),
(212, 'Prologue du chef d\'œuvre', 5, 'Chasseur de la Maréchaussée', 2),
(213, 'Moment du jugement', 5, 'Chasseur de la Maréchaussée', 3),
(214, 'Réceptacle oublié', 5, 'Chasseur de la Maréchaussée', 4),
(215, 'Visage du vétéran', 5, 'Chasseur de la Maréchaussée', 5),
(216, 'Variation de la mélodie dorée', 5, 'Troupe dorée', 1),
(217, 'Mue de l\'oiseau d\'or', 5, 'Troupe dorée', 2),
(218, 'Prélude de l\'ère dorée', 5, 'Troupe dorée', 3),
(219, 'Agitation de la nuit dorée', 5, 'Troupe dorée', 4),
(220, 'Récompense de la Troupe dorée', 5, 'Troupe dorée', 5);

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
-- Index pour la table `artefact`
--
ALTER TABLE `artefact`
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
-- AUTO_INCREMENT pour la table `artefact`
--
ALTER TABLE `artefact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

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
