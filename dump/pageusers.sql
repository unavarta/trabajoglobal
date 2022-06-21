-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220620.3e672740f3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2022 a las 23:19:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pageusers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drivers`
--

CREATE TABLE `drivers` (
  `driverID` int(2) NOT NULL,
  `driverName` varchar(40) NOT NULL,
  `driverTeam` varchar(40) NOT NULL,
  `driverWins` int(3) NOT NULL,
  `driverChips` int(3) NOT NULL,
  `driverPts` int(3) NOT NULL,
  `driverPoles` int(3) NOT NULL,
  `driverFirst` varchar(25) NOT NULL,
  `driverCountry` varchar(20) NOT NULL,
  `driverImg` varchar(30) NOT NULL,
  `driverFondo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `drivers`
--

INSERT INTO `drivers` (`driverID`, `driverName`, `driverTeam`, `driverWins`, `driverChips`, `driverPts`, `driverPoles`, `driverFirst`, `driverCountry`, `driverImg`, `driverFondo`) VALUES
(1, 'Charles Leclerc', 'Scuderia Ferrari', 4, 0, 686, 13, '2018 Australian GP', 'Monaco', 'Lechair.png', 'fer'),
(2, 'Max Verstappen', 'Red Bull Racing', 24, 1, 1683, 14, '2015 Australian GP', 'Netherlands', 'Versta.png', 'bul'),
(3, 'Sergio Perez', 'Red Bull Racing', 4, 0, 1006, 1, '2011 Australian GP', 'Mexico', 'Chequi.png', 'bul'),
(4, 'George Russell', 'Mercedes-Benz AMG F1 Team', 0, 0, 103, 0, '2019 Australian GP', 'England', 'George.png', 'mer'),
(5, 'Carlos Sainz Jr.', 'Scuderia Ferrari', 0, 0, 620, 0, '2015 Australian GP', 'Spain', 'Carleto.png', 'fer'),
(6, 'Lewis Hamilton', 'Mercedes-Benz AMG F1 Team', 103, 7, 4216, 103, '2007 Australian GP', 'England', 'Lewis.png', 'mer'),
(7, 'Lando Norris', 'McLaren F1 Team', 0, 0, 354, 1, '2019 Australian GP', 'England]', 'Lando.png', 'mc'),
(8, 'Valtteri Bottas', 'Alfa Romeo F1 Team', 10, 0, 1778, 20, '2013 Australian GP', 'Finland', 'Valtteri.png', 'alfa'),
(9, 'Esteban Ocon', 'BWT Alpine F1 Team', 1, 0, 302, 0, '2016 Belgian GP', 'France', 'Esteban.png', 'ren'),
(10, 'Kevin Magnussen', 'HAAS F1 Team', 0, 0, 173, 0, '2014 Australian GP', 'Denmark', 'KMag.png', 'haas'),
(11, 'Daniel Ricciardo', 'McLaren F1 Team', 8, 0, 1285, 3, '2011 British GP', 'Australia', 'Ric.png', 'mc'),
(12, 'Yuki Tsunoda', 'Scuderia AlphaTauri', 0, 0, 43, 0, '2021 Bahrain GP', 'Japan', 'Yuki.png', 'tauri'),
(13, 'Pierre Gasly', 'Scuderia AlphaTauri', 1, 0, 315, 0, '2017 Malaysian GP', 'France', 'Pierre.png', 'tauri'),
(14, 'Sebastian Vettel', 'Aston Martin Aramco Cognizant ', 53, 4, 3066, 57, '2007 United States GP', 'Germany', 'Seb.png', 'aston'),
(15, 'Alexander Albon', 'Williams Racing', 0, 0, 200, 0, '2019 Australian GP', 'Thailand', 'Alex.png', 'will'),
(16, 'Fernando Alonso', 'BWT Alpine F1 Team', 32, 2, 1990, 22, '2003 Hungarian GP', 'Spain', 'Nano.png', 'ren'),
(17, 'Lance Stroll', 'Aston Martin Aramco Cognizant', 0, 0, 178, 1, '2017 Australian GP', 'Canada', 'Stroll.png', 'aston'),
(18, 'Zhou Guanyu', 'Alfa Romeo F1 Team', 0, 0, 1, 0, '2022 Bahrain GP', 'China', 'Zhou.png', 'alfa'),
(19, 'Mick Schumacher', 'HAAS F1 Team', 0, 0, 0, 0, '2021 Bahrain GP', 'Germany', 'Mick.png', 'haas'),
(20, 'Nico Hulkenberg', 'Aston Martin Aramco Cognizant', 0, 0, 521, 1, '2010 Bahrain GP', 'Germany', 'Hulk.png', 'aston'),
(21, 'Nicholas Latifi', 'Williams Racing', 0, 0, 7, 0, '2020 Austrian GP', 'Canada', 'Nick.png', 'will');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grandprix`
--

CREATE TABLE `grandprix` (
  `gpID` int(2) NOT NULL,
  `gpName` varchar(30) NOT NULL,
  `gpTrack` varchar(40) NOT NULL,
  `gpFirst` varchar(50) NOT NULL,
  `gpFastlap` varchar(50) NOT NULL,
  `gpWinner` varchar(50) NOT NULL,
  `gpMostWins` varchar(50) NOT NULL,
  `gpImg` varchar(30) DEFAULT NULL,
  `podiumOne` varchar(30) NOT NULL,
  `podiumTwo` varchar(30) NOT NULL,
  `podiumThree` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grandprix`
--

