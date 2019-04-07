CREATE TABLE ft_table(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(8) NOT NULL DEFAULT 'toto',
	`group` ENUM ('staff', 'student', 'other') NOT NULL,
	`creation_date` DATE NOT NULL,
	PRIMARY KEY (id)
);