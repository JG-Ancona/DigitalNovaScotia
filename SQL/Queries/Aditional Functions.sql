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

---changes test