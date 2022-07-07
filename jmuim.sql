-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 02:34 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmuim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_designation` varchar(255) NOT NULL,
  `admin_signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `admin_contact`, `admin_email`, `admin_designation`, `admin_signature`) VALUES
(1, 'shaheer', 'admin', 'admin', '', '', '', ''),
(2, 'shaheer', 'user', 'pass', '123', 'a@123', 'user', ''),
(3, 'abd', '123', '321', '123', 'abd@123.com', '321', '');

-- --------------------------------------------------------

--
-- Table structure for table `auditor`
--

CREATE TABLE `auditor` (
  `auditor_id` int(255) NOT NULL,
  `auditor_name` varchar(255) NOT NULL,
  `auditor_email` varchar(255) NOT NULL,
  `auditor_designation` varchar(255) NOT NULL,
  `auditor_signature` varchar(255) NOT NULL,
  `auditor_username` varchar(255) NOT NULL,
  `auditor_password` varchar(255) NOT NULL,
  `auditor_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditor`
--

INSERT INTO `auditor` (`auditor_id`, `auditor_name`, `auditor_email`, `auditor_designation`, `auditor_signature`, `auditor_username`, `auditor_password`, `auditor_contact`) VALUES
(1, 'shaheer', 'a@123.com', 'auditor', '', 'shaheer', 'password', '1203065'),
(2, 'shaheer', 'a@123.com', 'auditor', '', 'shaheer', 'password', '1203065'),
(3, 'abd', 'a@123.com', 'auditorr', '', 'abd', 'dab', '12343'),
(4, 'abdd', 'a@123.coma', 'auditor', '', 'abdd', 'dabd', '1234321');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(50) NOT NULL,
  `employee_producer` int(50) NOT NULL,
  `employee_total` int(50) NOT NULL,
  `employee_production` int(50) NOT NULL,
  `employee_logistic` int(50) NOT NULL,
  `employee_quality` int(50) NOT NULL,
  `employee_admin` int(50) NOT NULL,
  `employee_others` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_producer`, `employee_total`, `employee_production`, `employee_logistic`, `employee_quality`, `employee_admin`, `employee_others`) VALUES
(1, 9, 1, 2, 3, 4, 45, 6),
(2, 10, 1, 2, 3, 4, 45, 6),
(3, 11, 1, 2, 3, 4, 45, 6),
(4, 12, 1, 2, 3, 4, 45, 6),
(5, 13, 1, 2, 3, 4, 45, 6),
(6, 14, 1, 2, 3, 4, 45, 6),
(7, 17, 3, 3, 3, 3, 3, 3),
(8, 18, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `ingredient_id` int(255) NOT NULL,
  `ingredient_product_id` int(255) NOT NULL,
  `ingredient_name` varchar(255) NOT NULL,
  `ingredient_producer_name` varchar(255) NOT NULL,
  `ingredient_producer_contact` varchar(255) NOT NULL,
  `ingredient_producer_address` varchar(255) NOT NULL,
  `ingredient_supplier_name` varchar(255) NOT NULL,
  `ingredient_supplier_contact` varchar(255) NOT NULL,
  `ingredient_supplier_address` varchar(255) NOT NULL,
  `ingredient_halal_name` varchar(255) NOT NULL,
  `ingredient_halal_contact` varchar(255) NOT NULL,
  `ingredient_halal_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingredient_id`, `ingredient_product_id`, `ingredient_name`, `ingredient_producer_name`, `ingredient_producer_contact`, `ingredient_producer_address`, `ingredient_supplier_name`, `ingredient_supplier_contact`, `ingredient_supplier_address`, `ingredient_halal_name`, `ingredient_halal_contact`, `ingredient_halal_address`) VALUES
(1, 0, '$in', '$ipn', '$ipc', '$ipa', '$isn', '$isc', '$isa', '$ihn', '$ihc', '$iha'),
(2, 10, 'asd', 'hg', 'ghj', 'hjh', 'jhj', 'hjhj', 'hj', 'jhjh', 'jhjh', 'jhj'),
(3, 25, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(4, 26, 'test1', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `management_id` int(255) NOT NULL,
  `management_producers` int(255) NOT NULL,
  `management_name` varchar(255) NOT NULL,
  `management_designation` varchar(255) NOT NULL,
  `management_phone` varchar(255) NOT NULL,
  `management_email` varchar(255) NOT NULL,
  `producer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`management_id`, `management_producers`, `management_name`, `management_designation`, `management_phone`, `management_email`, `producer_id`) VALUES
