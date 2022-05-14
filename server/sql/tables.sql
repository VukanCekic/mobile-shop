


CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255)  NULL,
  `product_image3` varchar(255)  NULL,
  `product_image4` varchar(255)  NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` integer(2) NULL,
  `product_color` varchar(100) NOT NULL,
  `featured` BOOLEAN NOT NULL DEFAULT FALSE,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` DATETIME  NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `order_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` DATETIME  NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UX_Constraint` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color,featured) VALUES ("Dynafit Arc", "shoes", "A comfortable pair of high-quality Dynafits in an attractive black-blue color", "shoes1.jpeg", "50", "black and blue", TRUE);
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color) VALUES ("Dynafit Wave", "shoes", "A comfortable pair of high-quality Dynafits in an attractive half blue and half black color", "shoes2.jpeg", "49.50", "half blue and half black");
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color) VALUES ("Dynafit Tide", "shoes", "A comfortable pair of high-quality Dynafits in an attractive half blue and half black color", "shoes2.jpeg", "69.99", "half blue and half black");
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color) VALUES ("Dynafit Refresh", "shoes", "A comfortable pair of high-quality Dynafits in an attractive black color with blue details", "shoes2.jpeg", "40.99", "black");

INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color,featured) VALUES ("Puma Runner", "bags", "A comfortable Puma bag, cold like the winter and for various occasions", "bag1.jpeg", "30", "artic", TRUE);
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color,featured) VALUES ("Puma Night", "bags", "A comfortable Puma, dark like the night and for various occasions", "bag2.jpeg", "42.50", "black", TRUE);
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color,featured) VALUES ("Nike Daylight", "bags", "A comfortable Nike bag , birght like the sky and for various occasions", "bag3.jpeg", "59.99", "sky", TRUE)

INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color) VALUES ("Pale Class", "coats", "Outwear for the perfect ocasion, no matter the weather", "clothes1.jpeg", "100", "brown");
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color) VALUES ("High Top", "coats", "Outwear for the perfect ocasion, no matter the weather", "clothes2.jpeg", "80", "black");
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color) VALUES ("Royal", "coats", "Outwear for the perfect ocasion, no matter the weather", "clothes3.jpeg", "120", "royal blue");
INSERT INTO products (product_name, product_category, product_description, product_image, product_price, product_color) VALUES ("Royal House", "coats", "Outwear for the perfect ocasion, no matter the weather", "clothes4.jpeg", "125", "ice white");
