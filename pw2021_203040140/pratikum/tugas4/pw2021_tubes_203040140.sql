-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 09:28 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2021_tubes_203040140`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment_ml`
--

CREATE TABLE `equipment_ml` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `nama_equipment` varchar(100) NOT NULL,
  `tipe_equipment` varchar(100) NOT NULL,
  `penjelasan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_ml`
--

INSERT INTO `equipment_ml` (`id`, `picture`, `nama_equipment`, `tipe_equipment`, `penjelasan`, `harga`) VALUES
(1, '1.png', 'Blade of Despair', 'Physical Attack', 'Menambahkan 160 Physical Attack dan 5% Movement Speed', '3010 Gold'),
(2, '2.jpg', 'Haas\'s Claws', 'Physical Lifesteal', 'Menambahkan 70 Physical Attack, menambahkan 20% Physical Lifesteal.', '1810 Gold'),
(3, '3.jpg', 'Necklace of Durance', 'Healing Reduction', 'Menambahkan 60 Magic Power dan5% Cooldown Reduction', '2010 Gold'),
(4, '4.jpg', 'Blood Wings', 'High Damage Magic', 'Menambahkan 150 Magic Power,500 HP, dan meningkatkan 1.5 HP untuk setiap peningkatan Magic Power', '3000 Gold'),
(5, '5.jpg', 'Blade Armor', 'Counter Attack', 'Menambahkan 90 Physical Defense, dan memberikan 25% dari Physical Attack lawan sebagai Physical Dama', '1660 Gold'),
(6, '6.jpg', 'Athena\'s Shield', 'Resist Magic Damage', 'Menambahkan 900 HP, 62 Magical Defense, 4 HP regen dan Mengurangi Magic damage yang diterima sebesar', '2150 Gold'),
(7, '7.jpg', 'Queen\'s Wings', 'Damage Reduction', 'Menambahkan 25 Physical Attack, 900 HP, 10% Cooldown Reduction dan mengurangi damage yang diterima s', '2250 GOLD'),
(8, '8.jpg', 'Immortality', 'Resurect', 'Dapat hidup kembali setelah tereliminasi dan memperoleh 15% HP dan shield.', '2120 Gold'),
(9, '9.jpg', 'Winter Truncheon', 'Invicible secara singkat', 'Menyebabkan efek freeze ketika digunakan, immune terhadap seluruh damage dan berlangsung selama 2 de', '1910 Gold'),
(10, '10.jpg', 'Winter of Nature', 'Immune terhadap Physical attack', 'Immune terhadap seluruh  Physical Damage, berlangsung selama 2 detik', '1910 Gold  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment_ml`
--
ALTER TABLE `equipment_ml`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment_ml`
--
ALTER TABLE `equipment_ml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
