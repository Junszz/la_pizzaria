create table coffee
( 
    coffeeid int unsigned not null auto_increment primary key,
    coffeetype char(30) not null,
    coffeesize char(10) not null,
    coffeeprice float(3,2)
);

use javajam;

insert into coffee values
    (1, 'Just Java', 'Single', 2.00),
    (2, 'Cafe au Lait', 'Single', 2.00),
    (3, 'Cafe au Lait', 'Double', 3.00),
    (4, 'Iced Cappuccino', 'Single', 4.75),
    (5, 'Iced Cappuccino', 'Double', 5.75); 