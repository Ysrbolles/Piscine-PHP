SELECT film.id_genre, genre.name AS 'name_genre',
 film.id_distrib, distrib.name AS 'name_distrib',
 title AS 'title_film'
FROM film
INNER JOIN distrib ON film.id_distrib = distrib.id_distrib
INNER JOIN genre ON film.id_genre = genre.id_genre
WHERE film.id_genre BETWEEN 4 AND 8;
