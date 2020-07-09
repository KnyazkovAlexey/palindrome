SELECT DISTINCT director.dir_lname, genres.gen_title
FROM director
INNER JOIN movie_direction ON director.dir_id = movie_direction.dir_id
INNER JOIN movie ON movie_direction.mov_id = movie.mov_id
INNER JOIN movie_genres ON movie.mov_id = movie_genres.mov_id
INNER JOIN genres ON movie_genres.gen_id = genres.gen_id
WHERE genres.gen_title like 'C%'
ORDER BY director.dir_lname;