-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 10:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('mycartadmin@gmail.com', 'mycartadmi');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `proid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `cardno` varchar(255) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`orderid`, `proid`, `cname`, `phoneno`, `email`, `address`, `date`, `cardno`) VALUES
(8, 1, 'my', '2568256725', 'my@gmail.com', 'delhi', '2023-09-21', '257274754747'),
(9, 1, 'erheft', '2154514416', 'gfa@gmail.com', 'afhfd', '2023-09-23', '512451426514');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `message`) VALUES
(1, 'mycart', 'mycart@gmail.com', 'sudeghdjwfjdhjgikdfghd'),
(2, 'dhrushal', 'dhrushal@gmail.com', 'bakwassssssssssssssss store');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `proid` int(11) NOT NULL AUTO_INCREMENT,
  `proname` varchar(255) NOT NULL,
  `prodesc` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `proqty` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `proimage` varchar(255) NOT NULL,
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `proname`, `prodesc`, `category`, `proqty`, `price`, `proimage`) VALUES
(1, 'LG 1 TON (RS-Q14YNZE)', ' lG 1 Ton 5 Star AI Dual Inverter Split Ac(Copper  , AI Convertible 6-in-1 Cooling , HD Filter with Anti-Virus Protection , 2023 Model ,RS-Q14YNZE White)', 'AC', 15, '75000', 'rsq.jpg'),
(2, 'LLOYD 1 TON (GLS1215FWBEV)', 'Lloyd 1 Ton 5 Star Inverter Split AC (5-in- 1 Convertible , Copper 2023 Model)', 'AC', 15, '35000', 'LLOYD.jpg'),
(3, 'BLUESTAR 1.2 TON (IA315YNU)', ' Bluestar 1.2 Ton 3 Star 5-in-1 Convertible Invertible Ac', 'AC', 15, '33000', 'bluest.jpg'),
(4, 'DAIKIN 1 TON (MTKM35U)', 'Daikin 1 ton 5 Star Inverter Split AC (MTKM35U 2022 Model)', 'AC', 15, '40000', 'daikin.jpg'),
(5, 'PANASONIC 1 TON (CS/CU-NU12WKYW)', ' Panasonic 1 Ton 5 Star Wi-Fi Inverter Split AC (Copper, PM 2.5 Filter, 2020 Model, CS/CU-NU12WKYW White)', 'AC', 15, '38000', 'pnsonic.jpg'),
(6, 'CARRIER 1.5 TON (ESTER Exi -CAI18ES5R33F0)', ' Carrier 1.5 Ton 5 Star AI Flexicool Inverter Split AC (Copper, Convertible 6-in-1 Cooling,Dual Filtration with HD & PM 2.5 Filter, Auto Cleanser, 2023 Model,ESTER Exi -CAI18ES5R33F0 ,White)', 'AC', 15, '42000', 'cac.jpg'),
(7, 'GODREJ 1.5 TON (EI 18PINV4R32-WWP)', 'Godrej 1.5 Ton 4 Star 4 Way Swing, Inverter Split AC(Copper, 5-In-1 Convertible Cooling, Anti-Corrosive blue fins, 2023 Model, AC 1.5T EI 18PINV4R32-WWP, White)', 'AC', 15, '35000', 'gdr.jpg'),
(8, 'WHIRLPOOL 1.5 TON (S3I3AD0)', 'Whirlpool 1.5 Ton 5 Star, Flexicool Inverter Split AC (Copper, Convertible 4-in-1 Cooling Mode, HD Filter 2023 Model, S3I3AD0, White)\r\n', 'AC', 15, '39000', 'whrpl.jpg'),
(9, 'VOLTAS 1.5 TON (185V Vectra Elite, White)', 'Voltas 1.5 Ton 5 Star, Inverter Split AC(Copper, 4-in-1 Adjustable Mode, Anti-dust Filter, 2023 Model,185V Vectra Elite, White)', 'AC', 15, '39000', 'vlts.jpg'),
(10, 'PANASONIC 1.5 TON (CS/CU-SU18YKYWT)', 'Panasonic 1.5 Ton 3 Star Wi-Fi Inverter Smart Split AC (Copper Condenser, 7 in 1 Convertible with additional AI Mode, PM 0.1 Air Purification Filter, CS/CU-SU18YKYWT,2023 Model, White)', 'AC', 15, '45000', 'par.jpg'),
(11, 'GODREJ 2 TON (EI 24LINV5R32-WWR)', 'Godrej 2 Ton 5 Star, 5-In-1 Convertible Cooling, Inverter Split AC (Copper, 4-way Air Swing, 2023 Model, EI 24LINV5R32-WWR, White)', 'AC', 15, '50000', 'gd.jpg'),
(12, 'LLOYD 2 TON (GLS24I5FWGEV)', 'Lloyd 2.0 Ton 5 Star Inverter Split AC (5 in 1 Convertible, Copper, Anti-Viral + PM 2.5 Filter, 2023 Model, White with Golden Deco Strip, GLS24I5FWGEV)', 'AC', 15, '55000', 'llyd.jpg'),
(13, 'SAMSUNG (RT37C4512BX/HL)', 'Samsung 322 L 2 Star Convertible 5In1, Digital Inverter Frost Free Double Door Refrigerator (RT37C4512BX/HL, Luxe Black, 2023 Model, Gross Volume 345 Litres)\r\n', 'REFRIGERATOR', 10, '36000', 'sfri.png'),
(14, 'SAMSUNG (RR20C1724CU/HL)', 'Samsung 183 L 4 Star Digital Inverter Direct Cool Single Door Refrigerator (RR20C1724CU/HL, Camellia Blue 2023 Model)', 'REFRIGERATOR', 10, '16000', 'sfimg.jpg'),
(15, 'WHIRLOOPL (FP 313D)', 'Whirlpool 300 L Frost Free Multi-Door Refrigerator(FP 313D Protton Roy, Alpha Steel)\r\n', 'REFRIGERATOR', 10, '33000', 'whf.jpeg'),
(16, 'HAIER (HED-171RS-P)', 'Haier 165 L 1 Star Direct Cool Single Door Refrigerator (2023 Model, HED-171RS-P, Red Steel)', 'REFRIGERATOR', 10, '11000', 'hf.jpg'),
(17, 'WHIRLPOOL (205 WDE CLS 3S)', 'Whirlpool 184 L 3 Star Direct-Cool Single Door Refrigerator (205 WDE CLS 3S SAPPHIRE BLUE-Z, Sapphire Blue, Blue, 2023 Model)', 'REFRIGERATOR', 10, '14000', 'wplf.jpg'),
(18, 'LG (GL-I292RPZX)', 'LG 242 L 3 Star Smart Inverter Frost-Free Double Door Refrigerator (GL-I292RPZX, Shiny Steel, Door Cooling+, Gross Volume- 260 L)', 'REFRIGERATOR', 10, '25000', 'lgf.jpg'),
(19, 'SAMSUNG (RS82A6000SL/TL)', 'Samsung 845 L Inverter Frost Free Side-by-Side Refrigerator (RS82A6000SL/TL, Ez Clean Steel)', 'REFRIGERATOR', 10, '111500', 'slf.png'),
(20, 'SAMSUNG (RF87A9770SG)', '865L 4-Door Flex French Door BESPOKE Family HubTM Refrigerator RF87A9770SG', 'REFRIGERATOR', 2, '300000', 'scf.jpeg'),
(21, 'SYMPHONY Diet 12T', 'Symphony Diet 12T Personal Tower Air Cooler for Home with Honeycomb Pad, Powerful Blower, i-Pure Technology and Low Power Consumption (12L, White)', 'COOLERS', 25, '7500', 'syc.png'),
(22, 'HAVELLS Tuono', 'Havells Tuono Personal Air Cooler - 18 Litre\r\n', 'COOLERS', 25, '3500', 'hc.jpg'),
(23, 'HAVELLS (Koolaire-W 51L 220W)', 'Havells Koolaire-W 51L 220W Desert Cooler, Ghracaaw050', 'COOLERS', 10, '9000', 'hkc.jpg'),
(24, 'SYMPHONY HiFlo 27', 'Symphony HiFlo 27 Personal Air Cooler For Home with Powerful Blower, Honeycomb Pads, i-Pure Technology and Low Power Consumption (27L, Gray)', 'COOLERS', 5, '6500', 'sc.jpg'),
(25, 'CROMPTON Optimus 65L', 'Crompton Optimus 65-Litre Inverter Compatible and Portable Desert Air Cooler with Wide Angle Air Throw (White)', 'COOLERS', 5, '15500', 'coc.png'),
(26, 'VOLTAS Grand 52', 'Voltas Grand 52 Desert Cooler - 52L, Off-White', 'COOLERS', 5, '8000', 'vgc.jpg'),
(27, 'NOVAMAX Rambo 100 L', 'Novamax Rambo 100 L Heavy Duty Desert Air Cooler With High-Density Honeycomb Cooling Pads, 3-Speed Control, Powerful Air Throw & Auto Water Refill Technology (Grey)', 'COOLERS', 5, '16000', 'nc.png'),
(28, 'VOTAS Mega 70L', ' Voltas Desert Mega 70 70L Cooler', 'COOLERS', 5, '12000', 'vdc.jpg'),
(29, 'SAMSUNG (WW60R20GLSS/TL)', 'Samsung 6.0 Kg Inverter 5 star Fully-Automatic Front Loading Washing Machine (WW60R20GLSS/TL, Silver, Hygiene steam)\r\n', 'WASHING MACHINE', 15, '25000', 'swm.jpg'),
(30, 'BOSCH (WLJ2016WIN)', 'Bosch 6 kg 5 Star Inverter Fully Automatic Front Loading Washing Machine with In - built Heater (WLJ2016WIN, White )', 'WASHING MACHINE', 15, '24000', 'bwm.jpeg'),
(31, 'LG (FHM1207SDM)', 'LG 7 Kg 5 Star Inverter Touch panel Fully-Automatic Front Load Washing Machine with In-Built Heater (FHM1207SDM, Middle Black, Steam for Hygiene Wash)', 'WASHING MACHINE', 15, '30000', 'lgwm.jpg'),
(32, 'VOLTAS BEKO (WFL7012VTAC)', 'Voltas Beko 7.0kg 5 Star Front Load Washing Machine (WFL7012VTAC, Manhaten Grey), Steam Wash,Stain Expert', 'WASHING MACHINE', 15, '25000', 'vwm.jpg'),
(33, 'LG (T65SKSF4Z)', 'LG 6.5 Kg 5 Star Inverter Turbodrum Fully Automatic Top Loading Washing Machine (T65SKSF4Z, 3 Smart Motion, Tub Clean, Middle Free Silver)', 'WASHING MACHINE', 15, '17000', 'lgtwm.jpg'),
(34, 'PANASONIC (NA-F60LF1HRB)', 'Panasonic 6 Kg 5 Star Fully-Automatic Top Load Washing Machine ( NA-F60LF1HRB, Grey, Durable Metal Body, 8 Wash Program, Aquabeat wash technology, One touch smart wash, 2022 model)', 'WASHING MACHINE', 15, '14000', 'wwm.png'),
(35, 'HAIER (HWM80-AE)', 'Haier 8 Kg 5 Star Fully Automatic Top Load Washing Machine (2023 Model, HWM80-AE, Oceanus Wave Drum, Moon Light Grey)\r\n', 'WASHING MACHINE', 15, '17000', 'hwm.jpg'),
(36, 'IFB (TL-REW 6.5KG AQUA)', 'IFB 6.5 Kg 5 Star Top Load Washing Machine Aqua Conserve (TL-REW 6.5KG AQUA, White, Hard Water Wash, 4 Years Comprehensive Warranty)', 'WASHING MACHINE', 15, '18000', 'iwm.jpg'),
(37, 'ELICA (WDFL 906 HAC LTW MS NERO)', 'Elica 90 cm 1200 m3/hr Filterless Autoclean Kitchen Chimney with 15 Years Warranty (WDFL 906 HAC LTW MS NERO, Touch + Motion Sensor Control, Black)', 'CHIMNEY', 15, '13500', 'ech.jpg'),
(38, 'FABER CHIMNEY', 'Faber 60 cm 1500 m³/hr Autoclean Kitchen Chimney, 12Yr Warranty on Motor(2Yr Comprehensive), Autoclean Alarm, Mood L |Made in India(HOOD PRIMUS PLUS ENERGY IN HCSC BK 60,Touch & Gesture Control,Black)', 'CHIMNEY', 15, '15000', 'fch.jpg'),
(39, 'WHIRLPOOL CHIMNEY', 'Whirlpool 60 cm 750 m³/hr Kitchen Chimney - CLASSIC CF 60 BK HOOD (Cassette Filter, Black)', 'CHIMNEY', 15, '6000', 'wch.jpg'),
(40, 'ELICA CHIMNEY', 'Elica 60 cm 1310 m3/hr Filterless Autoclean Kitchen Chimney (FL 600 SPT HAC MS NERO, Touch + Motion Sensor Control, Black)', 'CHIMNEY', 15, '12000', 'elch.jpg'),
(41, 'EUREKA VACUUM CLEANER', 'Eureka Forbes Wet & Dry Ultimo 1400 Watts Multipurpose Vacuum Cleaner,Power Suction & Blower with 20 litres Tank Capacity,6 Accessories,1 Year Warranty,Compact,Light Weight & Easy to use (Red)', 'VACUMM CLEANER', 15, '6000', 'evc.jpg'),
(42, 'EUREKA VACUUM CLEANER', 'Eureka Forbes Quick Clean DX Vacuum Cleaner with 1200 Watts Powerful Suction Control, 3 Free Reusable dust Bag worth Rs 500, comes with multiple accessories, dust bag full indicator (Red), standerd', 'VACUMM CLEANER', 15, '3500', 'euvc.jpg'),
(43, 'AGARO VACUUM CLEANER ', 'AGARO Rapid Vacuum Cleaner,1000W,Wet&Dry,for Home Use,Blower Function,10L Tank Capacity,16.5 Kpa Suction Power,Plastic Body,Red,10 Liter,Cartridge', 'VACUMM CLEANER', 15, '3500', 'avc.jpg'),
(44, 'AMAZON BASICS', 'amazon basics Wet and Dry Vacuum Cleaner with 20 kPa Power Suction, Low Sound, High Energy Efficiency and Blower Function with 1 Year Warranty (15L) multicolor', 'VACUMM CLEANER', 15, '5000', 'bvc.jpg'),
(45, 'BAJAJ REX 750W MIXER', ' Bajaj Rex 750W Mixer Grinder with Nutri Pro Feature, 4 Jars, White', 'MIXER', 15, '3500', 'bm.jpg'),
(46, 'BAJAJ REX 500W MIXER', 'Bajaj Rex 500W Mixer Grinder with Nutri-Pro Feature, 3 Jars, White', 'MIXER', 15, '2200', 'brm.jpg'),
(47, 'PRESTIGE IRIS PLUS 750W', 'Prestige IRIS Plus 750 W Mixer grinder with 4 Jars (3 stainless steel Jars+ 1 Juicer Jar)| 4 Super efficient stainless blades | 2 years warranty| Black', 'MIXER', 15, '3000', 'pm.jpg'),
(48, 'WIPRO ELATO1000W', 'Wipro Elato FMG206 1000W Mixer Grinder | Heavy Duty 100% Copper Motor | Deep Flow Breaker| Superfast Grinding | 4 Jars | Black, 2 Years Warranty\r\n', 'MIXER', 10, '6000', 'wm.jpg'),
(49, 'PHILIPS IRON', 'Philips GC1920/28 1440-Watt Non-Stick Soleplate Steam Iron', 'IRON', 10, '2000', 'pi.jpg'),
(50, 'HAVELLS IRON', ' HAVELLS Crony 2000 W Steam Iron with Auto Shut Off, Steam Burst, Vertical, Horizontal Ironing, Anti Drip, Self-Cleaning & Anti Calc Technology. (Grey-Green)', 'IRON', 10, '2300', 'hi.jpg'),
(51, 'WIPRO IRON', 'Wipro Vesta 2200-Watt Heavy Duty Steam Iron|300ml Water Tank|Anti Calc& Anti Drip Function |Scratch Resistant Ceramic Soleplate 73 holes|2yrs warranty|30g/min Steam|Vertical & Horizontal Steaming', 'IRON', 10, '2000', 'vi.jpg'),
(52, 'CROMPTON IRON', 'Crompton FabriAutoTech 2200 Watt Steam Iron|Feather Touch Digital LED Fabric Temperature Control|3 Ways Auto Shut-off|Scratch Resistant Ceramic Coating| 400 Ml water Tank|Anti-Drip|Self Clean Function', 'IRON', 10, '3600', 'cm.jpg'),
(53, 'DELL MOUSE', 'Dell MS116 1000Dpi USB Wired Optical Mouse, Led Tracking, Scrolling Wheel, Plug and Play', 'OTHERS', 10, '300', 'om.jpg'),
(54, 'ZEBRONICS MOUSE', 'Zebronics Zeb-Power Wired USB Mouse, 3-Button, 1200 DPI Optical Sensor, Plug & Play, for Windows/Mac', 'OTHERS', 10, '160', 'zm.jpg'),
(55, 'HP WIRELESS MOUSE', 'HP Z3700 USB Wireless Mouse/2.4GHz Wireless Connection/ 1200DPI (Silver)', 'OTHERS', 10, '900', 'hm.jpg'),
(56, 'LOGITECH WIRELESS MOUSE', 'Logitech Signature M650 L Full Size Wireless Mouse - for Large Sized Hands, 2-Year Battery, Silent Clicks, Customisable Side Buttons, Bluetooth, for PC/Mac/Multi-Device/Chromebook - Graphite', 'OTHERS', 15, '2600', 'lm.jpg'),
(57, 'boAT SPEAKER', 'boAt Stone 352 Bluetooth Speaker with 10W RMS Stereo Sound, IPX7 Water Resistance, TWS Feature, Up to 12H Total Playtime, Multi-Compatibility Modes and Type-C Charging(Raging Black)', 'OTHERS', 10, '1500', 'bs.jpg'),
(58, 'JBL SPEAKER', 'JBL Go 2, Wireless Portable Bluetooth Speaker with Mic, JBL Signature Sound, Vibrant Color Options with IPX7 Waterproof & AUX (Blue)', 'OTHERS', 10, '2000', 'js.jpg'),
(59, 'boAT SPEAKER', 'boAt Stone 135 Portable Wireless Speaker with 5W RMS Immersive Sound,IPX4 Water Resistance, True Wireless Feature, Up to 11H Total Playtime, Multi-Connectivity Modes With Type C Charging(Active Black)', 'OTHERS', 15, '800', 'bsp.jpg'),
(60, 'SONY SPEAKER', ' Sony Srs-Xb13 Wireless Extra Bass Portable Bluetooth Speaker with 16 Hours Battery Life, Type-C, Ip67 Waterproof, Dustproof, Speaker with Mic, Loud Audio for Phone Calls/Work from Home (Blue), Small', 'OTHERS', 10, '4000', 'ss.png'),
(61, 'boAT HEADPHONES', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Aqua Blue)', 'OTHERS', 10, '1500', 'bh.jpg'),
(62, 'JBL HEADPHONES ', 'JBL Tune 720BT Wireless Over Ear Headphones with Mic, Pure Bass Sound, Upto 76 Hrs Playtime, Speedcharge, Dual Pairing, Customizable Bass with Headphones App, Lightweight, Bluetooth 5.3 (Blue)', 'OTHERS', 10, '5500', 'jh.jpg'),
(63, 'SONY HEADPHONES ', 'Sony WH-CH520, Wireless On-Ear Bluetooth Headphones with Mic, Upto 50 Hours Playtime, DSEE Upscale, Multipoint Connectivity/Dual Pairing,Voice Assistant App Support for Mobile Phones (Black)', 'OTHERS', 10, '5000', 'sh.jpg'),
(64, 'NOISE HEADPHONES ', 'Noise Two Wireless On-Ear Headphones with 50 Hours Playtime, Low Latency(up to 40ms), 4 Play Modes, Dual Pairing, BT v5.3 (Bold Black)', 'OTHERS', 10, '2000', 'nh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `usermobile` varchar(10) NOT NULL,
  `userpassword` varchar(8) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `UNIQUE` (`useremail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `username`, `useremail`, `usermobile`, `userpassword`) VALUES
(1, 'mycart', 'mycart@gmail.com', '9876543210', 'mycart'),
(2, 'abcd', 'abcd@gmail.com', '9898754596', 'abcd123'),
(15, 'ad', 'ad@gmail.com', '1234567890', 'ad123'),
(17, 'test2', 'test2@gmail.com', '9898789878', '9898'),
(18, 'abcdefg', 'abcdefg@gmail.com', '9999999999', '999999');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
