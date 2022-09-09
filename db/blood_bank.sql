-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 06:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AREA_ID` int(11) NOT NULL,
  `DISTRICT_ID` int(11) NOT NULL,
  `PROVINCE_ID` int(11) NOT NULL,
  `AREA_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AREA_ID`, `DISTRICT_ID`, `PROVINCE_ID`, `AREA_NAME`) VALUES
(1, 1, 3, 'Sanepa');

-- --------------------------------------------------------

--
-- Table structure for table `blood_campaign`
--

CREATE TABLE `blood_campaign` (
  `DONOR_ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FATHER_NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BODY_WEIGHT` int(11) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `ADDRESS` text NOT NULL,
  `AREA` varchar(150) NOT NULL,
  `DISTRICT` varchar(150) NOT NULL,
  `PROVINCE` varchar(150) NOT NULL,
  `COUNTRY` varchar(150) NOT NULL,
  `CONTACT_1` varchar(150) NOT NULL,
  `CONTACT_2` varchar(150) NOT NULL,
  `NEW_DONOR` varchar(150) NOT NULL,
  `LAST_D_DATE` date NOT NULL,
  `DONOR_PIC` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_campaign`
--

INSERT INTO `blood_campaign` (`DONOR_ID`, `NAME`, `FATHER_NAME`, `GENDER`, `DOB`, `BLOOD`, `BODY_WEIGHT`, `EMAIL`, `ADDRESS`, `AREA`, `DISTRICT`, `PROVINCE`, `COUNTRY`, `CONTACT_1`, `CONTACT_2`, `NEW_DONOR`, `LAST_D_DATE`, `DONOR_PIC`) VALUES
(1, 'Biwash Karki', 'Bikash Karki', 'Male', '1997-11-10', 'O+', 75, 'karkibibash@gmail.com', 'Ekantakuna, Petrol Pump', 'Ekantakuna', 'Lalitpur', 'Province No. 3', 'Nepal', '9860123456', '985612345', 'Yes', '0000-00-00', 'donor_image/471high_quality_lens_flares_in_png_05_by_genivaldosouza_d9ztl6e-pre.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `DONOR_ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FATHER_NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BODY_WEIGHT` int(11) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `PASSWORD` varchar(55) NOT NULL,
  `ADDRESS` text NOT NULL,
  `AREA` varchar(150) NOT NULL,
  `DISTRICT` varchar(150) NOT NULL,
  `PROVINCE` varchar(150) NOT NULL,
  `COUNTRY` varchar(150) NOT NULL,
  `CONTACT_1` varchar(150) NOT NULL,
  `CONTACT_2` varchar(150) NOT NULL,
  `NEW_DONOR` varchar(150) NOT NULL,
  `LAST_D_DATE` date NOT NULL,
  `DONOR_PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`DONOR_ID`, `NAME`, `FATHER_NAME`, `GENDER`, `DOB`, `BLOOD`, `BODY_WEIGHT`, `EMAIL`, `PASSWORD`, `ADDRESS`, `AREA`, `DISTRICT`, `PROVINCE`, `COUNTRY`, `CONTACT_1`, `CONTACT_2`, `NEW_DONOR`, `LAST_D_DATE`, `DONOR_PIC`, `STATUS`) VALUES
(1, 'Bishal Adhikari', 'Bichari Prasad Adhikari', 'Male', '1997-06-18', 'O+', 60, 'mabishalho@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kalanki, Makalu, Syuchatar', 'Makalu', 'Kathmandu', 'Province No. 3', 'Nepal', '9849480576', '9860405623', 'Yes', '0000-00-00', 'donor_image/331IMG_8795.jpg', 1),
(2, 'Biwash Karki', 'Bikash Karki', 'Male', '1997-11-10', 'O+', 75, 'karkibibash@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Ekantakuna, Petrol Pump', 'Ekantakuna', 'Lalitpur', 'Province No. 3', 'Nepal', '9860123456', '985612345', 'Yes', '0000-00-00', 'donor_image/471high_quality_lens_flares_in_png_05_by_genivaldosouza_d9ztl6e-pre.jpg', 1),
(3, 'Milan Thapa', 'Dhan Bahadur Thapa', 'Male', '1998-04-14', 'A+', 70, 'thapakaji@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kirtipur, Maitrinagar', 'Kitripur Gumba', 'Kathmandu', 'Province No. 3', 'Nepal', '9865432213', '9860112233', 'Yes', '0000-00-00', 'donor_image/155selective-focus-photo-of-parked-blue-and-black-cafe-racer-2549941.jpg', 1),
(4, 'Anuj Gyawali', 'Ram Gyawali', 'Male', '1998-12-25', 'B+', 65, 'gyawalianuj@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kirtipur, Maitrinagar', 'Kirtipur', 'Kathmandu', 'Province No. 3', 'Nepal', '9843445423', '9865405342', 'Yes', '0000-00-00', 'donor_image/395Deer_by_sweetpoisonresources (1).png', 1),
(5, 'Anish Pokharel', 'Rameshowr Pokharel', 'Male', '1998-08-04', 'O+', 65, 'anishpokharel@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kirtipur, Tyanglaphant, Chadani Chowk', 'Tyanglaphant', 'Kathmandu', 'Province No. 3', 'Nepal', '9845321123', '9860231233', 'Yes', '0000-00-00', 'donor_image/418IMG_3259.jpg', 1),
(6, 'Avisek Regmi', 'Meghnath Regmi', 'Male', '1999-04-14', 'A+', 65, 'regmiavisek@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kirtipur, Maitrinagar, Adarshanagar', 'Maitrinagar', 'Kathmandu', 'Province No. 3', 'Nepal', '9864563827', '9860847536', 'Yes', '0000-00-00', 'donor_image/743yuvraj-singh-n0__vDfdTHg-unsplash.jpg', 1),
(7, 'Mamata Wagle', 'Manmohan Wagle', 'Female', '1999-04-29', 'A+', 55, 'mamatawagle@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kalanki, Makalu Petrol Pump', 'Makalu', 'Kathmandu', 'Province No. 3', 'Nepal', '9865048392', '9863049745', 'Yes', '0000-00-00', 'donor_image/399facebook-default-no-profile-pic-girl.jpg', 1),
(8, 'Simran Khadka', 'Santaram Kdadka', 'Female', '1994-01-04', 'B+', 55, 'sadikshyak@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kalanki, Makalu Petrol Pump', 'Makalu', 'Kathmandu', 'Province No. 3', 'Nepal', '9840376566', '9860446653', 'No', '0000-00-00', 'donor_image/658facebook-default-no-profile-pic-girl.jpg', 0),
(10, 'Bidur Acharya', 'Prem Acharya', 'Male', '1999-11-01', 'B+', 65, 'acharyabidyour@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Kalanki, Makalu, Syuchatar', 'Makalu', 'Kathmandu', 'Province No. 3', 'Nepal', '9864098989', '9860465345', 'Yes', '0000-00-00', 'donor_image/690l60Hf.png', 0),
(11, 'testinng', 'Diana Maynard', 'Others', '2025-10-06', 'AB+', 4, 'wudakyzec@mailinator.com', '21232f297a57a5a743894a0e4a801fc3', 'Natus recusandae La', 'Duis ad veritatis es', '118', '1', '1', '54', '81', 'No', '1971-12-28', 'donor_image/397Screen Shot 2021-02-08 at 9.36.32 AM.png', 0),
(12, 'testinng', 'Diana Maynard', 'Others', '2025-10-06', 'AB+', 4, 'wudakyzec@mailinator.com', '21232f297a57a5a743894a0e4a801fc3', 'Natus recusandae La', 'Duis ad veritatis es', '118', '1', '1', '54', '81', 'No', '1971-12-28', 'donor_image/922Screen Shot 2021-02-08 at 9.36.32 AM.png', 0),
(13, 'testing2', 'Galena Carver', 'Others', '2020-05-06', 'O-', 83, 'bekohy@mailinator.com', '21232f297a57a5a743894a0e4a801fc3', 'Et architecto dolore', 'Quibusdam pariatur ', '95', '5', '1', '37', '73', 'No', '1993-06-24', 'donor_image/537Screen Shot 2021-09-29 at 2.32.31 PM.png', 0),
(14, 'Myles Kelley', 'Kalia Cash', 'Female', '2025-04-06', 'AB+', 1, 'hucahehes@mailinator.com', '21232f297a57a5a743894a0e4a801fc3', 'A dolor velit aut s', 'Voluptas id in omni', '97', '1', '1', '11', '16', 'Yes', '2017-12-30', 'donor_image/324Screen Shot 2021-09-29 at 6.12.04 PM.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(255) NOT NULL,
  `province_name` varchar(255) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `campaign_name`, `province_name`, `district_name`, `date`, `contact`, `status`) VALUES
(1, 'Xerxes Reilly', 'Province No. 7', 'Karen Atkinson', '1975-05-05', '+1 (106) 805-3653', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `COUNTRY_ID` int(11) NOT NULL,
  `COUNTRY_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COUNTRY_ID`, `COUNTRY_NAME`) VALUES
(1, 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DISTRICT_ID` int(11) NOT NULL,
  `PROVINCE_ID` int(11) NOT NULL,
  `DISTRICT_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DISTRICT_ID`, `PROVINCE_ID`, `DISTRICT_NAME`) VALUES
