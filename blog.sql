-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 02:53 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Totam ducimus explicabo dolorem minus rerum laboriosam cupiditate.', 'Velit iste molestias mollitia hic sit incidunt accusantium. Ullam aut est sapiente. Adipisci esse magnam dolore tempora beatae explicabo vel. Dolor rerum error perferendis occaecati omnis dolor rem asperiores.', '2017-08-08 10:11:06', '2017-08-10 10:11:06'),
(3, 'Et in nemo accusantium facere nostrum ea.', 'Ipsa sit amet excepturi fugit ea in autem. Temporibus id iusto minus. Qui quis voluptate quod officia. Et consequuntur minus fugit excepturi et.', '2017-08-13 10:11:06', '2017-08-10 10:11:06'),
(4, 'Sit fugiat quia molestiae eos qui at.', 'Neque eius quo dolorum ut quibusdam. Alias qui cumque non omnis. Voluptas maxime sit molestias animi minima voluptates.', '2017-08-11 10:11:06', '2017-08-10 10:11:06'),
(5, 'Fuga pariatur quia iste enim voluptates voluptatem.', 'Repudiandae et quas reprehenderit odio quia. Voluptatum fugit veniam labore dolor nemo optio rerum. Et nihil quae quia iusto eum et eum. Veniam facilis autem totam ut perspiciatis.', '2017-08-06 10:11:06', '2017-08-10 10:11:06'),
(6, 'Enim accusamus rerum et doloremque.', 'Autem nihil et libero et perferendis. Aspernatur id in aperiam dolorum voluptate voluptate. Voluptatem ab veritatis nesciunt dolor et fugit illum. Tempora ut esse mollitia illum aut non error.', '2017-08-11 10:11:06', '2017-08-10 10:11:06'),
(8, 'Dolor eaque in et.', 'Voluptas eos incidunt voluptatem ut similique maxime. Neque eum eveniet dolore debitis. Delectus ab sapiente nam. Facilis sequi quo corrupti porro iusto nisi quibusdam minus. Ratione ut animi debitis odio modi aut eaque.', '2017-08-10 10:11:06', '2017-08-10 10:11:06'),
(9, 'Vitae animi consequatur distinctio exercitationem dignissimos voluptatem quia id.', 'Voluptate facere enim aut. Maxime ex nesciunt esse quam unde aut nihil sed. Maiores praesentium dolores earum suscipit ea. Natus earum at atque sunt neque consequuntur. Quibusdam esse ut dolorum neque quia est quaerat reiciendis.', '2017-08-09 10:11:06', '2017-08-10 10:11:06'),
(10, 'Neque voluptatem ipsa necessitatibus repellat quia eos.', 'Voluptas nihil aut ipsa modi soluta est laudantium. Earum neque nostrum voluptates unde corporis. Et sit vitae eos saepe quae fugit impedit. Dolorum ex saepe cum nam. Accusamus animi quod maiores dolorem ut possimus id.', '2017-08-17 10:11:06', '2017-08-10 10:11:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
