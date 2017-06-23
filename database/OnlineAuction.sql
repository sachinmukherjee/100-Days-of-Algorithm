create database if not exists OnlineAuction;

use OnlineAuction;

create table if not exists Login
(
  login_id int(10) not null auto_increment,
  email varchar(40) not null,
  pass varchar(40) not null,
  primary key(login_id,email)
);


create table if not exists Users
(
  
  user_id int(10) not null auto_increment,
  login_id int(10) not null references Login(Login),
  profile_pic varchar(100) not null,
  full_name varchar(30) not null,
  email varchar(40) not null references Login(email),
  city char(20) not null,
  state char(20) not null,
  gender char(8) not null,
  phone_number bigint not null,
  primary key(user_id)
  );
  
  create table if not exists Product
  (
   product_id int(10) not null auto_increment,
   product_name varchar(50) not null,
   dat date not null,
   finaldate date not null,
   price int not null,
   product_image varchar(100) not null,
   sellerinfo int(10) not null references Seller(fullname),
   description varchar(100) not null,
   purchased boolean not null,
   primary key(product_id,product_name)
   );
   
   
   create table if not exists Purchased
   (
     user_id int(10) not null references Users(user_id),
     product_name char(30) not null,
     price int(10) not null,
     paid boolean not null
   );


   
  
    create table if not exists Bids
   (
    product_id int(10) not null references Product(product_id),
    initial_price int not null,
    final_price int not null,
    user_id int(10) not null references User(user_id),
    product_name char(40) not null references Product(product_name)
    );

   create table Seller
  ( 
   id int(10) not null auto_increment,
   username varchar(30) not null,
   pass varchar(30) not null,
   fullname char(60) not null, 
   address varchar(100) not null,
   primary key(id,fullname)
  );
