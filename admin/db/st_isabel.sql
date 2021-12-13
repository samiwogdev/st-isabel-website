-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_isabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_banner`
--

CREATE TABLE `admission_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `admission_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_banner`
--

INSERT INTO `admission_banner` (`id`, `title`, `admission_image`) VALUES
(2, 'adm', 'admission_image3c0a871dbf27be34fb240a3f7fa5b0d6_1639408296.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `admission_enrolment`
--

CREATE TABLE `admission_enrolment` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `enrolment` varchar(250) NOT NULL,
  `enrolment_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_enrolment`
--

INSERT INTO `admission_enrolment` (`id`, `title`, `description`, `enrolment`, `enrolment_image`) VALUES
(2, '1Title', '1Description', '1Enrolment', 'enrolment_image62105faf446b75ba933d29c6896c275a_1639410284.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `admission_info_page`
--

CREATE TABLE `admission_info_page` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `result_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_info_page`
--

INSERT INTO `admission_info_page` (`id`, `title`, `result_image`) VALUES
(3, 'ade', 'result_image13bcb8006090d3c84fe1f89c2227e157_1639409089.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `banner_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college_banner`
--

CREATE TABLE `college_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `college_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_banner`
--

INSERT INTO `college_banner` (`id`, `title`, `college_image`) VALUES
(3, 'boy', 'college_image67e57e2ac26b50f34047c034ab583b61_1639406533.png');

-- --------------------------------------------------------

--
-- Table structure for table `college_page_info`
--

CREATE TABLE `college_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_page_info`
--

INSERT INTO `college_page_info` (`id`, `title`, `description`) VALUES
(3, 'Title', 'Description');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `creche_banner`
--

CREATE TABLE `creche_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `creche_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creche_banner`
--

INSERT INTO `creche_banner` (`id`, `title`, `creche_image`) VALUES
(4, 'dad', 'creche_image44306058171a152c1f6de5df7c6b30ca_1639404432.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `creche_page_info`
--

CREATE TABLE `creche_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creche_page_info`
--

INSERT INTO `creche_page_info` (`id`, `title`, `description`) VALUES
(2, 'dada', 'ayo');

-- --------------------------------------------------------

--
-- Table structure for table `creche_page_info_ext`
--

CREATE TABLE `creche_page_info_ext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creche_page_info_ext`
--

INSERT INTO `creche_page_info_ext` (`id`, `title`, `description`) VALUES
(0, 'jj', 'llll');

-- --------------------------------------------------------

--
-- Table structure for table `director_banner`
--

CREATE TABLE `director_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `director_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_banner`
--

INSERT INTO `director_banner` (`id`, `title`, `director_image`) VALUES
(0, 'new', 'director_image53c9a722f5bdb38f364ae1390439a720_1639404139.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `director_page_info`
--

CREATE TABLE `director_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `page_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_page_info`
--

INSERT INTO `director_page_info` (`id`, `title`, `description`, `page_image`) VALUES
(2, 'sam', 'ola', 'page_image83b784a15627a33129c87716a495cb27_1639404161.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `download_data`
--

CREATE TABLE `download_data` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `download_file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `download_data`
--

INSERT INTO `download_data` (`id`, `title`, `description`, `download_file`) VALUES
(5, 'jujj', 'jjj', 'download_file4a80ea07ad6358dbfc069609be312bba_1639111144.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enrolment`
--

CREATE TABLE `enrolment` (
  `id` int(11) NOT NULL,
  `bg_image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `enrol_title` varchar(250) NOT NULL,
  `enrol_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolment`
--

INSERT INTO `enrolment` (`id`, `bg_image`, `title`, `description`, `enrol_title`, `enrol_desc`) VALUES
(3, 'bg_imageb2877340800f3f017df962ab2a2fc4d7_1639374280.jpg', 'Title *', 'Description', 'Enrolment Title', 'Enrolment Description');

-- --------------------------------------------------------

--
-- Table structure for table `facility_banner`
--

CREATE TABLE `facility_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `banner_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_banner`
--

INSERT INTO `facility_banner` (`id`, `title`, `banner_image`) VALUES
(1, 'fg', 'facility_imagebbc699994771ad2bbda38bf1b7c1fe5a_1639203444.png'),
(2, 'fg', 'facility_image0afb94e984ca8ac6a48fc1fff6977dd0_1639203489.png');

-- --------------------------------------------------------

--
-- Table structure for table `facility_data`
--

CREATE TABLE `facility_data` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `facility_image` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_data`
--

INSERT INTO `facility_data` (`id`, `icon`, `facility_image`, `title`, `description`) VALUES
(3, 'Practical', 'facility_image4a5c1ee76c8dc2e0547f06a6407ba64b_1639373114.jpg', 'Practical', 'Science Laboratories'),
(4, 'fa fa-pencil', 'facility_imagea98325c5f73c6228fe32abe2bb478afc_1639035096.jpg', 'Classroom', 'Conducive Classroom'),
(5, 'fa fa-desktop', 'facility_imagefa336178dd4c645b606e102a889d7934_1639035182.jpg', 'ICT', 'Computer Laboratory'),
(6, 'fa fa-book', 'facility_image5888dd6a48fba0cc41270929af9d0de7_1639035778.jpg', 'Reading Room', 'Standard Library'),
(7, 'fa fa-cutlery', 'facility_image86bd93253c5dcb467df67a3d65d6397d_1639035866.jpg', 'Practical', 'School Kitchen'),
(8, 'fa fa-bus', 'facility_imaged572c7f032acc81c97761621ab1b0251_1639038839.jpg', 'Transportation', 'School Bus'),
(9, 'fa fa-building', 'facility_imagef3de0721d8057c0c84bfcf6b8617ae4e_1639039101.jpg', 'Accomodation', 'School Hostel'),
(10, 'fa fa-flash', 'facility_image9d94b23036b9336132d1532cdcacb0f8_1639039176.jpg', 'Power supply', 'School Generator');

-- --------------------------------------------------------

--
-- Table structure for table `facility_definition`
--

CREATE TABLE `facility_definition` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_definition`
--

INSERT INTO `facility_definition` (`id`, `title`) VALUES
(1, 'Library'),
(2, 'hOSTEL'),
(3, 'farm'),
(4, 'title');

-- --------------------------------------------------------

--
-- Table structure for table `facility_info`
--

CREATE TABLE `facility_info` (
  `id` int(11) NOT NULL,
  `facility_def_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_info`
--

INSERT INTO `facility_info` (`id`, `facility_def_id`, `title`, `description`) VALUES
(1, 1, 'new', 'desc');

-- --------------------------------------------------------

--
-- Table structure for table `facility_intro`
--

CREATE TABLE `facility_intro` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_intro`
--

INSERT INTO `facility_intro` (`id`, `title`, `description`) VALUES
(5, 'About Us', 'The school offers wide range of facilities, favourable learning environment for students and finally maintaining a positive classroom climate and culture.');

-- --------------------------------------------------------

--
-- Table structure for table `facility_picture`
--

CREATE TABLE `facility_picture` (
  `id` int(11) NOT NULL,
  `facility_def_id` int(11) NOT NULL,
  `facility_picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_picture`
--

INSERT INTO `facility_picture` (`id`, `facility_def_id`, `facility_picture`) VALUES
(1, 1, 'facility_imaged62b75bcde26f3a16609531aa75c4216_1639213572.png'),
(2, 2, 'facility_image2307f526ad73293e1396ca521ffb4d7a_1639214085.jpg'),
(3, 3, 'facility_image6f9ee23220bd89b39535cf6a4c6896ff_1639214139.png'),
(4, 3, 'facility_image7c72c9cca446216254546af16a1c0337_1639214158.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_banner`
--

CREATE TABLE `gallery_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `gallery_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_data`
--

CREATE TABLE `gallery_data` (
  `id` int(11) NOT NULL,
  `gallery_image` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_data`
--

INSERT INTO `gallery_data` (`id`, `gallery_image`, `description`) VALUES
(5, 'gallery_imageba85ae8311bb6c23f64348b328d02c9a_1639044939.jpeg', 'Nigeria 60th Independence Day Celebration'),
(6, 'gallery_image947d29ab26bb58c8d01da2a1259b6b4e_1639045299.jpg', 'Demo School Cultural Day Celebration'),
(7, 'gallery_imagecf00c988d35afdaf51feb8243a58f756_1639045323.jpg', 'Demo School 2020 Set Valedictory Ceremony');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_def`
--

CREATE TABLE `gallery_def` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_def`
--

INSERT INTO `gallery_def` (`id`, `title`) VALUES
(6, 'Nigeria 59th Independence Day Celebration'),
(7, '2020/2021 Academic Session Scool Prefects');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_picture`
--

CREATE TABLE `gallery_picture` (
  `id` int(11) NOT NULL,
  `gallery_def_id` int(11) NOT NULL,
  `gallery_picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_picture`
--

INSERT INTO `gallery_picture` (`id`, `gallery_def_id`, `gallery_picture`) VALUES
(1, 6, 'gallery_imageb63161493d93fd62736af29d85dc194a_1639219701.jpg'),
(2, 6, 'gallery_imageb8a21270f4de1e708fc62c3ac876f146_1639219819.jpg'),
(3, 6, 'gallery_image60433b903029c90abfe846c6d6ce6236_1639220027.jpg'),
(4, 7, 'gallery_image0c48b90404b22f50723e918b376119cc_1639220061.png');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_banner`
--

CREATE TABLE `hostel_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `hostel_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_feature`
--

CREATE TABLE `hostel_feature` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `feature` varchar(250) NOT NULL,
  `icons` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_info_page`
--

CREATE TABLE `hostel_info_page` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_slider`
--

CREATE TABLE `hostel_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slider_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `junior_infoext`
--

CREATE TABLE `junior_infoext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `junior_infoext`
--

INSERT INTO `junior_infoext` (`id`, `title`, `description`) VALUES
(1, 'oo', 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `junior_subject`
--

CREATE TABLE `junior_subject` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `junior_subject`
--

INSERT INTO `junior_subject` (`id`, `title`) VALUES
(1, 'maths');

-- --------------------------------------------------------

--
-- Table structure for table `laboratories_banner`
--

CREATE TABLE `laboratories_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `laboratories_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laboratories_info_page`
--

CREATE TABLE `laboratories_info_page` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `icons` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laboratories_list`
--

CREATE TABLE `laboratories_list` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `numbers` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laboratories_slider`
--

CREATE TABLE `laboratories_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slider_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lab_info`
--

CREATE TABLE `lab_info` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_info`
--

INSERT INTO `lab_info` (`id`, `icon`, `title`, `description`) VALUES
(1, 'fa fa-flask', 'new', 'To ST Isabel School');

-- --------------------------------------------------------

--
-- Table structure for table `library_banner`
--

CREATE TABLE `library_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `library_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `library_feature`
--

CREATE TABLE `library_feature` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `feature` varchar(250) NOT NULL,
  `icons` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `library_info_page`
--

CREATE TABLE `library_info_page` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `library_slider`
--

CREATE TABLE `library_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slider_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_banner`
--

CREATE TABLE `news_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `news_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_banner`
--

INSERT INTO `news_banner` (`id`, `title`, `news_image`) VALUES
(1, 'yuu', 'news_imageaa5a66851bd00382c0a443805923123b_1639111533.jpg'),
(2, 'jjj', 'news_image8eb110009d5b217c4b96d0c4c30326b2_1639111554.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_data`
--

CREATE TABLE `news_data` (
  `id` int(11) NOT NULL,
  `news_image` varchar(250) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_data`
--

INSERT INTO `news_data` (`id`, `news_image`, `title`, `description`) VALUES
(1, 'news_imagecef1042cd1e38234c98cf98d9957e6d8_1639131373.jpg', 'nnm', 'To ST Isabel School');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `description`) VALUES
(3, 'Oyo State Government declares Friday 31st, August 2018 a Public Holiday for all Schools'),
(4, '2018/2019 Academic Session begins on Monday 17th, September, 2018.'),
(5, '20182018 GCE O\'level classes ongoing at Valencia College');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primarysubject`
--

CREATE TABLE `nursery_primarysubject` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_primarysubject`
--

INSERT INTO `nursery_primarysubject` (`id`, `title`) VALUES
(1, 'bode');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primary_banner`
--

CREATE TABLE `nursery_primary_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `nursery_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_primary_banner`
--

INSERT INTO `nursery_primary_banner` (`id`, `title`, `nursery_image`) VALUES
(6, 'baba', 'nursery_image438509354a558c59dbe58dfbe710c375_1639405959.jpg'),
(7, 'Title', 'nursery_imageb7315eb14037367ce80916681a379838_1639405929.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primary_page_info`
--

CREATE TABLE `nursery_primary_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_primary_page_info`
--

INSERT INTO `nursery_primary_page_info` (`id`, `title`, `description`) VALUES
(4, 'Title', 'Description');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primary_page_infoext`
--

CREATE TABLE `nursery_primary_page_infoext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_primary_page_infoext`
--

INSERT INTO `nursery_primary_page_infoext` (`id`, `title`, `description`) VALUES
(5, 'black', 'boy');

-- --------------------------------------------------------

--
-- Table structure for table `objective_banner`
--

CREATE TABLE `objective_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `objective_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objective_banner`
--

INSERT INTO `objective_banner` (`id`, `title`, `objective_image`) VALUES
(3, 'olas', 'objective_imageea0f59d6fcdea75601f2d2c00eedcf4c_1639404324.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `objective_page_info`
--

CREATE TABLE `objective_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objective_page_info`
--

INSERT INTO `objective_page_info` (`id`, `title`, `description`) VALUES
(1, 'yyuu', 'uuui');

-- --------------------------------------------------------

--
-- Table structure for table `page_definition`
--

CREATE TABLE `page_definition` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_definition`
--

INSERT INTO `page_definition` (`id`, `title`) VALUES
(1, 'Notice Board'),
(2, 'Events &amp; News'),
(3, 'Downloads'),
(4, 'Library'),
(5, 'Library');

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE `page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `page_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school_banner`
--

CREATE TABLE `school_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `banner_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_banner`
--

INSERT INTO `school_banner` (`id`, `title`, `banner_image`) VALUES
(7, 'sam', 'banner_imageeca95f01519d00b05e3501d40ec0b0c0_1639403001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `school_qualities`
--

CREATE TABLE `school_qualities` (
  `id` int(11) NOT NULL,
  `qualities` varchar(250) NOT NULL,
  `icons` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_qualities`
--

INSERT INTO `school_qualities` (`id`, `qualities`, `icons`) VALUES
(2, 'Facilities', 'ri-building-line'),
(3, 'Morals &amp; Discipline', 'ri-user-add-line'),
(4, 'School Curriculum', 'ri-calendar-todo-line'),
(5, 'Sports', 'ri-football-line');

-- --------------------------------------------------------

--
-- Table structure for table `school_song`
--

CREATE TABLE `school_song` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_song`
--

INSERT INTO `school_song` (`id`, `title`, `description`) VALUES
(4, 'School Anthem', 'Demo, the citadel of knowledge\r\nDemo, my school\r\nWe are pattern unto God\'s moral life\r\nFountain of knowledge and character\r\nIn full stature\r\nA total Nigerian Child\r\nDemo Demo\r\nLeads the way..'),
(6, 'School Song', 'Demo , Demo,\r\nWe are the success Model\r\nWe are the Peculiar Students\r\nWe are the Future Leaders\r\nWe are the Future Heroes\r\nIn all areas of Life\r\nWe are the Best');

-- --------------------------------------------------------

--
-- Table structure for table `senior_infoext`
--

CREATE TABLE `senior_infoext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senior_infoext`
--

INSERT INTO `senior_infoext` (`id`, `title`, `description`) VALUES
(0, 'Information', 'desc');

-- --------------------------------------------------------

--
-- Table structure for table `senior_subject`
--

CREATE TABLE `senior_subject` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senior_subject`
--

INSERT INTO `senior_subject` (`id`, `title`) VALUES
(2, 'yoruba');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `slider_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `slider_image`) VALUES
(1, 'Ade', 'wole *', 'slider_image1ae522a7f4dfa3bad518376c6c52d748_1639392159.jpg'),
(2, 'ola', 'To ST Isabel School', 'slider_imagecd536a1882d06000cd0a114320f7b35d_1639392122.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_ext`
--

CREATE TABLE `slider_ext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `bg_color` varchar(50) NOT NULL,
  `header_color` varchar(50) NOT NULL,
  `text_color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_ext`
--

INSERT INTO `slider_ext` (`id`, `title`, `description`, `bg_color`, `header_color`, `text_color`) VALUES
(2, 'Special Education 1', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-light', 'text-dark', 'text-dark'),
(3, 'Certified Teachers', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-fifth', 'txt-white', 'txt-white'),
(4, 'Certification', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-quarternary', 'txt-white', 'txt-white'),
(5, 'Sport Education', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-light', 'text-dark', 'text-dark');

-- --------------------------------------------------------

--
-- Table structure for table `song_banner`
--

CREATE TABLE `song_banner` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song_banner`
--

INSERT INTO `song_banner` (`id`, `banner_image`) VALUES
(2, 'song_bannerae216f05e5e0f56b15e8df8b95205527_1639386995.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are_page_info`
--

CREATE TABLE `who_we_are_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `page_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_banner`
--
ALTER TABLE `admission_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_enrolment`
--
ALTER TABLE `admission_enrolment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_info_page`
--
ALTER TABLE `admission_info_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_banner`
--
ALTER TABLE `college_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_page_info`
--
ALTER TABLE `college_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creche_banner`
--
ALTER TABLE `creche_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creche_page_info`
--
ALTER TABLE `creche_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creche_page_info_ext`
--
ALTER TABLE `creche_page_info_ext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_banner`
--
ALTER TABLE `director_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_page_info`
--
ALTER TABLE `director_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_data`
--
ALTER TABLE `download_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_banner`
--
ALTER TABLE `facility_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_data`
--
ALTER TABLE `facility_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_definition`
--
ALTER TABLE `facility_definition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_info`
--
ALTER TABLE `facility_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_facility_def_id` (`facility_def_id`);

--
-- Indexes for table `facility_intro`
--
ALTER TABLE `facility_intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_picture`
--
ALTER TABLE `facility_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facility_def_id` (`facility_def_id`);

--
-- Indexes for table `gallery_banner`
--
ALTER TABLE `gallery_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_data`
--
ALTER TABLE `gallery_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_def`
--
ALTER TABLE `gallery_def`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_picture`
--
ALTER TABLE `gallery_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_def_id` (`gallery_def_id`);

--
-- Indexes for table `hostel_banner`
--
ALTER TABLE `hostel_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_feature`
--
ALTER TABLE `hostel_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_info_page`
--
ALTER TABLE `hostel_info_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_slider`
--
ALTER TABLE `hostel_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junior_infoext`
--
ALTER TABLE `junior_infoext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junior_subject`
--
ALTER TABLE `junior_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories_banner`
--
ALTER TABLE `laboratories_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories_info_page`
--
ALTER TABLE `laboratories_info_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories_list`
--
ALTER TABLE `laboratories_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories_slider`
--
ALTER TABLE `laboratories_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_info`
--
ALTER TABLE `lab_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_banner`
--
ALTER TABLE `library_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_feature`
--
ALTER TABLE `library_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_info_page`
--
ALTER TABLE `library_info_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_slider`
--
ALTER TABLE `library_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_banner`
--
ALTER TABLE `news_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_data`
--
ALTER TABLE `news_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_primarysubject`
--
ALTER TABLE `nursery_primarysubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_primary_banner`
--
ALTER TABLE `nursery_primary_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_primary_page_info`
--
ALTER TABLE `nursery_primary_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_primary_page_infoext`
--
ALTER TABLE `nursery_primary_page_infoext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objective_banner`
--
ALTER TABLE `objective_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objective_page_info`
--
ALTER TABLE `objective_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_definition`
--
ALTER TABLE `page_definition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_info`
--
ALTER TABLE `page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_banner`
--
ALTER TABLE `school_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_qualities`
--
ALTER TABLE `school_qualities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_song`
--
ALTER TABLE `school_song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senior_infoext`
--
ALTER TABLE `senior_infoext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senior_subject`
--
ALTER TABLE `senior_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_ext`
--
ALTER TABLE `slider_ext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song_banner`
--
ALTER TABLE `song_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who_we_are_page_info`
--
ALTER TABLE `who_we_are_page_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_banner`
--
ALTER TABLE `admission_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission_enrolment`
--
ALTER TABLE `admission_enrolment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission_info_page`
--
ALTER TABLE `admission_info_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `college_banner`
--
ALTER TABLE `college_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `college_page_info`
--
ALTER TABLE `college_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `creche_banner`
--
ALTER TABLE `creche_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `creche_page_info`
--
ALTER TABLE `creche_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `director_page_info`
--
ALTER TABLE `director_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `download_data`
--
ALTER TABLE `download_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrolment`
--
ALTER TABLE `enrolment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facility_banner`
--
ALTER TABLE `facility_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facility_data`
--
ALTER TABLE `facility_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `facility_definition`
--
ALTER TABLE `facility_definition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facility_info`
--
ALTER TABLE `facility_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facility_intro`
--
ALTER TABLE `facility_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facility_picture`
--
ALTER TABLE `facility_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_data`
--
ALTER TABLE `gallery_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery_def`
--
ALTER TABLE `gallery_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery_picture`
--
ALTER TABLE `gallery_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `junior_infoext`
--
ALTER TABLE `junior_infoext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `junior_subject`
--
ALTER TABLE `junior_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lab_info`
--
ALTER TABLE `lab_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `library_info_page`
--
ALTER TABLE `library_info_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_slider`
--
ALTER TABLE `library_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_banner`
--
ALTER TABLE `news_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_data`
--
ALTER TABLE `news_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nursery_primarysubject`
--
ALTER TABLE `nursery_primarysubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nursery_primary_banner`
--
ALTER TABLE `nursery_primary_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nursery_primary_page_info`
--
ALTER TABLE `nursery_primary_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nursery_primary_page_infoext`
--
ALTER TABLE `nursery_primary_page_infoext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `objective_banner`
--
ALTER TABLE `objective_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `objective_page_info`
--
ALTER TABLE `objective_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_definition`
--
ALTER TABLE `page_definition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_banner`
--
ALTER TABLE `school_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school_qualities`
--
ALTER TABLE `school_qualities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_song`
--
ALTER TABLE `school_song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `senior_subject`
--
ALTER TABLE `senior_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_ext`
--
ALTER TABLE `slider_ext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `song_banner`
--
ALTER TABLE `song_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `who_we_are_page_info`
--
ALTER TABLE `who_we_are_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facility_info`
--
ALTER TABLE `facility_info`
  ADD CONSTRAINT `school_facility_def_id` FOREIGN KEY (`facility_def_id`) REFERENCES `facility_definition` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `facility_picture`
--
ALTER TABLE `facility_picture`
  ADD CONSTRAINT `facility_def_id` FOREIGN KEY (`facility_def_id`) REFERENCES `facility_definition` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `gallery_picture`
--
ALTER TABLE `gallery_picture`
  ADD CONSTRAINT `gallery_def_id` FOREIGN KEY (`gallery_def_id`) REFERENCES `gallery_def` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
