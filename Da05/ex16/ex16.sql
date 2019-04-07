SELECT COUNT(id_film) AS 'movies'
FROM member_history
WHERE
	DATE(`date`) BETWEEN "2006-10-30" AND "2007-07-27"
OR
	DAY(`date`) = '24' AND MONTH(`date`) = '12';