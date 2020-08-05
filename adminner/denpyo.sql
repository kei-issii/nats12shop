CREATE TABLE `denpyo` (
  `denpyo_id` int(11) NOT NULL AUTO_INCREMENT,
  `tokui_id` int(11) NOT NULL,
  `juchu_bi` date NOT NULL,
  PRIMARY KEY (`denpyo_id`),
  KEY `tokui_id` (`tokui_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `shohin` (
  `shohin_id` int(11) NOT NULL AUTO_INCREMENT,
  `shohin_mei` varchar(100) NOT NULL,
  `tanka` decimal(10,0) NOT NULL,
  PRIMARY KEY (`shohin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `shosai` (
  `denpyo_id` int(11) NOT NULL,
  `shohin_id` VARCHAR(64) NOT NULL,
  `suryo` int(11) NOT NULL,
  PRIMARY KEY (`denpyo_id`,`shohin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `tokui` (
  `tokui_id` int(11) NOT NULL AUTO_INCREMENT,
  `tokui_mei` varchar(50) NOT NULL,
  `jusho` varchar(100) NOT NULL,
  PRIMARY KEY (`tokui_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
