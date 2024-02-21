-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 05, 2023 lúc 12:12 PM
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
-- Cơ sở dữ liệu: `vuong_anh-project-itplus`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `img`, `description`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'HP', 'storage/brand/HP6591691461449.png', 'Thương hiệu laptop', '2023-08-07 19:24:09', '2023-08-07 19:24:09', 'hp'),
(2, 'Asus', 'storage/brand/Asus8731691461566.png', 'Thương hiệu laptop', '2023-08-07 19:26:06', '2023-08-07 19:26:06', 'asus'),
(3, 'itel', 'storage/brand/itel6921691461630.png', 'Thương hiệu laptop', '2023-08-07 19:27:10', '2023-08-07 19:27:10', 'itel'),
(4, 'MacBook', 'storage/brand/MacBook6921691461740.png', 'Thương hiệu laptop', '2023-08-07 19:29:01', '2023-08-07 19:29:01', 'macbook'),
(5, 'MSI', 'storage/brand/MSI1651691461780.png', 'Thương hiệu laptop', '2023-08-07 19:29:41', '2023-08-07 19:29:41', 'msi'),
(6, 'DELL', 'storage/brand/DELL11691461836.png', 'Thương hiệu laptop', '2023-08-07 19:30:36', '2023-08-07 19:30:36', 'dell'),
(7, 'Acer', 'storage/brand/Acer2001691461885.png', 'Thương hiệu laptop', '2023-08-07 19:31:25', '2023-08-07 19:31:25', 'acer'),
(8, 'Lenovo', 'storage/brand/Lenovo7341691461973.png', 'Thương hiệu laptop', '2023-08-07 19:32:53', '2023-08-07 19:32:53', 'lenovo');

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
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `username`, `name`, `phone`, `address`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'vuonganhzx', 'Le Dang Vuong Anh', 966853926, NULL, 'test@gmail.com', '$2y$10$ceyj80j7VmUtRg.c8ex38ufOiS2a0KiFiZB.gcPH61XSaEVjKSRZu', '2023-08-09 07:17:49', '2023-08-09 07:17:49'),
(2, 'test', 'Iphone', 966853926, NULL, 'test123@gmail.com', '$2y$10$zbUJK2bFRPIiMgf8xvsgp.c0k56Qd5.7PnCyBgYhmaKwmkwbfcK9G', '2023-08-09 07:32:46', '2023-08-09 07:32:46'),
(3, 'test321', 'test321', 12345678, NULL, 'test321@gmail.com', '$2y$10$9AWzj1m3TCrWuHUUq39UWOka9WUt0G7ej58peAvfTnNey0Tzq43xi', '2023-08-16 04:27:00', '2023-08-16 04:27:00'),
(4, 'tuongvyzx', 'Nguyen Tuong Vy', 1234567890, NULL, 'tuongvy@gmail.com', '$2y$10$tzywoGeQE2YGiq/xznegp.8Ge4oZ6ihSQYkhommXYB3U1XoSbBqpG', '2023-08-30 08:07:30', '2023-08-30 08:07:30');

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
(23, '2023_08_06_024624_add_code_to_products_table', 6),
(24, '2023_08_08_020132_create_brands_table', 7),
(25, '2023_08_08_020715_add_slug_to_brands_table', 8),
(26, '2023_08_08_024615_add_brand_id_to_products_table', 9),
(27, '2023_08_08_024907_add_brand_id_to_products_table', 10),
(28, '2023_08_08_235941_add_more_column_to_products_table', 11),
(29, '2023_08_09_000557_add_more_columns_to_products_table', 12),
(30, '2023_08_09_123715_create_customers_table', 13),
(31, '2023_08_16_122240_create_orders_table', 14),
(32, '2023_08_23_112259_create_order_items_table', 15),
(33, '2023_08_28_104710_add_create_date_to_orders_table', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `payment_method` tinyint(4) NOT NULL,
  `total_money` int(11) NOT NULL,
  `total_product` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `code`, `customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `payment_method`, `total_money`, `total_product`, `status`, `created_at`, `updated_at`, `create_date`) VALUES
(8, 'DH921721', 1, 'Le Dang Vuong Anh', '966853926', 'test@gmail.com', 'ha noi', 1, 65070000, '3', 2, NULL, '2023-08-30 07:45:12', '2023-08-28 17:48:33'),
(10, 'DH940954', 1, 'nguyen tuong vy', '966853926', 'test@gmail.com', 'Campuchia', 1, 122760000, '4', 3, NULL, '2023-08-28 18:34:54', '2023-08-28 17:48:33'),
(11, 'DH327297', 1, 'Trần Thảo Linh', '966853926', 'test@gmail.com', 'Quang Ninh', 1, 45970000, '3', 2, NULL, '2023-08-30 07:17:59', '2023-08-28 17:48:33'),
(12, 'DH955681', 1, 'John', '966853926', 'test@gmail.com', 'California', 1, 38980000, '2', 2, NULL, '2023-08-28 04:05:58', '2023-08-28 17:48:33'),
(13, 'DH532486', 1, 'Nam khanh', '966853926', 'test@gmail.com', 'ngoc thuy', 1, 29990000, '1', 2, NULL, '2023-08-28 04:02:03', '2023-08-28 17:48:33'),
(14, 'DH725575', 1, 'nguyen Tien Dat', '966853926', 'test@gmail.com', '26 Tran Hung Dao', 1, 78770000, '3', 2, NULL, '2023-08-30 07:45:01', '2023-08-30 21:41:42'),
(15, 'DH787993', 1, 'Hoang Hai Nguyen', '1234567', 'hihi@gmail.com', '45 Nguyen Van Troi', 1, 53370000, '3', 3, NULL, '2023-08-30 07:44:38', '2023-08-30 21:43:32'),
(16, 'DH030624', 4, 'Nguyen Tuong Vy', '1234567890', 'tuongvy@gmail.com', '45 Dong Da', 1, 85770000, '3', 3, NULL, '2023-08-30 19:01:54', '2023-08-30 22:08:38'),
(17, 'DH157203', 4, 'Nguyen Tuong Vy', '1234567890', 'tuongvy@gmail.com', 'duong Nguyen Trai', 1, 46970000, '3', 2, NULL, '2023-08-30 19:03:24', '2023-08-31 08:57:16'),
(18, 'DH347369', 4, 'Nguyen Tuong Vy', '1234567890', 'tuongvy@gmail.com', 'Quang Ninh', 1, 22990000, '1', 2, NULL, '2023-08-30 19:03:13', '2023-08-31 09:02:56'),
(19, 'DH539751', 4, 'Nguyen Tuong Vy', '1234567890', 'tuongvy@gmail.com', '26 Tran Hung Dao', 1, 65580000, '2', 2, NULL, '2023-08-30 19:05:26', '2023-08-31 09:03:55'),
(20, 'DH250899', 4, 'Nguyen Tuong Vy', '1234567890', 'tuongvy@gmail.com', '26 Tran Hung Dao', 1, 22990000, '1', 3, NULL, '2023-09-01 03:51:14', '2023-09-01 17:35:49'),
(21, 'DH845441', 4, 'Nguyen Tuong Vy', '1234567890', 'tuongvy@gmail.com', 'tp ho chi minh', 1, 59980000, '2', 2, NULL, '2023-09-01 03:54:07', '2023-09-01 17:51:56'),
(22, 'DH845929', 1, 'Le Dang Vuong Anh', '966853926', 'test@gmail.com', 'Quang Ninh', 1, 7690000, '1', 0, NULL, NULL, '2023-09-01 18:34:36'),
(23, 'DH814909', 1, 'Le Dang Vuong Anh', '966853926', 'test@gmail.com', 'tp ho chi minh', 1, 88970000, '3', 0, NULL, NULL, '2023-09-04 11:38:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 8, 16, 'Apple MacBook Air 13 inch M1 2020', 'storage/product/MSI Gaming GF639051690980787.jpg', 18990000, 2, '2023-08-26 07:23:44', '2023-08-26 07:23:44'),
(2, 8, 19, 'Apple MacBook Air 13 inch M2 2022', 'storage/product/MSI Gaming GF634771690980928.jpg', 27090000, 1, '2023-08-26 07:23:44', '2023-08-26 07:23:44'),
(3, 10, 26, 'Laptop Asus Zenbook 14 Flip OLED', 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 29990000, 3, '2023-08-26 07:38:24', '2023-08-26 07:38:24'),
(4, 10, 25, 'Laptop Lenovo Yoga Duet 7', 'storage/product/Lenovo Yoga Duet 7 13ITL64931691071620.jpg', 32790000, 1, '2023-08-26 07:38:24', '2023-08-26 07:38:24'),
(5, 11, 15, 'Laptop MSI Gaming GF63 Thin 11SC', 'storage/product/MSI Gaming GF635301690980565.jpg', 14990000, 2, '2023-08-26 07:40:15', '2023-08-26 07:40:15'),
(6, 11, 20, 'Laptop Acer Aspire 7 Gaming A715', 'storage/product/MSI Gaming GF634231690981812.jpg', 15990000, 1, '2023-08-26 07:40:15', '2023-08-26 07:40:15'),
(7, 12, 20, 'Laptop Acer Aspire 7 Gaming A715', 'storage/product/MSI Gaming GF634231690981812.jpg', 15990000, 1, '2023-08-26 08:02:13', '2023-08-26 08:02:13'),
(8, 12, 24, 'Asus Vivobook Pro 15 OLED', 'storage/product/Asus Vivobook Pro 15 OLED K6502Z9031691071397.jpg', 22990000, 1, '2023-08-26 08:02:13', '2023-08-26 08:02:13'),
(9, 13, 26, 'Laptop Asus Zenbook 14 Flip OLED', 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 29990000, 1, '2023-08-28 03:36:10', '2023-08-28 03:36:10'),
(10, 14, 25, 'Laptop Lenovo Yoga Duet 7', 'storage/product/Lenovo Yoga Duet 7 13ITL64931691071620.jpg', 32790000, 1, '2023-08-30 07:41:43', '2023-08-30 07:41:43'),
(11, 14, 20, 'Laptop Acer Aspire 7 Gaming A715', 'storage/product/MSI Gaming GF634231690981812.jpg', 15990000, 1, '2023-08-30 07:41:43', '2023-08-30 07:41:43'),
(12, 14, 26, 'Laptop Asus Zenbook 14 Flip OLED', 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 29990000, 1, '2023-08-30 07:41:43', '2023-08-30 07:41:43'),
(13, 15, 22, 'Laptop Acer Aspire 3 A315 57', 'storage/product/MSI Gaming GF637081690981977.jpg', 7690000, 2, '2023-08-30 07:43:32', '2023-08-30 07:43:32'),
(14, 15, 21, 'MacBook Air 15 inch M2 2023', 'storage/product/MSI Gaming GF638521690981909.jpg', 37990000, 1, '2023-08-30 07:43:32', '2023-08-30 07:43:32'),
(15, 16, 26, 'Laptop Asus Zenbook 14 Flip OLED', 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 29990000, 1, '2023-08-30 08:08:38', '2023-08-30 08:08:38'),
(16, 16, 25, 'Laptop Lenovo Yoga Duet 7', 'storage/product/Lenovo Yoga Duet 7 13ITL64931691071620.jpg', 32790000, 1, '2023-08-30 08:08:38', '2023-08-30 08:08:38'),
(17, 16, 24, 'Asus Vivobook Pro 15 OLED', 'storage/product/Asus Vivobook Pro 15 OLED K6502Z9031691071397.jpg', 22990000, 1, '2023-08-30 08:08:38', '2023-08-30 08:08:38'),
(18, 17, 24, 'Asus Vivobook Pro 15 OLED', 'storage/product/Asus Vivobook Pro 15 OLED K6502Z9031691071397.jpg', 22990000, 1, '2023-08-30 18:57:16', '2023-08-30 18:57:16'),
(19, 17, 17, 'MSI Modern 14 C7M R5', 'storage/product/MSI Gaming GF633971690980855.jpg', 11990000, 2, '2023-08-30 18:57:16', '2023-08-30 18:57:16'),
(20, 18, 24, 'Asus Vivobook Pro 15 OLED', 'storage/product/Asus Vivobook Pro 15 OLED K6502Z9031691071397.jpg', 22990000, 1, '2023-08-30 19:02:56', '2023-08-30 19:02:56'),
(21, 19, 25, 'Laptop Lenovo Yoga Duet 7', 'storage/product/Lenovo Yoga Duet 7 13ITL64931691071620.jpg', 32790000, 2, '2023-08-30 19:03:55', '2023-08-30 19:03:55'),
(22, 20, 24, 'Asus Vivobook Pro 15 OLED', 'storage/product/Asus Vivobook Pro 15 OLED K6502Z9031691071397.jpg', 22990000, 1, '2023-09-01 03:35:49', '2023-09-01 03:35:49'),
(23, 21, 26, 'Laptop Asus Zenbook 14 Flip OLED', 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 29990000, 2, '2023-09-01 03:51:56', '2023-09-01 03:51:56'),
(24, 22, 22, 'Laptop Acer Aspire 3 A315 57', 'storage/product/MSI Gaming GF637081690981977.jpg', 7690000, 1, '2023-09-01 04:34:36', '2023-09-01 04:34:36'),
(25, 23, 26, 'Laptop Asus Zenbook 14 Flip OLED', 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 29990000, 1, '2023-09-03 21:38:30', '2023-09-03 21:38:30'),
(26, 23, 21, 'MacBook Air 15 inch M2 2023', 'storage/product/MSI Gaming GF638521690981909.jpg', 37990000, 1, '2023-09-03 21:38:30', '2023-09-03 21:38:30'),
(27, 23, 18, 'Asus TUF Gaming F15', 'storage/product/MSI Gaming GF632261690980899.jpg', 20990000, 1, '2023-09-03 21:38:30', '2023-09-03 21:38:30');

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
  `category_id` bigint(255) NOT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sold_quantity` int(11) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `quantity`, `sold_quantity`, `slug`, `price`, `img`, `code`, `content`, `description`, `created_at`, `updated_at`) VALUES
