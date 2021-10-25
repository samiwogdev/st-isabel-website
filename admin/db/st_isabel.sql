-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 02:53 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `admission_info_page`
--

CREATE TABLE `admission_info_page` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `result_image` varchar(250) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `college_page_info`
--

CREATE TABLE `college_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
    `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_banner`
--

CREATE TABLE `contact_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `contact_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `creche_page_info`
--

CREATE TABLE `creche_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `creche_page_info_ext`
--

CREATE TABLE `creche_page_info_ext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `director_banner`
--

CREATE TABLE `director_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `director_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `director_page_info`
--

CREATE TABLE `director_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `page_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Dumping data for table `director_page_info`
--

INSERT INTO `director_page_info` (`id`, `title`, `description`, `page_image`) VALUES
(1, 'Directors Message', 'Demo College is an integral part of the community both educationally and socially. The school looks bright and welcoming. We have a better learning environment for students. The school offers wide range of favourable learning environments for students. We have a well equipped science laboratory, library, hostel accommodation, transport facilities, a well equipped ICT centre, wide playing ground for sports and recreational activities, drinkable water supply, constant power supply, school farm and others.  The school is multicultural and co-educational for both male and female students. Our main concern is not all about the educational needs of the students alone, which is of paramount importance to us. We are also deeply concern about the moral and character formation of the students. One of our vision is to help our students discover their potentials, develop and maximize them.', 'director.jpg');
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
(1, 'bg_image8a447782ed869f64434b7364174fa5ce_1634241712.jpg', 'ola', 'To ST Isabel School', 'samuelk', 'tolu');

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
   `description` text DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `junior_subject`
--

CREATE TABLE `junior_subject` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
    `description` text DEFAULT NULL
    `icons` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laboratories_list`
--

CREATE TABLE `laboratories_list` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primarysubject`
--

CREATE TABLE `nursery_primarysubject` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primary_banner`
--

CREATE TABLE `nursery_primary_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `nursery_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primary_page_info`
--

CCREATE TABLE `nursery_primary_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
   `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_primary_page_infoext`
--

CREATE TABLE `nursery_primary_page_infoext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
     `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `objective_banner`
--

CREATE TABLE `objective_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `objective_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `objective_page_info`
--

CREATE TABLE `objective_page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE `page_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `page_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `title`, `description`, `page_image`) VALUES
(1, 'About Demo College', 'Demo College is an integral part of the community both educationally and socially. The school looks bright and welcoming. We have a better learning environment for students. The school offers wide range of favourable learning environments for students. We have a well equipped science laboratory, library, hostel accommodation, transport facilities, a well equipped ICT centre, wide playing ground for sports and recreational activities, drinkable water supply, constant power supply, school farm and others.  The school is multicultural and co-educational for both male and female students. Our main concern is not all about the educational needs of the students alone, which is of paramount importance to us. We are also deeply concern about the moral and character formation of the students. One of our vision is to help our students discover their potentials, develop and maximize them.', 'page_imageba989f1b89e82d338c28d9ec359c76f8_1634906962.png');

-- --------------------------------------------------------

--
-- Table structure for table `school_banner`
--

CREATE TABLE `school_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `banner_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school_qualities`
--

CREATE TABLE `school_qualities` (
  `id` int(11) NOT NULL,
  `qualities` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Dumping data for table `school_qualities`
--

INSERT INTO `slider_ext` (`id`, `description`, `icons`) VALUES
(3, 'Facilities', 'ri-building-line'),
(4, 'Morals & Discipline', 'ri-user-add-line'),
(5, 'School Curriculum', 'ri-calendar-todo-line'),
(6, 'Sports', 'ri-footbal-line');

--
-- Table structure for table `school_song`
--

CREATE TABLE `school_song` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_song`
--

INSERT INTO `school_song` (`id`, `title`, `description`) VALUES
(1, 'poiu', 'poi');

-- --------------------------------------------------------

--
-- Table structure for table `senior_infoext`
--

CREATE TABLE `senior_infoext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
   `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `senior_subject`
--

CREATE TABLE `senior_subject` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, 'yy', 'jjj', 'slider_image8e8e9391007a9ae9cc7fe219f74453c5_1633969759.jpg'),
(15, 'testing', 'To ST Isabel School', 'slider_image88ea28eeab5dcba07ccd50c7cea42f6a_1634030837.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_ext`
--

CREATE TABLE `slider_ext` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `bg_color` varchar(50) DEFAULT NULL,
  `header_color` varchar(50) DEFAULT NULL,
  `text_color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_ext`
--

INSERT INTO `slider_ext` (`id`, `title`, `description`, `bg_color`, `header_color`, `text_color`) VALUES
(2, 'Special Education', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-light', 'text-dark', 'text-dark'),
(3, 'Certified Teachers', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-fifth', NULL, 'txt-white'),
(4, 'Certification', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-quarternary', NULL, 'txt-white'),
(5, 'Sport Education', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic', 'bg-light', 'text-dark', 'text-dark');

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
-- Indexes for table `contact_banner`
--
ALTER TABLE `contact_banner`
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
-- Indexes for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_banner`
--
ALTER TABLE `gallery_banner`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `school_qualities`
--
ALTER TABLE `school_qualities`
ADD 'icons' varchar(255);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_banner`
--
ALTER TABLE `admission_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_enrolment`
--
ALTER TABLE `admission_enrolment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_info_page`
--
ALTER TABLE `admission_info_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_banner`
--
ALTER TABLE `college_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_page_info`
--
ALTER TABLE `college_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_banner`
--
ALTER TABLE `contact_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creche_banner`
--
ALTER TABLE `creche_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creche_page_info`
--
ALTER TABLE `creche_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creche_page_info_ext`
--
ALTER TABLE `creche_page_info_ext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `director_banner`
--
ALTER TABLE `director_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `director_page_info`
--
ALTER TABLE `director_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolment`
--
ALTER TABLE `enrolment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_banner`
--
ALTER TABLE `gallery_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_banner`
--
ALTER TABLE `hostel_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_feature`
--
ALTER TABLE `hostel_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_info_page`
--
ALTER TABLE `hostel_info_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_slider`
--
ALTER TABLE `hostel_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `junior_infoext`
--
ALTER TABLE `junior_infoext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `junior_subject`
--
ALTER TABLE `junior_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratories_banner`
--
ALTER TABLE `laboratories_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratories_info_page`
--
ALTER TABLE `laboratories_info_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratories_list`
--
ALTER TABLE `laboratories_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratories_slider`
--
ALTER TABLE `laboratories_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_banner`
--
ALTER TABLE `library_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_feature`
--
ALTER TABLE `library_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_primarysubject`
--
ALTER TABLE `nursery_primarysubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_primary_banner`
--
ALTER TABLE `nursery_primary_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_primary_page_info`
--
ALTER TABLE `nursery_primary_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_primary_page_infoext`
--
ALTER TABLE `nursery_primary_page_infoext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objective_banner`
--
ALTER TABLE `objective_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objective_page_info`
--
ALTER TABLE `objective_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_banner`
--
ALTER TABLE `school_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_qualities`
--
ALTER TABLE `school_qualities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_song`
--
ALTER TABLE `school_song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `senior_infoext`
--
ALTER TABLE `senior_infoext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senior_subject`
--
ALTER TABLE `senior_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slider_ext`
--
ALTER TABLE `slider_ext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
