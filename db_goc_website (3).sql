-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2016 at 06:24 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
('BNR0001', 'Banner 1', 'Banner', 'http://localhost/goc_website/index.php/home/post/single/1', '11.jpg', '2016-03-11 10:36:12'),
('BNR0002', 'Banner 2', 'banner', 'http://localhost/goc_website/index.php/home/post/single/2', '21.jpg', '2016-03-11 10:36:33'),
('BNR0003', 'Banner 3', 'banner', 'http://localhost/goc_website/index.php/home/post/single/3', '31.jpg', '2016-03-11 10:36:46');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_banner_content`
--

INSERT INTO `gocweb_banner_content` (`banner_content_id`, `banner_contect_parent`, `banner_pict`, `banner_content_post_animation`, `banner_content_x`, `banner_content_y`, `banner_content_speed`, `banner_content_start`, `banner_content_animation`) VALUES
(3, 'BNR0002', 'text12.png', 'caption lfl', 150, 150, 900, 900, 'easeOutElastic'),
(5, 'BNR0003', 'text21.png', 'caption lfl', 300, 150, 900, 900, 'easeOutExpo'),
(7, 'BNR0003', 'text31.png', 'caption lfb', 350, 180, 900, 1000, 'easeOutExpo'),
(8, 'BNR0001', 'text4.png', 'caption lfr', 500, 150, 900, 900, 'easeOutExpo'),
(12, 'BNR0001', 'text53.png', 'caption lfb', 490, 200, 900, 1000, 'easeOutBounce');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_career`
--

