-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2017 at 07:37 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nattupuram`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `contactus_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contactus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE IF NOT EXISTS `distributors` (
  `distributors_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `product` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`distributors_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`distributors_id`, `name`, `emailid`, `phone`, `city`, `address`, `product`, `message`, `del_flag`, `cret_date`) VALUES
(1, 'test', 'veema@appinessworld.com', '987654321', 'zsfdfgdrfg', 'sdfsdgsdfg', 'oil', NULL, 'N', '2017-09-21 22:05:31'),
(2, 'sidhartha', 'veema@appinessworld.com', '987654321', 'zsfdfgdrfg', 'sdfsdgsdfg', 'oil', 'asasdasdasdasdasd', 'N', '2017-09-21 22:08:30'),
(3, 'bengaluru', 'veema@appinessworld.com', '987654321', 'zsfdfgdrfg', 'sdfsdgsdfg', 'oil', 'afADASDASDasd', 'N', '2017-09-21 22:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `name`, `emailid`, `subject`, `message`, `del_flag`, `cret_date`) VALUES
(1, 'can', '', '', 'dtjrfkcyj', 'N', '2017-08-20 00:42:19'),
(2, 'test', NULL, 'zdvxv', NULL, 'N', '2017-09-21 21:48:57'),
(3, 'test', NULL, 'asdawd', NULL, 'N', '2017-09-21 21:49:31'),
(4, 'test', 'veema@appinessworld.com', 'asdadsa', 'awsdawwsdawsd', 'N', '2017-09-21 21:50:18'),
(5, 'Racchana Kuppuraj', '', '', 'sdfsdf', 'N', '2017-10-23 06:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `Offers`
--

CREATE TABLE IF NOT EXISTS `Offers` (
  `offers_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `Offersabove` varchar(255) DEFAULT NULL,
  `Offersvalue` varchar(255) DEFAULT NULL,
  `code_text` varchar(255) DEFAULT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `coupon_text` text,
  `cret_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`offers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Offers`
--

INSERT INTO `Offers` (`offers_id`, `title`, `description`, `Offersabove`, `Offersvalue`, `code_text`, `coupon_code`, `coupon_text`, `cret_date`, `del_flag`, `category`) VALUES
(1, 'INAUGURAL OFFER', 'Flat 10% OFF.', NULL, '10%', 'Coupon : ', '', 'Please <a href="login.php">Register/Login</a> with us to avail this offer.', '2017-10-24 13:01:35', 'N', 'Welcome'),
(2, 'Ghee Offer', 'Flat 5% OFF.', NULL, '5%', 'Coupon : ', '', NULL, '2017-10-24 13:03:41', 'N', 'Ghee'),
(3, '3L EXTRA', 'Buy 3 Litre and Avail Extra Rs.20 Discount.', '3', '20', NULL, '3LEXTRA', NULL, '2017-11-20 10:07:10', 'N', 'Oil'),
(4, '5L EXTRA', 'Buy 5 Litre and Avail Extra Rs.50 Discount.', '5', '50', NULL, '5LEXTRA', '', '2017-11-20 10:07:10', 'N', 'Oil'),
(5, '3C1', 'Avail Extra Rs.20 Discount', NULL, '20', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 3C'),
(6, '3C2', 'Avail Extra Rs.15 Discount', NULL, '15', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 3C'),
(7, '3C3', 'Avail Extra Rs.20 Discount', NULL, '20', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 3C'),
(8, '3C4', 'Avail Extra Rs.25 Discount', NULL, '25', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 3C'),
(9, '3C5', 'Avail Extra Rs.25 Discount', NULL, '25', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 3C'),
(10, '3C6', 'Avail Extra Rs.15 Discount', NULL, '15', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 3C'),
(11, '3C7', 'Avail Extra Rs.20 Discount', NULL, '20', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 3C'),
(12, '5C1', 'Avail Extra Rs.50 Discount', NULL, '50', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 5C'),
(13, '5C2', 'Avail Extra Rs.50 Discount', NULL, '50', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 5C'),
(14, '5C3', 'Avail Extra Rs.50 Discount', NULL, '50', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 5C'),
(15, '5C4', 'Avail Extra Rs.50 Discount', NULL, '50', '', '', NULL, '2017-10-24 13:03:41', 'N', 'Combo 5C');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `main_img` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `sub_quantity` text,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `offers` text,
  `review_count` int(11) NOT NULL,
  `pro_type` varchar(255) NOT NULL,
  `gst_val` varchar(255) DEFAULT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `main_img`, `image1`, `image2`, `quantity`, `sub_quantity`, `price`, `description`, `offers`, `review_count`, `pro_type`, `gst_val`, `cret_date`, `del_flag`) VALUES
(1, 'Mara Chekku Ground Nut Oil - (Wood/Cold Pressed)', 'assets/images/product-details/groundnut.jpg', 'assets/images/product-details/groundnut.jpg', 'assets/images/product-details/groundnut.jpg', '1 Liter, 500ML, 3 Liter, 5 Liter', NULL, '299, 175, 897,1495', 'This natural Ground Nut Oil extracted by traditional cold press method using Mara Chekku/ Wooden Ghani. Since there is no heat generation in this process, oil is dense and keeps all its own flavor, aroma and nutrients intact.', 'CB5OFF, REFER05', 0, 'oil', '', '2017-09-22 15:42:44', 'N'),
(2, 'Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)', 'assets/images/product-details/sesame.jpg', 'assets/images/product-details/sesame.jpg', 'assets/images/product-details/sesame.jpg', '1 Liter, 500ML, 3 Liter, 5 Liter', NULL, '390, 220, 1170, 1950', 'This natural Sesame /Gingelly Oil extracted by traditional Cold Press method using Mara Chekku / Wooden Ghani. Since there is no Heat generation in this process, Oil is dense and keeps all its own flavor, aroma and nutrients intact.', 'CB5OFF, REFER05', 0, 'oil', '', '2017-09-22 15:45:35', 'N'),
(3, 'Mara Chekku Coconut Oil - (Wood/Cold Pressed)', 'assets/images/product-details/coconut.jpg', 'assets/images/product-details/coconut.jpg', 'assets/images/product-details/coconut.jpg', '1 Liter, 500ML, 3 Liter, 5 Liter', NULL, '330, 190, 990, 1650', ' This natural Coconut Oil extracted by traditional Cold Press method using Mara Chekku / Wooden Ghani. Since there is no Heat generation in this process, Oil is dense and keeps all its own flavor, aroma and nutrients intact.', 'CB5OFF, REFER05', 0, 'oil', '', '2017-09-22 15:47:24', 'N'),
(4, 'Cow Ghee', 'assets/images/product-details/ghee.jpg', 'assets/images/product-details/ghee.jpg', 'assets/images/product-details/ghee.jpg', '1 KG, 500 Gram, 250 Gram', NULL, '850, 445, 240', '100% Natural Homemade cow ghee. The milk used for ghee preparation taken from our own free range dairy farm - Healthy Cows. We Used traditional hand churned method. Zero Chemicals & preservatives added. Above all these makes our ghee to have great aroma, texture and flavor. The taste and quality of the ghee is comparable to our own Grandmother''s preparation. Made in small batches every week.', '', 0, 'ghee', '', '2017-09-22 15:48:48', 'N'),
(5, 'Cold Pressed Oil Trial Pack (200ML)', 'assets/images/product-details/sample.jpg', 'assets/images/product-details/samplejpg', 'assets/images/product-details/sample.jpg', '200 ML', NULL, '225', 'The pack contains 3 bottles of Coconut oil (200 ml), Ground nut Oil (200 ml), Sesame / Gingelly / Til Oil (200 ml)', '', 0, 'oil', '', '2017-11-21 09:44:25', 'N'),
(6, 'Combo Pack', 'assets/images/product-details/combo.jpg', 'assets/images/product-details/combo.jpg', 'assets/images/product-details/combo.jpg', '3 Liter, 5 Liter', '1LCoconut-1LGroundnut-1LSesame,2LGroundnut-1LCoconut,2LGroundnut-1LSesame,2LSesame-1LCoconut,2LSesame-1LGroundnut,2LCoconut-1LGroundnut,2LCoconut-1LSesame # 1LCoconut-2LSesame-2LGroundnut,3LGroundnut-1LSesame-1LCoconut,3LGroundnut-2LSesame,2LGroundnut-3LSesame', '1019, 928, 988, 1110, 1079, 959, 1050# 1708, 1617, 1677, 1768', 'Combination of Oil Products', NULL, 0, 'oil', '', '2017-11-21 09:53:49', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `product_benefits`
--

CREATE TABLE IF NOT EXISTS `product_benefits` (
  `benefits_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`benefits_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `product_benefits`
--

INSERT INTO `product_benefits` (`benefits_id`, `product_id`, `description`, `cret_date`, `del_flag`) VALUES
(1, 1, 'Boosts Fertility.', '2017-09-22 15:57:02', 'N'),
(2, 1, 'Skin & Hair Care (Rich Vit-E & Omega-6).', '2017-09-22 15:57:15', 'N'),
(3, 1, 'Strengthen Immune System.', '2017-09-22 15:57:27', 'N'),
(4, 1, 'Prevents from Heart Diseases, Alzheimer''s disease & Cancer.', '2017-09-22 15:57:37', 'N'),
(5, 1, 'Maintains Cholesterol level.', '2017-09-22 15:57:50', 'N'),
(6, 1, 'Reduces High Blood Pressure.', '2017-09-22 15:57:58', 'N'),
(7, 1, 'Helps to stabilize Blood Sugar .', '2017-09-22 15:58:06', 'N'),
(8, 1, 'Best for Kids healthy development.', '2017-09-22 15:58:15', 'N'),
(9, 2, 'Prevent Diabetes.', '2017-09-22 15:57:02', 'N'),
(10, 2, 'Oil Pulling for Dental Health.', '2017-09-22 15:57:15', 'N'),
(11, 2, 'Strengthens Bones & Prevents Osteoporosis.', '2017-09-22 15:57:27', 'N'),
(12, 2, 'Skin & Hair Care.', '2017-09-22 15:57:37', 'N'),
(13, 2, 'Maintains Cholesterol level and Reduces High Blood Pressure.', '2017-09-22 15:57:50', 'N'),
(14, 2, 'Reduces Hypertension.', '2017-09-22 15:57:58', 'N'),
(15, 2, 'Reduces Anxiety and Depression.', '2017-09-22 15:58:06', 'N'),
(16, 2, 'Rejuvenate Liver, Prevents Respiratory diseases & Kidney damage.', '2017-09-22 15:58:15', 'N'),
(17, 2, 'Best for Kids healthy development.', '2017-09-22 15:58:15', 'N'),
(18, 3, 'Prevent Wrinkles, Sagging Skin, Skin dryness and Flaking.', '2017-09-22 15:57:02', 'N'),
(19, 3, 'Reduces Protein loss in hair and nourishes the hair.', '2017-09-22 15:57:15', 'N'),
(20, 3, 'Treats Pancreatitis and Alzheimer''s disease.', '2017-09-22 15:57:27', 'N'),
(21, 3, 'Prevents and effectively cures Candida.', '2017-09-22 15:57:37', 'N'),
(22, 3, 'Improve Bone Health.', '2017-09-22 15:57:50', 'N'),
(23, 3, 'Helps in Easy Digestion.', '2017-09-22 15:57:58', 'N'),
(24, 3, 'Strengthens Immune System.', '2017-09-22 15:58:06', 'N'),
(25, 3, 'Prevents diseases affecting Liver and Kidney.', '2017-09-22 15:58:15', 'N'),
(26, 3, 'Effective in Handling damaged tissues and infections.', '2017-09-22 15:58:15', 'N'),
(27, 3, 'Rich in Lauric acid (a compound found in human breast milk) that fights against harmful pathogens.', '2017-09-22 15:58:15', 'N'),
(28, 3, 'Helps to maintain Blood Sugar and Cholesterol.', '2017-09-22 15:58:15', 'N'),
(29, 3, 'Best for Kids healthy development.', '2017-09-22 15:58:15', 'N'),
(30, 4, 'Taking out impurities from our body.', '2017-09-22 15:58:15', 'N'),
(31, 4, 'Stimulates muscle movements, strenghthen the sense organ.', '2017-09-22 15:58:15', 'N'),
(32, 4, 'Rich source of Vitamin A, D and E.', '2017-09-22 15:58:15', 'N'),
(33, 4, 'Lactose Free & contains no salt.', '2017-09-22 15:58:15', 'N'),
(34, 4, 'Better Digestion & helps in Hair growth also.', '2017-09-22 15:58:15', 'N'),
(35, 4, 'Stimulates muscle movements, strenghthen the sense organ.', '2017-09-22 15:58:15', 'N'),
(36, 4, 'Good source of energy and used in many diet styles especially in Paleo Diet.', '2017-09-22 15:58:15', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE IF NOT EXISTS `product_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  `shipping_cost` varchar(255) DEFAULT NULL,
  `originalAmt` varchar(255) DEFAULT NULL,
  `gstAmt` varchar(255) DEFAULT NULL,
  `ship_to` varchar(255) DEFAULT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_characteristics`
--

CREATE TABLE IF NOT EXISTS `product_characteristics` (
  `characteristics_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`characteristics_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product_characteristics`
--

INSERT INTO `product_characteristics` (`characteristics_id`, `product_id`, `description`, `cret_date`, `del_flag`) VALUES
(1, 1, 'Cold pressed groundnut oil has aureolin cobalt yellow with authentic flavor & aroma.', '2017-09-22 15:56:18', 'N'),
(2, 1, 'It has high smoking point. So it is ideal for Indian style of cooking and deep frying.', '2017-09-22 15:56:18', 'N'),
(3, 1, 'For better shelf life, store the oil in cool dark place away from light using clay utensils.', '2017-09-22 15:56:33', 'N'),
(4, 2, 'Cold pressed sesame oil has dark amber yellow color with authentic flavor and aroma.', '2017-09-22 15:56:18', 'N'),
(5, 2, 'It has medium high smoking point and used for most cooking, can take to fairly high temp.', '2017-09-22 15:56:18', 'N'),
(6, 2, 'For better shelf life, store the oil in cool dark place away from light using clay utensils.', '2017-09-22 15:56:33', 'N'),
(7, 3, 'Cold pressed sesame oil has white color with authentic Coconut flavor and aroma.', '2017-09-22 15:56:18', 'N'),
(8, 3, 'It has low smoking point & unsuitable for deep frying but suit for cooking at lower temp.', '2017-09-22 15:56:18', 'N'),
(9, 3, 'For better shelf life, store the oil in cool dark place away from light using clay utensils.', '2017-09-22 15:56:33', 'N'),
(10, 4, 'Don''t refrigerate and shelf life is 3 months from manufacturing date.', '2017-09-22 15:56:33', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `product_facts`
--

CREATE TABLE IF NOT EXISTS `product_facts` (
  `facts_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `facts_description` text NOT NULL,
  `fact_result` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`facts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `product_facts`
--

INSERT INTO `product_facts` (`facts_id`, `product_id`, `facts_description`, `fact_result`, `cret_date`, `del_flag`) VALUES
(1, 1, 'Energy', '884.01', '2017-09-22 15:52:19', 'N'),
(2, 1, 'Protein', '0', '2017-09-22 15:52:19', 'N'),
(3, 1, 'Cholestrol', '0', '2017-09-22 15:52:19', 'N'),
(4, 1, 'Saturated Fatty Acid', '15.97', '2017-09-22 15:52:19', 'N'),
(5, 1, 'Mono Unsaturated', '45.94', '2017-09-22 15:52:19', 'N'),
(6, 1, 'Poly Unsaturated', '31.95', '2017-09-22 15:54:50', 'N'),
(7, 1, 'Trans Fatty acid', '0', '2017-09-22 15:54:50', 'N'),
(8, 1, 'Oryzanol', 'BDL* (DL-10.0)', '2017-09-22 15:54:50', 'N'),
(9, 1, 'TBHQ (Antioxidant)', 'BDL* (DL-10.0)', '2017-09-22 15:54:50', 'N'),
(10, 2, 'Energy', '884.19', '2017-09-22 15:52:19', 'N'),
(11, 2, 'Protein', '0', '2017-09-22 15:52:19', 'N'),
(12, 2, 'Cholestrol', '0', '2017-09-22 15:52:19', 'N'),
(13, 2, 'Saturated Fatty Acid', '14.98', '2017-09-22 15:52:19', 'N'),
(14, 2, 'Mono Unsaturated', '39.55', '2017-09-22 15:52:19', 'N'),
(15, 2, 'Poly Unsaturated', '44.5', '2017-09-22 15:54:50', 'N'),
(16, 2, 'Trans Fatty acid', '0', '2017-09-22 15:54:50', 'N'),
(17, 2, 'Oryzanol', 'BDL* (DL-10.0)', '2017-09-22 15:54:50', 'N'),
(18, 2, 'TBHQ (Antioxidant)	', 'BDL* (DL-10.0)', '2017-09-22 15:54:50', 'N'),
(19, 3, 'Energy', '883.83', '2017-09-22 15:52:19', 'N'),
(20, 3, 'Protein', '0', '2017-09-22 15:52:19', 'N'),
(21, 3, 'Cholestrol', '0', '2017-09-22 15:52:19', 'N'),
(22, 3, 'Saturated Fatty Acid', '89.86', '2017-09-22 15:52:19', 'N'),
(23, 3, 'Mono Unsaturated', '7.98', '2017-09-22 15:52:19', 'N'),
(24, 3, 'Poly Unsaturated', '1.99', '2017-09-22 15:54:50', 'N'),
(25, 3, 'Trans Fatty acid', '0', '2017-09-22 15:54:50', 'N'),
(26, 3, 'Oryzanol', 'BDL* (DL-10.0)', '2017-09-22 15:54:50', 'N'),
(27, 3, 'TBHQ (Antioxidant)	', 'BDL* (DL-10.0)', '2017-09-22 15:54:50', 'N'),
(28, 4, 'Fat Content', '98.9%', '2017-09-22 15:54:50', 'N'),
(29, 4, 'Energy', '920.7kcal', '2017-09-22 15:54:50', 'N'),
(30, 4, 'Protein	', '0.15g', '2017-09-22 15:54:50', 'N'),
(31, 4, 'Moisture	', 'Less than 0.2g', '2017-09-22 15:54:50', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `product_methods`
--

CREATE TABLE IF NOT EXISTS `product_methods` (
  `method_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`method_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product_methods`
--

INSERT INTO `product_methods` (`method_id`, `product_id`, `description`, `cret_date`, `del_flag`) VALUES
(1, 1, 'The exceptional quality of sun dried raw ground nut seeds are placed to Wooden Ghani/ Mara Chekku and pressing produce Oil in bottom.', '2017-09-22 15:49:57', 'N'),
(2, 1, 'We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.', '2017-09-22 15:49:57', 'N'),
(3, 1, 'There is no Thermal/Refining process and no additives/chemical/preservatives added.', '2017-09-22 15:50:10', 'N'),
(4, 2, 'The exceptional quality of Sun dried raw sesame seeds plus palm jaggery (Panai Karupatti-to balance bitterness of seeds & to enhance its flavor) are placed to Wooden Ghani / Mara Chekku and pressing produce Oil in bottom.', '2017-09-22 15:49:57', 'N'),
(5, 2, 'We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.', '2017-09-22 15:49:57', 'N'),
(6, 2, 'There is no Thermal/Refining process and no additives/chemical/preservatives added.', '2017-09-22 15:50:10', 'N'),
(7, 3, 'The exceptional quality of Sun dried raw Coconut are placed to Wooden Ghani / Mara Chekku and pressing produce Oil in bottom.', '2017-09-22 15:49:57', 'N'),
(8, 3, 'We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.', '2017-09-22 15:49:57', 'N'),
(9, 3, 'There is no Thermal/Refining process and no additives/chemical/preservatives added.', '2017-09-22 15:50:10', 'N'),
(10, 4, 'Good for Health.', '2017-09-22 15:49:57', 'N'),
(11, 4, 'Hygienically processed.', '2017-09-22 15:49:57', 'N'),
(12, 4, 'Mouth Watering taste.', '2017-09-22 15:50:10', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `delivery_status` enum('Y','N') DEFAULT 'N',
  `sub_total` varchar(45) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `shipping_cost` varchar(255) DEFAULT NULL,
  `ship_to` varchar(255) DEFAULT NULL,
  `order_status` varchar(45) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `originalAmt` varchar(255) DEFAULT NULL,
  `gstAmt` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`order_id`, `transaction_id`, `user_id`, `cart_id`, `total`, `delivery_status`, `sub_total`, `product_id`, `shipping_cost`, `ship_to`, `order_status`, `payment_status`, `product_name`, `originalAmt`, `gstAmt`, `category`, `quantity`, `price`, `cret_date`, `del_flag`) VALUES
(1, NULL, NULL, NULL, '580', 'N', NULL, 1, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', '1Liter', '2', '290', '2017-10-23 08:36:02', 'N'),
(2, NULL, NULL, NULL, '435', 'N', NULL, 1, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', 'HalfLiter', '3', ' 145', '2017-10-23 08:37:37', 'N'),
(3, NULL, NULL, NULL, '290', 'N', NULL, 1, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', '1Liter', '1', '290', '2017-10-23 08:40:08', 'N'),
(4, NULL, NULL, NULL, '580', 'N', NULL, 1, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', '1Liter', '2', '290', '2017-10-23 08:41:10', 'N'),
(5, NULL, NULL, NULL, '290', 'N', NULL, 1, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', 'HalfLiter', '2', ' 145', '2017-10-23 08:43:54', 'N'),
(6, 7, NULL, NULL, '580', 'N', NULL, 1, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', '1Liter', '2', '290', '2017-10-23 08:44:22', 'N'),
(7, NULL, NULL, NULL, '1700', 'N', NULL, 4, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', '1Liter', '2', '850', '2017-10-25 13:17:08', 'N'),
(8, NULL, NULL, NULL, '188', 'N', NULL, 2, NULL, NULL, 'Pending', NULL, 'Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)', '', '', '250ML', '2', ' 94', '2017-10-27 07:23:38', 'N'),
(9, NULL, 2, NULL, '188', 'N', NULL, 2, NULL, NULL, 'Pending', NULL, 'Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)', '', '', '250ML', '2', ' 94', '2017-10-30 09:48:48', 'N'),
(10, NULL, 1, NULL, '188', 'N', NULL, 2, NULL, NULL, 'Pending', NULL, 'Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)', '', '', '250ML', '2', ' 94', '2017-10-30 11:20:48', 'N'),
(11, NULL, NULL, NULL, '1250', 'N', NULL, 4, NULL, NULL, 'Pending', NULL, 'Natural Homemade Ghee', '', '', '250ML', '5', ' 250', '2017-10-31 07:42:05', 'N'),
(12, NULL, 2, NULL, '188', 'N', NULL, 2, NULL, NULL, 'Pending', NULL, 'Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)', '', '', '250ML', '2', ' 94', '2017-10-31 10:44:43', 'N'),
(13, NULL, NULL, NULL, '807.5', 'N', NULL, 4, NULL, NULL, 'Pending', NULL, 'Cow Ghee', '', '', '1KG', '1', '807.5', '2017-12-12 15:15:51', 'N'),
(14, NULL, NULL, NULL, '897.1', 'N', NULL, 6, NULL, NULL, 'Pending', NULL, 'Combo Pack', '', '', '3Liter_1LCoconut-1LGroundnut-1LSesame', '1', '897.1', '2017-12-14 13:44:39', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `product_transaction`
--

CREATE TABLE IF NOT EXISTS `product_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `billing_addid` int(11) DEFAULT NULL,
  `shipping_addid` int(11) DEFAULT NULL,
  `sub_total` varchar(255) DEFAULT NULL,
  `total_amt` varchar(255) DEFAULT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `shipping_cost` varchar(255) DEFAULT NULL,
  `ship_to` varchar(255) DEFAULT NULL,
  `transaction_status` varchar(255) DEFAULT NULL,
  `platform_fees` varchar(255) DEFAULT NULL,
  `taxigst` varchar(255) DEFAULT NULL COMMENT 'Tax IGST/ SGST/ CGST',
  `taxmethod` enum('IGST','GST') DEFAULT NULL,
  `taxsgst` varchar(255) DEFAULT NULL,
  `taxcgst` varchar(255) DEFAULT NULL,
  `internet_fee` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `guest_orderid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product_transaction`
--

INSERT INTO `product_transaction` (`transaction_id`, `user_id`, `billing_addid`, `shipping_addid`, `sub_total`, `total_amt`, `cret_date`, `del_flag`, `shipping_cost`, `ship_to`, `transaction_status`, `platform_fees`, `taxigst`, `taxmethod`, `taxsgst`, `taxcgst`, `internet_fee`, `payment_id`, `phoneno`, `guest_orderid`) VALUES
(1, NULL, 2, NULL, NULL, '580', '2017-10-23 10:12:52', 'N', NULL, NULL, 'Success', NULL, NULL, NULL, NULL, NULL, NULL, 'pay_8sbVJgXFNykZyd', NULL, '6'),
(2, NULL, 3, NULL, NULL, '580', '2017-10-23 10:16:18', 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6'),
(3, NULL, 4, NULL, NULL, '580', '2017-10-23 10:19:06', 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6'),
(4, NULL, 5, NULL, NULL, '580', '2017-10-23 10:26:59', 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6'),
(5, NULL, 6, NULL, NULL, '580', '2017-10-23 10:28:04', 'N', NULL, NULL, 'Success', NULL, NULL, NULL, NULL, NULL, NULL, 'pay_8sblFYJhxVZS4I', NULL, '6'),
(6, NULL, 7, NULL, NULL, '580', '2017-10-23 10:37:41', 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6'),
(7, NULL, 8, NULL, NULL, '580', '2017-10-23 10:40:02', 'N', NULL, NULL, 'Success', NULL, NULL, NULL, NULL, NULL, NULL, 'pay_8sbxuHwMe1Xydi', NULL, '6');

-- --------------------------------------------------------

--
-- Table structure for table `referonline`
--

CREATE TABLE IF NOT EXISTS `referonline` (
  `referonline_id` int(11) NOT NULL AUTO_INCREMENT,
  `fromuser_id` varchar(255) DEFAULT NULL,
  `fromrefer_code` varchar(255) DEFAULT NULL,
  `torefercode` varchar(255) DEFAULT NULL,
  `toemailid` varchar(255) DEFAULT NULL,
  `fromemailid` varchar(255) DEFAULT NULL,
  `touser_id` varchar(255) DEFAULT NULL,
  `fromexpirydate` datetime NOT NULL,
  `toexpirydate` datetime DEFAULT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`referonline_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `password` text,
  `referal_code` varchar(255) DEFAULT NULL,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `name`, `emailid`, `password`, `referal_code`, `cret_date`, `del_flag`, `status`) VALUES
(1, 'admin', 'rachlee.scot@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ref21_1am', '2017-10-30 13:15:27', 'N', 'Y'),
(2, 'racchana', 'racchana@appinessworld.com', '0192023a7bbd73250516f069df18b500', 'ref24_2om', '2017-10-31 10:57:14', 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `message` text,
  `del_flag` enum('Y','N') DEFAULT 'N',
  `product_name` varchar(255) DEFAULT NULL,
  `product_img` text,
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `homePreview` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `product_id`, `name`, `emailid`, `city`, `message`, `del_flag`, `product_name`, `product_img`, `cret_date`, `homePreview`) VALUES
(2, NULL, 'R.Vasanthakumar', NULL, 'Bangalore', 'Most of guys doesn''t know the cooking, but being a bachelor who is staying outside his hometown knows the value of spending money when having outside food....\nIn such scenario he know the importance of home food which is cooked in delicious oil....yes NATTUPURAM oil made me to feel the difference of purity when compared to any other oil which I tasted so far... Nice smell, creating foam when you heat the oil which shows the originality of the oil,  yummy taste of groundnut oil, sesame oil and ghee is awesome.......Above all healthy tasty product which is worth for money.', 'N', NULL, NULL, '2017-10-25 12:39:23', 'N'),
(3, NULL, 'S.Maheshwaran', NULL, 'Bangalore', 'Natural authentic taste & smells really good', 'N', NULL, NULL, '2017-10-25 12:39:23', 'N'),
(4, NULL, 'Manoj', NULL, 'Chennai', 'After a lot of research, Finally I found out the most authentic brand of Cold Pressed Oil - Nattupuram. I have visited Nattupuram''s manufacturing unit this month. I have seen "Stone-Wood Chekku" - i.e., our traditional way of Oil extracting method. All market filled machineries are no where stand in front of their authentic production/ Cold Press process setup. Nothing added and nothing refined, It''s a RAW product. 100% Natural, Unadulterated, suitable to kids also. In the northern/southern Tamilnadu, Nattupuram is the sole player in the "Stone-Wood Chekku" . The premium quality of real cold pressed oil is 100% guaranteed that too with this price range. They explained & demonstrated full process.  I am fully satisfied & now my entire family & friends are using this healthy product. Friends Taste once,,, you could feel the authentic taste,,,  ', 'N', NULL, NULL, '2017-10-25 12:39:23', 'N'),
(5, NULL, 'Pushpa R', NULL, 'Chennai', 'Sesame Oil is my favorite. The real natural Oil and smells very good. We are using it for all kind of cooking. For deep fry Groundnut Oil is best. Satisfied with money spent.', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(6, NULL, 'Ghandimathi', NULL, 'Chennai', 'I used Wood pressed groundnut oil, sesame oil and ghee from (nattupuram) is original. Oil fragrance makes your mouth watering to taste it, over all quality is good.', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(7, NULL, 'Latha Shankar', NULL, 'Cuddalore', 'Ghee smell is so awesome & too delicious. Thanks for genuine quality product that too in affordable price compare to other brands available in market.', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(8, NULL, 'Swathi', NULL, 'Chennai', 'My grandpa amazed about the smell and quality of Oil & Ghee. My Grandpa''s special blessings to Nattupuram.com. Thank you dada,,', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(9, NULL, 'Bharathi', NULL, 'Coimbatore', 'Products are upto the quality... Cost efficient... Ghee is my most likely product... They are rich in taste... Yummy.....', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(10, NULL, 'Meena', NULL, 'Coimbatore', 'I only trust this brand for Cold pressed Oil & ghee and love the taste, Its authentic.', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(11, NULL, 'S.Bhuvaneshwari Sattanathan', NULL, 'Pondicherry', 'What a smell,,,, this is what a real natural Oil,,, I''m crazy on groundnut Oil smelll. Yummy,,,', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(12, NULL, 'R.Aswini', NULL, 'Chennai', 'Sesame Oil is too good and it tastes was nice while eating. Worth buying it', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(13, NULL, 'Sujitha', NULL, 'Chennai', 'Very good quality and aroma.. Keep the same in future.', 'N', NULL, NULL, '2017-12-12 14:39:45', 'N'),
(14, NULL, 'Rathina', NULL, 'Bangalore', 'aroma and taste is excellent. Good quality with affordable price. Pls consider glass bottle instead of plastic, since plastic bottle does not suit for the quality of the oil.', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(15, NULL, 'KalaRani', NULL, 'Bangalore', 'It''s good... smell & taste also fine. Oil density is high so only less quantity is needed for cooking', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(16, NULL, 'Arunkumar', NULL, 'Bangalore', 'I bought Coconut Oil for my baby. Really great quality.  ', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(17, NULL, 'Surya', NULL, 'Chennai', 'Ghee''s aroma & texture is excellent. Obviously better than other ghee brands which are easily available in market. Your Cold pressed Oil is really authentic. I fully satisfied with your quality of products.', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(18, NULL, 'Sundaramabal', NULL, 'Bangalore', 'Smells & quality leads to old age memories. Felt original taste of  traditionally processed Oil. All the best for Nattupuram team !!! Thank you for timely delivery.', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(19, NULL, 'Raji', NULL, 'Bangalore', 'Quality is too good. Food is more delicious while cooking using groundnut oil. We are  using Gingelly oil for Oil Pulling. It''s really natural and healthy product. ', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(20, NULL, 'Indira', NULL, 'Bangalore', 'GNut oil is very dense & smells authentic... Ghee is so fresh & excellent aroma,,, Tastyyy,,', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(21, NULL, 'Nirmal', NULL, 'Villupuram', 'In search of pure fresh ghee, I tried many brands but none is equal to the taste of my grandma used to make it in home. Finally after year of changing and trying several products I found this brand in online. First of all its aroma attract me to buy because it giving smell of the real Ghee which I am looking from several years. \r\nI am seriously telling you will get the mouth watering ghee flavor in your sweets cooked using this ghee. Nattupuram Ghee is surely recommended who are still searching for authentic ghee taste and  love the aroma of pure ghee.', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(22, NULL, 'Jaqulin Sundar', NULL, 'Pondicherry', 'Nattupuram Oil is really a virgin product. Flavor & tastes are excellent.', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(23, NULL, 'Vijayalakshmi', NULL, 'Chennai', 'Flavor of Groundnut Oil is good,, Coconut Oil smells gud and using as hair oil & noticing hair fall reduced.', 'N', NULL, NULL, '2017-12-12 14:44:34', 'N'),
(24, NULL, 'Abinaya', NULL, 'Abinaya', 'Special thanks to Nattupuram team for the availability of traditional product at this  period of time. I am using it for my baby with full confident.  ', 'N', NULL, NULL, '2017-12-12 14:45:46', 'N'),
(25, NULL, 'Sethumathavan', NULL, 'Trichy', 'Using groundnut oil for cooking, aroma is very good and packing was neat. Thank you for your quality product. Reduced my work for searching to find traditional product', 'N', NULL, NULL, '2017-12-12 14:46:04', 'N'),
(26, NULL, 'Kanmani', NULL, 'Bangalore', 'I was well satisfied with all the three oil''s quality and flavor, remains the same for long term. worth for the money', 'N', NULL, NULL, '2017-12-12 14:46:20', 'N'),
(27, NULL, 'Swathi', NULL, 'Bangalore', 'Thank you for your natural products. smells exceptional', 'N', NULL, NULL, '2017-12-12 14:46:34', 'N'),
(28, NULL, 'Subashree', NULL, 'Chennai', 'I am using your sesame oil for my baby''s full body massage instead of baby oil. Its more healthy and natural. Thank you Nattupuram for providing Traditionally processed quality oil. Keep it up.', 'N', NULL, NULL, '2017-12-12 14:50:10', 'N'),
(29, NULL, 'Ramya', NULL, 'Bangalore', 'Coconut oil smells good and remains the same in  long term & am using it for my kid.', 'N', NULL, NULL, '2017-12-12 14:50:10', 'N'),
(30, NULL, 'Amreto', NULL, 'Pondicherry', 'I kept reading about the benefits of Ghee in my research on, whole, true foods. I am beyond happy with this product. It is so tasty, fresh, and I have been using it in all types of cooking. I will be ordering again soon.\r\nI''m constantly looking for ways to get healthy fats in my kid''s diet and the Pure Indian Foods Ghee is a cupboard staple now. I use it to fry veggies, eggs, quesadillas, to grease pans for baking... I love it! Buy it! You won''t be disappointed! It adds such a rich and tasty flavor to food. Very very happy with my purchase! ', 'N', NULL, NULL, '2017-12-12 14:50:10', 'N'),
(31, NULL, 'Priya', NULL, 'Villupuram', 'Very good aroma and also no stickiness. super and good for health. Confident to use all products from Nattupuram and the quality is simply superb. ', 'N', NULL, NULL, '2017-12-12 14:50:10', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE IF NOT EXISTS `user_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `landmark` text,
  `pincode` varchar(255) NOT NULL,
  `alter_phone` varchar(255) DEFAULT NULL,
  `default` enum('Y','N') NOT NULL DEFAULT 'N',
  `del_flag` enum('Y','N') NOT NULL DEFAULT 'N',
  `cret_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guest_orderid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`address_id`, `user_id`, `name`, `phoneno`, `address1`, `address2`, `country`, `state`, `city`, `landmark`, `pincode`, `alter_phone`, `default`, `del_flag`, `cret_date`, `guest_orderid`) VALUES
(1, NULL, 'Test Guest', '9008184281', 'Address1', 'Address2', 'Bengaluru', 'India', 'Karnataka', NULL, '560095', NULL, 'N', 'N', '2017-10-23 09:43:28', '6'),
(2, NULL, 'Test Guest', '9008184281', 'Address1', 'Address2', 'Bengaluru', 'India', 'Karnataka', NULL, '560095', NULL, 'N', 'N', '2017-10-23 10:12:52', '6'),
(3, NULL, 'Test Guest', '9008184281', 'Address1', 'Address2', 'Bengaluru', 'India', 'Karnataka', NULL, '560095', NULL, 'N', 'N', '2017-10-23 10:16:18', '6'),
(4, NULL, '', '', '', '', '', '', '', NULL, '', NULL, 'N', 'N', '2017-10-23 10:19:06', '6'),
(5, NULL, 'Testing Guest', '9008184281', 'Address4', 'Address6', 'Bengaluru', 'India', 'Karnataka', NULL, '560095', NULL, 'N', 'N', '2017-10-23 10:26:59', '6'),
(6, NULL, 'Testing Guest', '9008184281', 'Address4', 'Address6', 'Bengaluru', 'India', 'Karnataka', NULL, '560095', NULL, 'N', 'N', '2017-10-23 10:28:04', '6'),
(7, NULL, 'test ', '9008184281', 'Address 1', 'aadddresss2', 'Bengaluru', 'India', 'Karnataka', NULL, '560095', NULL, 'N', 'N', '2017-10-23 10:37:41', '6'),
(8, NULL, 'test', '9008184281', 'addresss22', '', 'Bengaluru', 'India', 'Karnataka', NULL, '560095', NULL, 'N', 'N', '2017-10-23 10:40:02', '6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
