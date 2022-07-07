-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2020 at 07:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_designation` varchar(255) NOT NULL,
  `admin_signature` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `auditor`;
CREATE TABLE IF NOT EXISTS `auditor` (
  `auditor_id` int(255) NOT NULL AUTO_INCREMENT,
  `auditor_name` varchar(255) NOT NULL,
  `auditor_email` varchar(255) NOT NULL,
  `auditor_designation` varchar(255) NOT NULL,
  `auditor_signature` varchar(255) NOT NULL,
  `auditor_username` varchar(255) NOT NULL,
  `auditor_password` varchar(255) NOT NULL,
  `auditor_contact` varchar(255) NOT NULL,
  PRIMARY KEY (`auditor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `auditrecord`
--

DROP TABLE IF EXISTS `auditrecord`;
CREATE TABLE IF NOT EXISTS `auditrecord` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `auditee` text NOT NULL,
  `scope` text NOT NULL,
  `audit_standard` text NOT NULL,
  `audit_data` date DEFAULT NULL,
  `audit_location` varchar(999) CHARACTER SET utf8 NOT NULL,
  `auditor` text NOT NULL,
  `name1` text NOT NULL,
  `designation1` text NOT NULL,
  `som1` text NOT NULL,
  `scm1` text NOT NULL,
  `name2` text DEFAULT NULL,
  `designation2` text DEFAULT NULL,
  `som2` text DEFAULT NULL,
  `scm2` text DEFAULT NULL,
  `name3` text DEFAULT NULL,
  `designation3` text DEFAULT NULL,
  `som3` text DEFAULT NULL,
  `scm3` text DEFAULT NULL,
  `name4` text DEFAULT NULL,
  `designation4` text DEFAULT NULL,
  `som4` text DEFAULT NULL,
  `scm4` text DEFAULT NULL,
  `name5` text DEFAULT NULL,
  `designation5` text DEFAULT NULL,
  `som5` text DEFAULT NULL,
  `scm5` text DEFAULT NULL,
  `name6` text DEFAULT NULL,
  `designation6` text DEFAULT NULL,
  `som6` text DEFAULT NULL,
  `scm6` text DEFAULT NULL,
  `name7` text DEFAULT NULL,
  `designation7` text DEFAULT NULL,
  `som7` text DEFAULT NULL,
  `scm7` text DEFAULT NULL,
  `name8` text DEFAULT NULL,
  `designation8` text DEFAULT NULL,
  `som8` text DEFAULT NULL,
  `scm8` text DEFAULT NULL,
  `name9` text DEFAULT NULL,
  `designation9` text DEFAULT NULL,
  `som9` text DEFAULT NULL,
  `scm9` text DEFAULT NULL,
  `mr1` text NOT NULL,
  `mr2` text NOT NULL,
  `mr3` text NOT NULL,
  `mr4` text NOT NULL,
  `mr5` text NOT NULL,
  `mr6` text NOT NULL,
  `prem1` text NOT NULL,
  `prem2` text NOT NULL,
  `prem3` text NOT NULL,
  `dumpa1` text NOT NULL,
  `dumpa2` text NOT NULL,
  `dumpa3` text NOT NULL,
  `hsfs1` text NOT NULL,
  `hsfs2` text NOT NULL,
  `hsfs3` text NOT NULL,
  `hsfs4` text NOT NULL,
  `hsfs5` text NOT NULL,
  `hsfs6` text NOT NULL,
  `phd1` text NOT NULL,
  `phd2` text NOT NULL,
  `phd3` text NOT NULL,
  `phd4` text NOT NULL,
  `phd5` text NOT NULL,
  `phd6` text NOT NULL,
  `phd7` text NOT NULL,
  `stdsshf1` text NOT NULL,
  `stdsshf2` text NOT NULL,
  `stdsshf3` text NOT NULL,
  `stdsshf4` text NOT NULL,
  `pla1` text NOT NULL,
  `pla2` text NOT NULL,
  `pla3` text NOT NULL,
  `pla4` text NOT NULL,
  `lr` text NOT NULL,
  `gr1` text NOT NULL,
  `gr2` text DEFAULT NULL,
  `gr3` text DEFAULT NULL,
  `ac1` text NOT NULL,
  `ac2` text NOT NULL,
  `ac3` text NOT NULL,
  `ac4` text NOT NULL,
  `rec1` text NOT NULL,
  `rec2` text DEFAULT NULL,
  `rec3` text DEFAULT NULL,
  `opmr1` tinytext NOT NULL,
  `opmr2` tinytext NOT NULL,
  `opmr3` tinytext NOT NULL,
  `opmr4` tinytext NOT NULL,
  `opmr5` tinytext NOT NULL,
  `opmr6` tinytext NOT NULL,
  `opprem1` tinytext NOT NULL,
  `opprem2` tinytext NOT NULL,
  `opprem3` tinytext NOT NULL,
  `opdumpa1` tinytext NOT NULL,
  `opdumpa2` tinytext NOT NULL,
  `opdumpa3` tinytext NOT NULL,
  `ophsfs1` tinytext NOT NULL,
  `ophsfs2` tinytext NOT NULL,
  `ophsfs3` tinytext NOT NULL,
  `ophsfs4` tinytext NOT NULL,
  `ophsfs5` tinytext NOT NULL,
  `ophsfs6` tinytext NOT NULL,
  `opphf1` tinytext NOT NULL,
  `opphf2` tinytext NOT NULL,
  `opphf3` tinytext NOT NULL,
  `opphf4` tinytext NOT NULL,
  `opphf5` tinytext NOT NULL,
  `opphf6` tinytext NOT NULL,
  `opphf7` tinytext NOT NULL,
  `opstdsshf1` tinytext NOT NULL,
  `opstdsshf2` tinytext NOT NULL,
  `opstdsshf3` tinytext NOT NULL,
  `opstdsshf4` tinytext NOT NULL,
  `oppla1` tinytext NOT NULL,
  `oppla2` tinytext NOT NULL,
  `oppla3` tinytext NOT NULL,
  `oppla4` tinytext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditrecord`
--

INSERT INTO `auditrecord` (`id`, `auditee`, `scope`, `audit_standard`, `audit_data`, `audit_location`, `auditor`, `name1`, `designation1`, `som1`, `scm1`, `name2`, `designation2`, `som2`, `scm2`, `name3`, `designation3`, `som3`, `scm3`, `name4`, `designation4`, `som4`, `scm4`, `name5`, `designation5`, `som5`, `scm5`, `name6`, `designation6`, `som6`, `scm6`, `name7`, `designation7`, `som7`, `scm7`, `name8`, `designation8`, `som8`, `scm8`, `name9`, `designation9`, `som9`, `scm9`, `mr1`, `mr2`, `mr3`, `mr4`, `mr5`, `mr6`, `prem1`, `prem2`, `prem3`, `dumpa1`, `dumpa2`, `dumpa3`, `hsfs1`, `hsfs2`, `hsfs3`, `hsfs4`, `hsfs5`, `hsfs6`, `phd1`, `phd2`, `phd3`, `phd4`, `phd5`, `phd6`, `phd7`, `stdsshf1`, `stdsshf2`, `stdsshf3`, `stdsshf4`, `pla1`, `pla2`, `pla3`, `pla4`, `lr`, `gr1`, `gr2`, `gr3`, `ac1`, `ac2`, `ac3`, `ac4`, `rec1`, `rec2`, `rec3`, `opmr1`, `opmr2`, `opmr3`, `opmr4`, `opmr5`, `opmr6`, `opprem1`, `opprem2`, `opprem3`, `opdumpa1`, `opdumpa2`, `opdumpa3`, `ophsfs1`, `ophsfs2`, `ophsfs3`, `ophsfs4`, `ophsfs5`, `ophsfs6`, `opphf1`, `opphf2`, `opphf3`, `opphf4`, `opphf5`, `opphf6`, `opphf7`, `opstdsshf1`, `opstdsshf2`, `opstdsshf3`, `opstdsshf4`, `oppla1`, `oppla2`, `oppla3`, `oppla4`, `reg_date`) VALUES
(1, 'jljlkjlkqjlkj', 'lkjlk', 'jkl', '2222-12-22', 'kjllkjlkj', 'lkjkljkj', 'lkjkljklj', 'klj', 'klj', 'klj', 'klj', 'kljkl', 'jk', 'ljk', 'ljkl', 'jkl', 'jkl', 'jlk', 'j', 'klj', 'lkj', 'klj', 'klj', 'klj', 'kl', 'jkl', 'jlk', 'jkl', 'jkl', 'jkl', 'jkl', 'jlk', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'j', 'klj', 'klj', 'klj', 'klj', 'illjl', 'kljlkjkl', 'k;lkl;k;lk', 'jlkj', 'kl', 'jbnjjk', 'nlknklnkln', 'ljljkljkl', 'hljoj', 'klnjlkjlkj', 'lkjkljlkj', 'lijljlikj', 'jlkjkljkl', 'jhhkh', 'jhj', 'hkjlkjlkj', 'hlkjknl', 'jlkjkljklj', 'ojojlij', 'lijljljklj', 'knhkljlk', 'kjnjkn', 'nj', 'jl', 'ljlk', 'lkjkjlkjlj', 'bjklknlkn', 'ljkl', 'jkhkjhn', 'lkjjsdhfkjdf', 'asdiaskjdn', 'kjnaskndlkan', 'lknaskldnlkasdn', 'kndklsadkln', 'kljkl', 'jlk', 'jlk', 'jkl', 'jlkj', 'klj', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'kjnjkn', 'nj', 'jl', 'ljlk', 'no', 'yes', 'yes', 'yes', '2020-09-10 11:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(50) NOT NULL AUTO_INCREMENT,
  `employee_producer` int(50) NOT NULL,
  `employee_total` int(50) NOT NULL,
  `employee_production` int(50) NOT NULL,
  `employee_logistic` int(50) NOT NULL,
  `employee_quality` int(50) NOT NULL,
  `employee_admin` int(50) NOT NULL,
  `employee_others` int(50) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_producer`, `employee_total`, `employee_production`, `employee_logistic`, `employee_quality`, `employee_admin`, `employee_others`) VALUES
