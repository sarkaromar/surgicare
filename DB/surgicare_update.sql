-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 11:11 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surgicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `short_desc`, `long_desc`, `image`) VALUES
(12, 'Welcome to SurgiCare Hospital', 'SurgiCare  Hospital offers all-inclusive state-of-the-art medical & healthcare services with up-to-date facilities.', 'SurgiCare  Hospital offers all-inclusive state-of-the-art medical & healthcare services with up-to-date facilities which are exclusively managed by well-reputed medical professionals, skilled nurses and technicians from home and abroad. It`s main focus is to provide affordable Healthcare Services of International Standard through continuous innovation and improvement of facilities and convenience.\r\n\r\nIn SurgiCare   Hospital, we do believe in ‘Human Touch’ which comes as cherished gift not from our Consultants only but also from every staff around. Together we strive to create HOPE inside our Patients’ minds and make them feel special, loved and cared. Therefore with help of our healthcare experts, we are working relentlessly on our people in developing the right kind of attitude and empathy needed to nurture the ailing body and soul because ‘Every single Life is precious’.', '2813cee2451664d51da21c326e402091.jpg'),
(13, 'Our Mission', 'Serve each patient with individual care by the dedicated and professionally competent healthcare team through updated technology and efficient leadership.', 'Serve each patient with individual care by the dedicated and professionally competent healthcare team through updated technology and efficient leadership.', '18701623cdf10399b4e18b1105dfb57e.png'),
(14, 'Our Vision', 'To deliver customer focused comprehensive healthcare service of International Standard.', 'To deliver customer focused comprehensive healthcare service of International Standard.', 'aa08bde9bf9848140fa2220430f17eb7.png');

-- --------------------------------------------------------

--
-- Table structure for table `back_users`
--

