CREATE TABLE `attendee` (
	`id` int NOT NULL AUTO_INCREMENT,
	`full_name` varchar(255) NOT NULL,
	`Phone` int(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`tshirt_size` varchar(255) NOT NULL,
	`date_registered` DATE(255) NOT NULL,
	`volunteers` BOOLEAN NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `address` (
	`id` int NOT NULL,
	`address` varchar(255) NOT NULL,
	`city` varchar(255) NOT NULL,
	`state` varchar(255) NOT NULL
);

CREATE TABLE `school` (
	`id` int NOT NULL,
	`name` varchar(255) NOT NULL
);

CREATE TABLE `presenters` (
	`id` int NOT NULL
);

CREATE TABLE `workshops` (
	`id` int NOT NULL,
	`id` bigint NOT NULL
);

CREATE TABLE `groups` (
	`id` int NOT NULL,
	`id` int NOT NULL
);

CREATE TABLE `topics` (
	`Id` bigint NOT NULL,
	`Id` bigint NOT NULL
);

ALTER TABLE `address` ADD CONSTRAINT `address_fk0` FOREIGN KEY (`id`) REFERENCES `attendee`(`id`);

ALTER TABLE `school` ADD CONSTRAINT `school_fk0` FOREIGN KEY (`id`) REFERENCES `attendee`(`id`);

ALTER TABLE `presenters` ADD CONSTRAINT `presenters_fk0` FOREIGN KEY (`id`) REFERENCES `attendee`(`id`);

ALTER TABLE `workshops` ADD CONSTRAINT `workshops_fk0` FOREIGN KEY (`id`) REFERENCES `attendee`(`id`);

ALTER TABLE `workshops` ADD CONSTRAINT `workshops_fk1` FOREIGN KEY (`id`) REFERENCES `presenters`(`id`);

ALTER TABLE `groups` ADD CONSTRAINT `groups_fk0` FOREIGN KEY (`id`) REFERENCES `presenters`(`id`);

ALTER TABLE `groups` ADD CONSTRAINT `groups_fk1` FOREIGN KEY (`id`) REFERENCES `attendee`(`id`);

ALTER TABLE `topics` ADD CONSTRAINT `topics_fk0` FOREIGN KEY (`Id`) REFERENCES `attendee`(`id`);

ALTER TABLE `topics` ADD CONSTRAINT `topics_fk1` FOREIGN KEY (`Id`) REFERENCES `presenters`(`id`);