(15, 'Laptop MSI Gaming GF63 Thin 11SC', 17, 5, NULL, NULL, 'laptop-msi-gaming-gf63-thin-11sc', 14990000, 'storage/product/MSI Gaming GF635301690980565.jpg', '664VN', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', '2023-08-02 05:49:25', '2023-08-30 07:19:21'),
(16, 'Apple MacBook Air 13 inch M1 2020', 16, 4, 3, NULL, 'apple-macbook-air-13-inch-m1-2020', 18990000, 'storage/product/MSI Gaming GF639051690980787.jpg', 'MGN63SA/A', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', '2023-08-02 05:53:07', '2023-08-28 18:51:01'),
(17, 'MSI Modern 14 C7M R5', 14, 5, 3, NULL, 'msi-modern-14-c7m-r5', 11990000, 'storage/product/MSI Gaming GF633971690980855.jpg', '083VN', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', '2023-08-02 05:54:15', '2023-08-30 19:02:14'),
(18, 'Asus TUF Gaming F15', 17, 2, 5, NULL, 'asus-tuf-gaming-f15', 20990000, 'storage/product/MSI Gaming GF632261690980899.jpg', 'HN074W', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', '2023-08-02 05:54:59', '2023-08-08 17:41:41'),
(19, 'Apple MacBook Air 13 inch M2 2022', 16, 4, 4, NULL, 'apple-macbook-air-13-inch-m2-2022', 27090000, 'storage/product/MSI Gaming GF634771690980928.jpg', 'MLY13SA/A', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', '2023-08-02 05:55:28', '2023-08-28 18:51:01'),
(20, 'Laptop Acer Aspire 7 Gaming A715', 17, 7, 4, NULL, 'laptop-acer-aspire-7-gaming-a715', 15990000, 'storage/product/MSI Gaming GF634231690981812.jpg', 'NH.QMESV.002', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', '2023-08-02 06:10:12', '2023-08-30 07:44:57'),
(21, 'MacBook Air 15 inch M2 2023', 16, 4, 4, NULL, 'macbook-air-15-inch-m2-2023', 37990000, 'storage/product/MSI Gaming GF638521690981909.jpg', 'MQKU3SA/A', 'MacBook Air 15 inch M2 2023 đã có phiên bản cải tiến vừa được nhà Apple cho ra mắt, thêm không gian cho những điều bạn yêu với màn hình Liquid Retina 15 inch ấn tượng. Với người dùng yêu thích hiệu năng \"nhanh như chớp\" trong một thiết kế siêu gọn nhẹ của dòng Air thì đây chắc chắn là một sản phẩm bạn không nên bỏ qua.', 'MacBook Air 15 inch M2 2023 đã có phiên bản cải tiến vừa được nhà Apple cho ra mắt, thêm không gian cho những điều bạn yêu với màn hình Liquid Retina 15 inch ấn tượng. Với người dùng yêu thích hiệu năng \"nhanh như chớp\" trong một thiết kế siêu gọn nhẹ của dòng Air thì đây chắc chắn là một sản phẩm bạn không nên bỏ qua.', '2023-08-02 06:11:49', '2023-08-30 07:44:23'),
(22, 'Laptop Acer Aspire 3 A315 57', 14, 7, 3, NULL, 'laptop-acer-aspire-3-a315-57', 7690000, 'storage/product/MSI Gaming GF637081690981977.jpg', 'NX.KAGSV.001', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', 'Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà.', '2023-08-02 06:12:57', '2023-08-30 07:44:23'),
(24, 'Asus Vivobook Pro 15 OLED', 9, 2, 3, NULL, 'asus-vivobook-pro-15-oled', 22990000, 'storage/product/Asus Vivobook Pro 15 OLED K6502Z9031691071397.jpg', 'MA025W', 'Màn hình: 15.6\", 2K, 120Hz  CPU: i5, 12450H, 2GHz  Card: RTX 3050 4GB  Pin: 3-cell Li-ion, 70 Wh  Khối lượng: 1.8 kg', 'Một tân binh thuộc phân khúc laptop cao cấp - sang trọng được nhà Asus cho ra mắt để phục vụ tối đa mọi tác vụ từ cơ bản đến nâng cao cho dân văn phòng hay doanh nhân khi sở hữu những thông số mạnh mẽ từ cấu hình, màn hình,... chính là chiếc laptop Asus Vivobook Pro 15 K6502Z i5 12450H (MA025W).', '2023-08-03 07:03:17', '2023-09-01 03:44:36'),
(25, 'Laptop Lenovo Yoga Duet 7', 8, 8, 1, NULL, 'laptop-lenovo-yoga-duet-7', 32790000, 'storage/product/Lenovo Yoga Duet 7 13ITL64931691071620.jpg', '82MA003UVN', 'Màn hình: 13\", 2K, Cảm ứng  CPU: i7, 1165G7, 2.8GHz  Card: Intel Iris Xe  Pin: 41 Wh  Khối lượng: 1.168 kg', 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 (82MA009PVN) độc đáo với thiết kế linh hoạt, cho phép bạn sử dụng máy như một chiếc laptop làm việc đầy năng suất hay một chiếc tablet giúp thỏa mãn mọi nhu cầu giải trí.', '2023-08-03 07:07:00', '2023-08-30 07:44:57'),
(26, 'Laptop Asus Zenbook 14 Flip OLED', 7, 2, 1, NULL, 'laptop-asus-zenbook-14-flip-oled', 29990000, 'storage/product/Laptop Asus Zenbook 14 Flip OLED UP3404VA5861691071799.jpg', 'KN039W', 'Màn hình: 14\", 2K, 90Hz  CPU: i7, 1360P, 2.2GHz  Card: Intel Iris Xe  Pin: 4-cell Li-ion, 75 Wh  Khối lượng: 1.5 kg', 'Laptop Asus Zenbook 14 Flip OLED UP3404VA i7 1360P (KN039W) là một chiếc laptop thực sự đáng để sở hữu với hiệu năng mạnh mẽ, màn hình tuyệt đẹp. Chắc chắn sẽ làm hài lòng những khách hàng với đòi hỏi cao như doanh nhân, nhà sáng tạo hình ảnh chuyên nghiệp.', '2023-08-03 07:09:59', '2023-09-01 03:52:44');

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
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
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
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
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
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
