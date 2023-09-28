-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Sze 21. 14:42
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kategoriak`
--

CREATE TABLE `kategoriak` (
  `kazon` int(11) NOT NULL,
  `kaltkategoria` tinyint(4) NOT NULL,
  `knev` varchar(500) NOT NULL,
  `kkepek` varchar(500) NOT NULL,
  `klathato` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termek_fotok`
--

CREATE TABLE `termek_fotok` (
  `ftermek` int(11) NOT NULL COMMENT 'több kép',
  `fszam` int(11) NOT NULL COMMENT 'hányadik kép',
  `fcim` int(11) NOT NULL COMMENT 'kép címe'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termékek`
--

CREATE TABLE `termékek` (
  `tazon` int(11) NOT NULL COMMENT 'azonosító, kulcs',
  `tkategoria` tinyint(4) NOT NULL,
  `tnev` varchar(500) NOT NULL COMMENT 'neve',
  `tar` int(11) NOT NULL COMMENT 'ár',
  `tkep` varchar(500) NOT NULL COMMENT 'kép nevek',
  `treszlet` text NOT NULL COMMENT 'tartalom részletei',
  `tdb` smallint(6) NOT NULL COMMENT 'készleten lévő db szám',
  `tlathato` tinyint(4) NOT NULL COMMENT 'ha elfogy akkor látható marad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `termékek`
--

INSERT INTO `termékek` (`tazon`, `tkategoria`, `tnev`, `tar`, `tkep`, `treszlet`, `tdb`, `tlathato`) VALUES
(0, 0, '', 0, '', '', 0, 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kategoriak`
--
ALTER TABLE `kategoriak`
  ADD PRIMARY KEY (`kazon`),
  ADD KEY `kaltkategoria` (`kaltkategoria`);

--
-- A tábla indexei `termek_fotok`
--
ALTER TABLE `termek_fotok`
  ADD PRIMARY KEY (`ftermek`);

--
-- A tábla indexei `termékek`
--
ALTER TABLE `termékek`
  ADD PRIMARY KEY (`tazon`),
  ADD KEY `tkategoria` (`tkategoria`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `termek_fotok`
--
ALTER TABLE `termek_fotok`
  MODIFY `ftermek` int(11) NOT NULL AUTO_INCREMENT COMMENT 'több kép';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
