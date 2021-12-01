-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 02:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs4750_project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `printTable` (IN `getid` INT)  SELECT *
FROM tv_movies$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `ACTOR_ID` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`ACTOR_ID`, `Name`) VALUES
(501, 'Mark-Paul Gosselaar'),
(502, 'Tiffani Thiessen'),
(503, 'Mario Lopez'),
(504, 'Lark Voorhies'),
(505, 'Elizabeth Berkley'),
(506, 'Dustin Diamond'),
(507, 'Dennis Haskins'),
(508, 'Colin Hanks'),
(509, 'Tom Kenny'),
(510, 'James Adomian'),
(511, 'Lisa Schwartz'),
(512, 'Maria Bamford'),
(513, 'Bill Burr'),
(514, 'Charlie Cox'),
(515, 'Deborah Ann Woll'),
(516, 'Elden Henson'),
(517, 'Rosario Dawson'),
(518, 'Vincent D-Onofrio'),
(519, 'James Freeman'),
(520, 'Lori Gardner'),
(521, 'Kate Bristol'),
(522, 'Billy Bob Thompson'),
(523, 'Marc Thompson'),
(524, 'Erica Schroeder'),
(525, 'Marie Kondo'),
(526, 'Adam Sandler'),
(527, 'Kevin James'),
(528, 'Julie Bowen'),
(529, 'Ray Liotta'),
(530, 'Steve Buscemi'),
(531, 'Maya Rudolph'),
(532, 'Rob Schneider'),
(533, 'June Squibb'),
(534, 'Kenan Thompson'),
(535, 'Tim Meadows'),
(536, 'Michael Chiklis'),
(537, 'Karan Brar'),
(538, 'George Wallace'),
(539, 'Paris Berelc'),
(540, 'Noah Schnapp'),
(541, 'China Anne McClain'),
(542, 'Colin Quinn'),
(543, 'Kym Whitley'),
(544, 'Lavell Crawford'),
(545, 'Mikey Day'),
(546, 'Jackie Sandler'),
(547, 'Sadie Sandler'),
(548, 'Sunny Sandler'),
(549, 'Kate Beckinsale'),
(550, 'Christopher Walken'),
(551, 'David Hasselhoff'),
(552, 'Henry Winkler'),
(553, 'Julie Kavner'),
(554, 'Sean Astin'),
(555, 'Joseph Castanon'),
(556, 'Jonah Hill'),
(557, 'Jake Hoffman'),
(558, 'Jennifer Coolidge'),
(559, 'Emily Chang'),
(560, 'Pia Shah'),
(561, 'Anthony Ma'),
(562, 'Eugene Cernan'),
(563, 'Jennifer Lawerence'),
(564, 'John Hawkes'),
(565, 'Kevin Breznahan'),
(566, 'Dale Dickey'),
(567, 'Garret Dillahunt'),
(568, 'Sheryl Lee'),
(569, 'Lauren Sweetser'),
(570, 'Tate Taylor'),
(571, 'Kate Siegel'),
(572, 'Zach Gilford'),
(573, 'Hamish Linklater'),
(574, 'Henry Thomas'),
(575, 'Kristin Lehman'),
(576, 'Samantha Sloyan'),
(577, 'Igby Rigney'),
(578, 'Rahul Kohli'),
(579, 'Annarah Cymone'),
(580, 'Annabeth Gish'),
(581, 'Alex Essoe'),
(582, 'Rahul Abburi'),
(583, 'Matt Biedel'),
(584, 'Michael Trucco'),
(585, 'Crystal Balint'),
(586, 'Louis Oliver'),
(587, 'Mel Giedroyc'),
(588, 'Sue Perkins'),
(589, 'Mary Berry'),
(590, 'Paul Hollywood'),
(591, 'Prashanth'),
(592, 'Aishwarya Rai Bachchan'),
(593, 'Sri Lakshmi'),
(594, 'Nassar'),
(595, 'Chris Rock'),
(596, 'David Spade'),
(597, 'Salma Hayek'),
(598, 'Maria Bello'),
(599, 'Joyce Van Patten'),
(600, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `actor_list`
-- (See below for the actual view)
--
CREATE TABLE `actor_list` (
`ID` int(11)
,`Name` mediumtext
);

-- --------------------------------------------------------

--
-- Table structure for table `act_in`
--

CREATE TABLE `act_in` (
  `Genre_ID` int(11) NOT NULL,
  `Actor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `act_in`
--

INSERT INTO `act_in` (`Genre_ID`, `Actor_ID`) VALUES
(401, 571),
(401, 572),
(401, 573),
(401, 574),
(401, 575),
(401, 576),
(401, 577),
(401, 578),
(401, 579),
(401, 580),
(401, 581),
(401, 582),
(401, 583),
(401, 584),
(401, 585),
(401, 586),
(402, 571),
(402, 572),
(402, 573),
(402, 574),
(402, 575),
(402, 576),
(402, 577),
(402, 578),
(402, 579),
(402, 580),
(402, 581),
(402, 582),
(402, 583),
(402, 584),
(402, 585),
(402, 586),
(403, 571),
(403, 572),
(403, 573),
(403, 574),
(403, 575),
(403, 576),
(403, 577),
(403, 578),
(403, 579),
(403, 580),
(403, 581),
(403, 582),
(403, 583),
(403, 584),
(403, 585),
(403, 586),
(404, 501),
(404, 502),
(404, 503),
(404, 504),
(404, 505),
(404, 506),
(404, 507),
(404, 508),
(404, 509),
(404, 510),
(404, 511),
(404, 512),
(404, 520),
(404, 521),
(404, 522),
(404, 523),
(404, 524),
(405, 501),
(405, 502),
(405, 503),
(405, 504),
(405, 505),
(405, 506),
(405, 507),
(405, 508),
(405, 509),
(405, 510),
(405, 511),
(405, 512),
(406, 513),
(407, 514),
(407, 515),
(407, 516),
(407, 517),
(407, 518),
(408, 514),
(408, 515),
(408, 516),
(408, 517),
(408, 518),
(409, 519),
(409, 562),
(410, 519),
(410, 591),
(410, 592),
(410, 593),
(410, 594),
(411, 525),
(411, 587),
(411, 588),
(411, 589),
(411, 590),
(412, 526),
(412, 527),
(412, 528),
(412, 529),
(412, 530),
(412, 531),
(412, 532),
(412, 533),
(412, 534),
(412, 535),
(412, 536),
(412, 537),
(412, 538),
(412, 539),
(412, 540),
(412, 541),
(412, 542),
(412, 543),
(412, 544),
(412, 545),
(412, 546),
(412, 547),
(412, 548),
(412, 549),
(412, 550),
(412, 551),
(412, 552),
(412, 553),
(412, 554),
(412, 555),
(412, 556),
(412, 557),
(412, 558),
(412, 559),
(412, 560),
(412, 561),
(412, 591),
(412, 592),
(412, 593),
(412, 594),
(412, 595),
(412, 596),
(412, 597),
(412, 598),
(412, 599),
(413, 526),
(413, 527),
(413, 528),
(413, 529),
(413, 530),
(413, 531),
(413, 532),
(413, 533),
(413, 534),
(413, 535),
(413, 536),
(413, 537),
(413, 538),
(413, 539),
(413, 540),
(413, 541),
(413, 542),
(413, 543),
(413, 544),
(413, 545),
(413, 546),
(413, 547),
(413, 548),
(414, 549),
(414, 550),
(414, 551),
(414, 552),
(414, 553),
(414, 554),
(414, 555),
(414, 556),
(414, 557),
(414, 558),
(415, 559),
(415, 560),
(415, 561),
(415, 563),
(415, 564),
(415, 565),
(415, 566),
(415, 567),
(415, 568),
(415, 569),
(415, 570),
(416, 563),
(416, 564),
(416, 565),
(416, 566),
(416, 567),
(416, 568),
(416, 569),
(416, 570),
(417, 587),
(417, 588),
(417, 589),
(417, 590),
(418, 591),
(418, 592),
(418, 593),
(418, 594);

-- --------------------------------------------------------

--
-- Table structure for table `categorized_as`
--

CREATE TABLE `categorized_as` (
  `ID` int(11) NOT NULL,
  `Genre_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorized_as`
--

INSERT INTO `categorized_as` (`ID`, `Genre_ID`) VALUES
(6, 401),
(6, 402),
(6, 403),
(9, 411),
(9, 417),
(25, 410),
(25, 412),
(25, 418),
(28, 412),
(68, 404),
(68, 405),
(154, 404),
(185, 411),
(1880, 412),
(1880, 413),
(2911, 404),
(2911, 405),
(3529, 406),
(4496, 407),
(4496, 408),
(5313, 409),
(5313, 410),
(6498, 412),
(6498, 414),
(6893, 412),
(6893, 415),
(8388, 409),
(8751, 415),
(8751, 416);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `Country_ID` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`Country_ID`, `Name`) VALUES
(201, 'United States'),
(202, 'Cyprus'),
(203, 'United Kingdom'),
(204, 'Italy'),
(205, 'Israel'),
(206, 'Peru'),
(207, 'Russia'),
(208, NULL),
(209, 'India'),
(210, 'Bolivia'),
(211, 'Uraguay'),
(212, 'USA');

-- --------------------------------------------------------

--
-- Stand-in structure for view `country_list`
-- (See below for the actual view)
--
CREATE TABLE `country_list` (
`ID` int(11)
,`Name` mediumtext
);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `Director_ID` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`Director_ID`, `Name`) VALUES
(301, NULL),
(302, 'Mike Binder'),
(303, 'Raz Degan'),
(304, 'Steve Brill'),
(305, 'Frank Coraci'),
(306, 'Tanuj Chopra'),
(307, 'Mark Craig'),
(308, 'Debra Granik'),
(309, 'Mike Flanagan'),
(310, 'Andy Devonshire'),
(311, 'S. Shankar'),
(312, 'Dennis Dugan');

-- --------------------------------------------------------

--
-- Table structure for table `directs`
--

CREATE TABLE `directs` (
  `ID` int(11) NOT NULL,
  `DIRECTOR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directs`
--

INSERT INTO `directs` (`ID`, `DIRECTOR_ID`) VALUES
(6, 309),
(9, 310),
(25, 311),
(28, 312),
(68, 301),
(154, 301),
(185, 301),
(1880, 304),
(2911, 301),
(3529, 302),
(4496, 301),
(5313, 303),
(6498, 305),
(6893, 306),
(8388, 307),
(8751, 308);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `GENRE_ID` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GENRE_ID`, `Name`) VALUES
(401, 'TV Dramas'),
(402, 'TV Horror'),
(403, 'TV Mysteries'),
(404, 'Kids TV'),
(405, 'TV Comedies'),
(406, 'TV-MA'),
(407, 'Crime TV Shows'),
(408, 'TV Action and Adventure'),
(409, 'Documentaries'),
(410, 'International Movies'),
(411, 'Reality TV'),
(412, 'Comedies'),
(413, 'Horror Movies'),
(414, 'Sci-Fi & Fantasy'),
(415, 'Independent Movies'),
(416, 'Dramas'),
(417, 'British TV Shows'),
(418, 'Romantic Movies'),
(419, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `genre_list`
-- (See below for the actual view)
--
CREATE TABLE `genre_list` (
`ID` int(11)
,`Name` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `netflix_nowledge`
-- (See below for the actual view)
--
CREATE TABLE `netflix_nowledge` (
`ID` int(11)
,`TV_Movie` varchar(40)
,`Actors` mediumtext
,`Directors` varchar(40)
,`Genre` mediumtext
,`Year_Released` int(11)
,`Location` mediumtext
,`Length` varchar(10)
,`Rating` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `produced_in`
--

CREATE TABLE `produced_in` (
  `ID` int(11) NOT NULL,
  `Country_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produced_in`
--

INSERT INTO `produced_in` (`ID`, `Country_ID`) VALUES
(6, 208),
(9, 203),
(25, 209),
(28, 201),
(68, 201),
(154, 207),
(185, 201),
(1880, 201),
(2911, 202),
(3529, 201),
(3529, 203),
(4496, 201),
(5313, 201),
(5313, 203),
(5313, 204),
(5313, 205),
(5313, 206),
(6498, 201),
(6893, 201),
(8388, 203),
(8751, 201);

-- --------------------------------------------------------

--
-- Table structure for table `stars_in`
--

CREATE TABLE `stars_in` (
  `ID` int(11) NOT NULL,
  `Actor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stars_in`
--

INSERT INTO `stars_in` (`ID`, `Actor_ID`) VALUES
(6, 571),
(6, 572),
(6, 573),
(6, 574),
(6, 575),
(6, 576),
(6, 577),
(6, 578),
(6, 579),
(6, 580),
(6, 581),
(6, 582),
(6, 583),
(6, 584),
(6, 585),
(6, 586),
(9, 587),
(9, 588),
(9, 589),
(9, 590),
(25, 591),
(25, 592),
(25, 593),
(25, 594),
(28, 526),
(28, 527),
(28, 531),
(28, 532),
(28, 535),
(28, 542),
(28, 595),
(28, 596),
(28, 597),
(28, 598),
(28, 599),
(30, 601),
(30, 602),
(31, 601),
(32, 603),
(32, 604),
(33, 603),
(34, 603),
(68, 501),
(68, 502),
(68, 503),
(68, 504),
(68, 505),
(68, 506),
(68, 507),
(154, 520),
(154, 521),
(154, 522),
(154, 523),
(154, 524),
(185, 525),
(1880, 526),
(1880, 527),
(1880, 528),
(1880, 529),
(1880, 530),
(1880, 531),
(1880, 532),
(1880, 533),
(1880, 534),
(1880, 535),
(1880, 536),
(1880, 537),
(1880, 538),
(1880, 539),
(1880, 540),
(1880, 541),
(1880, 542),
(1880, 543),
(1880, 544),
(1880, 545),
(1880, 546),
(1880, 547),
(1880, 548),
(2911, 508),
(2911, 509),
(2911, 510),
(2911, 511),
(2911, 512),
(3529, 513),
(4496, 514),
(4496, 515),
(4496, 516),
(4496, 517),
(4496, 518),
(5313, 519),
(6498, 549),
(6498, 550),
(6498, 551),
(6498, 552),
(6498, 553),
(6498, 554),
(6498, 555),
(6498, 556),
(6498, 557),
(6498, 558),
(6893, 559),
(6893, 560),
(6893, 561),
(8388, 562),
(8751, 563),
(8751, 564),
(8751, 565),
(8751, 566),
(8751, 567),
(8751, 568),
(8751, 569),
(8751, 570);

-- --------------------------------------------------------

--
-- Table structure for table `tv_movies`
--

CREATE TABLE `tv_movies` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Year_Released` int(11) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Length` varchar(10) DEFAULT NULL,
  `Rating` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tv_movies`
--

INSERT INTO `tv_movies` (`ID`, `Name`, `Year_Released`, `Location`, `Length`, `Rating`) VALUES
(6, 'Midnight Mass', 2021, NULL, '1 Season', 'TV-MA'),
(9, 'The Great British Baking Show', 2021, 'United Kingdom', '9 Seasons', 'TV-14'),
(25, 'Jeans', 1998, 'India', '166 min', 'TV-14'),
(28, 'Grown Ups', 2010, 'United States', '103 min', 'PG-13'),
(68, 'Saved by the bell', 1994, 'United States', '9 Seasons', 'TV-PG'),
(154, 'Kid-E-Cats', 2016, 'Russia', '3 Seasons', 'TV-Y'),
(185, 'Sparking Joy', 2021, 'United States', '1 Season', 'Reality TV'),
(449, 'Marvel’s Daredevil', 2018, 'United States', '3 Seasons', 'TV-MA'),
(1880, 'Hubie Halloween', 2020, 'United States', '104 Minute', 'PG-13'),
(2911, 'Talking Tom and Friends', 2017, 'Cyprus', '104 min', 'TV-Y'),
(3529, 'Bill Burr: Paper Tiger', 2019, 'United States, United Kingdom', '2019', 'TV-MA'),
(5313, 'The Last Shaman', 2016, 'United Kingdom, Italy, Israel, Peru, United States', NULL, 'TV-14'),
(6498, 'Click', 2006, 'United States', '108 min', 'PG-13'),
(6893, 'Grass', 2017, 'United States', '57 min', 'TV-MA'),
(8388, 'The Last Man on the Moon', 2014, 'United Kingdom', '96 min', 'TV-PG'),
(8751, 'Winter’s Bone', 2010, 'United States', '100 min', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `worked_for`
--

CREATE TABLE `worked_for` (
  `Director_ID` int(11) NOT NULL,
  `Actor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worked_for`
--

INSERT INTO `worked_for` (`Director_ID`, `Actor_ID`) VALUES
(301, 501),
(301, 502),
(301, 503),
(301, 504),
(301, 505),
(301, 506),
(301, 507),
(301, 508),
(301, 509),
(301, 510),
(301, 511),
(301, 512),
(301, 514),
(301, 515),
(301, 516),
(301, 517),
(301, 518),
(301, 520),
(301, 521),
(301, 522),
(301, 523),
(301, 524),
(301, 525),
(302, 513),
(303, 519),
(303, 600),
(303, 601),
(304, 526),
(304, 527),
(304, 528),
(304, 529),
(304, 530),
(304, 531),
(304, 532),
(304, 533),
(304, 534),
(304, 535),
(304, 536),
(304, 537),
(304, 538),
(304, 539),
(304, 540),
(304, 541),
(304, 542),
(304, 543),
(304, 544),
(304, 545),
(304, 546),
(304, 547),
(304, 548),
(305, 549),
(305, 550),
(305, 551),
(305, 552),
(305, 553),
(305, 554),
(305, 555),
(305, 556),
(305, 557),
(305, 558),
(306, 559),
(306, 560),
(306, 561),
(307, 562),
(307, 563),
(308, 564),
(308, 565),
(308, 566),
(308, 567),
(308, 568),
(308, 569),
(308, 570),
(309, 571),
(309, 572),
(309, 573),
(309, 574),
(309, 575),
(309, 576),
(309, 577),
(309, 578),
(309, 579),
(309, 580),
(309, 581),
(309, 582),
(309, 583),
(309, 584),
(309, 585),
(309, 586),
(310, 587),
(310, 588),
(310, 589),
(310, 590),
(311, 591),
(311, 592),
(311, 593),
(311, 594),
(312, 526),
(312, 527),
(312, 531),
(312, 532),
(312, 535),
(312, 542),
(312, 595),
(312, 596),
(312, 597),
(312, 598),
(312, 599);

-- --------------------------------------------------------

--
-- Structure for view `actor_list`
--
DROP TABLE IF EXISTS `actor_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `actor_list`  AS SELECT `stars_in`.`ID` AS `ID`, group_concat(`actors`.`Name` order by `actors`.`Name` ASC separator '; ') AS `Name` FROM (`actors` join `stars_in` on(`actors`.`ACTOR_ID` = `stars_in`.`Actor_ID`)) GROUP BY `stars_in`.`ID` ORDER BY `stars_in`.`ID` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `country_list`
--
DROP TABLE IF EXISTS `country_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `country_list`  AS SELECT `produced_in`.`ID` AS `ID`, group_concat(`countries`.`Name` order by `countries`.`Name` ASC separator '; ') AS `Name` FROM (`countries` join `produced_in` on(`countries`.`Country_ID` = `produced_in`.`Country_ID`)) GROUP BY `produced_in`.`ID` ORDER BY `produced_in`.`ID` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `genre_list`
--
DROP TABLE IF EXISTS `genre_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `genre_list`  AS SELECT `categorized_as`.`ID` AS `ID`, group_concat(`genre`.`Name` order by `genre`.`Name` ASC separator '; ') AS `Name` FROM (`genre` join `categorized_as` on(`genre`.`GENRE_ID` = `categorized_as`.`Genre_ID`)) GROUP BY `categorized_as`.`ID` ORDER BY `categorized_as`.`ID` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `netflix_nowledge`
--
DROP TABLE IF EXISTS `netflix_nowledge`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `netflix_nowledge`  AS SELECT `tv_movies`.`ID` AS `ID`, `tv_movies`.`Name` AS `TV_Movie`, `actor_list`.`Name` AS `Actors`, `directors`.`Name` AS `Directors`, `genre_list`.`Name` AS `Genre`, `tv_movies`.`Year_Released` AS `Year_Released`, `country_list`.`Name` AS `Location`, `tv_movies`.`Length` AS `Length`, `tv_movies`.`Rating` AS `Rating` FROM (((((`tv_movies` join `actor_list`) join `directors`) join `genre_list`) join `country_list`) join `directs`) WHERE `directors`.`Director_ID` = `directs`.`DIRECTOR_ID` AND `tv_movies`.`ID` = `actor_list`.`ID` AND `tv_movies`.`ID` = `country_list`.`ID` AND `tv_movies`.`ID` = `directs`.`ID` AND `tv_movies`.`ID` = `genre_list`.`ID` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`ACTOR_ID`);

--
-- Indexes for table `act_in`
--
ALTER TABLE `act_in`
  ADD PRIMARY KEY (`Genre_ID`,`Actor_ID`);

--
-- Indexes for table `categorized_as`
--
ALTER TABLE `categorized_as`
  ADD PRIMARY KEY (`ID`,`Genre_ID`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`Country_ID`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`Director_ID`);

--
-- Indexes for table `directs`
--
ALTER TABLE `directs`
  ADD PRIMARY KEY (`ID`,`DIRECTOR_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`GENRE_ID`);

--
-- Indexes for table `produced_in`
--
ALTER TABLE `produced_in`
  ADD PRIMARY KEY (`ID`,`Country_ID`);

--
-- Indexes for table `stars_in`
--
ALTER TABLE `stars_in`
  ADD PRIMARY KEY (`ID`,`Actor_ID`);

--
-- Indexes for table `tv_movies`
--
ALTER TABLE `tv_movies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `worked_for`
--
ALTER TABLE `worked_for`
  ADD PRIMARY KEY (`Director_ID`,`Actor_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
