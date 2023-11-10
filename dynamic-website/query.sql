CREATE DATABASE website;

CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(32) NOT NULL
);

CREATE TABLE contact(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    email varchar(50) NOT NULL,
    subject varchar(32) NOT NULL,
    message TEXT NOT NULL
);