-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 05:53 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xyzshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Cloth Brand'),
(7, 'nikkon'),
(8, 'paulo coelho'),
(9, 'robin sharma'),
(10, 'royal brand'),
(11, 'bell natural wood');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(22, 10, '0', 0, 'Red Ladies dress', 'red dress.JPG', 1, 1000, 1000),
(25, 20, '0', 3, 'induction', '41Gy0witxvL._AC_US160_.JPG', 1, 2000, 2000),
(26, 19, '0', 3, 'Refrigerator', '31JNM2RxSaL._AC_US160_.JPG', 1, 25000, 25000),
(28, 1, '0', 2, 'Samsung Duos 2', 'samsung mobile.JPG', 2, 5000, 10000),
(30, 2, '0', 2, 'iPhone 5s', 'iphone mobile.JPG', 1, 25000, 25000),
(31, 3, '0', 2, 'iPad', 'ipad.JPG', 1, 30000, 30000),
(35, 6, '0', 7, 'Hp Laptop r series', '31r2MG3KuaL._AC_US160_.JPG', 1, 35000, 35000),
(36, 7, '0', 7, 'Laptop Pavillion', '41FIRANLqKL._AC_US160_.JPG', 1, 50000, 50000),
(37, 6, '0', 4, 'Hp Laptop r series', '31r2MG3KuaL._AC_US160_.JPG', 1, 35000, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wears'),
(3, 'Mens wear'),
(4, 'Kids Wear'),
(5, 'Furnitures'),
(6, 'Home Appliances'),
(7, 'Electronics Gadgets'),
(8, 'book'),
(9, 'cameras'),
(10, 'Mens foot wear'),
(11, 'ladies foot wear');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE IF NOT EXISTS `customer_order` (
`id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `trx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 2, 'Samsung Duos 2', 5000, 'Samsung Duos 2 sgh', 'samsung mobile.JPG', 'Samsung Duos mobile electronics'),
(2, 1, 3, 'iPhone 5s', 25000, 'iphone 5s', 'iphone mobile.JPG', 'mobile iphone apple electronics'),
(3, 1, 3, 'iPad', 30000, 'ipad apple brand', 'ipad.JPG', 'apple ipad tablet electronics'),
(4, 1, 3, 'iPhone 6s', 32000, 'Apple iPhone', 'iphone.JPG', 'iphone apple mobile electronics'),
(5, 1, 2, 'iPad 2', 10000, 'samsung ipad', 'ipad 2.JPG', 'ipad tablet samsung'),
(6, 1, 1, 'Hp Laptop r series', 35000, 'Hp Red and Black combination Laptop', '31r2MG3KuaL._AC_US160_.JPG', 'hp laptop'),
(7, 1, 1, 'Laptop Pavillion', 50000, 'Laptop Hp Pavillion', '41FIRANLqKL._AC_US160_.JPG', 'Laptop Hp Pavillion'),
(8, 1, 4, 'Sony', 40000, 'Sony Mobile', 'sony mobile.JPG', 'sony android mobile'),
(9, 1, 3, 'iPhone New', 12000, 'iphone', 'white iphone.JPG', 'iphone apple mobile'),
(10, 2, 6, 'Red Ladies dress', 1000, 'red dress for girls', 'red dress.JPG', 'red dress'),
(11, 2, 6, 'Blue Heave Dress', 1200, 'Blue dress', 'images.JPG', 'blue dress cloths'),
(12, 2, 6, 'Ladies Casual Cloths', 1500, 'ladies casual summer two colors pleted', '41hpDBZz-mL._AC_UL260_SR200,260_.JPG', 'girl dress cloths casual'),
(13, 2, 6, 'SpringAutumnDress', 1200, 'girls dress', '31alNBY2DqL._AC_UL260_SR200,260_.JPG', 'girls dress'),
(14, 3, 6, 'mens wear casual', 1500, 'mens wear casual dress', '51cTqzc7B7L._AC_UL260_SR200,260_.JPG', 'mens casual striped t-shirts'),
(15, 2, 6, 'Casual dress', 1000, 'girls dress', '51YEi5xCw1L._AC_UL260_SR200,260_.JPG', 'ladies casual blue sarees'),
(16, 2, 6, 'Formal Look', 2000, 'girls formal dress', '41Nz3s2P4ML._AC_UL260_SR200,260_.JPG', 'Ladies formal blue dress ladies wear\r\n'),
(17, 4, 6, 'Kids wear', 1500, 'kids casual dress', '41-gPYNhNHL._AC_UL260_SR200,260_.JPG', 'kids casual jeans t-shirts blue dress'),
(18, 4, 6, 'Kids wear', 1400, 'kids red sherwani cloths', '41tGrR+UdNL._AC_UL260_SR200,260_.JPG', 'kids red sherwani cloths'),
(19, 6, 5, 'Refrigerator', 25000, 'Refrigerator capacity 30ltrs.', '31JNM2RxSaL._AC_US160_.JPG', 'LG silver color Refrigerator capacity 30ltrs'),
(20, 6, 5, 'induction', 2000, 'LG inductioon 1800watt sensor control', '41Gy0witxvL._AC_US160_.JPG', 'LG inductioon 1800watt sensor control AC'),
(21, 7, 2, 'Samsung Galaxy', 40000, 'Samsung galaxy J2 Golden android lolipop', '41VT5dAm7DL._AC_US160_.JPG', 'Samsung galaxy J2 Golden android lolipop'),
(22, 7, 2, 'Samsung Wrist Watch', 1500, 'Samsung Wrist Watch', '51VYeztlMkL._AC_US160_.JPG', 'Samsung Wrist Watch bluetooth watch'),
(23, 8, 8, 'The Alchemist', 140, 'The Alcemist ', 'alchemist.JPG', 'The alchemist book by paulo coelho'),
(24, 8, 8, 'Veronika decides to die', 200, 'Veronika decides to die', 'veronikadecidestodie.JPG', 'Veronika decices to die  young age mind set book'),
(25, 8, 9, 'the monk who sold his ferrari', 300, 'The monk who sold his frrrari', 'sold.JPG', 'The monk who sold his ferrari by Robin Sharma'),
(26, 8, 9, 'Warrior of the light', 250, 'Warrior of the light ', 'warofthelight.JPG', 'Warrior of the light by the Robin  Sharma \r\nBook about the life\r\n'),
(27, 8, 8, 'Warrior of the light', 350, 'Warrior of the  light \r\nPaulo Coelho', 'warriorofthelight.JPG', 'Warrior of the light'),
(28, 5, 10, 'tablecabinet', 10000, 'table cabinet', 'tablecabinet.JPG', 'table cabinet study table '),
(29, 5, 10, 'computer table', 8000, 'computer table royal wood', 'computertable.JPG', 'computer table office computer table\r\nroyal wood computer table'),
(30, 5, 11, 'bell office table ', 9000, 'Bell office table 4*3 inch ', 'royalbellofficetable.JPG', ' bell brand office table '),
(31, 5, 11, 'study desk', 12000, 'Student study desk \r\nchildren study desk', 'studydesk.JPG', 'Student study desk \r\nstudent study desk'),
(32, 5, 11, 'bed', 30000, 'bed', 'bed.JPG', 'bed \r\nfamily bed'),
(33, 5, 10, 'bed double', 40000, 'double  family bed ', 'bed1.JPG', 'double  family bed '),
(34, 5, 10, 'Steel bed ', 43000, 'Steel family bed ', 'bed2.JPG', 'Steel family bed '),
(35, 5, 10, 'Single bed  ', 25000, ' single bed royal bell wood', 'bed3.JPG', ' single bed royal bell wood'),
(36, 5, 11, 'bed matress', 15000, 'sleepwell matress ', 'bed4.JPG', 'sleepwll matress thick mattress'),
(37, 5, 11, 'portable bed single bedq', 20000, 'portable bed iron frame', 'bed5.JPG', 'portable bed iron frame'),
(38, 9, 7, 'dlsr Camera nikkon', 25000, 'DLSR camera  20px', 'cam1.JPG', 'DLSR camera  nikkon double lens'),
(39, 9, 7, 'cannon', 30000, 'cannon camera slr double lens  30px', 'cam2.JPG', 'cannon camera slr double lens  30px'),
(40, 9, 7, 'Nikon Coolpix B700 Digital Camera (Red),20.3 Mp, ', 23000, 'Nikon Coolpix B700 Digital Camera (Red),20.3 Mp, 60X Wide Zoomer,With 16Gb Memory Card + Camera Case.', 'cam3.JPG', 'Nikon Coolpix B700 Digital Camera (Red),20.3 Mp, 60X Wide Zoomer,With 16Gb Memory Card + Camera Case.'),
(41, 9, 7, 'XTRA Zoomer 8X Optical Zoom Telescope Mobile Camera Lens ', 13000, 'XTRA Zoomer 8X Optical Zoom Telescope Mobile Camera Lens Kit with Tripod and Adjustable Holder', 'cam4.JPG', 'XTRA Zoomer 8X Optical Zoom Telescope Mobile Camera Lens Kit with Tripod and Adjustable Holder'),
(42, 9, 7, 'Pocket camera', 8000, 'spy pocket camera', 'cam5.jpg', 'pocket camera spy camera'),
(43, 10, 0, 'mens foot wear', 300, 'Sparx Men''s Flip-Flops and House Slippers', 'fw1.JPG', 'Sparx Men''s Flip-Flops and House Slippers mens foot wear'),
(44, 10, 0, 'Matrix Men''s Sandals and Floaters', 459, 'Matrix Men''s Sandals and Floaters mens foot wear', 'fw2.JPG', 'Matrix Men''s Sandals and Floaters mens wear'),
(45, 10, 0, 'LeatherKraft Men''s Black Shearling Loafers', 500, 'LeatherKraft Men''s Black Shearling Loafers     cloth shoes 4inch', 'fw3.JPG', 'LeatherKraft Men''s Black Shearling Loafers     cloth shoes 4inch'),
(46, 10, 0, 'sandle for men', 450, 'Earton Men''s Brown EVA Sandals & Floaters', 'fw4.JPG', 'Earton Men''s Brown EVA Sandals & Floaters sandal casual  foot wear'),
(47, 11, 0, 'Thari Choice Woman Faux Leather Belly Shoe', 399, 'Thari Choice Woman Faux Leather Belly Shoe casual wear', 'w1.JPG', 'Thari Choice Woman Faux Leather Belly Shoe casual wear'),
(48, 11, 0, 'ANAND ARCHIES Women''s Bellies IPL-BLACK-P\r\n', 395, 'ANAND ARCHIES Women''s Bellies IPL-BLACK-P\r\n ladies party  wear', 'w2.JPG', 'ANAND ARCHIES Women''s Bellies IPL-BLACK-P\r\n ladies party  wear'),
(49, 11, 0, 'Woman Footwear\r\n', 598, 'Woman Footwear\r\n', 'w3.JPG', 'Woman Footwear\r\n casual wear ladies foot wear'),
(50, 11, 0, 'Thari Choice Women''s Wedges Sandal(Pair Of 2)', 499, 'Thari Choice Women''s Wedges Sandal(Pair Of 2)office  foot wear', 'w4.JPG', 'Thari Choice Women''s Wedges Sandal(Pair Of 2) ladie office wear'),
(51, 11, 0, 'Mappy Women''s Faux Leather Fashion Sandals', 499, 'Mappy Women''s Faux Leather Fashion Sandals  Fashion wear ', 'w5.JPG', 'Mappy Women''s Faux Leather Fashion Sandals  Fashion wear '),
(52, 11, 0, 'ESSENCE WOMEN''S BLACK 2 STRIP CASUAL SANDAL\r\n ', 488, 'ESSENCE WOMEN''S BLACK 2 STRIP CASUAL SANDAL\r\n ', 'w6.JPG', 'ESSENCE WOMEN''S BLACK 2 STRIP CASUAL SANDAL\r\n  casual wear'),
(53, 10, 0, 'Formal Office black shoes ', 499, 'Trane Shoes Men''s Synthetic Moccasins', 'm1.JPG', 'formal black shoes for men'),
(54, 11, 0, 'ladies party wear sandal', 299, 'ladies party wear sandal for the girls black and white both available ', 'l1.JPG', 'ladies party wear sandal for the girls black and white both available '),
(55, 9, 7, 'slr camera', 39999, 'slr camera with 64 gb memory\r\nwaterproof', 'c1.JPG', 'slr camera with 64 gb memory\r\nwaterproof'),
(56, 9, 7, 'smart camera ', 8999, 'smart wireless camera with 64 gb memory', 'c2.JPG', 'smart wireless camera with 64 gb memory\r\nSricam SP Series Wireless HD IP Wifi CCTV [Watch LIVE DEMO right now] indoor Security Camera (support upto 128 GB SD card) (Black Color)');

-- --------------------------------------------------------

--
-- Table structure for table `recieved_payment`
--

CREATE TABLE IF NOT EXISTS `recieved_payment` (
`id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `trx_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(2, 'Krishna', 'Gupta', 'uniq.krish1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9040907812', 'Nepal', 'Pathari'),
(4, 'Ujjwal', 'Raj', 'ujjwal_nepal10@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '9040506612', 'Nepal', 'Inaruwa'),
(5, 'Nimesh', 'Dahal', 'nimesh.dahal26@gmail.com', 'd36f9b458986bdaae83afe3523449a85', '9040906612', 'Nepal', 'Inaruwa'),
(7, 'Samir', 'Basnet', 'samirbasnet7@gmail.com', '9fbcd065bd4ac598724989decd4111af', '7894157696', 'gietgunupur', 'gunupur');

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
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `recieved_payment`
--
ALTER TABLE `recieved_payment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `recieved_payment`
--
ALTER TABLE `recieved_payment`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