CREATE TABLE IF NOT EXISTS `gocweb_career` (
  `Career_Id` varchar(30) NOT NULL DEFAULT '',
  `Career_Title` varchar(30) DEFAULT NULL,
  `Career_Departmen` enum('IT Department','Finance & Accounting Department','HR Department','Marketing Department','Production Department','R n d Department','QA Department','SCM Department','General') DEFAULT NULL,
  `Career_Location` varchar(30) DEFAULT NULL,
  `Career_Education` varchar(30) DEFAULT NULL,
  `Career_Work_Experience` varchar(30) DEFAULT NULL,
  `Career_Job_Desc` text,
  `Career_Requrement` text,
  `Career_Note` varchar(100) DEFAULT NULL,
  `Career_Qty` varchar(30) NOT NULL,
  `Career_Post_Create` datetime DEFAULT NULL,
  `Career_Post_Update` datetime NOT NULL,
  `Career_Job_Expired` date DEFAULT NULL,
  `Carrer_Status` enum('draft','posting','trash') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_career`
--

INSERT INTO `gocweb_career` (`Career_Id`, `Career_Title`, `Career_Departmen`, `Career_Location`, `Career_Education`, `Career_Work_Experience`, `Career_Job_Desc`, `Career_Requrement`, `Career_Note`, `Career_Qty`, `Career_Post_Create`, `Career_Post_Update`, `Career_Job_Expired`, `Carrer_Status`) VALUES
('JCG0001', 'BRAND EXECUTIVE', 'Marketing Department', 'DKI Jakarta', 'S1 (Management & Farmasi)', '2 tahun', '<ul>\r\n	<li>Mengembangkan positioning brand dalam segmen pasar sasaran.</li>\r\n	<li>Merancang advertising yang membuat segmen pasar sasaran tetap merasa in tune dengan brand</li>\r\n	<li>Membentuk image brand sesuai keputusan strategic management</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Usia max 30 tahun</li>\r\n	<li>Pendidikan S1 diutamakan jurusan Management &amp; Farmasi, IPK Min. 3,0</li>\r\n	<li><strong>Berpengalaman sebagai Product Executive / Brand Executive min. 1 th</strong></li>\r\n	<li>Tugas menyusun dan melaksanakan strategi marketing 4 P (Product, Price, Place, Promotion)</li>\r\n	<li>Dapat bekerjasama dalam team</li>\r\n	<li>Lebih diutamakan yang fasih bahasa Inggris</li>\r\n	<li>Bersedia bekerja lembur dan dibawah tekananBersedia ditempatkan di Head Office Jalan ciputat raya no 2C, Kebayoran Lama. Jakarta Selatan (Dekat pondok indah mall)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, 'for 5 position', '2016-03-11 09:02:13', '2016-04-13 10:24:32', '2016-03-31', 'posting'),
('JCG0003', 'QA & QC MANAGER', 'QA Department', 'DKI Jakarta', 'Bachelor Degree', 'Min. 4 tahun', '<ul>\r\n	<li>Memahami &amp; menguasai pengawasan semua kegiatan QA &amp; QC diindustri kosmetik, farmasi, dan makanan.</li>\r\n	<li>Memahami &amp; mampu mengimplementasikan sistem management mutu ISO 9000 dan cara produksi kosmetik yang baik (CPKB).</li>\r\n	<li>Memahami &amp; mampu mengimplementasikan sistem jaminan halal (SJH)</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Usia maksimal 35 tahun</li>\r\n	<li>Pendidikan terakhir minimal D3 Kimia/S1 Farmasi</li>\r\n	<li>Berpengalaman dibidang yang sama 2 tahun</li>\r\n	<li>Mampu bekerja dibawah tekanan, displin, dan bertanggung jawab</li>\r\n	<li>Penempatan di Factory (Jalan Pemuda, Gg Pedurenan V. Gunung Sindur, Bogor)</li>\r\n</ul>\r\n', NULL, 'for 1 position', '2016-03-11 09:07:09', '2016-03-22 08:27:50', '2016-03-31', 'posting'),
('JCG0004', 'SPV TAX / PAJAK', 'Finance & Accounting Department', 'DKI Jakarta', 'S1 (Akuntansi/Ekonomi)', '3 Tahun', '<ul>\r\n	<li>Memiliki Sertifikat Perpajakan (Brevet AB), lebih diutamakan jika memiliki Sertifikat Brevet C.</li>\r\n	<li>Memonitor Transaksi Rutin berupa Perhitungan, Pembayaran beserta Pelaporan All Tax Perusahaan.</li>\r\n	<li>Menguasai Perhitungan Koreksi Fiskal (Positif/Negatif), Membuat Daftar Nominatif Biaya Promosi &amp; Entertainment serta Bertanggung Jawab dalam Penyajian Laporan SPT Tahunan (PPh Pasal 29 Badan).</li>\r\n	<li>Terbiasa berhubungan dengan Account Representative (AR) dan terbiasa dalam menghadapi Pemeriksaan Pajak.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Pendidikan minimal D3 Perpajakan</li>\r\n	<li>Memiliki pengalaman minimal 3 Tahun Dibidangnya</li>\r\n	<li>Usia maksimal 35 Tahun</li>\r\n	<li>Rajin, Teliti, Dan mampu bekerja dibawah tekanan</li>\r\n	<li>Memiliki motivasi diri yang kuat untuk sukses</li>\r\n	<li>Bersedia bekerja lembur dan dibawah tekanan</li>\r\n	<li>Lokasi kantor Jl. Ciputat Raya No 2C, Kebayoran Lama - Jakarta Selatan 12240 ( Dekat Pondok Indah Mall )</li>\r\n</ul>\r\n', NULL, 'for 1 position', '2016-03-11 09:11:38', '2016-03-22 08:29:53', '2016-03-26', 'posting'),
('JCG0005', 'SALES ADMIN', 'General', 'Semarang', 'Min. D3', '1 year', '<ul>\r\n	<li>Mengkoordinasikan seluruh sales admin di seluruh area</li>\r\n	<li>Mengolah data sales yang dibutuhkan oleh Management sesuai target yang telah ditentukan</li>\r\n	<li>Mengembangkan sistem admin skala nasional</li>\r\n	<li>Melakukan dan memonitor data absensi, lembur, ijin dan cuti karyawan (sales) serta menyiapkan data untuk keperluan bagian lain yang terkait seperti proses penggajian ataupun klaim kesehatan</li>\r\n	<li>Melakukan proses tutup buku bulanan dan berkoordinasi dengan atasan dalam hal tugas dan tanggung jawab dari team sales</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Usia maksimal 28 tahun</li>\r\n	<li>Pendidikan minimal Diploma III (D3) semua jurusan</li>\r\n	<li>Pengalaman dibidang admin sales minimal 1 tahun</li>\r\n	<li>Berpenampilan menarik dan memiliki interpersonal skill yang baik</li>\r\n	<li>Mampu berkomunikasi dengan baik</li>\r\n	<li>Menyukai pekerjaan yang bersifat administratif</li>\r\n	<li>Rapi, teliti, sabar, disiplin dan bertanggung jawab</li>\r\n	<li>Cerdas dalam mengoperasikan komputer (Ms Word, Ms Excel)</li>\r\n	<li><strong>Penempatan di Semarang</strong></li>\r\n</ul>\r\n', NULL, 'for 1 positions ', '2016-03-13 07:45:21', '2016-03-22 08:33:44', '2016-03-31', 'posting'),
('JCG0006', 'Purchasing Staff', 'Finance & Accounting Department', 'DKI Jakarta', 'SMK / SMA', '2 years', '<ul>\r\n	<li>Male</li>\r\n	<li>Education background S.1</li>\r\n	<li>Experience in same level</li>\r\n	<li>Having motorcycle is advantage</li>\r\n	<li>Familiar with Microsoft office</li>\r\n	<li>Honestly and high analytical and problem solving skills</li>\r\n	<li>Excellent time management skill</li>\r\n	<li>Able to work with internal and external team/depatment</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Male</li>\r\n	<li>Education background S.1</li>\r\n	<li>Experience in same level</li>\r\n	<li>Having motorcycle is advantage</li>\r\n	<li>Familiar with Microsoft office</li>\r\n	<li>Honestly and high analytical and problem solving skills</li>\r\n	<li>Excellent time management skill</li>\r\n	<li>Able to work with internal and external team/depatment</li>\r\n</ul>\r\n', NULL, 'for 1 position', '2016-03-13 07:46:31', '2016-03-16 04:59:32', '2016-03-31', 'posting'),
('JCG0007', 'Analys System ', 'IT Department', 'DKI Jakarta', 'Bachelor Degree', '5 years', '<ul>\r\n	<li>Male</li>\r\n	<li>Education background S.1</li>\r\n	<li>Experience in same level</li>\r\n	<li>Having motorcycle is advantage</li>\r\n	<li>Familiar with Microsoft office</li>\r\n	<li>Honestly and high analytical and problem solving skills</li>\r\n	<li>Excellent time management skill</li>\r\n	<li>Able to work with internal and external team/depatment</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Male</li>\r\n	<li>Education background S.1</li>\r\n	<li>Experience in same level</li>\r\n	<li>Having motorcycle is advantage</li>\r\n	<li>Familiar with Microsoft office</li>\r\n	<li>Honestly and high analytical and problem solving skills</li>\r\n	<li>Excellent time management skill</li>\r\n	<li>Able to work with internal and external team/depatment</li>\r\n</ul>\r\n', NULL, 'for 1 position', '2016-03-13 14:50:32', '2016-03-16 04:59:59', '2016-03-31', 'posting'),
('JCG0008', 'Cashier ', 'Finance & Accounting Department', 'Gunung Sindur', 'SMK / SMA', 'Fresh Graduate are welcome', '<ul>\r\n	<li>Male</li>\r\n	<li>Education background S.1</li>\r\n	<li>Experience in same level</li>\r\n	<li>Having motorcycle is advantage</li>\r\n	<li>Familiar with Microsoft office</li>\r\n	<li>Honestly and high analytical and problem solving skills</li>\r\n	<li>Excellent time management skill</li>\r\n	<li>Able to work with internal and external team/depatment</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Male</li>\r\n	<li>Education background S.1</li>\r\n	<li>Experience in same level</li>\r\n	<li>Having motorcycle is advantage</li>\r\n	<li>Familiar with Microsoft office</li>\r\n	<li>Honestly and high analytical and problem solving skills</li>\r\n	<li>Excellent time management skill</li>\r\n	<li>Able to work with internal and external team/depatment</li>\r\n</ul>\r\n', NULL, 'for 5 positions', '2016-03-13 14:51:46', '2016-03-16 04:59:48', '2016-03-31', 'posting');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_category`
--

CREATE TABLE IF NOT EXISTS `gocweb_category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(30) DEFAULT NULL,
  `category_description` text,
  `category_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
('MNU0001', 'Home', 'http://192.168.171.49/goc_website/', 'halaman utama', b'11', '2016-03-18 08:49:49'),
('MNU0002', 'Our Company', '#', 'tentang perusahaan', b'11', '2016-02-22 09:53:13'),
('MNU0003', 'Our Brand', '#', 'Brand Perusahaan', b'11', '2016-02-22 09:56:04'),
('MNU0004', 'News', 'http://192.168.171.49/goc_website/index.php/home/post/category/1', 'Artikel Tentang Perusahaan', b'11', '2016-03-18 08:51:00'),
('MNU0005', 'Career', 'http://192.168.171.49/goc_website/index.php/home/career/', 'Iklan Lowongan', b'11', '2016-03-18 08:55:19'),
('MNU0006', 'FAQ', '#', '-', b'11', '2016-02-22 09:57:17'),
('MNU0007', 'Contact Us', 'http://192.168.171.49/goc_website/index.php/home/contact/', 'info contact perusahaan', b'11', '2016-03-18 08:56:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_menu_content`
--

INSERT INTO `gocweb_menu_content` (`menu_content_id`, `menu_refparent`, `menu_content_label`, `menu_content_url`, `menu_content_code`) VALUES
(17, 'MNU0003', 'PURBASARI', 'http://192.168.171.49/purbasari/', NULL),
(25, 'MNU0002', 'OUR VALUE', 'http://192.168.171.49/goc_website/index.php/home/page/single/18', NULL),
(26, 'MNU0002', 'VISION AND MISSION', 'http://192.168.171.49/goc_website/index.php/home/page/single/19', NULL),
(27, 'MNU0002', 'OUR HISTORY', 'http://192.168.171.49/goc_website/index.php/home/page/single/20', NULL),
(28, 'MNU0003', 'KANNA', 'http://192.168.171.49/goc_website/index.php/home/page/category/2', NULL),
(29, 'MNU0003', 'NEW CELL', 'http://192.168.171.49/goc_website/index.php/home/page/category/3', NULL),
(30, 'MNU0003', 'AMARA', 'http://192.168.171.49/goc_website/index.php/home/page/category/4', NULL),
(31, 'MNU0002', 'MAP DISTRIBUTION', 'http://192.168.171.49/goc_website/index.php/home/page/single/35', NULL),
(32, 'MNU0003', 'Clean Face', 'http://192.168.171.49/goc_website/index.php/home/page/category/5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_message`
--

CREATE TABLE IF NOT EXISTS `gocweb_message` (
`message_id` int(11) NOT NULL,
  `message_name` varchar(50) DEFAULT NULL,
  `message_subject` varchar(30) DEFAULT NULL,
  `message_email` varchar(50) DEFAULT NULL,
  `message_text` text,
  `message_post_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_message`
--

INSERT INTO `gocweb_message` (`message_id`, `message_name`, `message_subject`, `message_email`, `message_text`, `message_post_date`) VALUES
(3, 'Evan Abeiza', 'test sekaliiii lagi', 'evan.abeiza@gmail.com', 'test ya om', '2016-03-16 05:45:46');

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
  `page_type` enum('product','regular') NOT NULL,
  `page_status` enum('draft','posting','trash') DEFAULT NULL,
  `page_date_create` datetime DEFAULT NULL,
  `page_date_update` datetime DEFAULT NULL,
  `author` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_page`
--

INSERT INTO `gocweb_page` (`page_id`, `page_title`, `page_short_desc`, `page_category`, `page_desc`, `page_pict`, `page_pict_thumb`, `page_type`, `page_status`, `page_date_create`, `page_date_update`, `author`) VALUES
(18, 'Our Value', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', 1, '<h1>Our Values</h1>\r\n\r\n<div style="margin-top:-10px;margin-left:5px;color:#8dc43f">What we stand for</div>\r\n\r\n<div style="width:100%;">\r\n<div style="width:50%;float:left;">\r\n<div style="padding:10px">\r\n<p style="text-align:justify">Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n</div>\r\n</div>\r\n\r\n<div style="width:50%;float:left;">\r\n<div style="padding:10px">\r\n<p style="text-align:justify">Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n</div>\r\n</div>\r\n</div>\r\n', '', '', 'regular', 'posting', '2016-02-22 15:54:06', '2016-04-13 11:31:57', 7),
(19, 'Vision and Mission', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry ', 1, '<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n\r\n<p>Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.</p>\r\n', '', '', 'regular', 'posting', '2016-02-22 15:54:31', '2016-03-26 08:24:27', 7),
(20, 'Our History', '-											', 1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'regular', 'posting', '2016-02-22 15:54:50', '2016-03-16 09:29:58', 7),
(21, 'Kanna 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'thumb_default1.jpg', 'uploads/page/thumb/thumb_default1.jpg', 'product', 'posting', '2016-02-25 09:57:19', '2016-03-16 09:31:00', 7),
(22, 'Kanna 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:57:33', '2016-03-16 09:31:19', 7),
(23, 'Kanna 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:57:47', '2016-03-16 09:31:38', 7),
(24, 'Kanna 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. software like Aldus PageMaker including versions of Lorem Ipsum.', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:58:01', '2016-03-16 09:31:55', 7),
(25, 'Amara 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.		', 4, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:58:27', '2016-03-16 09:32:14', 7),
(26, 'Amara 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:58:37', '2016-03-16 09:32:33', 7),
(27, 'Kanna 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:59:22', '2016-03-16 09:32:52', 7),
(28, 'Kanna 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. dus PageMaker including versions of Lorem Ipsum.', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:59:36', '2016-03-16 09:33:14', 7),
(29, 'Kanna 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:59:45', '2016-03-16 09:33:55', 7),
(30, 'Kanna 8', '-											', 2, '<p>-</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:59:56', NULL, 1),
(31, 'Kanna 9', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 10:01:20', '2016-03-16 09:33:34', 7),
(32, 'Kanna 10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 10:01:31', '2016-03-16 09:34:17', 7),
(33, 'New Cell 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 3, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 10:01:48', '2016-03-16 09:34:38', 7),
(34, 'New Cell 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500', 3, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'product', 'posting', '2016-02-25 10:02:08', '2016-03-16 09:34:52', 7),
(35, 'Map Distribution', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500', 1, '<p><img alt="" src="http://pchohelpdesk/goc_website/assets/map.jpg" style="width:100%" /></p>\r\n', '', '', 'regular', 'posting', '2016-03-26 08:29:43', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_page_category`
--

CREATE TABLE IF NOT EXISTS `gocweb_page_category` (
`page_category_id` int(11) NOT NULL,
  `page_category_name` varchar(30) DEFAULT NULL,
  `page_category_description` text,
  `page_category_update` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_page_category`
--

INSERT INTO `gocweb_page_category` (`page_category_id`, `page_category_name`, `page_category_description`, `page_category_update`) VALUES
(1, 'General', '-', '2016-02-19 09:22:43'),
(2, 'Kanna', '-', '2016-02-19 09:23:03'),
(3, 'New Cell', '-', '2016-02-19 09:23:18'),
(4, 'Amara', '-', '2016-02-19 09:23:26'),
(5, 'Clean Face', '-', '2016-04-13 11:54:19');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_setting`
--

INSERT INTO `gocweb_setting` (`setting_id`, `setting_title`, `setting_tag_line`, `setting_desc`, `setting_logo`, `setting_thumb_logo`, `setting_vision`, `setting_mission`, `setting_moto`, `setting_date_update`) VALUES
(1, 'PT Gloria Origita Cosmetics', 'Natural Ingredient - Modern Technology', 'Since its first establishment in 1993, PT. Gloria Origita Cosmetics has grown to be a prominent player in skin care and decorative cosmetics industry in South East Asia region, supplying good quality of products to all parts of the country. We have over dedicated 800 staffs in our factories and offices. PURBASARI, KANNA, NEW CELL, SOFT WHITE are some of our brands that distributed throughout Indonesia and some other countries.', 'goc.jpg', 'uploads/logo/thumb/goc.jpg', 'Did you have any questions? Feel free to ask and we will try to do our best.', 'Did you have any questions? Feel free to ask and we will try to do our best.', 'Did you have any questions? Feel free to ask and we will try to do our best.', '2016-03-13 07:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_tag`
--

CREATE TABLE IF NOT EXISTS `gocweb_tag` (
`tag_id` int(11) NOT NULL,
  `tag_name` varchar(30) DEFAULT NULL,
  `tag_description` text,
  `tag_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_user`
--

INSERT INTO `gocweb_user` (`user_id`, `user_first_name`, `user_last_name`, `user_nick`, `user_username`, `user_password`, `user_email`, `user_date_log`) VALUES
(1, 'Evan', 'Abeiza', 'Evan', 'evan_abeiza', 'user1234', 'evan.abeiza@gmail.com', '2016-02-25 13:08:08'),
(7, 'Admin', 'Admin', 'Admin', 'admin', 'admin', 'admin@goc.co.id', '2016-04-14 11:20:33');

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
-- Indexes for table `gocweb_career`
--
ALTER TABLE `gocweb_career`
 ADD PRIMARY KEY (`Career_Id`);

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
-- Indexes for table `gocweb_message`
--
ALTER TABLE `gocweb_message`
 ADD PRIMARY KEY (`message_id`);

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
MODIFY `menu_content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `gocweb_message`
--
ALTER TABLE `gocweb_message`
MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gocweb_page`
--
ALTER TABLE `gocweb_page`
MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `gocweb_page_category`
--
ALTER TABLE `gocweb_page_category`
MODIFY `page_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
