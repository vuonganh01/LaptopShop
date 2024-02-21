-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 06, 2023 lúc 09:34 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baithi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `img`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Cao cấp, sang trọng', 'Laptop Cao Cấp là dòng laptop thuộc phân khúc cao cho doanh nhân. Cấu hình mạnh mẽ, thiết kế sang trọng, đây đủ tiện ích, đặc biệt độ bền và tính bảo mật cao. Laptop Cao Cấp được chế tạo bỡi công nghệ tiên tiến. Thiết kế thường bằng hợp kim nhôm sang trọng và bền bỉ, siêu mỏng siêu nhẹ toát lên vẻ đẹp quí phái.', 'storage/category/Cao cấp, sang trọng5061691069872.png', 'cao-cap-sang-trong', '2023-07-28 07:11:38', '2023-08-03 06:37:52'),
(8, 'Mỏng nhẹ', 'Laptop được coi là loại máy mỏng nhẹ khi thiết bị có tổng trọng lượng dưới 2 kg, độ dày dưới 20 mm, màn hình siêu mỏng và có kích thước dưới 14 inch. Những chiếc laptop này sẽ được thiết kế các cạnh viền vát mỏng tạo vẻ đẹp sang trọng và tăng diện tích hiển thị màn hình mà vẫn đảm bảo được tính gọn nhẹ cho máy.', 'storage/category/Mỏng nhẹ1401691069777.webp', 'mong-nhe', '2023-07-28 07:36:56', '2023-08-03 06:36:17'),
(9, 'Đồ hoạ, Kỹ thuật', 'Laptop đồ hoạ là dòng máy tính xách tay cá nhân dành cho người làm việc trong ngành thiết kế, thường xuyên phải dùng các phần phềm thiết kế đồ hoạ như GIMP, CorelDraw, Adobe Photoshop, Adobe Illustrator,.... Bởi các phần mềm này có dung lượng lớn nên ngốn rất nhiều RAM máy tính', 'storage/category/Đồ hoạ, Kỹ thuật7781691069650.png', 'do-hoa-ky-thuat', '2023-07-28 07:44:28', '2023-08-03 06:34:10'),
(14, 'Học tập, Văn phòng', 'Laptop học tập - văn phòng cần đáp ứng các tác vụ văn phòng cơ bản như: Word, Excel, PowerPoint,...', 'storage/category/Học tập, Văn phòng9971691069457.png', 'hoc-tap-van-phong', '2023-07-30 07:19:09', '2023-08-03 06:30:57'),
(16, 'MacBook', 'MacBook là dòng máy tính xách tay (laptop) của Apple Inc sản xuất và phát triển. MacBook có đặc trưng là thiết kế sang trọng cùng trải nghiệm mượt mà mà nó đem lại nhờ chạy hệ điều hành macOS – hệ điều hành do chính Apple phát triển. MacBook có 2 dòng sản phẩm chính là MacBook Air và MacBook Pro.', 'storage/category/MacBook6001691069561.png', 'macbook', '2023-08-02 05:37:46', '2023-08-03 06:32:41'),
(17, 'Gaming', 'Laptop Gaming là dòng máy rất mạnh về cấu hình, cụ thể là CPU (i5, i7 dòng HQ...) và card đồ hoạ rời (AMD, Nvidia) đặc biệt là thiết kế góc cạnh rất hầm hố.', 'storage/category/Gaming161691069217.png', 'gaming', '2023-08-02 05:47:04', '2023-08-03 06:26:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2023_07_26_114037_create_categories_table', 1),
(19, '2023_07_29_012158_create_products_table', 2),
(20, '2023_07_29_023704_add_content_to_products_table', 3),
(21, '2023_08_06_001112_add_price_to_products_table', 4),
(22, '2023_08_06_023810_add_code_to_products_table', 5),
(23, '2023_08_06_024624_add_code_to_products_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `category_id` bigint(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text NOT NULL,
  `price` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `img`, `category_id`, `slug`, `created_at`, `updated_at`, `content`, `price`, `code`) VALUES