(1, 1, 'Jhapa'),
(2, 1, 'Illam'),
(3, 2, 'Parsa'),
(4, 2, 'Bara'),
(5, 3, 'Kathmandu'),
(6, 3, 'Lalitpur'),
(7, 4, 'Gorkha'),
(8, 4, 'Kaski'),
(9, 5, 'Palpa'),
(10, 5, 'Dang'),
(11, 6, 'Humla'),
(12, 6, 'Jumla'),
(13, 7, 'Kailali'),
(14, 7, 'Doti'),
(75, 3, 'Sindhuli'),
(76, 3, 'Ramechhap'),
(77, 3, 'Dolakha'),
(78, 3, 'Dhading'),
(79, 3, 'Kavrepalanchowk'),
(80, 3, 'Nuwakot'),
(81, 3, 'Rasuwa'),
(82, 3, 'Sindhupalchok'),
(83, 3, 'Chitwan'),
(84, 3, 'Makwanpur'),
(85, 3, 'Bhaktapur'),
(86, 1, 'Bhojpur'),
(87, 1, 'Dhankuta'),
(88, 1, 'Khotang'),
(89, 1, 'Morang'),
(90, 1, 'Okhaldhunga'),
(91, 1, 'Panchthar'),
(92, 1, 'Sankhuwasabha'),
(93, 1, 'Solukhumbu'),
(94, 1, 'Sunsari'),
(95, 1, 'Taplejung'),
(96, 1, 'Terhathum'),
(97, 1, 'Udayapur'),
(98, 2, 'Saptari'),
(99, 2, 'Siraha'),
(100, 2, 'Dhanusa'),
(101, 2, 'Mahottari'),
(102, 2, 'Sarlahi'),
(103, 2, 'Rautahat'),
(104, 4, 'Lamjung'),
(105, 4, 'Syangja'),
(106, 4, 'Tanahu'),
(107, 4, 'Nawalpur'),
(108, 4, 'Baglung'),
(109, 4, 'Myagdi'),
(110, 4, 'Parbat'),
(111, 4, 'Mustang'),
(112, 5, 'Kapilvastu'),
(113, 5, 'Parasi'),
(114, 5, 'Rupandehi'),
(115, 5, 'Arghakhanchi'),
(116, 5, 'Gulmi'),
(117, 5, 'Pyuthan'),
(118, 5, 'Rolpa'),
(119, 5, 'East Rukum'),
(120, 5, 'Banke'),
(121, 5, 'Bardiya'),
(122, 6, 'West Rukum'),
(123, 6, 'Salyan'),
(124, 6, 'Dolpa'),
(125, 6, 'Kalikot'),
(126, 6, 'Mugu'),
(127, 6, 'Surkhet'),
(128, 6, 'Dailekh'),
(129, 6, 'Jajarkot'),
(130, 7, 'Accham'),
(131, 7, 'Bajhang'),
(132, 7, 'Bajura'),
(133, 7, 'Kanchanpur'),
(134, 7, 'Dadeldhura'),
(135, 7, 'Baitadi'),
(136, 7, 'Darchula');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `CONTACT` text NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `MESSAGE` text NOT NULL,
  `STATUS` text NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `NAME`, `CONTACT`, `EMAIL`, `MESSAGE`, `STATUS`, `LOGS`) VALUES
