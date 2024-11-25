-- CREATE DATABASE stars;

-- USE stars;
CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50),
	pass VARCHAR(50)
);


INSERT INTO users 
(username, pass)
VALUES 
("Marija", "marija");

SELECT * FROM users;

CREATE TABLE stars (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid INT,
	image VARCHAR(255)
);

INSERT INTO stars 
(userid, image)
VALUES 
("1", "stars2.png");

SELECT * FROM stars;