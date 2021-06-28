

CREATE TABLE IF NOT EXISTS `finance_received` (
`id`int (20) NOT NULL AUTO_INCREMENT,
`ff_timestamp` LONGTEXT,
`receive_date` Date,
`amount_received` Decimal (10,2) NOT NULL,
`mode_receive` VARCHAR (100) NOT NULL,
`Planned_for` LONGTEXT,
`remarks` LONGTEXT,
`post_owner` VARCHAR (100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4 COLLATE utf8mb4_general_ci AUTO_INCREMENT=1 ;
