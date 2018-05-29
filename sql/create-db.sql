DROP DATABASE IF EXISTS articles;

CREATE DATABASE articles;

USE articles;

DROP TABLE IF EXISTS posts;

CREATE TABLE posts (
	id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title text,
	body text,
	published timestamp
);



