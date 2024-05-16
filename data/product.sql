-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2024 at 10:09 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `rating` decimal(11,0) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `name`, `rating`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(2, 'liesofp', 9, 'https://liesofp.com', 30.00, 'act', '2024-04-12 15:21:53', '2024-04-12 15:21:53', 'Lies of P is a thrilling soulslike that takes the story of Pinocchio, turns it on its head, and sets it against the darkly elegant backdrop of the Belle Epoque era.', 'game_liesofp_thumb.jpg', 'game_liesofp_1.jpg'),
(3, 'apexlegends', 8, 'https://apexlegends.com', 20.00, 'fps', '2024-04-12 15:41:30', '2024-04-12 15:41:30', 'apex legends is a award-winning, free-to-play Hero Shooter from Respawn Entertainment.', 'game_apexlegends_thumb.jpg', 'game_apexlegends_1.jpg'),
(4, 'destiny2', 7, 'https://destiny2.com', 25.00, 'fps', '2024-04-12 15:42:46', '2024-04-12 15:42:46', 'Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere.', 'game_destiny2_thumb.jpg', 'game_destiny2_1.jpg'),
(5, 'issac', 10, 'https://issac.com', 10.00, 'rouge', '2024-04-12 15:44:29', '2024-04-12 15:44:29', 'The Binding of Isaac: Rebirth is a randomly generated action RPG shooter with heavy Rogue-like elements. ', 'game_issac_thumb.jpg', 'game_issac_1.jpg'),
(6, 'persona3', 10, 'https://persona3.com', 50.00, 'rpg', '2024-04-12 15:45:33', '2024-04-12 15:45:33', 'Dive into the Dark Hour and awaken the depths of your heart. Persona 3 Reload is a captivating reimagining of the genre-defining RPG, reborn for the modern era with cutting-edge graphics and gameplay.', 'game_persona3_thumb.jpg', 'game_persona3_1.jpg'),
(7, 'ghostrunner', 8, 'https://ghostrunner.com', 30.00, 'rouge', '2024-04-12 15:46:38', '2024-04-12 15:46:38', 'Ghostrunner offers a unique single-player experience: fast-paced, violent combat, and an original setting that blends science fiction with post-apocalyptic themes.', 'game_ghostrunner_thumb.jpg', 'game_ghostrunner_1.jpg'),
(8, 'hogwarts', 9, 'https://hogwarts.com', 70.00, 'rpg', '2024-04-12 15:48:04', '2024-04-12 15:48:04', 'Hogwarts Legacy is an immersive, open-world action RPG. Now you can take control of the action and be at the center of your own adventure in the wizarding world.', 'game_hogwarts_thumb.jpg', 'game_hogwarts_1.jpg'),
(9, 'callofduty', 8, 'https://callofduty.com', 100.00, 'fps', '2024-04-12 15:49:10', '2024-04-12 15:49:10', 'In the direct sequel to the record-breaking Call of Duty®: Modern Warfare® II, Captain Price and Task Force 141 face off against the ultimate threat.', 'game_callofduty_thumb.jpg', 'game_callofduty_1.jpg'),
(10, 'granbluefantsy', 9, 'https://granbluefantsy.com', 50.00, 'act', '2024-04-12 15:51:58', '2024-04-12 15:51:58', 'A grand adventure in the skies awaits! Form a party of four from a diverse roster of skyfarers and slash—or shoot or hex—your way to victory against treacherous foes in this action RPG. Take on quests solo or with the help of others in up to 4-player co-op play!', 'game_granbluefantsy_thumb.jpg', 'game_granbluefantsy_1.jpg'),
(11, 'helldivers2', 9, 'https://helldivers2.com', 30.00, 'fps', '2024-04-12 15:53:08', '2024-04-12 15:53:08', 'The Galaxy’s Last Line of Offence. Enlist in the Helldivers and join the fight for freedom across a hostile galaxy in a fast, frantic, and ferocious third-person shooter.', 'game_helldivers2_thumb.jpg', 'game_helldivers2_1.jpg'),
(12, 'monsterhunterworld', 8, 'https://monsterhunterworld.com', 60.00, 'act', '2024-04-12 15:54:14', '2024-04-12 15:54:14', 'Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.', 'game_monsterhunterworld_thumb.jpg', 'game_monsterhunterworld_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
