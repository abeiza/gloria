-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2016 at 11:15 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_goc_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_banner`
--

CREATE TABLE IF NOT EXISTS `gocweb_banner` (
  `banner_id` varchar(30) NOT NULL,
  `banner_title` varchar(30) DEFAULT NULL,
  `banner_desc` text,
  `banner_url` varchar(225) DEFAULT NULL,
  `banner_background` varchar(225) DEFAULT NULL,
  `banner_date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_banner`
--

INSERT INTO `gocweb_banner` (`banner_id`, `banner_title`, `banner_desc`, `banner_url`, `banner_background`, `banner_date_modify`) VALUES
('BNR0001', 'Banner 1', 'Banner', 'http://localhost/goc_website/index.php/home/post/single/1', '1.jpg', '2016-02-24 15:55:29'),
('BNR0002', 'Banner 2', 'banner', 'http://localhost/goc_website/index.php/home/post/single/2', '2.jpg', '2016-02-24 15:57:47'),
('BNR0003', 'Banner 3', 'banner', 'http://localhost/goc_website/index.php/home/post/single/3', '3.jpg', '2016-02-24 15:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_banner_content`
--

CREATE TABLE IF NOT EXISTS `gocweb_banner_content` (
`banner_content_id` int(11) NOT NULL,
  `banner_contect_parent` varchar(30) DEFAULT NULL,
  `banner_pict` varchar(30) DEFAULT NULL,
  `banner_content_post_animation` enum('caption lfl','caption lft','caption lfb','caption lfr') DEFAULT NULL,
  `banner_content_x` int(11) DEFAULT NULL,
  `banner_content_y` int(11) DEFAULT NULL,
  `banner_content_speed` int(11) DEFAULT NULL,
  `banner_content_start` int(11) DEFAULT NULL,
  `banner_content_animation` enum('easeOutExpo','easeOutBounce','easeOutElastic') DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gocweb_banner_content`
--

INSERT INTO `gocweb_banner_content` (`banner_content_id`, `banner_contect_parent`, `banner_pict`, `banner_content_post_animation`, `banner_content_x`, `banner_content_y`, `banner_content_speed`, `banner_content_start`, `banner_content_animation`) VALUES
(3, 'BNR0002', 'text12.png', 'caption lfl', 150, 150, 900, 900, 'easeOutExpo'),
(5, 'BNR0003', 'text21.png', 'caption lfl', 300, 150, 900, 900, 'easeOutExpo'),
(7, 'BNR0003', 'text31.png', 'caption lfb', 350, 180, 900, 1000, 'easeOutExpo'),
(8, 'BNR0001', 'text4.png', 'caption lfr', 500, 150, 900, 900, 'easeOutExpo'),
(12, 'BNR0001', 'text53.png', 'caption lfb', 490, 200, 900, 1000, 'easeOutExpo');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_category`
--

CREATE TABLE IF NOT EXISTS `gocweb_category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(30) DEFAULT NULL,
  `category_description` text,
  `category_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gocweb_category`
--

INSERT INTO `gocweb_category` (`category_id`, `category_name`, `category_description`, `category_date_update`) VALUES
(1, 'News', '-', NULL),
(2, 'Artikel', '-', NULL),
(3, 'Promo', '-', NULL),
(4, 'Test1', 'test test test1', '2016-02-09 17:07:32'),
(5, 'Test 2', 'test 2 test 2 test 2', '2016-02-05 10:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_contact`
--

CREATE TABLE IF NOT EXISTS `gocweb_contact` (
`contact_id` int(11) NOT NULL,
  `contact_email` varchar(30) DEFAULT NULL,
  `contact_phone1` varchar(30) DEFAULT NULL,
  `contact_phone2` varchar(30) DEFAULT NULL,
  `contact_fax` varchar(30) DEFAULT NULL,
  `contact_address` text NOT NULL,
  `contact_facebook` varchar(225) NOT NULL,
  `contact_twitter` varchar(225) NOT NULL,
  `contact_youtube` varchar(225) NOT NULL,
  `contact_linkedin` varchar(225) NOT NULL,
  `long_point` varchar(150) NOT NULL,
  `lat_point` varchar(150) NOT NULL,
  `contact_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gocweb_contact`
--

INSERT INTO `gocweb_contact` (`contact_id`, `contact_email`, `contact_phone1`, `contact_phone2`, `contact_fax`, `contact_address`, `contact_facebook`, `contact_twitter`, `contact_youtube`, `contact_linkedin`, `long_point`, `lat_point`, `contact_date_update`) VALUES
(1, 'sales@goc.co.id', '(021) - 456789', '(021) - 456789', '(021) - 456789', 'Jl. Ciputat Raya No.2C\r\nKby. Lama\r\nKota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12240\r\nIndonesia', 'http://facebook.com/', 'http://twitter.com/', 'http://youtube.com/', 'http://linkedin.com/', '106.77751957671717', '-6.257737483553622', '2016-02-23 03:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_menu`
--

CREATE TABLE IF NOT EXISTS `gocweb_menu` (
  `menu_id` varchar(30) NOT NULL,
  `menu_name` varchar(30) DEFAULT NULL,
  `menu_url` varchar(225) NOT NULL,
  `menu_remark` varchar(150) DEFAULT NULL,
  `menu_content_status` bit(2) NOT NULL,
  `menu_date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_menu`
--

INSERT INTO `gocweb_menu` (`menu_id`, `menu_name`, `menu_url`, `menu_remark`, `menu_content_status`, `menu_date_modify`) VALUES
('MNU0001', 'Home', 'http://localhost/goc_website/', 'halaman utama', b'00', '2016-02-22 09:52:28'),
('MNU0002', 'Our Company', '#', 'tentang perusahaan', b'00', '2016-02-22 09:53:13'),
('MNU0003', 'Our Brand', '#', 'Brand Perusahaan', b'00', '2016-02-22 09:56:04'),
('MNU0004', 'News', 'http://localhost/goc_website/index.php/home/post/category/1', 'Artikel Tentang Perusahaan', b'00', '2016-02-22 09:56:39'),
('MNU0005', 'Career', '#', 'Iklan Lowongan', b'00', '2016-02-22 09:57:05'),
('MNU0006', 'FAQ', '#', '-', b'00', '2016-02-22 09:57:17'),
('MNU0007', 'Contact Us', 'http://localhost/goc_website/index.php/home/contact', 'info contact perusahaan', b'00', '2016-02-22 09:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_menu_content`
--

CREATE TABLE IF NOT EXISTS `gocweb_menu_content` (
`menu_content_id` int(11) NOT NULL,
  `menu_refparent` varchar(30) DEFAULT NULL,
  `menu_content_label` varchar(30) DEFAULT NULL,
  `menu_content_url` varchar(255) DEFAULT NULL,
  `menu_content_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `gocweb_menu_content`
--

INSERT INTO `gocweb_menu_content` (`menu_content_id`, `menu_refparent`, `menu_content_label`, `menu_content_url`, `menu_content_code`) VALUES
(17, 'MNU0003', 'PURBASARI', 'http://purbasari.com/', NULL),
(18, 'MNU0003', 'KANNA', 'http://localhost/goc_website/index.php/home/page/category/2', NULL),
(19, 'MNU0003', 'NEW CELL', 'http://localhost/goc_website/index.php/home/page/category/3', NULL),
(20, 'MNU0003', 'AMARA', 'http://localhost/goc_website/index.php/home/page/category/4', NULL),
(21, 'MNU0002', 'OUR VALUE', 'http://localhost/goc_website/index.php/home/page/single/18', NULL),
(23, 'MNU0002', 'VISION AND MISSION', 'http://localhost/goc_website/index.php/home/page/single/19', NULL),
(24, 'MNU0002', 'OUR HISTORY', 'http://localhost/goc_website/index.php/home/page/single/20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_page`
--

CREATE TABLE IF NOT EXISTS `gocweb_page` (
`page_id` int(11) NOT NULL,
  `page_title` varchar(30) DEFAULT NULL,
  `page_short_desc` varchar(150) NOT NULL,
  `page_category` int(11) NOT NULL,
  `page_desc` text,
  `page_pict` varchar(225) NOT NULL,
  `page_pict_thumb` varchar(225) NOT NULL,
  `page_status` enum('draft','posting','trash') DEFAULT NULL,
  `page_date_create` datetime DEFAULT NULL,
  `page_date_update` datetime DEFAULT NULL,
  `author` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `gocweb_page`
--

INSERT INTO `gocweb_page` (`page_id`, `page_title`, `page_short_desc`, `page_category`, `page_desc`, `page_pict`, `page_pict_thumb`, `page_status`, `page_date_create`, `page_date_update`, `author`) VALUES
(18, 'Our Value', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', 1, '<h1>Our Values</h1>\r\n\r\n<div style="margin-top:-10px;margin-left:5px;color:#8dc43f">What we stand for</div>\r\n\r\n<div style="width:100%;">\r\n<div style="width:50%;float:left;">\r\n<div style="padding:10px">\r\n<p style="text-align:justify">Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n</div>\r\n</div>\r\n\r\n<div style="width:50%;float:left;">\r\n<div style="padding:10px">\r\n<p style="text-align:justify">Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div style="width:100%;">\r\n<div style="width:25%;float:left;height:100px;background-color:#ccc;margin-bottom:40px">&nbsp;</div>\r\n\r\n<div style="width:75%;float:left;height:100px;background-color:#8dc43f;">\r\n<div style="color: rgb(255, 255, 255); padding: 10px; text-align: justify;">Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country.</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'posting', '2016-02-22 15:54:06', '2016-02-25 09:53:21', 1),
(19, 'Vision and Mission', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', 1, '<p style="text-align: justify;">Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p style="text-align: justify;">Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n', '', '', 'posting', '2016-02-22 15:54:31', '2016-02-24 16:00:20', 1),
(20, 'Our History', '-											', 1, '<p>-</p>\r\n', '', '', 'posting', '2016-02-22 15:54:50', NULL, 1),
(21, 'Kanna 1', '-', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:57:19', NULL, 1),
(22, 'Kanna 2', '-', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:57:33', NULL, 1),
(23, 'Kanna 3', '-', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:57:47', NULL, 1),
(24, 'Kanna 4', '-', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:58:01', NULL, 1),
(25, 'Amara 1', '-											', 4, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:58:27', NULL, 1),
(26, 'Amara 2', '-											', 4, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:58:37', NULL, 1),
(27, 'Kanna 5', '-', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:59:22', NULL, 1),
(28, 'Kanna 6', '-											', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:59:36', NULL, 1),
(29, 'Kanna 7', '-											', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:59:45', NULL, 1),
(30, 'Kanna 8', '-											', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 09:59:56', NULL, 1),
(31, 'Kanna 9', '-											', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 10:01:20', NULL, 1),
(32, 'Kanna 10', '-											', 2, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 10:01:31', NULL, 1),
(33, 'New Cell 1', '-											', 3, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 10:01:48', NULL, 1),
(34, 'New Cell 2', '-											', 3, '<p>-</p>\r\n', '', '', 'posting', '2016-02-25 10:02:08', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_page_category`
--

CREATE TABLE IF NOT EXISTS `gocweb_page_category` (
`page_category_id` int(11) NOT NULL,
  `page_category_name` varchar(30) DEFAULT NULL,
  `page_category_description` text,
  `page_category_update` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gocweb_page_category`
--

INSERT INTO `gocweb_page_category` (`page_category_id`, `page_category_name`, `page_category_description`, `page_category_update`) VALUES
(1, 'General', '-', '2016-02-19 09:22:43'),
(2, 'Kanna', '-', '2016-02-19 09:23:03'),
(3, 'New Cell', '-', '2016-02-19 09:23:18'),
(4, 'Amara', '-', '2016-02-19 09:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_post`
--

CREATE TABLE IF NOT EXISTS `gocweb_post` (
`post_id` int(50) NOT NULL,
  `post_title` varchar(30) DEFAULT NULL,
  `post_short_desc` varchar(150) NOT NULL,
  `post_desc` text,
  `post_pict` varchar(225) NOT NULL,
  `post_pict_thumb` varchar(225) NOT NULL,
  `post_status` enum('draft','posting','trash') DEFAULT NULL,
  `post_date_create` datetime DEFAULT NULL,
  `post_date_update` datetime DEFAULT NULL,
  `post_url` varchar(225) NOT NULL,
  `author` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gocweb_post`
--

INSERT INTO `gocweb_post` (`post_id`, `post_title`, `post_short_desc`, `post_desc`, `post_pict`, `post_pict_thumb`, `post_status`, `post_date_create`, `post_date_update`, `post_url`, `author`) VALUES
(1, 'Promo ke 1', 'Test Promo ke 1', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n', '', '', 'posting', '2016-02-24 15:53:15', NULL, '', 1),
(2, 'Promo ke 2', 'Sedikit Penjelasan tentang promo ke 2', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n', '', '', 'posting', '2016-02-24 15:53:59', NULL, '', 1),
(3, 'Promo ke 3', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n', '', '', 'posting', '2016-02-24 15:54:32', NULL, '', 1),
(4, 'News 1', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over&nbsp;</p>\r\n', '', '', 'posting', '2016-02-25 10:03:55', NULL, '', 1),
(5, 'News 2', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over&nbsp;</p>\r\n', '', '', 'posting', '2016-02-25 10:04:12', NULL, '', 1),
(6, 'News 3', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over&nbsp;</p>\r\n', '', '', 'posting', '2016-02-25 10:04:30', NULL, '', 1),
(7, 'News 4', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over&nbsp;</p>\r\n', '', '', 'posting', '2016-02-25 10:05:11', NULL, '', 1),
(8, 'News 5', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over&nbsp;</p>\r\n', '', '', 'posting', '2016-02-25 10:05:25', NULL, '', 1),
(9, 'News 6', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over&nbsp;</p>\r\n', '', '', 'posting', '2016-02-25 10:05:40', NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_post_category`
--

CREATE TABLE IF NOT EXISTS `gocweb_post_category` (
`post_category` int(11) NOT NULL,
  `post_ref_post` int(11) DEFAULT NULL,
  `post_ref_category` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `gocweb_post_category`
--

INSERT INTO `gocweb_post_category` (`post_category`, `post_ref_post`, `post_ref_category`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 8, 3),
(10, 9, 2),
(11, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_post_tag`
--

CREATE TABLE IF NOT EXISTS `gocweb_post_tag` (
`post_tag` int(11) NOT NULL,
  `post_ref_post` int(11) DEFAULT NULL,
  `post_ref_tag` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gocweb_post_tag`
--

INSERT INTO `gocweb_post_tag` (`post_tag`, `post_ref_post`, `post_ref_tag`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 4),
(6, 6, 4),
(7, 7, 3),
(8, 7, 4),
(9, 8, 1),
(10, 8, 4),
(11, 9, 3),
(12, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_setting`
--

CREATE TABLE IF NOT EXISTS `gocweb_setting` (
`setting_id` int(11) NOT NULL,
  `setting_title` varchar(30) DEFAULT NULL,
  `setting_tag_line` varchar(225) DEFAULT NULL,
  `setting_desc` text NOT NULL,
  `setting_logo` varchar(150) DEFAULT NULL,
  `setting_thumb_logo` varchar(150) NOT NULL,
  `setting_vision` text NOT NULL,
  `setting_mission` text NOT NULL,
  `setting_moto` text NOT NULL,
  `setting_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gocweb_setting`
--

INSERT INTO `gocweb_setting` (`setting_id`, `setting_title`, `setting_tag_line`, `setting_desc`, `setting_logo`, `setting_thumb_logo`, `setting_vision`, `setting_mission`, `setting_moto`, `setting_date_update`) VALUES
(1, 'PT Gloria Origita Cosmetics', 'Natural Ingredient - Modern Technology', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.', 'goc.jpg', 'uploads/logo/thumb/goc.jpg', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.', '2016-02-22 08:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_tag`
--

CREATE TABLE IF NOT EXISTS `gocweb_tag` (
`tag_id` int(11) NOT NULL,
  `tag_name` varchar(30) DEFAULT NULL,
  `tag_description` text,
  `tag_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gocweb_tag`
--

INSERT INTO `gocweb_tag` (`tag_id`, `tag_name`, `tag_description`, `tag_date_update`) VALUES
(1, 'Tag 1', 'tag 1 tag 1 tag 2', '2016-02-05 07:11:36'),
(3, 'tag 2', 'tag 2 tag 2', '2016-02-05 07:09:11'),
(4, 'tag 3', 'tag 3 tag 3 tag 3', '2016-02-05 07:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_user`
--

CREATE TABLE IF NOT EXISTS `gocweb_user` (
`user_id` int(11) NOT NULL,
  `user_first_name` varchar(30) DEFAULT NULL,
  `user_last_name` varchar(30) DEFAULT NULL,
  `user_nick` varchar(30) DEFAULT NULL,
  `user_username` varchar(225) DEFAULT NULL,
  `user_password` varchar(225) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_date_log` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gocweb_user`
--

INSERT INTO `gocweb_user` (`user_id`, `user_first_name`, `user_last_name`, `user_nick`, `user_username`, `user_password`, `user_email`, `user_date_log`) VALUES
(1, 'Evan', 'Abeiza', 'Evan', 'evan_abeiza', 'user1234', 'evan.abeiza@gmail.com', '2016-02-25 13:08:08'),
(7, 'Admin', 'Admin', 'Admin', 'admin', 'admin', 'admin@goc.co.id', '2016-03-03 15:47:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gocweb_banner`
--
ALTER TABLE `gocweb_banner`
 ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `gocweb_banner_content`
--
ALTER TABLE `gocweb_banner_content`
 ADD PRIMARY KEY (`banner_content_id`), ADD KEY `banner_contect_parent` (`banner_contect_parent`);

--
-- Indexes for table `gocweb_category`
--
ALTER TABLE `gocweb_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gocweb_contact`
--
ALTER TABLE `gocweb_contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `gocweb_menu`
--
ALTER TABLE `gocweb_menu`
 ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `gocweb_menu_content`
--
ALTER TABLE `gocweb_menu_content`
 ADD PRIMARY KEY (`menu_content_id`), ADD KEY `gocweb_menu_content_ibfk_1` (`menu_refparent`);

--
-- Indexes for table `gocweb_page`
--
ALTER TABLE `gocweb_page`
 ADD PRIMARY KEY (`page_id`), ADD KEY `page_category` (`page_category`), ADD KEY `gocweb_page_ibfk_1` (`author`), ADD KEY `page_category_2` (`page_category`), ADD KEY `page_category_3` (`page_category`);

--
-- Indexes for table `gocweb_page_category`
--
ALTER TABLE `gocweb_page_category`
 ADD PRIMARY KEY (`page_category_id`);

--
-- Indexes for table `gocweb_post`
--
ALTER TABLE `gocweb_post`
 ADD PRIMARY KEY (`post_id`), ADD KEY `author` (`author`);

--
-- Indexes for table `gocweb_post_category`
--
ALTER TABLE `gocweb_post_category`
 ADD PRIMARY KEY (`post_category`), ADD KEY `post_ref_post` (`post_ref_post`), ADD KEY `post_ref_category` (`post_ref_category`);

--
-- Indexes for table `gocweb_post_tag`
--
ALTER TABLE `gocweb_post_tag`
 ADD PRIMARY KEY (`post_tag`), ADD KEY `post_ref_post` (`post_ref_post`), ADD KEY `post_ref_tag` (`post_ref_tag`);

--
-- Indexes for table `gocweb_setting`
--
ALTER TABLE `gocweb_setting`
 ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `gocweb_tag`
--
ALTER TABLE `gocweb_tag`
 ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `gocweb_user`
--
ALTER TABLE `gocweb_user`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_username` (`user_username`), ADD UNIQUE KEY `user_password` (`user_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gocweb_banner_content`
--
ALTER TABLE `gocweb_banner_content`
MODIFY `banner_content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gocweb_category`
--
ALTER TABLE `gocweb_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gocweb_contact`
--
ALTER TABLE `gocweb_contact`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gocweb_menu_content`
--
ALTER TABLE `gocweb_menu_content`
MODIFY `menu_content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `gocweb_page`
--
ALTER TABLE `gocweb_page`
MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `gocweb_page_category`
--
ALTER TABLE `gocweb_page_category`
MODIFY `page_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gocweb_post`
--
ALTER TABLE `gocweb_post`
MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gocweb_post_category`
--
ALTER TABLE `gocweb_post_category`
MODIFY `post_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gocweb_post_tag`
--
ALTER TABLE `gocweb_post_tag`
MODIFY `post_tag` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gocweb_setting`
--
ALTER TABLE `gocweb_setting`
MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gocweb_tag`
--
ALTER TABLE `gocweb_tag`
MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gocweb_user`
--
ALTER TABLE `gocweb_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gocweb_banner_content`
--
ALTER TABLE `gocweb_banner_content`
ADD CONSTRAINT `gocweb_banner_content_ibfk_1` FOREIGN KEY (`banner_contect_parent`) REFERENCES `gocweb_banner` (`banner_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_menu_content`
--
ALTER TABLE `gocweb_menu_content`
ADD CONSTRAINT `gocweb_menu_content_ibfk_1` FOREIGN KEY (`menu_refparent`) REFERENCES `gocweb_menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_page`
--
ALTER TABLE `gocweb_page`
ADD CONSTRAINT `gocweb_page_ibfk_1` FOREIGN KEY (`author`) REFERENCES `gocweb_user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_post`
--
ALTER TABLE `gocweb_post`
ADD CONSTRAINT `gocweb_post_ibfk_3` FOREIGN KEY (`author`) REFERENCES `gocweb_user` (`user_id`);

--
-- Constraints for table `gocweb_post_category`
--
ALTER TABLE `gocweb_post_category`
ADD CONSTRAINT `gocweb_post_category_ibfk_1` FOREIGN KEY (`post_ref_post`) REFERENCES `gocweb_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `gocweb_post_category_ibfk_2` FOREIGN KEY (`post_ref_category`) REFERENCES `gocweb_category` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_post_tag`
--
ALTER TABLE `gocweb_post_tag`
ADD CONSTRAINT `gocweb_post_tag_ibfk_1` FOREIGN KEY (`post_ref_post`) REFERENCES `gocweb_post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `gocweb_post_tag_ibfk_2` FOREIGN KEY (`post_ref_tag`) REFERENCES `gocweb_tag` (`tag_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
