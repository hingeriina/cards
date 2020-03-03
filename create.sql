CREATE TABLE Addresses (
id int(11) NOT NULL AUTO_INCREMENT, name varchar(255) NOT NULL, street_address varchar(255) NOT NULL, zip varchar(10) NOT NULL,
city varchar(255) NOT NULL,
state varchar(255) NOT NULL,
country varchar(255) NOT NULL, PRIMARY KEY (`id`)
) ENGINE=InnoDB;
