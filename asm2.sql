-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2024 at 03:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden_show` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `order`, `hidden_show`, `created_at`, `updated_at`) VALUES
(0, 'Tất cả sản phẩm', '0', '1', NULL, NULL),
(1, 'Phòng Khách', '1', '1', NULL, NULL),
(2, 'Phòng Ngủ', '2', '1', NULL, NULL),
(3, 'Phòng Ăn', '3', '1', NULL, NULL),
(4, 'Phòng Làm Việc', '4', '1', NULL, NULL),
(5, 'Tủ Bếp', '5', '1', NULL, NULL),
(6, 'Combo', '6', '1', NULL, NULL),
(10, 'Phòng chống', '11', '1', '2024-06-12 00:50:46', '2024-06-12 00:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_06_163632_create_table_categories', 1),
(5, '2024_06_06_163708_create_table_products', 1),
(6, '2024_06_07_090234_create_personal_access_tokens_table', 1),
(7, '2024_06_09_175303_add_table_user', 1),
(8, '2024_06_11_161448_create_table_order', 2),
(9, '2024_06_11_204938_create_table_order_detail', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `user_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','prepare','shiping','success','cancle') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `totalPrice` int NOT NULL DEFAULT '0',
  `totalQuantity` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_fullname`, `user_email`, `user_phone`, `user_address`, `status`, `totalPrice`, `totalQuantity`, `created_at`, `updated_at`) VALUES
(7, 1, 'Linh', 'voduclinh2204@gmail.com', '343840770', 'Công viên phần mềm Quang Trung', 'cancle', 29040000, 6, '2024-03-05 15:38:23', '2024-06-11 15:38:23'),
(8, 1, 'Linh', 'voduclinh2204@gmail.com', '343840770', 'Công viên phần mềm Quang Trung', 'success', 26360000, 4, '2024-06-03 15:38:39', '2024-06-11 15:38:39'),
(9, 1, 'Linh', 'voduclinh2204@gmail.com', '343840770', 'Công viên phần mềm Quang Trung', 'shiping', 19330000, 7, '2024-04-22 15:38:53', '2024-06-11 15:38:53'),
(10, 1, 'Linh', 'voduclinh2204@gmail.com', '343840770', 'Công viên phần mềm Quang Trung', 'success', 8040000, 6, '2024-05-13 15:39:09', '2024-06-11 15:39:09'),
(11, 1, 'Linh', 'voduclinh2204@gmail.com', '343840770', 'Công viên phần mềm Quang Trung', 'pending', 7650000, 5, '2024-06-11 15:57:38', '2024-06-11 15:57:38'),
(12, 2, 'Admin', 'admin123@gmail.com', '123123123', 'Quận Gò Vấp', 'pending', 46910000, 9, '2024-06-12 00:33:02', '2024-06-12 00:33:02'),
(13, 1, 'Linh', 'voduclinh2204@gmail.com', '343840770', 'Công viên phần mềm Quang Trung', 'pending', 2450000, 5, '2024-06-12 00:37:16', '2024-06-12 00:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(2, 7, 3, 3, 8190000, '2024-06-11 15:38:23', '2024-06-11 15:38:23'),
(3, 7, 4, 3, 1490000, '2024-06-11 15:38:23', '2024-06-11 15:38:23'),
(4, 8, 8, 2, 1290000, '2024-06-11 15:38:39', '2024-06-11 15:38:39'),
(5, 8, 9, 2, 11890000, '2024-06-11 15:38:39', '2024-06-11 15:38:39'),
(6, 9, 5, 4, 3790000, '2024-06-11 15:38:53', '2024-06-11 15:38:53'),
(7, 9, 6, 3, 1390000, '2024-06-11 15:38:53', '2024-06-11 15:38:53'),
(8, 10, 1, 3, 490000, '2024-06-11 15:39:09', '2024-06-11 15:39:09'),
(9, 10, 2, 3, 2190000, '2024-06-11 15:39:09', '2024-06-11 15:39:09'),
(10, 11, 7, 3, 1690000, '2024-06-11 15:57:38', '2024-06-11 15:57:38'),
(11, 11, 8, 2, 1290000, '2024-06-11 15:57:38', '2024-06-11 15:57:38'),
(12, 12, 3, 5, 8190000, '2024-06-12 00:33:02', '2024-06-12 00:33:02'),
(13, 12, 4, 4, 1490000, '2024-06-12 00:33:02', '2024-06-12 00:33:02'),
(14, 13, 1, 5, 490000, '2024-06-12 00:37:16', '2024-06-12 00:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `sale_price` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instock` int NOT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `rating` double NOT NULL DEFAULT '5',
  `hidden/show` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `sale_price`, `description`, `short_description`, `image`, `instock`, `hot`, `rating`, `hidden/show`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Bàn Trà Gỗ Cao Su', 'Bàn Trà Gỗ Cao Su', 649000, 490000, 'CHI TIẾT VẬT LIỆU Gỗ công nghiệp Bàn Sofa Gỗ Công Nghiệp MILAN 602 được làm từ chất liệu gỗ công nghiệp (PB, MDF) đạt tiêu chuẩn CARB-P2, hoàn toàn an toàn cho sức khỏe con người và được hội đồng quản lý rừng cấp chứng chỉ FSC về bảo tồn và phát triển rừng. Gỗ cao su tự nhiên Bàn Sofa Gỗ Cao Su Tự Nhiên MILAN 602 được làm từ chất liệu gỗ tự nhiên mang đến khả năng chịu tải và tuổi thọ cao cho sản phẩm. ĐẶC ĐIỂM NỔI BẬT Mẫu bàn thuộc bộ sưu tập nội thất MILAN được thiết kế từ nguồn cảm hứng kinh đô thời trang thế giới – nước Ý, mang lại nét đột phá với phong cách hiện đại và tinh tế được thể hiện từng đường nét. Tối ưu diện tích phòng khách Mặt bàn sofa có đường kính 60cm, nhỏ gọn nhưng vẫn đảm bảo công năng sử dụng, dễ dàng bài trí thêm bộ bình ly nước, tạp chí. Mặt bàn trà có vân gỗ tự nhiên đặc sắc Chiếc bàn sofa được phủ veneer gỗ sồi một cách cẩn thận mang đến những đường nét vân gỗ tinh tế cũng như vẻ ngoài hiện đại vô cùng bắt mắt. Kết cấu chân bàn chắc chắn Chân bàn gỗ cao su tự nhiên được bo tròn các cạnh mang đến sự thiết kế mềm mại, uyển chuyển và có khả năng chịu lực tốt.KHÔNG GIAN SỐNG Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su MOHO MILAN 602 có thiết kế bo tròn truyền thống, mặt bàn rộng rãi thích hợp để nhiều món đồ trang trí. Sản phẩm nổi bật với vân gỗ tự nhiên bắt mắt, thích hợp cho bất kỳ không gian nào trong gia đình từ phòng khách hiện đại, cho đến phòng ngủ ấm cúng, hay một chiếc ban công thơ mộng.', 'Kích thước: Đường kính rộng 60cm x Cao 42cm Chất liệu: - Mặt bàn: Gỗ công nghiệp MDF chuẩn CARB-P2, Sơn phủ UV - Chân bàn: Gỗ cao su tự nhiên', 'product-1.webp', 80, 0, 4.9, '1', 1, NULL, '2024-06-11 20:21:11'),
