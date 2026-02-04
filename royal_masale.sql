CREATE DATABASE IF NOT EXISTS royal_masale;
USE royal_masale;

CREATE TABLE admin_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO admin_users (username, password) VALUES ('admin', MD5('admin123'));

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  weight VARCHAR(50) DEFAULT NULL,
  description TEXT DEFAULT NULL,
  discount DECIMAL(5,2) DEFAULT 0.00,
  image VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
