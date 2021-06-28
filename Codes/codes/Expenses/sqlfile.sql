

CREATE TABLE IF NOT EXISTS `Expences` (
`id`int (20) NOT NULL AUTO_INCREMENT,
`time_stamp_expences` LONGTEXT,
`expense_date` Date,
`AmountSpend` Decimal (10,2) NOT NULL,
`Spend_mode` VARCHAR (100) NOT NULL,
`progressive_spend` VARCHAR (100) NOT NULL,
`spend_planning` VARCHAR (100) NOT NULL,
`remarks_spend` LONGTEXT,
`post_owner` VARCHAR (100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8MB4 COLLATE utf8mb4_general_ci AUTO_INCREMENT=1 ;
