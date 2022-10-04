-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` varchar(100) NOT NULL,
  `Full_name` varchar(150) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` varchar(14) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Startus` varchar(100) NOT NULL,
  `Point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Full_name`, `Username`, `Password`, `Phone`, `Email`, `Address`, `Image`, `Startus`, `Point`) VALUES
('Admin', 'Nguyễn Tấn Thành', 'Admin', '123123', '0778153521', 'ntthanha20158@cusc.ctu.edu.vn', 'Hậu Giang', 'admin\\images\\avata.png', 'true', 0),
('nguyenvan6', 'Nguyễn văn 6', 'nguyenvan6', '123456758Van', '0778153526', 'kittyhatlr@gmail.com', 'cantho', 'images/user.png', 'true', 0),
('nguyenvanc', 'Nguyễn văn a', 'nguyenvanc', '123123ATa', '0778153459', 'vansc@gamil.com', 'cantho', 'images/user.png', 'true', 0),
('thanh1223', 'nguyễn tấn thành ', 'thanh1223', '123123Hp', '0778153521', 'thanhnguyen2001@gmail.com', 'cantho', 'images/user.png', 'true', 0),
('van12C', 'Nguyễn văn c', 'van12C', '123456789Vc', '0778353525', 'vanctlt@gmail.com', 'cantho', 'images/user.png', 'true', 0),
('van12z', 'Nguyễn văn Z', 'van12z', '123123TZa', '0778943523', 'vanztlt@gmail.com', 'Mĩ Tho', 'images/user.png', 'true', 0),
('vana12', 'Nguyễn văn a', 'vana12', '123123Vana', '0778153526', 'kittyhatlr@gmail.com', 'cantho', 'images/user.png', 'true', 0),
('vanb1588', 'Nguyễn văn b', 'vanb1588', '123123Van4', '0771234561', 'vanB@gamil.com', 'Bạc liêu', 'images/user.png', 'true', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` varchar(100) NOT NULL,
  `Event` varchar(100) NOT NULL,
  `Start_date` varchar(12) NOT NULL,
  `End_end` varchar(12) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `Event`, `Start_date`, `End_end`, `Discount`, `Status`) VALUES
('A12', 'noel ', '2022-01-11', '2022-01-13', 15, 'true'),
('A13', 'Tết', '2022-01-27', '2022-01-30', 30, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `STT` int(11) NOT NULL,
  `Product_id` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`STT`, `Product_id`, `file`) VALUES
