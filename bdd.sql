DROP DATABASE IF EXISTS `owasp`;

CREATE DATABASE `owasp`;

USE `owasp`;

DROP TABLE IF EXISTS `user`;

CREATE TABLE IF NOT EXISTS `user` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(128) NOT NULL,
    `password` VARCHAR(128) NOT NULL,
    `firstname` VARCHAR(64) NOT NULL,
    `lastname` VARCHAR(64) NOT NULL,
    `role` ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP TABLE IF EXISTS `product`;

CREATE TABLE IF NOT EXISTS `product` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL COMMENT 'Le nom du produit',
    `description` TEXT NULL COMMENT 'La description du produit',
    `brand` VARCHAR(45) NULL COMMENT 'La marque du produit',
    `picture` VARCHAR(128) NULL COMMENT 'L\'URL de l\'image du produit',
    `price` DECIMAL(10, 2) NOT NULL DEFAULT 0 COMMENT 'Le prix du produit',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Data for table `user`
-- -----------------------------------------------------

START TRANSACTION;

INSERT INTO
    `user` (
        `email`,
        `password`,
        `firstname`,
        `lastname`,
        `role`
    )
VALUES (
    'test@test.test',
    'test',
    'Test',
    'Test',
    'user'
),
(
    'admin@admin.admin',
    'admin',
    'Admin',
    'Admin',
    'admin'
);

-- -----------------------------------------------------
-- Data for table `product`
-- -----------------------------------------------------
START TRANSACTION;

INSERT INTO
    `product` (
        `name`,
        `description`,
        `brand`,
        `picture`,
        `price`
    )
VALUES (
    'Produit 1',
    'Description du produit 1',
    'Marque',
    'https://placehold.co/150',
    10.00
),
(
    'Produit 2',
    'Description du produit 2',
    'Marque',
    'https://placehold.co/150',
    20.00
),
(
    'Produit 3',
    'Description du produit 3',
    'Marque',
    'https://placehold.co/150',
    30.00
),
(
    'Produit 4',
    'Description du produit 4',
    'Marque',
    'https://placehold.co/150',
    40.00
),
(
    'Produit 5',
    'Description du produit 5',
    'Marque',
    'https://placehold.co/150',
    50.00
),
(
    'Produit 6',
    'Description du produit 6',
    'Marque',
    'https://placehold.co/150',
    60.00
),
(
    'Produit 7',
    'Description du produit 7',
    'Marque',
    'https://placehold.co/150',
    70.00
),
(
    'Produit 8',
    'Description du produit 8',
    'Marque',
    'https://placehold.co/150',
    80.00
),
(
    'Produit 9',
    'Description du produit 9',
    'Marque',
    'https://placehold.co/150',
    90.00
),
(
    'Produit 10',
    'Description du produit 10',
    'Marque',
    'https://placehold.co/150',
    100.00
);


COMMIT;

DROP USER IF EXISTS 'owasp' @'localhost';

CREATE USER 'owasp' @'localhost' IDENTIFIED BY 'test';

GRANT ALL PRIVILEGES ON owasp.* TO 'owasp' @'localhost';