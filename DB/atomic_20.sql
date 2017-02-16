SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atomic_20`
--
CREATE DATABASE IF NOT EXISTS `trainer_atomic_project_b45` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trainer_atomic_project_b45`;

-- --------------------------------------------------------

--
-- Table structure for table `book_title`
--

CREATE TABLE IF NOT EXISTS `book_title` (
`id` int(11) NOT NULL,
  `book_name` varchar(111) NOT NULL,
  `author_name` varchar(111) NOT NULL,
  `soft_deleted` varchar(11) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_title`
--

INSERT INTO `book_title` (`id`, `book_name`, `author_name`, `soft_deleted`) VALUES
(1, 'Himu', 'Humayun Ahmed', 'Yes'),
(3, 'fdssf', 'fdgfdh fh ht', 'No'),
(4, 'fdssf', 'fdgfdh fh ht', 'No'),
(5, 'gfhfh', 'fghfdh', 'No'),
(6, 'dsfdgdg', 'fdgdg', 'Yes'),
(7, 'fdzdsf g', 'dgf dg dr t', 'No'),
(8, 'fdzdsf g', 'dgf dg dr t', 'No'),
(9, 'sfd s', 'sdf ser ', 'No'),
(10, 'sfd s', 's gdh try', 'No'),
(11, 'dfssf', 'sfd sf', 'Yes'),
(12, 'dfssf', 'sfd sf', 'No'),
(13, 'fb', 'xcgf', 'No'),
(14, 'dfgfdhg ', 'dfg fjht yu', 'No'),
(15, 'dfgfdhg ', 'dfg fjht yu', 'No'),
(16, 'Himu', 'Humayun Ahmed', 'No'),
(17, 'Himu', 'Humayun Ahmed', 'No'),
(18, 'Himu', 'Humayun Ahmed', 'No'),
(19, 'Himu', 'Humayun Ahmed', 'No'),
(20, 'dsfsf', 'sdfsf', 'No'),
(21, 'fdgdgfdg', '36543325', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_title`
--
ALTER TABLE `book_title`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_title`
--
ALTER TABLE `book_title`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
