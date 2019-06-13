# Dump table tb_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `salt` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tb_admin` WRITE;

INSERT INTO `tb_admin` (`id`, `name`, `email`, `password`, `salt`)
VALUES
	(1,'administrator','admin@exemple.com','admin123','zBVFqtcUCOqvcFRFsjp7Yg==');