(15, 'Laptop MSI Gaming GF63 Thin 11SC', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'storage/product/MSI Gaming GF635301690980565.jpg', 17, 'laptop-msi-gaming-gf63-thin-11sc', '2023-08-02 05:49:25', '2023-08-05 20:28:02', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 14990000, '664VN'),
(16, 'Apple MacBook Air 13 inch M1 2020', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'storage/product/MSI Gaming GF639051690980787.jpg', 16, 'apple-macbook-air-13-inch-m1-2020', '2023-08-02 05:53:07', '2023-08-05 20:27:30', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 18990000, 'MGN63SA/A'),
(17, 'MSI Modern 14 C7M R5', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'storage/product/MSI Gaming GF633971690980855.jpg', 14, 'msi-modern-14-c7m-r5', '2023-08-02 05:54:15', '2023-08-05 20:27:05', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 11990000, '083VN'),
(18, 'Asus TUF Gaming F15', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'storage/product/MSI Gaming GF632261690980899.jpg', 17, 'asus-tuf-gaming-f15', '2023-08-02 05:54:59', '2023-08-05 20:26:41', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 20990000, 'HN074W'),
(19, 'Apple MacBook Air 13 inch M2 2022', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'storage/product/MSI Gaming GF634771690980928.jpg', 16, 'apple-macbook-air-13-inch-m2-2022', '2023-08-02 05:55:28', '2023-08-05 20:26:06', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 27090000, 'MLY13SA/A'),
(20, 'Laptop Acer Aspire 7 Gaming A715', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'storage/product/MSI Gaming GF634231690981812.jpg', 17, 'laptop-acer-aspire-7-gaming-a715', '2023-08-02 06:10:12', '2023-08-05 20:25:37', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 15990000, 'NH.QMESV.002'),
(21, 'MacBook Air 15 inch M2 2023', 'MacBook Air 15 inch M2 2023 đã có phiên bản cải tiến vừa được nhà Apple cho ra mắt, thêm không gian cho những điều bạn yêu với màn hình Liquid Retina 15 inch ấn tượng. Với người dùng yêu thích hiệu năng \"nhanh như chớp\" trong một thiết kế siêu gọn nhẹ của dòng Air thì đây chắc chắn là một sản phẩm bạn không nên bỏ qua.', 'storage/product/MSI Gaming GF638521690981909.jpg', 16, 'macbook-air-15-inch-m2-2023', '2023-08-02 06:11:49', '2023-08-05 20:25:12', 'MacBook Air 15 inch M2 2023 đã có phiên bản cải tiến vừa được nhà Apple cho ra mắt, thêm không gian cho những điều bạn yêu với màn hình Liquid Retina 15 inch ấn tượng. Với người dùng yêu thích hiệu năng \"nhanh như chớp\" trong một thiết kế siêu gọn nhẹ của dòng Air thì đây chắc chắn là một sản phẩm bạn không nên bỏ qua.', 37990000, 'MQKU3SA/A'),
(22, 'Laptop Acer Aspire 3 A315 57', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'storage/product/MSI Gaming GF637081690981977.jpg', 14, 'laptop-acer-aspire-3-a315-57', '2023-08-02 06:12:57', '2023-08-05 20:23:22', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 7690000, 'NX.KAGSV.001'),
(24, 'Asus Vivobook Pro 15 OLED', 'Một tân binh thuộc phân khúc laptop cao cấp - sang trọng được nhà Asus cho ra mắt để phục vụ tối đa mọi tác vụ từ cơ bản đến nâng cao cho dân văn phòng hay doanh nhân khi sở hữu những thông số mạnh mẽ từ cấu hình, màn hình,... chính là chiếc laptop Asus Vivobook Pro 15 K6502Z i5 12450H (MA025W).', 'storage/product/Asus Vivobook Pro 15 OLED K6502Z9031691071397.jpg', 9, 'asus-vivobook-pro-15-oled', '2023-08-03 07:03:17', '2023-08-05 20:22:43', 'Màn hình: 15.6\", 2K, 120Hz  CPU: i5, 12450H, 2GHz  Card: RTX 3050 4GB  Pin: 3-cell Li-ion, 70 Wh  Khối lượng: 1.8 kg', 22990000, 'MA025W'),
(25, 'Laptop Lenovo Yoga Duet 7', 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 (82MA009PVN) độc đáo với thiết kế linh hoạt, cho phép bạn sử dụng máy như một chiếc laptop làm việc đầy năng suất hay một chiếc tablet giúp thỏa mãn mọi nhu cầu giải trí.', 'storage/product/Lenovo Yoga Duet 7 13ITL64931691071620.jpg', 8, 'laptop-lenovo-yoga-duet-7', '2023-08-03 07:07:00', '2023-08-05 20:20:58', 'Màn hình: 13\", 2K, Cảm ứng  CPU: i7, 1165G7, 2.8GHz  Card: Intel Iris Xe  Pin: 41 Wh  Khối lượng: 1.168 kg', 32790000, '82MA003UVN'),
(26, 'Laptop Asus Zenbook 14 Flip OLED', 'Laptop Asus Zenbook 14 Flip OLED UP3404VA i7 1360P (KN039W) là một chiếc laptop thực sự đáng để sở hữu với hiệu năng mạnh mẽ, màn hình tuyệt đẹp. Chắc chắn sẽ làm hài lòng những khách hàng với đòi hỏi cao như doanh nhân, nhà sáng tạo hình ảnh chuyên nghiệp.', 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 7, 'laptop-asus-zenbook-14-flip-oled', '2023-08-03 07:09:59', '2023-08-05 20:18:00', 'Màn hình: 14\", 2K, 90Hz  CPU: i7, 1360P, 2.2GHz  Card: Intel Iris Xe  Pin: 4-cell Li-ion, 75 Wh  Khối lượng: 1.5 kg', 29990000, 'KN039W');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Iphone', 'test@gmail.com', NULL, '$2y$10$4oDYDp3ygPQSRL2goP8KK.nh9kvRFWM/VT3IutmR326arGsc9t11W', NULL, '2023-07-29 05:59:02', '2023-07-29 05:59:02'),
(2, 'Iphone', 'test1@gmail.com', NULL, '$2y$10$FKC5ve5bBZ6NBoYxBbnd/O7dfhXNz3/xeKQlpSTIyo/.2ixPa3aNu', NULL, '2023-07-29 06:04:38', '2023-07-29 06:04:38'),
(3, 'vuong anh', 'test123@gmail.com', NULL, '$2y$10$AkX2Y2SLdyb1/i0eHfHG3uhxKW6pP8WmJWhSAHmffC0Xa66UtDya2', NULL, '2023-07-29 06:09:34', '2023-07-29 06:09:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
