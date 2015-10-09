# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.44)
# Database: cardano
# Generation Time: 2015-10-09 12:47:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` char(10) DEFAULT NULL,
  `agent_id` char(10) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `password` char(128) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  `name_kana` char(30) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `mobile_phone` char(20) DEFAULT NULL,
  `fax` char(20) DEFAULT NULL,
  `sex` char(5) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `yuubinbango` char(7) DEFAULT NULL,
  `todoufuken` char(15) DEFAULT NULL,
  `shikuchouson` char(30) DEFAULT NULL,
  `banchi` char(30) DEFAULT NULL,
  `tatemonona` char(30) DEFAULT NULL,
  `bank_account` char(15) DEFAULT NULL,
  `bank_name` char(30) DEFAULT NULL,
  `ripple_address` char(30) DEFAULT NULL,
  `bitcoin_address` char(30) DEFAULT NULL,
  `emp_name` char(30) DEFAULT NULL,
  `emp_name_kana` char(30) DEFAULT NULL,
  `emp_position` char(30) DEFAULT NULL,
  `emp_phone` char(20) DEFAULT NULL,
  `emp_fax` char(20) DEFAULT NULL,
  `emp_yuubinbango` char(7) DEFAULT NULL,
  `emp_todoufuken` char(15) DEFAULT NULL,
  `emp_shikuchouson` char(20) DEFAULT NULL,
  `emp_banchi` char(30) DEFAULT NULL,
  `emp_tatemonona` char(30) DEFAULT NULL,
  `remember_token` char(120) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `customer_id`, `agent_id`, `email`, `password`, `name`, `name_kana`, `phone`, `mobile_phone`, `fax`, `sex`, `birth_date`, `yuubinbango`, `todoufuken`, `shikuchouson`, `banchi`, `tatemonona`, `bank_account`, `bank_name`, `ripple_address`, `bitcoin_address`, `emp_name`, `emp_name_kana`, `emp_position`, `emp_phone`, `emp_fax`, `emp_yuubinbango`, `emp_todoufuken`, `emp_shikuchouson`, `emp_banchi`, `emp_tatemonona`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,NULL,NULL,'fuwafuwa@yahoo.co.jp','$2y$10$GJGQ/eDb6F1AX4ImxAuMFeN6TGczonk1kU8zq4QaXl0/VpJU1UBbC','ふわふわ','フワフワ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'自分',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
