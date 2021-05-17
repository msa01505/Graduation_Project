-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 06:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `israa`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` text NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  `brand_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `brand_img`, `brand_link`) VALUES
(1, 'adidas', '1.jpg', 'adidas.html'),
(2, 'hegabi', '2.jpg', 'hejabi.html'),
(3, 'ravin', '3.jpg', 'ravin.html'),
(4, 'zara', '4.jpeg', 'zara.html'),
(5, 'dalydress', '5.jpg', 'dally.html'),
(6, 'h&m', '6.jpeg', 'h&m.html'),
(7, 'town_team', '7.jpg', 'townteam.html'),
(8, 'boss', '8.jpg', 'boss.html'),
(9, 'gap', '9.jpg', 'gap.html'),
(10, 'polo', '10.jpeg', 'dstore.html'),
(11, 'empore', '11.jpeg', 'empore.html'),
(12, 'mobaco', '12.jpg', 'mobaco.html'),
(13, 'rose', '13.jpg', 'rose.html'),
(14, 'major', '14.jpeg', 'major.html'),
(15, 'tommy', '15.jpeg', 'tommy.html'),
(16, 'elsayad', '16.jpeg', 'elsayad.html'),
(17, 'nine_west', '17.jpg', 'ninewest.html'),
(18, 'dejavu', '18.jpg', 'dejavu.html'),
(19, 'moda_pelle', '19.jpg', 'modapelle.html'),
(20, 'aldo', '20.jpg', 'aldo.html'),
(21, 'guess', '21.jpg', 'guess.html'),
(22, 'azzaro', '22.jpg', 'azzaro.html'),
(23, 'gucci_women', '23.jpg', 'gucciwomen.html'),
(24, 'jadore', '24.jpeg', 'jadore.html'),
(25, 'dolce', '25.jpg', 'dolce.html'),
(26, 'ck', '26.jpg', 'ck.html'),
(27, 'gucci_man', '27.jpg', 'gucciman.html'),
(28, 'baby_einstein', '28.jpg', 'babyeinstein.html'),
(29, 'leab_frog', '29.png', 'leabfrog.html'),
(30, 'nintendo', '30.png', 'nintendo.html'),
(31, 'playmobil', '31.jpg', 'playmobil.html'),
(32, 'radio', '32.jpg', 'radio.html'),
(33, 'lego', '33.png', 'lego.html'),
(34, 'art', '34.jpeg', 'art.html'),
(35, 'asas_msr', '35.jpeg', 'asasmsr.html'),
(36, 'in&out', '36.jpeg', 'in&out.html'),
(37, 'antique', '37.jpeg', 'antique.html'),
(38, 'aviator', '38.jpg', 'aviator.html'),
(39, 'jooj', '39.jpeg', 'jooj.html'),
(40, 'nau', '40.jpeg', 'nau.html'),
(41, 'charriol', '41.jpg', 'charriol.html'),
(42, 'swatch', '42.jpeg', 'swatch.html '),
(43, 'casio', '43.jpeg', 'casio.html'),
(44, 'glitter', '44.jpg', 'glitter.html'),
(45, 'parfoic', '45.jpeg', 'parfoic.html'),
(46, 'tateo', '46.jpg', 'tateo.html');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(1, 2, 1, 'bb', '2.jpg', 2, 250, 500);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `cat_img` varchar(100) NOT NULL,
  `cat_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_img`, `cat_link`) VALUES
(1, 'ladies', '11.png', 'ladies.html'),
(2, 'men', '2.png', 'mens.html'),
(3, 'kids', '3.png', 'kids.html'),
(4, 'bags and shoes', '4.png', 'bags.html'),
(5, 'accessories and gifts', '5.png', 'accessories.html'),
(6, 'perfumes', '6.png', 'perfums.html'),
(7, 'toys', '7.png', 'toys.html'),
(8, 'antiques', '8.png', 'antiques.html'),
(9, 'furniture', '9.png', 'furn.html');

-- --------------------------------------------------------

--
-- Table structure for table `cat_brand`
--

