-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2014 at 09:36 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `published_time` datetime NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `user_id`, `title`, `description`, `status`, `published_time`) VALUES
(9, 46, 'About me', '<p>\r\n my name is Risat</p>\r\n', '1', '2014-05-08 17:05:41'),
(10, 46, 'About my love', '<p>\r\n her name is riya</p>\r\n', '0', '2014-05-08 17:05:02'),
(13, 54, 'dfghj', '<p>\r\n ghfhfh</p>\r\n<p>\r\n <strong>gfhjb</strong></p>\r\n', '1', '2014-05-08 21:05:54'),
(14, 46, 'my friend', '<p>\r\n sujon(cr),minhaj,</p>\r\n', '1', '2014-05-11 16:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `my_cv`
--

CREATE TABLE IF NOT EXISTS `my_cv` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `city` varchar(10) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(6) NOT NULL,
  `country` varchar(10) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 NOT NULL,
  `zip_code` int(11) NOT NULL,
  `joining_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `my_cv`
--

INSERT INTO `my_cv` (`user_id`, `first_name`, `last_name`, `email`, `password`, `address`, `city`, `gender`, `country`, `mobile`, `zip_code`, `joining_date`) VALUES
(31, 'sam', 'eka', 'sam26@gmail.com', 'ekolove_u', 'agrabad', 'chitagong', 'Male', 'Bangladesh', '01555555555', 2600, '0000-00-00 00:00:00'),
(47, 'sajan', 'poddar', 'sajan@gmail.com', '8f46d1887adc7c05406d95f37726bbb7', 'laksmipur', 'noakhali', 'Male', 'Bangladesh', '01712548697', 3698, '0000-00-00 00:00:00'),
(54, 'Mausumi', 'Akter', 'mau@gmail.com', '361228d0a65bd2355b029b2fe0aad7c6', 'kalitara', 'noakhali', 'female', 'Bangladesh', '01840840383', 3201, '0000-00-00 00:00:00'),
(38, 'tushar', 'mahmud', 'tushar_cste@gmail.co', '123344', 'cowmuhony', 'noakhali', 'Male', 'Bangladesh', '01723456987', 3200, '0000-00-00 00:00:00'),
(49, 'suvrajit', 'roy', 'suvro@yahoo.com', '74dba363ca9335f726c9b2450790985a', 'mondolpara', 'noakhali', 'Male', 'Bangladesh', '01675086158', 3210, '0000-00-00 00:00:00'),
(46, 'risat', 'saha', 'saha@gmail.com', '3e8d3ff94015e3db10c9cf45aada9d65', '                                                                    samner block                                                                        ', 'noakhali', 'male', 'India', '0167864589', 1200, '0000-00-00 00:00:00'),
(53, 'iren', 'sultana', 'iren@gmail.com', '4b3e3c2f99046f92a61bab6775848577', 'chowmuhony', 'noakhali', 'female', 'Bangladesh', '01676133160', 3210, '0000-00-00 00:00:00'),
(55, 'Backlog', 'Sujon', 'rateralo@gmail.com', '730056bfa3536c8c6f7e70e896963d61', 'ASH', 'Dinajpur', 'male', 'Bangladesh', '01822447078', 5200, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