(5, 'Bishal Adhikari', '9841234566', 'bizzadhk@gmail.com', 'THIS IS A TEST MESSAGE.', '0', '2020-11-09 21:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `PROVINCE_ID` int(11) NOT NULL,
  `PROVINCE_NAME` varchar(150) NOT NULL,
  `COUNTRY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`PROVINCE_ID`, `PROVINCE_NAME`, `COUNTRY_ID`) VALUES
(1, 'Province No. 1', 1),
(2, 'Province No. 2', 1),
(3, 'Province No. 3', 1),
(4, 'Province No. 4', 1),
(5, 'Province No. 5', 1),
(6, 'Province No. 6', 1),
(7, 'Province No. 7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BUNIT` int(11) NOT NULL,
  `HOSP` text NOT NULL,
  `DISTRICT` varchar(150) NOT NULL,
  `DOC` varchar(150) NOT NULL,
  `RDATE` date NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CADDRESS` text NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `CON1` varchar(150) NOT NULL,
  `CON2` varchar(150) NOT NULL,
  `REASON` text NOT NULL,
  `PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 0,
  `CDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`ID`, `NAME`, `GENDER`, `BLOOD`, `BUNIT`, `HOSP`, `DISTRICT`, `DOC`, `RDATE`, `CNAME`, `CADDRESS`, `EMAIL`, `CON1`, `CON2`, `REASON`, `PIC`, `STATUS`, `CDATE`) VALUES
(1, 'Wangle Wagle', 'Male', 'B+', 4, 'Kirtipur Hospital', 'Kathmandu', 'Govinda KC', '2020-11-11', 'Bidur Acharya', 'Kalanki, Kathmandu', 'adharyabidyour@gmail.com', '9865389756', '9841987065', 'Accident', 'request_image/235oldman-sub.png', 0, '0000-00-00'),
(2, 'testing', 'Female', 'O+', 5, 'Quo culpa ut quibus', 'Deserunt quo enim ut', 'Aspernatur tenetur u', '2022-09-19', 'Drew Quinn', 'Deserunt sequi ad el', 'bele@mailinator.com', '9807393225', '9845255248', 'Veritatis distinctio', 'request_image/360Screen Shot 2021-09-20 at 3.46.37 PM.png', 0, '2022-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AREA_ID`);

--
-- Indexes for table `blood_campaign`
--
ALTER TABLE `blood_campaign`
  ADD PRIMARY KEY (`DONOR_ID`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`DONOR_ID`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`COUNTRY_ID`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DISTRICT_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`PROVINCE_ID`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `AREA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_campaign`
--
ALTER TABLE `blood_campaign`
  MODIFY `DONOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `DONOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `COUNTRY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DISTRICT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `PROVINCE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
