CREATE TABLE workshops (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    ampm VARCHAR(255) NOT NULL,
    num INT NOT NULL DEFAULT 0,
    max INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL
) TYPE=innodb;

CREATE TABLE applications (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    name_kana VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(255),
    workshop_am VARCHAR(255),
    workshop_pm VARCHAR(255),
    kids_class_1 VARCHAR(255),
    kids_class_2 VARCHAR(255),
    payment_method VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL
) TYPE=innodb;
