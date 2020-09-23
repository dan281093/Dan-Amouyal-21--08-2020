TABLE products
id INTEGER NOT NULL PRIMARY KEY,
name VARCHAR(30) NOT NULL
-- You have an error, you write integer for name
price INTEGER NOT NULL

SELECT p.name, p.price
   FROM Product p
   WHERE p.price = 
    (SELECT MIN(m.price) FROM Product m);