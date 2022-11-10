create table menu
( 
    foodid int unsigned not null auto_increment primary key,
    foodname char(40) not null,
    foodtype char(30) not null,
    foodsize char(10) not null,
    qty int unsigned not null,
    price float(5,2) not null
);

use lapizzaria;

insert into menu values
    (1, 'Meatzza', 'Pizza', "Regular", 0, 12.00),
    (2, 'Quattro fiesta', 'Pizza', "Regular", 0, 12.00),
    (3, 'Extravaganza', 'Pizza', "Regular", 0, 12.00),
    (4, 'Chicken Temptation', 'Pizza', "Regular", 0, 12.00),
    (5, 'Chili Beef', 'Pizza', "Regular", 0, 12.00),
    (6, 'Parmagiana Chicken', 'Pizza', "Regular", 0, 12.00),
    (7, 'Smoky Meatilicious', 'Pizza', "Regular", 0, 12.00),
    (8, 'Diavola Beef', 'Pizza', "Regular", 0,12.00),
    (9, 'Hawaiian Paradise', 'Pizza', "Regular", 0, 12.00),
    (10, 'Classified Chicken', 'Pizza', "Regular", 0, 12.00),
    (11, 'Classic Pepperoni', 'Pizza', "Regular", 0, 12.00),
    (12, 'Smoky Pepperoni & Mushroom', "Pizza", 'Regular', 0, 12.00), 
    (13, 'Simply Cheese', 'Pizza', "Regular", 0, 12.00),
    (14, 'The Big BBQ', 'Pizza', "Regular", 0, 12.00),
    (15, 'Very Veggie', 'Pizza', "Regular", 0, 12.00), 
    (16, 'Classy Chic', 'Pizza', "Regular", 0, 12.00), 

    (17, 'Rose shrimp Pasta', 'Pasta', "Regular", 0, 12.00), 
    (18, 'Chicken Pasta', 'Pasta', "Regular", 0, 12.00),
    (19, 'Chicken Satay Baked Pasta', 'Pasta', "Regular", 0, 15.00), 
    (20, 'Nuts Pasta', 'Pasta', "Regular", 0, 10.00),
    (21, 'Seafood Mariana Pasta', 'Pasta', "Regular", 0, 15.00), 
    (22, 'Creamy Seafood Baked Pasta', 'Pasta', "Regular", 0, 15.00), 
    (23, 'Half Spring Ayam Pasta', 'Pasta', "Regular", 0, 15.00),
    (24, 'Full Spring Ayam Pasta', 'Pasta', "Regular", 0, 20.00), 

    (25, 'Chocolate Lava Cake', 'Sides', "Regular", 0, 6.00),
    (26, 'Marbled Cookie Brownie', 'Sides', "Regular", 0, 5.00), 
    (27, '6 Pcs Drummets', 'Sides', "Regular", 0, 8.00),
    (28, 'Crazy Chicken Crunchies - Original', 'Sides', "Regular", 0, 8.00), 
    (29, 'Crazy Chicken Crunchies - Tomyam', 'Sides', "Regular", 0, 12.00), 
    (30, 'Awesome Foursome', 'Sides', "Regular", 0, 10.00),
    (31, 'Golden Roasted Wings', 'Sides', "Regular", 0, 10.00),
    (32, 'Chocolate Roasted Wings', 'Sides', "Regular", 0, 12.00), 

    (33, 'Coca-Cola', 'Beverage', "Canned", 0, 3.20),
    (34, 'Coca-Cola Zero Sugar', 'Beverage', "Canned", 0, 3.20), 
    (35, 'Sprite', 'Beverage', "Canned", 0, 3.20),
    (36, 'Heaven&Earth Iced Lemon Tea', 'Beverage', "Canned", 0, 3.40), 
    (37, 'Heaven&Earth Jasmine Green Tea', 'Beverage', "Canned", 0, 3.40), 
    (38, 'Coca-Cola', 'Beverage', "Bottle", 0, 4.30),
    (39, 'Coca-Cola Zero Sugar', 'Beverage', "Bottle", 0, 4.30), 
    (40, 'Sprite', 'Beverage', "Bottle", 0, 4.30),
    (41, 'Heaven&Earth Iced Lemon Tea', 'Beverage', "Bottle", 0, 4.60), 
    (42, 'Heaven&Earth Jasmine Green Tea', 'Beverage', "Bottle", 0, 4.60),
    (43, 'Mint Choco Chip Iced Frappe', 'Beverage', "Bottle", 0, 6.60), 
    (44, 'Rasperry Ripple Iced Cooler', 'Beverage', "Bottle", 0, 6.60); 

