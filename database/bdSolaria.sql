create database dbSolaria
default char set utf8mb4
default collate utf8mb4_general_ci;

use dbSolaria;

create table phone(
ID int auto_increment,
DDD varchar(3),
phoneNumber varchar(10),
primary key(ID));

create table state(
ID int auto_increment,
state varchar(50),
acronym varchar(2),
primary key(ID));

create table city(
ID int auto_increment,
city varchar(100),
state int,
primary key(ID),
foreign key (state) references state(ID));

create table adress(
ID int auto_increment,
CEP varchar(9),
city int,
district varchar(50),
street varchar(255),
primary key(ID, CEP),
foreign key (city) references city(ID));

create table photo(
ID int auto_increment,
photoName varchar(255),
photoFormat varchar(5),
photeSize double,
photoPath varchar(255),
photoType enum('profile', 'banner', 'post'),
primary key (ID));

create table userAccount(
ID int auto_increment,
userName varchar(100),
userEmail varchar(100) unique,
userPassword varchar(255),
userPhone int,
userPhoto int unique,
userAdress int,
primary key(ID),
foreign key (userPhone) references phone(ID),
foreign key (userPhoto) references photo(ID),
foreign key (userAdress) references adress(ID));

create table donator(
ID int auto_increment,
accountID int,
CPF varchar(14),
birthDate date,
primary key(ID),
foreign key (accountID) references userAccount(ID));

create table institution(
ID int auto_increment,
accountID int,
CNPJ varchar(18),
description varchar(255),
primary key(ID),
foreign key (accountID) references userAccount(ID));

create table donation(
ID int auto_increment,
donationType enum ('money', 'toys', 'clothes', 'products'),
donationDate date,
donator int,
institution int,
primary key(ID),
foreign key (donator) references donator(ID),
foreign key (institution) references institution(ID));


