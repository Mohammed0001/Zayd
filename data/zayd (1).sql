-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 09:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zayd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `isWinningBid` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `value`, `isWinningBid`, `productID`, `userID`) VALUES
(1, 100, 0, 7, '30301010125876'),
(2, 100, 0, 7, '30301010125876'),
(3, 200, 0, 7, '30301010125876'),
(4, 1000, 0, 7, '30301010125876'),
(5, 80000, 0, 7, '30301010125876'),
(6, 9000, 0, 7, '30301010125876'),
(7, 80000, 0, 7, '30301010125876'),
(8, 8000, 0, 7, '30301010125876'),
(9, 1001, 0, 2, '30301010125876'),
(10, 100, 0, 2, '30301010125876'),
(11, 1001, 0, 2, '30301010125876'),
(12, 20, 0, 2, '30301010125876'),
(13, 1001, 0, 2, '30301010125876'),
(14, 1000, 0, 2, '30301010125876'),
(15, 100, 0, 2, '30301010125876'),
(16, 10000, 0, 7, '30301010125876'),
(17, 10070, 0, 7, '30301010125876'),
(18, 10001, 0, 7, '30301010125876'),
(19, 100466, 0, 7, '30301010125876'),
(20, 10010, 0, 7, '30301010125876'),
(21, 10000, 0, 7, '30301010125876'),
(22, 100, 0, 6, '30301010125876'),
(23, 100002, 0, 7, '30301010125876'),
(24, 10002, 0, 7, '30301010125876'),
(25, 300, 1, 22, '30301010125876');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `iconCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `iconCode`) VALUES
(1, 'CAR', 'fa fa-car'),
(2, 'CAR PLATES', 'fa fa-id-card'),
(3, 'APARTMENT', 'fa fa-building'),
(4, 'LAND', 'fa fa-mountain'),
(5, 'PAINTINGS', 'fa fa-paint-roller'),
(6, 'ANTIQUES', 'fa fa-chair'),
(7, 'JEWELRY', 'fa fa-gem'),
(8, 'OTHER', 'fa fa-plus');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `cvv` int(3) NOT NULL,
  `productID` int(11) NOT NULL,
  `payerID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card_number`, `card_name`, `date`, `cvv`, `productID`, `payerID`) VALUES
(1, '1234567812345678', 'John Doe', '2024-05-06', 123, 22, '30301010125876'),
(2, '9876543298765432', 'Jane Smith', '2024-05-07', 456, 23, '30301010125876'),
(3, '1111222233334444', 'Mike Johnson', '2024-05-08', 789, 24, '30301010125876'),
(4, '5555666677778888', 'Sarah Williams', '2024-05-09', 321, 25, '30301010125876'),
(5, '9999888877776666', 'David Brown', '2024-05-10', 654, 26, '30301010125876'),
(6, '4444555566667777', 'Emily Davis', '2024-05-11', 987, 27, '30301010125876'),
(7, '2222333344445555', 'Chris Anderson', '2024-05-12', 135, 28, '30301010125876'),
(8, '7777666655554444', 'Laura White', '2024-05-13', 246, 29, '30301010125876'),
(9, '8888999911112222', 'Robert Taylor', '2024-05-14', 789, 30, '30301010125876'),
(10, '3333444455556666', 'Maria Garcia', '2024-05-15', 432, 41, '30301010125876');

-- --------------------------------------------------------

--
-- Table structure for table `pimage`
--

CREATE TABLE `pimage` (
  `id` int(11) NOT NULL,
  `file` varchar(600) NOT NULL,
  `isPrimary` int(11) NOT NULL,
  `pID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pimage`
--

INSERT INTO `pimage` (`id`, `file`, `isPrimary`, `pID`) VALUES
(4, 'img/uploads/productPic/548515779.png', 1, 0),
(5, 'img/uploads/productPic/1843162987.png', 1, 5),
(6, 'img/uploads/productPic/867544136.png', 0, 5),
(7, 'img/uploads/productPic/867474513.png', 0, 5),
(8, 'img/uploads/productPic/1512160646.png', 1, 6),
(9, 'img/uploads/productPic/254451038.png', 0, 6),
(10, 'img/uploads/productPic/1452116368.png', 0, 6),
(11, 'img/uploads/productPic/1022956362.png', 0, 6),
(12, 'img/uploads/productPic/1714451061.png', 1, 7),
(13, 'img/uploads/productPic/1599275044.png', 0, 7),
(14, 'img/uploads/productPic/614807900.png', 0, 7),
(15, 'img/uploads/productPic/431278487.png', 0, 7),
(16, 'img/uploads/productPic/593690069.png', 0, 7),
(17, 'img/uploads/productPic/1192686417.png', 1, 36),
(18, 'img/uploads/productPic/264437598.png', 0, 36),
(19, 'img/uploads/productPic/1945180987.png', 0, 36),
(20, 'img/uploads/productPic/1465021118.png', 1, 37),
(21, 'img/uploads/productPic/142283518.png', 0, 37),
(22, 'img/uploads/productPic/756997308.png', 0, 37),
(23, 'img/uploads/productPic/19466335.png', 0, 37),
(24, 'img/uploads/productPic/353141894.png', 1, 38),
(25, 'img/uploads/productPic/1317694231.png', 0, 38),
(26, 'img/uploads/productPic/1371769336.png', 1, 39),
(27, 'img/uploads/productPic/1089138461.png', 0, 39),
(28, 'img/uploads/productPic/2114654134.png', 0, 39),
(29, 'img/uploads/productPic/1444074501.png', 0, 39),
(30, 'img/uploads/productPic/416039043.png', 1, 40),
(31, 'img/uploads/productPic/237926990.png', 0, 40),
(32, 'img/uploads/productPic/1268494066.png', 0, 40),
(33, 'img/uploads/productPic/143263587.png', 0, 40),
(34, 'img/uploads/productPic/874873734.png', 1, 41),
(35, 'img/uploads/productPic/863909338.png', 0, 41),
(36, 'img/uploads/productPic/1408289104.png', 0, 41),
(37, 'https://www.prestigetime.com/blog/images/luxury-watch-brands/ap-ro.jpg', 1, 18),
(38, 'https://loveluxury.co.uk/wp-content/uploads/2020/10/lv-handbag-1.jpg', 1, 19),
(39, 'https://www.tarinika.in/cdn/shop/products/FNX1825X_c46ff324-a635-4463-8326-14c54d9f4354_1200x.jpg?v=1622393613', 1, 20),
(40, 'https://cdn.britannica.com/10/182610-050-77811599/The-Persistence-of-Memory-canvas-collection-Salvador-1931.jpg', 1, 21),
(41, 'https://beautifulbooks.info/wp-content/uploads/2021/08/special-editions-hestia-header-1-sm.jpg', 1, 22),
(42, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdnyLYK5R-8fO07ucMTnpgeuLx8D-U_kyCe5VzLLMw-w&s', 1, 23),
(43, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-XrzyZiIoJubtqLdlfEc2iBKm9tFGCFTR2a2GkWFfYQ&s', 1, 24),
(44, 'https://cdn.shopify.com/s/files/1/0005/6485/4899/files/vinyl-records-store-shopping-retro_6bca6c8f-ad60-424f-965d-3f46afdebafc.jpg?v=1579848450', 1, 25),
(45, 'https://www.handmadeinbritain.co.uk/wp-content/uploads/2018/04/Betsy-Coral-90x90cm-800px-x-800px-600x600.jpg', 1, 26),
(46, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVmmi1Qqj1HezoLX8s1b_NilM6yJ8EIcj4iUPiRct_iQ&s', 1, 27),
(47, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsVKoStGGDUVBZUhaOXsv-A7ghzguoD8qLqcLwKikywA&s', 1, 28),
(48, 'https://i.insider.com/5731016652bcd063018c1e12?width=700', 1, 29),
(49, 'https://live.staticflickr.com/7723/29347523966_32b467a60b_b.jpg', 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bidExpiry` datetime NOT NULL,
  `minBid` int(11) NOT NULL,
  `currentBid` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `userID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `bidExpiry`, `minBid`, `currentBid`, `description`, `status`, `categoryName`, `userID`) VALUES
(7, 'Vintage 1965 Ford Mustang', '2024-05-10 13:43:00', 10000, 360551, 'Location : Egypt This classic Ford Mustang from 1965 is a true gem. With its iconic design and powerful V8 engine, this car represents a piece of automotive history. It features a manual transmission, original interior upholstery, and a well-maintained body. This vintage Mustang is perfect for collectors or enthusiasts looking to own a piece of American muscle car heritage.', 'active', 'CAR', '30305240104393'),
(22, 'Collector\'s Edition Books', '2024-04-10 18:00:00', 300, 620, 'Rare collection of first-edition books.', 'won', 'ANTIQUES', '56789012345678'),
(23, 'Fine Wine Collection', '2024-07-05 14:20:00', 200, 220, 'Exclusive selection of vintage wines.', 'active', 'ANTIQUES', '67890123456789'),
(24, 'Luxury Fountain Pen', '2024-06-28 16:30:00', 150, 160, 'Handcrafted fountain pen with gold nib.', 'pending', 'ANTIQUES', '78901234567890'),
(25, 'Vintage Vinyl Records', '2024-07-12 11:15:00', 80, 90, 'Rare collection of classic vinyl records.', 'pending', 'ANTIQUES', '89012345678901'),
(26, 'Handmade Silk Scarf', '2024-07-25 13:00:00', 50, 55, 'Exquisite silk scarf with intricate design.', 'active', 'JEWELRY', '90123456789012'),
(27, 'Exclusive Perfume Set', '2024-07-08 09:45:00', 120, 130, 'Luxurious fragrance set from a renowned brand.', 'active', 'JEWELRY', '01234567890123'),
(28, 'Luxury Sedan - Mercedes-Benz S-Class', '2024-06-30 12:00:00', 50000, 52000, 'Top-of-the-line Mercedes-Benz S-Class sedan with advanced features.', 'active', 'CAR', '12345678901234'),
(29, 'Sports Car - Ferrari 488 GTB', '2024-07-15 10:30:00', 150000, 155000, 'High-performance Ferrari 488 GTB sports car with low mileage.', 'active', 'CAR', '23456789012345'),
(30, 'VIP Car Plate - ABC123', '2024-06-30 12:00:00', 5000, 5200, 'Exclusive VIP car plate with unique registration.', 'active', 'CAR PLATES', '34567890123456'),
(36, 'Range Rover ', '2024-06-01 21:40:00', 10000, 1200000, 'Location : Rehab city White color , All fabriks , 80,000 km', 'pending', 'CAR', '01234567890123'),
(37, 'Dodge Charger 2016', '2024-05-31 21:50:00', 20000, 2000000, 'Location : Madinaty All fabriks , white color , 50,000 km', 'pending', 'CAR', '01234567890123'),
(38, 'Chalet for sale, luxuriously finished', '2024-07-05 18:52:00', 100000, 7000000, 'Location : Sahel  3 rooms , 2 bathrooms , 400 m^2 ,', 'active', 'APARTMENT', '12345658901234'),
(39, 'Stand alone villa', '2024-05-21 06:55:00', 100000, 10000000, 'Location : sheikh zayed  4 bed rooms , 3 bathrooms , 500m', 'pending', 'APARTMENT', '12345658901234'),
(40, 'villa stand alone', '2024-05-23 07:59:00', 100000, 12000000, 'Location : sheikh zayed  3 bedrooms 3 bathrooms , 500m', 'pending', 'APARTMENT', '12345658901234'),
(41, 'Portrait', '2024-05-19 05:02:00', 100, 1200, 'Location : Nasr city Canvas Prints: Printed on Quality Thick Artist Premium Canvas with Extra Mirrored Border\r\nStretched and Framed: Each Panel Already Stretched on Solid Wooden Frames and Comes with Hook Attached Easy Hanging and Installation\r\nCanvas Size: 30x60 Inch x 1 Pieces , Each Canvas Panel Is (75x150cm) .', 'pending', 'PAINTINGS', '90123456789012');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SSN` varchar(14) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SSN`, `name`, `email`, `password`, `username`, `dateOfBirth`, `image`, `type`) VALUES
('01234567890123', 'Sophia Young', 'sophiay@example.com', 'passpass', 'sophiay', '1994-06-14', 'img/uploads/pPic/1227610727.png', 'user'),
('01234567890987', 'Kareem Tamer', 'kemoo@kemo.com', 'Kemo12345', 'keemoo', '2024-04-21', 'img/1939603147.png', 'user'),
('12344', 'mohammed', 'maboubakr', '1234', 'maboubakr', '24-5-2003', 'img/uploads/pPic/1227610727.png', 'admin'),
('12345', 'beko', 'admin@admin.com', 'admin', 'admin', '2024-04-28', 'img/uploads/pPic/1227610727.png', 'admin'),
('12345658901234', 'John Doe', 'johndoe@example.com', 'pass123', 'johnd', '1990-05-15', 'img/uploads/pPic/1227610727.png', 'user'),
('12345678901234', 'Amelia Rose', 'amelia.rose@email.com', 'Amellia112000', 'ameliarose', '2000-01-01', 'img/uploads/pPic/1227610727.png', 'user'),
('2147483647', 'Mohammed', 'beko@beko.com', '1234', 'bekooo', '2024-04-23', ' img/uploads/pPic/1227610727.png', 'user'),
('23456789012345', 'Alice Johnson', 'alicej@example.com', 'password321', 'alicej', '1988-12-10', 'img/uploads/pPic/1227610727.png', 'admin'),
('30301010125876', 'Moataz Ayman', 'wezza@email.com', '1234', 'wezza', '2003-01-01', 'img/uploads/pPic/1057521221.png', 'user'),
('30305240104393', 'Mohammed Abou Bakr', 'beko@email.com', 'Beko1234', 'beko', '2003-05-24', 'img/uploads/pPic/1079158392.png', 'user'),
('34567890123456', 'Michael Smith', 'mikesmith@example.com', 'securepass', 'mikes', '1985-07-22', 'img/uploads/pPic/1227610727.png', 'user'),
('45678901234567', 'Sarah Johnson', 'sarahj@example.com', 'pass456', 'sarahj', '1993-04-02', 'img/uploads/pPic/1227610727.png', 'user'),
('56789012345678', 'David Lee', 'davidl@example.com', 'dave123', 'davidlee', '1987-09-18', 'img/uploads/pPic/1227610727.png', 'admin'),
('67890123456789', 'Emily White', 'emilyw@example.com', 'password123', 'emilyw', '1991-02-28', 'img/uploads/pPic/1227610727.png', 'user'),
('78901234567890', 'Daniel Brown', 'danielb@example.com', 'danny456', 'danielb', '1984-11-07', 'img/uploads/pPic/1227610727.png', 'user'),
('89012345678901', 'Olivia Taylor', 'oliviat@example.com', 'securepassword', 'oliviat', '1995-08-12', 'img/uploads/pPic/1227610727.png', 'admin'),
('90123456789012', 'Robert Green', 'robertg@example.com', 'rob789', 'robertg', '1989-03-25', 'img/uploads/pPic/1227610727.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pimage`
--
ALTER TABLE `pimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SSN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pimage`
--
ALTER TABLE `pimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `update_bid_stat` ON SCHEDULE EVERY 1 SECOND STARTS '2024-05-01 13:14:34' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
    UPDATE `product`
    SET `status` = 'won'
    WHERE `bidExpiry` <= now();

    UPDATE bid b
    INNER JOIN (
        SELECT productID, MAX(id) AS last_bid_id
        FROM bid WHERE productID IN (SELECT id FROM `product` WHERE `bidExpiry` <= now() )) AS latest_bid ON b.id = latest_bid.last_bid_id
    SET b.isWinningBid = '1';


END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
