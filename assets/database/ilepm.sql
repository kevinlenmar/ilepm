-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 05:13 AM
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
-- Table structure for table `analogdigitaltrainer2`
--

CREATE TABLE `analogdigitaltrainer2` (
  `ctrl_no` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `procedures` varchar(255) NOT NULL,
  `standard_criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analogdigitaltrainer2`
--

INSERT INTO `analogdigitaltrainer2` (`ctrl_no`, `product_name`, `serial_no`, `procedures`, `standard_criteria`) VALUES
(1, 'Alexan Digital Trainer', '10018464', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(2, 'Alexan Digital Trainer', '10018485', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(3, 'Alexan Digital Trainer', '10018476', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(4, 'Alexan Digital Trainer', '10018474', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(5, 'Alexan Digital Trainer', '10018526', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(6, 'Alexan Digital Trainer', '10018525', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(7, 'Alexan Digital Trainer', '10018479', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(8, 'Alexan Digital Trainer', '10018482', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(9, 'Alexan Digital Trainer', '10018478', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(10, 'Alexan Digital Trainer', '10018480', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(11, 'Alexan Digital Trainer', '10018530', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(12, 'Alexan Digital Trainer', '10015231', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(13, 'Alexan Digital Trainer', '10018471', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(14, 'Alexan Digital Trainer', '10018533', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(15, 'Alexan Digital Trainer', '10018527', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(16, 'Alexan Digital Trainer', '10018483', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(17, 'Alexan Digital Trainer', '10018534', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(18, 'Alexan Digital Trainer', '10018528', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(19, 'Alexan Digital Trainer', '10018470', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(20, 'Alexan Digital Trainer', '10018467', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(21, 'Alexan Digital Trainer', '10018524', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(22, 'Alexan Digital Trainer', '10018532', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(23, 'Alexan Digital Trainer', '10018473', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(24, 'Alexan Digital Trainer', '10018529', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(25, 'Alexan Digital Trainer', '10018481', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(26, 'Alexan Digital Trainer', '10018477', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(27, 'Alexan Digital Trainer', '10018469', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(28, 'Alexan Digital Trainer', '10018472', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(29, 'Alexan Digital Trainer', '10018484', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(30, 'Alexan Digital Trainer', '10018535', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(31, 'Alexan Digital Trainer', '10018536', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional'),
(32, 'Alexan Digital Trainer', '10018468', 'check condition and functionality by testing', 'LEDS, switches, piezo/speaker, monostable and astable timers are functional');

-- --------------------------------------------------------

--
-- Table structure for table `analogmultimeter`
--

CREATE TABLE `analogmultimeter` (
  `ctrl_no` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `procedures` varchar(255) NOT NULL,
  `standard_criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analogmultimeter`
--

INSERT INTO `analogmultimeter` (`ctrl_no`, `product_name`, `serial_no`, `procedures`, `standard_criteria`) VALUES
(1, 'Sanwa YX-6360TRF Multitester', '1389963', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(3, 'Sanwa YX-6360TRF Multitester', '139013', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(5, 'Sanwa YX-6360TRF Multitester', '2235687', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(9, 'Sanwa YX-6360TRF Multitester', '9111264', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(10, 'Sanwa YX-6360TRF Multitester', '', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(12, 'Sanwa YX-6360TRF Multitester', '', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(13, 'Sanwa YX-6360TRF Multitester', '3140598', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(15, 'Sanwa YX-6360TRF Multitester', '', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(17, 'Sanwa YX-6360TRF Multitester', '', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(18, 'Sanwa YX-6360TRF Multitester', '3140597', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(19, 'Sanwa YX-6360TRF Multitester', '3140895', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional');

-- --------------------------------------------------------

--
-- Table structure for table `consumables`
--

CREATE TABLE `consumables` (
  `part_number` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumables`
--

INSERT INTO `consumables` (`part_number`, `unit_name`, `description`, `quantity`) VALUES
('555 Timer', 'IC', 'TIMING CIRCUIT', 0),
('7400', 'IC', 'QUAD 2-INPUT-AND GATES', 0),
('7401', 'IC', 'QUADRAPLE 2-INPUT POSITIVE-NAND GATES WITH OPEN COLLECTOR OUTPUTS', 0),
('7402', 'iC', 'QUAD 2-INPUT NOR GATES', 0),
('7403', 'IC', 'QUAD 2-INPUT NAND GATES WITH OPEN COLLECTOR OUTPUTS', 0),
('7404', 'IC', 'HEX INVERTER - NOT GATES', 0),
('7406', 'IC', 'HEX INVERTER?BUFFERS/DRIVERS WITH OPEN-COLLECTOR HIGH-VOLTAGE OUTPUTS', 0),
('7408', 'IC', 'QUAD 2-INPUT AND GATES', 0),
('7410', 'IC', 'TRIPLE 3-INPUT NAND GATES', 0),
('74122', 'IC', 'RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLEMENTARY OUTPUTS', 0),
('74125', 'IC', 'QUAD TRI-STATE BUFFERS', 0),
('74126', 'IC', 'QUAD TRI-STATE BUFFERS', 0),
('74138', 'IC', 'DECODERS/DEMULTIPLEXERS', 0),
('74139', 'IC', 'DECODERS/DEMULTIPLEXERS', 0),
('7414', 'IC', 'HEX INVERTERS WITH SCHMITT TRIGGER', 0),
('74147', 'IC', '10-LINE TO 4-LINE AND 8-LINE TO 3-LINE PRIORITY ENCODERS', 0),
('74151', 'IC', 'DATA SELECTOR/MULTIPLEXERS', 0),
('74153', 'IC', 'DUAL 4-LINE TO 1-LINE DATA SELECTOR/MULTIPLEXER', 0),
('74154', 'IC', '4-LINE TO 16-LINE DECODERS/DEMULTIPLEXERS', 0),
('74155', 'IC', 'DUAL 2-LINE TO 4-LINE DECODERS/DEMULTIPLEXERS', 0),
('74157', 'IC', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 0),
('74158', 'IC', 'QUAD 2-LINE TO 1-LINE DATA SELECTORS/MULTIPLEXERS', 0),
('74164', 'IC', '8-BIT SERIAL IN/PARALLEL OUT SHIFT REGISTERS', 0),
('74174', 'IC', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 0),
('74175', 'IC', 'HEX/QUAD D FLIP-FLOP WITH CLEAR', 0),
('74191', 'IC', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH MODE CONTROL', 0),
('74192', 'IC', 'SYNCRHONOUS 4-BIT UP/DOWN COUNTERS(DUAL CLOCK WITH CLEAR)', 0),
('74193', 'IC', 'SYNCHRONOUS 4-BIT UP/DOWN COUNTERS WITH DUAL CLOCK WITH CLEAR', 0),
('74194', 'IC', '4-BIT BIDIRECTIONAL UNIVERSAL SHIFT REGISTER', 0),
('7420', 'IC', 'DUAL 4-INPUT NAND GATES', 0),
('74221', 'IC', 'DUAL NON-RETRIGGERABLE ONE-SHOT WITH CLEAR AND COMPLIMENTARY OUTPUTS /SCHMITT  TRIGGER', 0),
('74240', 'IC', 'OCTAL TRI-STATE BUFFERS /LINE DRIVERS/LINE RECEIVERS', 0),
('74241', 'IC', '12 - AND 14-BIT HYBRID SYNCHRO/RESOLVER-TO-DIGITAL', 0),
('74242', 'IC', 'QUADRAPLE BUS TRANSCEIVERS', 0),
('74243', 'IC', 'QUADRAPLE BUS TRANSCEIVERS', 0),
('74244', 'IC', 'OCTAL TRI-STATE BUFFERS/LINE DRIVERS/LINE RECEIVERS', 0),
('74245', 'IC', '3-STATE OCTAL BUS TRANSCEIVER', 0),
('74259', 'IC', '8-BIT ADDRESSABLE LATCHES', 0),
('74279', 'IC', 'QUAD S-R LATCHES', 0),
('7432', 'IC', 'QUAD 2-INPUT OR GATES', 0),
('74367', 'IC', 'HEX BUS DRIVERS WITH 3-STATE OUTPUTS', 0),
('74373', 'IC', '3 STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 0),
('74374', 'IC', 'TRI-STATE OCTAL D-TYPE TRANSPARENT LATCHES AND EDGE TRIGGERED FLIP-FLOPS', 0),
('74375', 'IC', '4-BIT LATCHES', 0),
('7442', 'IC', 'BCD/DECIMAL DECODERS', 0),
('7447', 'IC', 'BCD TO 7-SEGMENT DECODER/DRIVER (LOW=ON)', 0),
('74472', 'IC', 'SHIELDED SURFACE MOUNT INDUCTORS', 0),
('7448', 'IC', 'BCD TO 7-SEGMENT DECODER/DRIVER', 0),
('74595', 'IC', 'STMicroelectronics - 8 BIT SHIFT REGISTER WITH OUTPUT LATCHES 3 STATE', 0),
('7474', 'IC', 'DUAL POSITIVE-EDGE-TRIGGERED D FLIP-FLOPS WITH PRESET, CLEAR AND COMPLEMENTARY OUTPUTS', 0),
('7475', 'IC', '4-BIT BISTABLE LATCHES', 0),
('7476', 'IC', 'DUAL JK LEVEL-TRIGGERED FLIP-FLOP  (WITH PRESET AND PRECLEAR)', 0),
('7483', 'IC', '4-BIT BINARY ADDERS WITH FAST CARRY', 0),
('7485', 'IC', '4-BIT MAGNITUDE COMPARATORS', 0),
('7486', 'IC', 'QUAD 2-INPUT EXCLUSIVE-OR GATES', 0),
('7490', 'IC', 'DECADE AND BINARY COUNTERS', 0),
('7492', 'IC', 'DIVIDE-BY-TWELVE AND BINARY COUNTERS', 0),
('7493', 'IC', 'DECADE AND BINARY COUNTERS', 0),
('7495', 'IC', '4-BIT SHIFT REGISTER', 0),
('C9012', 'Transistors', 'EPITAXIAL PLANAR PNP TRANSISTOR (GENERAL PURPOSE SWITCHING)', 0),
('INFRARED', 'infrared', '', 0),
('LDR', 'LIGHT DEPENDENT RESISTOR', '', 0),
('MAX232N', 'IC', 'DUAL ELA-232 DRIVERS/RECEIVERS', 0),
('MAX3232', 'IC', '3-V OT 5.5-V MULTICHANNEL RS-232 LINE DRIVER/RECEIVER WITH?15-kV ESD PROTECTION', 0),
('MIC', 'acoustic-to-electric transducer or sensor', '', 0),
('MOC3041', 'IC', 'OPTICALLY COUPLED BILATERAL SWITCH LIGHT \nACTIVATED', 0),
('PHOTODIODE', 'photodetector', '', 0),
('PHOTODIODE  on Sensor 2 Pins', 'sensor', '', 0),
('PHOTOTRANSISTOR', 'PHOTOTRANSISTOR', '', 0),
('PN100/C9013', 'Transistors', 'NPN GENERAL PURPOSE AMPLIFIER', 0),
('PN200', 'Transistors', 'PNP GENERAL PURPOSE AMPLIFIER', 0),
('SCR(2N506)', 'Transistors', 'SCRs (SILICON CONTROLLED RECTIFIERS)', 0),
('SCR(S4003LS3)', 'Transistors', 'SCRs 1-70 AMPS SENSITIVE GATE', 0),
('SCR(S4006LS3)', 'Transistors', 'SENSITIVE SCRs (0.8A TO 10A)', 0),
('TC4001(CMOS)', 'IC', 'QUAD 2 INPUT NOR GATE', 0),
('THERMISTOR', 'THERMISTOR DSB', '', 0),
('TIP122', 'Transistors', 'NPN Epitaxial Darlington Transistor', 0),
('TIP127', 'Transistors', 'PNP Epitaxial Darlington Transistor', 0),
('TIP31', 'Transistors', 'POWER TRANSISTORS(3A,40-100V,40W),SILICON POWER TRANSISTORS', 0),
('TIP32', 'Transistors', 'PNP Epitaxial Silicon Transistor', 0),
('TRIAC(Q4004L4)', 'Transistors', 'TRIACS (0.8A TO 35A)', 0),
('ULN2003', 'IC', 'HIGH-VOLTAGE, HIGH CURRENT DARLIGNTON ARRAYS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `consumables_unit_names`
--

CREATE TABLE `consumables_unit_names` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumables_unit_names`
--

INSERT INTO `consumables_unit_names` (`id`, `unit`) VALUES
(1, 'IC'),
(2, 'Transistors'),
(3, 'Fuse'),
(4, 'Sensor');

-- --------------------------------------------------------

--
-- Table structure for table `digitalmultimeters`
--

CREATE TABLE `digitalmultimeters` (
  `ctrl_no` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `procedures` varchar(255) NOT NULL,
  `standard_criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `digitalmultimeters`
--

INSERT INTO `digitalmultimeters` (`ctrl_no`, `product_name`, `serial_no`, `procedures`, `standard_criteria`) VALUES
(1, 'Sanwa DMM CD800a', '06M182696', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(2, 'Sanwa DMM CD800a', '06M182681', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(3, 'Sanwa DMM CD800a', '06M182707', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(4, 'Sanwa DMM CD800a', '06M182709', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(5, 'Sanwa DMM CD800a', '06M182706', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(6, 'Sanwa DMM CD800a', '06M182697', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(7, 'Sanwa DMM CD800a', '04M138809', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(8, 'Sanwa DMM CD800a', '06M182691', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(9, 'Sanwa DMM CD800a', '06M182692', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(10, 'Sanwa DMM CD800a', '04M138806', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(11, 'Sanwa DMM CD800a', '06M182700', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(12, 'Sanwa DMM CD800a', '06M182698', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(13, 'Sanwa DMM CD800a', '06M182701', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(14, 'Sanwa DMM CD800a', '06M182695', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(15, 'Sanwa DMM CD800a', '06M182677', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional'),
(16, 'Sanwa DMM CD800a', '06M182699', 'check condition and functionality by testing', 'Voltmeter, Ammeter, Ohmmeter, continuity tester are functional');

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
-- Table structure for table `picprogrammerequipments`
--

CREATE TABLE `picprogrammerequipments` (
  `ctrl_no` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `procedures` varchar(255) NOT NULL,
  `standard_criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `analogdigitaltrainer2`
--
ALTER TABLE `analogdigitaltrainer2`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- Indexes for table `analogmultimeter`
--
ALTER TABLE `analogmultimeter`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- Indexes for table `consumables`
--
ALTER TABLE `consumables`
  ADD PRIMARY KEY (`part_number`);

--
-- Indexes for table `consumables_unit_names`
--
ALTER TABLE `consumables_unit_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digitalmultimeters`
--
ALTER TABLE `digitalmultimeters`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- Indexes for table `equipment_unit_names`
--
ALTER TABLE `equipment_unit_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picprogrammerequipments`
--
ALTER TABLE `picprogrammerequipments`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analogdigitaltrainer2`
--
ALTER TABLE `analogdigitaltrainer2`
  MODIFY `ctrl_no` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `analogmultimeter`
--
ALTER TABLE `analogmultimeter`
  MODIFY `ctrl_no` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `consumables_unit_names`
--
ALTER TABLE `consumables_unit_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `digitalmultimeters`
--
ALTER TABLE `digitalmultimeters`
  MODIFY `ctrl_no` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `equipment_unit_names`
--
ALTER TABLE `equipment_unit_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `picprogrammerequipments`
--
ALTER TABLE `picprogrammerequipments`
  MODIFY `ctrl_no` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
