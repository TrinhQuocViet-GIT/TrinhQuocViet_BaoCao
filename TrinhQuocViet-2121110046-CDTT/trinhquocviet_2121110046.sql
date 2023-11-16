-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 07:36 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trinhquocviet_2121110046`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_brand`
--

CREATE TABLE `2121110046_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL COMMENT 'Tên Thương hiệu',
  `slug` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL COMMENT 'Logo Thương hiệu',
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Vị trí hiển thị',
  `metakey` varchar(255) NOT NULL,
  `metadesc` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_brand`
--

INSERT INTO `2121110046_brand` (`id`, `name`, `slug`, `image`, `sort_order`, `metakey`, `metadesc`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'CHANEL', 'chanel', 'chanel.png', 1, 'chanel', 'noi tieng', 1, 1, '2023-09-24 06:42:17', '2023-09-27 04:13:12', 1),
(2, 'DIOR', 'dior', 'dior.png', 1, 'dior', 'noi tieng', 1, 0, '2023-09-24 06:42:17', '2023-09-24 06:42:35', 1),
(3, 'GUCCI', 'gucci', 'gucci.png', 1, 'gucci', 'noi tieng', 1, 0, '2023-09-24 06:42:17', '2023-09-24 06:42:35', 1),
(4, 'TOM FORD', 'tom-ford', 'tom_ford.png', 1, 'tom-ford', 'noi tieng', 1, 0, '2023-09-24 06:42:17', '2023-09-24 06:42:35', 1),
(5, 'YVES SAINT LAURENT (YSL)', 'yves-saint-laurent', 'yves_saint_laurent.png', 1, 'yves-saint-laurent', 'noi tieng', 1, 0, '2023-09-24 06:42:17', '2023-09-24 06:42:35', 1),
(6, 'Trịnh Quốc Việt', 'trinh_quoc_viet', 'trinh_quoc_viet.png', 0, 'RWER', 'ƯEREWRWER', 1, NULL, '2023-09-27 05:52:45', '2023-09-27 05:52:45', 0),
(7, 'Trịnh Quốc Việtádasd', 'trinh_quoc_vietadasd', NULL, 0, 'SÂSASđâs', 'ÂSâssadsa', 1, 1, '2023-09-27 05:53:43', '2023-09-27 05:54:07', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_category`
--

CREATE TABLE `2121110046_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL,
  `metakey` varchar(255) NOT NULL,
  `metadesc` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_category`
--

INSERT INTO `2121110046_category` (`id`, `name`, `slug`, `image`, `parent_id`, `sort_order`, `metakey`, `metadesc`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'NƯỚC HOA BÁN CHẠY', 'nuoc-hoa-ban-chay', 'nuochoanam.png', 0, 0, 'nuochoanam', 'nam', 1, 1, '2023-11-15 15:09:26', '2023-09-27 04:17:33', 1),
(2, 'NƯỚC HOA HOT', 'nuoc-hoa-nu', 'nuochoanu.png', 0, 0, 'nuochoanu', 'nu', 1, 1, '2023-11-01 15:09:39', '2023-10-17 05:15:44', 1),
(3, 'NƯỚC HOA KHUYẾN MÃI', 'nuoc-hoa-KHUYEN-MAI\r\n', 'nuochoanu.png', 0, 0, 'nuochoanu', 'nu', 1, 1, '2023-11-01 15:09:39', '2023-10-17 05:15:44', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_contact`
--

CREATE TABLE `2121110046_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` mediumtext NOT NULL,
  `replay_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_contact`
--

INSERT INTO `2121110046_contact` (`id`, `user_id`, `name`, `email`, `phone`, `title`, `content`, `replay_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Admin', 'trinhquocviet020803@gmail.com', '0834627780', '1', 'suzy', 1, 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_link`
--

CREATE TABLE `2121110046_link` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_link`
--

INSERT INTO `2121110046_link` (`id`, `slug`, `table_id`, `type`, `updated_at`, `created_at`) VALUES
(1, 'nuoc-hoa-thui', 3, 'category', NULL, NULL),
(2, 'cuccuckho', 4, 'category', NULL, NULL),
(3, 'trinh-quoc-vietkkk', 5, 'category', NULL, NULL),
(4, 'asas', 6, 'category', NULL, NULL),
(5, 'trinh_quoc_viet', 6, 'brand', NULL, NULL),
(6, 'trinh_quoc_vietadasd', 7, 'brand', NULL, NULL),
(7, 'trinh-quoc-viet', 7, 'category', NULL, NULL),
(8, 'fitsodaf', 8, 'category', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_menu`
--

CREATE TABLE `2121110046_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `table_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_menu`
--

INSERT INTO `2121110046_menu` (`id`, `name`, `link`, `table_id`, `type`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'TRANG CHỦ', '', 0, 'mainmenu', 1, NULL, NULL, NULL, 1),
(2, 'SẢN PHẨM ', 'gg', 0, 'mainmenu', 1, NULL, NULL, NULL, 1),
(3, 'NƯỚC HOA NAM', 'gg', 0, 'mainmenu', 1, NULL, NULL, NULL, 1),
(4, 'NƯỚC HOA MẠNH MẼ', 'gg', 3, 'mainmenu', 1, NULL, NULL, NULL, 1),
(5, 'NƯỚC HOA QUÝ TỘC', 'gg', 3, 'mainmenu', 1, NULL, NULL, NULL, 1),
(6, 'NƯỚC HOA NỮ', 'gg', 0, 'mainmenu', 1, NULL, NULL, NULL, 1),
(7, 'NƯỚC HOA DỊU DÀNG', 'gg', 6, 'mainmenu', 1, NULL, NULL, NULL, 1),
(8, 'NƯỚC HOA BAG GIRL', 'gg', 6, 'mainmenu', 1, NULL, NULL, NULL, 1),
(9, 'GIỚI THIỆU', 'gg', 0, 'mainmenu', 1, NULL, NULL, NULL, 1),
(10, 'LIÊN HỆ', 'gg', 0, 'mainmenu', 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_order`
--

CREATE TABLE `2121110046_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_orderdetail`
--

CREATE TABLE `2121110046_orderdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_post`
--

CREATE TABLE `2121110046_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `create_by` int(10) UNSIGNED NOT NULL,
  `update_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_product`
--

CREATE TABLE `2121110046_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `price` double(8,2) NOT NULL,
  `price_sale` double(8,2) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `detail` mediumtext NOT NULL,
  `metakey` varchar(255) NOT NULL,
  `metadesc` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_product`
--

INSERT INTO `2121110046_product` (`id`, `category_id`, `brand_id`, `name`, `slug`, `price`, `price_sale`, `image`, `qty`, `detail`, `metakey`, `metadesc`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, 'Chanel No. 5', 'chanel-no-5', 4.00, 3.74, 'nuoc-hoa-nu-chanel-no5.jpg', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no5', 'no5', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(2, 1, 1, 'Chanel Chance', 'chanel-chance', 3.00, 2.68, 'nuoc-hoa-nu-chanel-chance.jpg', 210, 'Hương hoa cỏ tươi mát với phong cách trẻ trung và năng động.', 'chanel chance', 'chance', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(4, 1, 1, 'Visrus', 'visrus', 10.00, 90.00, 'nuoc-hoa-chanel-no-5-l-eau-edt-100ml-5ecb2afe908e1-25052020091838.jpg', 300, 'sadasdas', 'Aajdksd', 'asdasdas', 1, 1, '2023-09-27 04:58:37', '2023-09-27 05:05:05', 1),
(5, 1, 1, 'Chanel No. 9', 'chanel-no-9', 3.99, 3.35, 'nuoc-hoa-cho-nu-chanel-chance-eau-fraiche-100ml-5c6667fcd9c49-15022019141924.png', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no9', 'no9', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(6, 1, 1, 'Chanel No. 0', 'chanel-no-9', 3.99, 3.35, 'nuoc-hoa-nu-chanel-no-5-eau-de-parfum-100ml-5c6648f770aad-15022019120703.png', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no9', 'no9', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(7, 1, 1, 'Chanel No. 11', 'chanel-no-9', 3.99, 3.35, 'nuoc-hoa-cho-nu-chanel-chance-eau-fraiche-100ml-5c6667fcd9c49-15022019141924.png', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no9', 'no9', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(8, 1, 1, 'gg', 'gg', 100000.00, 90000.00, 'nuoc-hoa-chanel-n5-edp-100ml-phien-ban-gioi-han-100-nam-6209c9aaae5fd-14022022101658.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1),
(9, 2, 1, 'Nước Hoa Nam Armaf Club De Nuit Intense For Man, 105ml', 'armaf-club-de-nuit', 90.00, 80.00, 'nuoc-hoa-armaf-club-de-nuit-intense-for-man-105ml-5cecf9ac49316-28052019160444.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1),
(10, 2, 1, 'Nước Hoa Nam Armaf Club De Nuit Intense For Man, 105ml', 'armaf-club-de-nuit', 85.00, 70.00, 'nuoc-hoa-nam-afnan-9pm-edp-100ml-629090b444e02-27052022154956.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1),
(11, 2, 1, 'Nước Hoa Nam Burberry London For Men, 100ml', 'armaf-club-de-nuit', 120.00, 111.00, 'nuoc-hoa-nam-burberry-london-for-men-100ml-621847b86fc91-25022022100632.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1),
(12, 3, 1, 'Chanel No. 5', 'chanel-no-5', 4.00, 3.74, 'nuoc-hoa-nu-chanel-no5.jpg', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no5', 'no5', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(13, 3, 1, 'Chanel Chance', 'chanel-chance', 3.00, 2.68, 'nuoc-hoa-nu-chanel-chance.jpg', 210, 'Hương hoa cỏ tươi mát với phong cách trẻ trung và năng động.', 'chanel chance', 'chance', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(14, 3, 1, 'Visrus', 'visrus', 10.00, 5.00, 'nuoc-hoa-chanel-no-5-l-eau-edt-100ml-5ecb2afe908e1-25052020091838.jpg', 300, 'sadasdas', 'Aajdksd', 'asdasdas', 1, 1, '2023-09-27 04:58:37', '2023-09-27 05:05:05', 1),
(15, 3, 1, 'Chanel No. 9', 'chanel-no-9', 3.99, 3.35, 'nuoc-hoa-cho-nu-chanel-chance-eau-fraiche-100ml-5c6667fcd9c49-15022019141924.png', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no9', 'no9', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(16, 3, 1, 'Chanel No. 0', 'chanel-no-9', 3.99, 3.35, 'nuoc-hoa-nu-chanel-no-5-eau-de-parfum-100ml-5c6648f770aad-15022019120703.png', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no9', 'no9', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(17, 3, 1, 'Chanel No. 11', 'chanel-no-9', 3.99, 3.35, 'nuoc-hoa-cho-nu-chanel-chance-eau-fraiche-100ml-5c6667fcd9c49-15022019141924.png', 210, 'Một hương pha trộn hoa cỏ quyến rũ với tông mật ong và hoa cam.', 'chanel no9', 'no9', 1, 1, '2023-09-24 07:04:16', '2023-09-24 07:04:30', 1),
(18, 3, 1, 'gg', 'gg', 100.00, 90.00, 'nuoc-hoa-chanel-n5-edp-100ml-phien-ban-gioi-han-100-nam-6209c9aaae5fd-14022022101658.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1),
(19, 3, 1, 'Nước Hoa Nam Armaf Club De Nuit Intense For Man, 105ml', 'armaf-club-de-nuit', 90.00, 80.00, 'nuoc-hoa-armaf-club-de-nuit-intense-for-man-105ml-5cecf9ac49316-28052019160444.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1),
(20, 3, 1, 'Nước Hoa Nam Armaf Club De Nuit Intense For Man, 105ml', 'armaf-club-de-nuit', 85.00, 70.00, 'nuoc-hoa-nam-afnan-9pm-edp-100ml-629090b444e02-27052022154956.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1),
(21, 3, 1, 'Nước Hoa Nam Burberry London For Men, 100ml', 'armaf-club-de-nuit', 11.00, 10.00, 'nuoc-hoa-nam-burberry-london-for-men-100ml-621847b86fc91-25022022100632.jpg', 13, 'ádasdasdas', 'adasdas', 'ádasdsad', 1, NULL, '2023-11-15 08:32:12', '2023-11-15 08:32:12', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_slider`
--

CREATE TABLE `2121110046_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_slider`
--

INSERT INTO `2121110046_slider` (`id`, `name`, `link`, `sort_order`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'logo', 'Vietloot.png', 1, 'logopage', 1, NULL, NULL, NULL, 1),
(2, 'slider2', 'slide1.jpg', 1, 'slideshow', 1, NULL, NULL, NULL, 1),
(3, 'slider3', 'slide2.jpg', 1, 'slideshow', 1, NULL, NULL, NULL, 1),
(4, 'slider4', 'slide3.jpg', 1, 'slideshow', 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_topic`
--

CREATE TABLE `2121110046_topic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `metakey` varchar(255) NOT NULL,
  `metadesc` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `2121110046_user`
--

CREATE TABLE `2121110046_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `roles` varchar(1000) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2 COMMENT '0:Rác-1:Hiện-2:Ẩn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `2121110046_user`
--

INSERT INTO `2121110046_user` (`id`, `name`, `email`, `phone`, `username`, `password`, `address`, `image`, `roles`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'user 1', '@gmail.com', '10122003', 'admin', '$2y$10$HUG4VU7SHgFK4omjEMnQm.XEChYVDA2BYDHP7J2Zgl7ayBtg8OqQ6', 'ht', 'hinhanh', '1', 1, 1, '2023-06-08 12:38:34', '2023-06-29 18:14:33', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_09_19_104131_create_brand_table', 1),
(3, '2023_09_19_104146_create_category_table', 1),
(4, '2023_09_19_104156_create_menu_table', 1),
(5, '2023_09_19_104205_create_topic_table', 1),
(6, '2023_09_19_104215_create_user_table', 1),
(7, '2023_09_19_104240_create_slider_table', 1),
(8, '2023_09_19_104252_create_order_table', 1),
(9, '2023_09_19_104300_create_orderdetail_table', 1),
(10, '2023_09_19_104311_create_product_table', 1),
(11, '2023_09_19_104349_create_contact_table', 1),
(12, '2023_09_19_104445_create_post_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `2121110046_brand`
--
ALTER TABLE `2121110046_brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `2121110046_brand_name_unique` (`name`) USING HASH,
  ADD UNIQUE KEY `2121110046_brand_slug_unique` (`slug`) USING HASH;

--
-- Chỉ mục cho bảng `2121110046_category`
--
ALTER TABLE `2121110046_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `2121110046_category_name_unique` (`name`) USING HASH,
  ADD UNIQUE KEY `2121110046_category_slug_unique` (`slug`) USING HASH;

--
-- Chỉ mục cho bảng `2121110046_contact`
--
ALTER TABLE `2121110046_contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `2121110046_contact_email_unique` (`email`) USING HASH;

--
-- Chỉ mục cho bảng `2121110046_link`
--
ALTER TABLE `2121110046_link`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `2121110046_menu`
--
ALTER TABLE `2121110046_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `2121110046_order`
--
ALTER TABLE `2121110046_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `2121110046_order_email_unique` (`email`) USING HASH;

--
-- Chỉ mục cho bảng `2121110046_orderdetail`
--
ALTER TABLE `2121110046_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `2121110046_post`
--
ALTER TABLE `2121110046_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `2121110046_product`
--
ALTER TABLE `2121110046_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `2121110046_slider`
--
ALTER TABLE `2121110046_slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `2121110046_topic`
--
ALTER TABLE `2121110046_topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `2121110046_user`
--
ALTER TABLE `2121110046_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `2121110046_brand`
--
ALTER TABLE `2121110046_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `2121110046_category`
--
ALTER TABLE `2121110046_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `2121110046_contact`
--
ALTER TABLE `2121110046_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `2121110046_link`
--
ALTER TABLE `2121110046_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `2121110046_menu`
--
ALTER TABLE `2121110046_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `2121110046_order`
--
ALTER TABLE `2121110046_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `2121110046_orderdetail`
--
ALTER TABLE `2121110046_orderdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `2121110046_post`
--
ALTER TABLE `2121110046_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `2121110046_product`
--
ALTER TABLE `2121110046_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `2121110046_slider`
--
ALTER TABLE `2121110046_slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `2121110046_topic`
--
ALTER TABLE `2121110046_topic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `2121110046_user`
--
ALTER TABLE `2121110046_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
