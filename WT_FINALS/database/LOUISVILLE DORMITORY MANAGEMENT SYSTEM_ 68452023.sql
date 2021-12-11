DROP DATABASE IF EXISTS louisville_dorm_mgt_system;
CREATE DATABASE louisville_dorm_mgt_system;
USE louisville_dorm_mgt_system;


CREATE TABLE login (
email varchar(100) Not null,
upassword varchar(50) not null
);

Create table signup(
    id int not null auto_increment,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    email varchar(50) not null UNIQUE,
    password varchar(50) not null,
    primary key (id)
);


CREATE TABLE saint_scholastica (
student_id INT unsigned ,
fname varchar(50) not null,
lname varchar(50) not null,
item varchar(50) not null,
primary key (student_id)
);


CREATE TABLE saint_mary (
student_id INT unsigned auto_increment,
fname varchar(50) not null,
lname varchar(50) not null,
item varchar(50) not null,
primary key (student_id)
);

CREATE TABLE saint_joseph(
student_id INT unsigned auto_increment,
fname varchar(50) not null,
lname varchar(50) not null,
item varchar(50) not null,
primary key (student_id)
);

CREATE TABLE saint_catherine (
student_id INT unsigned auto_increment,
fname varchar(50) not null,
lname varchar(50) not null,
item varchar(50) not null,
primary key (student_id)
);









