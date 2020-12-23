-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 07, 2020 lúc 06:28 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id14050552_mxh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `idbaiviet` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `anhBV` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianBV` datetime NOT NULL,
  `noidungBV` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baytocamxuc`
--

CREATE TABLE `baytocamxuc` (
  `idbaytocamxuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianBTCX` datetime NOT NULL,
  `icon` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbinhluan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `noidungBL` text COLLATE utf8_unicode_ci NOT NULL,
  `sticker` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `idchat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `noidungchat` bigint(20) NOT NULL,
  `thoigianchat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `tentk` varchar(50) NOT NULL,
  `mk` varchar(32) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`tentk`, `mk`, `hoten`, `ngaysinh`, `gioitinh`, `sdt`, `diachi`, `avatar`) VALUES
('abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ABC', '2020-12-30', 'Nữ', 1234567890, 'q7', ''),
('dinh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dinh tai', '2019-12-18', 'Nữ', 123456789, '', ''),
('ff@gmai.com', 'e10adc3949ba59abbe56e057f20f883e', 'aa', '2020-12-02', '1', 1, '', ''),
('kaka@gmail.com', '19ede66f218015fd9df85ac886488926', 'kaka', '2020-12-03', '0', 123456789, '', ''),
('lk@gmail.com', '2deb000b57bfac9d72c14d4ed967b572', 'đ', '2020-12-02', 'Nữ', 222, '', ''),
('qqq@gmail.com', 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '2020-12-19', 'Nữ', 1, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `idnhom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tennhom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thanhvien` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrihethong`
--

CREATE TABLE `quantrihethong` (
  `idquantrihethong` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang`
--

CREATE TABLE `trang` (
  `idtrang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tentrang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`idbaiviet`);

--
-- Chỉ mục cho bảng `baytocamxuc`
--
ALTER TABLE `baytocamxuc`
  ADD PRIMARY KEY (`idbaytocamxuc`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbinhluan`);

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`tentk`);

--
-- Chỉ mục cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`idnhom`);

--
-- Chỉ mục cho bảng `quantrihethong`
--
ALTER TABLE `quantrihethong`
  ADD PRIMARY KEY (`idquantrihethong`);

--
-- Chỉ mục cho bảng `trang`
--
ALTER TABLE `trang`
  ADD PRIMARY KEY (`idtrang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
