USE sakila;

CREATE TABLE ActorSample(
	actor_id smallint IDENTITY(1,1) PRIMARY KEY,
	first_name varchar(45) NOT NULL,
	last_name varchar(45) NULL,
	last_update SMALLDATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Populate sample table with actor table
INSERT INTO ActorSample (first_name, last_name, last_update)
SELECT first_name, last_name, last_update
FROM actor;

--UPDATE Single row single column
UPDATE	ActorSample
SET		first_name = 'Pinal'
WHERE	actor_id = 1;

UPDATE	ActorSample
SET		last_name = 'Dave'
WHERE	actor_id = 1;

-- check

SELECT *
FROM ActorSample

-- Update Single Row Multiple Columns
UPDATE	ActorSample
SET		first_name = 'Pinal', last_name = 'Dave'
WHERE	actor_id = 2;
-- check
SELECT *
FROM ActorSample

-- Update Multiple Row
UPDATE	ActorSample
SET		first_name = 'Pinal'
WHERE	actor_id IN (1,2,3)
-- check
SELECT *
FROM ActorSample

-- Update Multiple Row Multiple Columns
UPDATE	ActorSample
SET		first_name = 'Pinal',
		last_name = 'Dave',
		last_update = DEFAULT
WHERE	actor_id IN (3,4,5,6);
-- check
SELECT *
FROM ActorSample

-- Update using SELECT as subquery
UPDATE	ActorSample
SET		first_name = 'Nupur'
WHERE	actor_id IN (SELECT actor_id
					 FROM film_actor
					 WHERE film_id=1);
-- check
SELECT *
FROM ActorSample