CREATE TABLE `back_users` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(70) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `token` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `IP` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `first_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phn` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'default.png',
  `joined_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `online_timestamp` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `back_users`
--

INSERT INTO `back_users` (`id`, `email`, `password`, `token`, `level`, `status`, `IP`, `first_name`, `last_name`, `phn`, `address`, `avatar`, `joined_date`, `online_timestamp`) VALUES
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', 'd0ed22a9f46233f7db7ebde5fd384217', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1502190559');

-- --------------------------------------------------------

--
-- Table structure for table `common_settings`
--

CREATE TABLE `common_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `add` text NOT NULL,
  `mail1` varchar(512) NOT NULL,
  `mail2` varchar(512) NOT NULL,
  `phn1` varchar(50) NOT NULL,
  `phn2` varchar(50) NOT NULL,
  `eme_phn` varchar(50) NOT NULL,
  `appoint_phn` varchar(50) NOT NULL,
  `sun_thu` varchar(256) NOT NULL,
  `fri` varchar(256) NOT NULL,
  `sat` varchar(256) NOT NULL,
  `fb` varchar(256) NOT NULL,
  `twt` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `copyright` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_settings`
--

INSERT INTO `common_settings` (`id`, `logo`, `add`, `mail1`, `mail2`, `phn1`, `phn2`, `eme_phn`, `appoint_phn`, `sun_thu`, `fri`, `sat`, `fb`, `twt`, `link`, `copyright`) VALUES
(1, 'f0f5b0e738a62f9dc35ec4d88bca08cc.png', 'Surgicare Clinic & Diagnostic Center, Pirojpur Sadar, Pirojpur.', 'admin@surgicarebd.com', 'info@surgicarebd.com', '+880 1713 927837', '+880 1713 927837', '01713927837', '+880 1713 927837', ' 8:30 am to 5:00 pm', 'Closed', '9:30 am to 1:00 pm', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '© Copyright 2017. All Rights Reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(265) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `short_desc`, `long_desc`, `image`) VALUES
(2, 'Cardiology', 'Cardiology Department of Surgicare Hospital is operated by a dedicated & experienced team. ', 'Amenities:\r\n\r\nWe have every necessary arrangement to cater our Patients on 24/7 basis. We are enriched with Catheterization Laboratory (Cath Lab), Pre & Post Cath area, Coronary Care Unit (CCU), Post CCU, Cardiac Operation Theatre and CT ICU.\r\n\r\nList of Procedures being done in our Cardiology Unit:\r\n\r\nFor Adults:\r\n\r\nCoronary Angiogram (CAG)\r\nPeripheral Angiogram (PAG)\r\nCardiac Cath (Adult)\r\nCerebral Angiogram\r\nPeripheral Angioplasty\r\nPrimary PTCA\r\nElective PTCA (Single Vessel, Multi Vessel, CTO, LM, Graft Vessel)\r\nTemporary Pacemaker Implantation (TPM)\r\nPPI Single Chamber\r\nPPI Dual Chamber\r\nPPI Generator Replacement\r\nRe-open/ Re-positioning PPI Lead\r\nICD (Single Chamber, Dual Chamber)\r\nCRTD/CRTP\r\nPericardiocentesis\r\nValvuloplasty–Mitral (PTMC)/Pulmonary\r\nIABP placement\r\nFistuloplasty\r\nVenoplasty\r\nIVC Filter\r\nFor Electrophysiology:\r\n\r\nEP Study\r\nIdentification & radio-frequency ablation of anomalous pathway for SVT\r\n For Pediatrics/ Congenital Heart Diseases:\r\n\r\nEmergency – Septostomy\r\nCardiac Cath\r\nDevice Closure – ASD, VSD, PDA, Ballon Valvuloplasty\r\nManagement of arrhythmia\r\nCongenital and structural Echocardiographs.\r\nFetal Echo echocardiography.', 'd720034d02e7b91ca63b42cef6de4788.png'),
(3, 'Gastroenterology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...', 'ae66d994da2b222fb1dff42881668e3e.png'),
(4, 'Pulmonology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...', '17dd2774352cf401859584597f5ba488.png'),
(5, 'DENTAL AND MAXILLOFACIAL SURGERY', 'Dental  department of Surgicare Hospital provides comprehensive general and specialized care delivered by a highly qualified team of Dentists.', '– Consultation – Counselling and educating patients regarding teeth and mouth problem, brushing and flossing technic.\r\n\r\n– Fluoride Application\r\n\r\n– Tooth Grinding\r\n\r\n– Full-mouth Rehabilitation\r\n\r\n– Removal of stain – tooth whitening\r\n\r\nEndodontics:\r\n– Endodontic repair of Perforation\r\n\r\n– Repair of acute or chronic pulpitis\r\n\r\n– Root canal treatment / Re – root canal treatment\r\n\r\n– Apisectomy\r\n\r\nFilling:\r\n– Cosmetic filling/ Aesthetic filling\r\n\r\n– Permanent filling (both auto cure & light cure)/ alloy/GIF/composite, with or without base and lining\r\n\r\n– Temporary filling\r\n\r\n– Pit & fissure sealant', '25dd282d66c8a1a6a0f8a9d65af22a07.png'),
(6, 'Obstetrics and Gynecology ', 'The Department of Obstetrics & Gynecology of Surgicare Hospital offers a spectrum of services with a view to expanding the horizon of care.', 'The latest advances in both the field of Obstetrics and Gynecology accompanied by highly qualified, senior and experienced Gynecologists make this department one of the best. The department can handle gynecology or obstetric emergency besides handling routine problems and problems of adolescence, reproductive age group patients and problems related to menopausal women.\r\n\r\nThe Obstetrics and Gynecology Department provides modern comprehensive diagnostic and treatment modalities in a caring environment for women throughout all seasons of life. Our specialized medical team offers advanced maternity services for normal and high risk pregnancies, postpartum and family planning services, infertility screening and treatments, and all endoscopic gynecological operations in addition to conventional gynecology surgeries and medical therapies.', '811f4a9cc88b0b0273f8c4f3930d9286.png'),
(7, 'Hepatology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum...', '5c261b1e39fc98f37029b83b5e8fb825.png');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(256) NOT NULL,
  `name` varchar(255) NOT NULL,
  `special` varchar(256) NOT NULL,
  `edu` varchar(256) NOT NULL,
  `work_days` varchar(256) NOT NULL,
  `speech` text NOT NULL,
  `fb` varchar(255) NOT NULL,
  `twt` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dept_name`, `name`, `special`, `edu`, `work_days`, `speech`, `fb`, `twt`, `skype`, `image`) VALUES
