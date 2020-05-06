
CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `su` int(11) DEFAULT '0',
  `u_email` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `u_bday` date NOT NULL,
  `u_position` varchar(100) NOT NULL,
  `u_type` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_mobile` varchar(100) NOT NULL,
  `u_gender` varchar(30) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `s_question` varchar(100) DEFAULT NULL,
  `s_ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data into table `users`

INSERT INTO `users` (`u_id`, `su`, `u_email`, `f_name`, `l_name`, `u_bday`, `u_position`, `u_type`, `u_pass`, `u_mobile`, `u_gender`, `u_address`, `s_question`, `s_ans`) VALUES
(9, 1, 'employee@employee.com', 'Mr', 'Employee', '2019-11-30', 'General Employee', 'Employee', 'fa5473530e4d1a5a1e1eb53d2fedb10c', '00202', 'Male', 'kkasd', NULL, NULL),
(10, 1, 'admin@admin.com', 'Mr', 'Admin', '2019-11-30', 'Demo Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', '00202', 'Male', 'kkasd', NULL, NULL);

-- Indexes for table `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`u_email`);

-- AUTO_INCREMENT for table `users`

ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `cf_name` varchar(100) NOT NULL,
  `cl_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `w_start` date NOT NULL,
  `w_end` date NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `invoice_id` varchar(100) DEFAULT NULL,
  `c_address` varchar(400) DEFAULT NULL,
  `c_pass` varchar(30) NOT NULL,
  `extra` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data into table `customer`

INSERT INTO `customer` (`c_id`, `v_id`, `cf_name`, `cl_name`, `c_email`, `c_mobile`, `nid`, `w_start`, `w_end`, `payment_type`, `invoice_id`, `c_address`, `c_pass`, `extra`) VALUES
(1, 2, 'asd', 'asd', 'ad', 'asd', 'asd', '2017-01-05', '2020-01-24', '', NULL, NULL, '', NULL),
(2, 1, 'asd', 'asd', 'ad', 'asd', 'asd', '2017-01-05', '2020-01-24', '', NULL, NULL, '', NULL);

-- Indexes for table `customer`

ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `v_id_2` (`v_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`),
  ADD KEY `v_id` (`v_id`),
  ADD KEY `c_id_2` (`c_id`);
  
  -- AUTO_INCREMENT for table `customer`

ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

  -- Table structure for table `vehicle`

CREATE TABLE `vehicle` (
  `v_id` int(11) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `b_price` double NOT NULL,
  `s_price` double DEFAULT NULL,
  `mileage` double NOT NULL,
  `add_date` date NOT NULL,
  `sold_date` date DEFAULT NULL,
  `status` varchar(40) NOT NULL,
  `registration_year` int(11) NOT NULL,
  `insurance_id` int(11) DEFAULT NULL,
  `gear` varchar(100) NOT NULL,
  `doors` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `tank` float NOT NULL,
  `image` varchar(400) DEFAULT NULL,
  `e_no` varchar(40) NOT NULL,
  `c_no` varchar(40) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `v_color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data into table `vehicle`

INSERT INTO `vehicle` (`v_id`, `manufacturer_name`, `model_name`, `category`, `b_price`, `s_price`, `mileage`, `add_date`, `sold_date`, `status`, `registration_year`, `insurance_id`, `gear`, `doors`, `seats`, `tank`, `image`, `e_no`, `c_no`, `u_id`, `v_color`) VALUES
(1, 'LambourGini', 'JXER', 'asdasd', 2000, 2000, 200, '2016-12-08', NULL, 'Available', 2001, 121212, 'Auto', 0, 0, 0, NULL, '', '', NULL, NULL),
(2, 'LambourGini', 'JXER', 'asdasd', 2000, 2000, 200, '2016-12-08', NULL, 'Available', 2001, 121212, 'Auto', 10, 10, 10, NULL, '10', '10', NULL, NULL);

-- Indexes for table `vehicle`

ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `manufacturer_name` (`manufacturer_name`),
  ADD KEY `model_name` (`model_name`),
  ADD KEY `c_no` (`c_no`),
  ADD KEY `u_id` (`u_id`);

-- AUTO_INCREMENT for table `vehicle`

ALTER TABLE `vehicle`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

-- Table structure for table `manufacturer`

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_logo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data into table `manufacturer`

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_logo`) VALUES
(30, 'BMW', NULL),
(32, 'LambourGini', NULL),
(33, 'Newww', NULL);

-- Indexes for table `manufacturer`

ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`),
  ADD UNIQUE KEY `manufacturer_name` (`manufacturer_name`),
  ADD KEY `manufacturer_name_2` (`manufacturer_name`);

-- AUTO_INCREMENT for table `manufacturer`

ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

-- Table structure for table `model`

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data into table `model`

INSERT INTO `model` (`model_id`, `model_name`, `manufacturer_name`) VALUES
(27, 'JXER', 'BMW'),
(28, 'FF23', 'LambourGini');

-- Indexes for table `model`

ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`),
  ADD UNIQUE KEY `model_name` (`model_name`),
  ADD KEY `manufacturer_name` (`manufacturer_name`);

-- AUTO_INCREMENT for table `model`

ALTER TABLE `model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

-- Constraints for table `model`

ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`manufacturer_name`) REFERENCES `manufacturer` (`manufacturer_name`) ON DELETE CASCADE;
