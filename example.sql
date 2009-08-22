CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Test user', 'test@user.com', 'test', 'testpw'),
(2, 'Crud Test', 'crud@crud.com', 'crud', 'passw');