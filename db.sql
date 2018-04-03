CREATE USER 'wp'@'localhost' IDENTIFIED BY 'wordpress';
CREATE DATABASE wordpress;
GRANT ALL PRIVILEGES ON 'wordpress' . * TO 'wp'@'localhost';
