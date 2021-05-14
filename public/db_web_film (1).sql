-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2021 lúc 06:29 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

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
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Phim Bộ', 1),
(2, 'Phim Lẻ', 1),
(3, 'Phim Thuyết Minh', 0),
(4, 'Phim 18+', 0),
(5, 'Phim Taihen', 1),
(6, 'Phim Nhật Bổn', 1),
(7, 'Phim Việt Nam', 1),
(8, 'Phim Việt Nam', 1),
(9, 'Phim Việt', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_detail`
--

CREATE TABLE `category_detail` (
  `idd` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `episode`
--

CREATE TABLE `episode` (
  `episode_id` int(10) UNSIGNED NOT NULL,
  `episode_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_first` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_second` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `message_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode_id` int(10) UNSIGNED NOT NULL
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
(1, '2021_04_25_130652_create_category_table', 1),
(2, '2021_04_25_134539_create_nation_table', 1),
(3, '2021_04_25_134808_create_user_table', 1),
(4, '2021_04_25_135608_create_film_table', 1),
(5, '2021_04_25_141531_create_episode_table', 1),
(6, '2021_04_25_142214_create_message_table', 1),
(7, '2021_04_25_143019_create_role_table', 1),
(8, '2021_04_25_143544_create_detail_category_table', 1),
(9, '2021_04_25_144155_create_detail_film_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `view` int(10) UNSIGNED NOT NULL,
  `introduce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_cmt_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `total_episodes` int(11) NOT NULL,
  `current_episode` int(11) NOT NULL,
  `nation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `year`, `view`, `introduce`, `length`, `url_trailer`, `url_image`, `url_cmt_fb`, `status`, `total_episodes`, `current_episode`, `nation_id`) VALUES
(1, 'Bàn tay diệt quỷ', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/b/t/btdq_main_poster_1.jpg', 'nothing', 1, 80, 12, 2),
(2, 'Palm springs', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/t/e/teaser_poster_1_1__1.jpg', 'nothing', 1, 80, 12, 4),
(3, 'Cục nợ hóa cục cưng', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/r/s/rsz_main_poster_cncc_1.jpg', 'nothing', 1, 80, 12, 3),
(4, 'Điệp viên siêu lầy', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/a/main-poster_ms1_1.jpg', 'nothing', 1, 80, 12, 4),
(5, 'Chiến binh cuối cùng', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/p/o/poster-the-last-warrior_1__1.jpg', 'nothing', 1, 80, 12, 4),
(6, 'Thám tử lừng danh Conan', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/c/o/conan_24_-_main_poster_1__1.jpg', 'nothing', 1, 80, 12, 2),
(7, 'Trùm cuối siêu đẳng', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/b/o/boss_level_-_payoff_poster_1__1.jpg', 'nothing', 1, 80, 12, 3),
(8, 'Ong nhí phiêu liêu kí', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/a/main_poster_mtb_1__1.jpg', 'nothing', 1, 80, 12, 2),
(9, 'Người nhân bản', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/a/main_poster_seobok_15_1.jpg', 'nothing', 1, 80, 12, 3),
(10, 'Mortal Combat', 2014, 125, 'nothing', '120', 'nothing', 'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/o/mortal_kombat_-_vn_-_payoff_poster_1_1__1.jpg', 'nothing', 1, 80, 12, 4),
(11, 'Người phán xử', 2014, 125, 'nothing', '120', 'nothing', 'https://img.vietwiki.net/uploads/2017/04/nguoi-phan-xu-phim-truyen-hinh-viet-nam-1.jpg', 'nothing', 1, 80, 12, 1),
(12, 'Hoa hồng trên ngực trái', 2014, 125, 'nothing', '120', 'nothing', 'https://cdn.dongphimmoi.com/wp-content/uploads/2019/08/hoa-hong-tren-nguc-trai.jpg', 'nothing', 1, 80, 12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie_detail`
--

CREATE TABLE `movie_detail` (
  `idd` int(10) UNSIGNED NOT NULL,
  `rate` int(10) UNSIGNED NOT NULL,
  `follow` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nation`
--

CREATE TABLE `nation` (
  `nation_id` int(10) UNSIGNED NOT NULL,
  `nation_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nation`
--

INSERT INTO `nation` (`nation_id`, `nation_name`, `status`) VALUES
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
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `pass`, `name`, `status`) VALUES
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
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `category_detail`
--
ALTER TABLE `category_detail`
  ADD PRIMARY KEY (`idd`),
  ADD KEY `category_detail_movie_id_foreign` (`movie_id`),
  ADD KEY `category_detail_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`episode_id`),
  ADD KEY `episode_movie_id_foreign` (`movie_id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_episode_id_foreign` (`episode_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movie_nation_id_foreign` (`nation_id`);

--
-- Chỉ mục cho bảng `movie_detail`
--
ALTER TABLE `movie_detail`
  ADD PRIMARY KEY (`idd`),
  ADD KEY `movie_detail_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_detail_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`nation_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD UNIQUE KEY `user_username_unique` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `category_detail`
--
ALTER TABLE `category_detail`
  MODIFY `idd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `episode`
--
ALTER TABLE `episode`
  MODIFY `episode_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `movie_detail`
--
ALTER TABLE `movie_detail`
  MODIFY `idd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nation`
--
ALTER TABLE `nation`
  MODIFY `nation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_detail`
--
ALTER TABLE `category_detail`
  ADD CONSTRAINT `category_detail_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_detail_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_episode_id_foreign` FOREIGN KEY (`episode_id`) REFERENCES `episode` (`episode_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nation` (`nation_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `movie_detail`
--
ALTER TABLE `movie_detail`
  ADD CONSTRAINT `movie_detail_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movie_detail_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
