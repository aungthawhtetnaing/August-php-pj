-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 03:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `august`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `email`, `phone`) VALUES
(1, 'Kyaw123', '3c782fcc2d466fcce64f75e3ac09fb81', 'kyaw123@gmail.com', '09111111111'),
(2, 'Chaw123', '913a618956d33a2a52808023218d94e3', 'chaw123@gmail.com', '09222222222'),
(3, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'athaw2666@gmail.com', '12345678'),
(4, 'aaa', '202cb962ac59075b964b07152d234b70', 'aim133383@gmail.com', '12345678'),
(5, 'aungthaw', '202cb962ac59075b964b07152d234b70', 'aungthawhtetnaing1@gmail.com', '097787887877'),
(6, 'aaa', '698d51a19d8a121ce581499d7b701668', 'aim133383@gmail.com', '11111111');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `password`, `email`, `phone`, `address`) VALUES
(1, 'Pyae', '249e9b262165def72454a66ca04c93d3', 'pyae123@gmail.com', '09239199591', 'Latha,Yangon'),
(2, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'athaw2666@gmail.com', '12345678', 'asdd'),
(3, 'aaa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'kokogreenhacke6666r@gmail.com', '12345678', 'yangon,kamayut'),
(4, 'aaa', '202cb962ac59075b964b07152d234b70', 'aim133383@gmail.com', '12345678', 'qq'),
(5, 'minthant', '202cb962ac59075b964b07152d234b70', 'aungthawhtetnaing1@gmail.com', '097787887877', 'kodaung'),
(6, 'khonzaw', '202cb962ac59075b964b07152d234b70', 'aungthawhtetnaing1@gmail.com', '097787887877', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `delivery_name`, `phone`, `address`) VALUES
(1, 'Zaw Zaw', '09753748586', 'Yangon'),
(2, 'Mg Mg', '09743448621', 'Yangon'),
(4, 'khonzaw', '097787887877', 'yangon');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `subject`, `email`, `message`) VALUES
(1, 'pyae sone', 'food', 'qq@gmial.com', 'hello'),
(5, 'aaa', 'pergf', 'athaw2666@gmail.com', 'scscscfggv'),
(6, 'aaa', 'perfdsf', 'kokogreenhacker@gmail.com', 'wo4jrowjofjfslmlsfpk ffjoef fwjfow fjffwjfkmfj aung thsaw eof fa;gnrngikriorro'),
(7, 'sss', 'qq', 'kokogreenhacker@gmail.com', 'qqq'),
(8, 'qqq', 'qq', 'qqq@gmail.com', 'qqqq'),
(9, 'aaa', 'pergf', 'aim133383@gmail.com', 'bad'),
(10, 'khonzaw', 'uuuu', 'aim133383@gmail.com', 'no like');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(225) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`product_id`, `product_name`, `cat_id`, `price`, `photo`) VALUES
(1, 'Bubble Milk Tea', 1, 1500, '14.jpg'),
(2, 'Lemon Passion QQ', 1, 1500, '15.jpg'),
(3, 'Grass Jelly Milk Tea', 1, 1500, '16.jpg'),
(4, 'Lemon Mango Bo Bo', 1, 2000, '17.jpg'),
(5, ' Jelly Milk Tea', 1, 1800, '18.jpg'),
(6, 'Lemon Strawberry ', 1, 2000, '12.jpg'),
(7, 'Pudding Milk Tea', 1, 2000, '19.jpg'),
(8, 'Ice Cream Milk Tea', 1, 2000, '20.jpg'),
(9, 'Milk Tea', 1, 2000, '21.jpg'),
(10, 'Blue Sky', 2, 2000, '22.jpg'),
(11, 'Green Apple', 2, 2000, '23.jpg'),
(12, 'Mango', 2, 2000, '24.jpg'),
(13, 'Strawberry Soda', 2, 2000, '25.jpg'),
(14, 'Milk Ice-cream', 3, 1500, '26.jpg'),
(15, 'Strawberry Ice Cream', 3, 1500, '27.jpg'),
(16, 'Chocolate Ice Cream', 3, 1500, '28.jpg'),
(17, 'Cafe Americano', 4, 1800, '29.jpg'),
(18, 'Cappuccino', 4, 2200, '30.jpg'),
(19, 'Cafe Mocha', 4, 3000, '31.jpg'),
(20, 'Cafe Latte', 4, 3000, '32.jpg'),
(21, 'French fries', 7, 1000, '33.jpg'),
(22, 'Chicken Piece', 7, 1500, '34.jpg'),
(23, 'Hot Dog', 7, 1000, '35.jpg'),
(24, 'Chicken Wing', 7, 1500, '36.jpg'),
(25, 'Taiwan Tofu', 7, 1000, '37.jpg'),
(26, 'Chicken Nugget', 7, 1800, '38.jpg'),
(27, 'Fish Ball', 7, 2000, '39.jpg'),
(28, 'Mushroom Meat Ball', 7, 2800, '40.jpg'),
(29, 'Korea Noodle', 9, 2800, '41.jpg'),
(30, 'Chicken Fillet Rice ', 9, 2800, '42.jpg'),
(31, 'Fried Dumpling', 9, 2200, '43.jpg'),
(32, 'Fried Sweet Potato Stick', 7, 1500, '44.jpg'),
(33, 'Fried chili chicken', 9, 2800, '45.jpg'),
(34, 'Sweet Corn', 5, 2200, '46.jpg'),
(35, 'Chicken Sandwish', 5, 2400, '47.jpg'),
(36, 'Hum Sandwish', 5, 2500, '48.jpg'),
(37, 'Tuna Sandwish', 5, 2600, '49.jpg'),
(38, 'August Special', 5, 3000, '50.jpg'),
(39, 'Tea Egg', 7, 1000, '51.jpg'),
(40, 'Milk', 6, 1500, '52.jpg'),
(41, 'Papaya Milk', 6, 1800, '53.jpg'),
(42, 'Banana Milk', 6, 1800, '54.jpg'),
(43, 'Lemon Juice', 6, 1500, '55.jpg'),
(44, 'Lemon Passion Juice', 6, 1800, '55(1).jpg'),
(45, 'Lemon & Honey', 6, 2300, '58.jpg'),
(46, 'Lemon Mango Juice', 6, 1800, '57.jpg'),
(47, 'Lemon Strawberry Juice', 6, 2000, '59.jpg'),
(51, 'aa', 16, 777, '2SiFgd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menucategory`
--

CREATE TABLE `menucategory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `menucategory`
--

INSERT INTO `menucategory` (`cat_id`, `cat_name`) VALUES
(1, 'Tea'),
(2, 'Italian Soda'),
(3, 'Ice Cream'),
(4, 'Coffee'),
(5, 'Sandwich'),
(6, 'Jucies & Milk'),
(7, 'Deep Fried Foods'),
(9, 'Rice & Noodle'),
(16, 'watersss');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `delivery_name` varchar(30) NOT NULL,
  `delivery_phone` varchar(20) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `send_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `delivery_name`, `delivery_phone`, `delivery_address`, `order_date`, `status`, `send_date`) VALUES
