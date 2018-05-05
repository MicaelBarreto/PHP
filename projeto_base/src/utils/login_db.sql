DROP DATABASE IF EXISTS login_db;

CREATE DATABASE login_db;

USE login_db;

CREATE TABLE users (

  id int(11) NOT NULL AUTO_INCREMENT,

  username varchar(255) DEFAULT NULL,

  password varchar(255) DEFAULT NULL,
  
  city varchar(255)  DEFAULT NULL,

  PRIMARY KEY (id)

) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

CREATE TABLE company(

	id integer not null auto_increment,
    rs varchar(200) not null,
    nf varchar(200) not null,
    CNPJ varchar(14) not null,
    ie varchar(9) not null,
    addr varchar(200) not null,
    comp varchar(200) not null,
    tel varchar(10) not null,
    email varchar(200) not null,
    primary key(id)

);

select * from users;
select *from company;