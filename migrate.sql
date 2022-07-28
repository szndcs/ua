CREATE DATABASE IF NOT EXISTS `test`;
USE `test`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

INSERT INTO `users` (`id`, `name`) VALUES
    (1, 'Ferkó'),
    (2, 'Évi'),
    (3, 'Kata'),
    (4, 'Gézu');

CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT '0',
  `title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
    (1, 1, 'This is advertisement one'),
    (2, 2, 'Guess it, another advertisement'),
    (3, 3, 'Romeo and Juliet'),
    (4, 1, 'Let\'s create a simple PHP app'),
    (5, 4, 'The new iPhone 40');
