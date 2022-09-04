--- ADDDATE () or DATE_ADD() - Add time values (intercals) to a date value
SELECT DATEADD(DAY,45,'2013-01-01');
-- Substract days 
SELECT DATEADD(DAY,-45,'2013-01-01');

-- Return the current day
SELECT DAY(CURRENT_TIMESTAMP);

-- Return current date OF THE db
SELECT GETDATE();

-- Returns the current date and time
SELECT CURRENT_TIMESTAMP;

-- Various date and time part of datetime

SELECT	CURRENT_TIMESTAMP AS CurrentTime,
		CAST(CURRENT_TIMESTAMP AS time) AS time,
		YEAR(CURRENT_TIMESTAMP) AS Year,
		DATEPART(QUARTER,CURRENT_TIMESTAMP) AS Quarter,
		MONTH(CURRENT_TIMESTAMP) AS Month,
		DATEPART(WEEK,CURRENT_TIMESTAMP) AS Week,
		DAY(CURRENT_TIMESTAMP) AS Day,
		DATENAME(WEEKDAY,CURRENT_TIMESTAMP) AS DayName,
		DATENAME(HOUR,CURRENT_TIMESTAMP) AS Hour,
		DATENAME(MINUTE,CURRENT_TIMESTAMP) AS Min,
		DATENAME(SECOND,CURRENT_TIMESTAMP) AS seconds;

-- Format Date and time
SELECT CONVERT(VARCHAR, GETDATE(), 1),  --  mm/dd/yy
	 CONVERT(VARCHAR, GETDATE(), 2),  --  yy.mm.dd
	 CONVERT(VARCHAR, GETDATE(), 3),  --  dd/mm/yy
	 CONVERT(VARCHAR, GETDATE(), 4),  --  dd.mm.yy
	 CONVERT(VARCHAR, GETDATE(), 5),  --  dd-mm-yy
	 CONVERT(VARCHAR, GETDATE(), 6),  --  dd-Mon-yy
	 CONVERT(VARCHAR, GETDATE(), 7),  --  Mon dd, yy
	 CONVERT(VARCHAR, GETDATE(), 10),  --  mm-dd-yy
	 CONVERT(VARCHAR, GETDATE(), 11),  --  yy/mm/dd
	 CONVERT(VARCHAR, GETDATE(), 12),  --  yymmdd
	 CONVERT(VARCHAR, GETDATE(), 23),  --  yyyy-mm-dd
	 CONVERT(VARCHAR, GETDATE(), 101),  --  mm/dd/yyyy
	 CONVERT(VARCHAR, GETDATE(), 102),  --  yyyy.mm.dd
	 CONVERT(VARCHAR, GETDATE(), 103),  --  dd/mm/yyyy
	 CONVERT(VARCHAR, GETDATE(), 104),  --  dd.mm.yyyy
	 CONVERT(VARCHAR, GETDATE(), 105),  --  dd-mm-yyyy
	 CONVERT(VARCHAR, GETDATE(), 106), --  dd Mon yyyy
	 CONVERT(VARCHAR, GETDATE(), 107),  --  Mon dd, yyyy
	 CONVERT(VARCHAR, GETDATE(), 110),  --  mm-dd-yyyy
	 CONVERT(VARCHAR, GETDATE(), 111),  --  yyyy/mm/dd
	 CONVERT(VARCHAR, GETDATE(), 112); --  yyyymmdd

