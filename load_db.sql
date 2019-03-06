CREATE TABLE `acesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `authKey` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;


INSERT INTO `testes`.`acesso`
	(`id`,
	`firstName`,
	`lastName`,
	`username`,
	`password`,
	`authKey`)
VALUES
	(2,
	'john',
	'marshal',
	'john.marshal',
	123,
	'123a'
	);
