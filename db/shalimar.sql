-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2016 at 11:57 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shalimar`
--

-- --------------------------------------------------------

--
-- Table structure for table `sha_categories`
--

CREATE TABLE IF NOT EXISTS `sha_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to stores unique id for categories',
  `category_name` varchar(100) NOT NULL COMMENT 'to store name of category',
  `categoey_image` varchar(200) NOT NULL COMMENT 'to store iamge path of category',
  `category_description` varchar(255) DEFAULT NULL COMMENT 'to store description of category',
  `category_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'to store status of category. 1-acitve, 0-inactive',
  `category_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'to store created date of product',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sha_categories`
--

INSERT INTO `sha_categories` (`category_id`, `category_name`, `categoey_image`, `category_description`, `category_status`, `category_created_date`) VALUES
(1, 'starters', '', NULL, 0, '2016-11-29 18:55:27'),
(2, 'maison', '', NULL, 0, '2016-11-29 18:57:07'),
(3, 'beef', '', NULL, 0, '2016-11-29 18:57:35'),
(4, 'vegetable', '', NULL, 0, '2016-11-29 18:58:00'),
(5, 'chicken', '', NULL, 0, '2016-11-29 18:58:19'),
(6, 'rice', '', NULL, 0, '2016-11-29 18:59:16'),
(7, 'indianspcl', '', NULL, 0, '2016-11-29 18:59:57'),
(8, 'seafood', '', NULL, 0, '2016-11-29 19:00:14'),
(9, 'lamb', '', NULL, 0, '2016-11-29 19:00:53'),
(10, 'biryani', '', NULL, 0, '2016-11-29 19:01:21'),
(11, 'desserts', '', NULL, 0, '2016-11-30 13:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `sha_products`
--

CREATE TABLE IF NOT EXISTS `sha_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to store unique id for products',
  `product_title` varchar(100) NOT NULL COMMENT 'to stores name of product',
  `product_price` decimal(10,2) NOT NULL COMMENT 'to store price of product',
  `product_description` varchar(255) DEFAULT NULL COMMENT 'to store desciption of product',
  `prodcut_category_id` int(11) NOT NULL COMMENT 'to map product with category id',
  `product_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'to store created date of product',
  PRIMARY KEY (`product_id`),
  KEY `prodcut_category_id` (`prodcut_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `sha_products`
--

