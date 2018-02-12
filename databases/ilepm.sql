-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2018 at 02:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumable`
--

INSERT INTO `consumable` (`id`, `part_number`, `description`, `category`) VALUES
(2, '7400', 'QUAD 2-INPUT-AND GATES\r\n', 1),
(3, '7401', 'QUADRAPLE 2-INPUT POSITIVE-NAND GATES WITH OPEN COLLECTOR OUTPUTS\r\n', 1),
(4, '7402', 'QUAD 2-INPUT NOR GATES\r\n', 1),
(5, '7403', 'QUAD 2-INPUT NAND GATES WITH OPEN COLLECTOR OUTPUTS\r\n', 1),
(6, '7404', 'HEX INVERTER - NOT GATES\r\n', 1),
(7, '7406', 'HEX INVERTER BUFFERS/DRIVERS WITH OPEN-COLLECTOR HIGH-VOLTAGE OUTPUTS\r\n', 1),
(8, '7408', 'QUAD 2-INPUT AND GATES\r\n', 1),
(9, '7410', 'TRIPLE 3-INPUT NAND GATES\r\n', 1),
(10, '7414', 'HEX INVERTERS WITH SCHMITT TRIGGER\r\n', 1),
(11, '7420', 'DUAL 4-INPUT NAND GATES\r\n', 1),
(12, '7432', 'QUAD 2-INPUT OR GATES\r\n', 1),
(13, '7442', 'BCD/DECIMAL DECODERS\r\n', 1),
(14, '7447', 'BCD TO 7-SEGMENT DECODER/DRIVER (LOW=ON)\r\n', 1),
(15, '7448', 'BCD TO 7-SEGMENT DECODER/DRIVER\r\n', 1),
(16, '7474', 'DUAL POSITIVE-EDGE-TRIGGERED D FLIP-FLOPS WITH PRESET, CLEAR AND COMPLEMENTARY OUTPUTS\r\n', 1),
(17, '7475', '4-BIT BISTABLE LATCHES\r\n', 1),
(18, '7476', 'DUAL JK LEVEL-TRIGGERED FLIP-FLOP  (WITH PRESET AND PRECLEAR)\r\n', 1),
(19, '7483', '4-BIT BINARY ADDERS WITH FAST CARRY\r\n', 1),
(20, '7485', '4-BIT MAGNITUDE COMPARATORS\r\n', 1),
(21, '7486', 'QUAD 2-INPUT EXCLUSIVE-OR GATES\r\n', 1),
(22, '7490', 'DECADE AND BINARY COUNTERS\r\n', 1),
(23, '7492', 'DIVIDE-BY-TWELVE AND BINARY COUNTERS\r\n', 1),
(24, '7493', 'DECADE AND BINARY COUNTERS\r\n', 1),
(25, '7495', '4-BIT SHIFT REGISTER\r\n', 1),
(26, '74122', 'RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLEMENTARY OUTPUTS\r\n', 1),
(27, '74125', 'QUAD TRI-STATE BUFFERS\r\n', 1),
(28, '74126', 'QUAD TRI-STATE BUFFERS\r\n', 1),
(29, '74138', 'DECODERS/DEMULTIPLEXERS\r\n\r\n', 1),
(30, '74139', 'DECODERS/DEMULTIPLEXERS\r\n', 1),
(31, '74147', '10-LINE TO 4-LINE AND 8-LINE TO 3-LINE PRIORITY ENCODERS\r\n', 1),
(32, '74151', 'DATA SELECTOR/MULTIPLEXERS\r\n', 1),
(33, '74153', 'DUAL 4-LINE TO 1-LINE DATA SELECTOR/MULTIPLEXER\r\n', 1),
(34, '74154', '4-LINE TO 16-LINE DECODERS/DEMULTIPLEXERS\r\n', 1),
(35, '74155', 'DUAL 2-LINE TO 4-LINE DECODERS/DEMULTIPLEXERS\r\n', 1),
(36, '74157', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS\r\n', 1),
(37, '74158', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 1),
(38, '74164', '8-BIT SERIAL IN/PARALLEL OUT SHIFT REGISTERS', 1),
(39, '74174', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 1),
(40, '74175', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 1),
(41, '74191', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH MODE CONTROL', 1),
(42, '74192', 'SYNCRHONOUS 4-BIT UP/DOWN COUNTERS(DUAL CLOCK WITH CLEAR)', 1),
(43, '74193', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH DUAL CLOCK WITH CLEAR', 1),
(44, '74194', '4-BIT BIDIRECTIONAL UNIVERSAL SHIFT REGISTER', 1),
(45, '74221', 'DUAL NON-RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLIMENTARY OUTPUTS /SCHMITT  TRIGGER', 1),
(46, '74240', 'OCTAL TRI-STATE BUFFERS /LINE DRIVERS/LINE RECEIVERS', 1),
(47, '74241', '12 - AND 14-BIT HYBRID SYNCHRO/RESOLVER-TO-DIGITAL', 1),
(48, '74242', 'QUADRAPLE BUS TRANSCEIVERS', 1),
(49, '74243', 'QUADRAPLE BUS TRANSCEIVERS', 1),
(50, '74244', 'OCTAL TRI-STATE BUFFERS/LINE DRIVERS/LINE RECEIVERS', 1),
(51, '74245', '3-STATE OCTAL BUS TRANSCEIVER', 1),
(52, '74259', '8-BIT ADDRESSABLE LATCHES', 1),
(53, '74279', 'QUAD S-R LATCHES', 1),
(54, '74367', 'HEX BUS DRIVERS WITH 3-STATE OUTPUTS\r\n', 1),
(55, '74373', '3 STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS\r\n', 1),
(56, '74374', 'TRI-STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS\r\n', 1),
(57, '74375', '4-BIT LATCHES', 1),
(58, '74472', 'SHIELDED SURFACE MOUNT INDUCTORS', 1),
(59, '74595', 'STMicroelectronics - 8 BIT SHIFT REGISTER WITH OUTPUT LATCHES 3 STATE', 1),
(60, 'MAX3232', '3-V OT 5.5-V MULTICHANNEL RS-232 LINE DRIVER/RECEIVER WITH±15-kV ESD PROTECTION', 1),
(61, 'MAX232N', 'DUAL ELA-232 DRIVERS/RECEIVERS', 1),
(62, 'TC4001(CMOS)', 'QUAD 2 INPUT NOR GATE', 1),
(63, '555 Timer', 'TIMING CIRCUIT', 1),
(64, 'ULN2003', 'HIGH-VOLTAGE, HIGH CURRENT DARLIGNTON ARRAYS\r\n', 1),
(65, 'MOC3041', '\"OPTICALLY COUPLED BILATERAL SWITCH LIGHT \r\nACTIVATED\"\r\n', 1),
(66, 'S4006LS3', 'SENSITIVE SCRs (0.8A TO 10A)\r\n', 2);

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
(3, 'FUSE');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `ctrl_no` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `unit_name` int(11) DEFAULT NULL,
  `procedures` varchar(255) DEFAULT NULL,
  `standard_criteria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `ctrl_no`, `product_name`, `serial_no`, `unit_name`, `procedures`, `standard_criteria`) VALUES
