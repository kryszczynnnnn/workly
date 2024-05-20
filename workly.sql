-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Maj 2024, 00:29
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `workly`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `assingments`
--

CREATE TABLE `assingments` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `c1`
--

CREATE TABLE `c1` (
  `user_id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `c1`
--

INSERT INTO `c1` (`user_id`, `admin`) VALUES
(7, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `c35`
--

CREATE TABLE `c35` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `c35`
--

INSERT INTO `c35` (`user_id`, `username`, `admin`) VALUES
(7, 'abc', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `table_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `courses`
--

INSERT INTO `courses` (`course_id`, `name`, `table_name`) VALUES
(34, 'dsfds', 'fsdafsa'),
(35, 'test', 'c35');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `u10`
--

CREATE TABLE `u10` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `u12`
--

CREATE TABLE `u12` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `u13`
--

CREATE TABLE `u13` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `pass`, `name`, `surname`) VALUES
(2, 'fgfsdg', 'gdfgfds@gmail.com', '5296810b80e2fedf74b10a1a3a7a7a1c', 'fdgdsfgsdf', 'gdsfgdsfgds'),
(3, 'xdd', 'xdd@gmail.com', 'e0ec65fcfcf174244bc6201ec441d367', 'xdd', 'xdd'),
(6, 'fgfdgfsdg', 'sggsdfsdg@gmail.com', '9248a89c9b3d9c536c26cf399f67da8b', 'fgsdfgsdfg', 'fdgsdfgdsgd'),
(7, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'abc', 'abc'),
(9, 'zzantic', 'krystian.tarnowski2115@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'Krystian', 'Tarnowski'),
(11, 'fgsdfgfd', 'gfsjg@gmail.com', '4a731de85feeea7642277820a8bc6d97', 'gdfgdfsgdsf', 'gdfgdfgdsf'),
(12, 'fdasfasd', 'fasfa@gmail.com', '6e175369b28341ad5408c1057535290e', 'fdsfasdf', 'dsafasdfasd'),
(14, 'dgfsvbsdfds', 'uigfdoashl@gmail.com', 'c776ec89881ca075db553da2a1915d92', 'vcbxcvbdgfsh', 'dljfguihewj;');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `assingments`
--
ALTER TABLE `assingments`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `c35`
--
ALTER TABLE `c35`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `assingments`
--
ALTER TABLE `assingments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
