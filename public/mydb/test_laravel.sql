-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 13, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:46', '2021-11-20 00:57:46'),
(4, 20, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:46', '2021-11-20 00:57:46'),
(5, 1, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:46', '2021-11-20 00:57:46'),
(6, 16, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(7, 14, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(8, 20, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(9, 11, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(10, 19, 'Prof. Alvis Hills', 'prof._alvis_hills', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(11, 1, 'Emrannn', 'emrannn', 'active', '2021-11-25 03:53:43', '2021-12-01 01:24:55'),
(12, 1, 'instagram_App', 'instagram_app', 'active', '2021-11-25 03:54:51', '2021-12-01 00:53:42'),
(13, 1, 'Emrannn', 'emrannn', 'inactive', '2021-11-25 08:40:31', '2021-12-01 01:25:03'),
(15, 1, 'Md. Al Emranul Hasan', 'md._al_emranul_hasan', 'active', '2021-11-25 09:24:43', '2021-12-01 01:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_05_233226_create_categories_table', 1),
(6, '2021_11_07_012408_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `cat_id`, `title`, `slug`, `desc`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, 7, 'Garett Mann', 'garett_mann', 'Est corporis fugiat velit beatae omnis libero ut. Qui voluptas est et corporis architecto et. Odio repellat tempora rerum ad qui dignissimos. Voluptatem impedit voluptatibus sunt molestiae est. Qui esse at ipsum totam sunt sint magnam.', 'https://via.placeholder.com/640x480.png/00dd33?text=pariatur', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(3, 4, 5, 'Anissa Carroll', 'anissa_carroll', 'Voluptas eius cupiditate et sint earum officia harum. Dicta atque animi in. Qui veritatis enim dolor ut rerum doloribus.', 'https://via.placeholder.com/640x480.png/0055ee?text=veritatis', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(4, 2, 6, 'Dr. Conor Considine', 'dr._conor_considine', 'Voluptatem tenetur dolores ea facilis saepe neque esse. Aut vero dolores qui consectetur vero. Vero illo vel animi voluptates exercitationem. Ut rerum voluptatum voluptatem consequatur.', 'https://via.placeholder.com/640x480.png/00cc55?text=inventore', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(5, 18, 8, 'Lindsey Osinski', 'lindsey_osinski', 'Suscipit et itaque voluptatum nemo sunt consectetur. Fuga dolores sint molestiae. In et impedit in consequatur eveniet aperiam. Hic debitis dolores odio quam nemo illo corrupti. Sit eos odio ut aut.', 'https://via.placeholder.com/640x480.png/00ff66?text=nemo', 'active', '2021-11-20 00:57:47', '2021-11-20 00:57:47'),
(6, 15, 8, 'Bryon Graham II', 'bryon_graham_ii', 'Aliquam fugit aut tempore quo quod ea ipsa quasi. Aut beatae provident et qui sunt ratione. Ducimus et voluptatem aut ullam deserunt quis.', 'https://via.placeholder.com/640x480.png/00aabb?text=et', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(8, 9, 8, 'Mr. Jettie Shanahan', 'mr._jettie_shanahan', 'Omnis suscipit dolores assumenda qui et. Repellat ea et exercitationem enim et harum eligendi illo. Quo perferendis quis aut quibusdam reprehenderit. Voluptas cupiditate voluptatem tempora expedita aut.', 'https://via.placeholder.com/640x480.png/00dd88?text=reprehenderit', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(11, 13, 7, 'Corine Kovacek', 'corine_kovacek', 'Sequi iure quaerat error sed consectetur nesciunt error. Est et laborum voluptas id libero ex dignissimos. Non atque ipsam non mollitia veritatis architecto quasi. Beatae nam ipsam veniam animi.', 'https://via.placeholder.com/640x480.png/006655?text=natus', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(12, 14, 10, 'Aileen Davis', 'aileen_davis', 'Odit sed dignissimos qui nemo quisquam a. Praesentium quis et cupiditate alias molestias facere molestiae.', 'https://via.placeholder.com/640x480.png/0000cc?text=placeat', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(14, 6, 6, 'Chyna Hilpert', 'chyna_hilpert', 'Necessitatibus dolores quas dignissimos et aut culpa facere odio. Tempore sunt ratione sed quia. Inventore quisquam laudantium inventore natus velit et blanditiis.', 'https://via.placeholder.com/640x480.png/00ee88?text=dolorem', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(15, 8, 5, 'Prof. Electa Crooks', 'prof._electa_crooks', 'Eum debitis voluptatem repellat. Autem quasi a voluptas labore minima. Saepe eligendi quis laudantium esse porro. Eum omnis harum quia quasi beatae.', 'https://via.placeholder.com/640x480.png/007711?text=eum', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(16, 20, 6, 'Rocky McKenzie Sr.', 'rocky_mckenzie_sr.', 'Quis numquam soluta sed velit. Id dolores laboriosam excepturi fugit blanditiis quia. Sed id id nisi.', 'https://via.placeholder.com/640x480.png/0099ee?text=esse', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(17, 21, 4, 'Meghan Buckridge', 'meghan_buckridge', 'Accusamus ut temporibus nihil nostrum est rem quae. Iste rerum recusandae excepturi atque laudantium et sequi. Saepe voluptate fuga aliquid qui cupiditate. Molestiae aut voluptatem nesciunt excepturi quis.', 'https://via.placeholder.com/640x480.png/008877?text=voluptatibus', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(18, 21, 6, 'Darrick Adams', 'darrick_adams', 'Quas accusamus illum dolorem aut saepe mollitia deleniti. Enim molestiae impedit eum sunt voluptas.', 'https://via.placeholder.com/640x480.png/000066?text=vero', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(19, 21, 10, 'Madie Haley', 'madie_haley', 'Debitis maxime assumenda in fuga nulla ad. Eveniet sunt quibusdam voluptas rerum magnam. Placeat sed consectetur numquam ea est laborum.', 'https://via.placeholder.com/640x480.png/006600?text=voluptatibus', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48'),
(20, 20, 5, 'Clarabelle Bauch', 'clarabelle_bauch', 'Beatae aut quis adipisci et consequatur. Aut facilis voluptatem voluptas praesentium reiciendis et. Quasi ut provident sapiente deleniti ut inventore. Officiis doloremque aut pariatur tenetur inventore.', 'https://via.placeholder.com/640x480.png/002288?text=dolor', 'active', '2021-11-20 00:57:48', '2021-11-20 00:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emran', 'emran@blog.com', NULL, '$2y$10$kSGpRWys42VqWNFd4oZwc.KQlnq/qqW7VQ0QxxOp2QawhbtoRBn1q', NULL, '2021-11-20 00:57:42', '2021-11-20 00:57:42'),
(2, 'Ms. Kaylah Beahan DVM', 'hoppe.magnolia@gmail.com', NULL, '123456', NULL, '2021-11-20 00:57:42', '2021-11-20 00:57:42'),
(3, 'Mr. Tony Lueilwitz', 'desmond.breitenberg@daugherty.com', NULL, '$2y$10$GHIOyhyjWnH6hMlcK4TZ3uOzeAqjsDWo/PxDpI3L6wx849alvKIhG', NULL, '2021-11-20 00:57:43', '2021-11-20 00:57:43'),
(4, 'Mr. Garnet Bogisich Sr.', 'brigitte.kuhn@yahoo.com', NULL, '$2y$10$od4wO9/mrb7BNnc.eY3fvekUp4O1ISrEiFtg229QMDNny8zxMcL3e', NULL, '2021-11-20 00:57:43', '2021-11-20 00:57:43'),
(5, 'Prof. Rogers Greenholt', 'lacey59@hotmail.com', NULL, '$2y$10$pO1rwbkUNRlrL7R3V5F5LuYe54CLDCUM4ww13unsM3GJWwQI.KAlG', NULL, '2021-11-20 00:57:43', '2021-11-20 00:57:43'),
(6, 'Dave Klocko', 'wrippin@jenkins.com', NULL, '$2y$10$uNGwA4.ewfOdxrSOLOBQsOcs/E2uo7nOdo5LDJBBmvb2R9tr7iZqy', NULL, '2021-11-20 00:57:43', '2021-11-20 00:57:43'),
(7, 'Kaia Hintz', 'carmine87@yahoo.com', NULL, '$2y$10$M9FQVL10k0RHNnO8vcTetewxFQBZi3BNOll6O7SRQ1LzTTf0R9pcW', NULL, '2021-11-20 00:57:43', '2021-11-20 00:57:43'),
(8, 'Prof. Ruben O\'Conner', 'bspencer@lang.com', NULL, '$2y$10$kpS9nfIEnW79FJJoMPCxE.fZDTK1j8S7/17vdtFS3F4nXeJS/qkLO', NULL, '2021-11-20 00:57:44', '2021-11-20 00:57:44'),
(9, 'Adelle Wintheiser', 'rkling@schultz.com', NULL, '$2y$10$QoYzIGJY0t9OJ9YlHWmpru7mlVsUFHdgsSoHJE258XrDbwPaqjDpO', NULL, '2021-11-20 00:57:44', '2021-11-20 00:57:44'),
(10, 'Werner Metz', 'arvilla14@gmail.com', NULL, '$2y$10$VAseXZ8iDssAHIz6zR/h7eqWR/s5b.phzU6gJ91n18sP0V/9lcuqi', NULL, '2021-11-20 00:57:44', '2021-11-20 00:57:44'),
(11, 'Giovanni Oberbrunner', 'dayne.kozey@runte.com', NULL, '$2y$10$7lk6CajFPNQhK9gxUkL.6uVOlatY5JrhfnbYUsUzZi7Okqt51HaOK', NULL, '2021-11-20 00:57:44', '2021-11-20 00:57:44'),
(12, 'Jacinthe Mosciski', 'audra.mcdermott@tromp.net', NULL, '$2y$10$dLlyI9bkuSHzWW2.MOzeAu59QpfUI5PandeQUmnjNjwTyXS0bzBmO', NULL, '2021-11-20 00:57:44', '2021-11-20 00:57:44'),
(13, 'Magdalen Lang', 'roger28@hotmail.com', NULL, '$2y$10$4pHNoTLPpA2fLuCpd09Bn.BE0wvwuCXGSsOmYjsHIonr9QqX58U0S', NULL, '2021-11-20 00:57:45', '2021-11-20 00:57:45'),
(14, 'Jolie Torp PhD', 'meghan.bruen@hand.com', NULL, '$2y$10$aqu8aUnkzxgX6pj3TAZl0O1k5tCt/wKhGcDrElyTV21mRE.CTNKcC', NULL, '2021-11-20 00:57:45', '2021-11-20 00:57:45'),
(15, 'Annie Blanda V', 'gcremin@reynolds.org', NULL, '$2y$10$KPdyZ5ODlJugyHLdf67yyeUugqr7JgKk9rdKiWr0peza4UgHrQnKu', NULL, '2021-11-20 00:57:45', '2021-11-20 00:57:45'),
(16, 'Prof. Arturo Glover', 'rutherford.horace@kris.com', NULL, '$2y$10$9i06DwBNtiepzkx.0vVuA.Mc1NWkZsWVfENWpmRSCvQcI.dVSZbEm', NULL, '2021-11-20 00:57:45', '2021-11-20 00:57:45'),
(17, 'Kelvin Oberbrunner II', 'cindy.kunze@hotmail.com', NULL, '$2y$10$MT0v4H53sIsCN6w.82i3wurmLxUOozmjEC7bSV9FA0fWvMubRFlRm', NULL, '2021-11-20 00:57:45', '2021-11-20 00:57:45'),
(18, 'Zoila Gaylord V', 'dickens.mabel@swaniawski.com', NULL, '$2y$10$oAcfpKn4uxarTt0Z3RodAeyBwxVFu14JomiIrJIsXbgvcjpUj0Ja.', NULL, '2021-11-20 00:57:46', '2021-11-20 00:57:46'),
(19, 'Loraine Kassulke', 'joan11@yahoo.com', NULL, '$2y$10$XziDR0TlmW0oc.96/KbohOrcTjlU2XRSgDpEOCR45XzoeGyizVPKO', NULL, '2021-11-20 00:57:46', '2021-11-20 00:57:46'),
(20, 'Salma Kiehn', 'vergie29@hotmail.com', NULL, '$2y$10$NiIj2akHdKdiN9k32UKjBuFHyUcFwJohSUOp6.4UIDHFF56eyIRIO', NULL, '2021-11-20 00:57:46', '2021-11-20 00:57:46'),
(21, 'Rod Jaskolski V', 'kutch.kendra@hotmail.com', NULL, '$2y$10$XWiaAAgpoCrFszHc.2AwB.ze4vgV3YaecB6u7pgMb/hcEtraWD1q2', NULL, '2021-11-20 00:57:46', '2021-11-20 00:57:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD UNIQUE KEY `posts_image_unique` (`image`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_cat_id_foreign` (`cat_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
