Database: ticket




CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  
	`password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;






INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');



CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  
	`lname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  
	`bus` varchar(30) NOT NULL,
  `transactionum` varchar(10) NOT NULL,
  `payable` varchar(11) NOT NULL,
  
	`status` varchar(100) NOT NULL,
  `setnumber` varchar(100) NOT NULL,
  
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;




INSERT INTO `customer` (`id`, `fname`, `lname`, `contact`, `address`, `bus`, `transactionum`, `payable`, `status`, `setnumber`) 
	VALUES
  (2, 'j', 'kjk', 'kjkj', 'kjk', '1', 'kd77mzfy', '400', 'Onboard', ''),

		(3, 'p', 'p', 'p', 'p', '1', 'nidsyeyg', '400', 'Not Void', ''),

		(4, 'k', 'k', 'k', 'k', '1', 'v53zohwk', '400', '', ''),

		(5, 'k', 'k', 'k', 'k', '1', 's4xf7qkq', '400', '', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),

		(6, 'k', 'k', 'k', 'k', '1', 'fhk7qarc', '1600', '', '1, 2, 3, 4, ');




CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(11) NOT NULL,
  
	`bus` varchar(11) NOT NULL,
  `seat_reserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  
	`seat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;




INSERT INTO `reserve` (`id`, `date`, `bus`, `seat_reserve`, `transactionnum`, `seat`) 
	VALUES
  (1, '2013-01-01', '1', '1', 'o8ey8p40', '1'),

		(2, '2013-01-13', '1', '1', 'kd77mzfy', '1'),

		(3, '2013-01-15', '1', '5', 'nidsyeyg', '1'),

		(4, '2013-01-17', '1', '4', 'v53zohwk', '1'),

		(5, '2013-01-16', '1', '9', 's4xf7qkq', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),

		(6, '2013-01-21', '1', '4', 'fhk7qarc', '1, 2, 3, 4, ');





CREATE TABLE IF NOT EXISTS `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(300) NOT NULL,
  
	`price` varchar(30) NOT NULL,
  `numseats` int(30) NOT NULL,
  `type` varchar(300) NOT NULL,
  
	`time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;





INSERT INTO `route` (`id`, `route`, `price`, `numseats`, `type`, `time`) 
	VALUES  
(1, 'Ilocos - Manila', '400', 5, 'Deluxe', '10:30'),

		(3, 'Manila Ilocos', '400', 50, 'Air Con', '12:30');


