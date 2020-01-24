-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2017, 04:07
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `border`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admins`
--

CREATE TABLE `admins` (
  `IDadmin` int(4) NOT NULL,
  `usernameA` varchar(20) NOT NULL,
  `passwordA` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `admins`
--

INSERT INTO `admins` (`IDadmin`, `usernameA`, `passwordA`, `name`, `surname`, `email`) VALUES
(1, 'admin', 'password', 'Tom', 'Hardy', 'hardy@co.uk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `events`
--

CREATE TABLE `events` (
  `IDevent` int(4) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `entry` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `events`
--

INSERT INTO `events` (`IDevent`, `date`, `description`, `type`, `entry`, `event`) VALUES
(5, '2017-06-15', 'Everybody is welcome to ice disco party.', 'Ice skating', 'Free', 'Icie skating dico night'),
(6, '2017-05-25', 'On 17th June from 10:00 am starts Curling Mastrers 2017. Knock Out mode for registered teams. Final prise is Â£500!!! Winner takes all rest gets the fun.', 'Championship', 'Registered teams', 'Curling Masters');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `IDnews` int(5) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `author` varchar(25) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`IDnews`, `date`, `title`, `image`, `author`, `content`) VALUES
(4, '2017-06-15', 'Icie skating dico night', '', 'Admin', 'Everybody is welcome to ice disco party. Free entrance!! '),
(5, '2017-06-08', 'Curling for under 15', '', 'Admin', 'Curling competition for kids under 15 will take place on 14. 07.2017. Mixed groups of 4. Sign in today.'),
(6, '2017-06-02', 'Board meeting', '', 'Admin', 'Board meeting will take place on 1.07.2017 at 3 pm. All board members are expected.a'),
(7, '2017-05-25', 'Curling Masters', '', 'Admin', 'On 17th June from 10:00 am starts Curling Mastrers 2017. Knock Out mode for registered teams. Final prise is Â£500!!! Winner takes all rest gets the fun.'),
(8, '2017-06-11', 'Border Young Curlers Are Recruiting!', '', 'Admin', 'Are you young and like to curl?  Do you want to play more games?  Do you want to meet people the same age as you with the same interest?  Then join the Border Young Curlers for the season 2017/18.  Either phone Ruaraidh Whyte on 01573 224 774 or email him on admin@bordericerink.co.uk .');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sponsors`
--

CREATE TABLE `sponsors` (
  `IDsponsor` int(4) NOT NULL,
  `sponsorName` varchar(50) NOT NULL,
  `sponsorLink` varchar(200) NOT NULL,
  `sponsorEmail` varchar(40) NOT NULL,
  `sponsorPhone` int(15) NOT NULL,
  `sponsorAddress` varchar(200) NOT NULL,
  `sponsorPostcode` varchar(8) NOT NULL,
  `sponsorLogo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `sponsors`
--

INSERT INTO `sponsors` (`IDsponsor`, `sponsorName`, `sponsorLink`, `sponsorEmail`, `sponsorPhone`, `sponsorAddress`, `sponsorPostcode`, `sponsorLogo`) VALUES
(1, 'Malcolm', 'www.malcolm.com', 'malcolm@co.uk', 1234567, '22 West st. Edinburgh', 'EH3 5TT', ''),
(2, 'Mitchel Construction', '', 'mitchel@co.uk', 32501445, '1 Main st. Dumfries', 'DF1 4RR', ''),
(3, 'Town Taxi', '', 'taxi@co.uk', 987456, '2 high st. Glasgow', 'G2 8HP', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `IDuser` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `class` varchar(15) NOT NULL DEFAULT 'u',
  `address` varchar(150) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`IDuser`, `name`, `surname`, `email`, `password`, `class`, `address`, `postcode`, `phone`) VALUES
(1, 'Ben', 'White', 'white@co.uk', 'qwert', 'u', '50 Main st. Airdrie', 'ML6 5GH', 1236458963),
(5, 'user', 'name', 'user@name.uk', 'qaz', 'u', '0 ', 'a0 0a', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`IDadmin`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`IDevent`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`IDnews`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`IDsponsor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `admins`
--
ALTER TABLE `admins`
  MODIFY `IDadmin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `events`
--
ALTER TABLE `events`
  MODIFY `IDevent` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `IDnews` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `IDsponsor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `IDuser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
