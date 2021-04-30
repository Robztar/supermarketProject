-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 07:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(200) NOT NULL,
  `total_price` varchar(200) NOT NULL,
  `product_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_qty` int(20) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Escallion', '100', 0, 'image/escallion.jpg', 'p1000'),
(2, 'Okra', '110', 0, 'image/okra.jpg', 'p1001'),
(3, 'Tomatoes', '250', 0, 'image/tomatoes.jpg', 'p1002'),
(4, 'Onion', '150', 0, 'image/onion.jpg', 'p1003'),
(5, 'Hot Pepper', '150', 0, 'image/hot pepper.jpg', 'p1004'),
(6, 'Ginger', '400', 0, 'image/ginger.jpg', 'p1005'),
(7, 'Carrot', '250', 0, 'image/carrot.jpg', 'p1006'),
(8, 'Cabbage', '120', 0, 'image/cabbage.jpg', 'p1007'),
(9, 'Pak Choi', '80', 0, 'image/pakk choi.jpg', 'p1008'),
(10, 'Sweet/Bell Pepper', '250', 0, 'image/sweet pepper.jpg', 'p1009'),
(11, 'Lettuce', '100', 0, 'image/lettuce.jpg', 'p1010'),
(12, 'Thyme', '50', 0, 'image/thyme.jpg', 'p1011'),
(13, 'Spinach', '80', 0, 'image/spinach.jpg', 'p1012'),
(14, 'Pumpkin', '90', 0, 'image/pumpkin.jpg', 'p1013'),
(15, 'Yellow Yam', '50', 0, 'image/yellow yam.jpg', 'p1014'),
(16, 'Irish Potato', '80', 0, 'image/irish potato.jpg', 'p1015'),
(17, 'Sweet Potato', '120', 0, 'image/sweet potato.jpg', 'p1016'),
(18, 'Fresh Watermelon', '200', 0, 'image/watermelon.jpg', 'p1017'),
(19, 'Cherries', '250', 0, 'image/cherries.jpg', 'p1018'),
(20, 'Pineapple', '200', 0, 'image/pineapple.jpg', 'p1019'),
(21, 'Strawberry', '1050', 0, 'image/strawberry.jpg', 'p1020'),
(22, 'Grape', '800', 0, 'image/grape.jpg', 'p1021'),
(23, 'Orange', '800', 0, 'image/oranges.jpg', 'p1022'),
(24, 'Cantaloupe', '150', 0, 'image/canaloupe.jpg', 'p1023'),
(25, 'Apple', '200', 0, 'image/apple.jpg', 'p1024'),
(26, 'Banana', '200', 0, 'image/banana.jpg', 'p1025'),
(27, 'Kiwi', '350', 0, 'image/kiwi.jpg', 'p1026'),
(28, 'Peach', '300', 0, 'image/peach.jpg', 'p1027'),
(29, 'Pear', '150', 0, 'image/pear.jpg', 'p1028'),
(30, 'Blueberry', '280', 0, 'image/blueberry.jpg', 'p1028'),
(31, 'Raspberries', '190', 0, 'image/raspberries.jpg', 'p1029'),
(32, 'Plum', '250', 0, 'image/plum.jpg', 'p1030'),
(33, 'Naseberry', '150', 0, 'image/naseberry.jpg', 'p1031'),
(34, 'Sweet Sop', '220', 0, 'image/sweetsop.jpg', 'p1032'),
(35, 'Chicken', '250', 0, 'image/chicken.jpg', 'p1033'),
(36, 'Pork', '350', 0, 'image/prok.jpg', 'p1034'),
(37, 'Frankfurter', '200', 0, 'image/franks.jpg', 'p1035'),
(38, 'Bacon', '450', 0, 'image/bacon.jpg', 'p1036'),
(39, 'Sliced Fish', '480', 0, 'image/sliced fish.jpg', 'p1037'),
(40, 'Salmon', '800', 0, 'image/salmon.jpg', 'p1038'),
(41, 'Fish', '1000', 0, 'image/fish.jpg', 'p1039'),
(42, 'Shrimp', '900', 0, 'image/shrimp.jpg', 'p1040'),
(43, 'Lobster', '700', 0, 'image/lobster.jpg', 'p1041'),
(44, 'Egg', '350', 0, 'image/egg.jpg', 'p1042'),
(45, 'Oxtail', '800', 0, 'image/oxtail.jpg', 'p1043'),
(46, 'Turkey Neck', '350', 0, 'image/turkey neck.jpg', 'p1044'),
(47, 'Chicken Foot', '280', 0, 'image/chicken foot.jpg', 'p1045'),
(48, 'Mutton', '650', 0, 'image/mutton.jpg', 'p1046'),
(49, 'Salt Fish', '550', 0, 'image/saltfish.jpg', 'p1047'),
(50, 'Salt Mackerel', '350', 0, 'image/salt mackerel.jpg', 'p1048'),
(51, 'Fish Fillet', '750', 0, 'image/fillet.jpg', 'p1049'),
(52, 'Tissue', '250', 0, 'image/tissue.jpg', 'p1050'),
(53, 'Jumbo Roll Kitchen Towel', '350', 0, 'image/handtowel.jpg', 'p1051'),
(54, 'Toothbrush', '250', 0, 'image/toothbrush.jpg', 'p1052'),
(55, 'Toothpaste', '450', 0, 'image/toothpaste.jpg', 'p1053'),
(56, 'Mouthwash', '550', 0, 'image/mouthwash.png', 'p1054'),
(57, 'Bathsoap', '350', 0, 'image/soap.jpg', 'p1055'),
(58, 'Bleach', '350', 0, 'image/bleach.png', 'p1056'),
(59, 'Soap Powder', '350', 0, 'image/breeze.jpg', 'p1057'),
(60, 'Fabric Softener', '350', 0, 'image/fab.jpg', 'p1058'),
(61, 'Lotion', '750', 0, 'image/lotion.jpg', 'p1059'),
(62, 'Deodorant', '250', 0, 'image/roll on.jpg', 'p1060'),
(63, 'Red Velvet Cake', '350', 0, 'image/red-velvet.jpg', 'p1061'),
(64, 'Chocolate Cake', '450', 0, 'image/choco.jpg', 'p1062'),
(65, 'Birthday Cake', '5500', 0, 'image/bday.jpg', 'p1063'),
(66, 'Donuts', '110', 0, 'image/donut.jpg', 'p1064'),
(67, 'Gizzada', '150', 0, 'image/gizzada.jpg', 'p1065'),
(68, 'Grater Cake', '50', 0, 'image/Grater-cake.jpg', 'p1066'),
(69, 'Peanut Cake/Drops', '70', 0, 'image/peanut drops.jpg', 'p1067'),
(70, 'Cheese Danish', '80', 0, 'image/cheese danish.jpeg', 'p1068'),
(71, 'Spice Bun', '100', 0, 'image/bun.jpg', 'p1069'),
(72, 'Cupcakes', '90', 0, 'image/cupcake.jpg', 'p1070'),
(73, 'Cheesecake', '650', 0, 'image/cheesecake.jpg', 'p1071'),
(74, 'Kiss Cake', '60', 0, 'image/kiss.jpg', 'p1072'),
(75, 'Plantain Chips', '90', 0, 'image/pchip.jpg', 'p1073'),
(76, 'Big Foot', '60', 0, 'image/bigfoot.jpg', 'p1074'),
(77, 'Caramel Crunch', '110', 0, 'image/crunch.jpg', 'p1075'),
(78, 'Water Crackers', '200', 0, 'image/wcracker.jpg', 'p1076'),
(79, 'Doritos', '90', 0, 'image/dor.png', 'p1077'),
(80, 'Banana Chips', '80', 0, 'image/bchips.jpg', 'p1078'),
(81, 'Peanuts', '120', 0, 'image/pnut.jpg', 'p1079'),
(82, 'Lays Potato Chips', '90', 0, 'image/lays.jpg', 'p1080'),
(83, 'Pringles Potato Chips', '350', 0, 'image/pri.jpg', 'p1081'),
(84, 'Red Wine', '3000', 0, 'image/redwine.jpg', 'p1082'),
(85, 'Beachfront Californian Pink Moscato', '5500', 0, 'image/pmoscato.jpg', 'p1083'),
(86, 'May\'s Sparkling Wine', '890', 0, 'image/may.jpg', 'p1084'),
(87, 'Wray & Nephew White Rum', '1110', 0, 'image/rum.jpg', 'p1085'),
(88, 'Red Label Wine', '2000', 0, 'image/redl.jpg', 'p1086'),
(89, 'Bailey\'s Rum Cream', '3500', 0, 'image/baileys.jpg', 'p1087'),
(90, 'Appleton Estate Run', '2990', 0, 'image/appleton.png', 'p1088'),
(91, 'Tia Maria Coffee Liqueur', '3667', 0, 'image/tia.jpg', 'p1089'),
(92, 'Hennesy', '9000', 0, 'image/henne.jpg', 'p1090'),
(93, 'Yellow Tail Cabernet Sauvignon Wine', '4500', 0, 'image/yellow.jpg', 'p1091'),
(94, 'Stone Ginger Wine', '1350', 0, 'image/stone.jpg', 'p1092');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
