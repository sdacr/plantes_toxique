-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 nov. 2020 à 17:48
-- Version du serveur :  10.4.11-MariaDB-log
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `plantes_toxiques`
--

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE `couleur` (
  `id` int(11) NOT NULL,
  `couleur` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`id`, `couleur`) VALUES
(1, 'rouge'),
(2, 'orange'),
(3, 'jaune'),
(4, 'vert'),
(5, 'bleu'),
(6, 'violet'),
(7, 'marron'),
(8, 'noir'),
(9, 'blanc');

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `id` int(11) NOT NULL,
  `famille` varchar(50) NOT NULL,
  `general` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id`, `famille`, `general`) VALUES
(1, 'Rosaceae', 'Les Rosaceae sont une famille botanique qui réunit environ 3 370 espèces réparties en plus d\'une centaine de genres.\r\nCette famille cosmopolite comprend aussi bien des plantes herbacées vivaces que des arbustes ou des arbres. Elle est représentée par de nombreuses espèces sauvages et cultivées parmi les plus importantes '),
(2, 'Apiaceae', 'La famille des Apiacées (Apiaceae) est constituée de plantes dicotylédones caractérisées notamment par leur inflorescence typique, l\'ombelle, d\'où leur appellation d’Ombellifères (Umbelliferae, nom alternatif).'),
(3, 'Araceae', 'Ce sont des plantes monocotylédones, arbustes ou plantes herbacées, parfois arborescentes des régions sub-tropicales, tropicales, et, en nombre réduit, des régions tempérées.'),
(4, 'Solanaceae', 'Les Solanacées sont une famille de plantes dicotylédones appartenant à l\'ordre des Solanales, dont le nom vient du genre Solanum. Ce sont des plantes herbacées, des arbustes, des arbres ou des lianes avec des feuilles alternes, simples et sans stipules.'),
(5, 'Adoxaceae', 'La famille des Adoxacées est constituée de plantes dicotylédones.\r\nCe sont des arbustes ou de petites plantes herbacées rhizomateuses des sous-bois des régions tempérées. Cette famille est représentée en France par l\'adoxe moscatelline, les sureaux et les viornes. '),
(6, 'Cucurbitaceae', 'Ce sont généralement des plantes herbacées, annuelles ou vivaces, à port rampant ou grimpant, aux tiges munies de vrilles, et plus rarement des arbustes. Ces plantes sont sensibles au gel.'),
(7, 'Berberidaceae', 'Ce sont des arbustes aux tissus colorés en jaune par la berbérine ou des plantes plus ou moins herbacées, à feuilles fréquemment transformées en épines des régions tempérées à sub-tropicales largement répandues dans l\'hémisphère nord. '),
(8, 'Cornaceae', 'La famille des Cornaceae (Cornacées) regroupe des plantes dicotylédones. Ce sont des arbres ou des arbustes ainsi que quelques plantes herbacées, des régions tempérées, sub-tropicales et des montagnes tropicales. C\'est la famille du cornouiller mâle (Cornus mas) aux baies rouges ovalo-cylindriques comestibles.'),
(9, 'Araliaceae', 'Les Araliaceae (Araliacées) forment une famille de plantes dicotylédones. Ce sont des arbres, des buissons, des lianes, plus rarement des plantes herbacées, en majorité des régions subtropicales, à feuilles alternes ou composées et fleurs actinomorphes et pentamères\r\n'),
(10, 'Iridaceae', 'Ce sont des plantes herbacées (même s\'il existe quelques rares arbustes), rhizomateuses, bulbeuses ou à racines épaissies des régions tempérées à tropicales. C\'est une famille cosmopolite mais qui manque dans les régions froides et le nord de l\'Eurasie. '),
(11, 'Phytolaccaceae', 'Les Phytolaccaceae (Phytolaccacées) sont une famille de plantes dicotylédones ; elle comprend une centaine d\'espèces réparties en 8 à 14 genres. Ce sont essentiellement des plantes herbacées ou des arbustes, des arbres, des lianes, annuels ou pérennes, principalement des régions subtropicales à tropicales. '),
(12, 'Caprifoliaceae', 'Les Caprifoliacées (Caprifoliaceae) sont une famille de plantes dicotylédones de l\'ordre des Dipsacales. Ce sont des arbustes, des petits arbres, des lianes et plus rarement des plantes herbacées des zones tempérées à tropicales (montagnes)'),
(13, 'Elaeagnaceae', 'Ce sont des arbres ou des arbustes, parfois épineux, certains adaptés aux zones arides, des steppes ou des côtes tempérées à tropicales. Certaines espèces produisent des fruits comestibles. C\'est le cas de l\'argousier (Hippophae rhamnoides). '),
(14, 'Oleaceae', 'La famille des Oleaceae (Oléacées) regroupe des plantes dicotylédones ; elle comprend 900 espèces réparties en 25 à 26 genres. '),
(15, 'celastraceae', 'Ce sont des arbres, des arbustes ou des lianes, des régions tempérées à tropicales. En France, c\'est la famille du Fusain (Euonymus europaeus).\r\n\r\n '),
(16, 'Asparagaceae', 'Les Asparagaceae (Asparagacées) sont une famille de plantes monocotylédones. Cette famille n\'existe pas en classification classique de Cronquist (1981) qui inclut ces plantes dans les Liliacées. La classification phylogénétique a donc séparé cette famille des Liliacées et la rattache à l\'ordre des Asparagales.'),
(17, 'Dioscoreaceae', 'Ce sont des arbustes, des plantes herbacées ou des lianes, rhizomateuses ou tubéreuses. Ce sont souvent des plantes dioïques, à fleurs petites, trimères, unisexuées. Les fruits sont des samares à trois ailes, rarement des baies (tamier) ; les graines sont souvent ailées. Certaines espèces, notamment de Dioscorea, contiennent des saponosides stéroïdiques.'),
(18, 'Euphorbiaceae', 'La famille des Euphorbiaceae (Euphorbiacées) regroupe des plantes dicotylédones ; elle comprend près de 6 000 espèces réparties en près de 220 genres. ');

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

CREATE TABLE `plante` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) CHARACTER SET utf8 NOT NULL,
  `scienceNom` varchar(200) CHARACTER SET utf8 NOT NULL,
  `maturite` varchar(200) CHARACTER SET utf8 NOT NULL,
  `periode` varchar(200) CHARACTER SET utf8 NOT NULL,
  `departement` varchar(500) CHARACTER SET utf8 NOT NULL,
  `gravite` varchar(200) CHARACTER SET utf8 NOT NULL,
  `type` varchar(200) CHARACTER SET utf8 NOT NULL,
  `graine` varchar(200) CHARACTER SET utf8 NOT NULL,
  `fruit` varchar(200) CHARACTER SET utf8 NOT NULL,
  `chair` varchar(200) CHARACTER SET utf8 NOT NULL,
  `caractere` varchar(400) CHARACTER SET utf8 NOT NULL,
  `id_couleur` int(11) NOT NULL,
  `id_famille` int(11) NOT NULL,
  `id_principeActif` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`id`, `nom`, `scienceNom`, `maturite`, `periode`, `departement`, `gravite`, `type`, `graine`, `fruit`, `chair`, `caractere`, `id_couleur`, `id_famille`, `id_principeActif`, `image`) VALUES
(2, 'amelanchier', 'Amelanchier sp.', 'aout\r\nseptembre', 'main\r\njuin', 'Gironde\r\nHaut Rhin\r\nHaute Savoie\r\nHaut de Seine\r\nIle et vilaine x 5\r\nLandes\r\nLoire Atlantique\r\nNord\r\nParis\r\nPuy de Dome\r\nSeine et marne\r\nVal d’Oise\r\nVosges\r\nYonne x 2', '13 cas à gravité nulle\r\n3 cas à gravité faible ', ' Corymbes - 8 à 10 mm - ', 'Une dizaine de pépins', 'globuleux rouges puis bleus noirs à\r\nmaturité ', ' Une dizaine de pépins', 'Arbuste à tronc souvent multiple - 2 à 3 m', 1, 1, 1, '1601404384amelanchier.jpg'),
(3, 'cerfeuil sauvage', 'Anthriscus sylvestris', 'none', 'Janvier\r\nMars\r\nAvril x 5\r\nMai x 2\r\nJuin\r\nAout\r\nOctobre', 'Charente\r\nGironde\r\nLoire Atlantique x 2\r\nMaine et Loire\r\nParis x 2\r\nVal de Marne x2', '5 cas à gravité nulle\r\n6 cas à gravité faible ', 'Plante herbacée vivace atteignant un mètre,\r\nfétide', '.0.', 'Diakène lisses', 'absence de fruit', '', 9, 2, 2, '1601404595cerfeuil sauvage.jpg'),
(4, 'Gouets ', 'Arum sp', 'août\r\nseptembre\r\n', 'Janvier x2\r\nFévrier x 2\r\nMars x 2\r\nAvril x 9\r\nMai x 4\r\nJuin x 4\r\nJuillet x 9\r\nAoût x 4\r\nSeptembre\r\nNovembre', 'Ain x 3\r\nArdèche\r\nBas Rhin\r\nDordogne\r\nDoubs\r\nDrôme\r\nGironde\r\nHaute Savoie\r\nLandes\r\nLoire Antlantique x 3\r\nPas de Calais\r\nPuy de Dôme x 7\r\nPyrénées Atlantiques x 7\r\nSeine et Marne x 2\r\nSomme x 2', '6 cas à gravité nulle\r\n27 cas à gravité faible', 'Baies serrées en épis', ' 1 à 3, à surface nettement ridée,\r\nbrun-clair', 'Fruits rouges charnus globuleux, mous, à\r\nchair juteuse', 'Orangée à rouge', 'Plante herbacée vivace par un tubercule sans\r\nramifications', 1, 1, 1, '1601404872gouet.jpg'),
(5, 'Laurier Cerise', 'Prunus laurocerasus', 'septembre\r\noctobre ', 'Avril x 3\r\nMai\r\nJuin x 5\r\nJuillet x 12\r\nAoût x 7\r\nSeptembre x 5\r\nOctobre x 3\r\nDécembre', 'Haute Vienne\r\nIsère x 2\r\nLandes\r\nRhône\r\nSaône et Loire\r\nSarthe\r\nSeine et Marne\r\nVienne\r\nVosges x 2\r\nArdennes\r\nBas Rhin\r\nCharente Maritime\r\nDeux Sèvres\r\nDordogne\r\nGironde x 4\r\nHaut Rhin x 2\r\nHaute Savo', '24 cas à gravité nulle\r\n5 cas à gravité faible ', 'Grappes de drupes un peu ovoïdes\r\nd’environ 10 sur 8 mm', ' 1 graine ou une amande par noyau', 'rouges puis noirs globuleux', 'Rougeâtre, juteuse', 'Arbuste toujours vert de 3 à 6 m de haut,\r\nsouvent utilisés pour des haies', 8, 1, 1, '1601405155laurier cerise.jpg'),
(8, 'Morelle douce ', 'Solanum dulcamara ', 'août\r\nseptembre\r\noctobre', 'Avril\r\nJuillet x 6\r\nAoût x 10\r\nSeptembre x 9\r\nOctobre x 6\r\nNovembre x 3', 'Bas Rhin\r\nCharente x 2\r\nCharente Maritime x 5\r\nDeux Sèvres x 2\r\nGironde\r\nHautes Pyrénées\r\nMeurthe et Moselle\r\nMorbihan\r\nOise\r\nParis x 5\r\nPas de Calais\r\nPyrénées Atlantiques\r\nSeine Maritime\r\nVal d’Oise', '28 cas à gravité nulle\r\n1 cas à gravité faible ', 'Baies légèrement ovales de 8-10mm sur 7-8 mm', '15 à 20 par baie, aplaties, petites et\r\nbeiges', ' rouges charnus globuleux, mous, à\r\nchair juteuse', 'Verte puis rouge à maturité', 'Plante vivace sarmenteuse, à tige fine et\r\nligneuse pouvant s’élever jusqu’à 3 m', 1, 4, 4, '1601405220morelle douce.jpg'),
(9, 'Morelle noire', 'Solanum nigrum ', 'août\r\nseptembre\r\noctobre', 'Juillet x 7\r\nAoût x 16\r\nSeptembre x 11\r\nOctobre x 11\r\nNovembre\r\nDécembre', 'Allier\r\nArdèche\r\nCharente x 2\r\nCreuse\r\nDordogne\r\nGironde x 5\r\nHaut Rhin x 2\r\nHaute Loire x 3\r\nHaute Saône\r\nLandes\r\nLoire\r\nLoiret\r\nMorbihan\r\nParis x 3\r\nPuy de Dôme x 3\r\nPyrénées Atlantiques\r\nSeine et M', '28 cas à gravité nulle\r\n3 cas à gravité faible', 'baies sphériques de 6-10mm\r\nsurmontant les petites pièces du calice\r\npersistant', 'nombreuses, blanches, aplaties', 'noirs pendants en cymes\r\nombelliformes', ' juteuse, violacée', 'Plante herbacée annuelle à tige plus ou moins\r\ndressée de 30-50 cm', 8, 4, 5, '1601406806Morelle noire.jpg'),
(10, 'Laurier tin', 'Viburnum tinus', 'août\r\nseptembre\r\noctobre\r\nnovembre', 'Mars\r\nAvril\r\nJuin\r\nAoût\r\nSeptembre x 2\r\nOctobre x 2', 'Doubs\r\nGironde\r\nRhône x 2', '3 cas à gravité nulle\r\n1 cas à gravité faible ', 'Baies ovoïdes de environ 7 mm de long\r\net 5 mm de large', '1 graine par fruit', 'noirs en corymbes dréssés', 'Peu abondante, sombre', 'Arbuste de 2-3 m de hauteur très touffu', 8, 5, 23, '1601406720Laurier tin.jpg'),
(11, 'Bryone dioïque, Navet du diable ', 'Bryonia dioica ', 'septembre\r\noctobre\r\n', 'Juin x3\r\nJuillet x6\r\nAout x3\r\nSeptembre x3\r\nOctobre x2', 'Deux sèvres\r\nDordogne\r\nGironde x3\r\nIle et Vilaine\r\nIsère\r\nLoire\r\nLoiret\r\nLot et Garonne\r\nVal d’Oise\r\nVendée\r\nVienne x4', '12 cas à gravité nulle\r\n4 cas à gravité faible', 'Petites baies de 6 - 8 mm', ' 3 à 6, ovoïdes et aplaties, beiges', 'rouges charnus globuleux, mous, à\r\nchair juteuse', 'Orangéee, à odeur forte', 'Liane vivace par une grosse souche\r\ns’enfonçant profondément, à tige pouvant\r\ngrimper grâce à des vrilles caractéristiques,\r\nopposées aux feuilles', 1, 6, 6, '1601405964Bryone dioïque.jpg'),
(12, 'Cornouillers', ' Cornus mas', 'aout\r\nseptembre\r\noctobre\r\n', 'Avril\r\nJuin x2\r\nJuillet x8\r\nAout x7\r\nSeptembre x4\r\nOctobre\r\nDécembre', 'Alpes de Haute\r\nProvence\r\nAube\r\nBas Rhin x4\r\nCharente\r\nDeux Sèvres\r\nEtranger\r\nIsère x2\r\nMeurthe et Moselle\r\nParis\r\nSavoie\r\nSeine et Marne\r\nVienne x2\r\nYvelines', '14 cas à gravité nulle\r\n5 cas à gravité faible', 'Drupes rouge orangé oblongues de 15 – 20 mm\r\nde long sur 10 mm de diamètre, isolées ou par 2 – 3,\r\npendantes', '1 amande dans un gros noyau allongé ocre\r\nmarqué de 4 côtes', 'rouges charnus allongés', 'Rouge', 'Arbuste de 3 – 10 m', 1, 1, 1, '1601406438Cornus mas.jpg'),
(13, 'Cotonéasters', 'Cotoneaster sp', 'août\r\nseptembre\r\noctobre\r\nnovembre', 'Janvier x2\r\nFévrier\r\nMars\r\nMai x3\r\nJuin\r\nJuillet\r\nAout x2\r\nSeptembre x10\r\nOctobre x20\r\nNovembre x6\r\nDécembre', 'Ain\r\nBas Rhin x2\r\nCharente Maritime x3\r\nCorrèze x2\r\nCôtes d’Armor\r\nDoubs\r\nDrôme x2\r\nEssonne x2\r\nGironde x3\r\nHaut Rhin\r\nHaute Marne x2\r\nHaute Savoie\r\nIlle et Vilaine\r\nIsère\r\nLoire Atlantique\r\nMorbihan\r\nMoselle\r\nParis\r\nPuy de Dôme\r\nPyrénées Atlantiques\r\nx3\r\nSavoie\r\nSeine et Marne x3\r\nVendée\r\nVienne', '32 cas à gravité nulle\r\n6 cas à gravité faible', 'Petites «pommes» ou piridions\r\nrouges de 5-7 mm', '3 noyaux, chacun renfermant une\r\ngraine', 'rouges charnus globuleux, à chair\r\nferme farineuse', 'Jaunâtre, farineuse', 'Arbrisseaux de 1-2 m, dépourvues d’épines', 1, 1, 1, '1601406460Cotonéasters.jpg'),
(14, 'Buisson ardent ', 'Pyracantha sp', 'août\r\nseptembre\r\noctobre\r\nnovembre', 'Mars\r\nMai x2\r\nJuillet\r\nAout x3\r\nSeptembre x5\r\nOctobre x4', 'Bouches du Rhône\r\nCharente Maritime\r\nEssonne\r\nGironde x4\r\nMeurthe et Moselle\r\nRhône x2\r\nYvelines x3', '10 cas à gravité nulle\r\n3 cas à gravité faible', ' Petites pommes ou piridions de 5-7 mm', ' 5 petits noyaux, chacun renfermant une\r\ngraine', 'rouges orangés charnus globuleux, à chair\r\nferme farineuse', 'Orangée', 'Arbrisseau à rameaux tortueux, haut de 3-4 m, très\r\népineux ', 1, 1, 1, '1601406033Buisson ardent.jpg'),
(15, 'Bambou sacré ', ' Nandina domestica ', 'octobre\r\nnovembre\r\ndecembre', 'Janvier\r\nFévrier\r\nMars x2\r\nAvril x2\r\nMai\r\nJuin\r\nJuillet\r\nAout\r\nSeptembre\r\nNovembre x2\r\nDécembre x2', 'Bas Rhin\r\nEure\r\nHaute Vienne\r\nIsère\r\nRhône\r\nVal d’Oise\r\nVienne', '7 cas à gravité nulle ', 'Grappes de baies sphériques de 5-10\r\nmm de diamètre', ' 2 pépins par fruit', 'rouges charnus globuleux, mous, à\r\nchair juteuse', ' Orangée', 'Arbuste atteignant 2 m de haut', 1, 7, 9, '1601405871Bambou sacré.jpg'),
(16, 'Lierre grimpant ', 'Hedera helix', 'février\r\nmars\r\navril\r\nmai', 'Janvier x2\r\nAvril\r\nMai\r\nAout\r\nOctobre x2\r\nNovembre x3', 'Bas Rhin\r\nCharente Maritime\r\nEure et Loir\r\nFinistère\r\nGironde\r\nHaut Rhin\r\nPyrénées Atlantique x2\r\nYvelines', '6 cas à gravité nulle\r\n3 cas à gravité faible', 'Baies réunies en ombelles\r\nglobuleuses, à surface prurigineuse,\r\nd’environ 8-10 mm', ': 2 à 4, jaunâtres', 'noirs coriaces, non juteux, en ombelles\r\npendantes', ' Violacée', 'Liane rempante et grimpante ; tige ligneuse\r\npouvant atteindre 30 m de haut en\r\ns’accrochant au tronc des arbres ', 8, 9, 16, '1601406779Lierre grimpant.jpg'),
(17, 'Iris fétide ', 'Iris foetidissima', 'septembre\r\noctobre', 'Mars\r\nMai\r\nJuin\r\nSeptembre\r\nOctobre x5\r\nNovembre x2\r\nDécembre', 'Charente Maritime\r\nCher\r\nEure\r\nFinistère\r\nHautes de Seine\r\nIndre et Loire\r\nMarne\r\nYonne x2', '6 cas à gravité nulle\r\n3 cas à gravité faible', ' Capsule dressée s’ouvrant par 3 valves,\r\ndégageant de nombreuses graines charnues\r\nentourées par un arille rouge cramoisi,\r\nalignées comme des perles', 'Nombreuses, de 6-8 mm de long\r\nsur 5 mm de large', 'rouge secs s’ouvrant à maturité ', ' Absente', 'Plante herbacée robuste, vivave par un\r\nrhizome, formant de grandes touffes', 1, 10, 11, '1601406610Iris fétide.jpg'),
(18, 'Carotte sauvage ', 'Daucus carota ', 'none', 'Mai\r\nJuillet x3\r\nAout x3\r\nSeptembre', 'Ile et Vilaine\r\nMorbihan\r\nNord\r\nPyrénées Atlantiques\r\nVar', '4 cas à gravité nulle\r\n1 cas à gravité faible', '.0.', '.0.', ' ellipsoïde, à aiguillons en alêne,\r\ndistincts à la base, égalant environ sa largeur', '.0.', 'Plante bisannuelle de 30-80 cm, à rameaux\r\nétalés', 9, 2, 12, '1601406103Carotte sauvage.jpg'),
(19, 'Raisin d’amérique', ' Phytolacca americana', 'août\r\nseptembre\r\noctobre\r\nnovembre', 'Juillet\r\nAout x4\r\nSeptembre x4\r\nOctobre x7', 'Ardèche\r\nBouches du Rhône\r\nDrôme\r\nGironde\r\nHaute Vienne x2\r\nHauts de Seine\r\nIsère\r\nLandes\r\nRhône', '6 cas à gravité nulle\r\n4 cas à gravité faible', 'Baie de couleur pourpre noir, ridées à\r\nmaturité, de 7 – 9 mm de diamètre', '8 à 10 pépins noirs et brillants ', 'noirs en grappes pendantes denses', 'Jus violet-rouge intense et très\r\ntachant', 'Herbe vigoureuse de 1-3m de haut, à tiges\r\nviolacées, vivace par une épaisse racine\r\nrougeâtre', 8, 11, 16, '1601407111Raisin d’amérique.jpg'),
(20, 'Sureau noir', 'Sambucus nigra', 'juin\r\njuillet', 'Juin\r\nJuillet x4\r\nAout x3\r\nSeptembre x3', 'Bas Rhin\r\nParis x4\r\nSavoie\r\nSeine Maritime', '7 cas à gravité nulle\r\n1 cas à gravité faible', ' Petites baies de 4-6 mm, d’un\r\nnoir brillant, portées par des pédicelles\r\nrougeâtres toujours orientés vers le so', ' Dans chaque baie, 3 pépins beiges,\r\naplatis et allongés', ' noirs en corymbes pendants', 'Molle, rouge violacé', 'Arbuste ou petit arbre de 2 à 10 m', 8, 5, 1, '1601407161Sureau noir.jpg'),
(21, 'Viorne obier', ' Viburnum opulus ', 'aout\r\nseptembre\r\noctobre\r\nnovembre', 'Juin\r\nJuillet x4\r\nAout x2\r\nSeptembre x6\r\nOctobre x3', 'Bas Rhin\r\nDordogne\r\nGironde\r\nJura\r\nOise\r\nSeine Maritime\r\nYvelines', '6 cas à gravité nulle\r\n1 cas à gravité faible', 'Corymbes de petites baies, d’environ\r\n8 mm de diamètre', ': 1 seule graine, large et plate,\r\nacuminée au sommet', 'rouges charnus globuleux, mous, à\r\nchair peu juteuse', 'Rougeâtre, juteuse', 'Arbuste de 2-4 m ', 1, 5, 27, '1601407082Viorne obier.jpg'),
(22, 'Chèvrefeuilles ', ' Lonicera xylosteum ', 'juin\r\njuillet', 'Avril x2\r\nMai x4\r\nJuin x6\r\nJuillet x13\r\nAout x10\r\n', 'Aisne\r\nAlpes de Haute\r\nProvence\r\nBas Rhin\r\nCharente Maritime\r\nCôte d’Or x3\r\nDeux Sèvres\r\nDordogne\r\nEssone x2\r\nGironde x3\r\nHaut Rhin x 2\r\nHautes Alpes x2\r\nHauts de Seine\r\nIndre et Loire\r\nIsère\r\nJura\r\nLandes x2\r\nLoire\r\nLot et Garonne\r\nMeuse\r\nMorbihan\r\nMoselle x2\r\nSavoie\r\nSeine\r\nMaritime\r\nVal d’Oise\r\nVienne x2\r\nYvelines', '29 cas à gravité nulle\r\n5 cas à gravité faible', 'Petites baies de 6-8 mm, plus ou moins translucides,\r\ntypiquement réunies par 2 à leur base, parfois de tailles\r\ninégales, à l’extrémité d’un court pédoncul', ' le plus souvent de 4 à 6, jaune vif', 'rouges charnus globuleux, mous, à chair juteuse', ' juteuse, orangée', 'Arbrisseau ne dépassant guère 2 m', 8, 12, 16, '1601406370Lonicera xylosteum.jpg'),
(23, 'Berberis ornementaux ', 'Berberis sp', 'juin\r\njuillet', 'Mars\r\nAvril\r\nMai x2\r\nJuin x12\r\nJuillet x10\r\nAout x3\r\nNovembre', 'Bas Rhin x5\r\nDordogne\r\nEssonne x7\r\nEure\r\nGironde\r\nLoiret\r\nMeuse\r\nOise x2\r\nPuy de Dôme\r\nRhône x2\r\nSavoie\r\nSeine Maritime\r\nSeine et Marne\r\nSeine Saint Denis x2\r\nVaucluse', '25 cas à gravité nulle\r\n3 cas à gravité faible', 'Grappes de baies plus ou moins\r\nglobuleuses de 6-8 mm de diamètre', '2 à 5 par fruit', 'bleu foncé en grappes pendantes', 'Relativement juteuse, rouge vif à\r\nmauve', 'Arbrisseau pluso u moins étalé atteignant\r\n2 m de haut ; rameaux à bois jaune vif sous\r\nlécorce, couleur due à la présence d’un\r\nalcaloïde : la berbérine', 4, 7, 14, '1601405924Berberis aquifolium.jpg'),
(24, 'Chalef ', 'Elaeagnus sp', 'aout\r\nseptembre\r\noctobre\r\nnovembre\r\ndecembre', 'Janvier x2\r\nFévrier x2\r\nMars x8\r\nAvril x13\r\nMai\r\nAout x2', 'Bouches du Rhône\r\nCharente Maritime x2\r\nCorrèze\r\nEssonne\r\nGironde x9\r\nHauts de Seine\r\nIndre\r\nLandes x4\r\nManche x2\r\nMorbihan x2\r\nPyrénées Atlantiques x3\r\nSeine et Marne x5\r\nVendée\r\nYvelines', '28 cas à gravité nulle\r\n6 cas à gravité faible', 'Aspect de petites olives allongées,\r\nd’environ 7-25 mm de long sur 5-13 mm de large,\r\nc’est un akène entouré par un hypanthe charnu', ': 1 graine difficilement dissociable de\r\nl’akène', ' jaunâtre nettement allongés', 'Jaunâtre', 'Arbuste de 3-10 m de haut, à tiges parfois\r\népineuses. Souvent cultivé en temps que plante\r\nornementale', 3, 13, 15, '1601406260Chalef.jpg'),
(25, 'Troènes', 'Ligustrum', 'septembre\r\noctobre\r\nnovembre\r\ndecembre', 'Janvier x2\r\nFévrier\r\nMars\r\nJuillet x3\r\nAout x3\r\nSeptembre x4\r\nOctobre x4\r\nNovembre x4\r\nDécembre', 'Charente Maritime x2\r\nGironde x4\r\nHaut Rhin\r\nIlle et Vilaine\r\nLoiret\r\nLot et Garonne\r\nNord\r\nParis\r\nPyrénées\r\nAtlantiques\r\nSaône et Loire', '10 cas à gravité nulle\r\n4 cas à gravité faible', 'Grappes de petites baies de 5-8 mm\r\nde diamètre', ' 2 ou le plus souvent 4 graines\r\nviolettes', '.0.', ' Rouge violacé et très amère', 'Arbrisseau de 1-3m', 8, 14, 16, '1601407141Ligustrum vulgare.jpg'),
(28, 'Pommiers', 'Malus', 'septembre\r\noctobre\r\nnovembre\r\n', 'Janvier\r\nFévrier\r\nJuin x2\r\nAout x3\r\nSeptembre x3\r\nOctobre x5\r\nNovembre x3', 'Bas Rhin\r\nDeux Sèvres\r\nDoubs x2\r\nDrôme\r\nEssonne x3\r\nHaut Rhin\r\nHaute Marne x5\r\nHaute Savoie\r\nHauts de Seine\r\nLandes\r\nLoire Atlantique\r\nMorbihan\r\nSeine Saint Denis', '17 cas à gravité nulle\r\n3 cas à gravité faible', 'Piridions globuleux de 3-4 cm de diamètre', 'En général 2 pépins brillants par loges ', '.0.', '.0.', 'Arbuste ou petit arbre de 6-10 m, à rameaux\r\népineux', 3, 1, 15, '1601406990Malus sylvestris.jpg'),
(29, 'Fusain du japon', 'Euonymus japonicus ', 'septembre\r\noctobre\r\nnovembre\r\ndecembre', 'Janvier x2\r\nMars\r\nAvril x2\r\nMai\r\nJuin\r\nJuillet\r\nAout\r\nSeptembre x3\r\nOctobre x3\r\nNovembre\r\nDécembre x2', 'Côte d’Or\r\nFinistère x2\r\nGironde x2\r\nHautes Pyrénées\r\nPas de Calais x5\r\nPyrénées\r\nAtlantiques x2\r\nSeine Maritime\r\nVendée\r\nYvelines', '8 cas à gravité nulle\r\n3 cas à gravité faible', ' Capsules à 4 lobes de 13-15 mm ', ' L’ouverture des capsules dégage 4\r\ngraines presque totalement recouvert d’une\r\nfine arille orange vif', ' mauves secs s’ouvrant à maturité', ' Absente', 'Arbuste de 2 à 7 m, toujours vert (toxiplante)', 6, 15, 17, '1601406546Fusain du japon.jpg'),
(30, 'Morelle velue', 'Solanum villosum', 'none', 'Juillet\r\nAout x4\r\nSeptembre x3\r\nOctobre x2\r\nNovembre x2', 'Charente Maritime\r\nGard\r\nGironde\r\nVendée\r\nGironde x4', '6 cas à gravité nulle\r\n2 cas à gravité faible', 'Petite baie', ' Jaunâtres, ovoïdes, lisses, de 1 sur\r\n2 mm', 's jaune orangé charnus, subglobuleux ', ' Orange', 'Plante grisâtre, mollement velue, presque\r\ntomenteuse de 20 à 60 cm', 3, 4, 26, '1601406897Morelle velue.jpg'),
(31, 'Aubépines', 'Crataegus', 'septembre\r\noctobre', 'Mars\r\nJuin x2\r\nAout\r\nSeptembre x3\r\nOctobre x3', 'Bas Rhin x2\r\nCôte d’Or\r\nHaut Rhin\r\nMoselle\r\nNord\r\nPyrénées Atlantiques', '7 cas à gravité nulle ', ' Corymbes de piridions rouges foncés\r\nappelés cenelles, de forme ovoïde d’environ\r\n12-15 mm sur 8-10 m ; au sommet il persiste\r\ndes vestiges de sépales, non poilus', ': 2 ou parfois 3 noyaux ', ' rouges charnus globuleux, à chair\r\nferme farineuse', ' Jaunâtre', 'Arbrisseaux buissonnants et très épineux de\r\n3-5m de haut, parfois plus', 1, 1, 19, '1601405802Aubépines.jpg'),
(32, 'Laurier d’Alexandrie ', 'Danae racemosa', 'septembre\r\noctobre\r\nnovembre\r\ndecembre', 'Février x2\r\nAout\r\nOctobre x2\r\nNovembre x3\r\nDécembre', 'Landes\r\nRhône\r\nSeine Saint Denis', '3 cas à gravité nulle ', 'Baie', ': 1 seule graine', ' rouge vif charnus ', '.0.', 'Touffe arbustive, dressée, évasée puis arquée\r\net retombante', 1, 16, 19, '1601406684Laurier d’Alexandrie.jpg'),
(33, 'Euphorbes', 'Euphorbia', '.0.', 'Janvier x2\r\nMars\r\nAvril x3\r\nMai x2\r\nJuin x6\r\nJuillet\r\nAout x2\r\nSeptembre x2\r\nOctobre x3\r\nNovembre x3\r\nDécembre x2', 'Ain\r\nBas Rhin\r\nGironde x5\r\nGuyane\r\nHaute Savoie\r\nIle et Vilaine\r\nIndre et Loire\r\nIsère\r\nLandes\r\nPyrénées\r\nAtlantiques\r\nRhône\r\nSarthe\r\nVal de Marne x2\r\nVar\r\nVienne', '1 cas à gravité nulle\r\n19 cas à gravité faible\r\n2 cas à gravité moyenne', '.0.', '.0.', '.0.', '.0.', '.0.', 4, 18, 20, '1601406502Euphorbia lathyris.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `principeactif`
--

CREATE TABLE `principeactif` (
  `id` int(11) NOT NULL,
  `principeActif` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `principeactif`
--

INSERT INTO `principeactif` (`id`, `principeActif`) VALUES
(1, 'hétérosides cyanogènes'),
(2, 'Deoxypodophyl-lotoxine'),
(3, 'Raphides d’oxalate de calcium'),
(4, 'glycoalcaloïde'),
(5, 'Glycoalcaloïde stéroïdique'),
(6, 'Stéroïdes triterpéniques'),
(7, 'Solanocapsine (Alcaloïde)'),
(8, 'Hétérosides d’iridoïdes'),
(9, 'Alcaloïdes isoquinoléiques'),
(10, 'Polyine falcarinol'),
(11, 'Principes âcres et glucoside'),
(12, 'Plante comestible'),
(13, 'Lectines'),
(14, 'Alcaloïdes (berbérine)'),
(15, 'Fruit comestible'),
(16, 'Saponosides'),
(17, 'hétérosides cardiotoniques'),
(18, 'Composés procyanidiques'),
(19, 'Flavonoïdes'),
(20, 'Latex toxique'),
(23, 'fruit toxique'),
(26, 'Solasodine'),
(27, 'Alcaloïde (lycorine)');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `admin`) VALUES
(1, 'pharmacianGod', 'pharmacianGod@test.money', '$2y$10$pJn7SxBBi3McM6cx5w4gM.y/rxeVi16x/34S5g73V/0dReZYMz/di', 1),
(2, 'test', 'user@monsite.fr', '$2y$10$hhSrk9eaUSN3OmF/EglaB.Ct/D5DlTtp80LCCG4ki4Gb91cH.N/DO', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `couleur`
--
ALTER TABLE `couleur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general` (`general`(768));

--
-- Index pour la table `plante`
--
ALTER TABLE `plante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_couleur` (`id_couleur`),
  ADD KEY `id_famille` (`id_famille`),
  ADD KEY `id_principeActif` (`id_principeActif`);

--
-- Index pour la table `principeactif`
--
ALTER TABLE `principeactif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `couleur`
--
ALTER TABLE `couleur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `famille`
--
ALTER TABLE `famille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `plante`
--
ALTER TABLE `plante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `principeactif`
--
ALTER TABLE `principeactif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plante`
--
ALTER TABLE `plante`
  ADD CONSTRAINT `plante_ibfk_1` FOREIGN KEY (`id_principeActif`) REFERENCES `principeactif` (`id`),
  ADD CONSTRAINT `plante_ibfk_2` FOREIGN KEY (`id_famille`) REFERENCES `famille` (`id`),
  ADD CONSTRAINT `plante_ibfk_3` FOREIGN KEY (`id_couleur`) REFERENCES `couleur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
