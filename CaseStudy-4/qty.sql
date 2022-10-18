create table quantity
( 
    coffeeid int unsigned not null auto_increment primary key,
    coffeename char(30) not null,
    coffeeqty int unsigned not null
);

use javajam;

insert into quantity values
    (1, 'Just Java', 1),
    (2, 'Cafe au Lait', 1),
    (3, 'Cafe au Lait', 1),
    (4, 'Iced Cappuccino', 1),
    (5, 'Iced Cappuccino', 1); 