(1, '1', 'images/among-us-3d-5-500x500.jpg'),
(2, '1', 'images/among-us-3d-16-500x500.jpg'),
(3, '1', 'images/among-us-3d-500x500.jpg'),
(4, '2', 'images/Ho-van-ngoi-4-500x500.jpg'),
(5, '2', 'images/Ho-van-ngoi-7-500x500.jpg'),
(6, '2', 'images/Ho-van-ngoi-8-500x500.jpg'),
(7, '3', 'images/Kabigon-Pokemon-2-500x500.jpg'),
(8, '3', 'images/Kabigon-Pokemon-3-500x500.jpg'),
(9, '3', 'images/Kabigon-Pokemon-5-500x500.jpg'),
(10, '4', 'images/brown-cosplay-khung-long-4-500x500.jpg'),
(11, '4', 'images/brown-cosplay-khung-long-5-500x500.jpg'),
(12, '4', 'images/brown-cosplay-khung-long-7-100x100.jpg'),
(13, '5', 'images/meo-amuse-6-500x500.jpg'),
(14, '5', 'images/meo-amuse-15-500x500.jpg'),
(15, '5', 'images/meo-amuse-19-500x500.jpg'),
(16, '6', 'images/corgi-theu-hoa-1-500x500.jpg'),
(17, '6', 'images/corgi-theu-hoa-2-1-500x500.jpg'),
(18, '6', 'images/corgi-theu-hoa-2-500x500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID_Order` varchar(100) NOT NULL,
  `ID_Product_list` varchar(100) NOT NULL,
  `Customer_ID` varchar(100) NOT NULL,
  `Total` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID_Order`, `ID_Product_list`, `Customer_ID`, `Total`, `date`, `Status`) VALUES
('1861436045', '1046892631', 'nguyenvanc', '290000', '09/01/2022', 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `order delivered`
--

CREATE TABLE `order delivered` (
  `Id` int(11) NOT NULL,
  `Order_id` varchar(100) NOT NULL,
  `ID_Product` varchar(100) NOT NULL,
  `count` varchar(100) NOT NULL,
  `Total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order delivered`
--

INSERT INTO `order delivered` (`Id`, `Order_id`, `ID_Product`, `count`, `Total`) VALUES
(1, '1861436045', '5', '1', '165000'),
(2, '1861436045', '6', '1', '125000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Count` int(11) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Startus` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Image`, `Product_name`, `Type`, `Count`, `Price`, `Startus`, `Description`, `Date`) VALUES
('1', 'images/among-us-3d-2-500x500.jpg', 'GẤU BÔNG AMONG US 3D', 'GẤU BÔNG TẶNG BÉ YÊU', 350, '95000', 'true', '100% bông trắng tinh khiết\r\n100% ảnh chụp tại shop\r\n100% bảo hành đường chỉ trọn đời\r\nBảo hành Bông gấu 6 tháng\r\nMiễn phí Gói quà\r\nMiễn phí Tặng thiệp\r\nMiễn phí Nén chân không gấu                                    ', '2022-01-09'),
('2', 'images/Ho-van-ngoi-2-500x500.jpg', 'GẤU BÔNG HỔ VẰN NGỒI', 'GẤU BÔNG TẶNG BÉ YÊU', 254, '185000', 'true', '100% bông trắng tinh khiết\r\n100% ảnh chụp tại shop\r\n100% bảo hành đường chỉ trọn đời\r\nBảo hành Bông gấu 6 tháng\r\nMiễn phí Gói quà\r\nMiễn phí Tặng thiệp\r\nMiễn phí Nén chân không gấu                                   ', '2022-01-09'),
('3', 'images/Kabigon-Pokemon-12-500x500.jpg', 'KABIGON POKEMON', 'GẤU BÔNG TẶNG BÉ YÊU', 150, '115000', 'true', '100% bông trắng tinh khiết\r\n100% ảnh chụp tại shop\r\n100% bảo hành đường chỉ trọn đời\r\nBảo hành Bông gấu 6 tháng\r\nMiễn phí Gói quà\r\nMiễn phí Tặng thiệp\r\nMiễn phí Nén chân không gấu                                                  ', '2022-01-09'),
('4', 'images/brown-cosplay-khung-long-2-500x500.jpg', 'GẤU BROWN COSPLAY KHỦNG LONG', 'GẤU BÔNG TẶNG BẠN GÁI', 1500, '175000', 'true', '100% bông trắng tinh khiết\r\n100% ảnh chụp tại shop\r\n100% bảo hành đường chỉ trọn đời\r\nBảo hành Bông gấu 6 tháng\r\nMiễn phí Gói quà\r\nMiễn phí Tặng thiệp\r\nMiễn phí Nén chân không gấu                                                  ', '2022-01-09'),
('5', 'images/meo-amuse-14-500x500.jpg', 'MÈO AMUSE ĐẠI', 'GẤU BÔNG TẶNG BẠN GÁI', 196, '165000', 'true', '100% bông trắng tinh khiết\r\n100% ảnh chụp tại shop\r\n100% bảo hành đường chỉ trọn đời\r\nBảo hành Bông gấu 6 tháng\r\nMiễn phí Gói quà\r\nMiễn phí Tặng thiệp\r\nMiễn phí Nén chân không gấu                                             ', '2022-01-09'),
('6', 'images/corgi-theu-hoa-4-500x500.jpg', 'GẤU BÔNG CORGI NGỒI THÊU HOA', 'GẤU BÔNG TẶNG BẠN GÁI', 150, '125000', 'true', '100% bông trắng tinh khiết\r\n100% ảnh chụp tại shop\r\n100% bảo hành đường chỉ trọn đời\r\nBảo hành Bông gấu 6 tháng\r\nMiễn phí Gói quà\r\nMiễn phí Tặng thiệp\r\nMiễn phí Nén chân không gấu                                           ', '2022-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(14) NOT NULL,
  `Request` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `Id` int(11) NOT NULL,
  `Product_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`Id`, `Product_Type`) VALUES
(2, 'GẤU BÔNG TẶNG BÉ YÊU'),
(3, 'GẤU BÔNG TẶNG BẠN GÁI'),
(5, 'GẤU BÔNG HOT TEEN\r\n'),
(6, 'GẤU BÔNG HOT'),
(10, 'GẤU BÔNG HOT TREND');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID_Order`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `order delivered`
--
ALTER TABLE `order delivered`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Order_id` (`Order_id`),
  ADD KEY `ID_Product` (`ID_Product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Fullname`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order delivered`
--
ALTER TABLE `order delivered`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`);

--
-- Constraints for table `order delivered`
--
ALTER TABLE `order delivered`
  ADD CONSTRAINT `order delivered_ibfk_2` FOREIGN KEY (`Order_id`) REFERENCES `order` (`ID_Order`),
  ADD CONSTRAINT `order delivered_ibfk_3` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`Product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
