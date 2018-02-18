-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 07:30 PM
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
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumable`
--

INSERT INTO `consumable` (`id`, `part_number`, `description`, `category`) VALUES
(379, '7400', 'QUAD 2-INPUT-AND GATES', 1),
(380, '7401', 'QUADRAPLE 2-INPUT POSITIVE-NAND GATES WITH OPEN COLLECTOR OUTPUTS', 1),
(381, '7402', 'QUAD 2-INPUT NOR GATES', 1),
(382, '7403', 'QUAD 2-INPUT NAND GATES WITH OPEN COLLECTOR OUTPUTS', 1),
(383, '7404', 'HEX INVERTER - NOT GATES', 1),
(384, '7406', 'HEX INVERTER?BUFFERS/DRIVERS WITH OPEN-COLLECTOR HIGH-VOLTAGE OUTPUTS', 1),
(385, '7408', 'QUAD 2-INPUT AND GATES', 1),
(386, '7410', 'TRIPLE 3-INPUT NAND GATES', 1),
(387, '7414', 'HEX INVERTERS WITH SCHMITT TRIGGER', 1),
(388, '7420', 'DUAL 4-INPUT NAND GATES', 1),
(389, '7432', 'QUAD 2-INPUT OR GATES', 1),
(390, '7442', 'BCD/DECIMAL DECODERS', 1),
(391, '7447', 'BCD TO 7-SEGMENT DECODER/DRIVER (LOW=ON)', 1),
(392, '7448', 'BCD TO 7-SEGMENT DECODER/DRIVER', 1),
(393, '7474', 'DUAL POSITIVE-EDGE-TRIGGERED D FLIP-FLOPS WITH PRESET, CLEAR AND COMPLEMENTARY OUTPUTS', 1),
(394, '7475', '4-BIT BISTABLE LATCHES', 1),
(395, '7476', 'DUAL JK LEVEL-TRIGGERED FLIP-FLOP  (WITH PRESET AND PRECLEAR)', 1),
(396, '7483', '4-BIT BINARY ADDERS WITH FAST CARRY', 1),
(397, '7485', '4-BIT MAGNITUDE COMPARATORS', 1),
(398, '7486', 'QUAD 2-INPUT EXCLUSIVE-OR GATES', 1),
(399, '7490', 'DECADE AND BINARY COUNTERS', 1),
(400, '7492', 'DIVIDE-BY-TWELVE AND BINARY COUNTERS', 1),
(401, '7493', 'DECADE AND BINARY COUNTERS', 1),
(402, '7495', '4-BIT SHIFT REGISTER', 1),
(403, '74122', 'RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLEMENTARY OUTPUTS', 1),
(404, '74125', 'QUAD TRI-STATE BUFFERS', 1),
(405, '74126', 'QUAD TRI-STATE BUFFERS', 1),
(406, '74138', 'DECODERS/DEMULTIPLEXERS', 1),
(407, '74139', 'DECODERS/DEMULTIPLEXERS', 1),
(408, '74147', '10-LINE TO 4-LINE AND 8-LINE TO 3-LINE PRIORITY ENCODERS', 1),
(409, '74151', 'DATA SELECTOR/MULTIPLEXERS', 1),
(410, '74153', 'DUAL 4-LINE TO 1-LINE DATA SELECTOR/MULTIPLEXER', 1),
(411, '74154', '4-LINE TO 16-LINE DECODERS/DEMULTIPLEXERS', 1),
(412, '74155', 'DUAL 2-LINE TO 4-LINE DECODERS/DEMULTIPLEXERS', 1),
(413, '74157', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 1),
(414, '74158', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 1),
(415, '74164', '8-BIT SERIAL IN/PARALLEL OUT SHIFT REGISTERS', 1),
(416, '74174', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 1),
(417, '74175', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 1),
(418, '74191', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH MODE CONTROL', 1),
(419, '74192', 'SYNCRHONOUS 4-BIT UP/DOWN COUNTERS(DUAL CLOCK WITH CLEAR)', 1),
(420, '74193', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH DUAL CLOCK WITH CLEAR', 1),
(421, '74194', '4-BIT BIDIRECTIONAL UNIVERSAL SHIFT REGISTER', 1),
(422, '74221', 'DUAL NON-RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLIMENTARY OUTPUTS /SCHMITT  TRIGGER', 1),
(423, '74240', 'OCTAL TRI-STATE BUFFERS /LINE DRIVERS/LINE RECEIVERS', 1),
(424, '74241', '12 - AND 14-BIT HYBRID SYNCHRO/RESOLVER-TO-DIGITAL', 1),
(425, '74242', 'QUADRAPLE BUS TRANSCEIVERS', 1),
(426, '74243', 'QUADRAPLE BUS TRANSCEIVERS', 1),
(427, '74244', 'OCTAL TRI-STATE BUFFERS/LINE DRIVERS/LINE RECEIVERS', 1),
(428, '74245', '3-STATE OCTAL BUS TRANSCEIVER', 1),
(429, '74259', '8-BIT ADDRESSABLE LATCHES', 1),
(430, '74279', 'QUAD S-R LATCHES', 1),
(431, '74367', 'HEX BUS DRIVERS WITH 3-STATE OUTPUTS', 1),
(432, '74373', '3 STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 1),
(433, '74374', 'TRI-STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 1),
(434, '74375', '4-BIT LATCHES', 1),
(435, '74472', 'SHIELDED SURFACE MOUNT INDUCTORS', 1),
(436, '74595', 'STMicroelectronics - 8 BIT SHIFT REGISTER WITH OUTPUT LATCHES 3 STATE', 1),
(437, 'MAX3232', '3-V OT 5.5-V MULTICHANNEL RS-232 LINE DRIVER/RECEIVER WITH?15-kV ESD PROTECTION', 1),
(438, 'MAX232N', 'DUAL ELA-232 DRIVERS/RECEIVERS', 1),
(439, 'TC4001(CMOS)', 'QUAD 2 INPUT NOR GATE', 1),
(440, '555 Timer', 'TIMING CIRCUIT', 1),
(441, 'ULN2003', 'HIGH-VOLTAGE, HIGH CURRENT DARLIGNTON ARRAYS', 1),
(442, 'MOC3041', 'OPTICALLY COUPLED BILATERAL SWITCH LIGHT \nACTIVATED', 1),
(443, 'SCR (S4006LS3)', 'SENSITIVE SCRs (0.8A TO 10A)', 2),
(444, 'TRIAC (Q4004L4)', 'TRIACS (0.8A TO 35A)', 2),
(445, 'SCR(S4003LS3)', 'SCRs 1-70 AMPS SENSITIVE GATE', 2),
(446, 'SCR(2N506)', 'SCRs (SILICON CONTROLLED RECTIFIERS)', 2),
(447, 'C9012', 'EPITAXIAL PLANAR PNP TRANSISTOR (GENERAL PURPOSE SWITCHING)', 2),
(448, 'PN100/C9013', 'NPN GENERAL PURPOSE AMPLIFIER', 2),
(449, 'PN200', 'PNP GENERAL PURPOSE AMPLIFIER', 2),
(450, 'TIP31', 'POWER TRANSISTORS(3A,40-100V,40W),SILICON POWER TRANSISTORS', 2),
(451, 'TIP32', 'PNP Epitaxial Silicon Transistor', 2),
(452, 'TIP122', 'NPN Epitaxial Darlington Transistor', 2),
(453, 'TIP127', 'PNP Epitaxial Darlington Transistor', 2),
(456, 'FUSE 0.5A(S)', 'FUSE', 3),
(457, 'FUSE 15A(L)', 'FUSE', 3),
(458, 'FUSE 0.5A(L)', 'FUSE', 3),
(459, '17812P', 'REGULATOR, POSITIVE', 3);

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
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `ctrl_no`, `product_name`, `serial_no`, `procedures`, `standard_criteria`, `category`) VALUES
(3, 1, 'Sanwa DMM CD800a', '06M182696', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(4, 2, 'Sanwa DMM CD800a', '06M182681', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(5, 3, 'Sanwa DMM CD800a', '06M182707', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(6, 4, 'Sanwa DMM CD800a', '06M182709', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(7, 5, 'Sanwa DMM CD800a', '06M182706', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(8, 6, 'Sanwa DMM CD800a', '06M182697', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(9, 7, 'Sanwa DMM CD800a', '04M138809', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(10, 8, 'Sanwa DMM CD800a', '06M182691', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(11, 9, 'Sanwa DMM CD800a', '06M182692', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(12, 10, 'Sanwa DMM CD800a', '04M138806', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(13, 11, 'Sanwa DMM CD800a', '06M182700', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(14, 12, 'Sanwa DMM CD800a', '06M182698', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(15, 13, 'Sanwa DMM CD800a', '06M182701', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(16, 14, 'Sanwa DMM CD800a', '06M182695', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(17, 15, 'Sanwa DMM CD800a', '06M182677', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1),
(18, 16, 'Sanwa DMM CD800a', '06M182699', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `quantityperequipmentunit`
--

CREATE TABLE `quantityperequipmentunit` (
  `id` int(11) NOT NULL,
  `idEquipmentUnit` int(11) DEFAULT NULL,
  `first` int(11) DEFAULT NULL,
  `second` int(11) DEFAULT NULL,
  `summer` int(11) DEFAULT NULL,
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
-- Indexes for table `quantityperequipmentunit`
--
ALTER TABLE `quantityperequipmentunit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEquipmentUnit` (`idEquipmentUnit`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT for table `consumable_category`
--
ALTER TABLE `consumable_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `equipment_category`
--
ALTER TABLE `equipment_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quantityperconsumableunit`
--
ALTER TABLE `quantityperconsumableunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quantityperequipmentunit`
--
ALTER TABLE `quantityperequipmentunit`
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
-- Constraints for table `quantityperequipmentunit`
--
ALTER TABLE `quantityperequipmentunit`
  ADD CONSTRAINT `quantityperequipmentunit_ibfk_1` FOREIGN KEY (`idEquipmentUnit`) REFERENCES `equipment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
