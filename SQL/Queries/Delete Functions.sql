USE sakila

--- Delete single row
DELETE
FROM ActorSample
WHERE actor_id = 1;
--Check
SELECT *
FROM ActorSample;

--- Delete multiple row
DELETE
FROM ActorSample
WHERE actor_id IN (2,3,4);
--Check
SELECT *
FROM ActorSample;

--- Using SELECT as subquery

DELETE
FROM ActorSample
WHERE actor_id IN (SELECT actor_id
					FROM film_actor
					WHERE film_id = 1);
--Check
SELECT *
FROM ActorSample;

--- Delete all rows and columns
DELETE
FROM ActorSample

--Clean and eliminate table
DROP TABLE ActorSample