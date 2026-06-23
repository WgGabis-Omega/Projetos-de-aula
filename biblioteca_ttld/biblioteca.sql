CREATE DATABASE biblioteca;
USE biblioteca;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(150)

);

CREATE TABLE historias(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(250),
    descripton TEXT, 
    cover VARCHAR(250),
    author VARCHAR(100)
    reads INT DEFAULT 0, 
    likes_count INT DEFAULT 0,
    status VARCHAR(950)

);

CREATE TABLE favorites(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    story_id INT

);