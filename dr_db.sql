-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2023 at 09:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `AppointID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `ReceptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Appointments`
--

INSERT INTO `Appointments` (`AppointID`, `DoctorID`, `PatientID`, `Date`, `Time`, `ReceptID`) VALUES
(1, 2, 1, '2023-06-15', '10:30:00', 2),
(2, 4, 1, '2023-06-24', '12:15:00', 2),
(3, 3, 1, '2023-06-30', '13:00:00', 3),
(4, 4, 2, '2023-06-21', '13:10:00', 2),
(5, 2, 1, '2023-07-07', '09:10:00', 3),
(6, 1, 1, '2023-06-22', '11:15:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Doctors`
--

CREATE TABLE `Doctors` (
  `Name` varchar(23) DEFAULT NULL,
  `Surname` varchar(23) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `PhoneNr` varchar(10) DEFAULT NULL,
  `Email` varchar(23) DEFAULT NULL,
  `Password` varchar(23) DEFAULT NULL,
  `DoctorID` int(11) NOT NULL,
  `Specialisation` varchar(5) DEFAULT NULL,
  `RoomNr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Doctors`
--

INSERT INTO `Doctors` (`Name`, `Surname`, `Age`, `Gender`, `PhoneNr`, `Email`, `Password`, `DoctorID`, `Specialisation`, `RoomNr`) VALUES
('Jonah', 'Lee', 38, 'M', '0987654321', 'drlee@office.co.za', 'JoLeeDoc@88', 1, 'ENT', 36),
('Megan', 'Miller', 46, 'F', '0129876543', 'drmiller@office.co.za', 'MillMeg#490', 2, 'GP', 41),
('Alex', 'Fourie', 50, 'F', '0123498567', 'drfourie@office.co.za', 'CheeseCake', 3, 'Derm', 35),
('Francois', 'Fouche', 43, 'M', '0129834567', 'drfouche@gmail.co.za', 'FrancFouch', 4, 'Uro', 42);

-- --------------------------------------------------------

--
-- Table structure for table `Patients`
--

CREATE TABLE `Patients` (
  `Name` varchar(23) DEFAULT NULL,
  `Surname` varchar(23) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `PhoneNr` varchar(10) DEFAULT NULL,
  `Email` varchar(23) DEFAULT NULL,
  `Password` varchar(23) DEFAULT NULL,
  `PatientID` int(11) NOT NULL,
  `MedicalAidNr` int(11) DEFAULT NULL,
  `Image` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Patients`
--

INSERT INTO `Patients` (`Name`, `Surname`, `Age`, `Gender`, `PhoneNr`, `Email`, `Password`, `PatientID`, `MedicalAidNr`, `Image`) VALUES
('Joe', 'Jameson', 28, 'M', '076123456', 'joeyj@gmail.com', 'JoeyJay@69', 1, 123456789, 'Tsungai.jpg'),
('Jack', 'Johnson', 31, 'M', '0123456789', 'jackjohn@mail.com', 'Password123', 2, 223456789, 'man.jpg'),
('Andrew', 'Smith', 45, 'M', '0112345678', 'andy@mailstation.com', 'CHOCOLATE', 3, 113456789, ''),
('Kate', 'Andrews', 36, 'F', '0123356789', 'kateand@mail.co.za', 'PaSsWoRdS#248*', 4, 123456788, '');

-- --------------------------------------------------------

--
-- Table structure for table `Receptionists`
--

CREATE TABLE `Receptionists` (
  `Name` varchar(23) DEFAULT NULL,
  `Surname` varchar(23) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `PhoneNr` varchar(10) DEFAULT NULL,
  `Email` varchar(23) DEFAULT NULL,
  `Password` varchar(23) DEFAULT NULL,
  `Rank` tinyint(1) DEFAULT NULL,
  `ReceptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Receptionists`
--

INSERT INTO `Receptionists` (`Name`, `Surname`, `Age`, `Gender`, `PhoneNr`, `Email`, `Password`, `Rank`, `ReceptID`) VALUES
('Dorothy', 'Dean', 56, 'F', '0831234567', 'dorothy@dean.co.za', 'Dorothy*67', 2, 1),
('Geraldine', 'Wilson', 50, 'F', '0123456789', 'geraldine@gmail.co.za', 'GerWil246', 1, 2),
('Jonathan', 'Jacobs', 48, 'M', '0113456789', 'jono@gmail.com', 'JonoJaco@23', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`AppointID`);

--
-- Indexes for table `Doctors`
--
ALTER TABLE `Doctors`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `Receptionists`
--
ALTER TABLE `Receptionists`
  ADD PRIMARY KEY (`ReceptID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `AppointID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`ReceptID`) REFERENCES `Receptionists` (`ReceptID`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`PatientID`) REFERENCES `Patients` (`PatientID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
