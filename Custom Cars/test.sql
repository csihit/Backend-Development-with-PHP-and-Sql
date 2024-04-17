CREATE TABLE `customcars`.`carinfo` (`car_id` INT(20) NOT NULL AUTO_INCREMENT , `image` VARCHAR(100) NOT NULL , `model_name` VARCHAR(100) NOT NULL , `build_year` INT NOT NULL , `car_desc` VARCHAR(255) NOT NULL , PRIMARY KEY (`car_id`)) ENGINE = InnoDB;


INSERT INTO `customcars`.`carinfo` (`image`, `model_name`, `build_year`, `car_desc`) VALUES
('black.jpg', 'Ford Mustang', 1970, 'Sleek black Charger with powerful engine'),
('black_charger.jpg', 'Dodge Charger', 1970, 'Custom black Charger with upgraded features'),
('black2.jpg', 'Ford Mustang', 1972, 'Black Mustang convertible with leather interior'),
('blue mustang.jpg', 'Ford Mustang', 1970, 'Blue Mustang GT with racing stripes'),
('chrome_charger.jpg', 'Dodge Charger', 1971, 'Chrome-finished Charger with sporty design'),
('dean_impala.jpg', 'Chevy Impala', 1969, 'Chevy Impala featured in a famous TV show'),
('drag_charger2.jpg', 'Dodge Charger', 1970, 'Drag race Charger with high-performance modifications'),
('dragCharger.jpg', 'Dodge Charger', 1970, 'Custom drag racing Charger with nitrous system'),
('green1.jpg', 'Ford Mustang', 2003, 'Custom green Mustang with custom exhaust system'),
('impala.jpg', 'Chevy SS Chevelle', 1970, 'Classic Chevy SS Chevelle with original features'),
('impala_black.jpg', 'Dodge Charger', 1970, 'Black Dodge Charger with modern upgrades'),
('impala_chrome.jpg', 'Impala', 1969, 'Chrome-finished Impala with custom rims'),
('lowRider_impala.jpg', 'Impala', 1975, 'Lowrider Impala with hydraulic suspension'),
('maroon_impala.jpg', 'Impala', 1970, 'Maroon Impala with vintage appeal'),
('red.jpg', 'Ford Mustang', 1973, 'Red Mustang with aggressive styling'),
('red_mustang.jpg', 'Ford Mustang', 1975, 'Red Mustang GT with performance enhancements'),
('yellow_mustang.jpg', 'Ford Mustang', 1980, 'Yellow Mustang convertible with custom paint job'),
('yellow2.jpg', 'Ford Mustang', 1975, 'Bright yellow Mustang with aftermarket accessories');