(1, 7, 'asd', 'fas', '123', 'a.com', 0),
(2, 8, 'asd', 'fas', '123', 'a.com', 0),
(3, 9, 'asd', 'fas', '123', 'a.com', 0),
(4, 10, 'asd', 'fas', '123', 'a.com', 0),
(5, 11, 'asd', 'fas', '123', 'a.com', 0),
(6, 12, 'asd', 'fas', '123', 'a.com', 0),
(7, 13, 'asd', 'fas', '123', 'a.com', 0),
(8, 14, 'asd', 'fas', '123', 'a.com', 0),
(9, 17, 'test', 'test', '123', 'test@a.com', 0),
(10, 18, 'test1', 'test', '123', 'test@a.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

CREATE TABLE `packaging` (
  `packaging_id` int(255) NOT NULL,
  `packaging_product` int(255) NOT NULL,
  `packaging_name` varchar(255) NOT NULL,
  `packaging_producer_name` varchar(255) NOT NULL,
  `packaging_producer_contact` varchar(255) NOT NULL,
  `packaging_producer_address` varchar(255) NOT NULL,
  `packaging_supplier_name` varchar(255) NOT NULL,
  `packaging_supplier_contact` varchar(255) NOT NULL,
  `packaging_supplier_address` varchar(255) NOT NULL,
  `packaging_halal_name` varchar(255) NOT NULL,
  `packaging_halal_contact` varchar(255) NOT NULL,
  `packaging_halal_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`packaging_id`, `packaging_product`, `packaging_name`, `packaging_producer_name`, `packaging_producer_contact`, `packaging_producer_address`, `packaging_supplier_name`, `packaging_supplier_contact`, `packaging_supplier_address`, `packaging_halal_name`, `packaging_halal_contact`, `packaging_halal_address`) VALUES
(1, 8, 'asd', 'hg', 'ghj', 'hjh', 'jhj', 'hjhj', 'hj', 'jhjh', 'jhjh', 'jhj'),
(2, 9, 'asd', 'hg', 'ghj', 'hjh', 'jhj', 'hjhj', 'hj', 'jhjh', 'jhjh', 'jhj'),
(3, 10, 'asd', 'hg', 'ghj', 'hjh', 'jhj', 'hjhj', 'hj', 'jhjh', 'jhjh', 'jhj'),
(4, 25, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(5, 26, 'test1', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `producer_id` int(255) NOT NULL,
  `producer_company_name` varchar(255) NOT NULL,
  `producer_username` int(255) NOT NULL,
  `producer_password` int(255) NOT NULL,
  `producer_owner_religion` varchar(255) NOT NULL,
  `producer_primary_business` varchar(255) NOT NULL,
  `producer_address` varchar(255) NOT NULL,
  `producer_phone` varchar(255) NOT NULL,
  `producer_phone2` varchar(255) NOT NULL,
  `producer_email` varchar(255) NOT NULL,
  `producer_website` varchar(255) NOT NULL,
  `producer_allied_business` varchar(255) NOT NULL,
  `producer_affiliations` varchar(255) NOT NULL,
  `producer_annual_turnover` int(255) NOT NULL,
  `producer_ntn` int(255) NOT NULL,
  `producer_gst` int(255) NOT NULL,
  `producer_shift` varchar(255) NOT NULL,
  `producer_scope` varchar(255) NOT NULL,
  `producer_no_products` int(255) NOT NULL,
  `producer_ps` int(255) NOT NULL,
  `producer_ms` int(255) NOT NULL,
  `producer_review` varchar(255) NOT NULL,
  `producer_approved` int(255) NOT NULL,
  `producer_approved_by` varchar(255) NOT NULL,
  `producer_review_by` varchar(255) NOT NULL,
  `producer_has` varchar(255) NOT NULL,
  `producer_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producer_id`, `producer_company_name`, `producer_username`, `producer_password`, `producer_owner_religion`, `producer_primary_business`, `producer_address`, `producer_phone`, `producer_phone2`, `producer_email`, `producer_website`, `producer_allied_business`, `producer_affiliations`, `producer_annual_turnover`, `producer_ntn`, `producer_gst`, `producer_shift`, `producer_scope`, `producer_no_products`, `producer_ps`, `producer_ms`, `producer_review`, `producer_approved`, `producer_approved_by`, `producer_review_by`, `producer_has`, `producer_category`) VALUES
(17, 'test', 0, 0, 'test', 'test', 'test', '123', 'test', 'a@123.com', 'test.com', 'test', 'test', 321, 12, 312, '1-9', 'test', 2, 1, 0, '', 0, '', '', 'test', ''),
(18, '$cn1', 0, 0, '$rel', '$pb', '$ad', '$p1', '$p2', '$email', '$web', '$ab', '$aff', 0, 0, 0, '$shift', '     $scope     ', 0, 0, 0, '', 0, '', '', '$halal', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(255) NOT NULL,
  `product_brand_name` varchar(255) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `product_producer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_brand_name`, `product_detail`, `product_producer`) VALUES
(25, 'test', 'test', '17'),
(26, 'test1', 'test1', '18');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `site_id` int(255) NOT NULL,
  `site_producer` int(255) NOT NULL,
  `site_product` int(255) NOT NULL,
  `site_address` varchar(255) NOT NULL,
  `site_phone` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `site_auditor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `site_producer`, `site_product`, `site_address`, `site_phone`, `site_email`, `site_auditor`) VALUES
(1, 7, 3, 'jhj', 'hjh', 'jhjhj', 0),
(2, 8, 4, 'jhj', 'hjh', 'jhjhj', 0),
(3, 9, 5, 'jhj', 'hjh', 'jhjhj', 0),
(4, 10, 6, 'jhj', 'hjh', 'jhjhj', 0),
(5, 11, 7, 'jhj', 'hjh', 'jhjhj', 0),
(6, 12, 8, 'jhj', 'hjh', 'jhjhj', 0),
(7, 13, 9, 'jhj', 'hjh', 'jhjhj', 0),
(8, 14, 10, 'jhj', 'hjh', 'jhjhj', 0),
(9, 17, 25, 'test', 'test', 'test', 0),
(10, 18, 26, 'test1', 'test1', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `third_party`
--

CREATE TABLE `third_party` (
  `third_party_id` int(255) NOT NULL,
  `third_party_producer` int(255) NOT NULL,
  `third_party_name` varchar(255) NOT NULL,
  `third_party_contact` varchar(255) NOT NULL,
  `third_party_address` varchar(255) NOT NULL,
  `third_party_task` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `third_party`
--

INSERT INTO `third_party` (`third_party_id`, `third_party_producer`, `third_party_name`, `third_party_contact`, `third_party_address`, `third_party_task`) VALUES
(1, 8, 'das', '312', 'asd`', 'asd'),
(2, 9, 'das', '312', 'asd`', 'asd'),
(3, 10, 'das', '312', 'asd`', 'asd'),
(4, 11, 'das', '312', 'asd`', 'asd'),
(5, 12, 'das', '312', 'asd`', 'asd'),
(6, 13, 'das', '312', 'asd`', 'asd'),
(7, 14, 'das', '312', 'asd`', 'asd'),
(8, 17, 'test', 'test', 'test', 'test'),
(9, 18, 'test', 'test', 'test', 'test1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditor`
--
ALTER TABLE `auditor`
  ADD PRIMARY KEY (`auditor_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`management_id`);

--
-- Indexes for table `packaging`
--
ALTER TABLE `packaging`
  ADD PRIMARY KEY (`packaging_id`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`producer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `third_party`
--
ALTER TABLE `third_party`
  ADD PRIMARY KEY (`third_party_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auditor`
--
ALTER TABLE `auditor`
  MODIFY `auditor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingredient_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `management_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packaging`
--
ALTER TABLE `packaging`
  MODIFY `packaging_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `producer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `site_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `third_party`
--
ALTER TABLE `third_party`
  MODIFY `third_party_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