(35, 1, 'Pyae', '09239199591', 'Latha,Yangon', '2020-06-04', 0, '0000-00-00'),
(36, 2, 'aaa', '12345678', 'asdd', '2020-07-30', 0, '0000-00-00'),
(37, 2, 'aaa', '12345678', 'asdd', '2020-07-31', 0, '0000-00-00'),
(38, 3, 'aaa', '12345678', 'yangon,kamayut', '2020-08-21', 0, '0000-00-00'),
(39, 4, 'aaa', '12345678', 'qq', '2021-12-01', 0, '0000-00-00'),
(40, 4, 'aaa', '12345678', 'qq', '2021-12-05', 0, '0000-00-00'),
(41, 5, 'minthant', '097787887877', 'kodaung', '2021-12-07', 0, '0000-00-00'),
(42, 6, 'khonzaw', '097787887877', 'aaaaa', '2021-12-16', 1, '2021-12-16'),
(43, 6, 'khonzaw', '097787887877', 'aaaaa', '2021-12-21', 0, '0000-00-00'),
(44, 6, 'mmmmm', '097787887877', 'aaaaa', '2021-12-21', 1, '2021-12-21'),
(45, 6, 'khonzaw', '097787887877', 'aaaaa', '2021-12-21', 0, '0000-00-00'),
(46, 6, 'khonzaw', '097787887877', 'aaaaa', '2021-12-24', 0, '0000-00-00'),
(47, 6, 'khonzaw', '097787887877', 'aaaaa', '2022-01-02', 0, '0000-00-00'),
(48, 4, 'aaa', '12345678', 'qq', '2022-02-11', 0, '0000-00-00'),
(49, 4, 'aaa', '12345678', 'qq', '2022-03-03', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `product_qty`, `amount`) VALUES
(35, 1, 1, 1500),
(35, 2, 2, 3000),
(35, 3, 1, 1500),
(36, 1, 7, 10500),
(37, 2, 1, 1500),
(37, 4, 1, 2000),
(37, 37, 1, 2600),
(38, 2, 1, 1500),
(38, 1, 1, 1500),
(39, 1, 5, 7500),
(39, 2, 1, 1500),
(39, 21, 1, 1000),
(40, 8, 1, 2000),
(40, 6, 1, 2000),
(40, 4, 1, 2000),
(40, 2, 1, 1500),
(40, 1, 1, 1500),
(41, 1, 1, 1500),
(41, 2, 1, 1500),
(41, 3, 1, 1500),
(41, 4, 1, 2000),
(41, 17, 2, 3600),
(41, 29, 1, 2800),
(42, 1, 3, 4500),
(42, 10, 1, 2000),
(42, 23, 1, 1000),
(35, 1, 1, 1500),
(35, 2, 2, 3000),
(35, 3, 1, 1500),
(36, 1, 7, 10500),
(37, 2, 1, 1500),
(37, 4, 1, 2000),
(37, 37, 1, 2600),
(38, 2, 1, 1500),
(38, 1, 1, 1500),
(39, 1, 5, 7500),
(39, 2, 1, 1500),
(39, 21, 1, 1000),
(40, 8, 1, 2000),
(40, 6, 1, 2000),
(40, 4, 1, 2000),
(40, 2, 1, 1500),
(40, 1, 1, 1500),
(41, 1, 1, 1500),
(41, 2, 1, 1500),
(41, 3, 1, 1500),
(41, 4, 1, 2000),
(41, 17, 2, 3600),
(41, 29, 1, 2800),
(42, 1, 3, 4500),
(42, 10, 1, 2000),
(42, 23, 1, 1000),
(35, 1, 1, 1500),
(35, 2, 2, 3000),
(35, 3, 1, 1500),
(36, 1, 7, 10500),
(37, 2, 1, 1500),
(37, 4, 1, 2000),
(37, 37, 1, 2600),
(38, 2, 1, 1500),
(38, 1, 1, 1500),
(39, 1, 5, 7500),
(39, 2, 1, 1500),
(39, 21, 1, 1000),
(40, 8, 1, 2000),
(40, 6, 1, 2000),
(40, 4, 1, 2000),
(40, 2, 1, 1500),
(40, 1, 1, 1500),
(41, 1, 1, 1500),
(41, 2, 1, 1500),
(41, 3, 1, 1500),
(41, 4, 1, 2000),
(41, 17, 2, 3600),
(41, 29, 1, 2800),
(42, 1, 3, 4500),
(42, 10, 1, 2000),
(42, 23, 1, 1000),
(35, 1, 1, 1500),
(35, 2, 2, 3000),
(35, 3, 1, 1500),
(36, 1, 7, 10500),
(37, 2, 1, 1500),
(37, 4, 1, 2000),
(37, 37, 1, 2600),
(38, 2, 1, 1500),
(38, 1, 1, 1500),
(39, 1, 5, 7500),
(39, 2, 1, 1500),
(39, 21, 1, 1000),
(40, 8, 1, 2000),
(40, 6, 1, 2000),
(40, 4, 1, 2000),
(40, 2, 1, 1500),
(40, 1, 1, 1500),
(41, 1, 1, 1500),
(41, 2, 1, 1500),
(41, 3, 1, 1500),
(41, 4, 1, 2000),
(41, 17, 2, 3600),
(41, 29, 1, 2800),
(42, 1, 3, 4500),
(42, 10, 1, 2000),
(42, 23, 1, 1000),
(43, 1, 2, 3000),
(43, 2, 1, 1500),
(43, 3, 1, 1500),
(43, 4, 1, 2000),
(44, 1, 1, 1500),
(44, 2, 1, 1500),
(44, 3, 1, 1500),
(45, 3, 1, 1500),
(46, 1, 1, 1500),
(46, 2, 1, 1500),
(47, 1, 1, 1500),
(47, 2, 1, 1500),
(48, 1, 2, 3000),
(48, 2, 1, 1500),
(49, 7, 1, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fkcat_id` (`cat_id`);

--
-- Indexes for table `menucategory`
--
ALTER TABLE `menucategory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_cat_id` (`customer_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `FK_order_detail` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `menucategory`
--
ALTER TABLE `menucategory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fkcat_id` FOREIGN KEY (`cat_id`) REFERENCES `menucategory` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
