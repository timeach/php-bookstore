-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 02:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_descr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_price` decimal(6,2) NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `supplier_id`, `created_at`, `updated_at`) VALUES
(1, '978-1982110567', 'The Institute: A Novel', 'Stephen King', 'https://m.media-amazon.com/images/I/81WtFHzH+hL._AC_UY327_FMwebp_QL65_.jpg', 'In the middle of the night, in a house on a quiet street in suburban Minneapolis, intruders silently murder Luke Ellis�s parents and load him into a black SUV. The operation takes less than two minutes. Luke will wake up at The Institute, in a room that looks just like his own, except there�s no window. And outside his door are other doors, behind which are other kids with special talents�telekinesis and telepathy�who got to this place the same way Luke did: Kalisha, Nick, George, Iris, and ten-year-old Avery Dixon. They are all in Front Half. Others, Luke learns, graduated to Back Half, �like the roach motel,� Kalisha says. �You check in, but you don�t check out.� In this most sinister of institutions, the director, Mrs. Sigsby, and her staff are ruthlessly dedicated to extracting from these children the force of their extranormal gifts. There are no scruples here. If you go along, you get tokens for the vending machines. If you don�t, punishment is brutal. As each new victim disappears to Back Half, Luke becomes more and more desperate to get out and get help. But no one has ever escaped from the Institute. As psychically terrifying as Firestarter, and with the spectacular kid power of It, The Institute is Stephen King�s gut-wrenchingly dramatic story of good vs. evil in a world where the good guys don�t always win.', '26.00', 2, NULL, NULL),
(2, '978-0735214149', 'Profit First: Transform Your Business from a Cash-Eating Mon', 'MIKE MICHALOWICZ', 'https://images-na.ssl-images-amazon.com/images/I/91kK4O7wYuL._AC_SR201,266_.jpg', 'Conventional accounting uses the logical (albeit, flawed) formula: Sales - Expenses = Profit. The problem is, businesses are run by humans, and humans aren\'t always logical. Serial entrepreneur Mike Michalowicz has developed a behavioral approach to accounting to flip the formula: Sales - Profit = Expenses. Just as the most effective weight loss strategy is to limit portions by using smaller plates, Michalowicz shows that by taking profit first and apportioning only what remains for expenses, entrepreneurs will transform their businesses from cash-eating monsters to profitable cash cows. Using Michalowicz\'s Profit First system, readers will learn that: � Following 4 simple principles can simplify accounting and make it easier to manage a profitable business by looking at bank account balances. � A small, profitable business can be worth much more than a large business surviving on its top line. � Businesses that attain early and sustained profitability have a better shot at achieving long-term growth. With dozens of case studies, practical, step-by-step advice, and his signature sense of humor, Michalowicz has the game-changing roadmap for any entrepreneur to make money they always dreamed of.', '22.00', 1, NULL, NULL),
(3, '978-1878529183', 'Maori: Art and Culture', 'Doro Starzecka', 'https://m.media-amazon.com/images/I/6142WV53PFL._AC_UY327_FMwebp_QL65_.jpg', 'Fully illustrated with the collection of the British Museum, the landmark publication seeks to introduce Maori art and culture to a general audience and to explore themes which are at the forefront of Maori studies. The authors, the majority of them living and working in New Zealand, offer a vivid portrait of the art and culture of Maori people both past and present. As well as examining the archaeology and early history of the Maori people, the books discusses the evidence for religion, ritual and social and political organization before and after the arrival of the Europeans. The development of a distinctively Maori art is examined in detail as is the impact of external influences. The techniques and materials of fiber art-clothing, basketry, and nets-are surveyed, with special attention to developments brought about by social, economic and ecological changes in New Zealand from the earliest settlements to modern times. Modern perspectives on Maori traditions and culture, and on what it means to be Maori today, are provided by scholars Ngahuia Te Awekotuku and Arapata Hakiwai. The final chapter offers a history of the splendid Maori artifacts in the British Museum.', '52.00', 3, NULL, NULL),
(4, '978-1910381090', 'Adobe Photoshop Lightroom Classic CC', 'Victoria Bampton', 'https://m.media-amazon.com/images/I/81ldTdk1jfL._AC_UY327_FMwebp_QL65_.jpg', 'Adobe Lightroom Classic CC - The Missing FAQ is primarily designed as a conversational FAQ-style reference book, giving you the detailed information you need to make informed choices, whether you\'ve been using Lightroom for a few months or a few years. No more pressing buttons without understanding the repercussions! Unlike most other Lightroom books, this isn\'t just the theory of how Lightroom\'s supposed to work, but also the workarounds and solutions for the times when it doesn\'t behave the way you\'d expect. For less experienced users, the Fast Track weaves its way through the book, with short tutorials that guide you through a simple workflow, allowing you to gain confidence before diving into the more advanced questions. To get a taste of Victoria\'s writing style, download the free Quick Start eBook from the Lightroom Queen website. For many years, the Adobe Lightroom - The Missing FAQ books have been among the most popular Lightroom books available. The information is now easier for less experienced users to understand, and easier to find using the comprehensive index. If you\'ve read previous versions, don\'t worry, all of the advanced information is still there and has been expanded too.', '50.00', 4, '2019-11-05 14:09:42', '2019-11-05 14:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`, `supplier_id`, `created_at`, `updated_at`) VALUES
(1, 'car1', '11111', 1, '2019-10-30 11:42:58', '2019-10-30 11:42:58'),
(2, 'car2', '22222', 1, '2019-10-30 11:42:58', '2019-10-30 11:42:58'),
(3, 'car3', '33333', 2, '2019-10-30 11:42:58', '2019-10-30 11:42:58'),
(4, 'car4', '44444', 2, '2019-10-30 11:42:58', '2019-10-30 11:42:58'),
(5, 'car1', '55555', 3, '2019-10-30 11:42:58', '2019-10-30 11:42:58');

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
(3, '2019_10_30_233737_create_suppliers_table', 2);

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
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Business', 'Books and guides on every business and money topic', '2019-10-30 11:42:58', '2019-10-30 11:42:58'),
(2, 'Fiction', 'Browse best sellers, historical fiction, literary fiction', '2019-10-30 11:42:58', '2019-10-30 11:42:58'),
(3, 'Maori Cultures', 'Books about Maori people cultures in New Zealand.', '2019-10-30 11:42:58', '2019-10-30 11:42:58'),
(4, 'Art & Photograph', 'Books about art and photograph.', NULL, NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
