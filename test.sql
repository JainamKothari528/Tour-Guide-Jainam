-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2020 at 04:32 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure1` (IN `rname` VARCHAR(70), IN `rmobileno` VARCHAR(16), IN `rstate` VARCHAR(50), IN `rcity` VARCHAR(50), IN `remailid` VARCHAR(60), IN `rpassword` VARCHAR(16))  NO SQL
INSERT INTO Registration(R_name,R_mobileno,s_id,c_id,R_emailid,R_password) VALUES (rname,rmobileno,rstate,rcity,remailid,rpassword)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure2` (IN `sid` INT(10))  NO SQL
select * from City where s_id=sid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure3` (IN `sid` INT(10), IN `sname` INT(30))  NO SQL
SELECT * FROM State$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure4` (IN `feename` VARCHAR(70), IN `feeemail` VARCHAR(60), IN `feedes` VARCHAR(250))  NO SQL
INSERT INTO Feedback (feedback_name, feedback_email_id,feedback_description) VALUES (feename,feeemail,feedes)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure5` (IN `tname` VARCHAR(70), IN `timg` VARCHAR(70), IN `tadd` VARCHAR(100), IN `tdes` TEXT, IN `sid` INT(10), IN `mname` VARCHAR(100), IN `mimg` VARCHAR(70), IN `madd` VARCHAR(100), IN `mdes` TEXT, IN `sd` INT(30))  NO SQL
INSERT INTO Tracking(track_name,track_image,track_address,track_des,s_id,mountain_name,mountain_image,mountain_add,mountain_des,s_id) VALUES (tname,timg,tadd,tdes,sid,mname,mimg,madd,mdes,sd)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure6` (IN `sname` VARCHAR(30))  NO SQL
INSERT INTO State(s_name) VALUES (sname)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure7` (IN `cname` VARCHAR(30), IN `sid` INT(10))  NO SQL
INSERT INTO City(c_name,s_id) VALUES (cname,sid)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `City`
--

CREATE TABLE `City` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `City`
--

INSERT INTO `City` (`c_id`, `c_name`, `s_id`) VALUES
(1, 'Surat', 1),
(2, 'Ahmedabad', 1),
(3, 'Jaipur', 4),
(4, 'Udaipur', 4),
(5, 'Srinagar', 34),
(6, 'Jammu', 34),
(7, 'Anantnag', 34),
(8, 'Agra', 28),
(9, 'Varansi', 28),
(10, 'Allahabad', 28),
(11, 'Ayodhya ', 28),
(12, 'Jhansi', 28),
(13, 'Meerut', 28),
(14, 'Kargil', 35),
(15, 'Leh', 35),
(16, 'Kullu', 12),
(17, 'Shimla', 12),
(18, 'Manali', 12),
(19, 'Gangtok', 24),
(20, 'Rangpo', 24),
(21, 'Haridwar', 29),
(22, 'Rishikesh', 29),
(23, 'Rudrapragya', 29),
(24, 'Chamoli', 29),
(25, 'Baroda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Contact_us`
--

CREATE TABLE `Contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(25) NOT NULL,
  `contact_email_id` varchar(30) NOT NULL,
  `contact_phone_no` varchar(13) NOT NULL,
  `contact_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact_us`
--

INSERT INTO `Contact_us` (`contact_id`, `contact_name`, `contact_email_id`, `contact_phone_no`, `contact_des`) VALUES
(2, 'q', 'q@gmail.com', '123', 'xAQS21fweargfr'),
(4, 'qa', 'aq@g.g', '12', 'sffwdsfzaew\r\ngszvzregfaze\r\n\r\nszgezsgaerg'),
(5, 'Alley', 'Alley@gmail.com', '7657890654', 'Please guide me some more about tour things'),
(8, 'cdcw', 'scwdcw@gmail.com', '42376423', 'cdvbgbfv '),
(9, 'cske', 'qw@gmail.com', '4184994814', 'xq2xffrerferf'),
(10, 'sqdsa', 'ftohjb@gmail.com', '19384832', 'zxcvbnmlkjhgfdsaqwertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `feedback_id` int(10) NOT NULL,
  `feedback_name` varchar(70) NOT NULL,
  `feedback_email_id` varchar(60) NOT NULL,
  `feedback_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`feedback_id`, `feedback_name`, `feedback_email_id`, `feedback_description`) VALUES
