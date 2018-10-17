-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 08:59 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `email` varchar(64) NOT NULL,
  `name` varchar(60) NOT NULL,
  `profile_pic` text NOT NULL,
  `photo_id` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`email`, `name`, `profile_pic`, `photo_id`, `comments`) VALUES
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '3230723523_539d4ebe9a_b.jpg', 'a new errorII'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '4727440298_3f2d891f02_z.jpg', 'nice'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '3394600192_f72bb0b98b_z.jpg', 'hello'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '4671594023_b41c2ee662.jpg', 'nice one'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '5123859750_1ac86128e2_b.jpg', 'beautiful'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '5227428607_6b946a83f1_b.jpg', 'awesome'),
('chandank.jaiswal@gmail.com', 'Chandan Kumar', 'chandan.jpg', '5333217436_ae8c784d12.jpg', 'khub bhaalo'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '6815445970_340e9a4994_h.jpg', 'nice'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '8354331500_be4910014c_b.jpg', 'hello'),
('sonjac797@outlook.com', 'Sonia Chaudhary', 'sonia.jpg', '8448841100_58fe2cd0a9_k.jpg', 'nice one'),
('vijayalaxmi1514@gmail.com', 'Vijaylaxmi', '', '8478255627_fbf85b1552_b.jpg', 'beautiful'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '8725975478_acab7bdf09_b.jpg', 'awesome'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '9465524831_880696a71a_b.jpg', 'khub bhaalo'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '16944349157_7099875b4c_k.jpg', 'nice'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '25943542447_9182a681ca_k.jpg', 'hello'),
('chandank.jaiswal@gmail.com', 'Chandan Kumar', 'chandan.jpg', '17389487171_f8b51ee48c_b.jpg', 'nice one'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '18149663983_1fc5dff5be_k.jpg', 'beautiful'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '19037945904_98aed551ba.jpg', 'awesome'),
('sonjac797@outlook.com', 'Sonia Chaudhary', 'sonia.jpg', '20756817409_1ca2d8c1db_k.jpg', 'khub bhaalo'),
('vijayalaxmi1514@gmail.com', 'Vijaylaxmi', '', '25740376760_3f5217a0f1_b.jpg', 'wow'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '4727440298_3f2d891f02_z.jpg', 'nice'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '3394600192_f72bb0b98b_z.jpg', 'hello'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '4671594023_b41c2ee662.jpg', 'nice one'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '5123859750_1ac86128e2_b.jpg', 'beautiful'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '5227428607_6b946a83f1_b.jpg', 'awesome'),
('chandank.jaiswal@gmail.com', 'Chandan Kumar', 'chandan.jpg', '5333217436_ae8c784d12.jpg', 'khub bhaalo'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '6815445970_340e9a4994_h.jpg', 'nice'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '8354331500_be4910014c_b.jpg', 'hello'),
('sonjac797@outlook.com', 'Sonia Chaudhary', 'sonia.jpg', '8448841100_58fe2cd0a9_k.jpg', 'nice one'),
('vijayalaxmi1514@gmail.com', 'Vijaylaxmi', '', '8478255627_fbf85b1552_b.jpg', 'beautiful'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '8725975478_acab7bdf09_b.jpg', 'awesome'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '9465524831_880696a71a_b.jpg', 'khub bhaalo'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '16944349157_7099875b4c_k.jpg', 'nice'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '25943542447_9182a681ca_k.jpg', 'hello'),
('chandank.jaiswal@gmail.com', 'Chandan Kumar', 'chandan.jpg', '17389487171_f8b51ee48c_b.jpg', 'nice one'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '18149663983_1fc5dff5be_k.jpg', 'beautiful'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '19037945904_98aed551ba.jpg', 'awesome'),
('sonjac797@outlook.com', 'Sonia Chaudhary', 'sonia.jpg', '20756817409_1ca2d8c1db_k.jpg', 'khub bhaalo'),
('vijayalaxmi1514@gmail.com', 'Vijaylaxmi', '', '25740376760_3f5217a0f1_b.jpg', 'wow'),
('dxk.r47@gmail.com', 'Dhiraj kumar', 'dhiraj.jpg', '18149663983_1fc5dff5be_k.jpg', 'Nice One'),
('dxk.r47@gmail.com', 'Dhiraj kumar', 'dhiraj.jpg', '20756817409_1ca2d8c1db_k.jpg', 'classic'),
('dxk.r47@gmail.com', 'Dhiraj kumar', 'dhiraj.jpg', '17389487171_f8b51ee48c_b.jpg', 'Nice view'),
('dxk.r47@gmail.com', 'Dhiraj kumar', 'dhiraj.jpg', '7843851185b6632aacd7c03.609886178.jpg', 'snowy'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '7843851185b6632aacd7c03.609886178.jpg', 'Chilling'),
('admin@flickr', 'Admin', 'admin.png', '17389487171_f8b51ee48c_b.jpg', 'Nice Lake view'),
('ashu@gmail.com', 'Ashutosh', '5428717405b68f05f7c45f7.22585299black-ops-3-wallpapers-mobile-On-wallpaper-hd.jpg', '13057467685b68f0bb84d262.597734049.jpg', 'One of my fav pic'),
('sonjac797@outlook.com', 'Sonia Chaudhary', 'sonia.jpg', '3230723523_539d4ebe9a_b.jpg', 'Nice capture'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '4727440298_3f2d891f02_z.jpg', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `photo_id` text NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`photo_id`, `email`) VALUES
('3230723523_539d4ebe9a_b.jpg', 'dxk.r47@gmail.com'),
('4727440298_3f2d891f02_z.jpg', 'dxk.r47@gmail.com'),
('3394600192_f72bb0b98b_z.jpg', 'dxk.r47@gmail.com'),
('4671594023_b41c2ee662.jpg', 'christinakoyel@gmail.com'),
('5123859750_1ac86128e2_b.jpg', 'dxk.r47@gmail.com'),
('5227428607_6b946a83f1_b.jpg', 'bkm.123@gmail.com'),
('5333217436_ae8c784d12.jpg', 'chandank.jaiswal@gmail.com'),
('6815445970_340e9a4994_h.jpg', 'christinakoyel@gmail.com'),
('8354331500_be4910014c_b.jpg', 'dxk.r47@gmail.com'),
('8448841100_58fe2cd0a9_k.jpg', 'sonjac797@outlook.com'),
('8478255627_fbf85b1552_b.jpg', 'vijayalaxmi1514@gmail.com'),
('8725975478_acab7bdf09_b.jpg', 'dxk.r47@gmail.com'),
('9465524831_880696a71a_b.jpg', 'christinakoyel@gmail.com'),
('16944349157_7099875b4c_k.jpg', 'dxk.r47@gmail.com'),
('25943542447_9182a681ca_k.jpg', 'bkm.123@gmail.com'),
('17389487171_f8b51ee48c_b.jpg', 'chandank.jaiswal@gmail.com'),
('18149663983_1fc5dff5be_k.jpg', 'christinakoyel@gmail.com'),
('19037945904_98aed551ba.jpg', 'dxk.r47@gmail.com'),
('20756817409_1ca2d8c1db_k.jpg', 'sonjac797@outlook.com'),
('25740376760_3f5217a0f1_b.jpg', 'vijayalaxmi1514@gmail.com'),
('4727440298_3f2d891f02_z.jpg', 'dxk.r47@gmail.com'),
('3394600192_f72bb0b98b_z.jpg', 'dxk.r47@gmail.com'),
('4671594023_b41c2ee662.jpg', 'christinakoyel@gmail.com'),
('5123859750_1ac86128e2_b.jpg', 'dxk.r47@gmail.com'),
('5227428607_6b946a83f1_b.jpg', 'bkm.123@gmail.com'),
('5333217436_ae8c784d12.jpg', 'chandank.jaiswal@gmail.com'),
('6815445970_340e9a4994_h.jpg', 'christinakoyel@gmail.com'),
('8354331500_be4910014c_b.jpg', 'dxk.r47@gmail.com'),
('8448841100_58fe2cd0a9_k.jpg', 'sonjac797@outlook.com'),
('8478255627_fbf85b1552_b.jpg', 'vijayalaxmi1514@gmail.com'),
('8725975478_acab7bdf09_b.jpg', 'dxk.r47@gmail.com'),
('9465524831_880696a71a_b.jpg', 'christinakoyel@gmail.com'),
('16944349157_7099875b4c_k.jpg', 'dxk.r47@gmail.com'),
('25943542447_9182a681ca_k.jpg', 'bkm.123@gmail.com'),
('17389487171_f8b51ee48c_b.jpg', 'chandank.jaiswal@gmail.com'),
('18149663983_1fc5dff5be_k.jpg', 'christinakoyel@gmail.com'),
('19037945904_98aed551ba.jpg', 'dxk.r47@gmail.com'),
('20756817409_1ca2d8c1db_k.jpg', 'sonjac797@outlook.com'),
('25740376760_3f5217a0f1_b.jpg', 'vijayalaxmi1514@gmail.com'),
('18149663983_1fc5dff5be_k.jpg', 'dxk.r47@gmail.com'),
('20756817409_1ca2d8c1db_k.jpg', 'dxk.r47@gmail.com'),
('17389487171_f8b51ee48c_b.jpg', 'dxk.r47@gmail.com'),
('7843851185b6632aacd7c03.609886178.jpg', 'dxk.r47@gmail.com'),
('7843851185b6632aacd7c03.609886178.jpg', 'bkm.123@gmail.com'),
('17389487171_f8b51ee48c_b.jpg', 'admin@flickr'),
('7621360785b682851549600.1282033717.jpg', 'kundan@gmail.com'),
('4727440298_3f2d891f02_z.jpg', 'sd.sonu@gmail.com'),
('3230723523_539d4ebe9a_b.jpg', 'sd.sonu@gmail.com'),
('4671594023_b41c2ee662.jpg', 'kundan@gmail.com'),
('3394600192_f72bb0b98b_z.jpg', 'kundan@gmail.com'),
('7843851185b6632aacd7c03.609886178.jpg', 'kundan@gmail.com'),
('2553361195b6633508e70f8.863159703.jpg', 'kundan@gmail.com'),
('2553361195b6633508e70f8.863159703.jpg', 'kundan@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'kundan@gmail.com'),
('4727440298_3f2d891f02_z.jpg', 'sd.sonu@gmail.com'),
('4727440298_3f2d891f02_z.jpg', 'sd.sonu@gmail.com'),
('4727440298_3f2d891f02_z.jpg', 'sd.sonu@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'kundan@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'kundan@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'kundan@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'kundan@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'kundan@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'kundan@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'kundan@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'kundan@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'kundan@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'kundan@gmail.com'),
('2553361195b6633508e70f8.863159703.jpg', 'kundan@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'kundan@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'sd.sonu@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'sd.sonu@gmail.com'),
('13102022295b6632409356b7.3632278416.jpg', 'sd.sonu@gmail.com'),
('8354331500_be4910014c_b.jpg', 'sd.sonu@gmail.com'),
('6815445970_340e9a4994_h.jpg', 'sd.sonu@gmail.com'),
('16944349157_7099875b4c_k.jpg', 'sd.sonu@gmail.com'),
('19037945904_98aed551ba.jpg', 'sd.sonu@gmail.com'),
('7621360785b682851549600.1282033717.jpg', 'chandank.jaiswal@gmail.com'),
('13057467685b68f0bb84d262.597734049.jpg', 'ashu@gmail.com'),
('7843851185b6632aacd7c03.609886178.jpg', 'sonjac797@outlook.com'),
('13057467685b68f0bb84d262.597734049.jpg', 'sonjac797@outlook.com'),
('2553361195b6633508e70f8.863159703.jpg', 'sonjac797@outlook.com'),
('5333217436_ae8c784d12.jpg', 'sonjac797@outlook.com'),
('8354331500_be4910014c_b.jpg', 'sonjac797@outlook.com'),
('8478255627_fbf85b1552_b.jpg', 'sonjac797@outlook.com'),
('5227428607_6b946a83f1_b.jpg', 'sonjac797@outlook.com'),
('4671594023_b41c2ee662.jpg', 'sonjac797@outlook.com'),
('3230723523_539d4ebe9a_b.jpg', 'sonjac797@outlook.com'),
('13057467685b68f0bb84d262.597734049.jpg', 'bkm.123@gmail.com'),
('13057467685b68f0bb84d262.597734049.jpg', 'bkm.123@gmail.com'),
('13057467685b68f0bb84d262.597734049.jpg', 'admin@flickr'),
('13057467685b68f0bb84d262.597734049.jpg', 'admin@flickr');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `email` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `profile_pic` text NOT NULL,
  `photo_id` text NOT NULL,
  `likes` int(7) NOT NULL,
  `comments` int(7) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`email`, `name`, `profile_pic`, `photo_id`, `likes`, `comments`, `title`, `content`, `date`) VALUES
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '3230723523_539d4ebe9a_b.jpg', 15, 3, 'a new errorII', 'follow me on facebook : www.facebook.com/pages/Marta-Bevacqua-Photography/1362332?', '2018-07-04'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '4727440298_3f2d891f02_z.jpg', 19, 6, 'scuba diving', '', '2018-07-05'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '3394600192_f72bb0b98b_z.jpg', 11, 6, 'dark art', '', '2018-07-06'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '4671594023_b41c2ee662.jpg', 14, 5, 'california', '', '2018-07-07'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '5123859750_1ac86128e2_b.jpg', 2, 20, 'game center', '', '2018-07-08'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '5227428607_6b946a83f1_b.jpg', 24, 4, 'a new errorII', 'follow me on facebook : www.facebook.com/pages/Marta-Bevacqua-Photography/1362332?', '2018-07-08'),
('chandank.jaiswal@gmail.com', 'Chandan Kumar', 'chandan.jpg', '5333217436_ae8c784d12.jpg', 6, 1, 'scuba diving', '', '2018-07-09'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '6815445970_340e9a4994_h.jpg', 21, 4, 'dark art', '', '2018-07-09'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '8354331500_be4910014c_b.jpg', 6, 0, 'california', '', '2018-07-09'),
('sonjac797@outlook.com', 'Sonia Chaudhary', 'sonia.jpg', '8448841100_58fe2cd0a9_k.jpg', 22, 2, 'game center', '', '2018-07-09'),
('vijayalaxmi1514@gmail.com', 'Vijaylaxmi', 'viji.jpg', '8478255627_fbf85b1552_b.jpg', 1, 1, 'Spicy', '', '2018-07-09'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '8725975478_acab7bdf09_b.jpg', 11, 6, 'dark art', '', '2018-07-10'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '9465524831_880696a71a_b.jpg', 42, 5, 'california', '', '2018-07-04'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '16944349157_7099875b4c_k.jpg', 3, 20, 'game center', '', '2018-07-04'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '25943542447_9182a681ca_k.jpg', 3, 4, 'a new errorII', 'follow me on facebook : www.facebook.com/pages/Marta-Bevacqua-Photography/1362332?', '2018-07-04'),
('chandank.jaiswal@gmail.com', 'Chandan Kumar', 'chandan.jpg', '17389487171_f8b51ee48c_b.jpg', 15, 2, 'scuba diving', '', '2018-07-24'),
('christinakoyel@gmail.com', 'Koyel Pramanick', 'koyel.jpg', '18149663983_1fc5dff5be_k.jpg', 22, 4, 'dark art', '', '2018-07-29'),
('dxk.r47@gmail.com', 'Dhiraj Kumar', 'dhiraj.jpg', '19037945904_98aed551ba.jpg', 93, 0, 'california', '', '2018-07-04'),
('sonjac797@outlook.com', 'Sonia Chaudhary', 'sonia.jpg', '20756817409_1ca2d8c1db_k.jpg', 33, 2, 'game center', '', '2018-07-25'),
('vijayalaxmi1514@gmail.com', 'Vijaylaxmi', 'viji.jpg', '25740376760_3f5217a0f1_b.jpg', 41, 1, 'turtle', '', '2018-07-14'),
('dxk.r47@gmail.com', 'Dhiraj kumar', 'dhiraj.jpg', '13102022295b6632409356b7.3632278416.jpg', 14, 0, 'Sunrise', '', '2018-08-05'),
('dxk.r47@gmail.com', 'Dhiraj kumar', 'dhiraj.jpg', '7843851185b6632aacd7c03.609886178.jpg', 8, 0, 'Mountain', '', '2018-08-05'),
('dxk.r47@gmail.com', 'Dhiraj kumar', 'dhiraj.jpg', '2553361195b6633508e70f8.863159703.jpg', 10, 0, 'clouds', 'super nova', '2018-08-05'),
('kundan@gmail.com', 'Kundan', '16956438785b682738a33c29.48173379e1ebecb5e53267d0a971f37fb80938e2.png', '7621360785b682851549600.1282033717.jpg', 11, 0, 'Snowy Field', 'snowy crops ', '2018-08-06'),
('ashu@gmail.com', 'Ashutosh', '5428717405b68f05f7c45f7.22585299black-ops-3-wallpapers-mobile-On-wallpaper-hd.jpg', '13057467685b68f0bb84d262.597734049.jpg', 6, 1, 'The Sun', 'Ultimate source of Energy', '2018-08-07'),
('bkm.123@gmail.com', 'Birju Kumar', 'birju.jpg', '10697235065b690f40c34e23.241810782880x1800.jpg', 0, 0, 'way', '', '2018-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(32) NOT NULL,
  `profile_pic` varchar(200) NOT NULL DEFAULT 'user.png',
  `gender` varchar(8) NOT NULL,
  `hit_upload` float NOT NULL,
  `hit_like` float NOT NULL,
  `hit_comment` float NOT NULL,
  `online_time` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `profile_pic`, `gender`, `hit_upload`, `hit_like`, `hit_comment`, `online_time`) VALUES
