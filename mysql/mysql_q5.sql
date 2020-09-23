TABLE menu
itemName VARCHAR (50) PRIMARY KEY NOT NULL,
category VARCHAR (50) NOT NULL
price DECIMAL (5.2)

UPDATE Menu
SET price=price+price*0.1
WHERE category='soups' OR category='salads'