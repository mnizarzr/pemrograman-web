CREATE DATABASE IF NOT EXISTS pwmodul5;
USE pwmodul5;
CREATE TABLE IF NOT EXISTS products(
    id int PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(255) NOT NULL,
    created_at datetime NOT NULL DEFAULT current_timestamp(),
    updated_at datetime NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
);
