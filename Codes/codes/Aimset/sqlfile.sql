

CREATE TABLE IF NOT EXISTS `aimset` (
`id`int (20) NOT NULL AUTO_INCREMENT,
`ami_name` VARCHAR (100) NOT NULL,
`ff_timestamp` LONGTEXT,
`Date_from` Date,
`Date_to` Date,
`remarks_aim` LONGTEXT,
`self_percentage` int (20) NOT NULL,
`current_status` VARCHAR (100) NOT NULL,
`post_owner` VARCHAR (100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4 COLLATE utf8mb4_general_ci AUTO_INCREMENT=1 ;
