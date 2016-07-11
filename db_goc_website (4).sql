-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 04:20 AM
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
('BNR0004', 'New Cell', '-', 'http://192.168.171.49/goc_website/index.php/home/page/single/33', 'NEW_CELL_WEB_BANNER.jpg', '2016-04-14 13:55:14');

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

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_career`
--

CREATE TABLE IF NOT EXISTS `gocweb_career` (
  `Career_Id` varchar(30) NOT NULL DEFAULT '',
  `Career_Title` varchar(30) DEFAULT NULL,
  `Career_Position` varchar(10) NOT NULL,
  `Career_Departmen` varchar(10) DEFAULT NULL,
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

INSERT INTO `gocweb_career` (`Career_Id`, `Career_Title`, `Career_Position`, `Career_Departmen`, `Career_Location`, `Career_Education`, `Career_Work_Experience`, `Career_Job_Desc`, `Career_Requrement`, `Career_Note`, `Career_Qty`, `Career_Post_Create`, `Career_Post_Update`, `Career_Job_Expired`, `Carrer_Status`) VALUES
('JCG0001', 'BRAND EXECUTIVE', '2', 'MRK', 'DKI Jakarta', 'Min. D3', 'min. 2th', '<ul>\r\n	<li>Melakukan promosi melalui terselenggaranya kegiatan acara sehingga tercapai target penjualan dan memelihara asset perusahaan sesuai yang telah ditetapkan</li>\r\n	<li>Membantu penjualan di outlet dan mencapai target yang ditetapkan oleh Perusahaan</li>\r\n	<li>Mampu melakukan prospek produk dan melakukan demo untuk menciptakan diman Brand</li>\r\n	<li>Menguasai komputer minimal Microsoft Office</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Usia maksimal 25 tahun</li>\r\n	<li>Pendidikan minimal SMU sederajat semua jurusan</li>\r\n	<li>Berpenampilan menarik</li>\r\n	<li>Pengalaman sebagai beauty consultant atau beauty class kosmetik minimal 1 tahun</li>\r\n	<li>Mampu mempresentasikan produk</li>\r\n	<li>Tertarik dengan dunia kosmetik</li>\r\n	<li>Memiliki kemampuan komunikasi yang baik</li>\r\n	<li>Mampu menawarkan produk</li>\r\n	<li>Mampu bekerja dalam tim maupun individual</li>\r\n	<li>Mampu bekerja dengan target</li>\r\n	<li>Mampu bekerja dalam tekanan</li>\r\n	<li>Ceria, suka berbicara, aktif dan cekatan</li>\r\n	<li>Dapat segera bergabung</li>\r\n</ul>\r\n', NULL, 'for 2 position', '2016-06-13 06:12:20', '0000-00-00 00:00:00', '2016-06-30', 'posting'),
('JCG0002', 'BRAND EXECUTIVE', '2', 'MRK', 'DKI Jakarta', 'Bachelor Degree', 'min. 2th', '<ul>\r\n	<li>Melakukan promosi melalui terselenggaranya kegiatan acara sehingga tercapai target penjualan dan memelihara asset perusahaan sesuai yang telah ditetapkan</li>\r\n	<li>Membantu penjualan di outlet dan mencapai target yang ditetapkan oleh Perusahaan</li>\r\n	<li>Mampu melakukan prospek produk dan melakukan demo untuk menciptakan diman Brand</li>\r\n	<li>Menguasai komputer minimal Microsoft Office</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Usia maksimal 25 tahun</li>\r\n	<li>Pendidikan minimal SMU sederajat semua jurusan</li>\r\n	<li>Berpenampilan menarik</li>\r\n	<li>Pengalaman sebagai beauty consultant atau beauty class kosmetik minimal 1 tahun</li>\r\n	<li>Mampu mempresentasikan produk</li>\r\n	<li>Tertarik dengan dunia kosmetik</li>\r\n	<li>Memiliki kemampuan komunikasi yang baik</li>\r\n	<li>Mampu menawarkan produk</li>\r\n	<li>Mampu bekerja dalam tim maupun individual</li>\r\n	<li>Mampu bekerja dengan target</li>\r\n	<li>Mampu bekerja dalam tekanan</li>\r\n	<li>Ceria, suka berbicara, aktif dan cekatan</li>\r\n	<li>Dapat segera bergabung</li>\r\n</ul>\r\n', NULL, 'for 1 position', '2016-06-13 06:14:36', '0000-00-00 00:00:00', '2016-06-25', 'posting'),
('JCG0003', 'MOBILE PROGRAMMER', '1', 'IT', 'DKI Jakarta', 'S1 (Teknik Informatika)', 'Min. 1 year', '<ul>\r\n	<li>Researching, designing and writing new software programs.</li>\r\n	<li>Evaluating the software and systems that make computers and hardware work</li>\r\n	<li>Developing existing programs by analyzing and identifying areas for modification</li>\r\n	<li>Integrating existing software products and getting incompatible platforms to work together</li>\r\n	<li>Maintaining systems by monitoring and correcting software defects</li>\r\n	<li>Working closely with other staff, such as project managers, graphic artists, designers, developers, systems analysts, and sales and marketing professionals</li>\r\n	<li>Consulting clients and colleagues concerning the maintenance and performance of software systems and with a view to writing or modifying current operating systems&nbsp;</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Candidate must possess at least a Bachelor&#39;s Degree, Computer Science/Information Technology or equivalent.</li>\r\n	<li>At least 3 year(s) of working experience in the related field is required for this position.</li>\r\n	<li>Familiar with Linux environment system and Oracle Solaris is preferred.</li>\r\n	<li>Understanding of java programming: J2EE and J2ME, Spring Framework, Hibernate, Tomcat&nbsp; and Familiar with RESTFUL JSON connection.</li>\r\n	<li>Familiar with one of the following Android SDK, BB SDK (Blackberry OS and Blackberry 10 C/C++/QT), IOS SDK (XCode).</li>\r\n	<li>Used to works with SDLC method: Agile Scrum</li>\r\n</ul>\r\n', NULL, 'for 1 position', '2016-06-30 04:12:28', '2016-06-30 04:13:01', '2016-06-30', 'posting');

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
-- Table structure for table `gocweb_job_position`
--

CREATE TABLE IF NOT EXISTS `gocweb_job_position` (
`job_position_id` int(11) NOT NULL,
  `job_short_code` varchar(10) DEFAULT NULL,
  `job_position_name` varchar(30) DEFAULT NULL,
  `job_position_department` enum('IT','HR','MRK','PRD','RND','ACC','GEN','QA') DEFAULT NULL,
  `job_position_desc` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_job_position`
--

