CREATE DATABASE IF NOT EXISTS `profil_jasa` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `profil_jasa`;
DROP TABLE IF EXISTS `portfolios`;
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (`id` bigint unsigned NOT NULL AUTO_INCREMENT,`name` varchar(255) NOT NULL,`slug` varchar(255) NOT NULL UNIQUE,`description` text NOT NULL,`price` decimal(15,2) DEFAULT NULL,`created_at` timestamp NULL DEFAULT NULL,`updated_at` timestamp NULL DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `portfolios` (`id` bigint unsigned NOT NULL AUTO_INCREMENT,`title` varchar(255) NOT NULL,`description` text DEFAULT NULL,`image` varchar(255) DEFAULT NULL,`url` varchar(255) DEFAULT NULL,`created_at` timestamp NULL DEFAULT NULL,`updated_at` timestamp NULL DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `services` (`name`,`slug`,`description`,`price`,`created_at`,`updated_at`) VALUES
('Website Company Profile','website-company-profile','Website profesional untuk profil perusahaan, organisasi, sekolah, atau usaha.',1500000,NOW(),NOW()),
('Website Toko Online','website-toko-online','Website e-commerce dengan katalog produk, keranjang, dan halaman pemesanan.',2500000,NOW(),NOW()),
('Sistem Informasi','sistem-informasi','Pengembangan sistem informasi berbasis web sesuai kebutuhan bisnis atau institusi.',3000000,NOW(),NOW()),
('Website E-Raport','website-e-raport','Sistem e-Raport berbasis web untuk pengelolaan data siswa, guru, nilai, dan laporan.',3500000,NOW(),NOW());
INSERT INTO `portfolios` (`title`,`description`,`image`,`url`,`created_at`,`updated_at`) VALUES
('E-Raport PAUD','Sistem informasi e-Raport digital berbasis web.','images/portfolio/eraport.jpg','#',NOW(),NOW()),
('Website Absensi Karyawan','Website untuk pengelolaan absensi karyawan.','images/portfolio/absensi.jpg','#',NOW(),NOW()),
('Website Company Profile','Website profil profesional untuk perusahaan atau organisasi.','images/portfolio/company-profile.jpg','#',NOW(),NOW());