('admin@flickr', 'admin', 'Admin', 'admin.png', 'Male', 0, 0, 0, 0),
('ashu@gmail.com', 'ashu', 'Ashutosh', '5428717405b68f05f7c45f7.22585299black-ops-3-wallpapers-mobile-On-wallpaper-hd.jpg', 'Male', 1, 4, 3, 20.65),
('bkm.123@gmail.com', '78945612', 'Birju Kumar', 'birju.jpg', 'Male', 1, 4, 3, 2.6),
('chandank.jaiswal@gmail.com', '741852', 'Chandan Kumar', 'chandan.jpg', 'Male', 1.5, 2.5, 1.5, 34.1333),
('christinakoyel@gmail.com', 'KoyelKai', 'Koyel Pramanick', 'koyel.jpg', 'Female', 15, 15, 15, 4),
('dxk.r47@gmail.com', '12345678', 'Dhiraj kumar', 'dhiraj.jpg', 'Male', 1, 4, 3, 2.68333),
('kundan@gmail.com', 'kundan', 'Kundan', '16956438785b682738a33c29.48173379e1ebecb5e53267d0a971f37fb80938e2.png', 'Male', 1.5, 12, 5, 11.5167),
('rahul123@gmail.com', 'rahul', 'Rahul Gupta', 'rahul.jpg', 'Male', 0.3, 10, 7, 2),
('ren@gmail.com', 'ren@123', 'Reinson', 'ren.jpg', 'Female', 0.2, 5, 3, 10),
('riasen@gmail.com', 'ria@sen', 'Ria Sen', 'ria.jpg', 'Female', 0.5, 15, 13, 1.5),
('rohit123@gmail.com', 'rohit', 'Rohit Kumar', 'rohit.jpg', 'Male', 0.111, 15, 3, 5),
('sd.sonu@gmail.com', 'sonu', 'sidharth', '13487527855b6826a05eef37.25578182movies_wall-e_desktop_1920x1200_hd-wallpaper-1033710.jpg', 'Male', 1.5, 2.5, 1.5, 1.625),
('sonjac797@outlook.com', 'sonia123', 'Sonia Chaudhary', 'sonia.jpg', 'Female', 1, 8, 3.5, 10.5667),
('tsarkar@gmail.com', 'tamal', 'Tamal Sarkar', 'sarkar.jpg', 'Male', 1, 3, 10, 3.5),
('vijayalaxmi1514@gmail.com', 'viji123456', 'Vijaylaxmi', 'viji.jpg', 'Female', 8, 18, 28, 2.22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
