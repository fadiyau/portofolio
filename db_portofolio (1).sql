-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 07:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `perkenalan` text NOT NULL,
  `latar_belakang` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `perkenalan`, `latar_belakang`, `created_at`, `updated_at`) VALUES
(2, 'Hai! Saya Fadiyah, seorang pengembang perangkat lunak dengan latar belakang di SMK Rekayasa Perangkat Lunak. Saya memiliki minat yang mendalam dalam pengembangan teknologi dan solusi perangkat lunak.', 'Lulusan SMK Rekayasa Perangkat Lunak, saya telah belajar berbagai bahasa pemrograman dan teknologi, seperti JavaScript dan PHP, yang telah diterapkan dalam berbagai proyek praktis selama studi saya.', '2024-07-25 15:02:19', '2024-07-25 15:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tahun_masuk` int(100) NOT NULL,
  `tahun_keluar` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `nama_sekolah`, `alamat`, `tahun_masuk`, `tahun_keluar`, `created_at`, `updated_at`) VALUES
(1, 'SMK Negeri 10 Jakarta', 'Jakarta Timur, DKI Jakarta', 2021, 2024, '2024-07-25 16:23:24', '2024-07-26 00:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `posisi_jabatan` varchar(150) NOT NULL,
  `nama_perusahaan` varchar(150) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `keterangan_satu` text NOT NULL,
  `keterangan_dua` text NOT NULL,
  `keterangan_tiga` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `posisi_jabatan`, `nama_perusahaan`, `tahun_masuk`, `keterangan_satu`, `keterangan_dua`, `keterangan_tiga`, `created_at`, `updated_at`) VALUES
(1, 'Website Developer Intern', 'BPTI UHAMKA', 2023, 'Menjadi Tim Cyber BPTI UHAMKA', 'Merancang Website Media Pembelajaran', 'Membuat MockUp E-commerce', '2024-07-25 17:37:44', '2024-07-26 01:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `keterampilan`
--

CREATE TABLE `keterampilan` (
  `id` int(11) NOT NULL,
  `keterampilan` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `dsc` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `dsc`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Fadiyah Irbati', 'Saya Fadiyah Irbati, lulusan SMK Rekayasa Perangkat Lunak. Berfokus pada pengembangan aplikasi web yang efektif dan inovatif. Saya selalu mencari peluang untuk belajar dan berkembang dalam teknologi terbaru.\r\n\r\n', '', '2024-07-25 12:56:11', '2024-07-25 14:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nama_project` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `nama_project`, `description`, `foto`, `created_at`, `updated_at`) VALUES
(6, 'Piano', 'Ini Piano', 'Screenshot 2024-07-26 114257.png', '2024-07-26 02:35:40', '2024-07-26 04:43:08'),
(7, 'Media Pembelajaran', 'StoryLearn Web', 'Screenshot 2024-07-26 114202.png', '2024-07-26 03:15:59', '2024-07-26 04:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `ig` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `email`, `no_telp`, `alamat`, `ig`, `fb`, `linkedin`, `created_at`, `updated_at`) VALUES
(2, 'shop@gmail.com', '0811123456', 'Jalan Anggrek 2', 'https://github.com/fadiyau', 'https://github.com/fadiyaui', 'https://github.com/fadiyau', '2024-07-18 02:06:01', '2024-07-24 16:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skill_satu` text NOT NULL,
  `skill_dua` text NOT NULL,
  `skill_tiga` text NOT NULL,
  `skill_empat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skill_satu`, `skill_dua`, `skill_tiga`, `skill_empat`, `created_at`, `updated_at`) VALUES
(4, 'PHP', 'JavaScript', 'Laravel', 'MySQL', '2024-07-25 17:24:15', '2024-07-26 02:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '58ea1b9903cde4f1fce0c96c36943db72a2dafca', '2024-07-24 15:55:18', '2024-07-25 12:32:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterampilan`
--
ALTER TABLE `keterampilan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keterampilan`
--
ALTER TABLE `keterampilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
