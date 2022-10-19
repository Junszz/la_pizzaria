create table quantity
( 
    coffeeid int unsigned not null auto_increment primary key,
    coffeecat char(30) not null,
    coffeetype char(20) not null,
    coffeeqty int unsigned not null
);

use javajam;

insert into quantity values
    (1, 'Just Java','Null', 1),
    (2, 'Cafe au Lait','Single', 1),
    (3, 'Cafe au Lait','Double', 1),
    (4, 'Iced Cappuccino','Single', 1),
    (5, 'Iced Cappuccino', 'Double',1); 