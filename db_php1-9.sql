CREATE DATABASE php1_9;
USE php1_9;
CREATE TABLE categories (id serial, title varchar(100));
INSERT INTO categories
  (title)
  VALUES
  ('Концерты'),
  ('Репетиции'),
  ('Из жизни');
CREATE TABLE images
(id serial, title varchar(255), path varchar(255), category int);
INSERT INTO images
  (title,path, category)
  VALUES
  ('Фотография 1', '/assets/images/1.jpg', 1),
  ('Фотография 2', '/assets/images/2.jpg', 1),
  ('Фотография 3', '/assets/images/3.jpg', 2),
  ('Фотография 4', '/assets/images/4.jpg', 2),
  ('Фотография 5', '/assets/images/5.jpg', 2),
  ('Фотография 6', '/assets/images/6.jpg', 2);

CREATE TABLE albums
  (id serial, title varchar(255),img varchar(255), published date);
INSERT INTO albums
  (title, img, published)
  VALUES
  ('45', '/assets/images/album_45.jpg', '1982-01-01'),
  ('46', '/assets/images/album_46.jpg', '1983-01-01'),
  ('Начальник Камчатки', '/assets/images/album_Kamchatka-boss.jpg', '1984-01-01'),
  ('Это не любовь...', '/assets/images/album_not-love.jpg', '1985-01-01');


SELECT * FROM albums ORDER BY published DESC;