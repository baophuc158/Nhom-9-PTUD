-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 06:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptud`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiktvabttracnghiem`
--

CREATE TABLE `baiktvabttracnghiem` (
  `MaDeTN` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaNHCH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ThoigianLB` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoigianDong` datetime NOT NULL,
  `SLcauhoi` int(11) NOT NULL,
  `Loaibai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiktvabttracnghiem`
--

INSERT INTO `baiktvabttracnghiem` (`MaDeTN`, `MaMH`, `MaNHCH`, `ThoigianLB`, `ThoigianDong`, `SLcauhoi`, `Loaibai`) VALUES
('toan615p1', 'Toan', 'gvnhch', '15 phút', '2022-05-09 04:41:59', 10, '15P1'),
('toan615p2', 'Toan', 'gvnhch', '15 phút', '2022-05-09 04:41:59', 15, '15P2'),
('toan61t1', 'Toan', 'gvnhch', '45 phút', '2022-05-09 04:44:48', 30, '1T1'),
('toan61t2', 'Toan', 'gvnhch', '45 phút', '2022-05-09 04:47:37', 25, '1T2'),
('toan6M1', 'Toan', 'gvnhch', '10 phút', '2022-05-09 04:44:48', 5, 'mieng');

-- --------------------------------------------------------

--
-- Table structure for table `baiktvabttuluan`
--

CREATE TABLE `baiktvabttuluan` (
  `MaDeTL` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Cauhoi` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Loaibai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ThoigianDong` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiktvabttuluan`
--

INSERT INTO `baiktvabttuluan` (`MaDeTL`, `MaMH`, `Cauhoi`, `Loaibai`, `ThoigianDong`) VALUES
('toan615p1', 'Toan', 'Tìm x\r\nx+2=3 x=?\r\nx+6=10 x=?\r\n2x/3=2 x=?', '15P1', '2022-05-09 05:35:11'),
('toan61t1', 'Toan', 'Câu 1 : Tính giá trị của biểu thức: 152,3 + 2021,19 + 7,7 – 2021,19\r\n\r\nCâu 2 : Tìm tỉ số phần trăm c', '1T1', '2022-05-09 05:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `bailamtl`
--

CREATE TABLE `bailamtl` (
  `IDTL` int(10) UNSIGNED NOT NULL,
  `Dapan` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaHS` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Tenlop` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiemTL` float DEFAULT NULL,
  `MaDeTL` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Loaibai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Trangthai` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bailamtl`
--

INSERT INTO `bailamtl` (`IDTL`, `Dapan`, `MaHS`, `Tenlop`, `DiemTL`, `MaDeTL`, `Loaibai`, `Trangthai`) VALUES
(1, '', 'hstest', '6A2', 8, 'toan615p1', '15P1', 'Đã chấm điểm'),
(2, '', 'hstest', '6A2', 9, 'toan61t1', '1T1', 'Đã chấm điểm');

-- --------------------------------------------------------

--
-- Table structure for table `bailamtn`
--

CREATE TABLE `bailamtn` (
  `IDTN` int(10) UNSIGNED NOT NULL,
  `MaDeTN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaHS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DiemTN` float DEFAULT NULL,
  `Loaibai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenlop` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bailamtn`
--

INSERT INTO `bailamtn` (`IDTN`, `MaDeTN`, `MaHS`, `DiemTN`, `Loaibai`, `Tenlop`) VALUES
(1, 'toan6M1', 'BVD1', 8.5, 'mieng', '6A1'),
(2, 'toan615p1', 'BVD1', 7.5, '15P1', '6A1'),
(3, 'toan615p2', 'BVD1', 9.5, '15P2', '6A1'),
(4, 'toan61t1', 'BVD1', 9, '1T1', '6A1'),
(5, 'toan61t2', 'BVD1', 7.5, '1T2', '6A1'),
(6, 'toan6M1', 'hstest', 6, 'mieng', '6A2'),
(7, 'toan61t2', 'hstest', 6.5, '1T2', '6A2');

-- --------------------------------------------------------

--
-- Table structure for table `bangdiemgv`
--

CREATE TABLE `bangdiemgv` (
  `IDB` int(11) UNSIGNED NOT NULL,
  `MaHS` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiemM` float DEFAULT NULL,
  `Diem15P1` float DEFAULT NULL,
  `Diem15P2` float DEFAULT NULL,
  `Diem1T1` float DEFAULT NULL,
  `Diem1T2` float DEFAULT NULL,
  `DiemGK1` float DEFAULT NULL,
  `DiemCK1` float DEFAULT NULL,
  `DiemGK2` float DEFAULT NULL,
  `DiemCK2` float DEFAULT NULL,
  `TBM` float DEFAULT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bangdiemgv`
--

INSERT INTO `bangdiemgv` (`IDB`, `MaHS`, `DiemM`, `Diem15P1`, `Diem15P2`, `Diem1T1`, `Diem1T2`, `DiemGK1`, `DiemCK1`, `DiemGK2`, `DiemCK2`, `TBM`, `MaMH`, `MaGV`) VALUES
(1, 'BVD1', 8.5, 7.5, 9.5, 9, 7.5, 10, 6.5, 7.5, 8.5, 0, 'Toan', 'giaovien'),
(2, 'hocsinh', 9, 6.5, 5.5, 7.5, 6.75, 3.5, 5.5, 6.5, 7.5, 0, 'Toan', 'giaovien'),
(3, 'NQE1', 6.5, 5.5, 7.5, 8.5, 6.5, 8.5, 5.5, 6.5, 7.5, 0, 'Toan', 'giaovien'),
(10, 'hocsinh', 9, 10, 5.5, 7.5, 3.25, 3.5, 10, 6.5, 7.5, 0, 'Tin', 'giaovien'),
(11, 'hocsinh', 9, 10, 8, 7.5, 5, 3.5, 5, 7, 5.5, 0, 'Van', 'giaovien'),
(12, 'hocsinh', 9, 10, 10, 7.5, 5, 5.75, 5, 7, 8, 0, 'Sinh', 'giaovien'),
(13, 'hocsinh', 9, 6, 5.5, 8.25, 3.25, 10, 10, 5, 7.5, 0, 'Ly', 'giaovien');

-- --------------------------------------------------------

--
-- Table structure for table `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `id_cauhoi` int(10) UNSIGNED NOT NULL,
  `id_khoi` int(10) NOT NULL,
  `cau_hoi` varchar(535) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `da_1` varchar(50) DEFAULT NULL,
  `da_2` varchar(50) DEFAULT NULL,
  `da_3` varchar(50) DEFAULT NULL,
  `da_4` varchar(50) DEFAULT NULL,
  `da_dung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cau_hoi`
--

INSERT INTO `cau_hoi` (`id_cauhoi`, `id_khoi`, `cau_hoi`, `da_1`, `da_2`, `da_3`, `da_4`, `da_dung`) VALUES
(1, 2, '2222222', '2', '2', '12', '2', '4'),
(2, 1, '5 + 7 = ?', '12', '13', '14', '11', '12'),
(3, 3, '5 + 9 = ?', '13', '15', '17', '14', '14'),
(4, 3, '2 x 1 = ?', '1', '2', '3', '4', '2'),
(5, 3, '11 + 2 = ?', '15', '16', '13', '18', '13'),
(6, 3, '18 + 5 = ?', '20', '21', '22', '23', '23'),
(7, 3, '14 + 8 = ?', '20', '21', '22', '23', '22'),
(8, 3, '13 - 3 = ?', '7', '8', '9', '10', '10'),
(9, 3, '14 - 7 = ?', '7', '6', '5', '8', '7'),
(10, 3, '10 - 8 = ?', '2', '3', '4', '5', '2'),
(11, 3, '3 + 6 = ?', '7', '6', '9', '8', '9'),
(12, 3, '5+10 ?', '15', '10', '5', '4', '15'),
(13, 3, '2 x 7 = ?', '14', '16', '18', '12', '14'),
(14, 3, '2 x 9 = ?', '14', '16', '18', '12', '18'),
(15, 3, '3 x 7 = ?', '14', '16', '18', '21', '21'),
(16, 3, '3 x 5 = ?', '14', '16', '15', '12', '15'),
(17, 3, '4 x 10 = ?', '40', '4', '10', '1', '40'),
(18, 3, '2 x 10 = ?', '14', '16', '18', '20', '20'),
(19, 3, '6 x 7 = ?', '40', '41', '42', '43', '42'),
(20, 3, '4 x 4 = ?', '14', '16', '18', '12', '16'),
(21, 3, '2 x 5 = ?', '14', '16', '10', '12', '10'),
(22, 3, '4 x 7 =?', '27', '28', '29', '30', '28'),
(23, 3, '10 * 0 = ?      ', '11     ', '2     ', '4      ', '0      ', '0   '),
(24, 3, '4 x 5 =?', '27', '28', '29', '20', '20'),
(25, 3, '5 x 8 =?', '37', '38', '39', '40', '40'),
(26, 3, '5 x 5 =?', '27', '28', '25', '30', '25'),
(27, 3, '7 x 9 = ?', '61', '63', '65', '67', '63'),
(28, 3, '7 x 7 = ?', '41', '43', '45', '49', '49'),
(29, 3, '7 x 8 = ?', '61', '63', '56', '67', '56'),
(30, 3, '9 x 9 = ?', '81', '63', '65', '67', '81'),
(31, 3, '6 x 9 = ?', '61', '63', '65', '54', '54'),
(32, 3, '21 : 3 = ?', '5', '6', '7', '8', '7'),
(33, 3, '24 : 8 = ?', '1', '2', '3', '4', '3'),
(34, 3, '27 : 3 = ?', '6', '7', '8', '9', '9'),
(35, 3, '32 : 8 = ?', '1', '2', '3', '4', '4'),
(36, 3, '25 : 5 = ?', '5', '2', '3', '4', '5'),
(37, 3, '42 : 7 = ?', '6', '5', '3', '4', '6'),
(38, 3, '56 : 8 = ?', '8', '7', '3', '4', '7'),
(39, 3, '81 : 9 = ? ', '2', '8 ', '9 ', '81 ', '9 '),
(40, 3, '40 : 8 = ?', '5', '2', '3', '4', '5'),
(41, 3, '18 : 9 = ?', '1', '2', '3', '4', '2'),
(42, 90, '1 + 1 = ?  ', '2', '1  ', '3  ', '4  ', '2  '),
(43, 90, 'Cành cây có 5 con chim, bắn mất 1 con, hỏi còn mấy con chim?', '5', '4', '6', '3', '4'),
(44, 1, 'Cu có công thức hóa học là gì?', '2', '1', '3', '4', '2'),
(45, 1, 'H2SO4 được gọi là gì', '5', '4', '6', '3', '4'),
(46, 2, '12371237 + 12991= ?', '2', '1', '3', '4', '2'),
(51, 1, '123', '12', '12', '12', '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhhoc`
--

CREATE TABLE `chuongtrinhhoc` (
  `CTH_ID` int(10) UNSIGNED NOT NULL,
  `khoi` varchar(20) NOT NULL,
  `tenmon` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuongtrinhhoc`
--

INSERT INTO `chuongtrinhhoc` (`CTH_ID`, `khoi`, `tenmon`) VALUES
(1, ' Khối 6         ', '<center>Toán<br>Vật lí<br>Ngữ Văn<br>Tiếng Anh<br>Địa lí<br>Lịch sử<br>Sinh học<br>Công Nghệ<br>Đạo đức<br>Tin học<br>Âm nhạc<br>Mỹ thuật</center>'),
(2, 'Khối 7  ', '<center>Toán học<br>\r\nVật lí<br>\r\nNgữ Văn<br>\r\nTiếng Anh<br>\r\nĐịa lí<br>\r\nLịch sử<br>\r\nSinh học<br>\r\nCông Nghệ<br>\r\nĐạo đức<br>\r\nTin học<br>\r\nÂm nhạc<br>\r\nMỹ thuật</center>\r\n\r\n'),
(3, 'Khối 8', '<center>Toán học<br>\r\nVật lí<br>\r\nNgữ Văn<br>\r\nHóa học <br>\r\nTiếng Anh<br>\r\nĐịa lí<br>\r\nLịch sử<br>\r\nSinh học<br>\r\nCông Nghệ<br>\r\nĐạo đức<br>\r\nTin học<br>\r\nÂm nhạc<br>\r\nMỹ thuật</center>\r\n\r\n'),
(4, 'Khối 9', '<center>Toán học<br>\r\nVật lí<br>\r\nNgữ Văn<br>\r\nHóa học <br>\r\nTiếng Anh<br>\r\nĐịa lí<br>\r\nLịch sử<br>\r\nSinh học<br>\r\nCông Nghệ<br>\r\nĐạo đức<br>\r\nTin học<br>\r\nÂm nhạc<br>\r\nMỹ thuật</center>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `dethi`
--

CREATE TABLE `dethi` (
  `MaDethi` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoi` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LoaiDe` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgayThi` datetime NOT NULL,
  `ThoigianLB` time NOT NULL,
  `SLcauhoi` int(11) NOT NULL,
  `MaNHCH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dethi`
--

INSERT INTO `dethi` (`MaDethi`, `MaMH`, `TenKhoi`, `LoaiDe`, `NgayThi`, `ThoigianLB`, `SLcauhoi`, `MaNHCH`) VALUES
('Ma1', 'Anh', '6', 'GK', '2022-05-05 21:28:30', '00:40:00', 30, 'gvnhch'),
('Ma2', 'Su', '6', 'GK', '2022-05-16 21:28:34', '00:30:00', 30, 'gvnhch'),
('Ma3', 'Anh', '7', 'CK', '2022-05-05 21:28:30', '00:45:00', 40, 'gvnhch'),
('Ma4', 'Hoa', '7', 'CK', '2022-05-05 21:28:30', '00:45:00', 30, 'gvnhch'),
('Ma5', 'Toan', '6', 'GK', '2022-05-10 00:00:00', '30:00:00', 50, 'gvnhch'),
('Ma6', 'Toan', '8', 'GK', '2022-05-05 21:28:30', '00:40:00', 30, 'gvnhch');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenGV` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaND` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaTruong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `TenGV`, `SDT`, `Email`, `MaND`, `MaTruong`) VALUES
('giaovien', 'Phan Trúng ', '038957223   ', 'pt.trung@gmail.com            ', 'gv', 'thcsabc');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(10) UNSIGNED NOT NULL,
  `transaction` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `user` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `transaction`, `user`, `date_added`) VALUES
(2, 'login in', '101', '2022-05-28 21:48:32'),
(3, 'logged out', 'admin', '2022-05-28 21:57:41'),
(4, 'login in', 'admin', '2022-05-28 21:57:51'),
(5, 'logged out', 'admin', '2022-05-28 21:58:00'),
(6, 'login in', '101', '2022-05-28 21:58:05'),
(7, 'Đăng nhập', 'admin', '2022-05-28 23:05:26'),
(8, 'Đăng xuất', 'admin', '2022-05-28 23:08:43'),
(9, 'Đăng nhập', '102', '2022-05-28 23:08:50'),
(10, 'Đăng xuất', '102', '2022-05-28 23:13:17'),
(11, 'Đăng nhập', 'giaovien', '2022-05-28 23:13:36'),
(12, 'Đăng xuất', 'giaovien', '2022-05-28 23:32:10'),
(13, 'Đăng nhập', 'admin', '2022-05-28 23:32:13'),
(14, 'Đăng xuất', 'admin', '2022-05-28 23:42:18'),
(15, 'Đăng nhập', 'admin', '2022-05-28 23:57:17'),
(16, 'Đăng nhập', 'admin', '2022-05-29 19:28:41'),
(17, 'Đăng xuất', 'admin', '2022-05-29 19:29:49'),
(18, 'Đăng nhập', '101', '2022-05-29 19:30:19'),
(19, 'Đăng xuất', '101', '2022-05-29 19:32:38'),
(20, 'Đăng nhập', '101', '2022-05-29 19:33:00'),
(21, 'Đăng xuất', '101', '2022-05-29 19:35:28'),
(22, 'Đăng nhập', '102', '2022-05-29 19:35:34'),
(23, 'Đăng xuất', '102', '2022-05-29 19:35:58'),
(24, 'Đăng nhập', 'giaovien', '2022-05-29 19:36:11'),
(25, 'Đăng nhập', 'hocsinh', '2022-05-29 19:38:18'),
(26, 'Đăng xuất', 'hocsinh', '2022-05-29 19:40:36'),
(27, 'Đăng nhập', '101', '2022-05-29 19:40:42'),
(28, 'Đăng xuất', '101', '2022-05-29 19:40:49'),
(29, 'Đăng nhập', 'giaovien', '2022-05-29 19:40:57'),
(30, 'Đăng xuất', 'giaovien', '2022-05-29 20:05:17'),
(31, 'Đăng nhập', 'giaovien', '2022-05-29 20:33:45'),
(32, 'Đăng xuất', 'giaovien', '2022-05-29 21:22:01'),
(33, 'Đăng nhập', 'admin', '2022-05-29 21:22:07'),
(34, 'Đăng xuất', 'admin', '2022-05-29 21:29:05'),
(35, 'Đăng nhập', '101', '2022-05-29 21:29:12'),
(36, 'Đăng xuất', '101', '2022-05-29 21:54:28'),
(37, 'Đăng nhập', 'giaovien', '2022-05-29 21:55:10'),
(38, 'Đăng xuất', 'giaovien', '2022-05-29 22:29:23'),
(39, 'Đăng nhập', 'admin', '2022-05-29 22:29:27'),
(40, 'Đăng xuất', 'admin', '2022-05-29 23:06:19'),
(41, 'Đăng nhập', '101', '2022-05-29 23:06:30'),
(42, 'Đăng xuất', '101', '2022-05-29 23:07:17'),
(43, 'Đăng nhập', 'giaovien', '2022-05-29 23:07:24'),
(44, 'Đăng xuất', 'giaovien', '2022-05-29 23:08:20'),
(45, 'Đăng nhập', 'giaovien', '2022-05-29 23:08:29'),
(46, 'Đăng xuất', 'qttabc', '2022-05-29 23:21:41'),
(47, 'Đăng nhập', 'giaovien', '2022-05-29 23:21:49'),
(48, 'Đăng xuất', 'giaovien', '2022-05-29 23:22:50'),
(49, 'Đăng nhập', 'totruongcm', '2022-05-29 23:22:59'),
(50, 'Đăng xuất', 'totruongcm', '2022-05-29 23:23:59'),
(51, 'Đăng nhập', 'totruongcm', '2022-05-29 23:24:06'),
(52, 'Đăng nhập', 'totruongcm', '2022-05-29 23:26:47'),
(53, 'Đăng nhập', 'totruongcm', '2022-05-29 23:27:37'),
(54, 'Đăng xuất', 'totruongcm', '2022-05-29 23:28:02'),
(55, 'Đăng nhập', 'giaovien', '2022-05-29 23:28:09'),
(56, 'Đăng xuất', 'giaovien', '2022-05-29 23:28:29'),
(57, 'Đăng nhập', 'hocsinh', '2022-05-29 23:28:45'),
(58, 'Đăng xuất', 'hocsinh', '2022-05-29 23:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `MaHS` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenHS` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Tenlop` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaND` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaTruong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `Tenlop`, `MaND`, `MaTruong`) VALUES
('BVD1', 'Bùi Văn D', '6A1', 'hs', 'thcsabc'),
('hoc', '123', '6A1', 'hs', 'thcsabc'),
('hocsinh', 'Lê Văn A', '6A1', 'hs', 'thcsabc'),
('hocsinh1', 'Đức Hiền', '6A2', 'hs', 'thcsabc'),
('hstest', 'Trần Thị T', '6A2', 'hs', 'thcsabc'),
('NQE1', 'Ngô Quốc E', '6A1', 'hs', 'thcsabc'),
('NVC1', 'Nguyễn Văn C', '6A1', 'hs', 'thcsabc'),
('TTB1', 'Trần Thị B', '6A1', 'hs', 'thcsabc');

-- --------------------------------------------------------

--
-- Table structure for table `khoi`
--

CREATE TABLE `khoi` (
  `TenKhoi` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenK` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khoi`
--

INSERT INTO `khoi` (`TenKhoi`, `TenK`) VALUES
('6', 'Khối 6'),
('7', 'Khối 7'),
('8', 'Khối 8'),
('9', 'Khối 9');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `Tenlop` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Soluonghs` int(11) NOT NULL,
  `MaTruong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoi` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`Tenlop`, `Soluonghs`, `MaTruong`, `TenKhoi`) VALUES
('6A1', 40, 'thcsabc', '6'),
('6A2', 42, 'thcsabc', '6'),
('7A5', 39, 'thcsabc', '7'),
('8A3', 45, 'thcsabc', '8'),
('9A6', 43, 'thcsabc', '9');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenMonhoc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMonhoc`) VALUES
('Amnhac', 'Âm Nhạc'),
('Anh', 'Tiếng Anh'),
('Congnghe', 'Công Nghệ'),
('Dia', 'Địa Lý'),
('Gdcd', 'GDCD'),
('Hoa', 'Hóa Học'),
('Ly', 'Vật Lý'),
('Mithuat', 'Mĩ Thuật'),
('Sinh', 'Sinh Học'),
('Su', 'Lịch Sử'),
('Theduc', 'Thể Dục'),
('Tin', 'Tin Học'),
('Toan', 'Toán Học'),
('Van', 'Ngữ Văn');

-- --------------------------------------------------------

--
-- Table structure for table `monkhoi`
--

CREATE TABLE `monkhoi` (
  `IDMK` int(11) UNSIGNED NOT NULL,
  `MaMH` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoi` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monkhoi`
--

INSERT INTO `monkhoi` (`IDMK`, `MaMH`, `TenKhoi`) VALUES
(1, 'Toan', '6'),
(2, 'Toan', '7'),
(3, 'Toan', '8'),
(4, 'Toan', '9');

-- --------------------------------------------------------

--
-- Table structure for table `nganhangcauhoi`
--

CREATE TABLE `nganhangcauhoi` (
  `MaNHCH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SLcauhoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nganhangcauhoi`
--

INSERT INTO `nganhangcauhoi` (`MaNHCH`, `MaGV`, `MaMH`, `SLcauhoi`) VALUES
('gvnhch', 'giaovien', 'Toan', 15);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Vaitro` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Vaitro`) VALUES
('gv', 'Giáo viên'),
('hs', 'Học sinh'),
('qtht', 'Quản trị hệ thống'),
('qtt', 'Quản trị trường'),
('ttcm', 'Tổ trưởng chuyên môn');

-- --------------------------------------------------------

--
-- Table structure for table `phancong`
--

CREATE TABLE `phancong` (
  `IDPC` int(11) UNSIGNED NOT NULL,
  `MaGV` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Tenlop` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phancong`
--

INSERT INTO `phancong` (`IDPC`, `MaGV`, `Tenlop`, `MaMH`) VALUES
(1, 'giaovien', '6A1', 'Toan'),
(2, 'giaovien', '6A2', 'Toan'),
(3, 'giaovien', '7A5', 'Toan'),
(4, 'giaovien', '8A3', 'Toan'),
(5, 'giaovien', '9A6', 'Toan');

-- --------------------------------------------------------

--
-- Table structure for table `phuckhao`
--

CREATE TABLE `phuckhao` (
  `MaPK` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaHS` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaTTCM` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Diem` float DEFAULT NULL,
  `Tenlop` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qtht`
--

CREATE TABLE `qtht` (
  `MaNQT` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenNQT` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaND` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qtht`
--

INSERT INTO `qtht` (`MaNQT`, `TenNQT`, `SDT`, `Email`, `MaND`) VALUES
('123', '123', '', '', 'qtht'),
('1233', '123', '', '', 'qtht'),
('admin', 'Admin', '0379747315', 'admin@gmail.com', 'qtht'),
('admin2', 'Đức Hiền', '', '', 'qtht');

-- --------------------------------------------------------

--
-- Table structure for table `qtt`
--

CREATE TABLE `qtt` (
  `MaQTT` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaND` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenQTT` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qtt`
--

INSERT INTO `qtt` (`MaQTT`, `MaND`, `TenQTT`, `SDT`, `Email`) VALUES
('101', 'qtt', 'Trần Đức Hiền', '+84563400311', 'duchien23082000@gmail.com'),
('102', 'qtt', 'Nguyễn Hoàng Mỹ', '+84888274747', 'nguyenhoangmy2701@gmail.com'),
('103', 'qtt', 'Nguyễn Trần Bảo Phúc', '+84563400211', 'nguyentranbaophuc@gmail.com'),
('104', 'qtt', 'Nguyễn Anh Khôi', '+84567741162', 'nguyenanhkhoiiuh@gmail.com'),
('105', 'qtt', 'Nguyễn Khang', '+84888244647', 'nguyenkhangiuh@gmail.com'),
('qttabc', 'qtt', 'Ngô Trung ', '0324587213', 'ngotrung123@gmail.com'),
('qttxy', 'qtt', 'Bùi Hoàng', '03895722331', 'buihoang23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaND` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `Password`, `MaND`) VALUES
('101', 'e10adc3949ba59abbe56e057f20f883e', 'qtt'),
('102', 'e10adc3949ba59abbe56e057f20f883e', 'qtt'),
('103', 'e10adc3949ba59abbe56e057f20f883e', 'qtt'),
('104', 'e10adc3949ba59abbe56e057f20f883e', 'qtt'),
('105', 'e10adc3949ba59abbe56e057f20f883e', 'qtt'),
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'qtht'),
('giaovien', 'e10adc3949ba59abbe56e057f20f883e', 'gv'),
('hocsinh', 'e10adc3949ba59abbe56e057f20f883e', 'hs'),
('qttabc', 'e10adc3949ba59abbe56e057f20f883e', 'qtt'),
('qttxy', 'e10adc3949ba59abbe56e057f20f883e', 'qtt'),
('totruongcm', 'e10adc3949ba59abbe56e057f20f883e', 'ttcm');

-- --------------------------------------------------------

--
-- Table structure for table `thoikhoabieu_gv`
--

CREATE TABLE `thoikhoabieu_gv` (
  `id` int(10) UNSIGNED NOT NULL,
  `thu2` text CHARACTER SET utf8 NOT NULL,
  `thu3` text CHARACTER SET utf8 NOT NULL,
  `thu4` text CHARACTER SET utf8 NOT NULL,
  `thu5` text CHARACTER SET utf8 NOT NULL,
  `thu6` text CHARACTER SET utf8 NOT NULL,
  `thu7` text CHARACTER SET utf8 NOT NULL,
  `time` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thoikhoabieu_gv`
--

INSERT INTO `thoikhoabieu_gv` (`id`, `thu2`, `thu3`, `thu4`, `thu5`, `thu6`, `thu7`, `time`) VALUES
(1, 'Chào cờ \r\n6A1 \r\n6A1 \r\n6A2 \r\n6A2', '6A5 \r\n6A5 \r\n6A1 \r\n6A2 \r\n6A2\r\n', '6A4 \r\n6A3 \r\n6A7 \r\n6A1 \r\n6A1', '6A2 \r\n6A2 \r\n6A8 \r\n7A1 \r\n7A1\r\n', '8A2 \r\n9A1 \r\n6A3 \r\n6A3 \r\n7A2', 'SH \r\nSH \r\n \r\n \r\n\r\n', '11:24 PM 28/05/2022');

-- --------------------------------------------------------

--
-- Table structure for table `thoikhoabieu_hs`
--

CREATE TABLE `thoikhoabieu_hs` (
  `id` int(11) UNSIGNED NOT NULL,
  `thu2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thu3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thu4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thu5` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thu6` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thu7` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaTruong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thoikhoabieu_hs`
--

INSERT INTO `thoikhoabieu_hs` (`id`, `thu2`, `thu3`, `thu4`, `thu5`, `thu6`, `thu7`, `time`, `TenLop`, `MaTruong`) VALUES
(1, 'Chào cờ \r\nVăn \r\nHóa \r\nToán \r\nSHCN', 'Toán \r\nCông nghệ \r\nToán \r\nAnh \r\nSinh\r\nAnh', 'Văn \r\nVăn \r\nLý \r\nĐịa \r\nGDCD', 'Sử \r\nAnh \r\nToán \r\nThể dục \r\nThể dục\r\nToán', 'Lý \r\nAnh \r\nSinh \r\nTin \r\nHóa', 'SH \r\nSH \r\nAnh \r\nToán \r\nVăn\r\nHóa \r\nVăn\r\nLý', '16:48:00 15-05-2022', '6A2', 'thcsabc'),
(2, 'Chào cờ \r\nVăn \r\nHóa \r\nToán \r\nSHCN', 'Toán \r\nCông nghệ \r\nToán \r\nAnh \r\nSinh\r\nAnh', 'Văn \r\nVăn \r\nLý \r\nĐịa \r\nGDCD', 'Sử \r\nAnh \r\nToán \r\nThể dục \r\nThể dục\r\nToán', 'Lý \r\nAnh \r\nSinh \r\nTin \r\nHóa', 'Anh \r\nToán \r\nVăn\r\nHóa \r\nVăn\r\nLý', '16:48:00 15-05-2022', '6A1', 'thcsabc'),
(3, 'Chào cờ \r\nVăn \r\nHóa \r\nToán \r\nSHCN', 'Văn\r\nVăn \r\nToán \r\nAnh \r\nSinh\r\nAnh', 'Văn \r\nVăn \r\nLý \r\nĐịa \r\nGDCD', 'Sử \r\nAnh \r\nToán \r\nThể dục \r\nThể dục\r\nToán', 'Lý \r\nAnh \r\nSinh \r\nTin \r\nHóa', 'Anh \r\nToán \r\nVăn\r\nHóa \r\nVăn\r\nLý', '16:48:00 15-05-2022', '7A5', 'thcsabc');

-- --------------------------------------------------------

--
-- Table structure for table `truong`
--

CREATE TABLE `truong` (
  `MaTruong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenTruong` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgayDK` datetime NOT NULL,
  `Tongsolop` int(11) NOT NULL,
  `MaQTT` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truong`
--

INSERT INTO `truong` (`MaTruong`, `TenTruong`, `DiaChi`, `NgayDK`, `Tongsolop`, `MaQTT`) VALUES
('thcsabc', 'THCS Anh Bán Cá', 'đường ABC, xã ABC, huyện ABC, tỉnh ABC', '2021-11-11 10:00:00', 40, 'qttabc'),
('thcstnh', 'THCS Trần Nguyên Hãn', 'Phước Tỉnh.', '2022-05-28 09:35:39', 20, '101'),
('thcsxy', 'THCS Xã Y', 'đường XY, phường XY, quận XY, thành phố XY', '2021-12-24 07:00:00', 30, 'qttxy');

-- --------------------------------------------------------

--
-- Table structure for table `ttcm`
--

CREATE TABLE `ttcm` (
  `MaTTCM` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenTTCM` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaND` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaTruong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ttcm`
--

INSERT INTO `ttcm` (`MaTTCM`, `TenTTCM`, `SDT`, `Email`, `MaMH`, `MaND`, `MaTruong`) VALUES
('totruongcm', 'Phan Thượng', '0954563254', 'pthuong03@gmail.com', 'Toan', 'ttcm', 'thcsabc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiktvabttracnghiem`
--
ALTER TABLE `baiktvabttracnghiem`
  ADD PRIMARY KEY (`MaDeTN`),
  ADD KEY `MaMH_BTN` (`MaMH`),
  ADD KEY `MaNHCH_BTN` (`MaNHCH`),
  ADD KEY `Loaibai` (`Loaibai`);

--
-- Indexes for table `baiktvabttuluan`
--
ALTER TABLE `baiktvabttuluan`
  ADD PRIMARY KEY (`MaDeTL`),
  ADD KEY `MaMH_BTL` (`MaMH`),
  ADD KEY `Loaibai` (`Loaibai`);

--
-- Indexes for table `bailamtl`
--
ALTER TABLE `bailamtl`
  ADD PRIMARY KEY (`IDTL`),
  ADD KEY `MaHS_BTL` (`MaHS`),
  ADD KEY `Tenlop_BTL` (`Tenlop`),
  ADD KEY `MabaiTL_BTL` (`MaDeTL`),
  ADD KEY `Loaibai` (`Loaibai`);

--
-- Indexes for table `bailamtn`
--
ALTER TABLE `bailamtn`
  ADD PRIMARY KEY (`IDTN`),
  ADD KEY `MaDeTN_BTN` (`MaDeTN`),
  ADD KEY `MaHS_BLTN` (`MaHS`),
  ADD KEY `Tenlop_BLTN` (`Tenlop`),
  ADD KEY `Loaibai` (`Loaibai`);

--
-- Indexes for table `bangdiemgv`
--
ALTER TABLE `bangdiemgv`
  ADD PRIMARY KEY (`IDB`),
  ADD KEY `MaHS_BD` (`MaHS`),
  ADD KEY `MaMH` (`MaMH`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Indexes for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`id_cauhoi`),
  ADD UNIQUE KEY `cau_hoi` (`cau_hoi`),
  ADD UNIQUE KEY `id_cauhoi` (`id_cauhoi`);

--
-- Indexes for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD PRIMARY KEY (`CTH_ID`);

--
-- Indexes for table `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`MaDethi`),
  ADD KEY `MaMH_Dethi` (`MaMH`),
  ADD KEY `TenKhoi_Dethi` (`TenKhoi`),
  ADD KEY `MaNHCH_Dethi` (`MaNHCH`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaND_GV` (`MaND`),
  ADD KEY `MaTruong_GV` (`MaTruong`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`MaHS`),
  ADD KEY `Tenlop_HS` (`Tenlop`),
  ADD KEY `MaND_HS` (`MaND`),
  ADD KEY `MaTruong_HS` (`MaTruong`);

--
-- Indexes for table `khoi`
--
ALTER TABLE `khoi`
  ADD PRIMARY KEY (`TenKhoi`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`Tenlop`),
  ADD KEY `MaTruong_Lop` (`MaTruong`),
  ADD KEY `TenKhoi_Lop` (`TenKhoi`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `monkhoi`
--
ALTER TABLE `monkhoi`
  ADD PRIMARY KEY (`IDMK`),
  ADD KEY `MaMH_MK` (`MaMH`),
  ADD KEY `TenKhoi_MK` (`TenKhoi`);

--
-- Indexes for table `nganhangcauhoi`
--
ALTER TABLE `nganhangcauhoi`
  ADD PRIMARY KEY (`MaNHCH`),
  ADD KEY `MaGV_NHCH` (`MaGV`),
  ADD KEY `MaMH_NHCH` (`MaMH`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`);

--
-- Indexes for table `phancong`
--
ALTER TABLE `phancong`
  ADD PRIMARY KEY (`IDPC`),
  ADD KEY `MaGV_PC` (`MaGV`),
  ADD KEY `Tenlop_PC` (`Tenlop`),
  ADD KEY `MaMH_PC` (`MaMH`);

--
-- Indexes for table `phuckhao`
--
ALTER TABLE `phuckhao`
  ADD PRIMARY KEY (`MaPK`),
  ADD KEY `MaMH_PK` (`MaMH`),
  ADD KEY `MaHS_PK` (`MaHS`),
  ADD KEY `MaTTCM_PK` (`MaTTCM`),
  ADD KEY `Tenlop_PK` (`Tenlop`);

--
-- Indexes for table `qtht`
--
ALTER TABLE `qtht`
  ADD PRIMARY KEY (`MaNQT`),
  ADD KEY `MaND_QTHT` (`MaND`);

--
-- Indexes for table `qtt`
--
ALTER TABLE `qtt`
  ADD PRIMARY KEY (`MaQTT`),
  ADD KEY `MaND_QTT` (`MaND`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`),
  ADD UNIQUE KEY `MaTK` (`MaTK`),
  ADD KEY `MaND_TK` (`MaND`);

--
-- Indexes for table `thoikhoabieu_gv`
--
ALTER TABLE `thoikhoabieu_gv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thoikhoabieu_hs`
--
ALTER TABLE `thoikhoabieu_hs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `TenLop_TKBHS` (`TenLop`),
  ADD KEY `MaTruong` (`MaTruong`);

--
-- Indexes for table `truong`
--
ALTER TABLE `truong`
  ADD PRIMARY KEY (`MaTruong`),
  ADD KEY `MaQTT_Truong` (`MaQTT`);

--
-- Indexes for table `ttcm`
--
ALTER TABLE `ttcm`
  ADD PRIMARY KEY (`MaTTCM`),
  ADD KEY `TenMon_TTCM` (`MaMH`),
  ADD KEY `MaND` (`MaND`),
  ADD KEY `MaTruong` (`MaTruong`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bailamtl`
--
ALTER TABLE `bailamtl`
  MODIFY `IDTL` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bailamtn`
--
ALTER TABLE `bailamtn`
  MODIFY `IDTN` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bangdiemgv`
--
ALTER TABLE `bangdiemgv`
  MODIFY `IDB` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `id_cauhoi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  MODIFY `CTH_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `monkhoi`
--
ALTER TABLE `monkhoi`
  MODIFY `IDMK` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phancong`
--
ALTER TABLE `phancong`
  MODIFY `IDPC` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thoikhoabieu_gv`
--
ALTER TABLE `thoikhoabieu_gv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thoikhoabieu_hs`
--
ALTER TABLE `thoikhoabieu_hs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiktvabttracnghiem`
--
ALTER TABLE `baiktvabttracnghiem`
  ADD CONSTRAINT `MaMH_BTN` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaNHCH_BTN` FOREIGN KEY (`MaNHCH`) REFERENCES `nganhangcauhoi` (`MaNHCH`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `baiktvabttuluan`
--
ALTER TABLE `baiktvabttuluan`
  ADD CONSTRAINT `MaMH_BTL` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bailamtl`
--
ALTER TABLE `bailamtl`
  ADD CONSTRAINT `MaHS_BTL` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Tenlop_BTL` FOREIGN KEY (`Tenlop`) REFERENCES `lop` (`Tenlop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bailamtn`
--
ALTER TABLE `bailamtn`
  ADD CONSTRAINT `Loaibai_BTN` FOREIGN KEY (`Loaibai`) REFERENCES `baiktvabttracnghiem` (`Loaibai`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaDeTN_BTN` FOREIGN KEY (`MaDeTN`) REFERENCES `baiktvabttracnghiem` (`MaDeTN`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaHS_BLTN` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Tenlop_BLTN` FOREIGN KEY (`Tenlop`) REFERENCES `lop` (`Tenlop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `bangdiemgv`
--
ALTER TABLE `bangdiemgv`
  ADD CONSTRAINT `MaGV_BDGV` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaHS_BDGV` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaMH_BDGV` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `dethi`
--
ALTER TABLE `dethi`
  ADD CONSTRAINT `MaMH_Dethi` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaNHCH_Dethi` FOREIGN KEY (`MaNHCH`) REFERENCES `nganhangcauhoi` (`MaNHCH`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `TenKhoi_Dethi` FOREIGN KEY (`TenKhoi`) REFERENCES `khoi` (`TenKhoi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `MaND_GV` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaTruong_GV` FOREIGN KEY (`MaTruong`) REFERENCES `truong` (`MaTruong`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `MaND_HS` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE NO ACTION,
  ADD CONSTRAINT `MaTruong_HS` FOREIGN KEY (`MaTruong`) REFERENCES `truong` (`MaTruong`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Tenlop_HS` FOREIGN KEY (`Tenlop`) REFERENCES `lop` (`Tenlop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `MaTruong_Lop` FOREIGN KEY (`MaTruong`) REFERENCES `truong` (`MaTruong`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `TenKhoi_Lop` FOREIGN KEY (`TenKhoi`) REFERENCES `khoi` (`TenKhoi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `monkhoi`
--
ALTER TABLE `monkhoi`
  ADD CONSTRAINT `MaMH_MK` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `TenKhoi_MK` FOREIGN KEY (`TenKhoi`) REFERENCES `khoi` (`TenKhoi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `nganhangcauhoi`
--
ALTER TABLE `nganhangcauhoi`
  ADD CONSTRAINT `MaGV_NHCH` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaMH_NHCH` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `phancong`
--
ALTER TABLE `phancong`
  ADD CONSTRAINT `MaGV_PC` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaMH_PC` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Tenlop_PC` FOREIGN KEY (`Tenlop`) REFERENCES `lop` (`Tenlop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `phuckhao`
--
ALTER TABLE `phuckhao`
  ADD CONSTRAINT `MaHS_PK` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaMH_PK` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaTTCM_PK` FOREIGN KEY (`MaTTCM`) REFERENCES `ttcm` (`MaTTCM`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `qtht`
--
ALTER TABLE `qtht`
  ADD CONSTRAINT `MaND_QTHT` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `qtt`
--
ALTER TABLE `qtt`
  ADD CONSTRAINT `MaND_QTT` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `MaND_TK` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `thoikhoabieu_hs`
--
ALTER TABLE `thoikhoabieu_hs`
  ADD CONSTRAINT `MaTruong_TKBHS` FOREIGN KEY (`MaTruong`) REFERENCES `truong` (`MaTruong`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `TenLop_TKBHS` FOREIGN KEY (`TenLop`) REFERENCES `lop` (`Tenlop`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `truong`
--
ALTER TABLE `truong`
  ADD CONSTRAINT `MaQTT_Truong` FOREIGN KEY (`MaQTT`) REFERENCES `qtt` (`MaQTT`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ttcm`
--
ALTER TABLE `ttcm`
  ADD CONSTRAINT `MaMH_TTCM` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaND_TTCM` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `MaTruong_TTCM` FOREIGN KEY (`MaTruong`) REFERENCES `truong` (`MaTruong`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
