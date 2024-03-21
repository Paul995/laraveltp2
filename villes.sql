
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `villes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `villes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;


INSERT INTO `villes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'West Cloyd', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(2, 'Reingerfort', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(3, 'Kamrenland', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(4, 'East Macyport', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(5, 'South Lina', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(6, 'South Haskell', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(7, 'Davidland', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(8, 'South Juanatown', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(9, 'Halvorsonhaven', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(10, 'South Rowlandshire', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(11, 'Lake Xanderfurt', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(12, 'New Mya', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(13, 'Einostad', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(14, 'New Glenda', '2024-02-21 02:09:57', '2024-02-21 02:09:57'),
(15, 'Lake Reganmouth', '2024-02-21 02:09:57', '2024-02-21 02:09:57');
