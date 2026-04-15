-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 10, 2026 at 10:15 AM
-- Server version: 8.4.8
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thefryguy`
--

-- --------------------------------------------------------

--
-- Table structure for table `inlogin`
--

CREATE TABLE `inlogin` (
  `user` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inlogin`
--

INSERT INTO `inlogin` (`user`, `passwd`) VALUES
('owenkuster', 'wachtwoord');

-- --------------------------------------------------------

--
-- Table structure for table `menukaart`
--

CREATE TABLE `menukaart` (
  `id` int NOT NULL,
  `naam` varchar(50) NOT NULL,
  `prijs` decimal(10,0) NOT NULL,
  `allergenen` varchar(100) NOT NULL,
  `afbeeldingen` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menukaart`
--

INSERT INTO `menukaart` (`id`, `naam`, `prijs`, `allergenen`, `afbeeldingen`, `beschrijving`, `categorie`) VALUES
(1, 'Kleine  Friet', 2, 'Gluten', 'assets/img/Friet.png', 'Knapperige verse friet gebakken in hoogwaardig frituurvet. Ideaal als kleine snack tussendoor.', 'friet'),
(2, 'Middel Friet', 3, 'Gluten', 'assets/img/Friet.png', 'Een ruime portie goudgele friet, perfect bij een saus naar keuze.', 'friet'),
(3, 'Grote Friet', 4, 'Gluten', 'assets/img/Friet.png', 'Een flinke grote portie verse friet — voor de echte frietliefhebber.', 'friet'),
(4, 'Kleine Gezinszak', 6, 'Gluten', 'assets/img/Gezinsfriet.png', 'Gezellig samen genieten! Een kleine zak verse friet voor 2–3 personen.', 'friet'),
(5, 'Middel Gezinszak', 8, 'Gluten', 'assets/img/Gezinsfriet.png', 'Perfecte middelmaat voor het hele gezin — verse friet voor 3–4 personen.', 'friet'),
(6, 'Grote Gezinszak', 10, 'Gluten', 'assets/img/Gezinsfriet.png', 'De ultieme gezinsportie verse friet — meer dan genoeg voor 4–5 personen.', 'friet'),
(7, 'Coca Cola', 1, '', 'assets/img/cola.png', 'Een heerlijk glaasje cola voor bij de friet — Heerlijk zoet en sterk.', 'drinken'),
(8, 'Fanta Orange', 1, '', 'assets/img/fanta.png', 'Zoet en fruitig met een lekkere sinaasappelsmaak — favoriet bij jong en oud.', 'drinken'),
(9, 'Water', 1, '', 'assets/img/water.png', 'Stil bronwater — puur, fris en altijd een goede keuze.', 'drinken'),
(10, 'Sprite', 1, '', 'assets/img/sprite.png', 'Heerlijk zoet en prikkelig — Heerlijk bij de friet.', 'drinken');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menukaart`
--
ALTER TABLE `menukaart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menukaart`
--
ALTER TABLE `menukaart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
