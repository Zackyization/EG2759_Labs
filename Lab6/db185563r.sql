-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2018 at 01:25 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db185563r`
--
CREATE DATABASE IF NOT EXISTS `db185563r` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db185563r`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `ccost` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `cimage` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cname`, `ccost`, `qty`, `cimage`, `username`, `dated`) VALUES
(1, '', 340238, 1, 'Argentina.png', '', '2018-10-09 01:42:48'),
(2, '', 371362, 1, 'Netherlands.png', 'David', '2018-10-09 07:56:16'),
(3, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-09 11:15:23'),
(4, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-09 11:15:35'),
(5, 'Afghanistan', 5976, 1, 'Afghanistan.png', 'David', '2018-10-10 04:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `Code` char(3) NOT NULL DEFAULT '',
  `Name` char(52) NOT NULL DEFAULT '',
  `Continent` enum('Asia','Europe','North America','Africa','Oceania','Antarctica','South America') NOT NULL DEFAULT 'Asia',
  `SurfaceArea` float(10,2) NOT NULL DEFAULT '0.00',
  `IndepYear` smallint(6) DEFAULT NULL,
  `Population` int(11) NOT NULL DEFAULT '0',
  `LifeExpectancy` float(3,1) DEFAULT NULL,
  `GNP` float(10,2) DEFAULT NULL,
  `image_file` varchar(1000) DEFAULT NULL,
  `Flag` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Code`, `Name`, `Continent`, `SurfaceArea`, `IndepYear`, `Population`, `LifeExpectancy`, `GNP`, `image_file`, `Flag`) VALUES
