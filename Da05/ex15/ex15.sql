SELECT REVERSE(RIGHT(phone_number, LENGTH(phone_number) - 1)) AS 'rebmunenohp'
FROM distrib
WHERE phone_number LIKE '05%';