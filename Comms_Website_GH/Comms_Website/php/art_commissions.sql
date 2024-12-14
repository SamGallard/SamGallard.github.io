-- Create the database (if there isn't one)
CREATE DATABASE IF NOT EXISTS art_commissions;
USE art_commissions;

-- Create the table
CREATE TABLE IF NOT EXISTS requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL,
    style VARCHAR(50) NOT NULL,
    description TEXT,
    options VARCHAR(255),
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO requests (name, email, subject, type, style, description, options)
VALUES 
('John Doe', 'johndoe@example.com', 'Portrait', 'headshot', 'sketch', 'A simple headshot sketch.', 'commercial use, additional character'),
('Jane Smith', 'janesmith@example.com', 'Landscape', 'fullbody', 'fullcolor', 'Detailed landscape with multiple characters.', 'additional character, print'),
('Sam Artist', 'samartist@example.com', 'Logo Design', 'halfbody', 'lineart', 'Corporate logo sketch.', 'commercial use');