('AFG', 'Afghanistan', 'Asia', 652090.00, 1919, 22720000, 45.9, 5976.00, 'Afghanistan.png', NULL),
('NLD', 'Netherlands', 'Europe', 41526.00, 1581, 15864000, 78.3, 371362.00, 'Netherlands.png', NULL),
('ANT', 'Netherlands Antilles', 'North America', 800.00, NULL, 217000, 74.7, 1941.00, NULL, NULL),
('ALB', 'Albania', 'Europe', 28748.00, 1912, 3401200, 71.6, 3205.00, 'albania.png', NULL),
('DZA', 'Algeria', 'Africa', 2381741.00, 1962, 31471000, 69.7, 49982.00, 'Algeria.png', NULL),
('ASM', 'American Samoa', 'Oceania', 199.00, NULL, 68000, 75.1, 334.00, NULL, NULL),
('AND', 'Andorra', 'Europe', 468.00, 1278, 78000, 83.5, 1630.00, NULL, NULL),
('AGO', 'Angola', 'Africa', 1246700.00, 1975, 12878000, 38.3, 6648.00, NULL, NULL),
('AIA', 'Anguilla', 'North America', 96.00, NULL, 8000, 76.1, 63.20, NULL, NULL),
('ATG', 'Antigua and Barbuda', 'North America', 442.00, 1981, 68000, 70.5, 612.00, NULL, NULL),
('ARE', 'United Arab Emirates', 'Asia', 83600.00, 1971, 2441000, 74.1, 37966.00, 'UAE.png', NULL),
('ARG', 'Argentina', 'South America', 2780400.00, 1816, 37032000, 75.1, 340238.00, 'Argentina.png', NULL),
('ARM', 'Armenia', 'Asia', 29800.00, 1991, 3520000, 66.4, 1813.00, NULL, NULL),
('ABW', 'Aruba', 'North America', 193.00, NULL, 103000, 78.4, 828.00, NULL, NULL),
('AUS', 'Australia', 'Oceania', 7741220.00, 1901, 18886000, 79.8, 351182.00, NULL, NULL),
('AZE', 'Azerbaijan', 'Asia', 86600.00, 1991, 7734000, 62.9, 4127.00, NULL, NULL),
('BHS', 'Bahamas', 'North America', 13878.00, 1973, 307000, 71.1, 3527.00, NULL, NULL),
('BHR', 'Bahrain', 'Asia', 694.00, 1971, 617000, 73.0, 6366.00, NULL, NULL),
('BGD', 'Bangladesh', 'Asia', 143998.00, 1971, 129155000, 60.2, 32852.00, NULL, NULL),
('BRB', 'Barbados', 'North America', 430.00, 1966, 270000, 73.0, 2223.00, NULL, NULL),
('BEL', 'Belgium', 'Europe', 30518.00, 1830, 10239000, 77.8, 249704.00, 'Belgium.png', NULL),
('BLZ', 'Belize', 'North America', 22696.00, 1981, 241000, 70.9, 630.00, NULL, NULL),
('BEN', 'Benin', 'Africa', 112622.00, 1960, 6097000, 50.2, 2357.00, NULL, NULL),
('BMU', 'Bermuda', 'North America', 53.00, NULL, 65000, 76.9, 2328.00, 'Bermuda.png', NULL),
('BTN', 'Bhutan', 'Asia', 47000.00, 1910, 2124000, 52.4, 372.00, NULL, NULL),
('BOL', 'Bolivia', 'South America', 1098581.00, 1825, 8329000, 63.7, 8571.00, NULL, NULL),
('BIH', 'Bosnia and Herzegovina', 'Europe', 51197.00, 1992, 3972000, 71.5, 2841.00, NULL, NULL),
('BWA', 'Botswana', 'Africa', 581730.00, 1966, 1622000, 39.3, 4834.00, NULL, NULL),
('BRA', 'Brazil', 'South America', 8547403.00, 1822, 170115000, 62.9, 776739.00, 'Brazil.png', NULL),
('GBR', 'United Kingdom', 'Europe', 242900.00, 1066, 59623400, 77.7, 1378330.00, NULL, NULL),
('VGB', 'Virgin Islands, British', 'North America', 151.00, NULL, 21000, 75.4, 612.00, NULL, NULL),
('BRN', 'Brunei', 'Asia', 5765.00, 1984, 328000, 73.6, 11705.00, NULL, NULL),
('BGR', 'Bulgaria', 'Europe', 110994.00, 1908, 8190900, 70.9, 12178.00, NULL, NULL),
('BFA', 'Burkina Faso', 'Africa', 274000.00, 1960, 11937000, 46.7, 2425.00, NULL, NULL),
('BDI', 'Burundi', 'Africa', 27834.00, 1962, 6695000, 46.2, 903.00, NULL, NULL),
('CYM', 'Cayman Islands', 'North America', 264.00, NULL, 38000, 78.9, 1263.00, NULL, NULL),
('CHL', 'Chile', 'South America', 756626.00, 1810, 15211000, 75.7, 72949.00, NULL, NULL),
('COK', 'Cook Islands', 'Oceania', 236.00, NULL, 20000, 71.1, 100.00, NULL, NULL),
('CRI', 'Costa Rica', 'North America', 51100.00, 1821, 4023000, 75.8, 10226.00, NULL, NULL),
('DJI', 'Djibouti', 'Africa', 23200.00, 1977, 638000, 50.8, 382.00, NULL, NULL),
('DMA', 'Dominica', 'North America', 751.00, 1978, 71000, 73.4, 256.00, NULL, NULL),
('DOM', 'Dominican Republic', 'North America', 48511.00, 1844, 8495000, 73.2, 15846.00, NULL, NULL),
('ECU', 'Ecuador', 'South America', 283561.00, 1822, 12646000, 71.1, 19770.00, NULL, NULL),
('EGY', 'Egypt', 'Africa', 1001449.00, 1922, 68470000, 63.3, 82710.00, NULL, NULL),
('SLV', 'El Salvador', 'North America', 21041.00, 1841, 6276000, 69.7, 11863.00, NULL, NULL),
('ERI', 'Eritrea', 'Africa', 117600.00, 1993, 3850000, 55.8, 650.00, NULL, NULL),
('ESP', 'Spain', 'Europe', 505992.00, 1492, 39441700, 78.8, 553233.00, NULL, NULL),
('ZAF', 'South Africa', 'Africa', 1221037.00, 1910, 40377000, 51.1, 116729.00, NULL, NULL),
('ETH', 'Ethiopia', 'Africa', 1104300.00, -1000, 62565000, 45.2, 6353.00, NULL, NULL),
('FLK', 'Falkland Islands', 'South America', 12173.00, NULL, 2000, NULL, 0.00, NULL, NULL),
('FJI', 'Fiji Islands', 'Oceania', 18274.00, 1970, 817000, 67.9, 1536.00, NULL, NULL),
('PHL', 'Philippines', 'Asia', 300000.00, 1946, 75967000, 67.5, 65107.00, NULL, NULL),
('FRO', 'Faroe Islands', 'Europe', 1399.00, NULL, 43000, 78.4, 0.00, NULL, NULL),
('GAB', 'Gabon', 'Africa', 267668.00, 1960, 1226000, 50.1, 5493.00, NULL, NULL),
('GMB', 'Gambia', 'Africa', 11295.00, 1965, 1305000, 53.2, 320.00, NULL, NULL),
('GEO', 'Georgia', 'Asia', 69700.00, 1991, 4968000, 64.5, 6064.00, NULL, NULL),
('GHA', 'Ghana', 'Africa', 238533.00, 1957, 20212000, 57.4, 7137.00, NULL, NULL),
('GIB', 'Gibraltar', 'Europe', 6.00, NULL, 25000, 79.0, 258.00, NULL, NULL),
('GRD', 'Grenada', 'North America', 344.00, 1974, 94000, 64.5, 318.00, NULL, NULL),
('GRL', 'Greenland', 'North America', 2166090.00, NULL, 56000, 68.1, 0.00, NULL, NULL),
('GLP', 'Guadeloupe', 'North America', 1705.00, NULL, 456000, 77.0, 3501.00, NULL, NULL),
('GUM', 'Guam', 'Oceania', 549.00, NULL, 168000, 77.8, 1197.00, NULL, NULL),
('GTM', 'Guatemala', 'North America', 108889.00, 1821, 11385000, 66.2, 19008.00, NULL, NULL),
('GIN', 'Guinea', 'Africa', 245857.00, 1958, 7430000, 45.6, 2352.00, NULL, NULL),
('GNB', 'Guinea-Bissau', 'Africa', 36125.00, 1974, 1213000, 49.0, 293.00, NULL, NULL),
('GUY', 'Guyana', 'South America', 214969.00, 1966, 861000, 64.0, 722.00, NULL, NULL),
('HTI', 'Haiti', 'North America', 27750.00, 1804, 8222000, 49.2, 3459.00, NULL, NULL),
('HND', 'Honduras', 'North America', 112088.00, 1838, 6485000, 69.9, 5333.00, NULL, NULL),
('HKG', 'Hong Kong', 'Asia', 1075.00, NULL, 6782000, 79.5, 166448.00, NULL, NULL),
('SJM', 'Svalbard and Jan Mayen', 'Europe', 62422.00, NULL, 3200, NULL, 0.00, NULL, NULL),
('IDN', 'Indonesia', 'Asia', 1904569.00, 1945, 212107000, 68.0, 84982.00, NULL, NULL),
('IND', 'India', 'Asia', 3287263.00, 1947, 1013662000, 62.5, 447114.00, NULL, NULL),
('IRQ', 'Iraq', 'Asia', 438317.00, 1932, 23115000, 66.5, 11500.00, NULL, NULL),
('IRN', 'Iran', 'Asia', 1648195.00, 1906, 67702000, 69.7, 195746.00, NULL, NULL),
('IRL', 'Ireland', 'Europe', 70273.00, 1921, 3775100, 76.8, 75921.00, NULL, NULL),
('ISL', 'Iceland', 'Europe', 103000.00, 1944, 279000, 79.4, 8255.00, NULL, NULL),
('ISR', 'Israel', 'Asia', 21056.00, 1948, 6217000, 78.6, 97477.00, NULL, NULL),
('ITA', 'Italy', 'Europe', 301316.00, 1861, 57680000, 79.0, 1161755.00, NULL, NULL),
('TMP', 'East Timor', 'Asia', 14874.00, NULL, 885000, 46.0, 0.00, NULL, NULL),
('AUT', 'Austria', 'Europe', 83859.00, 1918, 8091800, 77.7, 211860.00, NULL, NULL),
('JAM', 'Jamaica', 'North America', 10990.00, 1962, 2583000, 75.2, 6871.00, NULL, NULL),
('JPN', 'Japan', 'Asia', 377829.00, -660, 126714000, 80.7, 3787042.00, NULL, NULL),
('YEM', 'Yemen', 'Asia', 527968.00, 1918, 18112000, 59.8, 6041.00, NULL, NULL),
('JOR', 'Jordan', 'Asia', 88946.00, 1946, 5083000, 77.4, 7526.00, NULL, NULL),
('CXR', 'Christmas Island', 'Oceania', 135.00, NULL, 2500, NULL, 0.00, NULL, NULL),
('YUG', 'Yugoslavia', 'Europe', 102173.00, 1918, 10640000, 72.4, 17000.00, NULL, NULL),
('KHM', 'Cambodia', 'Asia', 181035.00, 1953, 11168000, 56.5, 5121.00, NULL, NULL),
('CMR', 'Cameroon', 'Africa', 475442.00, 1960, 15085000, 54.8, 9174.00, NULL, NULL),
('CAN', 'Canada', 'North America', 9970610.00, 1867, 31147000, 79.4, 598862.00, NULL, NULL),
('CPV', 'Cape Verde', 'Africa', 4033.00, 1975, 428000, 68.9, 435.00, NULL, NULL),
('KAZ', 'Kazakstan', 'Asia', 2724900.00, 1991, 16223000, 63.2, 24375.00, NULL, NULL),
('KEN', 'Kenya', 'Africa', 580367.00, 1963, 30080000, 48.0, 9217.00, NULL, NULL),
('CAF', 'Central African Republic', 'Africa', 622984.00, 1960, 3615000, 44.0, 1054.00, NULL, NULL),
('CHN', 'China', 'Asia', 9572900.00, -1523, 1277558000, 71.4, 982268.00, NULL, NULL),
('KGZ', 'Kyrgyzstan', 'Asia', 199900.00, 1991, 4699000, 63.4, 1626.00, NULL, NULL),
('KIR', 'Kiribati', 'Oceania', 726.00, 1979, 83000, 59.8, 40.70, NULL, NULL),
('COL', 'Colombia', 'South America', 1138914.00, 1810, 42321000, 70.3, 102896.00, NULL, NULL),
('COM', 'Comoros', 'Africa', 1862.00, 1975, 578000, 60.0, 4401.00, NULL, NULL),
('COG', 'Congo', 'Africa', 342000.00, 1960, 2943000, 47.4, 2108.00, NULL, NULL),
('COD', 'Congo, The Democratic Republic of the', 'Africa', 2344858.00, 1960, 51654000, 48.8, 6964.00, NULL, NULL),
('CCK', 'Cocos (Keeling) Islands', 'Oceania', 14.00, NULL, 600, NULL, 0.00, NULL, NULL),
('PRK', 'North Korea', 'Asia', 120538.00, 1948, 24039000, 70.7, 5332.00, NULL, NULL),
('KOR', 'South Korea', 'Asia', 99434.00, 1948, 46844000, 74.4, 320749.00, NULL, NULL),
('GRC', 'Greece', 'Europe', 131626.00, 1830, 10545700, 78.4, 120724.00, NULL, NULL),
('HRV', 'Croatia', 'Europe', 56538.00, 1991, 4473000, 73.7, 20208.00, NULL, NULL),
('CUB', 'Cuba', 'North America', 110861.00, 1902, 11201000, 76.2, 17843.00, NULL, NULL),
('KWT', 'Kuwait', 'Asia', 17818.00, 1961, 1972000, 76.1, 27037.00, NULL, NULL),
('CYP', 'Cyprus', 'Asia', 9251.00, 1960, 754700, 76.7, 9333.00, NULL, NULL),
('LAO', 'Laos', 'Asia', 236800.00, 1953, 5433000, 53.1, 1292.00, NULL, NULL),
('LVA', 'Latvia', 'Europe', 64589.00, 1991, 2424200, 68.4, 6398.00, NULL, NULL),
('LSO', 'Lesotho', 'Africa', 30355.00, 1966, 2153000, 50.8, 1061.00, NULL, NULL),
('LBN', 'Lebanon', 'Asia', 10400.00, 1941, 3282000, 71.3, 17121.00, NULL, NULL),
('LBR', 'Liberia', 'Africa', 111369.00, 1847, 3154000, 51.0, 2012.00, NULL, NULL),
('LBY', 'Libyan Arab Jamahiriya', 'Africa', 1759540.00, 1951, 5605000, 75.5, 44806.00, NULL, NULL),
('LIE', 'Liechtenstein', 'Europe', 160.00, 1806, 32300, 78.8, 1119.00, NULL, NULL),
('LTU', 'Lithuania', 'Europe', 65301.00, 1991, 3698500, 69.1, 10692.00, NULL, NULL),
('LUX', 'Luxembourg', 'Europe', 2586.00, 1867, 435700, 77.1, 16321.00, NULL, NULL),
('ESH', 'Western Sahara', 'Africa', 266000.00, NULL, 293000, 49.8, 60.00, NULL, NULL),
('MAC', 'Macao', 'Asia', 18.00, NULL, 473000, 81.6, 5749.00, NULL, NULL),
('MDG', 'Madagascar', 'Africa', 587041.00, 1960, 15942000, 55.0, 3750.00, NULL, NULL),
('MKD', 'Macedonia', 'Europe', 25713.00, 1991, 2024000, 73.8, 1694.00, NULL, NULL),
('MWI', 'Malawi', 'Africa', 118484.00, 1964, 10925000, 37.6, 1687.00, NULL, NULL),
('MDV', 'Maldives', 'Asia', 298.00, 1965, 286000, 62.2, 199.00, NULL, NULL),
('MYS', 'Malaysia', 'Asia', 329758.00, 1957, 22244000, 70.8, 69213.00, NULL, NULL),
('MLI', 'Mali', 'Africa', 1240192.00, 1960, 11234000, 46.7, 2642.00, NULL, NULL),
('MLT', 'Malta', 'Europe', 316.00, 1964, 380200, 77.9, 3512.00, NULL, NULL),
('MAR', 'Morocco', 'Africa', 446550.00, 1956, 28351000, 69.1, 36124.00, NULL, NULL),
('MHL', 'Marshall Islands', 'Oceania', 181.00, 1990, 64000, 65.5, 97.00, NULL, NULL),
('MTQ', 'Martinique', 'North America', 1102.00, NULL, 395000, 78.3, 2731.00, NULL, NULL),
('MRT', 'Mauritania', 'Africa', 1025520.00, 1960, 2670000, 50.8, 998.00, NULL, NULL),
('MUS', 'Mauritius', 'Africa', 2040.00, 1968, 1158000, 71.0, 4251.00, NULL, NULL),
('MYT', 'Mayotte', 'Africa', 373.00, NULL, 149000, 59.5, 0.00, NULL, NULL),
('MEX', 'Mexico', 'North America', 1958201.00, 1810, 98881000, 71.5, 414972.00, NULL, NULL),
('FSM', 'Micronesia, Federated States of', 'Oceania', 702.00, 1990, 119000, 68.6, 212.00, NULL, NULL),
('MDA', 'Moldova', 'Europe', 33851.00, 1991, 4380000, 64.5, 1579.00, NULL, NULL),
('MCO', 'Monaco', 'Europe', 1.50, 1861, 34000, 78.8, 776.00, NULL, NULL),
('MNG', 'Mongolia', 'Asia', 1566500.00, 1921, 2662000, 67.3, 1043.00, NULL, NULL),
('MSR', 'Montserrat', 'North America', 102.00, NULL, 11000, 78.0, 109.00, NULL, NULL),
('MOZ', 'Mozambique', 'Africa', 801590.00, 1975, 19680000, 37.5, 2891.00, NULL, NULL),
('MMR', 'Myanmar', 'Asia', 676578.00, 1948, 45611000, 54.9, 180375.00, NULL, NULL),
('NAM', 'Namibia', 'Africa', 824292.00, 1990, 1726000, 42.5, 3101.00, NULL, NULL),
('NRU', 'Nauru', 'Oceania', 21.00, 1968, 12000, 60.8, 197.00, NULL, NULL),
('NPL', 'Nepal', 'Asia', 147181.00, 1769, 23930000, 57.8, 4768.00, NULL, NULL),
('NIC', 'Nicaragua', 'North America', 130000.00, 1838, 5074000, 68.7, 1988.00, NULL, NULL),
('NER', 'Niger', 'Africa', 1267000.00, 1960, 10730000, 41.3, 1706.00, NULL, NULL),
('NGA', 'Nigeria', 'Africa', 923768.00, 1960, 111506000, 51.6, 65707.00, NULL, NULL),
('NIU', 'Niue', 'Oceania', 260.00, NULL, 2000, NULL, 0.00, NULL, NULL),
('NFK', 'Norfolk Island', 'Oceania', 36.00, NULL, 2000, NULL, 0.00, NULL, NULL),
('NOR', 'Norway', 'Europe', 323877.00, 1905, 4478500, 78.7, 145895.00, NULL, NULL),
('CIV', 'Côte d’Ivoire', 'Africa', 322463.00, 1960, 14786000, 45.2, 11345.00, NULL, NULL),
('OMN', 'Oman', 'Asia', 309500.00, 1951, 2542000, 71.8, 16904.00, NULL, NULL),
('PAK', 'Pakistan', 'Asia', 796095.00, 1947, 156483000, 61.1, 61289.00, NULL, NULL),
('PLW', 'Palau', 'Oceania', 459.00, 1994, 19000, 68.6, 105.00, NULL, NULL),
('PAN', 'Panama', 'North America', 75517.00, 1903, 2856000, 75.5, 9131.00, NULL, NULL),
('PNG', 'Papua New Guinea', 'Oceania', 462840.00, 1975, 4807000, 63.1, 4988.00, NULL, NULL),
('PRY', 'Paraguay', 'South America', 406752.00, 1811, 5496000, 73.7, 8444.00, NULL, NULL),
('PER', 'Peru', 'South America', 1285216.00, 1821, 25662000, 70.0, 64140.00, NULL, NULL),
('PCN', 'Pitcairn', 'Oceania', 49.00, NULL, 50, NULL, 0.00, NULL, NULL),
('MNP', 'Northern Mariana Islands', 'Oceania', 464.00, NULL, 78000, 75.5, 0.00, NULL, NULL),
('PRT', 'Portugal', 'Europe', 91982.00, 1143, 9997600, 75.8, 105954.00, NULL, NULL),
('PRI', 'Puerto Rico', 'North America', 8875.00, NULL, 3869000, 75.6, 34100.00, NULL, NULL),
('POL', 'Poland', 'Europe', 323250.00, 1918, 38653600, 73.2, 151697.00, NULL, NULL),
('GNQ', 'Equatorial Guinea', 'Africa', 28051.00, 1968, 453000, 53.6, 283.00, NULL, NULL),
('QAT', 'Qatar', 'Asia', 11000.00, 1971, 599000, 72.4, 9472.00, NULL, NULL),
('FRA', 'France', 'Europe', 551500.00, 843, 59225700, 78.8, 1424285.00, NULL, NULL),
('GUF', 'French Guiana', 'South America', 90000.00, NULL, 181000, 76.1, 681.00, NULL, NULL),
('PYF', 'French Polynesia', 'Oceania', 4000.00, NULL, 235000, 74.8, 818.00, NULL, NULL),
('REU', 'Réunion', 'Africa', 2510.00, NULL, 699000, 72.7, 8287.00, NULL, NULL),
('ROM', 'Romania', 'Europe', 238391.00, 1878, 22455500, 69.9, 38158.00, NULL, NULL),
('RWA', 'Rwanda', 'Africa', 26338.00, 1962, 7733000, 39.3, 2036.00, NULL, NULL),
('SWE', 'Sweden', 'Europe', 449964.00, 836, 8861400, 79.6, 226492.00, NULL, NULL),
('SHN', 'Saint Helena', 'Africa', 314.00, NULL, 6000, 76.8, 0.00, NULL, NULL),
('KNA', 'Saint Kitts and Nevis', 'North America', 261.00, 1983, 38000, 70.7, 299.00, NULL, NULL),
('LCA', 'Saint Lucia', 'North America', 622.00, 1979, 154000, 72.3, 571.00, NULL, NULL),
('VCT', 'Saint Vincent and the Grenadines', 'North America', 388.00, 1979, 114000, 72.3, 285.00, NULL, NULL),
('SPM', 'Saint Pierre and Miquelon', 'North America', 242.00, NULL, 7000, 77.6, 0.00, NULL, NULL),
('DEU', 'Germany', 'Europe', 357022.00, 1955, 82164700, 77.4, 2133367.00, NULL, NULL),
('SLB', 'Solomon Islands', 'Oceania', 28896.00, 1978, 444000, 71.3, 182.00, NULL, NULL),
('ZMB', 'Zambia', 'Africa', 752618.00, 1964, 9169000, 37.2, 3377.00, NULL, NULL),
('WSM', 'Samoa', 'Oceania', 2831.00, 1962, 180000, 69.2, 141.00, NULL, NULL),
('SMR', 'San Marino', 'Europe', 61.00, 885, 27000, 81.1, 510.00, NULL, NULL),
('STP', 'Sao Tome and Principe', 'Africa', 964.00, 1975, 147000, 65.3, 6.00, NULL, NULL),
('SAU', 'Saudi Arabia', 'Asia', 2149690.00, 1932, 21607000, 67.8, 137635.00, NULL, NULL),
('SEN', 'Senegal', 'Africa', 196722.00, 1960, 9481000, 62.2, 4787.00, NULL, NULL),
('SYC', 'Seychelles', 'Africa', 455.00, 1976, 77000, 70.4, 536.00, NULL, NULL),
('SLE', 'Sierra Leone', 'Africa', 71740.00, 1961, 4854000, 45.3, 746.00, NULL, NULL),
('SGP', 'Singapore', 'Asia', 618.00, 1965, 3567000, 80.1, 86503.00, NULL, NULL),
('SVK', 'Slovakia', 'Europe', 49012.00, 1993, 5398700, 73.7, 20594.00, NULL, NULL),
('SVN', 'Slovenia', 'Europe', 20256.00, 1991, 1987800, 74.9, 19756.00, NULL, NULL),
('SOM', 'Somalia', 'Africa', 637657.00, 1960, 10097000, 46.2, 935.00, NULL, NULL),
('LKA', 'Sri Lanka', 'Asia', 65610.00, 1948, 18827000, 71.8, 15706.00, NULL, NULL),
('SDN', 'Sudan', 'Africa', 2505813.00, 1956, 29490000, 56.6, 10162.00, NULL, NULL),
('FIN', 'Finland', 'Europe', 338145.00, 1917, 5171300, 77.4, 121914.00, NULL, NULL),
('SUR', 'Suriname', 'South America', 163265.00, 1975, 417000, 71.4, 870.00, NULL, NULL),
('SWZ', 'Swaziland', 'Africa', 17364.00, 1968, 1008000, 40.4, 1206.00, NULL, NULL),
('CHE', 'Switzerland', 'Europe', 41284.00, 1499, 7160400, 79.6, 264478.00, NULL, NULL),
('SYR', 'Syria', 'Asia', 185180.00, 1941, 16125000, 68.5, 65984.00, NULL, NULL),
('TJK', 'Tajikistan', 'Asia', 143100.00, 1991, 6188000, 64.1, 1990.00, NULL, NULL),
('TWN', 'Taiwan', 'Asia', 36188.00, 1945, 22256000, 76.4, 256254.00, NULL, NULL),
('TZA', 'Tanzania', 'Africa', 883749.00, 1961, 33517000, 52.3, 8005.00, NULL, NULL),
('DNK', 'Denmark', 'Europe', 43094.00, 800, 5330000, 76.5, 174099.00, NULL, NULL),
('THA', 'Thailand', 'Asia', 513115.00, 1350, 61399000, 68.6, 116416.00, NULL, NULL),
('TGO', 'Togo', 'Africa', 56785.00, 1960, 4629000, 54.7, 1449.00, NULL, NULL),
('TKL', 'Tokelau', 'Oceania', 12.00, NULL, 2000, NULL, 0.00, NULL, NULL),
('TON', 'Tonga', 'Oceania', 650.00, 1970, 99000, 67.9, 146.00, NULL, NULL),
('TTO', 'Trinidad and Tobago', 'North America', 5130.00, 1962, 1295000, 68.0, 6232.00, NULL, NULL),
('TCD', 'Chad', 'Africa', 1284000.00, 1960, 7651000, 50.5, 1208.00, NULL, NULL),
('CZE', 'Czech Republic', 'Europe', 78866.00, 1993, 10278100, 74.5, 55017.00, NULL, NULL),
('TUN', 'Tunisia', 'Africa', 163610.00, 1956, 9586000, 73.7, 20026.00, NULL, NULL),
('TUR', 'Turkey', 'Asia', 774815.00, 1923, 66591000, 71.0, 210721.00, NULL, NULL),
('TKM', 'Turkmenistan', 'Asia', 488100.00, 1991, 4459000, 60.9, 4397.00, NULL, NULL),
('TCA', 'Turks and Caicos Islands', 'North America', 430.00, NULL, 17000, 73.3, 96.00, NULL, NULL),
('TUV', 'Tuvalu', 'Oceania', 26.00, 1978, 12000, 66.3, 6.00, NULL, NULL),
('UGA', 'Uganda', 'Africa', 241038.00, 1962, 21778000, 42.9, 6313.00, NULL, NULL),
('UKR', 'Ukraine', 'Europe', 603700.00, 1991, 50456000, 66.0, 42168.00, NULL, NULL),
('HUN', 'Hungary', 'Europe', 93030.00, 1918, 10043200, 71.4, 48267.00, NULL, NULL),
('URY', 'Uruguay', 'South America', 175016.00, 1828, 3337000, 75.2, 20831.00, NULL, NULL),
('NCL', 'New Caledonia', 'Oceania', 18575.00, NULL, 214000, 72.8, 3563.00, NULL, NULL),
('NZL', 'New Zealand', 'Oceania', 270534.00, 1907, 3862000, 77.8, 54669.00, NULL, NULL),
('UZB', 'Uzbekistan', 'Asia', 447400.00, 1991, 24318000, 63.7, 14194.00, NULL, NULL),
('BLR', 'Belarus', 'Europe', 207600.00, 1991, 10236000, 68.0, 13714.00, NULL, NULL),
('WLF', 'Wallis and Futuna', 'Oceania', 200.00, NULL, 15000, NULL, 0.00, NULL, NULL),
('VUT', 'Vanuatu', 'Oceania', 12189.00, 1980, 190000, 60.6, 261.00, NULL, NULL),
('VAT', 'Holy See (Vatican City State)', 'Europe', 0.40, 1929, 1000, NULL, 9.00, NULL, NULL),
('VEN', 'Venezuela', 'South America', 912050.00, 1811, 24170000, 73.1, 95023.00, NULL, NULL),
('RUS', 'Russian Federation', 'Europe', 17075400.00, 1991, 146934000, 67.2, 276608.00, NULL, NULL),
('VNM', 'Vietnam', 'Asia', 331689.00, 1945, 79832000, 69.3, 21929.00, NULL, NULL),
('EST', 'Estonia', 'Europe', 45227.00, 1991, 1439200, 69.5, 5328.00, NULL, NULL),
('USA', 'United States', 'North America', 9363520.00, 1776, 278357000, 77.1, 8510700.00, NULL, NULL),
('VIR', 'Virgin Islands, U.S.', 'North America', 347.00, NULL, 93000, 78.1, 0.00, NULL, NULL),
('ZWE', 'Zimbabwe', 'Africa', 390757.00, 1980, 11669000, 37.8, 5951.00, NULL, NULL),
('PSE', 'Palestine', 'Asia', 6257.00, NULL, 3101000, 71.4, 4173.00, NULL, NULL),
('ATA', 'Antarctica', 'Antarctica', 13120000.00, NULL, 0, NULL, 0.00, NULL, NULL),
('BVT', 'Bouvet Island', 'Antarctica', 59.00, NULL, 0, NULL, 0.00, NULL, NULL),
('IOT', 'British Indian Ocean Territory', 'Africa', 78.00, NULL, 0, NULL, 0.00, NULL, NULL),
('SGS', 'South Georgia and the South Sandwich Islands', 'Antarctica', 3903.00, NULL, 0, NULL, 0.00, NULL, NULL),
('HMD', 'Heard Island and McDonald Islands', 'Antarctica', 359.00, NULL, 0, NULL, 0.00, NULL, NULL),
('ATF', 'French Southern territories', 'Antarctica', 7780.00, NULL, 0, NULL, 0.00, NULL, NULL),
('UMI', 'United States Minor Outlying Islands', 'Oceania', 16.00, NULL, 0, NULL, 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transact`
--

DROP TABLE IF EXISTS `transact`;
CREATE TABLE IF NOT EXISTS `transact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `ccost` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `cimage` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transact`
--

INSERT INTO `transact` (`id`, `cname`, `ccost`, `qty`, `cimage`, `username`, `dated`) VALUES
(1, '', 371362, 1, 'Netherlands.png', 'David', '2018-10-09 07:56:16'),
(2, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-09 11:15:23'),
(3, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-09 11:15:35'),
(4, 'Afghanistan', 5976, 1, 'Afghanistan.png', 'David', '2018-10-10 04:51:44'),
(5, '', 371362, 1, 'Netherlands.png', 'David', '2018-10-10 05:43:39'),
(6, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-10 05:43:39'),
(7, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-10 05:43:39'),
(8, 'Afghanistan', 5976, 1, 'Afghanistan.png', 'David', '2018-10-10 05:43:39'),
(9, '', 371362, 1, 'Netherlands.png', 'David', '2018-10-10 06:19:01'),
(10, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-10 06:19:01'),
(11, 'Azerbaijan', 4127, 1, '', 'David', '2018-10-10 06:19:01'),
(12, 'Afghanistan', 5976, 1, 'Afghanistan.png', 'David', '2018-10-10 06:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('F','M') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `pass`, `age`, `gender`, `email`) VALUES
('David', 'david', 28, 'M', 'David@yahoo.com'),
('Richard', 'richard', 21, 'M', 'rc@nyp.com'),
('Jane', 'jane', 17, 'F', 'jane@.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
