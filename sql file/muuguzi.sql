-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 04:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muuguzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `heading` varchar(201) NOT NULL,
  `category` text NOT NULL,
  `description` varchar(901) NOT NULL,
  `keywords` text NOT NULL,
  `post_body` varchar(2001) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `heading`, `category`, `description`, `keywords`, `post_body`, `photo`, `user_id`) VALUES
(1, 'Hygiene and Nutrition', 'EEeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'Hygiene, Diet, Fitness', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 2),
(2, 'Muscle Health', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'Respiratory', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete).\r\nHere is a step-by-step guide on creating a CRUD system using PHP & MySQL:\r\nFirst of all, we will create a new MySQL database. Let us name the database as â€˜testâ€˜.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary.\r\ndbConnection.php\r\nIn below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 1),
(4, 'Hygiene and Nutrition', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'eeeeeee', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete).\r\nHere is a step-by-step guide on creating a CRUD system using PHP & MySQL:\r\nFirst of all, we will create a new MySQL database. Let us name the database as â€˜testâ€˜.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary.\r\ndbConnection.php\r\nIn below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 3),
(5, 'Hygiene and Nutrition', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'eeeeeee', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete).\r\nHere is a step-by-step guide on creating a CRUD system using PHP & MySQL:\r\nFirst of all, we will create a new MySQL database. Let us name the database as â€˜testâ€˜.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary.\r\ndbConnection.php\r\nIn below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 1),
(6, 'Hygiene and Nutrition', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'Muscle, Productivity', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 2),
(7, 'Hygiene and Nutrition', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'Diabetes', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 2),
(8, 'Hygiene and Nutrition', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'Muscle, Productivity', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 2),
(9, 'Hygiene and Nutrition', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'Diabetes', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 3),
(10, 'Hygiene and Nutrition', 'eeeeee', 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. \r\nAlternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 'Diabetes', 'In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.In this article, I will be presenting simple PHP & MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). Here is a step-by-step guide on creating a CRUD system using PHP & MySQL: First of all, we will create a new MySQL database. Let us name the database as ‘test‘.Now, we will create a config.php file which contains database connection code. This code connects to the MySQL database. This file is included in all PHP pages where database connection is necessary. dbConnection.php In below code, the database host name is localhost where username=root and password=root. The database test has been selected.', 'IMG-20240903-WA0016.jpg', 3),
(11, 'dddddd', 'ddddd', 'ddddd', '', 'dddddd', 'IMG-20240903-WA0016.jpg', 0),
(12, 'dddddd', 'ddddd', 'ddddd', 'kkkkkkk', 'dddddd', 'IMG-20240903-WA0016.jpg', 0),
(13, 'ffffffff', 'ffffff', 'ffffff', 'ffffff', 'ffffffffff', 'IMG-20240903-WA0016.jpg', 0),
(14, 'ffffffffff', 'sssffsfeeefef', 'sdvfbghnghfmnw', 'sertyhgcfd', 'awegrhntyhcxdwdef', 'IMG-20240903-WA0016.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `suggestion` varchar(601) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `suggestion`, `users_id`) VALUES
(5, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 1),
(6, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 1),
(7, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 1),
(8, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 1),
(9, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 1),
(10, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 1),
(11, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 0),
(12, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 0),
(13, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 0),
(14, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 0),
(15, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 0),
(16, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 0),
(17, 'If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP', 0),
(18, ' If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 1),
(19, ' If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 0),
(20, ' If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 0),
(21, ' If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 3),
(22, ' Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tipset`
--

CREATE TABLE `tipset` (
  `id` int(11) NOT NULL,
  `keywords` varchar(201) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(301) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipset`
--

INSERT INTO `tipset` (`id`, `keywords`, `title`, `category`, `users_id`) VALUES
(1, 'eeeeee', 'Learner', 'eeeee', 1),
(2, 'lmklnnjbhb', 'Pharmacist', 'hxtytcvuy', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email_address` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `title` text NOT NULL,
  `fullname` text NOT NULL,
  `photo` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email_address`, `password`, `title`, `fullname`, `photo`) VALUES
(1, 'EdgarMuga', 'edgarmuga46@gmail.com', '123456', 'Learner', 'Edgar Omondi Muga', 'IMG-20240903-WA0016.jpg'),
(2, 'EugeneMuga', 'eugenemuga@gmail.com', '123456', 'Learner', 'Helekiah Eugene Muga', 'IMG-20240903-WA0016.jpg'),
(3, 'EileenAtieno', 'eileenatieno@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Medical_Professional', 'Eileen Atieno Muga', 'IMG-20240903-WA0016.jpg'),
(4, 'EdmondOdhiambo', 'edmondodhiambo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Medical_Professional', 'Edmond Odhiambo Muga', 'IMG-20240903-WA0016.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipset`
--
ALTER TABLE `tipset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tipset`
--
ALTER TABLE `tipset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
