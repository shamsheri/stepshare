CREATE DATABASE IF NOT EXISTS stepshare;
USE stepshare;

CREATE TABLE steps (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    image_url VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);