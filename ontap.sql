-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 02:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ontap`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietvandon`
--

CREATE TABLE `chitietvandon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_vandon` bigint(20) UNSIGNED NOT NULL,
  `hanghoa_id` bigint(20) UNSIGNED NOT NULL,
  `solong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hangsx_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2021_01_02_035523_create_nhanvien', 1),
(3, '2021_01_02_035833_create_hangsanxuat', 1),
(4, '2021_01_02_040002_create_hanghoa', 1),
(5, '2021_01_02_040056_create_vandon', 1),
(6, '2021_01_02_040150_create_chitietvandon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hovaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hovaten`, `dienthoai`, `email`, `diachi`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thị Lan', '0329294747', 'duc99@gmail.com', 'Hai phòng', '2021-01-01 22:19:17', NULL),
(2, 'Vũ Thành Thạch', '013245657', 'dat@gmail.com', 'Hải phòng', '2021-01-01 22:19:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendaydu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyenhan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `tendaydu`, `matkhau`, `quyenhan`, `created_at`, `updated_at`) VALUES
(1, 'manhle', 'le sy duc manh', 'manh123', 1, '2021-01-02 00:34:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vandon`
--

CREATE TABLE `vandon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nhanvien_id` bigint(20) UNSIGNED NOT NULL,
  `trangthai` int(11) NOT NULL,
  `nguonhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaygiaohang` datetime NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vandon`
--

INSERT INTO `vandon` (`id`, `nhanvien_id`, `trangthai`, `nguonhan`, `dienthoai`, `diachi`, `ngaygiaohang`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Nguyễn Trung Đưc', '03214545', 'Hải phòng', '2021-01-01 14:22:05', 'Giao nhanh con mẹ mày lên', '2021-01-01 22:22:05', NULL),
(2, 2, 2, 'Vũ Thành Đạt', '0314625475', 'Hải Phòng', '2021-01-07 14:22:05', 'Giao nhanh mẹ mày lên', '2021-01-01 22:22:05', NULL),
(3, 2, 1, 'Lê Sỹ Đức Mạnh', '0312546874', 'Thái Bình', '2021-01-13 00:00:00', 'Giao nhanh', '2021-01-02 14:27:28', '2021-01-02 14:27:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietvandon`
--
ALTER TABLE `chitietvandon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietvandon_id_vandon_foreign` (`id_vandon`),
  ADD KEY `chitietvandon_hanghoa_id_foreign` (`hanghoa_id`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hanghoa_hangsx_id_foreign` (`hangsx_id`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vandon`
--
ALTER TABLE `vandon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vandon_nhanvien_id_foreign` (`nhanvien_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietvandon`
--
ALTER TABLE `chitietvandon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vandon`
--
ALTER TABLE `vandon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietvandon`
--
ALTER TABLE `chitietvandon`
  ADD CONSTRAINT `chitietvandon_hanghoa_id_foreign` FOREIGN KEY (`hanghoa_id`) REFERENCES `hanghoa` (`id`),
  ADD CONSTRAINT `chitietvandon_id_vandon_foreign` FOREIGN KEY (`id_vandon`) REFERENCES `vandon` (`id`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_hangsx_id_foreign` FOREIGN KEY (`hangsx_id`) REFERENCES `hangsanxuat` (`id`);

--
-- Constraints for table `vandon`
--
ALTER TABLE `vandon`
  ADD CONSTRAINT `vandon_nhanvien_id_foreign` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
