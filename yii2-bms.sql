-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2018 at 08:03 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('operator', '2', 1542599466),
('operator', '4', 1542966929),
('operator', '5', 1542967522),
('operator', '7', 1545897114),
('root', '1', 1542599231),
('root', '3', 1542966939),
('user', '6', 1542967579);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1542966793, 1542966793),
('/booking-status/*', 2, NULL, NULL, NULL, 1542967685, 1542967685),
('/booking/*', 2, NULL, NULL, NULL, 1542966766, 1542966766),
('/booking/create', 2, NULL, NULL, NULL, 1542967170, 1542967170),
('/breaks/*', 2, NULL, NULL, NULL, 1542967703, 1542967703),
('/budget/*', 2, NULL, NULL, NULL, 1542967712, 1542967712),
('/format/*', 2, NULL, NULL, NULL, 1542967656, 1542967656),
('/operator/*', 2, NULL, NULL, NULL, 1542966789, 1542966789),
('/room/*', 2, NULL, NULL, NULL, 1542967644, 1542967644),
('/usefor/*', 2, NULL, NULL, NULL, 1542967669, 1542967669),
('operator', 1, NULL, NULL, NULL, 1542599403, 1542967721),
('root', 1, NULL, NULL, NULL, 1542599220, 1542966912),
('user', 1, NULL, NULL, NULL, 1542967569, 1542967569);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('root', '/*'),
('operator', '/booking-status/*'),
('operator', '/booking/*'),
('user', '/booking/*'),
('operator', '/booking/create'),
('operator', '/breaks/*'),
('operator', '/budget/*'),
('operator', '/format/*'),
('operator', '/operator/*'),
('operator', '/room/*'),
('operator', '/usefor/*');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_no` varchar(45) DEFAULT NULL COMMENT 'เลขที่การจอง',
  `booking_room` int(11) NOT NULL COMMENT 'ห้อง',
  `booking_start` varchar(45) DEFAULT NULL,
  `booking_end` varchar(45) DEFAULT NULL,
  `booking_usefor` int(11) NOT NULL COMMENT 'ลักษณะการใช้งาน',
  `departments_id` int(11) NOT NULL COMMENT 'หน่วยงานที่ขอ',
  `booking_user` varchar(150) NOT NULL COMMENT 'ชื่อผู้จอง',
  `booking_tel` varchar(45) DEFAULT NULL COMMENT 'เบอร์ติดต่อ',
  `booking_title` varchar(255) NOT NULL COMMENT 'หัวข้อ',
  `booking_description` text COMMENT 'รายละเอียด',
  `booking_seate` int(10) DEFAULT NULL COMMENT 'จำนวนผู้เข้าร่วม',
  `booking_breaks` int(11) NOT NULL COMMENT 'รูปแบบการจัดเบรค',
  `booking_format` int(11) NOT NULL COMMENT 'รูปแบบการจัดห้อง',
  `booking_budget` int(11) NOT NULL COMMENT 'ประเภทงบประมาณ',
  `booking_cur_date` varchar(45) NOT NULL COMMENT 'วันที่บันทึก',
  `eqipment_notebook` char(1) DEFAULT NULL COMMENT 'คอมพิวเตอร์ Notebook',
  `eqipment_visualizer` char(1) DEFAULT NULL COMMENT 'เครื่องฉาย Visualizer',
  `eqipment_projector` char(1) DEFAULT NULL COMMENT 'เครื่องฉาย Projecter',
  `eqipment_tv` char(1) DEFAULT NULL COMMENT 'โทรทัศน์สี TV',
  `eqipment_mic1` char(1) DEFAULT NULL COMMENT 'ไมโครโฟนแบบตั้งโต๊ะ',
  `eqipment_mic2` char(1) DEFAULT NULL COMMENT 'ไมโครโฟนแบบไร้สาย',
  `eqipment_sound_record` char(1) DEFAULT NULL COMMENT 'เครื่องบันทึกเสียง',
  `eqipment_vdo_record` char(1) DEFAULT NULL COMMENT 'กล้องบันทึกวีดีโอ',
  `eqipment_photo_record` char(1) DEFAULT NULL COMMENT 'กล้องถ่ายภาพ',
  `file` varchar(150) DEFAULT NULL COMMENT 'ไฟล์เอกสารการจอง',
  `booking_status` int(11) NOT NULL COMMENT 'สถานะการจอง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='การจอง';

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_no`, `booking_room`, `booking_start`, `booking_end`, `booking_usefor`, `departments_id`, `booking_user`, `booking_tel`, `booking_title`, `booking_description`, `booking_seate`, `booking_breaks`, `booking_format`, `booking_budget`, `booking_cur_date`, `eqipment_notebook`, `eqipment_visualizer`, `eqipment_projector`, `eqipment_tv`, `eqipment_mic1`, `eqipment_mic2`, `eqipment_sound_record`, `eqipment_vdo_record`, `eqipment_photo_record`, `file`, `booking_status`) VALUES
(1, 'A00001', 1, '2018-12-27 14:00', '2018-12-27 17:00', 2, 1, 'นายจอง ทดสอบ', '1000', 'ทดสอบ1', 'ทดสอบรายละเอียด', 10, 1, 1, 1, '2018-12-27', 'Y', '0', 'Y', '0', 'Y', '0', '0', '0', '0', 'c1b1e4823f19029ca94859fcd5c2e5b5.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking_status`
--

CREATE TABLE `booking_status` (
  `booking_status_id` int(11) NOT NULL,
  `booking_status_name` varchar(150) NOT NULL COMMENT 'สถานะการจอง',
  `booking_statust_color` varchar(45) DEFAULT NULL COMMENT 'สี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='สถานะการจอง';

--
-- Dumping data for table `booking_status`
--

INSERT INTO `booking_status` (`booking_status_id`, `booking_status_name`, `booking_statust_color`) VALUES
(1, 'จอง', '#ff9900'),
(2, 'เสร็จสิ้น', '#1ebf00'),
(3, 'ยกเลิก', '#ff0000'),
(4, 'ปรับปรุง', '#ff00ff'),
(5, 'ดำเนินการ', '#9900ff'),
(6, 'แจ้งด้วยวาจา', '#f4cccc');

-- --------------------------------------------------------

--
-- Table structure for table `breaks`
--

CREATE TABLE `breaks` (
  `breaks_id` int(11) NOT NULL,
  `breaks_name` varchar(150) NOT NULL COMMENT 'รูปแบบการจัดเบรค',
  `breaks_budget` int(10) DEFAULT '0' COMMENT 'ค่าใช้จ่าย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='รูปแบบการจัดเบรค';

--
-- Dumping data for table `breaks`
--

INSERT INTO `breaks` (`breaks_id`, `breaks_name`, `breaks_budget`) VALUES
(1, 'จัดเครื่องดื่ม(น้ำเปล่า) 1 รอบเบรค', 20),
(2, 'จัดเครื่องดื่ม(น้ำเปล่า) 2 รอบเบรค', 40),
(3, 'จัดเครื่องดื่ม(น้ำเปล่า) 3 รอบเบรค', 60),
(4, 'จัดเครื่องดื่มพร้อมอาหารว่าง 1 รอบเบรค', 200),
(5, 'จัดเครื่องดื่มพร้อมอาหารว่าง 2 รอบเบรค', 400),
(6, 'จัดเครื่องดื่มพร้อมอาหารว่าง 3 รอบเบรค', 600),
(7, 'จัดเครื่องดื่มพร้อมอาหารว่าง 1 รอบเบรค และข้าวมื้อกลางวัน', 1000),
(8, 'จัดเครื่องดื่มพร้อมอาหารว่าง 2 รอบเบรค และข้าวมื้อกลางวัน', 2000),
(9, 'จัดเครื่องดื่มพร้อมอาหารว่าง 3 รอบเบรค และข้าวมื้อกลางวัน', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(11) NOT NULL,
  `budget_name` varchar(45) DEFAULT NULL COMMENT 'ประเภทงบประมาณ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ประเภทงบประมาณ';

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`budget_id`, `budget_name`) VALUES
(1, 'งบบริษัท'),
(2, 'งบผู้จัด'),
(3, 'งบโครงการ'),
(4, 'ไม่ระบุ');

-- --------------------------------------------------------

--
-- Table structure for table `cb_chart`
--

CREATE TABLE `cb_chart` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `chart_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datasource_id` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datasource_type` enum('query','datasource') COLLATE utf8_unicode_ci DEFAULT 'query',
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_type` enum('table','chart') COLLATE utf8_unicode_ci DEFAULT 'chart',
  `result_id` char(36) COLLATE utf8_unicode_ci DEFAULT 'realtime',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `query` text COLLATE utf8_unicode_ci,
  `result` float DEFAULT NULL,
  `target_value` float DEFAULT NULL,
  `condition` text COLLATE utf8_unicode_ci,
  `options` text COLLATE utf8_unicode_ci,
  `xaxis` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xaxis_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `series` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stacked` smallint(1) DEFAULT '0',
  `yaxis_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `params` text COLLATE utf8_unicode_ci,
  `latest_data` text COLLATE utf8_unicode_ci,
  `connection_id` char(36) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cb_chart`
--

INSERT INTO `cb_chart` (`id`, `name`, `detail`, `chart_type`, `datasource_id`, `datasource_type`, `tag_name`, `display_type`, `result_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `query`, `result`, `target_value`, `condition`, `options`, `xaxis`, `xaxis_label`, `series`, `stacked`, `yaxis_label`, `title`, `sub_title`, `params`, `latest_data`, `connection_id`) VALUES
('e1d8d443-8acd-4fe8-81a7-a7958d974539', 'order', '<p>.</p>', 'Line', '', 'query', 'order', 'chart', 'realtime', '2018-11-15 16:37:37', '2018-11-15 17:13:24', 1, 1, 'SELECT * FROM orders;', NULL, NULL, NULL, '', '', '', '', 0, '', '', '', '', NULL, 'efa0e4ec-9763-40be-bc78-f3ced8341f78');

-- --------------------------------------------------------

--
-- Table structure for table `cb_chart_type`
--

CREATE TABLE `cb_chart_type` (
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `widget_classname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cb_chart_type`
--

INSERT INTO `cb_chart_type` (`code`, `name`, `image`, `options`, `widget_classname`, `sort`) VALUES
('Area', 'Area', NULL, NULL, 'miloschuman\\highcharts\\Highcharts', NULL),
('Bar', 'Bar', NULL, NULL, 'miloschuman\\highcharts\\Highcharts', NULL),
('Column', 'Column', NULL, NULL, 'miloschuman\\highcharts\\Highcharts', NULL),
('Line', 'Line', NULL, NULL, 'miloschuman\\highcharts\\Highcharts', NULL),
('Pie', 'Pie', NULL, NULL, 'miloschuman\\highcharts\\Highcharts', NULL),
('Scatter', 'Scatter', NULL, NULL, 'miloschuman\\highcharts\\Highcharts', NULL),
('SolidGauge', 'Solid Gauge', NULL, NULL, 'miloschuman\\highcharts\\Highcharts', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cb_connection`
--

CREATE TABLE `cb_connection` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `connection_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `driver` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `database` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `charset` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cb_connection`
--

INSERT INTO `cb_connection` (`id`, `connection_name`, `host`, `port`, `username`, `password`, `created_at`, `updated_at`, `created_by`, `updated_by`, `driver`, `database`, `charset`) VALUES
('efa0e4ec-9763-40be-bc78-f3ced8341f78', 'yii2-hcjob', 'localhost', '3306', 'root', 'Í\ZðØ,/´HéªÈjª607501491e07c39cae3ba6084441993418a4e9f90b321a2051b44711fb1c34fe­_Lµ\n!ZÚËäë;+ð+aìfQÛÀy²r', '2018-11-15 16:36:08', '2018-11-15 16:36:08', 1, 1, 'mysql', 'yii2-hcjob', 'utf8');

-- --------------------------------------------------------

--
-- Table structure for table `cb_datasource`
--

CREATE TABLE `cb_datasource` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `query` text COLLATE utf8_unicode_ci,
  `connection_id` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `params` text COLLATE utf8_unicode_ci,
  `filter` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departments_id` int(11) NOT NULL,
  `department_name` varchar(45) NOT NULL COMMENT 'หน่วยงาน',
  `color` varchar(45) DEFAULT NULL COMMENT 'สี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departments_id`, `department_name`, `color`) VALUES
(1, 'แผนกที่1', '#ff0000'),
(2, 'แผนกที2', '#6aa84f'),
(3, 'แผนกที่3', '#ffd966'),
(4, 'แผนกที่4', '#ff00ff'),
(5, 'แผนกที่5', '#9900ff'),
(6, 'แผนกที่6', '#0000ff');

-- --------------------------------------------------------

--
-- Table structure for table `format`
--

CREATE TABLE `format` (
  `format_id` int(11) NOT NULL,
  `format_name` varchar(45) NOT NULL COMMENT 'รูปแบบการจัด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='รูปแบบการจัด';

--
-- Dumping data for table `format`
--

INSERT INTO `format` (`format_id`, `format_name`) VALUES
(1, 'แบบ Default (ใช้การจัดแบบเดิม)'),
(2, 'แบบ Boardroom (จัดแบบประชุมคณะกรรมการ)'),
(3, 'แบบ Clusters (จัดแบบกลุ่ม/หมู่คณะ)'),
(4, 'แบบ Classroom (จัดแบบห้องเรียน)'),
(5, 'แบบ Theater (จัดแบบโรงละคร)'),
(6, 'แบบ Circle of chairs (จัดแบบเก้าอี้วงกลม)'),
(7, 'แบบ Empty ห้องโล่ง (ไม่เอาโต๊ะ-เก้าอี้)'),
(8, 'แบบ U shape (จัดแบบตัวU)');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL COMMENT 'username',
  `password` varchar(45) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1542187526),
('m140209_132017_init', 1542187530),
('m140403_174025_create_account_table', 1542187531),
('m140504_113157_update_tables', 1542187535),
('m140504_130429_create_token_table', 1542187537),
('m140506_102106_rbac_init', 1542187708),
('m140602_111327_create_menu_table', 1542187622),
('m140830_171933_fix_ip_field', 1542187537),
('m140830_172703_change_account_table_name', 1542187537),
('m141222_110026_update_ip_field', 1542187538),
('m141222_135246_alter_username_length', 1542187538),
('m150614_103145_update_social_account_table', 1542187540),
('m150623_212711_fix_username_notnull', 1542187541),
('m151218_234654_add_timezone_to_profile', 1542187541),
('m160312_050000_create_user', 1542187622),
('m160929_103127_add_last_login_at_to_user_table', 1542187541),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1542187708),
('m170907_093320_cb_chart_type', 1542274299),
('m170907_093428_cb_connection', 1542274299),
('m170907_093446_cb_datasource', 1542274300),
('m170907_093458_cb_chart', 1542274302),
('m170907_101344_cb_chart_typeDataInsert', 1542274302);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(45) NOT NULL COMMENT 'สกุล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL COMMENT 'ชื่อห้อง',
  `room_size` varchar(20) DEFAULT NULL COMMENT 'ขนาดห้อง',
  `room_seate` varchar(20) DEFAULT NULL COMMENT 'จำนวนที่นั่ง',
  `room_description` text COMMENT 'รายละเอียดห้อง',
  `room_img` varchar(150) DEFAULT NULL COMMENT 'รูปห้อง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ห้องประชุม';

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_size`, `room_seate`, `room_description`, `room_img`) VALUES
(1, 'ห้อง1', '', '10', '', 'bc5943f5843a42cff9753f48fea4e10f.jpg'),
(2, 'ห้อง2', '', '30', '', 'dd8fda0a04d0c0b2564ffb0e2aa93aed.jpg'),
(3, 'ห้อง3', '', '500', '', '5da66b6b0141341e482ccbe4806b0396.jpg'),
(4, 'ศูนย์ฝึกอบรม1', '', '200', '', 'c4f9ecf36884f066027a1d462bf1a887.jpg'),
(6, 'ศูนย์ฝึกอบรม2', '', '200', '', '3a5c76c049983f8fd2c616bba03235b9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(45) NOT NULL COMMENT 'สถานะ',
  `color` varchar(45) DEFAULT NULL COMMENT 'สี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`, `color`) VALUES
(1, 'แจ้งงาน', '#ff0000'),
(2, 'อนุมัติดำเนินการ', '#ff9900'),
(3, 'ปิดงาน', '#00b614'),
(4, 'ยกเลิก', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usefor`
--

CREATE TABLE `usefor` (
  `usefor_id` int(11) NOT NULL,
  `usefor_name` varchar(255) NOT NULL COMMENT 'ลักษณะการใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ลักษณะการใช้งาน';

--
-- Dumping data for table `usefor`
--

INSERT INTO `usefor` (`usefor_id`, `usefor_name`) VALUES
(1, 'ประชุม'),
(2, 'อบรม'),
(3, 'สัมนา'),
(4, 'จัดเลี้ยง'),
(5, 'สาธิตงาน'),
(6, 'อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`, `status`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$12$m8gss53ZYWIHeTdOOIzpheZXfFwLK4Owky1T0mCKTV33PTJ.kVC4i', 'lkpgNaLJcAQTKzMDDJ-3PmBypxw6gQtY', 1542187598, NULL, NULL, NULL, 1542187598, 1542187598, 0, 1545895323, 0),
(6, 'user', 'user@mail.com', '$2y$12$1OhVtNULMW.z7ont7Vcs3.8xx9adR7eK0Mc48A5wB8gmrM1ylEoNq', 'qOoNu4eH7UML4Iy2fHc6V-EVe-v2sKTd', 1542967547, NULL, NULL, '::1', 1542967547, 1545897147, 0, 1542967768, 0),
(7, 'operator', 'operator@mail.com', '$2y$12$EybRnXOSbYstpRHCadcFnOyWH7q3SR6VlPCeXyUSf3BR6i9a7xc0W', '46vCcpY04VF2PUL3KiqvblWTjV68CHIz', 1545897073, NULL, NULL, '::1', 1545897073, 1545897073, 0, 1545897641, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `fk_booking_room1_idx` (`booking_room`),
  ADD KEY `fk_booking_break1_idx` (`booking_breaks`),
  ADD KEY `fk_booking_format1_idx` (`booking_format`),
  ADD KEY `fk_booking_budget1_idx` (`booking_budget`),
  ADD KEY `fk_booking_bookingst1_idx` (`booking_status`),
  ADD KEY `fk_booking_usefor1_idx` (`booking_usefor`),
  ADD KEY `fk_booking_departments1_idx` (`departments_id`);

--
-- Indexes for table `booking_status`
--
ALTER TABLE `booking_status`
  ADD PRIMARY KEY (`booking_status_id`);

--
-- Indexes for table `breaks`
--
ALTER TABLE `breaks`
  ADD PRIMARY KEY (`breaks_id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `cb_chart`
--
ALTER TABLE `cb_chart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag_name` (`tag_name`),
  ADD KEY `chart_type` (`chart_type`);

--
-- Indexes for table `cb_chart_type`
--
ALTER TABLE `cb_chart_type`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `cb_connection`
--
ALTER TABLE `cb_connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cb_datasource`
--
ALTER TABLE `cb_datasource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departments_id`);

--
-- Indexes for table `format`
--
ALTER TABLE `format`
  ADD PRIMARY KEY (`format_id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`,`login_id`),
  ADD KEY `fk_person_login1_idx` (`login_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `usefor`
--
ALTER TABLE `usefor`
  ADD PRIMARY KEY (`usefor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking_status`
--
ALTER TABLE `booking_status`
  MODIFY `booking_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `breaks`
--
ALTER TABLE `breaks`
  MODIFY `breaks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `departments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `format`
--
ALTER TABLE `format`
  MODIFY `format_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usefor`
--
ALTER TABLE `usefor`
  MODIFY `usefor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_bookingst1` FOREIGN KEY (`booking_status`) REFERENCES `booking_status` (`booking_status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_break1` FOREIGN KEY (`booking_breaks`) REFERENCES `breaks` (`breaks_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_budget1` FOREIGN KEY (`booking_budget`) REFERENCES `budget` (`budget_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_departments1` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`departments_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_format1` FOREIGN KEY (`booking_format`) REFERENCES `format` (`format_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_room1` FOREIGN KEY (`booking_room`) REFERENCES `room` (`room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_usefor1` FOREIGN KEY (`booking_usefor`) REFERENCES `usefor` (`usefor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cb_chart`
--
ALTER TABLE `cb_chart`
  ADD CONSTRAINT `fk_cb_chart_chart_type` FOREIGN KEY (`chart_type`) REFERENCES `cb_chart_type` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_person_login1` FOREIGN KEY (`login_id`) REFERENCES `logins` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