INSERT INTO `gocweb_job_position` (`job_position_id`, `job_short_code`, `job_position_name`, `job_position_department`, `job_position_desc`) VALUES
(1, 'PRG', 'Programmer', 'IT', 'Membuat, mengembangkan dan melakukan UAT terhadap aplikasi Internal Perusahaan'),
(2, 'BE', 'Brand Executive', 'MRK', '-'),
(3, 'ITS', 'IT Support', 'IT', '-'),
(4, 'ITA', 'System Analys', 'IT', 'Membuat Flow dari diagram aplikasi yang akan digunakan perusahaan'),
(5, 'SPE', 'Support Engineering', 'IT', '-');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_page`
--

INSERT INTO `gocweb_page` (`page_id`, `page_title`, `page_short_desc`, `page_category`, `page_desc`, `page_pict`, `page_pict_thumb`, `page_type`, `page_status`, `page_date_create`, `page_date_update`, `author`) VALUES
(18, 'Our Value', '-', 1, '<p>-</p>\r\n', '', '', 'regular', 'posting', '2016-02-22 15:54:06', '2016-06-10 09:05:40', 7),
(19, 'Vision and Mission', '-', 1, '<p>-</p>\r\n', '', '', 'regular', 'posting', '2016-02-22 15:54:31', '2016-06-10 09:06:13', 7),
(20, 'Our History', '-											', 1, '<p><strong>-</strong></p>\r\n', '', '', 'regular', 'posting', '2016-02-22 15:54:50', '2016-06-10 09:06:34', 7),
(25, 'Amara Nail Polish', 'Kosmetik anak yang telah teregistrasi di Badan POM. Tersedia dalam bentuk : Nail Polish, Spray Cologne & Beauty Kit', 4, '<p><strong>NAIL POLISH</strong><br />\r\nMemiliki kuku cantik bukan hanya impian wanita dewasa, namun juga impian anak-anak.&nbsp;AMARA Nail Polish hadir dengan bahan yang Aman untuk anak.</p>\r\n\r\n<ul>\r\n	<li>Mudah dikelupas tanpa menggunakan aseton</li>\r\n	<li>Tidak menyebabkan kerusakan kuku</li>\r\n	<li>&ldquo;Non Toxic&rdquo; Sehingga sangat aman untuk anak-anak</li>\r\n	<li>Tidak mengandung aseton</li>\r\n	<li>Tidak berbau menyengat &amp; Tidak menggumpal</li>\r\n</ul>\r\n', '', '', 'product', 'posting', '2016-02-25 09:58:27', '2016-06-06 14:18:50', 7),
(26, 'Amara Spray Cologne', 'Sangat Cocok untuk kamu yang ingin tampil percaya diri. Semprotkan kapanpun & dimanapun. \r\n', 4, '<p><strong>SPRAY COLOGNE&nbsp;</strong></p>\r\n\r\n<p style="text-align:justify">Sangat Cocok untuk kamu yang ingin tampil percaya diri.&nbsp;Semprotkan kapanpun &amp; dimanapun.&nbsp;<br />\r\nRasakan sensasi kesegaran spray cologne AMARA dengan formula yang aman, rendah alkohol sehingga aman dari iritasi pada kulit, tidak lengket di kulit , tidak meninggalkan noda pada pakaian anak.&nbsp;<br />\r\n&nbsp;</p>\r\n', '', '', 'product', 'posting', '2016-02-25 09:58:37', '2016-06-06 14:20:55', 7),
(35, 'Map Distribution', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500', 1, '<p><img alt="" src="http://pchohelpdesk/goc_website/assets/map.jpg" style="width:100%" /></p>\r\n', '', '', 'regular', 'posting', '2016-03-26 08:29:43', NULL, 7),
(37, 'KANNA KRIM LEMBUT', 'Efektif untuk kulit kering, kasar, dan pecah - pecah', 2, '<p><span style="font-size:18px"><strong>KANNA KRIM LEMBUT </strong></span>mengandung Lecithin yang berasal dari protein kacang kedelai yang efektif melembutkan dan menghaluskan kulit yang kering, kasar, dan pecah &ndash; pecah pada bagian tumit kaki. Menjadikan kulit terasa halus dan lembut. Tersedia dalam ukuran 15g dan 30g.</p>\r\n\r\n<p><strong>Keunggulan Kanna Krim lembut:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Mudah meresap</p>\r\n	</li>\r\n	<li>\r\n	<p>Tidak lengket/licin jika bersentuhan dengan lantai</p>\r\n	</li>\r\n	<li>\r\n	<p>Tidak menyebabkan pedih pada kulit yang pecah &ndash; pecah</p>\r\n	</li>\r\n	<li>\r\n	<p>Tidak terasa panas</p>\r\n	</li>\r\n	<li>\r\n	<p>Terbuat dari bahan alami yang berkualitas</p>\r\n	</li>\r\n	<li>\r\n	<p>Harga terjangkau</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Ingredients:</strong></p>\r\n\r\n<p>Aqua, Petrolatum, Soya Lecithin, Propylene Glycol, Steareth-2, Steareth-21, Ceteareth-6 Olivate, Cyclopentasiloxane, Parfume, Potassium Hydroxide,&nbsp; Sodium Acrylates Copolymer, Dimethicone Crosspolymer, Methylparaben, Propylparaben, BHT, Hydrogenated Polydecene, Butylparaben, Dimethicone/Vinyl Dimethicone Crosspolymer, Tetrasodium EDTA, ppg-1 trideceth-6, Sorbitan Trioleate, Dimethiconol, Cyclotetrasiloxane, Methylisothiazolinone.</p>\r\n\r\n<p><strong>Cara Pakai:</strong></p>\r\n\r\n<p>Bersihkan kulit dan keringkan. Gosokan Kanna Krim Lembut secara merata sampai meresap.</p>\r\n', 'Kanna_Pack_Shoot.png', 'uploads/page/thumb/Kanna_Pack_Shoot.png', 'product', 'posting', '2016-04-14 14:07:39', '2016-06-13 10:31:57', 9),
(38, 'KANNA WHITE', 'Efektif mencerahkan bagian kulit yang gelap seperti siku dan lutut', 2, '<p><strong><span style="font-size:18px">KANNA WHITE</span> </strong>mengandung protein gandum alami yang efektif mengembalikan kelembaban alami kulit. Diperkaya dengan natural whitening yang dapat membantu mencerahkan kulit bagian siku dan lutut.</p>\r\n\r\n<p><strong>Keunggulan Kanna White</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Mudah meresap</p>\r\n	</li>\r\n	<li>\r\n	<p>Tidak lengket/licin jika bersentuhan dengan lantai</p>\r\n	</li>\r\n	<li>\r\n	<p>Menghaluskan dan mencerahkan kulit bagian siku, lutut, dan tumit kaki</p>\r\n	</li>\r\n	<li>\r\n	<p>Tidak terasa panas</p>\r\n	</li>\r\n	<li>\r\n	<p>Terbuat dari bahan alami yang berkualitas tinggi</p>\r\n	</li>\r\n	<li>\r\n	<p>Aroma pinus mint</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Ingredients</strong></p>\r\n\r\n<p>Aqua, Petrolatum, Propylene Glycol, Caprylic/Capric Triglyceride, Steareth-2, Steareth-21, Ceteareth-6 Olivate, Urea, Simmondsia Chinensis (Jojoba) Seed Oil, Capryly Methicone, Fragrance (parfum) Components and Finished Fragrances, Glycerin, Cyclopentasiloxane, Potassium Hydroxide, Carbomer, Phenoxyethanol, Citric Acid, BHT, Pseudoalteromonas Ferment Extract, Dimethicone Crosspolymer-3, Xanthan Gum, Tetrasodium EDTA, Ethylhexylglycerin, Dimethicone/Vinyl Dimethicone Crosspolymer, Caprylyl Glycol, Sodium Lactate, Dimethiconol, Cyclotetrasiloxane, Methylisothiazolinone, Proline, Alanine, Serine, Sodium Phospate, Triticum Vulgare Bran Extract, Sodium Hydroxide, Sorbitol, Potassium Sorbate, Methylparaben, Butylparaben, Ethylparaben, Propylparaben, Isobutylparaben.</p>\r\n\r\n<p><strong>Cara Pakai</strong></p>\r\n\r\n<p>Bersihkan kulit dan keringkan. Gosokan Kanna White secara merata sampai meresap.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Kanna_White.png', 'uploads/page/thumb/Kanna_White.png', 'product', 'posting', '2016-04-14 14:10:40', '2016-06-13 10:48:29', 9),
(39, 'Amara Beauty Kit', 'Sekarang ini merias wajah atau menggunakan make up sudah dikenal oleh anak-anak sejak usia balita bahkan batita.								', 4, '<p style="text-align: justify;"><strong>BEAUTY KIT</strong></p>\r\n\r\n<p style="text-align: justify;">Sekarang ini merias wajah atau menggunakan make up sudah dikenal oleh anak-anak sejak usia balita bahkan batita. Wajar jika anak mulai gemar merias wajahnya, karena pada usia tersebut mereka berada dalam fase meniru apa yang orang orang dewasa lakukan, semisal bunda nya.&nbsp;<br />\r\nPeran orang tua sangat diperlukan untuk membimbing anak-anak tentang pemakaian dan pemilihan kosmetik yang sesuai, yang memang diformulasikan untuk kulit anak.<br />\r\nAMARA Kids Comestics. Kosmetik yang Aman untuk anak, sudah teruji dan telah teregistrasi di Badan POM<br />\r\n&nbsp;</p>\r\n', '', '', 'product', 'posting', '2016-06-06 14:22:28', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_page_category`
--

