-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Mar 2023, 02:18
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dent`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `list_of_user_groups`
--

CREATE TABLE `list_of_user_groups` (
  `idlist` int(11) NOT NULL,
  `namegroup` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `list_of_user_groups`
--

INSERT INTO `list_of_user_groups` (`idlist`, `namegroup`) VALUES
(1, 'Patients'),
(2, 'Medical Staff');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `nameuser` text CHARACTER SET utf8mb4 NOT NULL,
  `password` text CHARACTER SET utf8mb4 NOT NULL,
  `firstname` text CHARACTER SET utf8mb4 NOT NULL,
  `surname` text CHARACTER SET utf8mb4 NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`iduser`, `nameuser`, `password`, `firstname`, `surname`, `birthdate`) VALUES
(1, 'JohnWatson', '$2y$10$KxCJxoEjqIh/E/6jqMoA..4LWzlk4.1qzKpo0WQpAvX1IH/.01.tC', 'John', 'Watson', '1980-03-03'),
(2, 'BenDavies', '$2y$10$jGIlV6kyvW/JI5B5D1Ow9eQP/E8GEt6tcXuLdYpU2Z/0cktpwVca.', 'Ben ', 'Davies', '1987-03-18'),
(4, 'JuliaTaylor', '$2y$10$eFqn9C6Bo.8IzRBFN06fBOwFTA9im.kX0IT21ToyYhT841jqzesv.', 'Julia', 'Taylor', '1993-05-20'),
(5, 'NicoleEdwards', '$2y$10$A6ds1D89NlebC4q6AdKMUuzjVdtCKeZhce6EVh26qpZ6.JoMh0yB6', 'Nicole', 'Edwards', '1997-10-09'),
(6, 'ThomasWalker', '$2y$10$6IhFwtDCI0BB9a15SCCX6e.UMm1n/EueWMOLYYtb4AwJl0f5y5t9m', 'Thomas', 'Walker', '1993-06-15'),
(7, 'TiffanyWilliams', '$2y$10$QA/s8AfWYBJkaCmjhR53XuqhraX9nfk7LI9XJ.mZCqgRPEYjur9iG', 'Tiffany', 'Williams', '1984-02-09'),
(8, 'EricSmith', '$2y$10$mcNgpgnZvTxA4MMNeJ/NyetkZT.N.NWmYjNbvV24kBcWTl/PaGTRS', 'Eric', 'Smith', '1979-05-09'),
(9, 'LucieJones', '$2y$10$YspcI3vIwLAgVh1xBkhTyO/698ISKEoEJMrCo0QuC3wnlPkbS46uy', 'Lucie', 'Jones', '2004-07-13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_group`
--

CREATE TABLE `user_group` (
  `idgroupassignment` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nameuser` text CHARACTER SET utf8mb4 NOT NULL,
  `namegroup` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user_group`
--

INSERT INTO `user_group` (`idgroupassignment`, `iduser`, `nameuser`, `namegroup`) VALUES
(1, 1, 'JohnWatson', 'Patients'),
(2, 2, 'BenDavies', 'Medical staff'),
(3, 4, 'JuliaTaylor', 'Medical Staff'),
(4, 5, 'NicoleEdwards', 'Patients'),
(5, 6, 'ThomasWalker', 'Patients'),
(6, 7, 'TiffanyWilliams', 'Patients'),
(7, 8, 'EricSmith', 'Medical Staff'),
(8, 9, 'LucieJones', 'Patients');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `list_of_user_groups`
--
ALTER TABLE `list_of_user_groups`
  ADD PRIMARY KEY (`idlist`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeksy dla tabeli `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`idgroupassignment`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `list_of_user_groups`
--
ALTER TABLE `list_of_user_groups`
  MODIFY `idlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT dla tabeli `user_group`
--
ALTER TABLE `user_group`
  MODIFY `idgroupassignment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
