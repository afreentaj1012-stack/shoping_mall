-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 08:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping_mall`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(400) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `contact_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_name`, `customer_address`, `pincode`, `city`, `email_id`, `contact_no`) VALUES
(1, 'Santosh k', 'Jayanagar 3rd cross', 586101, 'Bijapura', 'san@gmail.com', 6361736049);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `cust_order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_payments`
--

CREATE TABLE `customer_payments` (
  `cust_pay_id` int(11) NOT NULL,
  `cust_order_id` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `tranc_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(60) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `date_of_joining` date NOT NULL,
  `basic_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `employee_name`, `designation`, `date_of_birth`, `gender`, `qualification`, `date_of_joining`, `basic_salary`) VALUES
(1, 'Sahana', 'employee', '1999-05-20', 'female', 'puc', '2022-06-08', 15000),
(2, 'vishnu K', 'employee', '1998-11-11', 'male', 'ITI', '2021-05-11', 20000),
(3, 'Rani L', 'employee', '1997-07-06', 'female', 'SSLC', '2000-06-23', 14000),
(4, 'Shantinath k', 'employee', '2001-05-06', 'male', '2nd PUC', '2017-07-20', 21000),
(5, 'Amar  N', 'employee', '1995-06-05', 'male', 'Diploma', '2017-07-02', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_details`
--

CREATE TABLE `employee_salary_details` (
  `employee_salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `da_ta` float NOT NULL,
  `pf` float NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(20) NOT NULL,
  `given_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salary_details`
--

INSERT INTO `employee_salary_details` (`employee_salary_id`, `employee_id`, `da_ta`, `pf`, `year`, `month`, `given_date`) VALUES
(1, 1, 200, 200, 2022, 'July', '2022-07-14'),
(2, 2, 150, 400, 2022, 'May', '2022-06-05'),
(3, 3, 120, 200, 2022, 'August', '2022-08-18'),
(4, 4, 500, 300, 2022, 'May', '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `security_que` varchar(100) NOT NULL,
  `security_ans` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `password`, `type`, `security_que`, `security_ans`, `status`) VALUES
(1, 'admin', '123456', 'admin', 'Enter Your Contact No', '6361736049', 'Active'),
(6, 'san@gmail.com', '123123', 'customer', 'Enter Your Contact No', '8970403943', 'Actie');

-- --------------------------------------------------------

--
-- Table structure for table `product_catalog`
--

CREATE TABLE `product_catalog` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(400) NOT NULL,
  `product_rate` int(11) NOT NULL,
  `product_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE `vendor_details` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(60) NOT NULL,
  `vendor_city` varchar(100) NOT NULL,
  `vendor_address` varchar(200) NOT NULL,
  `vendor_contact_no` bigint(20) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`vendor_id`, `vendor_name`, `vendor_city`, `vendor_address`, `vendor_contact_no`, `email_id`) VALUES
(1, 'Aaman M', 'Kolkata', 'Tollygunge 3rd cross', 9045600023, 'Aamanm@gmail.com'),
(2, 'Aadil Shah', 'Mumbai', 'Bandra main road near kurla complex', 6547890035, 'shahaadil7@gmail.com'),
(3, 'V Adavik', 'Delhi', 'Rajendar nagar near SBI atm', 6300256780, 'advikdelhi345@gamil.com'),
(4, 'Aarushi', 'Bengaluru', 'Hebbala main road 4th cross', 9632574414, 'aarushij3@gmail.com'),
(5, 'James Fernandez', 'Mumbai', 'Kurla ,Netaji colony', 6362570035, 'fjames06@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

CREATE TABLE `vendor_payments` (
  `vendor_payment_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `payment_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `mode_of_payment` varchar(20) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `cheque_dd_no` varchar(60) NOT NULL,
  `given_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_supply_details`
--

CREATE TABLE `vendor_supply_details` (
  `vendor_supply_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase_rate` int(11) NOT NULL,
  `supply_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`cust_order_id`);

--
-- Indexes for table `customer_payments`
--
ALTER TABLE `customer_payments`
  ADD PRIMARY KEY (`cust_pay_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_salary_details`
--
ALTER TABLE `employee_salary_details`
  ADD PRIMARY KEY (`employee_salary_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product_catalog`
--
ALTER TABLE `product_catalog`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `vendor_details`
--
ALTER TABLE `vendor_details`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  ADD PRIMARY KEY (`vendor_payment_id`);

--
-- Indexes for table `vendor_supply_details`
--
ALTER TABLE `vendor_supply_details`
  ADD PRIMARY KEY (`vendor_supply_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `cust_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_payments`
--
ALTER TABLE `customer_payments`
  MODIFY `cust_pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_salary_details`
--
ALTER TABLE `employee_salary_details`
  MODIFY `employee_salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_catalog`
--
ALTER TABLE `product_catalog`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_details`
--
ALTER TABLE `vendor_details`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  MODIFY `vendor_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_supply_details`
--
ALTER TABLE `vendor_supply_details`
  MODIFY `vendor_supply_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
