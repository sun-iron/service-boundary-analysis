CREATE TABLE `db_trace` (
  `seq` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Sequence Number',
  `Call_Table` varchar(128) NOT NULL COMMENT 'Table Name',
  `Call_Func` varchar(128) NOT NULL COMMENT 'Call function Name',
  `Call_File` varchar(128) NOT NULL COMMENT 'Call Source file name',
  `Query` varchar(256) NOT NULL COMMENT 'SQL statement',
  PRIMARY KEY (`seq`),
  KEY `db_trace_seq` (`seq`)
) ENGINE=InnoDB AUTO_INCREMENT=2015 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='DB Trace Table'
