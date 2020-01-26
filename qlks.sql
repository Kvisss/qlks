-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 25, 2020 lúc 07:19 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlks`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDichVu` int(11) NOT NULL,
  `TenDichVu` text COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `NhomDichVu` text COLLATE utf8_unicode_ci NOT NULL,
  `DonVi` text COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`MaDichVu`, `TenDichVu`, `DonGia`, `NhomDichVu`, `DonVi`, `GhiChu`) VALUES
(1, 'Bia', 0, 'Đồ uống', 'Lon', ''),
(2, 'Nước lọc', 0, 'Đồ uống', 'Chai', ''),
(3, 'Sữa', 0, 'Đồ uống', 'Hộp', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondatphong`
--

CREATE TABLE `dondatphong` (
  `MaDonDatPhong` int(11) NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `MaPhong` int(11) NOT NULL,
  `NgayVao` date NOT NULL,
  `NgayRa` date NOT NULL,
  `TraTruoc` int(11) NOT NULL,
  `KhuyenMai` text COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` int(11) NOT NULL,
  `CMND` int(9) NOT NULL,
  `NgaySinh` date NOT NULL,
  `NoiSinh` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoVisa` int(11) DEFAULT NULL,
  `ThoiHanVisa` date DEFAULT NULL,
  `NguoiTiepNhan` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayNhapCanh` date DEFAULT NULL,
  `TamTruTaiVietNam` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `DenNgay` date NOT NULL,
  `QuocTich` text COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `HoTen`, `DiaChi`, `DienThoai`, `CMND`, `NgaySinh`, `NoiSinh`, `SoVisa`, `ThoiHanVisa`, `NguoiTiepNhan`, `NgayNhapCanh`, `TamTruTaiVietNam`, `DenNgay`, `QuocTich`, `GioiTinh`) VALUES
(6, 'Ninh Giang Truong', 'Ho Tung Mau', 394847744, 122261111, '1998-02-10', 'Bac Giang', NULL, NULL, '1', NULL, NULL, '2019-07-16', 'Viet Nam', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `MaLoaiPhong` int(11) NOT NULL,
  `TenLoaiPhong` text COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoGiuong` int(11) NOT NULL,
  `SoNguoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`MaLoaiPhong`, `TenLoaiPhong`, `DonGia`, `SoGiuong`, `SoNguoi`) VALUES
(1, 'Vip', 200, 1, 2),
(2, 'Superior', 170, 1, 2),
(3, 'Deluxe', 130, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(11) NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` int(11) NOT NULL,
  `CMND` int(11) NOT NULL,
  `NgaySinh` date NOT NULL,
  `NoiSinh` text COLLATE utf8_unicode_ci NOT NULL,
  `TamTru` text COLLATE utf8_unicode_ci NOT NULL,
  `ThuongTru` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayVaoLam` date NOT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci NOT NULL,
  `Quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `HoTen`, `DiaChi`, `DienThoai`, `CMND`, `NgaySinh`, `NoiSinh`, `TamTru`, `ThuongTru`, `NgayVaoLam`, `GhiChu`, `Quyen`) VALUES
(1, 'Nguyen Thanh Tung', 'Ha Dong', 123456789, 123321123, '1998-01-01', 'Ha Noi', 'Ha Dong', 'Ha Dong', '2019-01-01', '', 1),
(2, 'Ninh Giang Truong', 'Ha Dong', 123456789, 123321123, '1998-01-01', 'Ha Noi', 'Ha Dong', 'Ha Dong', '2019-01-01', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `MaPhong` int(11) NOT NULL,
  `TenPhong` text COLLATE utf8_unicode_ci NOT NULL,
  `MaLoaiPhong` int(11) NOT NULL,
  `TienNghi` text COLLATE utf8_unicode_ci NOT NULL,
  `ThongTin` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`MaPhong`, `TenPhong`, `MaLoaiPhong`, `TienNghi`, `ThongTin`) VALUES
(2, '502', 1, '', 'Sạch sẽ đẹp đẽ'),
(3, '503', 1, '', 'Sạch sẽ đẹp đẽ'),
(4, '504', 1, '', 'Sạch sẽ đẹp đẽ'),
(5, '505', 1, '', 'Sạch sẽ đẹp đẽ'),
(6, '506', 3, 'Dieu hoa, tu lanh', 'rat sach se dep de');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `MaNhanVien` int(11) NOT NULL,
  `Quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `MaNhanVien`, `Quyen`) VALUES
(1, 'admin', 'admin', 1, 1),
(2, 'admin', 'admin', 2, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDichVu`);

--
-- Chỉ mục cho bảng `dondatphong`
--
ALTER TABLE `dondatphong`
  ADD PRIMARY KEY (`MaDonDatPhong`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`MaLoaiPhong`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaPhong`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `MaDichVu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dondatphong`
--
ALTER TABLE `dondatphong`
  MODIFY `MaDonDatPhong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `MaLoaiPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `MaPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
