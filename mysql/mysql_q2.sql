TABLE fsia
   companyName VARCHAR (30) NOT NULL PRIMARY KEY
   marketCapitalization FLOAT NOT NULL

TABLE fsib
   companyName VARCHAR (30) NOT NULL PRIMARY KEY
   sharePrice FLOAT NOT NULL
   shareOutstanding  INTEGER NOT NULL




SELECT a.companyname company, a.marketcapitalization total FROM fsia a
UNION
SELECT b.companyname company, b.sharePrice*b.shareOutstanding total FROM fsib b
ORDER By total DESC