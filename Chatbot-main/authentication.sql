

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `user info table`
--

CREATE TABLE `userinfotable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isBlocked` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for table `user info table`
--
ALTER TABLE `userinfotable`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `userinfotable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
