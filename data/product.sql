-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2024 at 11:26 AM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

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
  `catrgory` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `name`, `rating`, `url`, `price`, `catrgory`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'sekiro', '10', 'https://sekiro.com', '60.00', 'game', '2024-04-12 15:18:15', '2024-04-12 15:18:15', 'sekiro is the game of year in 2019.', 'game_sekiro_thumb.jpg', 'game_sekiro_1.jpg'),
(2, 'rimworld', '9', 'https://rimworld.com', '30.00', 'game', '2024-04-12 15:21:53', '2024-04-12 15:21:53', 'rimworld is a strategy and buliding game.', 'game_rimworld_thumb.jpg', 'game_rimworld_1.jpg'),
(3, 'apexlegends', '8', 'https://apexlegends.com', '0.00', 'game', '2024-04-12 15:41:30', '2024-04-12 15:41:30', 'apex legends is a award-winning, free-to-play Hero Shooter from Respawn Entertainment.', 'game_apexlegends_thumb.jpg', 'game_apexlegends_1.jpg'),
(4, 'brotato', '10', 'https://brotato.com', '15.00', 'game', '2024-04-12 15:42:46', '2024-04-12 15:42:46', 'Brotato is a top-down arena shooter roguelite where you play a potato wielding up to 6 weapons at a time to fight off hordes of aliens.', 'game_bortato_thumb.jpg', 'game_bortato_1.jpg'),
(5, 'fallguys', '7', 'https://fallguys.com', '10.00', 'game', '2024-04-12 15:44:29', '2024-04-12 15:44:29', 'Fall Guys is a cross-platform massively multiplayer party royale game.', 'game_fallguys_thumb.jpg', 'game_fallguys_1.jpg'),
(6, 'gris', '10', 'https://gris.com', '5.00', 'game', '2024-04-12 15:45:33', '2024-04-12 15:45:33', 'Gris is a hopeful young girl lost in her own world, dealing with a painful experience in her life.', 'game_gris_thumb.jpg', 'game_gris_1.jpg'),
(7, 'ghostrunner', '8', 'https://ghostrunner.com', '30.00', 'game', '2024-04-12 15:46:38', '2024-04-12 15:46:38', 'Ghostrunner offers a unique single-player experience: fast-paced, violent combat, and an original setting that blends science fiction with post-apocalyptic themes.', 'game_ghostrunner_thumb.jpg', 'game_ghostrunner_1.jpg'),
(8, 'valorant', '9', 'https://valorant.com', '0.00', 'game', '2024-04-12 15:48:04', '2024-04-12 15:48:04', 'valorant is a shooting game like conter-strike by roit games.', 'game_valorant_thumb.jpg', 'game_valorant_1.jpg'),
(9, 'stellaris', '8', 'https://stellaris.com', '45.00', 'game', '2024-04-12 15:49:10', '2024-04-12 15:49:10', 'Explore a galaxy full of wonders in this sci-fi grand strategy game from Paradox Development Studios.', 'game_stellaris_thumb.jpg', 'game_stellaris_1.jpg'),
(10, 'astroneer', '9', 'https://astroneer.com', '25.00', 'game', '2024-04-12 15:51:58', '2024-04-12 15:51:58', 'astroneer is a muti-players coperate buliding game, also you need survive and explore different planets in the space.', 'game_astroneer_thumb.jpg', 'game_astroneer_1.jpg'),
(11, 'balatro', '9', 'https://balatro.com', '20.00', 'game', '2024-04-12 15:53:08', '2024-04-12 15:53:08', 'The poker roguelike. Balatro is a hypnotically satisfying deckbuilder where you play illegal poker hands, discover game-changing jokers, and trigger adrenaline-pumping, outrageous combos.', 'game_balatro_thumb.jpg', 'game_balatro_1.jpg'),
(12, 'monsterhunterworld', '8', 'https://monsterhunterworld.com', '60.00', 'game', '2024-04-12 15:54:14', '2024-04-12 15:54:14', 'Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.', 'game_monsterhunterworld_thumb.jpg', 'game_monsterhunterworld_1.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
