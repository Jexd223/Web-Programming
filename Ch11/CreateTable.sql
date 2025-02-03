CREATE TABLE book (
    BookID VARCHAR(7) PRIMARY KEY,
    BookName VARCHAR(50) NOT NULL,
    TypeID CHAR(3) NOT NULL,
    StatusID CHAR(2) NOT NULL,
    Publish VARCHAR(10) NOT NULL,
    UnitPrice INT NOT NULL DEFAULT 0,
    UnitRent INT NOT NULL DEFAULT 0,
    DayAmount INT NULL DEFAULT NULL,
    Picture VARCHAR(30) NOT NULL,
    BookDate DATE NOT NULL DEFAULT '0000-00-00'
);

CREATE TABLE typebook (
    TypeID CHAR(3) PRIMARY KEY,
    TypeName VARCHAR(50) NOT NULL
);

CREATE TABLE customer (
    CustomerID VARCHAR(4) PRIMARY KEY,
    CustomerName VARCHAR(30) NOT NULL,
    CustomerSurname VARCHAR(30) NOT NULL,
    CustomerAddr VARCHAR(60) NOT NULL,
    CustomerPhone VARCHAR(10) NULL
);

CREATE TABLE statusbook (
    StatusID CHAR(2) PRIMARY KEY,
    StatusName VARCHAR(20) NOT NULL
);
