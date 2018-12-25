-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2018 lúc 03:57 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_transhome`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_signature` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `short_description`, `detail_description`, `image_avatar`, `image_signature`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '3F Group chúng tôi là ai ?', '3F Group là công ty chuyên cung cấp các giải pháp về phần mềm trên nền Web và tư vấn thiết kế Website theo yêu cầu. Với mục tiêu giúp đỡ các doanh nghiệp gia tăng doanh số bán hàng cùng với sự chuyên nghiệp hóa và hiện đại hóa. 3F Group đem đến cho bạn? Phần mềm: 3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp, phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', 'frontend/images/person_img1.png', 'frontend/images/chuki.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `birthday`, `phone`, `address`, `status`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mona', 'Stiedemann', '4V8Bp@gmail.com', '2017-06-05', '(322)2022350', '483 Monahan Lodge\nNew Destini, FL 39755-2675', 0, NULL, '1975-03-30 06:29:54', NULL, NULL),
(2, 'Aletha', 'Roberts', '69cEL@gmail.com', '2007-11-16', '(954)1956664', '76830 Batz Summit\nVeumfort, KS 08829-2646', 0, NULL, '2002-01-06 16:22:08', NULL, NULL),
(3, 'Derek', 'Gleason', 'mvxcJ@gmail.com', '2007-10-13', '(699)1315051', '5892 Destinee Manors\nEast Maryam, TX 92279-2149', 0, NULL, '1994-10-30 19:10:18', NULL, NULL),
(4, 'Lonny', 'Thiel', '4Xg16@gmail.com', '2007-06-24', '(845)5064579', '21104 Javier Inlet\nRathchester, WY 04241-2286', 0, NULL, '2001-01-30 20:10:47', NULL, NULL),
(5, 'Jordan', 'Bergnaum', 'Sg4Zw@gmail.com', '2005-06-06', '(888)6073715', '23442 Jefferey Forest Apt. 683\nLednermouth, AK 68596', 0, NULL, '2014-04-13 16:31:04', NULL, NULL),
(6, 'Jaycee', 'Baumbach', 'CNNAV@gmail.com', '2017-05-12', '(400)4299861', '300 Sydnee Island\nKunzechester, RI 82168', 0, NULL, '1992-05-02 17:23:28', NULL, NULL),
(7, 'Bret', 'Herman', 'BapOp@gmail.com', '2011-05-22', '(518)1690407', '4918 Nienow Pines Suite 908\nRempelland, KY 68679', 0, NULL, '1974-03-17 01:51:22', NULL, NULL),
(8, 'Roberto', 'Daugherty', '3DKdO@gmail.com', '2012-02-29', '(399)3604550', '431 April Greens Apt. 925\nHillfurt, OK 37071', 0, NULL, '1994-06-22 14:44:27', NULL, NULL),
(9, 'Jeff', 'Ondricka', 'vLvF1@gmail.com', '2006-08-24', '(517)5040783', '84323 Casandra Turnpike Suite 966\nLake Abelardo, NJ 19803', 0, NULL, '1973-08-31 06:59:36', NULL, NULL),
(10, 'Marisol', 'O\'Kon', '2DO0y@gmail.com', '2009-11-24', '(512)7852216', '87860 Rohan Crest Suite 472\nStantonburgh, ND 41177', 0, NULL, '1982-10-12 15:08:35', NULL, NULL),
(11, 'Golden', 'Rogahn', 'B1q2O@gmail.com', '2016-04-17', '(346)4304231', '258 Vernice Spring\nPort Unique, CO 07642-6589', 0, NULL, '1970-05-13 09:37:25', NULL, NULL),
(12, 'Margaret', 'Schowalter', 'qi0qn@gmail.com', '2005-05-02', '(321)5352669', '37196 Helmer Row\nSouth Bryanahaven, RI 14223-9651', 0, NULL, '2009-05-29 23:33:34', NULL, NULL),
(13, 'Nora', 'Bauch', 'iI1l5@gmail.com', '2016-04-08', '(300)2582561', '524 Dariana Land\nSouth Jacklynbury, AK 26771', 0, NULL, '1977-04-21 02:59:53', NULL, NULL),
(14, 'Humberto', 'Hammes', 'vjVld@gmail.com', '2004-07-12', '(276)3162741', '891 Balistreri Divide Apt. 846\nSouth Sigurdton, VA 16857', 0, NULL, '2009-06-06 23:43:34', NULL, NULL),
(15, 'Conner', 'Emmerich', 'g4zbG@gmail.com', '2017-05-26', '(982)9600395', '4415 Wunsch Manor Apt. 676\nPort Christaton, TN 68787', 0, NULL, '1973-02-07 13:52:46', NULL, NULL),
(16, 'Else', 'Huels', 'THSeH@gmail.com', '2007-10-04', '(958)7264009', '64381 Pfannerstill Station Suite 976\nNorth Waldo, WA 79894-1639', 0, NULL, '2005-03-01 15:03:08', NULL, NULL),
(17, 'Kennedi', 'Beahan', 'Nddcy@gmail.com', '2006-08-31', '(789)8022559', '273 Funk Groves\nHillshire, ID 41517', 0, NULL, '1983-01-08 02:11:52', NULL, NULL),
(18, 'Shannon', 'Gottlieb', 's3K8A@gmail.com', '2005-04-07', '(436)4006664', '247 Buckridge Trafficway\nLake Gaston, CA 91354', 0, NULL, '2008-06-07 07:43:36', NULL, NULL),
(19, 'Elvis', 'Sanford', 'xF57A@gmail.com', '2016-05-25', '(820)6257176', '876 Katlynn Pike\nLake Marlenefurt, WI 06609', 0, NULL, '1974-09-15 21:24:52', NULL, NULL),
(20, 'Pierre', 'DuBuque', 'QtAi4@gmail.com', '2007-02-24', '(652)1580288', '4272 Hardy Islands Apt. 226\nReneehaven, WV 16662-0693', 0, NULL, '1989-11-27 18:09:25', NULL, NULL),
(21, 'Dereck', 'Mosciski', 'XZrCP@gmail.com', '2006-04-05', '(754)8199356', '850 Asia Highway\nBoehmburgh, NC 72453', 0, NULL, '2006-12-18 11:10:02', NULL, NULL),
(22, 'Freeda', 'Rice', 'm2gjP@gmail.com', '2009-04-13', '(203)4402224', '2231 Willa Road Suite 408\nMoenside, IN 08612-6829', 0, NULL, '1984-06-30 02:36:14', NULL, NULL),
(23, 'Antonette', 'McClure', 'Ikb10@gmail.com', '2018-10-12', '(902)3677638', '156 Juston Radial Suite 435\nLeoshire, WV 69375-2314', 0, NULL, '2012-06-26 10:41:32', NULL, NULL),
(24, 'Kari', 'Romaguera', 'whGZJ@gmail.com', '2018-09-11', '(831)7959262', '435 Caleb Station\nLubowitzstad, NC 94462-6547', 0, NULL, '2000-08-25 09:22:29', NULL, NULL),
(25, 'Hiram', 'Kuhic', 'kJMPA@gmail.com', '2008-01-26', '(496)5230596', '929 Gleason Centers\nGwendolynmouth, ND 08276', 0, NULL, '2016-02-24 15:10:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_notes`
--

CREATE TABLE `customer_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_notes`
--

INSERT INTO `customer_notes` (`id`, `content`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 'This is note 1', 1, '2018-12-24 02:54:07', NULL),
(2, 'This is note 2', 2, '2018-12-24 02:54:07', NULL),
(3, 'This is note 3', 3, '2018-12-24 02:54:07', NULL),
(4, 'This is note 4', 4, '2018-12-24 02:54:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_task_to_dos`
--

CREATE TABLE `customer_task_to_dos` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` datetime DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_task_to_dos`
--

INSERT INTO `customer_task_to_dos` (`id`, `customer_id`, `title`, `type`, `deadline`, `ranking`, `note`, `created_at`, `updated_at`) VALUES
(1, 8, 'Library Technician', 'Hatter went on.', '1983-06-28 12:39:39', 0, 'I\'d hardly finished the guinea-pigs!\'.', '2011-01-20 09:49:59', NULL),
(2, 19, 'Cashier', 'I wish I hadn\'t to.', '2005-02-15 17:37:54', 0, 'It quite makes my forehead ache!\'.', '2013-08-17 17:39:43', NULL),
(3, 23, 'Semiconductor Processor', 'Alice, quite.', '2012-01-12 20:06:39', 1, 'I have to go after that savage Queen.', '1999-06-01 01:19:07', NULL),
(4, 23, 'Logging Tractor Operator', 'Involved in this.', '1970-10-03 21:23:01', 0, 'WHAT? The other side of the thing Mock.', '2008-06-18 20:57:21', NULL),
(5, 21, 'Aircraft Mechanics OR Aircraft Service Technician', 'Rabbit angrily.', '2006-02-15 18:14:49', 0, 'YOUR temper!\' \'Hold your tongue!\' said.', '1984-02-23 23:44:00', NULL),
(6, 11, 'Refinery Operator', 'I can creep under.', '1990-08-23 03:39:18', 0, 'Gryphon. \'Of course,\' the Gryphon.', '1997-07-13 20:25:33', NULL),
(7, 12, 'Proofreaders and Copy Marker', 'What would become.', '1981-05-17 13:33:39', 0, 'The pepper when he pleases!\' CHORUS.', '2004-12-08 01:37:18', NULL),
(8, 18, 'Procurement Clerk', 'ARE OLD, FATHER.', '2012-01-28 02:37:53', 0, 'I wonder?\' As she said to one of them.', '2002-04-14 20:46:43', NULL),
(9, 21, 'Infantry', 'ARE you talking.', '2006-01-25 12:13:45', 0, 'Pigeon had finished. \'As if it had a.', '1985-05-12 04:31:18', NULL),
(10, 10, 'Biological Science Teacher', 'Alice said very.', '2000-11-28 16:40:31', 0, 'I learn music.\' \'Ah! that accounts for.', '1994-08-23 20:06:14', NULL),
(11, 5, 'Manager of Air Crew', 'The Antipathies, I.', '2008-02-28 09:17:09', 0, 'RABBIT\' engraved upon it. She.', '1992-10-29 13:43:02', NULL),
(12, 21, 'Scanner Operator', 'Alice in a.', '2002-02-06 19:56:17', 0, 'Why, there\'s hardly enough of me left.', '2008-12-18 00:46:50', NULL),
(13, 3, 'Electrician', 'CHAPTER VI. Pig.', '1983-10-05 04:42:55', 1, 'White Rabbit with pink eyes ran close.', '1987-08-03 13:31:11', NULL),
(14, 16, 'Semiconductor Processor', 'Gryphon. \'--you.', '1995-09-28 01:12:43', 1, 'The Cat seemed to think about stopping.', '2007-05-29 17:01:40', NULL),
(15, 12, 'Industrial Machinery Mechanic', 'When the.', '2004-04-22 18:22:37', 0, 'CAN I have dropped them, I wonder?\'.', '1992-08-29 08:00:20', NULL),
(16, 22, 'Protective Service Worker', 'But, now that I\'m.', '1989-06-08 16:27:43', 1, 'Alice; \'I can\'t explain it,\' said.', '1972-04-06 12:19:55', NULL),
(17, 24, 'Agricultural Crop Worker', 'ME\' were.', '1970-11-03 17:27:25', 0, 'Alice started to her ear, and.', '1974-05-13 07:30:17', NULL),
(18, 20, 'Clinical School Psychologist', 'Alice\'s shoulder.', '1978-05-23 18:01:18', 1, 'For this must be really offended. \'We.', '1999-12-26 15:49:24', NULL),
(19, 9, 'Vocational Education Teacher', 'CHAPTER IV. The.', '1982-12-26 14:38:04', 0, 'Duchess; \'and most of \'em do.\' \'I.', '1977-01-18 02:39:15', NULL),
(20, 19, 'Automotive Mechanic', 'Dormouse,\' thought.', '1973-10-06 19:10:18', 1, 'Queen of Hearts, who only bowed and.', '1993-10-08 17:00:06', NULL),
(21, 18, 'Construction Driller', 'MARMALADE\', but to.', '2007-07-28 17:36:24', 0, 'Caterpillar sternly. \'Explain.', '2008-03-27 00:55:44', NULL),
(22, 22, 'Natural Sciences Manager', 'Mouse. \'--I.', '1973-11-20 20:17:18', 0, 'Caterpillar. Here was another long.', '1993-05-29 13:20:15', NULL),
(23, 23, 'Woodworking Machine Setter', 'Alice, \'and if it.', '1988-12-14 00:21:07', 0, 'ALICE\'S RIGHT FOOT, ESQ. HEARTHRUG.', '1979-11-16 15:22:27', NULL),
(24, 17, 'Psychologist', 'Gryphon: and it.', '1989-12-21 14:45:16', 1, 'Gryphon, and all sorts of things, and.', '1989-06-18 18:25:06', NULL),
(25, 17, 'TSA', 'She had already.', '1979-07-13 04:18:51', 0, 'Alice thought to herself, \'the way all.', '1997-04-15 21:22:31', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `header_footers`
--

CREATE TABLE `header_footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `header_footers`
--

INSERT INTO `header_footers` (`id`, `phone`, `email`, `description`, `address`, `created_at`, `updated_at`) VALUES
(1, '(906) 678-6789', 'ledinhduchd97', '3F Group cam kết tư vấn và thiết kế cho khách hàng một sản phẩm chất lượng, chuyên nghiệp, hiện đại và tối ưu nhất.', '14 xóm Đình - Minh Khai\r\n            Bắc Từ Liêm, Hà Nội', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `houses`
--

CREATE TABLE `houses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_bedroom` int(11) NOT NULL,
  `number_bathroom` int(11) NOT NULL,
  `area_gross_floor` double(8,2) NOT NULL,
  `site_area` double(8,2) NOT NULL,
  `price` double(12,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `builded_year` int(11) NOT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brokerage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mls` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `active_status` tinyint(4) NOT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `houses`
--

INSERT INTO `houses` (`id`, `name`, `code`, `user_id`, `address`, `number_bedroom`, `number_bathroom`, `area_gross_floor`, `site_area`, `price`, `description`, `phone`, `area`, `zipcode`, `builded_year`, `note`, `video`, `brokerage`, `mls`, `license`, `agent`, `unit`, `status`, `active_status`, `user_update`, `created_at`, `updated_at`) VALUES
(1, 'Home in LA', 'TH001', 1, 'Ha Noi, Viet Nam', 6, 9, 200.00, 300.00, 100.00, 'Day la mot ngoi nha cua TransHome', '0123456789', 'Arab Saudi', '1111111', 19950105, 'Fixer Upper', 'https://www.youtube.com/watch?v=BhSsopT6h4A', 'Luong', 'Luong', '123asdasasd', 'Luong', 0, 1, 1, NULL, '2018-12-24 02:54:00', NULL),
(2, 'Home in LA', 'TH002', 1, 'Ha Noi, Viet Nam', 6, 9, 200.00, 300.00, 100.00, 'Day la mot ngoi nha cua TransHome', '0123456789', 'Arab Saudi', '1111111', 19950105, 'Fixer Upper', 'https://www.youtube.com/watch?v=BhSsopT6h4A', 'Luong', 'Luong', '123asdasasd', 'Luong', 0, 1, 1, NULL, '2018-12-24 02:54:00', NULL),
(3, 'Home in LA', 'TH003', 1, 'Ha Noi, Viet Nam', 6, 9, 200.00, 300.00, 100.00, 'Day la mot ngoi nha cua TransHome', '0123456789', 'Arab Saudi', '1111111', 19950105, 'Fixer Upper', 'https://www.youtube.com/watch?v=BhSsopT6h4A', 'Luong', 'Luong', '123asdasasd', 'Luong', 0, 1, 1, NULL, '2018-12-24 02:54:01', NULL),
(4, 'Home in LA', 'TH004', 1, 'Ha Noi, Viet Nam', 6, 9, 200.00, 300.00, 100.00, 'Day la mot ngoi nha cua TransHome', '0123456789', 'Arab Saudi', '1111111', 19950105, 'Fixer Upper', 'https://www.youtube.com/watch?v=BhSsopT6h4A', 'Luong', 'Luong', '123asdasasd', 'Luong', 0, 1, 1, NULL, '2018-12-24 02:54:01', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `house_id` int(10) UNSIGNED NOT NULL,
  `level` tinyint(4) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `house_id`, `level`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'frontend/images/bigSlider1.png', '2018-12-24 02:54:01', NULL),
(2, 1, 2, 'frontend/images/video_slider_img1.png', '2018-12-24 02:54:01', NULL),
(3, 1, 3, 'frontend/images/other_apartiment_img.png', '2018-12-24 02:54:01', NULL),
(4, 2, 1, 'frontend/images/bigSlider1.png', '2018-12-24 02:54:01', NULL),
(5, 2, 2, 'frontend/images/video_slider_img1.png', '2018-12-24 02:54:01', NULL),
(6, 2, 3, 'frontend/images/other_apartiment_img.png', '2018-12-24 02:54:01', NULL),
(7, 3, 1, 'frontend/images/bigSlider1.png', '2018-12-24 02:54:01', NULL),
(8, 3, 2, 'frontend/images/video_slider_img1.png', '2018-12-24 02:54:01', NULL),
(9, 3, 3, 'frontend/images/other_apartiment_img.png', '2018-12-24 02:54:01', NULL),
(10, 4, 1, 'frontend/images/bigSlider1.png', '2018-12-24 02:54:01', NULL),
(11, 4, 2, 'frontend/images/video_slider_img1.png', '2018-12-24 02:54:02', NULL),
(12, 4, 3, 'frontend/images/other_apartiment_img.png', '2018-12-24 02:54:02', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(432, '2014_10_12_000000_create_users_table', 1),
(433, '2014_10_12_100000_create_password_resets_table', 1),
(434, '2018_10_05_032416_create_houses_table', 1),
(435, '2018_10_05_032445_create_images_table', 1),
(436, '2018_10_05_032454_create_page_indices_table', 1),
(437, '2018_10_05_032504_create_page_details_table', 1),
(438, '2018_10_05_074230_create_header_footers_table', 1),
(439, '2018_10_05_103440_create_customers_table', 1),
(440, '2018_10_12_022841_create_page_freecashes_table', 1),
(441, '2018_10_16_130327_create_partners_table', 1),
(442, '2018_10_31_022010_create_about_uses_table', 1),
(443, '2018_11_06_084343_create_partner_views_table', 1),
(444, '2018_11_06_125424_create_set_ups_table', 1),
(445, '2018_11_06_220721_create_tasktodos_table', 1),
(446, '2018_11_23_111118_create_partner_notes_table', 1),
(447, '2018_11_24_150024_create_customer_notes_table', 1),
(448, '2018_11_24_224455_create_partner_task_to_dos_table', 1),
(449, '2018_11_25_210731_create_customer_task_to_dos_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page_details`
--

CREATE TABLE `page_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page_freecashes`
--

CREATE TABLE `page_freecashes` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_information_title_h3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_information_title_h4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_item_title_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_item_desc_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_item_title_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_item_desc_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_item_title_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_item_desc_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_table_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_we_table_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal_map_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal_map_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal_thanks_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal_thanks_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal_thanks_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `page_freecashes`
--

INSERT INTO `page_freecashes` (`id`, `form_information_title_h3`, `form_information_title_h4`, `how_we_item_title_1`, `how_we_item_desc_1`, `how_we_item_title_2`, `how_we_item_desc_2`, `how_we_item_title_3`, `how_we_item_desc_3`, `how_we_table_title`, `how_we_table_desc`, `modal_map_title`, `modal_map_desc`, `modal_thanks_title`, `modal_thanks_desc`, `modal_thanks_phone`, `created_at`, `updated_at`) VALUES
(1, 'How we buy Houses For Cash in the Los Angeles Area', 'Three simple steps to getting you cash for your house...', 'Fill out a form or call', 'To get started, fill out the quick form on this website or just call us. We\" ll then take the info and start our research.', 'Get a fair offer FAST', 'We’ll get you a fair offer in as little as 48 hours (or after inspection of the property).', 'Close and get paid!', 'If you like our offer , you pick a closing date that suits you. Thats It! And remember - you never pay frees or commissions.', 'Selling To On Faith Properties LLC vs. Listing With A Local California Agent', 'Phần mềm: 3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp, phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', 'Got it!', 'Enter your info Here !', 'Thanks You!', 'We have received you information. We will get back to you as soon as possible. If you’d like to speak to someone immediately, please call our office at ', '(949) 682-3437', '2018-12-24 02:54:02', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page_indices`
--

CREATE TABLE `page_indices` (
  `id` int(10) UNSIGNED NOT NULL,
  `sell_content_question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_content_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_content_btn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_menu__title_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_menu__des_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_menu__title_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_menu__des_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `page_indices`
--

INSERT INTO `page_indices` (`id`, `sell_content_question`, `sell_content_title`, `sell_content_btn`, `about_us_title`, `about_us_subtitle`, `about_us_des`, `partner_title`, `partner_subtitle`, `partner_des`, `partner_menu__title_1`, `partner_menu__des_1`, `partner_menu__title_2`, `partner_menu__des_2`, `created_at`, `updated_at`) VALUES
(1, 'Need to Sell your House Fast?', 'Get a competitive offer for your house,as-is. No repairs, no fees.', 'Get Your Free Cash Offer Now', 'About Us', '3F Group chúng tôi là ai ?', '3F Group là công ty chuyên cung cấp các giải pháp về phần mềm trên nền Web và tư vấn thiết kế Website theo yêu cầu. Với mục tiêu giúp đỡ các doanh nghiệp gia tăng doanh số bán hàng cùng với sự chuyên nghiệp hóa và hiện đại hóa.\r\n                3F Group đem đến cho bạn?\r\n                Phần mềm: 3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp, phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', 'Partner Of Tranhomes', 'Bạn có muốn tham gia với chúng tôi', '3F Group đem đến cho bạn?\r\n                Phần mềm: 3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp, phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', '3F Group đem đến cho bạn?', '3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', '3F Group đem đến cho bạn?', '3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_recycle` int(11) NOT NULL DEFAULT '1',
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `partners`
--

INSERT INTO `partners` (`id`, `fullname`, `email`, `phone`, `date_of_birth`, `address`, `partner_type`, `status`, `status_recycle`, `user_update`, `created_at`, `updated_at`) VALUES
(1, 'Monique Crona', 'litzy50@gmail.com', '+1 (591) 227-3376', NULL, NULL, NULL, '-', 1, NULL, '1973-01-18 08:31:32', NULL),
(2, 'Yazmin Beer', 'verla.mertz@yahoo.com', '(671) 484-6342', NULL, NULL, NULL, '-', 1, NULL, '2011-09-14 10:13:51', NULL),
(3, 'Asha Ondricka', 'zwill@yahoo.com', '1-815-279-6565', NULL, NULL, NULL, '-', 1, NULL, '1986-10-05 19:34:02', NULL),
(4, 'Mrs. Addison Graham Jr.', 'batz.kianna@batz.com', '(938) 302-1869 x700', NULL, NULL, NULL, '-', 1, NULL, '1970-01-08 05:55:09', NULL),
(5, 'Minnie King MD', 'herman.edwina@boyer.com', '1-993-575-1358', NULL, NULL, NULL, '-', 1, NULL, '1973-07-01 17:36:36', NULL),
(6, 'Boyd VonRueden', 'tryan@yahoo.com', '570.227.6249 x0777', NULL, NULL, NULL, '-', 1, NULL, '1999-07-22 21:10:56', NULL),
(7, 'Hilton Kertzmann', 'abshire.laury@wuckert.com', '(287) 287-5776', NULL, NULL, NULL, '-', 1, NULL, '1979-02-28 00:15:39', NULL),
(8, 'Baby White', 'elias26@kling.com', '786.207.4148 x67107', NULL, NULL, NULL, '-', 1, NULL, '1971-11-08 12:45:19', NULL),
(9, 'Jedediah Bahringer', 'mollie.sporer@gmail.com', '(807) 275-0339', NULL, NULL, NULL, '-', 1, NULL, '1983-08-05 06:35:59', NULL),
(10, 'Lemuel Sporer Sr.', 'xavier21@wunsch.com', '1-221-499-7377 x867', NULL, NULL, NULL, '-', 1, NULL, '2001-05-16 04:47:48', NULL),
(11, 'Dr. Toni Klein I', 'adouglas@hotmail.com', '414.512.5335', NULL, NULL, NULL, '-', 1, NULL, '1994-10-15 06:50:23', NULL),
(12, 'Aubree Nikolaus', 'ogorczany@funk.com', '232.544.6893 x3551', NULL, NULL, NULL, '-', 1, NULL, '1973-04-20 02:08:57', NULL),
(13, 'Ms. Mazie Schowalter I', 'rau.kole@armstrong.org', '+1.995.658.9479', NULL, NULL, NULL, '-', 1, NULL, '2013-04-11 19:46:36', NULL),
(14, 'Hilbert Nienow', 'priscilla89@will.info', '882-428-8054 x6271', NULL, NULL, NULL, '-', 1, NULL, '1979-01-06 12:56:21', NULL),
(15, 'Ena Crona', 'price.ransom@reynolds.com', '316.439.1580', NULL, NULL, NULL, '-', 1, NULL, '1981-01-21 09:07:26', NULL),
(16, 'Dortha Mitchell', 'rhoda.padberg@gmail.com', '(754) 986-4443 x2713', NULL, NULL, NULL, '-', 1, NULL, '2003-10-26 21:09:51', NULL),
(17, 'Andre Dicki', 'ikuhn@dooley.com', '(663) 495-4598 x4751', NULL, NULL, NULL, '-', 1, NULL, '1981-06-14 02:50:47', NULL),
(18, 'Carmine Sauer I', 'abdul.pfeffer@wyman.com', '1-549-270-7569', NULL, NULL, NULL, '-', 1, NULL, '1987-06-05 12:56:54', NULL),
(19, 'Madyson Quigley', 'piper.damore@stanton.biz', '941.242.1902 x86761', NULL, NULL, NULL, '-', 1, NULL, '2007-02-08 04:42:03', NULL),
(20, 'Nikko Parker', 'avolkman@cummings.info', '825-502-9962', NULL, NULL, NULL, '-', 1, NULL, '1988-10-31 12:06:37', NULL),
(21, 'Mr. Reid Jerde', 'ibogan@yahoo.com', '485-533-1529 x72110', NULL, NULL, NULL, '-', 1, NULL, '1992-06-29 18:34:23', NULL),
(22, 'Dr. Allan Haag', 'santos53@hotmail.com', '+19855093936', NULL, NULL, NULL, '-', 1, NULL, '1973-07-27 02:17:14', NULL),
(23, 'Mr. Harry Mayert DVM', 'swift.nathaniel@walter.com', '758.336.9309 x22779', NULL, NULL, NULL, '-', 1, NULL, '1983-03-23 21:31:31', NULL),
(24, 'Mr. Orrin Donnelly DVM', 'bobby.prosacco@yahoo.com', '915-808-9103', NULL, NULL, NULL, '-', 1, NULL, '1999-12-20 09:08:02', NULL),
(25, 'Dr. Hailie Zboncak Jr.', 'hilbert97@yahoo.com', '1-719-314-6965 x83609', NULL, NULL, NULL, '-', 1, NULL, '1979-12-11 02:31:36', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partner_notes`
--

CREATE TABLE `partner_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `partner_notes`
--

INSERT INTO `partner_notes` (`id`, `content`, `partner_id`, `created_at`, `updated_at`) VALUES
(1, 'This is note 1', 1, '2018-12-24 02:54:07', NULL),
(2, 'This is note 2', 2, '2018-12-24 02:54:07', NULL),
(3, 'This is note 3', 3, '2018-12-24 02:54:07', NULL),
(4, 'This is note 4', 4, '2018-12-24 02:54:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partner_task_to_dos`
--

CREATE TABLE `partner_task_to_dos` (
  `id` int(10) UNSIGNED NOT NULL,
  `partner_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `update` int(11) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `invest` double DEFAULT NULL,
  `contract` double DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `partner_task_to_dos`
--

INSERT INTO `partner_task_to_dos` (`id`, `partner_id`, `title`, `age`, `update`, `type`, `deadline`, `status`, `invest`, `contract`, `ranking`, `created_at`, `updated_at`) VALUES
(1, 5, 'Electrician', 25, 8, 'And in she went.', '2016-05-02 07:05:32', 1, 1000000, 2000000, 1, '2007-09-10 08:20:10', NULL),
(2, 7, 'Rough Carpenter', 29, 11, 'The Duchess took.', '1998-09-15 07:26:45', 0, 1000000, 2000000, 0, '1993-11-14 01:38:21', NULL),
(3, 8, 'Vending Machine Servicer', 24, 10, 'Mystery,\' the Mock.', '2010-11-03 19:27:19', 1, 1000000, 2000000, 1, '1989-03-03 06:19:27', NULL),
(4, 12, 'Physical Therapist Assistant', 18, 3, 'SOMETHING.', '1973-05-02 15:25:59', 0, 1000000, 2000000, 0, '1984-07-29 12:54:08', NULL),
(5, 19, 'Gaming Surveillance Officer', 27, 5, 'BEST butter,\' the.', '1999-01-11 09:59:00', 0, 1000000, 2000000, 0, '2014-12-12 03:45:00', NULL),
(6, 13, 'Social Sciences Teacher', 27, 8, 'The King and the.', '2013-10-18 11:45:23', 1, 1000000, 2000000, 1, '1974-09-27 03:52:17', NULL),
(7, 20, 'Teacher Assistant', 17, 10, 'Dinah, and saying.', '1995-10-01 00:37:58', 0, 1000000, 2000000, 0, '1984-12-14 12:34:11', NULL),
(8, 4, 'Battery Repairer', 16, 15, 'Alice. \'Stand up.', '1980-09-18 07:02:27', 0, 1000000, 2000000, 0, '1989-07-08 11:56:50', NULL),
(9, 17, 'Welder and Cutter', 30, 8, 'Forty-two. ALL.', '2009-02-22 05:08:40', 0, 1000000, 2000000, 0, '2014-07-28 10:21:54', NULL),
(10, 14, 'Punching Machine Setters', 18, 3, 'Alice said with.', '2002-03-13 10:26:24', 1, 1000000, 2000000, 0, '1995-02-25 11:54:19', NULL),
(11, 14, 'Forensic Science Technician', 21, 9, 'I\'ll set Dinah at.', '1998-10-06 21:16:43', 0, 1000000, 2000000, 0, '2015-09-11 18:40:58', NULL),
(12, 23, 'Nursing Aide', 28, 3, 'YOU manage?\' Alice.', '1981-05-12 14:10:18', 0, 1000000, 2000000, 0, '1978-10-07 08:17:41', NULL),
(13, 12, 'Veterinarian', 25, 11, 'It doesn\'t look.', '2003-06-29 05:06:44', 1, 1000000, 2000000, 0, '2014-02-16 10:08:04', NULL),
(14, 3, 'Statistical Assistant', 26, 12, 'Alice looked all.', '1971-02-12 11:49:25', 0, 1000000, 2000000, 0, '2002-05-07 20:25:41', NULL),
(15, 11, 'Insurance Investigator', 27, 3, 'Rabbit whispered.', '2004-12-08 10:25:54', 0, 1000000, 2000000, 0, '2002-06-04 22:01:48', NULL),
(16, 15, 'Forest Fire Fighter', 19, 4, 'There was.', '2015-03-02 02:23:29', 0, 1000000, 2000000, 1, '1996-07-29 13:16:29', NULL),
(17, 3, 'Infantry', 25, 2, 'Alice desperately.', '2000-02-27 22:52:58', 1, 1000000, 2000000, 1, '1997-09-28 16:23:31', NULL),
(18, 24, 'Interviewer', 20, 5, 'Majesty must.', '1987-04-06 00:51:32', 0, 1000000, 2000000, 1, '1987-01-08 19:20:14', NULL),
(19, 1, 'Team Assembler', 20, 4, 'I\'ve got back to.', '1978-06-27 05:52:19', 1, 1000000, 2000000, 1, '1994-09-23 17:42:23', NULL),
(20, 11, 'Assembler', 18, 3, 'I am in the trial.', '1984-12-20 12:01:22', 0, 1000000, 2000000, 0, '1971-06-22 03:07:56', NULL),
(21, 9, 'Drycleaning Machine Operator', 17, 4, 'And she tried to.', '2012-04-30 02:01:14', 1, 1000000, 2000000, 1, '2005-09-02 09:48:09', NULL),
(22, 20, 'Urban Planner', 20, 11, 'Dormouse,\' the.', '1991-04-20 23:05:20', 1, 1000000, 2000000, 0, '1975-10-11 13:08:49', NULL),
(23, 17, 'Optometrist', 21, 14, 'He got behind him.', '1995-05-04 21:33:18', 0, 1000000, 2000000, 0, '2010-11-25 13:36:28', NULL),
(24, 16, 'Medical Secretary', 24, 12, 'Sir, With no jury.', '1993-03-25 11:39:56', 0, 1000000, 2000000, 0, '1981-10-06 03:30:16', NULL),
(25, 18, 'Continuous Mining Machine Operator', 23, 15, 'I should think you.', '1988-01-31 08:44:21', 0, 1000000, 2000000, 1, '1989-06-26 03:53:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partner_views`
--

CREATE TABLE `partner_views` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `partner_views`
--

INSERT INTO `partner_views` (`id`, `title`, `short_desc`, `detail_desc`, `image_avatar`, `created_at`, `updated_at`) VALUES
(1, 'Partner Of Tranhomes', 'Bạn có muốn tham gia với chúng tôi ? ', '3F Group đem đến cho bạn? Phần mềm: 3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp, phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', 'frontend/images/person_img2.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `set_ups`
--

CREATE TABLE `set_ups` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `logo_header` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_footer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thank_you` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_my_home` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `set_ups`
--

INSERT INTO `set_ups` (`id`, `website_name`, `description`, `logo_header`, `logo_footer`, `thank_you`, `sell_my_home`, `phone`, `email`, `lisence`, `address`, `facebook`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'transhome.com', 'Alice, very loudly and decidedly, and the March.', 'https://via.placeholder.com/150', 'https://via.placeholder.com/150', 'We have received you information. We will get back to you as soon as possible. If you’d like to speak to someone immediately, please call our office at (949) 682-3437.', 'Phần mềm: 3F Group chuyên cung cấp các giải pháp về Phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp, phần mềm trên nền Web với sự tiện dụng và chuyên nghiệp', '+1277571156126', 'logan.rath@hotmail.com', 'This is my lisence', '6583 Mariah Pass Apt. 646\nLake Kathlynbury, OR 19025', 'https://www.fb.me/Anonsn0r4', 'https://www.instagram.com/minhnora98', 'https://www.twitter.com/minhnora98', '1981-07-04 15:31:56', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tasktodos`
--

CREATE TABLE `tasktodos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_do_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_task` datetime NOT NULL,
  `duration` datetime DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` datetime NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ranking` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `assigned` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tasktodos`
--

INSERT INTO `tasktodos` (`id`, `title`, `to_do_type`, `start_task`, `duration`, `age`, `deadline`, `note`, `ranking`, `status`, `assigned`, `customer_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cong viec 1', 'Di lam viec quan trong', '2018-12-28 09:54:05', '2018-11-29 14:47:37', '0', '2019-01-09 09:54:05', 'Khách hàng khó tính', 0, 0, 'Tranhomes', 1, '2003-04-09 01:10:21', NULL, NULL),
(2, 'Cong viec 2', 'Di lam viec quan trong', '2018-12-26 09:54:05', '2018-01-06 05:36:44', '0', '2019-01-08 09:54:05', 'Khách hàng khó tính', 0, 0, 'Tranhomes', 2, '1971-09-12 00:45:33', NULL, NULL),
(3, 'Cong viec 3', 'Di lam viec quan trong', '2018-12-31 09:54:05', '2018-01-12 22:45:55', '0', '2019-01-04 09:54:05', 'Khách hàng khó tính', 0, 0, 'Tranhomes', 3, '1978-03-16 18:32:32', NULL, NULL),
(4, 'Cong viec 4', 'Di lam viec quan trong', '2018-12-26 09:54:05', '2018-09-25 00:50:27', '0', '2019-01-18 09:54:05', 'Khách hàng khó tính', 0, 0, 'Tranhomes', 4, '2003-02-25 18:13:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `status_active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `gender`, `phone`, `address`, `position`, `birthday`, `comment`, `email`, `password`, `status`, `status_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Nora', 1, '01667998642', 'Ha Dong, Ha Noi, Viet Nam', 1, '1998/01/30', 'Developer at 3F Group', 'admin@gmail.com', '$2y$10$937/mW2OZrDYbHgaWt8YS.cF1yb6HhZLOF17W1XS8ZuSygIxvPf/.', 1, 1, NULL, '2018-12-24 02:54:00', NULL),
(2, 'member', 'Duc', 0, '01667998642', 'Ha Dong, Ha Noi, Viet Nam', 2, '1998/01/30', 'Developer at 3F Group', 'member@gmail.com', '$2y$10$zgweI8QkW26EAbrCtJfctORNXqitgagV6fc0.i6ZbNhM2igldi8Ua', 0, 1, NULL, '2018-12-24 02:54:00', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `customer_notes`
--
ALTER TABLE `customer_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_notes_customer_id_index` (`customer_id`);

--
-- Chỉ mục cho bảng `customer_task_to_dos`
--
ALTER TABLE `customer_task_to_dos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `header_footers`
--
ALTER TABLE `header_footers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `houses_user_id_index` (`user_id`),
  ADD KEY `houses_user_update_index` (`user_update`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_house_id_index` (`house_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `page_details`
--
ALTER TABLE `page_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `page_freecashes`
--
ALTER TABLE `page_freecashes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `page_indices`
--
ALTER TABLE `page_indices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partners_user_update_index` (`user_update`);

--
-- Chỉ mục cho bảng `partner_notes`
--
ALTER TABLE `partner_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partner_notes_partner_id_index` (`partner_id`);

--
-- Chỉ mục cho bảng `partner_task_to_dos`
--
ALTER TABLE `partner_task_to_dos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `partner_views`
--
ALTER TABLE `partner_views`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `set_ups`
--
ALTER TABLE `set_ups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tasktodos`
--
ALTER TABLE `tasktodos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasktodos_customer_id_index` (`customer_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `customer_notes`
--
ALTER TABLE `customer_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customer_task_to_dos`
--
ALTER TABLE `customer_task_to_dos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `header_footers`
--
ALTER TABLE `header_footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=450;

--
-- AUTO_INCREMENT cho bảng `page_details`
--
ALTER TABLE `page_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `page_freecashes`
--
ALTER TABLE `page_freecashes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `page_indices`
--
ALTER TABLE `page_indices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `partner_notes`
--
ALTER TABLE `partner_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `partner_task_to_dos`
--
ALTER TABLE `partner_task_to_dos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `partner_views`
--
ALTER TABLE `partner_views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `set_ups`
--
ALTER TABLE `set_ups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tasktodos`
--
ALTER TABLE `tasktodos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `customer_notes`
--
ALTER TABLE `customer_notes`
  ADD CONSTRAINT `customer_notes_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `houses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `houses_user_update_foreign` FOREIGN KEY (`user_update`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_house_id_foreign` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_user_update_foreign` FOREIGN KEY (`user_update`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `partner_notes`
--
ALTER TABLE `partner_notes`
  ADD CONSTRAINT `partner_notes_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tasktodos`
--
ALTER TABLE `tasktodos`
  ADD CONSTRAINT `tasktodos_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
