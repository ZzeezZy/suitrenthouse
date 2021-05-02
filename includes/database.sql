
CREATE TABLE users (
	Id INT(11) NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Mobile_no INT(11) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    PRIMARY KEY(Id)
);

CREATE TABLE admins ( 
	Id INT(11) NOT NULL PRIMARY KEY,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

CREATE TABLE products (
	ProductID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ProductName VARCHAR(255) NOT NULL,
    ProductDescription TEXT(500) NOT NULL,
    Price INT(255) NOT NULL
);

INSERT INTO admins (Username, Password)
VALUES (
    'admin',
    '9861517094'
);

select * from admins;

drop table products;