-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2021 lúc 03:58 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '2958b119d12f11f406cee0db1f60df92', 'hung', '01659974214', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_slug`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(2, 'COMBO', 'com-bo', 'combo', 1, NULL, NULL),
(3, 'ĐỒ UỐNG', 'do-uong', 'đồ uống', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(1, 'Thanh Hùng', 'hung@gmail.com', '2958b119d12f11f406cee0db1f60df92', '0683862488', NULL, NULL),
(2, 'Mai Thanh Hùng', 'ddd@gmail.com', '2958b119d12f11f406cee0db1f60df92', '1659974214', NULL, NULL),
(3, 'Mai Thanh Hùng', 'qqqq@gmail.com', '2958b119d12f11f406cee0db1f60df92', '1659974214', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_10_040411_create_category_table', 1),
(6, '2021_11_10_040505_create_product_table', 1),
(7, '2021_11_10_040519_create_admin_table', 1),
(8, '2021_11_10_040549_create_order_table', 1),
(9, '2021_11_10_040621_create_order_details_table', 1),
(10, '2021_11_10_040655_create_customer_table', 1),
(11, '2021_11_29_135039_create_shipping_table', 2),
(12, '2021_11_29_144229_create_payment_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(10) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` double(8,2) NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(40, 1, 7, 49, 78000.00, 0, NULL, NULL),
(41, 1, 8, 50, 334000.00, 0, NULL, NULL),
(42, 1, 9, 52, 98000.00, 0, '2021-11-29 17:00:00', NULL),
(43, 1, 10, 53, 98000.00, 0, '2021-11-29 23:20:03', NULL),
(44, 1, 11, 54, 98000.00, 0, '2021-11-30 06:34:53', NULL),
(45, 1, 13, 55, 39000.00, 0, '2021-11-30 11:58:21', NULL),
(46, 1, 14, 56, 137000.00, 0, '2021-11-30 12:02:06', NULL),
(47, 1, 15, 57, 39000.00, 0, '2021-12-01 02:36:06', NULL),
(48, 1, 16, 58, 137000.00, 0, '2021-12-01 03:11:26', NULL),
(49, 1, 17, 59, 255000.00, 0, '2021-12-01 09:59:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(3, 40, 3, 'Cafe sữa', 78000.00, 2, NULL, NULL),
(4, 41, 3, 'Cafe sữa', 39000.00, 1, NULL, NULL),
(5, 41, 4, 'Combo 1', 295000.00, 5, NULL, NULL),
(6, 42, 4, 'Combo 1', 59000.00, 1, NULL, NULL),
(7, 42, 3, 'Cafe sữa', 39000.00, 1, NULL, NULL),
(8, 43, 3, 'Cafe sữa', 39000.00, 1, NULL, NULL),
(9, 43, 4, 'Combo 1', 59000.00, 1, NULL, NULL),
(10, 44, 3, 'Cafe sữa', 39000.00, 1, NULL, NULL),
(11, 44, 4, 'Combo 1', 59000.00, 1, NULL, NULL),
(12, 45, 3, 'Cafe sữa', 39000.00, 1, NULL, NULL),
(13, 46, 3, 'Cafe sữa', 78000.00, 2, NULL, NULL),
(14, 46, 4, 'Combo 1', 59000.00, 1, NULL, NULL),
(15, 47, 5, 'Cafe đen', 39000.00, 1, NULL, NULL),
(16, 48, 5, 'Cafe đen', 39000.00, 1, NULL, NULL),
(17, 48, 4, 'Combo 1', 59000.00, 1, NULL, NULL),
(18, 48, 3, 'Cafe sữa', 39000.00, 1, NULL, NULL),
(19, 49, 5, 'Cafe đen', 39000.00, 1, NULL, NULL),
(20, 49, 4, 'Combo 1', 177000.00, 3, NULL, NULL),
(21, 49, 3, 'Cafe sữa', 39000.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(49, '2', 1, NULL, NULL),
(50, '2', 1, NULL, NULL),
(51, '2', 1, NULL, NULL),
(52, '2', 1, NULL, NULL),
(53, '2', 1, NULL, NULL),
(54, '2', 1, NULL, NULL),
(55, '2', 1, NULL, NULL),
(56, '2', 1, NULL, NULL),
(57, '2', 1, NULL, NULL),
(58, '2', 1, NULL, NULL),
(59, '2', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_slug`, `category_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(3, 'Cafe sữa', 'cafe-sữa', 3, '<p>&aacute;ddas</p>', '<p>đasadas</p>', '39000', 'cafe_sua_6f73d4c912d54d7e9a64acad07ce90b4_master85.png', 0, NULL, NULL),
(4, 'Combo 1', 'com-bo1', 2, '<p>dasdasd</p>', '<p>fessef</p>', '59000', 'ga-ran-dui26.jpg', 0, NULL, NULL),
(5, 'Cafe đen', 'cafe-đen', 3, '<p>sd&aacute;dasdas</p>', '<p>sd&aacute;dasdas</p>', '39000', 'cafeden_eb0ff7d5ba824f5296ac9a5badb6a2cb_master30.png', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `created_at`, `updated_at`) VALUES
(7, 'ưqrqw', 'eqweqwe', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(8, 'ưqrqw', 'eqweqwe', '0812320942', 'hung040500z@gmail.com', NULL, NULL),
(9, 'ưqrqw', 'eqweqwe', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(10, 'ưqrqw', 'eqweqwe', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(11, 'ưqrqw', 'eqweqwe', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(12, 'ưqrqw', 'eqweqwe', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(13, 'ưqrqw', 'eqweqwe', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(14, 'ưqrqw', 'eqweqwe', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(15, 'Mai Thanh Hùng', 'áddasd', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(16, 'Mai Thanh Hùng', 'áddasd', '1659974214', 'hung040500z@gmail.com', NULL, NULL),
(17, 'Mai Thanh Hùng', 'áddasd', '1659974214', 'hung040500z@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
