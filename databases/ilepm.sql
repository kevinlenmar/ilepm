-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 04:34 PM
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
(609, '7400', 'QUAD 2-INPUT-AND GATES', 1, 0),
(610, '7401', 'QUADRAPLE 2-INPUT POSITIVE-NAND GATES WITH OPEN COLLECTOR OUTPUTS', 1, 0),
(611, '7402', 'QUAD 2-INPUT NOR GATES', 1, 0),
(612, '7403', 'QUAD 2-INPUT NAND GATES WITH OPEN COLLECTOR OUTPUTS', 1, 0),
(613, '7404', 'HEX INVERTER - NOT GATES', 1, 0),
(614, '7406', 'HEX INVERTER?BUFFERS/DRIVERS WITH OPEN-COLLECTOR HIGH-VOLTAGE OUTPUTS', 1, 0),
(615, '7408', 'QUAD 2-INPUT AND GATES', 1, 0),
(616, '7410', 'TRIPLE 3-INPUT NAND GATES', 1, 0),
(617, '7414', 'HEX INVERTERS WITH SCHMITT TRIGGER', 1, 0),
(618, '7420', 'DUAL 4-INPUT NAND GATES', 1, 0),
(619, '7432', 'QUAD 2-INPUT OR GATES', 1, 0),
(620, '7442', 'BCD/DECIMAL DECODERS', 1, 0),
(621, '7447', 'BCD TO 7-SEGMENT DECODER/DRIVER (LOW=ON)', 1, 0),
(622, '7448', 'BCD TO 7-SEGMENT DECODER/DRIVER', 1, 0),
(623, '7474', 'DUAL POSITIVE-EDGE-TRIGGERED D FLIP-FLOPS WITH PRESET, CLEAR AND COMPLEMENTARY OUTPUTS', 1, 0),
(624, '7475', '4-BIT BISTABLE LATCHES', 1, 0),
(625, '7476', 'DUAL JK LEVEL-TRIGGERED FLIP-FLOP  (WITH PRESET AND PRECLEAR)', 1, 0),
(626, '7483', '4-BIT BINARY ADDERS WITH FAST CARRY', 1, 0),
(627, '7485', '4-BIT MAGNITUDE COMPARATORS', 1, 0),
(628, '7486', 'QUAD 2-INPUT EXCLUSIVE-OR GATES', 1, 0),
(629, '7490', 'DECADE AND BINARY COUNTERS', 1, 0),
(630, '7492', 'DIVIDE-BY-TWELVE AND BINARY COUNTERS', 1, 0),
(631, '7493', 'DECADE AND BINARY COUNTERS', 1, 0),
(632, '7495', '4-BIT SHIFT REGISTER', 1, 0),
(633, '74122', 'RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLEMENTARY OUTPUTS', 1, 0),
(634, '74125', 'QUAD TRI-STATE BUFFERS', 1, 0),
(635, '74126', 'QUAD TRI-STATE BUFFERS', 1, 0),
(636, '74138', 'DECODERS/DEMULTIPLEXERS', 1, 0),
(637, '74139', 'DECODERS/DEMULTIPLEXERS', 1, 0),
(638, '74147', '10-LINE TO 4-LINE AND 8-LINE TO 3-LINE PRIORITY ENCODERS', 1, 0),
(639, '74151', 'DATA SELECTOR/MULTIPLEXERS', 1, 0),
(640, '74153', 'DUAL 4-LINE TO 1-LINE DATA SELECTOR/MULTIPLEXER', 1, 0),
(641, '74154', '4-LINE TO 16-LINE DECODERS/DEMULTIPLEXERS', 1, 0),
(642, '74155', 'DUAL 2-LINE TO 4-LINE DECODERS/DEMULTIPLEXERS', 1, 0),
(643, '74157', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 1, 0),
(644, '74158', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 1, 0),
(645, '74164', '8-BIT SERIAL IN/PARALLEL OUT SHIFT REGISTERS', 1, 0),
(646, '74174', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 1, 0),
(647, '74175', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 1, 0),
(648, '74191', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH MODE CONTROL', 1, 0),
(649, '74192', 'SYNCRHONOUS 4-BIT UP/DOWN COUNTERS(DUAL CLOCK WITH CLEAR)', 1, 0),
(650, '74193', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH DUAL CLOCK WITH CLEAR', 1, 0),
(651, '74194', '4-BIT BIDIRECTIONAL UNIVERSAL SHIFT REGISTER', 1, 0),
(652, '74221', 'DUAL NON-RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLIMENTARY OUTPUTS /SCHMITT  TRIGGER', 1, 0),
(653, '74240', 'OCTAL TRI-STATE BUFFERS /LINE DRIVERS/LINE RECEIVERS', 1, 0),
(654, '74241', '12 - AND 14-BIT HYBRID SYNCHRO/RESOLVER-TO-DIGITAL', 1, 0),
(655, '74242', 'QUADRAPLE BUS TRANSCEIVERS', 1, 0),
(656, '74243', 'QUADRAPLE BUS TRANSCEIVERS', 1, 0),
(657, '74244', 'OCTAL TRI-STATE BUFFERS/LINE DRIVERS/LINE RECEIVERS', 1, 0),
(658, '74245', '3-STATE OCTAL BUS TRANSCEIVER', 1, 0),
(659, '74259', '8-BIT ADDRESSABLE LATCHES', 1, 0),
(660, '74279', 'QUAD S-R LATCHES', 1, 0),
(661, '74367', 'HEX BUS DRIVERS WITH 3-STATE OUTPUTS', 1, 0),
(662, '74373', '3 STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 1, 0),
(663, '74374', 'TRI-STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 1, 0),
(664, '74375', '4-BIT LATCHES', 1, 0),
(665, '74472', 'SHIELDED SURFACE MOUNT INDUCTORS', 1, 0),
(666, '74595', 'STMicroelectronics - 8 BIT SHIFT REGISTER WITH OUTPUT LATCHES 3 STATE', 1, 0),
(667, 'MAX3232', '3-V OT 5.5-V MULTICHANNEL RS-232 LINE DRIVER/RECEIVER WITH?15-kV ESD PROTECTION', 1, 0),
(668, 'MAX232N', 'DUAL ELA-232 DRIVERS/RECEIVERS', 1, 0),
(669, 'TC4001(CMOS)', 'QUAD 2 INPUT NOR GATE', 1, 0),
(670, '555 Timer', 'asdwasd', 1, 0),
(671, 'ULN2003', 'HIGH-VOLTAGE, HIGH CURRENT DARLIGNTON ARRAYS', 1, 0),
(672, 'MOC3041', 'OPTICALLY COUPLED BILATERAL SWITCH LIGHT \nACTIVATED', 1, 0),
(673, 'SCR (S4006LS3)', 'SENSITIVE SCRs (0.8A TO 10A)', 2, 0),
(674, 'TRIAC (Q4004L4)', 'TRIACS (0.8A TO 35A)', 2, 0),
(675, 'SCR(S4003LS3)', 'SCRs 1-70 AMPS SENSITIVE GATE', 2, 0),
(676, 'SCR(2N506)', 'SCRs (SILICON CONTROLLED RECTIFIERS)', 2, 0),
(677, 'C9012', 'EPITAXIAL PLANAR PNP TRANSISTOR (GENERAL PURPOSE SWITCHING)', 2, 0),
(678, 'PN100/C9013', 'NPN GENERAL PURPOSE AMPLIFIER', 2, 0),
(679, 'PN200', 'PNP GENERAL PURPOSE AMPLIFIER', 2, 0),
(680, 'TIP31', 'POWER TRANSISTORS(3A,40-100V,40W),SILICON POWER TRANSISTORS', 2, 0),
(681, 'TIP32', 'PNP Epitaxial Silicon Transistor', 2, 0),
(682, 'TIP122', 'NPN Epitaxial Darlington Transistor', 2, 0),
(683, 'TIP127', 'PNP Epitaxial Darlington Transistor', 2, 0);

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
(1, 'IC'),
(2, 'Transistors'),
(3, 'FUSE'),
(4, 'OPERATION AMPLIFIERS'),
(5, 'OPTOCOUPLERS');

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
(39, 1, 'Sanwa DMM CD800a ', '06M182681	', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(40, 2, 'Sanwa DMM CD800a', '06M182681', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(41, 3, 'Sanwa DMM CD800a', '06M182707', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(42, 4, 'Sanwa DMM CD800a', '06M182709', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(43, 5, 'Sanwa DMM CD800a', '06M182706', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(44, 6, 'Sanwa DMM CD800a', '06M182697', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(45, 7, 'Sanwa DMM CD800a', '04M138809', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(46, 8, 'Sanwa DMM CD800a', '06M182691', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(47, 9, 'Sanwa DMM CD800a', '06M182692', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(48, 10, 'Sanwa DMM CD800a', '04M138806', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(49, 11, 'Sanwa DMM CD800a', '06M182700', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(50, 12, 'Sanwa DMM CD800a', '06M182698', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(51, 13, 'Sanwa DMM CD800a', '06M182701', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(52, 14, 'Sanwa DMM CD800a', '06M182695', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(53, 15, 'Sanwa DMM CD800a', '06M182677', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0),
(54, 16, 'Sanwa DMM CD800a', '06M182699', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 2, 0);

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
(1, 'DIGITAL MULTIMETERS'),
(2, 'ANALOG MULTIMETERS');

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
(1, 609, '10', '20', '10', 2017),
(2, 610, '30', '10', '1', 2017),
(3, 611, '0', '0', '0', 2017),
(4, 612, '0', '0', '0', 2017),
(5, 613, '0', '0', '0', 2017),
(6, 614, '0', '0', '0', 2017),
(7, 615, '0', '0', '0', 2017),
(8, 616, '0', '0', '0', 2017),
(9, 617, '0', '0', '0', 2017),
(10, 618, '0', '0', '0', 2017),
(11, 619, '0', '0', '0', 2017),
(12, 620, '0', '0', '0', 2017),
(13, 621, '0', '0', '0', 2017),
(14, 622, '0', '0', '0', 2017),
(15, 623, '0', '0', '0', 2017),
(16, 624, '0', '0', '0', 2017),
(17, 625, '0', '0', '0', 2017),
(18, 626, '0', '0', '0', 2017),
(19, 627, '0', '0', '0', 2017),
(20, 628, '0', '0', '0', 2017),
(21, 629, '0', '0', '0', 2017),
(22, 630, '0', '0', '0', 2017),
(23, 631, '0', '0', '0', 2017),
(24, 632, '0', '0', '0', 2017),
(25, 633, '0', '0', '0', 2017),
(26, 634, '0', '0', '0', 2017),
(27, 635, '0', '0', '0', 2017),
(28, 636, '0', '0', '0', 2017),
(29, 637, '0', '0', '0', 2017),
(30, 638, '0', '0', '0', 2017),
(31, 639, '0', '0', '0', 2017),
(32, 640, '0', '0', '0', 2017),
(33, 641, '0', '0', '0', 2017),
(34, 642, '0', '0', '0', 2017),
(35, 643, '0', '0', '0', 2017),
(36, 644, '0', '0', '0', 2017),
(37, 645, '0', '0', '0', 2017),
(38, 646, '0', '0', '0', 2017),
(39, 647, '0', '0', '0', 2017),
(40, 648, '0', '0', '0', 2017),
(41, 649, '0', '0', '0', 2017),
(42, 650, '0', '0', '0', 2017),
(43, 651, '0', '0', '0', 2017),
(44, 652, '0', '0', '0', 2017),
(45, 653, '0', '0', '0', 2017),
(46, 654, '0', '0', '0', 2017),
(47, 655, '0', '0', '0', 2017),
(48, 656, '0', '0', '0', 2017),
(49, 657, '0', '0', '0', 2017),
(50, 658, '0', '0', '0', 2017),
(51, 659, '0', '0', '0', 2017),
(52, 660, '0', '0', '0', 2017),
(53, 661, '0', '0', '0', 2017),
(54, 662, '0', '0', '0', 2017),
(55, 663, '0', '0', '0', 2017),
(56, 664, '0', '0', '0', 2017),
(57, 665, '0', '0', '0', 2017),
(58, 666, '0', '0', '0', 2017),
(59, 667, '0', '0', '0', 2017),
(60, 668, '0', '0', '0', 2017),
(61, 669, '0', '0', '0', 2017),
(62, 670, '3', '5', '10', 2017),
(63, 671, '0', '0', '0', 2017),
(64, 672, '0', '0', '0', 2017),
(65, 673, '0', '0', '0', 2017),
(66, 674, '0', '0', '0', 2017),
(67, 675, '0', '0', '0', 2017),
(68, 676, '0', '0', '0', 2017),
(69, 677, '0', '0', '0', 2017),
(70, 678, '0', '0', '0', 2017),
(71, 679, '0', '0', '0', 2017),
(72, 680, '0', '0', '0', 2017),
(73, 681, '0', '0', '0', 2017),
(74, 682, '0', '0', '0', 2017),
(75, 683, '0', '0', '0', 2017),
(76, 609, '10', '20', '10', 2018),
(77, 610, '30', '10', '1', 2018),
(78, 611, '0', '0', '0', 2018),
(79, 612, '0', '0', '0', 2018),
(80, 613, '0', '0', '0', 2018),
(81, 614, '0', '0', '0', 2018),
(82, 615, '0', '0', '0', 2018),
(83, 616, '0', '0', '0', 2018),
(84, 617, '0', '0', '0', 2018),
(85, 618, '0', '0', '0', 2018),
(86, 619, '0', '0', '0', 2018),
(87, 620, '0', '0', '0', 2018),
(88, 621, '0', '0', '0', 2018),
(89, 622, '0', '0', '0', 2018),
(90, 623, '0', '0', '0', 2018),
(91, 624, '0', '0', '0', 2018),
(92, 625, '0', '0', '0', 2018),
(93, 626, '0', '0', '0', 2018),
(94, 627, '0', '0', '0', 2018),
(95, 628, '0', '0', '0', 2018),
(96, 629, '0', '0', '0', 2018),
(97, 630, '0', '0', '0', 2018),
(98, 631, '0', '0', '0', 2018),
(99, 632, '0', '0', '0', 2018),
(100, 633, '0', '0', '0', 2018),
(101, 634, '0', '0', '0', 2018),
(102, 635, '0', '0', '0', 2018),
(103, 636, '0', '0', '0', 2018),
(104, 637, '0', '0', '0', 2018),
(105, 638, '0', '0', '0', 2018),
(106, 639, '0', '0', '0', 2018),
(107, 640, '0', '0', '0', 2018),
(108, 641, '0', '0', '0', 2018),
(109, 642, '0', '0', '0', 2018),
(110, 643, '0', '0', '0', 2018),
(111, 644, '0', '0', '0', 2018),
(112, 645, '0', '0', '0', 2018),
(113, 646, '0', '0', '0', 2018),
(114, 647, '0', '0', '0', 2018),
(115, 648, '0', '0', '0', 2018),
(116, 649, '0', '0', '0', 2018),
(117, 650, '0', '0', '0', 2018),
(118, 651, '0', '0', '0', 2018),
(119, 652, '0', '0', '0', 2018),
(120, 653, '0', '0', '0', 2018),
(121, 654, '0', '0', '0', 2018),
(122, 655, '0', '0', '0', 2018),
(123, 656, '0', '0', '0', 2018),
(124, 657, '0', '0', '0', 2018),
(125, 658, '0', '0', '0', 2018),
(126, 659, '0', '0', '0', 2018),
(127, 660, '0', '0', '0', 2018),
(128, 661, '0', '0', '0', 2018),
(129, 662, '0', '0', '0', 2018),
(130, 663, '0', '0', '0', 2018),
(131, 664, '0', '0', '0', 2018),
(132, 665, '0', '0', '0', 2018),
(133, 666, '0', '0', '0', 2018),
(134, 667, '0', '0', '0', 2018),
(135, 668, '0', '0', '0', 2018),
(136, 669, '0', '0', '0', 2018),
(137, 670, '3', '5', '10', 2018),
(138, 671, '0', '0', '0', 2018),
(139, 672, '0', '0', '0', 2018),
(140, 673, '0', '0', '0', 2018),
(141, 674, '0', '0', '0', 2018),
(142, 675, '0', '0', '0', 2018),
(143, 676, '0', '0', '0', 2018),
(144, 677, '0', '0', '0', 2018),
(145, 678, '0', '0', '0', 2018),
(146, 679, '0', '0', '0', 2018),
(147, 680, '0', '0', '0', 2018),
(148, 681, '0', '0', '0', 2018),
(149, 682, '0', '0', '0', 2018),
(150, 683, '0', '0', '0', 2018),
(151, 609, '0', '0', '0', 2019),
(152, 610, '0', '0', '0', 2019),
(153, 611, '0', '0', '0', 2019),
(154, 612, '0', '0', '0', 2019),
(155, 613, '0', '0', '0', 2019),
(156, 614, '0', '0', '0', 2019),
(157, 615, '0', '0', '0', 2019),
(158, 616, '0', '0', '0', 2019),
(159, 617, '0', '0', '0', 2019),
(160, 618, '0', '0', '0', 2019),
(161, 619, '0', '0', '0', 2019),
(162, 620, '0', '0', '0', 2019),
(163, 621, '0', '0', '0', 2019),
(164, 622, '0', '0', '0', 2019),
(165, 623, '0', '0', '0', 2019),
(166, 624, '0', '0', '0', 2019),
(167, 625, '0', '0', '0', 2019),
(168, 626, '0', '0', '0', 2019),
(169, 627, '0', '0', '0', 2019),
(170, 628, '0', '0', '0', 2019),
(171, 629, '0', '0', '0', 2019),
(172, 630, '0', '0', '0', 2019),
(173, 631, '0', '0', '0', 2019),
(174, 632, '0', '0', '0', 2019),
(175, 633, '0', '0', '0', 2019),
(176, 634, '0', '0', '0', 2019),
(177, 635, '0', '0', '0', 2019),
(178, 636, '0', '0', '0', 2019),
(179, 637, '0', '0', '0', 2019),
(180, 638, '0', '0', '0', 2019),
(181, 639, '0', '0', '0', 2019),
(182, 640, '0', '0', '0', 2019),
(183, 641, '0', '0', '0', 2019),
(184, 642, '0', '0', '0', 2019),
(185, 643, '0', '0', '0', 2019),
(186, 644, '0', '0', '0', 2019),
(187, 645, '0', '0', '0', 2019),
(188, 646, '0', '0', '0', 2019),
(189, 647, '0', '0', '0', 2019),
(190, 648, '0', '0', '0', 2019),
(191, 649, '0', '0', '0', 2019),
(192, 650, '0', '0', '0', 2019),
(193, 651, '0', '0', '0', 2019),
(194, 652, '0', '0', '0', 2019),
(195, 653, '0', '0', '0', 2019),
(196, 654, '0', '0', '0', 2019),
(197, 655, '0', '0', '0', 2019),
(198, 656, '0', '0', '0', 2019),
(199, 657, '0', '0', '0', 2019),
(200, 658, '0', '0', '0', 2019),
(201, 659, '0', '0', '0', 2019),
(202, 660, '0', '0', '0', 2019),
(203, 661, '0', '0', '0', 2019),
(204, 662, '0', '0', '0', 2019),
(205, 663, '0', '0', '0', 2019),
(206, 664, '0', '0', '0', 2019),
(207, 665, '0', '0', '0', 2019),
(208, 666, '0', '0', '0', 2019),
(209, 667, '0', '0', '0', 2019),
(210, 668, '0', '0', '0', 2019),
(211, 669, '0', '0', '0', 2019),
(212, 670, '0', '0', '0', 2019),
(213, 671, '0', '0', '0', 2019),
(214, 672, '0', '0', '0', 2019),
(215, 673, '0', '0', '0', 2019),
(216, 674, '0', '0', '0', 2019),
(217, 675, '0', '0', '0', 2019),
(218, 676, '0', '0', '0', 2019),
(219, 677, '0', '0', '0', 2019),
(220, 678, '0', '0', '0', 2019),
(221, 679, '0', '0', '0', 2019),
(222, 680, '0', '0', '0', 2019),
(223, 681, '0', '0', '0', 2019),
(224, 682, '0', '0', '0', 2019),
(225, 683, '0', '0', '0', 2019);

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
(1, 39, '', '', NULL, 2017),
(2, 40, 'wadasd', 'wadasd', 'wadasdasd', 2017),
(3, 41, '', NULL, NULL, 2017),
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
(16, 54, NULL, NULL, NULL, 2017);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=684;

--
-- AUTO_INCREMENT for table `consumable_category`
--
ALTER TABLE `consumable_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `equipment_category`
--
ALTER TABLE `equipment_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `remarkperequipmentunit`
--
ALTER TABLE `remarkperequipmentunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
