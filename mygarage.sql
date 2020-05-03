
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