-- Create database
CREATE DATABASE diemdanh_nckh;

-- Create table sukien
CREATE TABLE `event` (
  `idEvent` int(128) PRIMARY KEY NOT NULL AUTO_INCREMENT;
  `nameEvent` varchar(256) NOT NULL;
  `timeStart` time NOT NULL;
  `timeEnd` time NOT NULL;
  `dateEvent` date NOT NULL;
  `locationEvent` varchar(128) NOT NULL;
  `descriptionEvent` varchar(256) DEFAULT NULL;
  `syncStatus` char(10) DEFAULT 0;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table sinhvien
CREATE TABLE `student` (
  `idStudent` char(20) PRIMARY KEY NOT NULL;
  `firstNameStudent` varchar(256) NOT NULL;
  `lastNameStudent` varchar(256) NOT NULL;
  `idCard` char(20) NOT NULL;
  `idMajor` char(10) NOT NULL;
  `idFaculty` char(10) NOT NULL;
  `descriptionStudent` varchar(256) DEFAULT NULL;
  `syncStatus` char(10) DEFAULT 0;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table canbo
CREATE TABLE `staff` (
  `idStaff` char(20) PRIMARY KEY NOT NULL;
  `firstNameStaff` varchar(256) NOT NULL;
  `lastNameStaff` varchar(256) NOT NULL;
  `idCard` char(20) NOT NULL;
  `idDepartment` char(10) NOT NULL;
  `idFalcuty` char(10) DEFAULT NULL;
  `descriptionStaff` varchar(256) DEFAULT NULL;
  `syncStatus` char(10) DEFAULT 0;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table rfid
CREATE TABLE `rfid` (
  `idCard` char(20) PRIMARY KEY NOT NULL;
  `numberId` char(20) NOT NULL;
  `isStudent` char DEFAULT 0;
  `syncStatus` char(10) DEFAULT 0;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table diemdanh
CREATE TABLE `attendance` (
  `idAttendance` int(256) PRIMARY KEY NOT NULL AUTO_INCREMENT;
  `idCard` char(20) NOT NULL;
  `timeIn` datetime DEFAULT NULL;
  `timeOut` datetime DEFAULT NULL;
  `isExistNumberId` char(10) DEFAULT 0;
  `syncStatus` char(10) DEFAULT 0;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table existNumberId
CREATE TABLE `existNumberId` (
  `idKey` int(256) PRIMARY KEY NOT NULL AUTO_INCREMENT;
  `idCard` char(20) NOT NULL;
  `numberId` char(20) DEFAULT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table department
CREATE TABLE `department` (
  `idDepartment` int(100) PRIMARY KEY NOT NULL AUTO_INCREMENT;
  `nameDepartment` varchar(128) NOT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table faculty
CREATE TABLE `faculty` (
  `idFaculty` char(20) PRIMARY KEY NOT NULL;
  `nameFaculty` varchar(128) NOT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table major
CREATE TABLE `major` (
  `idMajor` char(20) PRIMARY KEY NOT NULL;
  `nameMajor` varchar(128) NOT NULL;
  `idFaculty` char(20) NOT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table joinEvent
CREATE TABLE `join_event` (
  `idRegister` int(256) PRIMARY KEY NOT NULL AUTO_INCREMENT;
  `numberId` char(20) NOT NULL;
  `idEvent` int(128) NOT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
