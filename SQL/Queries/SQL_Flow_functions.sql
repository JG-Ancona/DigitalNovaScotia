-- Example of CASE

DECLARE @Var AS INT=3;

SELECT CASE @Var
			WHEN 1 THEN 'one'
			WHEN 2 THEN 'two'
		ELSE 'more' END AS Result;

SELECT CASE WHEN @Var = 1 THEN 'one'
		WHEN @Var = 2 THEN 'two'
		ELSE 'more' END AS Result

DECLARE @Var1 AS INT=11;
DECLARE @Var2 AS INT=12;
SELECT CASE WHEN (@Var1 = 11 AND @Var2 =13) THEN 'one'
		WHEN @Var2 = 12 THEN 'two'
		ELSE 'more' END AS Result;

--- Example of IF function
SELECT IIF(1>2,2,3);
SELECT IIF(1<2,'yes','no');
SELECT IIF(YEAR(GETDATE())=2013,'YES','NO');

-- Example IF NULL

SELECT ISNULL(1,0);
SELECT ISNULL(NULL,0);

-- NULLIF Function

SELECT NULLIF(1,1);
SELECT NULLIF(5,2);