TABLE rectangles
   id INTEGER NOT NULL PRIMARY KEY,
   width INTEGER NOT NULL,
   height INTEGER NOT NULL


SELECT width*height area, COUNT(*) FROM Rectangle
GROUP BY width*height