/*
Husain Haq
z1911897
Prof. Lehuta
CSCI 446
Assignment 4
*/

CREATE TABLE 'Customer'(
	'customerID'VARCHAR(20)PRIMARY KEY,
  	'username'VARCHAR(20),
  	'password'VARCHAR(20)
);

CREATE TABLE 'Order'(
  	'OrderID'VARCHAR(20)PRIMARY KEY,
	'Type'VARCHAR(20),
  	'Symbol'VARCHAR(20),
  	'BroughtPrice'INT(255) NOT NULL,
  	'Sale Price' INT(255) NOT NULL,
  	'username'VARCHAR(20),
  	'status'VARCHAR(20),
  	foreign key('username') REFERENCES'Customer'('username')
    foreign key('Symbol') REFERENCES'Stock'('Symbol')
);

CREATE TABLE 'Transaction'(
  'Date' DATE NOT NULL,
  'ShareAmount' INT(225) NOT NULL
);

CREATE TABLE 'Stock'(
	'Symbol'VARCHAR(20) PRIMARY KEY,
  	'price'INT NOT NULL,
  	'Company'
);

CREATE TABLE 'Has'(
	'Symbol' varchar(20) not NULL, 
	foreign key('Symbol') REFERENCES'Stock'('Symbol')
);

CREATE TABLE 'Exchange'(
	'ExchangeID' VArchar(20) PRIMARY key,
  	'ExchangeDate'DATE NOT NULL,
  	'Amount' INT Not NULL
);

CREATE table 'Holds'(
	'Price' INT Not NULL,
  	'ShareAmount' INT not NULL
);

CREATE TABLE 'Bank'(
	'AccountID' VARCHAR(20) Primary Key,
  	'ExchangeDate' DATE NOT NULL,
  	FOREIGN KEY('ExchangeDate') REFERENCES'Exchange'('ExchangeDate')
);

CREATE TABLE 'Has2'(
	'yes/no' CHar(4) NOT NULL,
  	'AccountID' VARCHAR(20),
  	FOREIGN KEY('AccountID') REFERENCES 'Bank'('AccountID')
);
