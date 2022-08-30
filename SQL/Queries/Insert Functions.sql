--- INSERT Statment 

USE sakila;
/*
CREATE TABLE ActorSample(
	actori_id smallint IDENTITY(1,1) PRIMARY KEY,
	first_name varchar(45) NOT NULL,
	last_name varchar(45) NULL,
	last_update SMALLDATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);*/

INSERT INTO ActorSample (first_name, last_name, last_update)
	VALUES ('Pinal', 'Dave', '2013-04-15');


SELECT *
FROM ActorSample;

