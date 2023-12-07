CREATE DATABASE IF NOT EXISTS pwmodul5;
USE pwmodul5;

CREATE TABLE IF NOT EXISTS `authors` (
	`id` integer PRIMARY KEY NOT NULL,
	`name` text
);

CREATE TABLE IF NOT EXISTS `genres` (
	`id` integer PRIMARY KEY NOT NULL,
	`name` text
);

CREATE TABLE IF NOT EXISTS `users` (
	`id` integer PRIMARY KEY NOT NULL,
	`name` text
);

CREATE TABLE IF NOT EXISTS `books` (
	`id` integer PRIMARY KEY NOT NULL,
	`title` text,
	`genre_id` integer,
	`author_id` integer,
	FOREIGN KEY (`genre_id`) REFERENCES `genres`(`id`) ON UPDATE no action ON DELETE no action,
	FOREIGN KEY (`author_id`) REFERENCES `authors`(`id`) ON UPDATE no action ON DELETE no action
);

CREATE TABLE IF NOT EXISTS `books_loans` (
	`id` integer PRIMARY KEY NOT NULL,
	`user_id` integer,
	`book_id` integer,
	`loan_date` text DEFAULT CURRENT_DATE,
	`return_date` text,
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE no action ON DELETE no action,
	FOREIGN KEY (`book_id`) REFERENCES `books`(`id`) ON UPDATE no action ON DELETE no action
);


