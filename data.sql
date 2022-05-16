CREATE database 'thuchanh'

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) NOT NULL,
  `sdt` int(11) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `sdt`, `feedback`, `date`, `status`) VALUES
(1, 'Trường Sơn', 'soi30082000@gmail.com', 587234423, 'hay', '2022-05-16', 0),
(2, 'Trường Sơn', 'soi30082000@gmail.com', 587234423, 'hihhi', '0000-00-00', 0),
(3, 'Trường Sơn', 'soi30082000@gmail.com', 587234423, 'fdgsdfg', '2022-05-16', 0),
(4, 'Trường Sơn', 'soi30082000@gmail.com', 587234423, 'èasdfsad', '2022-05-16', 0),
(5, 'Trường Sơn', 'soi30082000@gmail.com', 123123, 'hay quá', '2022-05-16', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;