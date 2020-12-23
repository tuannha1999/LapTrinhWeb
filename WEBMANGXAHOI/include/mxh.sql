-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 05, 2020 lúc 04:11 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mxh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `tentk` varchar(50) NOT NULL,
  `mk` varchar(32) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  PRIMARY KEY (`tentk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`tentk`, `mk`, `hoten`, `ngaysinh`, `gioitinh`, `sdt`, `diachi`, `avatar`) VALUES
('abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ABC', '2020-12-30', 'Nữ', 1234567890, 'q7', ''),
('ngoan@gmail.com', '123', 'Ngoan', '2020-12-12', 'Nữ', 1234, 'q7', ''),
('nha@gmail.com', '123456', 'Tuấn Nhã', '1999-01-02', 'Nam', 376440058, 'Quận 7', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
