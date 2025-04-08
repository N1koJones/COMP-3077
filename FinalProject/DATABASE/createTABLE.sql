-- ============================================
-- Create the books table
-- This table stores information about books, including their title, author, genre, and other details.
-- ============================================
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each book
    title VARCHAR(255) NOT NULL,               -- Title of the book
    author VARCHAR(255) NOT NULL,              -- Author of the book
    main_category VARCHAR(100) NOT NULL,       -- Main genre/category of the book
    volume INT DEFAULT NULL,                   -- Volume number (optional, for series)
    description TEXT NOT NULL,                 -- Description or summary of the book
    price DECIMAL(10, 2) NOT NULL,             -- Price of the book
    cover_image VARCHAR(255),                  -- Path to the cover image file (optional)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp when the book was added
);

-- ============================================
-- Create the recommendations table
-- This table stores user recommendations for books, including their name, review, and associated book.
-- ============================================
CREATE TABLE recommendations (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each recommendation
    user_id INT NOT NULL,                      -- ID of the user making the recommendation (foreign key to users table)
    book_title VARCHAR(255) NOT NULL,          -- Title of the book being recommended
    body TEXT NOT NULL,                        -- Body of the recommendation or review
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp when the recommendation was made
);

-- ============================================
-- Create the categories table
-- This table stores the different categories or genres available for books.
-- ============================================
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each category
    name VARCHAR(100) NOT NULL UNIQUE,         -- Name of the category (must be unique)
    description TEXT                           -- Description of the category
);

-- ============================================
-- Create the users table
-- This table stores user account information, including their username, password, and role.
-- ============================================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each user
    username VARCHAR(50) NOT NULL UNIQUE,      -- Username for the user (must be unique)
    password VARCHAR(255) NOT NULL,            -- Hashed password for the user
    role ENUM('user', 'admin') DEFAULT 'user', -- Role of the user (default is 'user')
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp when the user account was created
);