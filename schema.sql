# Dump table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `salt` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admins` WRITE;

-- senha admin123
INSERT INTO `admins` (`id`, `name`, `email`, `password`, `salt`)
VALUES
	(1,'admin','admin@exemple.com','IhCswJy3kCYXI','Ih5rD9qRphgnld78TC8wsQ==');