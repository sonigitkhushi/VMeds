

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `admintb` (`username`, `password`) VALUES
('khushi', 'khushi123');




CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(12, 14, 'Jagdish', 'Kumar', 'Male', 'jagdish@gmail.com', '7412225680', 'Anjali', 0, '2021-07-06', '10:00:00', 1, 1),
(1, 15, 'Sana', 'Haider', 'Female', 'sana@gmail.com', '7410000010', 'Anjali', 0, '2021-07-05', '14:00:00', 0, 1),
(1, 16, 'Manan', 'Gupta', 'Male', 'manan@gmail.com', '7410000010', 'Anjali', 0, '2021-07-05', '10:00:00', 1, 1),
(11, 17, 'Arundhati', 'Nair', 'Female', 'arundhati@gmail.com', '7850002580', 'Anjali', 0, '2021-07-05', '10:00:00', 1, 1),
(13, 18, 'Neena', 'Warghese', 'Female', 'neena@gmail.com', '7012569999', 'Anjali', 0, '2021-07-06', '08:00:00', 1, 1);



CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Demo', 'demo@demail.com', '7014500000', 'this is a demo test');



CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `doctb` (`username`, `password`, `doctorname`, `email`, `spec`, `docFees`) VALUES

('Anjali', 'password', 'Anjali', 'anjali@gmail.com', 'Doctor', 0),
('Suchi', 'password', 'Suchi', 'suchi@gmail.com', 'Nurse', 0);



CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Jagdish', 'kumar', 'Male', 'jagdish@gmail.com', '7410000010', 'pass', 'pass'),
(2, 'Sana', 'Haider', 'Female', 'sana@gmail.com', '7896541222', 'pass', 'pass'),
(3, 'Manan', 'Gupta', 'Male', 'manan@gmail.com', '7014744444', 'pass', 'pass'),
(4, 'Ritika', 'Sah', 'Female', 'ritika@gmail.com', '7023696969', 'pass', 'pass'),
(5, 'Ram', '', 'Singh', 'ram@gmail.com', '7897895500', 'pass', 'pass'),
(6, 'Johny', 'Gupta', 'Male', 'johnny@gmail.com', '7530001250', 'pass', 'pass'),
(7, 'Eliza', 'Nigam', 'Female', 'eliza@gmail.com', '7850001250', 'pass', 'pass'),
(8, 'David', 'Gupta', 'Male', 'david@gmail.com', '7301450000', 'pass', 'pass'),
(9, 'Riya', 'Singh', 'Feale', 'riya@gmail.com', '7026969500', 'pass', 'pass'),
(10, 'Siya', 'Nigam', 'Feale', 'siya@gmail.com', '7900145300', 'pass', 'pass'),
(11, 'Komal', 'Sah', 'Female', 'komal@gmail.com', '7850002580', 'pass', 'pass'),
(12, 'Kritika', 'tiwari', 'Female', 'kritika@gmail.com', '7412225680', 'password', 'password'),
(13, 'Anushka', 'Sah', 'Feale', 'anushka@gmail.com', '7012569999', 'password', 'password');


CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Anjali', 12, 14, 'Riya', 'Singh', '2021-07-06', '10:00:00', 'Congenital heart disease', 'rhinoconjunctivitis', 'trandolapril (Mavik)'),
('Anjali', 1, 16, 'Siya', 'Nigam', '2021-07-05', '10:00:00', 'Tuberculosis', 'lumpy rash on the legs - or lupus vulgaris which gives lumps or ulcers', 'Isoniazid, Ethambutol (Myambutol), Linezolid (Zyvox)'),
('Anjali', 11, 17, 'Komal', 'Sah', '2021-07-05', '10:00:00', 'Ovarian cysts', '00000000', 'Narcotic analgesics and nonsteroidal anti-inflammatory drugs'),
('Anjali', 13, 18, 'Sana', 'Haider', '2021-07-06', '08:00:00', 'Cerebral Aneurysm', '0000000', 'Nimodipine - empty stomach, at least 1 hour before a meal or 2 hours after a meal');


ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);


ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

