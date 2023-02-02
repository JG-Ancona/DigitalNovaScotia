--- INSERT Statment 

USE sakila;
/*
CREATE TABLE ActorSample(
	actori_id smallint IDENTITY(1,1) PRIMARY KEY,
	first_name varchar(45) NOT NULL,
	last_name varchar(45) NULL,
	last_update SMALLDATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);*/
--Insert data
INSERT INTO ActorSample (first_name, last_name, last_update)
	VALUES ('Pinal', 'Dave', '2013-04-15');

-- Verify data
SELECT *
FROM ActorSample;

-- Insert single Row
INSERT INTO ActorSample
	VALUES ('Nupur', 'Dave', '2013-04-16');

-- Insert single Row with no date
INSERT INTO ActorSample (first_name,last_name)
	VALUES ('Nupur', 'Dave');

SELECT *
FROM ActorSample

-- Insert single Row with one attribute
INSERT INTO ActorSample (first_name)
	VALUES ('Nupur');

SELECT *
FROM ActorSample



-- Insert Multiple VALUES
INSERT INTO ActorSample (first_name, last_name, last_update)
	VALUES	('Pinal', 'Dave', '2013-04-15'),
			('Nupul', 'Dave', '2013-04-15'),
			('Shaivi', 'Dave', '2013-04-15');

SELECT *
FROM ActorSample

---- Subquery method

INSERT INTO ActorSample (first_name, last_name, last_update)
	SELECT first_name, last_name, last_update
	FROM actor
	WHERE first_name='Nick';
--Check
SELECT *
FROM ActorSample
