-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 11.43
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charm_coffe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_tbl`
--

CREATE TABLE `menu_tbl` (
  `order_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `item_name` varchar(15) NOT NULL,
  `item_type` varchar(9) NOT NULL,
  `item_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `transaction_amount` int(11) NOT NULL,
  `transaction_type` varchar(100) DEFAULT NULL,
  `received_by` varchar(100) NOT NULL,
  `time_of_sale` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu_tbl`
--

INSERT INTO `menu_tbl` (`order_id`, `date`, `item_name`, `item_type`, `item_price`, `quantity`, `transaction_amount`, `transaction_type`, `received_by`, `time_of_sale`) VALUES
(1, '2022-07-03', 'Aalopuri', 'Fastfood', 20, 13, 260, 'Cash', 'Mr.', 'Night'),
(2, '2022-08-23', 'Vadapav', 'Fastfood', 20, 15, 300, 'Cash', 'Mr.', 'Afternoon'),
(3, '2022-11-20', 'Vadapav', 'Fastfood', 20, 1, 20, 'Cash', 'Mr.', 'Afternoon'),
(4, '2023-02-03', 'Sugarcane juice', 'Beverages', 25, 6, 150, 'Online', 'Mr.', 'Night'),
(5, '2022-10-02', 'Sugarcane juice', 'Beverages', 25, 8, 200, 'Online', 'Mr.', 'Evening'),
(6, '2022-11-14', 'Vadapav', 'Fastfood', 20, 10, 200, 'Cash', 'Mr.', 'Evening'),
(7, '2022-05-03', 'Sugarcane juice', 'Beverages', 25, 9, 225, 'Cash', 'Mr.', 'Evening'),
(8, '2022-12-22', 'Panipuri', 'Fastfood', 20, 14, 280, 'Online', 'Mr.', 'Night'),
(9, '2022-06-10', 'Panipuri', 'Fastfood', 20, 1, 20, 'Cash', 'Mrs.', 'Morning'),
(10, '2022-09-16', 'Panipuri', 'Fastfood', 20, 5, 100, 'Online', 'Mr.', 'Afternoon'),
(11, '2022-12-01', 'Frankie', 'Fastfood', 50, 8, 400, 'Online', 'Mrs.', 'Afternoon'),
(12, '2022-07-12', 'Vadapav', 'Fastfood', 20, 8, 160, 'Online', 'Mrs.', 'Night'),
(13, '2022-12-22', 'Panipuri', 'Fastfood', 20, 9, 180, 'Online', 'Mrs.', 'Afternoon'),
(14, '2022-11-25', 'Frankie', 'Fastfood', 50, 4, 200, 'Online', 'Mr.', 'Morning'),
(15, '2023-02-03', 'Aalopuri', 'Fastfood', 20, 3, 60, 'Cash', 'Mrs.', 'Evening'),
(16, '2022-04-14', 'Sandwich', 'Fastfood', 60, 11, 660, 'Online', 'Mrs.', 'Midnight'),
(17, '2022-10-16', 'Panipuri', 'Fastfood', 20, 11, 220, 'Cash', 'Mrs.', 'Morning'),
(18, '2022-11-05', 'Panipuri', 'Fastfood', 20, 10, 200, 'Cash', 'Mrs.', 'Night'),
(19, '2022-08-22', 'Panipuri', 'Fastfood', 20, 11, 220, 'Cash', 'Mrs.', 'Night'),
(20, '2022-09-15', 'Cold coffee', 'Beverages', 40, 10, 400, 'Online', 'Mr.', 'Night'),
(21, '2022-12-21', 'Cold coffee', 'Beverages', 40, 15, 600, 'Cash', 'Mr.', 'Evening'),
(22, '2022-10-04', 'Sugarcane juice', 'Beverages', 25, 12, 300, 'Online', 'Mr.', 'Evening'),
(23, '2022-05-26', 'Sandwich', 'Fastfood', 60, 3, 180, 'Online', 'Mr.', 'Midnight'),
(24, '2023-02-11', 'Sugarcane juice', 'Beverages', 25, 10, 250, 'Online', 'Mr.', 'Afternoon'),
(25, '2022-08-31', 'Sandwich', 'Fastfood', 60, 1, 60, 'Online', 'Mrs.', 'Evening'),
(26, '2022-08-18', 'Sugarcane juice', 'Beverages', 25, 4, 100, 'Cash', 'Mr.', 'Afternoon'),
(27, '2022-10-12', 'Cold coffee', 'Beverages', 40, 11, 440, 'Online', 'Mrs.', 'Afternoon'),
(28, '2023-01-06', 'Cold coffee', 'Beverages', 40, 10, 400, 'Online', 'Mrs.', 'Afternoon'),
(29, '2023-02-10', 'Sugarcane juice', 'Beverages', 25, 9, 225, 'Online', 'Mr.', 'Afternoon'),
(30, '2023-01-28', 'Frankie', 'Fastfood', 50, 2, 100, 'Cash', 'Mrs.', 'Night'),
(31, '2022-09-14', 'Cold coffee', 'Beverages', 40, 13, 520, 'Online', 'Mrs.', 'Evening'),
(32, '2022-05-06', 'Aalopuri', 'Fastfood', 20, 4, 80, 'Cash', 'Mr.', 'Morning'),
(33, '2023-02-05', 'Aalopuri', 'Fastfood', 20, 13, 260, 'Online', 'Mr.', 'Night'),
(34, '2023-02-04', 'Frankie', 'Fastfood', 50, 12, 600, 'Online', 'Mrs.', 'Evening'),
(35, '2022-05-22', 'Vadapav', 'Fastfood', 20, 8, 160, 'Cash', 'Mr.', 'Morning'),
(36, '2022-07-02', 'Cold coffee', 'Beverages', 40, 10, 400, 'Online', 'Mr.', 'Afternoon'),
(37, '2023-01-05', 'Frankie', 'Fastfood', 50, 10, 500, 'Cash', 'Mr.', 'Night'),
(38, '2023-03-08', 'Panipuri', 'Fastfood', 20, 12, 240, 'Online', 'Mrs.', 'Night'),
(39, '2022-05-14', 'Vadapav', 'Fastfood', 20, 2, 40, 'Online', 'Mr.', 'Evening'),
(40, '2023-02-05', 'Sandwich', 'Fastfood', 60, 5, 300, 'Online', 'Mrs.', 'Night'),
(41, '2022-11-13', 'Cold coffee', 'Beverages', 40, 11, 440, 'Cash', 'Mr.', 'Afternoon'),
(42, '2022-05-09', 'Aalopuri', 'Fastfood', 20, 8, 160, 'Online', 'Mrs.', 'Night'),
(43, '2022-05-26', 'Vadapav', 'Fastfood', 20, 1, 20, 'Cash', 'Mr.', 'Night'),
(44, '2022-08-28', 'Cold coffee', 'Beverages', 40, 12, 480, 'Cash', 'Mr.', 'Evening'),
(45, '2022-08-15', 'Sugarcane juice', 'Beverages', 25, 6, 150, 'Cash', 'Mrs.', 'Afternoon'),
(46, '2022-05-07', 'Vadapav', 'Fastfood', 20, 7, 140, 'Cash', 'Mr.', 'Evening'),
(47, '2022-07-10', 'Sandwich', 'Fastfood', 60, 7, 420, 'Online', 'Mr.', 'Morning'),
(48, '2023-02-23', 'Sandwich', 'Fastfood', 60, 14, 840, 'Online', 'Mr.', 'Afternoon'),
(49, '2022-11-06', 'Frankie', 'Fastfood', 50, 4, 200, 'Online', 'Mrs.', 'Morning'),
(50, '2022-11-02', 'Vadapav', 'Fastfood', 20, 8, 160, 'Cash', 'Mrs.', 'Midnight'),
(51, '2022-05-16', 'Frankie', 'Fastfood', 50, 15, 750, 'Online', 'Mrs.', 'Morning'),
(52, '2023-03-16', 'Sugarcane juice', 'Beverages', 25, 12, 300, 'Cash', 'Mrs.', 'Midnight'),
(53, '2022-07-26', 'Aalopuri', 'Fastfood', 20, 13, 260, 'Cash', 'Mr.', 'Afternoon'),
(54, '2022-12-28', 'Panipuri', 'Fastfood', 20, 14, 280, 'Online', 'Mrs.', 'Morning'),
(55, '2022-05-07', 'Sandwich', 'Fastfood', 60, 10, 600, 'Cash', 'Mr.', 'Night'),
(56, '2022-11-23', 'Panipuri', 'Fastfood', 20, 11, 220, 'Cash', 'Mrs.', 'Midnight'),
(57, '2022-08-04', 'Panipuri', 'Fastfood', 20, 14, 280, 'Online', 'Mrs.', 'Morning'),
(58, '2023-02-03', 'Vadapav', 'Fastfood', 20, 6, 120, 'Online', 'Mrs.', 'Morning'),
(59, '2022-07-01', 'Vadapav', 'Fastfood', 20, 5, 100, 'Cash', 'Mr.', 'Morning'),
(60, '2022-06-11', 'Cold coffee', 'Beverages', 40, 2, 80, 'Online', 'Mr.', 'Night'),
(61, '2022-12-25', 'Vadapav', 'Fastfood', 20, 14, 280, 'Cash', 'Mrs.', 'Afternoon'),
(62, '2022-10-17', 'Sugarcane juice', 'Beverages', 25, 3, 75, 'Cash', 'Mr.', 'Afternoon'),
(63, '2022-12-01', 'Sandwich', 'Fastfood', 60, 7, 420, 'Online', 'Mrs.', 'Morning'),
(64, '2022-12-09', 'Cold coffee', 'Beverages', 40, 1, 40, 'Cash', 'Mr.', 'Morning'),
(65, '2022-07-25', 'Aalopuri', 'Fastfood', 20, 4, 80, 'Cash', 'Mr.', 'Morning'),
(66, '2022-04-05', 'Frankie', 'Fastfood', 50, 2, 100, 'Cash', 'Mrs.', 'Morning'),
(67, '2022-05-15', 'Aalopuri', 'Fastfood', 20, 9, 180, 'Cash', 'Mr.', 'Midnight'),
(68, '2022-12-17', 'Cold coffee', 'Beverages', 40, 2, 80, 'Online', 'Mr.', 'Night'),
(69, '2023-01-10', 'Vadapav', 'Fastfood', 20, 7, 140, 'Cash', 'Mr.', 'Midnight'),
(70, '2022-05-09', 'Cold coffee', 'Beverages', 40, 14, 560, 'Cash', 'Mrs.', 'Morning'),
(71, '2022-12-05', 'Cold coffee', 'Beverages', 40, 6, 240, 'Online', 'Mr.', 'Night'),
(72, '2023-03-09', 'Frankie', 'Fastfood', 50, 13, 650, 'Online', 'Mr.', 'Afternoon'),
(73, '2022-07-29', 'Panipuri', 'Fastfood', 20, 5, 100, 'Cash', 'Mr.', 'Midnight'),
(74, '2022-08-15', 'Cold coffee', 'Beverages', 40, 10, 400, 'Online', 'Mrs.', 'Evening'),
(75, '2023-02-02', 'Cold coffee', 'Beverages', 40, 6, 240, 'Online', 'Mrs.', 'Afternoon'),
(76, '2022-08-17', 'Vadapav', 'Fastfood', 20, 9, 180, 'Online', 'Mr.', 'Morning'),
(77, '2023-02-04', 'Sugarcane juice', 'Beverages', 25, 12, 300, 'Cash', 'Mrs.', 'Midnight'),
(78, '2022-04-04', 'Vadapav', 'Fastfood', 20, 4, 80, 'Cash', 'Mrs.', 'Evening'),
(79, '2022-05-11', 'Panipuri', 'Fastfood', 20, 6, 120, 'Online', 'Mr.', 'Night'),
(80, '2022-05-24', 'Frankie', 'Fastfood', 50, 13, 650, 'Cash', 'Mr.', 'Evening'),
(81, '2022-11-19', 'Frankie', 'Fastfood', 50, 12, 600, 'Online', 'Mrs.', 'Night'),
(82, '2022-07-17', 'Frankie', 'Fastfood', 50, 3, 150, 'Online', 'Mrs.', 'Evening'),
(83, '2022-11-13', 'Frankie', 'Fastfood', 50, 11, 550, 'Online', 'Mr.', 'Evening'),
(84, '2023-03-03', 'Panipuri', 'Fastfood', 20, 13, 260, 'Cash', 'Mr.', 'Midnight'),
(85, '2022-08-19', 'Aalopuri', 'Fastfood', 20, 3, 60, 'Online', 'Mrs.', 'Night'),
(86, '2023-03-09', 'Aalopuri', 'Fastfood', 20, 15, 300, 'Cash', 'Mr.', 'Morning'),
(87, '2022-05-29', 'Aalopuri', 'Fastfood', 20, 8, 160, 'Cash', 'Mr.', 'Night'),
(88, '2022-07-07', 'Cold coffee', 'Beverages', 40, 10, 400, 'Cash', 'Mr.', 'Evening'),
(89, '2022-12-23', 'Aalopuri', 'Fastfood', 20, 14, 280, 'Cash', 'Mr.', 'Evening'),
(90, '2022-10-29', 'Vadapav', 'Fastfood', 20, 15, 300, 'Online', 'Mr.', 'Night'),
(91, '2023-03-22', 'Cold coffee', 'Beverages', 40, 6, 240, 'Online', 'Mrs.', 'Evening'),
(92, '2022-05-13', 'Aalopuri', 'Fastfood', 20, 15, 300, 'Cash', 'Mr.', 'Afternoon'),
(93, '2022-07-03', 'Cold coffee', 'Beverages', 40, 2, 80, 'Online', 'Mrs.', 'Midnight'),
(94, '2022-09-14', 'Aalopuri', 'Fastfood', 20, 15, 300, 'Cash', 'Mrs.', 'Night'),
(95, '2022-05-12', 'Sugarcane juice', 'Beverages', 25, 8, 200, 'Online', 'Mr.', 'Night'),
(96, '2022-08-22', 'Sandwich', 'Fastfood', 60, 15, 900, 'Cash', 'Mr.', 'Morning'),
(97, '2023-03-29', 'Cold coffee', 'Beverages', 40, 13, 520, 'Online', 'Mr.', 'Evening'),
(98, '2022-12-24', 'Vadapav', 'Fastfood', 20, 1, 20, 'Online', 'Mr.', 'Morning'),
(99, '2022-09-11', 'Sugarcane juice', 'Beverages', 25, 3, 75, 'Cash', 'Mr.', 'Evening'),
(100, '2022-05-08', 'Panipuri', 'Fastfood', 20, 11, 220, 'Online', 'Mr.', 'Morning'),
(101, '2023-03-26', 'Vadapav', 'Fastfood', 20, 3, 60, 'Online', 'Mrs.', 'Morning'),
(102, '2023-03-13', 'Cold coffee', 'Beverages', 40, 14, 560, 'Cash', 'Mr.', 'Morning'),
(103, '2023-03-14', 'Cold coffee', 'Beverages', 40, 8, 320, 'Online', 'Mrs.', 'Midnight'),
(104, '2022-10-27', 'Cold coffee', 'Beverages', 40, 13, 520, 'Online', 'Mr.', 'Morning'),
(105, '2023-01-25', 'Panipuri', 'Fastfood', 20, 8, 160, 'Cash', 'Mrs.', 'Evening'),
(106, '2023-02-25', 'Frankie', 'Fastfood', 50, 9, 450, 'Cash', 'Mrs.', 'Evening'),
(107, '2023-02-07', 'Sandwich', 'Fastfood', 60, 4, 240, 'Online', 'Mr.', 'Afternoon'),
(108, '2022-08-06', 'Panipuri', 'Fastfood', 20, 5, 100, 'Online', 'Mr.', 'Afternoon'),
(109, '2022-08-08', 'Cold coffee', 'Beverages', 40, 12, 480, 'Cash', 'Mr.', 'Afternoon'),
(110, '2022-11-16', 'Panipuri', 'Fastfood', 20, 2, 40, 'Online', 'Mrs.', 'Morning'),
(111, '2022-09-04', 'Sandwich', 'Fastfood', 60, 8, 480, 'Cash', 'Mrs.', 'Midnight'),
(112, '2023-02-24', 'Sandwich', 'Fastfood', 60, 7, 420, 'Cash', 'Mr.', 'Morning'),
(113, '2022-12-12', 'Aalopuri', 'Fastfood', 20, 8, 160, 'Cash', 'Mr.', 'Afternoon'),
(114, '2022-08-14', 'Aalopuri', 'Fastfood', 20, 10, 200, 'Online', 'Mr.', 'Afternoon'),
(115, '2023-01-12', 'Aalopuri', 'Fastfood', 20, 13, 260, 'Cash', 'Mr.', 'Evening'),
(116, '2022-08-26', 'Sugarcane juice', 'Beverages', 25, 13, 325, 'Cash', 'Mr.', 'Evening'),
(117, '2023-03-09', 'Frankie', 'Fastfood', 50, 7, 350, 'Online', 'Mrs.', 'Evening'),
(118, '2022-07-06', 'Sandwich', 'Fastfood', 60, 1, 60, 'Online', 'Mr.', 'Midnight'),
(119, '2022-05-12', 'Panipuri', 'Fastfood', 20, 10, 200, 'Cash', 'Mr.', 'Evening'),
(120, '2022-07-10', 'Frankie', 'Fastfood', 50, 2, 100, 'Cash', 'Mrs.', 'Evening'),
(184, '2023-01-03', 'Cold coffee', 'Beverages', 40, 8, 320, 'Cash', 'Mr.', 'Night'),
(185, '2023-01-13', 'Sugarcane juice', 'Beverages', 25, 15, 375, 'Cash', 'Mr.', 'Night'),
(186, '2023-03-15', 'Frankie', 'Fastfood', 50, 2, 100, 'Online', 'Mr.', 'Afternoon'),
(187, '2022-10-11', 'Aalopuri', 'Fastfood', 20, 15, 300, 'Cash', 'Mrs.', 'Morning'),
(188, '2022-12-28', 'Panipuri', 'Fastfood', 20, 14, 280, 'Cash', 'Mrs.', 'Night'),
(189, '2023-02-08', 'Vadapav', 'Fastfood', 20, 12, 240, 'Online', 'Mr.', 'Afternoon'),
(190, '2022-04-26', 'Cold coffee', 'Beverages', 40, 1, 40, 'Online', 'Mr.', 'Evening'),
(191, '2022-05-20', 'Sugarcane juice', 'Beverages', 25, 14, 350, 'Cash', 'Mrs.', 'Morning'),
(192, '2022-10-26', 'Vadapav', 'Fastfood', 20, 2, 40, 'Online', 'Mr.', 'Night'),
(193, '2023-02-05', 'Cold coffee', 'Beverages', 40, 15, 600, 'Online', 'Mrs.', 'Midnight'),
(194, '2022-12-15', 'Vadapav', 'Fastfood', 20, 4, 80, 'Cash', 'Mrs.', 'Morning'),
(195, '2022-04-23', 'Sandwich', 'Fastfood', 60, 4, 240, 'Cash', 'Mrs.', 'Night'),
(196, '2022-06-25', 'Sandwich', 'Fastfood', 60, 3, 180, 'Cash', 'Mr.', 'Evening'),
(197, '2022-11-08', 'Panipuri', 'Fastfood', 20, 10, 200, 'Cash', 'Mrs.', 'Midnight'),
(198, '2023-01-05', 'Frankie', 'Fastfood', 50, 15, 750, 'Cash', 'Mr.', 'Morning'),
(199, '2023-02-01', 'Frankie', 'Fastfood', 50, 6, 300, 'Online', 'Mrs.', 'Morning'),
(200, '2022-12-25', 'Cold coffee', 'Beverages', 40, 10, 400, 'Cash', 'Mrs.', 'Morning'),
(201, '2022-06-30', 'Panipuri', 'Fastfood', 20, 8, 160, 'Cash', 'Mr.', 'Morning'),
(202, '2022-09-21', 'Aalopuri', 'Fastfood', 20, 9, 180, 'Cash', 'Mr.', 'Afternoon'),
(203, '2022-04-11', 'Vadapav', 'Fastfood', 20, 6, 120, 'Online', 'Mrs.', 'Midnight'),
(204, '2022-10-24', 'Cold coffee', 'Beverages', 40, 7, 280, 'Cash', 'Mrs.', 'Evening'),
(205, '2022-10-17', 'Vadapav', 'Fastfood', 20, 4, 80, 'Cash', 'Mr.', 'Afternoon'),
(206, '2022-07-27', 'Aalopuri', 'Fastfood', 20, 4, 80, 'Cash', 'Mr.', 'Night'),
(207, '2023-02-20', 'Cold coffee', 'Beverages', 40, 8, 320, 'Online', 'Mrs.', 'Evening'),
(208, '2022-08-26', 'Cold coffee', 'Beverages', 40, 13, 520, 'Cash', 'Mrs.', 'Midnight'),
(209, '2022-12-04', 'Aalopuri', 'Fastfood', 20, 2, 40, 'Cash', 'Mr.', 'Night'),
(210, '2023-01-02', 'Sugarcane juice', 'Beverages', 25, 15, 375, 'Cash', 'Mr.', 'Night'),
(211, '2022-04-18', 'Aalopuri', 'Fastfood', 20, 12, 240, 'Cash', 'Mr.', 'Morning'),
(212, '2022-05-05', 'Cold coffee', 'Beverages', 40, 12, 480, 'Online', 'Mrs.', 'Morning'),
(213, '2022-09-29', 'Vadapav', 'Fastfood', 20, 3, 60, 'Cash', 'Mrs.', 'Midnight'),
(214, '2022-12-03', 'Sugarcane juice', 'Beverages', 25, 14, 350, 'Online', 'Mr.', 'Evening'),
(215, '2022-12-10', 'Sugarcane juice', 'Beverages', 25, 7, 175, 'Cash', 'Mrs.', 'Morning'),
(216, '2023-03-07', 'Panipuri', 'Fastfood', 20, 9, 180, 'Cash', 'Mrs.', 'Afternoon'),
(217, '2023-03-23', 'Cold coffee', 'Beverages', 40, 10, 400, 'Cash', 'Mr.', 'Morning'),
(218, '2022-12-23', 'Cold coffee', 'Beverages', 40, 13, 520, 'Online', 'Mrs.', 'Midnight'),
(219, '2022-10-01', 'Aalopuri', 'Fastfood', 20, 9, 180, 'Cash', 'Mrs.', 'Evening'),
(220, '2022-05-13', 'Sugarcane juice', 'Beverages', 25, 1, 25, 'Cash', 'Mr.', 'Afternoon'),
(221, '2023-03-26', 'Sandwich', 'Fastfood', 60, 1, 60, 'Online', 'Mr.', 'Evening'),
(222, '2022-09-11', 'Sandwich', 'Fastfood', 60, 6, 360, 'Cash', 'Mrs.', 'Morning'),
(223, '2022-09-21', 'Panipuri', 'Fastfood', 20, 13, 260, 'Online', 'Mr.', 'Night'),
(224, '2023-03-23', 'Sugarcane juice', 'Beverages', 25, 14, 350, 'Cash', 'Mr.', 'Afternoon'),
(225, '2023-03-16', 'Frankie', 'Fastfood', 50, 11, 550, 'Cash', 'Mrs.', 'Evening'),
(226, '2022-12-12', 'Aalopuri', 'Fastfood', 20, 13, 260, 'Online', 'Mrs.', 'Afternoon'),
(227, '2022-11-17', 'Cold coffee', 'Beverages', 40, 5, 200, 'Cash', 'Mrs.', 'Afternoon'),
(228, '2022-11-05', 'Panipuri', 'Fastfood', 20, 8, 160, 'Online', 'Mr.', 'Night'),
(229, '2022-12-15', 'Panipuri', 'Fastfood', 20, 7, 140, 'Online', 'Mr.', 'Evening'),
(230, '2022-04-16', 'Frankie', 'Fastfood', 50, 6, 300, 'Online', 'Mr.', 'Afternoon'),
(231, '2022-04-16', 'Sugarcane juice', 'Beverages', 25, 3, 75, 'Online', 'Mr.', 'Night'),
(232, '2022-04-23', 'Vadapav', 'Fastfood', 20, 13, 260, 'Cash', 'Mrs.', 'Night'),
(233, '2022-07-31', 'Panipuri', 'Fastfood', 20, 5, 100, 'Cash', 'Mr.', 'Morning'),
(234, '2022-07-27', 'Panipuri', 'Fastfood', 20, 10, 200, 'Cash', 'Mr.', 'Midnight'),
(235, '2022-11-29', 'Sandwich', 'Fastfood', 60, 10, 600, 'Cash', 'Mrs.', 'Afternoon'),
(236, '2022-06-26', 'Vadapav', 'Fastfood', 20, 12, 240, 'Online', 'Mrs.', 'Evening'),
(237, '2022-11-08', 'Panipuri', 'Fastfood', 20, 13, 260, 'Cash', 'Mrs.', 'Midnight'),
(238, '2022-04-26', 'Vadapav', 'Fastfood', 20, 13, 260, 'Cash', 'Mr.', 'Morning'),
(239, '2022-12-04', 'Frankie', 'Fastfood', 50, 4, 200, 'Online', 'Mr.', 'Evening'),
(240, '2022-12-11', 'Sandwich', 'Fastfood', 60, 10, 600, 'Cash', 'Mrs.', 'Morning'),
(241, '2022-06-06', 'Sugarcane juice', 'Beverages', 25, 2, 50, 'Cash', 'Mr.', 'Afternoon'),
(242, '2022-12-23', 'Cold coffee', 'Beverages', 40, 4, 160, 'Online', 'Mrs.', 'Midnight'),
(243, '2022-11-12', 'Panipuri', 'Fastfood', 20, 5, 100, 'Cash', 'Mrs.', 'Midnight'),
(244, '2022-11-22', 'Sandwich', 'Fastfood', 60, 10, 600, 'Online', 'Mrs.', 'Midnight'),
(245, '2022-10-03', 'Vadapav', 'Fastfood', 20, 2, 40, 'Cash', 'Mrs.', 'Morning'),
(246, '2022-11-16', 'Vadapav', 'Fastfood', 20, 10, 200, 'Cash', 'Mr.', 'Afternoon'),
(247, '2022-10-03', 'Sugarcane juice', 'Beverages', 25, 6, 150, 'Online', 'Mr.', 'Midnight'),
(248, '2022-04-17', 'Frankie', 'Fastfood', 50, 5, 250, 'Online', 'Mrs.', 'Midnight'),
(249, '2022-10-26', 'Sugarcane juice', 'Beverages', 25, 3, 75, 'Online', 'Mrs.', 'Afternoon'),
(250, '2022-11-15', 'Sugarcane juice', 'Beverages', 25, 6, 150, 'Online', 'Mrs.', 'Midnight'),
(251, '2022-12-21', 'Cold coffee', 'Beverages', 40, 13, 520, 'Online', 'Mrs.', 'Afternoon'),
(252, '2023-03-26', 'Vadapav', 'Fastfood', 20, 8, 160, 'Online', 'Mr.', 'Midnight'),
(253, '2022-06-18', 'Sugarcane juice', 'Beverages', 25, 13, 325, 'Online', 'Mr.', 'Afternoon'),
(254, '2022-10-09', 'Cold coffee', 'Beverages', 40, 12, 480, 'Online', 'Mrs.', 'Afternoon'),
(255, '2022-04-30', 'Vadapav', 'Fastfood', 20, 7, 140, 'Online', 'Mrs.', 'Afternoon'),
(256, '2023-03-16', 'Aalopuri', 'Fastfood', 20, 3, 60, 'Online', 'Mrs.', 'Midnight'),
(257, '2023-01-03', 'Sandwich', 'Fastfood', 60, 10, 600, 'Cash', 'Mrs.', 'Midnight'),
(258, '2022-09-06', 'Vadapav', 'Fastfood', 20, 14, 280, 'Cash', 'Mr.', 'Midnight'),
(259, '2022-11-18', 'Sandwich', 'Fastfood', 60, 4, 240, 'Online', 'Mr.', 'Morning'),
(260, '2022-09-10', 'Sugarcane juice', 'Beverages', 25, 2, 50, 'Online', 'Mrs.', 'Night'),
(261, '2023-01-11', 'Frankie', 'Fastfood', 50, 9, 450, 'Cash', 'Mrs.', 'Midnight'),
(262, '2023-03-05', 'Vadapav', 'Fastfood', 20, 5, 100, 'Online', 'Mrs.', 'Evening'),
(263, '2022-06-19', 'Panipuri', 'Fastfood', 20, 2, 40, 'Cash', 'Mr.', 'Evening'),
(264, '2022-07-18', 'Sugarcane juice', 'Beverages', 25, 12, 300, 'Online', 'Mr.', 'Morning'),
(265, '2022-08-15', 'Vadapav', 'Fastfood', 20, 6, 120, 'Cash', 'Mr.', 'Midnight'),
(266, '2022-10-02', 'Frankie', 'Fastfood', 50, 10, 500, 'Online', 'Mrs.', 'Night'),
(267, '2023-03-05', 'Vadapav', 'Fastfood', 20, 1, 20, 'Cash', 'Mr.', 'Morning'),
(268, '2023-02-05', 'Cold coffee', 'Beverages', 40, 12, 480, 'Cash', 'Mrs.', 'Midnight'),
(269, '2022-12-22', 'Panipuri', 'Fastfood', 20, 2, 40, 'Online', 'Mrs.', 'Midnight'),
(270, '2022-09-07', 'Sandwich', 'Fastfood', 60, 13, 780, 'Cash', 'Mr.', 'Evening'),
(271, '2023-01-12', 'Sugarcane juice', 'Beverages', 25, 5, 125, 'Online', 'Mr.', 'Morning');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu_tbl`
--
ALTER TABLE `menu_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu_tbl`
--
ALTER TABLE `menu_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
