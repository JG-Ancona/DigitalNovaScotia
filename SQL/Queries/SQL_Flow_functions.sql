-- Example of CASE

DECLARE @Var AS INT=3;

SELECT CASE @Var
			WHEN 1 THEN 'one'
			WHEN 2 THEN 'two'
		ELSE 'more' END AS Result;

SELECT CASE WHEN @Var = 1 THEN 'one'
		WHEN @Var = 2 THEN 'two'
		ELSE 'more' END AS Result

--- Example of IF function
SELECT IIF(1>2,2,3);
SELECT IIF(1<2,'yes','no');
SELECT IIF(YEAR(GETDATE())=2013,'YES','NO');