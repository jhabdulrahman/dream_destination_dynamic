-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 29, 2020 at 12:42 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dream destination`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL auto_increment,
  `hname` varchar(255) NOT NULL,
  `hplace` varchar(255) NOT NULL,
  `haddress` varchar(255) NOT NULL,
  `himg` varchar(255) NOT NULL,
  `hrate` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hname`, `hplace`, `haddress`, `himg`, `hrate`) VALUES
(1, 'S.K Cottage', 'ooty', 'Set in Ooty, within 3.2 km of Ooty Lake and 2.3 km of Ooty Bus Station, S.K Cottage offers accommodation with a shared lounge and free WiFi as well as free private parking for guests who drive.', 'images/trip_img1.jpg', '8.9'),
(2, 'Tulips Elkhill Resorts ', 'ooty', 'Situated in Ooty, 2.7 km from Ooty Lake, Tulips Elkhill Resorts features accommodation with a restaurant, free private parking, a fitness centre and a shared lounge.', 'images/trip_img4.jpg', '8.8'),
(3, 'smile stone residency', 'ooty', 'Situated in Ooty, 3.3 km from Ooty Lake, smile stone residency provides accommodation with free WiFi and free private parking.', 'images/trip_img3.jpg', '7.0'),
(4, ' Hotel City Palace', 'ooty', 'Hotel City Palace is situated in Ooty, within 600 metres of Ooty Lake and a 3-minute walk of Ooty bus station and railway station.', 'images/trip_img2.jpg', '7.9'),
(5, 'Tulips Valley View Resorts', 'ooty', 'Located in Ooty, 6.4 km from Ooty Lake, Tulips valley view resorts features a terrace and views of the mountain. Guests can enjoy the on-site restaurant.', 'images/trip_img5.jpg', '6.9'),
(6, 'mystique inn', 'ooty', 'Set in Ooty, 3.1 km from Ooty Lake, mystique inn offers accommodation with free WiFi and free private parking. All rooms feature a TV with cable channels and a private bathroom.', 'images/trip_img6.jpg', '7.0'),
(7, 'FabHotel Khems', 'ooty', 'Featuring 3-star accommodation, FabHotel Khems is situated in Ooty, 3.8 km from Ooty Lake and 2 km from Ooty Bus Station.', 'images/trip_img7.jpg', '8.5'),
(8, 'Olives Pleasant Stays', 'ooty', 'Westbury Road 157-D Next to cocoapods, 643001 Ooty, India Westbury Road 157-D Next to cocoapods, 643001 Ooty, India ', 'images/trip_img8.jpg', '6.0'),
(9, 'Zostel Ooty', 'ooty', ' 217, Dasaprakash road, Minerva house, opp. Nizam school, behind Club Mahindra Derby Green,, 643003 Ooty, India', 'images/trip_img10.jpg', '9.0'),
(10, 'The Abode', 'ooty', '14F, Arni House Rd, Stone House Area, Kil Kodappamund, 643002 Ooty, India ', 'images/trip_img11.jpg', '7.9'),
(11, 'Emmel Dwellings', 'munnar', ' Emmel, 10/684, Tea County Road, Opposite KTDC Tea County, Ikka Nagar, 685612 Munnar, India', 'images/img_munnar1.jpg', '7.0'),
(12, 'Treebo Trend Misty Garden Resorts', 'munnar', 'Set in Munnar, Treebo Trend Misty Garden Resorts & Spa offers 3 accommodation with private balconies.', 'images/img_munnar02.jpg', '8.5'),
(13, ' Pepper Tree Munnar', 'munnar', 'Offering lake views, Pepper Tree Munnar is an accommodation set in Munnar, 38 km from Anamudi Peak and 46 km from Eravikulam National Park.', 'images/img_munnar3.jpg', '7.1'),
(14, 'Landy Queen', 'munnar', 'Set 2.4 km from Munnar Tea Museum, Landy Queen offers accommodation with free WiFi and free private parking. There is a fully equipped private bathroom with shower and free toiletries.', 'images/img_munnar4.jpg', '8.4'),
(15, 'Zina Cottage', 'munnar', 'Offering a garden and garden view, Zina Cottage is situated in Munnar, 3.5 km from Munnar Tea Museum and 12 km from Mattupetty Dam.', 'images/img_munnar5.jpg', '9.6'),
(16, 'Cicily Cottage', 'munnar', 'Located in Munnar, 2.8 km from Munnar Tea Museum, Cicily Cottage provides accommodation with free WiFi and free private parking.', 'images/img_munnar6.jpg', '7.8'),
(17, 'hostel flutterby', 'munnar', 'Set within 15 km of Munnar Tea Museum and 24 km of Mattupetty Dam, hostel flutterby in Munnar provides a garden and rooms with free WiFi.', 'images/img_munnar7.jpg', '7.0'),
(18, 'Golden Green', 'munnar', 'Located in Munnar, 9 km from Munnar Tea Museum, Golden Green provides accommodation with a restaurant, free private parking and a garden.', 'images/img_munnar8.jpg', '6.9'),
(19, 'The Wayside Cottage', 'munnar', 'Situated in Munnar in the Kerala region, The Wayside Cottage features accommodation with free WiFi and free private parking. The farm stay offers a halal or vegetarian breakfast.', 'images/img_munnar9.jpg', '8.0'),
(20, 'Rheinberg Town Haus', 'munnar', 'Rheinberg Town Haus is located in the lush green Munnar, just 500 metres from the Munnar Tea Musuem. Free WiFi access is available. Each room here will provide you with a satellite TV.', 'images/img_munnar10.jpg', '7.0'),
(21, 'Rethm', 'kodaikanal', 'Set in Kodaik?n?l, within 3.3 km of Bear Shola Falls and 3.7 km of Kodaikanal Lake, Rethm offers accommodation with a garden and as well as free private parking for guests who drive.', 'images/img_kodaikanal10.jpg', '71'),
(22, 'Holiday Home Resort', 'kodaikanal', 'Located just 3 km from the famous Pillar Rock, Holiday Home offers comfortable accommodation in the scenic city of Kodaikanal. Free WiFi access is available in the public areas of this resort.', 'images/img_kodaikanal9.jpg', '6.9'),
(23, 'Kumaragiri Holidays By Atlashopper', 'kodaikanal', 'Situated in Kodaik?n?l, 2.5 km from Bear Shola Falls, Kumaragiri Holidays By Atlashopper features accommodation with a restaurant, free private parking, a garden and a terrace.', 'images/img_kodaikanal2.jpg', '7.8'),
(24, 'Western Valley Homestays', 'kodaikanal', 'Situated in Kodaik?n?l, 2.4 km from Kodaikanal Lake, Western Valley Homestays features accommodation with a shared lounge, free private parking, a garden and a terrace.', 'images/img_kodaikanal3.jpg', '8.8'),
(25, 'FabHotel Tranquil Heights Kodaikanal ', 'kodaikanal', 'Located in Kodaik?n?l, within 2.3 km of Bear Shola Falls and 2.6 km of Kodaikanal Lake, FabHotel Tranquil Heights Kodaikanal provides accommodation with a garden and free WiFi as well as free private...', 'images/img_kodaikanal8.jpg', '7.0'),
(26, 'Bruton resorts', 'kodaikanal', 'Located in Kodaik?n?l, 700 metres from Bear Shola Falls, Bruton resorts provides accommodation with a restaurant, free private parking and a garden.', 'images/img_kodaikanal7.jpg', '8.9'),
(27, 'Cornerstone', 'kodaikanal', 'Set in Kodaik?n?l, within 700 metres of Kodaikanal Bus Stand and less than 1 km of Kodaikanal Lake, Cornerstone offers accommodation with a restaurant and free WiFi as well as free private parking for...', 'images/img_kodaikanal6.jpg', '8.7'),
(28, 'Zostel Kodaikanal', 'kodaikanal', 'Situated in Kodaik?n?l, 1.8 km from Kodaikanal Bus Stand, Zostel Kodaikanal features accommodation with a restaurant, free private parking, a shared lounge and a garden.', 'images/img_kodaikanal5.jpg', '9.0'),
(29, 'Hotel Jc Grand', 'kodaikanal', '  Reservation possible without a credit card Booked 3 times in the last 6 hours Last booked 2 hours ago', 'images/img_kodaikanal4.jpg', '7.0'),
(30, 'Path Of Mystic Meditation Resort ', 'kodaikanal', 'Set in Kodaik?n?l, 4.4 km from Silver Cascade Falls, Path Of Mystic Meditation Resort offers accommodation with a restaurant, free private parking, a shared lounge and a garden.', 'images/img_kodaikanal1.jpg', '7.7'),
(31, 'Comforts Hostel', 'mysore', 'Comforts Hostel has a restaurant, free bikes, a shared lounge and garden in Mysore.', 'images/img_mysore9.jpg', '8.9'),
(32, 'Hotel MB International Palace Side', 'mysore', 'Situated 500 metres from Mysore Palace and the nearest bus station, Hotel MB International Palace Side features a restaurant, disability friendly facilities and free private parking.', 'images/img_mysore1.jpg', '8.8'),
(33, 'Hotel MB International', 'mysore', 'Hotel M.B. International offers modern, air-conditioned rooms and suites with free Wi-Fi on Bangalore-Nilgiri Road. The hotel also has an in house restaurant and provides free private parking. St.', 'images/img_mysore10.jpg', '8.5'),
(34, ' hotel sangeeth lodging ', 'mysore', 'Situated in Mysore, near Mysore Palace, Dodda Gadiyara and Mysore Bus Stand, hotel sangeeth lodging features free WiFi, and guests can enjoy a terrace.', 'images/img_mysore8.jpg', '9.5'),
(35, 'GEMARS Comforts', 'mysore', 'Set in Mysore in the Karnataka region, with Civil Court Mysuru nearby, GEMARS Comforts offers accommodation with free WiFi and free private parking.', 'images/img_mysore6.jpg', '7.0'),
(36, 'The Bunkers Ashram', 'mysore', 'Set in Mysore, 3.3 km from Mysore Palace, The Bunkers Ashram offers accommodation with a shared lounge, free private parking, a garden and a terrace.', 'images/img_mysore7.jpg', '9.1'),
(37, 'The Mansion 1907 ', 'mysore', 'Offering a terrace and views of the garden, The Mansion 1907 is situated in Mysore, 1.2 km from Mysore Palace.', 'images/img_mysore3.jpg', '6.9'),
(38, 'Grand Mercure Mysore ', 'mysore', 'Located in the heart of Mysuru at New Sayyaji Rao Road, Grand Mercure Mysuru is 2.7 km from St. Philomena’s Church and 3.6 km from Mysore Palace. Booked 6 times in the last 6 hours Last booked 2 hours ago', 'images/img_mysore5.jpg', '8.9'),
(39, ' Country Inn & Suites By Radisson', 'mysore', 'Nestled away and surrounded by lush green canopies, Country Inn & Suites By Radisson offers elegantly furnished rooms with free Wi-Fi access.', 'images/img_mysore2.jpg', '9.6'),
(40, 'Hotel kaveri palace', 'mysore', 'Located within 1.8 km of Mysore Palace and 22 km of Brindavan Garden, Hotel kaveri palace offers rooms with air conditioning and a private bathroom in Mysore.', 'images/img_mysore4.jpg', '8.9'),
(41, 'OAKS VILLA Homestay', 'coonoor', 'Set 4.2 km from Sim''s Park, OAKS VILLA Homestay offers accommodation with a bar, a garden and a 24-hour front desk for your convenience.', 'images/img_coonoor1.jpg', '8.9'),
(42, 'Great Windows Resorts', 'coonoor', 'Set in Coonoor, 7 km from Sim''s Park, Great Windows Resorts offers accommodation with a restaurant, free private parking, a garden and a terrace.', 'images/img_coonoor2.jpg', '9.1'),
(43, 'Sunvalley Homestay', 'coonoor', 'Situated 7 km from Sim''s Park, Sunvalley Homestay features accommodation with a restaurant, a garden and a 24-hour front desk for your convenience.', 'images/img_coonoor3.jpg', '6.9'),
(44, 'Hotel Vivek ', 'coonoor', 'Situated 7 km from Sim''s Park, Sunvalley Homestay features accommodation with a restaurant, a garden and a 24-hour front desk for your convenience.', 'images/img_coonoor4.jpg', '8.9'),
(45, 'JJS Cottages', 'coonoor', 'Set 2.6 km from Sim''s Park, JJS Cottages offers accommodation with a shared lounge, a garden and room service for your convenience. The lodge features both WiFi and private parking free of charge.', 'images/img_coonoor5.jpg', '7.8'),
(46, 'The Birdhouse Backpackers Hostel', 'coonoor', 'Set in Coonoor, 2.9 km from Sim''s Park, The Birdhouse Backpackers Hostel offers accommodation with a shared lounge, free private parking and a garden. Guests can enjoy garden views.', 'images/img_coonoor6.jpg', '6.9'),
(47, 'Park Corner Guesthouse', 'coonoor', 'Park Corner Guesthouse is situated in Coonoor, 500 metres from Sim''s Park. Free private parking is available on site. There is room service at the property.', 'images/img_coonoor7.jpg', '9.5'),
(48, 'Burrow', 'coonoor', 'Located in Coonoor, 2.3 km from Sim''s Park, Burrow provides accommodation with a restaurant, free private parking, a bar and a garden.', 'images/img_coonoor8.jpg', '8.9'),
(49, 'Bearcountry Homestay', 'coonoor', 'Situated in Coonoor in the Tamil Nadu Region, 1.8 km from Sim''s Park, Bearcountry Homestay features a terrace and views of the mountains, tea garden and a mini garden.', 'images/img_coonoor9.jpg', '9.1'),
(50, 'Storyteller', 'coonoor', 'Set 1.5 km from Sim''s Park in Coonoor, Storyteller features an in-house restaurant for resident guests. Free private parking is available on site. The rooms come with a flat-screen TV.', 'images/img_coonoor10.jpg', '8.9');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `password`) VALUES
(13, 'ibu', 'ibu@gmail.com', 2147483647, '123'),
(14, 'minion', 'minion@gmail.com', 2147483647, '123'),
(15, 'dream', 'dream@gmail.com', 2147483647, '123'),
(18, 'abdul', 'abdul@gmail.com', 2147483647, '123'),
(19, 'Jamal', 'jamalmuzammil@gmail.', 2147483647, '123'),
(20, 'Mohamed', 'md@gmail.com', 2147483647, '1234'),
(21, 'minion', 'minion@gmail.com', 2147483647, '123');
