CREATE TABLE IF NOT EXISTS `#__miniquiz_question` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL DEFAULT '1',
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`name` VARCHAR(255)  NOT NULL ,
`varianta` VARCHAR(255)  NOT NULL ,
`variantb` VARCHAR(255)  NOT NULL ,
`variantc` VARCHAR(255)  NOT NULL ,
`variantd` VARCHAR(255)  NOT NULL ,
`varianta_count` int(11) DEFAULT '0',
`variantb_count` int(11) DEFAULT '0',
`variantc_count` int(11) DEFAULT '0',
`variantd_count` int(11) DEFAULT '0',
`value` CHAR(1)  NOT NULL DEFAULT 'A',
`imagedesc` VARCHAR(255)  NOT NULL DEFAULT '',
`imageurl` VARCHAR(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;

