CREATE DATABASE CUSTOMER_INFO;

USE CUSTOMER_INFO;

CREATE TABLE ORDER_INFO (
   Id                   int                  primary key,
   OrderDate            date         not null DEFAULT CURRENT_TIMESTAMP,
   OrderNumber          varchar(10)         ,
   CustomerId           int                  not null,
   TotalAmount          decimal(10,2)        
);
CREATE TABLE CUSTOMER (
   Id                   int                  primary key,
   FirstName            varchar(45)         not null,
   LastName             varchar(45)         not null,
   City                 varchar(45)         ,
   Country              varchar(45)         ,
   Phone                varchar(20)      
   );
   
CREATE TABLE ORDERITEM (
   Id                   int                  primary key,
   OrderId              int                  not null,
   ProductId            int                  not null,
   UnitPrice            decimal(10,2)        not null default 0,
   Quantity             int                  not null default 1
   );
   
CREATE TABLE PRODUCT (
   Id                   int                  primary key, 
   ProductName          varchar(45)         not null,
   SupplierId           int                  not null,
   UnitPrice            decimal(10,2)        default 0,
   Package              varchar(30)         null,
   IsDiscontinued       bit                  default 0
   );
CREATE TABLE SUPPLIER(
   Id                   int                 primary key,
   CompanyName          varchar(45)         not null,
   ContactName          varchar(45)         ,
   ContactTitle         varchar(45)         ,
   City                 varchar(45)         ,
   Country              varchar(45)         ,
   Phone                varchar(45)         ,
   Fax                  varchar(45)         
);

INSERT INTO ORDER_INFO 
VALUES(1,'1965-01-09',121,3730.00,'54');
INSERT INTO ORDER_INFO 
VALUES(2,'1905-01-3',122,4897.00,'59');
INSERT INTO ORDER_INFO 
VALUES(3,'2021-11-19',123,1234.00,'50');
INSERT INTO ORDER_INFO 
VALUES(4,'2002-01-29',124,6758.00,'57');

INSERT INTO CUSTOMER
VALUES(2,'Lee','Coper','Manhatam','USA','9799254467');
INSERT INTO CUSTOMER
VALUES(3,'Emily','Roy','Frankfort','Germany','7014152671');
INSERT INTO CUSTOMER 
VALUES(4,'Mary','Jennifer','South Hill','London','9414274879');
INSERT INTO CUSTOMER 
VALUES(6,'Niel','Potter','MountAbu','Rajasthan','9414894879');


INSERT INTO ORDERITEM
VALUES(2,5,14,18.60,9);
INSERT INTO ORDERITEM
VALUES(3,5,51,42.40,40);
INSERT INTO ORDERITEM
VALUES(4,3,41,7.70,10);
INSERT INTO ORDERITEM
VALUES(5,3,51,42.40,35);
INSERT INTO ORDERITEM
VALUES(6,3,65,16.80,15);

INSERT INTO PRODUCT
VALUES(2,'Pancakes',5,22.00,'48 boxes',0);
INSERT INTO PRODUCT
VALUES(3,'Cheese',2,21.35,'36 boxes',1);
INSERT INTO PRODUCT
VALUES(4,'Kiwi',3,25.00,'12 jars',0);

INSERT INTO SUPPLIER
VALUES(2,'Shimla Bakery','Parry Hasani','Life','Tokyo','Japan','908765423',NULL);
INSERT INTO SUPPLIER
VALUES(5,'The Dew','Urvanshi Jain','TRP','Denmark','Spain','9799254467',NULL);
INSERT INTO SUPPLIER
VALUES(4,'Fruit And Nut','Mathew','Milen','Dark Forest','Japan','9087654329',NULL)


