-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 06:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `desain`
--

CREATE TABLE `desain` (
  `id` int(11) NOT NULL,
  `judul_ds` varchar(200) NOT NULL,
  `gambar_ds` varchar(200) NOT NULL,
  `isi_ds` text NOT NULL,
  `harga_ds` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desain`
--

INSERT INTO `desain` (`id`, `judul_ds`, `gambar_ds`, `isi_ds`, `harga_ds`, `updated_at`) VALUES
(1, 'Adobe Photoshop', '1.jpg', 'Adobe Photoshop merupakan salah satu software desain grafis paling populer saat ini. Meskipun sebenarnya software ini secara khusus dirancang untuk memanipulasi objek atau gambar', 200000, '2020-02-27 01:46:25'),
(2, 'GIMP', '2.jpg', 'Bagi sebagian orang, GIMP seringkali disebut sebagai alternatif dari Photoshop. Selain gratis, software GIMP juga bersifat open source, yaitu dapat dikembangkan oleh siapa pun.', 200000, '2020-02-27 01:46:25'),
(3, 'Adobe Illustrator', '3.jpg', 'Jika Freebuddies ingin membuat sebuah desain vektor (vector) seperti sketsa, tipografi atau bahkan desain ilustrasi yang lebih kompleks untuk kebutuhan video, Adobe Illustrator ', 300000, '2020-02-27 01:46:25'),
(4, 'Inkscape', '4.jpg', 'Inkscape adalah software alternatif yang bisa kamu gunakan dalam membuat vektor, dan desain grafis yang menggunakan format file SVG. Software desain ini juga bisa digunakan ', 150000, '2020-02-27 01:46:25'),
(5, 'CorelDraw', '5.jpg', 'Bagi seorang web designer maupun graphic designer, CorelDraw merupakan salah satu software desain vektor tanpa batas yang paling banyak digunakan saat ini.', 300000, '2020-02-27 01:46:25'),
(6, 'Adobe InDesign', '6.jpg', 'Didukung oleh Adobe, InDesign merupakan salah satu software unggulan dalam membuat layout untuk dekstop dan mobile. Adobe InDesign sangat ideal untuk penggunaan desain layout seperti\r\n', 250000, '2020-02-27 01:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `judul_off` varchar(200) NOT NULL,
  `gambar_off` varchar(200) NOT NULL,
  `harga_off` int(11) NOT NULL,
  `isi_off` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `judul_off`, `gambar_off`, `harga_off`, `isi_off`) VALUES
(1, 'Microsoft Word', 'q.png', 300000, 'Saah satu aplikasi yang terdapat pada Ms. Office yaitu Ms. Word adalah aplikasi yang sangat terkenal dan banyak digunakan. Aplikasi ini diterbitkan pada tahun 1983 dengan berbagai versi dan hingga saat ini sudah ada versi Ms. Word 2010 yang lebih canggih dan lebih nyaman digunakan. Melalui aplikasi ini kita bisa menulis berbagai hal, surat, dokumen, buku dan lainnya.'),
(2, 'Microsoft Excel', 'r.jpg', 250000, 'Selain Ms. Word di atas, aplikasi yang terkenal dari Ms. Office adalah MS. Excel. Aplikasi ini digunakan untuk pengolahan data berupa angka dan sangat membantu akuntan, administrasi ataupun untuk perusahaan yang membutuhkan pengolahan angka. Melalui aplikasi ini perkantoran bisa dengan mudah menyusun laporan keuangan maupun laporan pengolahan aritmatika lainnya.'),
(3, 'Microsoft Power Point', 't.jpg', 300000, 'Aplikasi Power Point digunakan untuk presentasi, aplikasi ini bisa dijalankan dengan OS Windows dan Apple Mac. Power Point pada MS. Office ini sering digunakan untuk presentasi pendidik, pelajar, trainer ataupun manager perusahaan.'),
(4, 'Ms. Visio', 'l.jpg', 650000, 'Ms. Office juga memberikan fasilitas kepada pengguna berupa Ms. Visio, aplikasi ini banyak digunakan untuk pembuatan flowchart. Selain membaut diagram alir atau flowchart, Visio juga sangat nyaman untuk pembuatan berbagai macam diagram, brainstorm dan juga beberapa skema jaringan. Aplikasi ini dilengkapi dengan grafik vektor sehingga pengguna lebih mudah dalam pembuatan diagram.'),
(5, 'Microsoft Acces', 's.png', 140000, 'Program aplikasi komputer dari Ms. Officel lainnya adalah Ms. Acces, program ini digunakan untuk perusahaan kecil dan juga rumahan. Melalui aplikasi ini Anda bisa mengolah data dengan Microsoft Jet Database Engine. Program ini juga bisa menampilkan grafis yang sempurna sehingga mudah dipahami pengguna.'),
(6, 'Microsof One Note', 'x.png', 130000, 'One Note merupakan aplikasi Ms. Office yang digunakan untuk mengumpulkan berbagai informasi gratis. Aplikasi ini banyak digunakan pada komputer atau PC dan juga laptop.');

-- --------------------------------------------------------

--
-- Table structure for table `programming`
--

CREATE TABLE `programming` (
  `id` int(11) NOT NULL,
  `judul_pg` varchar(200) NOT NULL,
  `gambar_pg` varchar(200) NOT NULL,
  `harga_pg` int(11) NOT NULL,
  `isi_pg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programming`
--

INSERT INTO `programming` (`id`, `judul_pg`, `gambar_pg`, `harga_pg`, `isi_pg`) VALUES
(1, 'Sublime Text', 'b.png', 200000, 'Sublime Text adalah salah satu teks editor terbaik untuk programmer khususnya Web Developer yang sangat canggih untuk coding, markup dan lain-lain. Sublime Text ini bisa dibilang sebagai senjata wajib bagi web developer. Kamu akan menyukai antarmuka pengguna yang sangat sederhana, dengan fitur dan kinerja yang luar biasa.\r\n\r\n\r\nSublime Text tersedia dalam versi berbayar dan gratis. Sublime Text juga memiliki banyak fitur, di antaranya fitur goto anything, command pallete, multiple selections, distraction free mode, split editing, instant project switch, customize anything, dan plugin API. Masih kurang? Sublime Text memiliki banyak plugins, kamu bisa mendownload plugins di Internet dan menginstalnya.'),
(2, ' Atom', '7.png', 300000, 'Atom adalah text editor yang memiliki lisensi open source dan tersedia untuk platform OS X, Linux, dan Windows. Atom ini dibuat oleh GitHub dan diklaim sebagai text editor yang bisa di-custom dengan mengubah file konfigurasinya.\r\n\r\nAtom ini mirip dengan Sublime Text, karena memang dibuat dengan menggunakan Sublime Text sebagai referensinya. Atom ini bersifat modular, jadi kamu bisa menginstal plugins tambahan.'),
(3, 'Notepad++', 'a.png', 150000, 'Notepad++ adalah text editor terbaik yang berjalan di sistem operasi Windows yang didistribusikan sebagai perangkat lunak bebas. Notepad++ mendukung banyak bahasa, di antaranya Assembly, C, C++, C#, CSS, HTML, Java, Javascript, Pascal, Perl, PHP, Python, Ruby, Shell, SQL, VB, XML, dan lainnya.\r\n\r\nNotepad++ memiliki banyak kelebihan, seperti memiliki GUI yang baik dan menarik. Selain itu, Notepad++ juga dapat ditambahkan berbagai plugin yang bisa mempermudah pekerjaan programmer.'),
(4, 'Light Table', '4.png', 450000, 'Light Table adalah text editor yang berasal dari crowdfunding di Kickstarter yang berhasil mengumpulkan dana hingga US$300 ribu. Light Table pun dianggap sebagai editor teks yang sangat modern dan inovatif.\r\n\r\nEditor ini dapat dengan mudah disesuaikan, bahkan kamu bisa menyematkan grafis dan melihat secara real time hasil kode tertentu. Seperti text editor pada umumnya, Light Table mendukung banyak bahasa pemrograman. Namun, memiliki integrasi khusus untuk beberapa bahasa pemrograman, yakni Clojure, JavaScript, HTML, dan CSS.'),
(5, 'UltraEdit', 'c.jpg', 600000, 'UltraEdit juga merupakan text editor terbaik yang sangat powerful dan sangat populer. Keunggulan dari UltraEdit yakni mampu berjalan di atas hampir semua sistem operasi seperti Linux, Max Os, dan Windows.\r\n\r\nSeperti text editor lainnya, fitur-fitur UltraEdit sangat lengkap. Beberapa keunggulan UltraEdit, di antaranya 64 bit file handling, unicode support, disk based text editing, large file handling, multiline find dan replace, spell checker, dan lainnya. Namun, jika kamu ingin menggunakan seluruh fitur-fitur andal dari UltraEdit, kamu harus membeli lisensinya.'),
(6, 'ICEcoder', '6.jpeg', 670000, 'ICEcoder adalah text editor berbasis browser yang memungkinkan kamu untuk melakukan aktivitas coding langsung di browser baik online atau offline. Itu berarti semua yang kamu butuhkan untuk programming ada pada browser. ICEcoder mendukung berbagai bahasa termasuk HTML, CSS, Javascript, PHP, Ruby, dan banyak lagi.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'neha', 'neharosma200@gmail.com', NULL, 1, '$2y$10$2LX349Al6kbSv0QwxoDYQ.TLKnUcjMP3lElcUoP9bpSBLT2qOrYoC', NULL, '2020-03-08 23:17:29', '2020-03-08 23:17:29'),
(2, 'n', 'n@gmail.com', NULL, NULL, '$2y$10$szPdik5cMnZ2WeoLQd5YweQDMNdIRXU3OWBcMiqt0OABF12ksbe8G', NULL, '2020-03-08 23:21:40', '2020-03-08 23:21:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programming`
--
ALTER TABLE `programming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desain`
--
ALTER TABLE `desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `programming`
--
ALTER TABLE `programming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
