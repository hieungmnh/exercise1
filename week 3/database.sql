-- Database for Laptop Shop
CREATE DATABASE IF NOT EXISTS LaptopShop
    DEFAULT CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE LaptopShop;

-- Create table for laptops
CREATE TABLE IF NOT EXISTS laptops (
    id INT(11) NOT NULL AUTO_INCREMENT,
    brand VARCHAR(50) NOT NULL,
    model VARCHAR(100) NOT NULL,
    processor VARCHAR(100) NOT NULL,
    ram VARCHAR(20) NOT NULL,
    storage VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT(11) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO laptops (brand, model, processor, ram, storage, price, quantity) VALUES
('Dell', 'Inspiron 5410', 'Intel i5-11320H', '8GB', '512GB SSD', 750.00, 10),
('Apple', 'MacBook Air M2', 'Apple M2', '8GB', '256GB SSD', 1200.00, 5),
('Asus', 'TUF Gaming A15', 'AMD Ryzen 7 5800H', '16GB', '1TB SSD', 1400.00, 7);
