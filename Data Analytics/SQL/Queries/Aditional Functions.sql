USE sakila

-- Round numeric values
SELECT	amount,
		ROUND(amount,0) Amnt, ROUND(amount,3) Amnt1,
		FLOOR(amount) FloorAmnt, CEILING(amount) CeilingAmnt
FROM payment



-- CONCAT Function for string
SELECT CONCAT(first_name,'|', last_name) AS FullName
FROM actor

-- LEFT Fun for strings
SELECT	CONCAT(first_name, ' ', last_name) AS FullName,
		CONCAT(LEFT(first_name,1), ' ', LEFT(last_name,1)) AS FirstInitial
FROM actor

--- LENGTH fun 
SELECT	CONCAT(first_name, ' ', last_name) AS FullName,
		LEN(CONCAT(first_name, ' ', last_name)) AS Lenght,
		CONCAT(LEFT(first_name,1), ' ', LEFT(last_name,1)) AS FirstInitial
FROM actor

---Various fun

SELECT	CONCAT(first_name, ' ', last_name) AS FullName, 
		REVERSE(CONCAT(first_name, ' ', last_name)) AS ReverseFullName,
		REPLACE(CONCAT(first_name, ' ', last_name), 'S', '$') AS ReplaceExample
FROM actor;

-----------------------
--- DATE Operations ---
-----------------------

SELECT	CONCAT(first_name,' ',last_name) AS c,
		FORMAT(last_update, 'MM-dd-yy') AS LastUpdate1,
		FORMAT(last_update, 'dd/MM/yyyy') AS LastUpdate2,
		FORMAT(last_update, 'dd/MMM/yyyy hh:mm:ssss') AS LastUpdate3,
		last_update
FROM actor;

---- DATE FORMAT with GET FORMAT funct

SELECT	CONCAT(first_name, ' ', last_name) AS FullName,
		FORMAT(last_update, 'd', 'ISO') as LastUpdate1,
		FORMAT(last_update, 'd', 'fr-FR') as LastUpdate1,
		last_update
FROM actor

-----------------------
-- Distinc operations
-----------------------
SELECT last_name
FROM actor

SELECT DISTINCT last_name
FROM actor


-----------------------------
-- WHERE clause comparison --
-----------------------------

SELECT actor_id, first_name, last_name
FROM actor
WHERE actor_id = 110

SELECT actor_id, first_name, last_name
FROM actor
WHERE first_name = 'Nick'

SELECT actor_id, first_name, last_name
FROM actor
WHERE actor_id < 110

SELECT actor_id, first_name, last_name
FROM actor
WHERE first_name < 'Nick'

SELECT actor_id, first_name, last_name
FROM actor
WHERE actor_id > 110;

SELECT actor_id, first_name, last_name
FROM actor
WHERE first_name >= 'Nick';

SELECT actor_id, first_name, last_name
FROM actor
WHERE first_name != 'Nick';

SELECT actor_id, first_name, last_name
FROM actor
WHERE actor_id = 110;

-------------------------------

SELECT * 
FROM actor
WHERE first_name = 'Kenneth';

SELECT * 
FROM actor
WHERE first_name = 'Kenneth' AND actor_id<100;


SELECT * 
FROM actor
WHERE first_name = 'Kenneth' AND actor_id<100 AND last_name='TORN';

--OR Conditional

SELECT * 
FROM actor
WHERE first_name = 'Kenneth' OR actor_id<100;


SELECT * 
FROM actor
WHERE first_name = 'Kenneth' OR actor_id<100 OR last_name='TEMPLE';


--- NOT conditional

SELECT *
FROM actor
WHERE NOT actor_id=5;

--- All together

SELECT *
FROM actor
WHERE first_name = 'KENNETH' OR last_name = 'TEMPLE' AND actor_id < 100;

SELECT *
FROM actor
WHERE (first_name = 'KENNETH' AND actor_id < 100) OR last_name = 'TEMPLE';


SELECT *
FROM actor
WHERE first_name = 'KENNETH' AND (actor_id < 100 OR last_name = 'TEMPLE');


--- IN

SELECT *
FROM actor
WHERE first_name IN ('nick', 'Johnny', 'joe', 'vivien');


SELECT *
FROM actor
WHERE actor_id IN (1,2,3,4,5,6);

--- NOT IN

SELECT *
FROM actor
WHERE actor_id NOT IN (1,2,3,4,5,6);

---- In subquery

SELECT * 
FROM actor
WHERE first_name in ('Nick', 'Johnny', 'Joe', 'Vivien')
		OR actor_id IN
					( SELECT actor_id
					FROM actor
					WHERE last_name = 'DEGENERES');

--- BETWEEN

SELECT *
FROM actor
WHERE actor_id > 10 AND actor_id < 20;

SELECT *
FROM actor
WHERE actor_id BETWEEN 10 and 20;

SELECT *
FROM actor
WHERE actor_id NOT BETWEEN 10 and 20;


--- LIKE

SELECT *
FROM actor
WHERE first_name LIKE 'AL%';


SELECT *
FROM actor
WHERE first_name LIKE 'A__E';

SELECT *
FROM actor
WHERE first_name LIKE 'A__E%';

---NULL

SELECT *
FROM address;

SELECT *
FROM address
WHERE address2 IS NULL;

SELECT *
FROM address
WHERE address2 IS NOT NULL;

--- Order clause

SELECT *
FROM address
ORDER BY district DESC;

SELECT *
FROM address
ORDER BY district, postal_code DESC;

SELECT actor_id, CONCAT(first_name, ' ', last_name) AS FullName
FROM actor
ORDER BY FullName


SELECT actor_id, CONCAT(first_name, ' ', last_name) AS FullName
FROM actor
ORDER BY 1;

----- LIMIT clause
SELECT TOP(5) *
FROM actor
WHERE actor_id>5
ORDER BY actor_id;




