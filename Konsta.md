Admin login

Admin panel

Newsletter




Table for newsletter subscribers:

CREATE TABLE `konsta_subscribers` (
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `city_name` varchar(55) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `konsta_subscribers`
--

INSERT INTO `konsta_subscribers` (`first_name`, `last_name`, `city_name`, `email`) VALUES
('test', 'test', 'test', 'test@gmail.com');
COMMIT;