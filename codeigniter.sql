-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 06:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id` int(11) UNSIGNED NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `buttoncaption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `background` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `heading`, `background`, `title`, `content`, `image`) VALUES
(8, 'About Us', '20201222141223_3811275.jpg', 'A Cook for 25 Years a hobbiest for 30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '20201222141223_4145541.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addpost`
--

CREATE TABLE `addpost` (
  `id` int(11) UNSIGNED NOT NULL,
  `recipetitle` varchar(255) NOT NULL,
  `postby` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpost`
--

INSERT INTO `addpost` (`id`, `recipetitle`, `postby`, `date`, `image`, `equipment`, `ingredients`, `instructions`) VALUES
(7, 'eee', 'dd', '2020-12-10', '20201208051234_2890575.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book.'),
(8, 'dd', 'ddd', '2020-12-01', '20201209091205_1455396.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book'),
(9, 'kkk', 'ff', '2020-12-07', '20201209091202_2692720.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book'),
(10, 'ddd', 'aa', '2020-12-02', '20201209091219_4420071.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book'),
(11, 'ss', 'ssa', '2020-12-11', '20201209091242_8406224.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book'),
(12, 'kkk', 'kkjj', '2020-12-03', '20201209091202_213292.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book'),
(13, 'gg', 'ggg', '2020-12-02', '20201210121218_4007188.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500'),
(14, 'sss', 'aaa45', '2020-12-11', '20201210121241_8944873.jpeg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500'),
(15, 'aaa34', '55ggg', '2020-12-08', '20201210121201_5410712.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500'),
(16, 'kk98', 'hhh67', '2020-12-08', '20201210121221_8599034.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500'),
(17, 'llk8', 'jjk7', '2020-12-11', '20201210121243_3630368.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500'),
(18, 'llkk', 'lll', '2020-12-17', '20201210121209_5109114.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500'),
(19, '', '', '0000-00-00', '', '', '', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `anotherpage`
--

CREATE TABLE `anotherpage` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `postby` varchar(255) NOT NULL,
  `background` text NOT NULL,
  `paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anotherpage`
--

INSERT INTO `anotherpage` (`id`, `content`, `postby`, `background`, `paragraph`) VALUES
(8, 'Cooking is about passion,so it may look slightly temperamental in a way that it\'s too assertive to the naked eye.', 'GORDON RAMSAY', '20201222131206_6778464.jpg', 'Easy Meals Forum');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `username`, `name`, `email`, `password`, `status`) VALUES
(5, 'wahidaema', 'wahida', 'wahida@ema.com', '81dc9bdb52d04dc20036dbd8313ed055', '1'),
(6, 'wahidaema', '', 'wahidaema9096@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1'),
(7, 'wahidaema007', '', 'wahidaema9096@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
(8, 'wahidaema007', '', 'wahida@ema.com', '81dc9bdb52d04dc20036dbd8313ed055', '1'),
(9, 'wahidaema007', '', 'wahida@ema.com', '81dc9bdb52d04dc20036dbd8313ed055', '1'),
(10, 'wahidaema', '', 'wahida@ema.com', '81dc9bdb52d04dc20036dbd8313ed055', '1');

-- --------------------------------------------------------

--
-- Table structure for table `author2`
--

CREATE TABLE `author2` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author2`
--

INSERT INTO `author2` (`username`, `name`, `email`, `password`, `status`) VALUES
('admin2', '', 'Admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0'),
('shormi', '', 'Admin@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `buttoncaption` varchar(255) NOT NULL,
  `background` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ctmessage`
--

CREATE TABLE `ctmessage` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(10500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctmessage`
--

INSERT INTO `ctmessage` (`id`, `name`, `email`, `message`) VALUES
(3, 'sdsdaa', 'emaAdmin@gmail.com', '01245nhhhgghhh'),
(5, 'kaj', 'hoi@125', '1245'),
(6, 'wahida', 'wahidaema9096@gmail.com', 'hi'),
(7, 'James King', 'wahida@ema.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `dessertsection`
--

CREATE TABLE `dessertsection` (
  `id` int(11) UNSIGNED NOT NULL,
  `recipetitle` varchar(255) NOT NULL,
  `postby` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `buttoncaption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `buttoncaption` varchar(255) NOT NULL,
  `logotext` varchar(255) NOT NULL,
  `background` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `heading`, `paragraph`, `buttoncaption`, `logotext`, `background`) VALUES
(31, 'Make Cooking Easier', 'Best Cooking Blog Ever', 'Sign Up', 'Tinysalt.Studio', '20201222131233_7431018.png');

-- --------------------------------------------------------

--
-- Table structure for table `maincourse`
--

CREATE TABLE `maincourse` (
  `id` int(11) UNSIGNED NOT NULL,
  `recipetitle` varchar(255) NOT NULL,
  `postby` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `buttoncaption` varchar(255) NOT NULL,
  `like_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maincourse`
--

INSERT INTO `maincourse` (`id`, `recipetitle`, `postby`, `date`, `image`, `content`, `buttoncaption`, `like_post`) VALUES
(27, 'Lemon Sause', 'by Admin', '2020-12-02', '20201222141209_9785409.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions  of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  a type specimen book.', 'Read more', 1),
(28, 'Solomon\'s', 'by Admin', '2020-12-03', '20201222141231_2632896.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 3),
(29, 'Steaks Bacon', 'by Admin', '2020-12-11', '20201222141252_4192665.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 5),
(30, 'Spicy Orange', 'by Admin', '2020-12-17', '20201222141254_2968862.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 0),
(31, 'A Modo Mio', 'by Admin', '2020-12-23', '20201222141244_8143596.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 1),
(32, 'Maine Lobster Roll', 'by Admin', '2020-12-18', '20201222141235_1912178.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 0),
(33, 'Bluebery Smoothie', 'wahidaema007', '2020-12-02', '20201223201233_7865742.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 0),
(34, 'Orange sauce', 'wahidaema007', '2020-12-16', '20201223201225_4785991.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 4),
(35, 'Chicken Nachoes', 'wahidaema007', '2020-12-17', '20201223201252_2074342.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read more', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipeindex`
--

CREATE TABLE `recipeindex` (
  `id` int(11) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `background` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipeindex`
--

INSERT INTO `recipeindex` (`id`, `heading`, `background`) VALUES
(22, 'Recipe Index', '20201222131221_2584148.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `relatedposts`
--

CREATE TABLE `relatedposts` (
  `id` int(11) UNSIGNED NOT NULL,
  `recipetitle` varchar(255) NOT NULL,
  `postby` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `buttoncaption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relatedposts`
--

INSERT INTO `relatedposts` (`id`, `recipetitle`, `postby`, `date`, `image`, `content`, `buttoncaption`) VALUES
(1, 'hi', '', '0000-00-00', '20201207121256_3255542.jpg', '', ''),
(5, 'qq', 'qq', '2020-12-07', '20201209051216_2548655.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s', 'ww'),
(6, '11w', '22w', '2020-12-14', '20201209051243_1380973.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s', 'ss'),
(7, 'ttt', 'tt', '2020-12-16', '20201209051202_3751731.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s', 'rr'),
(8, 'qq', 'ee', '2020-12-15', '20201209051227_760654.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500see', 'ee'),
(9, 'qq', 'wwww114423', '2020-12-07', '20201209051253_4120584.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s', 'ww'),
(10, 'ddd', 'lojhg', '2020-12-03', '20201214171243_204504.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `teamsection`
--

CREATE TABLE `teamsection` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teamsection`
--

INSERT INTO `teamsection` (`id`, `name`, `position`, `content`, `profile`) VALUES
(12, 'Camilia', 'Content Writter', 'Lorem ipsum dolor sit amet consectetur elit. Eum eveniet soluta hic sunt sit reprehenderit.', '20201222141258_8462154.jpg'),
(13, 'James King', 'Web Designer', 'Lorem ipsum dolor sit amet consectetur elit. Eum eveniet soluta hic sunt sit reprehenderit.', '20201222141234_7834184.jpg'),
(14, 'Watson', 'UI Designer', 'Lorem ipsum dolor sit amet consectetur elit. Eum eveniet soluta hic sunt sit reprehenderit.', '20201222141206_9547805.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `status`) VALUES
(1, 'ema', 'ema', 'ema10@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'superadmin'),
(2, 'ema', 'ema', 'ema10@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addpost`
--
ALTER TABLE `addpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anotherpage`
--
ALTER TABLE `anotherpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctmessage`
--
ALTER TABLE `ctmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dessertsection`
--
ALTER TABLE `dessertsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maincourse`
--
ALTER TABLE `maincourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipeindex`
--
ALTER TABLE `recipeindex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relatedposts`
--
ALTER TABLE `relatedposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamsection`
--
ALTER TABLE `teamsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addpost`
--
ALTER TABLE `addpost`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `anotherpage`
--
ALTER TABLE `anotherpage`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ctmessage`
--
ALTER TABLE `ctmessage`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dessertsection`
--
ALTER TABLE `dessertsection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `maincourse`
--
ALTER TABLE `maincourse`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `recipeindex`
--
ALTER TABLE `recipeindex`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `relatedposts`
--
ALTER TABLE `relatedposts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teamsection`
--
ALTER TABLE `teamsection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
