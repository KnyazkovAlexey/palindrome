SELECT DISTINCT mov_title
FROM movie
WHERE mov_id IN (
  SELECT mov_id
  FROM movie_direction
  INNER JOIN director ON movie_direction.dir_id = director.dir_id
  WHERE director.dir_lname = 'Nolan'
);