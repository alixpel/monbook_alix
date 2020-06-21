-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 21, 2020 at 10:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monbook_alix`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id_projet` int(50) NOT NULL,
  `techno_id` text NOT NULL,
  `nom` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `lien` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id_projet`, `techno_id`, `nom`, `client`, `lien`, `texte`, `page`) VALUES
(2, 'HTML5 - CSS3 - Javascript', 'Codevores', 'DesCodeuses', 'https://github.com/alixpel/codevores', 'Site fictif d\'une SS2I', 1),
(3, 'HTML5 - CSS3 - Javascript', 'e-shop', 'DesCodeuses', 'https://github.com/alixpel/e-shop', 'papati, patata, papati, patata, papati, patata, papati, patata, papati, patata, papati, patata, papati, patata, papati, patata, papati, patata, papati, patata, papati, patata, ', 2),
(4, 'HTML5 - CSS3', 'Clinique', 'DesCodeuses', 'https://github.com/alixpel/clinique', 'Site fictif d\'un centre de santé, avec page formulaire et page prise de rendez-vous.', 3),
(5, 'HTML - CSS - Javascript - API', 'Météo - API', 'projet personnel', 'https://github.com/alixpel/APImeteo', 'Application météo qui donne les températures en temps réel autour du chalet familial.\r\nResponsive pour tablette et smartphone.', 4),
(7, 'PHP - HTML5 - CSS3 - Javascript', 'Petit Musée', 'Nicolas Hennette', 'https://github.com/alixpel/petitmusee', 'Site pour un musée fictif, avec page de recherche artiste, et espace administratif.', 5),
(9, 'HTML - CSS - Javascript - API', 'Générateur d\'images et de citations', 'moi', 'https://github.com/alixpel/generator', 'Cette page génère des citations de Kanye West et des images de chats grâce à une API conçue par un autre développeur (https://github.com/ajzbc).', 6),
(11, 'HTML - CSS - Python - Django', 'Djangogirls Blog', 'moi', 'https://github.com/alixpel/mon-nouveau-blog', 'Blog où l\'on peut ajouter des testes et des images, et les modifier une fois édités.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `chapter_techno`
--

CREATE TABLE `chapter_techno` (
  `projet_id` int(11) NOT NULL,
  `techno_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapter_techno`
--

INSERT INTO `chapter_techno` (`projet_id`, `techno_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 9),
(5, 9),
(11, 1),
(11, 2),
(11, 5),
(11, 6);

-- --------------------------------------------------------

--
-- Table structure for table `simple_donnee`
--

CREATE TABLE `simple_donnee` (
  `nom_donnee` varchar(100) NOT NULL,
  `valeur` varchar(300) NOT NULL,
  `id_donnee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simple_donnee`
--

INSERT INTO `simple_donnee` (`nom_donnee`, `valeur`, `id_donnee`) VALUES
('TITRE_ACCUEIL', 'mon portfolio de développeuse web full stack', 1),
('TEXTE_ACCUEIL', 'Voici mon travail de 2020, si vous voulez bien le parcourir !\r\n', 2),
('mon_nom', 'Alix Pelletier', 3),
('TITRE_CONTACT', 'contact', 4),
('TEXTE_CONTACT', 'Contactez-moi !', 5),
('email', 'mailto:alixpelletierpro@gmail.com', 6),
('TELEPHONE', '+33 6 10 04 85 94', 7),
('TELEPHONE_DIRECT', 'tel:+33610048594', 8),
('CV', 'https://alixpel.github.io/CV/', 9),
('ma_fonction', 'développeuse web', 10);

-- --------------------------------------------------------

--
-- Table structure for table `techno`
--

CREATE TABLE `techno` (
  `id_techno` int(11) NOT NULL,
  `nom_techno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `techno`
--

INSERT INTO `techno` (`id_techno`, `nom_techno`) VALUES
(1, 'HTML5'),
(2, 'CSS3'),
(3, 'Javascript'),
(4, 'PHP'),
(5, 'Python'),
(6, 'Django'),
(7, 'phpMyAdmin'),
(8, 'sql'),
(9, 'API'),
(12, 'Vivaldi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `identifiant`, `motdepasse`) VALUES
(1, 'alixpel', 'admin', 'admin'),
(2, 'nicolas', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id_projet`);

--
-- Indexes for table `simple_donnee`
--
ALTER TABLE `simple_donnee`
  ADD PRIMARY KEY (`id_donnee`);

--
-- Indexes for table `techno`
--
ALTER TABLE `techno`
  ADD PRIMARY KEY (`id_techno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id_projet` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `simple_donnee`
--
ALTER TABLE `simple_donnee`
  MODIFY `id_donnee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `techno`
--
ALTER TABLE `techno`
  MODIFY `id_techno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