CREATE TABLE `cat_brand` (
  `category` int(11) NOT NULL,
  `brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_brand`
--

INSERT INTO `cat_brand` (`category`, `brand`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 3),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(4, 1),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(5, 38),
(5, 39),
(5, 40),
(5, 41),
(5, 42),
(5, 43),
(5, 44),
(5, 45),
(5, 46),
(6, 22),
(6, 23),
(6, 24),
(6, 25),
(6, 26),
(6, 27),
(7, 28),
(7, 29),
(7, 30),
(7, 31),
(7, 32),
(7, 33),
(8, 37),
(9, 34),
(9, 35),
(9, 36);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `Product_category` int(11) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_brand`, `Product_category`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 3, 1, 'blouse 1', 250, 'blouse for women ', '1.jpg', 'blouse '),
(2, 3, 1, 'blouse 2', 200, 'blouse for women ', '2.jpg', 'blouse '),
(3, 3, 1, 'blouse 5', 340, 'blouse for women ', '3.jpg', 'blouse '),
(4, 3, 1, 'blouse 9', 400, 'blouse for women ', '4.jpg', 'blouse '),
(5, 3, 1, 'blouse 10', 420, 'blouse for women ', '5.jpg', 'blouse '),
(6, 3, 1, 'dress 1', 400, 'dress for women', '6.jpg', 'dress \r\nfostan'),
(7, 3, 1, 'dress 2', 450, 'dress for women', '7.jpg', 'dress \r\nfostan'),
(8, 3, 1, 'dress 3', 500, 'dress for women', '8.jpg', 'dress \r\nfostan'),
(9, 3, 1, 'dress 6', 700, 'dress for women', '9.jpg', 'dress \r\nfostan'),
(10, 3, 1, 'jumpsuit 3', 600, 'jumpsuit for women', '10.jpg', 'jumpsuit '),
(11, 3, 1, 'jumpsuit 4', 650, 'jumpsuit for women', '11.jpg', 'jumpsuit '),
(12, 3, 1, 'jumpsuit 5', 700, 'jumpsuit for women', '12.jpg', 'jumpsuit \r\n'),
(13, 3, 1, 'jeans 1', 200, 'jeans for women', '13.jpg', 'jeans\r\nPant\r\npantolon\r\ntrouser'),
(14, 3, 1, 'jeans 2', 250, 'jeans for women', '14.jpg', 'jeans \r\nPant\r\npantolon\r\ntrouser'),
(15, 3, 1, 'jeans 3', 300, 'jeans for women', '15.jpg', 'jeans \r\nPant\r\npantolon\r\ntrouser'),
(16, 3, 1, 'jeans 4', 350, 'jeans for women', '16.jpg', 'jeans \r\nPant\r\npantolon\r\ntrouser'),
(17, 3, 1, 'jeans 5', 320, 'jeans for women', '17.jpg', 'jeans \r\nPant\r\npantolon\r\ntrouser'),
(18, 3, 1, 'jeans 8', 370, 'jeans for women', '18.jpg', 'jeans \r\nPant\r\npantolon\r\ntrouser'),
(19, 3, 1, 'jeans 6', 280, 'jeans for women', '19.jpg', 'jeans \r\nPant\r\npantolon\r\ntrouser'),
(20, 3, 1, 'jeans 7', 350, 'jeans for women', '20.jpg', 'jeans \r\nPant\r\npantolon\r\ntrouser'),
(21, 2, 1, '3baia 2', 350, '3baia for women', '21.jpg', '3baia '),
(22, 2, 1, '3baia 3', 450, '3baia for women', '22.jpg', '3baia '),
(23, 2, 1, '3baia 4   ', 500, '3baia for women', '23.jpg', '3baia '),
(24, 2, 1, '3baia 6', 380, '3baia for women', '24.jpg', '3baia '),
(25, 2, 1, '3baia 7', 470, '3baia for women', '25.jpg', '3baia '),
(26, 2, 1, '3baia 8', 540, '3baia for women', '26.jpg', '3baia '),
(27, 2, 1, '3baia 2', 500, '3baia for women', '27.jpg', '3baia '),
(28, 2, 1, '3baia 3', 700, '3baia for women', '28.jpg', '3baia '),
(29, 2, 1, '3baia 4', 800, '3baia for women', '29.jpg', '3baia '),
(30, 2, 1, '3baia 5', 750, '3baia for women', '30.jpg', '3baia '),
(31, 4, 1, 'blouse 1', 250, 'blouse for women', '3111.jpg', 'blouse '),
(32, 4, 1, 'blouse 4', 350, 'blouse for women', '3211.jpg', 'blouse '),
(33, 4, 1, 'blouse 5', 370, 'blouse for women', '33.jpg', 'blouse '),
(34, 4, 1, 'dress 1', 600, 'dress for women', '34.jpg', 'dress \r\nfostan'),
(35, 4, 1, 'dress 3', 800, 'dress for women', '35.jpg', 'dress \r\nfostan'),
(36, 4, 1, 'dress 4', 850, 'dress for women', '36.jpg', 'dress \r\nfostan'),
(37, 4, 1, 'dress 5', 900, 'dress for women', '37.jpg', 'dress \r\nfostan'),
(38, 4, 1, 'jumpsuit 1', 500, 'jumpsuit for women', '38.jpg', 'jumpsuit '),
(39, 4, 1, 'jumpsuit 4', 800, 'jumpsuit for women', '39.jpg', 'jumpsuit '),
(40, 4, 1, 'jumpsuit 5', 900, 'jumpsuit for women', '40.jpg', 'jumpsuit '),
(41, 4, 1, 'jumpsuit 6', 850, 'jumpsuit for women', '41.jpg', 'jumpsuit '),
(42, 4, 1, 'pant 1', 300, 'pant for women', '42.jpg', 'pant \r\npantolon\r\ntrouser'),
(43, 4, 1, 'pant 2', 350, 'pant for women', '43.jpg', 'pant \r\npantolon\r\ntrouser'),
(44, 4, 1, 'pant 3', 430, 'pant for women', '44.jpg', 'pant \r\npantolon\r\ntrouser'),
(45, 4, 1, 'skirt 1', 400, 'skirt for women', '45.jpg', 'skirt '),
(46, 4, 1, 'skirt 2', 450, 'skirt for women', '46.jpg', 'skirt '),
(47, 5, 1, 'T-Shirt 1', 300, 'T-Shirt for women', '47.jpg', 'T-Shirt \r\nshirt'),
(48, 5, 1, 'T-Shirt 2', 350, 'T-Shirt for women', '48.jpg', 'T-Shirt \r\nshirt'),
(49, 5, 1, 'T-Shirt 3', 400, 'T-Shirt for women', '49.jpg', 'T-Shirt \r\nshirt'),
(50, 5, 1, 'T-Shirt 4', 420, 'T-Shirt for women', '50.jpg', 'T-Shirt \r\nshirt'),
(51, 5, 1, 'blouse 1', 340, 'blouse for women', '51.jpg', 'blouse '),
(52, 5, 1, 'blouse 2', 450, 'blouse for women', '52.jpg', 'blouse '),
(53, 5, 1, 'blouse 4', 500, 'blouse for women', '53.jpg', 'blouse'),
(54, 5, 1, 'pant 1', 280, 'pant for women', '54.jpg', 'pant \r\npantolon\r\ntrouser'),
(55, 5, 1, 'pant 2', 300, 'pant for women', '55.jpg', 'pant \r\npantolon\r\ntrouser'),
(56, 5, 1, 'pant 3', 350, 'pant for women', '56.jpg', 'pant \r\npantolon\r\ntrouser'),
(57, 5, 1, 'pant 4', 400, 'pant for women', '57.jpg', 'pant \r\npantolon\r\ntrouser'),
(58, 5, 1, 'skirt 1', 400, 'skirt for women', '58.jpg', 'skirt'),
(59, 5, 1, 'skirt 2', 450, 'skirt for women', '59.jpg', 'skirt'),
(60, 5, 1, 'skirt 3', 500, 'skirt for women', '60.jpg', 'skirt '),
(61, 5, 1, 'skirt 4', 600, 'skirt for women', '61.jpg', 'skirt '),
(62, 5, 1, 'dress 1', 500, 'dress for women', '62.jpg', 'dress \r\nfostan'),
(63, 5, 1, 'dress 2', 600, 'dress for women', '63.jpg', 'dress \r\nfostan'),
(64, 5, 1, 'dress 3', 700, 'dress for women', '64.jpg', 'dress \r\nfostan'),
(65, 5, 1, 'jumpsuit', 800, 'jumpsuit for women', '65.jpg', 'jumpsuit'),
(66, 5, 1, 'tunic 1', 500, 'tunic for women', '66.jpg', 'tunic '),
(67, 5, 1, 'tunic 2', 700, 'tunic for women', '67.jpg', 'tunic '),
(68, 5, 1, 'tunic 4', 850, 'tunic for women', '68.jpg', 'tunic '),
(69, 5, 1, 'jacket 1', 500, 'jacket for women', '69.jpg', 'jacket '),
(70, 5, 1, 'cardigan 1', 600, 'cardigan for women', '70.jpg', 'cardigan '),
(71, 5, 1, 'kimono 1', 700, 'kimono for women', '71.jpg', 'kimono '),
(72, 5, 1, 'kimono 2', 800, 'kimono for women', '72.jpg', 'kimono '),
(73, 6, 1, 'blouse 2', 550, 'blouse for women', '73.jpg', 'blouse '),
(74, 6, 1, 'blouse 3', 600, 'blouse for women', '74.jpg', 'blouse '),
(75, 6, 1, 'blouse 4', 650, 'blouse for women', '75.jpg', 'blouse '),
(76, 6, 1, 'dress 1', 500, 'dress for women', '76.jpg', 'dress '),
(77, 6, 1, 'dress 2', 600, 'dress for women', '77.jpg', 'dress '),
(78, 6, 1, 'dress 3', 700, 'dress for women', '78.jpg', 'dress '),
(79, 6, 1, 'dress 4', 800, 'dress for women', '79.jpg', 'dress '),
(80, 6, 1, 'jumpsuit 1', 600, 'jumpsuit for women', '80.jpg', 'jumpsuit '),
(81, 6, 1, 'jumpsuit 3', 700, 'jumpsuit for women', '81.jpg', 'jumpsuit '),
(82, 6, 1, 'jumpsuit 4', 750, 'jumpsuit for women', '82.jpg', 'jumpsuit '),
(83, 6, 1, 'jumpsuit 6', 870, 'jumpsuit for women', '83.jpg', 'jumpsuit '),
(84, 6, 1, 'jeans 1', 250, 'jeans for women', '84.jpg', 'jeans \r\npant\r\npantolon\r\ntrouser'),
(85, 6, 1, 'jeans 2', 300, 'jeans for women', '85.jpg', 'jeans \r\npant\r\npantolon\r\ntrouser'),
(86, 6, 1, 'jeans 3', 320, 'jeans for women', '86.jpg', 'jeans \r\npant\r\npantolon\r\ntrouser'),
(87, 6, 1, 'jeans 4', 380, 'jeans for women', '87.jpg', 'jeans \r\npant\r\npantolon\r\ntrouser'),
(88, 6, 1, 'skirt 1', 400, 'skirt for women', '88.jpg', 'skirt '),
(89, 6, 1, 'skirt 2', 450, 'skirt for women', '89.jpg', 'skirt '),
(90, 6, 1, 'skirt 3', 500, 'skirt for women', '90.jpg', 'skirt '),
(91, 6, 1, 'skirt 4', 550, 'skirt for women', '91.jpg', 'skirt '),
(92, 1, 1, 'stripes ', 220, 'stripes for women', '92.jpg', 'stripes  '),
(93, 1, 1, 'stripes 2', 250, 'stripes for women', '93.jpg', 'stripes '),
(94, 1, 1, 'stripes 3', 300, 'stripes for women', '94.jpg', 'stripes '),
(95, 1, 1, 'jacket', 400, 'jacket for women', '95.jpg', 'jacket sport'),
(96, 1, 1, 'jacket 2', 420, 'jacket for women', '96.jpg', 'jacket sport'),
(97, 1, 1, 'top 1', 200, 'top for women', '97.jpg', 'top sport'),
(98, 1, 1, 'top 2', 250, 'top for women', '98.jpg', 'top sport'),
(99, 1, 1, 'pant 1', 300, 'pant sport for women', '99.jpg', 'pant sport \r\npantolon\r\n'),
(100, 1, 1, 'pant 2', 350, 'pant sport for women', '100.jpg', 'pant sport \r\npantolon\r\n'),
(101, 38, 5, 'glasses 1', 250, 'glasses ', '101.png', 'glasses '),
(102, 38, 5, 'glasses 2', 300, 'glasses ', '102.png', 'glasses '),
(103, 38, 5, 'glasses 3', 350, 'glasses ', '103.png', 'glasses '),
(104, 39, 5, 'glasses 4', 320, 'glasses ', '104.jpg', 'glasses '),
(105, 39, 5, 'glasses 5', 400, 'glasses ', '105.jpg', 'glasses '),
(106, 39, 5, 'glasses 1', 300, 'glasses ', '106.jpg', 'glasses '),
(107, 40, 5, 'glasses 2', 320, 'glasses ', '107.png', 'glasses '),
(108, 40, 5, 'glasses 3', 380, 'glasses ', '108.png', 'glasses '),
(109, 40, 5, 'glasses 4', 400, 'glasses ', '109.png', 'glasses '),
(110, 40, 5, 'glasses 5', 420, 'glasses ', '110.png', 'glasses '),
(111, 41, 5, 'watch 1', 500, 'watch ', '111.jpg', 'watch'),
(112, 41, 5, 'watch 2', 600, 'watch', '112.jpg', 'watch'),
(113, 41, 5, 'watch 3', 700, 'watch', '113.jpg', 'watch'),
(114, 41, 5, 'watch 4', 750, 'watch', '114.jpg', 'watch'),
(115, 42, 5, 'watch 5', 800, 'watch', '115.jpg', 'watch'),
(116, 42, 5, 'watch 1', 600, 'watch', '116.jpg', 'watch'),
(117, 42, 5, 'watch 2', 700, 'watch', '117.jpg', 'watch'),
(118, 42, 5, 'watch 3', 750, 'watch', '118.jpg', 'watch'),
(119, 43, 5, 'watch', 800, 'watch', '119.png', 'watch'),
(120, 43, 5, 'watch 1', 500, 'watch', '120.png', 'watch'),
(121, 43, 5, 'watch 2', 600, 'watch', '121.png', 'watch'),
(122, 43, 5, 'watch', 600, 'watch', '122.png', 'watch'),
(123, 43, 5, 'watch 5', 800, 'watch', '123.png', 'watch'),
(124, 44, 5, 'necklace 2', 150, 'necklace for women', '124.jpg', 'necklace '),
(125, 44, 5, 'ring', 50, 'ring for women', '125.jpg', 'ring'),
(126, 45, 5, 'bandle 2', 180, 'bandle for women', '126.jpg', 'bandle '),
(127, 45, 5, 'ring', 100, 'ring for women', '127.jpg', 'ring'),
(128, 46, 5, 'necklace', 200, 'necklace for women', '128.jpg', 'necklace'),
(129, 7, 2, 'trouser 2', 380, 'trouser for men', '129.jpg', 'trouser '),
(130, 7, 2, 't-shirt', 300, 't-shirt  for men', '130.jpg', 't-shirt  \r\nshirt'),
(131, 7, 2, 't-shirt 3', 400, 't-shirt  for men', '131.jpg', 't-shirt  \r\nshirt'),
(132, 8, 2, 'trouser 1', 400, 'trouser for men', '132.jpg', 'trouser \r\npant\r\npantolon\r\n'),
(133, 8, 2, 'trouser 2', 500, 'trouser for men', '133.jpg', 'trouser\r\npant\r\npantolon\r\n'),
(134, 8, 2, 'trouser 3', 550, 'trouser for men', '134.jpg', 'trouser \r\npant\r\npantolon\r\n'),
(135, 8, 2, 't-shirt', 300, 't-shirt for men', '135.jpg', 't-shirt  \r\nshirt'),
(136, 8, 2, 't-shirt 2', 350, 't-shirt for men', '136.jpg', 't-shirt  \r\nshirt'),
(137, 8, 2, 'blazer', 400, 'blazer for men', '137.jpg', 'blazer'),
(138, 8, 2, 'suit', 1500, 'suit for men', '138.jpg', 'suit'),
(139, 8, 2, 'suit 2', 2000, 'suit for men', '139.jpg', 'suit'),
(140, 9, 2, 't-Shirt', 300, 't-Shirt for men ', '140.jpg', 't-shirt  \r\nshirt'),
(141, 9, 2, 't-Shirt 2', 350, 't-Shirt for men ', '141.jpg', 't-shirt  \r\nshirt'),
(142, 9, 2, 'Shirt 1', 380, 'Shirt for men ', '142.jpg', 't-shirt  \r\nshirt'),
(143, 9, 2, 'Shirt 2 ', 500, 'shirt for men ', '143.jpg', 't-shirt  \r\nshirt'),
(144, 9, 2, 'trouser', 390, 'trouser for men', '144.jpg', 'trouser\r\npant\r\npantolon\r\n'),
(145, 9, 2, 'trouser 2', 450, 'trouser for men', '145.jpg', 'trouser\r\npant\r\npantolon\r\n'),
(146, 10, 2, 't-shirt', 300, 't-shirt for men', '146.jpg', 't-shirt  \r\nshirt'),
(147, 10, 2, 't-shirt 2', 320, 't-shirt for men', '147.jpg', 't-shirt  \r\nshirt'),
(148, 10, 2, 'shirt 1', 400, 'shirt for men', '148.jpg', 't-shirt  \r\nshirt'),
(149, 10, 2, 'shirt 2', 450, 'shirt for men', '149.jpg', 't-shirt  \r\nshirt'),
(150, 10, 2, 'trouser', 380, 'trouser for men ', '150.jpg', 'trouser\r\npant\r\npantolon\r\n'),
(151, 10, 2, 'trouser 2', 420, 'trouser for men ', '151.jpg', 'trouser\r\npant\r\npantolon'),
(152, 1, 2, 'trouser 1', 250, 'trouser for men', '152.jpg', 'trouser\r\npant\r\npantolon\r\n'),
(153, 1, 2, 'trouser 2', 300, 'trouser for men', '153.jpg', 'trouser\r\npant\r\npantolon\r\n'),
(154, 1, 2, 't-shirt ', 300, 't-shirt  for men', '154.jpg', 't-shirt  \r\nshirt'),
(155, 1, 2, 't-shirt 2', 350, 't-shirt  for men', '155.jpg', 't-shirt  \r\nshirt'),
(156, 1, 2, 'short 1', 200, 'short for men', '156.jpg', 'short '),
(157, 1, 2, 'short 2', 250, 'short for men', '157.jpg', 'short '),
(158, 1, 4, 'bag 1', 300, 'bag for women', '158.jpg', 'bag '),
(159, 1, 4, 'bag 2', 400, 'bag for women', '159.jpg', 'bag '),
(160, 1, 4, 'shoes 1', 500, 'shoes ', '160.jpg', 'shoes '),
(161, 1, 4, 'shoes 2', 600, 'shoes ', '161.jpg', 'shoes '),
(162, 1, 4, 'shoes 3', 700, 'shoes ', '162.jpg', 'shoes '),
(163, 17, 4, 'shoes 1', 500, 'shoes ', '163.jpg', 'shoes '),
(164, 17, 4, 'shoes 2', 600, 'shoes ', '164.jpg', 'shoes '),
(165, 18, 4, 'bag', 900, 'bag', '165.png', 'bag'),
(166, 18, 4, 'bag 2', 1000, 'bag', '166.png', 'bag'),
(167, 18, 4, 'bag 3', 850, 'bag', '167.png', 'bag'),
(168, 18, 4, 'shoes ', 600, 'shoes', '168.png', 'shoes'),
(169, 18, 4, 'shoes 2', 700, 'shoes', '169.png', 'shoes'),
(170, 18, 4, 'shoes 3', 900, 'shoes', '170.png', 'shoes'),
(171, 19, 4, 'shoes 1', 600, 'shoes', '171.png', 'shoes'),
(172, 19, 4, 'shoes 2', 700, 'shoes', '172.png', 'shoes'),
(173, 20, 4, 'shoes', 700, 'shoes', '173.png', 'shoes'),
(174, 20, 4, 'shoes', 800, 'shoes', '174.png', 'shoes'),
(175, 20, 4, 'bag', 600, 'bag', '175.jpg', 'bag '),
(176, 20, 4, 'bag', 800, 'bag', '176.jpg', 'bag'),
(177, 21, 4, 'bag', 700, 'bag', '177.jpg', 'bag'),
(178, 21, 4, 'bag ', 400, 'bag', '178.jpg', 'bag'),
(179, 21, 4, 'shoes', 500, 'shoes', '179.jpg', 'shoes'),
(180, 21, 4, 'shoes', 800, 'shoes', '180.jpg', 'shoes'),
(181, 11, 3, 'kids1', 260, 'kids', '181.jpg', 'kids'),
(182, 11, 3, 'kids2', 3400, 'kids', '182.jpg', 'kids'),
(183, 12, 3, 'kids3', 200, 'kids', '183.jpg', 'kids'),
(184, 12, 3, 'kids4', 240, 'kids', '184.jpg', 'kids'),
(185, 13, 3, 'kids5', 250, 'kids', '185.jpeg', 'kids'),
(186, 13, 3, 'kids6', 260, 'kids', '186.jpeg', 'kids'),
(187, 14, 3, 'kids7', 320, 'kids', '187.jpg', 'kids'),
(188, 14, 3, 'kids8', 310, 'kids', '188.jpg', 'kids'),
(189, 15, 3, 'kids9', 400, 'kids', '189.jpg', 'kids'),
(190, 15, 3, 'kids10', 370, 'kids', '190.jpg', 'kids'),
(191, 16, 3, 'kids11', 300, 'kids', '191.jpg', 'kids'),
(192, 16, 3, 'kids12', 290, 'kids', '192.jpg', 'kids'),
(193, 22, 6, 'perfume1', 680, 'perfume', '193.jpg', 'perfume'),
(194, 22, 6, 'perfume2', 750, 'perfume', '194.jpg', 'perfume'),
(195, 22, 6, 'perfume3', 700, 'perfume', '195.jpg', 'perfume'),
(196, 23, 6, 'perfume4', 560, 'perfume', '196.jpg', 'perfume'),
(197, 23, 6, 'perfume5', 570, 'perfume', '197.jpg', 'perfume'),
(198, 23, 6, 'perfume6', 710, 'perfume', '198.jpg', 'perfume'),
(199, 27, 6, 'perfume7', 640, 'perfume', '199.jpg', 'perfume'),
(200, 27, 6, 'perfume8', 630, 'perfume', '200.jpg', 'perfume'),
(201, 27, 6, 'perfume9', 800, 'perfume', '201.jpg', 'perfume'),
(202, 24, 6, 'perfume10', 550, 'perfume', '202.jpg', 'perfume'),
(203, 24, 6, 'perfume11', 680, 'perfume', '203.jpg', 'perfume'),
(204, 24, 6, 'perfume12', 750, 'perfume', '204.jpg', 'perfume'),
(205, 25, 6, 'perfume13', 380, 'perfume', '205.jpg', 'perfume'),
(206, 25, 6, 'perfume14', 400, 'perfume', '206.jpg', 'perfume'),
(207, 25, 6, 'perfume15', 450, 'perfume', '207.jpg', 'perfume'),
(208, 26, 6, 'perfume16', 620, 'perfume', '208.jpg', 'perfume'),
(209, 26, 6, 'perfume17', 670, 'perfume', '209.jpg', 'perfume'),
(210, 26, 6, 'perfume18', 690, 'perfume', '210.jpg', 'perfume'),
(211, 34, 9, 'furniture1', 1200, 'furniture', '211.jpg', 'furniture'),
(212, 34, 9, 'furniture2', 2300, 'furniture', '212.jpg', 'furniture'),
(213, 34, 9, 'furniture3', 2500, 'furniture', '213.jpg', 'furniture'),
(214, 34, 9, 'furniture4', 1900, 'furniture', '214.jpg', 'furniture'),
(215, 35, 9, 'furniture5', 1700, 'furniture', '215.png', 'furniture'),
(216, 35, 9, 'furniture6', 2100, 'furniture', '216.png', 'furniture'),
(217, 35, 9, 'furniture7', 3000, 'furniture', '217.png', 'furniture'),
(218, 35, 9, 'furniture8', 2400, 'furniture', '218.png', 'furniture'),
(219, 36, 9, 'furniture9', 2300, 'furniture', '219.png', 'furniture'),
(220, 36, 9, 'furniture10', 3000, 'furniture', '220.png', 'furniture'),
(221, 36, 9, 'furniture11', 2500, 'furniture', '221.jpg', 'furniture'),
(222, 36, 9, 'furniture12', 2000, 'furniture', '222.jpg', 'furniture'),
(223, 37, 8, 'antique1', 1000, 'antique', '223.jpg', 'antique'),
(224, 37, 8, 'antique2', 800, 'antique', '224.jpg', 'antique'),
(225, 37, 8, 'antique3', 750, 'antique', '225.jpg', 'antique'),
(226, 37, 8, 'antique4', 900, 'antique', '226.jpg', 'antique'),
(227, 3, 2, 'trouser 1', 350, 'trouser for men', '227.jpg', 'trouser'),
(228, 3, 2, 'trouser 2', 400, 'trouser for men', '228.jpg', 'trouser'),
(229, 3, 2, 't-shirt 1', 500, 't-shirt for men', '229.jpg', 'T-Shirt \r\nshirt'),
(230, 3, 2, 't-shirt 2', 400, 't-shirt for men', '230.jpg', 'T-Shirt \r\nshirt'),
(231, 28, 7, 'toy1', 170, 'toy', '231.jpeg', 'toy'),
(232, 28, 7, 'toy2', 150, 'toy', '232.jpeg', 'toy'),
(233, 29, 7, 'toy3', 200, 'toy', '233.jpeg', 'toy'),
(234, 29, 7, 'toy4', 180, 'toy', '234.jpeg', 'toy'),
(235, 30, 7, 'toy5', 300, 'toy', '235.jpeg', 'toy'),
(236, 30, 7, 'toy6', 320, 'toy', '236.jpeg', 'toy'),
(237, 31, 7, 'toy7', 350, 'toy', '237.jpeg', 'toy'),
(238, 31, 7, 'toy8', 370, 'toy', '238.jpeg', 'toy'),
(239, 32, 7, 'toy9', 99, 'toy', '239.jpeg', 'toy'),
(240, 32, 7, 'toy10', 199, 'toy', '240.jpeg', 'toy'),
(241, 33, 7, 'toy11', 180, 'toy', '241.jpeg', 'toy'),
(242, 33, 7, 'toy12', 200, 'toy', '242.jpeg', 'toy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `surname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `email`, `password`, `confirm`, `phone`, `bdate`, `country`, `gender`) VALUES
(1, 'israa', 'ahmed', 'israaahmed@yahoo.com', '11', '11', 1117850105, '0000-00-00', 'egypt', 'femail'),
(2, 'israa', 'ahmed', 'ahmedisraa233@gmail.com', '222', '222', 1117850105, '2016-04-29', 'Egypt', 'female'),
(3, 'israa', 'ahmed', 'iashrmaead@outlook.com', '555', '555', 1117850105, '2019-05-29', 'Bermuda', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_cart` (`p_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cat_brand`
--
ALTER TABLE `cat_brand`
  ADD PRIMARY KEY (`category`,`brand`),
  ADD KEY `cons_brand` (`brand`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_brand` (`product_brand`),
  ADD KEY `Product_category` (`Product_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pro_cart` FOREIGN KEY (`p_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cat_brand`
--
ALTER TABLE `cat_brand`
  ADD CONSTRAINT `cons_brand` FOREIGN KEY (`brand`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cons_category` FOREIGN KEY (`category`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Product_category`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
