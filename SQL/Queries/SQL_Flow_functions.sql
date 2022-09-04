-- Example of CASE

DECLARE @Var AS INT=3;

SELECT CASE @Var
			WHEN 1 THEN 'one'
			WHEN 2 THEN 'two'
		ELSE 'more' END AS Result;

SELECT CASE WHEN @Var = 1 THEN 'one'
		WHEN @Var = 2 THEN 'two'
		ELSE 'more' END AS Result