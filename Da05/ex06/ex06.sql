SELECT title, summary
FROM film
WHERE lower(summary) LIKE '%vincent%'
ORDER BY id_film ASC;