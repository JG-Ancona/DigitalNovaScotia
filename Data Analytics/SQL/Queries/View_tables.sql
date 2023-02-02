CREATE VIEW vw_AllActor AS
SELECT *
FROM actor;

SELECT *
FROM vw_AllActor;

CREATE VIEW vw_AllActorA AS
SELECT *
FROM vw_AllActor
WHERE first_name LIKE 'A%';

SELECT *
FROM vw_AllActorA;

CREATE VIEW vw_AllActorAnA AS
SELECT *
FROM vw_AllActorA
WHERE last_name LIKE '%A%';

SELECT *
FROM vw_AllActorAna;

DROP VIEW vw_AllActorA
DROP VIEW vw_AllActorAnA
DROP VIEW vw_AllActor