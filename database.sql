CREATE DATABASE IF NOT EXISTS ebook_library;
USE ebook_library;

CREATE TABLE books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(150),
    description TEXT,
    pdf_path VARCHAR(255),
    total_pages INT
);

INSERT INTO books (title, author, description, pdf_path, total_pages) VALUES
('Introduction to MySQL', 'Ajmer Singh', 'Complete guide to MySQL installation and basics.', '/attachments/Introduction to MySQL.pdf', 118),
('REAL IFT 302 Notes', 'Course Notes', 'Internet, WWW, PHP Variables, Data Types and more.', '/attachments/REAL IFT 302 Notes.pdf', 71);