INSERT INTO `sha_products` (`product_id`, `product_title`, `product_price`, `product_description`, `prodcut_category_id`, `product_created_date`) VALUES
(1, 'Riz', '3.50', NULL, 6, '2016-11-29 19:07:08'),
(2, 'Matter Pulao', '4.50', NULL, 6, '2016-11-29 19:15:34'),
(4, 'Kashmir Pulao', '4.50', NULL, 6, '2016-11-29 19:17:12'),
(5, 'Shalimar Pulao', '4.50', NULL, 6, '2016-11-29 19:17:54'),
(7, 'Biryani Poulet', '13.00', NULL, 10, '2016-11-29 19:24:01'),
(8, 'Biryani Crevettes', '15.00', NULL, 10, '2016-11-29 19:24:47'),
(9, 'Biryani Legumes', '12.00', NULL, 10, '2016-11-29 19:25:36'),
(10, 'Biriyani D''agneau', '17.50', NULL, 10, '2016-11-29 19:26:28'),
(11, 'Biryani Boeuf', '14.00', NULL, 10, '2016-11-29 19:27:26'),
(12, 'Biryani Poisson', '14.00', NULL, 10, '2016-11-29 19:28:09'),
(13, 'Vegetable Korma', '7.00', NULL, 4, '2016-11-29 19:40:57'),
(14, 'Dall', '0.00', NULL, 4, '2016-11-29 19:41:52'),
(15, 'Salade Indienne', '7.00', NULL, 1, '2016-11-30 10:27:50'),
(16, 'Salade Tandoori  ', '6.00', NULL, 1, '2016-11-30 10:28:37'),
(17, 'Salade Sajo(Nouveau)', '6.00', NULL, 1, '2016-11-30 10:29:12'),
(18, 'Salade Poulet Ou Cerevettes ', '7.00', NULL, 1, '2016-11-30 10:29:46'),
(19, 'Salade Mix', '6.00', NULL, 1, '2016-11-30 10:30:22'),
(20, 'Raita', '5.00', NULL, 1, '2016-11-30 10:30:57'),
(21, 'Oignon Pakora', '6.00', NULL, 1, '2016-11-30 10:31:42'),
(22, 'Piment Pakora', '6.00', NULL, 1, '2016-11-30 10:32:15'),
(23, 'Poisson Pakora', '6.00', NULL, 1, '2016-11-30 10:32:51'),
(24, 'Poulet Pakora', '6.00', NULL, 1, '2016-11-30 10:33:26'),
(25, 'Crevettes Pakora', '7.00', NULL, 1, '2016-11-30 10:33:57'),
(26, 'Mixed Beignets ', '6.00', NULL, 1, '2016-11-30 10:34:41'),
(27, 'Alu Tikka (Nouveau)', '6.00', NULL, 1, '2016-11-30 10:35:20'),
(28, 'Borda De Lentilles', '6.00', NULL, 1, '2016-11-30 10:35:52'),
(30, 'Samossa', '5.50', NULL, 1, '2016-11-30 10:36:59'),
(31, 'Samossa Viande', '6.00', NULL, 1, '2016-11-30 10:37:27'),
(32, 'Poulet Tandoori', '6.00', NULL, 1, '2016-11-30 10:38:00'),
(33, 'Caille Tandoori (Nouveau)', '8.00', NULL, 1, '2016-11-30 10:38:28'),
(35, 'Reshmi Kebab (Nouveau)', '6.00', NULL, 1, '2016-11-30 10:39:20'),
(36, 'Prajapati (Nouveau)', '10.00', NULL, 1, '2016-11-30 10:39:51'),
(37, 'Poulet Pankhri Grille (Nouveau)', '6.50', NULL, 1, '2016-11-30 10:40:23'),
(38, 'Agneau Tikka', '8.50', NULL, 1, '2016-11-30 10:40:46'),
(39, 'Saumon Tikka (Nouveau)', '8.00', '', 1, '2016-11-30 10:41:26'),
(40, 'Poisson Tikka', '6.50', NULL, 1, '2016-11-30 10:41:55'),
(41, 'Bara Kebab (Nouveau)', '9.50', NULL, 1, '2016-11-30 10:42:26'),
(42, 'Sheek Kebab (Nouveau)', '6.00', NULL, 1, '2016-11-30 10:42:56'),
(43, 'Gambas Tandoori', '15.50', NULL, 1, '2016-11-30 10:43:26'),
(44, 'Mixte Grill (2 pers 18.00)', '9.50', NULL, 1, '2016-11-30 10:43:50'),
(45, 'Dal Soupe ou Poulet Soupe ou Poisson Soupe (Nouveau)', '7.50', NULL, 1, '2016-11-30 10:44:31'),
(46, 'Nan', '2.00', NULL, 2, '2016-11-30 10:46:18'),
(47, 'Chappati', '2.00', NULL, 2, '2016-11-30 10:46:51'),
(48, 'Cheese Nan', '3.50', NULL, 2, '2016-11-30 10:47:21'),
(49, 'Parata', '2.50', NULL, 2, '2016-11-30 10:47:55'),
(50, 'Garlic Nan', '3.00', NULL, 2, '2016-11-30 10:48:26'),
(51, 'Garlic Cheese Nan', '4.00', NULL, 2, '2016-11-30 10:48:57'),
(52, 'Ginger Nan', '4.00', NULL, 2, '2016-11-30 10:49:24'),
(53, 'Kashmiri Nan', '4.00', NULL, 2, '2016-11-30 10:49:53'),
(54, 'Poulet Tikka Nan', '4.00', NULL, 2, '2016-11-30 10:50:29'),
(55, 'Aloo Parata', '3.50', NULL, 2, '2016-11-30 10:50:59'),
(56, 'Boeuf-Curry', '9.00', NULL, 3, '2016-11-30 10:51:48'),
(57, 'Boeuf-Madras', '9.50', NULL, 3, '2016-11-30 10:52:15'),
(58, 'Boeuf-Vindaloo', '10.00', NULL, 3, '2016-11-30 10:52:44'),
(59, 'Boeuf-Korma', '10.00', NULL, 3, '2016-11-30 10:53:12'),
(60, 'Boeuf-Karahi', '11.00', NULL, 3, '2016-11-30 10:53:42'),
(61, 'Boeuf-Chutney', '10.00', NULL, 3, '2016-11-30 10:54:09'),
(62, 'Keema Matter Paneer', '9.00', NULL, 3, '2016-11-30 10:55:02'),
(63, 'Keema Palak', '9.00', NULL, 3, '2016-11-30 10:55:34'),
(64, 'Keema Mater', '8.50', NULL, 3, '2016-11-30 10:56:07'),
(65, 'Vegetable Korma', '7.00', NULL, 4, '2016-11-30 11:00:18'),
(66, 'Dall', '0.00', NULL, 4, '2016-11-30 11:00:46'),
(67, 'Aloo Palak', '0.00', NULL, 4, '2016-11-30 11:01:11'),
(68, 'Khumba Massala (Nouveau)', '0.00', NULL, 4, '2016-11-30 11:01:43'),
(69, 'Dall Palak', '0.00', NULL, 4, '2016-11-30 11:02:18'),
(70, 'Mixte Vegetables', '8.00', NULL, 4, '2016-11-30 11:02:47'),
(72, 'Palak Paneer', '8.00', NULL, 4, '2016-11-30 11:03:50'),
(73, 'Dall Makhani (Nouveau)', '0.00', NULL, 4, '2016-11-30 11:04:42'),
(75, 'Poulet Madras', '9.00', NULL, 5, '2016-11-30 11:06:12'),
(76, 'Poulet Curry', '8.50', NULL, 5, '2016-11-30 11:06:43'),
(77, 'Poulet Ginger', '9.00', NULL, 5, '2016-11-30 11:07:18'),
(78, 'Poulet Dopiaza', '9.00', NULL, 5, '2016-11-30 11:07:54'),
(79, 'Poulet Palak', '10.00', NULL, 5, '2016-11-30 11:08:27'),
(80, 'Poulet Tikka Masala', '10.00', NULL, 5, '2016-11-30 11:08:56'),
(81, 'Butter Chicken', '10.00', NULL, 5, '2016-11-30 11:09:26'),
(82, 'Poulet Vindallo', '10.00', NULL, 5, '2016-11-30 11:09:56'),
(83, 'Poulet Dal', '10.00', NULL, 5, '2016-11-30 11:10:31'),
(84, 'Poulet Ambergine', '10.00', NULL, 5, '2016-11-30 11:11:01'),
(85, 'Poulet Chutney (Nouveau)', '10.00', NULL, 5, '2016-11-30 11:11:29'),
(86, 'Poulet Shahi Kurma', '9.50', NULL, 5, '2016-11-30 11:11:58'),
(87, 'Poulet Makhani (Nouveau)', '11.50', NULL, 5, '2016-11-30 11:12:30'),
(88, 'Poulet Balti Gost (Nouveau)', '21.00', NULL, 5, '2016-11-30 11:12:57'),
(89, 'Poulet Khumba Masala (Nouveau)', '11.00', NULL, 5, '2016-11-30 11:13:29'),
(90, 'Chicken Haryali (Nouveau)', '11.50', NULL, 5, '2016-11-30 11:13:59'),
(91, 'Chicken Malai Tikka (Nouveau)', '11.50', NULL, 5, '2016-11-30 11:14:31'),
(92, 'Poulet Legume', '10.50', NULL, 5, '2016-11-30 11:14:59'),
(93, 'Poulet Coco', '10.50', NULL, 5, '2016-11-30 11:15:29'),
(94, 'Poulet Krahi', '11.00', NULL, 5, '2016-11-30 11:15:54'),
(95, 'Sandwich', '5.00', NULL, 7, '2016-11-30 11:17:07'),
(96, 'Poulet Tikka', '0.00', NULL, 7, '2016-11-30 11:17:38'),
(97, 'Seek Kebab', '0.00', NULL, 7, '2016-11-30 11:18:08'),
(98, 'Indian  Choix: Poulet Chicken / Sheek Kebab ', '6.50', NULL, 7, '2016-11-30 11:18:45'),
(99, 'Poisson Madras', '10.00', NULL, 8, '2016-11-30 11:19:54'),
(100, 'Poisson Massala', '10.00', NULL, 8, '2016-11-30 11:20:23'),
(101, 'Poisson Punjabi (Nouveau)', '11.00', NULL, 8, '2016-11-30 11:20:52'),
(102, 'Poisson Shalimar', '11.00', NULL, 8, '2016-11-30 11:21:20'),
(103, 'Poisson Shahi Korma', '14.00', NULL, 8, '2016-11-30 11:21:50'),
(104, 'Crevettes Shahi Korma', '12.00', NULL, 8, '2016-11-30 11:22:25'),
(105, 'Crevettes Masala', '11.00', NULL, 8, '2016-11-30 11:23:01'),
(106, 'Crevettes krahi', '13.00', NULL, 8, '2016-11-30 11:23:30'),
(107, 'Crevettes Madras', '10.00', NULL, 8, '2016-11-30 11:24:14'),
(108, 'Crevettes Chutney', '11.00', NULL, 8, '2016-11-30 11:24:47'),
(109, 'Gambas Shahi Korma', '18.50', NULL, 8, '2016-11-30 11:25:14'),
(110, 'Gambas Chutney', '17.50', NULL, 8, '2016-11-30 11:25:41'),
(111, 'Gambas Krahi', '19.00', NULL, 8, '2016-11-30 11:26:23'),
(112, 'Agneau Palak', '11.00', NULL, 9, '2016-11-30 11:26:56'),
(113, 'Agneau Shahi Korma', '11.00', NULL, 9, '2016-11-30 11:27:25'),
(115, 'Agneau Aubergine', '12.00', NULL, 9, '2016-11-30 11:28:21'),
(116, 'Agneau Vindaloo', '11.00', NULL, 9, '2016-11-30 11:28:49'),
(117, 'Agneau Ginger', '11.00', NULL, 9, '2016-11-30 11:29:21'),
(118, 'Agneau Dal', '11.00', NULL, 9, '2016-11-30 11:29:58'),
(119, 'Agneau Balti Gost (Nouveau)', '25.00', NULL, 9, '2016-11-30 11:30:27'),
(120, 'Agneau Madras', '11.00', NULL, 9, '2016-11-30 11:30:59'),
(121, 'Agneau Tikka Massala', '12.50', NULL, 9, '2016-11-30 11:31:32'),
(122, 'Agneau Coco', '12.00', NULL, 9, '2016-11-30 11:32:05'),
(123, 'Agneau Chutney (Nouveau)', '12.00', NULL, 9, '2016-11-30 11:32:34'),
(124, 'Agneau Krahi', '13.00', NULL, 9, '2016-11-30 11:33:07'),
(125, 'Agneau Dopiaza', '11.00', NULL, 9, '2016-11-30 11:33:35'),
(126, ' Kulfi', '5.00', NULL, 11, '2016-11-30 13:21:51'),
(127, ' Halwa', '4.00', NULL, 11, '2016-11-30 13:22:26'),
(128, 'Gulab Jamun', '5.00', NULL, 11, '2016-11-30 13:22:57'),
(129, ' Galor Halwa', '5.00', NULL, 11, '2016-11-30 13:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `sha_product_images`
--

CREATE TABLE IF NOT EXISTS `sha_product_images` (
  `product_image_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to store unique id for product image',
  `product_image_path` varchar(200) NOT NULL COMMENT 'to store image path of product',
  `product_mapping_id` int(11) NOT NULL COMMENT 'to map prduct with product images table',
  PRIMARY KEY (`product_image_id`),
  KEY `product_mapping_id` (`product_mapping_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `sha_product_images`
--

INSERT INTO `sha_product_images` (`product_image_id`, `product_image_path`, `product_mapping_id`) VALUES
(1, 'img/recipe/biryani/chicken2.jpg', 7),
(2, 'img/recipe/biryani/shrimp2.jpg', 8),
(3, 'img/recipe/biryani/veg-1.jpg', 9),
(4, 'img/recipe/biryani/lamb1.jpg', 10),
(5, 'img/recipe/biryani/beef.jpg', 11),
(6, 'img/recipe/biryani/fish.jpg', 12),
(7, 'img/recipe/riz/riz.jpg', 1),
(8, 'img/recipe/riz/mutter2.jpg', 2),
(10, 'img/recipe/riz/kashmir.jpg', 4),
(11, 'img/recipe/riz/shalimar1.jpg', 5),
(12, 'img/recipe/starter/salade1.jpg', 15),
(13, 'img/recipe/starter/poulet_tandori_2.jpg', 16),
(14, 'img/recipe/starter/salade sajo_3.jpg', 17),
(15, 'img/recipe/starter/shrimbs4.jpg', 18),
(16, 'img/recipe/starter/starter5.jpg', 19),
(17, 'img/recipe/starter/raita6.jpg', 20),
(18, 'img/recipe/starter/onion-bakoda_7.jpg', 21),
(19, 'img/recipe/starter/piment-bakoda8.jpg', 22),
(20, 'img/recipe/starter/fish_pakoda9.jpg', 23),
(21, 'img/recipe/starter/chicken_pakoda10.jpg', 24),
(22, 'img/recipe/starter/mixed12.jpg', 25),
(23, 'img/recipe/starter/mixie_grill27.jpg', 26),
(24, 'img/recipe/starter/alu tikka 13.jpg', 27),
(25, 'img/recipe/starter/lentiles14.jpg', 28),
(27, 'img/recipe/starter/samosa15.jpg', 30),
(28, 'img/recipe/starter/samosa16.jpg', 31),
(29, 'img/recipe/starter/tandori_17.jpg', 32),
(30, 'img/recipe/starter/butter-chicken-18.jpg', 33),
(31, 'img/recipe/starter/praja-18.jpg', 35),
(32, 'img/recipe/starter/reshmi20.jpg', 36),
(33, 'img/recipe/starter/mixite grill21.jpg', 37),
(34, 'img/recipe/starter/ageau_pakoda22.jpg', 38),
(35, 'img/recipe/starter/posoon pakoda.jpg', 39),
(36, 'img/recipe/starter/soumen24.jpg', 40),
(37, 'img/recipe/starter/bara kebab25.jpg', 41),
(38, 'img/recipe/starter/sheek26.jpg', 42),
(39, 'img/recipe/starter/mixie_grill27.jpg', 44),
(40, 'img/recipe/starter/chicken-26.jpg', 43),
(41, 'img/recipe/starter/soup27.jpg', 44),
(42, 'img/recipe/maison/nan1.jpg', 46),
(43, 'img/recipe/maison/garlic cheese nan.jpg', 47),
(44, 'img/recipe/maison/cheese nan.jpg', 48),
(45, 'img/recipe/maison/parata.jpg', 49),
(46, 'img/recipe/maison/nan1.jpg', 50),
(47, 'img/recipe/maison/garlic cheese nan.jpg', 51),
(48, 'img/recipe/maison/nan1.jpg', 52),
(49, 'img/recipe/maison/chicken nan.jpg', 53),
(50, 'img/recipe/maison/poulet tikka nan.jpg', 54),
(51, 'img/recipe/maison/parata.jpg', 55),
(52, 'img/recipe/beef/2.jpg', 56),
(53, 'img/recipe/beef/beef1.jpg', 57),
(54, 'img/recipe/beef/beef2.jpg', 58),
(55, 'img/recipe/beef/beef-kurma.jpg', 59),
(56, 'img/recipe/beef/beef4.jpg', 60),
(57, 'img/recipe/beef/beef5.jpg', 61),
(58, 'img/recipe/beef/beef6.jpg', 62),
(59, 'img/recipe/beef/beef7.jpg', 63),
(60, 'img/recipe/beef/beefb.jpg', 64),
(61, 'img/recipe/legumes/veg-kurm1.jpg', 65),
(62, 'img/recipe/legumes/dal.jpg', 66),
(63, 'img/recipe/legumes/1.jpg', 67),
(64, 'img/recipe/legumes/mushroom1.jpg', 68),
(65, 'img/recipe/legumes/dal-palak1.jpg', 69),
(66, 'img/recipe/legumes/mixied.jpg', 70),
(68, 'img/recipe/legumes/panner.jpg', 72),
(69, 'img/recipe/legumes/dal-mak2.jpg', 73),
(71, 'img/recipe/chicken/chicken - fried.jpg', 75),
(72, 'img/recipe/chicken/chicken-poulet.jpg', 76),
(73, 'img/recipe/chicken/chicken ginger.jpg', 77),
(74, 'img/recipe/chicken/chicken dopiaza.jpg', 78),
(75, 'img/recipe/chicken/5.jpg', 79),
(76, 'img/recipe/chicken/chicken4.jpg', 80),
(77, 'img/recipe/chicken/butter-chicken.jpg', 81),
(78, 'img/recipe/chicken/chicken vindaloo.jpg', 82),
(79, 'img/recipe/chicken/chicken5.jpg', 83),
(80, 'img/recipe/chicken/chicken-amberginen.jpg', 84),
(81, 'img/recipe/chicken/chicken kurma.jpg', 85),
(82, 'img/recipe/chicken/chicken4.jpg', 86),
(83, 'img/recipe/chicken/chicken liver.jpg', 87),
(84, 'img/recipe/chicken/chicken-amberginen230.jpg', 88),
(85, 'img/recipe/chicken/fried chicken.jpg', 89),
(86, 'img/recipe/chicken/chicken haryani.jpg', 90),
(87, 'img/recipe/chicken/chicken.jpg', 91),
(88, 'img/recipe/chicken/poulet legume.jpg', 92),
(89, 'img/recipe/chicken/chicken-coco.jpg', 93),
(90, 'img/recipe/chicken/chicken shahi.jpg', 94),
(91, 'img/recipe/indian/sandwich-indian.jpg', 95),
(92, 'img/recipe/indian/gambas kurma.jpg', 96),
(93, 'img/recipe/indian/seek-kebab.jpg', 97),
(94, 'img/recipe/indian/indianspcl.jpg', 98),
(95, 'img/recipe/seafoods/fish1.jpg', 99),
(96, 'img/recipe/seafoods/masala2.jpg', 100),
(97, 'img/recipe/seafoods/shrimbs.jpg', 101),
(98, 'img/recipe/seafoods/shalimar3.jpg', 102),
(99, 'img/recipe/seafoods/shrimbs krahi.jpg', 103),
(100, 'img/recipe/seafoods/gambas kurma.jpg', 104),
(101, 'img/recipe/seafoods/gambas chutney.jpg', 105),
(102, 'img/recipe/seafoods/shrimbs krahi.jpg', 106),
(103, 'img/recipe/seafoods/shrimps madras.jpg', 107),
(104, 'img/recipe/seafoods/4.jpg', 108),
(105, 'img/recipe/seafoods/shrimbs masala.jpg', 109),
(106, 'img/recipe/seafoods/gambas chutney.jpg', 110),
(107, 'img/recipe/seafoods/gambas krahi.jpg', 111),
(108, 'img/recipe/lamb/1.jpg', 112),
(109, 'img/recipe/lamb/kurma2.jpg', 113),
(111, 'img/recipe/lamb/aubergine4.jpg', 115),
(112, 'img/recipe/lamb/vindaloo5.jpg', 116),
(113, 'img/recipe/lamb/ginger6.jpg', 117),
(114, 'img/recipe/lamb/balti gost8.jpg', 118),
(115, 'img/recipe/lamb/dal9.jpg', 119),
(116, 'img/recipe/lamb/lamb1.jpg', 120),
(117, 'img/recipe/lamb/tikka masala11.jpg', 121),
(118, 'img/recipe/lamb/ginger6.jpg', 122),
(119, 'img/recipe/lamb/chicken6.jpg', 123),
(120, 'img/recipe/lamb/madras10.jpg', 124),
(121, 'img/recipe/lamb/krahi14.jpg', 125),
(122, 'img/recipe/kulfi2 (1).jpg', 126),
(123, 'img/recipe/halwa (1).jpg', 127),
(124, 'img/recipe/gulab1 (1).jpg', 128),
(125, 'img/recipe/gajor2 (1).jpg', 129);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sha_products`
--
ALTER TABLE `sha_products`
  ADD CONSTRAINT `sha_products_ibfk_1` FOREIGN KEY (`prodcut_category_id`) REFERENCES `sha_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sha_product_images`
--
ALTER TABLE `sha_product_images`
  ADD CONSTRAINT `sha_product_images_ibfk_1` FOREIGN KEY (`product_mapping_id`) REFERENCES `sha_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
