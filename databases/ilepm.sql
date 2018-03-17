-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 04:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilepm`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumable`
--

CREATE TABLE `consumable` (
  `id` int(11) NOT NULL,
  `part_number` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumable`
--

INSERT INTO `consumable` (`id`, `part_number`, `description`, `category`, `flag`) VALUES
(689, 'SCR (S4006LS3)', 'SENSITIVE SCRs (0.8A TO 10A)\r\n', 7, 0),
(690, 'SCR (S4006LS3)', 'SENSITIVE SCRs (0.8A TO 10A)\r\n', 7, 1),
(1011, '7400', 'QUAD 2-INPUT-AND GATES', 6, 0),
(1012, '7401', 'QUADRAPLE 2-INPUT POSITIVE-NAND GATES WITH OPEN COLLECTOR OUTPUTS', 6, 0),
(1013, '7402', 'QUAD 2-INPUT NOR GATES', 6, 0),
(1014, '7403', 'QUAD 2-INPUT NAND GATES WITH OPEN COLLECTOR OUTPUTS', 6, 0),
(1015, '7404', 'HEX INVERTER - NOT GATES', 6, 0),
(1016, '7406', 'HEX INVERTER?BUFFERS/DRIVERS WITH OPEN-COLLECTOR HIGH-VOLTAGE OUTPUTS', 6, 0),
(1017, '7408', 'QUAD 2-INPUT AND GATES', 6, 0),
(1018, '7410', 'TRIPLE 3-INPUT NAND GATES', 6, 0),
(1019, '7414', 'HEX INVERTERS WITH SCHMITT TRIGGER', 6, 0),
(1020, '7420', 'DUAL 4-INPUT NAND GATES', 6, 0),
(1021, '7432', 'QUAD 2-INPUT OR GATES', 6, 0),
(1022, '7442', 'BCD/DECIMAL DECODERS', 6, 0),
(1023, '7447', 'BCD TO 7-SEGMENT DECODER/DRIVER (LOW=ON)', 6, 0),
(1024, '7448', 'BCD TO 7-SEGMENT DECODER/DRIVER', 6, 0),
(1025, '7474', 'DUAL POSITIVE-EDGE-TRIGGERED D FLIP-FLOPS WITH PRESET, CLEAR AND COMPLEMENTARY OUTPUTS', 6, 0),
(1026, '7475', '4-BIT BISTABLE LATCHES', 6, 0),
(1027, '7476', 'DUAL JK LEVEL-TRIGGERED FLIP-FLOP  (WITH PRESET AND PRECLEAR)', 6, 0),
(1028, '7483', '4-BIT BINARY ADDERS WITH FAST CARRY', 6, 0),
(1029, '7485', '4-BIT MAGNITUDE COMPARATORS', 6, 0),
(1030, '7486', 'QUAD 2-INPUT EXCLUSIVE-OR GATES', 6, 0),
(1031, '7490', 'DECADE AND BINARY COUNTERS', 6, 0),
(1032, '7492', 'DIVIDE-BY-TWELVE AND BINARY COUNTERS', 6, 0),
(1033, '7493', 'DECADE AND BINARY COUNTERS', 6, 0),
(1034, '7495', '4-BIT SHIFT REGISTER', 6, 0),
(1035, '74122', 'RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLEMENTARY OUTPUTS', 6, 0),
(1036, '74125', 'QUAD TRI-STATE BUFFERS', 6, 0),
(1037, '74126', 'QUAD TRI-STATE BUFFERS', 6, 0),
(1038, '74138', 'DECODERS/DEMULTIPLEXERS', 6, 0),
(1039, '74139', 'DECODERS/DEMULTIPLEXERS', 6, 0),
(1040, '74147', '10-LINE TO 4-LINE AND 8-LINE TO 3-LINE PRIORITY ENCODERS', 6, 0),
(1041, '74151', 'DATA SELECTOR/MULTIPLEXERS', 6, 0),
(1042, '74153', 'DUAL 4-LINE TO 1-LINE DATA SELECTOR/MULTIPLEXER', 6, 0),
(1043, '74154', '4-LINE TO 16-LINE DECODERS/DEMULTIPLEXERS', 6, 0),
(1044, '74155', 'DUAL 2-LINE TO 4-LINE DECODERS/DEMULTIPLEXERS', 6, 0),
(1045, '74157', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 6, 0),
(1046, '74158', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 6, 0),
(1047, '74164', '8-BIT SERIAL IN/PARALLEL OUT SHIFT REGISTERS', 6, 0),
(1048, '74174', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 6, 0),
(1049, '74175', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 6, 0),
(1050, '74191', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH MODE CONTROL', 6, 0),
(1051, '74192', 'SYNCRHONOUS 4-BIT UP/DOWN COUNTERS(DUAL CLOCK WITH CLEAR)', 6, 0),
(1052, '74193', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH DUAL CLOCK WITH CLEAR', 6, 0),
(1053, '74194', '4-BIT BIDIRECTIONAL UNIVERSAL SHIFT REGISTER', 6, 0),
(1054, '74221', 'DUAL NON-RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLIMENTARY OUTPUTS /SCHMITT  TRIGGER', 6, 0),
(1055, '74240', 'OCTAL TRI-STATE BUFFERS /LINE DRIVERS/LINE RECEIVERS', 6, 0),
(1056, '74241', '12 - AND 14-BIT HYBRID SYNCHRO/RESOLVER-TO-DIGITAL', 6, 0),
(1057, '74242', 'QUADRAPLE BUS TRANSCEIVERS', 6, 0),
(1058, '74243', 'QUADRAPLE BUS TRANSCEIVERS', 6, 0),
(1059, '74244', 'OCTAL TRI-STATE BUFFERS/LINE DRIVERS/LINE RECEIVERS', 6, 0),
(1060, '74245', '3-STATE OCTAL BUS TRANSCEIVER', 6, 0),
(1061, '74259', '8-BIT ADDRESSABLE LATCHES', 6, 0),
(1062, '74279', 'QUAD S-R LATCHES', 6, 0),
(1063, '74367', 'HEX BUS DRIVERS WITH 3-STATE OUTPUTS', 6, 0),
(1064, '74373', '3 STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 6, 0),
(1065, '74374', 'TRI-STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 6, 0),
(1066, '74375', '4-BIT LATCHES', 6, 0),
(1067, '74472', 'SHIELDED SURFACE MOUNT INDUCTORS', 6, 0),
(1068, '74595', 'STMicroelectronics - 8 BIT SHIFT REGISTER WITH OUTPUT LATCHES 3 STATE', 6, 0),
(1069, 'MAX3232', '3-V OT 5.5-V MULTICHANNEL RS-232 LINE DRIVER/RECEIVER WITH?15-kV ESD PROTECTION', 6, 0),
(1070, 'MAX232N', 'DUAL ELA-232 DRIVERS/RECEIVERS', 6, 0),
(1071, 'TC4001(CMOS)', 'QUAD 2 INPUT NOR GATE', 6, 0),
(1072, '555 Timer', 'TIMING CIRCUIT', 6, 0),
(1073, 'ULN2003', 'HIGH-VOLTAGE, HIGH CURRENT DARLIGNTON ARRAYS', 6, 0),
(1074, 'MOC3041', 'OPTICALLY COUPLED BILATERAL SWITCH LIGHT \nACTIVATED', 6, 0),
(1075, 'PN100', 'NPN', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `consumable_category`
--

CREATE TABLE `consumable_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumable_category`
--

INSERT INTO `consumable_category` (`id`, `category_name`) VALUES
(6, 'IC'),
(7, 'Transistors');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `ctrl_no` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `procedures` varchar(255) NOT NULL,
  `standard_criteria` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `ctrl_no`, `product_name`, `serial_no`, `procedures`, `standard_criteria`, `category`, `flag`) VALUES
(39, 1, 'Sanwa DMM CD800a ', 'awdasdasdadasd', ' updates', ' awawawawaw', 2, 0),
(40, 2, 'Sanwa DMM CD800a', '06M182681', '  check condition and functionality by testing', '  Voltmeter, Ammeter, Ohmmeter, continuity tester are fawaw', 2, 1),
(41, 3, 'Sanwa DMM CD800a', '06M182707', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 1),
(42, 4, 'Sanwa DMM CD800a', '06M182709', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 1),
(43, 5, 'Sanwa DMM CD800a', '06M182706', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 1),
(44, 6, 'Sanwa DMM CD800a', '06M182697', '   check condition and functionality by testing', '   Voltmeter, Ammeter, Ohmmeter, continuity tester are yuuyiyoefsdf', 2, 1),
(45, 7, 'Sanwa DMM CD800a', '04M138809', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 1),
(46, 8, 'Sanwa DMM CD800a', '06M182691', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 1),
(47, 9, 'Sanwa DMM CD800a', '06M182692', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 1),
(48, 10, 'Sanwa DMM CD800a', '04M138806', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 1),
(49, 11, 'Sanwa DMM CD800a', '06M182700', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(50, 12, 'Sanwa DMM CD800a', '06M182698', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(51, 0, 'Sanwa DMM CD800a', '06M182701', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(52, 14, 'Sanwa DMM CD800a', '06M182695', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(53, 15, 'Sanwa DMM CD800a', '06M182677', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(54, 16, 'Sanwa DMM CD800a', '06M182699', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(57, 1, 'Sanwa DMM CD800a', '06M182696', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 1),
(58, 2, 'Sanwa DMM CD800a', '06M182681', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(59, 3, 'Sanwa DMM CD800a', '06M182707', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(60, 4, 'Sanwa DMM CD800a', '06M182709', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(61, 5, 'Sanwa DMM CD800a', '06M182706', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(62, 6, 'Sanwa DMM CD800a', '06M182697', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(63, 7, 'Sanwa DMM CD800a', '04M138809', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(64, 8, 'Sanwa DMM CD800a', '06M182691', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(65, 9, 'Sanwa DMM CD800a', '06M182692', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(66, 10, 'Sanwa DMM CD800a', '04M138806', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(67, 11, 'Sanwa DMM CD800a', '06M182700', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(68, 12, 'Sanwa DMM CD800a', '06M182698', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(69, 13, 'Sanwa DMM CD800a', '06M182701', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(70, 14, 'Sanwa DMM CD800a', '06M182695', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(71, 15, 'Sanwa DMM CD800a', '06M182677', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(72, 16, 'Sanwa DMM CD800a', '06M182699', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 4, 0),
(73, 1, 'Alexan Digital Trainer', '10018464', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(74, 2, 'Alexan Digital Trainer', '10018485', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(75, 3, 'Alexan Digital Trainer', '10018476', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(76, 4, 'Alexan Digital Trainer', '10018474', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(77, 5, 'Alexan Digital Trainer', '10018526', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(78, 6, 'Alexan Digital Trainer', '10018525', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(79, 7, 'Alexan Digital Trainer', '10018479', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(80, 8, 'Alexan Digital Trainer', '10018482', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(81, 9, 'Alexan Digital Trainer', '10018478', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(82, 10, 'Alexan Digital Trainer', '10018480', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(83, 11, 'Alexan Digital Trainer', '10018530', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(84, 12, 'Alexan Digital Trainer', '10015231', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(85, 13, 'Alexan Digital Trainer', '10018471', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(86, 14, 'Alexan Digital Trainer', '10018533', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(87, 15, 'Alexan Digital Trainer', '10018527', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(88, 16, 'Alexan Digital Trainer', '10018483', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(89, 17, 'Alexan Digital Trainer', '10018534', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(90, 18, 'Alexan Digital Trainer', '10018528', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(91, 19, 'Alexan Digital Trainer', '10018470', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(92, 20, 'Alexan Digital Trainer', '10018467', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(93, 21, 'Alexan Digital Trainer', '10018524', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(94, 22, 'Alexan Digital Trainer', '10018532', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(95, 23, 'Alexan Digital Trainer', '10018473', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(96, 24, 'Alexan Digital Trainer', '10018529', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(97, 25, 'Alexan Digital Trainer', '10018481', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(98, 26, 'Alexan Digital Trainer', '10018477', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(99, 27, 'Alexan Digital Trainer', '10018469', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(100, 28, 'Alexan Digital Trainer', '10018472', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(101, 29, 'Alexan Digital Trainer', '10018484', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(102, 30, 'Alexan Digital Trainer', '10018535', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(103, 31, 'Alexan Digital Trainer', '10018536', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0),
(104, 32, 'Alexan Digital Trainer', '10018468', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_category`
--

CREATE TABLE `equipment_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_category`
--

INSERT INTO `equipment_category` (`id`, `category_name`) VALUES
(2, 'ANALOG MULTIMETERS'),
(4, 'DIGITAL MULTIMETERS'),
(5, 'ANALOG DIGITAL TRAINER 2'),
(6, 'MICROCONTROLLER TRAINER'),
(7, 'LOGIC PROBES');

-- --------------------------------------------------------

--
-- Table structure for table `problemandsolution`
--

CREATE TABLE `problemandsolution` (
  `id` int(11) NOT NULL,
  `idConsumableUnit` int(11) NOT NULL,
  `date_problem` year(4) DEFAULT NULL,
  `problem` varchar(255) DEFAULT NULL,
  `date_solution` year(4) DEFAULT NULL,
  `solution` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quantityperconsumableunit`
--

CREATE TABLE `quantityperconsumableunit` (
  `id` int(11) NOT NULL,
  `idConsumableUnit` int(11) DEFAULT NULL,
  `first` varchar(255) DEFAULT NULL,
  `second` varchar(255) NOT NULL,
  `summer` varchar(255) NOT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantityperconsumableunit`
--

INSERT INTO `quantityperconsumableunit` (`id`, `idConsumableUnit`, `first`, `second`, `summer`, `year`) VALUES
(1, 689, '5', '7', '10', 2017),
(2, 690, '0', '0', '0', 2017),
(3, 1011, '0', '0', '0', 2018),
(4, 1012, '0', '0', '0', 2018),
(5, 1013, '0', '0', '0', 2018),
(6, 1014, '0', '0', '0', 2018),
(7, 1015, '0', '0', '0', 2018),
(8, 1016, '0', '0', '0', 2018),
(9, 1017, '0', '0', '0', 2018),
(10, 1018, '0', '0', '0', 2018),
(11, 1019, '0', '0', '0', 2018),
(12, 1020, '0', '0', '0', 2018),
(13, 1021, '0', '0', '0', 2018),
(14, 1022, '0', '0', '0', 2018),
(15, 1023, '0', '0', '0', 2018),
(16, 1024, '0', '0', '0', 2018),
(17, 1025, '0', '0', '0', 2018),
(18, 1026, '0', '0', '0', 2018),
(19, 1027, '0', '0', '0', 2018),
(20, 1028, '0', '0', '0', 2018),
(21, 1029, '0', '0', '0', 2018),
(22, 1030, '0', '0', '0', 2018),
(23, 1031, '0', '0', '0', 2018),
(24, 1032, '0', '0', '0', 2018),
(25, 1033, '0', '0', '0', 2018),
(26, 1034, '0', '0', '0', 2018),
(27, 1035, '0', '0', '0', 2018),
(28, 1036, '0', '0', '0', 2018),
(29, 1037, '0', '0', '0', 2018),
(30, 1038, '0', '0', '0', 2018),
(31, 1039, '0', '0', '0', 2018),
(32, 1040, '0', '0', '0', 2018),
(33, 1041, '0', '0', '0', 2018),
(34, 1042, '0', '0', '0', 2018),
(35, 1043, '0', '0', '0', 2018),
(36, 1044, '0', '0', '0', 2018),
(37, 1045, '0', '0', '0', 2018),
(38, 1046, '0', '0', '0', 2018),
(39, 1047, '0', '0', '0', 2018),
(40, 1048, '0', '0', '0', 2018),
(41, 1049, '0', '0', '0', 2018),
(42, 1050, '0', '0', '0', 2018),
(43, 1051, '0', '0', '0', 2018),
(44, 1052, '0', '0', '0', 2018),
(45, 1053, '0', '0', '0', 2018),
(46, 1054, '0', '0', '0', 2018),
(47, 1055, '0', '0', '0', 2018),
(48, 1056, '0', '0', '0', 2018),
(49, 1057, '0', '0', '0', 2018),
(50, 1058, '0', '0', '0', 2018),
(51, 1059, '0', '0', '0', 2018),
(52, 1060, '0', '0', '0', 2018),
(53, 1061, '0', '0', '0', 2018),
(54, 1062, '0', '0', '0', 2018),
(55, 1063, '0', '0', '0', 2018),
(56, 1064, '0', '0', '0', 2018),
(57, 1065, '0', '0', '0', 2018),
(58, 1066, '0', '0', '0', 2018),
(59, 1067, '0', '0', '0', 2018),
(60, 1068, '0', '0', '0', 2018),
(61, 1069, '0', '0', '0', 2018),
(62, 1070, '0', '0', '0', 2018),
(63, 1071, '0', '0', '0', 2018),
(64, 1072, '0', '0', '0', 2018),
(65, 1073, '0', '0', '0', 2018),
(66, 1074, '0', '0', '0', 2018),
(67, 689, '0', '0', '0', 2018),
(68, 690, '0', '0', '0', 2018),
(69, 689, '1', '5', '10', 2019),
(70, 690, '0', '0', '0', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `remarkperequipmentunit`
--

CREATE TABLE `remarkperequipmentunit` (
  `id` int(11) NOT NULL,
  `idEquipmentUnit` int(11) DEFAULT NULL,
  `firstremark` varchar(255) DEFAULT NULL,
  `secondremark` varchar(255) DEFAULT NULL,
  `summerremark` varchar(22) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarkperequipmentunit`
--

INSERT INTO `remarkperequipmentunit` (`id`, `idEquipmentUnit`, `firstremark`, `secondremark`, `summerremark`, `year`) VALUES
(1, 39, 'BMVNVB', 'JIJdsdsd', NULL, 2017),
(2, 40, NULL, NULL, NULL, 2017),
(3, 41, NULL, NULL, NULL, 2017),
(4, 42, NULL, NULL, NULL, 2017),
(5, 43, NULL, NULL, NULL, 2017),
(6, 44, NULL, NULL, NULL, 2017),
(7, 45, NULL, NULL, NULL, 2017),
(8, 46, NULL, NULL, NULL, 2017),
(9, 47, NULL, NULL, NULL, 2017),
(10, 48, NULL, NULL, NULL, 2017),
(11, 49, NULL, NULL, NULL, 2017),
(12, 50, NULL, NULL, NULL, 2017),
(13, 51, NULL, NULL, NULL, 2017),
(14, 52, NULL, NULL, NULL, 2017),
(15, 53, NULL, NULL, NULL, 2017),
(16, 54, NULL, NULL, NULL, 2017),
(18, 39, NULL, NULL, NULL, 2018),
(19, 40, NULL, NULL, NULL, 2018),
(20, 41, NULL, NULL, NULL, 2018),
(21, 42, NULL, NULL, NULL, 2018),
(22, 43, NULL, NULL, NULL, 2018),
(23, 44, NULL, NULL, NULL, 2018),
(24, 45, NULL, NULL, NULL, 2018),
(25, 46, NULL, NULL, NULL, 2018),
(26, 47, NULL, NULL, NULL, 2018),
(27, 48, NULL, NULL, NULL, 2018),
(28, 49, NULL, NULL, NULL, 2018),
(29, 50, NULL, NULL, NULL, 2018),
(30, 51, NULL, NULL, NULL, 2018),
(31, 52, NULL, NULL, NULL, 2018),
(32, 53, NULL, NULL, NULL, 2018),
(33, 54, NULL, NULL, NULL, 2018),
(34, 57, NULL, NULL, NULL, 2018),
(35, 58, NULL, NULL, NULL, 2018),
(36, 59, NULL, NULL, NULL, 2018),
(37, 60, NULL, NULL, NULL, 2018),
(38, 61, NULL, NULL, NULL, 2018),
(39, 62, NULL, NULL, NULL, 2018),
(40, 63, NULL, NULL, NULL, 2018),
(41, 64, NULL, NULL, NULL, 2018),
(42, 65, NULL, NULL, NULL, 2018),
(43, 66, NULL, NULL, NULL, 2018),
(44, 67, NULL, NULL, NULL, 2018),
(45, 68, NULL, NULL, NULL, 2018),
(46, 69, NULL, NULL, NULL, 2018),
(47, 70, NULL, NULL, NULL, 2018),
(48, 71, NULL, NULL, NULL, 2018),
(49, 72, NULL, NULL, NULL, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `department`, `firstname`, `lastname`, `contactnumber`, `image`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'College of Computer Engineering', 'admin', 'admin', '123', ''),
(2, '2010-80251', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'College of Computer Engineering', 'Kevin Lenmar', 'Tecson', '111', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumable`
--
ALTER TABLE `consumable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `consumable_category`
--
ALTER TABLE `consumable_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `equipment_category`
--
ALTER TABLE `equipment_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problemandsolution`
--
ALTER TABLE `problemandsolution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idConsumableUnit` (`idConsumableUnit`);

--
-- Indexes for table `remarkperequipmentunit`
--
ALTER TABLE `remarkperequipmentunit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEquipmentUnit` (`idEquipmentUnit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumable`
--
ALTER TABLE `consumable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1076;

--
-- AUTO_INCREMENT for table `consumable_category`
--
ALTER TABLE `consumable_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `equipment_category`
--
ALTER TABLE `equipment_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `problemandsolution`
--
ALTER TABLE `problemandsolution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `remarkperequipmentunit`
--
ALTER TABLE `remarkperequipmentunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consumable`
--
ALTER TABLE `consumable`
  ADD CONSTRAINT `consumable_ibfk_1` FOREIGN KEY (`category`) REFERENCES `consumable_category` (`id`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`category`) REFERENCES `equipment_category` (`id`);

--
-- Constraints for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  ADD CONSTRAINT `quantityperconsumableunit_ibfk_1` FOREIGN KEY (`idConsumableUnit`) REFERENCES `consumable` (`id`);

--
-- Constraints for table `remarkperequipmentunit`
--
ALTER TABLE `remarkperequipmentunit`
  ADD CONSTRAINT `remarkperequipmentunit_ibfk_1` FOREIGN KEY (`idEquipmentUnit`) REFERENCES `equipment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
