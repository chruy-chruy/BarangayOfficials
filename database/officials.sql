-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 09:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officials`
--

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(11) NOT NULL,
  `off_position` varchar(255) NOT NULL,
  `off_name` varchar(255) NOT NULL,
  `off_contact` varchar(255) NOT NULL,
  `off_address` varchar(255) NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `off_position`, `off_name`, `off_contact`, `off_address`, `termStart`, `termEnd`, `img_url`) VALUES
(6, 'Barangay Kagawad', 'GENESAN A. SAULON', '1231232131', 'uhaw', '2021-04-01', '2021-04-28', '1619160887810_seunggi.jpg'),
(7, 'Barangay Kagawad', 'RAFAEL D. BALAGTAS', '12321', 'uhaw', '2021-04-15', '2021-04-29', '1619160903452_yjg.jpg'),
(10, 'Barangay Secretary', 'GRACE B. ALFANTA', '12321', 'uhaw', '2021-04-16', '2021-04-29', '1619160979926_suzy.jpg'),
(12, 'Barangay Kagawad', 'RODOLFO O. PASCUAL JR.', '010', 'asdkfjk', '2021-04-14', '2021-04-22', '1619160919188_eunwoo.jpg'),
(13, 'Barangay Treasurer', 'JEROME JORDAN', 'poiuyt', 'mnbvcxz', '2021-04-14', '2021-04-15', '1619160996486_doyeon.jpg'),
(14, 'Barangay Kagawad', 'Troy Michael Garidos', 'bsthb', 'ntr', '2021-04-16', '2021-04-30', '1624620480429_seunggi.jpg'),
(15, 'Barangay Kagawad', 'ARNALDO A. ESPAÃ‘OLA', 'hsg', 'sh', '2021-04-17', '2021-05-01', '1619160946993_mooyeol.jpg'),
(16, 'Barangay Kagawad', 'IRVIN L. BALIGASA', '789', 'sbt', '2021-04-03', '2021-05-08', '1619160964081_kim-soo-hyun.jpg'),
(17, 'SK Chairperson', 'REA PAULA P. DOMINGUEZ', 'fmth', 'mf', '2021-04-07', '2021-05-06', '1618834743986_yoojung.jpg'),
(18, 'Barangay Kagawad', 'ANDREA SHANENIAH M. MEJIA', 'olb', 'hoi', '2021-04-03', '2021-04-09', '1619161009478_iu.jpg'),
(64, 'Barangay Captain', 'Reniel A. Ganato ', '09269883740', 'Fatima', '2021-06-25', '2022-06-25', '1624629699843_mooyeol.jpg'),
(67, 'Barangay Kagawad', 'Troy Michael Garidos ', '09269883740', 'Fatima', '2021-06-26', '2022-06-26', '1624647704518_aada989c8caadbde87cdce7b7bc53dbd.jpg'),
(68, 'Barangay Kagawad', 'Troy Michael Garidos ', '09269883740', 'Fatima', '2021-06-26', '2021-06-21', 'image/default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
