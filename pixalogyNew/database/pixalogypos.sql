-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 10:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixalogypos`
--

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `branchID` varchar(50) NOT NULL,
  `branchName` varchar(50) NOT NULL,
  `locations` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`branchID`, `branchName`, `locations`, `phone`, `address`, `email`, `fax`) VALUES
('Branch5c63e5cf37b4e9.61082361', 'Kandy', 'kandy', '081345678', 'No:270/katugasthota/kandy', 'Nr@gmail.com', '0772192129'),
('Branch5c63e6329d77f7.36408636', 'colombo', 'colombo', '0823344539', 'no;45/panadura/colombo', 'f@gmail.com', '232132132131');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `DistributeAddress` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyID`, `companyName`, `DistributeAddress`, `Tel`) VALUES
('company5c64dd6c203512.24179105', 'COC', 'NO:2/kandy', '0812345678'),
('company5c64ded9b4d374.53310591', 'ERT', 'no:30/katugasthota/kandy', '0982192');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departmentID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentID`, `Name`) VALUES
('Depart5c6389da8b29e8.39960729', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `DesignationID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`DesignationID`, `Name`, `Salary`) VALUES
('Designation5c63e719b84218.87324803', 'manager', '50000'),
('Designation5c650542b65d90.65880935', 'chashi', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `joinedDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `name`, `address`, `Tel`, `nic`, `Email`, `Gender`, `designation`, `salary`, `birthday`, `branch`, `department`, `joinedDate`) VALUES
('Employee5c74c839e815c0.39231105', 'bhanuka nishendra', 'NO:270/kandy', '075674839', '21334443434v', 'n@gamil.com', 'Male', 'manager', '50000', '19/02/2019', 'Kandy', 'IT', '19/02/2019'),
('Employee5c7899a377e811.33038854', 'Gayan Kariyawansa', 'No:23/bokkawala/kandy', '0775638221', '9762372899v', 'G@gmail.com', 'Male', 'manager', '50000', '27/03/2019', 'Kandy', 'IT', '01/03/2019'),
('Employee5c789bacd35a59.19163550', 'nuwan wikramasingha', 'no:12/mahaiyawa/kandy', '0778638229', '987217121v', 'N@gmail.com', 'Male', 'manager', '50000', '19/07/1995', 'colombo', 'IT', '01/03/2019');

-- --------------------------------------------------------

--
-- Table structure for table `otheravip`
--

CREATE TABLE `otheravip` (
  `ItemID` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `BranchID` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `CompanyID` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `manufactureDate` date NOT NULL,
  `ExDate` date NOT NULL,
  `Section` varchar(30) NOT NULL,
  `AddedDate` date NOT NULL,
  `ItemType` varchar(30) NOT NULL,
  `GetPrice` varchar(50) NOT NULL,
  `SellPrice` varchar(50) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `TotalAmount` varchar(50) NOT NULL,
  `Profit` varchar(50) NOT NULL,
  `AvailableProfit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otheravip`
--

INSERT INTO `otheravip` (`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetPrice`, `SellPrice`, `Qty`, `TotalAmount`, `Profit`, `AvailableProfit`) VALUES
('Otherp5c73bfdde19502.24851689', 'red pen', 'atles', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', '', '', '2019-02-14', '2019-02-19', 'A3', '2019-02-13', '4', '10', '20', '400', '4000', '4000', '');

-- --------------------------------------------------------

--
-- Table structure for table `otheravitem`
--

CREATE TABLE `otheravitem` (
  `ItemID` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `BranchID` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `CompanyId` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `manufactureDate` date NOT NULL,
  `ExDate` date NOT NULL,
  `Section` varchar(30) NOT NULL,
  `AddedDate` date NOT NULL,
  `ItemType` varchar(15) NOT NULL,
  `GetPrice` varchar(50) NOT NULL,
  `SellPrice` varchar(50) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `TotalAmount` varchar(50) NOT NULL,
  `Profit` varchar(50) NOT NULL,
  `AvailableProfit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productavailable`
--

CREATE TABLE `productavailable` (
  `proAID` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `sizeAvailable` varchar(7) NOT NULL,
  `SA-small` varchar(7) NOT NULL,
  `SA-s-Price` varchar(20) NOT NULL,
  `SA-medium` varchar(7) NOT NULL,
  `SA-m-price` varchar(20) NOT NULL,
  `SA-large` varchar(7) NOT NULL,
  `SA-l-price` varchar(20) NOT NULL,
  `unitAvailable` varchar(7) NOT NULL,
  `UA-small` varchar(7) NOT NULL,
  `UA-s-unit` varchar(15) NOT NULL,
  `UA-s-price` varchar(15) NOT NULL,
  `UA-medium` varchar(7) NOT NULL,
  `UA-m-unit` varchar(15) NOT NULL,
  `UA-m-price` varchar(20) NOT NULL,
  `UA-large` varchar(7) NOT NULL,
  `UA-l-unit` varchar(15) NOT NULL,
  `UA-l-price` varchar(15) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productavailable`
--

INSERT INTO `productavailable` (`proAID`, `productName`, `itemName`, `sizeAvailable`, `SA-small`, `SA-s-Price`, `SA-medium`, `SA-m-price`, `SA-large`, `SA-l-price`, `unitAvailable`, `UA-small`, `UA-s-unit`, `UA-s-price`, `UA-medium`, `UA-m-unit`, `UA-m-price`, `UA-large`, `UA-l-unit`, `UA-l-price`, `price`) VALUES
('prod5c668537cdd1d0.78762887', 'Sunlight', 'soap', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '44.10'),
('prod5c668614488707.12923848', 'harpic', 'harpic', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '500ml', '186.20', 'NO', '', '', 'NO', '', '', 'NO'),
('prod5c6a404d673d54.88318431', 'oil', 'oil', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '1l', '200', 'YES', '2l', '400', 'YES', '3l', '600', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` varchar(50) NOT NULL,
  `sectionName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `sectionName`) VALUES
('sec5c6e2b2fd7df80.05949888', 'A1'),
('sec5c6e2b34d3ab55.58575768', 'A2'),
('sec5c6e2b37ed0627.78178341', 'A3'),
('sec5c6e2b3ba6b6a4.62083417', 'A4'),
('sec5c6e2b40a4be60.92900261', 'A5');

-- --------------------------------------------------------

--
-- Table structure for table `sizeavip`
--

CREATE TABLE `sizeavip` (
  `ItemID` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `BranchID` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `CompanyID` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `manufactureDate` date NOT NULL,
  `ExDate` date NOT NULL,
  `Section` varchar(50) NOT NULL,
  `AddedDate` date NOT NULL,
  `ItemType` varchar(50) NOT NULL,
  `SelectSize` varchar(50) NOT NULL,
  `GetPrice` varchar(50) NOT NULL,
  `SellPrice` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `UnitQty` varchar(50) NOT NULL,
  `purchaseQty` varchar(50) NOT NULL,
  `Profit` varchar(50) NOT NULL,
  `GetAmount` varchar(50) NOT NULL,
  `AvailableProfit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizeavip`
--

INSERT INTO `sizeavip` (`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `companyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `SelectSize`, `GetPrice`, `SellPrice`, `unit`, `UnitQty`, `purchaseQty`, `Profit`, `GetAmount`, `AvailableProfit`) VALUES
('sizeavp5c6faa6a4aa3b9.58557548', 'salmon', 'capten', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-01-31', '2019-02-27', 'A2', '2019-02-21', '2', 'Small', '50', '75', 'g', '5', '250', '6250', '12500', ''),
('sizeavp5c6fab01b0f558.37109518', 'salmon', 'capten', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-01-31', '2019-02-27', 'A2', '2019-02-21', '2', 'Mid', '100', '120', 'g', '10', '250', '5000', '25000', ''),
('sizeavp5c6fab0f5c4f10.94259657', 'salmon', 'capten', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-01-31', '2019-02-27', 'A2', '2019-02-21', '2', 'Large', '150', '177', 'g', '15', '250', '6750', '37500', ''),
('sizeavp5c6fab10d0e5a6.94348260', 'tipitip', 'adsa', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Small', '12', '20', 'g', '5', '200', '1600', '2400', ''),
('sizeavp5c6fab12850c86.23181364', 'tipitip', 'adsa', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Mid', '23', '40', 'g', '5', '200', '3400', '4600', ''),
('sizeavp5c6fab13c2af00.56132974', 'tipitip', 'adsa', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Large', '30', '55', 'g', '12', '199', '4975', '5970', ''),
('sizeavp5c6fab14c17fd6.17478653', 'bite', 'mixturenuts', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Small', '12', '15', 'g', '11', '100', '300', '1200', ''),
('sizeavp5c6fab15cadd53.56737160', 'bite', 'mixturenuts', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Mid', '13', '23', 'g', '12', '101', '1010', '1313', ''),
('sizeavp5c6fab17291447.11438794', 'bite', 'mixturenuts', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Large', '12', '111', 'g', '11', '100', '9900', '1200', ''),
('sizeavp5c6fab17f26c64.50655586', 'ice', 'melani', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Small', '15', '20', 'ml', '11', '50', '250', '750', ''),
('sizeavp5c6fab19add490.69096451', 'ice', 'melani', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-20', '2019-02-11', 'A5', '2019-02-20', '2', 'Mid', '20', '25', 'ml', '13', '120', '600', '2400', ''),
('sizeavp5c760c5b383522.71974852', 'dsadsadas', 'dsads', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64ded9b4d374.53310591', 'ERT', '2019-01-31', '2019-02-27', 'A2', '2019-02-21', '2', 'Small', '122', '1222', 'kg', '1222', '212', '233200', '25864', ''),
('sizeavp5c760c5bee92e0.68855053', 'fdsfds', 'fdsfs', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2019-02-21', '2019-02-14', 'A5', '2019-02-19', '2', 'Small', '1000', '1500', 'kg', '12', '200', '100000', '200000', ''),
('sizeavp5c760c5c7b22e0.60687239', 'soya', 'gre', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2018-01-31', '2019-02-26', 'A3', '2019-02-26', '2', 'Small', '20', '25', 'g', '10', '200', '1000', '4000', ''),
('sizeavp5c760c5d1da957.43391115', 'soya', 'gredsa', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', '2018-01-31', '2019-02-26', 'A3', '2019-02-26', '2', 'Mid', '30', '35', 'g', '12', '30', '150', '900', '');

-- --------------------------------------------------------

--
-- Table structure for table `sizeavitemtem`
--

CREATE TABLE `sizeavitemtem` (
  `ItemID` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `BranchID` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `CompanyID` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `manufactureDate` date NOT NULL,
  `ExDate` date NOT NULL,
  `Section` varchar(20) NOT NULL,
  `AddedDate` date NOT NULL,
  `ItemType` varchar(50) NOT NULL,
  `SelectSize` varchar(10) NOT NULL,
  `GetPrice` varchar(30) NOT NULL,
  `SellPrice` varchar(30) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `UnitQty` varchar(50) NOT NULL,
  `purchaseQty` varchar(50) NOT NULL,
  `Profit` varchar(50) NOT NULL,
  `GetAmount` varchar(50) NOT NULL,
  `AvailableProfit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supdir`
--

CREATE TABLE `supdir` (
  `id` varchar(50) NOT NULL,
  `supID` varchar(50) NOT NULL,
  `supname` varchar(50) NOT NULL,
  `supDA` varchar(50) NOT NULL,
  `supPnum` varchar(15) NOT NULL,
  `supBranch` varchar(30) NOT NULL,
  `comID` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `DistributeAddress` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `proAID` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `sizeAvailable` varchar(50) NOT NULL,
  `smallav` varchar(50) NOT NULL,
  `priceavs` varchar(50) NOT NULL,
  `mediumav` varchar(50) NOT NULL,
  `priceavm` varchar(50) NOT NULL,
  `largeav` varchar(50) NOT NULL,
  `priceavl` varchar(50) NOT NULL,
  `unitAvailable` varchar(50) NOT NULL,
  `smallusa` varchar(50) NOT NULL,
  `smallus` varchar(50) NOT NULL,
  `smallup` varchar(50) NOT NULL,
  `mediumuma` varchar(50) NOT NULL,
  `medianus` varchar(50) NOT NULL,
  `medianup` varchar(50) NOT NULL,
  `largeusa` varchar(50) NOT NULL,
  `largeus` varchar(50) NOT NULL,
  `largeup` varchar(50) NOT NULL,
  `otherprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supdir`
--

INSERT INTO `supdir` (`id`, `supID`, `supname`, `supDA`, `supPnum`, `supBranch`, `comID`, `companyName`, `DistributeAddress`, `Tel`, `proAID`, `productName`, `itemName`, `sizeAvailable`, `smallav`, `priceavs`, `mediumav`, `priceavm`, `largeav`, `priceavl`, `unitAvailable`, `smallusa`, `smallus`, `smallup`, `mediumuma`, `medianus`, `medianup`, `largeusa`, `largeus`, `largeup`, `otherprice`) VALUES
('tem5c6cd4b179cbe', 'Sup5c6a20b4af3a58.99998287', 'danushka', 'kandy', '21321321312', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', 'NO:2/kandy', '0812345678', 'prod5c668537cdd1d0.78762887', 'Sunlight', 'soap', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '44.10'),
('tem5c6cd4bd27c07', 'Sup5c6a20b4af3a58.99998287', 'danushka', 'kandy', '21321321312', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', 'NO:2/kandy', '0812345678', 'prod5c668614488707.12923848', 'harpic', 'harpic', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '500ml', '186.20', 'NO', '', '', 'NO', '', '', 'NO'),
('tem5c6cd4c6375d9', 'Sup5c6a20b4af3a58.99998287', 'danushka', 'kandy', '21321321312', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', 'NO:2/kandy', '0812345678', 'prod5c6a404d673d54.88318431', 'oil', 'oil', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '1l', '200', 'YES', '2l', '400', 'YES', '3l', '600', 'NO'),
('tem5c6cd5bc45540', 'Sup5c6a1f7b26d921.44185846', 'kasun', 'kandy', '32132321321312', 'colombo', 'company5c64ded9b4d374.53310591', 'ERT', 'no:30/katugasthota/kandy', '0982192', 'prod5c668537cdd1d0.78762887', 'Sunlight', 'soap', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '44.10'),
('tem5c6cd5c6df363', 'Sup5c6a1f7b26d921.44185846', 'kasun', 'kandy', '32132321321312', 'colombo', 'company5c64ded9b4d374.53310591', 'ERT', 'no:30/katugasthota/kandy', '0982192', 'prod5c668614488707.12923848', 'harpic', 'harpic', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '500ml', '186.20', 'NO', '', '', 'NO', '', '', 'NO'),
('tem5c6cd5cd833e5', 'Sup5c6a1f7b26d921.44185846', 'kasun', 'kandy', '32132321321312', 'colombo', 'company5c64ded9b4d374.53310591', 'ERT', 'no:30/katugasthota/kandy', '0982192', 'prod5c6a404d673d54.88318431', 'oil', 'oil', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '1l', '200', 'YES', '2l', '400', 'YES', '3l', '600', 'NO'),
('tem5c6cd724e15da', 'Sup5c6a20b4af3a58.99998287', 'danushka', 'kandy', '21321321312', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', 'NO:2/kandy', '0812345678', 'prod5c6a404d673d54.88318431', 'oil', 'oil', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '1l', '200', 'YES', '2l', '400', 'YES', '3l', '600', 'NO'),
('tem5c6cd772b6412', 'Sup5c6a20b4af3a58.99998287', 'danushka', 'kandy', '21321321312', 'Kandy', 'company5c64dd6c203512.24179105', 'COC', 'NO:2/kandy', '0812345678', 'prod5c668614488707.12923848', 'harpic', 'harpic', 'SizeNot', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'unitAva', 'YES', '500ml', '186.20', 'NO', '', '', 'NO', '', '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DistributeAddress` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supID`, `Name`, `DistributeAddress`, `phoneNumber`, `Branch`) VALUES
('Sup5c6a1f7b26d921.44185846', 'kasun', 'kandy', '32132321321312', 'colombo'),
('Sup5c6a20b4af3a58.99998287', 'danushka', 'kandy', '21321321312', 'Kandy');

-- --------------------------------------------------------

--
-- Table structure for table `suptem`
--

CREATE TABLE `suptem` (
  `id` varchar(50) NOT NULL,
  `supID` varchar(50) NOT NULL,
  `supname` varchar(50) NOT NULL,
  `supDA` varchar(50) NOT NULL,
  `supPnum` varchar(50) NOT NULL,
  `supBranch` varchar(50) NOT NULL,
  `comID` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `DistributeAddress` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `proAID` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `sizeAvailable` varchar(50) NOT NULL,
  `smallav` varchar(50) NOT NULL,
  `priceavs` varchar(50) NOT NULL,
  `mediumav` varchar(50) NOT NULL,
  `priceavm` varchar(50) NOT NULL,
  `largeav` varchar(50) NOT NULL,
  `priceavl` varchar(50) NOT NULL,
  `unitAvailable` varchar(50) NOT NULL,
  `smallusa` varchar(50) NOT NULL,
  `smallus` varchar(50) NOT NULL,
  `smallup` varchar(50) NOT NULL,
  `mediumuma` varchar(50) NOT NULL,
  `medianus` varchar(50) NOT NULL,
  `medianup` varchar(50) NOT NULL,
  `largeusa` varchar(50) NOT NULL,
  `largeus` varchar(50) NOT NULL,
  `largeup` varchar(50) NOT NULL,
  `otherprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `systemaccount`
--

CREATE TABLE `systemaccount` (
  `AccountID` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `EmployeeName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `BranchID` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Permissions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemaccount`
--

INSERT INTO `systemaccount` (`AccountID`, `EmployeeID`, `EmployeeName`, `Address`, `PhoneNumber`, `Designation`, `Branch`, `BranchID`, `Department`, `UserName`, `Password`, `Permissions`) VALUES
('Acc5c760580c071d6.29393551', 'Employee5c74c839e815c0.39231105', 'bhanuka nishendra', 'NO:270/kandy', '075674839', 'manager', 'Kandy', 'Branch5c63e5cf37b4e9.61082361', 'IT', 'ni00', 'RW1tYUJoYW51a2ExMjM=', 'Low'),
('Acc5c7899d76a5410.93162480', 'Employee5c7899a377e811.33038854', 'Gayan Kariyawansa', 'No:23/bokkawala/kandy', '0775638221', 'manager', 'Kandy', 'Branch5c63e5cf37b4e9.61082361', 'IT', 'gaya', 'R2F5YUVtbWExMjM=', 'High'),
('Acc5c789bdb653131.91667819', 'Employee5c789bacd35a59.19163550', 'nuwan wikramasingha', 'no:12/mahaiyawa/kandy', '0778638229', 'manager', 'colombo', 'Branch5c63e6329d77f7.36408636', 'IT', 'nuwan', 'TnV3YUVtbWExMjM=', 'Mid');

-- --------------------------------------------------------

--
-- Table structure for table `unitavip`
--

CREATE TABLE `unitavip` (
  `ItemID` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `BranchID` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `CompanyID` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `manufactureDate` date NOT NULL,
  `ExDate` date NOT NULL,
  `Section` varchar(30) NOT NULL,
  `AddedDate` date NOT NULL,
  `ItemType` varchar(15) NOT NULL,
  `GetUnit` varchar(10) NOT NULL,
  `UnitQty` varchar(15) NOT NULL,
  `GetPrice` varchar(15) NOT NULL,
  `SellQtyUnit` varchar(15) NOT NULL,
  `Qty` varchar(15) NOT NULL,
  `SellPrice` varchar(15) NOT NULL,
  `Profit` varchar(15) NOT NULL,
  `AvailableProfit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitavip`
--

INSERT INTO `unitavip` (`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyID`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetUnit`, `UnitQty`, `GetPrice`, `SellQtyUnit`, `Qty`, `SellPrice`, `Profit`, `AvailableProfit`) VALUES
('unitp5c739af709cef2.42637892', 'rice', 'araliya', 'Branch5c63e6329d77f7.36408636', 'colombo', 'company5c64ded9b4d374.53310591', 'ERT', '2018-12-03', '2019-02-27', 'A2', '2019-02-24', '3', 'kg', '12', '10000', 'kg', '1', '1000', '2000', ''),
('unitp5c739af9a905a2.37059625', 'dsada', 'dsada', 'Branch5c63e6329d77f7.36408636', 'colombo', 'company5c64dd6c203512.24179105', 'COC', '2019-02-21', '2019-02-20', 'A2', '2019-02-12', '3', 'kg', '15', '4000', 'kg', '1', '500', '3500', '');

-- --------------------------------------------------------

--
-- Table structure for table `unitavitem`
--

CREATE TABLE `unitavitem` (
  `ItemID` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `BranchID` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `CompanyId` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `manufactureDate` date NOT NULL,
  `ExDate` date NOT NULL,
  `Section` varchar(30) NOT NULL,
  `AddedDate` date NOT NULL,
  `ItemType` varchar(50) NOT NULL,
  `GetUnit` varchar(50) NOT NULL,
  `UnitQty` varchar(50) NOT NULL,
  `GetPrice` varchar(50) NOT NULL,
  `SellQtyUnit` varchar(50) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `SellPrice` varchar(50) NOT NULL,
  `Profit` varchar(50) NOT NULL,
  `AvailableProfit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitavitem`
--

INSERT INTO `unitavitem` (`ItemID`, `ItemName`, `ProductName`, `BranchID`, `BranchName`, `CompanyId`, `CompanyName`, `manufactureDate`, `ExDate`, `Section`, `AddedDate`, `ItemType`, `GetUnit`, `UnitQty`, `GetPrice`, `SellQtyUnit`, `Qty`, `SellPrice`, `Profit`, `AvailableProfit`) VALUES
('unittem5c739e0c9c3890.45720364', 'dsad', 'dsadsa', 'Branch5c63e6329d77f7.36408636', 'colombo', 'company5c64dd6c203512.24179105', 'COC', '2019-02-14', '2019-02-13', 'A2', '2019-02-19', '3', 'kg', '10', '100', 'kg', '1', '11', '10', ''),
('unittem5c760d7f238834.29221989', 'dsga', 'dsad', 'Branch5c63e5cf37b4e9.61082361', 'Kandy', 'company5c64ded9b4d374.53310591', 'ERT', '2019-02-19', '2019-02-12', 'A3', '2019-02-13', '3', 'kg', '12', '1200', 'kg', '1', '150', '600', '');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `uId` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`uId`, `unit`) VALUES
('unit5c6e30b85f1dc3.85638843', 'kg'),
('unit5c6e31a7d937d5.74725006', 'g'),
('unit5c6e31ab81f1a3.98714431', 'ml'),
('unit5c6e34b6ee0998.80456540', 'L'),
('unit5c6e36c4c70578.53676798', 'T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`branchID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `otheravip`
--
ALTER TABLE `otheravip`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `otheravitem`
--
ALTER TABLE `otheravitem`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `productavailable`
--
ALTER TABLE `productavailable`
  ADD PRIMARY KEY (`proAID`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizeavip`
--
ALTER TABLE `sizeavip`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `sizeavitemtem`
--
ALTER TABLE `sizeavitemtem`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `supdir`
--
ALTER TABLE `supdir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supID`);

--
-- Indexes for table `suptem`
--
ALTER TABLE `suptem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systemaccount`
--
ALTER TABLE `systemaccount`
  ADD PRIMARY KEY (`AccountID`);

--
-- Indexes for table `unitavip`
--
ALTER TABLE `unitavip`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `unitavitem`
--
ALTER TABLE `unitavitem`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`uId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
