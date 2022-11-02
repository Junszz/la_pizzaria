create table member
( 
    userid int unsigned not null auto_increment primary key,
    firstname char(50) not null,
    lastname char(25) not null,
    contact int unsigned not null,
    email char(30) not null,
    pwd char(32) not null,
    addr char(100) not null
);

use lapizzaria;

insert into member values
    (null, 'Admin', "Admin", "89002643", "admin@lapizzaria.com", "81dc9bdb52d04dc20036dbd8313ed055", "NTU Lapizzaria");