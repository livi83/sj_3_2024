-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 07:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webstranka_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `acceptance` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `acceptance`) VALUES
(45, 'a@a.sk', 'a@a.sk', 'a@a.sk', 1),
(50, '', 'b@b.sk', 'bbb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `name`, `text`) VALUES
(1, '/sablona_oop/assets/img/portfolio/portfolio1.jpg', 'Portfólio 1 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in facilisis sapien. Ut dapibus eros eros, non tempor massa facilisis eu. Donec sit amet rhoncus metus. Proin eu urna a ipsum congue posuere. Vivamus vitae placerat ex. In gravida mollis efficitur. Donec tempus magna viverra tortor vulputate aliquam. Sed volutpat urna vel risus malesuada, id placerat erat efficitur. Quisque elementum eros ac leo eleifend, eget viverra est efficitur.'),
(2, '/sablona_oop/assets/img/portfolio/portfolio2.jpg', 'Portfólio 2 ', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(3, '/sablona_oop/assets/img/portfolio/portfolio1.jpg', 'Portfólio 1 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in facilisis sapien. Ut dapibus eros eros, non tempor massa facilisis eu. Donec sit amet rhoncus metus. Proin eu urna a ipsum congue posuere. Vivamus vitae placerat ex. In gravida mollis efficitur. Donec tempus magna viverra tortor vulputate aliquam. Sed volutpat urna vel risus malesuada, id placerat erat efficitur. Quisque elementum eros ac leo eleifend, eget viverra est efficitur.'),
(4, '/sablona_oop/assets/img/portfolio/portfolio2.jpg', 'Portfólio 2 ', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(5, '/sablona_oop/assets/img/portfolio/portfolio2.jpg', 'Portfólio 2 ', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `question`, `answer`) VALUES
(1, 'Lorem ipsum dolor sit amet?', 'Mauris et justo ipsum. Ut ex ligula, ornare eget luctus in, laoreet et odio. In at consectetur risus. Aenean vel cursus est, sed eleifend nulla. '),
(2, 'Nulla ut est at velit semper tristique?', 'Donec aliquam nulla ut nibh blandit, in bibendum purus cursus. Integer faucibus purus libero, eu posuere nisi pharetra id. Etiam maximus arcu nec mauris vestibulum imperdiet. In vitae massa non risus lobortis eleifend. Maecenas nec lorem lectus. '),
(3, 'Nullam magna magna?', 'Donec elit eros, accumsan quis nulla et, varius iaculis libero. Aliquam eleifend ligula vitae vestibulum tempor. Mauris viverra sed ante vitae aliquam.'),
(4, 'Curabitur mauris lorem?', 'Praesent molestie maximus magna et eleifend. Integer porttitor pellentesque odio, quis vulputate mauris molestie at. Nunc posuere mi quis iaculis pretium. Donec gravida urna vel ipsum feugiat, non iaculis nulla ullamcorper. Nam dictum libero at nibh semper lobortis. ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@admin.sk', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