(2, 'Cardiology', 'DR. TOM SMITH BERT', 'Obstetrics and Gynecology', 'MD, OB/GYN', 'Monday, Wednesday, Thursday', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'facebook.com', 'twitter.com', 'doctor_name', '4085e8fc63e8514ee06f6ef84efdc6dd.jpg'),
(3, 'Gastroenterology', 'DR. TOM SMITH BERT', 'Obstetrics and Gynecology', 'MD, OB/GYN', 'Monday, Wednesday, Thursday', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'facebook.com', 'twitter.com', 'doctor_name', 'ea6f2b92a6a2acc34363f21613be3409.jpg'),
(4, 'Pulmonology', 'DR. TOM SMITH BERT', 'Obstetrics and Gynecology', 'MD, OB/GYN', 'Monday, Wednesday, Thursday', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'facebook.com', 'twitter.com', 'doctor_name', 'd9f7948dacc99b2ca41c7c7e79d30d72.jpg'),
(5, 'Dental', 'DR. TOM SMITH BERT', 'Gynecology, Health Care & Obstetrics', 'MD, OB/GYN', 'Monday, Wednesday, Thursday', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'facebook.com', 'twitter.com', 'doctor_name', '8b68feed70a9d3c46efab354a68abccf.jpg'),
(6, 'Gynecology', 'DR. TOM SMITH BERT', 'Gynecology, Health Care & Obstetrics', 'MD, OB/GYN', 'Monday, Wednesday, Thursday', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'facebook.com', 'twitter.com', 'doctor_name', '61c38b046a1b90dfa6f1d3ecf6376997.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ansr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `ques`, `ansr`) VALUES
(1, 'Any Information you provide on applications for disability, life or accidental insurance ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(2, 'Opposed to using \'Content here, content here\', making it look like readable English ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(3, 'Readable content of a page when looking at its layout ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(4, 'Opposed to using \'Content here, content here\', making it look like readable English ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(5, 'Readable content of a page when looking at its layout ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `desc`, `image`) VALUES
(5, 'test', 'test', '0f7eee0cf1166fd5ec32c2c6350720ef.jpg'),
(6, 'test', 'test', '46adf03b384d8f6490dd6b274443a4a1.jpg'),
(7, 'test', 'test', '0cd19faa48ba967625863ed82d85ba47.jpg'),
(8, 'test', 'test', 'ac11a16f5fb555db5e8c2170b087826b.jpg'),
(9, 'test', 'test', 'c2de9dc4d4f3fd3054196feb7a294a82.jpg'),
(10, 'test', 'test', '4e87a6b11dcb960b914f1524e4466061.jpg'),
(11, 'test', 'test', '581fd3810df508301e52caca6583cb20.jpg'),
(12, 'test', 'test', 'acc25fb7bcf924449f49c080c4df440c.jpg'),
(13, 'test', 'test', '95d42dd456678890a56c9d6fd243926d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `short_desc`, `long_desc`, `image`) VALUES
(2, 'Pharmacy', 'OPD pharmacy is open 24/7', 'For your convenience, OPD pharmacy is open 24/7, located at 1st floor of the hospital building. Our skilled pharmacists provide expert knowledge in managing your drug therapy. We maintain cold chain for all medicines which are procured directly from manufacturers to avoid of getting sub-standard supply.\r\n\r\nWe offer 3% discount on OPD pharmacy for out-patient only (not applicable for imported medicine).', '30ff56865d51fa5bc4ec4fead90e3eb7.jpg'),
(3, 'Prayer Room', 'Surgicare Hospital provides Prayer Room for both Male and Female:', 'Surgicare Hospital provides Prayer Room for both Male and Female:', '38626cf7346170d580e4a51959a9a0e8.jpg'),
(4, 'Car Parking', 'SurgiCare Hospital provides convenient and secured car parking garage for patients, attendants and visitors.', 'SurgiCare Hospital provides convenient and secured car parking garage for patients, attendants and visitors.', '0cb6f5b25ec94d23b2ce6d3939c97172.jpg'),
(5, 'In-patient Services', 'In-patient services include the patient-room, nursing-station and all other facilities for patient care.', 'Facilities:\r\n\r\nLarge, comfortable, full-furnished cabins\r\nCable TV & telephone services\r\nSpecialized hospital beds with all state-of-the-art medical outfits\r\nCentral gas system &#40;piped oxygen in all units&#41;\r\n24-hour availability of nurse and monitoring system\r\nDietitian supported meals\r\nICU, CICU, CCU, NICU, PICU, HDU\r\nLabor and Delivery Unit\r\nState-of-the-art Cardiac Catheterization Lab\r\nModular Operation Theaters', '19d057ad921c43e71a89ce45e9de7d71.jpg'),
(6, 'Ambulance Service', 'SurgiCare Hospital provides round the clock Ambulance Service', 'SurgiCare Hospital provides round the clock Ambulance Service', '558bc471246fa9442339cd4673c7ae71.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `desc`, `link`, `image`) VALUES
(6, 'SurgiCare Clinic', 'SurgiCare Hospital offers all-inclusive state-of-the-art medical.', 'www.surgicarebd.com', '97e59288549e358bf3cfa13b14d9cd16.jpg'),
(7, 'SurgiCare Clinic', 'SurgiCare Hospital offers all-inclusive state-of-the-art medical.', 'www.surgicarebd.com', '9623171988c712f82646b8e3b8959c5e.jpg'),
(8, 'SurgiCare Hospital', 'SurgiCare Hospital offers all-inclusive state-of-the-art medical.', 'www.surgicarebd.com', 'a224968b9a7f67b83348dc6e3dac9b72.jpg'),
(9, 'SurgiCare Diagnostic', 'SurgiCare Hospital offers healthcare services with up-to-date facilities.', 'www.surgicarebd.com', '62d0cd6829f3f25d5f784332bc85f914.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `back_users`
--
ALTER TABLE `back_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_settings`
--
ALTER TABLE `common_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `back_users`
--
ALTER TABLE `back_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `common_settings`
--
ALTER TABLE `common_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