(1, 'jainam', 'jainam.k.addweb@gmail.com', 'This is very nice website for touring places, hotels and tour guides'),
(2, 'fdcfae', 'dcdve@gmail.com', 'cdffevrsxcdfvrv\r\ndfvdfvs'),
(3, 'zAxw', 'dfferad@gmail.com', 'zx'),
(4, 'csdvrfsdcvd', 'fwadfh@gmail.com', 'sdccdfrfvse'),
(5, 'vfdv', 'sds@fgdfv.frgfddv', 'ferfcregexzz'),
(6, 'sdcac', 'dweferrf@dcs.csdc', 'dsvdfvvbdvsxc');

-- --------------------------------------------------------

--
-- Table structure for table `Guide`
--

CREATE TABLE `Guide` (
  `guide_id` int(10) NOT NULL,
  `guide_name` varchar(70) NOT NULL,
  `guide_mobile_no` varchar(16) NOT NULL,
  `guide_email_id` varchar(70) NOT NULL,
  `c_id` int(20) NOT NULL,
  `guide_image` varchar(70) DEFAULT NULL,
  `guide_description` text NOT NULL,
  `guide_experience` int(11) NOT NULL,
  `guide_language` varchar(100) DEFAULT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Guide`
--

INSERT INTO `Guide` (`guide_id`, `guide_name`, `guide_mobile_no`, `guide_email_id`, `c_id`, `guide_image`, `guide_description`, `guide_experience`, `guide_language`, `s_id`) VALUES
(1, 'ranjit', '9922334455', 'ranjit@gmail.com', 3, 'ranjit.jpg', 'This guide is live in state Rajasthan.', 2, 'Marwadi,Hindi', 4),
(2, 'Kavi Raval', '27480054', 'kavi.raval12@gmail.com', 2, 'kavi.jpeg', 'This guide is live in state gujarat and city Ahmedabad.', 4, 'Gujarati,Hindi,English', 1),
(3, 'Viney', '21314253', 'viney52@gmail.com', 11, 'vinay.jpg', 'This guide is live in state gujarat and city Surat.', 8, 'Gujarati,Hindi,English', 28),
(4, 'Jay Makadiya', '1223436509', 'jay@gmail.com', 22, 'jay.jpg', 'terftrfcrefcvfdvbfgbrggbs', 11, 'Gujarati,Hindi,English', 29),
(7, 'jj', '634', 'j@gmail.com', 1, 'unity.jpg', 'j', 8, 'hindi,gujarati', 1),
(8, 'j', '7788', 'jdk@gmail.com', 1, 'jain.jpg', 'jdk', 7, 'hindi,english,marwadi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Historical`
--

CREATE TABLE `Historical` (
  `historical_id` int(10) NOT NULL,
  `historical_name` varchar(100) NOT NULL,
  `historical_image` varchar(70) NOT NULL,
  `historical_address` varchar(100) NOT NULL,
  `historical_des` text NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Historical`
--

INSERT INTO `Historical` (`historical_id`, `historical_name`, `historical_image`, `historical_address`, `historical_des`, `s_id`) VALUES
(1, 'Qutub Minar', 'qutubminar.jpg', 'Seth Sarai, Mehrauli, New Delhi', 'The Qutub Minar, another UNESCO World Heritage Site, is an incredible example of Indo-Muslim architecture that touches the skies at an incredible height of 240ft. It is named after Qutub-ud-din Aibak, the first Muslim ruler of North India.', 36),
(2, 'Red Fort', 'redfort.jpg', 'Netaji Subhash Marg, Lal Qila, Chandni Chowk, New Delhi', 'Red Fort, a UNESCO World Heritage Site, is a symbol of the Mughal Empire at its peak. The enormous size, aesthetic proportions and style, all represent an age of unrestrained opulence. Amidst the unceasing bustle of Old Delhi, stands this colossal monument, evoking nothing but admiration from the onlookers.', 36);

-- --------------------------------------------------------

--
-- Table structure for table `Hotels`
--

CREATE TABLE `Hotels` (
  `hotel_id` int(10) NOT NULL,
  `hotel_image` varchar(70) DEFAULT NULL,
  `hotel_name` varchar(70) NOT NULL,
  `hotel_address` varchar(100) NOT NULL,
  `hotel_email_id` varchar(70) NOT NULL,
  `hotel_mobile_no` int(16) NOT NULL,
  `hotel_category` varchar(20) NOT NULL,
  `c_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hotels`
--

INSERT INTO `Hotels` (`hotel_id`, `hotel_image`, `hotel_name`, `hotel_address`, `hotel_email_id`, `hotel_mobile_no`, `hotel_category`, `c_id`, `s_id`) VALUES
(1, 'prasang.jpg', 'Prasang', 'Prasang Presidency RCTI College Road, OPP/Unique City Homes, Ghatlodia', 'prasang@gmail.com', 27543444, '4 Star', 2, 1),
(2, 'taj-lake.jpg', 'Taj Lake Palace Hotel', 'Pichhola Lake PO Box 5\r\nUdaipur, India 313001', 'taj.lake.palace@gmail.com', 29424288, '5 Star', 4, 4),
(3, 'royal.jpg', 'Royal Orchid Central', 'Durgapura Flyover, Tonk Rd, Durgapura Jaipur', 'resv.hroj@royalorchidhotel.com', 80032999, '4 Star', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Mountains`
--

CREATE TABLE `Mountains` (
  `mountain_id` int(10) NOT NULL,
  `mountain_name` varchar(100) NOT NULL,
  `mountain_image` varchar(70) DEFAULT NULL,
  `mountain_add` varchar(100) NOT NULL,
  `mountain_des` text NOT NULL,
  `s_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mountains`
--

INSERT INTO `Mountains` (`mountain_id`, `mountain_name`, `mountain_image`, `mountain_add`, `mountain_des`, `s_id`) VALUES
(1, 'Vaishno Devi ', 'vaishnodevi.png', 'Shri Mata Vaishno Devi Shrine Board Katra, J&K', 'The temple of Mata Vaishno Devi is very ancient according to the study conducted by the geologists. Legend has it that Mata Vaishno Devi had incarnated as a beautiful princess in Treta Yuga as a Shakti of Mother Parvati, Saraswati and Lakshmi for the welfare of mankind.', 34),
(2, 'Ladakh', 'ladakh.jpg', 'Ladakh', 'Ladakh came under Dogra rule and was later incorporated into the princely state of Jammu and Kashmir under British suzerainty. It still maintained considerable autonomy and relations with Tibet.Ladakh came under Dogra rule and was later incorporated into the princely state of Jammu and Kashmir under British suzerainty. It still maintained considerable autonomy and relations with Tibet.', 34),
(3, 'Gangtok', 'Gangtok.jpg', 'Upper M G Marg Gangtok, Sikkim', 'Gangtok rose to prominence as a popular Buddhist pilgrimage site after the construction of the Enchey Monastery in 1840.', 24),
(4, 'Pahalgam', 'pahalgam.jpg', 'Pahalgam, Anantnag, Jammu and Kashmir', 'The origin of Pahalgam is obscure. Mughal rulers ruled this region in the medieval period. It was later a part of the Kingdom of Kashmir, which was ruled by local Hindu rulers.', 24),
(5, 'Himalayan', 'himalay.jpg', 'Karakoram Mountains', 'The Himalayan mountain range and Tibetan plateau have formed as a result of the collision between the Indian Plate and Eurasian Plate which began 50 million years ago and continues today. 225 million years ago (Ma) India was a large island situated off the Australian coast and separated from Asia by the Tethys Ocean.\r\n\r\n', 29),
(6, 'Garhwal & kumaon', 'kumaon.jpg', 'Uttarakhand', 'The history of small kingdoms of Kumaon and Garhwal extends way back. Nepal conquered Kumaon in 1791 and Garhwal in 1803. Following the Anglo-Nepal war \"Sugauli Treaty\" was signed in 1816 which made Nepal to give up its rights from these area to Britain.', 29);

-- --------------------------------------------------------

--
-- Table structure for table `Place`
--

CREATE TABLE `Place` (
  `place_id` int(10) NOT NULL,
  `place_image` varchar(70) DEFAULT NULL,
  `place_name` varchar(70) NOT NULL,
  `place_address` varchar(100) NOT NULL,
  `place_descripition` varchar(400) NOT NULL,
  `c_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Place`
--

INSERT INTO `Place` (`place_id`, `place_image`, `place_name`, `place_address`, `place_descripition`, `c_id`, `s_id`) VALUES
(1, 'Siddi-Saiyyedi.jpg', 'Sidi Saiyyed Mosque', 'Gheekanta, Ahmedabad', 'The Sidi Saiyyed Mosque, popularly known as Sidi Saiyyid ni Jali locally, built in 1572-73 AD (Hijri year 980), is one of the most famous mosques of Ahmedabad', 2, 1),
(2, 'Dutch-Gardens.jpg', 'Dutch Garden', 'Dutch garden road, Nanpura, Surat', 'This park has a beautiful and nature-oriented environment. Besides the beauty of the place, it has a rich history, which gives a motive to tourists to explore.', 1, 1),
(3, 'nanghar.jpg', 'Nahargarh Fort', 'Krishna Nagar, Brahampuri', 'Nahargarh Fort stands on the edge of the Aravalli Hills, overlooking the city of Jaipur in the Indian state of Rajasthan', 3, 4),
(4, 'images/places/Sabarmatiashram.jpg', 'Sabarmati Ashram', 'Gandhi Ashram, Gandhi Smarak Sangrahalaya Ahmedabad', 'Once the residence of Mahatma Gandhi and his wife Kasturba, this undoubtedly is the biggest tourist attraction situated in the suburb of Ahmedabad', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `R_id` int(11) NOT NULL,
  `R_name` varchar(70) NOT NULL,
  `R_mobileno` varchar(16) NOT NULL,
  `s_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `R_emailid` varchar(70) NOT NULL,
  `R_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`R_id`, `R_name`, `R_mobileno`, `s_id`, `c_id`, `R_emailid`, `R_password`) VALUES
(1, 'Jain', '8320788', 4, 4, 'jainamkothari1999@gmail.com', '123'),
(2, 'Hardik', '7878256585', 1, 1, 'hardik.r.addweb@gmail.com', 'addweb123'),
(3, 'aqw', '21', 4, 3, 'aq@gmail.com', '1234'),
(4, 'cwdf', '1423', 1, 2, 'extbcet@xvtgbxtg.rvxrgtrtx', '111'),
(12, 'xcv', '312', 4, 4, 'zse@gmail.com', 'zse'),
(14, 'ave', '243', 28, 8, 'afxse@gmail.com', '2121'),
(15, 'dvfdvew', '1235', 34, 6, 'dvhy@hn.njyu', 'gh vff '),
(16, 'jdk', '1029384756', 28, 9, 'jdk@gmail.com', '121212');

-- --------------------------------------------------------

--
-- Table structure for table `State`
--

CREATE TABLE `State` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `State`
--

INSERT INTO `State` (`s_id`, `s_name`) VALUES
(1, 'Gujarat'),
(4, 'Rajasthan'),
(5, 'Andhra Pradesh '),
(6, 'Goa'),
(7, 'Arunachal Pradesh'),
(8, 'Assam'),
(9, 'Bihar'),
(10, 'Chhattisgarh'),
(11, 'Haryana'),
(12, 'Himachal Pradesh'),
(13, 'Jharkhand '),
(14, 'Karnataka'),
(15, 'Kerala'),
(16, 'Madhya Pradesh'),
(17, 'Maharashtra '),
(18, 'Manipur'),
(19, 'Meghalaya'),
(20, 'Mizoram'),
(21, 'Nagaland'),
(22, 'Odisha'),
(23, 'Punjab'),
(24, 'Sikkim'),
(25, 'Tamil Nadu'),
(26, 'Telangana'),
(27, 'Tripura'),
(28, 'Uttar Pradesh'),
(29, 'Uttarakhand '),
(30, 'West Bengal '),
(31, 'Andaman'),
(32, 'Nicobar'),
(33, 'Dadra,Nagar-Haveli,Daman,Diu'),
(34, 'Jammu and Kashmir'),
(35, 'Ladakh'),
(36, 'Delhi'),
(37, 'Puducherry'),
(38, 'Lakshadweep');

-- --------------------------------------------------------

--
-- Table structure for table `SummerRest`
--

CREATE TABLE `SummerRest` (
  `sumres_id` int(10) NOT NULL,
  `sumres_name` varchar(70) NOT NULL,
  `sumres_image` varchar(70) DEFAULT NULL,
  `sumres_address` varchar(100) NOT NULL,
  `sumres_des` text NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SummerRest`
--

INSERT INTO `SummerRest` (`sumres_id`, `sumres_name`, `sumres_image`, `sumres_address`, `sumres_des`, `s_id`) VALUES
(1, 'Ladakh', 'Ladakh.jpg', 'Leh', 'Be it adventure, nature, tranquility or simply scenic views, this place has it all. The perfect destination in India during summers, this place is extremely harsh in terms of weather conditions and yet it tops the list all because of its exceptional beauty.', 35),
(2, 'Manali', 'Manali.jpg', 'Kullu Valley in the Beas River Valley', 'If it is summer in India, you cannot find a destination more aptly suitable for a vacation than Manali.', 12),
(3, 'Shimala', 'Shimla.jpg', 'Himachal Pradesh, in the Himalayan foothills', 'Known for its scenic beauty, this tinsel town of the Himachal Pradesh has now become an affluent city owing to the number of attractions it has to offer the tourists around the year.', 12),
(4, 'Gangtok', 'Gangtok.jpg', 'Sikkim', 'The best thing about a place as mystifying as Sikkim is the fact that even though it is inexplicably beautiful, yet it is one of the most unexplored places in India.', 24),
(5, 'Rangpo', 'Rangpo.png', 'Sikkim', 'Rangpo is a town in East Sikkim district in the Indian state of Sikkim.', 24),
(6, 'Badrinath Temple', 'Badrinath.jpg', 'Badri to Mata Murti road, Badrinath, Uttarakhand', 'Badrinath is a holy town and a nagar panchayat in Chamoli district in the state of Uttarakhand, India.', 29),
(7, 'Rishikesh Temple', 'Rishikesh.jpg', 'Jhanda Chowk', 'Known for being the top destination in India for adventure sports, this place has the touch of religious significance too.', 29);

-- --------------------------------------------------------

--
-- Table structure for table `Tracking`
--

CREATE TABLE `Tracking` (
  `track_id` int(10) NOT NULL,
  `track_name` varchar(70) NOT NULL,
  `track_image` varchar(70) DEFAULT NULL,
  `track_address` varchar(100) NOT NULL,
  `track_des` text NOT NULL,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tracking`
--

INSERT INTO `Tracking` (`track_id`, `track_name`, `track_image`, `track_address`, `track_des`, `s_id`) VALUES
(1, 'Vaishno Devi Temple', 'vaishnodevi.png', 'Katra-Reasi Road Bhavan, Katra, Jammu City', 'Before 30th August, 1986 i.e. prior to the take over of the management of Shrine by the Board, the track was pot-holed, kutcha and littered with loosely laid stones.', 34),
(2, 'Great Lake Trek', 'great-lake.jpg', 'Pathan Colony, Zakura, Srinagar, Jammu and Kashmir', 'The Great Lakes Trek commercially known as Sonamarg-Vishansar-Naranag Trek[1] is an alpine himalayan high-altitude trek in Kashmir Valley in the Indian state of Jammu and Kashmir.', 34),
(3, 'Kajiranga Hills', 'kajiranga.jpg', 'Golaghat, Karbi Anglong and Nagaon district', 'There are no villages within the boundary of the park. However the area outside the boundary of the park is very densely populated. There were 39 villages within a 10 kilometres (6 mi) radius of the park.', 24),
(4, 'Dongri', 'dongri.jpg', 'Tsongmo Lake in East Sikkim apart from Gangtok, Dongri', 'Dongri is a port city in the Mira-Bhayandar municipality of Thane district, situated just north of Gorai, Mumbai. The word \'Dungaree\' (worker\'s overalls worn in Britain) has its origin from Dongri due this genre of garment monolithically being manufactured from textile sectors within the confines of the city.', 24),
(5, 'Amarnath Yatra', 'amarnath-yatra.jpeg', 'Baltal Amarnath Trek, Forest Block, Pahalgam, Jammu and Kashmir', 'Kedarnath is a town in the Indian state of Uttarakhand and has gained importance because of Kedarnath Temple. It is a nagar panchayat in Rudraprayag district.', 29),
(6, 'Gangotri', 'gangotri.jpg', 'Gangotri is a town and a Nagar Panchayat (municipality) in Uttarkashi district', 'Gangotri is a town and a Nagar Panchayat (municipality) in Uttarkashi district in the state of Uttarakhand, India. It is a Hindu pilgrim town on the banks of the river Bhagirathi and origin of river Ganges.', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `City`
--
ALTER TABLE `City`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `Contact_us`
--
ALTER TABLE `Contact_us`
  ADD PRIMARY KEY (`contact_id`),
  ADD UNIQUE KEY `contact_email_id` (`contact_email_id`),
  ADD UNIQUE KEY `contact_phone_no` (`contact_phone_no`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `feedback_email_id` (`feedback_email_id`);

--
-- Indexes for table `Guide`
--
ALTER TABLE `Guide`
  ADD PRIMARY KEY (`guide_id`),
  ADD UNIQUE KEY `guide_mobile_no` (`guide_mobile_no`),
  ADD UNIQUE KEY `guide_email_id` (`guide_email_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `Historical`
--
ALTER TABLE `Historical`
  ADD PRIMARY KEY (`historical_id`);

--
-- Indexes for table `Hotels`
--
ALTER TABLE `Hotels`
  ADD PRIMARY KEY (`hotel_id`),
  ADD UNIQUE KEY `hotel_mobile_no` (`hotel_mobile_no`),
  ADD UNIQUE KEY `hotel_email_id` (`hotel_email_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `Mountains`
--
ALTER TABLE `Mountains`
  ADD PRIMARY KEY (`mountain_id`),
  ADD UNIQUE KEY `mountain_name` (`mountain_name`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `Place`
--
ALTER TABLE `Place`
  ADD PRIMARY KEY (`place_id`),
  ADD UNIQUE KEY `place_name` (`place_name`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`R_id`),
  ADD UNIQUE KEY `R_mobileno` (`R_mobileno`),
  ADD UNIQUE KEY `R_emailid` (`R_emailid`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `State`
--
ALTER TABLE `State`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `SummerRest`
--
ALTER TABLE `SummerRest`
  ADD PRIMARY KEY (`sumres_id`),
  ADD UNIQUE KEY `sumres_name` (`sumres_name`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `Tracking`
--
ALTER TABLE `Tracking`
  ADD PRIMARY KEY (`track_id`),
  ADD UNIQUE KEY `track_name` (`track_name`),
  ADD KEY `s_id` (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `City`
--
ALTER TABLE `City`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `Contact_us`
--
ALTER TABLE `Contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Guide`
--
ALTER TABLE `Guide`
  MODIFY `guide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Historical`
--
ALTER TABLE `Historical`
  MODIFY `historical_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Hotels`
--
ALTER TABLE `Hotels`
  MODIFY `hotel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Mountains`
--
ALTER TABLE `Mountains`
  MODIFY `mountain_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Place`
--
ALTER TABLE `Place`
  MODIFY `place_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `State`
--
ALTER TABLE `State`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `SummerRest`
--
ALTER TABLE `SummerRest`
  MODIFY `sumres_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Tracking`
--
ALTER TABLE `Tracking`
  MODIFY `track_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `City`
--
ALTER TABLE `City`
  ADD CONSTRAINT `City_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`);

--
-- Constraints for table `Guide`
--
ALTER TABLE `Guide`
  ADD CONSTRAINT `Guide_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `City` (`c_id`),
  ADD CONSTRAINT `Guide_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`);

--
-- Constraints for table `Hotels`
--
ALTER TABLE `Hotels`
  ADD CONSTRAINT `Hotels_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `City` (`c_id`),
  ADD CONSTRAINT `Hotels_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`);

--
-- Constraints for table `Mountains`
--
ALTER TABLE `Mountains`
  ADD CONSTRAINT `Mountains_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`);

--
-- Constraints for table `Place`
--
ALTER TABLE `Place`
  ADD CONSTRAINT `Place_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `City` (`c_id`),
  ADD CONSTRAINT `Place_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`);

--
-- Constraints for table `Registration`
--
ALTER TABLE `Registration`
  ADD CONSTRAINT `Registration_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`),
  ADD CONSTRAINT `Registration_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `City` (`c_id`);

--
-- Constraints for table `SummerRest`
--
ALTER TABLE `SummerRest`
  ADD CONSTRAINT `SummerRest_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`);

--
-- Constraints for table `Tracking`
--
ALTER TABLE `Tracking`
  ADD CONSTRAINT `Tracking_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `State` (`s_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
