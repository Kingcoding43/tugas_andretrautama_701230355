CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255)
);

INSERT INTO users (nama, email, password)
VALUES ('Admin', 'admin@gmail.com', 'password123');
