-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2021 lúc 02:18 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `giatien` double(12,3) NOT NULL DEFAULT 0.000,
  `tongtien` double(12,3) NOT NULL DEFAULT 0.000,
  `anh` varchar(255) NOT NULL,
  `hoadon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `sach_id` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `ngayxuatban` date NOT NULL,
  `sotrang` varchar(5) NOT NULL,
  `gioithieu` varchar(255) NOT NULL,
  `giatien` double(12,3) NOT NULL,
  `trangthai` int(2) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`sach_id`, `ten`, `tacgia`, `ngayxuatban`, `sotrang`, `gioithieu`, `giatien`, `trangthai`, `anh`) VALUES
('S1', 'Cha giàu cha nghèo', 'Robert', '2021-12-11', '158', 'Dạy về kinh tế', 100.000, 1, 'chagiauchangheo.jpg'),
('S10', 'Doraemon và những dũng sĩ có cánh', 'Fujiko', '2021-12-20', '100', 'Truyện tranh trẻ em', 35.000, 1, 'doraemon.png'),
('S11', 'Conan', 'Conan', '2021-12-20', '100', 'Truyện tranh', 50.000, 1, 'conan.jpg'),
('S2', 'Quản lý thời gian', 'Brian Tracy', '2021-12-12', '100', 'Học cách quản lý thời gian', 100.000, 0, 'nghe-thuat-quan-ly-thoi-gian.png'),
('S3', 'Tôi tài giỏi bạn cũng vậy', 'Adam Khoo', '2021-12-13', '100', 'Giúp bạn có cuộc sống tốt đẹp hơn', 100.000, 1, 'toi-tai-gioi-ban-cung-vay.jpg'),
('S5', 'ABC', 'abc', '2021-12-19', '100', 'LKASJKJ', 100.000, 1, '1711_SONG1.jpg'),
('S8', 'abj', 'ákdfj', '2021-12-16', '1231', 'ăer', 123.000, 1, '1711_SONG1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `sach_id` int(20) NOT NULL,
  `giasale` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloaisach`
--

CREATE TABLE `theloaisach` (
  `theloai_id` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `sach_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloaisach`
--

INSERT INTO `theloaisach` (`theloai_id`, `ten`, `sach_id`) VALUES
('KT1', 'Kinh tế', 'S1'),
('TH1', 'Tự học', 'S2'),
('TH2', 'Thiếu nhi', 'S10'),
('TH3', 'Thiếu nhi', 'S1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gioitinh` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `taikhoan`, `matkhau`, `ten`, `diachi`, `sodienthoai`, `email`, `gioitinh`) VALUES
(3, 'khachhang', '123456', 'Nguyễn Bảo Nguyên', 'Hải Phòng', '0888888888', 'abc@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon` (`hoadon_id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`sach_id`);

--
-- Chỉ mục cho bảng `theloaisach`
--
ALTER TABLE `theloaisach`
  ADD PRIMARY KEY (`theloai_id`),
  ADD KEY `tenSach` (`sach_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `theloaisach`
--
ALTER TABLE `theloaisach`
  ADD CONSTRAINT `tenSach` FOREIGN KEY (`sach_id`) REFERENCES `sach` (`sach_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