(24, 48, 7, 7, 7, 7, 7, 7),
(25, 49, 7, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `ingredient_id` int(255) NOT NULL AUTO_INCREMENT,
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
  `ingredient_halal_address` varchar(255) NOT NULL,
  PRIMARY KEY (`ingredient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingredient_id`, `ingredient_product_id`, `ingredient_name`, `ingredient_producer_name`, `ingredient_producer_contact`, `ingredient_producer_address`, `ingredient_supplier_name`, `ingredient_supplier_contact`, `ingredient_supplier_address`, `ingredient_halal_name`, `ingredient_halal_contact`, `ingredient_halal_address`) VALUES
(3, 25, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(4, 26, 'test1', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

DROP TABLE IF EXISTS `management`;
CREATE TABLE IF NOT EXISTS `management` (
  `management_id` int(255) NOT NULL AUTO_INCREMENT,
  `management_producers` int(255) NOT NULL,
  `management_name` varchar(255) NOT NULL,
  `management_designation` varchar(255) NOT NULL,
  `management_phone` varchar(255) NOT NULL,
  `management_email` varchar(255) NOT NULL,
  `producer_id` int(255) NOT NULL,
  PRIMARY KEY (`management_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`management_id`, `management_producers`, `management_name`, `management_designation`, `management_phone`, `management_email`, `producer_id`) VALUES
(9, 17, 'test', 'test', '123', 'test@a.com', 0),
(10, 18, 'test1', 'test', '123', 'test@a.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

DROP TABLE IF EXISTS `packaging`;
CREATE TABLE IF NOT EXISTS `packaging` (
  `packaging_id` int(255) NOT NULL AUTO_INCREMENT,
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
  `packaging_halal_address` varchar(255) NOT NULL,
  PRIMARY KEY (`packaging_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`packaging_id`, `packaging_product`, `packaging_name`, `packaging_producer_name`, `packaging_producer_contact`, `packaging_producer_address`, `packaging_supplier_name`, `packaging_supplier_contact`, `packaging_supplier_address`, `packaging_halal_name`, `packaging_halal_contact`, `packaging_halal_address`) VALUES
(4, 25, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(5, 26, 'test1', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

DROP TABLE IF EXISTS `producer`;
CREATE TABLE IF NOT EXISTS `producer` (
  `producer_id` int(255) NOT NULL AUTO_INCREMENT,
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
  `producer_category` varchar(255) NOT NULL,
  PRIMARY KEY (`producer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producer_id`, `producer_company_name`, `producer_username`, `producer_password`, `producer_owner_religion`, `producer_primary_business`, `producer_address`, `producer_phone`, `producer_phone2`, `producer_email`, `producer_website`, `producer_allied_business`, `producer_affiliations`, `producer_annual_turnover`, `producer_ntn`, `producer_gst`, `producer_shift`, `producer_scope`, `producer_no_products`, `producer_ps`, `producer_ms`, `producer_review`, `producer_approved`, `producer_approved_by`, `producer_review_by`, `producer_has`, `producer_category`) VALUES
(17, 'new 1', 0, 0, 'test', 'test', 'test', '123', 'test', 'a@123.com', 'test.com', 'test', 'test', 321, 12, 312, '1-9', '   test   ', 2, 1, 0, '', 0, '', '', 'test', ''),
(18, '$cn1', 0, 0, '$rel', '$pb', '$ad', '$p1', '$p2', '$email', '$web', '$ab', '$aff', 0, 0, 0, '$shift', '     $scope     ', 0, 0, 0, '', 0, '', '', '$halal', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_brand_name` varchar(255) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `product_producer` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `site_id` int(255) NOT NULL AUTO_INCREMENT,
  `site_producer` int(255) NOT NULL,
  `site_product` int(255) NOT NULL,
  `site_address` varchar(255) NOT NULL,
  `site_phone` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `site_auditor` int(255) NOT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `site_producer`, `site_product`, `site_address`, `site_phone`, `site_email`, `site_auditor`) VALUES
(9, 17, 25, 'test', 'test', 'test', 0),
(10, 18, 26, 'test1', 'test1', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `third_party`
--

DROP TABLE IF EXISTS `third_party`;
CREATE TABLE IF NOT EXISTS `third_party` (
  `third_party_id` int(255) NOT NULL AUTO_INCREMENT,
  `third_party_producer` int(255) NOT NULL,
  `third_party_name` varchar(255) NOT NULL,
  `third_party_contact` varchar(255) NOT NULL,
  `third_party_address` varchar(255) NOT NULL,
  `third_party_task` varchar(255) NOT NULL,
  PRIMARY KEY (`third_party_id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `third_party`
--

INSERT INTO `third_party` (`third_party_id`, `third_party_producer`, `third_party_name`, `third_party_contact`, `third_party_address`, `third_party_task`) VALUES
(8, 17, 'test', 'test', 'test', 'test'),
(9, 18, 'test', 'test', 'test', 'test1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
