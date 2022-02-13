-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 08:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: iwp
--

-- --------------------------------------------------------

--
-- Table structure for table admin
--

CREATE TABLE admin (
  adminid varchar(20) NOT NULL,
  password varchar(20) NOT NULL,
  empid varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table admin
--

INSERT INTO admin (adminid, password, empid) VALUES
('admin', '1234', 'admin'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table balance
--

CREATE TABLE balance (
  balance int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table balance
--

INSERT INTO balance (balance) VALUES
(78670);

-- --------------------------------------------------------

--
-- Table structure for table booked_hist
--

CREATE TABLE booked_hist (
  phone int(11) NOT NULL,
  name varchar(20) NOT NULL,
  idproof varchar(20) NOT NULL,
  room_type varchar(20) NOT NULL,
  checkin date NOT NULL,
  checkout date NOT NULL,
  days int(11) NOT NULL,
  ac varchar(5) NOT NULL,
  breakfast varchar(5) NOT NULL,
  lunch varchar(5) NOT NULL,
  snacks varchar(5) NOT NULL,
  dinner varchar(5) NOT NULL,
  swimming varchar(5) NOT NULL,
  price int(11) NOT NULL,
  book_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table booked_hist
--

INSERT INTO booked_hist (phone, name, idproof, room_type, checkin, checkout, days, ac, breakfast, lunch, snacks, dinner, swimming, price, book_id) VALUES
(123, 'abc', '123', 'Single bed', '2021-03-31', '2021-04-01', 8, 'false', 'false', 'false', 'false', 'false', 'false', 1000, 10013),
(123, 'abc', '123', 'Single bed', '2021-03-28', '2021-03-30', 3, 'false', 'true', 'true', 'false', 'false', 'false', 2350, 10014),
(123, 'abc', '123', 'Single bed', '2021-03-31', '2021-03-29', 2, 'false', 'false', 'false', 'false', 'false', 'false', 1000, 10016),
(1234, 'def', '1234', 'Single bed', '2021-04-05', '2021-04-07', 2, 'false', 'true', 'true', 'false', 'false', 'false', 2900, 10019),
(123, 'abc', '123', 'Double bed', '2021-03-28', '2021-03-29', 10, 'false', 'false', 'true', 'false', 'false', 'false', 20400, 10017),
(123, 'abc', '123', 'Single bed', '2021-04-07', '2022-01-31', 29, 'false', 'false', 'false', 'false', 'false', 'false', 29000, 10018),
(123, 'abc', '123', 'Single bed', '2022-01-30', '2022-01-31', 1, 'false', 'true', 'true', 'true', 'true', 'true', 2120, 10021),
(9876, 'user ', 'user@gmail.com', 'Single bed', '2022-01-01', '2022-01-11', 10, 'false', 'true', 'true', 'false', 'true', 'true', 14000, 10020);

-- --------------------------------------------------------

--
-- Table structure for table book_id
--

CREATE TABLE book_id (
  book_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table book_id
--

INSERT INTO book_id (book_id) VALUES
(10028);

-- --------------------------------------------------------

--
-- Table structure for table confirmed_booking
--

CREATE TABLE confirmed_booking (
  phone int(11) NOT NULL,
  name varchar(20) NOT NULL,
  idproof varchar(20) NOT NULL,
  room_type varchar(20) NOT NULL,
  checkin date NOT NULL,
  checkout date NOT NULL,
  days int(11) NOT NULL,
  ac varchar(5) NOT NULL,
  breakfast varchar(5) NOT NULL,
  lunch varchar(5) NOT NULL,
  snacks varchar(5) NOT NULL,
  dinner varchar(5) NOT NULL,
  swimming varchar(5) NOT NULL,
  price int(11) NOT NULL,
  book_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table rooms_count
--

CREATE TABLE rooms_count (
  room_type varchar(20) NOT NULL,
  available_rooms int(11) NOT NULL,
  occupied_rooms int(11) NOT NULL,
  price int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table rooms_count
--

INSERT INTO rooms_count (room_type, available_rooms, occupied_rooms, price) VALUES
('Single bed', 5, 0, 1000),
('Double bed', 5, 0, 1800),
('Four bed', 5, 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table temp
--

CREATE TABLE temp (
  pwd varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table temp_book_id_
--

CREATE TABLE temp_book_id_ (
  book_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table temp_room
--

CREATE TABLE temp_room (
  phone int(11) NOT NULL,
  idproof varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table temp_session
--

CREATE TABLE temp_session (
  phone int(11) NOT NULL,
  password varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  email varchar(30) NOT NULL,
  idproof varchar(20) NOT NULL,
  dob date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table temp_session
--

INSERT INTO temp_session (phone, password, name, email, idproof, dob) VALUES
(123, '1234', 'abc', 'abc@gmail.com', '123', '2000-01-01');

-- --------------------------------------------------------

--
-- Table structure for table user_login
--

CREATE TABLE user_login (
  phone int(11) NOT NULL,
  password varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  email varchar(30) NOT NULL,
  idproof varchar(20) NOT NULL,
  dob date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table user_login
--

INSERT INTO user_login (phone, password, name, email, idproof, dob) VALUES
(123, '1234', 'abc', 'abc@gmail.com', '123', '2000-01-01'),
(0, '', '', '', '', '0000-00-00'),
(1234, '12345', 'user1', 'user1@gmail.com', '1234', '2000-01-21'),
(9876, '9876', 'user ', 'user@gmail.com', 'user@gmail.com', '2022-01-01'),
(123, '123', 'a', 'a@gmail.com', 'a@gmail.com', '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table user_room_book
--

CREATE TABLE user_room_book (
  phone int(11) NOT NULL,
  name varchar(20) NOT NULL,
  idproof varchar(20) NOT NULL,
  room_type varchar(20) NOT NULL,
  checkin date NOT NULL,
  checkout date NOT NULL,
  days int(11) NOT NULL,
  ac varchar(5) NOT NULL,
  breakfast varchar(5) NOT NULL,
  lunch varchar(5) NOT NULL,
  snacks varchar(5) NOT NULL,
  dinner varchar(5) NOT NULL,
  swimming varchar(5) NOT NULL,
  status varchar(20) NOT NULL DEFAULT 'Waiting',
  price int(11) NOT NULL,
  book_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table user_room_book
--

INSERT INTO user_room_book (phone, name, idproof, room_type, checkin, checkout, days, ac, breakfast, lunch, snacks, dinner, swimming, status, price, book_id) VALUES
(123, 'abc', '123', 'Double bed', '2022-01-19', '2022-01-26', 7, 'false', 'true', 'true', 'false', 'true', 'true', 'Waiting', 19600, 10025),
(123, 'abc', '123', 'Four bed', '2022-02-02', '2022-01-19', 14, 'false', 'false', 'false', 'true', 'true', 'false', 'Waiting', 47180, 10026),
(123, 'abc', '123', 'Double bed', '0000-00-00', '0000-00-00', 0, 'false', 'true', 'true', 'false', 'false', 'false', 'Waiting', 0, 10027);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;