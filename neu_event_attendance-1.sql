-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 09:14 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neu_event_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_first_name` varchar(256) NOT NULL,
  `admin_last_name` varchar(256) NOT NULL,
  `instructorID` varchar(256) NOT NULL,
  `phoneNumber` varchar(256) NOT NULL,
  `emailAddress` varchar(256) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_first_name`, `admin_last_name`, `instructorID`, `phoneNumber`, `emailAddress`, `registration_date`) VALUES
('Buboy', 'Villar', '10311397', '0915000000', 'BV@yahoo.com', '2018-10-24 07:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(100) NOT NULL,
  `event_title` varchar(256) NOT NULL,
  `event_description` varchar(256) NOT NULL,
  `event_venue` varchar(256) NOT NULL,
  `event_image` varchar(256) NOT NULL,
  `event_date` text NOT NULL,
  `event_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_description`, `event_venue`, `event_image`, `event_date`, `event_posted`) VALUES
(13, 'NEU Science Fair', 'Happy', 'University Hall', 'UHall3.jpg.100', '2018-10-22', '2018-10-16 03:54:57'),
(15, 'Seminar', 'Seminar sa UHall', 'University Hall', 'UHall2.jpg.71', '2018-10-27', '2018-10-16 04:04:05'),
(16, 'NEU Science Fair', 'Blab;a', 'UHALL', '.86', '2018-10-16', '2018-10-22 03:37:42'),
(17, 'NEU Tagis Lakas', 'The New Era University established the TAGIS LAKAS. This TAGIS LAKAS is a sports \r\nCompetition made for different department in all colleges in the University. Tagis lakas is composing of juniors and seniors division', 'NEU Field', 'photo.jpg.21', '2018-09-19', '2018-10-23 05:35:13'),
(18, 'NEU Career Fair', 'NEU Career Fair is job opportunity for students who wants to employed.', 'NEU Covered Court', '42780518_1575261092573460_4913816003965616128_n.jpg.73', '2018-09-29', '2018-10-23 05:39:17'),
(19, 'Hapi ang Buhay: The Musical Special Screenings', 'Hapi ang Buhay is a Philippine television sitcom on Net 25. It is the first sitcom to be produced by Net 25 of the Eagle Broadcasting Corporation, in cooperation with INCinema Productions', 'University Hall', 'Screen Shot 2018-09-21 at 4.01.02 PM.png.82', '2018-10-03', '2018-10-23 05:46:22'),
(20, 'Philippine Law School Admission Test', 'The Philippine Law School Admission Test (PhiLSAT) is a nationwide uniform admission test to be administered under the control and supervision of the Legal Education Board to improve the quality of Legal Education and all those seeking admission to the bas', 'NEW Era Univesity, HS BLDG', 'PhiLSAT_poster_2018-09-06-01_(1).png.71', '2018-09-23', '2018-10-23 05:51:08'),
(21, 'NEU HOLDS FORUM ON THE COLD WAR AND CURRENT EVENTS', 'New Era University hosted a global current affairs forum, titled &ldquo;Is the Cold War over?&rdquo; Held on September 6, 2018 at the University Hall, the forum featured a presentation by a distinguished guest from the Moscow Institute of International Rel', 'University Hall', '.32', '2018-09-07', '2018-10-23 05:58:04'),
(22, 'THE INC SYMPHONY ORCHESTRA', 'symphony orchestra performing college of music in New Era University', 'The performing arts theater', '43580094_1587739554658947_5298946868154204160_n.jpg.97', '2018-10-09', '2018-10-23 06:03:50'),
(23, 'The Five S\'s (5S) of Good Housekeeping', '\r\nThe first workshop session on &quot;The Five S\'s (5S) of Good Housekeeping&quot; was held last Oct. 20, 2018 at Multimedia Room B led by Dr. Mercedes R. Esmade and Bro. Marco B. Nasol, head of the Building Administration.', 'NEU Main Bldg, Multimedia Room B', '44574727_1601943613238541_3052850633599090688_n.jpg.80', '2018-10-20', '2018-10-23 06:07:25'),
(24, 'CSD 5th Year Anniversary Special Premier Screening of the CSD Show on INCTV', 'The First Ever Program for the Deaf on Philippine Television', 'NEU Hall', '44300762_2313610955533474_2642220522804346880_n.jpg.87', '2018-10-19', '2018-10-23 06:10:26'),
(25, ' RAISE AWAWRENESS CONCERNING ISSUES RELATED TO MENTAL HEALTH', 'in cooperation with the NEU Psychology Society, New Era Psychreview Group, and the NEU Sight Camera Club, launched a series of events to raise awareness concerning issues related to mental health. The highlight of these activities is the seminar entitled, ', 'University Hall', '43576850_1586278738138362_4704481647305687040_n.jpg.99', '2018-10-04', '2018-10-23 09:04:40'),
(26, 'Orientation on Human Resource Management and Development, System and Practices', 'New Era University\r\nSeptember 28 at 7:12 AM &middot; \r\nNEU-HRD staff members attend Orientation on Human Resource Management and Development, System and Practices on Sept. 28, 2018 at the Multipurpose Hall, Professional Schools Building.', 'Multi Purpose Hall, Prof. BLDG', '42738771_1574147999351436_528098342513672192_n.jpg.76', '2018-09-28', '2018-10-23 09:08:37'),
(27, 'Graduation of the 3rd Batch of the Certificate Program in International Relations and ASEAN Studies', 'Graduation of the 3rd Batch of the Certificate Program in International Relations and ASEAN Studies held in PSB, Room 201 on September 29, 2018.', 'PSB Room 201', '42723493_1575244839241752_5742386122453942272_n.jpg.32', '2018-09-28', '2018-10-23 09:30:58'),
(28, 'Steps in Qualitative and Quantitative Research Conceptualization and Writing ', 'The NEU Graduate School of Education conducted a whole-day seminar on Steps in Qualitative and Quantitative Research Conceptualization and Writing last September 22, 2018 at the University Hall. Philippine Educational Measurement and Evaluation Association', 'University Hall', '42428981_1570579336374969_3055863682006253568_n.jpg.13', '2018-09-22', '2018-10-23 09:34:34'),
(29, '1st PSME NCR Student Conference', 'The 1st PSME NCR Student Conference happened at the New Era University on September 8, 2018 with the theme &ldquo;Strengthening Capabilities and Competence Towards Professional World of Tomorrow&rdquo; participated by 421 delegates from different universit', 'University Hall', '41497346_1554942697938633_8225114104168185856_n.jpg.23', '2018-10-08', '2018-10-23 09:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `registeredattendees`
--

CREATE TABLE `registeredattendees` (
  `regFirstName` varchar(256) NOT NULL,
  `regLastName` varchar(256) NOT NULL,
  `regStudentID` varchar(256) NOT NULL,
  `regPhoneNumber` varchar(256) NOT NULL,
  `regEmailAdress` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `courses` varchar(256) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `registered_event_id` varchar(256) NOT NULL,
  `registered_event_venue` varchar(256) NOT NULL,
  `registered_event_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredattendees`
--

INSERT INTO `registeredattendees` (`regFirstName`, `regLastName`, `regStudentID`, `regPhoneNumber`, `regEmailAdress`, `department`, `courses`, `registration_date`, `registered_event_id`, `registered_event_venue`, `registered_event_date`) VALUES
('Rodrigo', 'Duterte', '01', '911', 'iheytdragz@patayinkita.com', 'College of Law', 'Bachelor of Laws', '2018-10-21 15:59:35', '15', 'University Hall', '2018-10-27'),
('Joel', 'Velasquez', '1410133-197', '0969696969', 'joelAmba@gmail.com', 'College of Business Administration', 'Bachelor of Science in Entrepreneurship', '2018-10-22 06:18:52', '15', 'University Hall', '2018-10-27'),
('Juan ', 'Dela Cruz', '1513455232', '09128475869', 'JuanDelaCruz@gmail.com', 'College of Education', 'Bachelor of Secondary Education Major in MAPE', '2018-10-24 19:11:46', '29', 'University Hall', '2018-10-08'),
('Marfred Paul', 'Orilla', '1514198879', '09953604087', 'mpcorilla@neu.edu.ph', 'College of Computer Studies', 'Bachelor of Science in Computer Science', '2018-10-21 14:48:08', '13', 'University Hall', '2018-10-22'),
('Barack', 'Obama', '19354561654', '096514183215', 'barackobama@email.com', 'College of Business Administration', 'Bachelor of Science in Business Administration major in Human Resource Development and Management', '2018-10-21 16:14:38', '13', 'University Hall', '2018-10-22'),
('Allina Shayne', 'Orilla', '987654321', '09321654987', 'allinashayneorilla@email.com', 'College of Accountancy', 'Bachelor of Science in Accountancy', '2018-10-21 15:19:13', '13', 'University Hall', '2018-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `student_id` int(100) NOT NULL,
  `registered_event_id` int(100) NOT NULL,
  `student_first_name` varchar(50) NOT NULL,
  `student_last_name` varchar(50) NOT NULL,
  `qr_code` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`instructorID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `registeredattendees`
--
ALTER TABLE `registeredattendees`
  ADD PRIMARY KEY (`regStudentID`);

--
-- Indexes for table `registeredusers`
--
ALTER TABLE `registeredusers`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `registered_event_id` (`registered_event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `registeredusers`
--
ALTER TABLE `registeredusers`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
