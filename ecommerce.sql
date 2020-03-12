-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 09:55 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_num` varchar(10) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile_num`, `profile_pic`, `status`) VALUES
(22, 'tulika', 'tulika@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '985757851', '1515957861420 - Copy - Copy.jpg', 'active'),
(31, 'heena', 'heena@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9714972583', 'IMG_20150125_093427 - Copy - Copy.jpg', 'active'),
(35, 'KRUTI', 'kt@gmail.com', 'c07108b859ce0088b39ae4ccbb8627e4', '9687178442', 'PicsArt_12-26-06.56.51 - Copy.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bann_id` int(11) NOT NULL,
  `bann_name` varchar(255) NOT NULL,
  `bann_desc` varchar(255) NOT NULL,
  `bann_image` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bann_id`, `bann_name`, `bann_desc`, `bann_image`, `status`) VALUES
(5, 'b1', 'monsoon', 'a.jpg', 'active'),
(6, 'Gym', '#Baani Judge			              ', '1515774936439 - Copy.jpg', 'active'),
(7, 'Selena-Justin', '			Singer of the yr              				              ', 'image - Copy.jpg', 'active'),
(8, 'Selena', '			              				              ', 'large (1) - Copy.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `ord_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `trans_id`, `pro_id`, `price`, `quantity`, `total_amount`, `ord_id`, `shipping_id`, `status`, `ip`) VALUES
(90, 30, 0, 68, '50000', 2, '100000', 69, 0, 'active', '::1'),
(97, 34, 0, 43, '500', 1, '500', 70, 0, 'active', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `description`, `cat_img`, `status`) VALUES
(14, 'Electronics', '			              	', '3b3d41d27f86b98bcfab552bf5bb2cc6--pics-of-selena-gomez-selena-gomez-bikini - Copy.jpg', 'active'),
(15, 'Women', '			              	', '586461341-hd-wallpaper-selena-gomez-wallpapers - Copy.jpg', 'active'),
(16, 'Men', '			              	', 'Justin-Bieber-Selena-Gomez-2012-HD-Wallpaper-1080x901 - Copy.jpg', 'active'),
(17, 'Kids', '			              	', '_20171209_071333 - Copy - Copy.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(10) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `contact_no`, `status`) VALUES
(1, '$name', '$email', '$sub', '$msg', '0', ''),
(2, 'abc', 'pqr@gmail.com', 'php', 'sucks', '123456789', ''),
(3, 'Kruti', 'krutimittal3303@gmail.com', 'php', 'SUCKS', '2147483647', ''),
(5, 'sanaa78', 'sanaa75@gmail.com', 'php0', 'hjkkjkjjk', '2147483647', 'active'),
(6, 't1', 't1@yahoo', 'test', 'php', '9687178442', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `content_setting`
--

CREATE TABLE `content_setting` (
  `content_id` int(11) NOT NULL,
  `content_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ord_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` varchar(255) NOT NULL,
  `trans_id` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ord_id`, `pro_id`, `user_id`, `cart_id`, `trans_id`, `total_amount`, `status`) VALUES
(37, 0, 30, '39,40,41,', '0', '700', 'active'),
(38, 0, 30, '39,40,41,', '0', '700', 'active'),
(39, 0, 28, '42,', '0', '700', 'active'),
(40, 0, 30, '39,40,41,', '0', '700', 'active'),
(41, 0, 30, '39,40,41,44,', '0', '700', 'active'),
(42, 0, 30, '39,40,41,44,', '0', '700', 'active'),
(43, 0, 30, '39,40,41,44,', '0', '700', 'active'),
(44, 0, 30, '44,', '0', '700', 'active'),
(46, 0, 28, '47,', '0', '700', 'active'),
(47, 0, 28, '47,48,', '0', '700', 'active'),
(48, 0, 28, '49,50,', '0', '700', 'active'),
(49, 0, 28, '49,50,', '0', '700', 'active'),
(50, 0, 28, '51,', '0', '700', 'active'),
(51, 0, 30, '', '0', '700', 'active'),
(52, 0, 30, '55,', '0', '700', 'active'),
(53, 0, 30, '55,56,', '0', '700', 'active'),
(54, 0, 30, '58,59,', '0', '700', 'active'),
(55, 0, 27, '61,', '0', '700', 'active'),
(56, 0, 30, '64,', '0', '700', 'active'),
(57, 0, 27, '65,66,', '0', '700', 'active'),
(58, 0, 27, '65,66,68,', '0', '700', 'active'),
(59, 0, 27, '69,', 'txcbvgh455', '700', 'active'),
(60, 0, 27, '69,70,', '4RW37580672741833', '700', 'active'),
(61, 0, 27, '82,', '', '700', 'active'),
(62, 0, 27, '82,83,', '93G2962085571142C', '700', 'active'),
(63, 0, 30, '84,', '', '700', 'active'),
(64, 0, 30, '84,85,', '0HG10283FP399771N', '700', 'active'),
(65, 0, 30, '84,85,', '', '700', 'active'),
(66, 0, 30, '84,85,', '', '700', 'active'),
(67, 0, 30, '84,85,86,', '', '100200', 'active'),
(68, 0, 30, '90,', '', '5505500', 'active'),
(69, 0, 30, '90,', '', '5505000', 'active'),
(70, 0, 34, '97,', '38U33495RP1808908', '700', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `cat_id`, `sub_cat_id`, `user_id`, `pro_name`, `amount`, `quantity`, `description`, `pro_img`, `status`) VALUES
(39, 14, 41, 0, 'HP-Core-i7', '50000', '1', '			              				              ', '11007967-hp-core-i7-7th-gen8gb256gb-ssdwin-10-home133-inches-13-u135tu-x360-2-in-1-laptopnatural-silver-picture-big.jpg', 'active'),
(40, 14, 41, 0, 'Acer-iconica', '40000', '1', '			              				              ', '7314-215612-acer-iconia-w7-windows-tablet.jpg', 'active'),
(41, 14, 41, 0, 'Lenovo-z51', '50000', '1', '			              				              ', '20158-127884-product_original-laptop-lenovo-ideapad-z51-70-i3-5005u-156fhd-4gb-1008gb-r7m360-w81-80k600eapb1.jpg', 'active'),
(42, 14, 41, 0, 'Latest-gaming-laptop-gtx-1080ti-i7-7700k', '50000', '1', '			              				              ', 'Latest-gaming-laptop-gtx-1080ti-i7-7700k.jpg', 'active'),
(43, 15, 44, 0, 'Chowker', '500', '1', '			              				              ', 'choker-necklace-2.jpg', 'active'),
(44, 15, 44, 0, 'Ring', '500', '1', '			              				              ', 'Popular-items-for-teenage-girl-rings.jpg', 'active'),
(45, 15, 44, 0, 'Hair-chopstick', '500', '1', '			              				              ', 'Vintage-Retro-Flower-Tassel-Handmade-Hair-Sticks-Hair-Chopsticks-Chinese-Bridal-Wedding-Tiara-Hair-Jewelry-for.jpg_640x640.jpg', 'active'),
(46, 15, 44, 0, 'necklace', '5000', '1', '			              				              ', 'download (1).jpg', 'active'),
(47, 15, 44, 0, 'earring', '5000', '1', '			              				              ', 'edit-18feb-5.jpg', 'active'),
(48, 15, 43, 0, 'Tops', '50000', '1', '			              				              ', 'girls-top-dress-250x250.jpg', 'active'),
(49, 15, 43, 0, 'Jumpsuit', '50000', '1', '			              				              ', '2015-nova-moda-macac-es-pretos-mulheres-roupas.jpg', 'active'),
(50, 15, 43, 0, 'One-Piece', '50000', '1', '			              				              ', 'Straight-Wave-Collar-Strapless-A-Line-Mid-Long-Dress-Black-Color-One-Piece-Dress-Formal-Dress-3475.jpg', 'active'),
(51, 15, 43, 0, 'Top2', '50000', '1', '			              				              ', '2014-latest-trendy-womens-hot-sale-solid.jpg', 'active'),
(52, 15, 43, 0, 'Formal', '50000', '1', '			              				              ', '618YeMYezfL._UY741_.jpg', 'active'),
(53, 16, 46, 0, 'Adidas_shoes', '10000', '1', '			              				              ', 'images (2).jpg', 'active'),
(54, 16, 46, 0, 'Sneaker', '10000', '1', '			              				              ', '31-054803-best_slip_on_shoes_for_men.jpg', 'active'),
(55, 16, 46, 0, 'Formal_shoes', '10000', '1', '			              				              ', '629145_mrp_fr_l.jpg', 'active'),
(56, 16, 45, 0, 'Shirt1', '50000', '1', '			              				              ', '2014-fashion-stylish-check-shirt-men-new.jpg_350x350.jpg', 'active'),
(57, 16, 45, 0, 'Shirt2', '50000', '1', '			              				              ', 'wholesale-2016-casual-shirts-men-5xl-designer.jpg', 'active'),
(58, 16, 45, 0, 'T-shirt1', '50000', '1', '			              				              				              			              ', '2017-New-Arrival-Summer-mens-Hooded-t-shirt-novelty-fashion-cap-t-shirts-men-casual-crop.jpg', 'active'),
(59, 16, 45, 0, 'T-shirt2', '50000', '1', '			              				              ', 'images (9).jpg', 'active'),
(60, 16, 45, 0, 'T-shirt3', '50000', '1', '			              				              ', 'SWENEARO-high-quality-men-t-shirt-brand-clothing-2018-summer-new-fashion-geometry-design-mens-t__48771.1523708262.jpg', 'active'),
(61, 17, 47, 0, 'Soft_toy_panda', '50000', '1', '			              				              ', 'Kids Toys Big Panda Plush Toys Children Kids Cartoon Animals Toy Cute PP Cotton Plush Animals Baby Girls Stuffed Toys 18CM22CM30CM40CM Mq6JZl1k.jpg', 'active'),
(62, 17, 47, 0, 'Soft_toy_pikachu', '50000', '1', '			              				              ', 'korea-design-14inch-high-quality-plush-toys-childrens-gift-toy-kids-cartoon-peluche-pokemon-pikachu-plush-doll-soft-toy-5722-47653431-341e04ed7816e84fd7e815e4107249fc-catalog_233.jpg', 'active'),
(63, 17, 47, 0, 'Minions', '50000', '10', '			              				              ', 'hot-toys-2015.jpg', 'active'),
(64, 17, 47, 0, 'toy1', '50000', '10', '			              				              ', 'images (3).jpg', 'active'),
(65, 17, 47, 0, 'car', '50000', '10', '			              				              ', 'a5253d0d2a7887f19cbbeb6503366a24TYRCDANCAR.jpg', 'active'),
(66, 17, 48, 0, 'Dress1', '50000', '1', '			              				              ', 'kids-lehenga-500x500.jpg', 'active'),
(67, 17, 48, 0, 'Dress2', '50000', '1', '			              				              ', 'images (5).jpg', 'active'),
(68, 17, 48, 0, 'Dress3', '50000', '1', '			              				              ', 'TANGUOANT-Free-shipping-hot-sale-summer-clothing-sets-kids-pants-Top-boys-girls-Navy-Stripe-kids_HTB1e_gyHFXXXXXpaXXXq6xXFXXXx_640_100000.jpg', 'active'),
(69, 17, 48, 0, 'Dress4', '50000', '1', '			              				              ', 'Autumn-Kids-Clothes-Ninjago-Children-Hoodies-Long-Sleeve-Girls-Clothes-Tracksuit-Baby-Boys-Clothing-Kids-Casual_grande.jpg', 'active'),
(70, 17, 48, 0, 'Dress_Minions', '50000', '10', '			              				              ', 'product-image-251430198_grande.jpg', 'active'),
(71, 14, 42, 0, 'iPhone-7+', '100000', '1', '			              				              ', 'images.jpg', 'active'),
(72, 14, 42, 0, 'Vivo', '50000', '1', '			              				              ', 'MC_thumb_350_v1.jpg', 'active'),
(73, 14, 42, 0, 'Lenovo-k6-note', '50000', '1', '			              				              ', 'VB201705171774173-ak_LWBP1244307650-1514455433.jpeg', 'active'),
(74, 14, 42, 0, 'iPhone-6+', '50000', '1', '			              				              ', 'iphone_6_plus_16gb_silver_10551139_0-500x633.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `pin1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pin2` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipp_id`, `user_id`, `order_id`, `fname`, `lname`, `company_name`, `email`, `contact_no`, `address1`, `pin1`, `address2`, `pin2`, `country`, `city`, `status`) VALUES
(23, 30, 45, 'fname', 'lname', 'cname', 'company@yahoo.in', '9687178442', 'New vadaj', '1234', '', '', '$', '', 'active'),
(42, 30, 63, '', '', '', '', '', 'demo1', '', 'demo2', '', '$', '', 'active'),
(48, 34, 70, 'x', 'y', 'z', 'xyz@gmail.com', '8585858585', 'xyz1', '1234', 'xyz2', '5678', '$', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `cat_id`, `sub_cat_name`, `description`, `profile`, `status`) VALUES
(41, 14, 'Laptops', '			              				              				              			              ', 'Latest-gaming-laptop-gtx-1080ti-i7-7700k.jpg', 'active'),
(42, 14, 'Mobiles', '			              				              ', 'iphone_6_plus_16gb_silver_10551139_0-500x633.jpg', 'active'),
(43, 15, 'Women_Clothes', '			              				              ', 'images (6).jpg', 'active'),
(44, 15, 'Women_Accessories', '			              				              ', 'images (1).jpg', 'active'),
(45, 16, 'Men_Clothes', '			              				              ', 'images (9).jpg', 'active'),
(46, 16, 'Men_Foot-Wears', '			              				              ', 'images (2).jpg', 'active'),
(47, 17, 'Toys', '			              				              ', 'images (4).jpg', 'active'),
(48, 17, 'Kids_Clothes', '			              				              ', 'download (2).jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Female','male','other') NOT NULL,
  `language` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `mid_name`, `lname`, `email`, `mobile_num`, `password`, `gender`, `language`, `country`, `birthday`, `profile_pic`, `status`) VALUES
(32, 'Krushna', 'M', 'Shah', 'krushna@gmail.com', '9696969696', '123456', 'Female', 'Gujarati,English,Hindi,Chinese', 'India', '2018-07-01', '1509625655871 - Copy - Copy.jpg', 'active'),
(33, 'Tulika', 'M', 'Y', 'tulika@gmail.com', '8585969696', 'heena', 'Female', 'Gujarati,English,Hindi,Chinese,Urdu', 'US', '2018-07-02', '15940948_755029677981388_7836749953642079097_n.jpg', 'active'),
(34, 'KT', 'M', 'Y', 'kt@gmail.com', '968596859685', 'heenmit', 'Female', 'Gujarati,English,Hindi,Chinese,Urdu,French', 'India', '2018-07-07', '1513341807325 - Copy - Copy.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bann_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_setting`
--
ALTER TABLE `content_setting`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipp_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content_setting`
--
ALTER TABLE `content_setting`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