CREATE TABLE IF NOT EXISTS `gocweb_page_category` (
`page_category_id` int(11) NOT NULL,
  `page_category_name` varchar(30) DEFAULT NULL,
  `page_category_header` varchar(225) NOT NULL,
  `page_category_description` text,
  `page_category_update` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_page_category`
--

INSERT INTO `gocweb_page_category` (`page_category_id`, `page_category_name`, `page_category_header`, `page_category_description`, `page_category_update`) VALUES
(1, 'General', '', '-', '2016-02-19 09:22:43'),
(2, 'KANNA', 'Spanduk_Kanna_web3.png', 'KANNA\r\nCuaca yang terlalu ekstrim, pemaparan bahan kimia dan pemakaian alas kaki yanng kurang tepat menjadikan kaki perlu perawatan khusus. KANNA menawarkan solusi untuk kaki pecah – pecah dan kering dengan memberikan kelembaban yang dibutuhkan kaki, diproduksi dari bahan alami kedelai (Lecithin).', '2016-06-17 09:03:41'),
(3, 'New Cell', '', '-', '2016-02-19 09:23:18'),
(4, 'Amara', 'thumb_default11.jpg', 'Kids Cosmetic, Kosmetik anak yang telah teregistrasi di Badan POM\r\nTersedia dalam bentuk : Nail Polish, Spray Cologne & Beauty Kit\r\n', '2016-06-06 14:18:26'),
(5, 'Clean Face', 'thumb_default3.jpg', '-', '2016-04-14 13:11:58'),
(7, 'test', 'thumb_default.jpg', 'test', '2016-04-14 12:05:41'),
(8, 'testa', 'thumb_default2.jpg', 'tr', '2016-04-14 12:05:54'),
(9, 'test2', '', '-', '2016-04-14 13:07:34'),
(10, 'Lulur Purbasari', '', 'Lulur Purbasari adalah brand kecantikan yang percaya bahwa keindahan tercipta untuk  seluruh wanita.\r\n\r\nLulur Purbasari memasuki pasar Indonesia dan Asia Tenggara sejak tahun 1993 dan telah menerima berbagai pernghargaan seperti; Top Award Brand pada tahun 2010, No.1 Choice Brand Award based on Indonesian Women Survei dalam 3 tahun berturut-turut yatu pada 2011, 2012 & 2013. \r\n', '2016-06-17 08:50:09');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_post_category`
--

CREATE TABLE IF NOT EXISTS `gocweb_post_category` (
`post_category` int(11) NOT NULL,
  `post_ref_post` int(11) DEFAULT NULL,
  `post_ref_category` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_post_tag`
--

CREATE TABLE IF NOT EXISTS `gocweb_post_tag` (
`post_tag` int(11) NOT NULL,
  `post_ref_post` int(11) DEFAULT NULL,
  `post_ref_tag` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_resume_education`
--

CREATE TABLE IF NOT EXISTS `gocweb_resume_education` (
  `kode_lamaran` varchar(150) DEFAULT NULL,
  `pendidikan_nama_sekolah_sd` varchar(75) DEFAULT NULL,
  `pendidikan_kota_sekolah_sd` varchar(50) DEFAULT NULL,
  `pendidikan_tahun_masuk_sd` int(11) DEFAULT NULL,
  `pendidikan_tahun_keluar_sd` int(11) DEFAULT NULL,
  `pendidikan_jurusan_sd` varchar(50) DEFAULT NULL,
  `pendidikan_nem_ipk_sd` varchar(10) DEFAULT NULL,
  `pendidikan_nama_sekolah_smp` varchar(75) DEFAULT NULL,
  `pendidikan_kota_sekolah_smp` varchar(50) DEFAULT NULL,
  `pendidikan_tahun_masuk_smp` int(11) DEFAULT NULL,
  `pendidikan_tahun_keluar_smp` int(11) DEFAULT NULL,
  `pendidikan_jurusan_smp` varchar(50) DEFAULT NULL,
  `pendidikan_nem_ipk_smp` varchar(10) DEFAULT NULL,
  `pendidikan_nama_sekolah_smu` varchar(75) DEFAULT NULL,
  `pendidikan_kota_sekolah_smu` varchar(50) DEFAULT NULL,
  `pendidikan_tahun_masuk_smu` int(11) DEFAULT NULL,
  `pendidikan_tahun_keluar_smu` int(11) DEFAULT NULL,
  `pendidikan_jurusan_smu` varchar(50) DEFAULT NULL,
  `pendidikan_nem_ipk_smu` varchar(10) DEFAULT NULL,
  `pendidikan_nama_sekolah_univ` varchar(75) DEFAULT NULL,
  `pendidikan_kota_sekolah_univ` varchar(50) DEFAULT NULL,
  `pendidikan_tahun_masuk_univ` int(11) DEFAULT NULL,
  `pendidikan_tahun_keluar_univ` int(11) DEFAULT NULL,
  `pendidikan_jurusan_univ` varchar(50) DEFAULT NULL,
  `pendidikan_nem_ipk_univ` varchar(10) DEFAULT NULL,
  `pendidikan_nama_sekolah_pasca` varchar(75) DEFAULT NULL,
  `pendidikan_kota_sekolah_pasca` varchar(50) DEFAULT NULL,
  `pendidikan_tahun_masuk_pasca` int(11) DEFAULT NULL,
  `pendidikan_tahun_keluar_pasca` int(11) DEFAULT NULL,
  `pendidikan_jurusan_pasca` varchar(50) DEFAULT NULL,
  `pendidikan_nem_ipk_pasca` varchar(10) DEFAULT NULL,
  `pendidikan_ekstra_satu_nama` varchar(75) DEFAULT NULL,
  `pendidikan_ekstra_satu_tahun` int(11) DEFAULT NULL,
  `pendidikan_ekstra_satu_tempat` text,
  `pendidikan_ekstra_satu_sertifikat` enum('1','0') DEFAULT NULL,
  `pendidikan_ekstra_dua_nama` varchar(75) DEFAULT NULL,
  `pendidikan_ekstra_dua_tahun` int(11) DEFAULT NULL,
  `pendidikan_ekstra_dua_tempat` text,
  `pendidikan_ekstra_dua_sertifikat` enum('1','0') DEFAULT NULL,
  `pendidikan_ekstra_tiga_nama` varchar(75) DEFAULT NULL,
  `pendidikan_ekstra_tiga_tahun` int(11) DEFAULT NULL,
  `pendidikan_ekstra_tiga_tempat` text,
  `pendidikan_ekstra_tiga_sertifikat` enum('1','0') DEFAULT NULL,
  `pendidikan_aktivitas_satu_nama` varchar(75) DEFAULT NULL,
  `pendidikan_aktivitas_satu_tahun` int(11) DEFAULT NULL,
  `pendidikan_aktivitas_satu_tempat` text,
  `pendidikan_aktivitas_satu_sertifikat` enum('1','0') DEFAULT NULL,
  `pendidikan_aktivitas_dua_nama` varchar(75) DEFAULT NULL,
  `pendidikan_aktivitas_dua_tahun` int(11) DEFAULT NULL,
  `pendidikan_aktivitas_dua_tempat` text,
  `pendidikan_aktivitas_dua_sertifikat` enum('1','0') DEFAULT NULL,
  `pendidikan_aktivitas_tiga_nama` varchar(75) DEFAULT NULL,
  `pendidikan_aktivitas_tiga_tahun` int(11) DEFAULT NULL,
  `pendidikan_aktivitas_tiga_tempat` text,
  `pendidikan_aktivitas_tiga_sertifikat` enum('1','0') DEFAULT NULL,
  `pendidikan_prestasi_satu_nama` varchar(75) DEFAULT NULL,
  `pendidikan_prestasi_satu_tahun` int(11) DEFAULT NULL,
  `pendidikan_prestasi_dua_nama` varchar(75) DEFAULT NULL,
  `pendidikan_prestasi_dua_tahun` int(11) DEFAULT NULL,
  `pendidikan_prestasi_tiga_nama` varchar(75) DEFAULT NULL,
  `pendidikan_prestasi_tiga_tahun` int(11) DEFAULT NULL,
  `pendidikan_pertanyaan_satu` text,
  `pendidikan_pertanyaan_dua` text,
  `pendidikan_judul_karya` varchar(100) DEFAULT NULL,
  `pendidikan_tahun_karya` int(11) DEFAULT NULL,
  `pendidikan_topik_karya` varchar(100) DEFAULT NULL,
  `pendidikan_bahasa_satu` varchar(30) DEFAULT NULL,
  `pendidikan_bahasa_satu_menulis` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_satu_membaca` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_satu_berbicara` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_dua` varchar(30) DEFAULT NULL,
  `pendidikan_bahasa_dua_menulis` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_dua_membaca` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_dua_berbicara` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_tiga` varchar(30) DEFAULT NULL,
  `pendidikan_bahasa_tiga_menulis` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_tiga_membaca` enum('B','C') DEFAULT NULL,
  `pendidikan_bahasa_tiga_berbicara` enum('B','C') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_resume_education`
--

INSERT INTO `gocweb_resume_education` (`kode_lamaran`, `pendidikan_nama_sekolah_sd`, `pendidikan_kota_sekolah_sd`, `pendidikan_tahun_masuk_sd`, `pendidikan_tahun_keluar_sd`, `pendidikan_jurusan_sd`, `pendidikan_nem_ipk_sd`, `pendidikan_nama_sekolah_smp`, `pendidikan_kota_sekolah_smp`, `pendidikan_tahun_masuk_smp`, `pendidikan_tahun_keluar_smp`, `pendidikan_jurusan_smp`, `pendidikan_nem_ipk_smp`, `pendidikan_nama_sekolah_smu`, `pendidikan_kota_sekolah_smu`, `pendidikan_tahun_masuk_smu`, `pendidikan_tahun_keluar_smu`, `pendidikan_jurusan_smu`, `pendidikan_nem_ipk_smu`, `pendidikan_nama_sekolah_univ`, `pendidikan_kota_sekolah_univ`, `pendidikan_tahun_masuk_univ`, `pendidikan_tahun_keluar_univ`, `pendidikan_jurusan_univ`, `pendidikan_nem_ipk_univ`, `pendidikan_nama_sekolah_pasca`, `pendidikan_kota_sekolah_pasca`, `pendidikan_tahun_masuk_pasca`, `pendidikan_tahun_keluar_pasca`, `pendidikan_jurusan_pasca`, `pendidikan_nem_ipk_pasca`, `pendidikan_ekstra_satu_nama`, `pendidikan_ekstra_satu_tahun`, `pendidikan_ekstra_satu_tempat`, `pendidikan_ekstra_satu_sertifikat`, `pendidikan_ekstra_dua_nama`, `pendidikan_ekstra_dua_tahun`, `pendidikan_ekstra_dua_tempat`, `pendidikan_ekstra_dua_sertifikat`, `pendidikan_ekstra_tiga_nama`, `pendidikan_ekstra_tiga_tahun`, `pendidikan_ekstra_tiga_tempat`, `pendidikan_ekstra_tiga_sertifikat`, `pendidikan_aktivitas_satu_nama`, `pendidikan_aktivitas_satu_tahun`, `pendidikan_aktivitas_satu_tempat`, `pendidikan_aktivitas_satu_sertifikat`, `pendidikan_aktivitas_dua_nama`, `pendidikan_aktivitas_dua_tahun`, `pendidikan_aktivitas_dua_tempat`, `pendidikan_aktivitas_dua_sertifikat`, `pendidikan_aktivitas_tiga_nama`, `pendidikan_aktivitas_tiga_tahun`, `pendidikan_aktivitas_tiga_tempat`, `pendidikan_aktivitas_tiga_sertifikat`, `pendidikan_prestasi_satu_nama`, `pendidikan_prestasi_satu_tahun`, `pendidikan_prestasi_dua_nama`, `pendidikan_prestasi_dua_tahun`, `pendidikan_prestasi_tiga_nama`, `pendidikan_prestasi_tiga_tahun`, `pendidikan_pertanyaan_satu`, `pendidikan_pertanyaan_dua`, `pendidikan_judul_karya`, `pendidikan_tahun_karya`, `pendidikan_topik_karya`, `pendidikan_bahasa_satu`, `pendidikan_bahasa_satu_menulis`, `pendidikan_bahasa_satu_membaca`, `pendidikan_bahasa_satu_berbicara`, `pendidikan_bahasa_dua`, `pendidikan_bahasa_dua_menulis`, `pendidikan_bahasa_dua_membaca`, `pendidikan_bahasa_dua_berbicara`, `pendidikan_bahasa_tiga`, `pendidikan_bahasa_tiga_menulis`, `pendidikan_bahasa_tiga_membaca`, `pendidikan_bahasa_tiga_berbicara`) VALUES
('JCG0001421806_062816', 'SDN 03 Pd. Pinang', 'Jakarta', 1998, 2004, '-', '-', 'SMPN 164 Jakarta', 'Jakarta', 2004, 2007, '-', '-', 'SMKN 18 Jakarta', 'Jakarta', 2007, 2010, 'Akuntansi', '-', 'Univeritas Satya Negara Indonesia', 'Jakarta', 2011, 2015, 'Teknik Informatika', '3.45', '', '', 0, 0, '', '', 'Rohis', 2009, 'Anggota', '0', 'Gemik Studio', 2011, 'Anggota', '0', '', 0, '', '', 'ESQ Training', 2011, 'Peserta Training', '1', '', 0, '', '', '', 0, '', '', '', 0, '', 0, '', 0, 'Diri Sendiri', 'Algoritma Pemrograman', 'Penerapan Algoritma K-Means pada Data Mining untuk Menentukan Produk dan Pelanggan Potensial', 2015, 'Data Mining', 'Inggris', 'B', 'B', 'C', 'Pemrograman PHP', 'B', 'B', 'B', '', '', '', ''),
('JCG0003342404_063016', 'SDN 03 Pondok Pinang', 'Jakarta', 1998, 2004, '-', '-', 'SMPN 164 Kostrad', 'Jakarta', 2004, 2007, '-', '-', 'SMKN 18 Jakarta', 'Jakarta', 2007, 2010, 'Akuntansi', '-', 'Universitas Satya Negara Indonesia', 'Jakarta', 2011, 2015, 'TI', '3.45', '', '', 0, 0, '', '', 'Rohis', 2009, 'Anggota', '0', 'Gemik Studio', 2011, 'Anggota', '0', 'USB Binnary', 2012, 'Anggota', '0', 'ESQ Training', 2011, 'Peserta', '1', '', 0, '', '', '', 0, '', '', '', 0, '', 0, '', 0, 'Saya membiayai pendidikan saya sendiri', 'Pemrograman Web and Mobile', 'Penerapan Algoritma K-Means pada Data Mining untuk Menentukan Pelanggan dan Produk Potensial', 2015, 'Data Mining', 'Inggris', 'C', 'C', 'B', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_resume_experience`
--

CREATE TABLE IF NOT EXISTS `gocweb_resume_experience` (
  `kode_lamaran` varchar(150) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_lama` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_lama` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_lama` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_nama` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_nama` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_nama` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_alamat_telp` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_alamat_telp` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_alamat_telp` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_bidang` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_bidang` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_bidang` varchar(30) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_jabatan` varchar(50) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_jabatan` varchar(50) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_jabatan` varchar(50) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_nama_atasan` varchar(50) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_nama_atasan` varchar(50) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_nama_atasan` varchar(50) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_gapok` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_gapok` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_gapok` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_tunjangan` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_tunjangan` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_tunjangan` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_fasilitas` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_dua_fasilitas` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_tiga_fasilitas` varchar(75) DEFAULT NULL,
  `pekerjaan_perusahaan_satu_tugas` text,
  `pekerjaan_perusahaan_dua_tugas` text,
  `pekerjaan_perusahaan_tiga_tugas` text,
  `pekerjaan_perusahaan_satu_alasan` text,
  `pekerjaan_perusahaan_dua_alasan` text,
  `pekerjaan_perusahaan_tiga_alasan` text,
  `pekerjaan_pertanyaan_satu` enum('1','0') DEFAULT NULL,
  `pekerjaan_perusahaan_lain_nama` varchar(75) DEFAULT NULL,
  `pekerjaan_lain_sebagai` varchar(50) DEFAULT NULL,
  `pekerjaan_lain_kapan` varchar(30) DEFAULT NULL,
  `pekerjaan_referensi_satu_nama` varchar(75) DEFAULT NULL,
  `pekerjaan_referensi_satu_jabatan` varchar(50) DEFAULT NULL,
  `pekerjaan_referensi_satu_alamat` text,
  `pekerjaan_referensi_satu_telp` varchar(30) DEFAULT NULL,
  `pekerjaan_referensi_dua_nama` varchar(75) DEFAULT NULL,
  `pekerjaan_referensi_dua_jabatan` varchar(50) DEFAULT NULL,
  `pekerjaan_referensi_dua_alamat` text,
  `pekerjaan_referensi_dua_telp` varchar(30) DEFAULT NULL,
  `pekerjaan_referensi_tiga_nama` varchar(75) DEFAULT NULL,
  `pekerjaan_referensi_tiga_jabatan` varchar(50) DEFAULT NULL,
  `pekerjaan_referensi_tiga_alamat` text,
  `pekerjaan_referensi_tiga_telp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_resume_experience`
--

INSERT INTO `gocweb_resume_experience` (`kode_lamaran`, `pekerjaan_perusahaan_satu_lama`, `pekerjaan_perusahaan_dua_lama`, `pekerjaan_perusahaan_tiga_lama`, `pekerjaan_perusahaan_satu_nama`, `pekerjaan_perusahaan_dua_nama`, `pekerjaan_perusahaan_tiga_nama`, `pekerjaan_perusahaan_satu_alamat_telp`, `pekerjaan_perusahaan_dua_alamat_telp`, `pekerjaan_perusahaan_tiga_alamat_telp`, `pekerjaan_perusahaan_satu_bidang`, `pekerjaan_perusahaan_dua_bidang`, `pekerjaan_perusahaan_tiga_bidang`, `pekerjaan_perusahaan_satu_jabatan`, `pekerjaan_perusahaan_dua_jabatan`, `pekerjaan_perusahaan_tiga_jabatan`, `pekerjaan_perusahaan_satu_nama_atasan`, `pekerjaan_perusahaan_dua_nama_atasan`, `pekerjaan_perusahaan_tiga_nama_atasan`, `pekerjaan_perusahaan_satu_gapok`, `pekerjaan_perusahaan_dua_gapok`, `pekerjaan_perusahaan_tiga_gapok`, `pekerjaan_perusahaan_satu_tunjangan`, `pekerjaan_perusahaan_dua_tunjangan`, `pekerjaan_perusahaan_tiga_tunjangan`, `pekerjaan_perusahaan_satu_fasilitas`, `pekerjaan_perusahaan_dua_fasilitas`, `pekerjaan_perusahaan_tiga_fasilitas`, `pekerjaan_perusahaan_satu_tugas`, `pekerjaan_perusahaan_dua_tugas`, `pekerjaan_perusahaan_tiga_tugas`, `pekerjaan_perusahaan_satu_alasan`, `pekerjaan_perusahaan_dua_alasan`, `pekerjaan_perusahaan_tiga_alasan`, `pekerjaan_pertanyaan_satu`, `pekerjaan_perusahaan_lain_nama`, `pekerjaan_lain_sebagai`, `pekerjaan_lain_kapan`, `pekerjaan_referensi_satu_nama`, `pekerjaan_referensi_satu_jabatan`, `pekerjaan_referensi_satu_alamat`, `pekerjaan_referensi_satu_telp`, `pekerjaan_referensi_dua_nama`, `pekerjaan_referensi_dua_jabatan`, `pekerjaan_referensi_dua_alamat`, `pekerjaan_referensi_dua_telp`, `pekerjaan_referensi_tiga_nama`, `pekerjaan_referensi_tiga_jabatan`, `pekerjaan_referensi_tiga_alamat`, `pekerjaan_referensi_tiga_telp`) VALUES
('JCG0001421806_062816', '2th', '2bln', '1th', 'CV Prima Tunggal Persada', 'PT. Indodev Niaga Internet', 'PT. Microfin Cipta Perdana', 'Pondok Labu', 'Bintaro Sektor 9', 'Kemang Raya', 'Digital Advertising', 'Software House', 'Agri Bisnis', 'Web Programmer (Freelance)', 'Software Maintenance (Magang)', 'Staf Akuntansi', 'Galih Mahendra', 'Julian Alimin', 'Akh. Gartila Purnama', '2.500.000', '2.000.000', '1.500.000', '-', '-', 'THR, Kesehatan', '-', '-', '-', 'Merancang, mendevelop website dan menerapkan UAT pada aplikasi/website yang telah dibuat', 'Membuat fitur baru untuk aplikasi internal perusahaan.', 'Membuat laporan keuangan dan melakukan kegiatan operasional memposting jurnal dsb', 'Ingin Mendapatkan Pekerjaan Tetap', 'Ingin fokus pada Skripsi', 'Ingin fokus pada bidang IT', '0', '', '', '', 'Abdul Goffar', 'Akunting Senior', 'Pondok Pinang', '-', 'Petrus Siagian', 'Dosen Pemrograman', 'Kemang', '-', 'Istiqomah Sumadikarta', 'Dosen Pemrograman Web', 'Pamulang', '-'),
('JCG0003342404_063016', '2013 - 2015', '2014-2014', '2011-2013', 'CV. Prima Tunggal Persada', 'PT. Indodev Niaga Internet', 'PT. Microfin Cipta Perdana', 'Pondok Labu', 'Bintaro Sektor 9', 'Kemang Raya', 'Digital Advertising', 'Software house', 'Agri Bisnis', 'Web Programmer (Freelance)', 'Karyawan Magang', 'Accounting Staff', 'Galih Mahendra', 'Julian Alimin', 'Arga Bharata', '2.500.000', '2.000.000', '1.500.000', '-', '-', 'THR, Kesehatan', '-', '-', '-', 'Merancang, Membangun dan melakukan UAT terhadap project yang saya tangani', 'Mengembangkan aplikasi internal perusahaan seperti menambah fitur dari tiap aplikasi.', 'Membuat laporan keuangan dan melakukan kegiatan operasional lainnya seperti melakukan penagihan invoice.', 'Saya ingin mendapat perkerjaan tetap', 'Saya ingin fokus skripsi', 'Saya ingin fokus terhadap bidang IT', '1', 'Wincell', 'Programmer', '2 Minggu lalu', 'Istiqomah Sumadikarta', 'Dosen Tetap Usni', 'Pamulang', '-', 'Petrus Siagian', 'Dosen Tetap Usni', 'Kemang', '-', 'Bayu Iman Saputra', 'Partner Kerja', 'Jakarta Barat', '-');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_resume_family`
--

CREATE TABLE IF NOT EXISTS `gocweb_resume_family` (
  `kode_lamaran` varchar(150) DEFAULT NULL,
  `keluarga_rumah` int(11) DEFAULT NULL,
  `keluarga_rumah_desc` varchar(225) NOT NULL,
  `keluarga_anak_ke` int(11) DEFAULT NULL,
  `keluarga_dari_brp` int(11) DEFAULT NULL,
  `keluarga_ayah_nama` varchar(75) DEFAULT NULL,
  `keluarga_ayah_usia` int(11) DEFAULT NULL,
  `keluarga_ayah_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_ayah_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_ibu_nama` varchar(75) DEFAULT NULL,
  `keluarga_ibu_usia` int(11) DEFAULT NULL,
  `keluarga_ibu_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_ibu_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_alamat_ortu` text,
  `keluarga_telp_ortu` varchar(50) DEFAULT NULL,
  `keluarga_saudara_satu_status` enum('K','A') DEFAULT NULL,
  `keluarga_saudara_satu_nama` varchar(75) DEFAULT NULL,
  `keluarga_saudara_satu_usia` int(11) DEFAULT NULL,
  `keluarga_saudara_satu_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_satu_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_dua_status` enum('K','A') DEFAULT NULL,
  `keluarga_saudara_dua_nama` varchar(75) DEFAULT NULL,
  `keluarga_saudara_dua_usia` int(11) DEFAULT NULL,
  `keluarga_saudara_dua_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_dua_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_tiga_status` enum('K','A') DEFAULT NULL,
  `keluarga_saudara_tiga_nama` varchar(75) DEFAULT NULL,
  `keluarga_saudara_tiga_usia` int(11) DEFAULT NULL,
  `keluarga_saudara_tiga_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_tiga_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_empat_status` enum('K','A') DEFAULT NULL,
  `keluarga_saudara_empat_nama` varchar(75) DEFAULT NULL,
  `keluarga_saudara_empat_usia` int(11) DEFAULT NULL,
  `keluarga_saudara_empat_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_empat_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_lima_status` enum('K','A') DEFAULT NULL,
  `keluarga_saudara_lima_nama` varchar(75) DEFAULT NULL,
  `keluarga_saudara_lima_usia` int(11) DEFAULT NULL,
  `keluarga_saudara_lima_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_saudara_lima_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_pasangan_nama` varchar(75) DEFAULT NULL,
  `keluarga_pasangan_usia` int(11) DEFAULT NULL,
  `keluarga_pasangan_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_pasangan_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_anak_satu_nama` varchar(75) DEFAULT NULL,
  `keluarga_anak_satu_usia` int(11) DEFAULT NULL,
  `keluarga_anak_satu_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_anak_satu_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_anak_dua_nama` varchar(75) DEFAULT NULL,
  `keluarga_anak_dua_usia` int(11) DEFAULT NULL,
  `keluarga_anak_dua_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_anak_dua_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_anak_tiga_nama` varchar(75) DEFAULT NULL,
  `keluarga_anak_tiga_usia` int(11) DEFAULT NULL,
  `keluarga_anak_tiga_pendidikan` varchar(30) DEFAULT NULL,
  `keluarga_anak_tiga_pekerjaan` varchar(30) DEFAULT NULL,
  `keluarga_darurat_nama` varchar(75) DEFAULT NULL,
  `keluarga_darurat_hubungan` varchar(30) DEFAULT NULL,
  `keluarga_darurat_alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_resume_family`
--

INSERT INTO `gocweb_resume_family` (`kode_lamaran`, `keluarga_rumah`, `keluarga_rumah_desc`, `keluarga_anak_ke`, `keluarga_dari_brp`, `keluarga_ayah_nama`, `keluarga_ayah_usia`, `keluarga_ayah_pendidikan`, `keluarga_ayah_pekerjaan`, `keluarga_ibu_nama`, `keluarga_ibu_usia`, `keluarga_ibu_pendidikan`, `keluarga_ibu_pekerjaan`, `keluarga_alamat_ortu`, `keluarga_telp_ortu`, `keluarga_saudara_satu_status`, `keluarga_saudara_satu_nama`, `keluarga_saudara_satu_usia`, `keluarga_saudara_satu_pendidikan`, `keluarga_saudara_satu_pekerjaan`, `keluarga_saudara_dua_status`, `keluarga_saudara_dua_nama`, `keluarga_saudara_dua_usia`, `keluarga_saudara_dua_pendidikan`, `keluarga_saudara_dua_pekerjaan`, `keluarga_saudara_tiga_status`, `keluarga_saudara_tiga_nama`, `keluarga_saudara_tiga_usia`, `keluarga_saudara_tiga_pendidikan`, `keluarga_saudara_tiga_pekerjaan`, `keluarga_saudara_empat_status`, `keluarga_saudara_empat_nama`, `keluarga_saudara_empat_usia`, `keluarga_saudara_empat_pendidikan`, `keluarga_saudara_empat_pekerjaan`, `keluarga_saudara_lima_status`, `keluarga_saudara_lima_nama`, `keluarga_saudara_lima_usia`, `keluarga_saudara_lima_pendidikan`, `keluarga_saudara_lima_pekerjaan`, `keluarga_pasangan_nama`, `keluarga_pasangan_usia`, `keluarga_pasangan_pendidikan`, `keluarga_pasangan_pekerjaan`, `keluarga_anak_satu_nama`, `keluarga_anak_satu_usia`, `keluarga_anak_satu_pendidikan`, `keluarga_anak_satu_pekerjaan`, `keluarga_anak_dua_nama`, `keluarga_anak_dua_usia`, `keluarga_anak_dua_pendidikan`, `keluarga_anak_dua_pekerjaan`, `keluarga_anak_tiga_nama`, `keluarga_anak_tiga_usia`, `keluarga_anak_tiga_pendidikan`, `keluarga_anak_tiga_pekerjaan`, `keluarga_darurat_nama`, `keluarga_darurat_hubungan`, `keluarga_darurat_alamat`) VALUES
('JCG0001421806_062816', 1, '', 1, 3, 'Syarkowi(Alm)', 40, 'SMU', 'Sopir', 'Nurtinah', 43, 'S1', 'IRT', 'Jl. Tanah Ara RT.006/012 No. 32 Pondok Pinang', '0217650761', 'A', 'Nadia Nurchaliza', 19, 'SMU', 'SPG H & M', 'A', 'Naila Nurchaliza', 19, 'SMU', 'SPG Eustacia n co.', '', '', 0, '0', '', '', '', 0, '0', '', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', '', 'Yasinta Rina', 'Teman', 'Jl. Cireudeu Ilir , Ciputat'),
('JCG0003342404_063016', 4, 'Rumah Paman', 1, 3, 'Syarkowi', 40, 'SMU', 'Sopir', 'Nurtinah', 40, 'S1', 'Pengacara', 'Jl. Tanah Ara RT.006/012 No. 32 Pondok Pinang', '0217650761', 'A', 'Nadia Nurchaliza', 19, 'SMU', 'SPG', 'A', 'Naila Nurchaliza', 19, 'SMU', 'SPG', '', '', 0, '0', '', '', '', 0, '0', '', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', '', '', 0, '0', '', 'Bayu Dedy I', 'Teman', 'Rempoa');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_resume_header`
--

CREATE TABLE IF NOT EXISTS `gocweb_resume_header` (
  `resume_objectid` varchar(150) NOT NULL DEFAULT '',
  `resume_jabatan` varchar(100) DEFAULT NULL,
  `resume_tgl_isi` datetime DEFAULT NULL,
  `resume_kode_lamaran` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_resume_header`
--

INSERT INTO `gocweb_resume_header` (`resume_objectid`, `resume_jabatan`, `resume_tgl_isi`, `resume_kode_lamaran`) VALUES
('APCR0000001', 'JCG0001', '2016-06-28 06:42:18', 'JCG0001421806_062816'),
('APCR0000002', 'JCG0003', '2016-06-30 04:34:24', 'JCG0003342404_063016');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_resume_other`
--

CREATE TABLE IF NOT EXISTS `gocweb_resume_other` (
  `kode_lamaran` varchar(150) DEFAULT NULL,
  `other_pertanyaan_a` varchar(225) DEFAULT NULL,
  `other_pertanyaan_b` varchar(225) DEFAULT NULL,
  `other_pertanyaan_c` varchar(225) DEFAULT NULL,
  `other_pertanyaan_d` varchar(225) DEFAULT NULL,
  `other_pertanyaan_e` varchar(225) DEFAULT NULL,
  `other_pertanyaan_f` varchar(225) DEFAULT NULL,
  `other_pertanyaan_g` varchar(225) DEFAULT NULL,
  `other_pertanyaan_h` varchar(225) DEFAULT NULL,
  `other_pertanyaan_i` varchar(225) DEFAULT NULL,
  `other_pertanyaan_j` varchar(225) DEFAULT NULL,
  `other_pertanyaan_k` varchar(225) DEFAULT NULL,
  `other_pertanyaan_l` varchar(225) DEFAULT NULL,
  `other_pertanyaan_m` varchar(225) DEFAULT NULL,
  `other_pertanyaan_n` varchar(225) DEFAULT NULL,
  `other_pertanyaan_o` varchar(225) DEFAULT NULL,
  `other_pertanyaan_p` varchar(225) DEFAULT NULL,
  `other_pertanyaan_q` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_resume_other`
--

INSERT INTO `gocweb_resume_other` (`kode_lamaran`, `other_pertanyaan_a`, `other_pertanyaan_b`, `other_pertanyaan_c`, `other_pertanyaan_d`, `other_pertanyaan_e`, `other_pertanyaan_f`, `other_pertanyaan_g`, `other_pertanyaan_h`, `other_pertanyaan_i`, `other_pertanyaan_j`, `other_pertanyaan_k`, `other_pertanyaan_l`, `other_pertanyaan_m`, `other_pertanyaan_n`, `other_pertanyaan_o`, `other_pertanyaan_p`, `other_pertanyaan_q`) VALUES
('JCG0001421806_062816', 'Membaca dan Menciptakan Program', 'Membaca dan Bermain Game', 'Bola dan Automotive', 'Olah Raga dan Teknologi', 'Tidak Pernah', 'Tidak Pernah', 'Tidak Pernah', 'Ya, Min 0.75', 'Tidak', 'Tidak Pernah', 'Lowongan Online Jobstreet', 'Tidak ada', 'Ingin mengasah skill yang saya miliki.', 'Saya Bersedia', 'Tidak, Dikarenakan tidak bisa jauh dari keluarga.', '5.000.000 net', 'Secepatnya'),
('JCG0003342404_063016', 'Membaca', 'Membaca dan Bermain Video Game', 'Bola', 'Olah Raga (Sport) dan Technology', 'Tidak Pernah', 'Tidak Pernah', 'Tidak Pernah', 'Ya, Ukuran Min 0.75', 'Tidak', 'Tidak Pernah', 'Dari iklan jobstreet', 'Tidak Ada', 'Ingin mengasah skill programming', 'Saya Bersedia', 'Tidak', '5.000.000 net', 'Secepatnya');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_resume_personal`
--

CREATE TABLE IF NOT EXISTS `gocweb_resume_personal` (
  `kode_lamaran` varchar(150) NOT NULL DEFAULT '',
  `pribadi_foto` varchar(250) DEFAULT NULL,
  `pribadi_nama_lengkap` varchar(100) DEFAULT NULL,
  `pribadi_nama_panggilan` varchar(50) DEFAULT NULL,
  `pribadi_jk` enum('L','P') DEFAULT NULL,
  `pribadi_alamat` text,
  `pribadi_telp` varchar(50) DEFAULT NULL,
  `pribadi_hp` varchar(50) DEFAULT NULL,
  `pribadi_email` varchar(50) DEFAULT NULL,
  `pribadi_tempat` text,
  `pribadi_tgl_lahir` varchar(50) DEFAULT NULL,
  `pribadi_gol_dar` enum('A','B','AB','O') DEFAULT NULL,
  `pribadi_pendidikan` varchar(30) DEFAULT NULL,
  `pribadi_tgl_lulus` varchar(50) DEFAULT NULL,
  `pribadi_agama` varchar(30) DEFAULT NULL,
  `pribadi_suku` varchar(30) DEFAULT NULL,
  `pribadi_status` enum('Lajang','Menikah','Cerai') DEFAULT NULL,
  `pribadi_warganegara` varchar(20) DEFAULT NULL,
  `pribadi_berat` int(11) DEFAULT NULL,
  `pribadi_tinggi` int(11) DEFAULT NULL,
  `pribadi_type_iden` varchar(50) DEFAULT NULL,
  `pribadi_no_iden` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_resume_personal`
--

INSERT INTO `gocweb_resume_personal` (`kode_lamaran`, `pribadi_foto`, `pribadi_nama_lengkap`, `pribadi_nama_panggilan`, `pribadi_jk`, `pribadi_alamat`, `pribadi_telp`, `pribadi_hp`, `pribadi_email`, `pribadi_tempat`, `pribadi_tgl_lahir`, `pribadi_gol_dar`, `pribadi_pendidikan`, `pribadi_tgl_lulus`, `pribadi_agama`, `pribadi_suku`, `pribadi_status`, `pribadi_warganegara`, `pribadi_berat`, `pribadi_tinggi`, `pribadi_type_iden`, `pribadi_no_iden`) VALUES
('JCG0001421806_062816', 'Arif_Farianto.jpg', 'Evan Abeiza', 'Evan', 'L', 'Jl. Tanah Ara RT.006/012 No. 32 Pondok Pinang', '0217650761', '085778252133', 'evan.abeiza@gmail.com', 'Jakarta', '1992-08-02', 'O', 'S1', '2015-10-15', 'Islam', 'Betawi', 'Lajang', 'WNI', 65, 170, 'ktp', '12345678910'),
('JCG0003342404_063016', 'Choky_Manurung.jpg', 'Evan Abeiza', 'Evan', 'L', 'Jl. Tanah Ara RT.006/012 No.32 Pondok Pinang', '0217650761', '085778252133', 'evan.abeiza@gmail.com', 'Jakarta', '27 Agustus 1992', 'O', 'S1', '15 Oktober 2015', 'Islam', 'Betawi', 'Lajang', 'WNI', 65, 70, 'ktp', '123456');

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
-- Table structure for table `gocweb_test_desc`
--

CREATE TABLE IF NOT EXISTS `gocweb_test_desc` (
`ObjectID` int(11) NOT NULL,
  `kode_lamaran` varchar(150) DEFAULT NULL,
  `statement1` varchar(225) DEFAULT NULL,
  `statement2` varchar(225) DEFAULT NULL,
  `statement3` varchar(225) DEFAULT NULL,
  `statement4` varchar(225) DEFAULT NULL,
  `statement5` varchar(225) DEFAULT NULL,
  `statement6` varchar(225) DEFAULT NULL,
  `statement7` varchar(225) DEFAULT NULL,
  `statement8` varchar(225) DEFAULT NULL,
  `statement9` varchar(225) DEFAULT NULL,
  `statement10` varchar(225) DEFAULT NULL,
  `statement11` varchar(225) DEFAULT NULL,
  `statement12` varchar(225) DEFAULT NULL,
  `statement13` varchar(225) DEFAULT NULL,
  `statement14` varchar(225) DEFAULT NULL,
  `statement15` varchar(225) DEFAULT NULL,
  `statement16` varchar(225) DEFAULT NULL,
  `statement17` varchar(225) DEFAULT NULL,
  `statement18` varchar(225) DEFAULT NULL,
  `statement19` varchar(225) DEFAULT NULL,
  `statement20` varchar(225) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_test_desc`
--

INSERT INTO `gocweb_test_desc` (`ObjectID`, `kode_lamaran`, `statement1`, `statement2`, `statement3`, `statement4`, `statement5`, `statement6`, `statement7`, `statement8`, `statement9`, `statement10`, `statement11`, `statement12`, `statement13`, `statement14`, `statement15`, `statement16`, `statement17`, `statement18`, `statement19`, `statement20`) VALUES
(9, 'JCG0001421806_062816', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya', 'Saya'),
(17, 'JCG0003342404_063016', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras', 'Saya Pekerja Keras');

-- --------------------------------------------------------

--
-- Table structure for table `gocweb_test_disc`
--

CREATE TABLE IF NOT EXISTS `gocweb_test_disc` (
`ObjectID` int(11) NOT NULL,
  `kode_lamaran` varchar(150) DEFAULT NULL,
  `disc_statement1_l` int(11) DEFAULT NULL,
  `disc_statement1_m` int(11) DEFAULT NULL,
  `disc_statement2_l` int(11) DEFAULT NULL,
  `disc_statement2_m` int(11) DEFAULT NULL,
  `disc_statement3_l` int(11) DEFAULT NULL,
  `disc_statement3_m` int(11) DEFAULT NULL,
  `disc_statement4_l` int(11) DEFAULT NULL,
  `disc_statement4_m` int(11) DEFAULT NULL,
  `disc_statement5_l` int(11) DEFAULT NULL,
  `disc_statement5_m` int(11) DEFAULT NULL,
  `disc_statement6_l` int(11) DEFAULT NULL,
  `disc_statement6_m` int(11) DEFAULT NULL,
  `disc_statement7_l` int(11) DEFAULT NULL,
  `disc_statement7_m` int(11) DEFAULT NULL,
  `disc_statement8_l` int(11) DEFAULT NULL,
  `disc_statement8_m` int(11) DEFAULT NULL,
  `disc_statement9_l` int(11) DEFAULT NULL,
  `disc_statement9_m` int(11) DEFAULT NULL,
  `disc_statement10_l` int(11) DEFAULT NULL,
  `disc_statement10_m` int(11) DEFAULT NULL,
  `disc_statement11_l` int(11) DEFAULT NULL,
  `disc_statement11_m` int(11) DEFAULT NULL,
  `disc_statement12_l` int(11) DEFAULT NULL,
  `disc_statement12_m` int(11) DEFAULT NULL,
  `disc_statement13_l` int(11) DEFAULT NULL,
  `disc_statement13_m` int(11) DEFAULT NULL,
  `disc_statement14_l` int(11) DEFAULT NULL,
  `disc_statement14_m` int(11) DEFAULT NULL,
  `disc_statement15_l` int(11) DEFAULT NULL,
  `disc_statement15_m` int(11) DEFAULT NULL,
  `disc_statement16_l` int(11) DEFAULT NULL,
  `disc_statement16_m` int(11) DEFAULT NULL,
  `disc_statement17_l` int(11) DEFAULT NULL,
  `disc_statement17_m` int(11) DEFAULT NULL,
  `disc_statement18_l` int(11) DEFAULT NULL,
  `disc_statement18_m` int(11) DEFAULT NULL,
  `disc_statement19_l` int(11) DEFAULT NULL,
  `disc_statement19_m` int(11) DEFAULT NULL,
  `disc_statement20_l` int(11) DEFAULT NULL,
  `disc_statement20_m` int(11) DEFAULT NULL,
  `disc_statement21_l` int(11) NOT NULL,
  `disc_statement21_m` int(11) NOT NULL,
  `disc_statement22_l` int(11) NOT NULL,
  `disc_statement22_m` int(11) NOT NULL,
  `disc_statement23_l` int(11) NOT NULL,
  `disc_statement23_m` int(11) NOT NULL,
  `disc_statement24_l` int(11) NOT NULL,
  `disc_statement24_m` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_test_disc`
--

INSERT INTO `gocweb_test_disc` (`ObjectID`, `kode_lamaran`, `disc_statement1_l`, `disc_statement1_m`, `disc_statement2_l`, `disc_statement2_m`, `disc_statement3_l`, `disc_statement3_m`, `disc_statement4_l`, `disc_statement4_m`, `disc_statement5_l`, `disc_statement5_m`, `disc_statement6_l`, `disc_statement6_m`, `disc_statement7_l`, `disc_statement7_m`, `disc_statement8_l`, `disc_statement8_m`, `disc_statement9_l`, `disc_statement9_m`, `disc_statement10_l`, `disc_statement10_m`, `disc_statement11_l`, `disc_statement11_m`, `disc_statement12_l`, `disc_statement12_m`, `disc_statement13_l`, `disc_statement13_m`, `disc_statement14_l`, `disc_statement14_m`, `disc_statement15_l`, `disc_statement15_m`, `disc_statement16_l`, `disc_statement16_m`, `disc_statement17_l`, `disc_statement17_m`, `disc_statement18_l`, `disc_statement18_m`, `disc_statement19_l`, `disc_statement19_m`, `disc_statement20_l`, `disc_statement20_m`, `disc_statement21_l`, `disc_statement21_m`, `disc_statement22_l`, `disc_statement22_m`, `disc_statement23_l`, `disc_statement23_m`, `disc_statement24_l`, `disc_statement24_m`) VALUES
(9, 'JCG0001421806_062816', 1, 3, 2, 3, 1, 4, 1, 2, 2, 3, 3, 1, 3, 4, 4, 1, 1, 1, 4, 2, 2, 3, 1, 2, 4, 3, 2, 3, 1, 3, 3, 1, 1, 2, 1, 2, 3, 4, 1, 3, 2, 1, 2, 3, 1, 3, 2, 1),
(18, 'JCG0003342404_063016', 2, 1, 1, 3, 4, 1, 2, 1, 1, 4, 3, 1, 2, 1, 2, 3, 4, 3, 1, 4, 2, 1, 1, 3, 1, 2, 1, 4, 3, 2, 3, 4, 3, 1, 1, 2, 3, 4, 2, 3, 1, 3, 1, 2, 2, 3, 3, 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gocweb_user`
--

INSERT INTO `gocweb_user` (`user_id`, `user_first_name`, `user_last_name`, `user_nick`, `user_username`, `user_password`, `user_email`, `user_date_log`) VALUES
(1, 'Evan', 'Abeiza', 'Evan', 'evan_abeiza', 'user1234', 'evan.abeiza@gmail.com', '2016-02-25 13:08:08'),
(7, 'Admin', 'Admin', 'Admin', 'admin', 'admin', 'admin@goc.co.id', '2016-07-01 08:10:42'),
(8, 'Ria', '', 'Ria', 'admin1', 'admin1', 'pe3@goc.co.id', '2016-04-14 13:51:27'),
(9, 'Wissa', 'Harry Pamudji', 'Wissa', 'wissa_harry', 'initial1', 'pe1@goc.co.id', '2016-06-17 08:52:01'),
(10, 'Mega', 'Rahmah Yulistri', 'Mega', 'mega_rahmah', 'initial2', 'pe5@goc.co.id', '2016-06-17 13:13:16'),
(11, 'Barbie', 'Emmanuelle Gracia', 'Barbie', 'barbie_emmanuelle', 'initial4', 'pe2@goc.co.id', '2016-06-30 13:17:19');

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
-- Indexes for table `gocweb_job_position`
--
ALTER TABLE `gocweb_job_position`
 ADD PRIMARY KEY (`job_position_id`);

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
-- Indexes for table `gocweb_resume_education`
--
ALTER TABLE `gocweb_resume_education`
 ADD UNIQUE KEY `kode_lamaran` (`kode_lamaran`);

--
-- Indexes for table `gocweb_resume_experience`
--
ALTER TABLE `gocweb_resume_experience`
 ADD UNIQUE KEY `kode_lamaran` (`kode_lamaran`);

--
-- Indexes for table `gocweb_resume_family`
--
ALTER TABLE `gocweb_resume_family`
 ADD UNIQUE KEY `kode_lamaran` (`kode_lamaran`);

--
-- Indexes for table `gocweb_resume_header`
--
ALTER TABLE `gocweb_resume_header`
 ADD PRIMARY KEY (`resume_objectid`), ADD UNIQUE KEY `resume_kode_lamaran_3` (`resume_kode_lamaran`), ADD KEY `resume_kode_lamaran` (`resume_kode_lamaran`), ADD KEY `resume_kode_lamaran_2` (`resume_kode_lamaran`);

--
-- Indexes for table `gocweb_resume_other`
--
ALTER TABLE `gocweb_resume_other`
 ADD UNIQUE KEY `kode_lamaran` (`kode_lamaran`);

--
-- Indexes for table `gocweb_resume_personal`
--
ALTER TABLE `gocweb_resume_personal`
 ADD PRIMARY KEY (`kode_lamaran`);

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
-- Indexes for table `gocweb_test_desc`
--
ALTER TABLE `gocweb_test_desc`
 ADD PRIMARY KEY (`ObjectID`);

--
-- Indexes for table `gocweb_test_disc`
--
ALTER TABLE `gocweb_test_disc`
 ADD PRIMARY KEY (`ObjectID`);

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
-- AUTO_INCREMENT for table `gocweb_job_position`
--
ALTER TABLE `gocweb_job_position`
MODIFY `job_position_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gocweb_menu_content`
--
ALTER TABLE `gocweb_menu_content`
MODIFY `menu_content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `gocweb_message`
--
ALTER TABLE `gocweb_message`
MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gocweb_page`
--
ALTER TABLE `gocweb_page`
MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `gocweb_page_category`
--
ALTER TABLE `gocweb_page_category`
MODIFY `page_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gocweb_post`
--
ALTER TABLE `gocweb_post`
MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gocweb_post_category`
--
ALTER TABLE `gocweb_post_category`
MODIFY `post_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gocweb_post_tag`
--
ALTER TABLE `gocweb_post_tag`
MODIFY `post_tag` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
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
-- AUTO_INCREMENT for table `gocweb_test_desc`
--
ALTER TABLE `gocweb_test_desc`
MODIFY `ObjectID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `gocweb_test_disc`
--
ALTER TABLE `gocweb_test_disc`
MODIFY `ObjectID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `gocweb_user`
--
ALTER TABLE `gocweb_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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

--
-- Constraints for table `gocweb_resume_education`
--
ALTER TABLE `gocweb_resume_education`
ADD CONSTRAINT `gocweb_resume_education_ibfk_1` FOREIGN KEY (`kode_lamaran`) REFERENCES `gocweb_resume_header` (`resume_kode_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_resume_experience`
--
ALTER TABLE `gocweb_resume_experience`
ADD CONSTRAINT `gocweb_resume_experience_ibfk_1` FOREIGN KEY (`kode_lamaran`) REFERENCES `gocweb_resume_header` (`resume_kode_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_resume_family`
--
ALTER TABLE `gocweb_resume_family`
ADD CONSTRAINT `gocweb_resume_family_ibfk_1` FOREIGN KEY (`kode_lamaran`) REFERENCES `gocweb_resume_header` (`resume_kode_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_resume_other`
--
ALTER TABLE `gocweb_resume_other`
ADD CONSTRAINT `gocweb_resume_other_ibfk_1` FOREIGN KEY (`kode_lamaran`) REFERENCES `gocweb_resume_header` (`resume_kode_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gocweb_resume_personal`
--
ALTER TABLE `gocweb_resume_personal`
ADD CONSTRAINT `gocweb_resume_personal_ibfk_1` FOREIGN KEY (`kode_lamaran`) REFERENCES `gocweb_resume_header` (`resume_kode_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
