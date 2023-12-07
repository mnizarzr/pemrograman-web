CREATE DATABASE IF NOT EXISTS pwmodul5;
USE pwmodul5;

CREATE TABLE IF NOT EXISTS `authors` (
	`id` BIGINT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `genres` (
	`id` BIGINT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `users` (
	`id` BIGINT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `books` (
	`id` BIGINT PRIMARY KEY AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL,
	`genre_id` BIGINT,
	`author_id` BIGINT,
	FOREIGN KEY (`genre_id`) REFERENCES `genres`(`id`) ON UPDATE no action ON DELETE no action,
	FOREIGN KEY (`author_id`) REFERENCES `authors`(`id`) ON UPDATE no action ON DELETE no action
);

CREATE TABLE IF NOT EXISTS `books_loans` (
	`id` BIGINT PRIMARY KEY AUTO_INCREMENT,
	`user_id` BIGINT NOT NULL,
	`book_id` BIGINT NOT NULL,
	`loan_date` DATE DEFAULT current_timestamp() NOT NULL,
	`return_date` DATE NOT NULL,
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE no action ON DELETE no action,
	FOREIGN KEY (`book_id`) REFERENCES `books`(`id`) ON UPDATE no action ON DELETE no action
);


