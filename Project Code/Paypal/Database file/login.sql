-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 05:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(12, 'admin', '$2y$10$hFU/xzQo9gJdp35tazv8W.4A.7.Q63cN5uAfoxH/IlM7geeLHGAhW'),
(17, 'Sumitvani002', '$2y$10$0JDaZgTcLvGuxR6xyDGms.EKHDzIyT/fk5zf.vHRGpfEEjRQZ4MRW');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `City` text NOT NULL,
  `States` text NOT NULL,
  `ZIP` int(11) NOT NULL,
  `Documents` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `name`, `start_date`, `description`, `goal`, `picture`, `City`, `States`, `ZIP`, `Documents`) VALUES
(31, 'Disaster Relief Fund', '2023-02-17 18:23:34', 'A disaster relief fund is a fund that is set up to provide support and assistance to people affected by natural disasters such as hurricanes, earthquakes, and floods. The funds are used to provide shelter, food, medical care, and other necessary supplies ', '25,00,000', 'fund1.png', 'Indore', 'Madhya Pradesh', 452001, 'doc_fund1.png'),
(32, 'Education Support Fund', '2023-02-17 18:35:24', 'An education fund is a fund that is set up to support education initiatives such as scholarships, after-school programs, and educational resources. The funds can be used to help students who cannot afford to pay for their education or to support initiativ', '50,00,000', 'fund2.png', 'Ahmedabad', 'Gujarat', 382120, 'doc_fund2.png'),
(33, 'Medical Support Fund', '2023-02-17 18:40:42', 'A medical fund is a fund that is set up to help cover the costs of medical expenses for individuals who do not have health insurance or who are underinsured. The funds can be used to cover the cost of medical treatments, surgeries, and medications.', '80,00,000', 'fund3.png', 'Mumbai', 'Maharashtra', 400029, 'doc_fund3.png'),
(34, 'Community Development Fund', '2023-02-17 18:44:53', 'A community development fund is a fund that is set up to support community development initiatives such as affordable housing, small business development, and job training programs. The funds are used to support projects that help to build stronger, more ', '15,00,000', 'fund4.png', 'Lucknow', 'Uttar Pradesh', 226001, 'doc_fund4.png'),
(35, 'Environmental Fund', '2023-02-17 18:55:05', 'An environmental fund is used to support initiatives that aim to protect the environment and promote sustainability. This may include funding for clean energy projects, conservation efforts, or research to combat climate change. These funds can help to pr', '10,00,000', 'fund5.png', 'Delhi', 'Delhi', 110020, 'doc_fund5.png');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `campaign` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `donated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `username`, `campaign`, `email`, `phone`, `amount`, `proof`, `donated_at`) VALUES
(1, '', 'Cancer', '', '', '20000', '', '2023-02-14 11:15:01'),
(11, 'Sumit Vani', 'PU', 'Pu@gmail.com', '9589249171', '10', '', '2023-02-14 13:33:27'),
(12, 'Satya', 'Cancer', 'Sumitvani002@gmail.com', '9589249171', '50', '', '2023-02-14 13:37:12'),
(21, 'asf', 'as', 'Sumitvani002@gmail.com', '9589249171', '3', '', '2023-02-17 11:21:29'),
(22, 'Sumitvani002', 'Cancer', 'Sumitvani002@gmail.com', '9589249171', '50', '', '2023-02-17 11:34:20'),
(23, 'Satyam Mehta', 'Rojgar', 'Satya12@gmail.com', '9589249171', '50', '', '2023-02-17 11:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `donations_proof`
--

CREATE TABLE `donations_proof` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `campaign` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `uploaded_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations_proof`
--

INSERT INTO `donations_proof` (`id`, `name`, `email`, `campaign`, `amount`, `picture`, `uploaded_at`) VALUES
(13, 'Satyam Barnwal', 'Satya12@gmail.com', 'Education Support Fund', '150', 'ss.png', '2023-02-17 19:19:50'),
(14, 'Acharya Dubey', 'Dubey12@gmail.com', 'Community Development Fund', '100', 'sss.png', '2023-02-17 19:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(7, 'Sumitvani002', '$2y$10$ChJF9DAl4nLbvH9ciMovCOpqqPNhtjV9POIVzFAjRgrj/f3W3PeUy', '2023-02-17 18:04:31'),
(8, 'Satyam12', '$2y$10$C.D2K9AD7yaQ.KD.TeAkne4vpP8JY/4b1yBrK/EbGLT/7kpxXOVNG', '2023-02-17 18:05:35'),
(9, 'Pratham22', '$2y$10$Y6iVuboucJL/4GlmOWgGPe/Z.fA6U..TijMyWai/HqWJsPMprI0SS', '2023-02-17 18:07:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations_proof`
--
ALTER TABLE `donations_proof`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `donations_proof`
--
ALTER TABLE `donations_proof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
