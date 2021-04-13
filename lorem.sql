-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Wersja serwera: 5.7.31
-- Wersja PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `lorem`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `title` varchar(199) COLLATE utf8_polish_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `article`
--

INSERT INTO `article` (`id`, `img`, `title`, `description`) VALUES
(3, 'images\\img5.jpg', 'Lorem Ipsum 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac volutpat erat. Ut nunc purus, congue blandit nunc non, interdum scelerisque leo. Pellentesque suscipit urna ut felis pharetra gravida. Proin consectetur arcu nec risus pretium tristique sed eget nisl. Curabitur aliquam mi at lacus dignissim suscipit. Quisque luctus nunc felis, ac pulvinar massa ultrices in. Nulla egestas tellus sed dui accumsan facilisis. Donec eget orci eget urna molestie laoreet sed dapibus dui. Sed nulla ipsum, semper ac quam nec, tincidunt tincidunt risus. Fusce id massa vitae nibh mollis efficitur. Nam eu commodo arcu. In posuere lacus magna, vel sodales tortor imperdiet vel. Nunc facilisis iaculis est, non dignissim sapien auctor ac. Curabitur in nibh maximus, fermentum velit ac, varius ante. Nullam et congue orci.'),
(17, 'images\\img3.jpg', 'Lorem Ipsum 5', 'Pellentesque in tincidunt velit. Morbi a augue fringilla, sollicitudin felis vel, dignissim turpis. Quisque ac pretium purus. Nunc laoreet magna massa, et maximus velit dignissim vel. Morbi viverra, nunc eu pellentesque posuere, sem augue feugiat nibh, et posuere massa ipsum sed neque. Sed et urna sit amet leo condimentum placerat a at neque. Mauris mollis suscipit imperdiet. Etiam vulputate lobortis tristique. Cras placerat egestas tincidunt. Fusce ipsum nulla, fermentum nec tortor ut, laoreet condimentum libero.'),
(18, 'images\\img1.jpg', 'Lorem Ipsum 4', 'Nullam vehicula eros a erat vestibulum auctor. Phasellus a ante eget ligula tincidunt auctor. Quisque posuere posuere consequat. Fusce vitae dui pulvinar, gravida quam et, pretium elit. Pellentesque id tempus mi, quis porttitor orci. Integer hendrerit varius ligula, commodo convallis elit rhoncus sed. Praesent sollicitudin, purus vitae auctor lacinia, leo sapien sodales odio, nec ullamcorper ipsum metus in lectus. Cras semper, dolor at vulputate bibendum, nisi tortor suscipit diam, ac tristique felis turpis a erat. In pretium mauris nec erat sollicitudin finibus at a libero. Nullam eu porta lectus. Cras id tortor dignissim, efficitur diam et, scelerisque ligula.'),
(19, 'images\\img5.jpg', 'Lorem Ipsum 3', 'Mauris faucibus, felis in pulvinar luctus, dolor nibh consectetur elit, nec elementum dui lacus sit amet ligula. Vestibulum varius vestibulum metus, at finibus risus finibus eget. Donec varius aliquam nibh vel fringilla. Maecenas gravida tempus semper. Suspendisse tempus pellentesque mi, et maximus leo pulvinar sed. Morbi eleifend non arcu vitae egestas. Morbi euismod porta dui, quis tincidunt tortor porta aliquam. Vivamus malesuada leo sollicitudin turpis fringilla sodales. Morbi ut neque tellus. In a diam nec lectus fermentum dapibus'),
(20, 'images\\img2.jpg', 'Lorem Ipsum 2', 'Nullam vehicula eros a erat vestibulum auctor. Phasellus a ante eget ligula tincidunt auctor. Quisque posuere posuere consequat. Fusce vitae dui pulvinar, gravida quam et, pretium elit. Pellentesque id tempus mi, quis porttitor orci. Integer hendrerit varius ligula, commodo convallis elit rhoncus sed. Praesent sollicitudin, purus vitae auctor lacinia, leo sapien sodales odio, nec ullamcorper ipsum metus in lectus. Cras semper, dolor at vulputate bibendum, nisi tortor suscipit diam, ac tristique felis turpis a erat. In pretium mauris nec erat sollicitudin finibus at a libero. Nullam eu porta lectus. Cras id tortor dignissim, efficitur diam et, scelerisque ligula.'),
(21, 'images\\img4.jpg', 'Lorem Ipsum 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac volutpat erat. Ut nunc purus, congue blandit nunc non, interdum scelerisque leo. Pellentesque suscipit urna ut felis pharetra gravida. Proin consectetur arcu nec risus pretium tristique sed eget nisl. Curabitur aliquam mi at lacus dignissim suscipit. Quisque luctus nunc felis, ac pulvinar massa ultrices in. Nulla egestas tellus sed dui accumsan facilisis. Donec eget orci eget urna molestie laoreet sed dapibus dui. Sed nulla ipsum, semper ac quam nec, tincidunt tincidunt risus. Fusce id massa vitae nibh mollis efficitur. Nam eu commodo arcu. In posuere lacus magna, vel sodales tortor imperdiet vel. Nunc facilisis iaculis est, non dignissim sapien auctor ac. Curabitur in nibh maximus, fermentum velit ac, varius ante. Nullam et congue orci.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
