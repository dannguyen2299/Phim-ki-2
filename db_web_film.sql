-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 30, 2021 lúc 06:07 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_web_film`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `name_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `status`) VALUES
(1, 'Phim Bộ', 1),
(2, 'Phim Lẻ', 1),
(3, 'Phim Thuyết Minh', 0),
(4, 'Phim 18+', 0),
(5, 'Phim Taihen', 1),
(6, 'Phim Nhật Bổn', 1),
(7, 'Phim Việt Nam', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_category`
--

CREATE TABLE `detail_category` (
  `idd` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `id_film` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_category`
--

INSERT INTO `detail_category` (`idd`, `status`, `id_film`, `id_category`) VALUES
(1, 1, 1, 1),
(2, 0, 1, 1),
(3, 1, 2, 2),
(4, 0, 2, 2),
(5, 1, 1, 1),
(6, 0, 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_film`
--

CREATE TABLE `detail_film` (
  `idd` int(10) UNSIGNED NOT NULL,
  `rate` int(10) UNSIGNED NOT NULL,
  `follow` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `id_film` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_film`
--

INSERT INTO `detail_film` (`idd`, `rate`, `follow`, `status`, `id_film`, `id_user`) VALUES
(1, 5, 100, 1, 1, 1),
(2, 6, 200, 0, 1, 2),
(3, 7, 300, 1, 2, 2),
(4, 8, 400, 0, 2, 1),
(5, 9, 500, 1, 1, 3),
(6, 10, 600, 0, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `episode`
--

CREATE TABLE `episode` (
  `id_episode` int(10) UNSIGNED NOT NULL,
  `name_episode` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_first` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_second` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `id_film` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `episode`
--

INSERT INTO `episode` (`id_episode`, `name_episode`, `url_first`, `url_second`, `status`, `id_film`) VALUES
(1, 'Nooooooooooo', 'a.com', 'b.com', 1, 1),
(2, 'Nooooooooooo', 'a.com', 'b.com', 0, 2),
(3, 'Nooooooooooo', 'a.com', 'b.com', 1, 3),
(4, 'Nooooooooooo', 'a.com', 'b.com', 0, 4),
(5, 'Nooooooooooo', 'a.com', 'b.com', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `id_film` int(10) UNSIGNED NOT NULL,
  `name_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `number_view` int(10) UNSIGNED NOT NULL,
  `introduce_film` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `url_trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_cmt_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `id_nation` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`id_film`, `name_film`, `year`, `number_view`, `introduce_film`, `time`, `url_trailer`, `url_image`, `url_image_2`, `url_cmt_fb`, `status`, `id_nation`) VALUES
(1, '50 Sắc Thái', 2019, 100000, 'Phim kể về mối tình giữa T và Q', '01:08:00', 'a.url', 'b.img', 'd.img', 'c.facebook', 1, 1),
(2, '51 Sắc Thái', 2020, 100000, 'Phim kể về mối tình giữa T và Q', '01:08:00', 'a.url', 'b.img', 'd.img', 'c.facebook', 1, 2),
(3, '52 Sắc Thái', 2021, 100000, 'Phim kể về mối tình giữa T và Q', '01:08:00', 'a.url', 'b.img', 'd.img', 'c.facebook', 1, 3),
(4, '53 Sắc Thái', 2022, 100000, 'Phim kể về mối tình giữa T và Q', '01:08:00', 'a.url', 'b.img', 'd.img', 'c.facebook', 1, 4),
(5, '54 Sắc Thái', 2023, 100000, 'Phim kể về mối tình giữa T và Q', '01:08:00', 'a.url', 'b.img', 'd.img', 'c.facebook', 1, 5),
(6, '55 Sắc Thái', 2024, 100000, 'Phim kể về mối tình giữa T và Q', '01:08:00', 'a.url', 'b.img', 'd.img', 'c.facebook', 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id_message` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_episode` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id_message`, `name`, `email`, `message`, `id_episode`) VALUES
(1, 'duy', 'duy@gmail.com', 'Không xem được phim', 1),
(2, 'thanh', 'thanh@gmail.com', 'Xem không được phim', 1),
(3, 'dan', 'dan@gmail.com', 'Phim không xem được', 2),
(4, 'hoang', 'hoang@gmail.com', 'Xem được phim không', 2),
(5, 'anh', 'anh@gmail.com', 'Phim được xem không', 3);

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
(10, '2021_04_25_130652_create_category_table', 1),
(11, '2021_04_25_134539_create_nation_table', 1),
(12, '2021_04_25_134808_create_user_table', 1),
(13, '2021_04_25_135608_create_film_table', 1),
(14, '2021_04_25_141531_create_episode_table', 1),
(15, '2021_04_25_142214_create_message_table', 1),
(16, '2021_04_25_143019_create_role_table', 1),
(17, '2021_04_25_143544_create_detail_category_table', 1),
(18, '2021_04_25_144155_create_detail_film_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nation`
--

CREATE TABLE `nation` (
  `id_nation` int(10) UNSIGNED NOT NULL,
  `nation_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nation`
--

INSERT INTO `nation` (`id_nation`, `nation_name`, `status`) VALUES
(1, 'Việt Nam', 1),
(2, 'Mỹ', 0),
(3, 'Trung Quốc', 1),
(4, 'Ý', 1),
(5, 'Ninh Bình', 0),
(6, 'Thái Bình', 1),
(7, 'Thanh Hóa', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(10) UNSIGNED NOT NULL,
  `name_role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name_role`, `status`, `id_user`) VALUES
(1, 'name1', 1, 1),
(2, 'name2', 0, 2),
(3, 'name3', 1, 3),
(4, 'name4', 0, 4),
(5, 'name5', 1, 3),
(6, 'name6', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `pass`, `name`, `status`) VALUES
(1, 'tranduy@gmail.com', 'admin', '123456', 'Trần Thanh Duy', 1),
(2, 'huyhoang@gmail.com', 'admin1', '123456', 'Phan Huy Hoàng', 1),
(3, 'thanh@gmail.com', 'admin2', '123456', 'Kiều Đăng Thành', 0),
(4, 'tuananh@gmail.com', 'admin3', '123456', 'Phạm Tuấn Anh', 1),
(5, 'dan@gmail.com', 'admin4', '123456', 'Nguyễn Viết Dân', 0),
(6, 'thanhyeuquynh@gmail.com', 'admin5', '123456', 'T S2 Q', 1),
(7, 'quynhthichthanh@gmail.com', 'admin6', '123456', 'Q S2 T', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `detail_category`
--
ALTER TABLE `detail_category`
  ADD PRIMARY KEY (`idd`),
  ADD KEY `detail_category_id_film_foreign` (`id_film`),
  ADD KEY `detail_category_id_category_foreign` (`id_category`);

--
-- Chỉ mục cho bảng `detail_film`
--
ALTER TABLE `detail_film`
  ADD PRIMARY KEY (`idd`),
  ADD KEY `detail_film_id_film_foreign` (`id_film`),
  ADD KEY `detail_film_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id_episode`),
  ADD KEY `episode_id_film_foreign` (`id_film`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `film_id_nation_foreign` (`id_nation`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `message_id_episode_foreign` (`id_episode`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`id_nation`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`),
  ADD KEY `role_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD UNIQUE KEY `user_username_unique` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `detail_category`
--
ALTER TABLE `detail_category`
  MODIFY `idd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `detail_film`
--
ALTER TABLE `detail_film`
  MODIFY `idd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `episode`
--
ALTER TABLE `episode`
  MODIFY `id_episode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `nation`
--
ALTER TABLE `nation`
  MODIFY `id_nation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `detail_category`
--
ALTER TABLE `detail_category`
  ADD CONSTRAINT `detail_category_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_category_id_film_foreign` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_film`
--
ALTER TABLE `detail_film`
  ADD CONSTRAINT `detail_film_id_film_foreign` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_film_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_id_film_foreign` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_id_nation_foreign` FOREIGN KEY (`id_nation`) REFERENCES `nation` (`id_nation`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_id_episode_foreign` FOREIGN KEY (`id_episode`) REFERENCES `episode` (`id_episode`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
