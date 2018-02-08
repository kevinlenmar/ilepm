-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 11:11 AM
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
  `id` int(11) NOT NULL,
  `part_number` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumables`
--

INSERT INTO `consumables` (`id`, `part_number`, `unit_name`, `description`) VALUES
(1, '7400', 'IC', 'QUAD 2-INPUT-AND GATES\r\n'),
(2, 'SCR (S4006LS3)', 'Transistors', 'SENSITIVE SCRs (0.8A TO 10A)'),
(3, 'PN200', 'Transistors', 'PNP GENERAL PURPOSE AMPLIFIER\r\n');

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
-- Table structure for table `quantityperconsumable`
--

CREATE TABLE `quantityperconsumable` (
  `id` int(11) NOT NULL,
  `part_number` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantityperconsumable`
--

INSERT INTO `quantityperconsumable` (`id`, `part_number`, `unit_name`, `term`, `month`, `year`, `qty`) VALUES
(1, '7400', 'IC', 'first', 'march', 2017, 12),
(2, 'SCR (S4006LS3)', 'Transistors', 'second', 'october', 2016, 6),
(3, 'PN200', 'Transistors', 'first', 'march', 2017, 5);

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `quantityperconsumable`
--
ALTER TABLE `quantityperconsumable`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `consumables`
--
ALTER TABLE `consumables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
--
-- AUTO_INCREMENT for table `quantityperconsumable`
--
ALTER TABLE `quantityperconsumable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
