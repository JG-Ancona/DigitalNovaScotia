-- ASCII Return numeric value of left-most character
SELECT ASCII('a'), ASCII('A');

-- CHAR() - Return the character for each integer passed
SELECT CHAR(65);

-- LENGHT() - Return the length of a string in bytes
SELECT LEN('SQLAuthority'), LEN('SQLAuthority  ');

-- CONCAT() - Return concatenated string
SELECT CONCAT('SQL', 'Authori', 'ty');
SELECT CONCAT('SQL', NULL, 'ty');

-- LOWER() - Returns the argument in lowercase
SELECT LOWER('SQLAuthority'), LOWER('PLUrALSigHt');

-- UPPER() - Returns the argument in uppercase
SELECT UPPER('SQLAuthority'), UPPER('PLUrALSigHt');

-- LEFT() - Return the leftmost number of characters as specified
SELECT LEFT('SQLAuthority',4), LEFT('PLUrALSigHt',3);

-- RIGHT() - Return the specified rightmost number of characters
SELECT RIGHT('SQLAuthority',4), RIGHT('PLUrALSigHt',3);

-- RTRIM() - Remove trailing spaces
SELECT RTRIM('SQLAuthority'), RTRIM('    SQLAuthority   ');

-- LTRIM() - Remove trailing spaces
SELECT LTRIM('SQLAuthority'), LTRIM('    SQLAuthority   ');

-- 
