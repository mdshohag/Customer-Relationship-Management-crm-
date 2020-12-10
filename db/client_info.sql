-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2016 at 11:37 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rikhan_client_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign_project`
--

CREATE TABLE IF NOT EXISTS `tbl_assign_project` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `issue_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `project_progress` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0=runing,1=pending,2=complete'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_assign_project`
--

INSERT INTO `tbl_assign_project` (`id`, `project_id`, `client_id`, `amount`, `issue_date`, `delivery_date`, `project_progress`, `status`) VALUES
(1, 1, 1, 10000.00, '0000-00-00', '2016-02-02', '0', 0),
(2, 9, 12, 0.00, '2016-03-31', '2016-04-24', '0', 0),
(3, 10, 2, 6000.00, '2015-01-10', '2016-01-02', '0', 0),
(4, 2, 4, 30000.00, '2016-05-01', '2016-07-01', '0', 0),
(5, 3, 11, 33000.00, '2016-05-04', '2016-08-01', '0', 0),
(6, 4, 13, 100000.00, '2016-02-08', '0001-01-01', '0', 0),
(7, 5, 9, 10000.00, '2016-02-03', '2016-02-05', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_number` varchar(20) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `contact_persoin` varchar(100) NOT NULL,
  `contact_persoin_number` varchar(20) NOT NULL,
  `contact_persoin_email` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `file_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `client_name`, `client_number`, `client_email`, `contact_persoin`, `contact_persoin_number`, `contact_persoin_email`, `status`, `file_id`) VALUES
