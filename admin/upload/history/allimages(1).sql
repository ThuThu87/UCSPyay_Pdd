-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 01:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `allimages`
--

CREATE TABLE `allimages` (
  `id` int(11) NOT NULL,
  `file_name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pgdName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthName` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_info` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allimages`
--

INSERT INTO `allimages` (`id`, `file_name`, `pgdName`, `fName`, `monthName`, `detail_info`, `uploaded_on`) VALUES
(43, 'upload/festival/ICH (1).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကဆုန်ညောင်ရေသွန်းပွဲ', 'ကဆုန်', '', '2023-11-22 20:47:47'),
(44, 'upload/festival/ICH (3).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကဆုန်ညောင်ရေသွန်းပွဲ', 'ကဆုန်', '', '2023-11-22 20:47:47'),
(45, 'upload/festival/ICH (4).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကဆုန်ညောင်ရေသွန်းပွဲ', 'ကဆုန်', '', '2023-11-22 20:47:47'),
(46, 'upload/festival/ICH (7).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကဆုန်ညောင်ရေသွန်းပွဲ', 'ကဆုန်', '', '2023-11-22 20:47:47'),
(47, 'upload/festival/ICH (8).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကဆုန်ညောင်ရေသွန်းပွဲ', 'ကဆုန်', '', '2023-11-22 20:47:47'),
(48, 'upload/festival/ICH  (1).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(49, 'upload/festival/ICH (4).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(50, 'upload/festival/ICH (5).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(51, 'upload/festival/ICH (6).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(52, 'upload/festival/ICH (7).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(53, 'upload/festival/ICH (8).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(54, 'upload/festival/ICH (9).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(55, 'upload/festival/ICH (10).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ကျင်ကိုင်ပွဲ', 'ကဆုန်', '', '2023-11-22 20:49:34'),
(56, 'upload/festival/ICH  (1).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ပြိုင်လောင်းပွဲ', 'တော်သလင်း', '', '2023-11-22 20:55:55'),
(57, 'upload/festival/ICH  (2).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ပြိုင်လောင်းပွဲ', 'တော်သလင်း', '', '2023-11-22 20:55:55'),
(58, 'upload/festival/ICH  (5).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ပြိုင်လောင်းပွဲ', 'တော်သလင်း', '', '2023-11-22 20:55:55'),
(59, 'upload/festival/ICH  (6).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ပြိုင်လောင်းပွဲ', 'တော်သလင်း', '', '2023-11-22 20:55:55'),
(60, 'upload/festival/ICH  (8).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ပြိုင်လောင်းပွဲ', 'တော်သလင်း', '', '2023-11-22 20:55:55'),
(61, 'upload/festival/ICH  (9).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ပြိုင်လောင်းပွဲ', 'တော်သလင်း', '', '2023-11-22 20:55:55'),
(62, 'upload/festival/ICH  (10).jpg', 'သျှစ်သောင်းပုထိုးတော်ကြီး', 'ပြိုင်လောင်းပွဲ', 'တော်သလင်း', '', '2023-11-22 20:55:55'),
(63, 'upload/festival/၂.jpg', 'အာနန္ဒာဘုရား', 'ညောင်ရေသွန်းပွဲ', 'ကဆုန်', '', '2023-12-05 00:10:34'),
(64, 'upload/festival/၁.jpg', 'အာနန္ဒာဘုရား', 'ညောင်ရေသွန်းပွဲ', 'ကဆုန်', '', '2023-12-05 00:10:34'),
(65, 'upload/festival/IMG_20221214_083344.jpg', 'အာနန္ဒာဘုရား', 'ပဌာန်းဖွင့်ပွဲ', 'တန်ခူး', 'ထထထထထထထထထထထထထထိိိိိိါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါ', '2023-12-05 00:20:22'),
(66, 'upload/festival/IMG_20221214_083359.jpg', 'အာနန္ဒာဘုရား', 'ပဌာန်းဖွင့်ပွဲ', 'တန်ခူး', 'ထထထထထထထထထထထထထထိိိိိိါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါ', '2023-12-05 00:20:22'),
(67, 'upload/festival/IMG_20221214_083407.jpg', 'အာနန္ဒာဘုရား', 'ပဌာန်းဖွင့်ပွဲ', 'တန်ခူး', 'ထထထထထထထထထထထထထထိိိိိိါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါ', '2023-12-05 00:20:22'),
(68, 'upload/festival/IMG_20221214_084034.jpg', 'အာနန္ဒာဘုရား', 'ပဌာန်းဖွင့်ပွဲ', 'တန်ခူး', 'ထထထထထထထထထထထထထထိိိိိိါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါါ', '2023-12-05 00:20:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allimages`
--
ALTER TABLE `allimages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allimages`
--
ALTER TABLE `allimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
