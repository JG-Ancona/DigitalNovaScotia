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