(1, 'Sujon Howlader', '01717503266', 'sujanhalderbtv@gmail.com', '', '', '', 'complete', ''),
(2, 'Ajit Kumar', '01711544611', 'ajitsarkar91@gmail.com', 'Maruf', '01746490227', 'mkuddinmaruf63@gmail.com', 'complete', ''),
(3, 'Principle behdc.com', '01817546124', '', '', '', '', 'complete', ''),
(4, 'Tanvir Khan PG Shop', '01711506857', '', 'Shuvo', '01988200200', '', 'complete', '24/dcit'),
(5, 'Principle srakcollege', '01718137174', '', '', '', '', 'complete', ''),
(6, 'Rahim Phatan Pagar school', '01715254163', '', 'Rahim Phatan', '01715254163', '', 'complete', ''),
(7, 'Roselyn Sheikh Rashel Raju', '01711573338', '', 'Arif', '0172625645', '', 'complete', ''),
(8, 'Reaz Look & Like Rajlokki', '01610696900', '', '', '', '', 'complete', ''),
(9, 'Lamia Mouna POS', '01717052100', '', 'Jony', '01689631172', '', 'complete', ''),
(10, 'Saving Power Apu', '01719952307', '', '', '', '', 'complete', ''),
(11, 'Sumana Bostraloy Sujit Saha (Joidebpur)', '01911039988', '', 'subroto', '01681816341', '', 'running', '08/dcit'),
(12, 'Al Jabed Fashion Rashel', '0071442249972', '', '', '', '', 'running', ''),
(13, 'Sabbir Cosmos', '01740900667', '', 'Sumon', '01778889204', '', 'running', ''),
(14, 'Purbo basundia Pricipal', '01718550853', '', 'Computer Teacher', '01717388332', '', 'running', ''),
(16, 'H. U Farooque ibn Ambia (Alamgir) (Sylhet)', '01711328270', 'farooque795@gmail.com', '', '', '', 'waiting', ''),
(17, 'S.S Enterprice MDKayum', '01917114714', '', '', '', '', 'waiting', '21/dcit'),
(18, 'Green Mango Rubel', '01726880879', '', '', '', '', 'waiting', ''),
(19, 'NS Sopurcing  Nazrul ', '01711704967', '', 'Amzad', '01828782566', '', 'waiting', ''),
(20, 'Merchaant Febrics Rokon ', '01712555342', '', '', '', '', 'waiting', ''),
(21, 'C.A Shohag', '01713143224', '', '', '', '', 'waiting', ''),
(22, 'Mamun MLM', '01719368291', '', '', '', '', 'pending', '02/dcit'),
(23, 'Reve Beauty Parlour G.M', '01711960928', '', '', '', '', 'cancel', ''),
(24, 'Babu  Ref PG Shop (Website)', '01794374639', '', '', '', '', 'cancel', ''),
(25, ' Unilever Sohel Babu', '01719835821', '', '', '', '', 'cancel', ''),
(26, 'Iren for ecommerce', '01677416400', '', '', '', '', 'cancel', '06/dcit'),
(27, 'Bandarban  Principle (Govt.College)', '01556744333', '', '', '', '', 'cancel', ''),
(28, ' Atlantic Maritime Academy Alauddin sarker', '01720024665', '', '', '', '', 'cancel', ''),
(32, 'Sarkar Apps Maynul', '01713290869', '', '', '', '', 'cancel', ''),
(33, 'Selim vai, Chairman, Ghaghotia Union', '01718340961', '', '', '', '', 'waiting', '33'),
(34, 'Star Bangla Institute ', '01727228041', '', 'Hasan Imam sir', '', '', 'waiting', '34'),
(35, 'Tibbiyia college', '01715123040', '', 'Hakim Ferdus', '', '', 'waiting', '35'),
(36, 'BRB cabale (Nahi Group)', '', '', 'md mehedi hasan (HR Admin Head)', '01777763473', '', 'waiting', ''),
(37, 'Website for Saiful ref Hafsabd', '01824278484', 'saifict.com@gmail.com', '', '', '', 'waiting', ''),
(38, 'BTB App (Software money back apps)', '', '', 'DR. shuvu', '', '', 'Select', ''),
(39, 'inventory Soft (Ref: PG shop)', '', '', '', '', '', 'Select', ''),
(40, 'Abdullah siddiq , london (ref: roish sir)', '', 'masiauk2014@gmail.com', '', '', '', 'waiting', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_schedule`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_schedule` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `schedule_date` date NOT NULL,
  `contact_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact_schedule`
--

INSERT INTO `tbl_contact_schedule` (`id`, `client_id`, `emp_name`, `description`, `schedule_date`, `contact_date`, `status`) VALUES
(1, 23, 'sajal', 'business close contact with employee ', '0000-00-00', '2016-09-26 11:07:10', 1),
(2, 13, 'Rifat', 'update Regular Project Details read more reduce. add contact for accounting soft', '0000-00-00', '2016-09-26 11:06:49', 1),
(3, 18, 'Rifat', 'Try to Contact at 11.59 am 3 times but not receiving', '0000-00-00', '2016-09-26 11:06:21', 1),
(4, 13, 'Rifat', 'Project Details Problem of Text  Editor. Mail us. ToS change to Terms and Condition.', '0000-00-00', '2016-09-26 11:05:49', 1),
(5, 14, 'Rifat', 'They will not get Website.Cancel Request  26.09.16 12.53', '0000-00-00', '2016-09-26 06:53:20', 1),
(6, 11, 'Sajal', 'Enginner has to go to Joidevbpor for data entry and project show', '2016-09-27', '2016-09-26 11:05:16', 1),
(7, 25, 'Rifat', 'It is customer of a pos . they have some dweller .they will mange them .\nWe send equation to them. But the fair about amount of the project. They did not contact with us', '0000-00-00', '2016-09-26 11:05:00', 1),
(8, 2, 'sajal mahmud', 'Calling for to renew 3 domain...they want to renew only one domain...we will sent a mail again to him. They will also sent to us a mail for website moderation.', '2016-09-26', '2016-09-26 10:20:26', 1),
(9, 25, 'sajal', 'They will not interest to buy any software', '2016-09-26', '2016-09-26 11:04:42', 1),
(10, 28, 'sajal', 'They will not interest to buy any software.', '2016-09-26', '2016-09-26 10:21:50', 1),
(11, 20, 'sajal', 'We will call to them after 15/10/2016', '2016-09-26', '2016-09-26 10:22:43', 1),
(12, 18, 'sajal', 'I just calling 3 times. But not recieve.', '2016-09-27', '2016-09-27 08:46:22', 1),
(13, 19, 'sajal', 'Calling him...And he said that when his staff was coming from mymensing then he will come to our office and give us instruction for buying 6 pc.', '2016-09-27', '2016-09-27 08:47:50', 1),
(14, 11, 'sajal', 'calling him....and i said that mamun vai will go to his office at thursday in noon.', '2016-09-27', '2016-09-27 08:48:55', 1),
(15, 2, 'sajal', 'They pay us 1500 for 1 domain tsbd.com', '2016-09-29', '2016-09-29 09:03:15', 1),
(16, 11, 'Sajal', '04.10.2016 Mamun will visit to Sumona', '2016-10-04', '2016-09-29 10:32:44', 1),
(17, 36, 'sajal', 'meeting with him for software', '2016-10-01', '2016-09-30 17:03:27', 1),
(18, 34, 'sajal', 'Outsourcing Presentation', '2016-10-08', '2016-09-30 17:05:44', 1),
(19, 35, 'Roish Sir', 'Software Meeting', '0000-00-00', '2016-09-30 17:06:38', 1),
(20, 37, 'Rifat', 'Need website with hosting and unlimited webmaill. Static website will be neeeded.I say hosting 1GB 1500 taka. Check saifict.com for domain check. Fixed price and send quation to his mail for domain, hosting and static website.', '0000-00-00', '2016-10-01 09:32:44', 1),
(21, 11, 'Mamun', 'I called them sujit and  subrata again and again, but they both didnot receive my call.', '0000-00-00', '2016-10-04 07:11:49', 1),
(22, 18, 'sajal', 'he saw the software and he will talk with roish sir about that', '2016-10-05', '2016-10-05 06:49:09', 1),
(23, 19, 'sajal', 'can not pic call', '2016-10-05', '2016-10-05 06:49:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_info`
--

CREATE TABLE IF NOT EXISTS `tbl_project_info` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `p_category` varchar(30) NOT NULL,
  `p_description` longtext NOT NULL,
  `project_location` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0=runing,1=pending,2=complete',
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_project_info`
--

INSERT INTO `tbl_project_info` (`id`, `project_name`, `p_category`, `p_description`, `project_location`, `status`, `modified_date`) VALUES
(1, 'visionnews24.com', 'website', 'This a web portal developed by Liton', 'http://visionnews24.com/', 0, '2016-09-25 09:55:05'),
(2, 'PG POS', 'software', 'This Project Barcode System Old. Raw Product Meassure  need to be done. Fiscal Year also set.', 'pgshop.dcitltd.com', 0, '2016-09-25 09:55:20'),
(3, 'Sumana Pos ', 'software', 'Latest Barcode .Not as usual POS.', 'Sumona Desktop', 0, '2016-09-25 09:56:22'),
(4, 'Cosmos Website', 'website', 'Online booking with payment, Hosting on their  own panel', 'http://cosmosholiday.com.bd', 0, '2016-09-29 10:30:32'),
(5, 'Lamia Pos ', 'software', 'This Project is stop for Client extra requirement  ', 'Client Desktop', 0, '2016-09-26 11:51:28'),
(6, 'Basail behdc Website Tangaile', 'website', 'Onliny website no domain hosting', 'http://behdc.com', 0, '2016-09-25 10:01:34'),
(7, 'Pagar School Website', 'website', 'Pager website but they don not take software', 'http://pmahschool.edu.bd', 0, '2016-09-25 10:00:52'),
(8, 'Purbobasandia Website Jassore', 'website', 'only website .software not get yet', 'http://pbghs.edu.bd', 0, '2016-09-25 09:59:48'),
(9, 'Reve Website', 'website', 'Beauty Parl;our Website', 'http://rbpsbd.com/', 0, '2016-09-25 09:58:58'),
(10, 'www.tsbbd.com', 'website', 'Some correction reaming ', 'http:tsbbd.com', 0, '2016-09-25 09:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE IF NOT EXISTS `tbl_user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `isactive` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`id`, `name`, `employee_id`, `department`, `designation`, `usertype`, `mobile`, `email`, `password`, `isactive`) VALUES
(1, 'shohag', '26', 'software', 'jrsoft', 'user', '111111111443', 'shoh@gmail.com', '96e79218965eb72c92a549dd5a330112', 1),
(2, 'Admin', '261', 'software', 'jrsoft', 'admin', '111111111443', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'Mamun Sabuj', '32', 'software', 'srexsoft', 'admin', '018555666', 'mamun.sabuj@gmail.com', 'a234a866ba92d4e51fb93cb78d17dfa2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assign_project`
--
ALTER TABLE `tbl_assign_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_schedule`
--
ALTER TABLE `tbl_contact_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_info`
--
ALTER TABLE `tbl_project_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assign_project`
--
ALTER TABLE `tbl_assign_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_contact_schedule`
--
ALTER TABLE `tbl_contact_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_project_info`
--
ALTER TABLE `tbl_project_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