(2, 'Tủ Kệ Tivi Gỗ', 'Tủ Kệ Tivi Gỗ', 3490000, 2190000, 'CHI TIẾT VẬT LIỆU Gỗ cao su tự nhiên Sử dụng chất liệu gỗ cao su giúp sản phẩm có khả năng chịu lực tốt và độ bền cao. Gỗ công nghiệp sử dụng 100% chất liệu gỗ công nghiệp (PB, MDF) đạt chuẩn CARB-P2 an toàn tuyệt đối cho người sức khỏe người dùng và đạt chứng nhận FSC bảo vệ và phát triển rừng bền vững. ĐẶC ĐIỂM NỔI BẬT Bộ sưu tập nội thất OSLO lấy cảm hứng từ những nhịp sống hiện đại, hối hả và nhộn nhịp của thành phố OSLO của Na Uy. Đặc trưng của các sản phẩm từ bộ sưu tập nội thất này là những đường nét bo tròn đến hoàn hảo, tăng thêm sự thanh lịch. Đặc biệt chi tiết hình tròn được tận dụng một cách độc đáo và sáng tạo trong từng thiết kế, mang đến làn gió hiện đại cho mọi không gian. Tủ tivi có kiểu dáng hiện đại, tối giản Với các đường nét thiết kế tinh tế, tủ kệ tivi hiện đại phù hợp với nhiều phong cách nội thất, mang đến sự hài hoà cho không gian nội thất phòng khách gia đình bạn.Bề mặt tủ có vân gỗ tự nhiên Bề mặt tủ kệ được sử dụng công nghệ in UV vân gỗ tạo ra hình dáng đường vân gỗ sồi vô cùng tự nhiên khi phun trực tiếp lên bề mặt mang lại sự bền bỉ theo thời gian, phù hợp mọi không gian sống. Màu sắc tủ kệ hài hòa, hiện đại, hoàn toàn tự nhiên khó tìm thấy ở những sản phẩm nội thất gỗ khác trên thị trường.Không gian lưu trữ lớn Ngăn kéo tủ có kích thước rộng, kéo mở toàn phần giúp tăng không gian lưu trữ các vật dụng cần thiết trong gia đình.', 'Kích thước: Dài 140/160/180 cm x Rộng 40 cm x Cao 60 cm Chất liệu: - Thân tủ: Gỗ công nghiệp PB chuẩn CARB-P2 (*), Sơn phủ UV vân gỗ sồi tự nhiên - Chân tủ: Gỗ cao su tự nhiên', 'product-2.webp', 100, 0, 4.7, '1', 1, NULL, NULL),
(3, 'Giường Ngủ Gỗ Cao Su', 'Giường Ngủ Gỗ Cao Su', 10990000, 8190000, 'CHI TIẾT VẬT LIỆU Gỗ cao su tự nhiên Sử dụng chất liệu gỗ cao su giúp giuờng ngủ có khả năng chịu lực tốt và độ bền cao. Gỗ công nghiệp Plywood Tấm phảm sử dụng chất liệu Plywood 12mm theo tiêu chuẩn CARBP2 vừa thân thiện với môi trường, đảm bảo sức khỏe và đặc biệt độ chịu lực tại 1 khu vực với diện tích 400 x 488mm lên tới 175kg khi dùng nệm trên 15cm.ĐẶC ĐIỂM NỔI BẬT Bộ sưu tập HOBRO lấy cảm hứng từ những ngôi nhà VIKING tại HOBRO kết hợp giữa cổ điển và hiện đại mang đến những cảm giác vô cùng thú vị chắc chắn sẽ khiến căn phòng của bạn trở nên tuyệt vời hơn bao giờ hết  Kiểu dáng có thiết kế độc đáo, mới lạ Những đường veneer đan xéo được các thợ thủ công lành nghề khéo léo ghép 1 cách tỉ mỉ và chỉnh chu đã tạo ra điểm nhấn vô cùng độc đáo ở phần đầu và thân giường HOBRO. Nghệ thuật hình học: Sử dụng veneer tràm đặc biệt với kỹ thuật dán cao cấp tạo ra hiệu ứng 3D hình học đối xứng nhau.       Hiệu ứng màu sắc 3D: Với các đường veneer đan xen và đối xứng nhau đã tạo nên một sắc màu tổng thể có thể thay đổi tùy vào mỗi góc nhìn khác nhau. Khi nhìn chính diện sẽ thấy sự đối lập hoàn toàn giữa 2 màu veneer nhưng nhìn chéo sẽ thấy màu sắc giữa 2 mảng đối xứng gần dần dần tương đồng.  Giường ngủ có đa dạng kích thước Sản phẩm được phân phối với 2 kích thước phổ biến gồm: 1m6 và 1m8 rất dễ dàng để lựa chọn và phù hợp với những nội thất phòng ngủ khác, tô điểm không gian nhà bạn.Giường sở hữu kết cấu chắc chắn Khung giường được lắp khít nối với nhau bằng những thanh vạt bản to chắc chắn đặc biệt còn được bổ sung thêm khung và chân sắt ở chính giữa tăng độ chịu lực lên gấp 3 lần mà vẫn đảm bảo được tính thẩm mỹ của giường.', 'Kích thước phủ bì - Dài 210cm x Rộng 171/ 191 cm - Cao đến đầu giường 90 cm - Gầm giường cao 16cm Chất liệu: - Thân giường: Gỗ cao su tự nhiên - Tấm phản: Gỗ plywood chuẩn CARB-P', 'product-3.webp', 100, 0, 4.6, '1', 2, NULL, NULL),
(4, 'Tủ Đầu Giường Gỗ', 'Tủ Đầu Giường Gỗ', 1590000, 1490000, 'CHI TIẾT VẬT LIỆU Gỗ công nghiệp Sản phẩm sử dụng chất liệu gỗ công nghiệp (PB, MDF) đạt chuẩn CARB-P2 an toàn tuyệt đối cho người sức khỏe người dùng và đạt chứng nhận FSC bảo vệ và phát triển rừng. ĐẶC ĐIỂM NỔI BẬT VIENNA là niềm ao ước đặt chân đến của nhiều người bởi nó là thủ đô nổi tiếng bậc nhất về sự lộng lẫy của các tòa lâu đài nguy nga, tráng lệ. Đây là nguồn cảm hứng cho bộ sưu tập nội thất VIENNA, nhờ vậy mà các sản phẩm thuộc bộ sưu tập này đều mang nét hiện đại của thủ đô nước Áo. Kiểu dáng tối giản, hiện đại Với màu sắc và lối thiết kế đơn giản dễ kết hợp các mẫu nội thất khác.Tối ưu hóa không gian lưu trữ Với 2 hộc tủ rộng rãi giúp lưu trữ đồ tạo sự ngăn nắp. Ray trượt IVANs  Tăng tuổi thọ sản phẩm lên đến 80,000 lần đóng/mở, ray trượt chống rỉ sét, ray trượt êm ái, dễ dàng đóng mở hộc tủ.Kiểu dáng hiện đại, không tay nắm Ngăn tủ không tay nắm hiện đại, sử dụng an toàn khi có nhà có trẻ nhỏ.Trang bị dây đai bảo vệ nội thất Anti Tip Kit Giúp tủ không bị lật đổ về phía trước gây nguy hiểm cho người dùng, an toàn cho trẻ nhỏ.Bề mặt tủ sơn phủ UV Giúp bề mặt sản phẩm nhẵn, nhịn, hạn chế trầy xước. Chân nhựa giúp nâng đỡ sản phẩm, giảm trầy xước Bảo vệ sàn nhà giảm trầy xước và dễ dàng khi di chuyển sản phẩm. Có 02 màu sắc lựa chọnMàu gỗ tự nhiên và màu nâu', 'Kích thước: Dài 48cm x Rộng 40cm x Cao 50cm Chất liệu: Gỗ công nghiệp PB chuẩn CARB-P2, Sơn phủ UV', 'product-4.webp', 100, 1, 5, '1', 2, NULL, NULL),
(5, 'Bàn Ăn Gỗ Cao Su Tự Nhiên', 'Bàn Ăn Gỗ Cao Su Tự Nhiên', 4590000, 3790000, 'CHI TIẾT VẬT LIỆU Gỗ cao su tự nhiên Chất liệu gỗ cao su tự nhiên đảm bảo độ chắc chắn cao, chống công vênh, mối mọt. Màu gỗ bắt mắt và tom gỗ đẹp tự nhiên.ĐẶC ĐIỂM NỔI BẬT Các thiết kế trong bộ sưu tập nội thất VLINE mang trong mình nét đẹp đặc trưng của hồn Việt cùng vẻ đẹp năng động của thời đại. V” là viết tắt của từ “Việt” trong “Việt Nam”. “LINE” là các đường nét mang xu hướng hiện đại, phóng khoáng của ngày nay. Bàn ăn có 2 kích thước 90cm và 160cm Sự đa dạng trong kích thước bàn ăn mang lại nhiều lựa chọn cho khách hàng, phù hợp nhiều phong cách nội thất phòng ăn và diện tích không gian gia đình bạn. Mặt bàn sơn phủ NC và veneer sồi Chất gỗ cao giúp cho bề mặt bàn ăn trở nên vô cùng mịn màng và nhẵn bóng, màu sắc tươi sáng đẹp như tự nhiên. Cạnh bàn được thiết kế bo tròn Thiết kế tối ưu sự an toàn của người dùng, hạn chế tổn thương nếu xảy ra va đập, nhất là đối với những gia đình có trẻ nhỏ hiếu động. Chân bàn độc đáo Thiết kế chân chữ X độc đáo của bàn ăn cơm VLINE tạo nên sự liên kết cứng cáp, tăng khả năng chịu lực, đảm bảo sự chắc chắn cho bàn ăn. Tránh tình trạng rung lắc mỗi khi sử dụng. Chiều cao bàn thể hiện được thói quen sử dụng của người Việt Chiều cao bàn VLINE là 65cm so với bàn ăn bình thường (75cm). Kích thước bàn ăn này rất dễ dàng bắt gặp tại cái ngôi nhà hay quán xá tại Việt Nam vì nó mang đến sự gần gũi và thuận tiện khi dùng bữa và làm việc.Kết cấu chắc chắn Chân bàn từ gỗ cao su tự nhiên, đảm bảo kết cấu chắc chắn và khả năng chịu lực tốt. ', 'Kích thước: Dài 160cm x Rộng 75cm x Cao 65cm hất liệu: Gỗ cao su tự nhiên', 'product-5.jpg', 100, 0, 4.8, '1', 3, NULL, NULL),
(6, 'Ghế Ăn Gỗ Cao Su Tự Nhiên', 'Ghế Ăn Gỗ Cao Su Tự Nhiên', 1990000, 1390000, 'CHI TIẾT VẬT LIỆU Gỗ cao su Sử dụng chất liệu gỗ cao su giúp sản phẩm có khả năng chịu lực và độ bền cao. Vải bọc bọc sợi tổng hợp  Vải bọc sợi tổng hợp có khả năng chống thấm nước và dầu ĐẶC ĐIỂM NỔI BẬT Đề cao tính tiện nghi và tối giản trong không gian sống, MOHO mang đến thiết kế ghế ăn gia đình VERONA hiện đại và đẹp đẽ, món nội thất này màu sắc trang nhã kết hợp cùng kết cấu cực kỳ chắc chắn với chất liệu gỗ cao su tự nhiên. Góc nghiêng hoàn hảo Lưng tựa ghế ăn được thiết kế cong 1 góc 15 độ, nâng đỡ xương sống cơ thể, tạo sự mềm mại và thoải mái khi ngồi. Đệm ghế uốn cong độc đáo Ghế ăn gỗ gia đình có mặt ghế được thiết kế tối ưu bằng đường uốn cong tạo cảm giác dễ chịu, nâng đỡ xương chậu khi ngồi. Vải bọc sợi tổng hợp Chất liệu vải vải bọc sợi tổng hợp trên đệm ngồi ghế có khả năng chống thấm nước và dầu', 'Kích thước: Dài 46cm x Rộng 54cm x Cao 82cm Chất liệu: - Gỗ cao su tự nhiên - Vải bọc sợi tổng hợp có khả năng chống thấm nước và dầu Chống thấm, cong vênh, trầy xước, mối mọt', 'product-6.jpg', 100, 0, 4.6, '1', 3, NULL, NULL),
(7, 'Bàn Làm Việc Gỗ', 'Bàn Làm Việc Gỗ', 2990000, 1690000, 'CHI TIẾT VẬT LIỆU  Gỗ công nghiệp  Bàn làm việc sử dụng chất liệu gỗ công nghiệp (PB, MDF) đạt chuẩn CARB-P2 an toàn tuyệt đối cho người sức khỏe người dùng và đạt chứng nhận FSC bảo vệ và phát triển rừng, góp phần vào sự phát triển rừng một cách bền vững.          Gỗ tràm Chất liệu gỗ tràm tự nhiên đảm bảo vệ độ chắc chắn cao, chống công vênh, mối mọt cho bàn làm việc.ĐẶC ĐIỂM NỔI BẬT Các thiết kế trong bộ sưu tập nội thất VLINE mang trong mình nét đẹp đặc trưng của hồn Việt cùng vẻ đẹp năng động của thời đại. V” là viết tắt của từ “Việt” trong “Việt Nam”. “LINE” là các đường nét mang xu hướng hiện đại, phóng khoáng của ngày nay.   Bàn có kích thước vừa phải               Bàn làm việc có kích thước vừa phải, gọn gàng, không chiếm quá nhiều diện tích, độ rộng vừa đủ có thể để được nhiều vật dụng như: tài liệu, máy vi tính, laptop, sách.Chân bàn sử dụng chất liệu gỗ tràm Mang đến sự an tâm về độ chắc chắn khi sử dụng.                 Thanh ngang ở chân                Thanh ngang giúp cho bàn trở nên cứng cáp, giúp bàn không có cảm giác đơn điệu.Có 2 màu để lựa chọn Màu gỗ tự nhiên và màu nâu.', 'Kích thước: Dài 110cm x Rộng 55cm x Cao 74cm Chất liệu: - Mặt bàn: Gỗ công nghiệp PB chuẩn CARB-P2 (*), Veneer gỗ tràm tự nhiên - Chân bàn: Gỗ tràm tự nhiên', 'product-7.webp', 100, 0, 4.7, '1', 4, NULL, NULL),
(8, 'Ghế Xoay Văn Phòng Tay Gập', 'Ghế Xoay Văn Phòng Tay Gập', 1690000, 1290000, 'CHI TIẾT VẬT LIỆU Nhựa cao cấp Khung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao Vải lưới mềm mại thoáng khí Với chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ. ĐẶC ĐIỂM NỔI BẬT Thiết kế lưng trung với chiều cao phổ biến Với chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.Đệm ngồi thoáng mát – thiết kế vừa phải Nệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.Tựa lưng chắc chắn, bo cong mềm mại Với thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP cao cấp qua đó hình thành nên đường nét bo cong tinh tế, chắc chắn, là điểm tựa vững chắc cho phần thân trên cơ thể người dùng, hỗ trợ nâng đỡ tối ưu và bảo vệ cột sống người ngồi.Tay gập thông minh Tay gập được thiết kế thông minh điều chỉnh lên đến 90 độ, bạn có thể dễ dàng thay đổi lên xuống, phù hợp với thể trạng của mọi người. Việc thay đổi linh hoạt độ cao để tay thường xuyên có thể giúp bạn tránh mệt và nhức mỏi ở khớp vai hay tay cách hiệu quả.Vải lưới mềm mại thoáng khí Phần tựa lưng với vải lưới thoáng khí tốt, độ chắc chắn cao đem đến cho bạn trải nghiệm thú vị và cảm giác thoải mái.Điều chỉnh linh hoạt và phù hợp với nhiều không gian Pit tông thủy lực cao cấp giúp dễ dàng thay đổi độ cao của ghế  từ 38 - 45 cm phù hợp với mọi không gian, địa hình và thể trạng của mỗi người. Xoay 360 độ và di chuyển ít tiếng ồn Chân ghế được làm bằng hợp kim nhôm/ nhự cao cấp kết cấu sao 5 cánh vững chắc kết hợp với bánh xe nhựa cao cấp, độ bền cao đảm bảo giúp ghế quay 360 độ và di chuyển êm ái theo mọi hướng với hầu hết các loại mặt sàn khác nhau.', 'Kích thước: Dài 52cm x Rộng 65cm x Cao 94-101cm Chất liệu: - Khung ghế: nhựa cao cấp - Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí', 'product-8.webp', 100, 0, 4.8, '1', 4, NULL, NULL),
(9, 'Hệ tủ bếp Kitchen Premium Grenaa', 'Hệ tủ bếp Kitchen Premium Grenaa', 19800000, 11890000, 'CHẤT LIỆU TỦ BẾP Cánh tủ gỗ MFC dán Melamine chuẩn CARB P2 Thân tủ gỗ MFC phủ foil chuẩn CARB P2 Riêng thân tủ chậu rủ làm bằng Picomat chống nước.', 'Giá đã bao gồm tủ gỗ và mặt đá kim sa. Chất liệu chính:  - Cánh tủ: gỗ MFC phủ Melamine, dày 18mm, chuẩn CARB P2 - Thân tủ: gỗ MFC phủ foil, dày 18mm, chuẩn CARB P2 - Thân tủ chậu rửa: Picomat chống nước, dày 18mm. Bảo hành: 2 năm', 'product-9.webp', 100, 0, 4.9, '1', 5, NULL, NULL),
(10, 'Hệ tủ bếp Kitchen Premium Ubeda', 'Hệ tủ bếp Kitchen Premium Ubeda', 20800000, 11990000, 'CHẤT LIỆU TỦ BẾP Cánh tủ gỗ MFC dán Melamine chuẩn CARB P2 Thân tủ gỗ MFC phủ foil chuẩn CARB P2 Riêng thân tủ chậu rủ làm bằng Picomat chống nước.', 'Giá đã bao gồm tủ gỗ và mặt đá kim sa. Chất liệu chính:  - Cánh tủ: gỗ MFC phủ Melamine, dày 18mm, chuẩn CARB P2 - Thân tủ: gỗ MFC phủ foil, dày 18mm, chuẩn CARB P2 - Thân tủ chậu rửa: Picomat chống nước, dày 18mm. Bảo hành: 2 năm', 'product-10.webp', 100, 0, 5, '1', 5, NULL, NULL),
(11, 'Combo Basic Phòng Khách Grenaa', 'Combo Basic Phòng Khách Grenaa', 8670000, 5870000, 'Chi tiết nguyên vật liệu Với tiêu chí ưu tiên là bảo vệ môi trường và cung cấp những sản phẩm an toàn, tốt cho sức khỏe của con người, MOHO đã cân nhắc và chọn lọc sử dụng những nguyên liệu tốt nhất trong từng sản phẩm. Bộ sưu tập Grenaa được làm từ 2 nguyên liệu chính: gỗ công nghiệp MDF/ MFC phủ Melamine đạt chuẩn CARB P2 và gỗ cao su.  Gỗ công nghiệp MDF/ MFC phủ Melamine  Sử dụng Gỗ công nghiệp ván ép phủ Melamine vừa giúp bảo vệ môi trường, vừa tăng khả năng chống trầy xước mà vẫn đảm bảo kết cấu chắc chắn, bền bỉ cho sản phẩm. Đặc biệt, đạt tiêu chuẩn CARB P2 rất an toàn cho sức khỏe của bạn và gia đình.  Gỗ cao su Sử dụng gỗ cao su cho phần chân và khung giúp tăng khả năng chịu lực và độ bền cao hơn, dẻo dai hơn.  Gỗ công nghiệp Plywood Tất cả các phần tấm phản của giường, sofa, tựa lưng và mặt ngồi ghế ăn đều được sản xuất từ Plywood với độ dày 12 - 18 mm theo tiêu chuẩn CARB P2. Với tính thân thiện với môi trường, kết cấu bền bỉ, và khả năng chống ẩm xuất sắc, Plywood đảm bảo sức khỏe cho bạn và gia đình với khả năng chịu lực mạnh mẽ khi tấm phản giường có thể chịu trọng lượng lên đến 175kg trên diện tích 400 x 488 mm với nệm 15cm. Các sản phẩm từ Plywood khác đều có thể chịu trọng lượng hơn 70kg trên một diện tích đứng bất kỳ trực tiếp lên Plywood.  Đặc điểm chi tiết sản phẩm  Bộ sưu tập Grenaa sẽ đưa bạn đến một hành trình đầy ấn tượng giữa vẻ đẹp tinh tế và sự hiện đại tối giản của phong cách Scandinavian. Được truyền cảm hứng từ thị trấn Đan Mạch cùng tên, sự lạnh lẽo của thị trấn ven biển Baltic giá lạnh quanh năm đã được chuyển hóa thành sự tinh tế hiện đại trong các món đồ nội thất với màu sắc trầm lạnh.  Trong bộ sưu tập này, chúng tôi đã mang lại cho khách hàng một phong cách Scandinavian hoàn chỉnh, mang đậm đặc trưng của Đan Mạch nói riêng và các nước Bắc âu nói riêng. Toàn bộ sản phẩm mang tông màu tối lạnh của vùng biển Baltic, nhưng đã được chăm chút tỉ mỉ trong thiết kế khiến cho bộ sưu tập Grenaa vô cùng hài hòa không kém phần ấm áp.  Không những vậy, chúng tôi cũng đã tích hợp các công năng vào sản phẩm. Grenaa không chỉ hiện đại về mặt thiết kế mà còn cả khả năng sử dụng. Grenaa sẽ mang lại không gian sống nhẹ nhàng, gần gũi, nơi vẻ đẹp và sự đơn giản yên bình của ngôi nhà trở thành một.', 'Combo basic gồm: 1 Ghế Sofa: Dài 150 x Rộng 80 x Cao 70 cm  1 Bàn Sofa: Dài 70 x Rộng 50 x Cao 35 cm  1 Ghế đôn: Dài 40 x Rộng 40 x Cao 32 cm', 'product-11.webp', 100, 0, 4, '1', 6, NULL, NULL),
(12, 'Combo Basic Phòng Ăn Narvik', 'Combo Basic Phòng Ăn Narvik', 7150000, 5050000, 'Bộ sưu tập Narvik mang đậm vẻ đẹp và lịch sử của thị trấn Narvik cùng với phong cách nội thất ấm áp của Bắc Âu. Nó không chỉ lấy cảm hứng từ phong cách nội thất gỗ sáng điển hình của Na Uy mà còn từ lịch sử của thị trấn Narvik, tạo nên bộ sưu tập mang tên \"Bí mật của Công Chúa Thụy Điển Victoria\" với phong cách trang trí vĩnh cửu, luôn theo xu hướng và mang đậm vẻ thanh lịch hoàng gia của Bắc Âu. Màu tự nhiên: Màu gỗ nhẹ của các căn nhà gỗ tại Narvik lấy cảm hứng từ những ngôi nhà trên núi với tầm nhìn tuyệt vời, đặc biệt vào ban đêm với ánh sáng Bắc Cực tuyệt đẹp. Màu gỗ nhẹ phản chiếu tuyệt vời ánh sáng trong nhà vào ban đêm hoặc ban ngày, mang đến cảm giác ấm cúng theo phong cách Bắc Âu. Màu xám đá núi cho các bộ đồ nệm phản chiếu ánh đèn vào ban đêm, tạo cảm giác hiện đại cho ngôi nhà theo phong cách Bắc Âu. Màu Greige tôn vinh tủ quần áo, phản chiếu ánh sáng tự nhiên và đèn vào ban đêm, tạo nên không gian hiện đại và thanh lịch. Bàn ăn Narvik đơn giản nhưng tinh tế, phong cách hiện đại với kích thước phù hợp với căn hộ nhỏ. Với màu gỗ Dark Grey Barn Wood hoặc Light Cabin Wood và mặt melamine xám Greige, bàn ăn này không chỉ đẹp mắt mà còn chắc chắn và dễ chịu khi sử dụng hàng ngày. Ghế ăn Narvik được thiết kế đơn giản nhưng tinh tế, phù hợp với người Việt Nam với chiều cao và chiều sâu lý tưởng cho sự thoải mái khi ngồi lâu. Với màu gỗ Dark Grey Barn Wood hoặc Light Cabin Wood, ghế có kích thước và cấu trúc vững chắc, phù hợp với bàn ăn trong bộ sưu tập.', 'Combo basic gồm: 1 Bàn Ăn: Dài 120 x Rộng 75 x Cao 78 cm  4 Ghế Ăn: Dài 48 x Rộng 40 x Cao 80 cm', 'product-12.webp', 100, 0, 4.5, '1', 6, NULL, NULL),
(15, 'Go', '123', 1200, 1000, '123', '123', 'products/DWFHGbyH5ftCWBhPrVJzCsQPnJus1cwMa1h7hz8f.webp', 70, 0, 5, '1', 3, '2024-06-11 20:39:28', '2024-06-12 00:34:35'),
(16, 'Linh Vo', 'linh-vo', 10000, 8000, 'Linhvo', 'linhvo', '16.webp', 10, 0, 5, '1', 0, '2024-06-12 00:38:26', '2024-06-12 00:38:26'),
(17, '123', '123', 1200, 10, '123', '123', '17.webp', 12, 0, 5, '1', 0, '2024-06-12 00:49:06', '2024-06-12 00:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1uEY5djZjwCRydnYq5cK5MGwV0jvlCkHSK7V2kBS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSHVrb2o1c1RWUU5yUWJjMU5oeU1oSFdtaXFuOWlVNDc4eGNrMEROTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1718177837),
('BVkqEPLJBeUeXTHjv8sOe965BtVFT00ABvf8XRIo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWFsREZuWDhRQm53ZVlTaVFKWjgzYUhzY3EzZ0tlQ2JhVlpvRXFqVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjE6e2k6MjthOjY6e3M6MjoiaWQiO2k6MjtzOjQ6Im5hbWUiO3M6MTk6IlThu6cgS+G7hyBUaXZpIEfhu5ciO3M6ODoicXVhbnRpdHkiO3M6MToiMSI7czo1OiJwcmljZSI7aTozNDkwMDAwO3M6MTA6InNhbGVfcHJpY2UiO2k6MjE5MDAwMDtzOjU6ImltYWdlIjtzOjE0OiJwcm9kdWN0LTIud2VicCI7fX19', 1721202883),
('iEzlLR51UxWzuG39aTt5ieSXdsYW3bdrquhcNbvG', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOHhNa045a1FDUmVzUjFmb1hTUU1uOTNTQUtnUTdwNGVZYmhxUXBHeSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vdXNlci9hZGQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1718178652);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `job` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `phone`, `role`, `job`, `sex`) VALUES
(1, 'Linh', 'voduclinh2204@gmail.com', NULL, '$2y$12$yjuO5rmUWA6i4P3eFeCqm.4ZX3KkrgadpFNeGaKVe8mT4KM3eju5i', 'JsJmjCNqx20HSTo0SAMb7ZNiFK5Q2Fc7R4TGCQ1zMaCB2BSyyA9WwHSBNIoP', '2024-06-10 13:28:38', '2024-06-10 13:28:38', 'Công viên phần mềm Quang Trung', 343840770, 'user', 'Web', 'Nam'),
(2, 'Admin', 'admin123@gmail.com', NULL, '$2y$12$pe3zdudprIIt/ogJGnyoleLT5Sz7O/GsxTA.T9pXSczvaii19UIka', NULL, '2024-06-11 12:59:38', '2024-06-11 12:59:38', 'Quận Gò Vấp', 123123123, 'admin', 'Quản lí', 'Nam'),
(3, 'Khang', 'khang123@gmail.com', NULL, '$2y$12$/.J3iNI2YrXn/NnW6mhhoeK7at7bWTPByocfWzYbn168aDsUfnR3e', NULL, '2024-06-11 18:46:48', '2024-06-11 22:15:41', 'Quận Tân Bình', 456456456, 'user', 'Kỹ sư', 'Nữ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
