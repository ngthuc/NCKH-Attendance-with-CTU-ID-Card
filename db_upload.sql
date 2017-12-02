-- Create database
CREATE DATABASE diemdanh_nckh COLLATE=utf8_unicode_ci;

-- Use database
USE diemdanh_nckh;

-- Create table sukien
CREATE TABLE `event` (
  `idEvent` int(128) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nameEvent` varchar(256) NOT NULL,
  `timeStart` time NOT NULL,
  `timeEnd` time NOT NULL,
  `dateEvent` date NOT NULL,
  `locationEvent` varchar(128) NOT NULL,
  `descriptionEvent` varchar(256) DEFAULT NULL,
  `syncStatus` char(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table sinhvien
CREATE TABLE `student` (
  `idStudent` char(10) NOT NULL PRIMARY KEY,
  `firstNameStudent` varchar(256) NOT NULL,
  `lastNameStudent` varchar(256) NOT NULL,
  `idCard` char(10) NOT NULL,
  `idMajor` char(10) NOT NULL,
  `descriptionStudent` varchar(256) DEFAULT NULL,
  `syncStatus` char(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table canbo
CREATE TABLE `staff` (
  `idStaff` char(10) NOT NULL PRIMARY KEY,
  `firstNameStaff` varchar(256) NOT NULL,
  `lastNameStaff` varchar(256) NOT NULL,
  `idCard` char(10) NOT NULL,
  `idDepartment` int(5) NOT NULL,
  `descriptionStaff` varchar(256) DEFAULT NULL,
  `syncStatus` char(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table diemdanh
CREATE TABLE `attendance` (
  `idAttendance` int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idEvent` int(128) NOT NULL,
  `idCard` char(10) NOT NULL,
  `timeIn` datetime DEFAULT NULL,
  `timeOut` datetime DEFAULT NULL,
  `isExistNumberId` char(10) DEFAULT 0,
  `syncStatus` char(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Create table existNumberId
CREATE TABLE `existNumberId` (
  `idKey` int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idCard` char(10) NOT NULL
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
CREATE TABLE `join_event` (
  `idRegister` int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `numberId` char(10) NOT NULL,
  `idEvent` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Add relationship
ALTER TABLE student
    ADD CONSTRAINT student1 FOREIGN KEY (idMajor) REFERENCES major(idMajor) ON DELETE CASCADE;

ALTER TABLE staff
    ADD CONSTRAINT staff1 FOREIGN KEY (idDepartment) REFERENCES department(idDepartment) ON DELETE CASCADE;

ALTER TABLE attendance
    ADD CONSTRAINT attendance FOREIGN KEY (idEvent) REFERENCES event(idEvent) ON DELETE CASCADE;

ALTER TABLE major
    ADD CONSTRAINT major FOREIGN KEY (idFaculty) REFERENCES faculty(idFaculty) ON DELETE NO ACTION;

ALTER TABLE join_event
    ADD CONSTRAINT join_event FOREIGN KEY (idEvent) REFERENCES event(idEvent) ON DELETE CASCADE;

ALTER TABLE department
    ADD CONSTRAINT departmentfaculty FOREIGN KEY (idFaculty) REFERENCES faculty(idFaculty) ON DELETE CASCADE;

ALTER TABLE student
    ADD CONSTRAINT studentmajor FOREIGN KEY (idMajor) REFERENCES major(idMajor) ON DELETE SET NULL;

ALTER TABLE staff
    ADD CONSTRAINT staffdepartment FOREIGN KEY (idDepartment) REFERENCES department(idDepartment) ON DELETE SET NULL;
