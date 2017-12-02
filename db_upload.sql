-- Create database
CREATE DATABASE diemdanh_nckh COLLATE=utf8_unicode_ci;

-- Use database
USE diemdanh_nckh;

-- Create table sinhvien
CREATE TABLE `student` (
  `idStudent` char(10) NOT NULL PRIMARY KEY,
  `firstNameStudent` varchar(256) NOT NULL,
  `lastNameStudent` varchar(256) NOT NULL,
  `idMajor` char(10) DEFAULT NULL,
  `syncStatus` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table canbo
CREATE TABLE `staff` (
  `idStaff` char(10) NOT NULL PRIMARY KEY,
  `firstNameStaff` varchar(256) NOT NULL,
  `lastNameStaff` varchar(256) NOT NULL,
  `idDepartment` int(5) DEFAULT NULL,
  `syncStatus` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table rfid
CREATE TABLE `rfid` (
  `idCard` char(10) NOT NULL PRIMARY KEY,
  `numberId` char(10) NOT NULL,
  `syncStatus` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table sukien
CREATE TABLE `event` (
  `idEvent` int(128) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nameEvent` varchar(256) NOT NULL,
  `timeStart` time NOT NULL,
  `timeEnd` time NOT NULL,
  `dateEvent` date NOT NULL,
  `locationEvent` varchar(128) NOT NULL,
  `descriptionEvent` varchar(256) DEFAULT NULL,
  `syncStatus` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table diemdanh
CREATE TABLE `attendance` (
  `idAttendance` int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idEvent` int(128) NOT NULL,
  `idCard` char(10) DEFAULT NULL,
  `timeIn` datetime DEFAULT NULL,
  `timeOut` datetime DEFAULT NULL,
  `syncStatus` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table department
CREATE TABLE `department` (
  `idDepartment` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nameDepartment` varchar(128) NOT NULL,
  `idFaculty` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table faculty
CREATE TABLE `faculty` (
  `idFaculty` char(10) NOT NULL PRIMARY KEY,
  `nameFaculty` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table major
CREATE TABLE `major` (
  `idMajor` char(10) NOT NULL PRIMARY KEY,
  `nameMajor` varchar(128) NOT NULL,
  `idFaculty` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table joinEvent
CREATE TABLE `register` (
  `idRegister` int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `numberId` char(10) NOT NULL,
  `idEvent` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table account
CREATE TABLE `account` (
  `username` char(255) NOT NULL PRIMARY KEY,
  `password` char(10) NOT NULL,
  `name` char(128) DEFAULT NULL,
  `role` char(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table apikey
CREATE TABLE `apikey` (
  `idApi` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `valueApi` char(20) NOT NULL,
  `encriptApi` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Add relationship
ALTER TABLE student
    ADD CONSTRAINT studentmajor FOREIGN KEY (idMajor) REFERENCES major(idMajor) ON DELETE CASCADE;

ALTER TABLE staff
    ADD CONSTRAINT staffdepartment FOREIGN KEY (idDepartment) REFERENCES department(idDepartment) ON DELETE CASCADE;

ALTER TABLE attendance
    ADD CONSTRAINT attendance FOREIGN KEY (idEvent) REFERENCES event(idEvent) ON DELETE CASCADE;

ALTER TABLE major
    ADD CONSTRAINT major FOREIGN KEY (idFaculty) REFERENCES faculty(idFaculty) ON DELETE NO ACTION;

ALTER TABLE join_event
    ADD CONSTRAINT join_event FOREIGN KEY (idEvent) REFERENCES event(idEvent) ON DELETE CASCADE;

ALTER TABLE department
    ADD CONSTRAINT departmentfaculty FOREIGN KEY (idFaculty) REFERENCES faculty(idFaculty) ON DELETE CASCADE;

ALTER TABLE rfid
    ADD CONSTRAINT rfidstudent FOREIGN KEY (numberId) REFERENCES student(idStudent) ON DELETE CASCADE;

ALTER TABLE rfid
    ADD CONSTRAINT rfidstaff FOREIGN KEY (numberId) REFERENCES staff(idStaff) ON DELETE CASCADE;

ALTER TABLE attendance
    ADD CONSTRAINT attendancerfid FOREIGN KEY (idCard) REFERENCES rfid(idCard) ON DELETE CASCADE;
