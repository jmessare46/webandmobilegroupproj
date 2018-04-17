--Rachael Simmonds

-- Database for website

--Creating database
CREATE DATABASE announcements;

--Using the database
USE announcements;

CREATE TABLE news (
	authorID int NOT NULL,
	firstname varchar(15) NOT NULL,
	lastname varchar(20) NOT NULL,
	paragraph varchar(550),
	postedDate date,
	
	PRIMARY KEY (authorID)	
);

INSERT INTO news (authorID, firstname, lastname)
VALUES (1, "Donald", "Green");

INSERT INTO news (authorID, firstname, lastname)
VALUES (2, "Nathan", "Melenbacker");

INSERT INTO news (authorID, firstname, lastname)
VALUES (3, "Adam", "Dunn");