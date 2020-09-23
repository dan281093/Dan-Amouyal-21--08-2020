TABLE employees
   id INTEGER NOT NULL PRIMARY KEY
   mgrId INTEGER REFERENCES employees (id)
   name VARCHAR (30) NOT NULL


SELECT e.name employee, m.name manager
FROM Employees e
INNER JOIN Employees m ON m.id = e.mgrid 
