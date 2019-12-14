-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 06:46 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Nehal', 'Nehal@123', 'nehal1234'),
(2, 'Gopal', 'gopal@123', 'gopal123'),
(3, 'Raj', 'raj@123', 'raj123'),
(4, 'Dhaval', 'dhaval@123', 'dhaval123'),
(5, 'Ankit', 'ankit@123', 'ankit123'),
(7, 'Yash', 'yash@123', 'yash123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(30) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`area_id`, `area_name`, `city_id`) VALUES
(1, 'Astodia Chakla', 0),
(2, 'Paldi', 0),
(3, 'Gota', 0),
(4, 'Maninagar', 0),
(5, 'Ambavadi', 0),
(7, 'Navrangpura', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'cashew-peeling-machine'),
(2, 'Cashew Drying Machine'),
(3, 'Cashew Drying Machine'),
(4, 'Cashew Drying Machine');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`) VALUES
(1, 'Ahmedabad'),
(2, 'Vadodara'),
(3, 'Rajkot'),
(4, 'Gandhinagar'),
(5, 'Morbi'),
(6, 'Mahesana');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(30) NOT NULL,
  `faq_answer` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(1, ' yeuwiuerieyrwegfiwegfygefgiye', ' ueiugeiugeiwguiegwuiegwuieg'),
(2, 'rkjeigseiguieugfiergfeifgirufg', 'iuiugefuigeiugeirfgeirfgfigfei'),
(3, 'sohfsiufiueruierurhfierhfhrfhf', 'ieuhieurhiuerhfeifheruifheuihr'),
(4, 'siusiurgisuergsiergseiruglserg', 'isugeiurheurhgieurhgerugugieur'),
(5, 'aeriseiguskfbjvsdvuilrsglhig', 'bfvsfveruiierglirieiygserig'),
(6, 'eriuhweigheuigeriugeuirlshuigh', 'lwerhgliehrguierhgheruihjkvnbv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_details` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `user_id`, `order_details`) VALUES
(1, '2019-01-01', 0, ''),
(2, '2019-01-02', 0, ''),
(3, '2019-01-03', 0, ''),
(4, '2019-01-04', 0, ''),
(5, '2019-01-05', 0, ''),
(6, '2019-01-06', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE IF NOT EXISTS `tbl_orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `order_details` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_quantity` bigint(20) NOT NULL,
  `order_price` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orderdetails`
--

INSERT INTO `tbl_orderdetails` (`orderdetails_id`, `order_details`, `order_id`, `product_id`, `order_quantity`, `order_price`) VALUES
(1, 'ygduwdduwgd', 1, 2, 10, 10000),
(2, 'wiufwiufwuiegfwgefwuigfieg', 2, 2, 20, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordermaster`
--

CREATE TABLE IF NOT EXISTS `tbl_ordermaster` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `shipping_name` varchar(30) NOT NULL,
  `shipping_mobile` bigint(20) NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ordermaster`
--

INSERT INTO `tbl_ordermaster` (`order_id`, `user_id`, `order_date`, `order_status`, `shipping_name`, `shipping_mobile`, `shipping_address`, `area_id`) VALUES
(1, 0, '2019-01-01', 'cancle', 'yash gandhi', 9824812198, '  astodia  ', 1),
(2, 0, '2019-01-02', 'panding', 'raj shah', 9824812198, 'gota', 3),
(3, 0, '2019-01-03', 'Shipping', 'rahul shah', 8980544320, 'ambavadi', 5),
(4, 0, '2019-01-04', 'cancle', 'done', 8980654230, 'maninagar', 4),
(5, 0, '2019-01-27', 'cancle', 'gopal shah', 8975347230, 'navrangpura', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_details` varchar(80) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_details`, `product_price`, `product_image`) VALUES
(1, 'Cashew Scooping Machine', 'We are manufacturing various kind of Cashew Scooping Machines which are very eas', 10000, 'upload/Desert.jpg'),
(2, 'Manual Raw Cashew Grading Mach', 'The Manual Cashew Grading Machine is easy to drive and manually operated machine', 15000, 'upload/Chrysanthemum.jpg'),
(3, 'Fully Auto Cashew Shelling Mac', 'The Fully Automatic Cashew Shelling / Cutting Machine of Akshar Engineers is No.', 13000, 'upload/Desert.jpg'),
(4, 'Fully Auto Cashew Cutting Mach', 'Fully Auto Cashew Cutting Machinehe Fully Automatic Cashew Shelling / Cutting Ma', 20000, 'upload/Desert.jpg'),
(5, 'Cashew Scooping Machine', 'he Fully Automatic Cashew Shelling / Cutting Machine (2 blades) of Akshar Engine', 14000, 'upload/Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productphoto`
--

CREATE TABLE IF NOT EXISTS `tbl_productphoto` (
  `productphoto_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `productphoto_path` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_productphoto`
--

INSERT INTO `tbl_productphoto` (`productphoto_id`, `product_id`, `productphoto_path`) VALUES
(1, 1, 'upload/1548145175Desert.jpg'),
(2, 2, 'upload/1548145184Hydrangeas.jpg'),
(3, 4, 'upload/1548145193Jellyfish.jpg'),
(4, 4, 'upload/1548145209Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermaster`
--

CREATE TABLE IF NOT EXISTS `tbl_usermaster` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usermaster`
--

INSERT INTO `tbl_usermaster` (`user_id`, `user_name`, `user_gender`, `user_email`, `user_password`, `user_mobile`, `user_address`, `area_id`) VALUES
(1, 'Nehal', 'Male', 'nehal@123', 'nehal123', 8980544320, 'Astodia', 1),
(2, 'raj', 'Male', 'taj@123', 'raj123', 9876543210, 'Paldi', 2),
(3, 'gopal', 'Male', 'gopal@123', 'gopal123', 1352839036, 'gota', 3),
(4, 'rani', 'Female', 'rani@123', 'rani123', 8372618374, 'ambavadi', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `city_id_2` (`city_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`);

--
-- Indexes for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_productphoto`
--
ALTER TABLE `tbl_productphoto`
  ADD PRIMARY KEY (`productphoto_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_usermaster`
--
ALTER TABLE `tbl_usermaster`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_productphoto`
--
ALTER TABLE `tbl_productphoto`
  MODIFY `productphoto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_usermaster`
--
ALTER TABLE `tbl_usermaster`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
