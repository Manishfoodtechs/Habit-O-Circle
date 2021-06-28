

CREATE TABLE IF NOT EXISTS `habbit` (
`id`int (20) NOT NULL AUTO_INCREMENT,
`habbit_timestamp` LONGTEXT,
`control_start_date` Date,
`control_end_date` Date,
`status_date` Date,
`self_progress` int (20) NOT NULL,
`remarks_habbit` LONGTEXT,
`next_estimation_date` Date,
`make_public` VARCHAR (100) NOT NULL,
`post_owner` VARCHAR (100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4 COLLATE utf8mb4_general_ci AUTO_INCREMENT=1 ;