INSERT INTO `grandprix` (`gpID`, `gpName`, `gpTrack`, `gpFirst`, `gpFastlap`, `gpWinner`, `gpMostWins`, `gpImg`, `podiumOne`, `podiumTwo`, `podiumThree`) VALUES
(1, 'Bahrain GP', 'Bahrain International Circuit', '2004', 'Michael Schumacher (2004)', 'Charles Leclerc', 'Lewis Hamilton (5)', 'bahrain.jpg', 'Charles Leclerc', 'Carlos Sainz', 'Lewis Hamilton'),
(2, 'Saudi Arabian GP', 'Jeddah Corniche Circuit', '2021', 'Lewis Hamilton (2021)', 'Max Verstappen', 'Max Verstappen (1)', 'saudi.jpg', 'Max Verstappen', 'Charles Leclerc', 'Carlos Sainz'),
(7, 'Monaco Grand Prix', 'Circuit de Monaco', '1950', 'Lewis Hamilton (2021)', 'Sergio Perez', 'Ayrton Senna (6)', 'monaco.jpg', 'Checo Perez', 'Carlos Sainz', 'Max Verstappen'),
(8, 'Azerbaijan Grand Prix', 'Baku City Circuit', '2016', 'Charles Leclerc (2019)', 'Max Verstappen', 'Max Verstappen (1)', 'baku.jpg', 'Max Verstappen', 'Checo Perez', 'George Russell');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `teamID` int(2) NOT NULL,
  `teamName` varchar(30) NOT NULL,
  `teamCountry` varchar(30) NOT NULL,
  `teamWins` int(10) NOT NULL,
  `teamPts` int(10) NOT NULL,
  `teamChips` int(10) NOT NULL,
  `teamFirst` varchar(30) NOT NULL,
  `teamImg` varchar(30) NOT NULL,
  `teamLOGO` varchar(20) NOT NULL,
  `teamClass` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`teamID`, `teamName`, `teamCountry`, `teamWins`, `teamPts`, `teamChips`, `teamFirst`, `teamImg`, `teamLOGO`, `teamClass`) VALUES
(1, 'Scuderia Ferrari', 'Maranello, Italy', 241, 9803, 16, 'Monaco GP 1950', 'ferrari.jpg', 'fe.png', 'fer'),
(2, 'Red Bull Racing', 'Milton Keynes, UK', 81, 5908, 5, 'Australia 2005', 'redbull.jpg', 'redbull.png', 'bul'),
(3, 'Mercedes-Benz AMG F1 Team', 'Brackley, UK', 124, 6460, 8, '1954 French GP', 'mercedes.jpeg', 'mb.png', 'mer'),
(4, 'McLaren F1 Team', 'Woking, UK', 183, 5369, 8, '1966 Monaco GP', 'mclaren.jpg', 'mc.png', ''),
(5, 'Alfa Romeo F1 Team Orlen', 'Turin, Italy', 1, 169, 0, '1980 Argentinian GP', 'alfaromeo.jpg', 'alfa.png', 'alfa'),
(6, 'BWT Alpine F1 Team', 'Bourges, France', 1, 202, 0, '2021 Bahrain GP', 'alpino.jpg', 'alpine.png', ''),
(7, 'Scuderia AlphaTauri', 'Faenza, Italy', 2, 776, 0, '2006 Bahrain GP', 'alphatauri.jpg', 'tauri.jpg', ''),
(8, 'HAAS F1 Team', 'Banbury, UK', 0, 215, 0, '2016 Australian GP', 'haas.jpg', 'haas.png', 'haas'),
(9, 'Aston Martin Aramco F1 Team', 'Gaydon, UK', 0, 92, 0, '1959 Monaco GP', 'aston.jpg', 'aston.png', ''),
(10, 'Williams Racing', 'Wantage, UK', 114, 3425, 9, '1977 Argentinian GP', 'williams.jpg', 'will.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersMail` varchar(128) NOT NULL,
  `usersPWD` varchar(128) NOT NULL,
  `favTeam` varchar(30) DEFAULT NULL,
  `favDriver` varchar(30) DEFAULT NULL,
  `imgUrl` varchar(30) DEFAULT NULL,
  `tipo` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersMail`, `usersPWD`, `favTeam`, `favDriver`, `imgUrl`, `tipo`) VALUES
(7, 'u', 'ill@mai.com', '$2y$10$p5x0Nl/93RvBo/70NI51IeJ4gD539RZpmFoo24ibJVhXoI4tKnSH2', 'McLaren', 'Ricciardo', 'senn.jpg', 0),
(9, 'Alethjo', 'alejito@eth.com', '$2y$10$TWYbi8mHbK5dv9WSlnAWJezbooaex6vu6HYWPDTjckvmSRHb8bYl.', 'McLaren', 'Lewis Hamilton', 'Cactus-plants-madison-wi.jpg', 0),
(10, 'unavarta', 'unavarta@gmail.com', '$2y$10$FmAaailNrpmEx5wuymNWzu.nIfzA7h2ZqqHWcldVyFFKiweE/geFm', 'Ferrari', 'Hamilton', 'lewis.jpg', 0),
(11, 'admin', 'uriel@admin.com', '$2y$10$OHA5DbllrvGBRrgv/nDt1O2HPiGKsocbT5ED15StIW0nUN7swoPXq', NULL, NULL, NULL, 1),
(12, 'uri', 'uri@uri.com', '$2y$10$VMxoBLmO24ZW8jaCN9uqSuin0CaRRkVTDsEtFj1rMF4AgbHlq6Bte', 'MCLAREN', 'HAMILTON', 'hans.png', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverID`);

--
-- Indices de la tabla `grandprix`
--
ALTER TABLE `grandprix`
  ADD PRIMARY KEY (`gpID`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grandprix`
--
ALTER TABLE `grandprix`
  MODIFY `gpID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `teamID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



