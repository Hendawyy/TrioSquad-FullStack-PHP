SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `TrioSquad`
--
CREATE DATABASE IF NOT EXISTS `TrioSquad` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `TrioSquad`;

-- --------------------------------------------------------

--
-- Table structure for table `buyper`
--

CREATE TABLE `buyper` (
  `SID` int(11) NOT NULL,
  `PerID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `sPrice` decimal(10,2) NOT NULL,
  `UserProfit` decimal(10,2) NOT NULL DEFAULT 0.00,
  `Ahmed` decimal(10,2) NOT NULL DEFAULT 0.00,
  `Ziad` decimal(10,2) NOT NULL DEFAULT 0.00,
  `Shipping` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Page` enum('The.perfume.shop.11','ahmed_perfumes_store_','Goldex.watches.egy','Store_yano','Enigma stores','Offline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `CPhone` int(12) NOT NULL,
  `SID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `sPrice` decimal(10,2) NOT NULL,
  `Userprofit` decimal(10,2) NOT NULL DEFAULT 0.00,
  `AhmedProf` decimal(10,2) NOT NULL,
  `M7medProf` decimal(10,2) NOT NULL DEFAULT 0.00,
  `Shipping` decimal(10,2) NOT NULL,
  `Size` int(20) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `PN` enum('Yeezy.egypt','Yeezyegy','Storm_store1','Amin_store17','Sneakers.store5','Shoes_station20','Store_yano','Doby_sneakers_store','Sneakers.store11','Enigma stores','Offline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `PID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `Size` int(20) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityID` int(11) NOT NULL,
  `Governorate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityID`, `Governorate`) VALUES
(1, 'Cairo\r\n'),
(2, 'Alexandria'),
(3, 'Giza'),
(4, 'Shubra El Kheima'),
(5, 'Qalyubia'),
(6, 'Port Said'),
(7, 'Suez'),
(8, 'El Mahalla El Kubra'),
(9, 'Gharbia'),
(10, 'Luxor'),
(11, 'Mansoura'),
(12, 'Dakahlia'),
(13, 'Tanta'),
(15, 'Asyut'),
(16, 'Ismailia'),
(17, 'Faiyum'),
(19, 'Sharqia'),
(20, 'Damietta'),
(21, 'Aswan'),
(22, 'Minya'),
(23, 'Damanhur'),
(24, 'Beheira'),
(25, 'Beni Suef'),
(26, 'Hurghada'),
(27, 'Red Sea'),
(28, 'Qena'),
(29, 'Sohag'),
(30, 'Shibin El Kom'),
(31, 'Monufia'),
(32, 'Banha'),
(33, 'Qalyubia'),
(34, 'Arish'),
(35, 'North Sinai'),
(36, 'South Sinai');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `CPhone` int(12) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `City` int(11) NOT NULL,
  `Address` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `perfumes`
--

CREATE TABLE `perfumes` (
  `PerID` int(11) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `ActualPrice` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Table structure for table `salesperson`
--

CREATE TABLE `salesperson` (
  `Image` varchar(500) NOT NULL,
  `SID` int(11) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `MA` enum('Yes','NO') NOT NULL,
  `Admin` enum('Yes','NO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `ID` int(11) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Brand` enum('Adidas','Nike','Puma','New Balance','Vans') NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `ActualPrice` decimal(10,2) NOT NULL,
  `Profit` decimal(10,2) NOT NULL,
  `MP` decimal(10,2) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `shoesquantity`
--

CREATE TABLE `shoesquantity` (
  `ID` int(11) NOT NULL,
  `Size` int(20) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `buyper`
--
ALTER TABLE `buyper`
  ADD PRIMARY KEY (`SID`,`PerID`,`Date`) USING BTREE,
  ADD KEY `Quantity` (`Quantity`),
  ADD KEY `PerID` (`PerID`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`SID`,`ID`,`CPhone`,`Date`) USING BTREE,
  ADD KEY `ID` (`ID`),
  ADD KEY `CPhone` (`CPhone`),
  ADD KEY `Size` (`Size`),
  ADD KEY `Quantity` (`Quantity`),
  ADD KEY `PN` (`PN`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `sdhflkj` (`PID`),
  ADD KEY `sdajghaljkdfghkja;fbnvkjcxh` (`SID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CID`,`CPhone`),
  ADD KEY `FK` (`City`),
  ADD KEY `CPhone` (`CPhone`);

--
-- Indexes for table `perfumes`
--
ALTER TABLE `perfumes`
  ADD PRIMARY KEY (`PerID`),
  ADD KEY `Quantity` (`Quantity`);

--
-- Indexes for table `salesperson`
--
ALTER TABLE `salesperson`
  ADD PRIMARY KEY (`SID`,`Sname`) USING BTREE;

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`ID`,`Model`,`Brand`,`Image`) USING BTREE;

--
-- Indexes for table `shoesquantity`
--
ALTER TABLE `shoesquantity`
  ADD PRIMARY KEY (`ID`,`Size`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `perfumes`
--
ALTER TABLE `perfumes`
  MODIFY `PerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salesperson`
--
ALTER TABLE `salesperson`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=645;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyper`
--
ALTER TABLE `buyper`
  ADD CONSTRAINT `buyper_ibfk_1` FOREIGN KEY (`PerID`) REFERENCES `perfumes` (`PerID`),
  ADD CONSTRAINT `buyper_ibfk_3` FOREIGN KEY (`SID`) REFERENCES `salesperson` (`SID`);

--
-- Constraints for table `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `buys_ibfk_2` FOREIGN KEY (`SID`) REFERENCES `salesperson` (`SID`),
  ADD CONSTRAINT `buys_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `shoes` (`ID`),
  ADD CONSTRAINT `sd` FOREIGN KEY (`CPhone`) REFERENCES `customers` (`CPhone`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `sdajghaljkdfghkja;fbnvkjcxh` FOREIGN KEY (`SID`) REFERENCES `salesperson` (`SID`),
  ADD CONSTRAINT `sdhflkj` FOREIGN KEY (`PID`) REFERENCES `shoes` (`ID`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `FK` FOREIGN KEY (`City`) REFERENCES `city` (`CityID`);

--
-- Constraints for table `shoesquantity`
--
ALTER TABLE `shoesquantity`
  ADD CONSTRAINT `shoesquantity_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `shoes` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