(1, 1, 'Sanwa DMM CD800a', '06M182696', 12, 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_unit_names`
--

CREATE TABLE `equipment_unit_names` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_unit_names`
--

INSERT INTO `equipment_unit_names` (`id`, `unit`) VALUES
(12, 'Digital Multimeters'),
(13, 'PIC Programmer Equipments'),
(14, 'Analog Multimeter'),
(15, 'Analog Digital Trainer 2');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `department` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `department`, `usertype`, `firstname`, `lastname`, `contactnumber`, `image`) VALUES
('admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'College of Computer Engineering', 'administrator', 'admin', 'admin', '123', ''),
('2010-80251', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'College of Computer Engineering', 'administrator', 'Kevin Lenmar', 'Tecson', '09177414696', 'assets/dist/img/avatar.png'),
('14-1465-402', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'College of Computer Engineering', 'viewer', 'EJ', 'Bayot', '09177414696', '');

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
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_name` (`unit_name`);

--
-- Indexes for table `equipment_unit_names`
--
ALTER TABLE `equipment_unit_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idConsumableUnit` (`idConsumableUnit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumable`
--
ALTER TABLE `consumable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `consumable_category`
--
ALTER TABLE `consumable_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `equipment_unit_names`
--
ALTER TABLE `equipment_unit_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `consumable`
--
ALTER TABLE `consumable`
  ADD CONSTRAINT `consumable_ibfk_1` FOREIGN KEY (`category`) REFERENCES `consumable_category` (`id`);

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`unit_name`) REFERENCES `equipment_unit_names` (`id`);

--
-- Constraints for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  ADD CONSTRAINT `quantityperconsumableunit_ibfk_1` FOREIGN KEY (`idConsumableUnit`) REFERENCES `consumable` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
