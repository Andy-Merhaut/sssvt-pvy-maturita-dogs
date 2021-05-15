-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Sob 15. kvě 2021, 19:51
-- Verze serveru: 10.4.14-MariaDB
-- Verze PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `dogs`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `dog`
--

CREATE TABLE `dog` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `dog`
--

INSERT INTO `dog` (`Id`, `Name`, `Type`) VALUES
(1, 'Franta', 1),
(2, 'KungPao', 3),
(3, 'Karel', 5);

-- --------------------------------------------------------

--
-- Struktura tabulky `type`
--

CREATE TABLE `type` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `type`
--

INSERT INTO `type` (`Id`, `Name`) VALUES
(1, 'Jezevčík'),
(2, 'Bernský Salašnický'),
(3, 'Ohař'),
(4, 'Německý ovčák'),
(5, 'Belgický ovčák'),
(6, 'Chrt'),
(7, 'Andreas Merhaut'),
(8, 'Daniela'),
(9, 'Andreas Merhaut');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Type` (`Type`);

--
-- Klíče pro tabulku `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `dog`
--
ALTER TABLE `dog`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `type`
--
ALTER TABLE `type`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `dog`
--
ALTER TABLE `dog`
  ADD CONSTRAINT `dog_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `type` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
