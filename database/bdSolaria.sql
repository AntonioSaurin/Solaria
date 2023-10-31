create database dbSolaria default char
set
    utf8mb4 default collate utf8mb4_general_ci;

use dbSolaria;

create table phone(
    ID int auto_increment,
    DDD varchar(3),
    phoneNumber varchar(10),
    primary key(ID)
);

create table state(
    ID int auto_increment,
    state varchar(50),
    acronym varchar(2),
    primary key(ID)
);

create table city(
    ID int auto_increment,
    city varchar(100),
    state int,
    primary key(ID),
    foreign key (state) references state(ID)
);

create table adress(
    ID int auto_increment,
    CEP varchar(9),
    city int,
    district varchar(50),
    street varchar(255),
    primary key(ID, CEP),
    foreign key (city) references city(ID)
);

create table photo(
    ID int auto_increment,
    photoName varchar(255),
    photoFormat varchar(5),
    photeSize double,
    photoPath varchar(255),
    photoType enum('profile', 'banner', 'post'),
    primary key (ID)
);

create table userAccount(
    ID int auto_increment,
    uniqueID int(255) NOT NULL,
    userName varchar(100),
    userEmail varchar(100) unique,
    userPassword varchar(255),
    userPhone int,
    userPhoto int unique,
    userAdress int,
    userAdressNumber varchar(5),    
    userStatus varchar(255) NOT NULL,
    primary key(ID),
    foreign key (userPhone) references phone(ID),
    foreign key (userPhoto) references photo(ID),
    foreign key (userAdress) references adress(ID)
);

create table donator(
    ID int auto_increment,
    accountID int,
    CPF varchar(14),
    birthDate date,
    primary key(ID),
    foreign key (accountID) references userAccount(ID)
);

create table institution(
    ID int auto_increment,
    accountID int,
    CNPJ varchar(18),
    legalGuardian varchar(50),
    legalGuardianCPF varchar(14),
    instagram varchar (30),
    facebook varchar (30),
    description varchar(255),
    state enum('waiting', 'approved'),
    primary key(ID),
    foreign key (accountID) references userAccount(ID)
);

create table donation(
    ID int auto_increment,
    donationType enum('money', 'toys', 'clothes', 'products'),
    donationDate date,
    donator int,
    institution int,
    primary key(ID),
    foreign key (donator) references donator(ID),
    foreign key (institution) references institution(ID)
);

create table messages (
    msgId int(11) NOT NULL AUTO_INCREMENT,
    incomingMsgID int(255) NOT NULL,
    outgoingMsgID int(255) NOT NULL,
    msg varchar(1000) NOT NULL,
    msgTime TIME DEFAULT CURRENT_TIME,
    PRIMARY KEY (`msgId`)
);

create table administrator (
    ID int auto_increment,
    user int,
    function enum('owner', 'admin'),
    primary key(ID),
    foreign key (user) references userAccount(ID)
);

create table rejectedInstitution(
    ID int auto_increment,
    institution int,
    reason enum('fakeInstitution', 'banned', 'outOfStandard'),
    banisher int,
    primary key(ID),
    foreign key (institution) references institution(ID),
    foreign key (banisher) references administrator(ID)
);