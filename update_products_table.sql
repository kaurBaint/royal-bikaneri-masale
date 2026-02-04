-- Update existing products table to add new fields
USE royal_masale;

-- Add new columns to products table
ALTER TABLE products 
ADD COLUMN weight VARCHAR(50) DEFAULT NULL AFTER price,
ADD COLUMN description TEXT DEFAULT NULL AFTER weight,
ADD COLUMN discount DECIMAL(5,2) DEFAULT 0.00 AFTER description;

-- Update existing products with default values if needed
UPDATE products SET weight = '500g' WHERE weight IS NULL;
UPDATE products SET description = 'Premium quality spice' WHERE description IS NULL;
UPDATE products SET discount = 0.00 WHERE discount IS NULL;
