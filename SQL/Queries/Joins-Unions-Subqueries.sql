--CREATE DATABASE Test;

USE Test;

CREATE TABLE Table1
(ID INT, Value VARCHAR(10));

INSERT INTO Table1 (ID, Value)
	SELECT 1, 'First'
	UNION ALL
	SELECT 2, 'Second'
	UNION ALL
	SELECT 3, 'Third'
	UNION ALL
	SELECT 4, 'Fourth'
	UNION ALL
	SELECT 5, 'Fifth';


CREATE TABLE Table2
(ID INT, Value VARCHAR(10));

INSERT INTO Table2 (ID, Value)
	SELECT 1, 'First'
	UNION ALL
	SELECT 2, 'Second'
	UNION ALL
	SELECT 3, 'Third'
	UNION ALL
	SELECT 6, 'Sixth'
	UNION ALL
	SELECT 7, 'Seventh'
	UNION ALL
	SELECT 8, 'Eight'
	UNION ALL
	SELECT 9, 'Ninth'
	UNION ALL
	SELECT 10, 'Tenth';

SELECT *
FROM Table1;
SELECT *
FROM Table2;

-- INNER JOIN

SELECT t1.*,t2.*
FROM Table1 t1
INNER JOIN Table2 t2 ON t1.ID = t2.ID

-- INNER JOIN with ALIAS

SELECT	t1.ID AS T1ID, t1.Value AS T1Value,
		t2.ID T2ID, t2.Value AS T2Value
FROM Table1 t1
INNER JOIN Table2 t2 ON t1.ID = t2.ID;


-- LEFT OUTER JOIN

SELECT	t1.ID AS T1ID, t1.Value AS T1Value,
		t2.ID T2ID, t2.Value AS T2Value
FROM Table1 t1
LEFT JOIN Table2 t2 ON t1.ID = t2.ID;

-- RIGHT OUTER JOIN

SELECT	t1.ID AS T1ID, t1.Value AS T1Value,
		t2.ID T2ID, t2.Value AS T2Value
FROM Table1 t1
RIGHT JOIN Table2 t2 ON t1.ID = t2.ID;

-- FULL OUTER JOIN

SELECT	t1.ID AS T1ID, t1.Value AS T1Value,
		t2.ID T2ID, t2.Value AS T2Value
FROM Table1 t1
FULL OUTER JOIN Table2 t2 ON t1.ID = t2.ID;

-- LEFT and RIGHT JOIN -> FULL OUTER JOIN

SELECT	t1.ID AS T1ID, t1.Value AS T1Value,
		t2.ID T2ID, t2.Value AS T2Value
FROM Table1 t1
LEFT JOIN Table2 t2 ON t1.ID = t2.ID
UNION
SELECT	t1.ID AS T1ID, t1.Value AS T1Value,
		t2.ID T2ID, t2.Value AS T2Value
FROM Table1 t1
RIGHT OUTER JOIN Table2 t2 ON t1.ID = t2.ID;

-- CROSS JOIN

SELECT	t1.ID AS T1ID, t1.Value AS T1Value,
		t2.ID T2ID, t2.Value AS T2Value
FROM Table1 t1
CROSS JOIN Table2 t2;

--- Subquery 

USE sakila;

SELECT cust.customer_id, cust.first_name, cust.last_name
FROM customer cust
WHERE cust.customer_id IN
	(
	SELECT ren.customer_id
	FROM rental ren
	WHERE ren.inventory_id IN
		(
		SELECT inv.inventory_id
		FROM inventory inv
		WHERE inv.film_id IN
			(
			SELECT fl.film_id
			FROM film fl
			WHERE fl.film_id IN
				(
				SELECT fc.film_id
				FROM film_category fc
				WHERE fc.category_id IN
					(
					SELECT cat.category_id
					FROM category cat
					WHERE cat.name = 'Action'
					)
				)
			)
		)
	)
ORDER BY cust.customer_id, cust.first_name, cust.last_name;

-- subquery with joins

SELECT DISTINCT cust.customer_id, cust.first_name, cust.last_name
FROM customer cust
INNER JOIN rental ren ON ren.customer_id = cust.customer_id
INNER JOIN inventory inv ON inv.inventory_id = ren.inventory_id
INNER JOIN film fl ON fl.film_id = inv.film_id
INNER JOIN film_category fc ON fc.film_id = fl.film_id
INNER JOIN category cat ON cat.category_id = fc.category_id
WHERE cat.name = 'Action'
ORDER BY cust.customer_id, cust.first_name, cust.last_name;


--Subquery with inner join
SELECT fm.title, cat.name, dt.CountofCategory
FROM film fm
INNER JOIN film_category fc ON fc.film_id = fm.film_id
INNER JOIN category cat ON cat.category_id = fc.category_id
INNER JOIN
	(
	SELECT COUNT(*) AS CountofCategory, fc.category_id
	FROM film_category fc
	GROUP BY fc.category_id
	) dt ON dt.category_id = fc.category_id;

-- Subquery with aggregate function and conditional
SELECT payment_id, cust.first_name, cust.last_name, amount
FROM payment pt
INNER JOIN customer cust ON cust.customer_id = pt.customer_id
WHERE amount >
	(
	SELECT AVG(amount)
	FROM payment pt1
	WHERE pt1.customer_id = pt.customer_id
	)
ORDER BY cust.customer_id;